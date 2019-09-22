<?php
include('config.php');

if(isset($_POST['search']))
{
	$search = $_POST['search'];
	$displaynewlic = "SELECT * from newlicense where firstname like '%$search%'";
	$disnewlic = mysqli_query($database, $displaynewlic);
	$rows = mysqli_num_rows($disnewlic);
		if ($rows == 0) 
		{
			echo '<center>RECORD NOT FOUND</center>';
			echo '<center><a href="viewnewlicense.php">Refresh</center>';
		}
}
else
{
	$displaynewlic = "SELECT * from newlicense order by firstname desc";
	$disnewlic = mysqli_query($database, $displaynewlic);
}
?>
<html>
<head>
	<title>NEW LICENSE INFORMATION</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<center><h2 style="font-family: Century Gothics, Arial">NEW LICENSE APPLICANTS</h2>
		<a href="adminhome.php">HOME</a></center>
	<form action="viewnewlicense.php" method="post">
		<input type="text" name="search" placeholder="Search Here"/>
		<input type="submit" name="display" value="Search"/>
	</form>
	<table border="0" style="width: 100%; padding: 5px;">
		<tr>
			<th align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial">First Name</th>
			<th align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial">Middle Name</th>
			<th align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial">Last Name</th>
			<th align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial">Gender</th>
			<th align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial">Birthday</th>
			<th align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial">Address</th>
			<th align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial">Action</th>
		</tr>
		<?php
			while ($disnl = mysqli_fetch_array($disnewlic))
			{
		?>
	<tr>
		<td align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial"><?php echo $disnl['firstname']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial"><?php echo $disnl['middlename']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial"><?php echo $disnl['lastname']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial"><?php echo $disnl['gender']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial"><?php echo $disnl['bday']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial"><?php echo $disnl['address']?></td>
		<td align="center" style="padding-left: 10px; padding-right: 15px; font-family: Century Gothics, Arial"><?php echo "<a href=\"editnewlicense.php?id=$disnl[custid]\">Edit</a>"?></td>
	</tr>

	<?php } ?>
	</table>

</body>
</html>