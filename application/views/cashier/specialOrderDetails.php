<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/cashier/cashier-special-order-details.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/cashier/cashier-header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/cashier/cashier-footer.css">
    <script src="<?php echo BASEURL; ?>/public/js/cashier/cashier-header.js" defer></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>

<body class="bgg">
    <?php require_once("headerOrder.php"); ?>

    <div id="body" class="container-1">
        <div class="container-2">
            <div class="heading">
                <h3>Special Order Details</h3>
            </div>
   
    
            <div class="order-details">

                <div class="basic-details">
                    <table>
                        <tr>
                            <td>Order ID</td>
                            <td>#117</td>
                        </tr>
                        <tr>
                            <td>Customer Name</td>
                            <td>Chamath Chinthana</td>
                        </tr>
                        <tr>
                            <td>Contact Number</td>
                            <td>0712343212</td>
                        </tr>
                        <tr>
                            <td>Order Status</td>
                            <td>Ongoing</td>
                        </tr>
                        <tr>
                            <td>Needed Date</td>
                            <td>2021/11/01</td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td><a href="#"><i class="fas fa-map-marker-alt"></i>Customer Location</a></td>
                        </tr>
                        <tr>
                            <td>Payment Method</td>
                            <td> Card</td>
                            <!-- <td><a href="">Dilantha Malagamuwa</a></td> -->
                        </tr>
                        <tr>
                            <td>Delivery Person</td>
                            <td>Saman Fernando</td>
                            <!-- <td><a href="">Dilantha Malagamuwa</a></td> -->
                        </tr>
                    </table>
                </div>
            </div>
            <div class="order-details-table">
                <table id="orderDetails">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Food Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>#001</td>
                            <td>
                                <div class="cell">
                                    <div class="image"><img src="<?php echo BASEURL; ?>/public/images/branchManager/b1.png" alt=""></div>
                                    <div>
                                        <p>Chicken Burger</p>
                                    </div>
                                </div>
                            </td>
                            <td>350.00</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>#002</td>
                            <td>
                                <div class="cell">
                                    <div class="image"><img src="<?php echo BASEURL; ?>/public/images/branchManager/b1.png" alt=""></div>
                                    <div>
                                        <p>Fish Burger</p>
                                    </div>
                                </div>
                            </td>
                            <td>250.00</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>#003</td>
                            <td>
                                <div class="cell">
                                    <div class="image"><img src="<?php echo BASEURL; ?>/public/images/branchManager/b1.png" alt=""></div>
                                    <div>
                                        <p>Ham Burger</p>
                                    </div>
                                </div>
                            </td>
                            <td>300.00</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>#004</td>
                            <td>
                                <div class="cell">
                                    <div class="image"><img src="<?php echo BASEURL; ?>/public/images/branchManager/b1.png" alt=""></div>
                                    <div>
                                        <p>Cheese Burger</p>
                                    </div>
                                </div>
                            </td>
                            <td>400.00</td>
                            <td>10</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="total-container">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>13000.00 LKR</td>
                    </tr>
                    <tr>
                        <td>Delivery Tax</td>
                        <td>300.00 LKR</td>
                    </tr>
                    <tr>
                        <td>Grand Total</td>
                        <td>13300.00 LKR</td>
                    </tr>
                </table>
            </div>
            <div class="btn-container">
                <button class="btn">Completed</button>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>

</html>