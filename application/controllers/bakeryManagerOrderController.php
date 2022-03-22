<?php 

	class bakeryManagerOrderController extends bakeItFramework
	{
		
		function __construct()
		{

			$this->bakeryManagerOrderModel = $this->model("bakeryManagerOrderModel");

			// code...
		}

		public function index(){
			$data=array();
			$pendingOrders=$this->bakeryManagerOrderModel->getPendingOrders();
			
			$data=$pendingOrders;
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
		public function pendingOrderDetailsBakery($id){
			$data=array();
			$pendingOrders=$this->bakeryManagerOrderModel->getPendingOrderMoreDetails($id);
			$data=$pendingOrders;
			$this->view("bakery_manager/moreDetailsPendingOrder",$data);
		}
		

	
	}

 ?>