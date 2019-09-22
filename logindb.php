<?php

session_start();

if(isset($_POST['submit'])) {

	include 'config.php';

	$email = mysqli_real_escape_string($database, $_POST['email']);
	$password = mysqli_real_escape_string($database, $_POST['password']);

	$db = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
	$result = mysqli_query($database, $db) or die (mysqli_error());
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck < 1) {
		echo "<script>alert('Incorrect Email/Password. Please try again!'); window.location.href='login.php';</script>";
		exit();
	} else {
		if($row = mysqli_fetch_array($result)) {
			if($row['type'] != "Admin") {
				if($password != $row['password']) {
					echo "<script>alert('Incorrect Password!'); window.location.href='login.php';</script>";
					exit();
				} elseif($password == $row['password']) {
					//Log in the user
					$_SESSION['id'] = $row['custid'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['firstname'] = $row['firstname'];
					$_SESSION['middlename'] = $row['middlename'];
					$_SESSION['lastname'] = $row['lastname'];
					$_SESSION['bday'] = $row['gender'];
					$_SESSION['type'] = $row['type'];
					echo "<script>alert('Welcome {$_SESSION['firstname']}!'); window.location.href='clienthome.php';</script>";
					exit();
				}
			} 
			else {
				if($password != $row['password']) {
					echo "<script>alert('Incorrect Password!'); window.location.href='login.php';</script>";
					exit();
				} elseif($password == $row['password']) {
					//Log in the user
					$_SESSION['id'] = $row['custid'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['firstname'] = $row['firstname'];
					$_SESSION['middlename'] = $row['middlename'];
					$_SESSION['lastname'] = $row['lastname'];
					$_SESSION['bday'] = $row['gender'];
					$_SESSION['type'] = $row['type'];
					echo "<script>alert('Welcome Admin {$_SESSION['firstname']}!'); window.location.href='adminhome.php';</script>";
					exit();
				}
			}

		}
	}
}
?>