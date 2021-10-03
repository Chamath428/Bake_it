<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/profile.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/side_nav.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="../../../public/js/bakery_manager/profile.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Bakery manager home page</title>
</head>
<body>
  

        <div class="header">
         
    
          <div class="bake_it"><a href="bakery_manager_home.php" class="herf-bake-it">Bake_it</a></div>
            <a href="#" class="herf_bell_icon">
              <div class="bell_icon">
                      <i class="fa fa-bell" id="bell"></i>
              </div>
            </a>
       </div>
          <div class="notification_text">Notification</div>

          <div class="middle-section">
              
                <div class="profile">
                    <div class="profile-logo">
                      <a href="#" class="herf-user-logo">
                          <i  class='fa' id="user-icon">&#xf2bd;</i>
                      </a>
                    </div>
                </div>
                <div class="button-class">
                      <div class="bakery-name"> Bakery Manager </div>
                      <div class="reset-password">
                        <input type="button" id="button"  value="Reset Password">
                      </div>
                    
                </div>
          </div>

     
          
<?php include('side_nav_bar.php'); ?>
<?php include('footer.php'); ?>