<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/owner/owner-overview.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/owner/owner-dashboard.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-overview.js" defer ></script>
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

</head>
<body>
    <?php include "headerReports.php"?>
    <div class="overview-container" id="body">
        <div class="topic-1">Business Overview </div>
        <div class="topic-2">Total Sales Overview</div>
        <div class="row-container">
             <div class="col">
              <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
              <!-- ?php
                echo "<input type='hidden' id= 'jan' value = $data[0]['jan'] >";
                echo "<input type='hidden' id= 'feb' value = $data[0]['feb'] >";
                echo "<input type='hidden' id= 'march' value = $data[0]['march'] >";
                echo "<input type='hidden' id= 'april' value = $data[0]['april'] >";
                echo "<input type='hidden' id= 'may' value = $data[0]['may'] >";
                echo "<input type='hidden' id= 'june' value = $data[0]['june'] >";
                echo "<input type='hidden' id= 'july' value = $data[0]['july'] >";
                echo "<input type='hidden' id= 'aug' value = $data[0]['aug'] >";
                echo "<input type='hidden' id= 'sep' value = $data[0]['sep'] >";
                echo "<input type='hidden' id= 'oct' value = $data[0]['oct'] >";
                echo "<input type='hidden' id= 'nov' value = $data[0]['nov'] >";
                echo "<input type='hidden' id= 'dec' value = $data[0]['dec'] >";


                ?> -->
             </div>
             <div class="col">
              <canvas id="myChart2" style="width:100%;max-width:700px"></canvas> 
             </div>
        </div>
        <div class="topic-2">Categories Sales Overview</div>
        <div class="row-container">
             <div class="col">
              <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>
             </div>
             <div class="col">
              <canvas id="myChart4" style="width:100%;max-width:700px"></canvas> 
             </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>