<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/index.css">
    <script src="../../../public/js/index.js" ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    
</head>
<body>
  
   <!--Top Navigation-->
    <header>
       <a href="#"><i class="fas fa-user"></i></a>
       <a href="index.php" class="Bake-it">Bake_it</a>
       <a href="#"><i class="fas fa-bell"></i><p>Notifications</p></a>   
    </header> 

     <!-- side navigation-->
     <a href="#" class="btn-open" onclick="openSideMenu()"><i class="fas fa-bars"></i></a> 
    <div id="side-menu" class="side-nav">
      <a href="#" class="btn-close" onclick="closeSideMenu()">&times;</a>
      <a href="Availability.php" onclick="closeIndexBody()">Availability</a>
      <a href="Deliveries.php">Deliveries</a>
      <a href="Reviews.php">Reviews</a>
    </div>
    <!-- body description -->
    <div id="index">
      <div class="container1">
        <div id="main" class="first-text">
          <h1>Welcome!!!</h1>
          <h3>We are happy to work with you <br>We wish you <h2>Happy Delivery Time</h2></h3>
        </div>
        <img class="firstImage"src="../../../public/images/clipart2.png"> 
      </div>
      <div class="container2">
        <img class="secondImage"src="../../../public/images/logo.png">
        <div class="second-text">
        <p>Be proud of being member of <h1>WK Bakers</h1> family
        <br>Happy to work with you<br>We belive you give your best for our family
        </p>
        </div> 
      </div>
   </div>
   <?php include('footer.php'); ?> 
</body>
</html>