<?php

class homeController extends bakeItFramework
{
    
    public function __construct()
    {
        $this->homeModel=$this->model("homeModel");
        $this->customerNotificationModel=$this->model("customerNotificationModel");
    }

    
    public function index(){
        
        if (isset($_SESSION['role_number']) && $_SESSION['role_number']>1) {
            $this->redirect("dashboardController");
        }
        else{
            $data['notifiactions'] = $this->customerNotificationModel->gteNotification();
            $this->view("customer/home",$data);
        }
        
    }

    public function setBranch($branch_id){
        $_SESSION['branch_Id']=$branch_id;
        $_SESSION['branch_name']=$this->homeModel->getBranch($branch_id);
        $this->index();
    }
}

?>