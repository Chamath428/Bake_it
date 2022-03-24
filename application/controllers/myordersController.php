<?php 

	/**
	 * 
	 */
	class myordersController extends bakeItFramework
	{
		
		public function __construct()
		{
			$this->customerMyOrdersModel=$this->model("customerMyOrdersModel");
			$this->customerNotificationModel=$this->model("customerNotificationModel");
		}
		public function index(){
			$data=array();
			if (isset($_SESSION['customer_id'])) {
				$customer_id=$_SESSION['customer_id'];
				$data=$this->customerMyOrdersModel->getMyOrders($customer_id);
				$data['notifiactions'] = $this->customerNotificationModel->gteNotification();
			}
			
			$this->view("customer/myorders",$data);
		}



		public function showOrderDetails($order_id,$menu_id){
			$data=$this->customerMyOrdersModel->getOrderDetails($order_id,$menu_id);
			$this->view("customer/quickOrderdetails",$data);
		}

		public function rateOrder($order_id,$menu_id,$customer_id){
			$rate=$_POST['rate'];
			$review=$_POST['review'];
			$this->customerMyOrdersModel->rateOrder($customer_id,$order_id,$rate,$review);
			$data=$this->customerMyOrdersModel->getOrderDetails($order_id,$menu_id);
			$data['confirmation']="Your review has been recorded. Thank you!";
			$this->view("customer/quickOrderdetails",$data);
		}

	}

 ?>