<?php
include('config.php');

if(isset($_POST['search']))
{
	$search = $_POST['search'];
	$displayvehren = "SELECT * from vehiclerenew where firstname like '%$search%'";
	$disvehren = mysqli_query($database, $displayvehren);
	$rows = mysqli_num_rows($disvehren);
		if ($rows == 0) 
		{
			echo '<center>RECORD NOT FOUND</center>';
			echo '<center><a href="viewvehiclerenew.php">Refresh</center>';
		}
}
else
{
	$displayvehren = "SELECT * from vehiclerenew order by firstname desc";
	$disvehren = mysqli_query($database, $displayvehren);
}
?>
<html>
<head>
	<title>VEHICLE RENEWAL INFORMATION</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<center><h2 style="font-family: Century Gothics, Arial">VEHICLE RENEWAL CLIENTS</h2>
		<a href="adminhome.php">HOME</a></center>
	<form action="viewvehiclerenew.php" method="post">
		<input type="text" name="search" placeholder="Search Here"/>
		<input type="submit" name="display" value="Search"/>
	</form>
	<table border="0" style="width: 100%; padding: 5px;">
		<tr>
			<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">First Name</th>
			<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Middle Name</th>
			<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Last Name</th>
			<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Brand</th>
			<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Model</th>
			<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Plate No.</th>
			<th align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial">Action</th>
		</tr>
		<?php
			while ($disvr = mysqli_fetch_array($disvehren))
			{
		?>
	<tr>
		<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $disvr['firstname']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $disvr['middlename']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $disvr['lastname']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $disvr['brand']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $disvr['model']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo $disvr['plateno']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 50px; font-family: Century Gothics, Arial"><?php echo "<a href=\"editvehiclerenew.php?id=$disvr[custid]\">Edit</a>"?></td>
	</tr>

	<?php } ?>
</body>
</html>