
<?php

$username = $_POST['username'];
$password = $_POST['password'];
$verified = 1;
//Connecting to database
require "connectingToDatabase.php";

$sql = "UPDATE sign_up_information SET verification= 1  WHERE `username` = '$username' AND`password` = '$password'";
mysqli_query($conn, $sql);
echo "<h1>No</h1>";
?>