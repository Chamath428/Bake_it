var checkBox_id;
  function moreDetails(id) {
    checkBox_id.push(id);

  location.replace("http://localhost/bakeit/bakeryManagerOrderController/pendingOrderDetailsBakery/" + id);

  }
  
  // function closeNav() {
  //   document.getElementById("mySidenav").style.width = "0";
  // }

 
  // function completeFunction() {
  //   window.location.href="complete_order.php";
  // }
  // function pendingFunction() {
  //   window.location.href="pending_order.php";
  // }
  // function finishedFunction() {

  //   if (confirm("Do you want to finish order?  click ok")) {
  //     alert("Ordere is Finished");
  //     }
    
  // }