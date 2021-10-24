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

    <?php require_once('newheader.php'); ?>


    <div class="content" id="body">

        <div class="menu-items-topic">Menu Items</div>

        <div class="drop-down-list">
            <div class="branch">
                <label for="branch">Branch</label>
                <select placeholder="Select branch">
                    <option>Deniyaya</option>
                    <option>Akuressa</option>
                    <option>Matara</option>
                    <option>Pitabeddara</option>
                    <option>Morawaka</option>
                    <option>Kotapola</option>

                </select>
            </div>

            <div class="category-list">
                <label for="category">Category</label>
                <select placeholder="Select category">
                    <option>Breads</option>
                    <option>Rolls</option>
                    <option>Muffins</option>
                    <option>Cakes</option>
                    <option>Sweet goods</option>

                </select>
            </div>
            <div class="view-btn">
                <button onclick="category1()">View</button>
            </div>

        </div>


        <div class="category-table">
            <div id="category1-table">
                <h4>Category 1</h4>

                <table class="content-table">
                    <thead>
                        <tr>

                            <th>Item Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>###1</td>
                            <td>name1</td>
                            <td>xxx</td>
                            <td> <input type="checkbox" id="Check-box1" onclick="myFunction(this.id)"></td>
                        </tr>
                        <tr>

                            <td>###2</td>
                            <td>name2</td>
                            <td>xxx</td>
                            <td> <input type="checkbox" id="Check-box2" onclick="myFunction(this.id)"></td>


                        </tr>
                        <tr>

                            <td>###3</td>
                            <td>name3</td>
                            <td>xxx</td>
                            <td> <input type="checkbox" id="Check-box3" onclick="myFunction(this.id)"></td>


                        </tr>
                    </tbody>
                </table>
                <div class="btn">
                    <div class="add-item-btn">
                       <a href="<?php echo BASEURL."/menuItemOwnerController/addMenuItem" ?>"> <button>Add Item</button></a>
                    </div>
                    <div class="delete-btn" id="delbtn">
                        <button onclick="delFunction()">Delete</button>
                    </div>

                </div>

            </div>



        </div>


    </div>

    <?php include('footer.php'); ?>