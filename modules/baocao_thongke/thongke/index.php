<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script language="JavaScript" src="js/SlickGrid-2.0-frozen/lib/firebugx.js"></script>

<script src="js/SlickGrid-2.0-frozen/lib/jquery.event.drag-2.2.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellrangedecorator.js"></script>
<script src="js/SlickGrid-2.0-frozen/lib/jquery.mousewheel.js"></script>

<script src="js/SlickGrid-2.0-frozen/slick.core.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.editors.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.formatters.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.rowselectionmodel.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.grid.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.dataview.js"></script>
<script src="js/SlickGrid-2.0-frozen/controls/slick.pager.js"></script>
<script src="js/SlickGrid-2.0-frozen/controls/slick.columnpicker.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.autotooltips.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellselectionmodel.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellrangeselector.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.groupitemmetadataprovider.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.summaryfooter.js"></script>


<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/slick.grid.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/controls/slick.pager.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/controls/slick.columnpicker.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/slick.grid-edit.css"   type="text/css"/>
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/plugins/slick.summaryfooter.css" type="text/css"/>

<style type="text/css">
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
#diengiai_sinhton
{
  height: 20px!important;
}
th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }

#ovalChart{
  
/*background-color: #FF9;*/
  border-radius: 1%;
   border: 1px solid #000;
}
#pieChartNode{
  /*//background-color: #FF9;*/
  border-radius: 1%;
   border: 1px solid #000;
}
.ghichuline
{
  font-size: 63px !important;
  
  
}
.diengiai_sinhton, .diengiai_thetrang{
    position:absolute;
    width:500px !important;
    display:inline-block!important;
    left: 88px !important;
    font-style: bold !important;
   }

.textright,.slick-summaryfooter-column{
  text-align:right!important;
}
.headerAlignWithBorder{
  text-align:center!important;
}



.slick-summaryfooter-column {
  background:#53A513;
  border-right: 1px solid silver;
}
.slick-summaryfooter .slick-summaryfooter-status {
  display: inline-block;
  padding: 6px;
}

.slick-summaryfooter .ui-icon-container {
  display: inline-block;
  margin: 2px;
  border-color: gray;
}

.slick-summaryfooter .slick-summaryfooter-nav {
  display: inline-block;
  float: left;
  padding: 2px;
}

.slick-summaryfooter .slick-summaryfooter-settings {
  display: block;
  float: right;
  padding: 2px;
}

.slick-summaryfooter .slick-summaryfooter-settings * {
  vertical-align: middle;
}

.slick-summaryfooter .slick-summaryfooter-settings a {
  padding: 2px;
  text-decoration: underline;
  cursor: pointer;
}

.slick-footer-columns, .slick-footerrow-columns {
  white-space: nowrap;
  cursor: default;
  overflow: hidden;
  height: 24px;
}
.slick-summaryfooter-column{
  float: left;
  min-height: 20px;
  padding: 3px;
}
.red-color,.thap-hon-truoc{
  color:red;
  width:100%;
  height:100%;
}
.blue-color,.cao-hon-truoc{
  color:blue;
  width:100%;
  height:100%;
}
</style>
<?php
$tungay='';
$denngay='';
if((int)date('d')>10){
  $tungay=date("01/m/YY");
  $denngay=date("d/m/YY");  
}else{
  if(date('m')==1){
    $month=12;
    $year=date('Y')-1;
  }else{
    $month=date('m')-1;
    $year=date('Y');
  }
  $tungay=$enddate=date("01/m/YY", strtotime($year."-".$month));
  $denngay=date("t/m/YY", strtotime($year."-".$month));
}
?>

</head>

<body>

  <fieldset id="loaikhoaphong">
    <legend>Chọn khoa hoặc đơn nguyên hành chính</legend>
    <span class="custom-combobox" >
      <input id='com_thuochmk' class='com_thuochmk' style="width:150px"></span>
      <input id='com_thuochmk1' class='com_thuochmk1'  style="display:none">
    </span>
    <label style="margin-left:30px;font-weight:bold"> Chọn tháng, năm:</label> <select id="thang"  style="width:80px"><?php
    $m=date('m');
    if(date('d')<28){
     if($m==1){
      $m=12;	
    }else{
      $m=$m-1;	
    }
  }else{

  }

  for($i=1;$i<=12;$i++){
   ?>
   <option value='<?=$i?>' <?php if($m==$i){ echo "selected"; }?> ><?=$i?></option>	
   <?php }?></select>	
   / <select id="nam"  style="width:80px;"><?php
   $m=date('m');
   $y=date('Y');
   if(date('d')<28){
     if($m==1){
      $m=12;	
      $y=$y-1;
    }else{
      $m=$m-1;	
      $y=$y;
    }
  }else{
    $m=$m;	
    $y=$y;
  }
  $nam=2013;
  for($i=0;$i<$y-2013;$i++){
    $nam+=1;
    ?>
    <option value='<?=$nam?>' <?php if($y==$nam){ echo "selected"; }?> ><?=$nam?></option>	
    <?php }?></select>

    <label style="margin-left:10px;font-weight:bold">hoặc từ </label> 
    <input type="text" id="tungay" value="<?php echo $tungay; ?>" style="text-align:center;width:60px"/>
    <label  style="font-weight:bold"> đến  </label> 
    <input type="text" id="denngay" value="<?php echo $denngay; ?>" style="text-align:center;width:60px"/>

    <label style="font-weight:bold; display:none"> Kiểu xem </label> 
    <select id="xemtheo_option" style="display:none">

      <option value="thang" text="Tháng">Tháng</option>

      <option value="nam" text="Tháng">Năm</option>
    </select>
    <button id='xem'>Xem</button>   <button style="margin-left:5px;display:none" id='xuat_excel'>Excel</button>

    <span>Đơn vị tính 1 triệu đồng</span>
    <label style="margin-left:10px;font-weight:bold">Mức lọc D.Thu </label> 
    <input type="text" id="locDt" value="500" style="text-align:center;width:60px"/>(triệu)
  </fieldset>

  <div id="tabs" style="margin-left:10px; height:95%; width:1290px;">
    <ul style="margin-left:5px; border-bottom:1px solid #CCC">

      <li><a href="#tabs-1" id="tab1_click" onclick="loadtab1()">Doanh thu chi tiết</a></li> 
      <li><a href="#tabs-2"  id="tab2_click" onclick="loadtab2()">Doanh thu gộp nhóm</a></li> 
      <li><a href="#tabs-3"  id="tab3_click" onclick="loadtab3()">Biểu đồ tháng</a></li>    
      <li><a href="#tabs-4"  id="tab4_click" onclick="loadtab4()">Biểu đồ năm</a></li> 

    </ul>
    <div id="tabs-1" > 
     <div id="bang3" >
      <div class="ui-layout-east" id="bang3_east">
        <div id="ovalChart"></div>
      </div>
      <div class="ui-layout-center" id="bang3_center">
       <!--  <table id="rowed3"></table> -->
       <div id="grid_1"></div>
       <div id="footer_grid_1" style="width:100%;height:20px;"></div> 

     </div>

   </div>
 </div>   
 <div id="tabs-2"> 
  <div>
    <div id="grid_2"></div>
       <div id="footer_grid_2" style="width:100%;height:20px;"></div> 
  </div>  
