<?php

class deliveryPersonWalletModel extends database
{

   function __construct()
   {
      $this->db = $this->dbcon();
   }
   public function getDeliveryListOfCurrentDay(){
    $deliveryDetailsTable = array();
    $i = 0;
    $sql1 = "SELECT 
                 order_id,
                 total_amount,
                 paid_amount
             FROM 
                order_details  
             WHERE 
                delivery_person_id= " . $_SESSION['staff_id'] . "  AND order_status = 6 AND payment_type = 1";
    $res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
    while ($row1 = mysqli_fetch_assoc($res1)) {
       $data['order_id'] = $row1['order_id'];
       $data['total_amount'] = $row1['total_amount'];
       $data['paid_amount'] = $row1['paid_amount'];
       $deliveryDetailsTable[$i] = $data;
       $i++;
    }
    return $deliveryDetailsTable;
   }
   public function getTotalOfTotalAmount(){
    $sql2 = "SELECT 
                SUM(total_amount)
            FROM 
                order_details 
            WHERE 
                delivery_person_id= " . $_SESSION['staff_id'] . " AND order_status = 6 AND payment_type = 1";
    $res2 = mysqli_query($this->db, $sql2) or die('2->' . mysqli_error($this->db));
    $row2 = mysqli_fetch_assoc($res2);
    $totalAmountOfDeliveries = $row2['SUM(total_amount)'];
    return  $totalAmountOfDeliveries;
   }
}
?>