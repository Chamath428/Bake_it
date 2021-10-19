<?php 

	class rawMaterialController extends bakeItFramework
	{
		
		function __construct()
		{
			// code...
		}

		public function index(){
			$data=array();
			$this->view("bakery_manager/Available_Materials",$data);
		}

		public function getAddStock(){
			$data=array();
			$this->view("bakery_manager/add_stock",$data);
		}

		public function getSummary(){
			$data=array();
			$this->view("bakery_manager/summary",$data);
		}
	}

 ?>