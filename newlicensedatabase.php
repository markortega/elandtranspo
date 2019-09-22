<?php
include('config.php');

if (isset($_POST['submit'])) 
{
	$firstname=mysqli_real_escape_string($database,$_POST['firstname']);
	$middlename=mysqli_real_escape_string($database,$_POST['middlename']);
	$lastname=mysqli_real_escape_string($database,$_POST['lastname']);
	$email=mysqli_real_escape_string($database,$_POST['email']);
	$gender=mysqli_real_escape_string($database,$_POST['gender']);
	$bday=mysqli_real_escape_string($database,$_POST['bday']);
	$address=mysqli_real_escape_string($database,$_POST['address']);
	$status = "Pending";

	$displaynewlicense="INSERT INTO  newlicense(firstname,middlename,lastname,email,gender,bday,address,status) values('$firstname','$middlename','$lastname','$email','$gender','$bday','$address','$status')";
	$disnewlicense=mysqli_query($database,$displaynewlicense);

	echo "<script>alert('Succesfully Submitted!'); window.location.href = 'clientviewapplication.php';</script>";
}

?>