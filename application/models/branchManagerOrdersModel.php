<?php

    class branchManagerOrdersModel extends database
{
        function __construct()
            {
                $this->db=$this->dbcon();
            }


        public function getQuickOrdersList(){
            $quickOrdersData=array();
            $i=0;
            $sql1="SELECT
                        order_id,
                        total_amount,
                        placed_date_and_time,
                        order_status,
                        receiving_method
                    FROM
                        order_details
                    WHERE
                       menu_id= " .$_SESSION['branch_id']. " AND order_type = '1' AND order_status != 6 and order_status != 7 and order_status != 8";
                        

            $res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
            while($row1=mysqli_fetch_assoc($res1)){
                $data['order_id']=$row1['order_id'];
                $data['total_amount']=$row1['total_amount'];
                $date = explode(" ",$row1['placed_date_and_time']);
                $date = $date[0];
                $data['placed_date_and_time']=$date;
                $data['order_status'] = $row1['order_status'];
                $data['receiving_method'] = $row1['receiving_method'];
                $quickOrdersData[$i]=$data;
                $i++;
            }
            return $quickOrdersData;
        }


        public function getSpecialOrdersList(){
            $specialOrdersData=array();
            $i=0;
            $sql2="SELECT
                        order_id,
                        total_amount,
                        placed_date_and_time,
                        order_status,
                        receiving_method,
                        needed_date
                    FROM
                        order_details
                    WHERE
                    menu_id= " .$_SESSION['branch_id']. " AND order_type = '2' AND order_status != 6 and order_status != 7 and order_status != 8";
                        

            $res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
            while($row2=mysqli_fetch_assoc($res2)){
                $data['order_id']=$row2['order_id'];
                $data['total_amount']=$row2['total_amount'];
                $date = explode(" ",$row2['placed_date_and_time']);
                $date = $date[0];
                $data['placed_date_and_time']=$date;
                $data['order_status'] = $row2['order_status'];
                $data['receiving_method'] = $row2['receiving_method'];
                $data['needed_date'] = $row2['needed_date'];
                $specialOrdersData[$i]=$data;
                $i++;
            }
            return $specialOrdersData;
        }


        public function getCompletedOrdersList(){
            $completedOrdersData=array();
            $i=0;
            $sql3="SELECT
                        order_id,
                        total_amount,
                        placed_date_and_time,
                        order_type,
                        order_status,
                        receiving_method
                    FROM
                        order_details
                    WHERE
                    menu_id= " .$_SESSION['branch_id']. " AND (order_status = 6 or order_status = 7 or order_status = 8)";
                        

            $res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
            while($row3=mysqli_fetch_assoc($res3)){
                $data['order_id']=$row3['order_id'];
                $data['total_amount']=$row3['total_amount'];
                $date = explode(" ",$row3['placed_date_and_time']);
                $date = $date[0];
                $data['placed_date_and_time']=$date;
                $data['order_type']=$row3['order_type'];
                $data['order_status']=$row3['order_status'];
                $data['receiving_method']=$row3['receiving_method'];
                $completedOrdersData[$i]=$data;
                $i++;
            }
            return $completedOrdersData;
        }


