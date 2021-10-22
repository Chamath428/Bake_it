<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/menu.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/header_index.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/footer.css">
    <script src="../../../public/js/branchManager/header.js" defer ></script>
    <script src="../../../public/js/branchManager/menu.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body>
    <?php include "headerOrders.php"?>
    <div id="body" class="container-1">
        <div class="menu">
            <div class="heading">
                <h2>Menu</h2>
            </div>
            <div class="drop-down-btn-container">
                <div class="drop-down">
                    <select name="" id="">
                        <option value="">abc</option>
                        <option value="">abc</option>
                        <option value="">abc</option>
                        <option value="">abc</option>
                        <option value="">abc</option>
                    </select>
                </div>
                <div class="view-btn-container">
                    <button class="viewBtn" onclick="viewTable()">View</button>
                    <button id="edit" onclick="viewSave()" class="edit-btn">Edit</button>
                </div>
            </div>
            <div class="menu-table" id="table">
                <table>
                    <thead>
                      <tr>
                        <th>Item ID</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>#003</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="44.jpg" alt=""></div>
                            <div><p>Burger</p></div>
                          </div>
                        </td>
                        <td>350.00</td>
                        <td><input class="quant" name="quant"  type="number" value="10"></td>
                      </tr>
                      <tr>
                        <td>#003</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="44.jpg" alt=""></div>
                            <div><p>Burger</p></div>
                          </div>
                        </td>
                        <td>350.00</td>
                        <td><input class="quant" name="quant"  type="number" value="10"></td>
                      </tr>
                      <tr>
                        <td>#003</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="44.jpg" alt=""></div>
                            <div><p>Burger</p></div>
                          </div>
                        </td>
                        <td>350.00</td>
                        <td><input class="quant" name="quant"  type="number" value="10"></td>
                      </tr>
                      <tr>
                        <td>#003</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="44.jpg" alt=""></div>
                            <div><p>Burger</p></div>
                          </div>
                        </td>
                        <td>350.00</td>
                        <td><input class="quant" name="quant"  type="number" value="10"></td>
                      </tr>
                      <tr>
                        <td>#003</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="44.jpg" alt=""></div>
                            <div><p>Burger</p></div>
                          </div>
                        </td>
                        <td>350.00</td>
                        <td><input class="quant" name="quant"  type="number" value="10"></td>
                      </tr>
                      <tr>
                        <td>#003</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="44.jpg" alt=""></div>
                            <div><p>Burger</p></div>
                          </div>
                        </td>
                        <td>350.00</td>
                        <td><input class="quant" name="quant"  type="number" value="10"></td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>

            <div class="btn-container">
                <button id="save" class="save-btn" onclick="alertBox()">Save</button>
            </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>