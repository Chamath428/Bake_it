
function addRow(tableID) {

    var table = document.getElementById(tableID);

    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);

    var colCount = table.rows[0].cells.length;

    for(var i=0; i<colCount; i++) {

        var newcell	= row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
            case "text":
                    newcell.childNodes[0].value = "";
                    break;
            case "checkbox":
                    newcell.childNodes[0].checked = false;
                    break;
            case "select-one":
                    newcell.childNodes[0].selectedIndex = 0;
                    break;
        }
    }
}

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


var quan=1;
var idList=[];
function selectItem() {
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
        
          row.innerHTML = '<td><input type="checkbox" id="Check-box" name="check"></td> <td><input readonly  name="item-id-'+quan+'" value="'+itemId+'"></ input></td> <td> <label for="text">'+itemName+'</label></td> <td class="input"><input type="number" class="quntity" name="quntity'+quan+'" id="itemid"  required=""  onkeypress="javascript:return isNumber(event)" value="1"> <input type="hidden" name="itemId'+quan+'" value="'+itemId+'"><input type="hidden" name="finalCount" value="'+quan+'"></td> <td><input class="item-price" readonly value="'+itemPrice+'"></input></td>';
          quan++;
          // itemSelector.remove(itemSelector.selectedIndex); 
          table.appendChild(row)
      }
}

$(document).ready(function() {

   /* Set rates */
   var fadeTime = 300;

   /* Assign actions */
   $('.quntity').change(function() {
     updateQuantity(this);
   });

   // $('.remove-item button').click(function() {
   //   removeItem(this);
   // });


   /* Recalculate cart */
   // function recalculateCart() {
   //   var subtotal = 0;

   //   /* Sum up row totals */
   //   $('.item').each(function() {
   //     subtotal += parseFloat($(this).children('.product-line-price').text());
   //   });

   //   /* Calculate totals */
   //   var tax = subtotal * taxRate;
   //   var total = subtotal + tax;

   //   /* Update totals display */
   //   $('.totals-value').fadeOut(fadeTime, function() {
   //     $('#cart-subtotal').html(subtotal.toFixed(2));
   //     $('#cart-tax').html(tax.toFixed(2));
   //     $('.cart-total').html(total.toFixed(2));
   //     if (total == 0) {
   //       $('.checkout').fadeOut(fadeTime);
   //     } else {
   //       $('.checkout').fadeIn(fadeTime);
   //     }
   //     $('.totals-value').fadeIn(fadeTime);
   //   });
   // }


   /* Update quantity */
   function updateQuantity(quantityInput) {
     /* Calculate line price */
     var productRow = $(quantityInput).parent().parent();
     var price = parseFloat(productRow.children('.item-price').text());
     console.log(price);
     var quantity = $(quantityInput).val();
     var linePrice = price * quantity;

     /* Update line price display and recalc cart totals */
     productRow.children('.item-price').each(function() {
       $(this).fadeOut(fadeTime, function() {
         $(this).text(linePrice.toFixed(2));
         recalculateCart();
         $(this).fadeIn(fadeTime);
       });
     });
   }

   /* Remove item from cart */
   // function removeItem(removeButton) {
   //   /* Remove row from DOM and recalc cart total */
   //   var productRow = $(removeButton).parent().parent();
   //   productRow.slideUp(fadeTime, function() {
   //     productRow.remove();
   //     recalculateCart();
   //   });
   // }

 });


