<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/Availability.css">
        <script src="../../../public/js/deliveryPerson/index.js"></script>
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>

    </head>
    <body>
       <section class="header">
        <?php include('header.php'); ?>
       </section>
        
         <section  class="available-body">
            <h2>Availability Status</h2>
            <div id="availabile">
                <p><center>Now you are available for deliveries <br>
                   Wait for deliveries<br><br>
                </p>
                <a href="#" class="confirm-btn">Confirm your availability</a></center>
                    <!-- <a href="#" onclick="alert1()">Available</a>
                    <a href="#" onclick="alert2()">Not Available</a> -->
            </div>
            <div id="not-available">
                <p>
                    <center>You are not available for deliveries<br><br> 
                </p>
                <a href="#" class="confirm-btn">Confirm your availability</a></center>
            </div>
         </section>
    
        <div class="footer">
              <?php include('footer.php'); ?>   
        </div> 
        
    </body>
</html>