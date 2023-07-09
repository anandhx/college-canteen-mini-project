<?php
session_start();
?>

<html>

  <head>
    <title> About | College Canteen </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
  <link rel="stylesheet" type = "text/css" href ="css/ourteam.css">
  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">College Canteen</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if (isset($_SESSION['login_user1'])) {
  ?>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
      <li><a href="myrestaurant.php">Admin panel</a></li>
      <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
  </ul>
  <?php
} else if (isset($_SESSION['login_user2'])) {
  ?>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
      <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
      <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if (isset($_SESSION["cart"])) {
                  $count = count($_SESSION["cart"]);
                  echo "$count";
              } else
                  echo "0";
              ?>)
          </a></li>
      <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
  </ul>
  <?php
} else if (isset($_SESSION['login_user3'])) {
  ?>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user3']; ?> </a></li>
      <li><a href="staff_control_panel.php">STAFF CONTROL PANEL</a></li>
      <li><a href="logout_s.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
  </ul>
  <?php
}

else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Admin Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    
    <h1 align="center"> O U R T E A M </h1>
        
    <div class="main">
        <div class="profile-card">
            <div class="img">
                <img src="https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg">
            </div>
            <div class="caption">
                <h3>Vin Diesel</h3>
                <p>Senior App Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="images\anandhprofile.jpg">
            </div>
            <div class="caption">
                <h3>Anandhx</h3>
                <p>Developer</p>
                <div class="social-links">
                    <a href="wa.link/ta6c71"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/mind________freezer"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/anandhx"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="images\anandhprofile.jpg">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 line"><hr></div>

    <div class="col-md-10" style="float: none; margin: 0 auto;">
  <div class="paragraph2">
    <h1><center>HEALTHY FOOD </center></h1>
    <p><br>
    <div class="goldcolor">
      <h2>1. Nutrient-rich ingredients.</h2>
    </div>
    <h3>Select high-quality ingredients that are packed with essential nutrients to promote health and well-being.</h3> 
    </p>
    <p><br>
    <div class="goldcolor">
      <h2>2. Balanced and wholesome meals.</h2>
    </div>
    <h3>Create meal plans that provide a balance of proteins, carbohydrates, and fats, along with a variety of fruits and vegetables.</h3> 
    </p>
    <p><br>
    <div class="goldcolor">
      <h2>3. Collaboration with nutritionists.</h2>
    </div>
    <h3>Work closely with nutrition experts to ensure that our food offerings meet the highest standards of health and nutrition.</h3>
    </p>
    <p><br>
    <div class="goldcolor">
      <h2>4. Emphasis on natural and organic ingredients.</h2>
    </div>
    <h3>Source organic and natural ingredients to minimize the use of additives and preservatives in our food preparations.</h3>
    </p>
    <p><br>
    <div class="goldcolor">
      <h2>5. Customized meal plans.</h2>
    </div>
    <h3>Tailor meal plans based on individual dietary preferences, including vegan, vegetarian, gluten-free, and other special dietary needs.</h3>
    </p>
  </div>
</div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
    <h1><strong> ABOUT US </strong></h1>
    <h3>
      <p>
        The purpose of <font color="green"><strong>College Canteen</strong></font> is to automate the existing manual system by the help of computerized equipments and full-fledged computer software, fulfilling their requirements, so that their valuable data/information can be stored for a longer period with easy accessing and manipulation of the same. The required software and hardware are easily available and easy to work with.
      </p>
      <p>
        <font color="green"><strong>College Canteen</strong></font>, as described above, can lead to <font color="green"><strong>error free, secure, reliable and fast management system.</strong></font> It can assist the user to concentrate on their other activities rather to concentrate on the record keeping. Thus it will help organization in better utilization of resources. The organization can maintain computerized records without redundant entries. That means that one need not be distracted by information that is not relevant, while being able to reach the information. 
      </p>
      <p>
        <font color="green"><strong>Basically the project describes how to manage for good performance and better services for the clients.</strong></font> 
      </p>
    </h3>  
    </div>

    <div class="col-xs-12 line"><hr></div>
  <div class="paragraph3">
    <div class="missionbox">
      <div class="missionfont">
      <strong>Serving tasty meals</strong>
      
    </div>
     
    </div>
    
  </div>    
  
  <div class="paragraph1">

    <p><br>
    <h2><strong><div class="darkgoldcolor">Tickling your taste buds with humor.</div></strong></h2>
    <h3>Our team spices up the dining experience by sprinkling funny anecdotes and puns about healthy food. We believe laughter is the best sauce!</h3>
    </p>
    <p><br>
      <h2><strong><div class="darkgoldcolor">Serving up smiles with each dish.</div></strong></h2>
      <h3>We aim to make your dining moments joyful by sharing hilarious food-related jokes and amusing trivia. Good food and good laughs go hand in hand!</h3>
    </p>
  </div>
         </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> College Canteen 2017 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>