<?php

/**
 * 
 */
class bakeryManagerDailyRequirementModel extends database
{

    function __construct()
    {
        $this->db = $this->dbcon();
    }
    public function selectOutlet()
    {

        $outletData = [];
        $i = 0;
        $sql5 = "SELECT
                        branch_id,
                        branch_name
                    FROM
                        branch";
        $res5 = mysqli_query($this->db, $sql5) or die('1->' . mysqli_error($this->db));
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
        $res6 = mysqli_query($this->db, $sql6) or die('1->' . mysqli_error($this->db));
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
					daily_requirement
				FROM
				menu
				WHERE
				category_id=" . $category_id . " AND branch_id=" . $branch_id;



        $res7 = mysqli_query($this->db, $sql7) or die('1->' . mysqli_error($this->db));
        while ($row5 = mysqli_fetch_assoc($res7)) {
            $data['item_id'] = $row5['item_id'];
            $data['item_name'] = $row5['item_name'];
            $data['daily_requirement'] = $row5['daily_requirement'];
            $itemListData[$i] = $data;
            $i++;
        }
        return $itemListData;
    }
}
