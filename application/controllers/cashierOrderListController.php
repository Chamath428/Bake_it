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

		public function getOngoingOrderDetails($order_id){
			$data=$this->cashierOrderListModel->getOrderDetails($order_id,$_SESSION['branch_id']);
			$this->view("cashier/quickOrderDetails",$data);
		}

		public function getOngoingSpecilOrderDetails($order_id){
			$data=$this->cashierOrderListModel->getOrderDetails($order_id,$_SESSION['branch_id']);
			$this->view("cashier/specialOrderDetails",$data);
		}

		public function completeOrderCashier(){
			$data=array();
			$this->view("cashier/completedOrder",$data);
		}

		public function getCompleteOrderDetails(){
			$data=array();
			$this->view("cashier/completeOrderDetails",$data);
		}

		public function completePickupFromShopCash($order_id){
			$paidAmount=$_POST['paid-amount'];
			$this->cashierOrderListModel->completeQuickOrder($order_id,$paidAmount);
			$this->index();
		}

		public function completePickupFromShopCard($order_id,$paidAmount){
			$this->cashierOrderListModel->updateQuickOrderDetails($order_id);
			$this->cashierOrderListModel->insertQuickBillDetails($order_id,$paidAmount);
			$this->index();
		}

		public function completeQuickHomeDelivery($order_id,$paidAmount){
			$this->cashierOrderListModel->insertQuickBillDetails($order_id,$paidAmount);
			$this->index();
		}


		public function completePickupFromShopSpecial($order_id){
			// echo $order_id."->".$_POST['total-amount']."advan->>".$_POST['advanced-amount']."paid-->".$_POST['paid-amount'];
			$paidAmount=$_POST['paid-amount']+$_POST['advanced-amount'];
			$this->cashierOrderListModel->completeQuickOrder($order_id,$paidAmount);
			$this->index();

		}

	}

 ?>