</div>

<div id="tabs-3">
  <iframe id="tab3" class="emr-iframe" frameborder="0" style="width:100%;height:85%" src=""></iframe>  
</div>

<div id="tabs-4">
  <iframe id="tab4" class="emr-iframe" frameborder="0" style="width:100%;height:85%" src=""></iframe>  
</div>


</div>  
</body>
</html>

<script type="text/javascript">
//***********************
var tab_selected=1;
var postTo;
var chartData =[];
var chartData1 =[];
var chartData2 =[];
var chartData3 =[];
var chartData4 =[];
var chartData5 =[];
var labelx=[];
jQuery(document).ready(function() {
//khoi tao cac bien dung chung
window.id_phongban=0;
//

//select tu ngay den ngay theo thang
$("#nam,#thang").change(function(e) {
  $("#tungay").val(FirstDayOfMonth(parseInt($("#nam").val()),parseInt($("#thang").val())));
  $("#denngay").val(LastDayOfMonth(parseInt($("#nam").val()),parseInt($("#thang").val())));

});

load_data_innit();// đổ dữ liệu combo và vẽ lưới
create_layout();
resize_control();
$(window).resize(function(e) {
  resize_control();
});

$( "#tabs" ).tabs({   

});
$( "#tab1_click").click(function(){

  tab_selected=1;
});
$( "#tab2_click" ).click(function(){

  tab_selected=2;
});
$( "#tab3_click").click(function(){

  tab_selected=3;
});
$( "#tab4_click").click(function(){

  tab_selected=4;
});


});//end of ready


function draw_chart_Pie(){
 // $("#pieChart").empty();
    t=setTimeout(function(){
     loadlibaryChartPie();
    clearTimeout(t);
  },250);
}
function draw_chart_Line(){
 $("#ovalChart").empty();
  t=setTimeout(function(){
      loadlibaryChart();
    clearTimeout(t);
  },100);
}


  $("#xuat_excel").click(function(){


if(tab_selected==1)
    {
      window.open("pages.php?module=report&view=baocao_thongke&action=xuat_excel_thongkemoi&type=excel&kieuxem=1&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
    }
    if(tab_selected==2)
    {
      //window.open("pages.php?module=report&view=baocao_thongke&action=xuat_excel_baocaodoanhthu&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
      window.open("pages.php?module=report&view=baocao_thongke&action=xuat_excel_thongkemoi&type=excel&kieuxem=2&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
    }

      
  })


function loadlibaryPie(){
 $("#pieChart").empty();

require([
    "dojox/charting/Chart",
    "dojox/charting/plot2d/Pie",
    "dojox/charting/action2d/Tooltip",
    "dojox/charting/action2d/MoveSlice",
    "dojox/charting/themes/PlotKit/green",
    "dojo/domReady!"
], function(Chart, Pie, Tooltip, MoveSlice, PlotKitGreen){
 
    var pieChart = new Chart("pieChartNode");
    pieChart.setTheme(PlotKitGreen);
    pieChart.addPlot("default", {
        type: "Pie",
        fontColor: "#000"
    });

    chartData = [
    { x: "1", y: 9021 },
    { x: "1", y: 12837 },
    { x: "1", y: 12378 },
    { x: "1", y: 21882  },
    { x: "1", y: 17654 },
    { x: "1", y: 15833 },
    { x: "1", y: 16122 }
    ];

/*
      chartData = [
    {y: 9021, text: "Red",      stroke: "black", tooltip: "Red is 50%"},
    {y: 12837, text: "Green",  stroke: "black", tooltip: "Green is 25%"},
    {y: 15833, text: "Blue",   stroke: "black", tooltip: "I am feeling Blue!"},
    {y: 5000, text: "Other",  stroke: "black", tooltip: "Mighty <strong>strong</strong><br>With two lines!"}
    ];

*/
    pieChart.addSeries("Series A", chartData);
    new MoveSlice(pieChart,"default");
    new Tooltip(pieChart,"default");
    pieChart.render();
});
  
}

function loadlibaryChart(){
 //$("#ovalChart").empty();

require([
// Require the basic chart class
"dojox/charting/Chart",
 
// Require the theme of our choosing
"dojox/charting/themes/Tom",
 
// Charting plugins:
 
//  We want to plot Lines
"dojox/charting/plot2d/Lines",
 
//  We want to use Markers
"dojox/charting/plot2d/Markers",
 
//  We'll use default x/y axes
"dojox/charting/axis2d/Default",
 
// Wait until the DOM is ready
"dojo/domReady!"
], function(Chart, theme) {
// When the DOM is ready and resources are loaded...
$("#ovalChart").empty();
// Define the data

var tmp1 = $("#rowed3").jqGrid('getDataIDs');

/*
var chartData = [10000,9200,11811,12000,7662,13887,14200,12222,12000,10009,11288,12099];
var chartData2 = [20000,4200,12811,12000,7662,13887,10000,9200,11811,12000,7662,13887];
 */
 var chartData=[];
var chartData2=[];
 var labelx=[];

for(var i=0;i < tmp1.length;i++){
    var rowData = $("#rowed3").getRowData(tmp1[i]);
    chartData.push(parseInt(rowData["DoanhThu"]));
     //chartData2.push(parseInt(rowData["SoLuot"])*1000);
    labelx.push({value:(i+1), text:rowData["TenNhom"]});
  }


// Create the chart within it's "holding" node
var chart = new Chart("ovalChart");
 
// Set the theme
chart.setTheme(theme);
 
// Add the only/default plot
chart.addPlot("default", {
type: "Lines",
animate: {duration: 200},
markers: true
});
 
// Add axes
//chart.addAxis("x");
  chart.addAxis("x", {
    labels: labelx,
  });
var maxY =[chartData.max(),chartData2.max()];
chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, fixLower: "major", fixUpper: "major"});
//chart.addAxis("y", { min: 5000, max: 15000, vertical: true, fixLower: "major", fixUpper: "major" });
 
// Add the series of data
chart.addSeries("SalesThisDecade",chartData);
//chart.addSeries("SalesThisDecade2",chartData2);
  chart.render();
});

  
}

