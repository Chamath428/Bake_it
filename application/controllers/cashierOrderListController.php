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

		public function completeOrderCashier(){
			$data=array();
			$this->view("cashier/completedOrder",$data);
		}

		public function getCompleteOrderDetails(){
			$data=array();
			$this->view("cashier/completeOrderDetails",$data);
		}

		public function completeQuickOrder($order_id){
			$paidAmount=$_POST['paid-amount'];
			$this->cashierOrderListModel->completeQuickOrder($order_id,$paidAmount);
			$this->index();
		}

		

	}

 ?>