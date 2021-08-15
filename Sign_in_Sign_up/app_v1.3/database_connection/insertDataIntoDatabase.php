
<?php


//Connecting to database
require "connectingToDatabase.php";
$username = mysqli_real_escape_string($conn,$_POST['username_sign_up']);
$password = mysqli_real_escape_string($conn,$_POST['password_sign_up']);
$verification = 0;

$sqli = "SELECT `username`, `password`, `verification` FROM `sign_up_information` WHERE `username` = '$username'";
$result = mysqli_query($conn, $sqli);
$count = mysqli_num_rows($result);

if($count == 0){
    $sql = "INSERT INTO `sign_up_information`(`username`, `password`, `verification`) VALUES ('$username', '$password', '$verification')";
    mysqli_query($conn, $sql);
    echo "Registered correctly";
}
else{
    echo "Username already exist";
}
?>