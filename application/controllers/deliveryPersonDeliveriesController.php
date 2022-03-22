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

		$data['date'] = date('Y-m-d', strtotime($_POST['date']));
		$completedDeliveriesTable = $this -> deliveryPersonDeliveriesModel ->getCompletedDeliveriesTable($data['date']);
		$data[3] = $completedDeliveriesTable;
		
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
         
		 $subTotal = $this->deliveryPersonDeliveriesModel ->getSubTotal($order_id);
		 $data[3] = $subTotal;
		  
		 $paidAmount = $this->deliveryPersonDeliveriesModel ->getPaidAmount($order_id);
		 $data[4] = $paidAmount;
         
		 $tax = 100.00;
		 $data['paid_amount'] = $_POST['paid_amount'];
		 $balanceAmount = $data[3] +$tax - $data['paid_amount'];
		 $data[5] = $balanceAmount;

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
	 public function getCompletedDeliveriesTable(){
          
		$data['date'] = date('Y-m-d', strtotime($_POST['date']));
		$completedDeliveriesTable = $this -> deliveryPersonDeliveriesModel ->getCompletedDeliveriesTable($data['date']);
		$data[3] = $completedDeliveriesTable;

		$this->view("deliveryPerson/deliveryHistory",$data);
	 }
	 public function completeDelivery($order_id){

		// $data['order_status'] = $_POST['complete_delivery'];
		$this -> deliveryPersonDeliveriesModel -> updateOrderStatusAsCompleted($order_id);

	 }
	
	
}

 ?>