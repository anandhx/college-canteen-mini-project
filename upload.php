<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['image_upload']) && $_FILES['image_upload']['error'] === UPLOAD_ERR_OK) {
    $tempPath = $_FILES['image_upload']['tmp_name'];
    $fileName = $_FILES['image_upload']['name'];
    $destination = 'images/' . $fileName;

    if (move_uploaded_file($tempPath, $destination)) {
      $imagePath = 'images/' . $fileName;
      echo "Image uploaded successfully. Image path: " . $imagePath;
    } else {
      echo "Error moving the uploaded file.";
    }
  } else {
    echo "Error uploading the file.";
  }
}
?>
