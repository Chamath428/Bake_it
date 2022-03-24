<?php

class deliveryPersonDeliveriesModel extends database
{

   function __construct()
   {
      $this->db = $this->dbcon();
   }
   public function countDeliveriesofDay()
   {
      $sql1 = "SELECT 
                    COUNT(delivery_person_id)
                 FROM
                    order_details
                 WHERE 
                    delivery_person_id = " . $_SESSION['staff_id'] . " AND (order_status = 2 OR order_status = 3) ";
      $res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
      $row1 = mysqli_fetch_assoc($res1);
      $totalDeliveriesofDay = $row1['COUNT(delivery_person_id)'];
      return  $totalDeliveriesofDay;
   }
   public function countCompletedDeliveriesofDay()
   {
      $sql2 = "SELECT
                    COUNT(delivery_person_id)
                 FROM
                    order_details
                 WHERE
                    delivery_person_id = " . $_SESSION['staff_id'] . " AND needed_date = curdate() AND order_status = 6 ";
      $res2 = mysqli_query($this->db, $sql2) or die('2->' . mysqli_error($this->db));
      $row2 = mysqli_fetch_assoc($res2);
      $totalCompletedDeliveriesofDay = $row2['COUNT(delivery_person_id)'];
      return  $totalCompletedDeliveriesofDay;
   }
   public function countTotalDeliveries()
   {
      $sql3 = "SELECT 
                   COUNT(delivery_person_id)
                 FROM
                   order_details
                 WHERE 
                   delivery_person_id = " . $_SESSION['staff_id'] . " AND order_status = 6 ";
      $res3 = mysqli_query($this->db, $sql3) or die('3->' . mysqli_error($this->db));
      $row3 = mysqli_fetch_assoc($res3);
      $totalDeliveries = $row3['COUNT(delivery_person_id)'];
      return  $totalDeliveries;
   }
   public function countTotalDeliveriesofWeek()
   {
      $sql4 = "SELECT 
                   COUNT(delivery_person_id)
                FROM 
                   order_details 
                WHERE 
                   delivery_person_id= " . $_SESSION['staff_id'] . " AND order_status = 6 AND needed_date >= date_sub(curdate(), interval 7 day);";
      $res4 = mysqli_query($this->db, $sql4) or die('4->' . mysqli_error($this->db));
      $row4 = mysqli_fetch_assoc($res4);
      $totalDeliveriesofWeek = $row4['COUNT(delivery_person_id)'];
      return  $totalDeliveriesofWeek;
   }
   public function countTotalDeliveriesofMonth()
   {
      $sql5 = "SELECT 
                   COUNT(delivery_person_id)
                FROM 
                   order_details 
                WHERE 
                   delivery_person_id= " . $_SESSION['staff_id'] . " AND order_status = 6 AND needed_date >= date_sub(curdate(), interval 30 day);";
      $res5 = mysqli_query($this->db, $sql5) or die('5->' . mysqli_error($this->db));
      $row5 = mysqli_fetch_assoc($res5);
      $totalDeliveriesofMonth = $row5['COUNT(delivery_person_id)'];
      return  $totalDeliveriesofMonth;
   }
   public function getOngoingDeliveriesTable()
   {
      $deliveryDetailsTable = array();
      $i = 0;
      $sql6 = "SELECT 
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
                  order_details.delivery_person_id= " . $_SESSION['staff_id'] . "  AND (order_status = 2 OR order_status = 3)";
      //is needed availability in WHERE closure
      $res6 = mysqli_query($this->db, $sql6) or die('6->' . mysqli_error($this->db));
      while ($row6 = mysqli_fetch_assoc($res6)) {
         $data['order_id'] = $row6['order_id'];
         $data['needed_time'] = $row6['needed_time'];
         $data['address1'] = $row6['address1'];
         $data['address2'] = $row6['address2'];
         $data['address3'] = $row6['address3'];
         $data['payment_type'] = $row6['payment_type'];
         $data['order_status'] = $row6['order_status'];
         $deliveryDetailsTable[$i] = $data;
         $i++;
      }
      return $deliveryDetailsTable;
   }
   public function updateOrderStatus($order_id)
   {
      $sql8 = "UPDATE  
                    order_details 
               SET
                    order_status = 3 
               WHERE 
                    order_id = " . $order_id . "";
      $res8 = mysqli_query($this->db, $sql8) or die('8->' . mysqli_error($this->db));
   }
   public function deleteDeliveryPersonID($order_id)
   {
      $sql9 = "UPDATE  
                  order_details 
               SET
                  delivery_person_id = NULL
               WHERE 
                   order_id = " . $order_id . "";
      $res9 = mysqli_query($this->db, $sql9) or die('9->' . mysqli_error($this->db));
   }
   public function updateAcceptedOrderStatus($order_id)
   {
      $sql10 = "UPDATE  
                  order_details 
               SET
                  order_status = 2 
               WHERE 
                   order_id = " . $order_id . "";
      $res10 = mysqli_query($this->db, $sql10) or die('10->' . mysqli_error($this->db));
   }


