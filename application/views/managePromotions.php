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
    <title>Tourism Services |Promotions </title>
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
?>


    <div class="single-product-area ">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 ">
                    <div class="product-content-right">
                        <div class="woocommerce">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Id</th>
                                        <th class="product-name">Promotion Name</th>
                                        <th class="product-price">Valid till</th>
                                        <th class="product-quantity">Manage</th>
                                    </tr>
                                    </thead>

                                    <tbody id = "manage_promotion" >
                                    </tbody>
                                </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<div class="clear""></div>
</div>

<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/promotion.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/js/validation.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        //load all the results to home page when load the page.
        $("#manage_promotion").prepend('<div class="loading-indication"><img src="../../images/ajax-loader.gif" /> Loading...</div>');
        $("#manage_promotion").load("../controllers/fetch_manage_promotions.php");




    });
</script>






</html>
