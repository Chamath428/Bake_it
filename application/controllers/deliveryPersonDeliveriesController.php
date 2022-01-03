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

		$DeliveriesTable=$this->deliveryPersonDeliveriesModel -> getOngoingDeliveriesTable();
		$data[2]=$DeliveriesTable;

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

	public function getOrderDetails(){
		$data=array();

		$DeliverryDetails=$this->deliveryPersonDeliveriesModel ->getDeliverryDetails();
		$data[0]=$DeliverryDetails;
		

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