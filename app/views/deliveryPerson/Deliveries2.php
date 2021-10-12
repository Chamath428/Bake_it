<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../../public/js/deliveryPerson/deliveries.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/deliveries2.css">
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
       <section class="header">
          <?php include('deliveryheader.php'); ?>
       </section>
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
                    <span class="answer">450.00LKR</span>
                </div>
           </div>
        <div><button class="reject button" onclick="reject()">Reject</button></div>
        <div class="complete"><button class="button" onclick="complete()">Completed</button></div>
       </div>


        <section class="footer">
            <?php include('footerDP.php'); ?>  
        </section>

    </body>