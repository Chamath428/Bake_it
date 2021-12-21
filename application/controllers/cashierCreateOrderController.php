<?php 

	/**
	 * 
	 */
	class cashierCreateOrderController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->cashierCreateOrderModel=$this->model("cashierCreateOrderModel");
		}

		public function index(){
			$data=array();
			$data=$this->cashierCreateOrderModel->getItems(1);
			$this->view("cashier/createQuickOrder",$data);
		}

		public function createSpecialOrderCashier(){
			$data=array();
			$this->view("cashier/createOrderSpecial",$data);
		}

		public function createQuickOrder(){
			$data['error']="";
			$orderDetails=array();
			$finalCount=$_POST['finalCount'];
			$orderItems=array();
			for ($i=1; $i <=$finalCount ; $i++) { 
				$orderItems[$_POST['item-id-'.$i]]=$_POST['quntity'.$i];
			}
			// foreach ($orderItems as $key => $value) {
			// 	echo $key."->".$value;
			// }

			$orderDetails['total_amount']=$_POST['total-amount'];
			$orderDetails['paid_amount']=$_POST['paid-amount'];
			$orderDetails['menu_id']=1;
			$orderDetails['cashier_id']=37;
			$orderDetails['order_type']=1;
			$orderDetails['delivery_type']=2;
			$orderDetails['payment_type']=$_POST['payment_type'];
			$orderDetails['order_status']=6;

			$order_id=$this->cashierCreateOrderModel->placeQuickOrder($orderDetails);
			$this->cashierCreateOrderModel->insertOrderItems($order_id,$orderDetails['menu_id'],$orderItems);
			$this->cashierCreateOrderModel->createBill($order_id,$orderDetails['paid_amount'],$orderDetails['cashier_id']);
			$this->redirect("");

		} 

	}

 ?>