<?php 

// This controller is for delivery person to handle his deliveries

/**
 * 
 */
class deliveryPersonDeliveriesController extends bakeItFramework
{
	
	function __construct()
	{
		$this->deliveryPersonDeliveriesModel = $this->model("deliveryPersonDeliveriesModel");
	}

	public function index(){
        $data=array();
	    $totalDeliveriesofDay=$this->deliveryPersonDeliveriesModel->countDeliveriesofDay();
		$data[0]=$totalDeliveriesofDay;

		$totalCompletedDeliveriesofDay=$this->deliveryPersonDeliveriesModel->countCompletedDeliveriesofDay();
		$data[1]=$totalCompletedDeliveriesofDay;

		$deliveriesTable=$this->deliveryPersonDeliveriesModel -> getOngoingDeliveriesTable();
		$data[2]=$deliveriesTable;

		$this->view("deliveryPerson/ongoingDeliveries",$data);
	}

	public function getDeliveryOverview(){
		$data=array();

		$totalDeliveries = $this->deliveryPersonDeliveriesModel ->countTotalDeliveries();
		$data[0] = $totalDeliveries;

		$totalDeliveriesofWeek = $this -> deliveryPersonDeliveriesModel -> countTotalDeliveriesofWeek();
		$data[1] = $totalDeliveriesofWeek;

		$totalDeliveriesofMonth = $this -> deliveryPersonDeliveriesModel -> countTotalDeliveriesofMonth();
		$data[2] = $totalDeliveriesofMonth;
		
		$this->view("deliveryPerson/deliveryHistory",$data);
	}

	public function getOrderDetails($order_id){
		 $data=array();

	     $deliveryDetails=$this->deliveryPersonDeliveriesModel ->getDeliverryDetails($order_id);
		 $data[0]=$deliveryDetails;

		 if($deliveryDetails['customer_type']==1){

			$registerdCustomerContactDetails = $this->deliveryPersonDeliveriesModel ->getRegisterdCustomerContactDetails($order_id);
			$data[1] = $registerdCustomerContactDetails;
		 }
         else{
            $unregisterdCustomerContactDetails = $this->deliveryPersonDeliveriesModel ->getUnregisterdCustomerContactDetails($order_id);
		    $data[1] =  $unregisterdCustomerContactDetails;
		 }

		 $menuDetails = $this->deliveryPersonDeliveriesModel ->getMenuDetails($order_id);
		 $data[2] = $menuDetails;
         
		
		  
		$this->view("deliveryPerson/deliveryDetails",$data);
	}
    public function acceptDeliveries($order_id){

	    $order_status = $this -> deliveryPersonDeliveriesModel -> updateOrderStatus($order_id);
		$this->index();

	}
	public function rejectDeliveries($order_id){

		$reject_delivery = $this -> deliveryPersonDeliveriesModel -> deleteDeliveryPersonID($order_id);
		$reject_accepted_delivery = $this -> deliveryPersonDeliveriesModel -> updateAcceptedOrderStatus($order_id);
        $this->index();
	}
	public function getCompletedDeliveriesTable($order_id){

		$data=array();

		$CompletedDeliveriesTable=$this->deliveryPersonDeliveriesModel -> getCompletedDeliveriesTable($order_id);
		$data[0]=$CompletedDeliveriesTable;

		$this->view("deliveryPerson/deliveryHistory",$data);
	}

		
	
}

 ?>