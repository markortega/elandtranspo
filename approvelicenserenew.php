<?php

include 'config.php';

$custid = $_GET['id'];
$status = 'Approved';

$res = "UPDATE licenserenew SET status='$status' WHERE custid='$custid'";
mysqli_query($database, $res);

echo "<script>alert('Application approved!'); window.location.href='adminviewlicenserenew.php';</script>";