<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Bake_it</title>
    <link href="../../../public/css/customer-navbar-index.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/customer-body.css">
    <link rel="stylesheet" href="../../../public/css/customer-footer.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
    <script src="../../../public/js/navbar.js" defer></script>
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
            <a href="#" class="logo">Bake_it</a>
            <ul class="nav-list">
                <li><a href="">Home</a></li>
                <li><a style="cursor: pointer;">Menu</a>
                    <ul class="sub-menu">
                        <li><a href="">Burger</a></li>
                        <li><a href="">Burger</a></li>
                        <li><a href="">Burger</a></li>
                        <li><a href="">Burger</a></li>
                        <li><a href="">Burger</a></li>
                        <li><a href="">Burger</a></li>
                        <li><a href="">Burger</a></li>
                    </ul>
                </li>
                <li><a style="cursor: pointer;">Outlets</a>
                    <ul class="sub-outlets">
                        <li><a href="">Town1</a></li>
                        <li><a href="">Town1</a></li>
                        <li><a href="">Town1</a></li>
                        <li><a href="">Town1</a></li>
                    </ul>
                </li>
                <li><a href="myorders.php">My Orders</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Order For an Event</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <div class="user-icons">
                <a href=""><i class="far fa-user-circle"></i></a>
                <a href=""><i class="far fa-bell"></i></a>
                <a href="cart.php"><i class="fas fa-shopping-basket"></i></a>
            </div>
        </nav>
    </div>
</header>

<!--End nav-->

<!--Hero-->
<section class="hero">
    <div class="text">
        <h2>Proudly serving</h2>
        <h1>Delicious Food Daily</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <a href="#menu" class="btn">Discover Menu</a>
    </div>
</section>

        <section class="menu" id="menu">
            <h2 class="menu-header">Our Menu</h2>
            <div class="menu-container">
                <div class="menu-box grid-item-1">
                    <a href="#">
                        <img src="../../../public/images/bread.jpg">
                        <div class="h3">BREAD</div>
                    </a>
                </div>
                <div class="menu-box grid-item-2">
                    <a href="#">
                        <img src="../../../public/images/pastry.jpg">
                        <div class="h3">PASTRY</div>
                    </a>
                </div>
                <div class="menu-box grid-item-6">
                    <a href="#">
                        <img src="../../../public/images/cake.jpg">
                        <div class="h3">CAKE</div>
                    </a>
                </div>
                <div class="menu-box grid-item-5">
                    <a href="menuItems.php">
                        <img src="../../../public/images/burger.jpg">
                        <div class="h3">BURGER</div>    
                    </a>
                </div>
                <div class="menu-box grid-item-9">
                    <a href="#">
                        <img src="../../../public/images/snacks.jpg">
                        <div class="h3">SNACKS</div>
                    </a>
                </div>
                <div class="menu-box grid-item-3">
                    <a href="#">
                        <img src="../../../public/images/donuts.jpg">
                        <div class="h3">DONUT</div>
                    </a>
                </div>

                <div class="menu-box grid-item-4">
                    <a href="#">
                        <img src="../../../public/images/muffins.jpg">
                        <div class="h3">MUFFIN</div>
                    </a>
                </div>
                <div class="menu-box grid-item-7">
                    <a href="#">
                        <img src="../../../public/images/sweets.jpg">
                        <div class="h3">SWEETS</div>
                    </a>
                </div>
                <div class="menu-box grid-item-8">
                    <a href="#">
                        <img src="../../../public/images/baverages.jpg">
                        <div class="h3">BAVERAGES</div>
                    </a>
                </div>
            </div>
        </section>
 <?php require_once('footer.php'); ?>