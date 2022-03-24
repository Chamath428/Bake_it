	<?php 

	/**
	 * 
	 */
	class orderForEventController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->customerMenuModel=$this->model("customerMenuModel");
			$this->customerNotificationModel=$this->model("customerNotificationModel");
		}

		public function index(){
			$data['notifiactions'] = $this->customerNotificationModel->gteNotification();
			$this->view("customer/eventHome",$data);
		}

		public function getMenu(){
			$data=array();
			$this->view("customer/eventMenu",$data);
		}

		public function getSpecialCategoryItems($category_id){
			$data[1]=$this->customerMenuModel->getSpecialCategoryItems($category_id);
			$data['notifiactions'] = $this->customerNotificationModel->gteNotification();
			$this->view("customer/eventMenu",$data);
		}
	}

 ?>