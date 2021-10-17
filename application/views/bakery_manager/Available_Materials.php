<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery-manager-available-materials.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/bakery-manager-available-materials.js" defer></script>
    <script src="../../../public/js/bakery_manager/bakery-manager-header.js" defer></script>

    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Available Materials</title>
</head>
<body>
   

        <?php require_once('headerRawMaterials.php'); ?>
  <div class="bgg" id="body">

    
    <div class="content">
            <div class="ava-mtr-topic">Availablity of Stock</div>

            <div class="box-row" id="boxRow">
                <div class="col" id="boxRowCol1">
                    <h4>Total Materials</h4>
                    <h1>25</h1>
                </div>
                <div class="col" id="boxRowCol2">
                    <h4>Expire Materials</h4>
                    <h1>5</h1>
                </div>
                <div class="col" id="boxRowCol3">
                    <h4>Empty Materials</h4>
                    <h1>20</h1>
                </div>
            </div>
                
            <div class="table">
              <table class="content-table" id="contTable">
                  <thead>
                      <tr>
                          <th>Item Id</th>
                          <th>Item Name</th>
                          <th>Quantity</th>
                          <th>Availablity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          
                          <td>1111</td>
                          <td>Sugar</td>
                          <td>90Kg</td>                
                          <td><h4>High</h4></td>
                      </tr>
                      <tr>
                          <td>1112</td>
                          <td>Bread crumbs</td>
                          <td>3Kg</td>                  
                          <td><h4>Low</h4></td>
                        
                      </tr>
                      <tr>
                          <td>1113</td>
                          <td>Margarine</td>
                          <td>20Kg</td>               
                          <td><h4>Normal</h4></td>
                        
                      </tr>
                  </tbody>
              </table>
            </div>
              


            <div class="button-retrieve" id="btnretrive">
                <input type="submit" id="submit" value="Retrieve" onclick="displayPopup()">
            </div>
            <div class="popup" id="popup">
                <div class="row-pop1">
                    <div class="item-id">
                        <label for="item-id">Item Id</label>
                        <select placeholder="Select item id">
                            <option>00112-item 1</option>
                            <option>00113-item 2</option>
                            <option>00114-item 3</option>
                            <option>00115-item 4</option>
                            <option>00116-item 5</option>
                            <option>00117-item 6</option>

                        </select>
                    </div>
                    <div class="addbtn"> <button onclick="add_fields()">+Add</button></div>

                </div>
                <div class="row-pop2">
                    <div class="name-quantity" id="nameQuantity">
                        <div class="item-name">Name</div>
                        <div class="item-quantity">Quantity</div>
                    </div>
                    <div id="room_fileds">
                    </div>
                </div>
                <div class="row-pop">
                    <button class="savebtn" onclick=" SaveFunction()" id="savebtn"> Save</button>
                </div>
        </div>
      </div>
  </div>


<?php require_once('footer.php'); ?>
 

     