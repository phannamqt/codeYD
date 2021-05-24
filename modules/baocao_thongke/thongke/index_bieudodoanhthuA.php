        <style>


.ui-layout-toggler{
  /*background:#FF9;
  border: 1px solid #000;*/
  border: 1px solid #000;
  background-color: #cc0000;
        background: -moz-linear-gradient(bottom, #FF9 30%, #330000 70%);
        background: -o-linear-gradient(bottom, #FF9 30%, #330000 70%);
        background: -ms-linear-gradient(bottom, #FF9 30%, #330000 70%);
        background: -webkit-gradient(linear,left bottom,left top,color-stop(0.3, #FF9),color-stop(0.7, #330000));
}

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
		#chartNode2{
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
	 
	    margin-left:auto;
		margin-right:auto;

   		}
   		#reportTotalsLegendDiv,#reportTotalsLegendDiv2{
   			margin-left:auto;
		margin-right:auto;
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
	  	create_layout();
		   
		 loadlibraryChart();
		

		
		loadData2();
		loadData();

})
 function loadData()
 {
			  chartData =[];
			  chartData1 =[];
			  chartData2 =[];
			  chartData3 =[];
			  chartData4 =[];
			  chartData5 =[];
			  labelx=[];
  $("#chartNode").empty();
  $("#chartNode").css("width",$('#bang3_east').width()-50+"px");
  $("#chartNode").css("height",$('#bang3_east').height()-50+"px");
  $("#reportTotalsLegendDiv").css({"margin-left": "auto", "margin-right": "auto"}); 
 
 	postTo='pages.php?module=<?= $modules ?>&view=<?=$view?>&action=data_DoanhThu_Parent&OPTION=CAO&mucDT='+'<?php echo $_GET['mucDT'] ;?>'+'&tungay='+ '<?php echo $_GET['tungay'] ;?>'+'&denngay='+'<?php echo $_GET['denngay'] ;?>';
	$.getJSON(postTo).done(function(data){

   if($.trim(data)){  // neu co du lieu
     
  
   	

	      var tam="";
	      $.each( data, function( key, val )
	       {     
	        for(i=0;i<val.length;i++)
	        {
        
				var tam=val[i]["cell"];
				labelx.push({ text:tam[3],value:(i+1)});  
				chartData.push(tam[4]);
				chartData1.push((tam[5]));
				chartData2.push((tam[6]));
				chartData3.push((tam[7])/10);
				chartData4.push((tam[8]));
				
         
             }
        
        
        	}); 


	       	var theme = dojox.charting.themes.Tom;
    		var chart = new dojox.charting.Chart2D("chartNode"

			, 
			{
					title: "NHÓM DOANH THU >= <?=$_GET['mucDT']?> TRIỆU ĐỒNG",
					titlePos: "bottom",
					titleGap: 20,
					titleFont: "normal normal normal 12pt Tahoma",
					titleFontColor: "orange"
			 }
    			);
    						chart.setTheme(theme);

                chart.addPlot("default", {type:"ClusteredColumns",gap:10,enableCache: true,animate: { duration: 1000} }).
                            addSeries("Doanh Thu",chartData,{
                                        stroke: {
                                         
                                            width: 1
                                        },
                                        animate: {duration: 300},
                                    
                                        fill: "red" })
                            . addSeries("Doanh thu sau giá gốc",chartData2,{
                                        stroke: {
                                         
                                            width: 1
                                        },animate: {duration: 300},
                                   
                                        fill: "blue" })
                             . addSeries("Số lượt/10",chartData3,{
                                        stroke: {
                                        
                                            width: 1
                                        },animate: {duration: 300},
                               
                                        fill: "green" })


                            ;

                          
                        
							var maxY =[chartData.max(),chartData2.max(),chartData3.max()];
							
					
                            chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true,   stroke: "green", font: "normal normal bold 10pt Tahoma",});
                             chart.addAxis("x", {
            includeZero: false, stroke: "green",
            labels: labelx,
           /* title: "Nhóm",
            titleFont: "bold bold bold 12pt Arial,sans-serif",*/
            font: "normal normal bold 10pt Tahoma",
            rotation:45,
            fontColor: "orange",
            majorTicks:true,
            majorTickStep:1,
            minorTicks:false,
            //max: 15
            
            }
            );

                        var a1 = new dojox.charting.action2d.Tooltip(chart, "default");
                         var a12 = new dojox.charting.action2d.Tooltip(chart, "default");
                      //  var Zo = new dojox.charting.action2d.MouseZoomAndPan(chart, "default", { axis: "x" ,axis: "y"});
                       // var Zo2 = new dojox.charting.action2d.TouchZoomAndPan(chart, "default", { axis: "x",axis: "y" });

						          	chart.render();
                            var selectableLegend = new dojox.charting.widget.SelectableLegend({
                                                                chart: chart,
                                                                outline: false,
                                                                horizontal: true

                                                            }, "reportTotalsLegendDiv");
                             var a = new Magnify(chart, "default", {duration: 200, scale: 1.1});


		}

       });
 }
  function loadData2()
 {
			  BchartData =[];
			  BchartData1 =[];
			  BchartData2 =[];
			  BchartData3 =[];
			  BchartData4 =[];
			  BchartData5 =[];
			  Blabelx=[];

   $("#chartNode2").empty();
  $("#chartNode2").css("width",$('#bang3_center').width()-50+"px");
  $("#chartNode2").css("height",$('#bang3_center').height()-50+"px");
  $("#reportTotalsLegendDiv2").css({"margin-left": "auto", "margin-right": "auto"}); 
 	postTo='pages.php?module=<?= $modules ?>&view=<?=$view?>&action=data_DoanhThu_Parent&OPTION=THAP&mucDT='+'<?php echo $_GET['mucDT'] ;?>'+'&tungay='+ '<?php echo $_GET['tungay'] ;?>'+'&denngay='+'<?php echo $_GET['denngay'] ;?>';
	$.getJSON(postTo).done(function(data){

   if($.trim(data)){  // neu co du lieu
     
 
	      var tam="";
	      $.each( data, function( key, val )
	       {     
	        for(i=0;i<val.length;i++)
	        {
        
				var tam=val[i]["cell"];
				Blabelx.push({text:tam[3],value:(i+1)});  
				BchartData.push(tam[4]);
				BchartData1.push((tam[5]));
				BchartData2.push((tam[6]));
				BchartData3.push((tam[7])/10);
				BchartData4.push((tam[8]));
				
         
             }
        
        
        	}); 


	      var theme2 = dojox.charting.themes.Tom;
    		var chart2 = new dojox.charting.Chart2D("chartNode2"

			, 
			{
					title: "NHÓM DOANH THU < <?=$_GET['mucDT']?> TRIỆU ĐỒNG",
					titlePos: "bottom",
					titleGap: 20,
					titleFont: "normal normal normal 13pt Tahoma",
					titleFontColor: "orange"
			 }
    			);
    						chart2.setTheme(theme2);

                            chart2.addPlot("default", {type:"ClusteredColumns",gap:10,enableCache: true,animate: { duration: 1000} })

            .addAxis("x", {
            includeZero: false,
            labels: Blabelx,
            rotation:45,
            fontColor: "orange",
            majorTicks:true,
            majorTickStep:1,
            minorTicks:false,  stroke: "green",
            font: "normal normal bold 10pt Tahoma",
    }).
            addSeries("Doanh Thu",BchartData,{
                                        stroke: {
                                           // color: "black",
                                            width: 1
                                        },
                                        animate: {duration: 300},
                                         // tooltip: "Doanh Thu" ,
                                        //  text: "Conteggio Destinatari",
                                        fill: "red" })
                            . addSeries("Doanh thu sau giá gốc",BchartData2,{
                                        stroke: {
                                          //  color: "black",
                                            width: 1
                                        },animate: {duration: 300},
                                    //    tooltip: "Doanh thu  sau giá gốc " ,
                                    //      text: "Conteggio Destinatari",
                                        fill: "blue" })
                             . addSeries("Số lượt/10",BchartData3,{
                                        stroke: {
                                          //  color: "black",
                                            width: 1
                                        },animate: {duration: 300},
                                    //    tooltip: "Doanh thu  sau giá gốc " ,
                                    //      text: "Conteggio Destinatari",
                                        fill: "green" })


                            ;

                          
                        
							var maxY2 =[BchartData.max(),BchartData2.max(),BchartData3.max()];
							
					
                            chart2.addAxis("y", { min: 0, max: maxY2.max(), vertical: true,  stroke: "green"
                              , font: "normal normal bold 10pt Tahoma",});
         
                        var a12 = new dojox.charting.action2d.Tooltip(chart2, "default");

                        var a22 = new dojox.charting.action2d.Highlight(chart2, "default");
                        //var Zo = new dojox.charting.action2d.MouseZoomAndPan(chart2, "default", { axis: "y" });
                     //   var Zo2 = new dojox.charting.action2d.TouchZoomAndPan(chart2, "default", { axis: "y" });

							          chart2.render();

                        var selectableLegend = new dojox.charting.widget.SelectableLegend({
                                                                chart: chart2,
                                                                outline: false,
                                                                horizontal: true

                                                            }, "reportTotalsLegendDiv2");


		}

       });
 }
