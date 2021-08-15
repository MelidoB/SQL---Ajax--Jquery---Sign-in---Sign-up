<?php
//Connecting to database
    $servername="localhost";
	$username="root";
	$dbpassword="";
	$dbname="getting_data_from_database";

	$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);
	if(!$conn){
		die("Could Not Connect:".mysqli_connect_error());
	}
    ?>