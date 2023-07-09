<?php
include('session_s.php');

// Redirect to staff control panel if not logged in
if (!isset($login_session)) {
    header('Location: staffcontrolpanel.php');
    exit();
}

// Initialize the error kkkkkk
$error = '';

// Check if form is submitted
if (isset($_POST['submit'])) {
    $foodID = $_POST['food_id'];
    $status = $_POST['status'];

    // Retrieve the food name for display
    $foodNameQuery = "SELECT name FROM food WHERE F_ID = '$foodID'";
    $foodNameResult = mysqli_query($conn, $foodNameQuery);
    $foodNameRow = mysqli_fetch_assoc($foodNameResult);
    $foodName = $foodNameRow['name'];

    // Update food status in the database
    $updateQuery = "UPDATE food SET status = '$status' WHERE F_ID = '$foodID'";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        $success_msg = "Food status updated successfully for: " . $foodName;
    } else {
        $error = "Error in updating food status. Please try again.";
    }
}

// Retrieve all food items
$query = "SELECT * FROM food";
$result = mysqli_query($conn, $query);

?>

<!-- Rest of the code remains the same -->


<!DOCTYPE html>
<html>
<head>
    <title>Manage Canteen | College Canteen</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Manage Canteen</h2>

        <?php if (mysqli_num_rows($result) > 0) { ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Food ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['F_ID']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['status'] == 1 ? 'Enabled' : 'Disabled'; ?></td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="food_id" value="<?php echo $row['F_ID']; ?>">
                                    <input type="hidden" name="status" value="<?php echo $row['status'] == 1 ? 2 : 1; ?>">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Toggle Status">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>No food items found.</p>
        <?php } ?>

        <p><?php echo $error; ?></p>
        <p><?php echo isset($success_msg) ? $success_msg : ''; ?></p>

        <a href="staffcontrolpanel.php" class="btn btn-secondary">Go back to Admin panel</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
