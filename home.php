<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title> CHEST X_RAY </title>
    <link rel="stylesheet" href="stylehome.css" />
  </head>

  <body>
    
    <div class="back">

      <img class="img" src="images/OIP.jpg">
      <h1 class="headline">  NO NEED FOR A DOCTOR  </h1>
    
      <p class="text"> YOU CAN EXAMIN YOUR X_RAY NOW  AT ANYWHERE <br> <br>JUST UPLOAD YOUR PHOTO AND SEE THE RESULT<br> 
        <br>DONT MISS OUR CHAT FOR HELP 
      </p>
      
          <section>

            <button  type="button" class="show-modal">
              <span class="button__icon">
                <i class="bx bx-cloud-upload"></i>
               
                </span>
              <span class="button__text"> UPLOAD  X_RAY  PHOTO</span>
              
            </button>
        
            
            <span class="overlay"></span>
      
            <div class="modal-box">
              <i class="fa-regular fa-circle-check"></i>
              <div class="container">
             
                <input type="file" id="file" accept="image/*" hidden>
                <div class="img-area" data-img="">
                  <i class='bx bxs-cloud-upload icon'></i>
      
              <h2>Upload Image</h2>
              <p>Image size must be less than <span>2MB</span></p>
                </div>
      
              <div class="buttons">
                <button class="close-btn">Close</button>
                <button class="select-image">select</button>
              </div>
            </div>
          </section>
        
    </div>  
      
  
  

    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="images/logo.webp" alt=""></i>ORYGHEN
      </div>

      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
        <button type="button" class="chat-sidebar-profile-toggle">
          <img src="images/mess.png">
      </button>
      <ul class="chat-sidebar-profile-dropdown">
          <li><a href="#"><i class="ri-user-line"></i> Profile</a></li>
          <li><a href="#"><i class="ri-logout-box-line"></i> Logout</a></li>
      </ul>
        <img src="images/profile.jpg" alt="" class="profile" />
       
      </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_dahsboard"></div>
          <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
          <!-- start -->
          <li class="item">
            <a href="home.php" class="nav_link">
            
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">  Home </a></span>
            </a>
              
            
          </li>
          <!-- end -->

          <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
          <!-- start -->
          <li class="item">
            <a href="chat.php" class="nav_link">
            
              <span class="navlink_icon">
                <i class="bx bx-group"></i>
              </span>
              <span class="navlink"> Chat </span>
            </a>
             
            
      
          <!-- end -->
        </ul>

        <ul class="menu_items">
          <div class="menu_title menu_editor"></div>
          <!-- duplicate these li tag if you want to add or remove navlink only -->
          <!-- Start -->
          <li class="item">
            <a href="profile.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-user-circle"></i>
              </span>
              <span class="navlink">Profile</span>
            </a>
          </li>
          <!-- End -->

          
          
          <li class="item">
            <a href="about.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-globe"></i>
              </span>
              <span class="navlink"> About  </span>
            </a>
          </li>
        </ul>
        <ul class="menu_items">
          <div class="menu_title menu_setting"></div>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-lock"></i>
              </span>
              <span class="navlink">security</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cog"></i>
              </span>
              <span class="navlink">Setting</span>
            </a>
          </li>
          <li class="item">
            <a href="log.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-power-off"></i>
              </span>
              <span class="navlink">Logout</span>
            </a>
          </li>
        </ul>

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <!-- JavaScript -->
    <script src="scripthome.js"></script>
    <script src="sc.js"></script>
    
  </body>
</html>
