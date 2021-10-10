<?php

class homeController extends bakeItFramework
{
    
    public function __construct()
    {
    
    }
    public function index(){
        $data = array();
        $this->view("customer/home",$data);
    }
}

?>