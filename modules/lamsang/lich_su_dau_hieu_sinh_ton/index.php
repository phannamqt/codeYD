<style>
  	#rowed3, #rowed4, #rowed5, #rowed6, #rowed7{		 
		 font-size:11px!important;	
	 }
	 .diengiai_sinhton, .diengiai_thetrang{
		position:absolute;
		width:300px;	
	 }
	 .diengiai_sinhton ,.diengiai_thetrang {		 
		 font-size:10px;		 		
	 }
	 .diengiai_sinhton div,.diengiai_thetrang div{
		 display:inline-block;	 		 		
	 }
	 #ps{
		 background-color:red;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
	 }
	 #pd{
		 background-color:#ff8a00;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
		 margin-left:4px;		 
	 }
	 #hr{
		 background-color:#00c6ff;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
		 margin-left:4px;		 
	 }	
	 #cannang{
		 background-color:#ee00be;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
		 margin-left:4px;		 
	 }
	 #chieucao{
		 background-color:blue;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
		 margin-left:4px;		 
	 }
	 #vongnguc{
		 background-color:#00c6ff;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
		 margin-left:4px;		 
	 }	  
	 .ui-state-defaul, .ui-state-hover{
		 transition: display .5s ease;
	  -webkit-transition: display .5s ease;
	  -moz-transition: display .5s ease;
	  -o-transition: display .5s ease; 
	 }
	 .ui-widget-overlay {
		opacity:0.01;
		filter: alpha(opacity=1); 
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";	
		/*overlay trong suot*/	 
	 }
 
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }	 
	label{	 
		font-size:11px;
		font-weight:bold;	 
	}	 
	svg {
		 border:1px solid #999;
		 box-shadow:0px 0px 3px 0px #a0a0a0;
	}
	#search_range{
		 border:1px solid #999;
		 box-shadow:0px 0px 3px 0px #a0a0a0;
		 border-radius: 4px;
		 margin-left:4px;
		 margin-top:4px;	 
	}
	.ui-button-text{
		height:18px;
		display:inline-block;
		padding:2px 0px 0px 0px!important;		
	}
 
</style>
<script src="js/dojo/dojo/dojo.js" type="text/javascript"></script>
<body>
<?php
	
	 
?>
<div id="panel_main" style="margin-top:0px;" >            
        <div class="left_col ui-widget-content ui-layout-west" id="LeftPane">
        	  <div class="ui-layout-center" id="inner-top"></div>
        	  <div class="ui-layout-south"  id="inner-bottom"></div>
        </div>         
        <div class="right_col ui-widget-content  ui-layout-center">
        	<div id="search_range">  
            	<div class="form_row">
                    <label style="width:100px; text-indent:5px;">                        
                    	Khoảng thời gian 
                    </label>
                    <span>
                        <input type="text" style="width:70px" name="from_day" id='from_day' value="01/01/03">
                        <input type="text" style="width:70px" name="to_day" id='to_day' value="<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>">
                        <input type="hidden" name="from_day_mask" id='from_day_mask'  value="2003/01/01">
                        <input type="hidden" name="to_day_mask" id='to_day_mask' value="<?php echo date("Y/m/d")?>">
                    </span>
                    <span>
                     <a href="#" id="xem" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; width:39px;padding-top:0px; font-size:11px; padding-bottom:0px; height:18px; ">Xem<span class="ui-icon ui-icon-search
     "></span></a>
     				</span>
                </div> 
            </div>        	 
            <table id="rowed5" ></table>
           <!-- <div id="prowed5" ></div>  -->           
            <table id="rowed7" ></table>
        	<!--<div id="prowed7" ></div>    	-->            
        </div>
      
</div>
</body>
</html>
<script type="text/javascript">
	//dojo.ready(chart_sinhton);
