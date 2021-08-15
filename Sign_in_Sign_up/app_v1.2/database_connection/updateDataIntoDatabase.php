
<?php

$username = $_POST['username_sign_up'];
$password = $_POST['password_sign_up'];
//Connecting to database
require "connectingToDatabase.php";

$sql = "UPDATE sign_up_information SET verification = 1  WHERE `username` = '$username' AND `password` = '$password'";
mysqli_query($conn, $sql);
?>