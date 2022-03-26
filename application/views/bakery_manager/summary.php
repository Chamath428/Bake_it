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

                    <canvas id="myChart1" class="first-chart" style="width:100%;max-width:700px"></canvas>
                </div>



                <div class="select-chart">
                    <form method="post" action="<?php echo BASEURL . '/rawMaterialController/selectedDateGetSummary'; ?>">

                        <div class="drop-down-btn-div">
                            <div class="year">
                                <label for="year">Year</label>
                                <select placeholder="Select Year" name="year">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>

                                </select>
                            </div>

                            <div class="month">
                                <label for="month">Month</label>
                                <select placeholder="Select Month" name="month">

                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>


                                </select>
                            </div>
                            <div class="get-view-btn">
                                <!-- <input type="button" id="button-show" value="Show"> -->
                                <button id="button-show">Show</button>
                            </div>
                        </div>

                        <div class="chart2">
                            <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>
                        </div>
                    </form>




                </div>

            </div>

            <div class="get-summary-btn" id="viewTablebtn">

                <a href="<?php echo BASEURL . "/bakeryManagerSummaryController" ?>"> <input type="button" id="button" value="View Summary Table"> </a>
            </div>



            <?php
            // var_dump($data[0]);
            $i = 0;
            $category1 = [];
            $retriveData1 = [];
            foreach ($data[0] as $key => $value) {

                $category1[$i] = $value['raw_category_name'];
                $retriveData1[$i] = $value['total_quantity'];
                $i++;
            }
            // var_dump($category);
            ?>


            <?php
            // var_dump($data[0]);
            $i = 0;
            $category2 = [];
            $retriveData2 = [];
            foreach ($data[1] as $key => $value) {

                $category2[$i] = $value['raw_category_name'];
                $retriveData2[$i] = $value['total_quantity'];
                $i++;
            }
            // var_dump($category);
            ?>



        </div>

    </div>





    <?php require_once('footer.php'); ?>



    <script>
        const categories1 = <?php echo json_encode($category1); ?>;
        console.log(categories1);
        const retriveData1 = <?php echo json_encode($retriveData1); ?>;
        console.log(retriveData1);
        var xValues1 = categories1;
        var yValues1 = retriveData1;

        const categories2 = <?php echo json_encode($category2); ?>;
        console.log(categories2);
        const retriveData2 = <?php echo json_encode($retriveData2); ?>;
        console.log(retriveData2);
        var xValues2 = categories2;
        var yValues2 = retriveData2;
        // var yValues=[2,3];
        var barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChart1", {
            type: "bar",
            data: {
                labels: xValues1,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues1
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "This Month Over View"


                }


            }


        });
        new Chart("myChart2", {
            type: "bar",
            data: {
                labels: xValues2,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues2
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Selected Month Over View"
                }
            }
        });
    </script>