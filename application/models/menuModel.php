<?php

/**
 * 
 */
class menuModel extends database
{

	function __construct()
	{
		$this->db = $this->dbcon();
	}

	public function getCategories()
	{
		$categoryData = array();
		$i = 0;
		$sql1 = "SELECT
						category_id,
						category_name
					FROM
						menu_category";

		$res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
		while ($row1 = mysqli_fetch_assoc($res1)) {
			$data['category_id'] = $row1['category_id'];
			$data['category_name'] = $row1['category_name'];
			$categoryData[$i] = $data;
			$i++;
		}
		return $categoryData;
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
					WHERE menu_id = " .$_SESSION['branch_id']. " AND category_id =" . '"' . $category_id . '"';
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


	public function updateQuantity($updateData = [])
	{
		foreach ($updateData as $key => $value) {
			$sql3 = "UPDATE

							menu
						SET
							quantity=" . $value['quantity'] . "
						WHERE

							item_id=" . $value['item_id'];
			$res3 = mysqli_query($this->db, $sql3) or die('3->' . mysqli_error($this->db));

		}
	}

	public function getCategoryId($itemId)
	{
		$sql4 = "SELECT
						category_id
					FROM
						menu
					WHERE
						item_id=" . $itemId;
		$res4 = mysqli_query($this->db, $sql4) or die('4->' . mysqli_error($this->db));
		$row1 = mysqli_fetch_assoc($res4);
		return $row1['category_id'];
	}

	public function selectOutlet()
	{
		// echo "hellow";
		$outletData = [];
		$i = 0;
		$sql5 = "SELECT
					branch_id,
					branch_name
				FROM
					branch";
		$res5 = mysqli_query($this->db, $sql5) or die('5->' . mysqli_error($this->db));
		while ($row3 = mysqli_fetch_assoc($res5)) {
			$data['branch_id'] = $row3['branch_id'];
			$data['branch_name'] = $row3['branch_name'];
			$outletData[$i] = $data;
			$i++;
		}
		return $outletData;
	}
	public function selectCategory()
	{
		// echo "hellow";
		$categoryData = [];
		$i = 0;
		$sql6 = "SELECT
					category_id,
					category_name
				FROM
				menu_category";
		$res6 = mysqli_query($this->db, $sql6) or die('6->' . mysqli_error($this->db));
		while ($row4 = mysqli_fetch_assoc($res6)) {
			$data['category_id'] = $row4['category_id'];
			$data['category_name'] = $row4['category_name'];
			$categoryData[$i] = $data;
			$i++;
		}
		return $categoryData;
	}

	public function getItemLists($branch_id = 1, $category_id = 1)
	{

		$itemListData = [];
		$i = 0;
		$sql7 = "SELECT
					item_id,
					item_name,
					price
				FROM
				menu
				WHERE
				category_id=" . $category_id . " AND branch_id=" . $branch_id;



		$res7 = mysqli_query($this->db, $sql7) or die('7->' . mysqli_error($this->db));
		while ($row5 = mysqli_fetch_assoc($res7)) {
			$data['item_id'] = $row5['item_id'];
			$data['item_name'] = $row5['item_name'];
			$data['price'] = $row5['price'];
			$itemListData[$i] = $data;
			$i++;
		}
		return $itemListData;
	}


	public function insertMenuItems($newMenuData)
	{
		$newMenuData['menu_id'] = $this->db->real_escape_string($newMenuData['menu_id']);
		$newMenuData['item_id'] = $this->db->real_escape_string($newMenuData['item_id']);
		$newMenuData['item_name'] = $this->db->real_escape_string($newMenuData['item_name']);
		$newMenuData['category_id'] = $this->db->real_escape_string($newMenuData['category_id']);
		$newMenuData['quantity'] = $this->db->real_escape_string($newMenuData['quantity']);
		$newMenuData['daily_requirement'] = $this->db->real_escape_string($newMenuData['daily_requirement']);
		$newMenuData['branch_id'] = $this->db->real_escape_string($newMenuData['branch_id']);


		$sql8 = "INSERT INTO
		menu(
			menu_id,
			item_id,
			item_name,
			category_id,
			quantity,
			price,
			daily_requirement,
			branch_id 
				)
		VALUES  ("
			. '"' . $newMenuData['menu_id'] . '"' 	. ","
			. '"' . $newMenuData['item_id'] . '"' 	. ","
			. '"' . $newMenuData['item_name'] . '"' 			. ","
			. '"' . $newMenuData['category_id'] . '"' 			. ","
			. '"' . $newMenuData['quantity'] . '"' 			. ","
			. '"' . $newMenuData['price'] . '"' 			. ","
			. '"' . $newMenuData['daily_requirement'] . '"' 			. ","
			. '"' . $newMenuData['branch_id'] . '"' 			. "
				 )";


		$res7 = mysqli_query($this->db, $sql8) or die('8->' . mysqli_error($this->db));
	}

	public function deleteMenuItems( $check_id){
		foreach ($check_id as $key => $value) {
		$sql9 ="DELETE FROM `menu` WHERE `item_id` = ".$value;
		}
		$res9 = mysqli_query($this->db, $sql9) or die('9->' . mysqli_error($this->db));

	}

	public function selectMaxItemId($categories)
	{
		$maxItemId=array();
		$itemListData = [];
		$i = 0;
		$sql10= "SELECT
					item_id 

				FROM
				menu
				WHERE
				category_id =" . $categories ;



		$res10 = mysqli_query($this->db, $sql10) or die('10->' . mysqli_error($this->db));
		while ($row10 = mysqli_fetch_assoc($res10)) {
			// $data['item_id'] = intval($row10['item_id']);
			// $maxItemId[$i] = $data;
			// $maxItemId[$i] = intval($row10['item_id']);
			array_push($maxItemId,intval($row10['item_id']));
			// $i++;
		}
		$maxId=max($maxItemId);
		return $maxId;
	}

	public function displaySelectCategoryName($itemId)
	{
		$sql11= "SELECT
						category_name	
					FROM
					menu_category
					WHERE
					category_id  =" . $itemId;
		$res11 = mysqli_query($this->db, $sql11) or die('11->' . mysqli_error($this->db));
		$row1 = mysqli_fetch_assoc($res11);
		return $row1['category_name'];
	}
}
