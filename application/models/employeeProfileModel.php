<?php 

	/**
	 * 
	 */
	class employeeProfileModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function getEmployeeData($staff_id){
			$employeeData=array();

			$sql1="SELECT
						first_name,
						last_name,
						email,
						contact_number	
					FROM
						staff
					WHERE
						staff_id=".$staff_id;

			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			$row1=mysqli_fetch_assoc($res1);
			$employeeData['firstname']=$row1['first_name'];
			$employeeData['lastname']=$row1['last_name'];
			$employeeData['phonenumber']=$row1['contact_number'];
			if ($row1['email']!="")$employeeData['email']=$row1['email'];

			return $employeeData;
			
		}

		public function verfyPassword($staff_id,$currentPassword){

			$sql2="SELECT
						password
					FROM
						staff
					WHERE
						staff_id = ".$staff_id;
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			$row2=mysqli_fetch_assoc($res2);
			if (password_verify($currentPassword, $row2['password'])) {
				return true;
			}return false;
		}

		public function updatePassword($staff_id,$newPassword){
			$newPassword=password_hash($newPassword, PASSWORD_DEFAULT);
			$sql3="UPDATE
						staff
					SET
						password =".'"'.$newPassword.'"'.
				   "WHERE
				   		staff_id = ".$staff_id;
			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
		}
	}

 ?>