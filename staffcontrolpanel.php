<?php
include('session_s.php');

if (!isset($login_session)) {
    header('Location: stafflogin.php'); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Staff Control Panel | College Canteen</title>
</head>
<link rel="stylesheet" type="text/css" href="css/myrestaurant.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<body>
    <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#myNavbar">
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
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?>
                        </a></li>
                    <li class="active"> <a href="stafflogin.php">STAFF CONTROL PANEL</a></li>
                    <li><a href="logout_s.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>Hello Staff!</h1>
            <p>Manage all from here</p>
        </div>

        <div class="col-xs-3" style="text-align: center;">
            <div class="list-group">
                <a href="manage_canteen.php" class="list-group-item">Manage Canteen Status</a>

            </div>
        </div>
    </div>

    <br> <br> <br> <br> <br> <br> <br> <br>
    <?php include('footer.php'); ?>
</body>
</html>
