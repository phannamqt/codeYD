<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
	.dojoxLegendNode {border: 1px solid #ccc; margin: 5px 10px 5px 10px; padding: 3px}
	.dojoxLegendText {vertical-align: text-top; padding-right: 10px}
	body{
		overflow:scroll;
		}
</style>
<script type="text/javascript" src="js/dojo/dojo/dojo.js" data-dojo-config="async: true, parseOnLoad: true"></script>
<script type="text/javascript">
$(document).ready(function() {
	create_chart();
})

function create_chart(){
	require(["dojo/ready", "dijit/registry", 
         "dijit/form/Button", "dijit/form/CheckBox", "dijit/form/ComboBox",
         "dojox/charting/Chart", "dojox/charting/axis2d/Default",
         "dojox/charting/plot2d/Columns", "dojox/charting/plot2d/ClusteredColumns",
         "dojox/charting/plot2d/StackedColumns", "dojox/charting/plot2d/Bars",
         "dojox/charting/plot2d/ClusteredBars", "dojox/charting/plot2d/StackedBars",
         "dojox/charting/plot2d/Areas", "dojox/charting/plot2d/StackedAreas",
         "dojox/charting/plot2d/Pie", "dojox/charting/plot2d/Grid",
         "dojox/charting/themes/CubanShirts", "dojox/charting/widget/Legend",
         "dojox/lang/functional/sequence", "dojo/parser"],
         function(ready, registry, Button, CheckBox, ComboBox,
        		 Chart, Default, Columns, ClusteredColumns, StackedColumns,
        		 Bars, ClusteredBars, StackedBars, Areas, StackedAreas,
        		 Pie, Grid, Wetland, Legend, sequence){
			var chart, legend, size = 10, magnitude = 30;
			var data_l=[60,60,60,60,10,20,30];
			var data_2=[10,20,30,60,10,20,30];
			//alert();
			var makeObjects = function(){
				chart = new Chart("test");
				chart.setTheme(Wetland);
				chart.addAxis("x", {natural: true, includeZero: true, fixUpper: "minor"});
				chart.addAxis("y", {vertical: true, natural: true, includeZero: true, fixUpper: "minor"});
				chart.addPlot("default", {type:'StackedColumns', gap: 10});
				chart.addSeries("Chi phí",data_l, {stroke: {color: "white", width: 0}});	
				chart.addSeries("Lợi nhuận",data_2, {stroke: {color: "white", width: 0}});	
				chart.render();
				legend = new Legend({chart: chart}, "legend");
			};
			ready(makeObjects);
		 })
}
</script>
</head>

<body class="tundra">
<label style="font-size:25px">Biểu đồ doanh thu theo tháng</label><br />
    <div id="test" style="width: 1000px; height: 400px; display:inline-block"></div>
    <div id="legend" style="width:250px"></div>
</body>