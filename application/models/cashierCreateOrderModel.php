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
}

 ?>