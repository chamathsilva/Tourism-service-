<!-- mainmenu area -->
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="#active"><a href="<?php echo base_url;?>">Home</a></li>
                    <li><a href="<?php echo base_url."application/views/rooms.php";?>">Rooms</a></li>
                    <li><a href="<?php echo base_url."application/views/promotions.php";?>">Promotions</a></li>
                    <li><a href="<?php echo base_url."application/views/ContactUs.php";?>">Contact</a></li>
                </ul>

                <?php
                if(isset($_SESSION['username'])){
                    ?>
                        <ul class="nav navbar-nav" style="float:right">
                            <li><a href="<?php echo base_url."application/views/userHome.php"; ?>">HI, <?php echo $_SESSION["username"];?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i></a></li>
                        </ul>
                    <?php
                }
                ?>



            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->