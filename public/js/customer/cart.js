var qucikcart = document.getElementById("quick-cart");
var specialcart=document.getElementById("special-cart");
var indicator=document.getElementsByClassName("indicator")[0];

var qucikcartm = document.getElementById("quick-cartm");
var specialcartm=document.getElementById("special-cartm");
var quickOrderSpan=document.getElementById("quick-order-span");
var specialOrderSpan=document.getElementById("special-order-span");

function getQuickCart(){
	qucikcart.style.transform="translateX(0px)";
	specialcart.style.transform="translateX(0px)";
	indicator.style.transform="translateX(0px)";
}

function getSpecialCart(){
	qucikcart.style.transform="translateX(-1500px)";
	specialcart.style.transform="translateX(-1500px)";
	indicator.style.transform="translateX(212px)";
}

function getQuickCartm(){
	qucikcartm.style.transform="translateX(0px)";
	specialcartm.style.transform="translateX(0px)";
	quickOrderSpan.style.color='rgba(255, 138, 0,1)';
	specialOrderSpan.style.color='black';
}

function getSpecialCartm(){
	qucikcartm.style.transform="translateX(-800px)";
	specialcartm.style.transform="translateX(-800px)";
	quickOrderSpan.style.color='black';
	specialOrderSpan.style.color='rgba(255, 138, 0,1)';
}

function incrementValue()
    {
        var value = parseInt(document.getElementById('qin').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('qin').value = value;
    }