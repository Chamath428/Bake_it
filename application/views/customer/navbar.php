<!--Nav markup goes here-->
    <div class="hero">
    <?php if(isset($_SESSION['branch_name'])){?><h3>Selected Branch : <?php echo $_SESSION['branch_name'] ?></h3><?php } ?>
    </div>
    <div class="container">
        <nav>
            <div class="menu-icons">
                <i class="icon ion-md-menu"></i>
                <i class="icon ion-md-close"></i>
            </div>
            <a href="<?php echo BASEURL ?>" class="logo">Bake_it</a>
            <ul class="nav-list">
                <li><a href="<?php echo BASEURL;?>">Home</a></li>
                <li><a style="cursor: pointer;">Menu</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo BASEURL."/customermenuController/getCategoryItems/1"; ?>">Bread</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController/getCategoryItems/2"; ?>">Pastry</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController/getCategoryItems/3"; ?>">Cake</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController/getCategoryItems/4"; ?>">Burger</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController/getCategoryItems/5"; ?>">Snacks</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController/getCategoryItems/6"; ?>">Donut</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController/getCategoryItems/7"; ?>">Muffin</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController/getCategoryItems/8"; ?>">Sweets</a></li>
                        <li><a href="<?php echo BASEURL."/customermenuController/getCategoryItems/9"; ?>">Baverages</a></li>
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
                 <li><a href="<?php echo BASEURL.'/loginController' ?>">Login</a></li><?php } ?>
            </ul>
            <div class="user-icons">
                <?php if (isset($_SESSION['islogged']) && $_SESSION['islogged']==1) {?>
                <a href="<?php echo BASEURL.'/profileController' ?>"><i class="far fa-user-circle"></i></a>
                <!-- <a href=""><i class="far fa-bell"></i></a> -->
                <a><i data-modal-target="#modal" class="far fa-bell" id=""></i></a>
                <?php if(!empty($data['notifiactions'])){?><span class="notification-count"><?php echo count($data['notifiactions']) ?></span><?php  }?>
                <?php }?>

                    <!-- <a><i data-modal-target="#modal" class="far fa-bell" id="<?php if(!empty($data['notifiactions']))echo "red-not" ?>"></i></a> -->

                <a href="<?php echo BASEURL.'/cartController' ?>"><i class="fas fa-shopping-basket"><?php if(isset($_SESSION['cart_count'])){ ?><span><?php echo $_SESSION['cart_count']; ?></span><?php } ?></i></a>
            </div>
        </nav>
    </div>

    <?php if(isset($pagename) && $pagename!=""){ ?><div class="pagename"><h2><?php echo $pagename;?></h2></div><?php } ?>
    <!-- <div class="shape">
         <h2><?php// echo $pagename;?></h2>
        <div class="custom-shape-divider-top-1633458560">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div> -->
<!--End nav-->





