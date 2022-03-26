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

		public function insertToUserTable($tableName,$staffId,$branchId){
			$sql7="INSERT INTO "
							.$tableName."(
											staff_id,
											branch_id)
							VALUES("
									.$staffId	.","
									.$branchId.')';
			$res7=mysqli_query($this->db,$sql7) or die('7->'.mysqli_error($this->db));
		}

		public function searchEmployee($jobRole,$branchId){
			$i=0;
			$returnData=[];

			//When user selected any branches and set a specific job role
			if ($branchId==0 && $jobRole!=7) {

					$sql8="SELECT
								CONCAT(first_name,' ',last_name) AS fullName,
								staff_id
							FROM
								staff
							WHERE
								job_role=".$jobRole;

					$res8=mysqli_query($this->db,$sql8) or die('8->'.mysqli_error($this->db));
					while($row1=mysqli_fetch_assoc($res8)){
						$data['fullName']=$row1['fullName'];
						$data['staff_id']=$row1['staff_id'];
						$returnData[$i]=$data;
						$i++;
					}
					return $returnData;
				}

			//When user selected any branch and select all job role
			else if($branchId==0 && $jobRole==7){

					$sql9="SELECT
								CONCAT(first_name,' ',last_name) AS fullName,
								staff_id
							FROM
								staff
							WHERE
								job_role!=2";

					$res9=mysqli_query($this->db,$sql9) or die('9->'.mysqli_error($this->db));
					while($row2=mysqli_fetch_assoc($res9)){
						$data['fullName']=$row2['fullName'];
						$data['staff_id']=$row2['staff_id'];
						$returnData[$i]=$data;
						$i++;
					}
					return $returnData;
			}

			//When user seleceted bakery manager
			else if($branchId==4){
				$sql10="SELECT
								CONCAT(first_name,' ',last_name) AS fullName,
								staff_id
							FROM
								staff
							WHERE
								job_role=3";

					$res10=mysqli_query($this->db,$sql10) or die('10->'.mysqli_error($this->db));
					while($row3=mysqli_fetch_assoc($res10)){
						$data['fullName']=$row3['fullName'];
						$data['staff_id']=$row3['staff_id'];
						$returnData[$i]=$data;
						$i++;
					}
					return $returnData;
			}

			else{
				switch($jobRole){
					case '4':
						return($this->branchesAndJobRoles("branch_manager",$branchId));
						break;
					case '5':
						return($this->branchesAndJobRoles("cashier",$branchId));
						break;
					case '6':
						return($this->branchesAndJobRoles("delivery_person",$branchId));
						break;
					default:
						return($this->branchesAndAllJobRoles($branchId));

				}
			}
		}

		//When user selected a branch and a job role
		public function branchesAndJobRoles($tableName,$branchId){
			$i=0;
			$returnData=[];
			$sql11="SELECT ".$tableName.".staff_id,
							     CONCAT(staff.first_name,' ',staff.last_name) AS fullName

							FROM ".$tableName."
							LEFT JOIN
								staff
							ON ".$tableName.".staff_id=staff.staff_id
							WHERE branch_id=".$branchId;
			$res11=mysqli_query($this->db,$sql11) or die('11->'.mysqli_error($this->db));

			while($row5=mysqli_fetch_assoc($res11)){
						$data['fullName']=$row5['fullName'];
						$data['staff_id']=$row5['staff_id'];
						$returnData[$i]=$data;
						$i++;
			}
			return $returnData;

		}

		//When user selected a branch and all the job roles
		public function branchesAndAllJobRoles($branchId)
		{
			$i=0;
			$returnData=[];
			$sql12="SELECT 
							branch_manager.staff_id,
							CONCAT(staff.first_name,' ',staff.last_name) AS fullName

						FROM 
							branch_manager
						LEFT JOIN
							staff
						ON  branch_manager.staff_id=staff.staff_id
						WHERE
							branch_id=".$branchId;
			$res12=mysqli_query($this->db,$sql12) or die('12->'.mysqli_error($this->db));

			while($row5=mysqli_fetch_assoc($res12)){
						$data['fullName']=$row5['fullName'];
						$data['staff_id']=$row5['staff_id'];
						$returnData[$i]=$data;
						$i++;
			}

			// ---------------------------------------------------

			$sql13="SELECT 
							cashier.staff_id,
							CONCAT(staff.first_name,' ',staff.last_name) AS fullName

						FROM 
							cashier
						LEFT JOIN
							staff
						ON  cashier.staff_id=staff.staff_id
						WHERE
							branch_id=".$branchId;
			$res13=mysqli_query($this->db,$sql13) or die('13->'.mysqli_error($this->db));

			while($row6=mysqli_fetch_assoc($res13)){
						$data['fullName']=$row6['fullName'];
						$data['staff_id']=$row6['staff_id'];
						$returnData[$i]=$data;
						$i++;
			}

			// ---------------------------------------------------

			$sql14="SELECT 
							delivery_person.staff_id,
							CONCAT(staff.first_name,' ',staff.last_name) AS fullName

						FROM 
							delivery_person
						LEFT JOIN
							staff
						ON  delivery_person.staff_id=staff.staff_id
						WHERE
							branch_id=".$branchId;
			$res14=mysqli_query($this->db,$sql14) or die('14->'.mysqli_error($this->db));

			while($row7=mysqli_fetch_assoc($res14)){
						$data['fullName']=$row7['fullName'];
						$data['staff_id']=$row7['staff_id'];
						$returnData[$i]=$data;
						$i++;
			}
			return $returnData;

	}
	public function getBranchList(){
        $branchData=array();
        $i=0;
        $sql8="SELECT
                    branch_id,
                    branch_name
                FROM
                    branch";

        $res8=mysqli_query($this->db,$sql8) or die('8->'.mysqli_error($this->db));
        while ($row8=mysqli_fetch_assoc($res8)) {
            $data['branch_id']=$row8['branch_id'];
            $data['branch_name']=$row8['branch_name'];
            $branchData[$i]=$data;
            $i++;
        }
        return $branchData;
    }
}

 ?>