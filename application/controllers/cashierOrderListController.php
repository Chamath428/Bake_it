<?php 

	class cashierOrderListController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->cashierOrderListModel=$this->model("cashierOrderListModel");
		}
		public function index(){
			$data=$this->cashierOrderListModel->getOngoingOrderDetails();
			$this->view("cashier/ongoingOrders",$data);
		}

		// following function will get the order details and direct to the quick order details page
		public function getOngoingOrderDetails($order_id){
			$data=$this->cashierOrderListModel->getOrderDetails($order_id,$_SESSION['branch_id']);
			$this->view("cashier/quickOrderDetails",$data);
		}

		// following function will get the order details and direct to the special order details page
		public function getOngoingSpecilOrderDetails($order_id){
			$data=$this->cashierOrderListModel->getOrderDetails($order_id,$_SESSION['branch_id']);
			$this->view("cashier/specialOrderDetails",$data);
		}

		// following funtion for get the completed order list
		public function completeOrderCashier(){
			$data=$this->cashierOrderListModel->getCompleteOrderDetails();
			$this->view("cashier/completedOrder",$data);
		}

		// following function for get the complete order detail for both qiuck and special
		public function getCompleteOrderDetails($order_id){
			$data=$this->cashierOrderListModel->getOrderDetails($order_id,$_SESSION['branch_id']);
			$this->view("cashier/completeOrderDetails",$data);
		}

		// folloinf function for complete pick up from shop paid by cash quick orders
		public function completePickupFromShopCash($order_id){
			$paidAmount=$_POST['paid-amount'];
			$this->cashierOrderListModel->completeQuickOrder($order_id,$paidAmount);
			$this->index();
		}

		// following function for complete pick up from shop paid by card of both quick and special
		public function completePickupFromShopCard($order_id,$paidAmount){
			$this->cashierOrderListModel->updateQuickOrderDetails($order_id);
			$this->cashierOrderListModel->insertQuickBillDetails($order_id,$paidAmount);
			$this->index();
		}


		// following funtion for complete home delivey orders of both quick and special
		public function completeHomeDelivery($order_id,$paidAmount){
			$this->cashierOrderListModel->updateOrderDetailsCashierId($order_id);
			$this->cashierOrderListModel->insertQuickBillDetails($order_id,$paidAmount);
			$this->index();
		}

		// following function is to complete pick up from shop special orders 
		public function completePickupFromShopSpecial($order_id){
			$paidAmount=$_POST['paid-amount']+$_POST['advanced-amount'];
			$this->cashierOrderListModel->completeQuickOrder($order_id,$paidAmount);
			$this->index();

		}

	}

 ?>