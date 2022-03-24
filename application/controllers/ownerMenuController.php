<?php

class ownerMenuController extends bakeItFramework
{
    function __construct()
    {
        $this->menuModel = $this->model("menuModel");



        // code...
    }

    public function index($outlet_id = 1, $category_id = 1)
    {
        $data = array();

        $outlet = $this->menuModel->selectOutlet();
        $categories = $this->menuModel->selectCategory();
        $menuItems = $this->menuModel->getItemLists($outlet_id, $category_id);
        $data[0] = $outlet;
        $data[1] = $categories;
        $data[2] = $menuItems;
        $data[3] = $outlet_id;
        $data[4] = $category_id;
        $this->view("owner/menuItems", $data);
    }
    public function addMenuItem()
    {
        $data = array();
        $outlet = $this->menuModel->selectOutlet();
        $categories = $this->menuModel->selectCategory();
        $data[0] = $outlet;
        $data[1] = $categories;
        $this->view("owner/addMenuitem", $data);
    }
    public function selectOutletCategory()
    {
        $data = array();
        $outlet = $this->menuModel->selectOutlet();
        $categories = $this->menuModel->selectCategory();
        $data[0] = $outlet;
        $data[1] = $categories;
        $this->view("owner/addMenuItem", $data);


        // insert data 
        $newMenuData = array();
        $category = $_POST['category'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $outlet = $_POST['outlet'];
        if ($outlet == 1 || $outlet == 2 || $outlet == 3) {
            $newMenuData['menu_id'] = $outlet;
            //  $newMenuData['item_id']= $name;
            $newMenuData['item_name'] = $name;
            $newMenuData['category_id'] = $category;
            $newMenuData['quantity'] = 0;
            $newMenuData['price'] = $price;
            $newMenuData['daily_requirement'] = 0;
            $newMenuData['branch_id'] = $outlet;

            $this->menuModel->insertMenuItems($newMenuData);
        } else {


            for ($x = 1; $x <= 3; $x++) {
                $newMenuData['menu_id'] = $x;
                //  $newMenuData['item_id']= $name;
                $newMenuData['item_name'] = $name;
                $newMenuData['category_id'] = $category;
                $newMenuData['quantity'] = 0;
                $newMenuData['price'] = $price;
                $newMenuData['daily_requirement'] = 0;
                $newMenuData['branch_id'] = $x;

                $this->menuModel->insertMenuItems($newMenuData);
            }
        }
    }

    public function saveMenuItem()
    {
        $data = array();
        $this->view("owner/menuItems", $data);
    }


    public function getMenuItems()
    {
        $outlet_id = $_POST['outletId'];
        $category_id = $_POST['categoryId'];

        $this->redirect("ownerMenuController/index/" . $outlet_id . "/" . $category_id);
        // $this->index("ownerMenuController/index/". $outlet_id.$category_id);


    }
    public function deleteItems($ids)
    {
      
    //    echo $ids;
        // $check_id = array();
        // $urlIds= $_GET['deleteIds'];

        $check_id = explode('.',$ids);
        // echo $check_id[1]; 
        $this->menuModel->deleteMenuItems( $check_id );
        $this->index();



    }
}
