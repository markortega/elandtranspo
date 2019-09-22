<?php
include_once('config.php');


if(isset($_POST['update']))
{
	$custid = mysqli_real_escape_string($database, $_POST['custid']);
	$firstname = mysqli_real_escape_string($database, $_POST['firstname']);
	$middlename = mysqli_real_escape_string($database, $_POST['middlename']);
	$lastname = mysqli_real_escape_string($database, $_POST['lastname']);
	$email = mysqli_real_escape_string($database, $_POST['email']);
	$gender = mysqli_real_escape_string($database, $_POST['gender']);
	$licenseid = mysqli_real_escape_string($database, $_POST['licenseid']);
	$agency = mysqli_real_escape_string($database, $_POST['agency']);

	if(empty($firstname) || empty($middlename) || empty($lastname) || empty($email) || empty($gender) || empty($licenseid) || empty($agency))
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
		if (empty($gender)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($licenseid)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($agency)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
	}
	else {
		$result = "UPDATE licenserenew SET firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',gender='$gender',licenseid='$licenseid',agency='$agency' WHERE custid=$custid";

		if (mysqli_query($database, $result)) {
			echo "<script>alert('Edited Successfully!'); window.location.href='viewlicenserenew.php';</script>";
		}
	}
}

include('config.php');
if(isset($_GET['id']))
{
	$custid = $_GET['id'];
	$result = mysqli_query($database, "SELECT * FROM licenserenew WHERE custid='$custid'");

	while ($res = mysqli_fetch_array($result)) {
		$firstname=$res['firstname'];
		$middlename=$res['middlename'];
		$lastname=$res['lastname'];
		$email=$res['email'];
		$gender=$res['gender'];
		$licenseid=$res['licenseid'];
		$agency=$res['agency'];
	}
}
?>

<html>
<head>
	<title>EDIT LICENSE RENEW</title>
</head>
<body>

	<form method="post" action="editlicenserenew.php">
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
				<td><input type="text" name="lastname" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value="<?php echo $gender; ?>"></td>
			</tr>
			<tr>
				<td>License ID</td>
				<td><input type="text" name="licenseid" value="<?php echo $licenseid; ?>"></td>
			</tr>
			<tr>
				<td>Agency</td>
				<td><input type="text" name="agency" value="<?php echo $agency; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="UDPATE"></td>
			</tr>
		</table>
	</form>

</body>
</html>