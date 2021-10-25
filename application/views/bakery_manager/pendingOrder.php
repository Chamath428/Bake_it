<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-pending-order.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-pending-order.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Pending Order</title>
</head>
<body>
   

    <?php require_once("header_orders.php"); ?>
   <div class="bgg" id="body">
        <div class="pending">Pending Order</div>

        <div class="table">
        <table class="content-table">
            <thead>
                <tr>
                    <th>Order No</th>
                    <th>Date</th>
                    <th>Outlet </th>
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="moreDetailsPendingOrder.php">0001</a></td>
                    <td>2021/12/03</td>
                    <td>Kesbewa</td>  
                    
                    
                </tr>
                <tr>
                    <td><a href="moreDetailsPendingOrder.php">0001</a></td>
                    <td>2021/03/04</td>
                    <td>Battaramulla</td>  
                    
                    
                </tr>
                <tr>
                    <td><a href="moreDetailsPendingOrder.php">0001</a></td>
                    <td>2021/04/03</td>
                    <td>Piliyandala</td>    
                </tr>
            </tbody>
        </table>
        </div>
   </div>
     
      <?php require_once("footer.php"); ?>
 