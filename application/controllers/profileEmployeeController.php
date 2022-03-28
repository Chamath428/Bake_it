<?php 

	class profileEmployeeController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->employeeProfileModel=$this->model("employeeProfileModel");
		}

		public function index(){
			$data=array();
			if (isset($_SESSION['islogged'])) {
				$staff_id=$_SESSION['staff_id'];
				$data=$this->employeeProfileModel->getEmployeeData($staff_id);
			}
			switch ($_SESSION['role_number']) {
				case '2':
					$this->view("owner/profile",$data);
					break;
				case '3':
					$this->view("bakery_manager/profile",$data);
					break;
				case '4':
					$this->view("branchManager/profile1",$data);
					break;
				case '5':
					$this->view("cashier/profile",$data);
					break;
				case '6':
					$this->view("deliveryPerson/profile",$data);
					break;
				
				default:
					// code...
					break;
			}
			
		}

		public function updateIndex($message=[]){
			$data=array();
			if (isset($_SESSION['islogged'])) {
				$staff_id=$_SESSION['staff_id'];
				$data=$this->employeeProfileModel->getEmployeeData($staff_id);
			}

			switch ($_SESSION['role_number']) {
				case '2':
					$this->viewWithMessage("owner/profile",$data,$message);
					break;
				case '3':
					$this->viewWithMessage("bakery_manager/profile",$data,$message);
					break;
				case '4':
					$this->viewWithMessage("branchManager/profile1",$data,$message);
					break;
				case '5':
					$this->view("cashier/profile",$data,$message);
					break;
				case '6':
					$this->viewWithMessage("deliveryPerson/profile",$data,$message);
					break;
				
				default:
					// code...
					break;
			}
		}

		public function updatePassword(){
			$data['error']="";
			$staff_id=$_SESSION['staff_id'];
			$currentPassword=preg_replace('/\s+/', '', $_POST['current-password']);
			$newPassword=preg_replace('/\s+/', '', $_POST['new-password']);
			$confirmPassword=preg_replace('/\s+/', '', $_POST['confirm-password']);

			if ($currentPassword!="" || $newPassword!="" || $confirmPassword!="") {
				if(!($this->employeeProfileModel->verfyPassword($staff_id,$currentPassword))){
					$data['error']="Current Password is wrong! Please check and enter again.";
				}else if ($newPassword!=$confirmPassword) {
					$data['error']="New password and Confirm password do not match. Please check and enter again.";
				}else if (strlen($newPassword)<8) {
					$data['error']="Password length should be 8 or more!";
				}
			}

			if ($data['error']=="") {
				$this->employeeProfileModel->updatePassword($staff_id,$newPassword);
				$data['confirmation']="Password Updated Succesfully!";
				$this->updateIndex($data);
			}
			else{
				$this->updateIndex($data);
			}
		}
	}

 ?>