<?php 

	class ownerReviewsController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->ownerReviewsModel = $this->model("ownerReviewsModel");
		}
		public function index($branch_id=0){
	
			$data=array();
			$data['branches'] = $this->ownerReviewsModel->getBranchList(); 

			$totalReviews = $this -> ownerReviewsModel -> countOfReviews();
			$data[0] = $totalReviews;

			$totalRatings = $this -> ownerReviewsModel -> countOfRatings();
            $data[1] = $totalRatings;
	        
	        $bestDeliveryPerson = $this -> ownerReviewsModel -> getBsetDeliveryPerson();
			$data[2] = $bestDeliveryPerson;
            
			$data[3] = array();
			if($branch_id==0){
                $reviewsTable=$this->ownerReviewsModel -> getAllBranchReviewsTable();
				$data[3] = $reviewsTable;
			}
			else{
				// echo $branch_id."branch id at index";
				$reviewsTable=$this->ownerReviewsModel -> getSelectedBranchReviewsTable($branch_id);
				$data[3] = $reviewsTable;
			}
			// $data['branch_id'] = 0;
			
			// $reviewsTable=$this->ownerReviewsModel -> getAllBranchReviewsTable();
			// $data[3] = $reviewsTable;
			// if (empty($reviewsTable)) {
			// 	$data['error']="No Reviews to show!";
			// 	$this->view("owner/reviews",$data);
			// }
			// else{
			// 	$this->view("owner/reviews",$reviewsTable);
		    // }

			$this->view("owner/reviews",$data);	
		}
		public function getReviewsTabel(){
		
			$branch_id = $_POST['branch_id'];
			$this->index($branch_id);
		}

		
	}

 ?>