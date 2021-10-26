


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
    document.getElementById("body").style.marginLeft = "0";
    document.getElementById("arrowAnim").style.display = "none";
    this.mini = true;
  }
}