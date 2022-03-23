<?php 

	/**
	 * 
	 */
	class homeModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}
		public function getBranch($branch_id){
			$sql1="SELECT
						branch_name
					FROM
						branch
					WHERE
						branch_id=".$branch_id;
			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			$row1=mysqli_fetch_assoc($res1);
			return $row1['branch_name'];
		}

		
	}

 ?>