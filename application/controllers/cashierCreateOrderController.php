<?php 

	/**
	 * 
	 */
	class cashierCreateOrderController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->cashierCreateOrderModel=$this->model("cashierCreateOrderModel");
		}

		public function index(){
			$data=array();
			$data=$this->cashierCreateOrderModel->getItems(1);
			$this->view("cashier/createQuickOrder",$data);
		}

		public function createSpecialOrderCashier(){
			$data=array();
			$this->view("cashier/createOrderSpecial",$data);
		}

		public function createQuickOrder(){
			$data['error']="";
			$finalCount=$_POST['finalCount'];
			$itemData=array();
			for ($i=1; $i <=$finalCount ; $i++) { 
				$itemData[$_POST['item-id-'.$i]]=$_POST['quntity'.$i];
			}
			foreach ($itemData as $key => $value) {
				echo $key."->".$value;
			}
		}

	}

 ?>