function load_data_innit(){
  create_combobox('#com_thuochmk','#com_thuochmk1',".data_thuochmk","#data_thuochmk",create_ds_loaicauhinh,500,240,'Danh mục ','data_khoa',window.default_id_pb_ChuyenMon);
  $.dateEntry.setDefaults({spinnerImage: ''});
   $("#tungay,#denngay").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
   $("#tungay,#denngay").datepicker({
           showWeek: true, firstDay: 1,
              defaultDate: "+1w",
              changeMonth: true,
              changeYear: true,
              numberOfMonths: 1,
              dateFormat:  $.cookie("ngayJqueryUi"),
            onClose: function(selectedDate) {
               
            },
            onSelect: function(dat, inst) {
                 
            }
        });


    $("#tungay").val(FirstDayOfMonth(parseInt($("#nam").val()),parseInt($("#thang").val())));
    $("#denngay").val(LastDayOfMonth(parseInt($("#nam").val()),parseInt($("#thang").val())));

    
    create_gridA();
    //create_gridB();
    create_gridC();
     
}



function create_gridA(){      
  $('#grid_1').css({'height': $(window).height()-130+'px'});
  $('#grid_1').css({'width' : '1270px'}); 
  window.dataView_doanhthuchitiet='';
  window.grid_doanhthuchitiet;
  var data_doanhthuchitiet = [];
  var selectedRowIds = [];
  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();   

    var options = {
      editable: true
      ,enableCellNavigation: false
      ,asyncEditorLoading: true
      ,forceFitColumns: false
      ,autoEdit: false
      ,topPanelHeight: 100
      //,frozenColumn: 1      
      ,headerRowHeight: 30
      ,showHeaderRow: true
    };
    window.columns_doanhthuchitiet = [       
    
    {name:'STT',id:'STT',field: "STT", width:100, sortable: true},
    {name:'Nhóm',id:'TenNhom',field: "TenNhom", width:300, sortable: true},
    {name:'Doanh thu',id:'DoanhThu',field: "DoanhThu", width:150, sortable: true,cssClass: "textright",formatter: number,summaryFormatter: TienFormatter,formatter: colorFmatterDoanhThu},
    {name:'Giá gốc',id:'GiaGoc',field: "GiaGoc", width:150, sortable: true,cssClass: "textright",formatter: number,summaryFormatter: TienFormatter,formatter: colorFmatterGiaGoc},
    {name:'DoanhThu - Giá gốc',id:'SauGiaGoc',field: "SauGiaGoc", width:150, sortable: true,cssClass: "textright",formatter: number,summaryFormatter: TienFormatter,formatter: colorFmatterSauGiaGoc},
    {name:'Số ca',id:'SL',field: "SL", width:150, sortable: true,formatter: number,cssClass: "textright",formatter: colorFmatterSL},
    {name:'Trung bình',id:'TrungBinh',field: "TrungBinh", width:150, sortable: true,formatter: number,cssClass: "textright",formatter: colorFmatterTrungBinh},
    ];


    selectActiveRow =  false;
    var selectedRows = [];
    window.sortcol = "";
    window.sortdir = 1;
    window.percentCompleteThreshold = 0;
    window.searchString = "";
    //window.dataView_doanhthuchitiet = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false }); 

    window.dataView_doanhthuchitiet = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });  
    window.dataView_doanhthuchitiet = new Slick.Data.DataView();
    window.grid_doanhthuchitiet = new Slick.Grid("#grid_1", window.dataView_doanhthuchitiet, columns_doanhthuchitiet, options);
    

    window.grid_doanhthuchitiet.registerPlugin(groupItemMetadataProvider);
    window.pager = new Slick.Controls.Pager(window.dataView_doanhthuchitiet, window.grid_doanhthuchitiet, $("#footer_grid_1"));
    window.summaryfooter = new Slick.Controls.SummaryFooter(window.dataView_doanhthuchitiet, window.grid_doanhthuchitiet, $("#footer_grid_1"));
    window.columnpicker = new Slick.Controls.ColumnPicker(columns_doanhthuchitiet, window.grid_doanhthuchitiet, options);
    
    window.grid_doanhthuchitiet.setSelectionModel(new Slick.CellSelectionModel());  
    //window.grid_doanhthuchitiet.setSelectionModel(new Slick.RowSelectionModel());
    selectActiveRow = true;
    window.grid_doanhthuchitiet.setSelectionModel(new Slick.RowSelectionModel({
      selectActiveRow: true
    }));
    
    plugin = new Slick.AutoTooltips();
    window.grid_doanhthuchitiet.registerPlugin(plugin);
    
    $(window.grid_doanhthuchitiet.getHeaderRow()).delegate(":input", "change keyup", function (e) {
      var columnId = $(this).data("columnId");
      if (columnId != null) {
        columnFilters_doanhthuchitiet[columnId] = $.trim($(this).val());
        window.dataView_doanhthuchitiet.refresh();
        setTimeout(function(){
        //  $("#grid_1 .slick-headerrow .slick-summaryfooter").remove();
        //  $("#grid_1 .slick-headerrow").prepend($("#footer_grid_1").html());
          //tinhSum()
        },500);
      }window.grid_doanhthuchitiet.invalidate()
    });

    window.grid_doanhthuchitiet.onHeaderRowCellRendered.subscribe(function(e, args) {
      $(args.node).empty();
      $("<input type='text' style='width:100%;'>")
      .data("columnId", args.column.id)
      .val(columnFilters_doanhthuchitiet[args.column.id])
      .appendTo(args.node);
    });


    window.grid_doanhthuchitiet.onClick.subscribe(function (e,args) {
       if(selectActiveRow){
         if($.inArray(args.row, selectedRows) === -1){
           selectedRows = [];
           selectedRows.push(args.row)
         }else{
          selectedRows = []; 
        }
      }else{
        ($.inArray(args.row, selectedRows) === -1) ? selectedRows.push(args.row) : selectedRows.splice(selectedRows.indexOf(args.row), 1);
      }
        //alert(selectedRows);
        window.grid_doanhthuchitiet.setSelectedRows(selectedRows);
      });
    window.grid_doanhthuchitiet.onDblClick.subscribe(function (e,args) {
         //console.log(e);

    });
    window.grid_doanhthuchitiet.onColumnsResized.subscribe(function(e, args) {


    });
    window.grid_doanhthuchitiet.onCellChange.subscribe(function(e,args){
        //alert(window.dataView_phanboquy_lkd.getItem(args.row).HeSoLuongCoBanDD);
        var ids=window.dataView_doanhthuchitiet.getItem(args.row).id;
        
    });
            // move the filter panel defined in a hidden div into an inline secondary grid header row
            var $secondaryRow = window.grid_doanhthuchitiet.getTopPanel();

            $("#inlineFilterPanelL")
            .appendTo($secondaryRow[0])
            .show();

            $("#inlineFilterPanelR")
            .appendTo($secondaryRow[1])
            .show();

            window.grid_doanhthuchitiet.onCellChange.subscribe(function(e,args) {
              window.dataView_doanhthuchitiet.updateItem(args.item.id,args.item);
            });

            window.grid_doanhthuchitiet.onMouseEnter.subscribe(function(e) {
              var cell = this.getCellFromEvent(e);

              this.setSelectedRows([cell.row]);
              e.preventDefault();
            });

            window.grid_doanhthuchitiet.onMouseLeave.subscribe(function(e) {
              this.setSelectedRows([]);
              e.preventDefault();
            });

            window.grid_doanhthuchitiet.onSelectedRowsChanged.subscribe(function(e) {
              selectedRowIds = [];
              var rows = window.grid_doanhthuchitiet.getSelectedRows();
              for (var i = 0, l = rows.length; i < l; i++) {
                var item = window.dataView_doanhthuchitiet.getItem(rows[i]);
                if (item) selectedRowIds.push(item.id);
              }
            });


            window.grid_doanhthuchitiet.onSort.subscribe(function(e, args) {
              sortdir = args.sortAsc ? 1 : -1;
              sortcol = args.sortCol.field;
              window.dataView_doanhthuchitiet.sort(comparer, args.sortAsc);

            });

      // wire up model events to drive the grid
      window.dataView_doanhthuchitiet.onRowCountChanged.subscribe(function(e,args) {
        window.grid_doanhthuchitiet.updateRowCount();
        window.grid_doanhthuchitiet.render();
      });

      window.dataView_doanhthuchitiet.onRowsChanged.subscribe(function(e,args) {
        window.grid_doanhthuchitiet.invalidateRows(args.rows);
        window.grid_doanhthuchitiet.render();
        
        if (selectedRowIds.length > 0){
          var selRows = [];
          for (var i = 0; i < selectedRowIds.length; i++){
            var idx = window.dataView_doanhthuchitiet.getRowById(selectedRowIds[i]);
            if (idx != undefined)
              selRows.push(idx);
          }
          window.grid_doanhthuchitiet.setSelectedRows(selRows);
        }
      });
      window.dataView_doanhthuchitiet.onPagingInfoChanged.subscribe(function(e,pagingInfo) {
        var isLastPage = pagingInfo.pageSize*(pagingInfo.pageNum+1)-1 >= pagingInfo.totalRows;
        var enableAddRow = isLastPage || pagingInfo.pageSize==0;
        var options = window.grid_doanhthuchitiet.getOptions();
        if (options.enableAddRow != enableAddRow)
          window.grid_doanhthuchitiet.setOptions({enableAddRow:enableAddRow});
      });      
      window.grid_doanhthuchitiet.init();
     loaddata_doanhthuchitiet();
      $("#gridContainer").resizable();
    }



