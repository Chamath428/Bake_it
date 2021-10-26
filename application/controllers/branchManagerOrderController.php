<?php 

	/**
	 * 
	 */
	class branchManagerOrderController extends bakeItFramework
	{
		
		function __construct()
		{
			// code...
		}

		public function index(){
			$data=array();
			$this->view("branchManager/pendingQuickOrders",$data);
		}

		public function getSpecialOrders(){
			$data=array();
			$this->view("branchManager/specialEventOrders",$data);
		}

		public function getCompleteOrders(){
			$data=array();
			$this->view("branchManager/completeOrder",$data);
		}

		public function getCompleteOrderDetails(){
			$data=array();
			$this->view("branchManager/completeOrderDetails",$data);
		}

		public function getQuickOrderDetails(){
			$data=array();
			$this->view("branchManager/pendingQuickOrderDetails",$data);
		}

		public function getSpecialOrderDetails(){
			$data=array();
			$this->view("branchManager/specialEventOrdersDetails",$data);
		}
	}

 ?>