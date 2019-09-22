<?php

include 'config.php';

$custid = $_GET['id'];
$status = "Denied";

$res = "DELETE FROM newlicense WHERE custid='$custid'";
mysqli_query($database, $res);

echo "<script>alert('Application Deleted!'); window.location.href='adminviewnewlicense.php';</script>";