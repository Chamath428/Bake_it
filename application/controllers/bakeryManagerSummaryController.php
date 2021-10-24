<?php

class bakeryManagerSummaryController extends bakeItFramework
{
    function __construct()
	{
		// code...
	}
    public function index(){
        $data=array();
        $this->view("bakery_manager/summaryView",$data);
    }
}

?>