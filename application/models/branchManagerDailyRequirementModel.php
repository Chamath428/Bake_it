<?php

/**
 * 
 */
class branchManagerDailyRequirementModel extends database
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

}