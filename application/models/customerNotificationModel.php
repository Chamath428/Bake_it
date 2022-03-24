<?php 

/**
 * 
 */
class customerNotificationModel extends database
{
	
	function __construct()
	{
		$this->db=$this->dbcon();
	}

	public function gteNotification(){
		if (isset($_SESSION['islogged']) && $_SESSION['islogged']==1){
			$sqlNotification="SELECT
						*
					FROM
						customer_notification
					WHERE
						customer_id=".$_SESSION['customer_id']." AND
						status=1";

			$resNotification=mysqli_query($this->db,$sqlNotification) or die('2->'.mysqli_error($this->db));
			$i=0;
			$notifications=array();
			while ($rowNotification=mysqli_fetch_assoc($resNotification)) {
				$data['notification_id']=$rowNotification['notification_id'];
				$data['order_id']=$rowNotification['order_id'];
				$data['message']=$rowNotification['message'];
				$data['date']=$rowNotification['date'];
				$notifications[$i]=$data;
				$i++;
			}

			return $notifications;
			}

}

	public function markAsRead($notification_id){
		$sql1="UPDATE
					customer_notification
				SET
					status=0
				WHERE
					notification_id=".$notification_id;

		$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
	}
}

 ?>