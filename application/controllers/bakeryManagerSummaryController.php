<?php

class bakeryManagerSummaryController extends bakeItFramework
{
    function __construct()
	{
        $this->bakeryManagerSummaryModel = $this->model("bakeryManagerSummaryModel");
		// code...
	}
    public function index(){
        $data=array();
        $this->view("bakery_manager/summaryView",$data);
        // $this->getdetails();

    }


}



?>