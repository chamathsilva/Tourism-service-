<?php
require "dbfunctions.php";


if (isset($_GET['id'])){
    echo $_GET['id'];
    Die();
    header('location: ../views/managePromotions.php');
}
?>
