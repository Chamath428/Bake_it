<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-add-item.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-add-item.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once('header.php'); ?>


    <div class="bgg" id="body">

        <form method="post" action="<?php echo BASEURL . '/ownerMenuController/selectOutletCategory'; ?>">
            <section class="main-section">
                <section class="left-section">
                    <div class="topic">Add Menu Items</div>

                    <div class="image-clz">
                        <i class="fas fa-hotdog"></i>
                    </div>
                </section>
                <section class="right-section">

                    <div class="input-fileds">
                        <label for="branch">Select Category</label>
                        <select placeholder="Select Category" name="category">

                            <?php foreach ($data[1] as $key => $value) { ?>

                                <option value="<?php echo  $value['category_id']; ?>"><?php echo  $value['category_name']; ?></option>

                            <?php } ?>

                        </select>
                        <!-- <label for="item id">Item Id</label>
                <input type="text" name="item-id" id="item-id" placeholder="Enter Item Id"> -->
                    </div>

                    <div class="input-fileds">
                        <label for="name"> Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name">
                    </div>



                    <div class="input-fileds">
                        <label for="price">Price</label>
                        <!-- <input type="number" min=0 name="price" id="price" placeholder="Enter Price"> -->
                        <input type="number" name="price" id="price" min="0" placeholder="Enter Price" oninput="validity.valid||(value='');">
                    </div>
                    <div class="add-btn">
                        <label for="Outlet">Outlet</label>
                        <select placeholder="Select branch" name="outlet">
                            <option value="all-branch">All</option>
                            <?php foreach ($data[0] as $key => $value) { ?>

                                <option value="<?php echo  $value['branch_id']; ?>"><?php echo  $value['branch_name']; ?></option>

                            <?php } ?>

                        </select>
                        <!-- <button onclick="viewBranchList()">Add Branch</button> -->

                    </div>


                    <div class="save">
                    <button type="submit" >Save</button>
                    </div>
    </div>
    </section>
    </section>

    </form>

    </div>


    <?php include('footer.php'); ?>