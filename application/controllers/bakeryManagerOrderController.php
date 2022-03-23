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
			$completeOrders=$this->bakeryManagerOrderModel->getCompleteOrders();
			$data=$completeOrders;
			$this->view("bakery_manager/completeOrder",$data);
		}


		public function completeOrderDetailsBakery($id){
			$data=array();

			$getBasicDetailsofOrder=$this->bakeryManagerOrderModel->getBasicDetailsofCompletedOrder($id);
			$data[0]=$getBasicDetailsofOrder;

			$getOrderItemDetails=$this->bakeryManagerOrderModel->getCompletedOrderItemDetails($id);
			$data[1]=$getOrderItemDetails;
			$this->view("bakery_manager/moreDetails",$data);
		}


		public function pendingOrderDetailsBakery($id){
	

			$getBasicDetailsofOrder=$this->bakeryManagerOrderModel->getBasicDetailsofOrder($id);
			$data[0]=$getBasicDetailsofOrder;


			$getOrderItemDetails=$this->bakeryManagerOrderModel->getOrderItemDetails($id);
			$data[1]=$getOrderItemDetails;

			$this->view("bakery_manager/moreDetailsPendingOrder",$data);
		}

		public function completeOngoingOrderStatus($order_id){
			$this->bakeryManagerOrderModel->updatePendingOrdersStatus($order_id);

			$this->index();

		}

	
	}

 ?>