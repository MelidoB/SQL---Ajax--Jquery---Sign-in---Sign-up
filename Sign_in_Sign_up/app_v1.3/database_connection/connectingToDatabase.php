<?php
//Connecting to database
    $dbservername="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="sign_up";

	$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
	if(!$conn){
		die("Could Not Connect:".mysqli_connect_error());
	}
    ?>