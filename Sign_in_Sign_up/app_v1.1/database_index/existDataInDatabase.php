
<?php

$username = $_POST['username'];
$password = $_POST['password'];
$verification = 0;
//Connecting to database
require "connectingToDatabase.php";

$sqli = "SELECT `username`, `password`, `verification` FROM `sign_up_information` WHERE `username` = '$username'";
$result = mysqli_query($conn, $sqli);
$count = mysqli_num_rows($result);

if($count == 0){
    echo "USERNAME DOES NOT EXIST";
}
else{
    echo "Information Match";
}
?>