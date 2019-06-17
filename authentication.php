<?php 
	
	include('connection.php');
	session_start();
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql="SELECT * FROM `customer` WHERE `email`='$email' && `password`='$password'";
	$res=$con->query($sql);
	$count=$res->num_rows;

	if ($count) {
		while($fetch=$res->fetch_array()) { 
		
		$name= $fetch['name']; 
		
		$_SESSION['name'] = $name ; 
		
		$_SESSION['id'] = $fetch['id'] ; 
		
		echo "true"; 	

		} 
	} else {
		echo "Not";
	}



?>