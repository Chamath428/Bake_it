<?php 

	/**
	 * 
	 */
	class myordersController extends bakeItFramework
	{
		
		public function __construct()
		{
			// code...
		}
		public function index(){
			 $data=array();
			 $this->view("customer/myorders",$data);
		}

		public function showQuickOrderDetails(){
			$data=array();
			$this->view("customer/quickOrderdetails",$data);
		}
		public function showSpecialOrderDetails(){
			$data=array();
			$this->view("customer/specialOrderdetails",$data);
		}
	}

 ?>