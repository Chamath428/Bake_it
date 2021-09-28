<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../../../public/css/Availability.css">

       <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>

    </head>
    <body>
       
        <?php include('header.php'); ?>
         
        <h2>Availability Status</h2>
    
        <div id="container">
            <div class="button-container">
                <input type="button" class="button1" onclick="alert('You are available for deliveries')" value="Available">
            </div>
            <div class="button-container">
                <input type="button" class="button2" onclick="alert('You are not available for deliveries')" value="Not Available">
            </div>   
        </div>
        <?php include('footer.php'); ?>  
    </body>
</html>