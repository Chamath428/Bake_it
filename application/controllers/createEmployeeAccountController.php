<?php 

	/**
	 * 
	 */
	class createEmployeeAccountController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->createEmployeeAccountModel=$this->model("createEmployeeAccountModel");
		}

		public function index(){
			$data=array();
			$this->view("owner/createAccount",$data);
		}

		public function createAccount(){
			$data['error']="";
			$firstname=preg_replace('/\s+/', '', $_POST['firs_tname']);
			$lastname=preg_replace('/\s+/', '', $_POST['last_name']);
			$password=preg_replace('/\s+/', '', $_POST['password']);
			$confirmPassword=preg_replace('/\s+/', '', $_POST['confirme_password']);
			$phonenumber=preg_replace('/\s+/', '', $_POST['phonenumber']);
			$email=preg_replace('/\s+/', '', $_POST['email']);
			$jobRole=preg_replace('/\s+/', '', $_POST['job_role']);
			$branchId=preg_replace('/\s+/', '', $_POST['branch_Id']);

			if ($firstname=="") {
				$data['error']="First name is required!";
			}
			else if ($lastname=="") {
				$data['error']="Last name is required!";
			}
			else if($password==""){
				$data['error']="Password is required!";
			}
			else if (strlen($password)<8) {
				$data['error']="Password length should be 8 or more!";
			}
			else if ($confirmPassword=="") {
				$data['error']="Please enter confirm password.";
			}
			else if ($password!=$confirmPassword) {
				$data['error']="Password and confirm password do not match!";
			}
			else if ($phonenumber=="") {
				$data['error']="Phone Number is required!";
			}
			else if (strlen($phonenumber)<1) {
				$data['error']="Please enter a valid phone number.";
			}
			else if ($email!="" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$data['error']="Please enter a valid email address.";
			}
			else if ($this->createEmployeeAccountModel->checkPHoneNumber($phonenumber)) {
				$data['error']="Phone number is already used! Please enter different phone number.";
			}
			else if ($email!="" && $this->createEmployeeAccountModel->checkEmail($email)) {
				$data['error']="The email is already used! Please enter different email.";
			}
			
			$data['firstname']=$firstname;
			$data['lastname']=$lastname;
			$data['phonenumber']=$phonenumber;
			$data['email']=$email;
			$data['job_role']=$jobRole;
			$data['branch_Id']=$branchId;

			if ($data['error']=="") {
				$password=password_hash($password, PASSWORD_DEFAULT);
				$data['password']=$password;
				$this->createEmployeeAccountModel->addEmployee($data);
				$data['confirmation']="Emplyee account created successfully!";
				$this->view("owner/createAccount",$data);
			}
			else{
				

				$this->view("owner/createAccount",$data);
			}
		}
	}

 ?>