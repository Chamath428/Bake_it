$("#items-bar").chosen();
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

// this function is to expand the location details
function getLocation(x){
    if (x==0) {
        document.getElementById("location-details").style.display="none";
    }else if(x==1) document.getElementById("location-details").style.display="flex";
}


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

// this function is to add items in to the item table
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
        
          row.innerHTML = '<td><input type="checkbox" id="Check-box" name="check"></td> <td><input readonly  name="item-id-'+quan+'" value="'+itemId+'"></ input></td> <td> <input readonly  name="item-name-'+quan+'" value="'+itemName+'"></input> </td> <td class="input"><input type="number" class="quntity" name="quntity'+quan+'" id="quntity'+quan+'"  required=""  oninput="calc1(\'quntity'+quan+'\',\'priceForFunction'+quan+'\',\'itemPrice'+quan+'\')" value="1"> <input type="hidden" name="finalCount" value="'+quan+'"></td> <td><input type="text" class="item-price" readonly name="item-price-'+quan+'" id="itemPrice'+quan+'" value="'+itemPrice+'"></input> <input type="hidden" id="priceForFunction'+quan+'" value="'+itemPrice+'"></input> </td>';
          subTotal=parseFloat(subTotal)+parseFloat(itemPrice);
          quan++;
          document.getElementById("total-amount").value=subTotal;
          table.appendChild(row)
      }
}

// this function will count both total price of the item and the sub total after changing the item quantity
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



var today = new Date();
var dd = today.getDate()+1;
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();

if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById("req-date").setAttribute("min", today);


// this function is to make number fileds only sens to numbers
function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
}

