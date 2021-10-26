// var screen = screen.width;
var screen = window.screen.availWidth;
console.log(screen);

if(screen > 700){
  console.log("side nav is working");

      var mini = true;

  function toggleSidebar() {
      if (mini) {
        console.log("opening sidebar");
        document.getElementById("mySidebar").style.width = "300px";
        document.getElementById("body").style.marginLeft = "305px";
        document.getElementById("bakeId").style.marginLeft = "24%";
        document.getElementById("arrowAnim").style.display = "flex";
        this.mini = false;
      } else {
        console.log("closing sidebar");
        document.getElementById("mySidebar").style.width = "70px";
        document.getElementById("body").style.marginLeft = "0px";
        document.getElementById("bakeId").style.marginLeft = "2%";
        document.getElementById("arrowAnim").style.display = "none";
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


//notification panel
var box  = document.getElementById('notifiBox');
var down = false;


function toggleNotifi(){
  document.getElementById('notifiBox').style.display="flex";
	// if (down) {
	// 	box.style.height  = '0px';
	// 	box.style.opacity = 0;
	// 	down = false;
	// }else {
	// 	box.style.height  = '510px';
	// 	box.style.opacity = 1;
	// 	down = true;
	// }
}