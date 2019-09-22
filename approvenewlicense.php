<?php  
include 'config.php';

$custid = $_GET['id'];
$status = 'Approved';

$res = "UPDATE newlicense SET status='$status' WHERE custid='$custid'";
mysqli_query($database,$res);

echo "<script>alert('Application Approved'); window.location.href = 'adminviewnewlicense.php';</script>";

?>