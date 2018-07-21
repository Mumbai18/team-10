$(document).ready(function(){
      $.ajax({
        url: 'http://localhost/team-10/admin/pie_data.php',
        type: 'GET',
        success : function(data) {
            var chartData=data;    
				var chartProperties = {
             "caption": "Split of patients by types",
            "subCaption": "This year",
            "numberPrefix": "",
            "showPercentInTooltip": "0",
            "decimals": "1",
            "useDataPlotColorForLabels": "1",
            //Theme
            "theme": "fint"
          };
          apiChart = new FusionCharts({
            type: 'pie2d',
            renderAt: 'chart-container',
            width: '550',
            height: '350',
            dataFormat: 'json',
            dataSource: {
              "chart": chartProperties,
              "data": chartData
            }
          });
          apiChart.render();
        }
			});
		});