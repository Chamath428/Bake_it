<?php

class menuItemOwnerController extends bakeItFramework
{
    function __construct()
	{
		// code...
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