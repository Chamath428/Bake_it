<?php 

class cashierCreateOrderModel extends database
{
	
	function __construct()
	{
		$this->db=$this->dbcon();
	}

	public function getItems($branch_id){
		$itemData=array();
		$i=0;
		$sql1="SELECT
					item_id,
					item_name,
					price
				FROM
					menu
				WHERE
					menu_id=".$branch_id;
		$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
		while ($row1=mysqli_fetch_assoc($res1)) {
			$data['item_id']=$row1['item_id'];
			$data['item_name']=$row1['item_name'];
			$data['price']=$row1['price'];
			$itemData[$i]=$data;
			$i++;
		}

		return $itemData;
	}

	public function placeQuickOrder($orderDetails){
			$orderDetails['menu_id']=$this->db->real_escape_string($orderDetails['menu_id']);
			$orderDetails['cashier_id']=$this->db->real_escape_string($orderDetails['cashier_id']);
			$orderDetails['order_type']=$this->db->real_escape_string($orderDetails['order_type']);
			 $orderDetails['total_amount']=$this->db->real_escape_string($orderDetails['total_amount']);
			 $orderDetails['paid_amount']=$this->db->real_escape_string($orderDetails['paid_amount']);
			 $orderDetails['delivery_type']=$this->db->real_escape_string($orderDetails['delivery_type']);
			 $orderDetails['payment_type']=$this->db->real_escape_string($orderDetails['payment_type']);
			 $orderDetails['order_status']=$this->db->real_escape_string($orderDetails['order_status']);




			 $sql2="INSERT INTO
			 			order_details(
							menu_id,
							cashier_id,
							order_type,
							total_amount,
							paid_amount,
							receiving_method,
							payment_type,
							order_status,
							needed_date
						)
					VALUES ("
							.'"'.$orderDetails['menu_id'].'"' 		.","
							.'"'.$orderDetails['cashier_id'].'"' 	.","
							.'"'.$orderDetails['order_type'].'"' 	.","
							.'"'.$orderDetails['total_amount'].'"' 	.","
							.'"'.$orderDetails['paid_amount'].'"' 	.","
							.'"'.$orderDetails['delivery_type'].'"' .","
							.'"'.$orderDetails['payment_type'].'"' 	.","
							.'"'.$orderDetails['order_status'].'"'	.","
							.'"'.date("Y-m-d").'")';
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));

			$sql3= "SELECT LAST_INSERT_ID() AS last_order_id";
			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
			$row2=mysqli_fetch_assoc($res3);
			$last_order_id=$row2['last_order_id'];

