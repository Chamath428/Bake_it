<?php 

	class cartController extends bakeItFramework
	{
		
		public function __construct()
		{
			$this->customerNotificationModel=$this->model("customerNotificationModel");
		}
		public function index(){
			$data['notifiactions'] = $this->customerNotificationModel->gteNotification();
			$data['pagename']="cart";
			$this->view("customer/cart",$data);
		}

		public function deleteItem($itemId){
			if(!empty($_SESSION["quick_cart"])) {
		    foreach($_SESSION["quick_cart"] as $key => $value) {
		      if($itemId == $key){
		      unset($_SESSION["quick_cart"][$key]);

		      if (isset($_SESSION['cart_count'])) {
		      	$_SESSION['cart_count']=$_SESSION['cart_count']-1;
		      }
		      if (isset($_SESSION['cart_count']) && $_SESSION['cart_count']==0) {
		      	unset($_SESSION['cart_count']);
		      }

		      $message = "Item is removed from your cart!";
		      }
		      if(empty($_SESSION["quick_cart"]))unset($_SESSION["quick_cart"]);

		    }		
		}
		$this->index();
		}

		public function emptyCart(){
			foreach($_SESSION["quick_cart"] as $key => $value){
			if (isset($_SESSION['cart_count'])) {
		      	$_SESSION['cart_count']=$_SESSION['cart_count']-1;
		      }
			}
			if (isset($_SESSION['cart_count']) && $_SESSION['cart_count']==0) {
		      	unset($_SESSION['cart_count']);
		      }
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


		public function deleteSpecialItem($itemId){
			if(!empty($_SESSION["special_cart"])) {
		    foreach($_SESSION["special_cart"] as $key => $value) {
		      if($itemId == $key){
		      unset($_SESSION["special_cart"][$key]);
		      if (isset($_SESSION['cart_count'])) {
		      	$_SESSION['cart_count']=$_SESSION['cart_count']-1;
		      }
		      if (isset($_SESSION['cart_count']) && $_SESSION['cart_count']==0) {
		      	unset($_SESSION['cart_count']);
		      }
		      $message = "Item is removed from your cart!";
		      }
		      if(empty($_SESSION["special_cart"]))unset($_SESSION["special_cart"]);
		    }		
		}
		$this->index();
		}
		public function emptySpecialCart(){
			foreach($_SESSION["special_cart"] as $key => $value){
			if (isset($_SESSION['cart_count'])) {
		      	$_SESSION['cart_count']=$_SESSION['cart_count']-1;
		      }
			}
			if (isset($_SESSION['cart_count']) && $_SESSION['cart_count']==0) {
		      	unset($_SESSION['cart_count']);
		      }
			unset($_SESSION["special_cart"]);
			$this->index();
		}

		public function updateSpecailCart(){
			$itemCount=$_POST['item_count'];
			for ($i=0; $i <$itemCount ; $i++) { 

				$_SESSION["special_cart"][$_POST["qin_name-".$i+1]]['quantity']=$_POST["qin-".$_POST["qin_name-".$i+1]];

			}

		$this->index();
	}
}

 ?>