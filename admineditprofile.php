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
    $middlename = $row['middlename'];
    $lastname = $row['lastname'];
    $middlename = $row['middlename'];
    $email = $row['email'];
    $password = $row['password'];
    $bday = $row['bday'];
    $gender = $row['gender'];
  }
?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Profile | eLANDTRANSPO</title>
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
            <a class="nav-link" href="adminhome.php">Home</span></a>
          </li>
          <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Select Transaction<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="adminviewnewlicense.php" ><i class="far fa-address-card"></i>   New License</a></li>
              <li><a href="adminviewlicenserenew.php" ><i class="fas fa-address-card"></i>   License Renewal</a></li>
              <li><a href="adminviewvehiclerenew" ><i class="fas fa-cogs"></i>   Vehicle Renewal</a></li>
             </ul> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminviewregister.php">Registered Users</a>
          </li>
          <li class="nav-item dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i>  Admin - <?php echo $firstname ?><span class="caret sr-only">(current)</span></a>
            <ul class="dropdown-menu" role="menu">
              <li class="active"><a href="adminviewprofile.php" ><i class="fas fa-eye"></i>  View Profile</a></li>
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
        <h1 class="display-4">Edit Profile</h1>
          <div class="info-form">
            <form action="admineditprofiledb.php" method="post" class="form-horizontal justify-content-center">
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">First Name</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Middle Name</label>
                <input type="text" class="form-control" name="middlename" value="<?php echo $middlename; ?>">
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Last Name</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Birthday</label>
                <input type="date" class="form-control" name="bday" value="<?php echo $bday; ?>">
              </div>
              <div class="form-group col-md-10">
                <label class="control-label col-md-12">Gender</label>
                <select class="form-control" name="gender" value="<?php echo $gender; ?>">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <input type="hidden" name="custid" value=<?php echo $custid; ?>>
              <input class="btn btn-primary btn-lg float-right" type="submit" name="submit" value="Save Changes">
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