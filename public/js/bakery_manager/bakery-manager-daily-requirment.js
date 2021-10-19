// const selectElement = (element) => document.querySelector(element);

// selectElement('.toggle').addEventListener('click',() => {
//     selectElement('.navigation').classList.toggle('active');
//     selectElement('.content').classList.toggle('active');
// });

  
  var ct1 = document.getElementById("category1-table");
  function category1(){
    
    
      ct1.style.display = "block";
  }


window.onload = setInterval(clock,1000);
function clock()
{
    var d = new Date();
    var date = d.getDate();
    var month = d.getMonth();
    var monthArr = ["January", "February","March", "April", "May", "June", "July", "August", "September", "October", "November","December"];
    month = monthArr[month];
    document.getElementById("demo").innerHTML=date+"/"+month;
}