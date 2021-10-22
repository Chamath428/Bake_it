<?php 

	/**
	 * 
	 */
	class orderForEventController extends bakeItFramework
	{
		
		function __construct()
		{
			// code...
		}

		public function index(){
			$data=array();
			$this->view("customer/eventHome",$data);
		}

		public function getMenu(){
			$data=array();
			$this->view("customer/eventMenu",$data);
		}
	}

 ?>