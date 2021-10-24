var quickorder = document.getElementById("quick-order");
var specialorder=document.getElementById("specia-order");
var indicator=document.getElementsByClassName("indicator")[0];

var quickorderm = document.getElementById("quick-orderm");
var specialorderm=document.getElementById("specia-orderm");

var quickOrderSpan=document.getElementById("quick-order-span");
var specialOrderSpan=document.getElementById("special-order-span");

function getQuickOrder(){
	quickorder.style.transform="translateX(0px)";
	specialorder.style.transform="translateX(0px)";
	indicator.style.transform="translateX(0px)";
	// indicator.style.width = "125px"
}

function getSpecialOrder(){
	quickorder.style.transform="translateX(-1500px)";
	specialorder.style.transform="translateX(-1500px)";
	indicator.style.transform="translateX(205px)";
}

function getQuickCartm(){
	quickorderm.style.transform="translateX(0px)";
	specialorderm.style.transform="translateX(0px)";
	quickOrderSpan.style.color='rgba(255, 138, 0,1)';
	specialOrderSpan.style.color='black';
}

function getSpecialOrderm(){
	quickorderm.style.transform="translateX(-800px)";
	specialorderm.style.transform="translateX(-800px)";
	quickOrderSpan.style.color='black';
	specialOrderSpan.style.color='rgba(255, 138, 0,1)';
}
