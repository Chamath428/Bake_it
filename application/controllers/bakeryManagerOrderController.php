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

		public function completeOrderBakery(){
			$data=array();
			$this->view("bakery_manager/completeOrder",$data);
		}
		public function completeOrderDetailsBakery(){
			$data=array();
			$this->view("bakery_manager/moreDetails",$data);
		}
		public function pendingOrderDetailsBakery(){
			$data=array();
			$this->view("bakery_manager/moreDetailsPendingOrder",$data);
		}

	
	}

 ?>