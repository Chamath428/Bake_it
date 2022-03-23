<?php 
	
	/**
	 * 
	 */
	class testModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function getData(){
			$sql1="SELECT
						CONCAT(address1,',',address2,',',address3) AS address
					FROM
						customer
					WHERE
						customer_id=52";
			$res1=mysqli_query($this->db,$sql1)or die('1->'.mysqli_error($this->db));

			$row1=mysqli_fetch_assoc($res1);
			return $row1;
			echo $row1['address'];
		}
	}

 ?>