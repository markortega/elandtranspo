<?php
	session_start();

	if (!isset($_SESSION['id']))
	{
		header('Location: login.php');
	}

	include 'config.php';

	$custid = $_SESSION['id'];

	$result=mysqli_query($database, "SELECT * FROM customer WHERE custid='$custid'");
	while($row=mysqli_fetch_array($result)) {
		$firstname = $row['firstname'];
	}
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home | eLANDTRANSPO</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-static-top main-menu" id="nav1">
    <div class="container">
      <a class="navbar-brand" href="#">eLANDTRANSPO
        <img src="#" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="clienthome.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Select Transaction<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="newlicense.php" ><i class="far fa-address-card"></i>   New License</a></li>
              <li><a href="licenserenew.php" ><i class="fas fa-address-card"></i>   License Renewal</a></li>
              <li><a href="vehiclerenew.php" ><i class="fas fa-cogs"></i>   Vehicle Renewal</a></li>
             </ul> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i>  <?php echo $firstname ?><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="clientviewprofile.php" ><i class="fas fa-eye"></i>  View Profile</a></li>
              <li><a href="clientviewapplication.php" ><i class="fas fa-handshake"></i>  View Transaction</a></li>
              <li class="divider"></li>
              <li><a href="logout.php" ><i class="fas fa-sign-out-alt"></i></i>   Logout</a></li>
             </ul> 
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <img src="home.png" class="rounded mx-auto d-block" alt="home">

  
  <footer class="page-footer">
    <div class="footer-copyright text-center">Copyright &copy; 2019. All Rights Reserved.</div>
  </footer>

	<script type="text/javascript" src="jquery-3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	
</body>
</html>