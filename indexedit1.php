
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Home | College Canteen </title>
  <meta content="" name="description">
  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <meta content="" name="keywords">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive navbar</title>
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body class="mobile">
    <nav>
        <div class="container nav-wrapper">
            <div class="brand">
                
                <span><strong>College Canteen</strong></span>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-list">
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li><a href="contactus.php">Contact Us</a></li>

            </ul>
            <?php
if (isset($_SESSION['login_user1'])) {
  ?>
  <ul class="nav-list">
      <li><a href="dashboard.php">Admin panel</a></li>
      <li><a href="logout_m.php"> Log Out </a></li>
  </ul>
  <?php
} else if (isset($_SESSION['login_user2'])) {
  ?>
  <ul class="nav-list">
      <li><a href="foodlist.php"> Food Zone </a></li>
      <li><a href="cart.php"> Cart
              (<?php
              if (isset($_SESSION["cart"])) {
                  $count = count($_SESSION["cart"]);
                  echo "$count";
              } else
                  echo "0";
              ?>)
          </a></li>
      <li><a href="logout_u.php">Log Out </a></li>
  </ul>
  <?php
} else if (isset($_SESSION['login_user3'])) {
  ?>
  <ul class="nav-list">
      <li><a href="staffcontrolpanel.php">STAFF CONTROL PANEL</a></li>
      <li><a href="logout_s.php"> Log Out </a></li>
  </ul>
  <?php
}

else {

  ?>

<ul class="nav-list">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Admin Login</a></li>
              <li> <a href="stafflogin.php"> staff Login m </a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>
    </nav>
    <main>
    <div >
    <div >
     <h1>Hi Guest,<br> Welcome to <span class="edit"> College Canteen </span></h1>
     <br>
   <p>Kindly LOGIN to continue.</p>
    </div>
    </div>

    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
          <div class="panel panel-primary">
        <div class="panel-heading"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="customersignup.php">Create a new account.</a></label>

        </form>
        </div>     
      </div>      
    </div>
    </div>

    </main>
    
    <script src="js/navbar.js"></script>
</body>

</html>