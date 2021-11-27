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

var today = new Date();
var dd = today.getDate()+1;
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();

if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById("req-date").setAttribute("min", today);
