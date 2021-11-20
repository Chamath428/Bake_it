var qucikcart = document.getElementById("quick-cart");
var specialcart=document.getElementById("special-cart");
var indicator=document.getElementsByClassName("indicator")[0];

var qucikcartm = document.getElementById("quick-cartm");
var specialcartm=document.getElementById("special-cartm");
var quickOrderSpan=document.getElementById("quick-order-span");
var specialOrderSpan=document.getElementById("special-order-span");

var quant=document.getElementsByClassName('qin');

function getQuickCart(){
	qucikcart.style.transform="translateX(0px)";
	specialcart.style.transform="translateX(0px)";
	indicator.style.transform="translateX(0px)";
}

function getSpecialCart(){
	qucikcart.style.transform="translateX(-1500px)";
	specialcart.style.transform="translateX(-1500px)";
	indicator.style.transform="translateX(202px)";
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

function incrementValue(qin){
        var value = parseInt(document.getElementById(qin).value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById(qin).value = value;
}

function decrementValue(qin){
        var value = parseInt(document.getElementById(qin).value, 10);
        value = isNaN(value) ? 0 : value;
        if (value>1) value--;
        document.getElementById(qin).value = value;
}



function confirmDeletion(item_id) {
        let confirmAction = confirm("Are you sure to delete the item from the cart?");
        if (confirmAction) {
          location.replace("http://localhost/bakeit/cartController/deleteItem/"+item_id);
     }
}

function emptyCart(){
	let confirmAction = confirm("Are you sure to empty the cart?");
	if (confirmAction) {
          location.replace("http://localhost/bakeit/cartController/emptyCart/");
     }
}


quant.forEach(onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
})
