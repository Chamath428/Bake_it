<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/test.css">
    <script src="../../../public/js/deliveryPerson/test.js" ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <title>Test</title>
</head>
<body>
    <header>
            <div class="header-name"><span class="bake-it">Bake_it</span></div>
            <div id="header-navigation">
                <div class="header-funtions">
                    <div><a href="index.php">Home</a></div>
                    <div><a href="availability.php">Availability</a></div>
                    <div><a href="deliveries.php">Deliveries</a></div>
                    <div><a href="reviews.php">Reviews</a></div>
                    <!-- <div>owner1</div>
                    <div>owner2</div> -->
                </div>
            <div class="header-icon">
                <div class="user-icon"><a href="#"><i class="fas fa-user"></i></a></div>
                <div class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a> </div>
            </div>    
            </div>
            <div class="nav-bars">
                <div id="open">
                    <i  class="fas fa-bars" onclick="openSideMenu()"></i>
                </div>
                <div id="close">
                    <i class="fas fa-times" onclick="closeSideMenu()"></i>
                    <!-- <a href="#" class="btn-close" onclick="closeSideMenu()">&times;</a> -->
                </div>
            </div>
    </header>


    <div id="side-nav">
            
        <ul>
                <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="availability.php"><i class="fas fa-check-circle"></i>Availability</a></li>
                <li><a href="deliveries.php"><i class="fas fa-motorcycle"></i>Deliveries</a></li>
                <li><a href="reviews.php"><i class="fas fa-star"></i>Reviews</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="#"><i class="fas fa-bell"></i>Notifications</a></li>
        </ul>
       <!-- <a href="#" class="btn-open" onclick="openSideMenu()"><i class="fas fa-bars"></i></a> -->
    </div>
</body>
</html>