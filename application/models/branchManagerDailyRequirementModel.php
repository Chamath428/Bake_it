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
						daily_requirement
					FROM
						menu
					WHERE menu_id = " .$_SESSION['branch_id']. " AND category_id =" . '"' . $category_id . '"';
		$res2 = mysqli_query($this->db, $sql2) or die('2->' . mysqli_error($this->db));
		while ($row2 = mysqli_fetch_assoc($res2)) {
			$data['item_id'] = $row2['item_id'];
			$data['item_name'] = $row2['item_name'];
			$data['daily_requirement'] = $row2['daily_requirement'];
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
							daily_requirement=" . $value['daily_requirement'] . "
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
		$row4 = mysqli_fetch_assoc($res4);
		return $row4['category_id'];
	}

	public function getCategoryItemsForChart($category_id = 1)
	{
		$itemData = array();
		$i = 0;
		$sql2 = "SELECT
						item_id,
						item_name,
						sum(quantity) AS total_quantity
					FROM
						overview_details
					WHERE 
					extract(WEEK from needed_date) = week(curdate()-7) AND menu_id = " .$_SESSION['branch_id']. " AND category_id = " .$category_id. " GROUP BY item_id";
		$res2 = mysqli_query($this->db, $sql2) or die('2->' . mysqli_error($this->db));
		while ($row2 = mysqli_fetch_assoc($res2)) {
			$data['item_id'] = $row2['item_id'];
			$data['item_name'] = $row2['item_name'];
			$data['total_quantity'] = $row2['total_quantity'];
			$itemData[$i] = $data;
			$i++;

		}
		return $itemData;
	}

}