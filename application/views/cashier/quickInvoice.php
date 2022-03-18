<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/bakeit/vendor/autoload.php');
use Dompdf\Dompdf;


$html='<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="'.BASEURL.'/public/css/cashier/cashier-quick-invoice.css" class="rel">
    <title>Invoice</title>
</head>

<style>
    .bill{
    width: 100%;
    background-color: white;
}

/*bill header starts*/
.bill .bill-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    border-bottom: 2px solid rgb(255, 138, 0);
    flex-wrap: wrap;
}


/*bill header ends*/

/*date starts*/
.bill .bill-body .date-details{
    display: flex;
    justify-content: right;
    flex-wrap: wrap;
    padding: 10px;
}


.bill .bill-body .date-details table{
     margin-bottom: 10px;
     height: 20px;
     width: 100%;

 }

.bill .bill-body .date-details table tr th{ 
    color: rgb(0, 0, 0);
    text-align: center;
    font-weight: bold;
    overflow:hidden ; 
    width: 50%;
    border: 1px solid #dddddd;

}
.bill .bill-body .date-details table tr td{
   text-align: right;
   border: 1px solid #dddddd;

}
/*date ends*/

/*food details starts*/
 .bill .bill-body .food-details table{
    width: 100%; 
    margin: 0 auto;
    border-collapse: collapse;
    overflow:hidden ; 
    box-shadow: 0 0 20px rgb(0, 0,0,0.15);

}
.bill .bill-body .food-details table thead tr {
    border: 3px solid #dddddd;
    color: rgb(0, 0, 0);
    font-weight: bold;
    height: 40px;
}
.bill .bill-body .food-details table thead tr th{
    text-align: center;
    width: auto;
}

.bill .bill-body .food-details table tbody tr td input{
    outline: none;
    border: none;
    text-align: center;
    padding: 5px;
}

.bill .bill-body .food-details table tbody tr{
    border-bottom: 1px solid rgba(0, 0, 0,0.2);
}

.bill .bill-body .food-details table tbody tr td{
    text-align: center;
    align-items: center;
}
/*food details ends*/

/*total details starts*/

.bill .bill-body .total-details{
    display: flex;
    justify-content: right;
    flex-wrap: wrap;
    padding: 10px;
}

.bill .bill-body .total-details table{
     box-shadow: 0 0 10px rgb(0, 0,0,0.15); 
     height: 90px;
     width: 100%;
 }

.bill .bill-body .total-details table tr th { 
    border-bottom: 3px solid #dddddd;
    color: rgb(0, 0, 0);
    text-align: center;
    font-weight: bold;
    overflow:hidden ; 
    width: 50%;
    box-shadow: 0 0 20px rgb(0, 0,0,0.15);

}
.bill .bill-body .total-details table tr td{
   text-align: right;
   border-bottom: 3px solid #dddddd;

}
</style>

<body>
<div class="bill">
        <div class="bill-header">
            <h2>Bake_it</h2>
            <h3>Bill No:'.$data[1]['order_id'].'</h3>
        </div>

        <div class="bill-body">
            <div class="date-details">
                <table>
                    <tr>
                        <th><span>Date</span></th>
                        <td><span>'.date('F j, Y').'</span></td>
                        </tr>
                </table>
            </div>

            <div class="food-details">

                <table>
                    <thead>
                        <tr>
                            <th>Item Id</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Quintity</th>
                            <th>Total Price(LKR:)</th>
                        </tr>
                    </thead>
                    <tbody>';


    foreach ($data[2] as $key => $items) {
        $html.='<tr>
                    <td>'.$items['item_id'].'</td>
                    <td>'.$items['item_name'].'</td>
                    <td>'.$items['price'].'</td>
                    <td>'.$items['quantity'].'</td>
                    <td>'.$items['quantity']*$items['price'].'</td>
                </tr>';
    }

    $html.='</tbody>    
                </table>
            </div>
            <div class="total-details">
                <table>
                    <tr>
                        <th>Total Amount: </th>
                        <td>';

    if ($data[1]['delivery_type']==2) {
            $total=$data[1]['total_amount']-200;
            $html.=$total.'.00 LKR';
    }else $html.=$data[1]['total_amount'].'.00 LKR';

    $html.='</td>
                </tr>

                <tr>
                    <th>Delivery Tax: </th>
                    <td>';

    if ($data[1]['delivery_type']==2) {
                                   $html.= '200.00 LKR';
                               }else $html.='0.00 LKR';

    $html.='</td>
                 </tr>

                <tr>
                    <th>Grand Total: </th>
                    <td>'.$data[1]['total_amount'].'.00 LKR
                    </td>
                    </tr>

                    <tr>
                        <th>Amount Paid: </th>
                        <td>'.$data[1]['paid_amount'].'.00 LKR
                        </td>
                    </tr>
                    <tr>
                        <th>Balance Due: </th>
                        <td>'.$data[1]['paid_amount']-$data[1]['total_amount'].'.00 LKR
                        </td>
                    </tr>

                    
                </table>
                     </div>

                     <div class="total-details">
                <table>';


    if($data[1]['order_type']==2){ 
        $html.='<tr>
                    <th>Payment Amount</th>
                    <td>';

            switch ($data[1]['is_advance']) {
                    case '1':
                        $html.='Advance Payment';
                        break;
                    case '0':
                        $html.= 'Full Payment';
                        break;
                            
                    default:
                        $html.= 'Not specified';
                        break;
                        } 
                    }

    $html.='</td>
                </tr>
                <tr>
                    <th>Payment Type</th>
                    <td>';

    switch ($data[1]['payment_type']) {
            case '1':
                $html.= 'Cash Payment';
                break;
             case '2':
                $html.= 'Card Payment';
                break;
                            
             default:
                $html.= 'Not specified';
                break;
        }


    $html.'</td>
                </tr>';

    if($data[1]['order_type']==2){
        $html.='<tr>
                    <th>Required Date</th>
                    <td>'. $data[1]['req_date'].'
                    </td>
                    </tr>
                    <tr>
                        <th>Required Time</th>
                        <td>'.$data[1]['req_time'].'
                        </td>
                    </tr>

                    <tr>
                        <th>Delivery Type</th>
                        <td>';

        switch ($data[1]['delivery_type']) {
                case '1':
                    $html.= 'Pick Up From Shop';
                    break;
                case '2':
                    $html.= "Home Delivery";
                    break;
                            
                 default:
                    $html.= "Not specified";
                    break;
            }
    }

    $html.='</td>
                    </tr>
                    </table>

            </div>
        </div>
    </div>

    
</body>
</html>';

$domepdf=new Dompdf;
$domepdf->loadHtml($html);
$domepdf->setPaper('A6','portrait');
$domepdf->render();
$domepdf->stream($data[1]['order_id'].'.pdf',['Attachment'=>0]); //this line to decalare the file name when saving

 ?>


 <?php if ($data[1]['order_id']>0) {?>


<script type="text/javascript">

window.open('<?php echo BASEURL ?>', '_blank');

</script>

<?php } ?>