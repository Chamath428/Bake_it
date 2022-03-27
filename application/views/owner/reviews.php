<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/owner/owner-reviews.css" class="rel">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/table.css">
    <script src="<?php echo BASEURL; ?>/public/js/owner/owner-employeeAccounts.js" defer></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="header">
        <?php include('header.php') ?>
    </div>
    <div class="reviews-body" id="body">
        <div class="rev-topic">Overview of Reviews</div>
        <h3 id="table-caption">Total Reviews Summary</h3>
        <div class="row">
            <div class="col">
                <h4>Total Reviews</h4>
                <h1><?php echo $data[0] ?></h1>
            </div>
            <div class="col">
                <h4>Total Ratings</h4>
                <h1><?php echo $data[1] ?></h1>
            </div>
            <div class="col">
                <h4>Total Ratings</h4>
                <h1>
                    <?php
                    $j = 0;
                    $review['total_rating'] = intdiv(intval($data[1]), intval($data[0]));
                    for ($i = 0; $i < $review['total_rating']; $i++) { ?>
                        <i id="fas-star" class="fas fa-star"></i>
                    <?php
                    } ?>
                    <?php
                    $blankStars = 5 - $review['total_rating'];
                    for ($i = 0; $i < $blankStars; $i++) { ?>
                        <i id="far-star" class="far fa-star"></i>
                    <?php
                    } ?>
                </h1>
            </div>
            <div class="col">
                <h4>Best Delivery Person Form Ratings</h4>
                <h1><i class="fas fa-user"></i></h1>
                <span>
                    <?php echo $data[2]['first_name'] ?>
                    <?php echo $data[2]['last_name'] ?>
                </span>

            </div>
        </div>
        <div class="branch-selection">

            <label for="Branch">Select Branch</label>
            <form action="<?php echo BASEURL . '/ownerReviewsController/getReviewsTabel'; ?>" method="POST">
                <div class="text">
                    <select placeholder="Select Branch" name="branch_id">
                        <option value="0">All</option>
                        <?php foreach ($data['branches'] as $key => $branch) { ?>
                            <option value="<?php echo $branch['branch_id']; ?>"><?php echo $branch['branch_name']; ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <input type="submit" name="reviewsTable" value="Search" required="">
            </form>

        </div>
        <div>
            <?php if (!empty($data[3]) && $branch['branch_id'] != "") { ?>
                <h3 id="table-caption">Reviews Details</h3>
                <table id="reviews-table">
                    <thead>
                        <tr>
                            <td>Date</td>
                            <td>Order Id</td>
                            <td>Review Description</td>
                            <td>Rated Stars</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($data[3] as $key => $review) { ?>
                            <tr>
                                <td label="Date"><?php echo $review['needed_date']; ?></td>
                                <td label="Order No"><?php echo $review['order_id']; ?></td>
                                <td label="Review Description"><?php echo $review['review']; ?></td>
                                <td label="Rated Stars">
                                    <?php
                                    $j = 0;
                                    for ($i = 0; $i < $review['rating']; $i++) { ?>
                                        <i id="fas-star" class="fas fa-star"></i>
                                    <?php
                                    } ?>
                                    <?php
                                    $blankStars = 5 - $review['rating'];
                                    for ($i = 0; $i < $blankStars; $i++) { ?>
                                        <i id="far-star" class="far fa-star"></i>
                                    <?php
                                    } ?>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        } ?>
                    </tbody>
                </table>
            <?php } elseif (empty($data[3]) && $branch['branch_id'] < 1) {
                echo "No reviews to show";
                echo $branch['branch_id'];
            } ?>
        </div>
    </div>

       
    </div>
    <div id="footer">
            <?php include('footer.php') ?>
        </div>
</body>

</html>