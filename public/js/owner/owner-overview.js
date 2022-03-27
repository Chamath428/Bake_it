//start of get function
function getDetails(){
  let httprequest =new XMLHttpRequest();
  httprequest.onreadystatechange = function(){
      if (httprequest.readyState===4 && httprequest.status===200){
        console.log(httprequest.responseText)
        const obj = JSON.parse(httprequest.responseText);
          console.log(obj) 

//chart1 start(db data)
        var totalsalesofyear1 = [];
        var monthlist = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        for(j=0;j<monthlist.length;j++){
            for(i=0; i<obj[4].length;i++){
              if(monthlist[j]==obj[4][i].month){
                totalsalesofyear1.push(obj[4][i].total_quantity);
                j++
              }
          }
          totalsalesofyear1.push(0);
        }
        var totalsalesofyear2 = [];
        for(j=0;j<monthlist.length;j++){
          for(i=0; i<obj[8].length;i++){
            if(monthlist[j]==obj[8][i].month){
              totalsalesofyear2.push(obj[8][i].total_quantity);
              j++
            }
          }
        totalsalesofyear2.push(0);
        }
        var totalsalesofyear3 = [];
        for(j=0;j<monthlist.length;j++){
          for(i=0; i<obj[9].length;i++){
            if(monthlist[j]==obj[9][i].month){
              totalsalesofyear3.push(obj[9][i].total_quantity);
              j++
            }
          }
        totalsalesofyear3.push(0);
        }

        var xValues = monthlist;
        var yvalues1 = totalsalesofyear1;
        var yvalues2 = totalsalesofyear2;
        var yvalues3 = totalsalesofyear3;
        new Chart("myChart", {
          type: "line",
          data: {
            labels: xValues,
            datasets: [{
                    label: 'Kasbewa', 
                    data: yvalues1,
                    // borderColor: Utils.CHART_COLORS.red,
                    borderColor: "red",
                    fill: false
                  }, {
                    label: 'Baththaramulla',  
                    data: yvalues2,
                    //borderColor: Utils.CHART_COLORS.green,
                    borderColor: "green",
                    fill: false
                  }, {
                    label: 'Piliyandala',  
                    data: yvalues3,
                    //borderColor: Utils.CHART_COLORS.blue,
                    borderColor: "blue",
                    fill: false
                  }
              ]
          },
          options: {
            // legend: {display: false},
            title: {
                display: true,
                text: "All Branches Sales for the year"
            },
            scales: {
                xAxes: [{
                  gridLines: {
                      display: false
                  }
                }],
                yAxes: [{
                  gridLines: {
                      display: true
                  }
                }]
            },
            animations: {
                tension: {
                  duration: 1000,
                  easing: 'linear',
                  from: 1,
                  to: 0,
                  loop: true
                }
            }
          }
        });
//chart1 end(db data)
//chart2 start(db data)
              var totalsalesofcurrentmonth = [];
              var branchList = [];
              for(i=0; i<obj[3].length; i++){
                branchList.push(obj[3][i].branch_name);
              }
              for(j=0;j<obj[3].length;j++){
                for(i=0; i<obj[1].length;i++){
                  if(obj[3][j].branch_id==obj[1][i].menu_id){
                    totalsalesofcurrentmonth.push(obj[1][i].total_quantity);
                    j++
                  }
                }
                totalsalesofcurrentmonth.push(0);
              }

              var x2Values = branchList;
              var y2Values = totalsalesofcurrentmonth;
              var barColors = ["#f4a261","#7209b7","#00aba9"];

              new Chart("myChart2", {
                type: "bar",
                data: {
                  labels: x2Values,
                  datasets: [{
                    backgroundColor: barColors,
                    data: y2Values
                  }]
                },
                options: {
                  legend: {display: false},
                  title: {
                    display: true,
                    text: "All Branches Sales for current month"
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
//chart2 end(db data)
//chart3 start(db data)
          var totalQuantity =[];  
          var categorylist = [];
          for(i=0; i<obj[0].length; i++){
            categorylist.push(obj[0][i].category_name);
          }
          for(j=0;j<obj[0].length;j++){
            for(i=0; i<obj[10].length;i++){             
              if(obj[0][j].category_id==obj[10][i].category_id){
                totalQuantity.push(obj[10][i].total_quantity);
                j++
              }
            }
            totalQuantity.push(0);
          }
            // alert(categoryName)

          var x3Values = categorylist;
          var y3Values = totalQuantity;
          var barColors = ["#003049","#edf060","#f77f00","#06d6a0","#e09f3e","#6a4c93","#8b1e3f","#d62828"];

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
                text: "Category Sales for the month"
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
//chart3 end(db data)

//chart4 start(db data)
          var totalQuantityItems =[];  
          var itemlist = [];
          for(i=0; i<obj[7].length; i++){
            itemlist.push(obj[7][i].item_name);
          }
          for(j=0;j<obj[7].length;j++){
            for(i=0; i<obj[6].length;i++){
              if(obj[7][j].item_id==obj[6][i].item_id){
                totalQuantityItems.push(obj[6][i].total_quantity);
                j++
              }
            }
            totalQuantityItems.push(0);
          }

          var x4Values = itemlist;
          var y4Values = totalQuantityItems;
          var barColors = ["#43aa8b","#6c698d","#f5d491","#004e89","#e9c46a","#f7c59f","#264653","#f06c9b","#43aa8b",  "#3c5233","#e76f51"];

          new Chart("myChart4", {
            type: "doughnut",
            data: {
              labels: x4Values,
              datasets: [{
                backgroundColor: barColors,
                data: y4Values
              }]
            },
            options: {
              title: {
                display: true,
                text: "Best Category Sales for the week"
              }
            }
          });
//chart4 end(db data)


      }
  }
  
  var url="http://localhost/bakeit/ownerReportController/getdetails";
  httprequest.open("POST",url,true)
  httprequest.send()
  
}
getDetails()
//end of getfunction
