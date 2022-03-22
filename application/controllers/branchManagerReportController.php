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
		$branchSalesoftheMonth =$this->branchManagerReportModel->getBranchSalesoftheMonth();
		$data[0]=$branchSalesoftheMonth;
		echo json_encode($branchSalesoftheMonth);
		
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