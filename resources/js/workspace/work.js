const chartColors = {
  column: {
    series1: "#826af9",
    series2: "#d2b0ff",
    bg: "#f8d3ff",
  },
  success: {
    shade_100: "#7eefc7",
    shade_200: "#06774f",
  },
  donut: {
    series1: "#ffe700",
    series2: "#00d4bd",
    series3: "#826bf8",
    series4: "#2b9bf4",
    series5: "#FFA1A1",
  },
  area: {
    series3: "#a4f8cd",
    series2: "#60f2ca",
    series1: "#2bdac7",
  },
};
const renderChart = ({
  selector,
  type = "pie",
  labels,
  series,
  height = 350,
}) => {
  var donutChartEl = document.querySelector(selector),
    donutChartConfig = {
      chart: {
        height: height,
        type: type,
      },
      legend: {
        show: true,
        position: "bottom",
      },
      labels: labels,
      series: series,
      colors: [
        chartColors.donut.series1,
        chartColors.donut.series5,
        chartColors.donut.series3,
        chartColors.donut.series2,
      ],
      dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
          return parseInt(val) + "%";
        },
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: false,
              name: {
                fontSize: "2rem",
                fontFamily: "Montserrat",
              },
              value: {
                fontSize: "1rem",
                fontFamily: "Montserrat",
                formatter: function (val) {
                  return parseInt(val) + "%";
                },
              },
              total: {
                show: true,
                fontSize: "1.5rem",
                label: "Total",
              },
            },
          },
        },
      },
      responsive: [
        {
          breakpoint: 992,
          options: {
            chart: {
              height: 380,
            },
          },
        },
        {
          breakpoint: 576,
          options: {
            chart: {
              height: 320,
            },
            plotOptions: {
              pie: {
                donut: {
                  labels: {
                    show: true,
                    name: {
                      fontSize: "1.5rem",
                    },
                    value: {
                      fontSize: "1rem",
                    },
                    total: {
                      fontSize: "1.5rem",
                    },
                  },
                },
              },
            },
          },
        },
      ],
    };
  if (typeof donutChartEl !== undefined && donutChartEl !== null) {
    var donutChart = new ApexCharts(donutChartEl, donutChartConfig);
    donutChart.render();
  }
};

//make it importable
window.renderChart = renderChart;
