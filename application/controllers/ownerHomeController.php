<?php

class ownerHomeController extends bakeItFramework
{
    function __construct()
	{
		// code...
	}
    public function rawMaterials(){
        $data=array();
        $this->view("owner/rawMaterials",$data);
    }
    public function menuOwner(){
        $data=array();
        $this->view("owner/menuItems",$data);
    }
}

?>