			return $last_order_id;
	}

	public function insertOrderItems($order_id,$menu_id,$items){
			foreach ($items as $item_id => $quantity) {
				$this->insertOrderItemsSql($order_id,$menu_id,$item_id,$quantity);
			}

		}
	public function insertOrderItemsSql($order_id,$menu_id,$item_id,$quantity){
			$sql4="INSERT INTO
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
			$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));

			$sql4b="SELECT
						quantity
					FROM
						menu
					WHERE
						item_id=".'"'.$item_id.'"'." AND
						menu_id=".'"'.$menu_id.'"';
			$res4b=mysqli_query($this->db,$sql4b) or die('4b->'.mysqli_error($this->db));
			$row4b=mysqli_fetch_assoc($res4b);
			$newQuantity=$row4b['quantity']-$quantity;
			if($newQuantity<0)$newQuantity=0;

			$sql4c="UPDATE
						menu
					SET
						quantity=".$newQuantity." 
					WHERE
						item_id=".'"'.$item_id.'"'." AND
						menu_id=".'"'.$menu_id.'"';
			$res4c=mysqli_query($this->db,$sql4c) or die('4c->'.mysqli_error($this->db));
		}

	public function createBill($order_id,$paidAmount,$cashier_id){
			$sql5="INSERT INTO
						bill(
							order_id,
							paid_amount,
							cashier_id
					)
					VALUES("
							.'"'.$order_id.'"' .","
							.'"'.$paidAmount.'"' .","
							.'"'.$cashier_id.'")';

			$res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));
	}

	public function getCustomerId($customerData){
		$phonenumber=$this->db->real_escape_string($customerData['phone_number']);
		$phonenumber=preg_replace('/\s+/', '', $phonenumber);
		$firstname=$this->db->real_escape_string($customerData['first_name']);
		$lastname=$this->db->real_escape_string($customerData['last_name']);
		$address1=$this->db->real_escape_string($customerData['address1']);
		$address2=$this->db->real_escape_string($customerData['address2']);
		$address3=$this->db->real_escape_string($customerData['address3']);

		$sql6="SELECT
					customer_id
				FROM
					registered_customer
				WHERE
					contact_number=".'"'.$phonenumber.'"';

		$res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));

		if (mysqli_num_rows($res6)>0) {
			$row3=mysqli_fetch_assoc($res6);
			return $row3['customer_id'];
		}

		$sql7="SELECT
					customer_id
				FROM
					unregistered_customer
				WHERE
					contact_number=".'"'.$phonenumber.'"';

		$res7=mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));

		if (mysqli_num_rows($res7)>0) {
			$row4=mysqli_fetch_assoc($res7);
			return $row4['customer_id'];
		}

		$sql8="INSERT INTO
					customer(
							first_name,
							last_name,
							address1,
							address2,
							address3
				)
				VALUES("
					.'"'.$firstname.'"'.","
					.'"'.$lastname.'"'.","
					.'"'.$address1.'"'.','
					.'"'.$address2.'"'.','
					.'"'.$address3.'")';

		$res8=mysqli_query($this->db,$sql8) or die('8->'.mysqli_error($this->db));

		$sql9= "SELECT LAST_INSERT_ID() AS last_id";
		$res9=mysqli_query($this->db,$sql9) or die('9->'.mysqli_error($this->db));
		$row5=mysqli_fetch_assoc($res9);
		$customer_id=$row5['last_id'];

		$sql10="INSERT INTO
						 unregistered_customer(
						 	contact_number,
						 	customer_id)
						 VALUES("
						 	.'"'.$phonenumber.'"'.","
						 	.'"'.$customer_id.'")';
		$res10=mysqli_query($this->db,$sql10) or die('10->'.mysqli_error($this->db));
		return $customer_id;

	}


	public function placeSpecialOrder($orderDetails){
			$orderDetails['menu_id']=$this->db->real_escape_string($orderDetails['menu_id']);
			$orderDetails['cashier_id']=$this->db->real_escape_string($orderDetails['cashier_id']);
			$orderDetails['customer_id']=$this->db->real_escape_string($orderDetails['customer_id']);
			$orderDetails['order_type']=$this->db->real_escape_string($orderDetails['order_type']);
			 $orderDetails['total_amount']=$this->db->real_escape_string($orderDetails['total_amount']);
			 $orderDetails['paid_amount']=$this->db->real_escape_string($orderDetails['paid_amount']);
			 $orderDetails['delivery_type']=$this->db->real_escape_string($orderDetails['delivery_type']);
			 $orderDetails['payment_type']=$this->db->real_escape_string($orderDetails['payment_type']);
			 $orderDetails['is_advance']=$this->db->real_escape_string($orderDetails['is_advance']);
			 $orderDetails['order_status']=$this->db->real_escape_string($orderDetails['order_status']);
			 $orderDetails['req_date']=$this->db->real_escape_string($orderDetails['req_date']);
			 $orderDetails['req_time']=$this->db->real_escape_string($orderDetails['req_time']);




			 $sql11="INSERT INTO
			 			order_details(
			 				customer_id,
							menu_id,
							cashier_id,
							order_type,
							total_amount,
							paid_amount,
							is_advanced,
							receiving_method,
							payment_type,
							order_status,
							needed_date,
							needed_time
						)
					VALUES ("
							.'"'.$orderDetails['customer_id'].'"' 	.","
							.'"'.$orderDetails['menu_id'].'"' 		.","
							.'"'.$orderDetails['cashier_id'].'"' 	.","
							.'"'.$orderDetails['order_type'].'"' 	.","
							.'"'.$orderDetails['total_amount'].'"' 	.","
							.'"'.$orderDetails['paid_amount'].'"' 	.","
							.'"'.$orderDetails['is_advance'].'"' 	.","
							.'"'.$orderDetails['delivery_type'].'"' .","
							.'"'.$orderDetails['payment_type'].'"' 	.","
							.'"'.$orderDetails['order_status'].'"' 	.","
							.'"'.$orderDetails['req_date'].'"' 	.","
							.'"'.$orderDetails['req_time'].'")';
			$res11=mysqli_query($this->db,$sql11) or die('11->'.mysqli_error($this->db));

			$sql12= "SELECT LAST_INSERT_ID() AS last_order_id";
			$res12=mysqli_query($this->db,$sql12) or die('12->'.mysqli_error($this->db));
			$row6=mysqli_fetch_assoc($res12);
			$last_order_id=$row6['last_order_id'];

			return $last_order_id;
	}

	public function getFoodInfo($items){
		$returnData=array();
		$menu_id=$_SESSION['branch_id'];
		$i=0;
		foreach ($items as $item_id => $quantity) {
				$getInfo=$this->getFoodInfoSql($item_id,$menu_id);
				$data['item_id']=$item_id;
				$data['quantity']=$quantity;
				$data['item_name']=$getInfo['item_name'];
				$data['price']=$getInfo['price'];
				$returnData[$i]=$data;
				$i++;
			}
			return $returnData;
	}


	public function getFoodInfoSql($item_id,$menu_id){
		$returnData=array();
		$sql13="SELECT
					item_name,
					price
				FROM
					menu
				WHERE
					item_id=".$item_id." AND
					menu_id=".$menu_id;

		$res13=mysqli_query($this->db,$sql13) or die('13->'.mysqli_error($this->db));
		while ($row7=mysqli_fetch_assoc($res13)) {
			$returnData['item_name']=$row7['item_name'];
			$returnData['price']=$row7['price'];
		}

		return $returnData;

	}

}

 ?>