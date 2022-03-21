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
			$data['confirmation']="Account Created Succesfully. Please Login.";
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

		public function getOtpPage(){
			$this->view("customer/askMobileForForgetPassword");
		}

		public function submitForgetPassword(){
			$data['error']="";
			$phonenumber=preg_replace('/\s+/', '', $_POST['phonenumber']);
			$password=preg_replace('/\s+/', '', $_POST['new_password']);
			$confirmPassword=preg_replace('/\s+/', '', $_POST['confirm_password']);

			if ($phonenumber=="") {
				$data['error']="Phone Number is required!";
			}
			else if ($password=="") {
				$data['error']="Password can not be empty!";
			}
			else if ($confirmPassword=="") {
				$data['error']="Confirm Password can not be empty!";
			}
			else if(strlen($password)<8){
				$data['error']="Password length should be 8 or more!";
			}
			else if ($password != $confirmPassword) {
				$data['error']="Password and confirm password do not match!";
			}

			$data['phonenumber']=$phonenumber;
			if ($data['error']=="") {
				$data['password']=password_hash($password, PASSWORD_DEFAULT);

				$customer_id=$this->loginModel->checkRegisteredCustomer($data['phonenumber']);
				$staff_id=0;
				if ($customer_id==0) {
					$staff_id=$this->loginModel->checkStaff($data['phonenumber']);
				}
				if($customer_id==0 && $staff_id==0){
					$data['error']="No user found for the phone number!. Please check and try again";
					$this->view("customer/forgetPassword",$data);
				}
				else if($staff_id==0){
					$this->loginModel->changePassword("registered_customer","customer_id",$data['password'],$customer_id);
				}
				else if($customer_id==0){
					$this->loginModel->changePassword("staff","staff_id",$data['password'],$staff_id);
				}
				$data['confirmation']="Password changed succesfully. Please login using new password";
				unset($data['error']);
				$this->view("customer/login",$data);
			}
			else{
				$this->view("customer/forgetPassword",$data);
			}
		}


		public function sendOTP(){
			$phonenumber=preg_replace('/\s+/', '', $_POST['phonenumber']);
			$data['phonenumber']=$phonenumber;
			$otp=rand(1000,9999);
			// delete following line
			$otp=7788;

			$_SESSION['otp']=$otp;
			$_SESSION['otpStarts']=time();

			$user = "94768323569";
			$password = "1594";

			$text = urlencode(nl2br("Please enter OTP:".$otp,"\nThank you. Bake_it"));
			$to = $phonenumber;

			$baseurl ="http://www.textit.biz/sendmsg";
			$url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
			$ret = file($url);

			$res= explode(":",$ret[0]);

			//delete following line
			$res[0]="OK";

			if (trim($res[0])=="OK"){
				if (isset($_SESSION['otp']) && isset($_SESSION['otpStarts']) && (time()-$_SESSION['otpStarts']) < 120) {
					$this->view("customer/otpForgetPassword",$data);
				}
				else{
					unset($_SESSION['otp']);
					unset($_SESSION['otpStarts']);
					unset($_SESSION['password']);
					$data['error']="Your OTP Expired! Please try again.";
					$this->view("customer/login",$data);
				}
				
			}else{
				$data['error']="Something went wrong while sending the OTP! Please kindly try again later.";
				$this->view("customer/login",$data);
			}
		}

		public function verfyOtp(){
			$data['phonenumber']=$_POST['phonenumber'];
			if (!isset($_SESSION['otp'])) {
				$data['error']="Something went wrong while verifing the OTP! Please kindly try again later.";
				$this->view("customer/login",$data);
			}
			else if((time()-$_SESSION['otpStarts']) > 120){
				$data['error']="OTP Expired! Please kindly try again.";
				$this->view("customer/login",$data);
			}
			else if(isset($_SESSION['otp']) && $_POST['otp']==$_SESSION['otp']){

				unset($_SESSION['otp']);
				unset($_SESSION['otpStarts']);
				$this->view("customer/forgetPassword",$data);
			}else if(isset($_SESSION['otp']) && ($_POST['otp']!=$_SESSION['otp'])){
				$data['error']="OTP does not match! Try again";
				$this->view("customer/otpForgetPassword",$data);
			}
			
		}


		public function logout(){
            
			if($_SESSION['role_number'] == 6){
				$this->loginModel->updateAvailability($_SESSION['staff_id'],2);
			}
			session_destroy();
			$this->redirect("homeController");

		}
		
	}

 ?>