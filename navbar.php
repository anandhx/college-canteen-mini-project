 <!-- ======= Top Bar ======= -->
 <head><!-- Vendor CSS Files -->
  <link rel="stylesheet" type = "text/css" href ="css/ourteam.css">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet"></head>
 <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+91 7592046959</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-fri: 10AM - 4PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">mal</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">CoLleGE C4ntEeN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="images/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <?php
if (isset($_SESSION['login_user1'])) {
  ?>
   <ul>
        <li><a class="nav-link scrollto"  href="index.php"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
        <li><a class="nav-link scrollto"  href="dashboard.php">manager panel</a></li>
        <li><a class="nav-link scrollto"  href="logout_m.php">logout</a></li>
  </ul>
  <?php
} else if (isset($_SESSION['login_user2'])) {
  ?>
  <ul>
      <li><a href="index.php"><span class="nav-link scrollto"></span> Welcome  <?php echo $_SESSION['login_user2']; ?> </a></li>
      <li><a href="foodlist.php"><span class="nav-link scrollto"></span> Food Zone </a></li>
      <li><a href="cart.php"><span class="nav-link scrollto"></span> Cart
              (<?php
              if (isset($_SESSION["cart"])) {
                  $count = count($_SESSION["cart"]);
                  echo "$count";
              } else
                  echo "0";
              ?>)
          </a></li>
      <li><a href="logout_u.php"><span class="nav-link scrollto"></span> Log Out </a></li>
  </ul>
  <?php
} else if (isset($_SESSION['login_user3'])) {
  ?>
  <ul>
      <li><a href="index.php"><span class="nav-link scrollto"></span> Welcome <?php echo $_SESSION['login_user3']; ?> </a></li>
      <li><a href="staffcontrolpanel.php">staff control panel</a></li>
      <li><a href="logout_s.php"><span class="nav-link scrollto"></span> Log Out </a></li>
  </ul>
  <?php
}

else {

  ?>

      <ul>
        <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">user login</a></li>
              <li><a href="#">Admin Login</a></li>
              <li><a href="#">staff login</a></li>

            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>sign up</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">user signup</a></li>
            </ul>
      
        <i class="bi bi-list mobile-nav-toggle"></i>
          </ul>

<?php
}
?>


      </nav><!-- .navbar -->
    
    </div>
  </header>