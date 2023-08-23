<?php
include '../_database/database.php';
if((isset($_POST['username']) && !empty($_POST['username']))
&& (isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['phone']) && !empty($_POST['phone']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['reporting_date']) && !empty($_POST['reporting_date']))
&& (isset($_POST['incident_date']) && !empty($_POST['incident_date']))
&& (isset($_POST['regarding']) && !empty($_POST['regarding']))
&& (isset($_POST['priority']) && !empty($_POST['priority']))
&& (isset($_POST['complaint']) && !empty($_POST['complaint']))){

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$reporting_date = $_POST['reporting_date'];
$incident_date = $_POST['incident_date'];
$regarding = $_POST['regarding'];
$complaint = $_POST['complaint'];
$priority = $_POST['priority'];



		$query = "INSERT INTO complaints (username, name, email, Phone, reporting_date, incident_date, regarding, complaint, priority) VALUES ('$username', '$name', '$email', '$phone', '$reporting_date', '$incident_date', '$regarding', '$complaint', '$priority')";
		$result = mysqli_query($database, $query);
		echo "<script>alert('Complaint Reported !');
		window.location.href='../home.php';</script>";


	}
?>
