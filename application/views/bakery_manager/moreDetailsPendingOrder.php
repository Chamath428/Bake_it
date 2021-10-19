<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-more-details-pending-order.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-more-details-pending-order.js" defer></script>
    <!-- <script src="" defer></script> -->
    <title>more details pending order</title>
</head>
<body>


      <header>
                <div class="header-container">
                      <!-- <div class="title"> -->
                          <span class="bakeit" id="bakeId">Bake_it</span>
                      <!-- </div> -->
                      <!-- <div class="header-icons"> -->
                          <span class="user-icon"><a href="profile.php"><i id="user" class="fas fa-user"></i></a></span>
                          <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
                      <!-- </div> -->
                  </div>
          </header>

          <div class="back-arrow">
              <a href="pending_order.php" class="herf-hand-point">
                <i class='fa' id="back-hand-point">&#xf0a5; </i>
              </a>
           
          </div>

      </div>
      <div class="order-no">Order - 000#</div>
      <div class="content">
            
      <div class="details">
            <table class="content-table">
                <tbody>

                <tr>
                    <td>Order No</td>
                    <td>.....</td>  
                    
                </tr>
                <tr>
                    <td>Date</td>
                    <td>.....</td>  
                    
                </tr>
                <tr>
                    <td>Outlet</td>
                    <td>.....</td>

                </tr>
                <tr>
                    <td>.....</td>
                    <td>.....</td>

                </tr>
                <tr>
                    <td>.....</td>
                    <td>.....</td>

                </tr>
                <tr>
                    <td>.....</td>
                    <td>.....</td>

                </tr>
            </tbody>
        </table>
        <div class="finishebtn">
            <button onclick="finishedFunction()">Finished</button>
        </div>
   
      </div>

      </div>
<?php include('footer.php'); ?>
     