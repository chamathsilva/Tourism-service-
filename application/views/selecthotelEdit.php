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
                        <h2>Hotels belongs to <?php echo $_SESSION['username'];?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

$db = new Db();

$username=$_SESSION['username'];
$result_set_user = $db->query("SELECT * FROM  user WHERE userName = :userName ", array('userName' => $_SESSION['username'] ));
								
$user_id=$result_set_user[0]['userID'];

$result_set_user = $db->query("SELECT * FROM  hotel WHERE userID = :userID ", array('userID' => $user_id ));

foreach($result_set_user as $hotel)
{

//echo $hotel['hotelName'];
echo "

<div class='wrap'>

        <div class='content-bottom'>
            <div class='box1'>
                <div class='col_1_of_3 span_1_of_3'><a href='editrooms.php?hotelid=".$hotel['hotelID']."'>
                        <div class='view view-fifth'>
                            <div class='top_box'>
                                <h3 class='m_1'>Hotel</h3>
                                <p class='m_2'>".$hotel['hotelName']."</p>
                                <div class='grid_img'>
                                    <div class='css3'><img src='temp/".$hotel['imagePath']."' alt=''/></div>
                                    <div class='mask'>
                                       
                                    </div>
                                </div>
                             
                            </div>
                        </div>

                        <div class='clear'></div>
                    </a></div>
          
                <div class='clear'></div>
            </div>
        </div>
    </div>";



}
								




?>


         






</div>






<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/tourism_service.js"></script>



</html>
