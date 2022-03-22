

var ct1 = document.getElementById("category1-table");
// function category1(){


//     ct1.style.display = "block";
//     alert("hello");


// }
var checkBox_id = [];



function myFunction(id) {

  var checkBox = document.getElementById(id);
  var text = document.getElementById("delbtn");
  if (checkBox.checked == true) {
    text.style.display = "block";
    checkBox_id.push(id);
    console.log(checkBox_id);

  } else {
    text.style.display = "none";
    checkBox_id = checkBox_id.filter(i => i != id);
    console.log(checkBox_id);

  }
}

// function delFunction() {

//   var url = "http://localhost/bakeit/ownerMenuController/deleteItems" + "?deleteIds=";
//   checkBox_id.forEach( (el , index) => {
//       url += el + "/";
//   });
//   console.log(url);
//   if (confirm("Do you want to Delete?  click ok")) {
//       var xmlHttp = new XMLHttpRequest();
//       xmlHttp.onreadystatechange = function() { 
//           if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
//             console.log(this.response)
//           }
//       }
//       xmlHttp.open("GET", url, true); // true for asynchronous 
//       xmlHttp.send(null);

//     alert("Delete successfull");
//     window.location.href="menu_items.php";

//     }

// }


function delFunction() {
  var stringId=''

  checkBox_id.forEach((el, index) => {
    stringId += el + ".";
    
  });
  // console.log(stringId)

  location.replace("http://localhost/bakeit/ownerMenuController/deleteItems/" + stringId);
  
}