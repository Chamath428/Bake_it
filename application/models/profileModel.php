<?php 

	/**
	 * 
	 */
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
	}

 ?>