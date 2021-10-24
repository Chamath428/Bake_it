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
	}

 ?>