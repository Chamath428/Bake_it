<?php

class deliveryPersonAvailabilityController extends bakeItFramework
{
    function __construct()
	{
        $this->deliveryPersonAvailabilityModel=$this->model("deliveryPersonAvailabilityModel");
	}
    public function index(){
        $data=array();
        $this->view("deliveryPerson/availability",$data);
    }

    public function displayAvailability(){

        $staff_id=$_SESSION['staff_id'];
        $avaialability= $_SESSION['availability'];
         if (isset($_SESSION['islogged'])) {
            $availability=$this->deliveryPersonAvailabilityModel->checkAvailabiility($staff_id);
        }	

    }

    public function insertAvailability(){
        $data['error']="";
        $availability=$_POST['availability'];
        if (isset($_SESSION['islogged'])) {
            $staff_id=$_SESSION['staff_id'];
        
            if ($data['error']=="") {
                $this->deliveryPersonAvailabilityModel->updateAvailability($staff_id,$availability);
                $data['confirmation']="Availability Updated Succesfully!";
                $this->view("deliveryPerson/availability",$data);
            }
        }
       

    }
}

?>