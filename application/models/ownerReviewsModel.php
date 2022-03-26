<?php

class ownerReviewsModel extends database{

    function __construct()
		{
			$this->db=$this->dbcon();
		}
    public function countOfReviews(){
        
        $sql1 = "SELECT 
                   COUNT(*)
                 FROM
                   ratings_and_reviews";
        $res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db)); 
        $row1=mysqli_fetch_assoc($res1);
        $totalReviews=$row1['COUNT(*)'];   
        return  $totalReviews;
    }
    public function getSelectedBranchReviewsTable($branch_id){
        $reviewsTable=array();
        $i=0;
        $sql2 ="SELECT 
                ratings_and_reviews.order_id,
                ratings_and_reviews.review,
                ratings_and_reviews.rating,
                order_details.needed_date
            FROM
                ratings_and_reviews JOIN order_details ON ratings_and_reviews.order_id = order_details.order_id
            WHERE
                order_details.menu_id=".$branch_id;

        $res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
        while($row2=mysqli_fetch_assoc($res2)){
        $data['order_id']=$row2['order_id'];
        $data['review']=$row2['review'];
        $data['rating']=$row2['rating'];
        $data['needed_date']=$row2['needed_date'];
        $reviewsTable[$i]=$data;
        $i++;
        
        return $reviewsTable;

        }
       
   }
   public function countOfRatings(){
    $sql3 = "SELECT 
               SUM(rating)
             FROM
               ratings_and_reviews";
    $res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db)); 
    $row3=mysqli_fetch_assoc($res3);
    $totalRatings=$row3['SUM(rating)'];   
    return  $totalRatings;
   }
   public function getBsetDeliveryPerson(){
    $bestDeliveryPerson = array();  
    $sql4 = "SELECT 
                MAX(delivery_person_id)
            FROM
                ratings_and_reviews";
    $res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db)); 
    $row4=mysqli_fetch_assoc($res4);
    $bestDeliveryPerson['id']=$row4['MAX(delivery_person_id)']; 
    // return $bestDeliveryPerson['id']; 
    $sql5 = "SELECT 
                first_name,
                last_name
             FROM
                staff
             WHERE 
                staff_id = ".'"'.$bestDeliveryPerson['id'].'"'." ";
     $res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db)); 
     $row5=mysqli_fetch_assoc($res5);
     $bestDeliveryPerson['first_name']=$row5['first_name']; 
     $bestDeliveryPerson['last_name']=$row5['last_name']; 
     return $bestDeliveryPerson;   
  
   }
   public function getAllBranchReviewsTable(){
        $reviewsTable=array();
        $i=0;
        $sql6 ="SELECT 
                    ratings_and_reviews.order_id,
                    ratings_and_reviews.review,
                    ratings_and_reviews.rating,
                    order_details.needed_date
                FROM
                    ratings_and_reviews JOIN order_details ON ratings_and_reviews.order_id = order_details.order_id";

        $res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
        while($row6=mysqli_fetch_assoc($res6)){
        $data['order_id']=$row6['order_id'];
        $data['review']=$row6['review'];
        $data['rating']=$row6['rating'];
        $data['needed_date']=$row6['needed_date'];
        $reviewsTable[$i]=$data;
        $i++;
        }
        return $reviewsTable;     
   }
   public function getBranchList(){
    $branchData=array();
    $i=0;
    $sql7="SELECT
                branch_id,
                branch_name
            FROM
                branch";

    $res7=mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));
    while ($row7=mysqli_fetch_assoc($res7)) {
        $data['branch_id']=$row7['branch_id'];
        $data['branch_name']=$row7['branch_name'];
        $branchData[$i]=$data;
        $i++;
    }
    return $branchData;
   }
}
?>