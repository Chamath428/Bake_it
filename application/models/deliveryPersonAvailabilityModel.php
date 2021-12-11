<?php

class deliveryPersonAvailabilityModel extends database{

    function __construct()
		{
			$this->db=$this->dbcon();
		}

    public function updateAvailability($staff_id,$availability){

       $availability=$this->db->real_escape_string($availability);
        $sql1 ="UPDATE
                   delivery_person
               SET
                   availability = $availability
                WHERE
                   staff_id = ".$staff_id;
		    $res1 =mysqli_query($this->db,$sql1) or die('1->availabilityUpdate->'.mysqli_error($this->db));
         
    }

    public function checkAvailability($staff_id){
        $sql2 = " SELECT
                   availability
                 FROM
                   delivery_person
                 WHERE
                    staff_id = ".$staff_id;
		    $res2 =mysqli_query($this->db,$sql2) or die('2->availabilityCheck->'.mysqli_error($this->db));
        return $res2;
    }
}     

?>