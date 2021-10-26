<?php 

	/**
	 * 
	 */
	class cashierCreateOrderController extends bakeItFramework
	{
		
		function __construct()
		{
			// code...
		}

		public function index(){
			$data=array();
			$this->view("cashier/createQuickOrder",$data);
		}

		public function createSpecialOrderCashier(){
			$data=array();
			$this->view("cashier/createOrderSpecial",$data);
		}

	}

 ?>