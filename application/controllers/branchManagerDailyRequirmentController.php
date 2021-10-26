<?php 

/**
 * 
 */
class branchManagerDailyRequirmentController extends bakeItFramework
{
	
	function __construct()
	{
		// code...
	}

	public function index(){
		$data=array();
		$this->view("branchManager/dailyRequirement",$data);
	}
}

 ?>