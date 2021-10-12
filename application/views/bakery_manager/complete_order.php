<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/complete_order.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/side_nav.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/complete_order.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Complete Order</title>
</head>
<body>


        <!-- <div class="header">
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
            </a>
          <div class="notification_text">Notification</div>
          
        </div> -->
        <?php require_once('header.php'); ?>

      <div class="completed">Complete Order</div>
      
      <div class="button-complete-pending">
          <div class="completebtn">
            <input type="button" id="button"  value="Completed" onclick="completeFunction()"/>
          </div>
          <div class="pendingbtn">
            <input type="button" id="button" value="Pending" onclick="pendingFunction()"/>
          </div>
      </div>

      <div class="table">
      <table class="content-table">
            <thead>
                <tr>
                    <th>Order No</th>
                    <th>Order Name</th>
                    <th>Size / Quantity</th>
                    <th>Outlet </th>
                    <th> Completed</th>
                    
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>001</td>
                    <td>chocolate cake</td>
                    <td>10Kg</td>
                    <td>Deniyaya</td>                    
                    <td><i class="fa fa-check" id="check"></i></td>
                    
                </tr>
                <tr>
                    <td>002</td>
                    <td>sweet rolls</td>
                    <td>130</td>
                    <td>Matara</td>                    
                    <td><i class="fa fa-check" id="check"></i></td>
                    
                   
                </tr>
                <tr>
                    <td>003</td>
                    <td>rolls</td>
                    <td>400</td>
                    <td>Akuressa</td>                    
                    <td><i class="fa fa-check" id="check"></i></td>
                    
                   
                </tr>
            </tbody>
        </table>
     
      </div>
    
       


<?php include('side_nav_bar.php'); ?>
<?php include('footer.php'); ?>