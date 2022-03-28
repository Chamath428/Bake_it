<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="<?php //echo BASEURL; ?>/public/css/branchManager/profile.css" class="rel"> -->
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-profile.css" class="rel">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/templates/employee-messageboxes.css"> 
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/profile.js" defer></script>
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer></script>
</head>
<body>
  
   <?php require_once('headerIndex.php'); ?> 
  
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
                            <input type="text" name="text" id="firstname"  value="<?php if (isset($data['firstname']))echo $data['firstname']; ?>" readonly="">
                        </div>
                        <div class="input-fileds">
                            <label for="text">Last Name</label>
                            <input type="text" name="text" id="lastname"  value="<?php if (isset($data['lastname']))echo $data['lastname']; ?>" readonly="">
                        </div>
                        <h3>User Account Details</h3>
                        <div class="input-fileds">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email"  value="<?php if (isset($data['email']))echo $data['email']; ?>" readonly="">
                        </div>
                        <div class="input-fileds">
                            <label for="number">Phone Number</label>
                            <input type="number" name="number" id="number"  value="<?php if (isset($data['phonenumber']))echo $data['phonenumber']; ?>">
                        </div>
                        <form method="post" action="<?php echo BASEURL."/profileEmployeeController/updatePassword";?>">
                            <h3>Change Password</h3>

                        <div class="input-fileds">
                            <label for="password">Current Password</label>
                            <input type="password" name="current-password" id="password"  required="">
                        </div>
                        <div class="input-fileds">
                            <label for="new_password">New Password</label>
                            <input type="password" name="new-password" id="password"   required="">
                        </div>
                        <div class="input-fileds">
                            <label for="com_new_password">Confirm New Password</label>
                            <input type="password" name="confirm-password" id="password"   required="">
                        </div>
                        <div class="btn-update">
                            <button type="input">Update User Account</button>
                        </div>
                    </form>
                 </div>   
            </div>  
      </div>
  </div>
     
          
<?php include('footer.php'); ?>