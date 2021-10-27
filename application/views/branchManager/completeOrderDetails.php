<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/orderDetails.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/footer.css">
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer ></script>
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/orderpopup.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body class="bgg">
    <?php include "headerOrders.php"?>
    <div id="body" class="container-1">
        <div class="container-2">
          <!-- <div class="heading">
            <h1>Order Details</h1>
          </div> -->
        <div id="popup-1" class="popup-container">
          <div class="mid-box-2">

            <h1>Ratings</h1>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <h1>Review</h1>
            <div class="col">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <button onclick="closePopup()">Back</button>
          </div>
          
        </div>

        
            <div class="heading">
              <h1>Ongoing Order Details</h1>
            </div>
            <div class="order-details">
               
                    <div class="basic-details"> 
                    <table> 
                            <tr> 
                                <td>Order ID</td> 
                                <td>#117</td> 
                            </tr> 
                            <tr> 
                                <td>Customer Name</td> 
                                <td>Chamath Chinthana</td> 
                            </tr> 
                            <tr> 
                                <td>Contact Number</td> 
                                <td>0712343212</td> 
                            </tr> 
                            <tr> 
                                <td>Order Type</td> 
                                <td>Special Order</td> 
                            </tr> 
                            <tr> 
                                <td>Needed Date</td> 
                                <td>2021/11/01</td> 
                            </tr> 
                            <tr> 
                                <td>Location</td> 
                                <td><a href="#"><i class="fas fa-map-marker-alt"></i>Customer Location</a></td> 
                            </tr> 
                            <tr> 
                                <td>Payment Method</td> 
                                <td> Card</td> 
                                <!-- <td><a href="">Dilantha Malagamuwa</a></td> --> 
                            </tr>
                            <tr> 
                              <td>Delivery Person</td> 
                              <td>Saman Fernando</td> 
                              <!-- <td><a href="">Dilantha Malagamuwa</a></td> --> 
                          </tr> 
                        </table> 
                    </div>
            </div>
            <div class="order-details-table">
            <table id="orderDetails">
                    <thead>
                      <tr>
                        <th>Item ID</th>
                        <th>Food Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>#001</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                            <div><p>Chicken Burger</p></div>
                          </div>
                        </td>
                        <td>450.00</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td>#002</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                            <div><p>Cheese Chicken Burger</p></div>
                          </div>
                        </td>
                        <td>450.00</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td>#003</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                            <div><p>Fish Burger</p></div>
                          </div>
                        </td>
                        <td>450.00</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td>#004</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                            <div><p>Ham Burger</p></div>
                          </div>
                        </td>
                        <td>450.00</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td>#005</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                            <div><p>Egg Burger</p></div>
                          </div>
                        </td>
                        <td>450.00</td>
                        <td>10</td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
            <div class="total-container"> 
              <table> 
               <tr> 
                <td>Subtotal</td> 
                <td>6000.00 LKR</td> 
               </tr> 
               <tr> 
                <td>Delivery Tax</td> 
                <td>200.00 LKR</td> 
               </tr> 
               <tr> 
                <td>Grand Total</td> 
                <td>6200.00 LKR</td> 
               </tr> 
              </table> 
             </div>
             <div class="btn-container">
               <button class="btn" onclick="assign()">View Customer Rate</button>
             </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>