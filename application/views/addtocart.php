<?php
require("../models/Db.class.php");
require("../config/config.php");

$db = new Db();

$username=$_SESSION['username'];
$result_set_user = $db->query("SELECT * FROM  user WHERE userName = :userName ", array('userName' => $_SESSION['username'] ));
								
$userID=$result_set_user[0]['userID'];


$hotelid=$_SESSION['hotelid'];
$roomid=$_SESSION['roomno'];
$price=$_SESSION['price'];

echo $username;
echo $hotelid;
echo $roomid;
echo $price;




$result = $db->query("INSERT INTO shopping_cart(userID,hotel_id,room_id,price) VALUES(:userID,:hotel_id,:room_id,:price)",array("userID"=>$userID,"hotel_id"=>$hotelid,"room_id"=>$roomid,"price"=>$price));
header('Location:MyCart.php')


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