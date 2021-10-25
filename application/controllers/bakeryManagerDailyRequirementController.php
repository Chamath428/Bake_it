<?php

class bakeryManagerDailyRequirementController extends bakeItFramework
{
    function __construct()
	{
		// code...
	}
    public function index(){
        $data=array();
        $this->view("bakery_manager/dailyRequirment",$data);
    }
}

?>