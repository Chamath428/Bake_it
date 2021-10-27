<?php 

	class ownerReportController extends bakeItFramework
	{
		
		function __construct()
		{
			//code
		}

		public function index(){
			$data=array();
            $this->view("owner/overview");			
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