function getLocation(x){
	if (x==0) {
		document.getElementById("location-details").style.display="none";
	}else document.getElementById("location-details").style.display="flex";
}

function getPayment(x){
	if (x==0) {
		document.getElementById("payment-image").style.display="none";
	}else document.getElementById("payment-image").style.display="flex";
}
