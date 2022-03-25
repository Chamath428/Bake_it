<?php 

	/**
	 * 
	 */
	class checkoutModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function getCustomerId($customerData){
			 $customerData['first_name']=$this->db->real_escape_string($customerData['first_name']);
			 $customerData['last_name']=$this->db->real_escape_string($customerData['last_name']);
			 $customerData['phone_number']=$this->db->real_escape_string($customerData['phone_number']);
			 $customerData['address1']=$this->db->real_escape_string($customerData['address1']);
			 $customerData['address2']=$this->db->real_escape_string($customerData['address2']);
			 $customerData['address3']=$this->db->real_escape_string($customerData['address3']);

			 $sqla="SELECT
			 				customer_id
			 			FROM
			 				registered_customer
			 			WHERE
			 				contact_number=".'"'.$customerData['phone_number'].'"';
			 $resa=mysqli_query($this->db,$sqla) or die('a->'.mysqli_error($this->db));
			 if (mysqli_num_rows($resa)>0) {
			 	$rowa=mysqli_fetch_assoc($resa);
				return $rowa['customer_id'];
			 }

			 $sqlb="SELECT
			 				customer_id
			 			FROM
			 				unregistered_customer
			 			WHERE
			 				contact_number=".'"'.$customerData['phone_number'].'"';
			 $resb=mysqli_query($this->db,$sqlb) or die('b->'.mysqli_error($this->db));
			 if (mysqli_num_rows($resb)>0) {
			 	$rowb=mysqli_fetch_assoc($resa);
				return $rowb['customer_id'];
			 }

			 $sql1="	INSERT INTO
						customer(
								 first_name,
								 last_name,
								 address1,
								 address2,
								 address3,
								 customer_type
								)
						VALUES  ("
								.'"'.$customerData['first_name'].'"' 		.","
								.'"'.$customerData['last_name'].'"' 		.","
								.'"'.$customerData['address1'].'"' 			.","
								.'"'.$customerData['address2'].'"' 			.","
								.'"'.$customerData['address3'].'"' 			.",
								 2)";

			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));

			$sql2= "SELECT LAST_INSERT_ID() AS last_id";
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			$row=mysqli_fetch_assoc($res2);
			$last_id=$row['last_id'];

			$sql3="	INSERT INTO
						unregistered_customer(
											contact_number,
											customer_id)
									VALUES("
											.'"'.$customerData['phone_number'].'"'		.","
												.$last_id.")";

			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));

			return $last_id;
		}

		public function placeOrder($orderDetails){
			 $orderDetails['customer_id']=$this->db->real_escape_string($orderDetails['customer_id']);
			 $orderDetails['subtotal']=$this->db->real_escape_string($orderDetails['subtotal']);
			 $orderDetails['delivery_type']=$this->db->real_escape_string($orderDetails['delivery_type']);
			 $orderDetails['payment_type']=$this->db->real_escape_string($orderDetails['payment_type']);
			 $orderType=1;
			 $orderStatus=1;

			 $sql4="INSERT INTO
			 			order_details(
							customer_id,
							menu_id,
							order_type,
							total_amount,
							paid_amount,
							receiving_method,
							payment_type,
							order_status,
							needed_date
						)
					VALUES ("
							.'"'.$orderDetails['customer_id'].'"' 	.","
							.'"'.$orderDetails['menu_id'].'"' 		.","
							.'"'.$orderType.'"' 					.","
							.'"'.$orderDetails['subtotal'].'"' 		.","
							.'"'.$orderDetails['paid_amount'].'"' 		.","
							.'"'.$orderDetails['delivery_type'].'"' .","
							.'"'.$orderDetails['payment_type'].'"' 	.","
							.'"'.$orderStatus.'"'					.","
							.'"'.date("Y-m-d").'")';
			$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));

			$sql5= "SELECT LAST_INSERT_ID() AS last_order_id";
			$res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));
			$row2=mysqli_fetch_assoc($res5);
			$last_order_id=$row2['last_order_id'];

			return $last_order_id;
		}

		public function insertOrderItems($order_id,$menu_id,$items){
			foreach ($items as $item_id => $quantity) {
				$this->insertOrderItemsSql($order_id,$menu_id,$item_id,$quantity);
			}

		}
		public function insertOrderItemsSql($order_id,$menu_id,$item_id,$quantity){
			$sql6="INSERT INTO
						order_items(
							order_id,
							menu_id,
							item_id,
							quantity
						)
					VALUES("
							.'"'.$order_id.'"' .","
							.'"'.$menu_id.'"' .","
							.'"'.$item_id.'"' .","
							.'"'.$quantity.'")';
			$res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
		}

		public function placeSpecialOrder($orderDetails){
			 $orderDetails['customer_id']=$this->db->real_escape_string($orderDetails['customer_id']);
			 $orderDetails['subtotal']=$this->db->real_escape_string($orderDetails['subtotal']);
			 $orderDetails['paid_amount']=$this->db->real_escape_string($orderDetails['paid_amount']);
			 $orderDetails['delivery_type']=$this->db->real_escape_string($orderDetails['delivery_type']);
			 $orderDetails['payment_type']=$this->db->real_escape_string($orderDetails['payment_type']);
			 $orderDetails['date']=$this->db->real_escape_string($orderDetails['date']);
			 $orderDetails['time']=$this->db->real_escape_string($orderDetails['time']);
			 $orderType=2;
			 $orderStatus=1;


			 $sql7="INSERT INTO
			 			order_details(
							customer_id,
							menu_id,
							order_type,
							total_amount,
							paid_amount,
							is_advanced,
							receiving_method,
							payment_type,
							needed_date,
							needed_time,
							order_status
						)
					VALUES ("
							.'"'.$orderDetails['customer_id'].'"' 	.","
							.'"'.$orderDetails['menu_id'].'"' 		.","
							.'"'.$orderType.'"' 					.","
							.'"'.$orderDetails['subtotal'].'"' 		.","
							.'"'.$orderDetails['paid_amount'].'"' 		.","
							.'"'.$orderDetails['is_advanced'].'"' 		.","
							.'"'.$orderDetails['delivery_type'].'"' .","
							.'"'.$orderDetails['payment_type'].'"' .","
							.'"'.$orderDetails['date'].'"' .","
							.'"'.$orderDetails['time'].'"' .","
							.'"'.$orderStatus.'")';
			$res7=mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));

			$sql8= "SELECT LAST_INSERT_ID() AS last_order_id";
			$res8=mysqli_query($this->db,$sql8) or die('8->'.mysqli_error($this->db));
			$row3=mysqli_fetch_assoc($res8);
			$last_order_id=$row3['last_order_id'];

			return $last_order_id;
		}

		public function updateCustomerMobile($customer_id,$phonenumber){
			$sql9="UPDATE
						registered_customer
					SET
						contact_number=".'"'.$phonenumber.'"'."
					WHERE
						customer_id=".$customer_id;

			$res9=mysqli_query($this->db,$sql9) or die('9->'.mysqli_error($this->db));
		}
	}

 ?>