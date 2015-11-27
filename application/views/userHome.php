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
                        <h2>Hello,<?php echo $_SESSION['username'];?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-3">
                    <div class="single-promo promo1">
                        <a href="RegisterHotel.php">
                            <i class="fa fa-refresh"></i>
                            <p>Add new hotel</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Manage current Hotel</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="single-promo promo3">
                        <a href="PromotionForm.php">
                            <i class="fa fa-lock"></i>
                            <p>Add new Promotion</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="single-promo promo4">
                        <a href="managePromotions.php">
                            <i class="fa fa-gift"></i>
                            <p>Manage Promotions</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- End promo area -->






</div>






<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/tourism_service.js"></script>



</html>
