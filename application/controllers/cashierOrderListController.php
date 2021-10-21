<?php 

	class cashierOrderListController extends bakeItFramework
	{
		
		function __construct()
		{
		
		}

		public function index(){
			$data=$this->availableMaterialsModel->getMaterials();
			$this->view("bakery_manager/Available_Materials",$data);
		}

		public function getAddStock(){
			$data=array();
			$this->view("bakery_manager/add_stock",$data);
		}

	}

 ?>