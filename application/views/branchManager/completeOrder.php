<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/orders.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/footer.css">
  <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer></script>
  <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL ?>/public/js/branchManager/completeOrder.js" defer></script>


</head>

<body class="bgg">
  <?php include "headerOrders.php" ?>
  <div id="body" class="container-1">
    <div class="container-2">
      <div class="heading">
        <h1>Branch Orders Overview</h1>
      </div>
      <div class="overview-container">
        <div class="box">
          <h4>Total Orders of the Month</h4>
          <h1><?php echo $data[0] ?></h1>
        </div>
        <div class="box">
          <h4>Total Orders of the Week</h4>
          <h1><?php echo $data[2] ?></h1>
        </div>
        <div class="box">
          <h4>Total Orders of the Day</h4>
          <h1><?php echo $data[3] ?></h1>
        </div>
      </div>
      <div class="heading">
        <h1>Completed Order Details</h1>
      </div>


      <!-- <div class="search-container">

        <input type="text" placeholder="Search by date...." name="search" id="search" onkeyup="search_item();">
        <button type="submit"><i class="fas fa-search"></i></button>

      </div> -->
      <input type="date" id="order-date-picker" name="order-date-picker" onchange="searchOrderByDate()"/>
      <div class="orders-table">
        <table id="dataTable">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Grand Total</th>
              <th>Placed Date</th>
              <th>Order Type</th>
              <th>Receiving Method</th>
              <th>Order Status</th>
            </tr>
          </thead>
          <tbody >
            <?php
            $i = 0;
            foreach ($data[1] as $key => $completedOrder) { ?>
              <tr id="bodyTr">
                <td><a href="<?php echo BASEURL . "/branchManagerOrderController/getCompleteOrderDetails/" . $completedOrder['order_id'] ?>" class="order-id"><?php echo $completedOrder['order_id']; ?></a></td>
                <td><?php echo $completedOrder['total_amount']; ?></td>
                <td><?php echo $completedOrder['placed_date_and_time']; ?></td>

                <td><?php if ($completedOrder['order_type'] == 1) {
                      echo "Quick Order";
                    } else {
                      echo "Special Order";
                    } ?></td>

                <td><?php if ($completedOrder['receiving_method'] == 2) {
                      echo "Home Delivery";
                    } else {
                      echo "Pick From Shop";
                    } ?></td>

                <td><?php if ($completedOrder['order_status'] == 6) {
                      echo "Completed";
                    } elseif ($completedOrder['order_status'] == 7) {
                      echo "Declined";
                    } elseif ($completedOrder['order_status'] == 8) {
                      echo "Cancelled";
                    } ?></td>
              </tr>
            <?php
              $i++;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php include "footer.php" ?>
</body>

</html>