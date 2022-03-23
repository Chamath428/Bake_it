<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-more-details-complete-order.css" class="rel">
  <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
  <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-header.css" class="rel">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
  <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
  <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-header.js" defer></script>

  <!-- <script src="" defer></script> -->
  <title>More details complete order</title>
</head>

<body>

  <?php require_once("header_orders.php"); ?>


  <div class="bgg" id="body">
    <div id="body" class="container-1">
      <div class="container-2">
        <!-- <div class="heading">
            <h1>Order Details</h1>
          </div> -->


        <div class="heading">
          <h3>Complete Order Details</h3>
        </div>
        <div class="order-details">

          <div class="basic-details">
            <table>

              <?php

              foreach ($data[0] as $key => $basicOrderDetails) { ?>
                <tr>
                  <td>Order ID</td>
                  <td><?php echo $basicOrderDetails['order_id']; ?></td>

                </tr>
                <tr>
                  <td>Completed Date</td>
                  <td><?php echo $basicOrderDetails['needed_date']; ?></td>
                </tr>
              <?php } ?>

            </table>
          </div>
        </div>
        <div class="order-details-table">
          <table id="orderDetails">
            <thead>
              <tr>
                <th>Item ID</th>
                <th>Food Item</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>


              <?php

              foreach ($data[1] as $key => $basicOrderDetails) { ?>
                <tr>

                  <td><?php echo $basicOrderDetails['menu_id']; ?></td>
                  <td>
                    <div class="cell">
                      <div class="image"><img src="<?php echo BASEURL ?>/public/images/branchManager/b1.png" alt=""></div>
                      <div>
                        <p><?php echo $basicOrderDetails['item_name']; ?></p>
                      </div>
                    </div>
                  </td>
                  <td><?php echo $basicOrderDetails['quantity']; ?></td>

                </tr>
              <?php } ?>


            </tbody>
          </table>
        </div>
     

      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>