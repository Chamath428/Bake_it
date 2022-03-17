<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-ongoing-orders.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASEURL ?>/public/js/cashier/cashier-header.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/cashier/cashier-ongoing-orders.js" defer></script>
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <!-- <script src="" defer></script> -->
    <title>ongoing orders</title>
</head>

<body>

    <?php require_once("headerOrder.php"); ?>
    <div class="bgg" id="body">

        <div class="content">
            <section class="desktop-orders">
                <h3>Ongoing Orders</h3>
                <div class="order-btn">
                    <span onclick="getQuickOrder()">Quick Orders</span>
                    <span onclick="getSpecialOrder()">Special Orders</span>
                    <hr class="indicator">
                </div>

                <div class="order-container" id="quick-order">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Placed Date</th>
                                <th>Reciving Method</th>
                                <th>Total Price</th>


                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php foreach ($data[1] as $key => $quickOrder) {?>
                             <tr>
                                <td><a href="<?php echo BASEURL."/cashierOrderListController/getOngoingOrderDetails/".$quickOrder['order_id'] ?>"><?php echo $quickOrder['order_id'] ?></a></td>
                                <td><?php echo $quickOrder['placed_date_and_time']; ?></td>
                                <td><?php switch ($quickOrder['receiving_method']) {
                                    case '2':
                                        echo "Home delivery";
                                        break;
                                    case '1':
                                        echo "Pick up from shop";
                                        break;
                                    
                                    default:
                                        echo "Not specified";
                                        break;
                                } ?></td>
                                <td><?php echo $quickOrder['total_amount'].".00 LKR"; ?></td>
                            </tr><?php } ?>

                        </tbody>
                    </table>

                </div>
                <div class="order-container" id="specia-order">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Require Date</th>
                                <th>Reciving Method</th>
                                <th>Toatal Price</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($data[2] as $key => $specialOrder) {?>
                             <tr>
                                <td><a href="<?php echo BASEURL."/cashierOrderListController/getOngoingSpecilOrderDetails/".$specialOrder['order_id'] ?>"><?php echo $specialOrder['order_id'] ?></a></td>
                                <td><?php echo $specialOrder['needed_date'] ?></td>
                                <td><?php switch ($specialOrder['receiving_method']) {
                                    case '2':
                                        echo "Home delivery";
                                        break;
                                    case '1':
                                        echo "Pick up from shop";
                                        break;
                                    
                                    default:
                                        echo "Not specified";
                                        break;
                                } ?></td>
                                <td><?php echo $specialOrder['total_amount'].".00 LKR" ?></td>
                            </tr><?php } ?>

                        </tbody>
                    </table>

                </div>
            </section>


        </div>

    </div>

    <?php include('footer.php'); ?>