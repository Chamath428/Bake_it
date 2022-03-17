<?php 

/**
 * 
 */
class testController extends bakeItFramework
{
	
	function __construct()
	{
		// code...
	}

	public function index(){
		$this->view("customer/test");
	}

	public function test(){
		echo "awa";
	}
}

 ?>