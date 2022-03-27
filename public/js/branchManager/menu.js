function getDetails(){
    // alert("anupama");
    let categoryValue = document.getElementById( "categoryId" );
    let httprequest =new XMLHttpRequest();
    httprequest.onreadystatechange = function(){
        if (httprequest.readyState===4 && httprequest.status===200){
          console.log(httprequest.responseText)
          const obj = JSON.parse(httprequest.responseText);
            console.log(obj)
            // alert("anupama");
            //obj[0].order_id
            //data
  
            //start 1st chart
            var totalQuantity =[];  
            var categoryitemslist = [];
            for(i=0; i<obj[0].length; i++){
              categoryitemslist.push(obj[0][i].item_name);
              // totalQuantity.push(obj[0][i].total_quantity);
            }
            for(j=0;j<obj[0].length;j++){
              for(i=0; i<obj[1].length;i++){
                // categoryName.push(obj[1][i].category_name);
                if(obj[0][j].item_id==obj[1][i].item_id){
                  totalQuantity.push(obj[1][i].total_quantity);
                  j++
                }
                // else{
                //   totalQuantity.push('0');
                //   j++
                //   i=i-1
                // }
              }
              totalQuantity.push(0);
            }
              // alert(categoryName)
      
            var x3Values = categoryitemslist;
            var y3Values = totalQuantity;
            var barColors = ["#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145",
            "#800000",
            "#daa520"];
  
            new Chart("myChart3", {
              type: "bar",
              data: {
                labels: x3Values,
                datasets: [{
                  backgroundColor: barColors,
                  data: y3Values
                }]
              },
              options: {
                legend: {display: false},
                title: {
                  display: true,
                  text: "Branch Sales for the Last Week"
                },
                scales: {
                    xAxes: [{
                      gridLines: {
                          display: false
                      }
                    }],
                    yAxes: [{
                      gridLines: {
                          display: false
                      }
                    }]
              }
              }
            });
            //end of 1st chart
        }
    }
    
    var url="http://localhost/bakeit/branchManagerDailyRequirmentController/dailyRequirementCategoryChart/" + categoryValue.value;
    httprequest.open("POST",url,true)
    httprequest.send()
    
  }

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

function viewTable(){

    document.getElementById("menu").style.opacity= "0.1";
    document.getElementById("popUpView").style.display= "block";
    getDetails();

    
  
}
function closePopUpUseCancel(){
    document.getElementById("menu").style.opacity= "1";
    document.getElementById("popUpView").style.display= "none";

}


//   getDetails()