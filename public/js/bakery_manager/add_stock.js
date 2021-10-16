

  function displayAddNav(){
    var x = document.getElementById("add-item-list");
      x.style.display = "block";
    var y = document.getElementById("middle-content");
      y.style.opacity = "40%";

    
  }

  function closeAddNav() {
    var x = document.getElementById("add-item-list");
      x.style.display = "none";
    var y = document.getElementById("middle-content");
      y.style.opacity = "100%";

  }

  function SaveFunction() {

      if (confirm("Do you want to Save?  click ok")) {
        alert("Save successfull");
        }
      
    }