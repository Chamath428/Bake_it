function available(){
    // alert('You are available for deliveries');
    // document.getElementById('selection-box').style.display = "none";
    window.location.href = "dashboardDP.php";
    document.getElementById('available').style.display = "block";
}
function notavailable(){
//    alert('You are not available for deliveries');
//    document.getElementById('selection-box').style.display = "none";
   window.location.href = "dashboardDP.php";
   document.getElementById('available').style.display = "none";
}
