<?php

class deliveryPersonAvailabilityModel extends database{

    function __construct()
		{
			$this->db=$this->dbcon();
		}

    public function updateAvailability($staff_id,$availability){

       $availability=$this->db->real_escape_string($availability);
        $availability = $_POST['availability'];
        $sql ="UPDATE
                   delivery_person
               SET
                   availability = $availability
                WHERE
                   staff_id = ".$staff_id;
		    $res =mysqli_query($this->db,$sql) or die('availabilityUpdate->'.mysqli_error($this->db));
         
    }

    public function checkAvailability($staff_id){
        $sql = " SELECT
                   availability
                 FROM
                   delivery_person
                 WHERE
                    staff_id = ".$staff_id;
		$res =mysqli_query($this->db,$sql) or die('availabilityCheck->'.mysqli_error($this->db));
    }
}     

?>