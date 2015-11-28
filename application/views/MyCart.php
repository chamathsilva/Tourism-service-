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
?>





<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area ">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Hotel Name</th>
                                    <th class="product-subtotal">Price</th>
                                    <th class="product-subtotal"> Room No.</th>
									<th class="product-subtotal"> Total</th>
                                </tr>
                                </thead>

                                <tbody>
								
								<?php
								
								$db = new Db();
								$result_set_user = $db->query("SELECT * FROM  user WHERE userName = :userName ", array('userName' => $_SESSION['username'] ));
								
								$userID=$result_set_user[0]['userID'];
							
								$total_price=0;
								$result_set = $db->query("SELECT * FROM  shopping_cart WHERE userID = :userID ", array('userID' => $userID ));
								
								
								
								
								foreach($result_set as $x)
								{
								
								$result_set_hotel = $db->query("SELECT * FROM  hotel WHERE hotelID = :hotelid ", array('hotelid' => $x['hotel_id'] ));
								
								$total_price=$total_price+ $x['price'];
								echo "
                                <tr class='cart_item'>
                                    <td class='product-remove'>
                                        <a title='Remove this item' class='remove' href='#'>×</a>
                                    </td>

                                    <td class='product-thumbnail'>
                                        <a href='single-product.html'><img width='145' height='140' alt='poster_1_up' class='shop_thumbnail' src='temp/".$result_set_hotel[0]['imagePath']."   '></a>
										
										
                                    </td>
									
								

                                    <td class='product-name'>
                                        <a href='single-product.html'>".$result_set_hotel[0]['hotelName']."</a>
                                    </td>

                                    <td class='product-price'>
                                        <span class='amount'>Rs.".$x['price']."</span>
                                    </td>

                                    <td class='product-quantity'>
                                        <span class='amount'>".$x['room_id']."</span>
                                    </td>

                                    <td class='product-subtotal'>
                                        <span class='amount'>Rs.".$x['price']."</span>
                                    </td>

                                   
                                </tr>";
							
								}
								
								?>

                                <tr>
                                    <td class="actions" colspan="6">
                                        <input type="submit" value="Update Cart" name="update_cart" class="button">
                                        <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                    </td>
                                </tr>



                                </tbody>

                            </table>
                        </form>



                        <div class="cart_totals ">
                            <h2>Cart Totals</h2>
							
                            <table cellspacing="0">
                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal Rs.</th>
                                    <td><span class="amount">
									
									<?php echo $total_price; ?>
									
									</span></td>
                                </tr>

                                <tr class="order-total">
                                    <th>Order Total Rs.</th>
                                    <td><strong><span class="amount">
									
									<?php echo $total_price; ?>
									</span></strong> </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/tourism_service.js"></script>



</html>
