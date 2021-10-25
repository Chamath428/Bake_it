<?php

class ownerMenuController extends bakeItFramework
{
    function __construct()
	{
		// code...
	}
    public function index(){
        $data=array();
        $this->view("owner/menuItems",$data);
    }
    
    public function addMenuItem(){
        $data=array();
        $this->view("Owner/addMenuItem",$data);
    }
    public function saveMenuItem(){
        $data=array();
        $this->view("Owner/menuItems",$data);
    }
}

?>