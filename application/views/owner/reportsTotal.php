<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/owner/owner-report.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer ></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASEURL; ?>/public/js/owner/owner-report.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
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
                                      <span>Daily Reports </span>
                                      <span><i class="fas fa-angle-down"></i></span>
                                    </label>
                                    <div class="sub-time-selection" id="time1">
                                          <div class="time-dropdown">
                                                <label for="select-year">Year</label>
                                                <select class="" name="year">
                                                <option value="1">2021</option>
                                                <option value="2">2020</option>
                                                </select>
                                          </div>

                                          <div class="time-dropdown">
                                                <label for="select-year">Month</label>
                                                <select class="" name="year">
                                                <option value="1">2021</option>
                                                <option value="2">2020</option>
                                                </select>
                                          </div>
                                          <div class="time-dropdown">
                                                <label for="select-year">Date</label>
                                                <select class="" name="year">
                                                <option value="1">2021</option>
                                                <option value="2">2020</option>
                                                </select>
                                          </div>
                                    </div>
                                    <label for="time-week" onclick="showSelection2()" onmouseout="notshowSelection2()">
                                          <span>Weekly Reports</span>
                                          <span><i class="fas fa-angle-down"></i></span>
                                    </label>
                                    <div class="sub-time-selection" id="time2">
                                          <div class="time-dropdown">
                                                <label for="select-year">Year</label>
                                                <select class="" name="year">
                                                <option value="1">2021</option>
                                                <option value="2">2020</option>
                                                </select>
                                          </div>
                                          <div class="time-dropdown">
                                                <label for="select-year">Month</label>
                                                <select class="" name="year">
                                                <option value="1">2021</option>
                                                <option value="2">2020</option>
                                                </select>
                                          </div>
                                          <div class="time-dropdown">
                                                <label for="select-year">Week</label>
                                                <select class="" name="year">
                                                <option value="1">2021</option>
                                                <option value="2">2020</option>
                                                </select>
                                          </div>
                                    </div>

                                    <label for="time-month" onclick="showSelection3()"onmouseout="notshowSelection3()">
                                          <span>Monthlyy Reports</span>
                                          <span><i class="fas fa-angle-down"></i></span>
                                    </label>
                                    <div class="sub-time-selection" id="time3">
                                          <div class="time-dropdown">
                                                <label for="select-year">Year</label>
                                                <select class="" name="year">
                                                      <option value="1">2021</option>
                                                      <option value="2">2020</option>
                                                </select>
                                          </div>
                                          <div class="time-dropdown">
                                                <label for="select-year">Month</label>
                                                <select class="" name="year">
                                                      <option value="1">2021</option>
                                                      <option value="2">2020</option>
                                                </select>
                                          </div>
                                          
                                    </div>

                              </div>
                        </div>


                        <div class="condition outlet">
                              <span class="topic">Outlet</span>
                              <select placeholder="select outlet" name="outlet">
                                    <option value="1">Kesbewa</option>
                                    <option value="2">Battaramulla</option>
                                    <option value="3">Piliyandala</option>
                              </select>
                        </div>
                      
                        <div class="generate-btn">
                              <button type="button" name="button">Generate</button>
                        </div>
                  </div>


            </div>


<?php require_once('footer.php'); ?>
</body>
</html>

     