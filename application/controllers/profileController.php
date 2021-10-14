<?php 

	/**
	 * 
	 */
	class profileController extends bakeItFramework
	{
		
		public function __construct()
		{
			$this->profileModel=$this->model("profileModel");
		}
		public function index()
		{
			$data=array();
			if (isset($_SESSION['islogged'])) {
				$customer_id=$_SESSION['customer_id'];
				$data=$this->profileModel->getCustomerData($customer_id);
				$this->view("customer/profile",$data);
			}

			
		}
	}

 ?>