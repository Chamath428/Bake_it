<?php 

	class loginController extends bakeItFramework
	{
		
		public function __construct()
		{
			$this->loginModel=$this->model("loginModel");
		}

		public function index(){
			$data=array();
			$this->view("customer/login",$data);
		}
		public function reindex(){
			$data=array();
			$data['confirmation']="Acount Created Succesfully. Please Login.";
			$this->view("customer/login",$data);
		}

		public function submit(){
			$data['error']="";
			$username=$_POST['username'];
			$password=$_POST['password'];
			$role_number=0;
			// $remember=$_POST['remember'];
			
			if ($username=="") {
				$data['error']="Please enter your Email or Phone number.";
			}
			else if ($password=="") {
				$data['error']="Please enter your password.";
			}
			else{

				$role_number=$this->loginModel->checkUserName($username);

				if ($role_number==0) {
				$data['error']="Wrong Email or Phone number! Please check and enter again.";
				}
				else if(!($this->loginModel->checkPassword($username,$password))){
					$data['error']="Wrong Password! Please check and enter again.";
				}
			}

			if ($data['error']=="") {
				if ($role_number==1) {
					$customerData=$this->loginModel->getCustomerId($username);
					$this->setSession("islogged",1);
					$this->setSession("role_number",$role_number);
					$this->setSession("customer_id",$customerData['customer_id']);
					$this->setSession("contact_number",$customerData['contact_number']);
					$this->setSession("first_name",$customerData['first_name']);
					$this->setSession("last_name",$customerData['last_name']);
					$this->setSession("address1",$customerData['address1']);
					$this->setSession("address2",$customerData['address2']);
					$this->setSession("address3",$customerData['address3']);
					$this->redirect("homeController");
				}else{
					$staff_id=$this->loginModel->getStaffId($username);
					if($role_number==4)$branch_id=$this->loginModel->getBranchId("branch_manager",$staff_id);
					else if($role_number==5)$branch_id=$this->loginModel->getBranchId("cashier",$staff_id);
					else if($role_number==6)$branch_id=$this->loginModel->getBranchId("delivery_person",$staff_id);
					$this->setSession("islogged",1);
					$this->setSession("role_number",$role_number);
					$this->setSession("staff_id",$staff_id);
					if(isset($branch_id))$this->setSession("branch_id",$branch_id);
					$this->redirect("dashboardController");
				}
			}else{
				$data['username']=$username;
				$this->view("customer/login",$data);
			}
		}

		public function logout(){
			session_destroy();
			$this->redirect("homeController");
		}
	}

 ?>