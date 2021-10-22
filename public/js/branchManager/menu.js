
function viewTable(){
    
    document.getElementById('table').classList.replace("menu-table","menu-table-active");
    document.getElementById("save").classList.replace("save-btn-active","save-btn");
    document.getElementById("edit").classList.replace("edit-btn","edit-btn-active");
    // document.getElementById("quant").disabled = true;
    
}

                
function viewSave(){
    document.getElementById("edit").classList.replace("edit-btn-active","edit-btn");
    document.getElementById("save").classList.replace("save-btn","save-btn-active");
    // document.getElementById("quant").disabled = false;

  
}

function alertBox(){
    alert("Successfully saved");
    document.getElementById("save").classList.replace("save-btn-active","save-btn");
    document.getElementById("edit").classList.replace("edit-btn","edit-btn-active");
}