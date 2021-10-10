<?php 

	/**
	 * 
	 */
	class signupController extends bakeItFramework
	{
		
		public function __construct()
		{
			// code...
		}
		public function index(){
			$data=array();
			$this->view("customer/signup",$data);
		}
	}

 ?>