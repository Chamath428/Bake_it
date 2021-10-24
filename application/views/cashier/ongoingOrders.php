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
                                <th>Location</th>
                                <th>Total Price</th>
                                <th>Assinged Preson</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="quickOrderDetails.php">0001</a></td>
                                <td>Deniyaya</td>
                                <td>50.00 LKR</td>
                                <td>Thilina</td>

                            </tr>
                            <tr>
                                <td><a href="quickOrderDetails.php">0002</a></td>
                                <td>Matara</td>
                                <td>30.00 LKR</td>
                                <td>Chamath</td>


                            </tr>
                            <tr>
                                <td><a href="quickOrderDetails.php">0003</a></td>
                                <td>Akuressa</td>
                                <td>120.00 LKR</td>
                                <td>Maleesha</td>


                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="order-container" id="specia-order">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="specialOrderDetails.php">0001</a></td>
                                <td>2021/03/04</td>
                                <td>Deniyaya</td>
                                <td>300.00 LKR</td>

                            </tr>
                            <tr>
                                <td><a href="specialOrderDetails.php">0002</a></td>
                                <td>2021/12/03</td>
                                <td>Akuressa</td>
                                <td>1200.00 LKR</td>

                            </tr>
                            <tr>
                                <td><a href="specialOrderDetails.php">0003</a></td>
                                <td>2021/12/09</td>
                                <td>Matara</td>
                                <td>1340.00 LKR</td>


                            </tr>
                        </tbody>
                    </table>

                </div>
            </section>


        </div>

    </div>

    <?php include('footer.php'); ?>