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
              <h1>Quick Order Details</h1>
            </div>
            <div class="orders-table">
                <table>
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Grand Total</th>
                        <th>Placed Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $i=0;
                        foreach($data[1] as $key => $quickOrder) {?>
                          <tr>
                            <td><a href="<?php echo BASEURL."/branchManagerOrderController/getQuickOrderDetails" ?>" class="order-id"><?php echo $quickOrder['order_id'];?></a></td>
                            <td><?php echo $quickOrder['total_amount'];?></td>
                            <td><?php echo $quickOrder['placed_date_and_time'];?></td>
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