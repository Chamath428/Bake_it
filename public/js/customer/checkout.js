function getLocation(x){
	var subTotal=parseFloat(document.getElementById("subtotal").value);
	if (x==0) {
		document.getElementById("location-details").style.display="none";
		document.getElementById("delivery-tax").value="00";
		document.getElementById("grandtotal").value=subTotal;
		document.getElementById("grandtotal2").value=subTotal;
		document.getElementById("amount").value=subTotal;
	}else {
		document.getElementById("location-details").style.display="flex";
		document.getElementById("delivery-tax").value="200";
		document.getElementById("grandtotal").value=subTotal+200.00;
		document.getElementById("grandtotal2").value=subTotal+200.00;
		document.getElementById("amount").value=subTotal+200.00;
	}
}

function getPayment(x){
	if (x==0) {
		document.getElementById("payhere").style.display="none";
		document.getElementById("placeorder").style.display="block"
	}else {
		document.getElementById("payhere").style.display="flex";
		document.getElementById("placeorder").style.display="none"
	}
}

function changeValues(documentField,payhereField) {
	documentValue=document.getElementById(documentField).value;
	document.getElementById(payhereField).value=documentValue;
}

function changePayherePrice(x){
	var grandValue=parseFloat(document.getElementById("grandtotal2").value);

	if (x==1) {
		 document.getElementById("amount").value=grandValue/2;
	}
	else{
		document.getElementById("amount").value=grandValue;
	}
}

function showSubmit(){
	document.getElementById("payhere-specail").style.display="none";
	document.getElementById("placeorder-special").style.display="block";
}

function  showSubmitQuick() {
	document.getElementById("payhere").style.display="none";
	document.getElementById("placeorder").style.display="block";
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



function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
}
