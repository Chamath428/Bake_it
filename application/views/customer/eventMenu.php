 <?php 
	
	if (isset($_POST['add-to-cart'])) {
		$item_Id=$_POST['item-id'];
		$quantity=1;
		$cartArray=array(
				'item_Id'=>$item_Id,
				'name'=>$_POST['item-name'],
				'price'=>$_POST['item-price'],
				'quantity'=>$quantity	
		);

		if(empty($_SESSION["special_cart"])) {
    		$_SESSION["special_cart"] =array();
    		$_SESSION["special_cart"][$item_Id] = $cartArray;
    		if (!isset($_SESSION['cart_count'])) {
    			$_SESSION['cart_count']=1;
    		}else {$_SESSION['cart_count']=$_SESSION['cart_count']+1;}
    		$message="Item successfully added to the cart. You can edit the quantity from the cart";
		}else{
			$array_keys = array_keys($_SESSION["special_cart"]);
			if(in_array($item_Id,$array_keys)) {
				$message = "Product is already added to your cart!";	
    		} else {
			    $_SESSION["special_cart"][$item_Id] = $cartArray;
			    if (isset($_SESSION['cart_count'])) {
		      	$_SESSION['cart_count']=$_SESSION['cart_count']+1;
		      }
			    $message = "Item successfully added to the cart. You can edit the quantity from the cart";
			}
		}
	}
	if (isset($_POST['remove-from-cart'])) {
		if(!empty($_SESSION["special_cart"])) {
		    foreach($_SESSION["special_cart"] as $key => $value) {
		      if($_POST["item-id"] == $key){
		      unset($_SESSION["special_cart"][$key]);
		      if (isset($_SESSION['cart_count'])) {
		      	$_SESSION['cart_count']=$_SESSION['cart_count']-1;
		      }
		      $message = "Item is removed from your cart!";
		      }
		      if(empty($_SESSION["special_cart"])){
		      	unset($_SESSION["special_cart"]);
		      if (isset($_SESSION['cart_count']) && $_SESSION['cart_count']==0) {
		      	unset($_SESSION['cart_count']);
		      }
		      	
		      }
		    }		
		}
	}

 ?>

<?php $pagename="Order for an Event"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-specialMenu.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/message.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<script src="<?php echo BASEURL; ?>/public/js/customer/menu.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Order for an Event</title>
</head>
<body>

	<header>
	<?php require_once('navbar.php'); ?>
	</header>

	<section>
		<div class="side-panel">
			<h2>Catagories</h2>
			<ul class="catagory">
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/1"; ?>">Bread</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/2"; ?>">Pastry</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/3"; ?>">Cake</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/4"; ?>">Burger</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/5"; ?>">Snacks</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/6"; ?>">Donut</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/7"; ?>">Muffin</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/8"; ?>">Sweets</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/9"; ?>">Baverages</a></li>
			</ul>
		</div>

		<div class="burger-container">

				<?php 
				if (sizeof($data)>0) {
				foreach ($data as $key => $item) {?>
					<div class="burger-item">
						<form  method="post" action="">
							<img src="<?php echo BASEURL; ?>/public/images/b1.png">
							<h3><?php echo $item['item_name']; ?></h3>
							<span><?php echo "RS.".$item['price']; ?></span><br>
							<input type="hidden" name="item-id" value="<?php echo $item['item_id']; ?>">
							<input type="hidden" name="item-name" value="<?php echo $item['item_name']; ?>">
							<input type="hidden" name="item-price" value="<?php echo $item['price']; ?>">
							<?php if (!empty($_SESSION["special_cart"])) {
								$array_keys = array_keys($_SESSION["special_cart"]);
								if(in_array($item['item_id'],$array_keys)) {?>
									<button type="submit" name="remove-from-cart" class="close-button"><a>Remove from special cart</a></button>
					    	<?php }else if(!in_array($item['item_id'],$array_keys)){ ?>
					    		<button type="submit" name="add-to-cart" class="add-button"><a>Add to special cart</a></button>
					    	<?php }}else {?>
					    		<button type="submit" name="add-to-cart" class="add-button"><a>Add to special cart</a></button>
					    	<?php }?>
							
						</form>
					</div>
				<?php }
				}else{?>
					<div class="no-burger">
						<span>Sorry!No itms to show</span>
					</div>
				<?php } ?>


			</div>
		
	</section>

	<?php require_once('footer.php'); ?>
</html>