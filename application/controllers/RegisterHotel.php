<?php require("../controllers/dbfunctions.php");?>
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
	<?php include("../views/top_header.php");
	include("../views/main_menu.php");
	?>

	<div class="col-md-6 col-md-offset-3 container panel panel-primary " style="margin-top:10px">
	   <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary" style="margin-top: 10px;">
				<div class="panel-heading">
					<div class = "panel-title"> Your business was succefully added </div>
				</div>

			</div>
		</div>

		<div class ="row">

				
				<div class=" col-md-6 col-md-offset-3">

						<div class = "form-group">
						
						</div>

				</div>

				<div class=" col-md-6 col-md-offset-3 text-center" >
					<button type="submit" name = "submit" class="btn btn-default">View</button>
					</br></br>
				</div>
				</form>
			</div>
		</div>
	<div class="clear"></div>

<?php include("../views/footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/tourism_service.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/js/validation.js"></script>



</html>
<?php



$hotalName=$_POST['hotalName'];
$OwnerName=$_POST['OwnerName'];
$city=$_POST['city'];
$address=$_POST['address'];
$Info=$_POST['Info'];
$hotelType=$_POST['hotelType'];
$noOfRooms=$_POST['noOfRooms'];
$image_path=$_POST['imagename'];

/*
echo $hotalName;
echo $OwnerName;
echo $city;
echo $address;
echo $Info;
echo $hotelType;
echo $noOfRooms;
*/


$db = new Db();

$username=$_SESSION['username'];
$result_set_user = $db->query("SELECT * FROM  user WHERE userName = :userName ", array('userName' => $_SESSION['username'] ));
								
$user_id=$result_set_user[0]['userID'];
echo $image_path;


add_hotel_details($user_id,$hotalName,$OwnerName,$city,$address,$image_path,$hotelType,$Info);






?>