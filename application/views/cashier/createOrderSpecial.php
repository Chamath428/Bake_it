<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-create-order-special.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>

    <script src="<?php echo BASEURL ?>/public/js/cashier/cashier-create-order-special.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/cashier/cashier-header.js" defer></script>

    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <title>Create Special Order</title>
</head>

<body>

    <?php require_once("header.php"); ?>

    <div class="bgg" id="body">
        <div class="middle-section">
            <header class="order-topic">
                <h3>Special Order</h3>
            </header>
            <!-- <article> -->

                <table class="meta">
                    <tr>
                        <th><span contenteditable>Date</span></th>
                        <td><span contenteditable>January 1, 2012</span></td>
                    </tr>
                </table>
                <div class="search-container">
                        <select id="items-bar">
                            <?php foreach ($data as $key => $item) {?>
                                <option value="<?php echo $item['item_id'] ?>"><?php echo $item['item_id']."-".$item['item_name'] ?></option>
                            <?php } ?>
                        </select>

                        <?php foreach ($data as $key => $item) {?>
                            <input type="hidden" id="<?php echo "item-price-".$item['item_id']; ?>" value="<?php echo $item['price']; ?>">
                        <?php } ?>
                </div>

                <div class="data-content-scroll">

                    <table class="inventory" >
                        <thead>
                            <tr>
                                <th></th>
                                <th>Item Id</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Price(RS)</th>

                            </tr>
                        </thead>

                        <tbody id="item-table">
                            <?php if (isset($itemData)) {
                                $quan=1;
                                foreach ($itemData as $key => $item) {?>
                                    <tr>
                                    <td><input type="checkbox" id="Check-box" name="check"></td>
                                    <td>
                                        <input readonly id="item-id-<?php echo $quan ?>" name="item-id-<?php echo $quan ?>" value="<?php echo $item['item_id'] ?>"></input>
                                    </td>
                                    <td> <input readonly  name="item-name-<?php echo $quan ?>" value="<?php echo $item['item_name'] ?>"></input> </td>
                                    <td class="input">
                                        <input type="number" class="quntity" name="quntity<?php echo $quan ?>" id="itemid"  required=""  onkeypress="javascript:return isNumber(event)" value="<?php echo $item['item_qauntity'] ?>"> 
                                        <input type="hidden" name="finalCount" value="<?php echo $quan ?>">
                                    </td>
                                    <td><input class="item-price" name="item-price-<?php echo $quan ?>" readonly value="<?php echo $item['item_price'] ?>"></input></td>
                                    </tr>
                            <?php $quan++;}}?>
                        </tbody>

                    </table>
                    
                    <?php if (!isset($quan)) {
                        $quan=1; ?>
                        <input type="hidden" name="tracker" id="tracker" value="1">
                    <?php }else{ ?>
                        <input type="hidden" name="tracker" id="tracker" value="2">
                    <?php } ?>

                    <input type="hidden" name="quan" id="quan" value="<?php echo $quan ?>">

                </div>

                <div>
                    <input class="del-row" type="button" value="Delete Item" onclick="deleteRow('dataTable')" />
                    <a class="add" onclick="addRow('dataTable')"> +</a>
                </div>

                <div class="payment-balance">
                    <div class="payment">
                            <div class="text-box">
                                <h3>Order Require Date & Time</h3>
                                  <label for="time">Date</label>
                                  <input type="date" id="date" name="date" value="" required><br><br>

                                  <label for="time">Time</label>
                                  <input type="time" id="time" name="time" value="" required>

                                <h3>Contact Details</h3>
                                  <label for="PhoneNumber">Phone Number</label>
                                  <input type="phonenumber" id="Phone-number" name="Phone-number" value="" required>
                            </div>

                            <div class="radio-btn">
                                <h3>Order Receving Method</h3>
                                <div>
                                <label onclick="getLocation(0)">
                                     <input type="radio" name="delivery_type" checked="" value="1">
                                     <div class="circle"></div>
                                     <span>Pick up From Shop</span>
                                 </label>
                                 <label onclick="getLocation(1)">
                                     <input type="radio" name="delivery_type" value="2">
                                     <div class="circle"></div>
                                     <span>Home Delivery</span>
                                 </label>
                                </div>
                            </div>
                            <div class="location-details" id="location-details">
                                <input type="text" name="address_line1" placeholder="Address Line 1" value="">
                                <input type="text" name="address_line2" placeholder="Address Line 2" value="">
                                <input type="text" name="address_line3" placeholder="Address Line 3"value="">
                            </div>

                                <h3>Select Payment Method</h3>
                                <div class="radio-btn">
                                    <div>
                                    <label>
                                         <input type="radio" name="payment_type" checked="" value="1">
                                         <div class="circle"></div>
                                         <span>Cash</span>
                                     </label>
                                     <label>
                                         <input type="radio" name="payment_type" value="2">
                                         <div class="circle"></div>
                                         <span>Card</span>
                                     </label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <table class="balance">
                        <tr>
                            <th><span contenteditable>Total(RS:)</span></th>
                            <td><input type="text" readonly name="total-amount" value="600.00"></td>
                        </tr>
                        <tr>
                            <th><span contenteditable>Amount Paid(RS:)</span></th>
                            <td><input type="text" required name="paid-amount" value="<?php if(isset($_POST['paid-amount']))echo $_POST['paid-amount']; ?>"></td>
                        </tr>
                        <tr>
                            <th><span contenteditable>Balance Due(RS:)</span></th>
                            <td><input type="text" name="balance" readonly value="20.00"></td>
                        </tr>
                    </table>
                </div>
                <button class="pre-bill-btn">Preview Bill</button>

            <!-- </article> -->

        </div>
    </div>


    <?php require_once("footer.php"); ?>