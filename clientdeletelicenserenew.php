<?php

include 'config.php';

$custid = $_GET['id'];
$status = "Denied";

$res = "DELETE FROM licenserenew WHERE custid='$custid'";
mysqli_query($database, $res);

echo "<script>alert('Application Cancelled!'); window.location.href='clientviewapplication.php';</script>";