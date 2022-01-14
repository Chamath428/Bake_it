<?php 

	/**
	 * 
	 */
	class myordersController extends bakeItFramework
	{
		
		public function __construct()
		{
			$this->customerMyOrdersModel=$this->model("customerMyOrdersModel");
		}
		public function index(){
			$data=array();
			if (isset($_SESSION['customer_id'])) {
				$customer_id=$_SESSION['customer_id'];
				$data=$this->customerMyOrdersModel->getMyOrders($customer_id);
			}
			
			$this->view("customer/myorders",$data);
		}



		public function showOrderDetails($order_id,$menu_id){
			$data=$this->customerMyOrdersModel->getOrderDetails($order_id,$menu_id);
			$this->view("customer/quickOrderdetails",$data);
		}

	}

 ?>