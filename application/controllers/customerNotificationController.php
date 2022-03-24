<?php 

	/**
	 * 
	 */
	class customerNotificationController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->customerNotificationModel=$this->model("customerNotificationModel");
		}

		public function markAsRead($notification_id){
			$this->customerNotificationModel->markAsRead($notification_id);
			$data['notifiactions']=$this->customerNotificationModel->gteNotification();
			$this->redirect("/myordersController");
		}
	}

 ?>