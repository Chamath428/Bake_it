<?php

class walletController extends bakeItFramework
{
    function __construct()
	{
		$this->deliveryPersonWalletModel = $this->model("deliveryPersonWalletModel");
	}
    public function index(){
        $data=array();
        

        $totalDeliveries = $this->deliveryPersonWalletModel->getDeliveryListOfCurrentDay();
		$data[0] = $totalDeliveries;

        $totalAmountOfDeliveries = $this->deliveryPersonWalletModel->getTotalOfTotalAmount();
		$data[1] = $totalAmountOfDeliveries;
        
        $this->view("deliveryPerson/wallet",$data);
    }
}

?>