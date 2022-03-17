function deleteRow(tableID) {
    try {
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;

    for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
            alert("Do you want to delete select items.");

            if(rowCount <= 1) {
                alert("Cannot delete all the rows.");
                break;
            }
            table.deleteRow(i);
            rowCount--;
            i--;
        }


    }
    }catch(e) {
        alert(e);
    }

}


$("#items-bar").chosen();


var quan=document.getElementById("quan").value;
var tracker=document.getElementById("tracker").value;
var idList=[];
var j=1;
if (tracker==2) {
    for (var i = 1; i < quan; i++) {
        idList.push(document.getElementById("item-id-"+j).value);
        j++;
    }
}

function selectItem() {
    var subTotal=document.getElementById("total-amount").value;
      var itemSelector = document.getElementById("items-bar");
      var itemId = itemSelector.value;
      if (!idList.includes(itemId)) {
          idList.push(itemId);
          var itemPrice=document.getElementById("item-price-"+itemId).value;
          var itemName = itemSelector.options[itemSelector.selectedIndex].text;
          var array=itemName.split("-");
          var itemName=array[1];

          var table = document.getElementById('item-table')
          var row = document.createElement("tr");
        
          row.innerHTML = '<td><input type="checkbox" id="Check-box" name="check"></td> <td><input readonly  name="item-id-'+quan+'" value="'+itemId+'"></ input></td> <td> <input readonly  name="item-name-'+quan+'" value="'+itemName+'"></input> </td> <td class="input"><input type="number" class="quntity" name="quntity'+quan+'" id="quntity'+quan+'"  required=""  oninput="calc1(\'quntity'+quan+'\',\'priceForFunction'+quan+'\',\'itemPrice'+quan+'\')" value="1"> <input type="hidden" name="finalCount" value="'+quan+'"></td> <td><input type="text" class="item-price" readonly name="item-price-'+quan+'" id="itemPrice'+quan+'" value="'+itemPrice+'"></input> <input type="hidden" name="priceForFunction'+quan+'" id="priceForFunction'+quan+'" value="'+itemPrice+'"></input> </td>';
          subTotal=parseFloat(subTotal)+parseFloat(itemPrice);
          quan++;
          document.getElementById("total-amount").value=subTotal;
          table.appendChild(row)
      }
}

const closeModelButton = document.querySelectorAll('[data-close-button]');
const overlay=document.getElementById('overlay');

closeModelButton.forEach(button=>{
    button.addEventListener('click',()=>{
        const bill=button.closest('.bill');
        closeModel(bill);
    })
})

function closeModel(bill){
    if (bill==null) return;
    bill.classList.remove('active');
    overlay.classList.remove('active');
}

function calc1(noOfItemsP,priceP,itemPriceP) 
{
  var price = document.getElementById(priceP).value;
  var noOfItems = document.getElementById(noOfItemsP).value;
  var total = parseFloat(price) * noOfItems
  if (!isNaN(total)){
    // following line will change the subtotal. First it takes the current subtotal and then it substract the current items subtotal and then it will add the new subtotal of the item
    document.getElementById("total-amount").value=parseFloat(document.getElementById("total-amount").value)-parseFloat(document.getElementById(itemPriceP).value)+total;
    document.getElementById(itemPriceP).value = total
    }
}

function calc2(){
     var subTotal=document.getElementById("total-amount").value;
     var paidAmount=document.getElementById("paid-amount").value;
     var balance=parseFloat(paidAmount)-parseFloat(subTotal);
     if (document.getElementById("paid-amount").value=="") {
        document.getElementById("balance").value=0;
     }
     if (!isNaN(balance)){
     document.getElementById("balance").value=balance;
    }
}


