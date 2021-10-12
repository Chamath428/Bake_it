<?php 

	/**
	 * 
	 */
	class loginModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function checkUserName($username){
			$uername=$this->db->real_escape_string($username);
			$sql1="SELECT
						customer_id
					FROM
						registered_customer
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			if (mysqli_num_rows($res1)>0) {
				return true;
			}else return false;
		}
		public function checkPassword($username,$password){
			$uername=$this->db->real_escape_string($username);
			$sql2="SELECT
						password
					FROM
						registered_customer
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			$row=mysqli_fetch_assoc($res2);
			if (password_verify($password, $row['password'])) {
				    return true;
				} else return false;
		}

		public function getCustomerId($username)
		{
			$uername=$this->db->real_escape_string($username);
			$sql3="SELECT
						customer_id
					FROM
						registered_customer
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res3=mysqli_query($this->db,$sql3) or die('1->'.mysqli_error($this->db));
			$row2=mysqli_fetch_assoc($res3);
			$customer_id=$row2['customer_id'];
			return $customer_id;
		}
	}

 ?>