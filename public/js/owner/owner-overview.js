//blue-#264653
//green-#2a9d8f
//#e9c46a
//#81b29a
//#8ecae6
//#f08080

// 1st colour pallate
// --sizzling-red: #ff595eff;
// --sunglow: #ffca3aff;
// --yellow-green: #8ac926ff;
// --green-blue-crayola: #1982c4ff;
// --royal-purple: #6a4c93ff;

// 2nd colour pallate
// --rich-black-fogra-29: #001524ff;
// --ming: #15616dff;
// --blanched-almond: #ffecd1ff;
// --amber-sae-ece: #ff7d00ff;
// --kobe: #78290fff;

// var xValues = ["Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
var jan = document.getElementById("jan").value;
var feb = document.getElementById("feb").value;
var march = document.getElementById("march").value;
var april = document.getElementById("april").value;
var may = document.getElementById("may").value;
var june = document.getElementById("june").value;
var july = document.getElementById("july").value;
var aug = document.getElementById("august").value;
var sep = document.getElementById("september").value;
var oct = document.getElementById("october").value;
var nov = document.getElementById("november").value;
var dec = document.getElementById("december").value;
window.onload = function()
    {
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var config = {
            type: 'line',
            data: {
                borderColor : "#fffff",
                datasets: [{
                    data: [jan,feb,march,april,may,june,july,aug,sep,oct,nov,dec],
                    borderColor : "#fff",
                    borderWidth : "3",
                    hoverBorderColor : "#000",
 
                    // label: 'Monthly Sales Report',
 
                    backgroundColor: [
                        "#0190ff",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#f312cb",
                        "#ff0060",
                        "#ffe400"
 
                    ],
                    hoverBackgroundColor: [
                        "#f38b4a",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#ffe400"
                    ]
                }],
 
                labels: ['Jan','Feb','March','April','May','June','July','Aug','Sep','Oct','Nov','Dec']
            },
 
            options: {
                responsive: true,
                legend: {display: false},
                title: {
                    display: true,
                    text: "Company Sales for the year"
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
        };
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);
 
 
    };
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
var x2Values = ["Kasbewa", "Maharagama", "Piliyandala"];
var y2Values = [55, 90, 44];
var barColors = ["red","orange","brown"];

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
      text: "Company Sales for the month"
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
var x3Values = ["Pastry", "Cakes", "Doughnuts","Muffins","Snacks","Beverages"];
var y3Values = [55, 150, 44, 80, 75, 90];
var barColors = ["red","orange","brown","#2a9d8f","#6a4c93ff","#8ac926ff"];

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

var x4Values = ["Choclate Cakes", "Butter Cakes", "Ribbon Cakes","Birthday Cakes","Coffee Cakes","Marbel Cakes","Fruit Cakes"];
var y4Values = [55, 90, 44, 30, 16, 32, 70];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#6a4c93ff",
  "#8ac926ff"
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