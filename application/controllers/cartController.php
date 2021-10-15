<?php 

	class cartController extends bakeItFramework
	{
		
		public function __construct()
		{
			// code...
		}
		public function index(){
			$data=array();
			$data['pagename']="cart";
			$this->view("customer/cart",$data);
		}
	}

 ?>