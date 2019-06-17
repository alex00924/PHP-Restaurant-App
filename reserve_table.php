<?php 
	
	include('connection.php');
	session_start();

	$Date = $_POST["Date"];
	$Time = $_POST["Time"];
	$Phone = $_POST["Phone"];
	$People = $_POST["People"];
	$table = $_POST["table"];
	$user_id = $_POST["user_id"];

	if ($_SESSION['id']) {

		$sql = " INSERT INTO `reservation`(`reservation_id`, `date`, `time`, `person`, `table_id`, `phone`, `message`, `booked_by`, `user_id`) VALUES ('','$Date','$Time','$People','$table','$Phone','','customer','$user_id') ";
		$res = $con->query($sql);

		header('Location: http://cpuma.com/Applications/restaurent/my-visits.php');

	} else {
		header('Location: http://cpuma.com/Applications/restaurent/');
	}
	
			
?>