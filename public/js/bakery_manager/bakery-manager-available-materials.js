  
  var room = 0;
  function add_fields() {
      room++;
      var objTo = document.getElementById('room_fileds')
      var divtest = document.createElement("div");
      divtest.innerHTML = '<div class="input-fileds"><label for="text"> item</label>' + room +'<input type="number" name="itemid" id="itemid"  value require placeholder="Enter Quantity"></div> <div class="Quntity"><label for="quantity"></label><select><option>Kg</option><option>g</option><option>l</option><option>ml</option></select></div>';
  
      var x = document.getElementById("savebtn");
      x.style.display = "block";
      var q = document.getElementById("nameQuantity");
      q.style.display = "flex";
      
  
      objTo.appendChild(divtest)
  }

function displayPopup(){
  var x = document.getElementById("popup");
    x.style.display = "flex";
  

  
}

function SaveFunction() {

  if (confirm("Do you want to Save?  click ok")) {
    alert("Save successfull");
    var y = document.getElementById("popup");
    y.style.display = "none";
  
    }
  
}