<?php 

	/**
	 * 
	 */
	class customerBranchSelectModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function getBranches(){
			$branchData=array();
			$i=0;
			$sql1="SELECT
						branch_id,
						branch_name
					FROM
						branch";

			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			while ($row1=mysqli_fetch_assoc($res1)) {
				$data['branch_id']=$row1['branch_id'];
				$data['branch_name']=$row1['branch_name'];
				$branchData[$i]=$data;
				$i++;
			}
			return $branchData;
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