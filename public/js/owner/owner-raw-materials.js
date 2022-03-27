
// function addRow(tableID) {

//     var table = document.getElementById(tableID);

//     var rowCount = table.rows.length;
//     var row = table.insertRow(rowCount);

//     var colCount = table.rows[0].cells.length;

//     for (var i = 0; i < colCount; i++) {

//         var newcell = row.insertCell(i);

//         newcell.innerHTML = table.rows[0].cells[i].innerHTML;
//         //alert(newcell.childNodes);
//         switch (newcell.childNodes[0].type) {
//             case "text":
//                 newcell.childNodes[0].value = "";
//                 break;
//             case "checkbox":
//                 newcell.childNodes[0].checked = false;
//                 break;
//             case "select-one":
//                 newcell.childNodes[0].selectedIndex = 0;
//                 break;
//         }
//     }
// }



function popup() {

    document.getElementById("addDatafrom").style.display = "block";
    document.getElementById("body").style.opacity = "0.1";

}
function closePopup() {

    document.getElementById("body").style.opacity = "1";
    window.location.href="rawMaterials.php";
   


}

function closePopUpUseCancel() {
  document.getElementById("addDatafrom").style.display = "none";
  document.getElementById("body").style.opacity = "1";
  // window.location.href="rawMaterials.php";

}



function defaultColse() {
    

    // document.getElementById("addDatafrom").style.display = "none";

}


function search_item() {

    input = document.getElementById("search");
    filter = input.value.toUpperCase();

    table = document.getElementById("dataTable");

    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {

        td = tr[i].getElementsByTagName("td")[1];



        if (td) {
            txtValue = td.textContent || td.innerText;

            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }

    }
}

// function delFunction() {

//     if (confirm("Do you want to Delete?  click ok")) {
//       alert("Delete successfull");
//       window.location.href="rawMaterials.php";
//       }
//     else{
//       window.location.href="rawMaterials.php";

//     }
//   }
var checkBox_id = [];

function myFunction(id) {

    var checkBox = document.getElementById(id);
    var text = document.getElementById("submit-del");
    if (checkBox.checked == true) {
    text.style.display = "block";
      checkBox_id.push(id);
      console.log(checkBox_id);
      
  
    } else {
    text.style.display = "block";
      checkBox_id = checkBox_id.filter(i => i != id);
      console.log(checkBox_id);
  
    }
  }
  function delFunction() {
    var stringId=''
  
    checkBox_id.forEach((el, index) => {
      stringId += el + ".";
      
    });
    console.log(stringId)
  
    location.replace("http://localhost/bakeit/rawMaterialController/deleteRawMaterialsInventory/" + stringId);
    
  }