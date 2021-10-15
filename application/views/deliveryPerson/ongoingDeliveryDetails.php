<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../../public/js/deliveryPerson/deliveries.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/deliveryPerson-deliveries.css">
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
       <section class="header">
          <?php include('deliveryheader.php'); ?>
       </section>
       <div id="body">
       <h1 class="deliverypg-topic">Delivery details</h1>
       <div class="delivery-container">
           
           <div class="map">
               <span>Location</span>
               <div id="Location-track"></div>
           </div>
           <div class="sub-container1">
                <div class="sub-container2">
                    <span class="feild">Order Id</span>
                    <span class="answer">001</span>
                </div>
                <div class="sub-container2">
                    <span class="feild">Contact Person</span>
                    <span class="answer">Nimal Perera</span>
                </div>
                <div class="sub-container2">
                    <span class="feild">Contact Number</span>
                    <span class="answer">077224432</span>
                </div>
                <div class="sub-container2">
                    <span class="feild">Address</span>
                    <span class="answer">53/3,Temple Rd,Kasbewa</span>
                </div>
                <div class="sub-container2">
                    <span class="feild">Payement</span>
                    <span class="answer-fill">
                    <form action="">
                          <label for="card">
                            <input type="radio" id="card" name="fav_language" value="card">Paid
                          </label>
                          <label for="cash" onclick="displayBill()">
                            <input type="radio" id="cash" name="fav_language" value="cash">To be paid
                          </label>
                    </form>
                    </span>
                    <span class="answer" id="cash-topay">450.00LKR</span>
                    <!-- <div class="radio-box" id="payment-method">
                        <div>
                            <label onclick="getLocation(0)">
                                <input type="radio" name="delivery-type" checked="">
                                <div class="circle"></div>
                                <span>Card Payment</span>
                            </label>
                            <label onclick="getLocation(1)">
                                <input type="radio" name="delivery-type">
                                <div class="circle"></div>
                                <span>Cash Payment</span>
                            </label>
                        </div>
                        </div>
                        <div class="location-details" id="location-details">
                            <input type="text" name="address-line1" placeholder="Address Line 1" required="">
                            <input type="text" name="address-line2" placeholder="Address Line 2" required="">
                            <input type="text" name="address-line3" placeholder="Address Line 3">
                        </div> -->
                </div>
           </div>
        <!-- <div><button class="reject button" onclick="reject()">Reject</button></div> -->
        <div class="complete"><button class="button" onclick="complete()">Completed</button></div>
       </div>

    </div>
        <section class="footer">
            <?php include('footer.php'); ?>  
        </section>

    </body>
</html>