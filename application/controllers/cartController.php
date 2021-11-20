<?php 

	class cartController extends bakeItFramework
	{
		
		public function __construct()
		{
			// code...
		}
		public function index(){
			$data=array();
			$data['pagename']="cart";
			$this->view("customer/cart",$data);
		}

		public function deleteItem($itemId){
			if(!empty($_SESSION["quick_cart"])) {
		    foreach($_SESSION["quick_cart"] as $key => $value) {
		      if($itemId == $key){
		      unset($_SESSION["quick_cart"][$key]);
		      $message = "Item is removed from your cart!";
		      }
		      if(empty($_SESSION["quick_cart"]))unset($_SESSION["quick_cart"]);
		    }		
		}
		$this->index();
		}

		public function emptyCart(){
			unset($_SESSION["quick_cart"]);
			$this->index();
		}

		public function updateCart(){
			$itemCount=$_POST['item_count'];
			for ($i=0; $i <$itemCount ; $i++) { 

				$_SESSION["quick_cart"][$_POST["qin_name-".$i+1]]['quantity']=$_POST["qin-".$_POST["qin_name-".$i+1]];

			}

		$this->index();
	}
}

 ?>