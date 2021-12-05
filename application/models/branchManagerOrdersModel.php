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
                        placed_date_and_time
                    FROM
                        order_details
                    WHERE
                       menu_id= " .$_SESSION['branch_id']. " AND order_type = '1' AND order_status != '6'";
                        

            $res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
            while($row1=mysqli_fetch_assoc($res1)){
                $data['order_id']=$row1['order_id'];
                $data['total_amount']=$row1['total_amount'];
                $date = explode(" ",$row1['placed_date_and_time']);
                $date = $date[0];
                $data['placed_date_and_time']=$date;
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
                        placed_date_and_time
                    FROM
                        order_details
                    WHERE
                    menu_id= " .$_SESSION['branch_id']. " AND order_type = '2' AND order_status != '6'";
                        

            $res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
            while($row2=mysqli_fetch_assoc($res2)){
                $data['order_id']=$row2['order_id'];
                $data['total_amount']=$row2['total_amount'];
                $date = explode(" ",$row2['placed_date_and_time']);
                $date = $date[0];
                $data['placed_date_and_time']=$date;
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
                        placed_date_and_time
                    FROM
                        order_details
                    WHERE
                    menu_id= " .$_SESSION['branch_id']. " AND order_status = '6'";
                        

            $res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
            while($row3=mysqli_fetch_assoc($res3)){
                $data['order_id']=$row3['order_id'];
                $data['total_amount']=$row3['total_amount'];
                $date = explode(" ",$row3['placed_date_and_time']);
                $date = $date[0];
                $data['placed_date_and_time']=$date;
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
                    menu_id= " .$_SESSION['branch_id']. " AND ((cast(placed_date_and_time as date) = curdate() AND order_type=1) OR (needed_date <= curdate() AND order_type=2)) AND order_status = 6";
                        
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
                        
            $res7=mysqli_query($this->db,$sql7) or die('4->'.mysqli_error($this->db));
            $row7=mysqli_fetch_assoc($res7);
            $totalCompletedOrdersofWeek=$row7['COUNT(*)'];   
            return  $totalCompletedOrdersofWeek;
            
        }

        

}

?>