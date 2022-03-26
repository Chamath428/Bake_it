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
		$categories = $this->bakeryManagerSummaryModel->getCategoriesForViews();
		$data[0] = $categories;

        $this->view("bakery_manager/summaryView",$data);

        // $this->view("bakery_manager/summaryView",$data);
        // $this->getdetails();

    }


}



?>