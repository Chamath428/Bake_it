<?php

class availabilityController extends bakeItFramework
{
    function __construct()
	{
		// code...
	}
    public function index(){
        $data=array();
        $this->view("deliveryPerson/Availability",$data);
    }
}

?>