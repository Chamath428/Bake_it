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


	public function getCategoryItems($category_id = 1)
	{
		$itemData = array();
		$i = 0;
		$sql2 = "SELECT
					item_id,
					item_name,
					quantity,
					price
				FROM
					menu
				WHERE
					category_id =" . '"' . $category_id . '"';
		$res2 = mysqli_query($this->db, $sql2) or die('2->' . mysqli_error($this->db));
		while ($row2 = mysqli_fetch_assoc($res2)) {
			$data['item_id'] = $row2['item_id'];
			$data['item_name'] = $row2['item_name'];
			$data['quantity'] = $row2['quantity'];
			$data['price'] = $row2['price'];
			$itemData[$i] = $data;
			$i++;
		}
		return $itemData;
	}

	public function getCategories()
	{
		$categoryData = array();
		$i = 0;
		$sql1 = "SELECT
					raw_category_id,
					raw_category_name
				FROM
				raw_material_category";

		$res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
		while ($row1 = mysqli_fetch_assoc($res1)) {
			$data['raw_category_id'] = $row1['raw_category_id'];
			$data['raw_category_name'] = $row1['raw_category_name'];
			$categoryData[$i] = $data;
			$i++;
		}
		return $categoryData;
	}
	public function getItems($category_id = 1)
	{
		$itemData = array();
		$i = 0;
		$sql5 = "SELECT
					rawitem_id,
					rawitem_name,
					stock_amount,
					measure_unit
					
				FROM
					raw_material_inventory
				WHERE
				raw_category_id=" . '"' . $category_id . '"';


		$res5 = mysqli_query($this->db, $sql5) or die('1->' . mysqli_error($this->db));
		while ($row5 = mysqli_fetch_assoc($res5)) {
			$data['rawitem_id'] = $row5['rawitem_id'];
			$data['rawitem_name'] = $row5['rawitem_name'];
			$data['stock_amount'] = $row5['stock_amount'];
			$data['measure_unit'] = $row5['measure_unit'];
			$itemData[$i] = $data;
			$i++;
		}
		return $itemData;
	}

	public function insertRawMaterials($insertData)
	{
		// $insertData['rawitem_id'] = $this->db->real_escape_string($insertData['rawitem_id']);
		$insertData['rawitem_name'] = $this->db->real_escape_string($insertData['rawitem_name']);
		$insertData['stock_amount'] = $this->db->real_escape_string($insertData['stock_amount']);
		$insertData['raw_category_id'] = $this->db->real_escape_string($insertData['raw_category_id']);
		$insertData['measure_unit'] = $this->db->real_escape_string($insertData['measure_unit']);


		$sql9 = "INSERT INTO
		raw_material_inventory(
			
			rawitem_name,
			raw_category_id,
			stock_amount,
			measure_unit
		
				)
		VALUES  ("

			. '"' . $insertData['rawitem_name'] . '"' 			. ","
			. '"' . $insertData['raw_category_id'] . '"' 	. ","
			. '"' . $insertData['stock_amount'] . '"' 	. ","
			. '"' . $insertData['measure_unit'] . '"' 			. "
				 )";


		$res8 = mysqli_query($this->db, $sql9) or die('1->' . mysqli_error($this->db));
	}


	public function deleteMenuRawMaterial($check_id)
	{
		foreach ($check_id as $key => $value) {
			$sql10 = "DELETE FROM `raw_material_inventory` WHERE `rawitem_id` = " . $value;
		}
		$res9 = mysqli_query($this->db, $sql10) or die('1->' . mysqli_error($this->db));
	}

	public function insertStockMaretials($itemId, $quantity, $managerId, $date)
	{

		$sql11 = "INSERT INTO
		stocks(
			
			rawitem_id,
			quantity,
			date_and_time,
			bakery_manager_id 
		
				)
		VALUES  ("

			. '"' . $itemId . '"' 			. ","
			. '"' . $quantity . '"' 	. ","
			. '"' . $date . '"' 	. ","
			. '"' . $managerId . '"' 			. "
				 )";


		$res8 = mysqli_query($this->db, $sql11) or die('1->' . mysqli_error($this->db));
	}

	public function insertRetrieveMaretials($rawitem_id, $quantity, $date, $managerId)
	{

		$sql12 = "INSERT INTO
		retrieve_materials(
			rawitem_id,
			quantity,
			date_and_time,
			bakery_manager_id
		
				)
		VALUES  ("

			. '"' . $rawitem_id . '"' 			. ","
			. '"' . $quantity . '"' 	. ","
			. '"' . $date . '"' 	. ","
			. '"' . $managerId . '"' 			. "
				 )";


		$res9 = mysqli_query($this->db, $sql12) or die('1->' . mysqli_error($this->db));
	}


	
}
