<!doctype html>
<?php 
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
    } 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Bake_it</title>
    <link href="<?php echo BASEURL ?>/public/css/customer/customer-navbar-index.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-body.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-body.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
</head>
<body>
<!--Nav markup goes here-->

<header>
    <div class="container">
        <nav>
            <div class="menu-icons">
                <i class="icon ion-md-menu"></i>
                <i class="icon ion-md-close"></i>
            </div>
            <a href="<?php BASEURL ?>" class="logo">Bake_it</a>
            <ul class="nav-list">
                <li><a href="<?php BASEURL ?>">Home</a></li>
                <li><a style="cursor: pointer;">Menu</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo BASEURL."/customermenuController"; ?>">Bread</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController"; ?>">Pastry</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController"; ?>">Cake</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController"; ?>">Burger</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController"; ?>">Snacks</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController"; ?>">Donut</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController"; ?>">Muffin</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController"; ?>">Sweets</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController"; ?>">Baverages</a></li>
                    </ul>
                </li>
                <li><a style="cursor: pointer;">Outlets</a>
                    <ul class="sub-outlets">
                        <li><a href="<?php echo BASEURL."/homeController/setBranch/1" ?>">Kasbewa</a></li>
                        <li><a href="<?php echo BASEURL."/homeController/setBranch/2" ?>">Baththramulla</a></li>
                        <li><a href="<?php echo BASEURL."/homeController/setBranch/3" ?>">Piliyandala</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo BASEURL.'/myordersController' ?>">My Orders</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="<?php echo BASEURL."/orderForEventController"; ?>">Order For an Event</a></li>
                <?php if (isset($_SESSION['islogged']) && $_SESSION['islogged']==1) {?>
                <li><a href="<?php echo BASEURL.'/loginController/logout' ?>">Logout</a></li><?php } else{ ?>
                 <li><a href="<?php echo BASEURL.'/loginController' ?>">Login</a></li><?php }?>
                
            </ul>
            <div class="user-icons">
                <?php if (isset($_SESSION['islogged']) && $_SESSION['islogged']==1) {?>
                <a href="<?php echo BASEURL.'/profileController' ?>"><i class="far fa-user-circle"></i></a>
                <a href=""><i class="far fa-bell"></i></a><?php }?>
                <a href="<?php echo BASEURL.'/cartController' ?>"><i class="fas fa-shopping-basket"></i></a>
            </div>
        </nav>
    </div>
</header>

<!--End nav-->

<!--Hero-->
<section class="hero">
    <?php if(isset($_SESSION['branch_name'])){?><h3>Selected Branch : <?php echo $_SESSION['branch_name'] ?></h3><?php } ?>
    <div class="text">
        <h1>Bake_it</h1>
        <h2>Best Taste Since 1997</h2>
        <p>We are open every day from 7.00AM to 8.00PM.</p>
        <a href="#menu" class="btn">Discover Menu</a>
    </div>
</section>

        <section class="menu" id="menu">
            <h2 class="menu-header">Our Menu</h2>
            <div class="menu-container">
                <div class="menu-box grid-item-1">
                    <a href="<?php echo BASEURL."/customermenuController"; ?>">
                        <img src="<?php echo BASEURL ?>/public/images/bread.jpg">
                        <div class="h3">BREAD</div>
                    </a>
                </div>
                <div class="menu-box grid-item-2">
                    <a href="#">
                        <img src="<?php echo BASEURL ?>/public/images/pastry.jpg">
                        <div class="h3">PASTRY</div>
                    </a>
                </div>
                <div class="menu-box grid-item-6">
                    <a href="<?php echo BASEURL."/customermenuController"; ?>">
                        <img src="<?php echo BASEURL ?>/images/cake.jpg">
                        <div class="h3">CAKE</div>
                    </a>
                </div>
                <div class="menu-box grid-item-5">
                    <a href="<?php echo BASEURL."/customermenuController"; ?>">
                        <img src="<?php echo BASEURL ?>/images/burger.jpg">
                        <div class="h3">BURGER</div>    
                    </a>
                </div>
                <div class="menu-box grid-item-9">
                    <a href="<?php echo BASEURL."/customermenuController"; ?>">
                        <img src="<?php echo BASEURL ?>/images/snacks.jpg">
                        <div class="h3">SNACKS</div>
                    </a>
                </div>
                <div class="menu-box grid-item-3">
                    <a href="<?php echo BASEURL."/customermenuController"; ?>">
                        <img src="<?php echo BASEURL ?>/public/images/donuts.jpg">
                        <div class="h3">DONUT</div>
                    </a>
                </div>

                <div class="menu-box grid-item-4">
                    <a href="<?php echo BASEURL."/customermenuController"; ?>">
                        <img src="<?php echo BASEURL ?>/public/images/muffins.jpg">
                        <div class="h3">MUFFIN</div>
                    </a>
                </div>
                <div class="menu-box grid-item-7">
                    <a href="<?php echo BASEURL."/customermenuController"; ?>">
                        <img src="<?php echo BASEURL ?>/public/images/sweets.jpg">
                        <div class="h3">SWEETS</div>
                    </a>
                </div>
                <div class="menu-box grid-item-8">
                    <a href="<?php echo BASEURL."/customermenuController"; ?>">
                        <img src="<?php echo BASEURL ?>/public/images/baverages.jpg">
                        <div class="h3">BAVERAGES</div>
                    </a>
                </div>
            </div>
        </section>
 <?php require_once('footer.php'); ?>