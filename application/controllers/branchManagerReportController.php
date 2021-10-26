<?php 

/**
 * 
 */
class branchManagerReportController extends bakeItFramework
{
	
	function __construct()
	{
		// code...
	}

	public function index(){
		$data=array();
		$this->view("branchManager/overview",$data);
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