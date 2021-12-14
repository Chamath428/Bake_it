<?php 

	/**
	 * 
	 */
	class cashierCreateOrderController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->cashierCreateOrderModel=$this->model("cashierCreateOrderModel");
		}

		public function index(){
			$data=array();
			$data=$this->cashierCreateOrderModel->getItems(1);
			$this->view("cashier/createQuickOrder",$data);
		}

		public function createSpecialOrderCashier(){
			$data=array();
			$this->view("cashier/createOrderSpecial",$data);
		}

	}

 ?>