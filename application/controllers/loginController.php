<?php 

	/**
	 * 
	 */
	class loginController extends bakeItFramework
	{
		
		public function __construct()
		{
			// code...
		}
		public function index(){
			$data=array();
			$this->view("customer/login",$data);
		}
	}

 ?>