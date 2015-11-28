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
<div class="size-wraper">
<?php include("top_header.php");
include("main_menu.php");

if(!isset($_SESSION['username'])){
    header("Location: Login.php ");
}


?>



    <!--------------->

    <div class="product-big-title-area " style="margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="my-big-title ">
                        <h2>Book a hotel room </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php


	if(!isset($_GET['hotelid']))
	{
	// header("Location: Login.php ");
	
	}
	else
	{
	$hotelid=$_GET['hotelid'];
	$roomno=$_GET['roomno'];
	$db = new Db();
	$result_set = $db->query("SELECT * FROM  hotel WHERE hotelID = :id ", array('id' => $hotelid ));
	foreach($result_set as $x)
	{
	
	$hotelname=$x['hotelName'];
	
	}
	
	$result_set = $db->query("SELECT * FROM  hotelroom WHERE hotelID = :id and roomID=:room ", array('id' => $hotelid,'room' => $roomno ));
	foreach($result_set as $x)
	{
	
	$price=$x['price'];
	
	}
	
	
	$_SESSION['hotelid']=$hotelid;
	$_SESSION['roomno']=$roomno;
	$_SESSION['price']=$price;




	}


?>


<div class="col-md-6 col-md-offset-3 container panel panel-primary " style="margin-top:10px">
	   <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary" style="margin-top: 10px;">
				<div class="panel-heading">
					<div class = "panel-title"> Add to cart</div>
				</div>

			</div>
		</div>

		<div class ="row">

				<form id = "register-form" class="" method="POST" action="addtocart.php">
					<div class=" col-md-6 col-md-offset-3">

						<div class = "form-group">
							<label for="hotalName">Business Name:</label>
							<?php echo $hotelname ?>
						
							
						</div>


						<div class = "form-group">
							<label for="Room No.">Room No	:</label>
							<?php echo $roomno ?>
						</div>


						<div class = "form-group">
							<label for="Room No.">Price	Rs.	:</label>
							<?php echo $price ?>
						</div>

					
				
				
					
						
                                                
						
				</div>
					
				<div class=" col-md-6 col-md-offset-3 text-center" >
					<button type="submit" name = "submit" class="btn btn-default">Add to cart</button>
			
					</br>
						
					</br>
				</div>
				</form>
				
						
				
			</div>
		</div>



</div>






<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/tourism_service.js"></script>



</html>