$(document).ready(function() {
	openform_shortcutkey();
	<?php
	//print_r($_SESSION['ThongTinBenhNhan']); 
		if(isset($_GET["idbenhnhan"])){
			echo "var id_benhnhan='$_GET[idbenhnhan]';\n";	
			echo "var ten_benhnhan='$_GET[tenbenhan]';\n";			
		}else if(isset($_GET["id_benhnhan"])){
			echo "var id_benhnhan='$_GET[id_benhnhan]';\n";	
			echo "var ten_benhnhan='$_GET[ten_benhnhan]';\n";			
		}else if(isset($_SESSION['ThongTinBenhNhan'])){
			echo "var id_benhnhan='".$_SESSION['ThongTinBenhNhan']['ID']."';\n";
			echo "var ten_benhnhan='".$_SESSION['ThongTinBenhNhan']['ten']."';\n";			 
		}else{
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
			return;	
		}
	
	?>	
var fromday, today;
		$('#xem').button();
 		$('body').bind('keydown', function(e) {
			if (jwerty.is('esc', e)) {
				parent.postMessage('dong_popup;' , '*')
			}
    	});
        $("#from_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd",             
            onClose: function(selectedDate) {
               // $("#to_day").datepicker("option", "minDate", $("#from_day_mask").val());
                fromday = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
                $("#from_day").val(fromday);
            },
            onSelect: function(dat, inst) {
                $("#from_day_mask").val(dat);
            }
        });
        $("#to_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd",            
            onClose: function(selectedDate) {
              //  $("#from_day").datepicker("option", "maxDate", $("#to_day_mask").val());
                today = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
                $("#to_day").val(today);
              //  $("#from_day").val(fromday);
            },
            onSelect: function(dat, inst) {
                $("#to_day_mask").val(dat);
            }
        });
	temp=jQuery(window).height();
	$("#panel_main").css("height",temp+"px");			 
	$("#panel_main").fadeIn(1000);
	create_layout();	 
	window.nickname=  $.ajax({                       
      url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=NickName&name=ID_NhanVien	",     
      async:false                       
    }).responseText;		 
	create_lichsu_sinhton_grid();				 
	create_lichsuthetrang_grid(); 
	$(window).resize(function() {			
		temp=jQuery(window).height();
		$("#panel_main").css("height",temp+"px");
		resize_control();		
		//draw_chart_dauhieusinhton();
		//draw_chart_thetrang();
	});
	$("#xem").click(function(e) {
		
		$("#rowed5").jqGrid().setGridParam({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_sinhton_lichsu&id_benhnhan='+id_benhnhan+"&tungay="+$("#from_day_mask").val()+"&denngay="+$("#to_day_mask").val()
		,loadonce: false
		,datatype: "json"}).trigger("reloadGrid");
	$("#rowed7").jqGrid().setGridParam({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thetrang_lichsu&id_benhnhan='+id_benhnhan+"&tungay="+$("#from_day_mask").val()+"&denngay="+$("#to_day_mask").val()
		,loadonce: false
		,datatype: "json"}).trigger("reloadGrid");	 
        $('#gbox_rowed5 .ui-jqgrid-title span,#gbox_rowed7 .ui-jqgrid-title span').html(ten_benhnhan);	 
    });
	$("#xem").click();
	phanquyen();
});
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			resizable: true
		,	size:					"65%"		
		//,	spacing_closed:		27
		//,	togglerLength_closed:	85
		//,	togglerAlign_closed:	"center"
		//,	togglerContent_closed:"<div id='menu_toggle'>M<BR>E<BR>N<BR>U</div>"
		//,	togglerTip_closed:	"Open & Pin Menu"
		//,	sliderTip:			"Slide Open Menu"
		//,	slideTrigger_open:	"mouseover"
		//,	fxName:					"drop"		// none, slide, drop, scale
		//,	fxSpeed_open:			450
		//,	fxSpeed_close:			450
		//,	fxSettings_open:		{ easing: "easeInQuint" }
		//,	fxSettings_close:		{ easing: "easeOutQuint" }
		,	onresize_end:function () { 				 
				
				resize_control();				
				draw_chart_dauhieusinhton();
				draw_chart_thetrang();
			}
		,	onopen_end:function () { 
				// resize_control();
			}
		,	onclose_end:function () { 				 
			 	//resize_control();
			}	
						
		}			
	    ,	center: {
			resizable: true
		,	size:					"35%"		
		/*,	togglerLength_closed:	100
		,	togglerAlign_closed:	"center"
		//,	togglerContent_closed:"FOOTER"
		,	togglerTip_closed:	"Open & Pin Menu"
		,	sliderTip:			"Slide Open Menu"
		,	slideTrigger_open:	"mouseover"
		,	fxName:					"drop"		// none, slide, drop, scale
		,	fxSpeed_open:			850
		,	fxSpeed_close:			850
		,	initClosed:				true
		,	fxSettings_open:		{ easing: "easeInQuint" }
		,	fxSettings_close:		{ easing: "easeOutQuint" }*/
		,	onresize_end:function () {
				
				resize_control();				
				draw_chart_dauhieusinhton();
				draw_chart_thetrang();
			}
		,	onopen_end:function () {				 
				//resize_control();		
			}
		,	onclose_end:function () { 				 
	  			//resize_control();				 
			}		
		}		
	});	
	$('#LeftPane').layout({
    	resizerClass: 'ui-state-default'
		 ,south: {
			resizable: true
		,	size:					"50%"
		,	resizerDblClickToggle: false 
		,	onresize_end:function () { 				 
				 resize_control();
				 draw_chart_dauhieusinhton();
				 draw_chart_thetrang();
			}
		,	onopen_end:function () { 
				// resize_control();
			}
		,	onclose_end:function () { 				 
			 	//resize_control();
			}
						
		}			
	    ,	center: {
			resizable: true
		,	size:					"50%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				 resize_control();
				 draw_chart_dauhieusinhton();
				 draw_chart_thetrang();
			}
		,	onopen_end:function () {				 
				//resize_control();		
			}
		,	onclose_end:function () { 				 
	  			//resize_control();				 
			}		
		} 
	});	
}
 
