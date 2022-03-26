<?php 

	/**
	 * 
	 */
	class customermenuController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->customerMenuModel=$this->model("customerMenuModel");
			$this->customerNotificationModel=$this->model("customerNotificationModel");
		}

		public function index(){
			$data=array();
			$this->view("customer/menuItems",$data);
		}

		public function getCategoryItems($category_id){

			if (isset($_SESSION['branch_Id'])) {
				$data[1]=$this->customerMenuModel->getCategoryItems($_SESSION['branch_Id'],$category_id);
				$data[2]=$this->customerMenuModel->getCategories();
				$data['category_name']=$this->customerMenuModel->getCategoryName($category_id);
				$data['notifiactions'] = $this->customerNotificationModel->gteNotification();
				$this->view("customer/menuItems",$data);
			}
			else{
				header("Location:".BASEURL."/customerBranchSelectController/index/".$category_id);
			}
			
		}
	}

 ?>