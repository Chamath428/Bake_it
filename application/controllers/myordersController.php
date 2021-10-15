<?php 

	/**
	 * 
	 */
	class myordersController extends bakeItFramework
	{
		
		public function __construct()
		{
			// code...
		}
		public function index(){
			 $data=array();
			 $this->view("customer/myorders",$data);
		}
	}

 ?>