function create_lichsu_sinhton_grid(){
	 mydata=[];
	 $("#rowed5").jqGrid({
		data:mydata,
		datatype: "local",	
		colNames:["Người đo","Ngày giờ đo", "Ps", "Pd", "Hr", "Temp","ngaygroup"],
		colModel:[
			{name:'NguoiDo',index:'NguoiDo',width:"20%",align:'left'},	
			{name:'NgayGioDo',index:'NgayGioDo',width:"25%",align:'left'},		   	 	 
			{name:'Ps',index:'Ps',width:"18.75%", align:'right',hidden:false}, 
			{name:'Pd',index:'Pd', width:"18.75%",align:'right',hidden:false},
			{name:'Hr',index:'Hr', width:"18.75%",align:'right',},		 
			{name:'Temp',index:'Temp',width:"18.75%",align:'right',hidden:false,},	
			{name:'ngaygroup',index:'ngaygroup',width:"18.75%",align:'right',hidden:false,},			                            
		],
		loadonce: true,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed5',
		sortname: 'MaBenhNhan',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: true,
		groupingView: {groupField: ['ngaygroup'],
			groupOrder: ['asc'],
			groupSummary: [false],
			showSummaryOnHide: [false],
			groupColumnShow: [false],
			groupText: ['Lượt khám: {0} '],
			groupCollapse: false,
			showSummaryOnHide: false,
		},
		//rownumbers:true,
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) { 				
		},
		onSelectRow: function(id){				
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		
 		},
		loadComplete: function(data) {	
			var tmp1 = $("#rowed5").jqGrid('getDataIDs');
			if(tmp1.length>0) {		
				draw_chart_dauhieusinhton();								 
			}
		},
	  
		caption: "Lịch sử sinh hiệu <span></span>"
	});	
	resize_control();
	//$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false, del: false, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true});
	  
}
function create_lichsuthetrang_grid(){
	 mydata=[];
	 $("#rowed7").jqGrid({
		data:mydata,
		datatype: "local",	
		colNames:["Người đo","Ngày giờ đo", "Chiều cao (cm)", "Cân nặng (kg)", "Vòng ngực (cm)","ngaygroup"]
		,colModel:[			
            {name:'NguoiDo',index:'NguoiDo',width:"20%",align:'left'},
			{name:'NgayGioDo',index:'NgayGioDo',width:"25%",align:'left'},		   	 	 
			{name:'ChieuCao',index:'ChieuCao',width:"25%", align:'right',hidden:false}, 
			{name:'CanNang',index:'CanNang', width:"25%",align:'right',hidden:false},
			{name:'VongNguc',index:'VongNguc', width:"25%",align:'right',},	
			{name:'ngaygroup',index:'ngaygroup', width:"25%",align:'right',},				                             
		],
		loadonce: true,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed7',
		sortname: 'MaBenhNhan',
		height:100,
		width:100,
		viewrecords: true,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: true,
		groupingView: {groupField: ['ngaygroup'],
			groupOrder: ['asc'],
			groupSummary: [false],
			showSummaryOnHide: [false],
			groupColumnShow: [false],
			groupText: ['Lượt khám: {0} '],
			groupCollapse: false,
			showSummaryOnHide: false,
		},
		//rownumbers:true,
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) { 				
		},
		onSelectRow: function(id){				
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		
 		},
		loadComplete: function(data) {
			var tmp1 = $("#rowed7").jqGrid('getDataIDs');
		 	if(tmp1.length>0) {				 
				draw_chart_thetrang();
			} 
		},	  
		caption: "Lịch sử thể trạng <span></span>"
	});
	resize_control(); 
	//$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: false, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true});
	  
}
 
