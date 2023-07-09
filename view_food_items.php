<?php
include('session_m.php');

if(!isset($login_session)){
  header('Location: managerlogin.php'); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login | College Canteen</title>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href='node_modules\boxicons\css\boxicons.min.css' rel='stylesheet'>
  <link href='node_modules\boxicons\css\animations.css' rel='stylesheet'>
  <link href='node_modules\boxicons\css\transformations.css' rel='stylesheet'>
  
  <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  -->
  <link rel="stylesheet" href="css/dashboard.css">
  <style>
    .highlight {
      background-color: yellow;
    }
  </style>
</head>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
      <i class='bx bxs-smile'></i>
      <span class="text">Admin </span>
    </a>
    <ul class="side-menu top">
  <li>
    <a href="dashboard.php">
      <i class='bx bxs-dashboard'></i>
      <span class="text">Dashboard</span>
    </a>
  </li>
  <li class="active">
    <a href="view_food_items.php">
      <i class='bx bx-circle'></i>
      <span class="text">View Food</span>
    </a>
  </li>
  <li>
    <a href="add_food_items.php">
      <i class='bx bx-plus'></i>
      <span class="text">Add Food</span>
    </a>
  </li>
  <li>
    <a href="edit_food_items.php">
      <i class='bx bxs-edit'></i>
      <span class="text">Edit Food Items</span>
    </a>
  </li>
  <li>
    <a href="delete_food_items.php">
      <i class='bx bx-trash'></i>
      <span class="text">Delete Food Items</span>
    </a>
  </li>
  <li>
    <a href="view_order_details.php">
      <i class='bx bx-show'></i>
      <span class="text">View Order Details</span>
    </a>
  </li>
</ul>

    <ul class="side-menu">
      <li>
        <a href="#">
          <i class='bx bxs-cog' ></i>
          <span class="text">Settings</span>
        </a>
      </li>
      <li>
        <a href="logout_m.php" class="logout">
          <i class='bx bxs-log-out-circle' ></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->

  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu' ></i>
      <a href="#" class="nav-link">Categories</a>
      <form id="search-form" action="#">
        <div class="form-input">
          <input id="search-input" type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>
      <a href="#" class="notification">
  <i class='bx bxs-bell bx-tada'></i>
  <span id="notification-count" class="num">0</span>
</a>

      <a href="#" class="profile">
        <img src="img/people.png">
      </a>
    </nav>
    <!-- NAVBAR -->

    <main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">view food</a>
						</li>
					</ul>
				</div>
				<a href="#" id="download-pdf-btn" class="btn-download">
  <i class='bx bxs-cloud-download'></i>
  <span class="text">Download PDF</span>
</a>

			</div>
      

      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Available Foods</h3>
            <i class='bx bx-search' ></i>
            <i class='bx bx-filter' ></i>
          </div>

          <?php
// Storing Session
$sql = "SELECT * FROM FOOD ORDER BY F_ID";
$result = mysqli_query($conn, $sql);
$totalStatus2Foods = 0;
$status2FoodNames = []; // Array to store food names with status = 2
if (mysqli_num_rows($result) > 0) {
?>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Food Name</th>
      <th>Price</th>
    </tr>
  </thead>

  <?php
  // OUTPUT DATA OF EACH ROW
  while($row = mysqli_fetch_assoc($result)){
    ?>
    <tbody>
      <tr>
        <td><?php echo $row["F_ID"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["price"]; ?></td>
      </tr>
    </tbody>
    <?php
    // Calculate the total number of foods with status = 2
    if ($row["status"] == 2) {
      $totalStatus2Foods++;
      $status2FoodNames[] = $row["name"]; // Add food name to the array
    }
  }
  ?>
          </table>
          <br>

          <?php } else { ?>

          <h4><center>0 RESULTS</center></h4>

          <?php } ?>
          

        </div>
      </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
  // Fetch the status and calculate the total number of foods with status = 2
  var status2FoodsCount = <?php echo $totalStatus2Foods; ?>;
  var status2FoodNames = <?php echo json_encode($status2FoodNames); ?>;

  // Update the notification count
  var notificationCountElement = document.getElementById("notification-count");
  notificationCountElement.innerHTML = status2FoodsCount.toString();

  // Handle notification button click event
  var notificationButton = document.querySelector(".notification");
  notificationButton.addEventListener("click", function(event) {
    event.preventDefault();

    if (status2FoodsCount > 0) {
      alert("Food disabled : " + status2FoodNames.join(", "));
    }
  });
</script>
    <script>
      function highlightSearchTerm() {
        var searchTerm = window.location.hash.substr(1);
        if (searchTerm !== "") {
          var regex = new RegExp("(" + searchTerm + ")", "gi");
          var content = document.body.innerHTML;
          var highlightedContent = content.replace(regex, "<span class='highlight'>$1</span>");
          document.body.innerHTML = highlightedContent;
        }
      }

      // Handle search form submission
      document.getElementById("search-form").addEventListener("submit", function(event) {
        window.location.reload();
        event.preventDefault(); // Prevent form submission
        var searchInput = document.getElementById("search-input").value;
        
        window.location.hash = searchInput;
        highlightSearchTerm();
      });
      document.getElementById("download-pdf-btn").addEventListener("click", function (event) {
    event.preventDefault(); // Prevent form submission

    // Select the table element
    var table = document.querySelector("table");

    // Generate the PDF
    html2pdf()
      .set({ filename: 'food_items.pdf', html2canvas: { scale: 2 } })
      .from(table)
      .save();
  });
      window.onhashchange = highlightSearchTerm;
      window.onload = highlightSearchTerm;
    </script>
     <script src="node_modules\boxicons\dist\boxicons.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
