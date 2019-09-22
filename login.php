<?php

    session_start();

    if (!isset($_SESSION['firstname'])) {
 
    } else {
        if($_SESSION['type'] == "Admin") {
            header("Location: adminhome.php");
        } else {
            header("Location: clienthome.php");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign In | eLandTranspo</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-collapse navbar-right navbar-expand-lg navbar-static-top" id="nav1">
    <div class="container">
      <a class="navbar-brand" href="#">eLANDTRANSPO
        <img src="#" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="testindex.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Sign In<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sign In</h4>
      </div>
      <div class="modal-body">
        <form action="logindb.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fas fa-user"></i></span>
              <input type="text" class="form-control" name="email" placeholder="Enter Email" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fas fa-lock"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Enter Password" required="required">
            </div>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Sign In">
            
          </div>
        </form>
        <div class="modal-footer">Don't have an account?&nbsp <a href="#" data-toggle="modal" data-target="#registerModal">Create one</a></div> 
      </div>
    </div>
  </div>

  <footer class="page-footer">
    <div class="footer-copyright text-center">Copyright &copy; 2019. All Rights Reserved.</div>
  </footer>

  <!-- Modal -->
  <div id="registerModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title">Registration Form</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        </div>
        <div class="modal-body" id="regModal">
          <form action="registerdatabase.php" method="post">
            <p class="title-description">Already have an account? <a href="login.php">Sign in.</a></p>
            <div class="form-group col-md-12">
                <label class="control-label col-md-12">First Name</label>
                <input type="text" class="form-control" name="firstname" required>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label col-md-12">Middle Name</label>
                <input type="text" class="form-control" name="middlename" required>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label col-md-12">Last Name</label>
                <input type="text" class="form-control" name="lastname" required>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label col-md-12">Email</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label col-md-12">Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label class="control-label col-md-12">Birthday</label>
                  <input class="form-control" type="date" name="bday" required/> 
                </div>
                <div class="col-md-6">
                  <label class="control-label col-md-12">Gender</label>
                  <select class="form-control" name="gender" required>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
              </div>
              <input class="btn btn-primary float-right" type="submit" name="submit" value="Register">
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="jquery-3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>

</body>
</html>