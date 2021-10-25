<?php

class homeController extends bakeItFramework
{
    
    public function __construct()
    {
    
    }
    public function index(){
        $data = array();
        if (isset($_SESSION['role_number']) && $_SESSION['role_number']>1) {
            $this->redirect("dashboardController");
        }


        $this->view("customer/home",$data);
    }
}

?>