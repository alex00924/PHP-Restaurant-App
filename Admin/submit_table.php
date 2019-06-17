<?php 
include 'db_connect.php';

$table = $_POST['table'];
$seat = $_POST['seat'];

			$sql = "INSERT INTO `tables` (`table`,`sit`) VALUES ('$table','$seat')";
			$res = $con->query($sql);
			
			if($res)
			{
				header('Location: Table.php'); 
			}


?>