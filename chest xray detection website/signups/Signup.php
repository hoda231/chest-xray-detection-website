<?php
require_once __DIR__ . '/data.php';


// Add a new patient to the database
function database_add_patient($name, $email, $birthdate, $gender ,$password)
{
    $conn = database_connect();
    $stmt = mysqli_prepare($conn, 'INSERT INTO patients (Patient_Name, Patient_Email,  Patient_Birthdate, Patient_Gender,Patient_Pass)
        VALUES (?, ?, ?, ?, ?)');
    mysqli_stmt_bind_param($stmt, 'sssss', $name, $email,  $birthdate, $gender, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Patient_Name"];
    $email = $_POST["Patient_Email"];
    $birthdate = $_POST["Patient_Birthdate"];
    $gender = $_POST["Patient_Gender"];
    $password = $_POST["Patient_Pass"];
   
    
    

    // Call the function to add the patient to the database
    database_add_patient($name, $email, $birthdate, $gender,$password );
    header('location: ../logins/Login_Patient.php');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Patient Signup Page</title>
    <link rel="stylesheet" href="Signup_patient.css">
</head>

<body>
<div class="back">
<img class="img" src="images/OIP.jpg">

    
    <form action="../signups/signup.php" method="post">
    <h1>Patient Signup</h1>
        <label for="Patient_Name">Name:</label>
        <input type="text" id="Patient_Name" name="Patient_Name" required>

        <label for="Patient_Email">Email:</label>
        <input type="email" id="Patient_Email" name="Patient_Email" required>

       

        <label for="Patient_Birthdate">Birth date:</label>
        <input type="date" id="Patient_Birthdate" name="Patient_Birthdate" required>
		<br><br>

        <label>Gender:</label>
		
        <select name="Patient_Gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
		<br><br>

         <label for="Patient_Pass">Password:</label>
        <input type="password" id="Patient_Pass" name="Patient_Pass" required>

        <input type="submit" value="Sign Up">
    </form>
</div>
</body>

</html>
