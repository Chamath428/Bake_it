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

		public function gteNotification(){
			$sql2="SELECT
						*
					FROM
						customer_notification
					WHERE
						customer_id=14 AND status=1";

			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			$i=0;
			$notifications=array();
			while ($row2=mysqli_fetch_assoc($res2)) {
				$data['notification_id']=$row2['notification_id'];
				$data['order_id']=$row2['order_id'];
				$data['message']=$row2['message'];
				$data['date']=$row2['date'];
				$notifications[$i]=$data;
				$i++;
			}

			return $notifications;

		}
	}

 ?>