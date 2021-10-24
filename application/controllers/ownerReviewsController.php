<?php 

	class ownerReviewsController extends bakeItFramework
	{
		
		function __construct()
		{
			//code
		}

		public function index(){
			$data=array();
            $this->view("owner/reviews");			
		}
	}

 ?>