function loadlibraryChart(){
dojo.require("dojox.charting.Chart2D");
dojo.require("dojox.charting.themes.Tom");
dojo.require("dojox.charting.plot2d.Columns");
dojo.require("dojox.charting.action2d.Highlight");
dojo.require("dojox.charting.action2d.Tooltip");
dojo.require("dojox.charting.widget.SelectableLegend");
dojo.require("dojox.charting.action2d.MouseZoomAndPan");
dojo.require("dojox.charting.action2d.TouchZoomAndPan");
dojo.require("dojox.charting.axis2d.Default");
dojo.require("dojox.charting.action2d.Magnify");



}


function create_layout(){
  $("#bang3").css("height",$(window).height()-4+"px");
  $("#bang3").css("width",$(window).width()+"px");

  $("#bang3_east").fadeIn(1000);
  $('#bang3').layout({
    resizerClass: 'ui-state-default'
    , east: {
      resizable: true
      , size: "50%"
      , resizerDblClickToggle: false
      , onresize_end: function() {
       resize_control();
     }
     , onopen_end: function() {
      resize_control();
    }
    , onclose_end: function() {
      resize_control();
    }

  }
  , center: {
    resizable: true
    , size: "50%"
    , resizerDblClickToggle: false
    , onresize_end: function() {
      resize_control();
    }
    , onopen_end: function() {
      resize_control();
    }
    , onclose_end: function() {
      resize_control();
    }
  }
});


}

			
		</script>
	<body>
	<!-- <link rel="stylesheet" href="js/dojo/dijit/themes/claro/claro.css" /> soria/tundra-->
  <link rel="stylesheet" href="js/dojo/dijit/themes/tundra/tundra.css" />
             <div class='tundra' id='container'>



				 <div id="bang3" >
                                <div class="ui-layout-east" id="bang3_east" style='display:block; clear:none; z-index:999; width:100%; height:100%;' 
                                >

                             <div id='reportTotalsLegendDiv' ></div>
						        		<div id="chartNode" style="width:400px;height:420px;"></div>


						                
						        		

                                </div>

			                        <div class="ui-layout-center" id="bang3_center" style='display:block; clear:none; z-index:999; width:100%; height:100%;' >
			                        	 <div id='reportTotalsLegendDiv2' ></div>
			                      
			                                <div id="chartNode2" style="width:400px;height:420px;"></div>
						                
						        	
			                       
			                          </div>

                 </div>


             </div>
	</body>