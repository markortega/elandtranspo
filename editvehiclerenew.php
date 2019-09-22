<?php
include_once('config.php');


if(isset($_POST['update']))
{
	$custid = mysqli_real_escape_string($database, $_POST['custid']);
	$firstname = mysqli_real_escape_string($database, $_POST['firstname']);
	$middlename = mysqli_real_escape_string($database, $_POST['middlename']);
	$lastname = mysqli_real_escape_string($database, $_POST['lastname']);
	$email = mysqli_real_escape_string($database, $_POST['email']);
	$brand = mysqli_real_escape_string($database, $_POST['brand']);
	$model = mysqli_real_escape_string($database, $_POST['model']);
	$plateno = mysqli_real_escape_string($database, $_POST['plateno']);

	if(empty($firstname) || empty($middlename) || empty($lastname) || empty($email) || empty($brand) || empty($model) || empty($plateno))
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
		if (empty($brand)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($model)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
		if (empty($plateno)) {
			echo "<font color='red'>Name field is empty</font><br>";
		}
	}
	else {
		$result = "UPDATE vehiclerenew SET firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',brand='$brand',model='$model',plateno='$plateno' WHERE custid=$custid";

		if (mysqli_query($database, $result)) {
			echo "<script>alert('Edited Successfully!'); window.location.href='viewvehiclerenew.php';</script>";
		}
	}
}

include('config.php');
if(isset($_GET['id']))
{
	$custid = $_GET['id'];
	$result = mysqli_query($database, "SELECT * FROM vehiclerenew WHERE custid='$custid'");

	while ($res = mysqli_fetch_array($result)) {
		$firstname=$res['firstname'];
		$middlename=$res['middlename'];
		$lastname=$res['lastname'];
		$email=$res['email'];
		$brand=$res['brand'];
		$model=$res['model'];
		$plateno=$res['plateno'];
	}
}
?>

<html>
<head>
	<title>EDIT VEHICLE RENEW</title>
</head>
<body>

	<form method="post" action="editvehiclerenew.php">
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
				<td>Brand</td>
				<td><input type="text" name="brand" value="<?php echo $brand; ?>"></td>
			</tr>
			<tr>
				<td>Model</td>
				<td><input type="text" name="model" value="<?php echo $model; ?>"></td>
			</tr>
			<tr>
				<td>Plate No.</td>
				<td><input type="text" name="plateno" value="<?php echo $plateno; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="UDPATE"></td>
			</tr>
		</table>
	</form>

</body>
</html>