<?php 
	class ownerReportsModel extends database{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}
        public function branchSalesOfYearOverview($branch_id){
            $branchSalesOfYear = array();
            $i = 0;
            $sql1 = "SELECT 
                         monthly_sales.januaray,
                         monthly_sales.february,
                         monthly_sales.march,
                         monthly_sales.april,
                         monthly_sales.may,
                         monthly_sales.june,
                         monthly_sales.july,
                         monthly_sales.august,
                         monthly_sales.september,
                         monthly_sales.october,
                         monthly_sales.november,
                         monthly_sales.december
                    FROM 
                         monthly_sales
                    WHERE
                         branch_id = ".$branch_id.";";
             $res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db)); 
             while($row1=mysqli_fetch_assoc($res1)){
                $data['january']=$row1['january'];
                $data['february']=$row1['february'];
                $data['march']=$row1['march'];
                $data['april']=$row1['april'];
                $data['may']=$row1['may'];
                $data['june']=$row1['june'];
                $data['july']=$row1['july'];
                $data['august']=$row1['august'];
                $data['september']=$row1['september'];
                $data['october']=$row1['october'];
                $data['november']=$row1['november'];
                $data['december']=$row1['december'];
                $$branchSalesOfYear[$i]=$data;
                $i++;
            }

            return $branchSalesOfYear;
          
        }
    }
?>