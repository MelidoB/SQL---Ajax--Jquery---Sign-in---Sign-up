<?php

    //Connecting to database
    require 'connectingToDatabase.php';
    $name = mysqli_real_escape_string($conn,$name);
    $sql = "SELECT `name` FROM `games_data` WHERE `name` LIKE '%$name%'";
    $name_exist = mysqli_query($conn, $sql);
    $name_count = mysqli_num_rows($name_exist); //how many of that name exist

    if($name_count == 0){ //If the name does not exist, insert it into the database
        $sql = "INSERT INTO `games_data`(`name`) VALUES ('$name')";
        mysqli_query($conn, $sql);    
    }
    $conn -> close();
?>