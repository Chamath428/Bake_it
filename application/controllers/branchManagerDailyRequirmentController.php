<?php 

/**
 * 
 */
class branchManagerDailyRequirmentController extends bakeItFramework
{
	
	function __construct()
	{
		$this->branchManagerDailyRequirementModel=$this->model("branchManagerDailyRequirementModel");
	}

	public function index($category_id=1){
		$categories=$this->branchManagerDailyRequirementModel->getCategories();
		$catrgoryItems=$this->branchManagerDailyRequirementModel->getCategoryItems($category_id);
		$selectedCategory=$category_id;
		$data[1]=$selectedCategory;
		$data[2]=$categories;
		$data[3]=$catrgoryItems;
		$this->view("branchManager/dailyRequirement",$data);
	}


	public function getItems(){
		$category_id=$_POST['categoryId'];
		// $this->index($category_id);
		$this->redirect("branchManagerDailyRequirmentController/index/".$category_id);
		// echo $category_id;
	}



}

 ?>