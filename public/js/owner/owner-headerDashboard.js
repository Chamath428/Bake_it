var screen = screen.width;
console.log(screen);

if(screen > 700){
  console.log("side nav is working");
  // function leftBakeIt() {
  //   if(document.getElementById("bakeId").style.marginLeft=="17%"){
  //       document.getElementById("bakeId").style.marginLeft = "0";
  //   }
  //   else {document.getElementById("bakeId").style.marginLeft = "17%";}
  // }
      var mini = true;
    function toggleSidebar() {
      if (mini) {
        console.log("opening sidebar");
        document.getElementById("mySidebar").style.width = "300px";
        document.getElementById("body").style.marginLeft = "305px";
        document.getElementById("bakeId").style.marginLeft = "16%";
        document.getElementById("arrowAnim").style.display = "flex";
        // document.getElementById("arrowAnim-left").style.display = "none";
        this.mini = false;
      } else {
        console.log("closing sidebar");
        document.getElementById("mySidebar").style.width = "70px";
        document.getElementById("body").style.marginLeft = "75px";
        document.getElementById("bakeId").style.marginLeft = "1%";
        document.getElementById("arrowAnim").style.display = "none";
        // document.getElementById("arrowAnim-left").style.display = "flex";
        this.mini = true;
      }
    }
}
else if(screen < 700){
  console.log("side nav is not working");
  function sidetoggle(){
    var sidenav = document.getElementById("mySidebar");
    if (sidenav.style.display === "block") {
      sidenav.style.display = "none";
    } 
    else {
      sidenav.style.display = "block";
    }
  }
}
