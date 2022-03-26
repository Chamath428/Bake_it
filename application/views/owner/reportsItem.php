<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/owner/owner-report.css" class="rel">
      <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
      <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
      <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
      <script src="<?php echo BASEURL; ?>/public/js/owner/owner-report.js" defer></script>
      <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
</head>

<body>

      <?php require_once('headerReports.php'); ?>

      <div class="bgg sales-report" id="body">
            <div class="topic-sales">Sales Reports</div>
            <div class="report-selection">
                  <div class="condition outlet">
                        <span class="topic">Branch</span>
                        <form action="<?php echo BASEURL . '/ownerReportController/generateDailySalesReport'; ?>" method="POST">
                              <select placeholder="Select Branch" name="branch_id" id="branchId" onclick="getBranchId()">
                                    <option value="0">All</option>
                                    <?php foreach ($data['branches'] as $key => $branch) { ?>
                                          <option value="<?php echo $branch['branch_id']; ?>"><?php echo $branch['branch_name']; ?></option>
                                    <?php  } ?>
                              </select>
                        </form>
                  </div>
                  <div class="condition category">
                              <span class="topic">Category</span>
                              <form action="<?php echo BASEURL . '/ownerReportController/generateDailyCategorySalesReport'; ?>" method="POST">
                                    <select placeholder="Select Category" name="category_id" id="categoryId" onclick="getCategoryId()">
                                          <option value="0">All</option>
                                          <?php foreach ($data['categories'] as $key => $category) { ?>
                                                <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                                          <?php  } ?>
                                    </select>
                              </form>
                        </div>
                  <div class="condition time">
                        <!-- <span class="topic">Time Peroid</span> -->
                        <div class="timeSelection">
                              <div class="subTimeSelection">
                                    <div class="reportType">
                                          Daily Reports
                                    </div>
                                    <form action="<?php echo BASEURL . '/ownerReportController/generateDailyCategorySalesReport'; ?>" method="POST">
                                          <input type="hidden" id="reportType" name="reportType" value="1">
                                          <input type="hidden" id="branchId1" name="branch_id" value="0">
                                          <input type="hidden" id="categoryId1" name="category_id" value="0">
                                          <div class="selectDate">Select Date
                                                <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" />
                                          </div>
                                          <input type="submit" name="dailyReport" value="Generate" required="">
                                    </form>
                                    <!-- ?php if($data['branches']['branch_id']==0 && $data['categories']['category_id']==0){ ?>
                                       <p id="demo">?php echo $data['error']; ?></p>
                                    ?php } ?> -->
                              </div>

                              <div class="subTimeSelection">
                                    <div class="reportType">
                                          Weekly Reports
                                    </div>
                                    <form action="<?php echo BASEURL . '/ownerReportController/generateWeeklyCategorySalesReport'; ?>" method="POST">
                                         <input type="hidden" id="branchId2" name="branch_id" value="0">
                                         <input type="hidden" id="reportType" name="reportType" value="2">
                                         <input type="hidden" id="categoryId2" name="category_id" value="0">
                                          <div class="selectYear">Select Year
                                                <select class="selection" name="year" id="year">
                                                      <option value="0">Year</option>
                                                      <?php foreach ($data['years'] as $key => $year) { ?>
                                                            <option value="<?php echo $year['year']; ?>"><?php echo $year['year']; ?></option>
                                                      <?php  } ?>
                                                </select>
                                          </div>
                                          <div class="selectMonth">Select Month
                                                <select class="selection" name="month" id="month">
                                                      <option value="0">Month</option>
                                                      <option value="01">January</option>
                                                      <option value="02">February</option>
                                                      <option value="03">March</option>
                                                      <option value="04">April</option>
                                                      <option value="05">May</option>
                                                      <option value="06">June</option>
                                                      <option value="07">July</option>
                                                      <option value="08">August</option>
                                                      <option value="09">September</option>
                                                      <option value="10">Octomber</option>
                                                      <option value="11">November</option>
                                                      <option value="12">December</option>
                                                </select>

                                          </div>
                                          <div class="selectWeek">Select Week
                                                <select class="selection" name="week" id="week">
                                                      <option value="0">Week</option>
                                                      <option value="01">1st Week</option>
                                                      <option value="02">2nd Week</option>
                                                      <option value="03">3rd Week</option>
                                                      <option value="04">4th Week</option>
                                                </select>
                                          </div>
                                          <input type="submit" name="weeklyReport" value="Generate" required="">
                                    </form>

                              </div>

                              <div class="subTimeSelection">
                                    <div class="reportType">
                                          Monthly Reports
                                    </div>
                                    <form action="<?php echo BASEURL . '/ownerReportController/generateMonthlyCategorySalesReport'; ?>" method="POST">
                                          <input type="hidden" id="reportType" name="reportType" value="3">
                                          <input type="hidden" id="branchId3" name="branch_id" value="0">
                                          <input type="hidden" id="categoryId3" name="category_id" value="0">
                                          <div class="selectYear">Select Year
                                                <select class="selection" name="year" id="year">
                                                      <option value="0">Year</option>
                                                      <?php foreach ($data['years'] as $key => $year) { ?>
                                                            <option value="<?php echo $year['year']; ?>"><?php echo $year['year']; ?></option>
                                                      <?php  } ?>
                                                </select>
                                          </div>
                                          <div class="selectMonth">Select Month
                                                <select class="selection" name="month" id="month">
                                                      <option value="0">Month</option>
                                                      <option value="01">January</option>
                                                      <option value="02">February</option>
                                                      <option value="03">March</option>
                                                      <option value="04">April</option>
                                                      <option value="05">May</option>
                                                      <option value="06">June</option>
                                                      <option value="07">July</option>
                                                      <option value="08">August</option>
                                                      <option value="09">September</option>
                                                      <option value="10">Octomber</option>
                                                      <option value="11">November</option>
                                                      <option value="12">December</option>
                                                </select>
                                          </div>
                                          <input type="submit" name="monthlyReport" value="Generate" required="">
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
     

      </div>


      <?php require_once('footer.php'); ?>
</body>

</html>