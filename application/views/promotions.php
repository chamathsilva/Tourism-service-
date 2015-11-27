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


	<div class="main">
		<div class="wrap">

			<div class="content-bottom">
				<div class="box1 promo">
					<ul>

					<div id="promotion_div"></div>

					<!--
					<div class="col_1_of_3 span_1_of_3">
							<div class="view view-fifth">
								<div class="top_box">
									<div class="price">Ranlanka</div>
									<p class="m_2">colombo</p>
									<div class="grid_img">
										<div class="css3"><img src="../../images/promotion.png" alt=""/></div>
									</div>

									<p class="m_2">Start Date : Rs:1480</p>
									<p class="m_2">End Date : Rs:1480</p>
									<p class="m_2">colombodsfndsfjkdsfkdskfbkdsbfkds</p>
								</div>
							</div>
						<div class="clear"></div>
					</div>
					-->
						</ul>

				</div>
			</div>
		</div>
	</div>



	<div class="clear" style=" margin-bottom: 25%"></div>
<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/tourism_service.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		//load all the results to home page when load the page.
		$("#promotion_div").prepend('<div class="loading-indication"><img src="../../images/ajax-loader.gif" /> Loading...</div>');
		$("#promotion_div").load("../controllers/fetch_promotions.php");




	});
</script>



</html>
