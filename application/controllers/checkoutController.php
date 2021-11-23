<?php 

	/**
	 * 
	 */
	class checkoutController extends bakeItFramework
	{
		
		public function __construct()
		{
			$this->checkoutModel=$this->model("checkoutModel");
		}
		public function index (){
			$data=array();
			if (isset($_SESSION['quick_cart'])) {
				$this->view("/customer/checkout",$data);
			}
			else $this->view("customer/cart",$data);
		}

		public function placeOrder(){
			$data['error']="";
			$first_name=preg_replace('/\s+/', '', $_POST['first_name']);
			$last_name=preg_replace('/\s+/', '', $_POST['last_name']);
			$phone_number=preg_replace('/\s+/', '', $_POST['phone_number']);
			$delivery_type=$_POST['delivery_type'];
			$payment_type=$_POST['payment_type'];
			$address1="";
			$address2="";
			$address3="";
			$subtotal=$_POST['subtotal'];

			if (isset($_SESSION['customer_id'])) {
				$customer_id=$_SESSION['customer_id'];
			}
			if ($delivery_type==2) {
				$address1=$_POST['address_line1'];
				$address2=$_POST['address_line2'];
				$address3=$_POST['address_line3'];

				if ($address1=="" || $address2=="") {
					$data['error']="Address line 1 and Address 2 are required";
				}
			}

			if ($first_name=="") {
				$data['error']="First name is required";
			}
			else if ($phone_number=="") {
				$data['error']="Phone number is required";
			}
			

			if ($data['error']=="") {
				$orderDetails=array();
				$orderItems=array();
				$orderDetails['first_name']=$first_name;
				$orderDetails['last_name']=$last_name;
				$orderDetails['phone_number']=$phone_number;
				$orderDetails['address1']=$address1;
				$orderDetails['address2']=$address2;
				$orderDetails['address3']=$address3;
				$orderDetails['delivery_type']=$delivery_type;
				$orderDetails['payment_type']=$payment_type;
				$orderDetails['subtotal']=$subtotal;

				if (!isset($customer_id)) {
					$customer_id=$this->checkoutModel->createCustomer($orderDetails);
				}

				if (isset($_SESSION['branch_Id'])) {
			 	$menuId=$_SESSION['branch_Id'];
			 	}

				$orderDetails['customer_id']=$customer_id;
				$orderDetails['menu_id']=$menuId;
				

				$order_id=$this->checkoutModel->placeOrder($orderDetails);
				// echo $order_id;

				if (!empty($_SESSION["quick_cart"])){
					foreach ($_SESSION['quick_cart'] as $key => $item) {
						$orderItems[$key]=$item['quantity'];
					}
				}
				$this->checkoutModel->insertOrderItems($order_id,$menuId,$orderItems);
				$this->view("customer/myorders");

			}
			else {
				$this->index();
			}

		}
	}

 ?>