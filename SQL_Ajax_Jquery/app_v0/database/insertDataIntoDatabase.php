
<?php

$name = $_POST['name'];
$episodes = $_POST['episodes'];

echo $name;
//Connecting to database
require "connectingToDatabase.php";

$sql = "INSERT INTO animes(`name`, `episodes`) VALUES ('$name' ,$episodes)";

mysqli_query($conn, $sql);
?>