<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/orders.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/footer.css">
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer ></script>
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/order.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body class="bgg">
    <?php include "headerOrders.php"?>
    <div id="body" class="container-1">
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
        <div class="container-2">
            <div class="heading">
              <h1>Branch Orders of the Day</h1>
            </div>
            <div class="overview-container">
                <div class="box">
                    <h4>Total Orders</h4>
                    <h1><?php echo $data[0]?></h1>
                </div>
                <div class="box">
                    <h4>Completed Orders</h4>
                    <h1><?php echo $data[2]?></h1>
                </div>
                <div class="box">
                    <h4>Uncompleted Orders</h4>
                    <h1><?php echo ($data[0] - $data[2])?></h1>
                </div>
            </div>
            <div class="heading">
              <h1>Special Order Details</h1>
            </div>
            <div class="orders-table">
            <table>
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Grand Total</th>
                        <th>Placed Date</th>
                        <th>Needed Date</th>
                        <th>Receiving Method</th>
                        <th>Order Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i=0;
                      foreach($data[1] as $key => $specialOrder) {?>
                        <tr>
                          <td><a href="<?php echo BASEURL."/branchManagerOrderController/getSpecialOrderDetails/".$specialOrder['order_id'] ?>" class="order-id"><?php echo $specialOrder['order_id'];?></a></td>
                          <td><?php echo $specialOrder['total_amount'];?></td>
                          <td><?php echo $specialOrder['placed_date_and_time'];?></td>
                          <td><?php echo $specialOrder['needed_date'];?></td>
                          
                          <td><?php if ($specialOrder['receiving_method'] == 2){echo "Home Delivery";} else {echo "Pick From Shop";}?></td>

                          <td><?php if($specialOrder['order_status'] == 1 ){echo "Order Accepted";}
                          if($specialOrder['order_status'] == 2 ){echo "Order Accepted";}
                          elseif($specialOrder['order_status']== 3){echo "Assigned a Delivery Person";}
                          elseif($specialOrder['order_status']== 4){echo "Send to Bakery";}
                          elseif($specialOrder['order_status']== 5){echo "Prepared the Order";}?></td>
                        </tr>
                      <?php
                      $i++;
                      }?>  
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>