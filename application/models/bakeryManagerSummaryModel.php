<?php

    class bakeryManagerSummaryModel extends database
{
        function __construct()
            {
                $this->db=$this->dbcon();
            }

        public function getCategories(){
            $categorylist = array();
            $i=0;
            $sql1="SELECT 
                        category_id,
                        category_name
                    FROM
                        menu_category";
            $res1= mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
            while($row1=mysqli_fetch_assoc($res1)){
                $data['category_id']=$row1['category_id'];
                $data['category_name']=$row1['category_name'];
                $categorylist[$i]=$data;
                $i++;
            }
            return $categorylist;
        }

        public function getBranchSalesoftheMonth(){
            $branchSalesoftheMonth = array();
            $i=0;
            $sql2="SELECT 
                        category_id, 
                        category_name, 
                        sum(quantity*price) AS total_quantity 
                    FROM 
                        overview_details 
                    WHERE 
                        extract(month from needed_date) = month(curdate()) and menu_id = " .$_SESSION['branch_id']. " AND order_status=6 group by category_id";
                    

            $res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
            while($row2=mysqli_fetch_assoc($res2)){
                $data['category_id']=$row2['category_id'];
                $data['category_name']=$row2['category_name'];
                $data['total_quantity'] = $row2['total_quantity'];
                $branchSalesoftheMonth[$i]=$data;
                $i++;
            }

            return $branchSalesoftheMonth;
        }  
        
        public function getBestCategoryoftheWeek(){
            $bestcategory = array();
            $i=0;
            $sql3= "SELECT 
                        category_id, 
                        category_name,
                        max(total_quantity) as best_category 
                    FROM 
                        overview_category_details
                    WHERE
                        menu_id = " .$_SESSION['branch_id']. " ";
                    

            $res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
            while($row3=mysqli_fetch_assoc($res3)){
                $data['category_id']=$row3['category_id'];
                $data['category_name']=$row3['category_name'];
                $data['best_category'] = $row3['best_category'];
                $bestcategory[$i]=$data;
                $i++;
            }

            return $bestcategory;
        }  
        
        public function getBranchSalesoftheYear(){
            $branchSalesoftheYear = array();
            $i=0;
            $sql4="SELECT 
                        MONTHNAME(needed_date) AS month,
                        sum(quantity*price) AS total_quantity 
                    FROM 
                        overview_details 
                    WHERE 
                        extract(year from needed_date) = year(curdate()) and menu_id = " .$_SESSION['branch_id']. " AND order_status = 6 group by month(needed_date)";
                    

            $res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));
            while($row4=mysqli_fetch_assoc($res4)){
                $data['month']=$row4['month'];
                $data['total_quantity'] = $row4['total_quantity'];
                $branchSalesoftheYear[$i]=$data;
                $i++;
            }

            return $branchSalesoftheYear;
        } 

        public function getBranchSalesoftheLastWeek(){
            $branchSalesoftheLastWeek = array();
            $i=0;
            $sql5="SELECT 
                        sum(quantity*price) AS total_quantity, 
                        dayname(needed_date) AS order_date 
                    FROM 
                        overview_details 
                    WHERE 
                        extract(WEEK from needed_date) = week(curdate()) and menu_id = " .$_SESSION['branch_id']. " AND order_status = 6 group by DAY(needed_date)";
                    

            $res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));
            while($row5=mysqli_fetch_assoc($res5)){
                $data['total_quantity'] = $row5['total_quantity'];
                $data['order_date']=$row5['order_date'];
                $branchSalesoftheLastWeek[$i]=$data;
                $i++;
            }

            return $branchSalesoftheLastWeek;
        }

        public function getBestItemSalesoftheWeek($category_id){
            $bestItemSalesoftheWeek = array();
            $i=0;
            $sql6="SELECT 
                        item_id,
                        item_name, 
                        sum(quantity*price) as total_quantity
                    from 
                        overview_details 
                    where extract(WEEK from needed_date) = week(curdate()) and menu_id = " .$_SESSION['branch_id']. " AND category_id = ".$category_id." AND order_status = 6 group by item_id";
                    

            $res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
            while($row6=mysqli_fetch_assoc($res6)){
                $data['item_id'] = $row6['item_id'];
                $data['item_name']=$row6['item_name'];
                $data['total_quantity']=$row6['total_quantity'];
                $bestItemSalesoftheWeek [$i]=$data;
                $i++;
            }

            return $bestItemSalesoftheWeek ;
        }

        public function getBestCategoryItemList($category_id){
            $itemlist = array();
            $i=0;
            $sql7="SELECT 
                        item_id, 
                        item_name 
                    from 
                        menu 
                    where 
                        menu_id = " .$_SESSION['branch_id']. " AND category_id = ".$category_id."";

            $res7= mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));
            while($row7=mysqli_fetch_assoc($res7)){
                $data['item_id']=$row7['item_id'];
                $data['item_name']=$row7['item_name'];
                $itemlist[$i]=$data;
                $i++;
            }
            return $itemlist;
        }

}

?>