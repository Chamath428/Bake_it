<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/summary.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/summary.js" defer></script>
    <script src="../../../public/js/bakery_manager/header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Summary of Raw Materials Inventory</title>
</head>
<body>
   
        <?php require_once('header_raw_materials.php'); ?>

        <div class="bgg" id="body">
                    <div class="content">

            <div class="summary-topic">
                <pre>
Summary of Raw  Materials

                </pre>
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

                    <div class="Raw-Material">
                        <label for="raw-material">Raw Material</label>
                        <select placeholder="Select Raw Material" >
                        <option>Material 1</option>
                        <option>Material 2</option>
                        <option>Material 3</option>
                        <option>Material 4</option>
                        <option>Material 5</option>
                        <option>Material 6</option>

                    </select>
                    </div>
            </div>


            <div class="get-summary-btn">
                <input type="button" id="button" value="Get Summary" onclick="summaryViewFunction()">
            </div>
            </div>

        </div>


        <?php require_once('footer.php'); ?>
 

     