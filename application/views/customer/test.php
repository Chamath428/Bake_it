<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form id="confirmInfo" action="bookingsuccess.html">
  <p>Number of tickets :<input id="num" type="number" oninput="calc('ticket-price')" /> </p>
  <p>Price Per ticket : $<input type="hidden" name="" id="ticket-price" value="7">7</span></p>
  <p>Booking fee : $2</p>
  <p>Subtotal : <b><input type="text" name="" id="total"></input></b></p>


  <form name="myform" action="bookingsuccess.php" method="post">
    <button>Book</button>
  </form>
  <button>Cancel</button>
</form>
</body>

<script type="text/javascript">
	function calc(name) 
{
  var price = document.getElementById('ticket-price').value;
  var noTickets = document.getElementById("num").value;
  var total = parseFloat(price) * noTickets
  if (!isNaN(total))
    document.getElementById("total").value = total
}

</script>

</html>