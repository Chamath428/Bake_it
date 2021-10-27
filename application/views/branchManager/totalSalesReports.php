<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/branchManager/totalSalesReports.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/branchManager/footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/totalSalesReports.js" defer></script>
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Sales Reports</title>
</head>
<body>
   
<?php require_once('headerReports.php'); ?>
                  
<div class="bgg sales-report" id="body">
                  <div class="topic-sales">Sales Reports</div>
                  <div class="report-selection">
                        <div class="condition time">
                              <span class="topic">Time Peroid</span>
                              <div class="time-selection">
                                    <label for="time-date" onclick="showSelection1()" onmouseout="notshowSelection1()">
                                      <div>Daily Reports </div>
                                      <div><i class="fas fa-angle-down"></i></div>
                                    </label>
                                    <div class="sub-time-selection" id="time1">
                                          <div class="time-dropdown">
                                                <span for="select-year">Year</span>
                                                <select class="" name="year">
                                                <option value="1">2021</option>
                                                <option value="2">2020</option>
                                                </select>
                                          </div>

                                          <div class="time-dropdown">
                                                <span for="select-year">Month</span>
                                                <select class="" name="year">
                                                <option value="1">Januaray</option>
                                                <option value="2">February</option>
                                                </select>
                                          </div>
                                          <div class="time-dropdown">
                                                <span for="select-year">Date</span>
                                                <select class="" name="year">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                </select>
                                          </div>
                                    </div>
                                    <label for="time-week" onclick="showSelection2()" onmouseout="notshowSelection2()">
                                          <div>Weekly Reports</div>
                                          <div><i class="fas fa-angle-down"></i></div>
                                    </label>
                                    <div class="sub-time-selection" id="time2">
                                          <div class="time-dropdown">
                                                <span for="select-year">Year</span>
                                                <select class="" name="year">
                                                <option value="1">2021</option>
                                                <option value="2">2020</option>
                                                </select>
                                          </div>
                                          <div class="time-dropdown">
                                                <span for="select-year">Month</span>
                                                <select class="" name="year">
                                                <option value="1">Januaray</option>
                                                <option value="2">February</option>
                                                </select>
                                          </div>
                                          <div class="time-dropdown">
                                                <span for="select-year">Week</span>
                                                <select class="" name="year">
                                                <option value="1">1st week</option>
                                                <option value="2">2nd week</option>
                                                </select>
                                          </div>
                                    </div>

                                    <label for="time-month" onclick="showSelection3()"onmouseout="notshowSelection3()">
                                          <div>Monthly Reports</div>
                                          <div><i class="fas fa-angle-down"></i></div>
                                    </label>
                                    <div class="sub-time-selection" id="time3">
                                          <div class="time-dropdown">
                                                <span for="select-year">Year</span>
                                                <select class="" name="year">
                                                      <option value="1">2021</option>
                                                      <option value="2">2020</option>
                                                </select>
                                          </div>
                                          <div class="time-dropdown">
                                                <span for="select-year">Month</span>
                                                <select class="" name="year">
                                                      <option value="1">Januaray</option>
                                                      <option value="2">February</option>
                                                </select>
                                          </div>
                                          
                                    </div>

                              </div>
                        </div>
                      
                        <div class="generate-btn">
                              <button type="button" name="button">Generate</button>
                        </div>
                  </div>


            </div>

<?php require_once('footer.php'); ?>