<?php
include 'config.php';

$custid = $_GET['id'];
$status = 'Denied';

$res = "UPDATE newlicense SET status='$status' WHERE custid='$custid'";
mysqli_query($database,$res);

echo "<script>alert('Application Denied'); window.location.href = 'adminviewnewlicense.php';</script>";

?>