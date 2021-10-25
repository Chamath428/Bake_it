
// function openOngoing(){
//     document.getElementById('Ongoing-Deliveries').
//         var tables =['t1','t2'];    
//         for(var i=0;i<2;i++){
//            document.getElementById(tables[i]).style.display = "none";    

//     document.getElementById(table).style.display = "block";   
//     }
// }
// function showTable(){
//     let ongoing= document.getElementById('Ongoing-Deliveries');
//     let history= document.getElementById('Delivery-History');
//     console.log(ongoing);
//     console.log(history);
//     let id;
// if(id===ongoing){
//     document.getElementById('Ongoing-Deliveries').style.display="block";}
// else if(id===histroy){
//     document.getElementById('Delivery-History').style.display ="block";
// }
// }

//  var btn= document.getElementById('order1');
//  btn.addEventListener('onclick', pickOrder(),{
//     document,location,href = '<?php echo $Deliveries2.php; ?>',
//   });


// function accept(){
//     window.location.href = "ongoingDeliveryDetails.php";
// }
function reject(){
    alert("Do you want to reject the order?");
}
function complete(){
    alert("You completed order successfully");
}
function getLocation(x){
	if (x==0) {
		document.getElementById("location-details").style.display="none";
	}else document.getElementById("location-details").style.display="flex";
}
function displayBill(){
    document.getElementById("cash-topay").style.display ="block";
}