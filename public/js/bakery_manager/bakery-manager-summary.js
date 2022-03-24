
var x2Values = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
var y2Values = [55, 90, 44, 23, 43, 54, 65];
var barColors = ["red", "orange", "brown", "blue", "green", "#00aba9", "pink"];

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
    legend: { display: false },
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




function getDetails() {
  let httprequest = new XMLHttpRequest();
  httprequest.onreadystatechange = function () {
    if (httprequest.readyState === 4 && httprequest.status === 200) {
      console.log(httprequest.responseText)
      const obj = JSON.parse(httprequest.responseText);
      console.log(obj)
      //obj[0].order_id
      //data
      var categoryName = [];
      var totalQuantity = [];
      for (i = 0; i < obj[1].length; i++) {
        categoryName.push(obj[1][i].category_name);
        totalQuantity.push(obj[1][i].total_quantity);
      }
      alert(categoryName)

      var x3Values = categoryName;
      var y3Values = totalQuantity;
      var barColors = ["red", "orange", "brown", "	#800080", "#800000", "#daa520"];

      new Chart("myChart", {
        type: "bar",
        data: {
          labels: x3Values,
          datasets: [{
            backgroundColor: barColors,
            data: y3Values
          }]
        },
        options: {
          legend: { display: false },
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
    }
  }

  var url = "http://localhost/bakeit/branchManagerReportController/getdetails";
  httprequest.open("POST", url, true)
  httprequest.send()

}
getDetails()