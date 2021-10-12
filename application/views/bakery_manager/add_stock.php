<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/add_stock.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/add_stock.js" defer></script>
    <script src="../../../public/js/bakery_manager/header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Add Stock</title>
</head>
<body>
   
<?php require_once('header_raw_materials.php'); ?>
<div class="bgg" id="body">

            <div id="middle-content">

                <div class="add-stock">Add Stock</div>

                <div class="button-add">
                    <input type="submit" id="submit"  value="+Add" onclick="displayAddNav()">
                </div>

                <div class="table">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>#11</td>
                                <td>Material 1</td>
                                <td>10Kg</td>                  
                            </tr>
                            <tr>
                                <td>#12</td>
                                <td>Material 2</td>
                                <td>700Kg</td>            
                            </tr>
                            <tr>
                                <td>#13</td>
                                <td>Material 3</td>
                                <td>20Kg</td>                 
                            </tr>
                        </tbody>
                    </table>
                </div>
                    

                    <div class="button-save">
                    <input type="submit" id="submit" value="Save" onclick="SaveFunction()">
                    </div>
            </div>
            <div id="add-item-list">
                    <table class="add-item-list-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody onclick="closeAddNav()">
                                <tr>
                                    <td>#1123</td>
                                    <td>Material 1</td>                 
                                </tr>
                                <tr>
                                    <td>#1124</td>
                                    <td>Material 2</td>                 
                                </tr>
                                <tr>
                                    <td>#1125</td>
                                    <td>Material 3</td>                 
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>                 
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>                 
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>                 
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>                 
                                </tr>
                                </tbody>
                        </table>
                </div>

</div>


<?php require_once('footer.php'); ?>
 

     