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
                                <th>Date</th>
                                <th>Reciving Method</th>
                                <th>Total Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo BASEURL."/cashierOrderListController/getQuickOrderDetails" ?>">0001</a></td>
                                <td>2021/09/04</td>
                                <td>Home Delivery</td>
                                <td>Rs: 120.00</td>

                            </tr>
                            <tr>
                                <td><a href="<?php echo BASEURL."/cashierOrderListController/getQuickOrderDetails" ?>">0002</a></td>
                                <td>2021/10/11</td>
                                <td>Pickup from Shop</td>
                                <td>Rs: 340.00</td>


                            </tr>
                            <tr>
                                <td><a href="<?php echo BASEURL."/cashierOrderListController/getQuickOrderDetails" ?>">0003</a></td>
                                <td>2021/1014</td>
                                <td>Home Delivery</td>
                                <td>Rs: 370.00</td>


                            </tr>
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
                            <tr>
                                <td><a href="<?php echo BASEURL."/cashierOrderListController/getSpecialOrderDetails" ?>">0001</a></td>
                                <td>2021/03/04</td>
                                <td>Home Delivery</td>
                                <td>Rs: 300.00</td>

                            </tr>
                            <tr>
                                <td><a href="<?php echo BASEURL."/cashierOrderListController/getSpecialOrderDetails" ?>">0002</a></td>
                                <td>2021/12/03</td>
                                <td>Pickup from Shop</td>
                                <td>Rs: 1200.00</td>

                            </tr>
                            <tr>
                                <td><a href="<?php echo BASEURL."/cashierOrderListController/getSpecialOrderDetails" ?>">0003</a></td>
                                <td>2021/12/09</td>
                                <td>Home Delivery</td>
                                <td>Rs: 1340.00</td>


                            </tr>
                        </tbody>
                    </table>

                </div>
            </section>


        </div>

    </div>

    <?php include('footer.php'); ?>