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
  
  //postTo='pages.php?module=<?= $modules ?>&view=<?=$view?>&action=data_DoanhThu_Parent_Nam&OPTION=nam&tungay='+ '<?php echo $_GET['tungay'] ;?>'+'&denngay='+'<?php echo $_GET['denngay'] ;?>'+'&nam=2015';
  postTo='pages.php?module=<?= $modules ?>&view=<?=$view?>&action=data_DoanhThu_Parent_Nam&OPTION=nam&mucDT='+'<?php echo $_GET['mucDT'] ;?>'+'&tungay='+ '<?php echo $_GET['tungay'] ;?>'+'&denngay='+'<?php echo $_GET['denngay'] ;?>'+'&nam='+'<?php echo $_GET['nam'] ;?>';
  
  $.getJSON(postTo).done(function(data){

   if($.trim(data)){  // neu co du lieu
     
     loadlibraryChart();
    

        var tam="";
        $.each( data, function( key, val )
         {     
          for(i=0;i<val.length;i++)
          {
        
          var tam=val[i]["cell"];
        
        chartData.push(tam[1]);
        //chartData1.push((tam[5]));
        chartData2.push((tam[3]));
        chartData3.push((tam[4])/10);
        chartData4.push((tam[5]));
        labelx.push({ text:tam[6],value:(i+1)});  
         
             }
        
        
          }); 


          var theme = dojox.charting.themes.Tom;
        var chart = new dojox.charting.Chart2D("chartNode"

      , {
          title: "Dữ liệu biễu diễn theo năm <?=$_GET['nam']?> (Đơn vị tính 1 triệu đồng) ",
          titlePos: "bottom",
          titleGap: 20,
          titleFont: "normal normal normal 13pt Tahoma",
          titleFontColor: "orange"
        }
          );


                        chart.setTheme(theme);

                            chart.addPlot("default", {type:"ClusteredColumns",gap:10,enableCache: true,animate: { duration: 1000} }).
                            addSeries("Doanh Thu",chartData,{
                                        stroke: {
                                           // color: "black",
                                            width: 1
                                        },
                                        animate: {duration: 300},
                                          tooltip: "Doanh Thu" ,
                                          text: "Conteggio Destinatari",
                                        fill: "red" })
                            . addSeries("Doanh thu sau giá gốc",chartData2,{
                                        stroke: {
                                          //  color: "black",
                                            width: 1
                                        },animate: {duration: 300},
                                        tooltip: "Doanh thu  sau giá gốc " ,
                                          text: "Conteggio Destinatari",
                                        fill: "blue" })
                                          . addSeries("Số lượt/10",chartData3,{
                                        stroke: {
                                          //  color: "black",
                                            width: 1
                                        },animate: {duration: 300},
                                    //    tooltip: "Doanh thu  sau giá gốc " ,
                                    //      text: "Conteggio Destinatari",
                                        fill: "green" })


                            ;

            var maxY =[chartData.max(),chartData1.max(),chartData2.max()];
            chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true,   stroke: "green", font: "normal normal bold 10pt Tahoma"});
            chart.addAxis("x", {
            includeZero: false, font: "normal normal bold 10pt Tahoma",
            labels: labelx,
            rotation:45,
            fontColor: "orange",
            majorTicks:true,
            majorTickStep:1,
            minorTicks:false,
            stroke: "green",
            }
            );


            var a1 = new dojox.charting.action2d.Tooltip(chart, "default");
            var a2 = new dojox.charting.action2d.Highlight(chart, "default");

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

dojo.require("dojox.charting.Chart2D");
dojo.require("dojox.charting.themes.Tom");
dojo.require("dojox.charting.plot2d.Columns");
dojo.require("dojox.charting.action2d.Highlight");
dojo.require("dojox.charting.action2d.Tooltip");
dojo.require("dojox.charting.widget.SelectableLegend");
$("#chartNode").css("width",$(window).width()-50+"px");
 

}


    </script>
<body>
<link rel="stylesheet" href="js/dojo/dijit/themes/claro/claro.css" />
<div class='claro'id='container'>

    <div id='reportTotalsLegendDiv' ></div>
    <div id="chartNode" style="width:1000px;height:420px;"></div>


</div>
</body>