<?php
include 'config.php';

if(isset($_POST['submit'])) {
	
	$custid = mysqli_real_escape_string($database, $_POST['custid']);
	$firstname = mysqli_real_escape_string($database, $_POST['firstname']);
	$middlename = mysqli_real_escape_string($database, $_POST['middlename']);
	$lastname = mysqli_real_escape_string($database, $_POST['lastname']);
	$email = mysqli_real_escape_string($database, $_POST['email']);
	$password = mysqli_real_escape_string($database, $_POST['password']);
	$bday = mysqli_real_escape_string($database,$_POST['bday']);
	$gender = mysqli_real_escape_string($database,$_POST['gender']);

	$result = "UPDATE customer SET firstname='$firstname', middlename='$middlename', lastname='$lastname', email='$email', password='$password', bday='$bday', gender='$gender' WHERE custid='$custid'";
	mysqli_query($database, $result);

	echo "<script>alert('Profile Updated!'); window.location.href = 'clientviewprofile.php';</script>";
}	