<?php

class bakeryManagerSummaryModel extends database
{
    function __construct()
    {
        $this->db = $this->dbcon();
    }

    public function getCategories()
    {
        $categorylist = array();
        $i = 0;
        $sql1 = "SELECT
                raw_material_inventory.rawitem_id,
                raw_material_inventory.raw_category_id,
                raw_material_category.raw_category_name,
                sum(retrieve_materials.quantity) AS total_quantity,
                retrieve_materials.date_and_time 
             FROM 
                raw_material_inventory INNER JOIN raw_material_category ON raw_material_inventory.raw_category_id = raw_material_category.raw_category_id 
             INNER JOIN retrieve_materials ON raw_material_inventory.rawitem_id= retrieve_materials.rawitem_id 
             WHERE extract(month FROM retrieve_materials.date_and_time) = month(curdate()) 
             GROUP BY
              raw_material_category.raw_category_id;";
        $res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res1)) {
            $data['raw_category_name'] = $row1['raw_category_name'];
            $data['total_quantity'] = $row1['total_quantity'];
          
            $categorylist[$i] = $data;
            $i++;
        }
        // var_dump($categorylist);
        return $categorylist;
    }


    public function getCategoriesSelectedDate($date='2022-01')
    {

        $categorylist = array();
        $i = 0;
        $sq2 = "SELECT
                raw_material_inventory.rawitem_id,
                raw_material_inventory.raw_category_id,
                raw_material_category.raw_category_name,
                sum(retrieve_materials.quantity) AS total_quantity,
                retrieve_materials.date_and_time 
             FROM 
                raw_material_inventory INNER JOIN raw_material_category ON raw_material_inventory.raw_category_id = raw_material_category.raw_category_id 
             INNER JOIN retrieve_materials ON raw_material_inventory.rawitem_id= retrieve_materials.rawitem_id 
             WHERE DATE_FORMAT(retrieve_materials.date_and_time, '%Y-%m') = $date
             GROUP BY
              raw_material_category.raw_category_id;";
        $res2 = mysqli_query($this->db, $sq2) or die('2->' . mysqli_error($this->db));
        while ($row2 = mysqli_fetch_assoc($res2)) {
            $data['raw_category_name'] = $row2['raw_category_name'];
            $data['total_quantity'] = $row2['total_quantity'];
          
            $categorylist[$i] = $data;
            $i++;
        }
        // var_dump($categorylist);
        return $categorylist;
        
    }



    public function getCategoriesForViews()
    {
        $categorylist = array();
        $i = 0;
        $sql1 = "SELECT
                raw_material_inventory.rawitem_id,
                raw_material_inventory.raw_category_id,
                raw_material_category.raw_category_name,
                sum(retrieve_materials.quantity) AS total_quantity,
                retrieve_materials.date_and_time 
             FROM 
                raw_material_inventory INNER JOIN raw_material_category ON raw_material_inventory.raw_category_id = raw_material_category.raw_category_id 
             INNER JOIN retrieve_materials ON raw_material_inventory.rawitem_id= retrieve_materials.rawitem_id 
             WHERE extract(month FROM retrieve_materials.date_and_time) = month(curdate()) 
             GROUP BY
              raw_material_category.raw_category_id;";
        $res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res1)) {
            $data['rawitem_id'] = $row1['rawitem_id'];
            $data['raw_category_id'] = $row1['raw_category_id'];
            $data['raw_category_name'] = $row1['raw_category_name'];
            $data['total_quantity'] = $row1['total_quantity'];
            $data['date_and_time'] = $row1['date_and_time'];
          
            $categorylist[$i] = $data;
            $i++;
        }
        // var_dump($categorylist);
        return $categorylist;
    }

}
