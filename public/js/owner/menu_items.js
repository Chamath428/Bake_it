
  
  var ct1 = document.getElementById("category1-table");
  function category1(){
    
    
      ct1.style.display = "block";

   
  }

  function addItemFunction() {
       window.location.href="add_item.php";
 }
 function myFunction(id) {
    var checkBox = document.getElementById(id);
    var text = document.getElementById("delbtn");
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
       text.style.display = "none";
    }
  }

  function delFunction() {

    if (confirm("Do you want to Delete?  click ok")) {
      alert("Delete successfull");
      window.location.href="menu_items.php";
      }
    
  }
