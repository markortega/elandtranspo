<?php
include('config.php');

if (isset($_POST['submit'])) 
{
	$firstname=mysqli_real_escape_string($database,$_POST['firstname']);
	$middlename=mysqli_real_escape_string($database,$_POST['middlename']);
	$lastname=mysqli_real_escape_string($database,$_POST['lastname']);
	$email=mysqli_real_escape_string($database,$_POST['email']);
	$password=mysqli_real_escape_string($database,$_POST['password']);
	$bday=mysqli_real_escape_string($database,$_POST['bday']);
	$gender=mysqli_real_escape_string($database,$_POST['gender']);
	$type="Client";

	$sql_email = "SELECT * FROM customer WHERE email='$email'";
	$res_email = mysqli_query($database,$sql_email);


	if (mysqli_num_rows($res_email) > 0) {
		echo "<script>alert('Sorry, Email already taken'); window.location.href = 'login.php';</script>";
	}
	else {
		$displayregister="INSERT INTO  customer(firstname,middlename,lastname,email,password,bday,gender,type) values('$firstname','$middlename','$lastname','$email','$password','$bday','$gender','$type')";

		$disregister=mysqli_query($database,$displayregister);

		echo "<script>alert('Succesfully Registered'); window.location.href = 'login.php';</script>";
		exit();
	}


	
}

?>