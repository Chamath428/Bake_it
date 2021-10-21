<?php 

	class profileEmployeeController extends bakeItFramework
	{
		
		function __construct()
		{
			// code
		}

		public function index(){
			$data=array();
			$this->view("deliveryPerson/profile",$data);
		}
	}

 ?>