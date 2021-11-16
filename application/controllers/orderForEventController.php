<?php 

	/**
	 * 
	 */
	class orderForEventController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->customerMenuModel=$this->model("customerMenuModel");
		}

		public function index(){
			$data=array();
			$this->view("customer/eventHome",$data);
		}

		public function getMenu(){
			$data=array();
			$this->view("customer/eventMenu",$data);
		}

		public function getSpecialCategoryItems($category_id){
			$categoryItems=$this->customerMenuModel->getSpecialCategoryItems($category_id);
			$this->view("customer/eventMenu",$categoryItems);
		}
	}

 ?>