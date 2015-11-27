<!--top-header-->
<div class="header-area ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-8">
                <div class="user-menu ">
                    <ul>
                        <li><a href="<?php echo base_url."application/views/userHome.php"; ?>"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="<?php echo base_url."application/views/MyCart.php"; ?>"><i class="fa fa-user"></i> My Cart</a></li>
                        <li><a href="<?php echo base_url."application/views/checkOut.php"; ?>"><i class="fa fa-user"></i> Checkout</a></li>

                        <?php
                        if(isset($_SESSION['username'])){
                            ?>
                            <li><a href="<?php echo base_url."application/controllers/logout.php"; ?>"<i class="fa fa-user"></i>Logout</a></li>
                            <?php
                        }else{
                            ?>
                            <li><a href="<?php echo base_url."application/views/Login.php"; ?>"<i class="fa fa-user"></i> Login</a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->
<!--top-header-end-->