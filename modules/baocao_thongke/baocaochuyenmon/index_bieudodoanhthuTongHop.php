        <style>
		body{
			font-family:Arial, Helvetica, sans-serif;
			font-size:14px;
		}
		#chartNode{
			margin-left:auto;
			margin-right:auto;
			margin-top:auto;
			margin-bottom:auto;
		}
		.ghichuline
			{
			  font-size: 63px !important;
			  
			}
		.diengiai{
	    position:absolute;    	    
	    margin-top:-58px !important;
	  	/*left: 50%;*/
	    margin-left:auto;
		margin-right:auto;

	 
   		}

   		#reportTotalsLegendDiv,#reportTotalsLegendDiv2{
   			margin-left:auto;
		margin-right:auto;
   		}
		#chartNode{
			margin-left:auto;
			margin-right:auto;
			margin-top:auto;
			margin-bottom:auto;
		}
.dojoxLegendText
{
	 font-size: 12px !important;
	 font-weight: bold !important;
}
		</style>
		
		<script src="js/dojo/dojo/dojo.js" type="text/javascript"></script>
        
		<script>
		var postTo;
		var chartData =[];
		var chartData1 =[];
		var chartData2 =[];
		var chartData3 =[];
		var chartData4 =[];
		var chartData5 =[];
		var labelx=[];



		jQuery(document).ready(function() {

		loadData();

		})

 function loadData()
 {
 	postTo='pages.php?module=<?= $modules ?>&view=<?=$view?>&action=data_doanhthutheongay&kieuxem='+'<?php echo $_GET['kieuxem'] ;?>'+'&tungay='+ '<?php echo $_GET['tungay'] ;?>'+'&denngay='+'<?php echo $_GET['denngay'] ;?>';
 	
	$.getJSON(postTo).done(function(data){

   if($.trim(data)){  // neu co du lieu
     
     loadlibraryChart();
   	

	      var tam="";
	      $.each( data, function( key, val )
	       {     
	        for(i=0;i<val.length;i++)
	        {
        
				var tam=val[i]["cell"];
					chartData.push(tam[20]);
					chartData1.push((tam[25]));
					chartData2.push(parseInt(tam[30]));
					chartData3.push((tam[18]));
					chartData4.push((tam[19]));
					chartData5.push((tam[13]));
					labelx.push({ text:tam[1],value:(i+1)});  
					//alert(tam[1]);
				
         
             }
        
        
        	}); 


	       	var theme = dojox.charting.themes.Tom;
    		var chart = new dojox.charting.Chart2D("chartNode"

			, {
					title: "Dữ liệu biễu diễn từ <?=$_GET['tungay']?> đến <?=$_GET['denngay']?>	",
					titlePos: "bottom",
					titleGap: 20,
					titleFont: "normal normal normal 13pt Tahoma",
					titleFontColor: "orange"
			  }
    			);


						chart.setTheme(theme);

						chart.addPlot("tongdoanhthu", {
						type: "Lines",
						markers: true,
						fill: "red",
						stroke: {color:"red"},
						animate: {duration: 300}
						});
						chart.addPlot("thucthu", {
						type: "Lines",
						markers: true,
						fill: "#ff8a00",
						stroke: {color:"#ff8a00"},
						animate: {duration: 300}
						});
						chart.addPlot("SLK_ALL", {
						type: "Lines",
						markers: true,
						fill: "blue",
						stroke: {color:"blue"},
						animate: {duration: 300}
						});
						chart.addPlot("TongPTraNgoaiTru", {
						type: "Lines",
						markers: true,
						fill: "pink",
						stroke: {color:"pink"},
						animate: {duration: 300}
						});
						chart.addPlot("TongPTraNoiTru", {
						type: "Lines",
						markers: true,
						fill: "green",
						stroke: {color:"green"},
						animate: {duration: 300}
						});
						chart.addPlot("tonggiamdoanhthu", {
						type: "Lines",
						markers: true,
						fill: "yellow",
						stroke: {color:"yellow"},
						animate: {duration: 300}
						});

						var maxY =[chartData.max(),chartData1.max(),chartData2.max()];
						chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, });
						chart.addAxis("x", {
							 font: "normal normal bold 10pt Tahoma",
					            rotation:30,
					            fontColor: "orange",
					            majorTicks:true,
					            majorTickStep:1,
					            minorTicks:false,
					            labels: labelx,
					            includeZero: false

						
						}
						);


						chart.addSeries("Lượt khám ", chartData2, {plot: "SLK_ALL"});
						chart.addSeries("Tổng D.thu ",chartData,{plot: "tongdoanhthu"});
						chart.addSeries("D.thu ngoại trú ", chartData3, {plot: "TongPTraNgoaiTru"});
						chart.addSeries("D.thu nội trú ", chartData4, {plot: "TongPTraNoiTru"});
						chart.addSeries("Giảm D.thu ", chartData5, {plot: "tonggiamdoanhthu"});
						chart.addSeries("Thực thu ", chartData1, {plot: "thucthu"});


						var a1 = new dojox.charting.action2d.Tooltip(chart, "tongdoanhthu");
						var a2 = new dojox.charting.action2d.Tooltip(chart, "SLK_ALL");
						var a3 = new dojox.charting.action2d.Tooltip(chart, "TongPTraNgoaiTru");
						var a4 = new dojox.charting.action2d.Tooltip(chart, "TongPTraNoiTru");
						var a5 = new dojox.charting.action2d.Tooltip(chart, "tonggiamdoanhthu");
						var a6 = new dojox.charting.action2d.Tooltip(chart, "thucthu");


							chart.render();
                            var selectableLegend = new dojox.charting.widget.SelectableLegend({
                                                                chart: chart,
                                                                outline: false,
                                                                horizontal: true

                                                            }, "reportTotalsLegendDiv");

	

		}

       });
 }