        public function countBranchOrdersofDay(){
            $i=0;
            $sql4 = "SELECT 
                        COUNT(*) 
                    FROM 
                        order_details 
                    WHERE 
                    menu_id= " .$_SESSION['branch_id']. " AND (cast(placed_date_and_time as date) = curdate() AND order_type=1) OR (needed_date >= curdate() AND order_type=2)";

            $res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));
            $row4=mysqli_fetch_assoc($res4);
            $totalOrdersofDay=$row4['COUNT(*)'];   
            return  $totalOrdersofDay;
            
        }


        public function countCompletedBranchOrdersofDay(){
            $i=0;
            $sql5 = "SELECT 
                        COUNT(*) 
                    FROM 
                        order_details 
                    WHERE 
                    menu_id= " .$_SESSION['branch_id']. " AND ((cast(placed_date_and_time as date) = curdate() AND order_type=1) OR (needed_date >= curdate() AND order_type=2)) AND order_status = 6";
                        
            $res5=mysqli_query($this->db,$sql5) or die('4->'.mysqli_error($this->db));
            $row5=mysqli_fetch_assoc($res5);
            $totalCompletedOrdersofDay=$row5['COUNT(*)'];   
            return  $totalCompletedOrdersofDay;
            
        }


        public function countBranchOrdersofMonth(){
            $i=0;
            $sql6 = "SELECT 
                        COUNT(*) 
                    FROM 
                        order_details 
                    WHERE 
                    menu_id= " .$_SESSION['branch_id']. " AND cast(placed_date_and_time as date) >= date_sub(curdate(), interval 30 day)";
                        
            $res6=mysqli_query($this->db,$sql6) or die('4->'.mysqli_error($this->db));
            $row6=mysqli_fetch_assoc($res6);
            $totalCompletedOrdersofMonth=$row6['COUNT(*)'];   
            return  $totalCompletedOrdersofMonth;
            
        }


        public function countBranchOrdersofWeek(){
            $i=0;
            $sql7 = "SELECT 
                        COUNT(*) 
                    FROM 
                        order_details 
                    WHERE 
                    menu_id= " .$_SESSION['branch_id']. " AND cast(placed_date_and_time as date) >= date_sub(curdate(), interval 7 day)";
                        
            $res7=mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));
            $row7=mysqli_fetch_assoc($res7);
            $totalCompletedOrdersofWeek=$row7['COUNT(*)'];   
            return  $totalCompletedOrdersofWeek;
            
        }


        public function getBasicDetailsofOrder($order_id){
            $basicOrderDetails=array();
            $i=0;
            $sql8="SELECT 
                        customer_details.full_name, 
                        customer_details.contact_number, 
                        order_details.order_id,
                        order_details.order_type, 
                        order_details.order_status,
                        cast(order_details.placed_date_and_time as date) as placed_date,
                        order_details.needed_date,
                        order_details.needed_time, 
                        customer_details.address, 
                        order_details.payment_type, 
                        order_details.delivery_person_id,
                        order_details.receiving_method 
                    FROM 
                        customer_details Join order_details ON customer_details.customer_id = order_details.customer_id
                    WHERE
                        order_details.menu_id= " .$_SESSION['branch_id']. " AND order_details.order_id = ".$order_id."";
                        

            $res8=mysqli_query($this->db,$sql8) or die('8->'.mysqli_error($this->db));
            while($row8=mysqli_fetch_assoc($res8)){
                $data['full_name']=$row8['full_name'];
                $data['contact_number']=$row8['contact_number'];
                $data['order_id']=$row8['order_id'];
                $data['order_type']=$row8['order_type'];
                $data['order_status']=$row8['order_status'];
                $data['placed_date']=$row8['placed_date'];
                $data['needed_date']=$row8['needed_date'];
                $data['needed_time']=$row8['needed_time'];
                $data['address']=$row8['address'];
                $data['payment_type']=$row8['payment_type'];
                $data['delivery_person_id']=$row8['delivery_person_id'];
                $data['receiving_method']=$row8['receiving_method'];
                $basicOrderDetails[$i]=$data;
                $i++;
            }

            return $basicOrderDetails;
            
        }


        public function getOrderItemDetails($order_id){
            $orderItemDetails=array();
            $i=0;
            $sql9="SELECT 
                        order_details.order_id, 
                        order_items.item_id, 
                        menu.item_name,
                        menu.price, 
                        order_items.quantity,
                        order_details.receiving_method,
                        cast(order_details.paid_amount AS int) AS paid_amount 
                    FROM 
                        order_details JOIN order_items ON order_details.order_id = order_items.order_id JOIN menu ON order_items.item_id = menu.item_id 
                    WHERE
                        order_details.menu_id= " .$_SESSION['branch_id']. " AND menu.menu_id= " .$_SESSION['branch_id']. " AND order_details.order_id = ".$order_id."";
                        

            $res9=mysqli_query($this->db,$sql9) or die('9->'.mysqli_error($this->db));
            while($row9=mysqli_fetch_assoc($res9)){
                $data['order_id']=$row9['order_id'];
                $data['item_id']=$row9['item_id'];
                $data['item_name']=$row9['item_name'];
                $data['price']=$row9['price'];
                $data['quantity']=$row9['quantity'];
                $data['receiving_method']=$row9['receiving_method'];
                $data['paid_amount']=$row9['paid_amount'];
                $orderItemDetails[$i]=$data;
                $i++;
            }
            return $orderItemDetails;
            
        }

		public function getAvailableDeliveryPersonsDetails(){
            $availableDeliveryPersonsDetails=array();
            $i=0;
            $sql10="SELECT 
                        staff.staff_id, 
                        concat(staff.first_name, ' ', staff.last_name) AS full_name, delivery_person.availability
                    FROM 
                        staff inner join delivery_person on staff.staff_id = delivery_person.staff_id 
                    WHERE
                    delivery_person.availability = 1 AND delivery_person.branch_id= " .$_SESSION['branch_id']. "";
                        

            $res10=mysqli_query($this->db,$sql10) or die('10->'.mysqli_error($this->db));
            while($row10=mysqli_fetch_assoc($res10)){
                $data['staff_id']=$row10['staff_id'];
                $data['full_name']=$row10['full_name'];
                $data['availability']=$row10['availability'];
                $availableDeliveryPersonsDetails[$i]=$data;
                $i++;
            }
            return $availableDeliveryPersonsDetails;

        }


        public function updateDeliveryPersonId($delivery_person_id,$order_id){
            $sql11 = "UPDATE 
                        order_details 
                    SET
                        delivery_person_id = ".$delivery_person_id." 
                    WHERE 
                        order_id= " .$order_id. "";
                        
            $res11=mysqli_query($this->db,$sql11) or die('11->'.mysqli_error($this->db));
            
            
        }


        public function updateStatusBakerySend($order_id){
            $sql12 = "UPDATE 
                        order_details 
                    SET
                        order_status = 4 
                     WHERE 
                        order_id= " .$order_id. "";
            
            $res12=mysqli_query($this->db,$sql12) or die('12->'.mysqli_error($this->db));

        }

        public function updateStatusAsDecline($order_id){
            $sql13 = "UPDATE 
                        order_details 
                    SET
                        order_status = 7 
                     WHERE 
                        order_id= " .$order_id. "";
            
            $res13=mysqli_query($this->db,$sql13) or die('13->'.mysqli_error($this->db));

        }

}

?>