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
		$categoryItems=$this->branchManagerDailyRequirementModel->getCategoryItems($category_id);
		$selectedCategory=$category_id;
		$data[1]=$selectedCategory;
		$data[2]=$categories;
		$data[3]=$categoryItems;
		$this->view("branchManager/dailyRequirement",$data);
	}


	public function getItems(){
		$category_id=$_POST['categoryId'];
		// $this->index($category_id);
		$this->redirect("branchManagerDailyRequirmentController/index/".$category_id);
		// echo $category_id; 
	}

	public function updateIndex($category_id,$message=[]){
		$categories=$this->branchManagerDailyRequirementModel->getCategories();
		$catrgoryItems=$this->branchManagerDailyRequirementModel->getCategoryItems($category_id);
		$selectedCategory=$category_id;
		$data[1]=$selectedCategory;
		$data[2]=$categories;
		$data[3]=$catrgoryItems;
		$this->viewWithMessage("branchManager/dailyRequirement",$data,$message);

	}

	public function updateItems(){
		$updateData=array();
		for ($i=0; $i <$_POST['row-count'] ; $i++) { 
			$temp['item_id']=$_POST['itemId-'.$i];
			$temp['daily_requirement']=$_POST['daily_requirement-'.$i];
			$updateData[$i]=$temp;
		}

		$this->branchManagerDailyRequirementModel->updateQuantity($updateData);
		$message['confirmation']="Daily Requirement updated Successfully.";
		$category_id=$this->branchManagerDailyRequirementModel->getCategoryId($temp['item_id']);
		$this->updateIndex($category_id,$message);
	}	

	public function dailyRequirementCategoryChart($category_id){
		$categoryItemList = $this->branchManagerDailyRequirementModel->getCategoryItems($category_id);
		$data[0] = $categoryItemList;
		
		$categoryItemListChart = $this->branchManagerDailyRequirementModel->getCategoryItemsForChart($category_id);
		$data[1] = $categoryItemListChart;

		echo json_encode($data);
		// $this->view("branchManager/dailyRequirement");

	}

}

 ?>