<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/owner/add_item.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/owner/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/owner/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="../../../public/js/owner/add_item.js" defer></script>
    <script src="../../../public/js/owner/header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Add Item page</title>
</head>
<body>
<?php require_once('newheader.php'); ?>
     

    <div class="bgg" id="body">
            <div class="topic">Add Menu Items</div>

            <div class="image-clz">
            <img src="../../../public/images/owner/jr-r-90HdOlGbjck-unsplash.jpg" alt="image" class="img" >
            </div>

            <section>
                
                    <div class="input-fileds">
                        <label for="item id">Item Id</label>
                        <input type="text" name="item-id" id="item-id"  placeholder="Enter Item Id">
                    </div>

                    <div class="input-fileds">
                        <label for="name"> Name</label>
                        <input type="text" name="name" id="name"  placeholder="Enter Name">
                    </div>
            

                
                    <div class="input-fileds">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price"  placeholder="Enter Price">
                    </div>
                    <div>
                        <button onclick="viewBranchList()">Add Branch</button>

                    </div>
                
            </section>
            <div class="save">
                    <button onclick="SaveFunction()">Save</button>
            </div>

            <div class="branch-list" id="branch-list-id">
            
                
                    <label class="contr">All
                        <input type="checkbox">
                        <!-- <span class="checkmark"></span> -->
                    </label>
                    <label class="contr">Branch 1
                        <input type="checkbox" >
                        <!-- <span class="checkmark"></span> -->
                    </label>
                    <label class="contr">Branch 2
                        <input type="checkbox" >
                        <!-- <span class="checkmark"></span> -->
                    </label>
                    <label class="contr">Branch 3
                        <input type="checkbox">
                        <!-- <span class="checkmark"></span> -->
                    </label>
            

                 <button onclick="addItemFunction()">Ok</button>

                
            </div>
    </div>

          
<?php include('footer.php'); ?>