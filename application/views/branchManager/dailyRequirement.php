<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/dailyRequirement.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/header_index.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/footer.css">
    <script src="../../../public/js/branchManager/header.js" defer ></script>
    <script src="../../../public/js/branchManager/menu.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


</head>
<body>
    <?php include "headerIndex.php"?>
    <div id="body" class="container-1">
        <div class="menu">
            <div class="heading">
                <h2>Daily Requirement</h2>
            </div>
            <div class="drop-down-btn-container">
                <div class="drop-down">
                    </br>
                    <h4>Select Category</h4> 
                    <select name="" id="">
                        <option value="">Bread</option>
                        <option value="">Pastry</option>
                        <option value="">Cake</option>
                        <option value="">Burger</option>
                        <option value="">Snacks</option>
                        <option value="">Donut</option>
                        <option value="">Muffin</option>
                        <option value="">Sweets</option>
                        <option value="">Beverages</option>
                    </select>
                </div>
                <div class="view-btn-container">
                    <button class="viewBtn" onclick="viewTable()">View Items</button>
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