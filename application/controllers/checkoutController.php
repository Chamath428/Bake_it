<?php 

	/**
	 * 
	 */
	class checkoutController extends bakeItFramework
	{
		
		public function __construct()
		{
			// code...
		}
		public function index (){
			$data=array();
			if (isset($_SESSION['quick_cart'])) {
				$this->view("/customer/checkout",$data);
			}
			else $this->view("customer/cart",$data);
		}
	}

 ?>