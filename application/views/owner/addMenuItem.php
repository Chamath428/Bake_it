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
        <section class="left-section">
            <div class="topic">Add Menu Items</div>

            <div class="image-clz">
                <i class="fas fa-hotdog"></i>
            </div>
        </section>

        <section class="right-section">

            <div class="input-fileds">
            <label for="branch">Select Category</label>
                <select placeholder="Select branch">
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  

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
                <input type="number" name="price" id="price" placeholder="Enter Price">
            </div>
            <div class="add-btn">
                <label for="branch">Branch</label>
                <select placeholder="Select branch">
                    <option>All</option>
                    <option>Kasbewa</option>
                    <option>Baththaramulla</option>
                    <option>Piliyandala</option>
                  

                </select>
                <!-- <button onclick="viewBranchList()">Add Branch</button> -->

            </div>


            <div class="save">
                <a href="<?php echo BASEURL . "/ownerMenuController/saveMenuItem" ?>"> <button onclick="SaveFunction()">Save</button></a>
            </div>

    </div>
    </section>
    </div>


    <?php include('footer.php'); ?>