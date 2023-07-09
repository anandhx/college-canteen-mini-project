<?php
$file = 'data.json';
$data = file_get_contents($file);
$jsonData = json_decode($data, true);

// Access the JSON data
$name = $jsonData['name'];
$age = $jsonData['age'];
$email = $jsonData['email'];

// Output the data
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Email: " . $email . "<br>";
?>
