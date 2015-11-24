<?php
require("../models/Db.class.php");
require("../config/config.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tourism Services | RegisterHotel </title>
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

	<div class="col-md-6 col-md-offset-3 container panel panel-primary " style="margin-top:10px">
	   <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary" style="margin-top: 10px;">
				<div class="panel-heading">
					<div class = "panel-title"> New Business Registration For Tourism Service</div>
				</div>

			</div>
		</div>

		<div class ="row">

				<form id = "register-form" class="" method="POST" action="">
					<div class=" col-md-6 col-md-offset-3">

						<div class = "form-group">
							<label for="hotalName">Business Name</label>
							<input type = "text" name = "hotalName" class="form-control" value="" placeholder = "BusinessName" />
						</div>

						<div class = "form-group">
							<label for="OwnerName">BusinessOwner Name</label>

							<input type = "text" name = "OwnerName" class="form-control" value="" placeholder = "BusinessOwnerName" />
						</div>

						<div class = "form-group">
							<label for="city">city</label>

							<input type = "text" name = "city" class="form-control" value="" placeholder = "city"/>
						</div>


						<div class = "form-group">
							<label for="address">Business Address</label>

							<textarea type = "textarea" rows="5" cols="40" id="address" name = "address" class="form-control"  placeholder = "address" /></textarea>
						</div>
						<div class = "form-group">
							<label for="nic">ImageName</label>
							<input type = "text" name = "nic" class="form-control" value="" placeholder = "ImageName" />
							
						</div>
						
						<div class = "form-group">
							<label for="address">Business Info</label>

							<textarea type = "textarea" rows="5" cols="40" id="Info" name = "Info" class="form-control"  placeholder = "Infomations About Your Business" /></textarea>
						</div>

						
						
                        <div class = "form-group">
							<label for="hotelType">Business Type</label>
							<div class = "panel panel-default">
								<span>
									<input type="radio" name="hotelType" id="hotelType" value="restaurent"/> Restaurent </label> <br/>
									<input type="radio" name="hotelType" id="hotelType" value="hotel"/> Hotel </label> <br/>
									<input type="radio" name="hotelType" id="hotelType" value="hall"/> Hall </label> 
								</span>
							</div>                            
						</div>
						
						<div class = "form-group">
							<label for="noOfRooms">NoOfRooms </label>
							<input type = "text" name = "noOfRooms" class="form-control" value="" placeholder = "noOfRooms" />
						</div>
                                                
						
				</div>
				<div class=" col-md-6 col-md-offset-3 text-center" >
					<button type="submit" name = "submit" class="btn btn-default">Submit</button>
					<button class="btn btn-danger" type="reset">Reset</button>
					<button type="submit" name = "singout" value = "singout" class="btn btn-default" onClick="window.open('')">Back To Login</button>

					</br></br>
				</div>
				</form>
			</div>
		</div>
	<div class="clear"></div>

<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/tourism_service.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/js/validation.js"></script>



</html>
