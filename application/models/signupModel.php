<?php 

	class signupModel extends database
	{
		function __construct()
		{
			// $GLOBALS['db'] = mysqli_connect($this->host,$this->user,$this->password,$this->database);
			// if($GLOBALS['db'] === false)
   //      {
   //          die("ERROR: Could not connect. " . mysqli_connect_error());
   //      }

			$this->db=$this->dbcon();
			// $sql = "INSERT INTO branch VALUES (5, 'dd','ww')";
   //     		// $res=mysqli_query($GLOBALS['db'],$sql) or die('-1'.mysqli_error($GLOBALS['db']));
   //     		$res=mysqli_query($this->db,$sql) or die('-1'.mysqli_error($this->db));
		}

		public function checkPHoneNumber($phonenumber){
			$sql1=	"SELECT 
						customer_id
				 	FROM
				 		registered_customer
				  	WHERE
				  		contact_number = ".'"'.$phonenumber.'"';
			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			if (mysqli_num_rows($res1)>0) {
				return true;
			}else return false;
		}
		public function checkEmail($email){
			$sql2=	"SELECT 
						email
				 	FROM
				 		registered_customer
				  	WHERE
				  		email = ".'"'.$email.'"';
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			if (mysqli_num_rows($res2)>0) {
				return true;
			}else return false;
		}
		public function insertUser($userData){
			$sql3="	INSERT INTO
						customer(
								 first_name,
								 last_name,
								 address1,
								 address2,
								 address3,
								 customer_type
								)
						VALUES  ("
								.'"'.$userData['firstname'].'"' 	.","
								.'"'.$userData['lastname'].'"' 		.","
								.'"'.$userData['adl1'].'"' 			.","
								.'"'.$userData['adl2'].'"' 			.","
								.'"'.$userData['adl3'].'"' 			.",
								 1)";

			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));

			//Following query to get the last inserted id
			$sql4= "SELECT LAST_INSERT_ID() AS last_id";
			$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));
			$row=mysqli_fetch_assoc($res4);
			$last_id=$row['last_id'];

			$sql5="	INSERT INTO
						registered_customer(
											contact_number,
											email,
											password,
											customer_id)
									VALUES("
											.'"'.$userData['phonenumber'].'"'		.","
											.'"'.$userData['email'].'"'				.","
											.'"'.$userData['password'].'"'			.","
												.$last_id.")";

			$res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($thi->db));
		}


	}

 ?>