function loaddata_doanhthuchitiet(){
  var data = [];
  //grid_12.setData(data);
  window.dataView_doanhthuchitiet.setItems(data);
  var cols = window.grid_doanhthuchitiet.getColumns();
  window.grid_doanhthuchitiet.setColumns(cols);
  $.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_NhomDMLSP&id_phongban="+  window.id_phongban+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val()+"&thang="+$( '#thang' ).val()+"&nam="+$( '#nam' ).val()).done(function(a){
    data=$.parseJSON(a);
    window.data_rs_doanhthuchitiet=data;
    window.grid_doanhthuchitiet.resetActiveCell();
    window.dataView_doanhthuchitiet.beginUpdate();
    window.dataView_doanhthuchitiet.setItems(data);
    window.dataView_doanhthuchitiet.setFilter(filter_doanhthuchitiet);
    window.dataView_doanhthuchitiet.endUpdate();

    setTimeout(function(){
     // $("#grid_12 .slick-headerrow .slick-summaryfooter").remove();
     // $("#grid_12 .slick-headerrow").prepend($("#footer_grid_12").html());
      tinhSumct('footer_grid_1',data);
    },1000);
  }); 
}


window.columnFilters_doanhthuchitiet = {};
function filter_doanhthuchitiet(item) {
  for (var columnId in columnFilters_doanhthuchitiet) {
    if (columnId !== undefined && columnFilters_doanhthuchitiet[columnId] !== "") {
      var c = window.grid_doanhthuchitiet.getColumns()[window.grid_doanhthuchitiet.getColumnIndex(columnId)];
      if($.trim(item[c.field])==''){
        item[c.field]=' ';
      }
      if(c.field=='TenNhom'){
        if(item[c.field].toString().toLowerCase().indexOf(columnFilters_doanhthuchitiet[columnId].toLowerCase())===-1){
          return false;
        }
      }else{
        if (item[c.field].toString().toLowerCase().substring(0, columnFilters_doanhthuchitiet[columnId].length) != columnFilters_doanhthuchitiet[columnId].toString().toLowerCase()) {
          return false;
        } 
      }

    }
  }
  return true;
}

// END LUOI 1;



