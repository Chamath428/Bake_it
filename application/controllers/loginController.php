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
			// $remember=$_POST['remember'];
			
			if ($username=="") {
				$data['error']="Please enter your Email or Phone number.";
			}
			else if ($password=="") {
				$data['error']="Please enter your password.";
			}
			else if (!($this->loginModel->checkUserName($username))) {
				$data['error']="Wrong Email or Phone number! Please check and enter again.";
			}
			else if(!($this->loginModel->checkPassword($username,$password))){
				$data['error']="Wrong Password! Please check and enter again.";
			}
			$data['username']=$username;
			if ($data['error']=="") {
				$customer_id=$this->loginModel->getCustomerId($username);
				
			}else{
				$this->view("customer/login",$data);
			}
		}
	}

 ?>