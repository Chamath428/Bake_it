function getDetails(){
  let httprequest =new XMLHttpRequest();
  httprequest.onreadystatechange = function(){
      if (httprequest.readyState===4 && httprequest.status===200){
        console.log(httprequest.responseText)
        const obj = JSON.parse(httprequest.responseText);
          console.log(obj)
          //obj[0].order_id
          //data

          //start 1st chart
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
          var barColors = ["red","orange","brown","	#800080","#800000","#daa520"];

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
                text: "Branch Sales for the month"
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

          //start of 2nd chart

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

          //end of 2nd chart

          //start of 3rd chart

          var totalsalesofyear = [];
          var monthlist = ["January","February","March","April","May","June","July","August","September","October","November","December"];
          for(j=0;j<monthlist.length;j++){
            for(i=0; i<obj[4].length;i++){
              // categoryName.push(obj[1][i].category_name);
              if(monthlist[j]==obj[4][i].month){
                totalsalesofyear.push(obj[4][i].total_quantity);
                j++
              }
             
            }
            totalsalesofyear.push(0);
          }

          var xValues = monthlist;
          var yvalues = totalsalesofyear;
          // var xValues = Utils.months({count: 12});
          new Chart("myChart", {
            type: "line",
            data: {
              labels: xValues,
              datasets: [{ 
                data: yvalues,
                borderColor: "red",
                fill: false
              }]
            },
            options: {
              legend: {display: false},
              title: {
                  display: true,
                  text: "Branch Sales for the year"
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
          //end of 3rd chart

          //start of 4th chart

          var totalsalesoflastweek = [];
          var daylist = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          for(j=0;j<daylist.length;j++){
            for(i=0; i<obj[5].length;i++){
              // categoryName.push(obj[1][i].category_name);
              if(daylist[j]==obj[5][i].order_date){
                totalsalesoflastweek.push(obj[5][i].total_quantity);
                j++
              }
             
            }
            totalsalesoflastweek.push(0);
          }

          var x2Values = daylist;
          var y2Values = totalsalesoflastweek;
          var barColors = ["red","orange","brown","blue","green","#00aba9","pink"];

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
                text: "Branch Sales for last week"
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

          //end of 4th chart
      }
  }
  
  var url="http://localhost/bakeit/branchManagerReportController/getdetails";
  httprequest.open("POST",url,true)
  httprequest.send()
  
}
getDetails()