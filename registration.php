<?php 
	
	include('connection.php');
	session_start();

	$username = $_POST["username"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM `customer` WHERE `email`='$email'";
	$res = $con->query($sql);
	$count=$res->num_rows;

	if ($count) {
		echo "available";
	} else {

		$sqls="INSERT INTO `customer`(`id`, `name`, `phone`, `email`, `password`) VALUES ('','$username','$phone','$email','$password')";
	
		$ress = $con->query($sqls);

		echo "success";
	}

		
?>