<?php 
	
	include 'db_connect.php';
	session_start();

	$sit = $_POST['sit'];
	$reserve = $_POST['reserve'];
	
	$id = $_POST['id'];	

	

		$sql = " UPDATE `tables` SET `sit`='$sit',`action`='$reserve' WHERE `table_id`='$id' ";
		$res = $con->query($sql);

		header('Location: Table.php');

	
	
	
?>