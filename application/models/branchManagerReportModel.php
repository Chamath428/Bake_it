<?php

    class branchManagerReportModel extends database
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
                        sum(quantity) AS total_quantity 
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

}

?>