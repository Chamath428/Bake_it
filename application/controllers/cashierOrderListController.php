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
		public function createQuickOrderCashier(){
			$data=array();
			$this->view("cashier/createQuickOrder",$data);
		}
		public function createSpecialOrderCashier(){
			$data=array();
			$this->view("cashier/createOrderSpecial",$data);
		}

	}

 ?>