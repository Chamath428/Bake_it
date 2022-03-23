<?php

class bakeryManagerDailyRequirementController extends bakeItFramework
{
    function __construct()
	{
        $this->bakeryManagerDailyRequirementModel = $this->model("bakeryManagerDailyRequirementModel");
		// code...
	}
    public function index($outlet_id = 1, $category_id = 1){
        $data=array();

        $outlet = $this->bakeryManagerDailyRequirementModel->selectOutlet();
        $categories = $this->bakeryManagerDailyRequirementModel->selectCategory();
        $menuItems = $this->bakeryManagerDailyRequirementModel->getItemLists($outlet_id, $category_id);
        $data[0] = $outlet;
        $data[1] = $categories;
        $data[2] = $menuItems;
        $data[3] = $outlet_id;
        $data[4] = $category_id;
        $this->view("bakery_manager/dailyRequirment",$data);
    }

    public function getMenuItems()
    {
        $outlet_id = $_POST['outletId'];
        $category_id = $_POST['categoryId'];
        echo  "helll";

        $this->redirect("bakeryManagerDailyRequirementController/index/" . $outlet_id . "/" . $category_id);



    }
}



?>