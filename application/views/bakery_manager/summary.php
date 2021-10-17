<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery-manager-summary.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/bakery-manager-summary.js" defer></script>
    <script src="../../../public/js/bakery_manager/bakery-manager-header.js" defer></script>

    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Summary of Raw Materials Inventory</title>
</head>
<body>
   
        <?php require_once('headerRawMaterials.php'); ?>

        <div class="bgg" id="body">
                    <div class="content">

            <div class="summary-topic">
                <pre>
Summary of Stock

                </pre>
            </div>
            <div class="chart-body">
                    <div class="chart">
                    
                            <canvas id="myChart" style="width:100%"></canvas>
                    </div>

                    <div class="drop-down-btn-div">
                            <div class="year">
                                <label for="year">Year</label>
                                <select placeholder="Select Year" >
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>

                            </select>
                            </div>

                            <div class="month">
                                <label for="month">Month</label>
                                <select placeholder="Select Month" >
                                <option>Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>June</option>

                            </select>
                            </div>
                            <div class="get-view-btn" >
                                <input type="button" id="button-show" value="Show" onclick="dropTableFunction()">
                            </div>

                            <div class="get-summary-btn" id="viewTablebtn">
                                <input type="button" id="button" value="View Summary Table" onclick="summaryViewFunction()">
                            </div>  
                            
                    </div>
                      
            </div>
            <div class="chart2" id="chart2">
                    
                    <canvas id="myChart2" style="width:100%"></canvas>
                </div>
            <!-- <div>
                    <canvas id="myChart2" ></canvas>
             </div> -->


            
            </div>

        </div>


        <?php require_once('footer.php'); ?>
 

     