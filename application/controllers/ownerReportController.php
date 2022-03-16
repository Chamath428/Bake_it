<?php 

	class ownerReportController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->ownerReportsModel = $this->model("ownerReportsModel");

		}

		public function index(){
			$data=array();
            $branch_id = $_POST('branch_id');
            $branchSalesOfYear = $this -> ownerReportsModel -> branchSalesOfYearOverview($branch_id);
			$data[0] = $branchSalesOfYear;
			echo "<input type='hidden' id= 'jan' value = $data[0]['jan'] >";
                echo "<input type='hidden' id= 'feb' value = '$feb' >";
                echo "<input type='hidden' id= 'march' value = '$march' >";
                echo "<input type='hidden' id= 'april' value = '$april' >";
                echo "<input type='hidden' id= 'may' value = '$may' >";
                echo "<input type='hidden' id= 'june' value = '$june' >";
                echo "<input type='hidden' id= 'july' value = '$july' >";
                echo "<input type='hidden' id= 'aug' value = '$aug' >";
                echo "<input type='hidden' id= 'sep' value = '$sep' >";
                echo "<input type='hidden' id= 'oct' value = '$oct' >";
                echo "<input type='hidden' id= 'nov' value = '$nov' >";
                echo "<input type='hidden' id= 'dec' value = '$dec' >";

            $this->view("owner/overview");			
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