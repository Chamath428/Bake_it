<?php

class walletController extends bakeItFramework
{
    function __construct()
	{
		// code...
	}
    public function index(){
        $data=array();
        $this->view("deliveryPerson/wallet",$data);
    }
}

?>