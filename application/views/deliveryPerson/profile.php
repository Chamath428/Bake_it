<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-footer.css">
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-header.js" defer ></script>
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-availability.js"></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-profile.css" class="rel">
    <script src="<?php echo BASEURL ?>/public/js/owner/profile.js" defer></script>
</head>
<body>
  
   <?php require_once('headerDP.php'); ?> 
  
  <div class="bgg" id="body">
      <div class="profile-container">
            <div class="middle-section">
                    <div class="profile">
                        <div class="profile-logo">
                            <a href="#" class="herf-user-logo">
                                <i  class='fas fa-user' id="user-icon"></i>
                            </a>
                        </div>
                    </div>
                    <div class="details">
                        <h3 class="profile-topic">User Profile</h3>
                        <div class="input-fileds">
                                <label for="text">First Name</label>
                                <input type="text" name="text" id="email"  value="Amal">
                            </div>
                            <div class="input-fileds">
                                <label for="text">Second Name</label>
                                <input type="text" name="text" id="email"  value="Perera">
                            </div>
                        <h3>User Account Details</h3>
                        <div class="input-fileds">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" readonly value="infobakeit@gmail.com">
                            </div>
                            <div class="input-fileds">
                                <label for="number">Phone Number</label>
                                <input type="number" name="number" id="number"  value=044118659322>
                            </div>
                        <h3>Change Password</h3>

                            <div class="input-fileds">
                                <label for="password">Current Password</label>
                                <input type="password" name="password" id="password"  value="********">
                            </div>
                            <div class="input-fileds">
                                <label for="new_password">New Password(if changing)</label>
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
  </div>
     
          
<?php include('footerDP.php'); ?>