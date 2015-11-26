<?php
require("../models/Db.class.php");
require("../config/config.php");

if(isset($_SESSION['username'])){
	header("Location: userHome.php ");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tourism Services | Home </title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../assets/css/tourism_service.css"/>
    <link  rel="stylesheet" href="../../assets/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css"
</head>
<body>
	<?php include("top_header.php");
	include("main_menu.php");
	?>



<div class="container col-md-7 col-md-offset-2">
	<div class="col-md-8 col-md-offset-2">	
		<div class="panel panel-primary" style="margin-top: 10px;">
			<div class="panel-heading">
				<div class = "panel-title"> Login Into Tourism Services</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<div id="results"></div>
		</div>
	</div>

	<div class = "row" id="login_area">
		<div class="panel panel-primary col-md-6 col-md-offset-3 text-center">

			</br>
			<form  id  = "login-form"   action = "" method = "POST" >
				<div class = "form-group">
					<label for="username">UserName Or Email Address</label>
					<input type = "text" id="username" name = "username" class="form-control" />
				</div>

				<div class = "form-group">
					<label for="password">Password</label>
					<input type = "password" id="password" name = "password" class="form-control" />
				</div>

				<div class = "form-group">
					<button id = "regitser_now" name = "newuser" class="btn btn-info">Register now</button>
						<button id = "login_button"  name = "submit" class="btn btn-info">Login</button>

				</div>


			</form>

			</br></br>
			</br>
		</div>
	</div>


	<div class ="row hidden" id="registration_area">

		<form id = "register-form" class="" method="POST" action="">
			<div class=" col-md-6 col-md-offset-3">

				<div class = "form-group">
					<label for="firstname">User Name</label>
					<input type = "text" id="usernamee" name = "username" class="form-control" value="" placeholder = "UserName" />
				</div>

				<div class = "form-group">
					<label for="firstname">First Name</label>

					<input type = "text" id="firstname" name = "firstname" class="form-control" value="" placeholder = "FirstName" />
				</div>

				<div class = "form-group">
					<label for="lastname">Last Name</label>

					<input type = "text" id="lastname" name = "lastname" class="form-control" value="" placeholder = "LastName"/>
				</div>


				<div class = "form-group">
					<label for="password">Password</label>

					<input type = "text"  id="password1" name = "password1" class="form-control"  placeholder = "Password" />
				</div>

				<div class = "form-group">
					<label for="confirmpassword">ConfirmPassword</label>

					<input type = "text" id="password2" name = "password2" class="form-control"  placeholder = "ConfirmPassword" />
				</div>

				<div class = "form-group">
					<label for="email">E-mail</label>
					<input type = "text" id="email" name = "email" class="form-control" value="" placeholder = "email" />
				</div>

				<div class = "form-group">
					<label for="nic">NIC</label>
					<input type = "text" id =  "nic" name = "nic" class="form-control" value="" placeholder = "NIC" />
				</div>

				<div class = "form-group">
					<label for="nic">ContactNo</label>
					<input type = "text" id="contact" name = "contact" class="form-control" value="" placeholder = "Contact No" />
				</div>
			</div>
			<div class=" col-md-6 col-md-offset-3 text-center" >
				<button type="submit" id="submit_button" name = "submit" class="btn btn-default">Submit</button>
				<button class="btn btn-danger" type="reset">Reset</button>
				<button type="button" id="back_login"  class="btn btn-default">Back To Login</button>

				</br></br>
			</div>
		</form>
	</div>







</div>
	<div class="clear" style=" margin-bottom: 25%"></div>
<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/login.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/js/validation.js"></script>



</html>
