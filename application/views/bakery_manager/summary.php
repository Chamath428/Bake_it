<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-summary.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-summary.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-header.js" defer></script>

    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Summary of Raw Materials Inventory</title>
</head>

<body>

    <?php require_once('header_raw_materials.php'); ?>

    <div class="bgg" id="body">

        <div class="content">


            <div class="summary-topic">
                <pre>
Summary of Stock

                </pre>
            </div>


            <div class="chart-body">
                <div class="chart1">

                    <canvas id="myChart1" class="first-chart"></canvas>
                </div>

                <div class="select-chart">
                    <div class="drop-down-btn-div">
                        <div class="year">
                            <label for="year">Year</label>
                            <select placeholder="Select Year">
                                <option>2022</option>
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
                            <select placeholder="Select Month">

                                <option selected value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>


                            </select>
                        </div>
                        <div class="get-view-btn">
                            <input type="button" id="button-show" value="Show" onclick="dropTableFunction()">
                        </div>


                    </div>

                    <div class="get-summary-btn" id="viewTablebtn">

                        <a href="<?php echo BASEURL . "/bakeryManagerSummaryController" ?>"> <input type="button" id="button" value="View Summary Table"> </a>
                    </div>

                    <div>
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>

            </div>





        </div>

    </div>




    <?php require_once('footer.php'); ?>


    <?php
    $category = [];
    for ($i = 0; $i < count($data[0]); $i++) {
        $category[$i] = $data[0][$i]['raw_category_name'];
    }

    ?>
    <?php require_once('footer.php'); ?>


    <?php
    $retriveData = [];
    for ($i = 0; $i < count($data[1]); $i++) {
        $retriveData[$i] = $data[1];
    }

    ?>
    <script>
        const categories = <?php echo json_encode($category); ?>;
        console.log(categories);
        const retriveData = <?php echo json_encode($retriveData); ?>;
        console.log(retriveData);
        var xValues = categories;
        var yValues = retriveData;
        var barColors = ["red", "green", "blue", "orange"];

        new Chart("myChart1", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Usage of category"
                }
            }
        });

        new Chart("myChart2", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Usage of category"
                }
            }
        });
    </script>