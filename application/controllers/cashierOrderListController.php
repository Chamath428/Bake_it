<?php 

	class cashierOrderListController extends bakeItFramework
	{
		
		function __construct()
		{
		
		}
		public function index(){
			$data=array();
			$this->view("cashier/ongoingOrders",$data);
		}

		public function completeOrderCashier(){
			$data=array();
			$this->view("cashier/completedOrder",$data);
		}

		public function getCompleteOrderDetails(){
			$data=array();
			$this->view("cashier/completeOrderDetails",$data);
		}

		public function getQuickOrderDetails(){
			$data=array();
			$this->view("cashier/quickOrderdetails",$data);
		}

		public function getSpecialOrderDetails(){
			$data=array();
			$this->view("cashier/specialOrderdetails",$data);
		}


	}

 ?>