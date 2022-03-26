<?php 
	class ownerReportsModel extends database{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

       public function getBranchList(){
        $branchData=array();
        $i=0;
        $sql1="SELECT
                    branch_id,
                    branch_name
                FROM
                    branch";

        $res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
        while ($row1=mysqli_fetch_assoc($res1)) {
            $data['branch_id']=$row1['branch_id'];
            $data['branch_name']=$row1['branch_name'];
            $branchData[$i]=$data;
            $i++;
        }
        return $branchData;
       }
       public function getYearList(){
           $yearData = array();
           $i=0;
           $sql2="SELECT
                  DISTINCT
                       year(needed_date)
                   FROM
                       order_details";
   
           $res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
           while ($row2=mysqli_fetch_assoc($res2)) {
               $data['year']=$row2['year(needed_date)'];
               $yearData[$i]=$data;
               $i++;
           }
           return $yearData;
       }
       public function dailyBranchSalesReport($date,$branch_id){
           $dailySalesData = array();
           $i=0;
           $sql3 = "SELECT 
                        menu.category_id,
                        menu_category.category_name, 
                        menu.price,  
                        sum(order_items.quantity),
                        menu.price * sum(order_items.quantity),
                        branch.branch_name
                    FROM
                        order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                        JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                        JOIN menu_category ON menu.category_id = menu_category.category_id
                                        JOIN branch ON menu.branch_id = branch.branch_id 
                    WHERE
                        order_details.needed_date = ".'"'.$date.'"'." AND menu.branch_id = ".$branch_id." AND order_details.order_status = 6
                    GROUP BY 
                        menu.category_id";
             $res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
             while($row3=mysqli_fetch_assoc($res3)){
                 $data['category_id']=$row3['category_id'];
                 $data['category_name']=$row3['category_name'];
                 $data['quantity']=$row3['sum(order_items.quantity)'];  
                 $data['income']=$row3['menu.price * sum(order_items.quantity)'];
                 $data['branch_name'] = $row3['branch_name'];
                 $dailySalesData[$i]=$data;
                 $i++;
             }
             return  $dailySalesData;
       }
       public function dailyTotalSalesReport($date){
        $dailyTotalSalesData = array();
        $i=0;
        $sql4 = "SELECT 
                     menu.category_id,
                     menu_category.category_name, 
                     menu.price,  
                     sum(order_items.quantity),
                     menu.price * sum(order_items.quantity),
                     branch.branch_name
                 FROM
                     order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE
                     order_details.needed_date = ".'"'.$date.'"'." AND order_details.order_status = 6
                 GROUP BY 
                     menu.category_id";
          $res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));
          while($row4=mysqli_fetch_assoc($res4)){
              $data['category_id']=$row4['category_id'];
              $data['category_name']=$row4['category_name'];
              $data['price']=$row4['price'];
              $data['quantity']=$row4['sum(order_items.quantity)'];  
              $data['income']=$row4['menu.price * sum(order_items.quantity)'];
              $data['branch_name'] = $row4['branch_name'];
              $dailyTotalSalesData[$i]=$data;
              $i++;
          }
          return  $dailyTotalSalesData;
    }
       public function weeklyBranchSalesReport($branch_id,$week,$month,$year){
           $salesWeeklyList = array();
           $i = 0;
           $sql5 = "SELECT 
                       menu.category_id, 
                       menu_category.category_name, 
                       menu.price,
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name
                    FROM 
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id 
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id  
                    WHERE 
                       menu.branch_id = ".$branch_id."  AND WEEK(needed_date, 5) - WEEK(DATE_SUB(needed_date, INTERVAL DAYOFMONTH(needed_date) - 1 DAY), 5) + 1=".$week." AND month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND order_details.order_status = 6
                    GROUP BY menu.category_id";
            $res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));
            while($row5=mysqli_fetch_assoc($res5)){
                 $data['category_id']=$row5['category_id'];
                 $data['category_name']=$row5['category_name'];
                 $data['quantity']=$row5['sum(order_items.quantity)'];  
                 $data['income']=$row5['menu.price * sum(order_items.quantity)'];
                 $data['branch_name'] = $row5['branch_name'];
                 $salesWeeklyList[$i]=$data;
                 $i++;
            }
            return  $salesWeeklyList;
       }
       public function weeklyTotalSalesReport($week,$month,$year){
        $salesTotalWeeklyList = array();
        $i = 0;
        $sql6 = "SELECT 
                    menu.category_id, 
                    menu_category.category_name, 
                    menu.price,
                    sum(order_items.quantity),
                    menu.price * sum(order_items.quantity),
                    branch.branch_name
                 FROM 
                    order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                  JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id 
                                  JOIN menu_category ON menu.category_id = menu_category.category_id 
                                  JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                    WEEK(needed_date, 5) - WEEK(DATE_SUB(needed_date, INTERVAL DAYOFMONTH(needed_date) - 1 DAY), 5) + 1=".$week." AND month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND order_details.order_status = 6
                 GROUP BY menu.category_id";
         $res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
         while($row6=mysqli_fetch_assoc($res6)){
              $data['category_id']=$row6['category_id'];
              $data['category_name']=$row6['category_name'];
              $data['quantity']=$row6['sum(order_items.quantity)'];  
              $data['income']=$row6['menu.price * sum(order_items.quantity)'];
              $data['branch_name'] = $row6['branch_name'];
              $salesTotalWeeklyList[$i]=$data;
              $i++;
         }
         return  $salesTotalWeeklyList;
    }
       public function monthlyBranchSalesReport($branch_id,$month,$year){
        $salesMonthlyList = array();
        $i = 0;
        $sql7 = "SELECT 
                    menu.category_id, 
                    menu_category.category_name, 
                    menu.price,
                    sum(order_items.quantity),
                    menu.price * sum(order_items.quantity),
                    branch.branch_name 
                 FROM 
                    order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                  JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id 
                                  JOIN menu_category ON menu.category_id = menu_category.category_id 
                                  JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                    menu.branch_id = ".$branch_id."  AND month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND order_details.order_status = 6
                 GROUP BY menu.category_id";
         $res7=mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));
         while($row7=mysqli_fetch_assoc($res7)){
              $data['category_id']=$row7['category_id'];
              $data['category_name']=$row7['category_name'];
              $data['quantity']=$row7['sum(order_items.quantity)'];  
              $data['income']=$row7['menu.price * sum(order_items.quantity)'];
              $data['branch_name'] = $row7['branch_name'];
              $salesMonthlyList[$i]=$data;
              $i++;
         }
         return  $salesMonthlyList;
    }
    public function monthlyTotalSalesReport($month,$year){
        $salesTotalMonthlyList = array();
        $i = 0;
        $sql8 = "SELECT 
                    menu.category_id, 
                    menu_category.category_name, 
                    menu.price,
                    sum(order_items.quantity),
                    menu.price * sum(order_items.quantity),
                    branch.branch_name
                 FROM 
                    order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                  JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id 
                                  JOIN menu_category ON menu.category_id = menu_category.category_id 
                                  JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                    month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND order_details.order_status = 6
                 GROUP BY menu.category_id";
         $res8=mysqli_query($this->db,$sql8) or die('8->'.mysqli_error($this->db));
         while($row8=mysqli_fetch_assoc($res8)){
              $data['category_id']=$row8['category_id'];
              $data['category_name']=$row8['category_name'];
              $data['quantity']=$row8['sum(order_items.quantity)'];  
              $data['income']=$row8['menu.price * sum(order_items.quantity)'];
              $data['branch_name'] = $row8['branch_name'];
              $salesTotalMonthlyList[$i]=$data;
              $i++;
         }
         return  $salesTotalMonthlyList;
    }
    public function getCategoryList(){
        $categoryData = array();
        $i=0;
        $sql9="SELECT 
                    * 
                FROM 
                    menu_category";

        $res9=mysqli_query($this->db,$sql9) or die('9->'.mysqli_error($this->db));
        while ($row9=mysqli_fetch_assoc($res9)) {
            $data['category_id']=$row9['category_id'];
            $data['category_name']=$row9['category_name'];
            $categoryData[$i]=$data;
            $i++;
        }
        return $categoryData;
    }
    public function dailyBranchCategorySalesReport($date,$branch_id,$category_id){
        $dailyCategorySalesData = array();
        $i=0;
        $sql10 = "SELECT 
                       menu.item_id,
                       menu.item_name,
                       menu.price,  
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name,
                       menu_category.category_name
                 FROM
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                        order_details.needed_date = ".'"'.$date.'"'." AND menu.branch_id = ".$branch_id." AND menu_category.category_id=".$category_id." AND order_details.order_status = 6
                 GROUP BY 
                        menu.item_id";
          $res10=mysqli_query($this->db,$sql10) or die('10->'.mysqli_error($this->db));
          while($row10=mysqli_fetch_assoc($res10)){
              $data['item_id']=$row10['item_id'];
              $data['item_name']=$row10['item_name'];
              $data['price'] = $row10['price'];
              $data['quantity']=$row10['sum(order_items.quantity)'];  
              $data['income']=$row10['menu.price * sum(order_items.quantity)'];
              $data['branch_name']=$row10['branch_name'];
              $data['category_name'] = $row10['category_name'];
              $dailyCategorySalesData[$i]=$data;
              $i++;
          }
          return  $dailyCategorySalesData;
    }
    public function dailyBranchTotalCategorySalesReport($date,$branch_id){
        $dailyTotalCategorySalesData = array();
        $i=0;
        $sql11 = "SELECT 
                       menu.item_id,
                       menu.item_name,
                       menu.price,  
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name,
                       menu_category.category_name
                 FROM
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                        order_details.needed_date = ".'"'.$date.'"'." AND menu.branch_id = ".$branch_id."  AND order_details.order_status = 6
                 GROUP BY 
                        menu.item_id";
          $res11=mysqli_query($this->db,$sql11) or die('11->'.mysqli_error($this->db));
          while($row11=mysqli_fetch_assoc($res11)){
              $data['item_id']=$row11['item_id'];
              $data['item_name']=$row11['item_name'];
              $data['price'] = $row11['price'];
              $data['quantity']=$row11['sum(order_items.quantity)'];  
              $data['income']=$row11['menu.price * sum(order_items.quantity)'];
              $data['branch_name']=$row11['branch_name'];
              $data['category_name'] = $row11['category_name'];
              $dailyTotalCategorySalesData[$i]=$data;
              $i++;
          }
          return  $dailyTotalCategorySalesData;
    }
    public function dailyAllBranchCategorySalesReport($date,$category_id){
        $dailyAllBranchCategorySalesData = array();
        $i=0;
        $sql12 = "SELECT 
                       menu.item_id,
                       menu.item_name,
                       menu.price,  
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name,
                       menu_category.category_name
                 FROM
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                        order_details.needed_date = ".'"'.$date.'"'."  AND menu_category.category_id=".$category_id." AND order_details.order_status = 6
                 GROUP BY 
                        menu.item_id";
          $res12=mysqli_query($this->db,$sql12) or die('12->'.mysqli_error($this->db));
          while($row12=mysqli_fetch_assoc($res12)){
              $data['item_id']=$row12['item_id'];
              $data['item_name']=$row12['item_name'];
              $data['price'] = $row12['price'];
              $data['quantity']=$row12['sum(order_items.quantity)'];  
              $data['income']=$row12['menu.price * sum(order_items.quantity)'];
              $data['branch_name']=$row12['branch_name'];
              $data['category_name'] = $row12['category_name'];
              $dailyAllBranchCategorySalesData[$i]=$data;
              $i++;
          }
          return  $dailyAllBranchCategorySalesData;
    }
    public function weeklyBranchCategorySalesReport($week,$month,$year,$branch_id,$category_id){
        $weeklyCategorySalesData = array();
        $i=0;
        $sql13 = "SELECT 
                       menu.item_id,
                       menu.item_name,
                       menu.price,  
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name,
                       menu_category.category_name
                 FROM
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                       WEEK(needed_date, 5) - WEEK(DATE_SUB(needed_date, INTERVAL DAYOFMONTH(needed_date) - 1 DAY), 5) + 1=".$week." AND month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND menu.branch_id = ".$branch_id." AND menu_category.category_id=".$category_id." AND order_details.order_status = 6
                 GROUP BY 
                        menu.item_id";
          $res13=mysqli_query($this->db,$sql13) or die('13->'.mysqli_error($this->db));
          while($row13=mysqli_fetch_assoc($res13)){
              $data['item_id']=$row13['item_id'];
              $data['item_name']=$row13['item_name'];
              $data['price'] = $row13['price'];
              $data['quantity']=$row13['sum(order_items.quantity)'];  
              $data['income']=$row13['menu.price * sum(order_items.quantity)'];
              $data['branch_name']=$row13['branch_name'];
              $data['category_name'] = $row13['category_name'];
              $weeklyCategorySalesData[$i]=$data;
              $i++;
          }
          return  $weeklyCategorySalesData;
    }
    public function weeklyBranchTotalCategorySalesReport($week,$month,$year,$branch_id){
        $weeklyTotalCategorySalesData = array();
        $i=0;
        $sql14 = "SELECT 
                       menu.item_id,
                       menu.item_name,
                       menu.price,  
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name,
                       menu_category.category_name
                 FROM
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                        WEEK(needed_date, 5) - WEEK(DATE_SUB(needed_date, INTERVAL DAYOFMONTH(needed_date) - 1 DAY), 5) + 1 = ".$week." AND month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND menu.branch_id = ".$branch_id."   AND order_details.order_status = 6
                 GROUP BY 
                        menu.item_id";
          $res14=mysqli_query($this->db,$sql14) or die('14->'.mysqli_error($this->db));
          while($row14=mysqli_fetch_assoc($res14)){
              $data['item_id']=$row14['item_id'];
              $data['item_name']=$row14['item_name'];
              $data['price'] = $row14['price'];
              $data['quantity']=$row14['sum(order_items.quantity)'];  
              $data['income']=$row14['menu.price * sum(order_items.quantity)'];
              $data['branch_name']=$row14['branch_name'];
              $data['category_name'] = $row14['category_name'];
              $weeklyTotalCategorySalesData[$i]=$data;
              $i++;
          }
          return  $weeklyTotalCategorySalesData;
    }
    public function weeklyAllBranchCategorySalesReport($week,$month,$year,$category_id){
        $weeklyAllBranchCategorySalesData = array();
        $i=0;
        $sql15 = "SELECT 
                       menu.item_id,
                       menu.item_name,
                       menu.price,  
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name,
                       menu_category.category_name
                 FROM
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                        WEEK(needed_date, 5) - WEEK(DATE_SUB(needed_date, INTERVAL DAYOFMONTH(needed_date) - 1 DAY), 5) + 1 = ".$week." AND month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND menu_category.category_id=".$category_id."  AND order_details.order_status = 6
                 GROUP BY 
                        menu.item_id";
          $res15=mysqli_query($this->db,$sql15) or die('15->'.mysqli_error($this->db));
          while($row15=mysqli_fetch_assoc($res15)){
              $data['item_id']=$row15['item_id'];
              $data['item_name']=$row15['item_name'];
              $data['price'] = $row15['price'];
              $data['quantity']=$row15['sum(order_items.quantity)'];  
              $data['income']=$row15['menu.price * sum(order_items.quantity)'];
              $data['branch_name']=$row15['branch_name'];
              $data['category_name'] = $row15['category_name'];
              $weeklyAllBranchCategorySalesData[$i]=$data;
              $i++;
          }
          return  $weeklyAllBranchCategorySalesData;
    }
    public function monthlyBranchCategorySalesReport($month,$year,$branch_id,$category_id){
        $monthlyCategorySalesData = array();
        $i=0;
        $sql16 = "SELECT 
                       menu.item_id,
                       menu.item_name,
                       menu.price,  
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name,
                       menu_category.category_name
                 FROM
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                       month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND menu.branch_id = ".$branch_id." AND menu_category.category_id=".$category_id." AND order_details.order_status = 6
                 GROUP BY 
                        menu.item_id";
          $res16=mysqli_query($this->db,$sql16) or die('16->'.mysqli_error($this->db));
          while($row16=mysqli_fetch_assoc($res16)){
              $data['item_id']=$row16['item_id'];
              $data['item_name']=$row16['item_name'];
              $data['price'] = $row16['price'];
              $data['quantity']=$row16['sum(order_items.quantity)'];  
              $data['income']=$row16['menu.price * sum(order_items.quantity)'];
              $data['branch_name']=$row16['branch_name'];
              $data['category_name'] = $row16['category_name'];
              $monthlyCategorySalesData[$i]=$data;
              $i++;
          }
          return  $monthlyCategorySalesData;
    }
    public function monthlyBranchTotalCategorySalesReport($month,$year,$branch_id){
        $monthlyTotalCategorySalesData = array();
        $i=0;
        $sql17 = "SELECT 
                       menu.item_id,
                       menu.item_name,
                       menu.price,  
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name,
                       menu_category.category_name
                 FROM
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                       month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND menu.branch_id = ".$branch_id."   AND order_details.order_status = 6
                 GROUP BY 
                        menu.item_id";
          $res17=mysqli_query($this->db,$sql17) or die('17->'.mysqli_error($this->db));
          while($row17=mysqli_fetch_assoc($res17)){
              $data['item_id']=$row17['item_id'];
              $data['item_name']=$row17['item_name'];
              $data['price'] = $row17['price'];
              $data['quantity']=$row17['sum(order_items.quantity)'];  
              $data['income']=$row17['menu.price * sum(order_items.quantity)'];
              $data['branch_name']=$row17['branch_name'];
              $data['category_name'] = $row17['category_name'];
              $monthlyTotalCategorySalesData[$i]=$data;
              $i++;
          }
          return  $monthlyTotalCategorySalesData;
    }
    public function monthlyAllBranchCategorySalesReport($month,$year,$category_id){
        $monthlyAllBranchCategorySalesData = array();
        $i=0;
        $sql18 = "SELECT 
                       menu.item_id,
                       menu.item_name,
                       menu.price,  
                       sum(order_items.quantity),
                       menu.price * sum(order_items.quantity),
                       branch.branch_name,
                       menu_category.category_name
                 FROM
                       order_details JOIN order_items ON order_details.order_id=order_items.order_id 
                                     JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id
                                     JOIN menu_category ON menu.category_id = menu_category.category_id
                                     JOIN branch ON menu.branch_id = branch.branch_id 
                 WHERE 
                      month(order_details.needed_date)=".$month." AND year(order_details.needed_date) = ".$year." AND menu_category.category_id=".$category_id."  AND order_details.order_status = 6
                 GROUP BY 
                        menu.item_id";
          $res18=mysqli_query($this->db,$sql18) or die('18->'.mysqli_error($this->db));
          while($row18=mysqli_fetch_assoc($res18)){
              $data['item_id']=$row18['item_id'];
              $data['item_name']=$row18['item_name'];
              $data['price'] = $row18['price'];
              $data['quantity']=$row18['sum(order_items.quantity)'];  
              $data['income']=$row18['menu.price * sum(order_items.quantity)'];
              $data['branch_name']=$row18['branch_name'];
              $data['category_name'] = $row18['category_name'];
              $monthlyAllBranchCategorySalesData[$i]=$data;
              $i++;
          }
          return  $monthlyAllBranchCategorySalesData;
    }
    public function getBranchName($branch_id){
        $sql19 = "SELECT 
                       branch_name 
                  FROM 
                       branch 
                  WHERE 
                       branch_id =".'"'.$branch_id.'"';
        $res19 = mysqli_query($this->db, $sql19) or die('19->' . mysqli_error($this->db));
        $row19 = mysqli_fetch_assoc($res19);
        $branchName = $row19['branch_name'];
        return  $branchName;
    }
    public function getCategoryName($category_id){
        $sql20 = "SELECT 
                       category_name 
                  FROM 
                       menu_category 
                  WHERE 
                       category_id = ".$category_id."";
        $res20 = mysqli_query($this->db, $sql20) or die('20->' . mysqli_error($this->db));
        $row20 = mysqli_fetch_assoc($res20);
        $categoryName = $row20['category_name'];
        return  $categoryName;
    }
    
    public function getCategorySalesoftheMonth(){
        $categorySalesoftheMonth = array();
        $i=0;
        $sql21="SELECT 
                    category_id, 
                    category_name, 
                    sum(quantity*price) AS total_quantity 
                FROM 
                    overview_details 
                WHERE 
                    extract(month from needed_date) = month(curdate())  AND order_status=6 
                group by 
                    category_id";
                

        $res21=mysqli_query($this->db,$sql21) or die('21->'.mysqli_error($this->db));
        while($row21=mysqli_fetch_assoc($res21)){
            $data['category_id']=$row21['category_id'];
            $data['category_name']=$row21['category_name'];
            $data['total_quantity'] = $row21['total_quantity'];
            $categorySalesoftheMonth[$i]=$data;
            $i++;
        }

        return $categorySalesoftheMonth;
    } 
    public function getBestCategoryoftheWeek(){
        $bestcategory = array();
        $i=0;
        $sql22= "SELECT 
                    category_id, 
                    category_name,
                    max(total_quantity) as best_category 
                FROM 
                    overview_category_details";
        $res22=mysqli_query($this->db,$sql22) or die('22->'.mysqli_error($this->db));
        while($row22=mysqli_fetch_assoc($res22)){
            $data['category_id']=$row22['category_id'];
            $data['category_name']=$row22['category_name'];
            $data['best_category'] = $row22['best_category'];
            $bestcategory[$i]=$data;
            $i++;
        }

        return $bestcategory;
    } 
    public function getBestItemSalesoftheWeek($category_id){
        $bestItemSalesoftheWeek = array();
        $i=0;
        $sql23="SELECT 
                    item_id,
                    item_name, 
                    sum(quantity*price) as total_quantity
                FROM
                    overview_details 
                WHERE 
                    extract(WEEK FROM needed_date) = week(curdate())  AND category_id = ".$category_id." AND order_status = 6 
                GROUP BY 
                    item_id";
        $res23=mysqli_query($this->db,$sql23) or die('23->'.mysqli_error($this->db));
        while($row23=mysqli_fetch_assoc($res23)){
            $data['item_id'] = $row23['item_id'];
            $data['item_name']=$row23['item_name'];
            $data['total_quantity']=$row23['total_quantity'];
            $bestItemSalesoftheWeek [$i]=$data;
            $i++;
        }

        return $bestItemSalesoftheWeek ;
    }  
    public function getBranchSalesoftheCurrentMonth(){
        $branchSalesoftheCurrentMonth = array();
        $i=0;
        $sql24="SELECT 
                    sum(quantity*price) AS total_quantity, 
                    menu_id AS branch_id 
                FROM 
                    overview_details 
                WHERE 
                    extract(MONTH from needed_date) = month(curdate()) AND order_status = 6 
                GROUP BY
                    menu_id";
        $res24=mysqli_query($this->db,$sql24) or die('24->'.mysqli_error($this->db));
        while($row24=mysqli_fetch_assoc($res24)){
            $data['total_quantity'] = $row24['total_quantity'];
            $data['branch_id']=$row24['branch_id'];
            $branchSalesoftheCurrentMonth[$i]=$data;
            $i++;
        }

        return $branchSalesoftheCurrentMonth;
    }
    public function getBranch1SalesoftheYear(){
        $branchSalesoftheYear = array();
        $i=0;
        $sql25="SELECT 
                    MONTHNAME(needed_date) AS month,
                    sum(quantity*price) AS total_quantity,
                    menu_id AS branch_id 
                FROM 
                    overview_details 
                WHERE 
                    extract(year from needed_date) = year(curdate())  AND order_status = 6 AND menu_id = 1
                group by 
                    menu_id";
        $res25=mysqli_query($this->db,$sql25) or die('25->'.mysqli_error($this->db));
        while($row25=mysqli_fetch_assoc($res25)){
            $data['month']=$row25['month'];
            $data['total_quantity'] = $row25['total_quantity'];
            $data['branch_id'] = $row25['branch_id'];
            $branchSalesoftheYear[$i]=$data;
            $i++;
        }

        return $branchSalesoftheYear;
    }
    public function getBestCategoryItemList($category_id){
        $itemlist = array();
        $i=0;
        $sql26="SELECT 
                    item_id, 
                    item_name 
                from 
                    menu 
                where 
                    category_id = ".$category_id."";

        $res26= mysqli_query($this->db,$sql26) or die('26->'.mysqli_error($this->db));
        while($row26=mysqli_fetch_assoc($res26)){
            $data['item_id']=$row26['item_id'];
            $data['item_name']=$row26['item_name'];
            $itemlist[$i]=$data;
            $i++;
        }
        return $itemlist;
    } 
    public function getBranch2SalesoftheYear(){
        $branchSalesoftheYear = array();
        $i=0;
        $sql27="SELECT 
                    MONTHNAME(needed_date) AS month,
                    sum(quantity*price) AS total_quantity,
                    menu_id AS branch_id 
                FROM 
                    overview_details 
                WHERE 
                    extract(year from needed_date) = year(curdate())  AND order_status = 6 AND menu_id = 2
                group by 
                    menu_id";
        $res27=mysqli_query($this->db,$sql27) or die('27->'.mysqli_error($this->db));
        while($row27=mysqli_fetch_assoc($res27)){
            $data['month']=$row27['month'];
            $data['total_quantity'] = $row27['total_quantity'];
            $data['branch_id'] = $row27['branch_id'];
            $branchSalesoftheYear[$i]=$data;
            $i++;
        }

        return $branchSalesoftheYear;
    }
    public function getBranch3SalesoftheYear(){
        $branchSalesoftheYear = array();
        $i=0;
        $sql28="SELECT 
                    MONTHNAME(needed_date) AS month,
                    sum(quantity*price) AS total_quantity,
                    menu_id AS branch_id 
                FROM 
                    overview_details 
                WHERE 
                    extract(year from needed_date) = year(curdate())  AND order_status = 6 AND menu_id = 3
                group by 
                    menu_id";
        $res28=mysqli_query($this->db,$sql28) or die('28->'.mysqli_error($this->db));
        while($row28=mysqli_fetch_assoc($res28)){
            $data['month']=$row28['month'];
            $data['total_quantity'] = $row28['total_quantity'];
            $data['branch_id'] = $row28['branch_id'];
            $branchSalesoftheYear[$i]=$data;
            $i++;
        }

        return $branchSalesoftheYear;
    }

  
       public function getSalesMonthList(){
           $salesMonthList = array();
//fill db table monthly_sales table
           $sql5 = "SELECT
                         year(needed_date),month(needed_date),sum(total_amount)
                    FROM order_details
                    GROUP BY year(needed_date),month(needed_date)
                    ORDER BY year(needed_date),month(needed_date)";
//fill UI table in monthly sales
           $sql6 = "SELECT menu.category_id, menu_category.category_name, menu.price, order_items.quantity 
           FROM order_details 
           JOIN order_items ON order_details.order_id=order_items.order_id 
           JOIN menu ON order_items.menu_id = menu.menu_id AND order_items.item_id = menu.item_id 
           JOIN menu_category ON menu.category_id = menu_category.category_id 
           WHERE menu.branch_id = 1 AND order_details.order_status = 6";
//get selected month sum of total amount
          $sql7 ="SELECT year(needed_date),month(needed_date),sum(total_amount) 
                   FROM order_details 
                   WHERE month(needed_date)=1;";
       }
    }
