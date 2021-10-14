<?php 
	class profileModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function getCustomerData($customer_id){
			$customerData=array();

			$sql1="SELECT
						customer.first_name,
						customer.last_name,
						customer.address1,
						customer.address2,
						customer.address3,
						registered_customer.contact_number,
						registered_customer.email
					FROM
						customer
					LEFT JOIN
						registered_customer
					ON
						customer.customer_id=registered_customer.customer_id
					WHERE
						customer.customer_id=".$customer_id;

			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			$row1=mysqli_fetch_assoc($res1);
			$customerData['firstname']=$row1['first_name'];
			$customerData['lastname']=$row1['last_name'];
			if($row1['address1']!="")$customerData['address1']=$row1['address1'];
			if($row1['address2']!="")$customerData['address2']=$row1['address2'];
			if($row1['address3']!="")$customerData['address3']=$row1['address3'];
			$customerData['phonenumber']=$row1['contact_number'];
			if ($row1['email']!="")$customerData['email']=$row1['email'];

			return $customerData;
			
		}

		public function verfyPassword($customer_id,$currentPassword){

			$sql2="SELECT
						password
					FROM
						registered_customer
					WHERE
						customer_id = ".$customer_id;
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			$row2=mysqli_fetch_assoc($res2);
			if (password_verify($currentPassword, $row2['password'])) {
				return true;
			}return false;
		}

		public function checkPHoneNumber($customer_id,$phonenumber){
			$phonenumber=$this->db->real_escape_string($phonenumber);
			$sql3=	"SELECT 
						customer_id
				 	FROM
				 		registered_customer
				  	WHERE
				  		contact_number = ".'"'.$phonenumber.'"';
			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
			if (mysqli_num_rows($res3)>0) {
				$row3=mysqli_fetch_assoc($res3);
				if($row3['customer_id']==$customer_id)return false;
				else return true;
			}else return false;
		}
		
		public function checkEmail($customer_id,$email){
			$email=$this->db->real_escape_string($email);
			$sql4=	"SELECT 
						customer_id
				 	FROM
				 		registered_customer
				  	WHERE
				  		email = ".'"'.$email.'"';
			$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));
			if (mysqli_num_rows($res4)>0) {
				$row4=mysqli_fetch_assoc($res4);
				if($row4['customer_id']==$customer_id)return false;
				else return true;
			}else return false;
		}



		public function updateCustomerTable($column,$value,$customer_id){
			$sql5="UPDATE
						customer
					SET
						".$column."=".'"'.$value.'"'."
					WHERE
						customer_id=".$customer_id;
			$res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));
		}
		public function updateRegisteredCustomerTable($column,$value,$customer_id){
			$sql6="UPDATE
						registered_customer
					SET
						".$column."=".'"'.$value.'"'."
					WHERE
						customer_id=".$customer_id;
			$res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
		}


		public function update($customer_id,$newData=[]){

			//customer table
			if(isset($newData['firstname']))$this->updateCustomerTable("first_name",$this->db->real_escape_string($newData['firstname']),$customer_id);
			if(isset($newData['lastname']))$this->updateCustomerTable("last_name",$this->db->real_escape_string($newData['lastname']),$customer_id);
			if(isset($newData['adl1']))$this->updateCustomerTable("address1",$this->db->real_escape_string($newData['adl1']),$customer_id);
			if(isset($newData['adl2']))$this->updateCustomerTable("address2",$this->db->real_escape_string($newData['adl2']),$customer_id);
			if(isset($newData['adl3']))$this->updateCustomerTable("address3",$this->db->real_escape_string($newData['adl3']),$customer_id);

			//register customer table
			if(isset($newData['email']))$this->updateRegisteredCustomerTable("email",$this->db->real_escape_string($newData['email']),$customer_id);
			if(isset($newData['phonenumber']))$this->updateRegisteredCustomerTable("contact_number",$this->db->real_escape_string($newData['phonenumber']),$customer_id);
			if(isset($newData['newPassword'])){
				$password=password_hash($newData['newPassword'], PASSWORD_DEFAULT);
				$this->updateRegisteredCustomerTable("password",$password,$customer_id);
			}
		}

	}

 ?>