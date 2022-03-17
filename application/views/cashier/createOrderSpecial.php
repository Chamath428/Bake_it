<?php if (isset($_POST['preview']) && isset($_POST['finalCount'])){
    $finalCount=$_POST['finalCount'];
    $totalAmount=0;
    $paidAmount=$_POST['paid-amount'];
    $balance=$_POST['balance'];
    $deliveryTax=$_POST['delivery-tax'];
    $paymentType=$_POST['Payment'];
    $requiredDate=$_POST['req_date'];
    $requiredTime=$_POST['req_time'];
    $deliveryType=$_POST['delivery_type'];
    $phoneNumber=$_POST['phone_number'];
    $isAdvance=$_POST['is_advance'];
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $address1=$_POST['address_line1'];
    $address2=$_POST['address_line2'];
    $address3=$_POST['address_line3'];
    $itemData=array();
    for ($i=1; $i <=$finalCount ; $i++) { 
                $item['item_id']=$_POST['item-id-'.$i];
                $item['item_name']=$_POST['item-name-'.$i];
                $item['item_qauntity']=$_POST['quntity'.$i];
                $item['item_price']=$_POST['item-price-'.$i];
                $item['priceForFunction']=$_POST['priceForFunction'.$i];
                $itemData[$i]=$item;
                $totalAmount+=$_POST['item-price-'.$i];
    }
    $grandTotal=$totalAmount+$_POST['delivery-tax'];
    $balance=$paidAmount-$grandTotal;
} ?>

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
            <article>

                <table class="meta">
                    <tr>
                        <th><span>Date</span></th>
                        <td><span><?php echo date('F j, Y'); ?></span></td>
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
                <form method="post" action="">
               <table class="inventory">
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
                                        <input type="number" class="quntity" name="quntity<?php echo $quan ?>" id="quntity<?php echo $quan ?>"  required=""  onkeypress="javascript:return isNumber(event)" value="<?php echo $item['item_qauntity'] ?>" oninput="calc1('<?php echo "quntity".$quan ?>','<?php echo "priceForFunction".$quan; ?>','<?php echo "itemPrice".$quan;?>')"> 
                                        <input type="hidden" name="finalCount" value="<?php echo $quan ?>">
                                    </td>
                                    <td><input class="item-price" name="item-price-<?php echo $quan ?>" id="itemPrice<?php echo $quan ?>" readonly value="<?php echo $item['item_price'] ?>"></input>
                                        <input type="hidden" name="priceForFunction<?php echo $quan ?>" id="priceForFunction<?php echo $quan ?>" value="<?php echo $item['priceForFunction']; ?>"></input>
                                    </td>
                                    </tr>
                            <?php $quan++;}}?>
                        </tbody>

                    </table>

                    <!-- -------------------------------------------- -->

                    <?php if (!isset($quan)) {
                        $quan=1; ?>
                        <input type="hidden" name="tracker" id="tracker" value="1">
                    <?php }else{ ?>
                        <input type="hidden" name="tracker" id="tracker" value="2">
                    <?php } ?>

                    <input type="hidden" name="quan" id="quan" value="<?php echo $quan ?>">

                    <!-- --------------------------------------------- -->

                <div>
                    <input class="del-row" type="button" value="Delete Item" onclick="deleteRow('dataTable')" />
                    <button class="add" type="button" onclick="selectItem()"> +</button>
                </div>

                <div class="payment-balance">
                    <div class="payment">

                            <div class="text-box">
                                <div>
                                    <h3>Order Require Date & Time</h3>
                                      <label for="time">Date</label>
                                    <input type="date" name="req_date" id="req-date" onkeydown="return false" required value="<?php if(isset($_POST['req_date']))echo $_POST['req_date']; ?>">

                                  <label for="time">Time</label>
                                    <input type="time" name="req_time" required value="<?php if(isset($_POST['req_time']))echo $_POST['req_time']; ?>">
                                </div>

                                <div class="customer-details">
                                <h3>Customer Details</h3>
                                      <label for="First Name">First Name </label>
                                      <input type="text" required name="first_name" value="<?php if(isset($_POST['first_name']))echo $_POST['first_name']; ?>">
                                      <label for="First Name">Last Name </label>
                                      <input type="text" required name="last_name" value="<?php if(isset($_POST['last_name']))echo $_POST['last_name']; ?>">
                                </div>

                                <div>
                                <h3>Contact Details</h3>
                                      <label for="PhoneNumber">Phone Number</label>
                                      <input type="phonenumber" name="phone_number" id="Phone-number" onkeypress="javascript:return isNumber(event)" value="<?php if(isset($_POST['phone_number']))echo $_POST['phone_number']; ?>">
                                </div>
                            </div>

                            <div class="radio-btn">
                                <h3>Order Receving Method</h3>
                                 <div>
                                    <label onclick="getLocation(0)">
                                         <input type="radio" name="delivery_type" checked="" value="1" <?php if(isset($_POST['delivery_type']) && $_POST['delivery_type']==1)echo "checked"; ?>>
                                         <div class="circle"></div>
                                         <span>Pick up From Shop</span>
                                     </label>
                                     <label onclick="getLocation(1)">
                                         <input type="radio" name="delivery_type" value="2" <?php if(isset($_POST['delivery_type']) && $_POST['delivery_type']==2)echo "checked"; ?>>
                                         <div class="circle"></div>
                                         <span>Home Delivery</span>
                                     </label>
                                </div>
                                <div class="location-details" id="location-details">
                                    <input type="text" name="address_line1" placeholder="Address Line 1" value="<?php if(isset($_POST['address_line1']))echo $_POST['address_line1']; ?>">
                                    <input type="text" name="address_line2" placeholder="Address Line 2" value="<?php if(isset($_POST['address_line2']))echo $_POST['address_line2']; ?>">
                                    <input type="text" name="address_line3" placeholder="Address Line 3"value="<?php if(isset($_POST['address_line3']))echo $_POST['address_line3']; ?>">
                                </div>

                                <h3>Select Payment Method</h3>
                                <div class="radio-btn">
                                    <div>
                                        <label>
                                             <input type="radio" name="Payment" checked="" value="1" <?php if(isset($_POST['Payment']) && $_POST['Payment']==1)echo "checked"; ?>>
                                             <div class="circle"></div>
                                             <span>Cash</span>
                                         </label>
                                         <label>
                                             <input type="radio" name="Payment" value="2" <?php if(isset($_POST['Payment']) && $_POST['Payment']==2)echo "checked"; ?>>
                                             <div class="circle"></div>
                                             <span>Card</span>
                                         </label>
                                    </div>
                                </div>

                                <h3>How much would you like to pay?</h3>
                                <div>
                                    <label>
                                         <input type="radio" name="is_advance" checked="" value="1" <?php if(isset($_POST['is_advance']) && $_POST['is_advance']==1)echo "checked"; ?>>
                                         <div class="circle"></div>
                                         <span>Advance Payment (Half of the grand total)</span>
                                     </label>
                                     <label>
                                         <input type="radio" name="is_advance" value="0" <?php if(isset($_POST['is_advance']) && $_POST['is_advance']==0)echo "checked"; ?>>
                                         <div class="circle"></div>
                                         <span>Full payment</span>
                                     </label>
                                </div>

                            </div>

                    </div>
                    <div class="total-container">
                        <table class="balance">
                            <tr>
                                <th><span>Total(LKR:)</span></th>
                                <td><input type="number" readonly name="total-amount" id="total-amount" value="<?php if(isset($_POST['total-amount']))echo $_POST['total-amount']; else echo 0; ?>"></td>
                            </tr>

                            <tr>
                                <th><span>Delivery Tax(LKR:)</span></th>
                                <td><input type="number" readonly name="delivery-tax" id="delivery-tax" value="00"></td>    
                            </tr>

                            <tr>
                                <th><span>Amount Paid(LKR:)</span></th>
                                <td><input type="number" required name="paid-amount"  id="paid-amount" oninput="calc2()" onkeypress="javascript:return isNumber(event)" value="<?php if(isset($_POST['paid-amount']))echo $_POST['paid-amount']; ?>"></td>
                            </tr>
                            <tr>
                                <th><span>Balance Due(LKR:)</span></th>
                                <td><input type="number" name="balance" id="balance" readonly  value="<?php if(isset($_POST['balance']))echo $_POST['balance']; else echo 0; ?>" onkeypress="javascript:return isNumber(event)"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <button class="pre-bill-btn" name="preview">Preview Bill</button>
            </form>
            </article>
        </div>
    </div>

