<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

		if (isset($_SESSION['quick_cart'])) {
			foreach ($_SESSION['quick_cart'] as $key => $value) {
				echo $key;
			}
		}else echo "No items";

	 ?>
</body>
</html>