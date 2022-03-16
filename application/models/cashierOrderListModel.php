<?php 

/**
 * 
 */
class cashierOrderListModel extends database
{
	
	function __construct()
	{
		$this->db=$this->dbcon();
	}

	public function getOngoingOrderDetails(){
		$menu_id=$_SESSION['branch_id'];
		$quickOrderDetails=array();
		$specialOrderDetails=array();
		$i=0;


		$sql1="SELECT
					order_id,
					placed_date_and_time,
					receiving_method,
					total_amount
				FROM
					order_details
				WHERE
					menu_id=".'"'.$menu_id.'"'."
					AND order_status<6 AND
					order_type=1";

		$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));

		while ($row1=mysqli_fetch_assoc($res1)) {
			$data1['order_id']=$row1['order_id'];
			$data1['placed_date_and_time']=$row1['placed_date_and_time'];
			$data1['receiving_method']=$row1['receiving_method'];
			$data1['total_amount']=$row1['total_amount'];
			$quickOrderDetails[$i]=$data1;
			$i++;
		}

		$sql2="SELECT
					order_id,
					needed_date,
					receiving_method,
					total_amount
				FROM
					order_details
				WHERE
					menu_id=".'"'.$menu_id.'"'."
					AND order_status<6  AND
					order_type=2";

		$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));

		$i=0;
		while ($row2=mysqli_fetch_assoc($res2)) {
			$data2['order_id']=$row2['order_id'];
			$data2['needed_date']=$row2['needed_date'];
			$data2['receiving_method']=$row2['receiving_method'];
			$data2['total_amount']=$row2['total_amount'];
			$specialOrderDetails[$i]=$data2;
			$i++;
		}

		$ongoingOrders[1]=$quickOrderDetails;
		$ongoingOrders[2]=$specialOrderDetails;

		return $ongoingOrders;
	}

	public function getOrderDetails($order_id,$menu_id){
			$basicDeails=array();
			$customerDetails=array();
			$foodItems=array();
			$orderDetails=array();
			$i=0;

			$sql3="SELECT
						customer_id,
						placed_date_and_time,
						needed_date,
						needed_time,
						order_status,
						receiving_method,
						delivery_person_id,
						total_amount,
						paid_amount,
						is_advanced,
						order_type,
						payment_type
					FROM
						order_details
					WHERE
						order_id=".$order_id;

			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
			while ($row3=mysqli_fetch_assoc($res3)) {
				$data['order_id']=$order_id;
				$data['customer_id']=$row3['customer_id'];
				$data['placed_date']=$row3['placed_date_and_time'];
				$data['needed_date']=$row3['needed_date'];
				$data['needed_time']=$row3['needed_time'];
				$data['order_status']=$row3['order_status'];
				$data['reveiving_method']=$row3['receiving_method'];
				$data['delivery_person_id']=$row3['delivery_person_id'];
				$data['total_amount']=$row3['total_amount'];
				$data['paid_amount']=$row3['paid_amount'];
				$data['is_advanced']=$row3['is_advanced'];
				$data['order_type']=$row3['order_type'];
				$data['payment_type']=$row3['payment_type'];
				$data['menu_id']=$menu_id;
				$basicDeails=$data;
			}

			$sql4="SELECT
						menu.item_name,
						menu.price,
						order_items.quantity
					FROM
						order_items
					LEFT JOIN
						menu
					ON
						order_items.item_id=menu.item_id
					WHERE
						order_items.order_id=".$order_id.
					" AND
						menu.menu_id = ".$menu_id;

			$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));

			while ($row4=mysqli_fetch_assoc($res4)) {
				$data['item_name']=$row4['item_name'];
				$data['price']=$row4['price'];
				$data['quantity']=$row4['quantity'];
				$foodItems[$i]=$data;
				$i++;
			}

			if (!is_null($basicDeails['customer_id'])) {
				$sql5="SELECT
							CONCAT(customer.first_name,' ',customer.last_name) AS full_name,
							registered_customer.contact_number
						FROM
							customer
						LEFT JOIN
							registered_customer
						ON
							customer.customer_id=registered_customer.customer_id
						WHERE
							customer.customer_id=".$basicDeails['customer_id'];
				$res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));

				while ($row5=mysqli_fetch_assoc($res5)) {
					$customerDetails['full_name']=$row5['full_name'];
					$customerDetails['contact_number']=$row5['contact_number'];
				}

				if (is_null($customerDetails['contact_number'])) {
					$sql6="SELECT
								contact_number
							FROM
								unregistered_customer
							WHERE
								customer_id=".$basicDeails['customer_id'];

					$res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
					while ($row6=mysqli_fetch_assoc($res6)) {
						$customerDetails['contact_number']=$row6['contact_number'];
					}
				}
			}

			$orderDetails[1]=$basicDeails;
			$orderDetails[2]=$customerDetails;
			$orderDetails[3]=$foodItems;
			return $orderDetails;
		}

		public function completeQuickOrder($order_id,$paidAmount){
			$paidAmount=$this->db->real_escape_string($paidAmount);
			$cashier_id=$_SESSION['staff_id'];
			$sql7="UPDATE
						order_details
					SET
						paid_amount=".$paidAmount.",
						order_status=6  
					WHERE
						order_id=".$order_id;
			$res7=mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));

			$this->insertQuickBillDetails($order_id,$paidAmount);
		}

		public function updateQuickOrderDetails($order_id){
			$sql9="UPDATE
						order_details
					SET
						order_status=6
					WHERE
						order_id=".$order_id;

			$res9=mysqli_query($this->db,$sql9) or die('9->'.mysqli_error($this->db));
		}

		public function insertQuickBillDetails($order_id,$paidAmount){
			$cashier_id=$_SESSION['staff_id'];

			$sql10="SELECT
						bill_id
					FROM
						bill
					WHERE
						order_id=".$order_id;
			$res10=mysqli_query($this->db,$sql10) or die('10->'.mysqli_error($this->db));
			if (mysqli_num_rows($res10)==0) {
				$sql11="INSERT INTO
						bill(
							order_id,
							paid_amount,
							cashier_id)
						VALUES(".$order_id.","
								.$paidAmount.","
								.$cashier_id.")";

			$res11=mysqli_query($this->db,$sql11) or die('11->'.mysqli_error($this->db));
			}else{
				$sql12="UPDATE
							bill
						SET
							paid_amount=".$paidAmount.",
							cashier_id=".$cashier_id." 
						WHERE
							order_id=".$order_id;

				$res12=mysqli_query($this->db,$sql12) or die('12->'.mysqli_error($this->db));
			}

			
		}
}

 ?>