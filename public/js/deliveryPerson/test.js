function openSideMenu(){
    document.getElementById('side-nav').style.display="grid";
    document.getElementById('header-navigation').style.display ="none";
    document.getElementById('close').style.display="flex";
    document.getElementById('open').style.display ="none";
}
function closeSideMenu(){
    document.getElementById('side-nav').style.display="none";
    // document.getElementById('header-navigation').style.display ="flex";
    document.getElementById('open').style.display ="block";
    document.getElementById('close').style.display="none";
}
