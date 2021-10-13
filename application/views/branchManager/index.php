<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/branch_manager-body.css">
    <link rel="stylesheet" href="../../../public/css/branch_manager-side_nav_bar.css">
    <script src="../../../public/js/branch_manager_index.js" defer></script>
    <script src="https://kit.fontawesome.com/879f1ad054.js" crossorigin="anonymous"></script>
    <title>Welcome to Bake_it</title>
</head>
<body>

    <header class="header">

    <!-- Navigation Bar Starts -->
    <div class="user_logo">
       <a href="profile.php"><i class="fas fa-user"></i></a>
    </div>

    <div class="bake_it">
       <a href="index.php">Bake_it</a>
    </div>

    <div class="notification_bell">
       <a href="#"><i class="fas fa-bell"></i></a> <!-- Must add the notification panel link-->
    </div>

    </header>
    
    <div class="image-div">
          <img src="../../../public/images/home1.jpg" alt="image" class="image">
      </div>

   <?php include('side_nav_bar.php'); ?>

<?php include('footer.php'); ?>