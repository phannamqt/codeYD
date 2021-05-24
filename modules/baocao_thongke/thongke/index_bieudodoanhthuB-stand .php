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
        </style>
        
        <script src="js/dojo/dojo/dojo.js" type="text/javascript"></script>
        
        <script>
				dojo.require("dojox.charting.Chart2D");
				dojo.require("dojox.charting.plot2d.Columns");
				dojo.require("dojox.charting.themes.Wetland");
				dojo.require("dojox.charting.action2d.Highlight");
				dojo.require("dojox.charting.action2d.Tooltip");
				dojo.require("dojox.charting.themes.CubanShirts");
				dojo.require("dojox.charting.widget.SelectableLegend");
				dojo.require("dojox.charting.widget.Legend");

dojo.addOnLoad(function() {
    var fails = 100;
    var totaldests = 1000;
    var totalrecepitsusers = 300;
    var c = new dojox.charting.Chart2D("reportTotalsChartDiv");
    c.addPlot("default", {
        type: "Columns",
        tension: 3,
        gap: 50
    }).addAxis("x", {
        labels: [{
            value: 1,
            text: "Conteggio Destinatari"},
        {
            value: 2,
            text: "Con notifiche DSN"}],
        fixLower: "major",
        fixUpper: "major"
    }).addAxis("y", {
        vertical: true,
        fixLower: "major",
        fixUpper: "major",
        min: 0
    }).setTheme(dojox.charting.themes.Wetland).addSeries("Fallimenti", [{
        x: 1,
        y: 0},
    {
        y: fails,
        x: 2,
        tooltip: "Destinatari con rivevute di tipo failed: " + fails,
        text: "con fallimenti"}], {
        stroke: {
            color: "red",
            width: 2
        },
        fill: "orange"
    }).addSeries("Destinatari", [
        {
        y: totaldests,
        x: 1,
        tooltip: "Destinatari del messaggio: " + totaldests,
        text: "Conteggio Destinatari",
      stroke: {
            color: "blue",
            width: 2
        },
        fill: "lightblue"}, 
])
        .addSeries("Con ricevute di ritorno",[
        {x:1,y:1},
        {
       
        y: totalrecepitsusers,
        x: 2,
        tooltip: "Destinatari con ricevute di ritorno: " + totalrecepitsusers,
        text: "Conteggio destinatari con ricevute di ritorno",
color: "lightgreen",
         stroke: {
            color: "green",
            width: 2
        }
    }]);
var a1 = new dojox.charting.action2d.Tooltip(c, "default");

var a2 = new dojox.charting.action2d.Highlight(c, "default");

c.render();
        var selectableLegend = new dojox.charting.widget.SelectableLegend({
        chart: c,
        outline: false,
        horizontal: false
    }, "reportTotalsLegendDiv");
    
});

            
        </script>
    <body>
   <!--  <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/dojo/1.5/dijit/themes/claro/claro.css"
/> -->
<link rel="stylesheet" href="js/dojo/dijit/themes/claro/claro.css" />
<!-- D:\xampp\htdocs\giaidoan2\js\dojo\dijit\themes\claro -->
<!-- js/dojo/dojo/dojo.js -->
        <div class='claro'>
    SMTP Delivery Status Notifications Chart
    
    <br/>
    <br/>
    <div id="reportTotalsChartDiv" style='display:block; clear:none; z-index:999; width:100%; height:100%;' >
        
    </div>
    
    <div id='reportTotalsLegendDiv' ></div>
    
    
</div>
    </body>