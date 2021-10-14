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
				echo $role_number;
				if ($role_number==1) {
					$customer_id=$this->loginModel->getCustomerId($username);
					$this->setSession("islogged",1);
					$this->setSession("role_number",$role_number);
					$this->setSession("customer_id",$customer_id);
					$this->redirect("homeController");
				}else{
					$staff_id=$this->loginModel->getStaffId($username);
					$this->setSession("islogged",1);
					$this->setSession("role_number",$role_number);
					$this->setSession("staff_id",$staff_id);
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