<?php
	$host="localhost";
	$db_user="vijai";
	$db_password="vijai";
	$db_name="user_db";
	
	$con=mysqli_connect($host,$db_user,$db_password,$db_name);
	

	if($con){

	if($con){
		echo "connection success";
	}
	else{

		echo "connection failed";

	}

	}
	
	
?>
