<?php 

	/**
	 * 
	 */
	class branchManagerMenuController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->menuModel=$this->model("menuModel");
		}

		public function index($category_id=1){
			$categories=$this->menuModel->getCategories();
			$catrgoryItems=$this->menuModel->getCategoryItems($category_id);
			$selectedCategory=$category_id;
			$data[1]=$selectedCategory;
			$data[2]=$categories;
			$data[3]=$catrgoryItems;
			$this->view("branchManager/menu",$data);
		}

		public function updateIndex($category_id,$message=[]){
			$categories=$this->menuModel->getCategories();
			$catrgoryItems=$this->menuModel->getCategoryItems($category_id);
			$selectedCategory=$category_id;
			$data[1]=$selectedCategory;
			$data[2]=$categories;
			$data[3]=$catrgoryItems;
			$this->viewWithMessage("branchManager/menu",$data,$message);
		}

		public function getItems(){
			$category_id=$_POST['categoryId'];
			// $this->index($category_id);
			$this->redirect("branchManagerMenuController/index/".$category_id);
			// echo $category_id;
		}

		public function updateItems(){
			$updateData=array();
			for ($i=0; $i <$_POST['row-count'] ; $i++) { 
				$temp['item_id']=$_POST['itemId-'.$i];
				$temp['quantity']=$_POST['quantity-'.$i];
				$updateData[$i]=$temp;
			}

			$this->menuModel->updateQuantity($updateData);
			$message['confirmation']="Menu updated Successfully.";
			$category_id=$this->menuModel->getCategoryId($temp['item_id']);
			$this->updateIndex($category_id,$message);
		}
	}

 ?>