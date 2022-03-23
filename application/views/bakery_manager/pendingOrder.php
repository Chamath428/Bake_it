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
    <title>Ongoing Order</title>
</head>

<body>


    <?php require_once("header_orders.php"); ?>
    <div class="bgg" id="body">
        <div class="pending">Ongoing Order</div>

        <div class="table">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Order No</th>
                        <th>Needed Date</th>
                        <th>Outlet </th>

                    </tr>
                </thead>


                <tbody>

                    <?php foreach ($data as $key => $value) { ?>
                        <tr>

                            <td><a href="<?php echo BASEURL . "/bakeryManagerOrderController/pendingOrderDetailsBakery/" . $value['order_id'] ?>" class="order-id"><?php echo $value['order_id']; ?></a></td>

                            <td><?php echo $value['needed_date']; ?></td>
                            <td><?php echo $value['branch_name']; ?></td>

                        </tr>
                    <?php } ?>


                </tbody>

            </table>
        </div>
    </div>

    <?php require_once("footer.php"); ?>