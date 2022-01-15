var w = window.innerWidth;
var mini = true;

function toggleSidebar() {
  if(w<1000)
  {
    if (mini) {
      console.log("opening sidebar");
      document.getElementById("mySidebar").style.width = "300px";
      document.getElementById("body").style.marginLeft = "310px";
      document.getElementById("bakeId").style.marginLeft = "16%";
      document.getElementById("arrowAnim").style.display = "flex";
      // document.getElementById("arrowAnim-left").style.display = "none";
      this.mini = false;
    } else {
      console.log("closing sidebar");
      document.getElementById("mySidebar").style.width = "70px";
      document.getElementById("body").style.marginLeft = "74px";
      document.getElementById("bakeId").style.marginLeft = "1%";
      document.getElementById("arrowAnim").style.display = "none";
      // document.getElementById("arrowAnim-left").style.display = "flex";
      this.mini = true;
    }
  }
  
}