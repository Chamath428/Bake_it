<?php 

	/**
	 * 
	 */
	class menuController extends bakeItFramework
	{
		
		function __construct()
		{
			$this->menuModel=$this->model("menuModel");
		}

		public function index($category_id=1){
			$categories=$this->menuModel->getCategories();
			$catrgoryItems=$this->menuModel->getCategoryItems($category_id);
			$data[1]=$categories;
			$data[2]=$catrgoryItems;
			$this->view("branchManager/menu",$data);
		}
	}

 ?>