<?php
include 'connection.php';
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$errors=array();

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
    $errors[0]="File is not an image.";
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
  $errors[1]=" Sorry, file already exists.";

}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
  $errors[2]="Sorry, your file is too large.";
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  $errors[3]="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";  
  $errors=implode(" ", $errors);
  echo $errors;
  $errors=base64_encode($errors);
  header("location:home.php?errors=".urlencode($errors));
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    $sql = "UPDATE signups SET Image='$target_file' WHERE Email='".$_SESSION['email']."'";
    
    if ($con->query($sql) === TRUE) {
    echo $target_file;
}
else{
  echo $con->error;
}
header("location:home.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>