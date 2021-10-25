<?php

class deliveryReviewsController extends bakeItFramework
{
    function __construct()
	{
		// code...
	}
    public function index(){
        $data=array();
        $this->view("deliveryPerson/Reviews",$data);
    }
}

?>