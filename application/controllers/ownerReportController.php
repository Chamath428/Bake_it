<?php

class ownerReportController extends bakeItFramework
{

	function __construct()
	{
		$this->ownerReportsModel = $this->model("ownerReportsModel");
	}
	public function index()
	{
		$this->view("owner/overview");
	}
	public function getdetails(){
		$categorylist=$this->ownerReportsModel->getCategoryList();
		$data[0]=$categorylist;

		$branchlist=$this->ownerReportsModel->getBranchList();
		$data[3]=$branchlist;

		$branchSalesoftheMonth =$this->ownerReportsModel->getBranchSalesoftheMonth();
		$data[1]=$branchSalesoftheMonth;

		$categorySalesoftheMonth =$this->ownerReportsModel->getCategorySalesoftheMonth();
		$data[10]=$categorySalesoftheMonth;

		$bestCategoryoftheWeek =$this->ownerReportsModel->getBestCategoryoftheWeek();
		$data[2]=$bestCategoryoftheWeek;

		$bestCategory = $data[2][0]['category_id'];

        //branch 1
		$branch1SalesoftheYear =$this->ownerReportsModel->getBranch1SalesoftheYear();
		$data[4]=$branch1SalesoftheYear;
		//branch 2
		$branch2SalesoftheYear =$this->ownerReportsModel->getBranch2SalesoftheYear();
		$data[8]=$branch2SalesoftheYear;
		//branch 3
		$branch3SalesoftheYear =$this->ownerReportsModel->getBranch2SalesoftheYear();
		$data[9]=$branch3SalesoftheYear;

		$branchSalesoftheCurrentMonth =$this->ownerReportsModel->getBranchSalesoftheCurrentMonth();
		$data[5]=$branchSalesoftheCurrentMonth;

		$bestItemsoftheWeek =$this->ownerReportsModel->getBestItemSalesoftheWeek($bestCategory);
		$data[6]=$bestItemsoftheWeek;

		$itemsList =$this->ownerReportsModel->getBestCategoryItemList($bestCategory);
		$data[7]=$itemsList ;

		echo json_encode($data);
		
	}
	public function salesReports()
	{
		$data = array();
		$data['error'] ="";
		$data['branches'] = $this->ownerReportsModel->getBranchList();
		$data['years'] = $this->ownerReportsModel->getYearList();
		$this->view("owner/reportsTotal", $data);
	}
	public function itemReports()
	{
		$data = array();
		$data['error'] ="";
		$data['branches'] = $this->ownerReportsModel->getBranchList();
		$data['years'] = $this->ownerReportsModel->getYearList();
		$data['categories'] = $this->ownerReportsModel->getCategoryList();
		$this->view("owner/reportsItem", $data);
	}
	public function generateDailySalesReport()
	{
		$data['error'] = "";
		$data['date'] = date('Y-m-d', strtotime($_POST['date']));
		$data['reportType'] = $_POST['reportType'];
		$data['branch_id'] = $_POST['branch_id'];
		if ($data['branch_id'] != 0) {
			$data['branch_name'] = $this->ownerReportsModel->getBranchName($data['branch_id']);
		}
		$salesReportDetails = array();

		if ($data['date'] == "0-0-0") {
			$data['error'] = "Please enter valid time period";
			$data['branches'] = $this->ownerReportsModel->getBranchList();
			$data['years'] = $this->ownerReportsModel->getYearList();
			$this->view("owner/reportsTotal", $data);

		} elseif ($data['date'] != 0 && $data['branch_id'] == 0) {
			//all branches daily sales report
			$salesReportDetails = $this->ownerReportsModel->dailyTotalSalesReport($data['date']);
			$data[1] = $salesReportDetails;
			$this->view("owner/reportsTotalView", $data);
		} else {
			//selected branch daily sales report
			$salesReportDetails = $this->ownerReportsModel->dailyBranchSalesReport($data['date'], $data['branch_id']);
			$data[1] = $salesReportDetails;
			$this->view("owner/reportsTotalView", $data);
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
			$data['branch_name'] = $this->ownerReportsModel->getBranchName($data['branch_id']);
		}

		if ($data['week'] == 0 && $data['month'] == 0 && $data['year'] == 0) {
			$data['error'] = "Please enter valid time period";
			$data['branches'] = $this->ownerReportsModel->getBranchList();
			$data['years'] = $this->ownerReportsModel->getYearList();
			$this->view("owner/reportsTotal", $data);

		} elseif ($data['week'] != 0 && $data['month'] != 0 && $data['year'] != 0 && $data['branch_id'] == 0) {
			//all baranches selected weekly sales report
			$salesReportDetails = $this->ownerReportsModel->weeklyTotalSalesReport($data['week'], $data['month'], $data['year']);
			$data[1] = $salesReportDetails;
			$this->view("owner/reportsTotalView", $data);

		} else {
			//selected branch selected weekly sales report
			$salesReportDetails = $this->ownerReportsModel->weeklyBranchSalesReport($data['branch_id'], $data['week'], $data['month'], $data['year']);
			$data[1] = $salesReportDetails;
			$this->view("owner/reportsTotalView", $data);
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
			$data['branch_name'] = $this->ownerReportsModel->getBranchName($data['branch_id']);
		}
		if ($data['month'] == 0 && $data['year'] == 0) {
			$data['error'] = "Please enter valid time period";
			$data['branches'] = $this->ownerReportsModel->getBranchList();
			$data['years'] = $this->ownerReportsModel->getYearList();
			$this->view("owner/reportsTotal", $data);

		} elseif ($data['month'] != 0 && $data['year'] != 0 && $data['branch_id'] == 0) {
			//all brnaches selected monthly sales report
			$salesReportDetails = $this->ownerReportsModel->monthlyTotalSalesReport($data['month'], $data['year']);
			$data[1] = $salesReportDetails;
			$this->view("owner/reportsTotalView", $data);

		} else {
			//selected branch selected monthly sales report
			$salesReportDetails = $this->ownerReportsModel->monthlyBranchSalesReport($data['branch_id'], $data['month'], $data['year']);
			$data[1] = $salesReportDetails;
			$this->view("owner/reportsTotalView", $data);
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
			$data['branch_name'] = $this->ownerReportsModel->getBranchName($data['branch_id']);
		}
		if ($data['category_id'] != 0) {
			$data['category_name'] = $this->ownerReportsModel->getCategoryName($data['category_id']);
		}
		$categorySalesReportDetails = array();

		if ($data['date'] == "0-0-0" || ($data['branch_id'] == 0 && $data['category_id'] == 0)) {
			$data['error'] = "Please select branch/category and valid time period";
			$data['branches'] = $this->ownerReportsModel->getBranchList();
			$data['categories'] = $this->ownerReportsModel->getCategoryList();
			$this->view("owner/reportsItem", $data);

		} elseif ($data['date'] != 0 && $data['branch_id'] != 0 && $data['category_id'] == 0) {
			//selected branch all category selected daily sales report
			$categorySalesReportDetails = $this->ownerReportsModel->dailyBranchTotalCategorySalesReport($data['date'], $data['branch_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("owner/reportsItemView", $data);

		} elseif ($data['date'] != 0 && $data['branch_id'] == 0 && $data['category_id'] != 0) {
			//selected category all brnaches selected daily sales report
			$categorySalesReportDetails = $this->ownerReportsModel->dailyAllBranchCategorySalesReport($data['date'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("owner/reportsItemView", $data);

		} else {
			//selected branch selected category selected daily sales report
			$categorySalesReportDetails = $this->ownerReportsModel->dailyBranchCategorySalesReport($data['date'], $data['branch_id'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("owner/reportsItemView", $data);
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
			$data['branch_name'] = $this->ownerReportsModel->getBranchName($data['branch_id']);
		}
		if ($data['category_id'] != 0) {
			$data['category_name'] = $this->ownerReportsModel->getCategoryName($data['category_id']);
		}

		$categorySalesReportDetails = array();

		if (($data['week'] == 0 || $data['month'] == 0 || $data['year'] == 0) && $data['branch_id'] == 0 && $data['category_id'] == 0) {
			$data['error'] = "Please select branch/category and valid time period";
			$data['branches'] = $this->ownerReportsModel->getBranchList();
			$data['categories'] = $this->ownerReportsModel->getCategoryList();
			$data['years'] = $this->ownerReportsModel->getYearList();
			$this->view("owner/reportsItem", $data);

		} elseif ($data['week'] != 0 && $data['month'] != 0 && $data['year'] != 0 && $data['branch_id'] != 0 && $data['category_id'] == 0) {
			//selected week selected branch all category sales report
			$categorySalesReportDetails = $this->ownerReportsModel->weeklyBranchTotalCategorySalesReport($data['week'], $data['month'], $data['year'], $data['branch_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("owner/reportsItemView", $data);

		} elseif ($data['week'] != 0 && $data['month'] != 0 && $data['year'] != 0 &&  $data['branch_id'] == 0 && $data['category_id'] != 0) {
			//selected week selected category all branches sales report
			$categorySalesReportDetails = $this->ownerReportsModel->weeklyAllBranchCategorySalesReport($data['week'], $data['month'], $data['year'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("owner/reportsItemView", $data);

		} else {
			//selected week selected branch selected category sales report
			$categorySalesReportDetails = $this->ownerReportsModel->weeklyBranchCategorySalesReport($data['week'], $data['month'], $data['year'], $data['branch_id'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("owner/reportsItemView", $data);
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
			$data['branch_name'] = $this->ownerReportsModel->getBranchName($data['branch_id']);
		}
		if ($data['category_id'] != 0) {
			$data['category_name'] = $this->ownerReportsModel->getCategoryName($data['category_id']);
		}

		$categorySalesReportDetails = array();

		if (($data['month'] == 0 || $data['year'] == 0) && $data['branch_id'] == 0 && $data['category_id'] == 0) {
			$data['error'] = "Please select branch/category and valid time period";
			$data['branches'] = $this->ownerReportsModel->getBranchList();
			$data['categories'] = $this->ownerReportsModel->getCategoryList();
			$data['years'] = $this->ownerReportsModel->getYearList();
			$this->view("owner/reportsItem", $data);

		} elseif ($data['month'] != 0 && $data['year'] != 0 && $data['branch_id'] != 0 && $data['category_id'] == 0) {
			//selected month selected branch all category sales report
			$categorySalesReportDetails = $this->ownerReportsModel->monthlyBranchTotalCategorySalesReport($data['month'], $data['year'], $data['branch_id']);
			$data[1] = $categorySalesReportDetails;
			$this -> view("owner/reportsItemView",$data);

		} elseif ($data['month'] != 0 && $data['year'] != 0 &&  $data['branch_id'] == 0 && $data['category_id'] != 0) {
			//selected month selected category all branches sales report
			$categorySalesReportDetails = $this->ownerReportsModel->monthlyAllBranchCategorySalesReport($data['month'], $data['year'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this -> view("owner/reportsItemView",$data);

		} else {
			//selected month selected branch selected category sales report
			$categorySalesReportDetails = $this->ownerReportsModel->monthlyBranchCategorySalesReport($data['month'], $data['year'], $data['branch_id'], $data['category_id']);
			$data[1] = $categorySalesReportDetails;
			$this->view("owner/reportsItemView", $data);
		}
	}
}
