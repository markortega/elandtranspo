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
  <nav class="navbar navbar-expand-lg navbar-static-top" id="nav1">
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

  <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <!-- Form Title -->
                                                <div class="form-heading text-center">
                                                    <div class="title">Registration</div>
                                                    <p class="title-description">Already have an account? <a href="#" data-toggle="modal" data-target="#LogInModal" data-dismiss="modal">Sign in.</a></p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="First Name" /> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Last Name" /> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Username" /> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" placeholder="Email Address" required /> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="password" placeholder="Password" /> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="password" placeholder="Re-password" /> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="checkbox" />
                                                        <label>Do you agree to the <a href="#">terms and conditions?</a></label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <button class="modern-button modern-red">Create Account</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ------- LOGIN ------- -->
                            <div class="modal fade" id="LogInModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <!-- Form Title -->
                                                <div class="form-heading text-center">
                                                    <div class="title">Log in</div>
                                                    <!-- Social Line -->
                                                    <div class="social-line"> 
                                                        <a href="#"><i class="fa fa-facebook"></i></a> 
                                                        <a href="#"><i class="fa fa-google-plus"></i></a> 
                                                        <a href="#"><i class="fa fa-twitter"></i></a> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" placeholder="Username" required /> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="password" placeholder="Password" required /> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" />
                                                        <label>Remember Me</label>
                                                    </div>
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <label><a href="#" data-toggle="modal" data-target="#ForgotModal" data-dismiss="modal">Forget Password?</a></label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <button class="modern-button modern-red">Log In</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

</body>
</html>

<html>
<head>
	<title>Register | eLandTranspo</title>
</head>
<body>
	<div style="font-family: Century Gothics, Arial">
	<center>
	<br>
	<h2>CREATE A NEW ACCOUNT</h2>
		<form action="registerdatabase.php" method="post">
			
			NAME:<input type="text" name="firstname" placeholder="First Name" required="required"/>
			<input type="text" name="middlename" placeholder="Middle Name" required="required"/>
			<input type="text" name="lastname" placeholder="Last Name" required="required"/> <br/><br/>
			EMAIL: <input type="text" name="email" placeholder="Email" required="required"/><br/><br/>
			PASSWORD: <input type="password" name="password" placeholder="Password" required="required"/><br/><br/>
			BIRTHDAY: <input type="date" name="bday" placeholder="Birthday" required="required"/><br/><br/>
			GENDER: <input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female<br/><br/>

			<input type="submit" name="submit" value="SIGN-UP" required="required"/>

		</form><br>
		Already Have an Account? <a href="login.php">Sign In</a>
	</center>
	</div>


</body>
</html>