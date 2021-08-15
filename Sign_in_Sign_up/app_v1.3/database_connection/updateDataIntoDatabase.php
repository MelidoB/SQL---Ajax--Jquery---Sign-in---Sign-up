
<?php


//Connecting to database
require "connectingToDatabase.php";
$username = mysqli_real_escape_string($conn,$_POST['username_sign_up']);
$password = mysqli_real_escape_string($conn,$_POST['password_sign_up']);

$sql = "UPDATE sign_up_information SET verification = 1  WHERE `username` = '$username' AND `password` = '$password'";
mysqli_query($conn, $sql);
?>