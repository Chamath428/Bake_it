  
  
 
  var quan =1;
  function add_fields() {
      var e = document.getElementById("popupSelctId");
      var itemId = e.value;
      var itemName = e.options[e.selectedIndex].text;
      var objTo = document.getElementById('room_fileds')
      var divtest = document.createElement("div");
      
      // divtest.innerHTML = '<div class="input-fileds"><label for="text">'+itemName+' </label><input type="number" name="itemid" id="itemid"  value require placeholder="Enter Quantity"></div> <div class="Quntity"><label for="quantity"></label><select><option>Kg</option><option>g</option><option>l</option><option>ml</option></select></div>';
      divtest.innerHTML = '<table><tr><td class="lable"><label for="text">'+itemName+' </label></td><td class="input"><input type="number" name="quntity'+quan+'" id="itemid"  value require placeholder="Enter Quantity"><input type="hidden" name="itemId'+quan+'" value="'+itemId+'"></td> <td class="Quntity"><label for="quantity"></label><select><option>Kg</option><option>g</option><option>l</option><option>ml</option></select></td></tr></table>';
      quan++;
      e.remove(e.selectedIndex);
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