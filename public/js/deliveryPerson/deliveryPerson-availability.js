function openSideMenu(){
    document.getElementById('side-menu').style.width='250px';
    document.getElementById('main').style.marginTop='150px';
}

function closeSideMenu(){
    document.getElementById('side-menu').style.width='0px';
    document.getElementById('main').style.marginTop='0px'; 
}

function closeIndexBody(){
    document.getElementById('index').style.display="none";
    console.log("working js");
}
function alert1(){
    alert('You are going to be available for deliveries');
    selectElement('availabile').style.display='block';
    // document.getElementById('body').style.display ='blur';
    selectElement('not-availabile').style.display='none';
}
function alert2(){
    alert('You are not available for deliveries');
    selectElement('availabile').style.display='none';
    selectElement('not-availabile').style.display='block';
}