// BEGIN LUOI 2
function create_gridC(){      
  $('#grid_2').css({'height': $(window).height()-130+'px'});
  $('#grid_2').css({'width' : '1270px'}); 
  window.dataView_doanhthugopnhom='';
  window.grid_doanhthugopnhom;
  var data_doanhthugopnhom = [];
  var selectedRowIds = [];
  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();   

    var options = {
      editable: true
      ,enableCellNavigation: false
      ,asyncEditorLoading: true
      ,forceFitColumns: false
      ,autoEdit: false
      ,topPanelHeight: 100
      //,frozenColumn: 1      
      ,headerRowHeight: 30
      ,showHeaderRow: true
    };
    window.columns_doanhthugopnhom = [       
    
    {name:'STT',id:'STT',field: "STT", width:100, sortable: true},
    {name:'Nhóm',id:'TenNhom',field: "TenNhom", width:300, sortable: true},
    {name:'Doanh thu',id:'DoanhThu',field: "DoanhThu", width:150, sortable: true,cssClass: "textright",formatter: number,summaryFormatter: TienFormatter,formatter: colorFmatterDoanhThu},
    {name:'Giá gốc',id:'GiaGoc',field: "GiaGoc", width:150, sortable: true,cssClass: "textright",formatter: number,summaryFormatter: TienFormatter,formatter: colorFmatterGiaGoc},
    {name:'DoanhThu - Giá gốc',id:'SauGiaGoc',field: "SauGiaGoc", width:150, sortable: true,cssClass: "textright",formatter: number,summaryFormatter: TienFormatter,formatter: colorFmatterSauGiaGoc},
    {name:'Số ca',id:'SL',field: "SL", width:150, sortable: true,formatter: number,cssClass: "textright",formatter: colorFmatterSL},
    {name:'Trung bình',id:'TrungBinh',field: "TrungBinh", width:150, sortable: true,formatter: number,cssClass: "textright",formatter: colorFmatterTrungBinh},
    ];
    selectActiveRow =  false;
    var selectedRows = [];
    window.sortcol = "";
    window.sortdir = 1;
    window.percentCompleteThreshold = 0;
    window.searchString = "";
    //window.dataView_doanhthugopnhom = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false }); 

    window.dataView_doanhthugopnhom = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });  
    window.dataView_doanhthugopnhom = new Slick.Data.DataView();
    window.grid_doanhthugopnhom = new Slick.Grid("#grid_2", window.dataView_doanhthugopnhom, columns_doanhthugopnhom, options);
    

    window.grid_doanhthugopnhom.registerPlugin(groupItemMetadataProvider);
    window.pager = new Slick.Controls.Pager(window.dataView_doanhthugopnhom, window.grid_doanhthugopnhom, $("#footer_grid_2"));
    window.summaryfooter = new Slick.Controls.SummaryFooter(window.dataView_doanhthugopnhom, window.grid_doanhthugopnhom, $("#footer_grid_2"));
    window.columnpicker = new Slick.Controls.ColumnPicker(columns_doanhthugopnhom, window.grid_doanhthugopnhom, options);
    
    window.grid_doanhthugopnhom.setSelectionModel(new Slick.CellSelectionModel());  
    //window.grid_doanhthugopnhom.setSelectionModel(new Slick.RowSelectionModel());
    selectActiveRow = true;
    window.grid_doanhthugopnhom.setSelectionModel(new Slick.RowSelectionModel({
      selectActiveRow: true
    }));
    
    plugin = new Slick.AutoTooltips();
    window.grid_doanhthugopnhom.registerPlugin(plugin);
    
    $(window.grid_doanhthugopnhom.getHeaderRow()).delegate(":input", "change keyup", function (e) {
      var columnId = $(this).data("columnId");
      if (columnId != null) {
        columnFilters_doanhthugopnhom[columnId] = $.trim($(this).val());
        window.dataView_doanhthugopnhom.refresh();
        setTimeout(function(){
        //  $("#grid_1 .slick-headerrow .slick-summaryfooter").remove();
        //  $("#grid_1 .slick-headerrow").prepend($("#footer_grid_1").html());
          //tinhSum()
        },500);
      }window.grid_doanhthugopnhom.invalidate()
    });

    window.grid_doanhthugopnhom.onHeaderRowCellRendered.subscribe(function(e, args) {
      $(args.node).empty();
      $("<input type='text' style='width:100%;'>")
      .data("columnId", args.column.id)
      .val(columnFilters_doanhthugopnhom[args.column.id])
      .appendTo(args.node);
    });


    window.grid_doanhthugopnhom.onClick.subscribe(function (e,args) {
       if(selectActiveRow){
         if($.inArray(args.row, selectedRows) === -1){
           selectedRows = [];
           selectedRows.push(args.row)
         }else{
          selectedRows = []; 
        }
      }else{
        ($.inArray(args.row, selectedRows) === -1) ? selectedRows.push(args.row) : selectedRows.splice(selectedRows.indexOf(args.row), 1);
      }
        //alert(selectedRows);
        window.grid_doanhthugopnhom.setSelectedRows(selectedRows);
      });
    window.grid_doanhthugopnhom.onDblClick.subscribe(function (e,args) {
         //console.log(e);

    });
    window.grid_doanhthugopnhom.onColumnsResized.subscribe(function(e, args) {


    });
    window.grid_doanhthugopnhom.onCellChange.subscribe(function(e,args){
        //alert(window.dataView_phanboquy_lkd.getItem(args.row).HeSoLuongCoBanDD);
        var ids=window.dataView_doanhthugopnhom.getItem(args.row).id;
        
    });
            // move the filter panel defined in a hidden div into an inline secondary grid header row
            var $secondaryRow = window.grid_doanhthugopnhom.getTopPanel();

            $("#inlineFilterPanelL")
            .appendTo($secondaryRow[0])
            .show();

            $("#inlineFilterPanelR")
            .appendTo($secondaryRow[1])
            .show();

            window.grid_doanhthugopnhom.onCellChange.subscribe(function(e,args) {
              window.dataView_doanhthugopnhom.updateItem(args.item.id,args.item);
            });

            window.grid_doanhthugopnhom.onMouseEnter.subscribe(function(e) {
              var cell = this.getCellFromEvent(e);

              this.setSelectedRows([cell.row]);
              e.preventDefault();
            });

            window.grid_doanhthugopnhom.onMouseLeave.subscribe(function(e) {
              this.setSelectedRows([]);
              e.preventDefault();
            });

            window.grid_doanhthugopnhom.onSelectedRowsChanged.subscribe(function(e) {
              selectedRowIds = [];
              var rows = window.grid_doanhthugopnhom.getSelectedRows();
              for (var i = 0, l = rows.length; i < l; i++) {
                var item = window.dataView_doanhthugopnhom.getItem(rows[i]);
                if (item) selectedRowIds.push(item.id);
              }
            });


            window.grid_doanhthugopnhom.onSort.subscribe(function(e, args) {
              sortdir = args.sortAsc ? 1 : -1;
              sortcol = args.sortCol.field;
              window.dataView_doanhthugopnhom.sort(comparer, args.sortAsc);

            });

      // wire up model events to drive the grid
      window.dataView_doanhthugopnhom.onRowCountChanged.subscribe(function(e,args) {
        window.grid_doanhthugopnhom.updateRowCount();
        window.grid_doanhthugopnhom.render();
      });

      window.dataView_doanhthugopnhom.onRowsChanged.subscribe(function(e,args) {
        window.grid_doanhthugopnhom.invalidateRows(args.rows);
        window.grid_doanhthugopnhom.render();
        
        if (selectedRowIds.length > 0){
          var selRows = [];
          for (var i = 0; i < selectedRowIds.length; i++){
            var idx = window.dataView_doanhthugopnhom.getRowById(selectedRowIds[i]);
            if (idx != undefined)
              selRows.push(idx);
          }
          window.grid_doanhthugopnhom.setSelectedRows(selRows);
        }
      });
      window.dataView_doanhthugopnhom.onPagingInfoChanged.subscribe(function(e,pagingInfo) {
        var isLastPage = pagingInfo.pageSize*(pagingInfo.pageNum+1)-1 >= pagingInfo.totalRows;
        var enableAddRow = isLastPage || pagingInfo.pageSize==0;
        var options = window.grid_doanhthugopnhom.getOptions();
        if (options.enableAddRow != enableAddRow)
          window.grid_doanhthugopnhom.setOptions({enableAddRow:enableAddRow});
      });      
      window.grid_doanhthugopnhom.init();
     loaddata_doanhthugopnhom();
      $("#gridContainer").resizable();
    }



