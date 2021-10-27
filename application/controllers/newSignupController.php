<?php 

	/**
	 * 
	 */
	class newSignupController extends bakeItFramework
	{
		
		public function __construct()
		{
			$this->signupModel = $this->model('signupModel');
		}
		public function index(){
			$data=array();
			$this->view("customer/signup",$data);
		}

		public function getOtpPage(){
			$this->view("customer/otpPage");
		}

		public function submit(){
			$data['error']="";

			//this preg_replace will remove all whitespace (including tabs and line ends)

			$firstname=preg_replace('/\s+/', '', $_POST['firstname']);
			$lastname=preg_replace('/\s+/', '', $_POST['lastname']);
			$phonenumber=preg_replace('/\s+/', '', $_POST['phonenumber']);
			$email=preg_replace('/\s+/', '', $_POST['email']);
			$password="";
			$adl1=preg_replace('/\s+/', '', $_POST['adl1']);
			$adl2=preg_replace('/\s+/', '', $_POST['adl2']);
			$adl3=preg_replace('/\s+/', '', $_POST['adl3']);
			if ($_POST['firstname']=="") {
				$data['error']="First name is required!";
			}
			else if ($_POST['lastname']=="") {
				$data['error']="Last name is required!";
			}
			else if ($_POST['phonenumber']=="") {
				$data['error']="Phone Number is required!";
			}
			else if (strlen($_POST['phonenumber'])!=10) {
				$data['error']="Please enter a valid phone number.";
			}
			else if ($_POST['email']!="" && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$data['error']="Please enter a valid email address.";
			}
			else if($_POST['password']==""){
				$data['error']="Password is required!";
			}
			else if (strlen(preg_replace('/\s+/', '', $_POST['password']))<8) {
				$data['error']="Password length should be 8 or more!";
			}
			else if ($_POST['confirmpassword']=="") {
				$data['error']="Please enter confirm password.";
			}
			else if ($_POST['password']!=$_POST['confirmpassword']) {
				$data['error']="Password and confirm password do not match!";
			}
			else if ($_POST['email']!="" && $this->signupModel->checkEmail($_POST['email'])) {
				$data['error']="The email is already used! Please enter different email.";
			}
			else if ($this->signupModel->checkPHoneNumber($_POST['phonenumber'])) {
				$data['error']="Phone number is already used! Please enter different phone number.";
			}
			$_SESSION['firstname']=$data['firstname']=$firstname;
			$_SESSION['lastname']=$data['lastname']=$lastname;
			$_SESSION['phonenumber']=$data['phonenumber']=$phonenumber;
			$_SESSION['email']=$data['email']=$email;
			$_SESSION['adl1']=$data['adl1']=$adl1;
			$_SESSION['adl2']=$data['adl2']=$adl2;
			$_SESSION['adl3']=$data['adl3']=$adl3;
			$_SESSION['password']=password_hash($_POST['password'], PASSWORD_DEFAULT);
			if($data['error']==""){
				$this->sendOTP($phonenumber);

			}else{
				$this->view("customer/signup",$data);
			}
		}

		public function sendOTP($phonenumber){
			$otp=rand(1000,9999);
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

			if (trim($res[0])=="OK"){
				if (isset($_SESSION['otp']) && isset($_SESSION['otpStarts']) && (time()-$_SESSION['otpStarts']) < 120) {
					$this->view("customer/otpPage");
				}
				else{
					unset($_SESSION['otp']);
					unset($_SESSION['otpStarts']);
					unset($_SESSION['password']);
					$data['error']="Your OTP Expired! Please try again.";
					$this->view("customer/signup",$data);
				}
				
			}else{
				$data['error']="Something went wrong while sending the OTP! Please kindly try again later.";
				$this->view("customer/signup",$data);
			}
		}

		public function verfyOtp(){
			if (!isset($_SESSION['otp'])) {
				$data['error']="Something went wrong while verifing the OTP! Please kindly try again later.";
				$this->view("customer/signup",$data);
			}
			else if((time()-$_SESSION['otpStarts']) > 120){
				$data['error']="OTP Expired! Please kindly try again.";
				$this->view("customer/signup",$data);
			}
			else if(isset($_SESSION['otp']) && $_POST['otp']==$_SESSION['otp']){
				$data=array();
				$data['firstname']=$_SESSION['firstname'];
				$data['lastname']=$_SESSION['lastname'];
				$data['phonenumber']=$_SESSION['phonenumber'];
				$data['email']=$_SESSION['email'];
				$data['adl1']=$_SESSION['adl1'];
				$data['adl2']=$_SESSION['adl2'];
				$data['adl3']=$_SESSION['adl3'];
				$data['password']=$_SESSION['password'];
				$this->signupModel->insertUser($data);

				unset($_SESSION['otp']);
				unset($_SESSION['otpStarts']);
				unset($_SESSION['password']);


				$this->redirect("loginController/reindex");
			}else if(isset($_SESSION['otp']) && ($_POST['otp']!=$_SESSION['otp'])){
				$data['error']="OTP does not match! Try again";
				$this->view("customer/otpPage",$data);
			}
			
		}
	}

 ?>