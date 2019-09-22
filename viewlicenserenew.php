<?php
include('config.php');

if(isset($_POST['search']))
{
	$search = $_POST['search'];
	$displaylicren = "SELECT * from licenserenew where firstname like '%$search%'";
	$dislicren = mysqli_query($database, $displaylicren);
	$rows = mysqli_num_rows($dislicren);
		if ($rows == 0) 
		{
			echo '<center>RECORD NOT FOUND</center>';
			echo '<center><a href="viewlicenserenew.php">Refresh</center>';
		}
}
else
{
	$displaylicren = "SELECT * from licenserenew order by firstname desc";
	$dislicren = mysqli_query($database, $displaylicren);
}
?>


<html>
<head>
	<title>LICENSE RENEWAL INFORMATION</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
		<center>
			<h2 style="font-family: Century Gothics, Arial">LICENSE RENEWAL CLIENTS</h2>
			<a href="adminhome.php">HOME</a></center>
		<form action="viewlicenserenew.php" method="post">
			<input type="text" name="search" placeholder="Search Here"/>
			<input type="submit" name="display" value="Search"/>
		</form>

		<table border="0" style="width: 100%; padding: 5px">
			<tr>
				<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">First Name</th>
				<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Middle Name</th>
				<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Last Name</th>
				<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Gender</th>
				<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">License ID</th>
				<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Agency</th>
				<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Action</th>
			</tr>

			<?php
			while ($dislr = mysqli_fetch_array($dislicren))
			{ ?>
		<tr>
			<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $dislr['firstname']?></td>
			<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $dislr['middlename']?></td>
			<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $dislr['lastname']?></td>
			<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $dislr['gender']?></td>
			<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $dislr['licenseid']?></td>
			<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $dislr['agency']?></td>
			<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo "<a href=\"editlicenserenew.php?id=$dislr[custid]\">Edit</a>"?></td>
		</tr>
			<?php } ?>

</body>
</html>