function resize_control(){	 
	right_height=$(".right_col").height()/2-74;	
	 
	$("#rowed5,#rowed7").setGridWidth($(".right_col").width()-11);
	$("#rowed5,#rowed7").setGridHeight(right_height); 
	$("#search_range").css("width",$(".right_col").width()-12+"px");	 	
}
function draw_chart_dauhieusinhton(){
	t=setTimeout(function(){
	$("#inner-top").empty();
	//$(".left_col").removeClass("dauhieusinhton");	
	$("#inner-top").append('<div class="diengiai_sinhton"><div id="ps"></div>Ps<div id="pd"></div>Pd<div id="hr"></div>Hr  </div><div style="height:5px"></div><div class="dauhieusinhton" id="dauhieusinhton" style="width:90%; margin-left:5px;"></div>');	
    // alert($("#inner-top").height());
	//$(".diengiai").css("height",
	$(".dauhieusinhton").css("height",($("#inner-top").height()-13)+"px");
	$(".dauhieusinhton").css("width",($("#inner-top").width()-16)+"px");	
	$(".diengiai_sinhton").css("top","9px");
	$(".diengiai_sinhton").css("left",$(".dauhieusinhton").width()-100+"px");
		//alert($(".dauhieusinhton").height());	
		chart_sinhton();		 
		clearTimeout(t);		 
	},50);		
}
function draw_chart_thetrang(){	 
	d=setTimeout(function(){
	$("#inner-bottom").empty();
	$("#inner-bottom").append('<div class="diengiai_thetrang"><div id="chieucao"></div>Chiều cao(cm)<div id="cannang"></div>Cân nặng(kg)<div id="vongnguc"></div>Vòng ngực(cm)</div><div style="height:5px"></div><div class="thetrang" id="thetrang" style="width:90%;margin-left:5px;"></div>');	 
	$(".thetrang").css("height",($("#inner-bottom").height()-10)+"px");
	$(".thetrang").css("width",($("#inner-bottom").width()-16)+"px");	 
	$(".diengiai_thetrang").css("top","7px");
	$(".diengiai_thetrang").css("left",$(".dauhieusinhton").width()-270+"px");			
		chart_thetrang();	
		clearTimeout(d);		 
	},50);			
}
           
function render_name(cellValue, opts, rowObject) {         
        var tam1;
        nickname1 = window.nickname.split(";");
        for (i = 0; i <= nickname1.length - 1; i++) {
            temp = nickname1[i].split(":");
            if (temp[1] == cellValue) {
                tam1 = temp[0];
                break;
            }
        }
        return tam1;
}
 function merge_cell(rowId, tv, rawObject, cm, rdata){
	  //tv la noi dung cell, rawObject mang json tra ve cm la cell option
	
	  //return ' rowspan=2'
	 
 } 
 function tomaudo(rowId, tv, rawObject, cm, rdata){
	 return ' class="chumaudo"';
 }
 	dojo.require("dijit.form.HorizontalSlider");	 
	dojo.require("dijit.form.HorizontalRule");
	dojo.require("dijit.form.HorizontalRuleLabels");
	dojo.require("dojox.charting.Chart2D");
	dojo.require("dojox.charting.plot2d.Lines");//charting/plot2d/Lines
	dojo.require("dojox.charting.plot2d.Markers");						
	dojo.require("dojox.charting.themes.Midwest");
	dojo.require("dojox.lang.functional.object");
 
