<?php
//Connecting to database
    $servername="localhost";
	$username="root";
	$dbpassword="";
	$dbname="sign_up";

	$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);
	if(!$conn){
		die("Could Not Connect:".mysqli_connect_error());
	}
    ?>