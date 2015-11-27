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
<?php include("top_header.php");
include("main_menu.php");
?>



<div class="container col-md-7 col-md-offset-2">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary" style="margin-top: 10px;">
            <div class="panel-heading">
                <div class = "panel-title text-center" > Promotions</div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <div id="results"></div>
        </div>
    </div>

    <div class = "row">
        <div class="panel panel-primary col-md-6 col-md-offset-3 text-center">

            </br>
            <form class=""  id="promotion_form" action = "" method = "POST" >


                <div class = "form-group">
                    <label for="offername">Offer Name</label>
                    <input id="offername" value="<?php echo $_GET['name']; ?>" type = "text" id = "offername" name = "offername" class="form-control" placeholder="Offer Name" />
                </div>

                <div class = "form-group">
                    <label for="valid">Valid Till</label>
                    <input id="valid"  value="<?php echo $_GET['date']; ?>"  type = "text" id ="valid" name = "valid" class="form-control" placeholder="Valid Till" />
                </div>
                <div class = "form-group">
                    <label for="address">Offer Description</label>

                    <textarea type = "textarea"   rows="5" cols="40" id="Info" id = "Info" name = "Info" class="form-control"  placeholder = "Offer Description" /><?php echo $_GET['disc'];?></textarea>
                </div>

                <button type="submit" id="publish_offer" name = "publish" class="btn btn-info">Publish</button>

                </br></br>
            </form>
            </br>
        </div>
    </div>
</div>
<div class="clear" style=" margin-bottom: 25%"></div>
<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/js/validation.js"></script>






</html>
