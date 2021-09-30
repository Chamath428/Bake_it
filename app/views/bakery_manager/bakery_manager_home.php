<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery_manager_home_style.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/bakery_manager_home_script.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Bakery manager home page</title>
</head>
<body>
 
    
        <div class="header">
          
            <a href="profile.php" class="herf_user_logo">
              <div class="user_logo">
                <i class="fa fa-user" id="user_logo_id"></i>
              </div>
            </a>
      
              <div class="bake_it"><a href="bakery_manager_home.php" class="herf-bake-it">Bake_it</a></div>

             <a href="#" class="herf_bell_icon">
                <div class="bell_icon">
                        <i class="fa fa-bell" id="bell"></i>
                </div>
                <div class="notification_text">Notification</div>
              </a>
        </div>

      <div class="image-div">
          <img src="../../../public/images/bakery_manager/home-image.jpg" alt="image" class="image">
      </div>
    
    
 <?php include('side_nav_bar.php'); ?>

<?php include('footer.php'); ?>
    