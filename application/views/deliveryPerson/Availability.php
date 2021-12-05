<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-availability.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-header.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-footer.css">
        <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-header.js" defer ></script>
        <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-availability.js"></script>
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>

    </head>
    <body>
       <section class="header">
        <?php include('headerDP.php'); ?>
       </section>
        
         <section  class="available-body" id="body">
            <h2>Availability Status</h2>
            <div id="selection-box" <?php echo BASEURL."/deliveryPersonAvailabilityController/insertAvailability";?>>
                <div class="question">Are you available for deliveries?</div>
                <div class="click-available">
                    <div class="availablity">
                        <form action="<?php echo BASEURL."/deliveryPersonAvailabilityController/insertAvailability";?>" method="POST">
                            <!-- <input type="radio" class="button" name="availability" value="1"> -->
                            <button type="submit" name="availability" value="1">
                               <i class="fas fa-thumbs-up"></i> Yes
                            </button>
                        </form>
                    </div>
                    <div class="availablity">
                        <form action="<?php echo BASEURL."/deliveryPersonAvailabilityController/insertAvailability";?>" method="POST">
                            <!-- <input type="radio" class="button" name="availability" value="0"> -->
                            <button type="submit" name="availability" value="0">
                               <i class="fas fa-thumbs-down"></i> No
                            </button>
                        </form>
                    </div>
                </div>
            </div>
         </section>
    
         <div class="footer">
        <?php include('footerDP.php'); ?>  
    </div>
        
    </body>
</html>