
<?php


//Connecting to database
require "connectingToDatabase.php";
$username = mysqli_real_escape_string($conn,$_POST['username_sign_in']);
$password = mysqli_real_escape_string($conn,$_POST['password_sign_in']);

$sql = "SELECT `username`, `password`, `verification` FROM `sign_up_information` WHERE `username` = '$username' AND `password` = '$password' AND `verification` = 1";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count == 0){
    $message = array("result" => "UNSUCCESS", "message" => "username/password is incorrect");
    echo json_encode($message);
}
else{
    $message = array("result" => "SUCCESS", "message" => "Signed in successfully");
    echo json_encode($message);
}

?>