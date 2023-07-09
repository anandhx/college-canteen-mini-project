<?php

// Fetch disabled food items
$sql = "SELECT name FROM FOOD WHERE status = 2";
$result = mysqli_query($conn, $sql);

$disabledFoods = [];
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $disabledFoods[] = $row["name"];
  }
}
?>

<script>
  // Update the notification count
  var status2FoodsCount = <?php echo count($disabledFoods); ?>;
  var notificationCountElement = document.getElementById("notification-count");
  notificationCountElement.innerHTML = status2FoodsCount.toString();

  // Handle notification button click event
  var notificationButton = document.querySelector(".notification");
  notificationButton.addEventListener("click", function(event) {
    event.preventDefault();

    if (status2FoodsCount > 0) {
      var disabledFoodNames = <?php echo json_encode($disabledFoods); ?>;
      var message = "Food Disabled: " + disabledFoodNames.join(", ");
      alert(message);
    }
  });
</script>
