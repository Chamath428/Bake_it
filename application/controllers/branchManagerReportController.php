<?php 

/**
 * 
 */
class branchManagerReportController extends bakeItFramework
{
	
	function __construct()
	{
		$this->branchManagerReportModel=$this->model("branchManagerReportModel");
	}

	public function index(){
		// $branchSalesoftheMonth =$this->branchManagerReportModel->getBranchSalesoftheMonth();
		// $data[0]=$branchSalesoftheMonth;
		$this->view("branchManager/overview");
		// echo json_encode($data);
	}

	public function getdetails(){
		$categorylist=$this->branchManagerReportModel->getCategories();
		$data[0]=$categorylist;
		$branchSalesoftheMonth =$this->branchManagerReportModel->getBranchSalesoftheMonth();
		$data[1]=$branchSalesoftheMonth;
		echo json_encode($data);
		
	}

	public function getTotalSalesReport(){
		$data=array();
		$this->view("branchManager/totalSalesReports",$data);
	}

	public function getItemWiseSalesReport(){
		$data=array();
		$this->view("branchManager/itemWiseSalesReports",$data);
	}
}

 ?>