   public function getDeliverryDetails($order_id)
   {
      $deliveryItemDetails = array();
      $i = 0;
      $sql11 = "SELECT 
                  order_details.order_id, 
                  order_details.customer_id, 
                  order_details.menu_id,
                  order_details.total_amount,
                  order_details.paid_amount,
                  order_details.payment_type,
                  order_details.order_status,
                  customer.first_name, 
                  customer.last_name,
                  customer.address1, 
                  customer.address2, 
                  customer.address3,
                  customer.customer_type
               FROM  
                   order_details JOIN order_items ON order_details.order_id = order_items.order_id JOIN customer ON order_details.customer_id = customer.customer_id 
               WHERE 
                   order_details.order_id = " . $order_id . " AND (order_status = 2 OR order_status = 3)";

      $res11 = mysqli_query($this->db, $sql11) or die('11->' . mysqli_error($this->db));
      while ($row11 = mysqli_fetch_assoc($res11)) {
         $data['order_id'] = $row11['order_id'];
         $data['customer_id'] = $row11['customer_id'];
         $data['menu_id'] = $row11['menu_id'];
         $data['address1'] = $row11['address1'];
         $data['address2'] = $row11['address2'];
         $data['address3'] = $row11['address3'];
         $data['payment_type'] = $row11['payment_type'];
         $data['order_status'] = $row11['order_status'];
         $data['payment_type'] = $row11['payment_type'];
         $data['total_amount'] = $row11['total_amount'];
         $data['paid_amount'] = $row11['paid_amount'];
         $data['first_name'] = $row11['first_name'];
         $data['last_name'] = $row11['last_name'];
         $data['customer_type'] = $row11['customer_type'];
         $deliveryItemDetails = $data;
      }
      return $deliveryItemDetails;
   }
   public function getRegisterdCustomerContactDetails($order_id)
   {

      $sql12 = "SELECT 
                   order_details.order_id,
                   order_details.customer_id,
                   registered_customer.contact_number
                FROM 
                   order_details JOIN registered_customer ON order_details.customer_id = registered_customer.customer_id
                WHERE 
                    order_details.order_id = " . $order_id . "";
      $res12 = mysqli_query($this->db, $sql12) or die('12->' . mysqli_error($this->db));
      $row12 = mysqli_fetch_assoc($res12);
      $registerdCustomerContactDetails = $row12['contact_number'];
      return  $registerdCustomerContactDetails;
   }
   public function getUnregisterdCustomerContactDetails($order_id)
   {

      $sql13 = "SELECT 
                  order_details.order_id,
                  order_details.customer_id,
                  unregistered_customer.contact_number
               FROM 
                  order_details JOIN unregistered_customer ON order_details.customer_id = unregistered_customer.customer_id
               WHERE 
                   order_details.order_id = " . $order_id . "";
      $res13 = mysqli_query($this->db, $sql13) or die('13->' . mysqli_error($this->db));
      $row13 = mysqli_fetch_assoc($res13);
      $unregisterdCustomerContactDetails = $row13['contact_number'];
      return  $unregisterdCustomerContactDetails;
   }
   public function getMenuDetails($order_id)
   {
      $menuItemDetails = array();
      $i = 0;
      $sql14 = "SELECT
                     order_details.order_id,
                     order_items.menu_id,
                     order_items.item_id,
                     order_items.quantity,
                     menu.item_name,
                     menu.price*order_items.quantity
                FROM 
                     order_details JOIN order_items ON order_details.order_id = order_items.order_id JOIN menu ON (order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id) 
                WHERE 
                     order_details.order_id = " . $order_id . "";
      $res14 = mysqli_query($this->db, $sql14) or die('14->' . mysqli_error($this->db));
      while ($row14 = mysqli_fetch_assoc($res14)) {
         $data['menu_id'] = $row14['menu_id'];
         $data['item_id'] = $row14['item_id'];
         $data['item_name'] = $row14['item_name'];
         $data['quantity'] = $row14['quantity'];
         $data['price'] = $row14['menu.price*order_items.quantity'];
         $menuItemDetails[$i] = $data;
         $i++;
      }
      return $menuItemDetails;
   }

