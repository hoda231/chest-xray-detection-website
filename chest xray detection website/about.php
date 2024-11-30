<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title> About </title>
    
    <link rel="stylesheet" href="syleabout.css" />
    
  </head>

  <body>
    
    <div class="back">

      
      
      <div class="wrapper">
        <header>About our diseses</header>
        <input type="radio" name="slider" checked id="home">
        <input type="radio" name="slider" id="blog">
        <input type="radio" name="slider" id="code">
        
        <nav>
          <label for="home" class="home"><i class="fas fa-home"></i>COVID-19</label>
          <label for="blog" class="blog"><i class="fas fa-blog"></i>Pneumonia</label>
          <label for="code" class="code"><i class="fas fa-code"></i>Tuberculosis</label>
          
          <div class="slider"></div>
        </nav>
        <section>
          <div class="content content-1">
            <div class="title">This is a Home content</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero aspernatur nobis provident dolores molestias quia quisquam laborum, inventore quis, distinctioa, fugit repudiandae delectus sunt ipsam! Odio illo at quia doloremque fugit iops, asperiores? Consectetur esse officia labore voluptatum blanditiis molestias dic voluptas est, minima unde sequi, praesentium dicta suscipit quisquam iure sed, nemo.</p>
          </div>
          <div class="content content-2">
            <div class="title">This is a Blog content</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit amet. Possimus doloris nesciunt mollitia culpa sint itaque, vitae praesentium assumenda suscipit fugit doloremque adipisci doloribus, sequi facere itaque cumque accusamus, quam molestias sed provident quibusdam nam deleniti. Autem eaque aut impedit eo nobis quia, eos sequi tempore! Facere ex repellendus, laboriosam perferendise. Enim quis illo harum, exercitationem nam totam fugit omnis natus quam totam, repudiandae dolor laborum! Commodi?</p>
          </div>
          <div class="content content-3">
            <div class="title">This is a Code content</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, debitis nesciunt! Consectetur officiis, libero nobis dolorem pariatur quisquam temporibus. Labore quaerat neque facere itaque laudantium odit veniam consectetur numquam delectus aspernatur, perferendis repellat illo sequi excepturi quos ipsam aliquid est consequuntur.</p>
          </div>
          <div class="content content-4">
            <div class="title">This is a Help content</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit null itaq, odio repellat asperiores vel voluptatem magnam praesentium, eveniet iure ab facere officiis. Quod sequi vel, rem quam provident soluta nihil, eos. Illo oditu omnis cumque praesentium voluptate maxime voluptatibus facilis nulla ipsam quidem mollitia! Veniam, fuga, possimus. Commodi, fugiat aut ut quorioms stu necessitatibus, cumque laborum rem provident tenetur.</p>
          </div>
          <div class="content content-5">
            <div class="title">This is a About content</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur officia sequi aliquam. Voluptatem distinctio nemo culpa veritatis nostrum fugit rem adipisci ea ipsam, non veniam ut aspernatur aperiam assumenda quis esse soluta vitae, placeat quasi. Iste dolorum asperiores hic impedit nesciunt atqu, officia magnam commodi iusto aliquid eaque, libero.</p>
          </div>
        </section>
      </div>
    
    
          
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
        
        <i class="bi bi-grid"></i>
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
            
              <a href="home.php" class="nav_link "> 
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">  Home </span>
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
            <a href="#" class="nav_link">
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
              <span class="navlink"> About </span>
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
    
    <script src="scriptabout.js"></script>
    
  </body>
</html>
