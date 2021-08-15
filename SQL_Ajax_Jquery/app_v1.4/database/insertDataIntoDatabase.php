
<?php

$name = $_POST['name'];
$message = $_POST['message'];

//Connecting to database
require "connectingToDatabase.php";

$sql = "INSERT INTO message_app (name, message, register_date) VALUES ('$name', '$message ', current_timestamp())";

mysqli_query($conn, $sql);
?>