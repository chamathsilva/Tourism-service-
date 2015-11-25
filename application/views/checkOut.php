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
<?php include("top_header.php");
include("main_menu.php");




$price = 55;
$item = 'coffee';
$currency_code = 'aud';

$paypal_url = 'https://paypal.com/pay?type=link&price='.$price.'&currency_code='.$currency_code.'&item='.$item;


echo base_url."application/views/mainLogin.php";
?>
<form action="<?php echo $paypal_url;?>" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>







<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/tourism_service.js"></script>



</html>
