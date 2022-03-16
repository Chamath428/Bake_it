<?php 

	class ownerReportController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->ownerReportsModel = $this->model("ownerReportsModel");

		}

		public function index(){
			$data=array();

	        $branch_id=$_POST['branch_id'];          
			$branchSalesOfYear = $this -> ownerReportsModel -> branchSalesOfYearOverview($branch_id);
			$data[0] = $branchSalesOfYear;

            $this->view("owner/overview",$data);			
		}
		public function acceptDeliveries($order_id){

			$order_status = $this -> deliveryPersonDeliveriesModel -> updateOrderStatus($order_id);
			$this->index();
	
		}
		public function salesReports(){
			$data = array();
			$this -> view("owner/reportsTotal");
		}
		public function itemReports(){
			$data = array();
			$this -> view("owner/reportsItem");
		}
	}

 ?>