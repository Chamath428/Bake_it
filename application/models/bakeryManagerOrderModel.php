<?php

/**
 * 
 */
class bakeryManagerOrderModel extends database
{

    function __construct()
    {
        $this->db = $this->dbcon();

    }

    public function getPendingOrders()
    {

        $categoryData = array();
        $i = 0;
        $sql1 = "SELECT
					order_id,
                    needed_date,
                    menu_id

					FROM
					order_details";

        $res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res1)) {
            $data['order_id'] = $row1['order_id'];
            $data['needed_date'] = $row1['needed_date'];
            $data['menu_id'] = $row1['menu_id'];
            $categoryData[$i] = $data;
            $i++;
        }
        return  $categoryData;
    }

    public function getPendingOrderMoreDetails()
    {

        $categoryData = array();
        $i = 0;
        $sql2 = "SELECT * FROM order_details";

        $res1 = mysqli_query($this->db, $sql2) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res1)) {
            $data['order_id '] = $row1['order_id '];
            $data['needed_date'] = $row1['needed_date'];
            $data['menu_id'] = $row1['menu_id'];
            $data['menu_id'] = $row1['menu_id'];
            $data['menu_id'] = $row1['menu_id'];
            $data['menu_id'] = $row1['menu_id'];
            $data['menu_id'] = $row1['menu_id'];
            $data['menu_id'] = $row1['menu_id'];
            $data['menu_id'] = $row1['menu_id'];
            $data['menu_id'] = $row1['menu_id'];
            $data['menu_id'] = $row1['menu_id'];

            $categoryData[$i] = $data;
            $i++;
        }
        return  $categoryData;
    }
}
