<?php 

	/**
	 * 
	 */
	class customermenuController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->customerMenuModel=$this->model("customerMenuModel");
		}

		public function index(){
			$data=array();
			$this->view("customer/menuItems",$data);
		}

		public function getCategoryItems($category_id){
			$categoryItems=$this->customerMenuModel->getCategoryItems($_SESSION['branch_Id'],$category_id);
			$this->view("customer/menuItems",$categoryItems);
		}
	}

 ?>