function loaddata_doanhthugopnhom(){
  var data = [];
  //grid_12.setData(data);
  window.dataView_doanhthugopnhom.setItems(data);
  var cols = window.grid_doanhthugopnhom.getColumns();
  window.grid_doanhthugopnhom.setColumns(cols);
  $.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_NhomDMLSP_Parent&id_phongban="+  window.id_phongban+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val()+"&thang="+$( '#thang' ).val()+"&nam="+$( '#nam' ).val()).done(function(a){
    data=$.parseJSON(a);
    window.data_rs_doanhthugopnhom=data;
    window.grid_doanhthugopnhom.resetActiveCell();
    window.dataView_doanhthugopnhom.beginUpdate();
    window.dataView_doanhthugopnhom.setItems(data);
    window.dataView_doanhthugopnhom.setFilter(filter_doanhthugopnhom);
    window.dataView_doanhthugopnhom.endUpdate();

    setTimeout(function(){
     // $("#grid_12 .slick-headerrow .slick-summaryfooter").remove();
     // $("#grid_12 .slick-headerrow").prepend($("#footer_grid_12").html());
     tinhSumct("footer_grid_2",data)
    },500);
  }); 
}

window.columnFilters_doanhthugopnhom = {};
function filter_doanhthugopnhom(item) {
  for (var columnId in columnFilters_doanhthugopnhom) {
    if (columnId !== undefined && columnFilters_doanhthugopnhom[columnId] !== "") {
      var c = window.grid_doanhthugopnhom.getColumns()[window.grid_doanhthugopnhom.getColumnIndex(columnId)];
      if($.trim(item[c.field])==''){
        item[c.field]=' ';
      }
      if(c.field=='TenNhom'){
        if(item[c.field].toString().toLowerCase().indexOf(columnFilters_doanhthugopnhom[columnId].toLowerCase())===-1){
          return false;
        }
      }else{
        if (item[c.field].toString().toLowerCase().substring(0, columnFilters_doanhthugopnhom[columnId].length) != columnFilters_doanhthugopnhom[columnId].toString().toLowerCase()) {
          return false;
        } 
      }

    }
  }
  return true;
}


// END LUOI 2 





function create_ds_loaicauhinh(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
 $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
  colNames:['Khoa phòng đơn vị','Diễn giải'],
  colModel:[
  {name:'TenLoaiHD',index:'TenLoaiHD',hidden :false,width: "30%",},
  {name:'DienGiai',index:'DienGiai',hidden :false,width: "55%",},

  ],
  hidegrid: false,
  gridview: true,
  loadonce: true,
  scroll: false,
  modal:true,
  rowNum: 200000,
  rowList:[],
  sortname: 'tenhangmuc',
  height:265,
  width: 700,
  viewrecords: true,
  ignoreCase:true,
  shrinkToFit:true,
  cmTemplate: {sortable:true},
  sortorder: "desc",
  serializeRowData: function (postdata) {
  },
  onCellSelect: function (rowid) {
    
  },
  onSelectRow: function(id){
      var selr = jQuery(elem).jqGrid('getGridParam','selrow');
                window.id_phongban=$.trim(selr);
  },
  ondblClickRow: function (id, rowIndex, columnIndex) {

  },
  loadComplete: function(data) {
    grid_filter_enter(elem) ;
    count = jQuery(elem).jqGrid('getGridParam', 'records');
    if(count>0){
      ids = ($(elem).getDataIDs()[0]);
      $(elem).jqGrid("setSelection",ids, true);
    }
  },

});

$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
$(elem).jqGrid('bindKeys', {} );

}

 $("#xem").click(function() {

    switch(tab_selected)
    {
          case 1:
          loadtab1();
          break;
          case 2:
          loadtab2();
          break;
          case 3:
          loadtab3();
          break;
          case 4:
          loadtab4();
          break;
    }



 })
 function loadtab3(){
    $("#tab3").attr("src", "pages.php?module=<?=$modules?>&view=<?=$view?>&id_form=<?=$_GET["id_form"]?>&id_loai=undefined&action=index_bieudodoanhthuA&type=test&mucDT="+$( '#locDt' ).val()+"&tungay="+ $( '#tungay' ).val()+"&denngay="+$( '#denngay' ).val());
    
 }

 function loadtab4(){
    $("#tab4").attr("src", "pages.php?module=<?=$modules?>&view=<?=$view?>&id_form=<?=$_GET["id_form"]?>&id_loai=undefined&action=index_bieudodoanhthuB&type=test&mucDT="+$( '#locDt' ).val()+"&tungay="+ $( '#tungay' ).val()+"&denngay="+$( '#denngay' ).val()+"&nam="+$( '#nam' ).val());
    
 }

function loadtab2(){
  //jQuery("#rowed5").jqGrid('setGridParam',
   // {url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_NhomDMLSP_Parent&id_phongban="+  window.id_phongban+"&tungay="+ $( '#tungay' ).val()+"&denngay="+$( '#denngay' ).val()+"&thang="+$( '#thang' ).val()+"&nam="+$( '#nam' ).val(),datatype:'json'}).trigger("reloadGrid");
   setTimeout(function(){
      loaddata_doanhthugopnhom();
    },500);
   
 }
function loadtab3x(){

  chartData =[];
  chartData1 =[];
  chartData2 =[];
  chartData3 =[];
  chartData4 =[];
  chartData5 =[];
  labelx=[];

  dojo.require("dijit.form.HorizontalSlider");
  dojo.require("dijit.form.HorizontalRule");
  dojo.require("dijit.form.HorizontalRuleLabels");
  dojo.require("dojox.charting.Chart2D");
  dojo.require("dojox.charting.plot2d.Lines");//charting/plot2d/Lines
  dojo.require("dojox.charting.plot2d.Markers");
  dojo.require("dojox.charting.themes.Midwest");
  dojo.require("dojox.charting.themes.Tom");
  dojo.require("dojox.lang.functional.object");
  dojo.require("dojo.number");
  draw_chart_doanhthuTH();
    //  window.opentab3=1;
  
}

 function loadtab1(){
    setTimeout(function(){
      loaddata_doanhthuchitiet();
    },500);
    
 }
 

