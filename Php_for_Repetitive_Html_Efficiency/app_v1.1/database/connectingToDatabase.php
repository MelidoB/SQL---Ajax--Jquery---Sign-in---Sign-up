<?php
//Connecting to database
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "games_database";

$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);
if(!$conn){
    die("Could Not Connect:".mysqli_connect_error());
}

    ?>