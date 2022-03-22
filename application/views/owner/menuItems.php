<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-menu-items.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-menu-items.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Menu Items</title>
</head>

<body>

    <?php require_once('header.php'); ?>


    <div class="content" id="body">

        <div class="menu-items-topic">Menu Items</div>

        <div class="drop-down-list">
            <form method="post" action="<?php echo BASEURL . '/ownerMenuController/getMenuItems'; ?>">
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
                <div class="view-btn">
                    <button>View</button>
                </div>


        </div>



        <div class="category-table">
            <div id="category1-table">
                <h4>Bread items</h4>
                <table class="content-table">
                    <thead>
                        <tr>

                            <th>Item Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
                <div class="scroll-of-table">
                    <table class="content-table">
                        <tbody>
                            <?php foreach ($data[2] as $key => $value) { ?>
                                <tr>


                                    <td><?php echo $value['item_id']; ?></td>
                                    <td><?php echo $value['item_name']; ?></td>
                                    <td><?php echo $value['price']; ?></td>
                                    <!-- <td><input name="chk_id[]" type="checkbox" class='chkbox' id="1"  onclick="myFunction(this.id)"></td> -->
                                    <td> <input type="checkbox" id="<?php echo $value['item_id']; ?>" name="checkid[]" onclick="myFunction(this.id)"></td>

                                </tr>
                            <?php } ?>


                        </tbody>
                    </table>
                </div>

                    <div class="delete-btn" id="delbtn">
                        <button type="button" onclick="delFunction()">Delete</button>

                    </div>
                </form>


                <div class="btn">
                    <div class="add-item-btn">
                        <a href="<?php echo BASEURL . "/ownerMenuController/addMenuItem" ?>"> <button>Add Item</button></a>
                    </div>

                </div>



            </div>



        </div>


    </div>

    <?php include('footer.php'); ?>