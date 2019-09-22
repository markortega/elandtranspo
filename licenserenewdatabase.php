<?php
include('config.php');

if (isset($_POST['submit'])) 
{
	$firstname=mysqli_real_escape_string($database,$_POST['firstname']);
	$middlename=mysqli_real_escape_string($database,$_POST['middlename']);
	$lastname=mysqli_real_escape_string($database,$_POST['lastname']);
	$email=mysqli_real_escape_string($database,$_POST['email']);
	$gender=mysqli_real_escape_string($database,$_POST['gender']);
	$licenseid=mysqli_real_escape_string($database,$_POST['licenseid']);
	$agency=mysqli_real_escape_string($database,$_POST['agency']);
	$status="Pending";

	$displaylicrenew="INSERT INTO  licenserenew(firstname,middlename,lastname,email,gender,licenseid,agency,status) values('$firstname','$middlename','$lastname','$email','$gender','$licenseid','$agency','$status')";
	$dislicrenew=mysqli_query($database,$displaylicrenew);

	echo "<script>alert('Succesfully Submitted!'); window.location.href = 'clientviewapplication.php';</script>";
}

?>