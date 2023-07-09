<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title>Admin Login | College Canteen </title>
  </head>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href='node_modules\boxicons\css\boxicons.min.css' rel='stylesheet'>
  <link href='node_modules\boxicons\css\animations.css' rel='stylesheet'>
  <link href='node_modules\boxicons\css\transformations.css' rel='stylesheet'>
 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/dashboard.css">
  <style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  a {
    color: #337ab7;
    text-decoration: none;
  }
</style>

 <style>
    .highlight {
      background-color: yellow;
    }
  </style>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script>
  function getImageName(input) {
    if (input.files && input.files[0]) {
      var file = input.files[0];
      var fileName = file.name;
      document.getElementById('images_path').value = "images/" + fileName;
    }
  }
</script>
  <script type="text/javascript">
    function display_alert()
    {
      alert("Data Updated Successfully...!!!");
    }
  </script>

<body >
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
  <li>
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
  <li class="active">
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
							<a class="active" href="#">edit food items</a>
						</li>
					</ul>
				</div>
				<a href="#" id="download-pdf-btn" class="btn-download">
  <i class='bx bxs-cloud-download'></i>
  <span class="text">Download PDF</span>
</a>

  
      </div>



    <?php
   
 

    if (isset($_GET['submit'])) {
    $F_ID = $_GET['dfid'];
    $name = $_GET['dname'];
    $price = $_GET['dprice'];
    $description = $_GET['ddescription'];
    $images_path = $_GET['images_path'];


    $query = mysqli_query($conn, "UPDATE food set
    name='$name', price='$price',
    description='$description', images_path='$images_path' where F_ID='$F_ID'");
    }
    $query = mysqli_query($conn, "SELECT * FROM food");
$index = 1;
?>

<table>
  <tbody>
    <th>select food</th>
    <?php
    while ($row = mysqli_fetch_array($query)) {
      $foodName = $row['name'];
    ?>
      
      <tr>
        <td><a href='edit_food_items.php?update=<?php echo $row['F_ID']; ?>'><?php echo $foodName; ?></a></td>
      
      </tr>
      
      
    <?php
      $index++;
    }
    ?>
  </tbody>
</table>

 


<?php
if (isset($_GET['update'])) {
  $update = $_GET['update'];
  $query1 = mysqli_query($conn, "SELECT * FROM food WHERE F_ID=$update");
  while ($row1 = mysqli_fetch_array($query1)) {
    ?>
    <div class="container">
      <div class="row">
        <form action="edit_food_items.php" method="GET">
          <div class="form-group">
            <input class="input" type="hidden" name="dfid" value="<?php echo $row1['F_ID']; ?>" />
          </div>
          <div class="form-group">
            <label for="dname"><span class="text-danger" style="margin-right: 5px;">*</span> Food Name: </label>
            <input type="text" class="form-control" id="dname" name="dname" value="<?php echo $row1['name']; ?>" placeholder="Your Food name" required="">
          </div>
          <div class="form-group">
            <label for="dprice"><span class="text-danger" style="margin-right: 5px;">*</span> Food Price: </label>
            <input type="text" class="form-control" id="dprice" name="dprice" value="<?php echo $row1['price']; ?>" placeholder="Your Food Price (INR)" required="">
          </div>
          <div class="form-group">
            <label for="ddescription"><span class="text-danger" style="margin-right: 5px;">*</span> Food Description: </label>
            <input type="text" class="form-control" id="ddescription" name="ddescription" value="<?php echo $row1['description']; ?>" placeholder="Your Food Description" required="">
          </div>
          <div class="form-group">
            <label for="image_upload"><span class="text-danger" style="margin-right: 5px;">*</span> Image Upload: </label>
            <input type="file" class="form-control" id="image_upload" name="image_upload" accept="image/*" onchange="getImageName(this)" required>
          </div>
          <input type="text" class="form-control" id="images_path" name="images_path" placeholder="Your Food Image Path" required>
          <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box">Update</button>
          </div>
        </form>
      </div>
    </div>
    <?php
  }
}
?>

      
  </div>




</div>


<?php
mysqli_close($conn);
?>
</div>
</div><script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
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