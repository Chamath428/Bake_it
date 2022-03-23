<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-daily-requirment.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-daily-requirment.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Daily Requirment</title>
</head>

<body>

    <?php require_once('header_index.php'); ?>

    <div class="bgg" id="body">

        <div class="daily-requirment">Daily Requirment
            <!-- <p id="demo"></p> -->

        </div>


        <div class="content">
            <form method="post" action="<?php echo BASEURL . '/bakeryManagerDailyRequirementController/getMenuItems'; ?>">
                <div class="drop-down-list">

                    <div class="branch">
                        <label for="branch">Outlet</label>
                        <select name="outletId" id="outletId">

                            <?php foreach ($data[0] as $key => $value) {
                                if ($value['branch_id'] == $data[3]) { ?>
                                    <option value="<?php echo  $value['branch_id']; ?>"><?php echo  $value['branch_name']; ?></option>
                            <?php  }
                            } ?>

                            <?php foreach ($data[0] as $key => $value) {
                                if ($value['branch_id'] != $data[3]) { ?>
                                    <option value="<?php echo  $value['branch_id']; ?>"><?php echo  $value['branch_name']; ?></option>
                            <?php  }
                            } ?>

                        </select>
                    </div>

                    <div class="category-list">
                        <label for="category">Category</label>
                        <select name="categoryId" id="categoryId">


                            <?php foreach ($data[1] as $key => $value) {
                                if ($value['category_id'] == $data[4]) { ?>
                                    <option value="<?php echo  $value['category_id']; ?>"><?php echo  $value['category_name']; ?></option>
                            <?php  }
                            } ?>

                            <?php foreach ($data[1] as $key => $value) {
                                if ($value['category_id'] != $data[4]) { ?>
                                    <option value="<?php echo  $value['category_id']; ?>"><?php echo  $value['category_name']; ?></option>
                            <?php  }
                            } ?>

                        </select>
                    </div>
                    <div class="btn">
                        <button  type="submit">View</button>
                    </div>


                </div>
                <div class="category-tables">
                    <div id="category1-table">

                        <table class="content-table">
                            <thead>
                                <tr>
                                
                                    <th>Item Id</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <div class="scroll-of-table"> -->
                                <!-- <table class="content-table"> -->
                                <!-- <tbody> -->
                                <?php foreach ($data[2] as $key => $value) { ?>
                                    <tr>


                                        <td><?php echo $value['item_id']; ?></td>
                                        <td><?php echo $value['item_name']; ?></td>
                                        <td><?php echo $value['daily_requirement']; ?></td>



                                    </tr>
                                <?php } ?>


                                <!-- </tbody> -->
                                <!-- </table> -->
                                <!-- </div> -->
                            </tbody>
                        </table>

                    </div>


                </div>
            </form>


        </div>
    </div>

    <?php include('footer.php'); ?>