<?php 
session_start();
include "runSQL.php";

$name = $_POST['name'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$coment = $_POST['coment'];
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_FILES["fileToUpload"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    
    $uploadOk = 1;
  } else {
    
    $uploadOk = 0;
  }
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
$sql = "INSERT INTO profile(user_image, name, age, birthday, phone, email, coment) VALUES('$target_file', '$name', '$age', '$birthday', '$phone', '$email', '$coment')";
$result = mysqli_query($conn,$sql);
        echo "<script>alert('data successfully updated.');</script>";
        echo "<meta http-equiv='refresh' content='0; url=profile.php'/>";
    
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

?>
