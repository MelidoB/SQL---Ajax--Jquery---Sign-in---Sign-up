
<?php

$username = $_POST['username_sign_up'];
$password = $_POST['password_sign_up'];
$verification = 0;
//Connecting to database
require "connectingToDatabase.php";

$sqli = "SELECT `username`, `password`, `verification` FROM `sign_up_information` WHERE `username` = '$username'";
$result = mysqli_query($conn, $sqli);
$count = mysqli_num_rows($result);

if($count == 0){
    $sql = "INSERT INTO `sign_up_information`(`username`, `password`, `verification`) VALUES ('$username', '$password', '$verification')";
    mysqli_query($conn, $sql);
    
}
else{
    echo "Username already exist";
}
?>