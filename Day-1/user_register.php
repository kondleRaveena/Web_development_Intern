
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>
  
<form method="POST" action="index.php">
  <body>
  <style>
  body {
  background-image: url('image/food 4.jpg');
  background-repeat: no-repeat;
  -webkit-background-size:cover;
  -moz-background-size:cover;
  -o-background-size:cover;
  background-position:center;
  font-family:'Open Sans',sans-serif;
  font-size:100%;
  position:relative;
  min-height:100vh;
  background-size: cover;
 
}
</style>
<center>
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"><b>Register an Account</b></div>
        <div class="card-body">
          <form>
        <div class="form-group">
              <div class="form-label-group">
                 <input type="text" id="firstName" name="fname" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
              </div>
            </div><div class="form-group">
              <div class="form-label-group">
                    <input type="tel" id="Mobile" name="cno" class="form-control" placeholder="Mobile No" minlength="10" maxlength="10" pattern="[0-9]{10}" required="required">
                    <label for="Mobile No">Mobile No</label>
                  </div>
                </div>
			
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail"><align="left">Email address</label>
              </div>
            </div>
			<div class="form-group">
				<div class="form-label-group">
                    <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" min length="10" maxlength="18" required="required">
                    <label for="inputPassword"><center>Password</label>
                  </div>
                </div>
			<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-info active" onclick="return confirm('Registered Successfully');" type="submit" aria-pressed="true" name="submit">Register</button>
              </div>

          
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="file:///C:/wamp/www/project/user_login.php">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>
</html>
