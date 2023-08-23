<?php
include '../_database/database.php';
if((isset($_POST['username']) && !empty($_POST['username']))
&& (isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['phone']) && !empty($_POST['phone']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['relationship']) && !empty($_POST['relationship']))
&& (isset($_POST['priority']) && !empty($_POST['priority']))){

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$relationship = $_POST['relationship'];
$priority = $_POST['priority'];

		$query = "CALL contacts('$username', '$email', '$name','$phone','$relationship','$priority')";
		$result = mysqli_query($database, $query);
		echo "<script>alert('Contacts successfully updated !');
		window.location.href='../home.php';</script>";
}
?>
