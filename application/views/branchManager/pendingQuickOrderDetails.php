<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/orderDetails.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/header_index.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/footer.css">
    <script src="../../../public/js/branchManager/header.js" defer ></script>
    <script src="../../../public/js/branchManager/orderpopup.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body class="bgg">
    <?php include "headerOrders.php"?>
    <div id="body" class="container-1">
        <div class="container-2">
            <div class="heading">
              <h1>Order Details</h1>
            </div>
            <div id="popup-1" class="popup-container">
              <div class="mid-box">
                <h2 style="margin-bottom:15px" style="text-align: center;">Assign Delivery Person</h2>
                <div class="row1">
                  <div class="d-person">Gihan sandaruwan weerasinghe</div>
                  <button onclick="closePopup()">Assign</button>
                </div>
                <div class="row1">
                  <div class="d-person">Anupama Bandara</div>
                  <button onclick="closePopup()">Assign</button>
                </div>
                <div class="row1">
                  <div class="d-person">Thilina Madhusanka</div>
                  <button onclick="closePopup()">Assign</button>
                </div>
                <div class="row1">
                  <div class="d-person">Chamath Chinthana</div>
                  <button onclick="closePopup()">Assign</button>
                </div>
                <div class="row1">
                  <div class="d-person">Dilantha Malagamuwa</div>
                  <button>Assign</button>
                </div>
              </div>
            </div>
            <div id="popup-2" class="popup-container">
              <div class="mid-box">
                  <h3 style="margin-bottom:15px" style="text-align: center;">Are you sure to decline?</h3>
                  <div class="yes-no">
                    <button onclick="closePopup2()">Yes Decline</button>
                    <button onclick="closePopup2()">Cancel</button>
                  </div>
              </div>
              
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
                                <td>Order Status</td> 
                                <td>Ongoing</td> 
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
                        <td>05</td>
                      </tr>
                      <tr>
                        <td>#002</td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                            <div><p>Fish Burger</p></div>
                          </div>
                        </td>
                        <td>350.00</td>
                        <td>10</td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
            <div class="total-container"> 
              <table> 
               <tr> 
                <td>Subtotal</td> 
                <td>3000.00 LKR</td> 
               </tr> 
               <tr> 
                <td>Delivery Tax</td> 
                <td>100.00 LKR</td> 
               </tr> 
               <tr> 
                <td>Grand Total</td> 
                <td>3100.00 LKR</td> 
               </tr> 
              </table> 
             </div>
             <div class="btn-container">
               <button class="btn" onclick="popup2()">Decline</button>
               <button class="btn" onclick="assign()">Assigned <br> Delivery Person</button>
             </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>