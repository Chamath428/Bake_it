<?php 
	class profileController extends bakeItFramework
	{
		
		public function __construct()
		{
			$this->profileModel=$this->model("profileModel");
		}
		public function index()
		{
			$data=array();
			if (isset($_SESSION['islogged'])) {
				$customer_id=$_SESSION['customer_id'];
				$data=$this->profileModel->getCustomerData($customer_id);
				$this->view("customer/profile",$data);
			}	
		}
		public function updateIndex($message=[])
		{
			$data=array();
			$customer_id=$_SESSION['customer_id'];
			$data=$this->profileModel->getCustomerData($customer_id);
			if (isset($message['error']) && $message['error']!="") {
				$data['error']=$message['error'];
			}else $data['confirmation']=$message['confirmation'];
			// echo $data['confirmation'];
			$this->view("customer/profile",$data);
			
		}

		public function updateProfile(){
			$data['error']="";
			$customer_id=$_SESSION['customer_id'];

			//this preg_replace will remove all whitespace (including tabs and line ends)

			if(isset($_POST['firstname']))$firstname=preg_replace('/\s+/', '', $_POST['firstname']); 
			if(isset($_POST['lastname']))$lastname=preg_replace('/\s+/', '', $_POST['lastname']);
			if(isset($_POST['phonenumber']))$phonenumber=preg_replace('/\s+/', '', $_POST['phonenumber']);
			if(isset($_POST['email']))$email=preg_replace('/\s+/', '', $_POST['email']);
			if(isset($_POST['address1']))$adl1=preg_replace('/\s+/', '', $_POST['address1']);
			if(isset($_POST['address2']))$adl2=preg_replace('/\s+/', '', $_POST['address2']);
			if(isset($_POST['address3']))$adl3=preg_replace('/\s+/', '', $_POST['address3']);
			$currentPassword=preg_replace('/\s+/', '', $_POST['current-password']);
			$newPassword=preg_replace('/\s+/', '', $_POST['new-password']);
			$confirmPassword=preg_replace('/\s+/', '', $_POST['confirm-password']);

			if (isset($firstname) && $firstname=="") {
				$data['error']="First name is required!";
			}
			else if (isset($lastname) && $lastname=="") {
				$data['error']="Last name is required!";
			}
			else if (isset($phonenumber) && $phonenumber=="") {
				$data['error']="Phone Number is required!";
			}
			else if (isset($phonenumber) && strlen($phonenumber)<10) {
				$data['error']="Please enter a valid phone number.";
			}
			else if (isset($email) && $email!="" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$data['error']="Please enter a valid email address.";
			}
			elseif ($currentPassword!="" || $newPassword!="" || $confirmPassword!="") {
				if(!($this->profileModel->verfyPassword($customer_id,$currentPassword))){
					$data['error']="Current Password is wrong! Please check and enter again.";
				}else if ($newPassword!=$confirmPassword) {
					$data['error']="New password and Confirm password do not match. Please check and enter again.";
				}else if (strlen($newPassword)<8) {
					$data['error']="Password length should be 8 or more!";
				}
			}
			else if (isset($email) && $this->profileModel->checkEmail($customer_id,$email)) {
				$data['error']="The email is already used! Please enter different email.";
			}
			else if (isset($phonenumber) && $this->profileModel->checkPHoneNumber($customer_id,$phonenumber)) {
				$data['error']="Phone number is already used! Please enter different phone number.";
			}

			if ($data['error']=="") {
				$newData=array();
				if(isset($firstname))$newData['firstname']=$firstname;
				if(isset($lastname))$newData['lastname']=$lastname;
				if(isset($phonenumber))$newData['phonenumber']=$phonenumber;
				if(isset($email))$newData['email']=$email;
				if(isset($adl1))$newData['adl1']=$adl1;
				if(isset($adl2))$newData['adl2']=$adl2;
				if(isset($adl3))$newData['adl3']=$adl3;
				if($newPassword!="")$newData['newPassword']=$newPassword;
				$this->profileModel->update($customer_id,$newData);
				$data['confirmation']="Profile Updated Succesfully!";
				$this->updateIndex($data);
			}
			else{
				$this->updateIndex($data);
			}
		}
	}

 ?>