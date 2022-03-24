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

    public function getdetails(){
		$categorylist=$this->branchManagerReportModel->getCategories();
		$data[0]=$categorylist;
		$branchSalesoftheMonth =$this->branchManagerReportModel->getBranchSalesoftheMonth();
		$data[1]=$branchSalesoftheMonth;
		$bestCategoryoftheWeek =$this->branchManagerReportModel->getBestCategoryoftheWeek();
		$data[2]=$bestCategoryoftheWeek;

		$bestCategory = $data[2][0]['category_id'];

		// $bestItemsoftheWeek =$this->branchManagerReportModel->getBestItemSalesoftheWeek($data[2]['category_id']);
		// $data[3]=$bestItemsoftheWeek;

		$branchSalesoftheYear =$this->branchManagerReportModel->getBranchSalesoftheYear();
		$data[4]=$branchSalesoftheYear;

		$branchSalesoftheLastWeek =$this->branchManagerReportModel->getBranchSalesoftheLastWeek();
		$data[5]=$branchSalesoftheLastWeek;

		$bestItemsoftheWeek =$this->branchManagerReportModel->getBestItemSalesoftheWeek($bestCategory);
		$data[6]=$bestItemsoftheWeek;

		$itemsList =$this->branchManagerReportModel->getBestCategoryItemList($bestCategory);
		$data[7]=$itemsList ;

		// echo $data[2][0]['category_id'];
		echo json_encode($data);
		
	}
}



?>