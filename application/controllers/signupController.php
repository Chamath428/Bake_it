<?php 

	/**
	 * 
	 */
	class signupController extends bakeItFramework
	{
		
		public function __construct()
		{
			$this->signupModel = $this->model('signupModel');
		}
		public function index(){
			$data=array();
			$this->view("customer/signup",$data);
		}

		public function submit(){
			$data['error']="";
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$phonenumber=$_POST['phonenumber'];
			$email=$_POST['email'];
			$password="";
			$adl1=$_POST['adl1'];
			$adl2=$_POST['adl2'];
			$adl3=$_POST['adl3'];
			if ($_POST['firstname']=="") {
				$data['error']="First name is required!";
			}
			else if ($_POST['lastname']=="") {
				$data['error']="Last name is required!";
			}
			else if ($_POST['phonenumber']=="") {
				$data['error']="Phone Number is required!";
			}
			else if (strlen($_POST['phonenumber'])<10) {
				$data['error']="Please enter a valid phone number.";
			}
			else if ($_POST['email']!="" && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$data['error']="Please enter a valid email address.";
			}
			else if($_POST['password']==""){
				$data['error']="Password is required!";
			}
			else if (strlen($_POST['password'])<8) {
				$data['error']="Password length should be 8 or more!";
			}
			else if ($_POST['confirmpassword']=="") {
				$data['error']="Please enter confirm password.";
			}
			else if ($_POST['password']!=$_POST['confirmpassword']) {
				$data['error']="Password and confirm password do not match!";
			}
			else if ($this->signupModel->checkEmail($_POST['email'])) {
				$data['error']="The email is already used! Please enter different email.";
			}
			else if ($this->signupModel->checkPHoneNumber($_POST['phonenumber'])) {
				$data['error']="Phone number is already used! Please enter different phone number.";
			}
			$data['firstname']=$firstname;
			$data['lastname']=$lastname;
			$data['phonenumber']=$phonenumber;
			$data['email']=$email;
			$data['adl1']=$adl1;
			$data['adl2']=$adl2;
			$data['adl3']=$adl3;
			if($data['error']==""){
				$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
				$data['password']=$password;
				$this->signupModel->insertUser($data);
				$this->redirect("loginController/reindex");
			}else{
				$this->view("customer/signup",$data);
			}
		}
	}

 ?>