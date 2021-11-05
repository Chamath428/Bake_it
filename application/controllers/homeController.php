<?php

class homeController extends bakeItFramework
{
    
    public function __construct()
    {
        $this->homeModel=$this->model("homeModel");
    }
    public function index(){
        $data = array();
        if (isset($_SESSION['role_number']) && $_SESSION['role_number']>1) {
            $this->redirect("dashboardController");
        }


        $this->view("customer/home",$data);
    }

    public function setBranch($branch_id){
        $_SESSION['branch_Id']=$branch_id;
        $_SESSION['branch_name']=$this->homeModel->getBranch($branch_id);
        $this->index();
    }
}

?>