$(document).ready(function(){
      $.ajax({
        url: 'http://localhost/team-10/admin/pie_data/compare1.php',
        type: 'GET',
        success : function(data) {
            var chartData1=data;
		url: 'http://localhost/team-10/admin/pie_data/compare2.php',
			type: 'GET',
			success : function(data) {
            var chartData2=data;			
				
          apiChart = new FusionCharts({
            type: 'msline',
            renderAt: 'chart-container-compare',
            width: '550',
            height: '350',
            dataFormat: 'json',
            dataSource: {
              "chart": {
        "caption": "Allocations by Programs",
        "numberprefix": "Rs",
        "plotgradientcolor": "",
        "bgcolor": "FFFFFF",
        "showalternatehgridcolor": "0",
        "divlinecolor": "CCCCCC",
        "showvalues": "0",
        "showcanvasborder": "0",
        "canvasborderalpha": "0",
        "canvasbordercolor": "CCCCCC",
        "canvasborderthickness": "1",
        "yaxismaxvalue": "30000",
        "captionpadding": "30",
        "linethickness": "3",
        "yaxisvaluespadding": "15",
        "legendshadow": "0",
        "legendborderalpha": "0",
        "palettecolors": "#f8bd19,#008ee4,#33bdda,#e44a00,#6baa01,#583e78",
        "showborder": "0"
    }, "categories": [
        {
            "category": [
                {
                    "label": "Jan",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Feb",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Mar",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Apr",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "May",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Jun",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Jul",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Aug",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Sep",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Oct",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Nov",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                },
                {
                    "label": "Dec",
                    "stepSkipped": false,
                    "appliedSmartLabel": true
                }
            ]
        }
    ],
              "dataset": {
				  "seriesname":"Program1",
				  "data" : chartData1
			  },
			  {
				  "seriesname":"Program2",
				  "data" : chartData2
			  }
            }
          });
          apiChart.render();
        }
			});
		});