function chart_sinhton  (){
    // When the DOM is ready and resources are loaded...
 
    // Define the data
	
 	var chartData =[];
	var chartData1 =[];
	var chartData2 =[];
	var labelx=[];
	var tmp1 = $("#rowed5").jqGrid('getDataIDs');	 
	for(var i=0;i < tmp1.length;i++){ 
		var rowData = $("#rowed5").getRowData(tmp1[i]);
		if(rowData["Ps"]==""){
			rowData["Ps"]=0;
		}
		if(rowData["Pd"]==""){
			rowData["Pd"]=0;
		}
		if(rowData["Hr"]==""){
			rowData["Hr"]=0;
		}
		chartData.push(parseInt(rowData["Ps"]));
		chartData1.push(parseInt(rowData["Pd"]));
		chartData2.push(parseInt(rowData["Hr"]));
		labelx.push({value:(i+1), text:rowData["NgayGioDo"]});		
	}
	// Create the chart within it's "holding" node
	var theme = dojox.charting.themes.Midwest;
	var chart = new dojox.charting.Chart2D("dauhieusinhton");
    //theme.setMarkers({ "CIRCLE":  "m-5,-5 l0,10 10,0 0,-10 z",  });
 	/*theme.setMarkers({ 
                SQUARE:   "m-5,-5 l0,10 10,0 0,-10 z", 
 
       
	}); */
    // Set the theme
    chart.setTheme(theme);
	
    // Add the only/default plot
    chart.addPlot("default", {
        type: "Lines",
        markers: true,
		fill: "red",
		stroke: {color:"red"},
		animate: {duration: 300}
    });
  	chart.addPlot("Pd", {
        type: "Lines",
        markers: true,
		fill: "#ff8a00",
		stroke: {color:"#ff8a00"},
		animate: {duration: 300}
    });
	chart.addPlot("Hr", {
        type: "Lines",
        markers: true,
		fill: "#00c6ff",
		stroke: {color:"#00c6ff"},
		animate: {duration: 300}
    });
    // Add axes
	
  	var maxY =[chartData.max(),chartData1.max(),chartData2.max()];  	
    chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, });   
	chart.addAxis("x", {            
            includeZero: false, 
            labels: labelx,
            rotation:90
        }
            );
	
	
 
    // Add the series of data
    chart.addSeries("Ps",chartData);
 	chart.addSeries("Pd", chartData1, {plot: "Pd"});
	chart.addSeries("Hr", chartData2, {plot: "Hr"});
    // Render the chart!
    chart.render();
  
};

function chart_thetrang(){
    // When the DOM is ready and resources are loaded...
 
    // Define the data
	
 	var chartData =[];
	var chartData1 =[];
	var chartData2 =[];
	var labelx=[];
	var tmp1 = $("#rowed7").jqGrid('getDataIDs');	 
	for(var i=0;i < tmp1.length;i++){ 
		var rowData = $("#rowed7").getRowData(tmp1[i]);	
		if(rowData["ChieuCao"]==""){
			rowData["ChieuCao"]=0;
		}
		if(rowData["CanNang"]==""){
			rowData["CanNang"]=0;
		}
		if(rowData["VongNguc"]==""){
			rowData["VongNguc"]=0;
		}		
		chartData.push(parseInt(rowData["ChieuCao"]));
		chartData1.push(parseInt(rowData["CanNang"]));
		chartData2.push(parseInt(rowData["VongNguc"]));
		labelx.push({value:(i+1), text:rowData["NgayGioDo"]});		
	}
	 
  
   
    // Create the chart within it's "holding" node
	var theme = dojox.charting.themes.Midwest;
	var chart = new dojox.charting.Chart2D("thetrang");
    //theme.setMarkers({ "CIRCLE":  "m-5,-5 l0,10 10,0 0,-10 z",  });
 	/*theme.setMarkers({ 
                SQUARE:   "m-5,-5 l0,10 10,0 0,-10 z", 
 
       
	}); */
    // Set the theme
    chart.setTheme(theme);
	
    // Add the only/default plot
    chart.addPlot("default", {
        type: "Lines",
        markers: true,
		fill: "blue",
		stroke: {color:"blue"},
		animate: {duration: 300}
    });
  	chart.addPlot("CanNang", {
        type: "Lines",
        markers: true,
		fill: "#ee00be",
		stroke: {color:"#ee00be"},
		animate: {duration: 300}
    });
	chart.addPlot("VongNguc", {
        type: "Lines",
        markers: true,
		fill: "#00c6ff",
		stroke: {color:"#00c6ff"},
		animate: {duration: 300}
    });
    // Add axes
	var maxY =[chartData.max(),chartData1.max(),chartData2.max()];  	
    chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, });
	chart.addAxis("x", {            
            includeZero: false, 
            labels: labelx,
            rotation:90
    });
	
 
 
    // Add the series of data
    chart.addSeries("chieucao",chartData);
 	chart.addSeries("cannang", chartData1, {plot: "CanNang"});
	chart.addSeries("vongnguc", chartData2, {plot: "VongNguc"});
    // Render the chart!
    chart.render();
  
};


 


 
 
</script>
 
 
