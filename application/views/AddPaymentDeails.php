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
					<div class = "panel-title"> Enter Payment Details</div>
				</div>

			</div>
		</div>

		<div class ="row">

				<form id = "pform" class="" method="POST" action="">
					<div class=" col-md-6 col-md-offset-3">

						<div class = "form-group">
							<label for="hotalName">Credit Card Number </label>
							<input type = "text" name = "card" class="form-control" value="" placeholder = "Enter Card Number" />
						</div>
						
						
                        <div class = "form-group">
							<label for="PaymentType">Payment Type</label>
							<div class = "panel panel-default" name = "card2">
								<span>
									<input type="radio" name="PaymentType1" id="PaymentType" value="mcard"/> Master Card </label> <br/>
									<input type="radio" name="PaymentType2" id="PaymentType" value="vcard"/> Visa Card </label> <br/>
									<input type="radio" name="PaymentType3" id="PaymentType" value="pcard"/> Pay Onier Card </label> 
								</span>
							</div>                            
						</div>
						
						<div class = "form-group">
							<label for="Address">Billing Address Line </label>
							<input type = "text" name = "Address" class="form-control" value="" placeholder = "Billing Address Line" />
						</div>
                                                
						
				</div>
				<div class=" col-md-6 col-md-offset-3 text-center" >
					<button id="addpayment" name = "submit" class="btn btn-default">Add</button>
					<button type="submit" name = "submit" class="btn btn-default" formaction="userHome.php">cancel</button>
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
<script type="text/javascript" src="../../assets/js/payment.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/js/validation.js"></script>



</html>

