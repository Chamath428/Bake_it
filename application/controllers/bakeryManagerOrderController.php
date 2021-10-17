<?php 

	class bakeryManagerOrderController extends bakeItFramework
	{
		
		function __construct()
		{
			// code...
		}

		public function index(){
			$data=array();
			$this->view("bakery_manager/pendingOrder",$data);
		}

		public function pendingOrderBakery(){
			$data=array();
			$this->view("bakery_manager/completeOrder",$data);
		}

	
	}

 ?>