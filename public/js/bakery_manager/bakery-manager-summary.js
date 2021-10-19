
  function summaryViewFunction() {
    window.location.href="summaryView.php";
  }

  var xValues = ["id1", "id2", "id3", "id4"];
var yValues = [20,34,45,34];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Summary of this month Stock"
    }
  }
});

function dropTableFunction() {
  var x = document.getElementById("viewTablebtn");
    x.style.display = "block";
  var y = document.getElementById("chart2");
    y.style.display = "block";

}

var xValues = ["id1", "id2", "id3", "id4"];
var yValues = [20,34,45,34];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Summary of this month Stock"
    }
  }
});
