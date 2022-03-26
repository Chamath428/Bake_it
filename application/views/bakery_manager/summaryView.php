<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-summary-view.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-summary-view.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>summary view</title>
</head>

<body>


    <?php require_once('header_raw_materials.php'); ?>

    <div class="bgg" id="body">
        <div class="summary-topic">
            <pre>
Summary of Stock
                        
                                </pre>
        </div>


        <div class="table">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Rawitem Id</th>
                        <th>Material</th>
                        <th>Raw Category Name</th>
                        <th>Total Quantity</th>
                        <th>Date</th>

                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data[0] as $key => $value) { ?>
                        <tr>

                            <td><?php echo $value['rawitem_id']; ?></td>
                            <td><?php echo $value['raw_category_id']; ?></td>
                            <td><?php echo $value['raw_category_name']; ?></td>
                            <td><?php echo $value['total_quantity']; ?></td>
                            <td><?php echo $value['date_and_time']; ?></td>
                           

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>







    <?php require_once('footer.php'); ?>