
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

 
  function completeFunction() {
    window.location.href="complete_order.php";
  }
  function pendingFunction() {
    window.location.href="pending_order.php";
  }
  // function finishedFunction() {

  //   if (confirm("Do you want to finish order?  click ok")) {
  //     alert("Ordere is Finished");
  //     }
    
  // }