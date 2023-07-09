<?php
include('session_m.php');

if (!isset($login_session)) {
    header('Location: managerlogin.php'); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/dashboard.css">

    <title>Admin Hub</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Admin </span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="view_food_items.php">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">view food</span>
                </a>
            </li>
            <li>
                <a href="add_food_items.php">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">add food</span>
                </a>
            </li>
            <li>
                <a href="edit_food_items.php">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">edit food items</span>
                </a>
            </li>
            <li>
                <a href="delete_food_iems.php">
                    <i class='bx bxs-group'></i>
                    <span class="text">delete food items</span>
                </a>
            </li>
            <li>
                <a href="view_order_details.php">
                    <i class='bx bxs-group'></i>
                    <span class="text">view order details</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="logout_m.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
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
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="images\2.jpg">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

            <ul class="box-info">
                <?php
                // Assuming you have established a successful database connection
                $query = "SELECT COUNT(*) AS totalstaff FROM `staff`";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $total_staffs = $row['totalstaff'];
                ?>
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3><?php echo $total_staffs; ?></h3>
                        <p>total staffs</p>
                    </span>
                </li>
                <?php
                // Assuming you have established a successful database connection
                $query = "SELECT COUNT(*) AS totalusers FROM `customer`";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $total_users = $row['totalusers'];
                ?>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3><?php echo $total_users; ?></h3>
                        <p>Total customers</p>
                    </span>
                </li>
                <?php
                // Assuming you have established a successful database connection
                $query = "SELECT COUNT(*) AS total_sales FROM `orders`";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $totalSales = $row['total_sales'];
                ?>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3><?php echo $totalSales; ?></h3>
                        <p>Total Sales</p>
                    </span>
                </li>
            </ul>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Orders</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date Order</th>
                                <th>quantitys</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Database connection
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "foodexploria";
                            $conn = mysqli_connect($servername, $username, $password, $dbname);

                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // Fetching data from database
                            $sql= "SELECT * FROM orders";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row["username"]; ?></p>
                                        </td>
                                        <td><?php echo $row["order_date"]; ?></td>
                                        <td><span class="quantity <?php echo $row["quantity"]; ?>"><?php echo $row["quantity"]; ?></span></td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No orders found";
                            }

                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
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
                    alert("Food disabled: " + status2FoodNames.join(", "));
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
            document.getElementById("download-pdf-btn").addEventListener("click", function(event) {
                event.preventDefault(); // Prevent form submission

                // Select the table element
                var table = document.querySelector("table");

                // Generate the PDF
                html2pdf()
                    .set({
                        filename: 'food_items.pdf',
                        html2canvas: {
                            scale: 2
                        }
                    })
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
