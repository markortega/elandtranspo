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
	$bday = mysqli_real_escape_string($database, $_POST['bday']);
	$address = mysqli_real_escape_string($database, $_POST['address']);
	$nationality = mysqli_real_escape_string($database, $_POST['nationality']);
	$weight = mysqli_real_escape_string($database, $_POST['weight']);
	$height = mysqli_real_escape_string($database, $_POST['height']);

	if(empty($firstname) || empty($middlename) || empty($lastname) || empty($email) || empty($gender) || empty($bday) || empty($address))
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
		if (empty($bday)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($address)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
	}
	else {
		$result = "UPDATE newlicense SET firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',gender='$gender',bday='$bday',address='$address' WHERE custid=$custid";

		if (mysqli_query($database, $result)) {
			echo "<script>alert('Edited Successfully!'); window.location.href='viewnewlicense.php';</script>";
		}
	}
}

include('config.php');
if(isset($_GET['id']))
{
	$custid = $_GET['id'];
	$result = mysqli_query($database, "SELECT * FROM newlicense WHERE custid='$custid'");

	while ($res = mysqli_fetch_array($result)) {
		$firstname=$res['firstname'];
		$middlename=$res['middlename'];
		$lastname=$res['lastname'];
		$email=$res['email'];
		$gender=$res['gender'];
		$bday=$res['bday'];
		$address=$res['address'];
	}
}
?>

<html>
<head>
	<title>EDIT NEW LICENSE</title>
</head>
<body>

	<form method="post" action="editnewlicense.php">
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
				<td>Birthday</td>
				<td><input type="text" name="bday" value="<?php echo $bday; ?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $address; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="UDPATE"></td>
			</tr>
		</table>
	</form>

</body>
</html>