function draw_chart_doanhthuTH(){

  t=setTimeout(function(){
  $("#inner-top").empty();
  $("#inner-top").append('<div id="diengiai_sinhton" class="diengiai_sinhton">Tổng doanh thu<span class="ghichuline" style="color:red">__</span>Giá gốc<span class="ghichuline"  style="color:#ff8a00">__</span>Tổng doanh thu - Giá gốc<span class="ghichuline" style="color:blue">__</span>   Số ca<span class="ghichuline" style="color:yellow">__</span> Trung bình<span class="ghichuline" style="color:green">__</span></div><div style="height:5px"></div><div class="dauhieusinhton" id="dauhieusinhton" style="width:90%; margin-left:5px;height:450px"></div>');
  $(".diengiai_sinhton").css("top","-21px");
  $(".diengiai_sinhton").css("left",$("#tabs-3").width()-100+"px");
  $(".diengiai_sinhton").css("left",$("#tabs-3").height()-800+"px");
  
    chart_doanhthuTH();
    clearTimeout(t);
  },250);
}

function chart_doanhthuTH  (){


postTo='pages.php?module=<?= $modules ?>&view=<?=$view?>&action=data_NhomDMLSP_Parent&kieuxem='+$("#xemtheo_option option:selected").val()+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val()+"&thang="+$( '#thang' ).val()+"&nam="+$( '#nam' ).val();
$.getJSON(postTo).done(function(data){

  
     
      var tam="";
      $.each( data, function( key, val ) {     
        for(i=0;i<val.length;i++){
          
          var tam=val[i]["cell"];
          
          labelx.push({value:(i+1), text:tam[3]});  
          chartData.push(tam[4]);
          chartData1.push((tam[5]));
          chartData2.push((tam[6]));
          chartData3.push((tam[7]*10));
          chartData4.push((tam[8]*10));
         
                  
        }
        
        
        }); 

    var theme = dojox.charting.themes.Tom;
    var chart = new dojox.charting.Chart2D("dauhieusinhton" );
    chart.setTheme(theme);

    chart.addPlot("DoanhThu", {
        type: "Lines",
        markers: true,
    fill: "red",
    stroke: {color:"red"},
    animate: {duration: 300}
    });
    chart.addPlot("GiaGoc", {
        type: "Lines",
        markers: true,
    fill: "#ff8a00",
    stroke: {color:"#ff8a00"},
    animate: {duration: 300}
    });
  chart.addPlot("SauGiaGoc", {
        type: "Lines",
        markers: true,
    fill: "blue",
    stroke: {color:"blue"},
    animate: {duration: 300}
    });
    chart.addPlot("SL", {
        type: "Lines",
        markers: true,
    fill: "yellow",
    stroke: {color:"yellow"},
    animate: {duration: 300}
    });
    chart.addPlot("TB", {
        type: "Lines",
        markers: true,
    fill: "green",
    stroke: {color:"green"},
    animate: {duration: 300}
    });
   
   
    var maxY =[chartData.max(),chartData1.max(),chartData2.max()];
    chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, });
    chart.addAxis("x", {
            includeZero: false,
            labels: labelx,
            rotation:90
        }
            );

    chart.addSeries("DoanhThu",chartData,{plot: "DoanhThu"});
    chart.addSeries("GiaGoc", chartData1, {plot: "GiaGoc"});
    chart.addSeries("SauGiaGoc", chartData2, {plot: "SauGiaGoc"});
    chart.addSeries("SL", chartData3, {plot: "SL"}); 
    chart.addSeries("TB", chartData4, {plot: "TB"});


    chart.render();
  
    });


  
}


