<?php

class deliveryPersonReviewsController extends bakeItFramework
{
    function __construct()
	{
		$this->deliveryPersonReviewsModel = $this->model("deliveryPersonReviewsModel");
	}
    public function index(){

        $data=array();
        $totalReviews = $this -> deliveryPersonReviewsModel -> countOfReviews();
        $data[0] = $totalReviews;
//$data[1]???
        $reviewsTable=$this->deliveryPersonReviewsModel -> getDeliveryReviewsTable();
		$data[2]=$reviewsTable;

        $this->view("deliveryPerson/Reviews",$data);
    }
}

?>