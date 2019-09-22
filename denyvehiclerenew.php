<?php

include 'config.php';

$custid = $_GET['id'];
$status = "Denied";

$res = "UPDATE vehiclerenew SET status='$status' WHERE custid='$custid'";
mysqli_query($database, $res);

echo "<script>alert('Application Denied!'); window.location.href='adminviewvehiclerenew.php';</script>";