<div class="container">
    <div class="navigation" id="mySidebar" >
        <ul>
            <li>
                <a href="<?php echo BASEURL . "/dashboardController"; ?>" class="active">
                    <span class="icon"><i class="fas fa-th-large"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL . "/deliveryPersonAvailabilityController"; ?>" class="hrf">
                    <span class="icon"> <i class="fas fa-check-circle"></i></span>
                    <span class="title">Availability</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL . "/deliveryPersonDeliveriesController"; ?>" class="hrf">
                    <span class="icon"><i class="fas fa-motorcycle"></i></span>
                    <span class="title">Deliveries</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL . "/walletController"; ?>" class="hrf">
                    <span class="icon"><i class="fas fa-wallet"></i></span>
                    <span class="title">Wallet</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL . "/deliveryPersonReviewsController"; ?>" class="hrf">
                    <span class="icon"><i class="fas fa-star"></i></span>
                    <span class="title">Reviews</span>
                </a>
            </li>
            <li class="logout">
                <a href="<?php echo BASEURL . '/loginController/logout'; ?>" class="hrf">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="title">Logout</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- <div id="arrowAnim">
        <div class="arrowSliding">
            <div class="arrow"></div>
        </div>
        <div class="arrowSliding delay1">
            <div class="arrow"></div>
        </div>
        <div class="arrowSliding delay2">
            <div class="arrow"></div>
        </div>
        <div class="arrowSliding delay3">
            <div class="arrow"></div>
        </div>
    </div> -->


    <!-- <div id="arrowAnim-left">
        <div class="arrowSliding-left">
            <div class="arrow-left"></div>
        </div>
        <div class="arrowSliding delay1-letf">
            <div class="arrow-left"></div>
        </div>
        <div class="arrowSliding delay2-left">
            <div class="arrow-left"></div>
        </div>
        <div class="arrowSliding delay3-left">
            <div class="arrow-left"></div>
        </div>
    </div> -->

</div>

<header class="header-container">
    <div class="bake-it" id="bakeId">
        <span class="bakeit">Bake_it</span>
    </div>
    <!-- <span id="available">You are available for deliveries</span> -->

    <?php if (isset($_SESSION['availability'])) {
        if ($_SESSION['availability'] == 1) { ?>
            <span class="available">You are available for deliveries</span>
        <?php } else { ?>
            <span class="available">You are not available for deliveries</span>
    <?php
        }
    } ?>

    <div class="header-icons">
        <span class="user-icon"><a href="<?php echo BASEURL . '/profileEmployeeController' ?>"><i id="user" class="fas fa-user"></i></a></span>
        <span class="text">You logged in as : Delivery Person</span>
        <span class="bell-icon" onclick="toggleNotifi()">
            <a href="">
                <i class="fas fa-bell"><?php include "notificationPanel.php" ?></i>
            </a>
        </span>
        <span class="sign-out"><a href="<?php echo BASEURL . '/loginController/logout' ?>"><i class="fas fa-sign-out-alt"></i></a></span>
        <!-- <span class="text"><a href="#">Logout</a></span> -->
        <span class="side-toggle">
            <a href="#" class="icon" onclick="sidetoggle()">
                <!-- <a href="" class="icon"> -->
                <i class="fa fa-bars"></i>
            </a>
        </span>
        <span class="text"><a href="<?php echo BASEURL . '/loginController/logout' ?>">Logout</a></span>
    </div>
</header>