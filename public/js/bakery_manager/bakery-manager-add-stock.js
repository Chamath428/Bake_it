

  function SaveFunction() {

      if (confirm("Do you want to Save?  click ok")) {
        alert("Save successfull");
        window.location.href="addStock.php";
        
        }
      
    }

    
  var quan =1;
  function add_fields() {
      var e = document.getElementById("popupSelctId");
      var itemId = e.value;
      var itemName = e.options[e.selectedIndex].text;
      var objTo = document.getElementById('room_fileds')
      var divtest = document.createElement("div");
    
      divtest.innerHTML = '<table><tr><td class="lable"><label for="text">'+itemName+'   </label></td><td class="input"><input type="text" name="quntity'+quan+'" id="itemid"  required="" placeholder="Enter Quantity" onkeypress="javascript:return isNumber(event)">    <input type="hidden" name="itemId'+quan+'" value="'+itemId+'"><input type="hidden" name="finalCount" value="'+quan+'"></td> <td class="Quntity"><label for="quantity"></label><select><option>Kg</option><option>g</option><option>l</option><option>ml</option></select></td></tr></table>';
      quan++;
      e.remove(e.selectedIndex);
      var x = document.getElementById("savebtn");
      x.style.display = "block";
      var q = document.getElementById("nameQuantity");
      q.style.display = "flex";
      
  
      objTo.appendChild(divtest)
      
  }

  function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
}

