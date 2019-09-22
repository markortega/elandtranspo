<?php

include 'config.php';

$custid = $_GET['id'];
$status = "Approved";

$res = "UPDATE vehiclerenew SET status='$status' WHERE custid='$custid'";
mysqli_query($database, $res);

echo "<script>alert('Application approved!'); window.location.href='adminviewvehiclerenew.php';</script>";