//  console.log("hii");
// alert('yo');

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

function openOngoing(){
    document.getElementById('table-caption1').style.display ="block";
    document.getElementById('Ongoing-Deliveries').style.display ="block";
    document.getElementById('table-caption2').style.display ="none";
    document.getElementById('Delivery-History').style.display ="none"; 
}
function openHistory(){
    document.getElementById('table-caption1').style.display ="none";
    document.getElementById('Ongoing-Deliveries').style.display ="none";
    document.getElementById('table-caption2').style.display ="block";
    document.getElementById('Delivery-History').style.display ="block";
}
//  var btn= document.getElementById('order1');
//  btn.addEventListener('onclick', pickOrder(),{
//     document,location,href = '<?php echo $Deliveries2.php; ?>',
//   });


 