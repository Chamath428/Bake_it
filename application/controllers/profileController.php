<?php 

	/**
	 * 
	 */
	class profileController extends bakeItFramework
	{
		
		public function __construct()
		{
			// code...
		}
		public function index()
		{
			$data=array();
			$this->view("customer/profile",$data);
		}
	}

 ?>