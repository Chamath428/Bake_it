<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/dailyRequirement.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/footer.css">
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer ></script>
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/menu.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


</head>
<body>
    <?php include "headerIndex.php"?>
    <div id="body" class="container-1">

    <?php if (isset($message['confirmation']) && $message['confirmation']!=""){?>
            <div class="confirm-alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
              <p><?php echo $message['confirmation']; ?></p>
            </div>
            <?php } ?>

            <?php if (isset($message['error']) && $message['error']!=""){?>
            <div class="danger-alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
              <p><?php echo $message['error']; ?></p>
            </div>
        <?php } ?>
        
        <div class="menu">
            <div class="heading">
                <h2>Daily Requirement</h2>
            </div>
            <div class="drop-down-btn-container">
                <div class="drop-down">
                    </br>
                    <h4>Select Category</h4> 
                    
                    <form method="post" action="<?php echo BASEURL ?>/branchManagerDailyRequirment   Controller/getItems">
                    <select name="categoryId" id="categoryId">

                        <?php 
                          foreach ($data[2] as $key => $category) { 
                            if($category['category_id']==$data[1]){?><option value="<?php echo $category['category_id'];?>"><?php echo $category['category_name']; ?></option>
                          <?php }} ?>

                        <?php 
                          foreach ($data[2] as $key => $category) { 
                            if($category['category_id']!=$data[1]){?><option value="<?php echo $category['category_id'];?>"><?php echo $category['category_name']; ?></option>
                          <?php }} ?>
                    </select>
                </div>
                <div class="view-btn-container">
                    <button type="submit" class="viewBtn">View Items</button>
                  </form>
                    <button id="edit" onclick="viewSave()" class="edit-btn">Edit Quantity</button>
                </div>
            </div>
            <div class="menu-table" id="table">
                <table>
                    <thead>
                      <tr>
                        <th>Item ID</th>
                        <th>Food Item</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>#001</td>
                        <td>Chicken Burger</td>
                        <td><input class="quant" name="quant"  type="number" readonly="" value="10"></td>
                      </tr>
                      <tr>
                        <td>#002</td>
                        <td>Cheese Burger</td>
                        <td><input class="quant" name="quant"  type="number" readonly="" value="10"></td>
                      </tr>
                      <tr>
                        <td>#003</td>
                        <td>Fish Burger</td>
                        <td><input class="quant" name="quant"  type="number" readonly="" value="10"></td>
                      </tr>
                      <tr>
                        <td>#004</td>
                        <td>Ham Burger</td>
                        <td><input class="quant" name="quant"  type="number" readonly="" value="10"></td>
                      </tr>
                      <tr>
                        <td>#005</td>
                        <td>Egg Burger</td>
                        <td><input class="quant" name="quant"  type="number" readonly="" value="10"></td>
                      </tr>
                      <tr>
                        <td>#006</td>
                        <td>Cheese Ham Burger</td>
                        <td><input class="quant" name="quant"  type="number" readonly="" value="10"></td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>

            <div class="btn-container">
                <button id="save" class="save-btn" onclick="alertBox()">Save Changes</button>
            </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>