<?php

/**
 * 
 */
class availableMaterialsModel extends database
{

	function __construct()
	{
		$this->db = $this->dbcon();
	}

	public function getMaterials()
	{
		$materialData = [];
		$i = 0;
		$sql1 = "SELECT
					rawitem_id,
					rawitem_name,
					stock_amount,
					measure_unit
				FROM
					raw_material_inventory";
		$res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
		while ($row1 = mysqli_fetch_assoc($res1)) {
			$data['rawitem_id'] = $row1['rawitem_id'];
			$data['rawitem_name'] = $row1['rawitem_name'];
			$data['stock_amount'] = $row1['stock_amount'];
			$data['measure_unit'] = $row1['measure_unit'];
			$materialData[$i] = $data;
			$i++;
		}
		return $materialData;
	}

	public function compareItems($itemId, $quantity)
	{
		$sql2 = "SELECT
					stock_amount
				FROM
					raw_material_inventory
				WHERE
					rawitem_id = " . $itemId;
		$res2 = mysqli_query($this->db, $sql2) or die('2->' . mysqli_error($this->db));
		$row2 = mysqli_fetch_assoc($res2);
		if ($row2['stock_amount'] < $quantity) {
			return true;
		}
		return false;
	}

	public function getItemName($itemId)
	{
		$sql3 = "SELECT
					rawitem_name
				FROM
					raw_material_inventory
				WHERE
					rawitem_id = " . $itemId;

		$res3 = mysqli_query($this->db, $sql3) or die('3->' . mysqli_error($this->db));
		$row3 = mysqli_fetch_assoc($res3);
		return $row3['rawitem_name'];
	}

	public function updateMaretials($itemId, $quantity, $decider)
	{
		$sql4 = "SELECT
					stock_amount
				FROM
					raw_material_inventory
				WHERE
					rawitem_id = " . $itemId;
		$res4 = mysqli_query($this->db, $sql4) or die('4->' . mysqli_error($this->db));
		$row4 = mysqli_fetch_assoc($res4);
		if ($decider == 0) $newQuantity = $row4['stock_amount'] - $quantity;
		else if ($decider == 1) $newQuantity = $row4['stock_amount'] + $quantity;

		$sql5 = "UPDATE
					raw_material_inventory
				SET
					stock_amount =" . $newQuantity .
			" WHERE
					rawitem_id = " . $itemId;
		$res5 = mysqli_query($this->db, $sql5) or die('5->' . mysqli_error($this->db));
	}

	public	function deleteRaw()
	{
		if (isset($_POST['chk_id'])) {
			$arr = $_POST['chk_id'];
			foreach ($arr as $id) {
				$sql6 = "DELETE FROM raw_material_inventory WHERE rawitem_id = $id";
		$res6 = mysqli_query($this->db, $sql6) or die('6->' . mysqli_error($this->db));

			}

		
		}

		// $itemId=$id;


		// @mysqli_query($con, "DELETE FROM users WHERE id = " . $id);
		// $query = "DELETE FROM raw_material_inventory WHERE rawitem_id = $id";

		// $msg = "Deleted Successfully!";
		// echo $itemId;
		// header("Location: index.php?msg=$msg");

	}
}
