<?php

    class branchManagerReportModel extends database
{
        function __construct()
            {
                $this->db=$this->dbcon();
            }

        public function getBranchSalesoftheMonth(){
            $branchSalesoftheMonth = array();
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
            $branchSalesoftheMonth[$i]=$data;
            $i++;
}

            return $branchSalesoftheMonth;
        }    

}

?>