function create_layout(){
  $("#bang3").css("height",$(window).height()-4+"px");
  $("#bang3").css("width",$(window).width()+"px");

  $("#bang3").fadeIn(1000);
  $('#bang3').layout({
    resizerClass: 'ui-state-default'
    , east: {
      resizable: true
      , size: "0%"
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
    , size: "100%"
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

function FirstDayOfMonth(Year, Month) {
	//var d=new Date(Year, Month, 1);
	var firstDay = new Date(Year, Month-1, 1);
    return firstDay.toLocaleFormat('%d/%m/%Y');
}
function LastDayOfMonth(Year, Month) {
	var d=new Date( (new Date(Year, Month,1))-1 );
    return d.toLocaleFormat('%d/%m/%Y');
}

function resize_control()
{
  $("#bang3").css("height",$(window).height()-4+"px");
  $("#bang3").css("width",$(window).width()+"px");
/*
  $("#pieChart").css("height",$('#bang3_center').height()-7+"px");
   $("#pieChart").css("width",$('#bang3_center').width()-7+"px");
  */

  $("#rowed3").setGridWidth($("#bang3_center").width() -7);
  $("#rowed3").setGridHeight($('#bang3_center').height()-175);
  $("#rowed5").setGridWidth($("#bang3_center").width() -7);
  $("#rowed5").setGridHeight($('#bang3_center').height()-175);
  $("#ovalChart").css("height",$('#bang3_east').height()-52+"px");


}





function number(row, cell, value, columnDef, dataContext) {
    tam=(parseInt(value)).formatMoney(0, ',', '.')
        return tam;
}

function sumTotalsFormatter(totals, columnDef) {
  var val = totals.sum && totals.sum[columnDef.field];
  if (val != null) {
    return val;
  }
    return "";
}

function TienFormatter(value) {
  return value.formatMoney(0, ',', '.');
}

function comparer(a,b) {
  var x = a[sortcol], y = b[sortcol];
  return (x == y ? 0 : (x > y ? 1 : -1));
}


function colorFmatterDoanhThu (row, cell, value, columnDef, dataContext) {
  if($.trim(value)=='' || $.trim(value)==null){
    value=0;
  }
  if(parseFloat(value)>parseFloat(dataContext.DoanhThu_ThangTruoc)){
    tam='<div class="blue-color" title="Cao hơn với tháng trước (tháng trước '+parseFloat((dataContext.DoanhThu_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else if(parseFloat(value)<parseFloat(dataContext.DoanhThu_ThangTruoc)){
    tam='<div class="red-color" title="Thấp hơn với tháng trước (tháng trước '+parseFloat((dataContext.DoanhThu_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else{
    tam='<div class="black-color" title="Bằng tháng trước (tháng trước '+parseFloat((dataContext.DoanhThu_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }
  return tam;
}

function colorFmatterGiaGoc (row, cell, value, columnDef, dataContext) {
  if($.trim(value)=='' || $.trim(value)==null){
    value=0;
  }
  if(parseFloat(value)>parseFloat(dataContext.GiaGoc_ThangTruoc)){
    tam='<div class="blue-color" title="Cao hơn với tháng trước (tháng trước '+parseFloat((dataContext.GiaGoc_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else if(parseFloat(value)<parseFloat(dataContext.GiaGoc_ThangTruoc)){
    tam='<div class="red-color" title="Thấp hơn với tháng trước (tháng trước '+parseFloat((dataContext.GiaGoc_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else{
    tam='<div class="black-color" title="Bằng tháng trước (tháng trước '+parseFloat((dataContext.GiaGoc_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }
  return tam;
}

function colorFmatterSauGiaGoc (row, cell, value, columnDef, dataContext) {
  if($.trim(value)=='' || $.trim(value)==null){
    value=0;
  }
  if(parseFloat(value)>parseFloat(dataContext.GSauGiaGoc_ThangTruoc)){
    tam='<div class="blue-color" title="Cao hơn với tháng trước (tháng trước '+parseFloat((dataContext.SauGiaGoc_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else if(parseFloat(value)<parseFloat(dataContext.SauGiaGoc_ThangTruoc)){
    tam='<div class="red-color" title="Thấp hơn với tháng trước (tháng trước '+parseFloat((dataContext.SauGiaGoc_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else{
    tam='<div class="black-color" title="Bằng tháng trước (tháng trước '+parseFloat((dataContext.SauGiaGoc_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }
  return tam;
}

function colorFmatterSL (row, cell, value, columnDef, dataContext) {
  if($.trim(value)=='' || $.trim(value)==null){
    value=0;
  }
  if(parseFloat(value)>parseFloat(dataContext.SL_ThangTruoc)){
    tam='<div class="blue-color" title="Cao hơn với tháng trước (tháng trước '+parseFloat((dataContext.SL_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else if(parseFloat(value)<parseFloat(dataContext.SL_ThangTruoc)){
    tam='<div class="red-color" title="Thấp hơn với tháng trước (tháng trước '+parseFloat((dataContext.SL_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else{
    tam='<div class="black-color" title="Bằng tháng trước (tháng trước '+parseFloat((dataContext.SL_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }
  return tam;
}

function colorFmatterTrungBinh (row, cell, value, columnDef, dataContext) {
  if($.trim(value)=='' || $.trim(value)==null){
    value=0;
  }
  if(parseFloat(value)>parseFloat(dataContext.TrungBinh_ThangTruoc)){
    tam='<div class="blue-color" title="Cao hơn với tháng trước (tháng trước '+parseFloat((dataContext.TrungBinh_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else if(parseFloat(value)<parseFloat(dataContext.TrungBinh_ThangTruoc)){
    tam='<div class="red-color" title="Thấp hơn với tháng trước (tháng trước '+parseFloat((dataContext.TrungBinh_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }else{
    tam='<div class="black-color" title="Bằng tháng trước (tháng trước '+parseFloat((dataContext.TrungBinh_ThangTruoc)).formatMoney(0, ',', '.')+')"> '+parseFloat(value).formatMoney(0, ',', '.')+' </div>';
  }
  return tam;
}

function tinhSumct(grid,data){
  sum_DoanhThu_ThangTruoc=0;
  sum_GiaGoc_ThangTruoc=0;
  sum_SauGiaGoc_ThangTruoc=0;

  sum_DoanhThu=0;
  sum_GiaGoc=0;
  sum_SauGiaGoc=0;

  class_DoanhThu='';
  class_GiaGoc='';
  class_SauGiaGoc='';

  for(var i=0;i<data.length;i++){
   sum_DoanhThu_ThangTruoc+= parseInt(data[i].DoanhThu_ThangTruoc);
   sum_GiaGoc_ThangTruoc+= parseInt(data[i].GiaGoc_ThangTruoc);
   sum_SauGiaGoc_ThangTruoc+= parseInt(data[i].SauGiaGoc_ThangTruoc);

   sum_DoanhThu+= parseInt(data[i].DoanhThu);
   sum_GiaGoc+= parseInt(data[i].GiaGoc);
   sum_SauGiaGoc+= parseInt(data[i].SauGiaGoc);
  }


  if(sum_DoanhThu<sum_DoanhThu_ThangTruoc){
    class_DoanhThu='red-color';
  }else if(sum_DoanhThu>sum_DoanhThu_ThangTruoc){
    class_DoanhThu='blue-color'
  }

  if(sum_GiaGoc<sum_GiaGoc_ThangTruoc){
    class_GiaGoc='red-color';
  }else if(sum_GiaGoc>sum_GiaGoc_ThangTruoc){
    class_GiaGoc='blue-color'
  }

  if(sum_SauGiaGoc<sum_SauGiaGoc_ThangTruoc){
    class_SauGiaGoc='red-color';
  }else if(sum_SauGiaGoc>sum_SauGiaGoc_ThangTruoc){
    class_SauGiaGoc='blue-color'
  }

  //console.log(sum_DoanhThu_ThangTruoc)

  $("#"+grid+" [id$='DoanhThu_summary'] span.slick-column-name").attr('title',"Tháng trước: "+sum_DoanhThu_ThangTruoc.formatMoney(0, ',', '.'));
  $("#"+grid+" [id$='GiaGoc_summary'] span.slick-column-name").attr('title',"Tháng trước: "+sum_GiaGoc_ThangTruoc.formatMoney(0, ',', '.'));
  $("#"+grid+" [id$='SauGiaGoc_summary'] span.slick-column-name").attr('title',"Tháng trước: "+sum_SauGiaGoc_ThangTruoc.formatMoney(0, ',', '.'));

  $("#"+grid+" [id$='DoanhThu_summary'] span.slick-column-name").removeClass('red-color');
  $("#"+grid+" [id$='GiaGoc_summary'] span.slick-column-name").removeClass('red-color');
  $("#"+grid+" [id$='SauGiaGoc_summary'] span.slick-column-name").removeClass('red-color');

  $("#"+grid+" [id$='DoanhThu_summary'] span.slick-column-name").removeClass('blue-color');
  $("#"+grid+" [id$='GiaGoc_summary'] span.slick-column-name").removeClass('blue-color');
  $("#"+grid+" [id$='SauGiaGoc_summary'] span.slick-column-name").removeClass('blue-color');


  $("#"+grid+" [id$='DoanhThu_summary'] span.slick-column-name").addClass(class_DoanhThu);
  $("#"+grid+" [id$='GiaGoc_summary'] span.slick-column-name").addClass(class_GiaGoc);
  $("#"+grid+" [id$='SauGiaGoc_summary'] span.slick-column-name").addClass(class_SauGiaGoc);
}

</script>