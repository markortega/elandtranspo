<?php
include('config.php');

if (isset($_POST['submit'])) 
{
	$firstname=mysqli_real_escape_string($database,$_POST['firstname']);
	$middlename=mysqli_real_escape_string($database,$_POST['middlename']);
	$lastname=mysqli_real_escape_string($database,$_POST['lastname']);
	$email=mysqli_real_escape_string($database,$_POST['email']);
	$brand=mysqli_real_escape_string($database,$_POST['brand']);
	$model=mysqli_real_escape_string($database,$_POST['model']);
	$plateno=mysqli_real_escape_string($database,$_POST['plateno']);
	$status="Pending";

	$displayvehrenew="INSERT INTO  vehiclerenew(firstname,middlename,lastname,email,brand,model,plateno,status) values('$firstname','$middlename','$lastname','$email','$brand','$model','$plateno','$status')";
	$disvehrenew=mysqli_query($database,$displayvehrenew);

	echo "<script>alert('Succesfully Submitted!'); window.location.href = 'clientviewapplication.php';</script>";
}

?>