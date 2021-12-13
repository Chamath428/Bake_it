<?php 

	/**
	 * 
	 */
	class branchManagerOrderController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->branchManagerOrdersModel=$this->model("branchManagerOrdersModel");
		}

		public function index(){
			$totalOrdersofDay=$this->branchManagerOrdersModel->countBranchOrdersofDay();
			$data[0]=$totalOrdersofDay;

			$quickOrdersList=$this->branchManagerOrdersModel->getQuickOrdersList();
			$data[1]=$quickOrdersList;

			$totalCompletedOrdersofDay=$this->branchManagerOrdersModel->countCompletedBranchOrdersofDay();
			$data[2]=$totalCompletedOrdersofDay;

			$this->view("branchManager/pendingQuickOrders",$data);
		}


		public function getSpecialOrders(){
			$totalOrdersofDay=$this->branchManagerOrdersModel->countBranchOrdersofDay();
			$data[0]=$totalOrdersofDay;

			$specialOrdersList=$this->branchManagerOrdersModel->getSpecialOrdersList();
			$data[1]=$specialOrdersList;

			$totalCompletedOrdersofDay=$this->branchManagerOrdersModel->countCompletedBranchOrdersofDay();
			$data[2]=$totalCompletedOrdersofDay;

			$this->view("branchManager/specialEventOrders",$data);
		}

		public function getCompleteOrders(){
			$totalCompletedOrdersofMonth=$this->branchManagerOrdersModel->countBranchOrdersofMonth();
			$data[0]=$totalCompletedOrdersofMonth;
			
			$completedOrdersList=$this->branchManagerOrdersModel->getCompletedOrdersList();
			$data[1]=$completedOrdersList;

			$totalCompletedOrdersofWeek=$this->branchManagerOrdersModel->countBranchOrdersofWeek();
			$data[2]=$totalCompletedOrdersofWeek;

			$totalCompletedOrdersofDay=$this->branchManagerOrdersModel->countCompletedBranchOrdersofDay();
			$data[3]=$totalCompletedOrdersofDay;
			$this->view("branchManager/completeOrder",$data);
		}

		public function getCompleteOrderDetails($order_id){
			$getBasicDetailsofOrder=$this->branchManagerOrdersModel->getBasicDetailsofOrder($order_id);
			$data[0]=$getBasicDetailsofOrder;

			$getOrderItemDetails=$this->branchManagerOrdersModel->getOrderItemDetails($order_id);
			$data[1]=$getOrderItemDetails;
			$this->view("branchManager/completeOrderDetails",$data);
		}

		public function getQuickOrderDetails($order_id){
			$getBasicDetailsofOrder=$this->branchManagerOrdersModel->getBasicDetailsofOrder($order_id);
			$data[0]=$getBasicDetailsofOrder;

			$getOrderItemDetails=$this->branchManagerOrdersModel->getOrderItemDetails($order_id);
			$data[1]=$getOrderItemDetails;
			
			$this->view("branchManager/pendingQuickOrderDetails",$data);
		}

		public function getSpecialOrderDetails($order_id){
			$getBasicDetailsofOrder=$this->branchManagerOrdersModel->getBasicDetailsofOrder($order_id);
			$data[0]=$getBasicDetailsofOrder;

			$getOrderItemDetails=$this->branchManagerOrdersModel->getOrderItemDetails($order_id);
			$data[1]=$getOrderItemDetails;
			
			$this->view("branchManager/specialEventOrdersDetails",$data);
		}
	}

 ?>