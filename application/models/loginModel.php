<?php 
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
				return 1;
			}else{
				$sql2="SELECT
						job_role
					FROM
						staff
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			if (mysqli_num_rows($res2)>0) {
				$row1=mysqli_fetch_assoc($res2);
				return $row1['job_role'];
			}
		}return 0;
		
	}


		public function checkPassword($username,$password){
			$uername=$this->db->real_escape_string($username);
			$sql3="SELECT
						password
					FROM
						registered_customer
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
			
			if (mysqli_num_rows($res3)>0) {
				    $row3=mysqli_fetch_assoc($res3);
				    if (password_verify($password, $row3['password'])) {
				    	return true;
				    }
			} 
			else {
				$sql4="SELECT
						password
					FROM
						staff
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
					$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));
					$row4=mysqli_fetch_assoc($res4);
					if (password_verify($password, $row4['password'])) {
						    return true;
					}
				}
			return false;
		}


		public function getCustomerId($username)
		{
			$customerData=array();
			$uername=$this->db->real_escape_string($username);
			$sql5="SELECT
						registered_customer.customer_id,
						registered_customer.contact_number,
						customer.first_name,
						customer.last_name,
						customer.address1,
						customer.address2,
						customer.address3
					FROM
						registered_customer
					LEFT JOIN
						customer
					ON 
						registered_customer.customer_id=customer.customer_id
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));
			while ($row5=mysqli_fetch_assoc($res5)) {
				$customerData['customer_id']=$row5['customer_id'];
				$customerData['contact_number']=$row5['contact_number'];
				$customerData['first_name']=$row5['first_name'];
				$customerData['last_name']=$row5['last_name'];
				$customerData['address1']=$row5['address1'];
				$customerData['address2']=$row5['address2'];
				$customerData['address3']=$row5['address3'];
			}
			
			// $customer_id=$row5['customer_id'];

			return $customerData;
		}

		public function getStaffId($username)
		{
			$uername=$this->db->real_escape_string($username);
			$sql6="SELECT
						staff_id
					FROM
						staff
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
			$row6=mysqli_fetch_assoc($res6);
			$staff_id=$row6['staff_id'];
			return $staff_id;
		}


		public function getBranchId($role,$staff_id)
		{			
				$sql7="SELECT
					branch_id
				FROM ".
					$role.
				" WHERE
				staff_id =".$staff_id;
				
			$res7=mysqli_query($this->db,$sql7) or die('8->'.mysqli_error($this->db));
			$row7=mysqli_fetch_assoc($res7);
			$branch_id=$row7['branch_id'];
			return $branch_id;
		}

		public function updateAvailability($staff_id,$availability){

			$availability=$this->db->real_escape_string($availability);
			// $availability = $_POST['availability'];
			 $sql7 ="UPDATE
						delivery_person
					SET
						availability = $availability
					 WHERE
						staff_id = ".$staff_id;
			$res7 =mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));
			  
		 }

		 // following two functions are for search for the user when changing the password. As it could be both customer and staff member we have to search them separately

		 public function checkRegisteredCustomer($phonenumber){
		 	$phonenumber=$this->db->real_escape_string($phonenumber);
			$sql8="SELECT
						customer_id
					FROM
						registered_customer
					WHERE
						contact_number = ".'"'.$phonenumber.'"';
			$res8=mysqli_query($this->db,$sql8) or die('8->'.mysqli_error($this->db));
			if (mysqli_num_rows($res8)>0) {
				$row8=mysqli_fetch_assoc($res8);
				return $row8['customer_id'];
			}
			return 0;
		 }

		 public function checkStaff($phonenumber){
		 	$phonenumber=$this->db->real_escape_string($phonenumber);
		 	$sql9="SELECT
						staff_id
					FROM
						staff
					WHERE
						contact_number = ".'"'.$phonenumber.'"';
			$res9=mysqli_query($this->db,$sql9) or die('9->'.mysqli_error($this->db));
			if (mysqli_num_rows($res9)>0) {
				$row9=mysqli_fetch_assoc($res9);
				return $row9['staff_id'];
			}
			return 0;
		}

		public function changePassword($tableName,$columnName,$password,$id){
			$sql10="UPDATE ".$tableName." 
					SET
						password=".'"'.$password.'"'."  
					WHERE ".$columnName."=".$id;

			$res10=mysqli_query($this->db,$sql10) or die('10->'.mysqli_error($this->db));
		}
		
	}

 ?>