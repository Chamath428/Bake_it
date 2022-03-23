<?php 

/**
 * 
 */
class testController extends bakeItFramework
{
	
	function __construct()
	{
		$this->testModel=$this->model("testModel");
	}

	public function index(){
		$data['notifiactions']=$this->testModel->gteNotification();
		$this->view("customer/test",$data);
	}

	public function test(){
		echo "awa";
	}
}

 ?>