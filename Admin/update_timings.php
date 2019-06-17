<?php 
	
	include 'db_connect.php';
	session_start();

	$day = $_POST['day'];
	$from_time = $_POST['from_time'];
	$to_time = $_POST['to_time'];
	$id = $_POST['id'];	

	if ($_SESSION['id']) {

		$sql = " UPDATE `timings` SET `id`='$id',`day`='$day',`from_time`='$from_time',`to_time`='$to_time' WHERE `id`='$id' ";
		$res = $con->query($sql);

		header('Location: http://cpuma.com/Applications/restaurent/Admin/timings.php');

	} else {
		header('Location: http://cpuma.com/Applications/restaurent/Admin');
	}
	
	
?>