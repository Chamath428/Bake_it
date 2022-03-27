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

	public function getTotalSalesReport(){
		$data=array();
		$this->view("branchManager/totalSalesReports",$data);
	}

	public function getItemWiseSalesReport(){
		$data=array();
		$this->view("branchManager/itemWiseSalesReports",$data);
	}

	public function salesReports()
	{
		$data = array();
		$data['error'] ="";
		$data['branches'] = $this->branchManagerReportModel->getBranchList();
		$data['years'] = $this->branchManagerReportModel->getYearList();
		$this->view("branchManager/totalSalesReports",$data);
	}
	public function itemReports()
	{
		$data = array();
		$data['error'] ="";
		$data['branches'] = $this->branchManagerReportModel->getBranchList();
		$data['years'] = $this->branchManagerReportModel->getYearList();
		$data['categories'] = $this->branchManagerReportModel->getCategoryList();
		$this->view("branchManager/itemWiseSalesReports",$data);
	}
	public function generateDailySalesReport()
	{
		$data['error'] = "";
		$data['date'] = date('Y-m-d', strtotime($_POST['date']));
		$data['reportType'] = $_POST['reportType'];
		$data['branch_id'] = $_POST['branch_id'];
		if ($data['branch_id'] != 0) {
			$data['branch_name'] = $this->branchManagerReportModel->getBranchName($data['branch_id']);
		}
		$salesReportDetails = array();

		if ($data['date'] == "0-0-0") {
			$data['error'] = "Please enter valid time period";
			$data['branches'] = $this->branchManagerReportModel->getBranchList();
			$data['years'] = $this->branchManagerReportModel->getYearList();
			$this->view("branchManager/totalSalesReports",$data);

		} elseif ($data['date'] != 0 && $data['branch_id'] == 0) {
			//all branches daily sales report
			$salesReportDetails = $this->branchManagerReportModel->dailyTotalSalesReport($data['date']);
			$data[1] = $salesReportDetails;
			$this->view("branchManager/totalSalesReportView", $data);
		} else {
			//selected branch daily sales report
			$salesReportDetails = $this->branchManagerReportModel->dailyBranchSalesReport($data['date'], $data['branch_id']);
			$data[1] = $salesReportDetails;
			$this->view("branchManager/totalSalesReportView", $data);
		}
	}
	public function generateWeeklySalesReport()
	{
		$data['error'] = "";
		$data['week'] = $_POST['week'];
		$data['month'] = $_POST['month'];
		$data['year'] = $_POST['year'];
		$data['reportType'] = $_POST['reportType'];
		$data['branch_id'] = $_POST['branch_id'];
		if ($data['branch_id'] != 0) {
			$data['branch_name'] = $this->branchManagerReportModel->getBranchName($data['branch_id']);
		}

		if ($data['week'] == 0 && $data['month'] == 0 && $data['year'] == 0) {
			$data['error'] = "Please enter valid time period";
			$data['years'] = $this->branchManagerReportModel->getYearList();
			$this->view("branchManager/totalSalesReports",$data);

		} elseif ($data['week'] != 0 && $data['month'] != 0 && $data['year'] != 0 && $data['branch_id'] == 0) {
			//all baranches selected weekly sales report
			$salesReportDetails = $this->branchManagerReportModel->weeklyTotalSalesReport($data['week'], $data['month'], $data['year']);
			$data[1] = $salesReportDetails;
			$this->view("branchManager/totalSalesReportView", $data);

		} else {
			//selected branch selected weekly sales report
			$salesReportDetails = $this->branchManagerReportModel->weeklyBranchSalesReport($data['branch_id'], $data['week'], $data['month'], $data['year']);
			$data[1] = $salesReportDetails;
			$this->view("branchManager/totalSalesReportView", $data);
		}
	}
	public function generateMonthlySalesReport()
	{
		$data['error'] = "";
		$data['month'] = $_POST['month'];
		$data['year'] = $_POST['year'];
		$data['reportType'] = $_POST['reportType'];
		$data['branch_id'] = $_POST['branch_id'];
		if ($data['branch_id'] != 0) {
			$data['branch_name'] = $this->branchManagerReportModel->getBranchName($data['branch_id']);
		}
		if ($data['month'] == 0 && $data['year'] == 0) {
			$data['error'] = "Please enter valid time period";
			$data['years'] = $this->branchManagerReportModel->getYearList();
			$this->view("branchManager/totalSalesReports",$data);

		} elseif ($data['month'] != 0 && $data['year'] != 0 && $data['branch_id'] == 0) {
			//all brnaches selected monthly sales report
			$salesReportDetails = $this->branchManagerReportModel->monthlyTotalSalesReport($data['month'], $data['year']);
			$data[1] = $salesReportDetails;
			$this->view("branchManager/totalSalesReportView", $data);

		} else {
			//selected branch selected monthly sales report
			$salesReportDetails = $this->branchManagerReportModel->monthlyBranchSalesReport($data['branch_id'], $data['month'], $data['year']);
			$data[1] = $salesReportDetails;
			$this->view("branchManager/totalSalesReportView", $data);
		}
	}
	public function generateDailyCategorySalesReport()
	{
		// echo $_POST['category_id'];
		$data['error'] = "";
		$data['date'] = date('Y-m-d', strtotime($_POST['date']));
		$data['reportType'] = $_POST['reportType'];
		$data['branch_id'] = $_POST['branch_id'];
		$data['category_id'] = $_POST['category_id'];

		if ($data['branch_id'] != 0) {
			$data['branch_name'] = $this->branchManagerReportModel->getBranchName($data['branch_id']);
		}
		if ($data['category_id'] != 0) {
			$data['category_name'] = $this->branchManagerReportModel->getCategoryName($data['category_id']);
		}
		$categorySalesReportDetails = array();

		if ($data['date'] == "0-0-0" || ($data['branch_id'] == 0 && $data['category_id'] == 0)) {
			$data['error'] = "Please select branch/category and valid time period";
			$data['categories'] = $this->branchManagerReportModel->getCategoryList();
			$this->view("branchManager/itemWiseSalesReports",$data);

		} elseif ($data['date'] != 0 && $data['branch_id'] != 0 && $data['category_id'] == 0) {
			//selected branch all category selected daily sales report
			$categorySalesReportDetails = $this->branchManagerReportModel->dailyBranchTotalCategorySalesReport($data['date'], $data['branch_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("branchManager/itemWiseSalesReportsView", $data);

		} elseif ($data['date'] != 0 && $data['branch_id'] == 0 && $data['category_id'] != 0) {
			//selected category all brnaches selected daily sales report
			$categorySalesReportDetails = $this->branchManagerReportModel->dailyAllBranchCategorySalesReport($data['date'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("branchManager/itemWiseSalesReportsView", $data);

		} else {
			//selected branch selected category selected daily sales report
			$categorySalesReportDetails = $this->branchManagerReportModel->dailyBranchCategorySalesReport($data['date'], $data['branch_id'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("branchManager/itemWiseSalesReportsView", $data);
		}
	}
	public function generateWeeklyCategorySalesReport()
	{
		$data['error'] = "";
		$data['week'] = $_POST['week'];
		$data['month'] = $_POST['month'];
		$data['year'] = $_POST['year'];
		$data['reportType'] = $_POST['reportType'];
		$data['branch_id'] = $_POST['branch_id'];
		$data['category_id'] = $_POST['category_id'];
		if ($data['branch_id'] != 0) {
			$data['branch_name'] = $this->branchManagerReportModel->getBranchName($data['branch_id']);
		}
		if ($data['category_id'] != 0) {
			$data['category_name'] = $this->branchManagerReportModel->getCategoryName($data['category_id']);
		}

		$categorySalesReportDetails = array();

		if (($data['week'] == 0 || $data['month'] == 0 || $data['year'] == 0) && $data['branch_id'] == 0 && $data['category_id'] == 0) {
			$data['error'] = "Please select branch/category and valid time period";
			$data['categories'] = $this->branchManagerReportModel->getCategoryList();
			$data['years'] = $this->branchManagerReportModel->getYearList();
			$this->view("branchManager/itemWiseSalesReports",$data);

		} elseif ($data['week'] != 0 && $data['month'] != 0 && $data['year'] != 0 && $data['branch_id'] != 0 && $data['category_id'] == 0) {
			//selected week selected branch all category sales report
			$categorySalesReportDetails = $this->branchManagerReportModel->weeklyBranchTotalCategorySalesReport($data['week'], $data['month'], $data['year'], $data['branch_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("branchManager/itemWiseSalesReportsView", $data);

		} elseif ($data['week'] != 0 && $data['month'] != 0 && $data['year'] != 0 &&  $data['branch_id'] == 0 && $data['category_id'] != 0) {
			//selected week selected category all branches sales report
			$categorySalesReportDetails = $this->branchManagerReportModel->weeklyAllBranchCategorySalesReport($data['week'], $data['month'], $data['year'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("branchManager/itemWiseSalesReportsView", $data);

		} else {
			//selected week selected branch selected category sales report
			$categorySalesReportDetails = $this->branchManagerReportModel->weeklyBranchCategorySalesReport($data['week'], $data['month'], $data['year'], $data['branch_id'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("branchManager/itemWiseSalesReportsView", $data);
		}
	}
	public function generateMonthlyCategorySalesReport()
	{

		$data['error'] = "";
		$data['month'] = $_POST['month'];
		$data['year'] = $_POST['year'];
		$data['reportType'] = $_POST['reportType'];
		$data['branch_id'] = $_POST['branch_id'];
		$data['category_id'] = $_POST['category_id'];
		if ($data['branch_id'] != 0) {
			$data['branch_name'] = $this->branchManagerReportModel->getBranchName($data['branch_id']);
		}
		if ($data['category_id'] != 0) {
			$data['category_name'] = $this->branchManagerReportModel->getCategoryName($data['category_id']);
		}

		$categorySalesReportDetails = array();

		if (($data['month'] == 0 || $data['year'] == 0) && $data['category_id'] == 0) {
			$data['error'] = "Please select branch/category and valid time period";
			$data['categories'] = $this->branchManagerReportModel->getCategoryList();
			$data['years'] = $this->branchManagerReportModel->getYearList();
			$this->view("branchManager/itemWiseSalesReports",$data);

		// } elseif ($data['month'] != 0 && $data['year'] != 0 && $data['category_id'] == 0) {
		// 	//selected month selected branch all category sales report
		// 	$categorySalesReportDetails = $this->branchManagerReportModel->monthlyBranchTotalCategorySalesReport($data['month'], $data['year'], $data['branch_id']);
		// 	$data[1] = $categorySalesReportDetails;
		// 	$this->view("branchManager/totalSalesReportView", $data);

		// } elseif ($data['month'] != 0 && $data['year'] != 0 && $data['category_id'] != 0) {
		// 	//selected month selected category all branches sales report
		// 	$categorySalesReportDetails = $this->branchManagerReportModel->monthlyAllBranchCategorySalesReport($data['month'], $data['year'], $data['category_id']);
		// 	$data[1] = $categorySalesReportDetails;
		// 	$this->view("branchManager/totalSalesReportView", $data);

		} else {
			//selected month selected branch selected category sales report
			$categorySalesReportDetails = $this->branchManagerReportModel->monthlyBranchCategorySalesReport($data['month'], $data['year'], $data['branch_id'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("branchManager/itemWiseSalesReportsView", $data);
		}
	}


}

 ?>