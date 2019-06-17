<?php 
include 'db_connect.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

			$sql = "UPDATE `employee` SET `name`='$name',`phone`='$phone',`email`='$email',`password`='$password' WHERE `id`='1'";
			$res = $con->query($sql);
			
			if($res)
			{
				header('Location: profile.php'); 
			}


?>