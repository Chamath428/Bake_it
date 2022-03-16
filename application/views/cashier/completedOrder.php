<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-completed-order.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASEURL ?>/public/js/cashier/cashier-complete-order.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/cashier/cashier-header.js" defer></script>
    <!-- <script src=".../../../public/css/cashier/cashier-header.js" defer></script> -->
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    
    <title>Completed Order</title>
</head>
<body>



        <?php require_once("headerOrder.php"); ?>
        <div class="bgg" id="body">
            
                <div class="completed">Completed Order</div>
                

                <div class="table">
                <table class="content-table">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Order Type</th>
                                <th>Placed Date</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($data as $key => $orders) {?>
                                <tr>
                                    <td><a href="<?php echo BASEURL."/cashierOrderListController/getCompleteOrderDetails/".$orders['order_id']; ?>"><?php echo $orders['order_id'] ?></a></td>
                                    <td><?php switch ($orders['order_type']) {
                                    case '1':
                                        echo "Quick Order";
                                        break;
                                    case '2':
                                        echo "Special Order";
                                        break;
                                    
                                    default:
                                        echo "Not specified";
                                        break;
                                } ?></td>
                                    <td><?php echo $orders['placed_date_and_time'] ?></td>                    
                                    <td><?php echo $orders['total_amount'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                
                </div>
                
       
        </div>
      <?php require_once("footer.php"); ?>

