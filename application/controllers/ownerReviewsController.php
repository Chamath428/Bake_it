<?php 

	class ownerReviewsController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->ownerReviewsModel = $this->model("ownerReviewsModel");
		}
		public function index(){
	
			$data=array();
			$totalReviews = $this -> ownerReviewsModel -> countOfReviews();
			$data[0] = $totalReviews;

			$totalRatings = $this -> ownerReviewsModel -> countOfRatings();
            $data[1] = $totalRatings;
	        
	        $bestDeliveryPerson = $this -> ownerReviewsModel -> getBsetDeliveryPerson();
			$data[2] = $bestDeliveryPerson;

			$this->view("owner/reviews",$data);	
		}
		public function getReviewsTabel(){

			  
	        $branch_id=$_POST['branch_id'];
			$data['branch_id']=$branch_id;
			
            if($data['branch_id']==0){
                $reviewsTable=$this->ownerReviewsModel -> getAllBranchReviewsTable();
				$data[3] = $reviewsTable;
			}
			else{
				$reviewsTable=$this->ownerReviewsModel -> getSelectedBranchReviewsTable($branch_id);
				$data[3] = $reviewsTable;
			}
            $reviewsTable=$this->ownerReviewsModel -> getReviewsTable($branch_id);
			if (empty($reviewsTable)) {
				$data['error']="No Reviews to show!";
				$this->view("owner/reviews",$data);
			}
			else{
				$this->view("owner/reviews",$reviewsTable);
		    }	
		
		}

		
	}

 ?>