<?php
	session_start();

	if (!isset($_SESSION['id']))
	{
		header('Location: login.php');
	}

	include 'config.php';

	$custid = $_SESSION['id'];
	$firstname = $_SESSION['firstname'];

	$result=mysqli_query($database, "SELECT * FROM newlicense ORDER BY status ASC");
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>View Application | eLANDTRANSPO</title>
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
          <li class="nav-item dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">View Applications<span class="caret sr-only">(current)</span></a>
            <ul class="dropdown-menu" role="menu">
              <li class="active"><a href="adminviewnewlicense.php" ><i class="far fa-address-card"></i>   New License</a></li>
              <li><a href="adminviewlicenserenew.php" ><i class="fas fa-address-card"></i>   License Renewal</a></li>
              <li><a href="adminviewvehiclerenew.php" ><i class="fas fa-cogs"></i>   Vehicle Renewal</a></li>
             </ul> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminviewregister.php">Registered Users</a>
          </li>
          <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i>  Admin - <?php echo $firstname ?><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="adminviewprofile.php" ><i class="fas fa-eye"></i>  View Profile</a></li>
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
      <div class="col-md-auto">
        <h1 class="display-4">New License</h1>
          <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">First Name</th>
              <th scope="col">Middle Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Birthday</th>
              <th scope="col">Address</th>
              <th scope="col">Status</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-light">
            <?php
              while($row = mysqli_fetch_array($result)) {
                $custid = $row['custid'];
                $firstname = $row['firstname'];
              	$middlename = $row['middlename'];
                $lastname = $row['lastname'];
                $gender = $row['gender'];
                $bday = $row['bday'];
                $address = $row['address'];
                $status = $row['status'];

                echo "<tr>
                  <td>".$firstname."</td>
                  <td>".$middlename."</td>
                  <td>".$lastname."</td>
                  <td>".$gender."</td>
                  <td>".$bday."</td>
                  <td>".$address."</td>
                  <td>".$status."</td>
                  <td><div class='btn-group col-md-1' role='group'>
  					<a class='btn btn-secondary' href='approvenewlicense.php?id=".$custid."'>Approve</a>
  					<a class='btn btn-secondary' href='denynewlicense.php?id=".$custid."'>Decline</a>
  					<a class='btn btn-secondary' href='deletenewlicense.php?id=".$custid."'>Delete</a>
				  </div></td>
                </tr>";
            }
            ?>
          </tbody>
        </table>
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