function loadlibraryChart(){
	$("#chartNode").empty();


  chartData =[];
  chartData1 =[];
  chartData2 =[];
  chartData3 =[];
  chartData4 =[];
  chartData5 =[];
  labelx=[];

dojo.require("dijit.form.HorizontalRuleLabels");
dojo.require("dojox.charting.Chart2D");
dojo.require("dojox.charting.plot2d.Lines");
dojo.require("dojox.charting.plot2d.Markers");
dojo.require("dojox.charting.themes.Tom");
dojo.require("dojox.charting.plot2d.Columns");
dojo.require("dojox.charting.themes.Wetland");
dojo.require("dojox.charting.action2d.Highlight");
dojo.require("dojox.charting.action2d.Tooltip");
dojo.require("dojox.charting.themes.CubanShirts");
dojo.require("dojox.charting.widget.SelectableLegend");
dojo.require("dojox.charting.widget.Legend");
dojo.require("dojox.charting.axis2d.Default");
  $("#chartNode").css("width",$(window).width()-50+"px");
 
  //$("#chartNode").append('<div class="diengiai">Lượt khám<span class="ghichuline" style="color:blue">__</span>  Tổng DT<span class="ghichuline" style="color:red">__</span> Tổng DT ngoại trú<span class="ghichuline" style="color:white">__</span>   Tổng DT nội trú<span class="ghichuline" style="color:green">__</span>  Tổng giảm DT<span class="ghichuline"  style="color:yellow">__</span> Thực thu<span class="ghichuline"  style="color:#ff8a00">__</span></div><div style="height:12px"></div>');

}


		</script>
		<body>
	<link rel="stylesheet" href="js/dojo/dijit/themes/claro/claro.css" />
             <div class='claro'id='container'>

                <div id='reportTotalsLegendDiv' ></div>
        		<div id="chartNode" style="width:1000px;height:420px;"></div>
                
        		
             </div>
	</body>