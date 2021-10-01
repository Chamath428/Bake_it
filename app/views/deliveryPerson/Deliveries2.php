<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../../public/js/deliveries.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../public/css/deliveries2.css">
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
       <section class="header">
          <?php include('header.php'); ?>
       </section>
       <h1>Your Ongoing Delivery</h1>
       <div class="delivery-container">
           
           <div class="map">
               <div>Location</div>
               <div id="Location-track"></div>
           </div>
           <div class="sub-container1">
                <div class="order-no">
                    Order No
                    <div class="answer"></div>
                </div>
                <div class="contact-person">
                    Contact Person
                    <div class="answer"></div>
                </div>
                <div class="contact-num">
                    Contact Number
                    <div class="answer"></div>
                </div>
                <div class="Address">
                    Address
                    <div class="answer"></div>
                </div>
                <div class="payment">
                    Payement
                    <div class="answer"></div>
                </div>
           </div>
        <div class="complete-button"><button>Completed</button></div>
       </div>


        <section class="footer">
            <?php include('footer.php'); ?>  
        </section>

    </body>