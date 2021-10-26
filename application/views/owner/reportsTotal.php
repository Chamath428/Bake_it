<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- <link rel="stylesheet" href="../../../public/css/owner/sales_reports.css" class="rel"> -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/branchManager/totalSalesReports.css" class="rel">

    <link rel="stylesheet" href="../../../public/css/owner/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/owner/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/owner/sales_reports.js" defer></script>
    <script src="../../../public/js/owner/header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Sales Reports</title>
</head>
<body>
   
<?php require_once('header_reports.php'); ?>
                  
            <div class="bgg" id="body">

                  
                  <div class="sales-topic">Total Sales Reports</div>
                  

                        <div class="select-raw">
                              <div class="select-raw-btn2">
                                    <button id="daily-btn" onclick="selectTotalSaleRepoDaily()">Daily</button>
                                    <button id="weekly-btn" onclick="selectTotalSaleRepoWeekly()">Weekly</button>
                                    <button id="monthly-btn" onclick="selectTotalSaleRepoMonthly()">Monthly</button>
                                    <button id="outlet-btn" onclick="selectTotalSaleRepoOutlet()">Outlet</button>
                                    
                              </div>  

                              <div class="drop-down-list-daily" id="drop-down-list-daily-id">
                                    <div class="year">
                                                <label for="year">Year</label>
                                                <select placeholder="Select Year" >
                                                <option>2021</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>

                                                </select>
                                    </div>


                                    <div class="month">
                                                <label for="month">Month</label>
                                                <select placeholder="Select Month" >
                                                <option>Jan</option>
                                                <option>Feb</option>
                                                <option>Mar</option>
                                                <option>Apr</option>

                                                </select>
                                    </div>

                                    <div class="date">
                                          <label for="date">Date</label>
                                          <select placeholder="Select Date" >
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>

                                          </select>
                                    </div>

                                    <div class="outlet">
                                          <label for="outlet">Outlet</label>
                                          <select placeholder="Select Outlet" >
                                          <option>outlet 1</option>
                                          <option>outlet 2</option>
                                          <option>outlet 3</option>
                                          <option>outlet 4</option>
                                          </select>
                                    </div>
                              

                                    <div class="generate-btn">
                                          <a href="report_view.php"><button>Generate</button></a>
                                    </div>
                              </div>


                              <div class="drop-down-list-weekly" id="drop-down-list-weekly-id">
                                    <div class="year">
                                          <label for="year">Year</label>
                                          <select placeholder="Select Year" >
                                          <option>2021</option>
                                          <option>2020</option>
                                          <option>2019</option>
                                          <option>2018</option>

                                          </select>

                                    </div>
                                    <div class="month">
                                          <label for="month">Month</label>
                                          <select placeholder="Select Month" >
                                          <option>Jan</option>
                                          <option>Feb</option>
                                          <option>Mar</option>
                                          <option>Apr</option>

                                          </select>
                                    </div>

                                    <div class="week">
                                          <label for="week">Week</label>
                                          <select placeholder="Select Week" >
                                          <option>Week 1</option>
                                          <option>Week 2</option>
                                          <option>Week 3</option>
                                          <option>Week 4</option>

                                          </select>
                                    </div>

                                    <div class="outlet">
                                          <label for="outlet">Outlet</label>
                                          <select placeholder="Select Outlet" >
                                          <option>outlet 1</option>
                                          <option>outlet 2</option>
                                          <option>outlet 3</option>
                                          <option>outlet 4</option>

                                          </select>
                                    </div>

                                    <div class="generate-btn">
                                          <a href="report_view.php"><button>Generate</button></a>
                                    </div>
                              </div>


                              <div class="drop-down-list-monthly" id="drop-down-list-monthly-id">
                                    <div class="year">
                                          <label for="year">Year</label>
                                          <select placeholder="Select Year" >
                                          <option>2021</option>
                                          <option>2020</option>
                                          <option>2019</option>
                                          <option>2018</option>

                                          </select>
                                    </div>

                                    <div class="month">
                                          <label for="month">Month</label>
                                          <select placeholder="Select Month" >
                                          <option>Jan</option>
                                          <option>Feb</option>
                                          <option>Mar</option>
                                          <option>Apr</option>

                                          </select>
                                    </div>

                                    <div class="outlet">
                                                <label for="outlet">Outlet</label>
                                                <select placeholder="Select Outlet" >
                                                <option>outlet 1</option>
                                                <option>outlet 2</option>
                                                <option>outlet 3</option>
                                                <option>outlet 4</option>

                                                </select>
                                    </div>

                                    <div class="generate-btn">
                                                <a href="report_view.php"><button>Generate</button></a>
                                          </div>
                              </div>

                              <div class="drop-down-list-outlet" id="drop-down-list-outlet-id">
                                    <div class="year">
                                          <label for="year">Year</label>
                                          <select placeholder="Select Year" >
                                          <option>2021</option>
                                          <option>2020</option>
                                          <option>2019</option>
                                          <option>2018</option>
                                          </select>
                                    </div>

                                    <div class="month">
                                          <label for="month">Month</label>
                                          <select placeholder="Select Month" >
                                          <option>Jan</option>
                                          <option>Feb</option>
                                          <option>Mar</option>
                                          <option>Apr</option>
                                          </select>
                                    </div>

                                    <div class="date">
                                          <label for="date">Date</label>
                                          <select placeholder="Select Date" >
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>

                                          </select>
                                    </div>

                                    <div class="outlet">
                                          <label for="outlet">Outlet</label>
                                          <select placeholder="Select Outlet" >
                                          <option>outlet 1</option>
                                          <option>outlet 2</option>
                                          <option>outlet 3</option>
                                          <option>outlet 4</option>

                                          </select>
                                    </div>


                                    <div class="generate-btn">
                                          <a href="report_view.php"><button>Generate</button></a>
                                    </div>
                              </div>

                        </div>


                  
                  


                  <!-- <div class="after-click" id="item-sale-repo-aftr">

  

                        <div class="select-raw">
                              <div class="select-raw-btn2">
                                    <button id="daily-btn" onclick="selectTotalSaleRepoDaily()">Daily</button>
                                    <button id="weekly-btn" onclick="selectTotalSaleRepoWeekly()">Weekly</button>
                                    <button id="monthly-btn" onclick="selectTotalSaleRepoMonthly()">Monthly</button>
                                    <button id="outlet-btn" onclick="selectTotalSaleRepoOutlet()">Outlet</button>
                                    
                              </div>  

                              <div class="drop-down-list-daily" id="drop-down-list-daily-item-id">
                              <div class="year">
                                    <label for="year">Year</label>
                                    <select placeholder="Select Year" >
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    <option>2018</option>

                                    </select>
                              </div>


                              <div class="month">
                                    <label for="month">Month</label>
                                    <select placeholder="Select Month" >
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>

                                    </select>
                              </div>

                              <div class="date">
                                    <label for="date">Date</label>
                                    <select placeholder="Select Date" >
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>

                                    </select>
                              </div>

                              <div class="outlet">
                                    <label for="outlet">Outlet</label>
                                    <select placeholder="Select Outlet" >
                                    <option>outlet 1</option>
                                    <option>outlet 2</option>
                                    <option>outlet 3</option>
                                    <option>outlet 4</option>

                                    </select>
                              </div>
                              <div class="item">
                                    <label for="item">Item</label>
                                    <select placeholder="Select Item" >
                                    <option>item 1</option>
                                    <option>item 2</option>
                                    <option>item 3</option>
                                    <option>item 4</option>

                                    </select>
                              </div>

                              <div class="generate-btn">
                                    <a href="report_view.php"><button>Generate</button></a>
                              </div>
                              </div>


                              <div class="drop-down-list-weekly" id="drop-down-list-weekly-item-id">
                              <div class="year">
                                    <label for="year">Year</label>
                                    <select placeholder="Select Year" >
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    <option>2018</option>

                                    </select>

                              </div>
                              <div class="month">
                                    <label for="month">Month</label>
                                    <select placeholder="Select Month" >
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>

                                    </select>
                              </div>

                              <div class="week">
                                    <label for="week">Week</label>
                                    <select placeholder="Select Week" >
                                    <option>Week 1</option>
                                    <option>Week 2</option>
                                    <option>Week 3</option>
                                    <option>Week 4</option>

                                    </select>
                              </div>

                              <div class="outlet">
                                    <label for="outlet">Outlet</label>
                                    <select placeholder="Select Outlet" >
                                    <option>outlet 1</option>
                                    <option>outlet 2</option>
                                    <option>outlet 3</option>
                                    <option>outlet 4</option>

                                    </select>
                              </div>
                              <div class="item">
                                    <label for="item">Item</label>
                                    <select placeholder="Select Item" >
                                    <option>item 1</option>
                                    <option>item 2</option>
                                    <option>item 3</option>
                                    <option>item 4</option>

                                    </select>
                              </div>

                              <div class="generate-btn">
                                    <a href="report_view.php"><button>Generate</button></a>
                              </div>
                              </div>


                              <div class="drop-down-list-monthly" id="drop-down-list-monthly-item-id">
                              <div class="year">
                                    <label for="year">Year</label>
                                    <select placeholder="Select Year" >
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    <option>2018</option>

                                    </select>
                              </div>

                              <div class="month">
                                    <label for="month">Month</label>
                                    <select placeholder="Select Month" >
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>

                                    </select>
                              </div>

                              <div class="outlet">
                                    <label for="outlet">Outlet</label>
                                    <select placeholder="Select Outlet" >
                                    <option>outlet 1</option>
                                    <option>outlet 2</option>
                                    <option>outlet 3</option>
                                    <option>outlet 4</option>

                                    </select>
                              </div>
                              <div class="item">
                                    <label for="item">Item</label>
                                    <select placeholder="Select Item" >
                                    <option>item 1</option>
                                    <option>item 2</option>
                                    <option>item 3</option>
                                    <option>item 4</option>

                                    </select>
                              </div>

                              <div class="generate-btn">
                                    <a href="report_view.php"><button>Generate</button></a>
                              </div>
                              </div>

                              <div class="drop-down-list-outlet" id="drop-down-list-outlet-item-id">
                              <div class="year">
                                    <label for="year">Year</label>
                                    <select placeholder="Select Year" >
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    <option>2018</option>
                                    </select>
                              </div>

                              <div class="month">
                                    <label for="month">Month</label>
                                    <select placeholder="Select Month" >
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>
                                    </select>
                              </div>

                              <div class="date">
                                    <label for="date">Date</label>
                                    <select placeholder="Select Date" >
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>

                                    </select>
                              </div>

                              <div class="outlet">
                                    <label for="outlet">Outlet</label>
                                    <select placeholder="Select Outlet" >
                                    <option>outlet 1</option>
                                    <option>outlet 2</option>
                                    <option>outlet 3</option>
                                    <option>outlet 4</option>

                                    </select>
                              </div>
                              <div class="item">
                                    <label for="item">Item</label>
                                    <select placeholder="Select Item" >
                                    <option>item 1</option>
                                    <option>item 2</option>
                                    <option>item 3</option>
                                    <option>item 4</option>

                                    </select>
                              </div>


                              <div class="generate-btn">
                                    <a href="report_view.php"><button>Generate</button></a>
                              </div>
                              </div>

                        </div>


                  </div> -->

            </div>


<?php require_once('footer.php'); ?>
 

     