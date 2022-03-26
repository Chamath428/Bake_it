
function searchOrderByDate() {
    table = document.getElementById("dataTable");
    var pass = document.getElementById("order-date-picker").value;
    tr = table.getElementsByTagName("tr");
    if(tr){
        console.log("Hello");
    }

    var date = new Date(pass);
    var year = String(date.getFullYear());
    var month = String(date.getMonth()+1).padStart(2,"0");
    var todayDate = String(date.getDate()).padStart(2,"0");
    var  datePattern = year + "-" + month + "-"+ todayDate;
    console.log(datePattern);
    for(i = 0; i< tr.length; i++){
        td = tr[i].getElementsByTagName("td")[2];
        if(td){
            txtvalue = td.innerText;
            if(txtvalue == datePattern){
                tr[i].style.display="";
            }else {
                tr[i].style.display = "none";
            }
        }
    }
}
