(function($) {
  'use strict';
  $(function() {
    if ($('#dashoard-area-chart').length) {
      var lineChartCanvas = $("#dashoard-area-chart").get(0).getContext("2d");
      var data = {
        labels: ["Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
        datasets: [{
            label: 'Reprovado',
            data: [3, 5, 6.9, 7.3, 3],
            backgroundColor: 'rgba(213, 0, 0, 0.7)',
            borderColor: [
              'rgba(213, 0, 0, 1)'
            ],
            borderWidth: 3,
            fill: true
          },
          {
            label: 'Aprovado',
            data: [3.2, 3, 6, 7.9, 8.3],
            backgroundColor: 'rgba(45, 203, 112, 0.7)',
            borderColor: [
              'rgba(45, 203, 112,  1)'
            ],
            borderWidth: 3,
            fill: true
          },
		  
		  {
            label: 'Renault Kwid',
            data: [10, 6, 10, 7.3, 9.3],
            backgroundColor: 'rgba(239, 108, 0, 0.7)',
            borderColor: [
              'rgba(239, 108, 0, 1)'
            ],
            borderWidth: 3,
            fill: true
          }
        ]
      };
      var options = {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            },
            gridLines: {
              display: true
            }
          }],
          xAxes: [{
            ticks: {
              beginAtZero: true
            },
            gridLines: {
              display: false
            }
          }]
        },
        legend: {
          display: false
        },
        elements: {
          point: {
            radius: 3
          }
        }
      };
      var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: data,
        options: options
      });
    }
  });
})(jQuery);