
// function leftBakeIt() {
//     if(document.getElementById("bakeId").style.marginLeft=="16%"){
//         document.getElementById("bakeId").style.marginLeft = "0";
//     }
//     else {document.getElementById("bakeId").style.marginLeft = "16%";}
//   }

// const selectElement = (element) => document.querySelector(element);

// selectElement('.toggle').addEventListener('click',() => {
//     selectElement('.navigation').classList.toggle('active');
//     selectElement('.bgg').classList.toggle('active');
// });


var mini = true;

function toggleSidebar() {
  if (mini) {
    console.log("opening sidebar");
    document.getElementById("mySidebar").style.width = "300px";
    document.getElementById("body").style.marginLeft = "310px";
    document.getElementById("arrowAnim").style.display = "flex";
    this.mini = false;
  } else {
    console.log("closing sidebar");
    document.getElementById("mySidebar").style.width = "70px";
    document.getElementById("body").style.marginLeft = "74px";
    document.getElementById("arrowAnim").style.display = "none";
    this.mini = true;
  }
}