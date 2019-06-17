<?php 
	
	include('db_connect.php');
	session_start();

	$Date = $_POST["Date"];
	$Time = $_POST["Time"];
	$Phone = $_POST["Phone"];
	$People = $_POST["People"];
	$table = $_POST["table"];
	$emp_id = $_SESSION['id'];
	

	if ($_SESSION['id']) {

		$sql = " INSERT INTO `reservation`(`reservation_id`, `date`, `time`, `person`, `table_id`, `phone`, `message`, `booked_by`, `user_id`) VALUES ('','$Date','$Time','$People','$table','$Phone','','Employee-$emp_id','Null') ";
		$res = $con->query($sql);

		header('Location: http://cpuma.com/Applications/restaurent/Admin/Reservation.php');

	} else {
		header('Location: http://cpuma.com/Applications/restaurent/Admin');
	}
	
			
?>