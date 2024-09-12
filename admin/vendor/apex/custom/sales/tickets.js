var options = {
  chart: {
    height: 232,
    type: 'donut',
  },
  labels: ['Approved', 'Rejected'],
  series: [600, 405,],
  legend: {
    position: 'bottom',
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 2,
    colors: ['#ffffff'],
  },
  colors: ['#1273eb', '#59a2fb'],
  tooltip: {
    y: {
      formatter: function(val) {
        return  "$" + val
      }
    }
  },
}
var chart = new ApexCharts(
  document.querySelector("#tickets"),
  options
);
chart.render();