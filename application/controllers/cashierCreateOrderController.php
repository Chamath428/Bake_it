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

		// this function is just to direct to the crete special order page
		// public function createSpecialOrderCashier(){
		// 	$data=$this->cashierCreateOrderModel->getItems(1);
		// 	$this->view("cashier/createOrderSpecial",$data);
		// }

		public function directToSepcialOrder(){
			$data=$this->cashierCreateOrderModel->getItems(1);
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

			$orderDetails['total_amount']=$_POST['total-amount'];
			$orderDetails['paid_amount']=$_POST['paid-amount'];
			$orderDetails['menu_id']=1;
			$orderDetails['cashier_id']=$_SESSION['staff_id'];
			$orderDetails['order_type']=1;
			$orderDetails['delivery_type']=1;
			$orderDetails['payment_type']=$_POST['payment_type'];
			$orderDetails['order_status']=6;

			$order_id=$this->cashierCreateOrderModel->placeQuickOrder($orderDetails);
			$this->cashierCreateOrderModel->insertOrderItems($order_id,$orderDetails['menu_id'],$orderItems);
			$this->cashierCreateOrderModel->createBill($order_id,$orderDetails['paid_amount'],$orderDetails['cashier_id']);

			$orderDetails['order_id']=$order_id;
			$forwardData[1]=$orderDetails;
			$forwardData[2]=$this->cashierCreateOrderModel->getFoodInfo($orderItems);

			$this->view("cashier/quickInvoice",$forwardData);
			 $this->redirect("");

		} 

		public function createSpecialOrderCashier(){
			$data['error']="";
			$orderDetails=array();
			$customerDetails=array();
			$finalCount=$_POST['finalCount'];
			$orderItems=array();
			for ($i=1; $i <=$finalCount ; $i++) { 
				$orderItems[$_POST['item-id-'.$i]]=$_POST['quntity'.$i];
			}
			
			$orderDetails['req_date']=$_POST['required_date'];
			$orderDetails['req_time']=$_POST['required_time'];

			$customerDetails['first_name']=$_POST['first_name'];
			$customerDetails['last_name']=$_POST['last_name'];
			$customerDetails['phone_number']=$_POST['phone_number'];

			$orderDetails['menu_id']=$_SESSION['branch_id'];
			$orderDetails['cashier_id']=$_SESSION['staff_id'];
			$orderDetails['order_type']=2;
			$orderDetails['delivery_type']=$_POST['delivery_type'];

			$customerDetails['address1']="";
			$customerDetails['address2']="";
			$customerDetails['address3']="";

			if ($orderDetails['delivery_type']==2) {
				$customerDetails['address1']=$_POST['address_line1'];
				$customerDetails['address2']=$_POST['address_line2'];
				$customerDetails['address3']=$_POST['address_line3'];
			}

			$orderDetails['payment_type']=$_POST['payment_type'];
			$orderDetails['order_status']=2;
			$orderDetails['is_advance']=$_POST['is_advance'];
			$orderDetails['total_amount']=$_POST['grand-amount'];
			$orderDetails['paid_amount']=$_POST['paid-amount'];
			
			$orderDetails['customer_id']=$this->cashierCreateOrderModel->getCustomerId($customerDetails);
			$order_id=$this->cashierCreateOrderModel->placeSpecialOrder($orderDetails);
			$this->cashierCreateOrderModel->insertOrderItems($order_id,$orderDetails['menu_id'],$orderItems);
			$this->cashierCreateOrderModel->createBill($order_id,$orderDetails['paid_amount'],$orderDetails['cashier_id']);
			// $this->redirect("");

			$orderDetails['order_id']=$order_id;
			$forwardData[1]=$orderDetails;
			$forwardData[2]=$this->cashierCreateOrderModel->getFoodInfo($orderItems);

			$this->view("cashier/quickInvoice",$forwardData);
		}

	}

 ?>