<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-profile.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="<?php echo BASEURL ?>/public/js/cashier/cashier-profile.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/cashier/cashier-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Profile</title>
</head>
<body>
  
<?php require_once("header.php"); ?>
 
  <div class="bgg" id="body">
        <div class="middle-section">
              
              <div class="profile">
                  <div class="profile-logo">
                    <a href="#" class="herf-user-logo">
                        <i  class='fa' id="user-icon">&#xf2bd;</i>
                    </a>
                  </div>
              </div>
              <div class="button-class">
                    <div class="bakery-name"> Cashier </div>
                    <h3>Change Password</h3>

                    <div class="input-fileds">
                        <label for="password">Current Password</label>
                        <input type="password" name="password" id="password"  value="">
                    </div>
                    <div class="input-fileds">
                        <label for="new_password">New Password</label>
                        <input type="password" name="password" id="password"  value require>
                    </div>
                    <div class="input-fileds">
                        <label for="com_new_password">Comfirm New Password</label>
                        <input type="password" name="password" id="password"  value require>
                    </div>
                    <div class="btn-update">
                  <button onclick="updateDetailsFunction()">Update User Account</button>
              </div>
              </div>
        </div>
  </div>


 <?php require_once("footer.php"); ?>
          
