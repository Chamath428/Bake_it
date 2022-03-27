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

        $res2 = mysqli_query($this->db, $sql2) or die('2->' . mysqli_error($this->db));
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
        $sql3 = "SELECT
					order_items.menu_id,
                    order_items.quantity,
                    menu.item_name
					FROM
					order_items JOIN menu ON order_items.item_id =menu.item_id
                    WHERE
                    order_items.order_id=". $id." AND
                    menu.menu_id=1";



        $res3 = mysqli_query($this->db, $sql3) or die('3->' . mysqli_error($this->db));
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

        $sql4 = "UPDATE
						order_details
					SET
                    order_status = 5
            WHERE
            order_id = " . $order_id;

        $res4 = mysqli_query($this->db, $sql4) or die('4->' . mysqli_error($this->db));

    }

    public function getCompleteOrders()
    {

        $categoryData = array();
        $i = 0;
        $sql5 = "SELECT
					order_id,
                    needed_date,
                    menu_id

					FROM
					order_details
                    WHERE
                    order_status=5";
        

        $res2 = mysqli_query($this->db, $sql5) or die('5->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res2)) {
            $sql6 = "SELECT branch_name FROM branch WHERE branch_id  = ".$row1['menu_id'];
            $res3 = mysqli_query($this->db, $sql6) or die('6->' . mysqli_error($this->db));
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
        $sql7 = "SELECT
					order_id,
                    needed_date

					FROM
					order_details
                    WHERE
                    order_id=" . '"' . $id . '"';

        $res2 = mysqli_query($this->db, $sql7) or die('7->' . mysqli_error($this->db));
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
        $sql8 = "SELECT
					order_items.menu_id,
                    order_items.quantity,
                    menu.item_name
					FROM
					order_items JOIN menu ON order_items.item_id =menu.item_id
                    WHERE
                    order_items.order_id=". $id." AND
                    menu.menu_id=1";



        $res3 = mysqli_query($this->db, $sql8) or die('8->' . mysqli_error($this->db));
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
