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
					order_details
                    WHERE
                    order_status=4";

        $res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res1)) {
            $sql6 = "SELECT branch_name FROM branch WHERE branch_id  = ".$row1['menu_id'];
            $res3 = mysqli_query($this->db, $sql6) or die('1->' . mysqli_error($this->db));
            $row2 = mysqli_fetch_assoc($res3);
            $data['order_id'] = $row1['order_id'];
            $data['needed_date'] = $row1['needed_date'];
            $data['branch_name'] = $row2['branch_name'];
            $categoryData[$i] = $data;
            $i++;
        }
        return  $categoryData;
    }

    public function getBasicDetailsofOrder($id)
    {

        $categoryData = array();
        $i = 0;
        $sql2 = "SELECT
					order_id,
                    needed_date

					FROM
					order_details
                    WHERE
                    order_id=" . '"' . $id . '"';

        $res2 = mysqli_query($this->db, $sql2) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res2)) {
            $data['order_id'] = $row1['order_id'];
            $data['needed_date'] = $row1['needed_date'];
            $categoryData[$i] = $data;
            $i++;
        }


        return  $categoryData;
    }

    public function getOrderItemDetails($id)
    {
        $categoryData = array();
        $i = 0;
        $sql2 = "SELECT
					order_items.menu_id,
                    order_items.quantity,
                    menu.item_name
					FROM
					order_items JOIN menu ON order_items.item_id =menu.item_id
                    WHERE
                    order_id=" . '"' . $id . '"';



        $res3 = mysqli_query($this->db, $sql2) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res3)) {
            $data['menu_id'] = $row1['menu_id'];
            $data['quantity'] = $row1['quantity'];
            $data['item_name'] = $row1['item_name'];
            $categoryData[$i] = $data;
            $i++;
        }


        return  $categoryData;
    }
    public function updatePendingOrdersStatus($order_id)
    {

        $sql3 = "UPDATE
						order_details
					SET
                    order_status = 5
            WHERE
            order_id = " . $order_id;

        $res4 = mysqli_query($this->db, $sql3) or die('1->' . mysqli_error($this->db));

    }

    public function getCompleteOrders()
    {

        $categoryData = array();
        $i = 0;
        $sql4 = "SELECT
					order_id,
                    needed_date,
                    menu_id

					FROM
					order_details
                    WHERE
                    order_status=5";
        

        $res2 = mysqli_query($this->db, $sql4) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res2)) {
            $sql5 = "SELECT branch_name FROM branch WHERE branch_id  = ".$row1['menu_id'];
            $res3 = mysqli_query($this->db, $sql5) or die('1->' . mysqli_error($this->db));
            $row2 = mysqli_fetch_assoc($res3);
            $data['order_id'] = $row1['order_id'];
            $data['needed_date'] = $row1['needed_date'];
            $data['branch_name'] = $row2['branch_name'];
            $categoryData[$i] = $data;
            $i++;
        }
       

        return  $categoryData;
    }


    public function getBasicDetailsofCompletedOrder($id)
    {

        $categoryData = array();
        $i = 0;
        $sql2 = "SELECT
					order_id,
                    needed_date

					FROM
					order_details
                    WHERE
                    order_id=" . '"' . $id . '"';

        $res2 = mysqli_query($this->db, $sql2) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res2)) {
            $data['order_id'] = $row1['order_id'];
            $data['needed_date'] = $row1['needed_date'];
            $categoryData[$i] = $data;
            $i++;
        }


        return  $categoryData;
    }

    public function getCompletedOrderItemDetails($id)
    {
        $categoryData = array();
        $i = 0;
        $sql2 = "SELECT
					order_items.menu_id,
                    order_items.quantity,
                    menu.item_name
					FROM
					order_items JOIN menu ON order_items.item_id =menu.item_id
                    WHERE
                    order_id=" . '"' . $id . '"';



        $res3 = mysqli_query($this->db, $sql2) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res3)) {
            $data['menu_id'] = $row1['menu_id'];
            $data['quantity'] = $row1['quantity'];
            $data['item_name'] = $row1['item_name'];
            $categoryData[$i] = $data;
            $i++;
        }


        return  $categoryData;
    }
}
