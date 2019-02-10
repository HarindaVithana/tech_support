<?php
	
	$DB_SERVER="localhost";
	$DB_USER="root";
	$DB_PASS="";
	$DB_NAME="tech_support";
	
	//1. create connection
	$conn = mysqli_connect($DB_SERVER,$DB_USER,$DB_PASS);
	if(!$conn){
		die("Database connection failed: ".mysqli_error());
	}

	//2. Database selection
	$db_select = mysqli_select_db($conn,$DB_NAME);
	if(!$conn){
		die("Database selection failed".mysqli_error());
	}
?>