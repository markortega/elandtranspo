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
		$email = $row['email'];
	}
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>License Renew | eLANDTRANSPO</title>
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
          <li class="nav-item">
            <a class="nav-link" href="clienthome.php">Home</span></a>
          </li>
          <li class="nav-item dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Select Transaction<span class="caret sr-only">(current)</span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="newlicense.php" ><i class="far fa-address-card"></i>   New License</a></li>
              <li class="active"><a href="licenserenew.php" ><i class="fas fa-address-card"></i>   License Renewal</a></li>
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

  <div id="container" class="container">
    <div class="row text-white">
      <div class="col-sm-6 offset-sm-3 text-center">
        <h1 class="display-4">License Renew</h1>
          <div class="info-form">
            <form action="licenserenewdatabase.php" method="post" class="form-horizontal justify-content-center">
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Middle Name</label>
                <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $email?>" readonly>
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">License ID</label>
                <input type="text" class="form-control" name="licenseid" placeholder="License ID" required>
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Agency Code</label>
                <input type="text" class="form-control" name="agency" placeholder="Agency Code" required>
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Gender</label>
                <select class="form-control" name="gender">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <input class="btn btn-primary btn-lg float-right" type="submit" name="submit" value="Submit">
            </form>
        </div>
      </div>
    </div>
  </div>
  
  <footer class="page-footer">
    <div class="footer-copyright text-center">Copyright &copy; 2019. All Rights Reserved.</div>
  </footer>

	<script type="text/javascript" src="jquery-3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	
</body>
</html>