<!-- Bill preview starts -->

    <?php if (isset($_POST['preview']) && isset($_POST['finalCount'])) {?>

    <div class="bill active">
        <div class="bill-header">
            
            <h2>Bill Previwe</h2>
            <button data-close-button class="close-button">&times;</button>

        </div>

        <div class="bill-body">
            <div class="date-details">
                <table>
                    <tr>
                        <th><span>Date</span></th>
                        <td><span><?php echo date('F j, Y'); ?></span></td>
                    </tr>
                </table>
            </div>

            <div class="food-details">
                <form method="post" action="<?php echo BASEURL."/cashierCreateOrderController/createSpecialOrderCashier"?>">
                <table>
                    <thead>
                        <tr>
                            <th>Item Id</th>
                            <th>Item Name</th>
                            <th>Quintity</th>
                            <th>Total Price(RS:)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($itemData)) {
                                $quan=1;
                                foreach ($itemData as $key => $item) {?>
                                    <tr>
                                    <td><input readonly  name="item-id-<?php echo $quan ?>" value="<?php echo $item['item_id'] ?>"></input></td>
                                    <td> <input readonly  name="item-name-<?php echo $quan ?>" value="<?php echo $item['item_name'] ?>"></input> </td>
                                    <td class="input"><input type="number" readonly class="quntity" name="quntity<?php echo $quan ?>" id="itemid"  required=""  onkeypress="javascript:return isNumber(event)" value="<?php echo $item['item_qauntity'] ?>"> <input type="hidden" name="finalCount" value="<?php echo $quan ?>"></td>
                                    <td><input class="item-price" name="item-price-<?php echo $quan ?>" readonly value="<?php echo $item['item_price'] ?>"></input></td>
                                    </tr>
                            <?php $quan++;}}?>
                    </tbody>    
                </table>
            </div>
            <div class="total-details">
                <table>
                    <tr>
                        <th>Total Amount (LKR:)</th>
                        <td>
                            <?php echo $totalAmount.".00"; ?>
                            <input type="hidden" name="total-amount" value="<?php echo $totalAmount; ?>">
                        </td>
                    </tr>

                    <tr>
                        <th>Delivery Tax (LKR:)</th>
                        <td>
                             <?php if ($deliveryType==2) {
                                   echo $deliveryTax.".00";
                               }else echo 0; ?>
                         </td>
                    </tr>

                    <tr>
                        <th>Grand Total (LKR:)</th>
                        <td>
                            <input type="hidden" name="grand-amount" value="<?php echo $grandTotal; ?>">
                            <?php echo $grandTotal.".00"; ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Amount Paid (LKR:)</th>
                        <td>
                            <?php echo $paidAmount.".00"; ?>
                            <input type="hidden" name="paid-amount" value="<?php echo $paidAmount;?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Balance Due (LKR:)</th>
                        <td>
                            <?php echo $balance.".00"; ?>
                            <input type="hidden" name="balance" value="<?php echo $balance; ?>">        
                        </td>
                    </tr>

                    
                </table>
            </div>

            <div class="total-details">
                <table>
                    <tr>
                        <th>Payment Amount</th>
                        <td><?php switch ($isAdvance) {
                            case '1':
                                echo "Advance Payment";
                                break;
                            case '0':
                                echo "Full Payment";
                                break;
                            
                            default:
                                echo "Not specified";
                                break;
                        } ?>
                        <input type="hidden" name="is_advance" value="<?php echo $isAdvance; ?>">
                        </td>
                    </tr>

                    <tr>
                        <th>Payment Type</th>
                        <td><?php switch ($paymentType) {
                            case '1':
                                echo "Cash Payment";
                                break;
                            case '2':
                                echo "Card Payment";
                                break;
                            
                            default:
                                echo "Not specified";
                                break;
                        } ?>
                        <input type="hidden" name="payment_type" value="<?php echo $paymentType; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Required Date</th>
                        <td>
                            <?php echo $requiredDate; ?>
                            <input type="hidden" name="required_date" value="<?php echo $requiredDate; ?>">        
                        </td>
                    </tr>
                    <tr>
                        <th>Required Time</th>
                        <td>
                            <?php echo $requiredTime; ?>
                            <input type="hidden" name="required_time" value="<?php echo $requiredTime; ?>">        
                        </td>
                    </tr>
                    <tr>
                        <th>Delivery Type</th>
                        <td><?php switch ($deliveryType) {
                            case '1':
                                echo "Pick Up From Shop";
                                break;
                            case '2':
                                echo "Home Delivery";
                                break;
                            
                            default:
                                echo "Not specified";
                                break;
                        } ?>
                        <input type="hidden" name="delivery_type" value="<?php echo $deliveryType; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Customer Phone</th>
                        <td>
                            <?php echo $phoneNumber; ?>
                            <input type="hidden" name="phone_number" value="<?php echo $phoneNumber; ?>">        
                        </td>
                    </tr>
                </table>

                <input type="hidden" name="first_name" value="<?php echo $firstname; ?>">
                <input type="hidden" name="last_name" value="<?php echo $lastname; ?>">
                <input type="hidden" name="address_line1" value="<?php echo $address1; ?>">
                <input type="hidden" name="address_line2" value="<?php echo $address2; ?>">
                <input type="hidden" name="address_line3" value="<?php echo $address3; ?>">

            </div>

            <?php if ($totalAmount>=4000) {?>
                <div class="submit-button">
                    <button type="submit">Place Order and Print the bill</button>
                </div>    
            <?php  }else{ ?>
                <div class="submit-button">
                    <span class="no-order">The total amount of the order must be greater than or equal to RS.4000</span>
                </div>  
            <?php } ?>
            
        </form>
        </div>
    </div>

    <div id="overlay" class="overlay active"></div>

    <?php } ?>

<!-- Bill preview ends -->

 <?php require_once("footer.php"); ?>