<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/deliveryPerson-availability.css">
        <script src="../../../public/js/deliveryPerson/deliveryPerson-availability.js"></script>
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>

    </head>
    <body>
       <section class="header">
        <?php include('header.php'); ?>
       </section>
        
         <section  class="available-body" id="body">
            <h2>Availability Status</h2>
            <div id="selection-box">
                <div class="question">Are you available for deliveries?</div>
                <div class="click-available">
                    <div class="available"><a href="#" onclick="available()"><i class="fas fa-check"></i> Yes</a></div>
                    <div class="notavailable"><a href="#" onclick="notavailable()"><i class="fas fa-times"></i> No</a></div>
                </div>
            </div>
            <!-- <div id="available">
                <center>You are available for deliveries</center> -->
                <!-- <a href="#" class="confirm-btn">Confirm your availability</a></center> -->
            <!-- </div>
            <div id="not-available">
                    <center>You are not available for deliveries</center>  -->
                <!-- <a href="#" class="confirm-btn">Confirm your availability</a></center> -->
            <!-- </div> -->
         </section>
    
         <div class="footer">
        <?php include('footer.php'); ?>  
    </div>
        
    </body>
</html>