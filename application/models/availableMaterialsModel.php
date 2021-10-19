<?php 

/**
 * 
 */
class availableMaterialsModel extends database
{
	
	function __construct()
	{
		$this->db=$this->dbcon();
	}

	public function getMaterials(){
		$materialData=[];
		$i=0;
		$sql1="SELECT
					rawitem_id,
					rawitem_name,
					stock_amount,
					measure_unit
				FROM
					raw_material_inventory";
		$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
		while($row1=mysqli_fetch_assoc($res1)){
			$data['rawitem_id']=$row1['rawitem_id'];
			$data['rawitem_name']=$row1['rawitem_name'];
			$data['stock_amount']=$row1['stock_amount'];
			$data['measure_unit']=$row1['measure_unit'];
			$materialData[$i]=$data;
			$i++;
		}
		return $materialData;
	}
}

 ?>