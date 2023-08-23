<?php
include '../_database/database.php';
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['subject']) && !empty($_POST['subject']))){

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

		$query = "INSERT INTO contact_us (name, email, subject, message, qdate) VALUES ('$name', '$email', '$subject', '$message', CURRENT_TIMESTAMP)";
		$result = mysqli_query($database, $query);
		header('Location: ../index.php');


}
?>
