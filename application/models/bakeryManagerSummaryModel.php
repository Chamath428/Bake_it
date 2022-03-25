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
                        raw_category_id ,
                        raw_category_name
                    FROM
                    raw_material_category";
        $res1 = mysqli_query($this->db, $sql1) or die('1->' . mysqli_error($this->db));
        while ($row1 = mysqli_fetch_assoc($res1)) {
            $data['raw_category_id'] = $row1['raw_category_id'];
            $data['raw_category_name'] = $row1['raw_category_name'];
            $categorylist[$i] = $data;
            $i++;
        }
        // var_dump($categorylist);
        return $categorylist;
    }
    public function selectRawId($categories)
    {
        $rawId = array();
        $i = 0;
        $j=0;
        foreach ($categories as $key => $value) {
            $sql2 = "SELECT 
                rawitem_id
               
            FROM
             raw_material_inventory
            WHERE
               raw_category_id=" . '"' . $value['raw_category_id'] . '"';
            $res2 = mysqli_query($this->db, $sql2) or die('2->' . mysqli_error($this->db));
            while ($row2 = mysqli_fetch_assoc($res2)) {
                $data['rawitem_id'] = $row2['rawitem_id'];
                $rawId[$j][$i] = $data;
                $i++;
            }
            $rawIdListArray = $rawId;
            $j++;
        }

        
        return  $rawIdListArray;
    }
}
