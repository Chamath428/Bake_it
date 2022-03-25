<?php 

	class ownerReviewsController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->ownerReviewsModel = $this->model("ownerReviewsModel");
		}
		public function index(){
	
			$data=array();
			$data['branches'] = $this->ownerReviewsModel->getBranchList(); 

			$totalReviews = $this -> ownerReviewsModel -> countOfReviews();
			$data[0] = $totalReviews;

			$totalRatings = $this -> ownerReviewsModel -> countOfRatings();
            $data[1] = $totalRatings;
	        
	        $bestDeliveryPerson = $this -> ownerReviewsModel -> getBsetDeliveryPerson();
			$data[2] = $bestDeliveryPerson;

			// $data[3] = array();
			$data['branch_id'] = $_POST['branch_id'];
			
            if($data['branch_id']==0){
                $reviewsTable=$this->ownerReviewsModel -> getAllBranchReviewsTable();
				$data[3] = $reviewsTable;
			}
			else{
				$reviewsTable=$this->ownerReviewsModel -> getSelectedBranchReviewsTable($data['branch_id']);
				$data[3] = $reviewsTable;
			}

			$this->view("owner/reviews",$data);	
		}
		public function getReviewsTabel(){

			$data['branch_id'] = $_POST['branch_id'];
			
            if($data['branch_id']==0){
                $reviewsTable=$this->ownerReviewsModel -> getAllBranchReviewsTable();
				$data[3] = $reviewsTable;
			}
			else{
				$reviewsTable=$this->ownerReviewsModel -> getSelectedBranchReviewsTable($data['branch_id']);
				$data[3] = $reviewsTable;
			}
			$this -> index();
		
		}

		
	}

 ?>