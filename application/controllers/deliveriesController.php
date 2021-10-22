<?php 

// This controller is for delivery person to handle his deliveries

/**
 * 
 */
class deliveriesController extends bakeItFramework
{
	
	function __construct()
	{
		// code...
	}

	public function index(){
		$data=array();
		$this->view("deliveryPerson/ongoingDeliveries",$data);
	}

	public function getDeliveryOverview(){
		$data=array();
		$this->view("deliveryPerson/deliveryHistory",$data);
	}

	public function getOrderDetails(){
		$data=array();
		$this->view("deliveryPerson/deliveryDetails",$data);
	}
	
	public function testing(){
		$data=array();
		$this->view("deliveryPerson/OngoingDeliveryDetails",$data);
	}
}

 ?>