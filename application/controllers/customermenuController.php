<?php 

	/**
	 * 
	 */
	class customermenuController extends bakeItFramework
	{
		
		function __construct()
		{
			// code...
		}

		public function index(){
			$data=array();
			$this->view("customer/menuItems",$data);
		}
	}

 ?>