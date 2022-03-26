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
        // var xValues = Utils.months({count: 12});
        new Chart("myChart", {
          type: "line",
          data: {
            labels: xValues,
            datasets: [{ 
                    data: yvalues1,
                    borderColor: "red",
                    fill: false
                  }, { 
                    data: yvalues2,
                    borderColor: "green",
                    fill: false
                  }, { 
                    data: yvalues3,
                    borderColor: "blue",
                    fill: false
                  }
              ]
          },
          options: {
            legend: {display: false},
            title: {
                display: true,
                text: "All Branch Sales for the year"
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
              for(j=0;j<obj[0].length;j++){
                for(i=0; i<obj[1].length;i++){
                  // categoryName.push(obj[1][i].category_name);
                  if(obj[0][j].category_id==obj[1][i].category_id){
                    totalsalesofcurrentmonth.push(obj[1][i].total_quantity);
                    j++
                  }
                }
                totalsalesofcurrentmonth.push(0);
              }

              var x2Values = branchList;
              var y2Values = totalsalesofcurrentmonth;
              var barColors = ["#f4a261","#2a9d8f","#e9c46a","#264653","#e76f51","#00aba9","pink"];

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
                    text: "Branch Sales for current month"
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
            // totalQuantity.push(obj[0][i].total_quantity);
          }
          for(j=0;j<obj[0].length;j++){
            for(i=0; i<obj[1].length;i++){
              // categoryName.push(obj[1][i].category_name);
              if(obj[0][j].category_id==obj[1][i].category_id){
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

          var x3Values = categorylist;
          var y3Values = totalQuantity;
          var barColors = ["#003049","#edf060","#f77f00","#06d6a0","#e09f3e","#6a4c93","#2ec4b6","#8b1e3f","#d62828"];

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
            // totalQuantity.push(obj[0][i].total_quantity);
          }
          for(j=0;j<obj[7].length;j++){
            for(i=0; i<obj[6].length;i++){
              // categoryName.push(obj[1][i].category_name);
              if(obj[6][j].item_id==obj[7][i].item_id){
                totalQuantityItems.push(obj[6][i].total_quantity);
                j++
              }
              // else{
              //   totalQuantity.push('0');
              //   j++
              //   i=i-1
              // }
            }
            totalQuantityItems.push(0);
          }

          var x4Values = itemlist;
          var y4Values = totalQuantityItems;
          var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145",
            "#800000",
            "#daa520"
          ];

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




//hardcoded chart1 start
// var xValues = ["Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
// new Chart("myChart", {
//   type: "line",
//   data: {
//     labels: xValues,
//     datasets: [{ 
//       data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
//       borderColor: "red",
//       fill: false
//     }, { 
//       data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
//       borderColor: "orange",
//       fill: false
//     }, { 
//       data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
//       borderColor: "brown",
//       fill: false
//     }]
//   },
//   options: {
//     legend: {display: false},
//     title: {
//         display: true,
//         text: "Company Sales for the year"
//     },
//     scales: {
//         xAxes: [{
//            gridLines: {
//               display: false
//            }
//         }],
//         yAxes: [{
//            gridLines: {
//               display: true
//            }
//         }]
//     },
//     animations: {
//         tension: {
//           duration: 1000,
//           easing: 'linear',
//           from: 1,
//           to: 0,
//           loop: true
//         }
//     }
//   }
// });



//hardcoded chart 4 start
// var x4Values = ["Choclate Cakes", "Butter Cakes", "Ribbon Cakes","Birthday Cakes","Coffee Cakes","Marbel Cakes","Fruit Cakes"];
// var y4Values = [55, 90, 44, 30, 16, 32, 70];
// var barColors = [
//   "#b91d47",
//   "#00aba9",
//   "#2b5797",
//   "#e8c3b9",
//   "#1e7145",
//   "#6a4c93ff",
//   "#8ac926ff"
// ];

// new Chart("myChart4", {
//   type: "doughnut",
//   data: {
//     labels: x4Values,
//     datasets: [{
//       backgroundColor: barColors,
//       data: y4Values
//     }]
//   },
//   options: {
//     title: {
//       display: true,
//       text: "Best Category Sales for the week"
//     }
//   }
// });