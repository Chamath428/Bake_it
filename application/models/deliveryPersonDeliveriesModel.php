<?php

class deliveryPersondeliveriesModel extends database{

    function __construct()
		{
			$this->db=$this->dbcon();
		}
    public function countDeliveriesofDay(){
        $sql1 = "SELECT 
                    COUNT(delivery_person_id)
                 FROM
                    order_details
                 WHERE 
                    delivery_person_id = ".$_SESSION['staff_id']." AND (needed_date = curdate() AND order_status = 3) OR (needed_date = curdate() AND order_status = 6) ";
        $res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db)); 
        $row1=mysqli_fetch_assoc($res1);
        $totalDeliveriesofDay=$row1['COUNT(delivery_person_id)'];   
        return  $totalDeliveriesofDay;
    }
    public function countCompletedDeliveriesofDay(){
        $sql2 = "SELECT
                    COUNT(delivery_person_id)
                 FROM
                    order_details
                 WHERE
                    delivery_person_id = ".$_SESSION['staff_id']." AND needed_date = curdate() AND order_status = 6 ";
        $res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db)); 
        $row2=mysqli_fetch_assoc($res2);
        $totalCompletedDeliveriesofDay=$row2['COUNT(delivery_person_id)'];   
        return  $totalCompletedDeliveriesofDay;
    }
	public function countTotalDeliveries(){
        $sql3 = "SELECT 
                   COUNT(delivery_person_id)
                 FROM
                   order_details
                 WHERE 
                   delivery_person_id = ".$_SESSION['staff_id']." AND order_status = 6 ";
        $res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db)); 
        $row3=mysqli_fetch_assoc($res3);
        $totalDeliveries=$row3['COUNT(delivery_person_id)'];   
        return  $totalDeliveries;   
    }
    public function countTotalDeliveriesofWeek(){
        $sql4 = "SELECT 
                   COUNT(delivery_person_id)
                FROM 
                   order_details 
                WHERE 
                   delivery_person_id= ".$_SESSION['staff_id']." AND order_status = 6 AND needed_date >= date_sub(curdate(), interval 7 day);";
        $res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db)); 
        $row4=mysqli_fetch_assoc($res4);
        $totalDeliveriesofWeek=$row4['COUNT(delivery_person_id)'];   
        return  $totalDeliveriesofWeek;   

    }
    public function countTotalDeliveriesofMonth(){
        $sql5 = "SELECT 
                   COUNT(delivery_person_id)
                FROM 
                   order_details 
                WHERE 
                   delivery_person_id= ".$_SESSION['staff_id']." AND order_status = 6 AND needed_date >= date_sub(curdate(), interval 30 day);";
        $res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db)); 
        $row5=mysqli_fetch_assoc($res5);
        $totalDeliveriesofWeek=$row5['COUNT(delivery_person_id)'];   
        return  $totalDeliveriesofWeek;  
    }
   public function getOngoingDeliveriesTable(){
      $deliveryItemDetails=array();
      $i=0;
      $sql6 ="SELECT 
                  order_details.delivery_person_id, 
                  order_details.order_id, 
                  order_details.needed_date, 
                  order_details.needed_time, 
                  order_details.customer_id, 
                  customer.address1, 
                  customer.address2, 
                  customer.address3, 
                  order_details.payment_type, 
                  order_details.order_status 
               FROM 
                  order_details JOIN customer ON order_details.customer_id = customer.customer_id 
               WHERE 
                  order_details.delivery_person_id= ".$_SESSION['staff_id']."  AND (order_status = 2 OR order_status = 3)"; //AND needed_date = curdate()

      $res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
      while($row6=mysqli_fetch_assoc($res6)){
          $data['order_id']=$row6['order_id'];
          $data['needed_time']=$row6['needed_time'];
          $data['address1']=$row6['address1'];
          $data['address2']=$row6['address2'];
          $data['address3']=$row6['address3'];
          $data['payment_type']=$row6['payment_type'];
          $data['order_status']= $row6['order_status'];
          $deliveryItemDetails[$i]=$data;
          $i++;
      }
      return $deliveryItemDetails;
   }
   public function updateOrderStatus($order_id){
      $sql8 = "UPDATE  
                    order_details 
               SET
                    order_status = 3 
               WHERE 
                    order_id = ".$order_id."";
      $res8=mysqli_query($this->db,$sql8) or die('8->'.mysqli_error($this->db));
   }
   public function deleteDeliveryPersonID($order_id){
      $sql9 = "UPDATE  
                  order_details 
               SET
                  delivery_person_id = NULL
               WHERE 
                   order_id = ".$order_id."" ;
      $res9=mysqli_query($this->db,$sql9) or die('9->'.mysqli_error($this->db));
   }
   public function updateAcceptedOrderStatus($order_id){
      $sql10 = "UPDATE  
                  order_details 
               SET
               order_status = 2 
               WHERE 
                   order_id = ".$order_id."" ;
      $res10=mysqli_query($this->db,$sql10) or die('10->'.mysqli_error($this->db));
   }

   
   public function getDeliverryDetails($order_id){}
   public function getCompletedDeliveriesTable($order_id){}
}    


?>