<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/branch_manager-profile.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/branch_manager-body.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/branch_manager-side_nav_bar2.css" class="rel">
    <script src="../../../public/js/branch_manager_index.js" defer></script>
    <script src="https://kit.fontawesome.com/879f1ad054.js" crossorigin="anonymous"></script>
    <title>Branch Manager Profile Page</title>
</head>
<body>
  
        <section class="header-section">
        <header class="header" style="background-image: linear-gradient(180deg, #000000 0%, #171618 50%, #000000 100%);">

            <div class="bake_it">
            <a href="index.php">Bake_it</a>
            </div>

            <div class="notification_bell">
            <a href="#"><i class="fas fa-bell"></i></a> <!-- Must add the notification panel link-->
            </div>

        </header>
        </section>

        <section class="profile-section">
          <div class="content">
              
                <div class="profile">
                    <div class="profile-logo">
                      <a href="#" class="herf-user-logo">
                          <i  class='fa' id="user-icon">&#xf2bd;</i>
                      </a>
                    </div>
                </div>
                <div class="button-class">
                      <div class="branch-name"> Branch Manager </div>
                      <div class="branch-name">Staff ID - ######</div>
                      <div class="reset-password">
                        <input type="button" id="button"  value="Reset Password">
                      </div>
                    
                </div>
          </div>
        </section>
     
          
<?php include('side_nav_bar.php'); ?>
<?php require_once('footer.php'); ?>