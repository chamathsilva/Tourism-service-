<?php
require("application/models/Db.class.php");
require("application/config/config.php");
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/tourism_service.css"/>
    <link  rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"
</head>
<body>

<div class="size-wraper">
<?php include("application/views/top_header.php") ;
include("application/views/main_menu.php");?>

<?php include("application/views/slider.php"); ?>

<!-- Search box Start -->
<div class="product-big-title-area" style="margin-bottom: 50px; margin-top: 50px">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 text-right">
				<div class="my-big-title text-right" style="margin-top: 5px">
					<h2>Search Hotel</h2>
				</div>
			</div>
			<div class="col-xs-6 text-left">
				<form style="margin-bottom: 10px; margin-top: 10px">
					<div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Select a City <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">United Statesugugughuhuuhuhu</a></li>
							<li><a href="#">Canada</a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-star"></span> Other</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" id="btnSearch" class="btn btn-primary">Search</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Search box End -->

	<!--####################################################################################################################################-->
	<div class="main">
                <div class="wrap">   
				   
				  <div class="content-bottom">
				   <div class="box1">
				    <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Ranlanka</h3>
					  	<p class="m_2">colombo</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs:1480</div>
					   </div>
					    </div>
					   
						 <ul class="list">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="javascript:tempp()"  >Add To Bag </a>
								  <a id="demo" onclick="myFunction(this, 'red')">Click me to change my text color.</a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>

				    <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Hilton</h3>
					  	<p class="m_2">Anuradapira</p>
					    <div class="grid_img">
						   <div class="css3"><img src="images/pic1.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs:1250.00</div>
					   </div>
					    </div>
					   
						 <ul class="list">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">OSO</h3>
					  	<p class="m_2">Wellawattha</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic2.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs:15000.00</div>
					   </div>
					    </div>
					   
						 <ul class="list">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			  </div>
			  
			  <!--  new one  -->
			  
			  <div class="box1">
				  <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic3.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">£480</div>
					   </div>
					    </div>
					   
						 <ul class="list">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic4.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">£480</div>
					   </div>
					    </div>
					   
						 <ul class="list">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				   <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic5.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">£480</div>
					   </div>
					    </div>
					   
						 <ul class="list">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			    </div>
			  </div>
			 </div>
        </div>
<a  onclick="tempp();" return false;">LINK</a>

<a href="http://www.example.com" onclick="return tempp()">test</a>


<a id="demo" onclick="myFunction(this, 'red')">Click me to change my text color.</a>

<script>
	function myFunction(elmnt,clr) {
		//test11();
		elmnt.style.color = clr;



	}
</script>


<?php include("application/views/footer.php") ?>
	</div>
</body>
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/tourism_service.js"></script>

<!-- Slider -->
<script type="text/javascript" src="assets/js/bxslider.min.js"></script>
<script type="text/javascript" src="assets/js/script.slider.js"></script>


<script>
	$(document).ready(function(){
		$(".test1").click(function(){
			alert("The paragraph was clicked.");
		});

		function test11(){
			alert("The paragraph was clicked.");

		}


	});
</script>
</html>
