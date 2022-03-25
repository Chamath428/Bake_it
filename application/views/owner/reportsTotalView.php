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
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/templates/table.css" class="rel">
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
    <script src="<?php echo BASEURL; ?>/public/js/owner/owner-report.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php require_once('headerReports.php'); ?>
    <div class="bgg sales-report" id="body">
        <div class=" topic-sales reportTopic">
            Sales Report
            <div class="selectedTimePeriod">
                <?php if ($data['reportType'] == 1) { ?>
                    <div class="subReportTopic">
                        <span>Date : </span>
                        <span><?php echo $data['date'] ?></span>
                    </div>
                <?php } ?>
                <?php if ($data['reportType'] == 2) { ?>
                    <div class="subReportTopic">
                        <span>Year : </span>
                        <span><?php echo $data['year'] ?></span>
                    </div>
                    <div class="subReportTopic">
                        <span>Month : </span>
                        <span><?php echo $data['month'] ?></span>
                    </div>
                    <div class="subReportTopic">
                        <span>Week : </span>
                        <span><?php echo $data['week'] ?></span>
                    </div>
                <?php } ?>
                <?php if ($data['reportType'] == 3) { ?>
                    <div class="subReportTopic">
                        <span>Year : </span>
                        <span><?php echo $data['year'] ?></span>
                    </div>
                    <div class="subReportTopic">
                        <span>Month : </span>
                        <span><?php echo $data['month'] ?></span>
                    </div>
                <?php } ?>
            </div>
            <div class="selectedBranch">
                <span>Selected Branch : </span>
                <span>
                    <?php if ($data['branch_id'] == 0) { ?>
                        All branches
                    <?php } else {
                        echo $data['branch_name'];
                    } ?>
                </span>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>No of Saled Items</th>
                    <th>Total Income</th>
                    <!-- <th>Percentage</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($data[1] as $key => $salesReport) { ?>
                    <tr>
                        <td><?php echo $salesReport['category_id']; ?></td>
                        <td><?php echo $salesReport['category_name']; ?></td>
                        <td><?php echo $salesReport['quantity']; ?></td>
                        <td><?php echo $salesReport['income']; ?></td>
                        <!-- <td>?php echo $salesReport['category_id'];?></td> -->
                    </tr>
                <?php
                    $i++;
                } ?>
            </tbody>
        </table>
    </div>

    <?php require_once('footer.php'); ?>
</body>

</html>