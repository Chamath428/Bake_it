<?php 
	class createEmployeeAccountModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function checkPHoneNumber($phonenumber){
			$phonenumber=$this->db->real_escape_string($phonenumber);
			$sql1=	"SELECT 
						customer_id
				 	FROM
				 		registered_customer
				  	WHERE
				  		contact_number = ".'"'.$phonenumber.'"';
			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));

			$sql2=	"SELECT 
						staff_id
				 	FROM
				 		staff
				  	WHERE
				  		contact_number = ".'"'.$phonenumber.'"';
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));

			if (mysqli_num_rows($res1)>0 || mysqli_num_rows($res2)>0) {
				return true;
			}else return false;
		}
		
		public function checkEmail($email){
			$email=$this->db->real_escape_string($email);
			$sql3=	"SELECT 
						customer_id
				 	FROM
				 		registered_customer
				  	WHERE
				  		email = ".'"'.$email.'"';
			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));

			$email=$this->db->real_escape_string($email);
			$sql4=	"SELECT 
						staff_id
				 	FROM
				 		staff
				  	WHERE
				  		email = ".'"'.$email.'"';
			$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));

			if (mysqli_num_rows($res3)>0 || mysqli_num_rows($res4)>0) {
				return true;
			}else return false;
		}

		public function insertToUserTable($tableName,$staffId,$branchId){
			$sql7="INSERT INTO"
							.$tableName."(
											staff_id,
											branch_id)
							VALUES("
									.'"'.$staffId.'"'	.","
									.'"'.$branchId.'")';
			$res7=mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));
			echo "Done";
		}

		public function addEmployee($employeeData){
			$employeeData['firstname']=$this->db->real_escape_string($employeeData['firstname']);
			$employeeData['lastname']=$this->db->real_escape_string($employeeData['lastname']);
			$employeeData['phonenumber']=$this->db->real_escape_string($employeeData['phonenumber']);
			$employeeData['email']=$this->db->real_escape_string($employeeData['email']);
			$employeeData['job_role']=$this->db->real_escape_string($employeeData['job_role']);
			$employeeData['branch_Id']=$this->db->real_escape_string($employeeData['branch_Id']);

			$sql5="INSERT INTO
							staff(
									first_name,
									last_name,
									email,
									contact_number,
									password,
									job_role)
							VALUES("
									.'"'.$employeeData['firstname'].'"'		.","
									.'"'.$employeeData['lastname'].'"'		.","
									.'"'.$employeeData['email'].'"'			.","
									.'"'.$employeeData['phonenumber'].'"'	.","
									.'"'.$employeeData['password'].'"'	.","
									.'"'.$employeeData['job_role'].'")';

			$res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));

			$sql6= "SELECT LAST_INSERT_ID() AS last_id";
			$res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
			$row1=mysqli_fetch_assoc($res6);
			$last_id=$row1['last_id'];

			if ($employeeData['job_role']==4) {
				$this->insertToUserTable("branch_manager",$last_id,$employeeData['branch_Id']);
			}else if ($employeeData['job_role']==5) {
				$this->insertToUserTable("cashier",$last_id,$employeeData['branch_Id']);
			}
			else if ($employeeData['job_role']==6) {
				$this->insertToUserTable("delivery_person",$last_id,$employeeData['branch_Id']);
			}


		}
	}

 ?>