   public function getCompletedDeliveriesTable($date)
   {
      $completedDeliveryDetailsTable = array();
      $i = 0;
      $sql15 = "SELECT 
                  order_details.order_id, 
                  order_details.needed_time,  
                  customer.address1, 
                  customer.address2, 
                  customer.address3, 
                  order_details.total_amount
               FROM 
                  order_details JOIN customer ON order_details.customer_id = customer.customer_id 
               WHERE 
                  order_details.delivery_person_id= " . $_SESSION['staff_id'] . "  AND order_details.order_status = 6 AND order_details.needed_date = ". "$date" ."";

      $res15 = mysqli_query($this->db, $sql15) or die('15->' . mysqli_error($this->db));
      while ($row15 = mysqli_fetch_assoc($res15)) {
         $data['order_id'] = $row15['order_id'];
         $data['needed_time'] = $row15['needed_time'];
         $data['address1'] = $row15['address1'];
         $data['address2'] = $row15['address2'];
         $data['address3'] = $row15['address3'];
         $data['total_amount'] = $row15['total_amount'];
         $completedDeliveryDetailsTable[$i] = $data;
         $i++;
      }
      return $completedDeliveryDetailsTable;
   }
   public function getSubTotal($order_id)
   {
      $sql16 = "SELECT 
                   total_amount
                FROM 
                   order_details  
                WHERE 
                   order_id = " . $order_id . "";
      $res16 = mysqli_query($this->db, $sql16) or die('16->' . mysqli_error($this->db));
      $row16 = mysqli_fetch_assoc($res16);
      $subTotal = $row16['total_amount'];
      return  $subTotal;
   }
   public function getAdvancedAmount($order_id)
   {
      $sql17 = "SELECT 
                   paid_amount
                FROM 
                   order_details  
                WHERE 
                   order_id = " . $order_id . "";
      $res17 = mysqli_query($this->db, $sql17) or die('17->' . mysqli_error($this->db));
      $row17 = mysqli_fetch_assoc($res17);
      $paidAmount = $row17['paid_amount'];
      return  $paidAmount;
   }
   public function updateOrderStatusAsCompleted($order_id)
   {
      $sql18 = "UPDATE  
                    order_details 
               SET
                    order_status = 6 
               WHERE 
                    order_id = " . $order_id . "";
      $res18 = mysqli_query($this->db, $sql18) or die('18->' . mysqli_error($this->db));
   }
   public function updatePaidAmount($paid_amount, $order_id)
   {
      $sql19 = "UPDATE  
                     order_details 
               SET
                     paid_amount=".$paid_amount.", order_status = 6 
               WHERE 
                     order_id = " . $order_id;
      $res19 = mysqli_query($this->db, $sql19) or die('19->' . mysqli_error($this->db));
   }
}
