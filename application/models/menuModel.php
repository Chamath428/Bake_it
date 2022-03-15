<?php 

	/**
	 * 
	 */			
	class menuModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function getCategories(){
			$categoryData=array();
			$i=0;
			$sql1="SELECT
						category_id,
						category_name
					FROM
						menu_category";

			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			while($row1=mysqli_fetch_assoc($res1)){
				$data['category_id']=$row1['category_id'];
				$data['category_name']=$row1['category_name'];
				$categoryData[$i]=$data;
				$i++;
			}
			return $categoryData;
		}

		public function getCategoryItems($category_id=1){
			$menuId=$_SESSION['branch_id'];
			$itemData=array();
			$i=0;
			$sql2="SELECT
						item_id,
						item_name,
						quantity,
						price
					FROM
						menu
					WHERE
						category_id =".'"'.$category_id.'"'." AND 
						menu_id = ".'"'.$menuId.'"';
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			while ($row2=mysqli_fetch_assoc($res2)) {
				$data['item_id']=$row2['item_id'];
				$data['item_name']=$row2['item_name'];
				$data['quantity']=$row2['quantity'];
				$data['price']=$row2['price'];
				$itemData[$i]=$data;
				$i++;
			}
			return $itemData;
		}

		public function updateQuantity($updateData=[]){
			$branch_id=$_SESSION['branch_id'];
			foreach ($updateData as $key => $value) {
				$sql3="UPDATE
							menu
						SET
							quantity=".$value['quantity']."
						WHERE
							item_id=".$value['item_id']." AND
							branch_id=".$branch_id;
				$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
			}
		}

		public function getCategoryId($itemId){
			$sql4="SELECT
						category_id
					FROM
						menu
					WHERE
						item_id=".$itemId;
			$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));
			$row1=mysqli_fetch_assoc($res4);
			return $row1['category_id'];
		}
	}

 ?>