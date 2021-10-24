
var quant=document.getElementsByClassName('quant');

function viewTable(){
    
    document.getElementById('table').classList.replace("menu-table","menu-table-active");
    document.getElementById("save").classList.replace("save-btn-active","save-btn");
    document.getElementById("edit").classList.replace("edit-btn","edit-btn-active");
    $(".quant").prop("readonly", true);
    // document.getElementById("quant").disabled = true;
    
}

                
function viewSave(){
    document.getElementById("edit").classList.replace("edit-btn-active","edit-btn");
    document.getElementById("save").classList.replace("save-btn","save-btn-active");
    $(".quant").prop("readonly", false);
    // $("#lastname").prop("readonly", false);

    // document.getElementById("quant").disabled = false;

  
}

function alertBox(){
    alert("Successfully saved");
    document.getElementById("save").classList.replace("save-btn-active","save-btn");
    document.getElementById("edit").classList.replace("edit-btn","edit-btn-active");
    $(".quant").prop("readonly", true);
}

quant.forEach(onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
})

