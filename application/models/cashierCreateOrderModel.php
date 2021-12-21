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
							reveiving_method,
							payment_type,
							order_status
						)
					VALUES ("
							.'"'.$orderDetails['menu_id'].'"' 		.","
							.'"'.$orderDetails['cashier_id'].'"' 	.","
							.'"'.$orderDetails['order_type'].'"' 	.","
							.'"'.$orderDetails['total_amount'].'"' 	.","
							.'"'.$orderDetails['paid_amount'].'"' 	.","
							.'"'.$orderDetails['delivery_type'].'"' .","
							.'"'.$orderDetails['payment_type'].'"' 	.","
							.'"'.$orderDetails['order_status'].'")';
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
}

 ?>