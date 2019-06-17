<?php 
	
	include('db_connect.php');
	
	session_start();

	$email = $_POST["email"];
	$password = $_POST["password"];

	$emailcheck = "SELECT * FROM `employee` WHERE `email`='$email'";
	$res = $con->query($emailcheck);
	$count = $res->num_rows;
	
	if ($count) {
		
		$sql="SELECT * FROM `employee` WHERE `email`='$email' && `password`='$password'";
		$result = $con->query($sql);
		$counts = $result->num_rows;

		if ($counts) {
			
			while($fetch = $result->fetch_array()) { 
			
				$name= $fetch['name']; 
				
				$_SESSION['name'] = $name ; 
				
				$_SESSION['id'] = $fetch['id'] ; 
			}
			
			echo "success";
	
		} else {

			echo "wrong";
		}
	} else {
		echo "not";
	}


?>