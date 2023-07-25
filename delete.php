<?php 
session_start();
include "runSQL.php";

$user_id = $_POST['user_id'];

$sql="DELETE FROM profile WHERE user_id = '$user_id'";
$result = mysqli_query($conn,$sql);
echo "<script>alert('data successfully delete.');</script>";
        echo "<meta http-equiv='refresh' content='0; url=profile.php'/>";



?>
