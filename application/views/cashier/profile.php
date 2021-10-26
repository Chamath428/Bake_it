<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- <link rel="stylesheet" href="<?php //echo BASEURL ?>/public/css/cashier/cashier-profile.css" class="rel"> -->
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-header.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-profile.css" class="rel">
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
      <div class="profile-container">
            <div class="middle-section">
                    <div class="profile">
                          <?php if (isset($message['confirmation']) && $message['confirmation']!=""){?>
                        <div class="confirm-alert">
                          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                          <p><?php echo $message['confirmation']; ?></p>
                        </div>
                        <?php } ?>

                        <?php if (isset($message['error']) && $message['error']!=""){?>
                        <div class="danger-alert">
                          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                          <p><?php echo $message['error']; ?></p>
                        </div>
                        <?php } ?>


                        <div class="profile-logo">
                            <a href="#" class="herf-user-logo">
                                <i  class='fas fa-user' id="user-icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="details">
                    <form method="post" action="<?php echo BASEURL."/profileEmployeeController/updatePassword";?>">
                        <h3 class="profile-topic">User Profile</h3>
                        <div class="input-fileds">
                                <label for="text">First Name</label>
                                <input type="text" name="text" id="email" readonly value="<?php echo $data['firstname']; ?>">
                            </div>
                            <div class="input-fileds">
                                <label for="text">Second Name</label>
                                <input type="text" name="text" id="email" readonly value="<?php echo $data['lastname']; ?>">
                            </div>
                        <h3>User Account Details</h3>
                        <div class="input-fileds">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" readonly value="<?php echo $data['email']; ?>">
                            </div>
                            <div class="input-fileds">
                                <label for="number">Phone Number</label>
                                <input type="number" name="number" id="number" readonly value="<?php echo $data['phonenumber']; ?>">
                            </div>

                            
                        <h3>Change Password</h3>
                        
                            <div class="input-fileds">
                                <label for="password">Current Password</label>
                                <input type="password" name="current-password" id="password"  value="">
                            </div>
                            <div class="input-fileds">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new-password" id="password"  value="" required="">
                            </div>
                            <div class="input-fileds">
                                <label for="com_new_password">Comfirm New Password</label>
                                <input type="password" name="confirm-password" id="password"  value="" required="">
                            </div>
                            <div class="btn-update">
                                <button>Update User Account</button>
                            </div>
                        </form>
                    </div>

                   
            </div>  
      </div>
  </div>



 <?php require_once("footer.php"); ?>
          
