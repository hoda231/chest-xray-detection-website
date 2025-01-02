<?php  
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {



if(isset($_POST['name']) && 
   isset($_POST['email'])){

    include "../data.php";
    $name = $_POST["Patient_Name"];
    $email = $_POST["Patient_Email"];
    $birthdate = $_POST["Patient_Birthdate"];
    $gender = $_POST["Patient_Gender"];
    $password = $_POST["Patient_Pass"];

    

    if (empty($name)) {
    	$em = "Full name is required";
    	header("Location: ../edit.php?error=$em");
	    exit;
    }else if(empty($email)){
    	$em = "User name is required";
    	header("Location: ../edit.php?error=$em");
	    exit;
    }else {

      if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
        
         $img_name = $_FILES['pp']['name'];
         $tmp_name = $_FILES['pp']['tmp_name'];
         $error = $_FILES['pp']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../upload/'.$new_img_name;
               // Delete old profile pic
               $old_pp_des = "../upload/$old_pp";
               if(unlink($old_pp_des)){
               	  // just deleted
               	  move_uploaded_file($tmp_name, $img_upload_path);
               }else {
                  // error or already deleted
               	  move_uploaded_file($tmp_name, $img_upload_path);
               }
               

               // update the Database
               $sql = "UPDATE users 
                       SET name=?, username=?, pp=?
                       WHERE email=?";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$name, $email, $new_img_name]);
               $_SESSION['Patient_Name'] = $name;
               header("Location: ../edit.php?success=Your account has been updated successfully");
                exit;
            }else {
               $em = "You can't upload files of this type";
               header("Location: ../edit.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "unknown error occurred!";
            header("Location: ../edit.php?error=$em&$data");
            exit;
         }

        
      }else {
       	$sql = "UPDATE patients 
       	        SET fname=?, username=?
                WHERE id=?";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$fname, $uname, $id]);

       	header("Location: ../edit.php?success=Your account has been updated successfully");
   	    exit;
      }
    }


}else {
	header("Location: ../edit.php?error=error");
	exit;
}


}else {
	header("Location: login.php");
	exit;
} 

