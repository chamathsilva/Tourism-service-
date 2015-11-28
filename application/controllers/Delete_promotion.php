<?php
require "dbfunctions.php";


if (isset($_GET['id'])){
    $temp =  $_GET['id'];
    Delete_promotions($temp);
    header('location: ../views/managePromotions.php');
}
?>
