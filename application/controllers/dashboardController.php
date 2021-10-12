<?php 

	/**
	 * 
	 */
	class dashboardController extends bakeItFramework
	{
		
		function __construct()
		{
			//code
		}

		public function index(){
			$data=array();
			$this->view("deliveryPerson/dashboardDP",$data);
		}
	}

 ?>