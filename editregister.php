<?php
include_once('config.php');


if(isset($_POST['update']))
{
	$custid = mysqli_real_escape_string($database, $_POST['custid']);
	$firstname = mysqli_real_escape_string($database, $_POST['firstname']);
	$middlename = mysqli_real_escape_string($database, $_POST['middlename']);
	$lastname = mysqli_real_escape_string($database, $_POST['lastname']);
	$email = mysqli_real_escape_string($database, $_POST['email']);
	$password = mysqli_real_escape_string($database, $_POST['password']);
	$bday = mysqli_real_escape_string($database, $_POST['bday']);

	if(empty($firstname) || empty($middlename) || empty($lastname) || empty($email) || empty($password) || empty($bday))
	{
		if (empty($firstname)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($middlename)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($lastname)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($email)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($password)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($bday)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
	}
	else {
		$result = "UPDATE customer SET firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',password='$password',bday='$bday' WHERE custid=$custid";

		if (mysqli_query($database, $result)) {
			echo "<script>alert('Edited Successfully!'); window.location.href='viewregister.php';</script>";
		}
	}
}

include('config.php');
if(isset($_GET['id']))
{
	$custid = $_GET['id'];
	$result = mysqli_query($database, "SELECT * FROM customer WHERE custid='$custid'");

	while ($res = mysqli_fetch_array($result)) {
		$firstname=$res['firstname'];
		$middlename=$res['middlename'];
		$lastname=$res['lastname'];
		$email=$res['email'];
		$password=$res['password'];
		$bday=$res['bday'];
		$gender=$res['gender'];
	}
}
?>

<html>
<head>
	<title>EDIT REGISTER</title>
</head>
<body>

	<form method="post" action="editregister.php">
		<table border="0">
			<tr>
				<td>First Name</td>
				<td><input type="text" name="firstname" value="<?php echo $firstname; ?>"></td>
				<input type="hidden" name="custid" value="<?php echo $custid; ?>">
			</tr>
			<tr>
				<td>Middle Name</td>
				<td><input type="text" name="middlename" value="<?php echo $middlename; ?>"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lastname" value="<?php echo $lastname; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $password; ?>"></td>
			</tr>
			<tr>
				<td>Birthday</td>
				<td><input type="text" name="bday" value="<?php echo $bday; ?>"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="bday" value="<?php echo $gender; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="UDPATE"></td>
			</tr>
		</table>
	</form>

</body>
</html>