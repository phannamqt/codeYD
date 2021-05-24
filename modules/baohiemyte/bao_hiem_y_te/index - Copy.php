<script language="JavaScript" src="js/SlickGrid-2.0-frozen/lib/firebugx.js"></script>
<script src="js/SlickGrid-2.0-frozen/lib/jquery.event.drag-2.2.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellrangedecorator.js"></script>
<script src="js/SlickGrid-2.0-frozen/lib/jquery.mousewheel.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.core.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.editors.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.formatters.js?id=1"></script>
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
<script src="js/SlickGrid-2.0-frozen/slick.remotemodel.js"></script>
<script type="text/javascript" src="js/node_modules/socket.io-client/dist/socket.io.js"></script>
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/slick.grid.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/controls/slick.pager.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/controls/slick.columnpicker.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/slick.grid-edit.css"   type="text/css"/>
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/plugins/slick.summaryfooter.css" type="text/css"/>
<style type="text/css">

.slick-cell.selected {
	background: none repeat scroll 0 0 #76C4EB;
}
.slick-row:hover {
	background:#008ddf;
	cursor:pointer;
}

.slick-column-name { white-space: normal;
	word-wrap: break-word;
	text-align:center!important;
}
.slick-header-column.ui-state-default{
	height:70px	 !important;
	text-align:center!important;
}
.slick-cell, .slick-headerrow-column {
	border-style: solid!important;
}
.slick-row.selected .cell-selection {
	background-color: transparent; /* show default selected row background */
}
.ui-jqgrid tr.myfootrow td {
	font-weight: bold;
	overflow: hidden;
	white-space:nowrap;
	height: 21px;
	padding: 0 2px 0 2px;
	border-top-width: 1px;
	border-top-color: inherit;
	border-top-style: solid;
} /*footer row modding*/
body{
	/*overflow:auto!important;*/
	height:115%;
	width:1300px;		
}
#tabs .ui-tabs-panel {  
	height: 85%;
}
#tabs .ui-tabs-nav li {
	font-size: 90%;
	margin-top: 0.1em;	
}
.panel_form{
	margin-left:10px;
	
}
.diengiai_sinhton, .diengiai_thetrang{
	position:absolute;
	width:300px;
	left: 623px !important;
}
.colored{
	background-color:#D5EAFF;
	color:black;
}
.colored2{
	background-color:#FFFFC4;
	color:black;
}
.colored3{
	background-color:#FAD8E2;
	color:red;
}.colored4{
	background-color:#E1FDFD;
	color:#2A120A;
}
#rowed3 td {
	white-space: nowrap;
	word-wrap: normal !important;
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
</style>
<script src="../giaidoan2/js/dojo/dojo/dojo.js" type="text/javascript"></script>
<body>
<div id="dialog_xemloi" style="display:none"><span id="xemloi"><span>
</div>

<fieldset class="ui-widget ui-widget-content ui-corner-all ui-resizable panel_form" style="width:97.5%;;margin-top:0px">
<div style="display:inline-block">
<label style="font-weight:bold">Từ ngày </label> 
<input type="text" id="tungay" value="<?php echo date("d/m/YY") ?>" style="text-align:center;width:60px"/>
<label  style="font-weight:bold"> đến ngày </label> 
<input type="text" id="denngay" value="<?php echo date("d/m/YY") ?>" style="text-align:center;width:60px"/>
</div>
<div id="xemtheo_gio" style="display:inline-block">
<label style="font-weight:bold">từ giờ</label> 
<input type="text" id="tugio" value="00:00" style="text-align:center;width:30px"/>
<label  style="font-weight:bold">đến giờ</label> 
<input type="text" id="dengio" value="00:00" style="text-align:center;width:30px"/>
</div>
<div style="margin-left:10px;display:inline-block" id="xemtheo_control">
<label style="font-weight:bold"> Xem theo </label> 
<select id="xemtheo_option" style="width:80px">
<option value="0" selected="selected" text="Ngày">Nội trú</option>
<option value="1" text="Tháng">Ngoại trú</option>				  
<option value="2" text="Tháng">Nội trú theo thanh toán</option>
<option value="3" text="Tháng">Ngoại trú theo thanh toán</option>					
</select>
</div>  
<div style="display:inline-block">
<button style="margin-left:10px" id='xem'>Xem</button>
<button style="margin-left:1px" id='xuat_excel'>Excel</button>
<button style="margin-left:1px" id='xuat_xml'>XML</button>
<button style="margin-left:1px" id='xuat_xml4210'>XML4210</button>
<button style="margin-left:1px" id='Excel19'>19</button>
<button style="margin-left:1px" id='Excel20'>20</button>
<button style="margin-left:1px" id='Excel21'>21</button>
<button style="margin-left:1px" id='Excel1094'>1094</button>
<button style="margin-left:1px" id='Excel79'>79</button>
<button style="margin-left:1px" id='Excel80'>80</button>
<button style="margin-left:1px" id='thanhtoan'>DS thanh toán</button>

<button style="margin-left:1px" id='ExcelDungTuyen'>Đúng T</button>



</div> 
<div style="display:inline-block;float:right">
<b>ĐVT: 1,000 đồng</b>
</div>  

</fieldset> 
<div id="tabs" style="margin-left:10px; height:88%; width:1290px;">
<ul style="margin-left:5px; border-bottom:1px solid #CCC">                
<li><a href="#tabs-1" id="tab1_click">Tổng hợp nội-ngoại trú</a></li> 
<li><a href="#tabs-2" onClick="loadtab2()" id="tab2_click">Thuốc nội-ngoại trú</a></li> 
<li><a href="#tabs-3" onClick="loadtab3()" id="tab3_click">Bảng kê nội-ngoại trú</a></li> 
<li><a href="#tabs-4" onClick="loadtab4()" id="tab4_click">Chưa thanh toán</a></li> 
<li><a href="#tabs-5" onClick="loadtab5()" id="tab5_click">Chưa thanh toán new</a></li> 
</ul>

<div id="tabs-1" > 
<div id="grid"></div>
<div id="pager" style="width:105%;height:20px;"></div> 
</div>	 
<div id="tabs-2"> 
<div  class="rowed4">
<table id="rowed4">
</table>
</div>  
</div>
<div id="tabs-3"> 
<div  class="rowed5">
<table id="rowed5">
</table>
</div>  
</div>
<div id="tabs-4"> 
<div  class="rowed6">
<table id="rowed6">
</table>
</div>  


<div id="tabs-5"> 
<div  class="rowed7">
<table id="rowed7">
</table>
</div>


</div>       
</body>
</html>
<script type="text/javascript">
var tab_selected=1;//dùng để điều khiển nút "Xem" khi chọn các tab khác nhau
var random_data;
const url='resource.php?module=<?= $modules ?>&view=<?= $view ?>';
var urlcontroller='resource.php?module=report&view=<?= $modules ?>&action=controller&hienmaloi=1';
const columnDialogChuyenNgayQuyetToan={
	column:1,
//	saveCallBack:saveCallBack,		
	Dialog:{			
	},
	Array:[	
		{type:'date',name:'Ngay',validate:'require',label:'Ngày tồn kho'},
		{type:'hidden',name:'oper',defaultValue:'add'},
		{type:'hidden',name:'ID_auto',defaultValue:''},
	]
}
var dialogChuyenNgayQuyetToan = new creatFormDialog(urlcontroller,columnDialogChuyenNgayQuyetToan);
var optionsBHYT = {
	enableCellNavigation: true,
	showHeaderRow: true,
	headerRowHeight: 30,
	explicitInitialization: true,
	forceFitColumns: false,
	multiColumnSort: true,
	fullWidthRows:true,			
	frozenColumn: 2,
};		
columnsBHYT = [				
	{name:'Mã BN',id:'ID_BenhNhan',field: "ID_BenhNhan", width:70, sortable: true},
	{name:'Tên BN',id:'tenbn',field: "tenbn", width:120, sortable: true},
	{name:'Năm sinh',id:'NamSinh',field: "NamSinh", width:60, sortable: true},
	{name:'Giới tính',id:'GioiTinh',field: "GioiTinh", width:60, sortable: true},					
	{name:'Số thẻ',id:'SoThe',field: "SoThe", width:120, sortable: true},
	{name:'KCB ban đầu',id:'Ma_KCB_BanDau',field: "Ma_KCB_BanDau", width:50, sortable: true},			
	{name:'ICD10',id:'MaICD10',field: "MaICD10", width:50, sortable: true},
	{name:'Vào khám',id:'thoigianvaokham',field: "thoigianvaokham", width:80, sortable: true},
	{name:'Kết thúc',id:'ThoiGianKetThucKham',field: "ThoiGianKetThucKham", width:80, sortable: true},				
	{name:'Thời gian thanh toán',id:'ngaygiolon',field: "ngaygiolon", width:100, sortable: true,formatter: ngaythang},				
	{name:'Bảng kê',id:'ID_ThuTraNo',field: "ID_ThuTraNo", width:60, sortable: true,formatter: bangke},		
	{name:'XML',id:'XML',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML},	
	{name:'4210',id:'4210',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML4210},	
	{name:'xemloi',id:'xemloi',field: "ID_ThuTraNo", width:60, sortable: true,formatter: xemloi},	
	{name:'Chuyển ngày quyết Toán',id:'QuyetToan',field: "ID_ThuTraNo", width:60, sortable: true,formatter: QuyetToan},	
	{name:'Khóa BHYT',id:'ID_NguoiHoanTatA',field: "ID_NguoiHoanTatA", width:60, sortable: true,formatter: khoabhyt},		
	{name:'nickname',id:'nickname',field: "nickname", width:60, sortable: true},	
	{name:'TongTienBHYTChiTra',id:'TongTienBHYTChiTra',field: "TongTienBHYTChiTra", width:60, sortable: true},	
];
var gridBHYT;

// $('#add').click(function(){			
// 	dialogChuyenNgayQuyetToan.edit();
// })
$(document).ready(function() {
	window.socket1 = io.connect('192.168.1.104:3000');
	window.noitru='';
	$('#xemtheo_gio').hide();
	$.timeEntry.setDefaults({show24Hours: true});
	$.dateEntry.setDefaults({spinnerImage: ''});
	$('#tugio, #dengio').timeEntry({timeSteps: [1, 1, 1]});	
	
	
	$('#xemtheo_option').click(function(){
		if($("#xemtheo_option option:selected").val()==0 || $("#xemtheo_option option:selected").val()==1){
			$('#xemtheo_gio').hide();
		}else{
			$('#xemtheo_gio').show();
		}

	})

	$( "#dialog_xemloi" ).dialog({
		resizable: false,
		height:'auto',	  
		autoOpen :false,
		modal: true,
		buttons: {
		}
		,open: function (){		
		}
		,close: function (){		
		}
	});

	
	$("#xem").button();
	$("#xuat_excel,#Excel19,#Excel20,#Excel21,#Excel1094,#Excel79,#Excel80,#thanhtoan").button();
	$('#Excel19').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_19_new&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#thanhtoan').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=ds_thanhtoansbhyt&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#Excel20').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_20_new&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#Excel21').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_21&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#Excel1094').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_1094&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#Excel79').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_79&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#Excel80').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_80&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})

	$('#ExcelDungTuyen').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_DungTuyen&loai=1&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#ExcelTraiTuyenNoi').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_TraiTuyenNoi&loai=2&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#ExcelTraiTuyenNgoai').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_TraiTuyenNgoai&loai=3&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})	
	openform_shortcutkey();

	jQuery(window).resize(function() {		 
		$("#rowed4").setGridWidth($(window).width()-55);
		$("#rowed4").setGridHeight($(window).height()-220);
	});
	jQuery(window).resize(function() {		 
		$("#rowed5").setGridWidth($(window).width()-55);
		$("#rowed5").setGridHeight($(window).height()-220);
	});
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
	window.opentab2=0;
	window.opentab3=0;
	window.opentab4=0;
	$( "#tabs" ).tabs({		
	
	});
	//create_grid_new();	
	gridBHYT=  new createSlickGrid("#grid","#pager",optionsBHYT,columnsBHYT);	
	$( "#tab1_click").click(function(){
		$( "#xemtheo_control" ).show();
		tab_selected=1;
	});
	$( "#tab2_click" ).click(function(){
		$( "#xemtheo_control" ).show();
		tab_selected=2;
	});
	$( "#tab3_click").click(function(){
		$( "#xemtheo_control" ).show();
		tab_selected=3;
	});
	$( "#tab4_click").click(function(){
		$( "#xemtheo_control" ).hide();
		tab_selected=4;
	});
	$("#xuat_excel").click(function(){
		if(tab_selected==1)
		{
			if($("#xemtheo_option option:selected").val()==0){
				//alert("nội trú,tổng hợp");
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_tonghopnoi&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}else{
				//alert("ngoại trú,tổng hợp");
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_tonghopngoai&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}
			//window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_baocaodoanhthu&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
		}
		if(tab_selected==2)
		{
			if($("#xemtheo_option option:selected").val()==0){
				//alert("nội trú,THUỐC");
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_thuocnoi&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}else{
				//alert("ngoại trú,THUỐC");
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_thuocngoai&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}
		}
		if(tab_selected==3)
		{
			if($("#xemtheo_option option:selected").val()==0){
				//alert("nội trú,bảng kê");
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_bangkenoi&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}else{
				//alert("ngoại trú,bảng kê");
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_bangkengoai&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}
		}		
		if(tab_selected==4){
			window.open("resource.php?module=report&view=baocao_thongke&action=ds_chuathanhtoanbhyt&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
		}
	})
	
	
	$('#xuat_xml').click(function(){
		list = [];		
		var n1 = 0;
		if(tab_selected==1){		
			for(var i=0;i<gridBHYT.dataView.getItems().length;i++){
			//	tam=tam+'|'+gridBHYT.dataView.getItems()[i].ID_ThuTraNo+';'+noitru;			
				list[n1] = {
					ID_ThuTraNo: gridBHYT.dataView.getItems()[i].ID_ThuTraNo,
					noitru: noitru,
				};
				n1++;
			}			
			socket.emit('list', JSON.stringify(list));				
		}
		if(tab_selected==2){
			
		}
		if(tab_selected==3){
			
		}
	})	


	$('#xuat_xml4210').click(function(){
		list = [];		
		var n1 = 0;
		if(tab_selected==1){		
			for(var i=0;i<gridBHYT.dataView.getItems().length;i++){					
				list[n1] = {
					ID_ThuTraNo: gridBHYT.dataView.getItems()[i].ID_ThuTraNo,
					noitru: noitru,
				};
				n1++;
			}			
			console.log(list);
			socket1.emit('list', JSON.stringify(list));				
		}
		if(tab_selected==2){
			
		}
		if(tab_selected==3){
			
		}
	})	
	
	var click_t3=0;
	$( "#xem").click(function(){
		if($("#xemtheo_option option:selected").val()==0 || $("#xemtheo_option option:selected").val()==2){
			window.noitru=1;
		}
		if($("#xemtheo_option option:selected").val()==1 || $("#xemtheo_option option:selected").val()==3){
			window.noitru=0;
		}
		switch(tab_selected)
		{
			case 1:
			loadDataForGridByOption($("#xemtheo_option option:selected").val());
			break;
			case 2:
			loadDataForGridByOption2($("#xemtheo_option option:selected").val());
			break;
			case 3:
			loadDataForGridByOption3($("#xemtheo_option option:selected").val());
			break;
			case 4:
			loadDataForGridByOption4();
			break;
			break;

		}
	})
	

})


function loadDataForGridByOption(kieuxem)
{
	var urlreload= 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghop_ngoaitru&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val();
	
	
	if($("#xemtheo_option option:selected").val()==1){	
		// $.ajax({
		// 	type: 'POST',
		// 	async : false,
		// 	url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghop_ngoaitru&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),
		// 	success: function(data, status, xhr) {		
		// 		data=$.parseJSON(data)
		// 		dataView.setItems(data);
		// 		dataView.setFilter(filter);		
		// 		dataView.endUpdate();
		// 		dataView.refresh();										
		// 		grid.invalidate();						
		// 	},
		// });
		gridBHYT.reload(urlreload,{});
	}else  if($("#xemtheo_option option:selected").val()==0){
		// $.ajax({
		// 	type: 'POST',
		// 	async : false,
		// 	url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghop_noitru&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),
		// 	success: function(data, status, xhr) {		
		// 		data=$.parseJSON(data)
		// 		dataView.setItems(data);
		// 		dataView.setFilter(filter);		
		// 		dataView.endUpdate();
		// 		dataView.refresh();										
		// 		grid.invalidate();						
		// 	},
		// });	
		gridBHYT.reload(urlreload,{});
	}else  if($("#xemtheo_option option:selected").val()==2){
		// $.ajax({
		// 	type: 'POST',
		// 	async : false,
		// 	url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghop_noitru_thanhtoan&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val()+'&tugio='+$( '#tugio' ).val()+'&dengio='+$( '#dengio' ).val(),
		// 	success: function(data, status, xhr) {		
		// 		data=$.parseJSON(data)
		// 		dataView.setItems(data);
		// 		dataView.setFilter(filter);		
		// 		dataView.endUpdate();
		// 		dataView.refresh();										
		// 		grid.invalidate();						
		// 	},
		// });	
		gridBHYT.reload(urlreload,{});
	}else  if($("#xemtheo_option option:selected").val()==3){
		// $.ajax({
		// 	type: 'POST',
		// 	async : false,
		// 	url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghop_ngoaitru_thanhtoan&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val()+'&tugio='+$( '#tugio' ).val()+'&dengio='+$( '#dengio' ).val(),
		// 	success: function(data, status, xhr) {		
		// 		data=$.parseJSON(data)
		// 		dataView.setItems(data);
		// 		dataView.setFilter(filter);		
		// 		dataView.endUpdate();
		// 		dataView.refresh();										
		// 		grid.invalidate();						
		// 	},
		// });	
		gridBHYT.reload(urlreload,{});;
	}

}
function loadDataForGridByOption2(kieuxem)
{
	if($("#xemtheo_option option:selected").val()==1){
	//alert("thuốc ngoại");
	$("#rowed4").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_thuocbhyt_ngoaitru&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');
}else{
	//alert("thuốc nội");
	$("#rowed4").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghop_thuocnoi&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');
}

}

function loadDataForGridByOption3(kieuxem)
{
	//if($("#xemtheo_option option:selected").val()==1){
		//alert("bk ngoại");
		//$("#rowed5").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_bangkebhyt_ngoaitru&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');
	//}else{
		//alert("bk nội");
		//$("#rowed5").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_bangkebhyt_thuocnoi&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');
	//}


}
function loadDataForGridByOption4(){	
	$("#rowed6").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chuathanhtoan&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');
}


function loadtab2(){
	if(window.opentab2==0){
		create_grid2();
		window.opentab2=1;
	}
}
function loadtab3(){
	if(window.opentab3==0){
		create_grid3();
		window.opentab3=1;
	}
}
function loadtab4(){
	if(window.opentab4==0){
		create_grid6();
		window.opentab4=1;
	}
}


function create_grid(){	
	$("#rowed3").jqGrid({
		url:'',
		datatype: "json",	
		colNames:['STT',"Tên BN",'NSinh','GT','Số Thẻ','Mã KCB BĐ','Chẩn đoán rv','Thời gian khám','Ra viện','Ngày ĐT','XN','CĐHA',
		'Thuốc','Máu','TTPT','VTYT','VTTT','DVKTC','ThuocUT','KB','VC','Tổng','T.tiền cùng CT','T.tiền BH','Lý do vv','HSD từ ngày','HSD đến ngày','ĐC thẻ BHTY','Tên phòng ban','ID lượt khám','ID bệnh nhân',''],
		colModel:[
		{name:'stt',index:'stt', width:"4%", editable:false,align:'center',hidden:false},
		{name:'TenBenhNhan',index:'TenBenhNhan', width:"15%", editable:false,align:'left',hidden:false},
		{name:'NamSinh',index:'NamSinh', width:"4%", editable:false,align:'left',hidden:false},
		{name:'GioiTinh',index:'GioiTinh', width:"2%", editable:false,align:'left',hidden:false},
		{name:'SoThe',index:'SoThe', width:"5%", editable:false,align:'left',hidden:false},
		{name:'MaKCB',index:'MaKCB', width:"5%", editable:false,align:'left',hidden:false},
		{name:'CDRaVien',index:'CDRaVien', width:"5%", editable:false,align:'left',hidden:false},
		{name:'ThoiGianKham',index:'ThoiGianKham', width:"5%", editable:false,align:'center',hidden:false},
		{name:'RaVien',index:'RaVien', width:"5%", editable:false,align:'left',hidden:false},
		{name:'NgayDT',index:'NgayDT', width:"2%", editable:false,align:'left',hidden:false},
		{name:'XetNghiem',classes:'colored',index:'XetNghiem', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'CDHA',classes:'colored',index:'CDHA', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Thuoc',classes:'colored',index:'Thuoc', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Mau',classes:'colored',index:'Mau', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Ttpt',classes:'colored',index:'Ttpt', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Vtyt',classes:'colored',index:'Vtyt', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Vttt',classes:'colored',index:'Vttt', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Dvktc',classes:'colored',index:'Dvktc', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'ThuocUt',classes:'colored',index:'ThuocUt', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'kb',classes:'colored',index:'kb', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Vc',classes:'colored',index:'Vc', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Tong',classes:'colored3',index:'Tong', width:"8%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Ttcungct',index:'Ttcungct',classes:'colored2',width:"8%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Ttbaohiem',index:'Ttbaohiem',classes:'colored4',width:"8%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'Lydovv',index:'Lydovv', width:"2%", editable:false,align:'left',hidden:false},
		{name:'Hsd_tungay',index:'Hsd_tungay', width:"5%", editable:false,align:'center',hidden:false},
		{name:'Hsd_denngay',index:'Hsd_denngay', width:"5%", editable:false,align:'center',hidden:false},
		{name:'Diachithe',index:'Diachithe', width:"5%", editable:false,align:'left',hidden:false},
		{name:'Tenphongban',index:'Tenphongban', width:"5%", editable:false,align:'left',hidden:false},
		{name:'ID_luotkham',index:'ID_luotkham', width:"5%", editable:false,align:'left',hidden:false},
		{name:'ID_benhnhan',index:'ID_benhnhan', width:"5%", editable:false,align:'left',hidden:false},
		{name:'ID_ThuTraNo',index:'ID_ThuTraNo', width:"5%", editable:false,align:'left',hidden:false},


		],


		loadonce: true,
		scroll: false,	
		modal:true,	 	
		rowNum: 10000000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		footerrow: true,


		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  

		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			var ids = $('#rowed3').jqGrid('getDataIDs');

			for (i = 0; i < ids.length; i++) {
				var rowData = jQuery('#rowed3').getRowData(ids[i]);
				  //if( rowData["ID_ThuTraNo"]!='769799'){

				  	$.ajax({
				  		type: 'POST',
				  		async : false,
				  		url: 'resource.php?module=report&view=hanhchinh&action=quyettoanbhyt&idthutrano='+rowData["ID_ThuTraNo"],
				  		success: function(data, status, xhr) {			
									//		$("#rowed3").jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
								},
							});			
				 // }
				}


			},
			loadComplete: function(data) {	
			grid_filter_enter("#rowed3"); //enter: chuyen con tro sang o tiếp theo
			localData = $("#rowed3").jqGrid("getGridParam", "data");
			totalRows = localData.length;	
			$("#rowed3").jqGrid('footerData', 'set', {'stt': totalRows,
				'XetNghiem': $("#rowed3").jqGrid('getCol', 'XetNghiem', false, 'sum'),
				'CDHA': $("#rowed3").jqGrid('getCol', 'CDHA', false, 'sum'),
				'Thuoc': $("#rowed3").jqGrid('getCol', 'Thuoc', false, 'sum'),
				'Mau': $("#rowed3").jqGrid('getCol', 'Mau', false, 'sum'),
				'Ttpt': $("#rowed3").jqGrid('getCol', 'Ttpt', false, 'sum'),
				'Vtyt': $("#rowed3").jqGrid('getCol', 'Vtyt', false, 'sum'),
				'Ptpt': $("#rowed3").jqGrid('getCol', 'Ptpt', false, 'sum'),
				'Vttt': $("#rowed3").jqGrid('getCol', 'Vttt', false, 'sum'),
				'Dvktc': $("#rowed3").jqGrid('getCol', 'Dvktc', false, 'sum'),
				'ThuocUt': $("#rowed3").jqGrid('getCol', 'ThuocUt', false, 'sum'),
				'kb': $("#rowed3").jqGrid('getCol', 'kb', false, 'sum'),
				'Vc': $("#rowed3").jqGrid('getCol', 'Vc', false, 'sum'),
				'Tong': $("#rowed3").jqGrid('getCol', 'Tong', false, 'sum'),
				'Ttcungct': $("#rowed3").jqGrid('getCol', 'Ttcungct', false, 'sum'),
				'Ttbaohiem': $("#rowed3").jqGrid('getCol', 'Ttbaohiem', false, 'sum'),

			});	 

		},	

		caption: "Kết quả"
	});	


$("#rowed3").setGridWidth($(window).width()-55);
$("#rowed3").setGridHeight($(window).height()-275);

	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
	} } );	
	$("#gbox_rowed3").attr("tabindex","1");

	$("#gbox_rowed3").bind('keydown', function(e) {			
		if((jwerty.is("ctrl+m",e))){		 
			$("#rowed3").jqGrid('restoreRow', lastsel);
			$("#rowed3").jqGrid('editRow', rowid, true);
			lastsel = rowid;
		}
	}) 	 

}

function create_grid2(){	
	$("#rowed4").jqGrid({
		url:'',
		datatype: "json",	
		colNames:['STT',"Tên thuốc",'Hàm lượng','SignNumber','Tên đơn vị','Số lượng','Giá','Tổng tiền'],
		colModel:[
		{name:'stt',index:'stt', width:"5%", editable:false,align:'center',hidden:false},
		{name:'TenThuoc',index:'TenThuoc', width:"45%", editable:false,align:'left',hidden:false},
		{name:'HamLuong',index:'HamLuong', width:"5%", editable:false,align:'left',hidden:false},
		{name:'SignNumber',index:'SignNumber', width:"10%", editable:false,align:'left',hidden:false},
		{name:'TenDonVi',index:'TenDonVi', width:"5%", editable:false,align:'left',hidden:false},
		{name:'SoLuong',index:'SoLuong', width:"5%", editable:false,align:'left',hidden:false},			
		{name:'Gia',classes:'colored',index:'Gia', width:"15%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'TongTien',classes:'colored3',index:'TongTien', width:"15%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		],
		loadonce: true,
		scroll: false,	
		modal:true,	 	
		rowNum: 10000000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		footerrow: true,			
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		  		   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {			
		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed4");
			localData = $("#rowed4").jqGrid("getGridParam", "data");
		},	
		caption: "Kết quả"
	});	


	$("#rowed4").setGridWidth($(window).width()-55);
	$("#rowed4").setGridHeight($(window).height()-275);

	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
	} } );	
	$("#gbox_rowed4").attr("tabindex","1");

	$("#gbox_rowed4").bind('keydown', function(e) {			
		if((jwerty.is("ctrl+m",e))){		 
			$("#rowed4").jqGrid('restoreRow', lastsel);
			$("#rowed4").jqGrid('editRow', rowid, true);
			lastsel = rowid;
		}
	}) 

}

function create_grid3(){	
	$("#rowed5").jqGrid({
		url:'',
		datatype: "json",	
		colNames:['STT',"Tên",'Số lượng','Giá','Thành tiền'],
		colModel:[
		{name:'stt',index:'stt', width:"5%", editable:false,align:'center',hidden:false},
		{name:'TenThuoc',index:'TenThuoc', width:"50%", editable:false,align:'left',hidden:false},
		{name:'SoLuong',index:'SoLuong', width:"10%", editable:false,align:'left',hidden:false},			
		{name:'Gia',classes:'colored',index:'Gia', width:"30%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		{name:'TongTien',classes:'colored3',index:'TongTien', width:"30%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
		],


		loadonce: true,
		scroll: false,	
		modal:true,	 	
		rowNum: 10000000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		footerrow: true,


		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  

		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed5");
			localData = $("#rowed5").jqGrid("getGridParam", "data");
			totalRows = localData.length;	
			$("#rowed5").jqGrid('footerData', 'set', {'stt': totalRows+' dòng',
				'XetNghiem': $("#rowed3").jqGrid('getCol', 'XetNghiem', false, 'sum'),
				'CDHA': $("#rowed3").jqGrid('getCol', 'CDHA', false, 'sum'),
				'Thuoc': $("#rowed3").jqGrid('getCol', 'Thuoc', false, 'sum'),
				'Mau': $("#rowed3").jqGrid('getCol', 'Mau', false, 'sum'),
				'Ttpt': $("#rowed3").jqGrid('getCol', 'Ttpt', false, 'sum'),
				'Vtyt': $("#rowed3").jqGrid('getCol', 'Vtyt', false, 'sum'),
				'Ptpt': $("#rowed3").jqGrid('getCol', 'Ptpt', false, 'sum'),
				'Vttt': $("#rowed3").jqGrid('getCol', 'Vttt', false, 'sum'),
				'Dvktc': $("#rowed3").jqGrid('getCol', 'Dvktc', false, 'sum'),
				'ThuocUt': $("#rowed3").jqGrid('getCol', 'ThuocUt', false, 'sum'),
				'kb': $("#rowed3").jqGrid('getCol', 'kb', false, 'sum'),
				'Vc': $("#rowed3").jqGrid('getCol', 'Vc', false, 'sum'),
				'Tong': $("#rowed3").jqGrid('getCol', 'Tong', false, 'sum'),
				'Ttcungct': $("#rowed3").jqGrid('getCol', 'Ttcungct', false, 'sum'),
				'Ttbaohiem': $("#rowed3").jqGrid('getCol', 'Ttbaohiem', false, 'sum'),

			});	 

		},	

		caption: "Kết quả"
	});	


	$("#rowed5").setGridWidth($(window).width()-55);
	$("#rowed5").setGridHeight($(window).height()-275);

	$("#rowed5").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	$("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {
	} } );	
	$("#gbox_rowed5").attr("tabindex","1");

	$("#gbox_rowed5").bind('keydown', function(e) {			
		if((jwerty.is("ctrl+m",e))){		 
			$("#rowed5").jqGrid('restoreRow', lastsel);
			$("#rowed5").jqGrid('editRow', rowid, true);
			lastsel = rowid;
		}
	}) 

}


function formatMoney(num) {
	var p = num.toFixed(2).split(".");
	return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
		return  num + (i && !(i % 3) ? "." : "") + acc;
	}, "");
}



function create_grid_new(){			
	gridBHYT.dataView;	
	var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();	  		 
	window.grid;	 
	var options = {
		enableCellNavigation: true,
		showHeaderRow: true,
		headerRowHeight: 30,
		explicitInitialization: true,
		forceFitColumns: false,
		multiColumnSort: true,
		fullWidthRows:true,			
		frozenColumn: 2,
	};		
	window.columns = [				
	{name:'Mã BN',id:'ID_BenhNhan',field: "ID_BenhNhan", width:70, sortable: true},
	{name:'Tên BN',id:'tenbn',field: "tenbn", width:120, sortable: true},
	{name:'Năm sinh',id:'NamSinh',field: "NamSinh", width:60, sortable: true},
	{name:'Giới tính',id:'GioiTinh',field: "GioiTinh", width:60, sortable: true},					
	{name:'Số thẻ',id:'SoThe',field: "SoThe", width:120, sortable: true},
	{name:'KCB ban đầu',id:'Ma_KCB_BanDau',field: "Ma_KCB_BanDau", width:50, sortable: true},			
	{name:'ICD10',id:'MaICD10',field: "MaICD10", width:50, sortable: true},
	{name:'Vào khám',id:'thoigianvaokham',field: "thoigianvaokham", width:80, sortable: true},
	{name:'Kết thúc',id:'ThoiGianKetThucKham',field: "ThoiGianKetThucKham", width:80, sortable: true},				
	{name:'Thời gian thanh toán',id:'ngaygiolon',field: "ngaygiolon", width:100, sortable: true,formatter: ngaythang},				
	{name:'Bảng kê',id:'ID_ThuTraNo',field: "ID_ThuTraNo", width:60, sortable: true,formatter: bangke},		
	{name:'XML',id:'XML',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML},	
	{name:'4210',id:'4210',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML4210},	
	{name:'xemloi',id:'xemloi',field: "ID_ThuTraNo", width:60, sortable: true,formatter: xemloi},	
	{name:'Chuyển ngày quyết Toán',id:'QuyetToan',field: "ID_ThuTraNo", width:60, sortable: true,formatter: QuyetToan},	
	{name:'Khóa BHYT',id:'ID_NguoiHoanTatA',field: "ID_NguoiHoanTatA", width:60, sortable: true,formatter: khoabhyt},	
	
	{name:'nickname',id:'nickname',field: "nickname", width:60, sortable: true},	
	{name:'TongTienBHYTChiTra',id:'TongTienBHYTChiTra',field: "TongTienBHYTChiTra", width:60, sortable: true},	
	//{name:'Sửa BHYT',id:'ID_ThuTraNo',field: "ID_ThuTraNo", width:60, sortable: true,formatter: Suabhyt},	


	];
	selectActiveRow =  false;
	var selectedRows = [];
	gridBHYT.dataView = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });			 
	window.grid = new Slick.Grid("#grid", gridBHYT.dataView,  window.columns, options);			
	var pager = new Slick.Controls.Pager(dataView, grid, $("#pager"));  

	$('#grid').css({'height': $(window).height()-110+'px'});
	$('#grid').css({'width' : $(window).width()-200+'px'});

	window.grid.onSort.subscribe(function (e, args) {
		var cols = args.sortCols;
		
		gridBHYT.dataView.sort(function (dataRow1, dataRow2) {
			for (var i = 0, l = cols.length; i < l; i++) {
				var field = cols[i].sortCol.field;
				var sign = cols[i].sortAsc ? 1 : -1;
				var value1 = dataRow1[field], value2 = dataRow2[field];
				var result = (value1 == value2 ? 0 : (value1 > value2 ? 1 : -1)) * sign;
				if (result != 0) {
					return result;
				}
			}
			return 0;
		});
		window.grid.invalidate();
		window.grid.render();
	});

	gridBHYT.dataView.onRowCountChanged.subscribe(function (e, args) {
		window.grid.updateRowCount();
		window.grid.invalidateRows(args.rows);
		window.grid.render();					
	});	 
	window.grid.registerPlugin(groupItemMetadataProvider);	
	window.grid.setSelectionModel(new Slick.CellSelectionModel());
	selectActiveRow = true;	
	window.grid.setSelectionModel(new Slick.RowSelectionModel({selectActiveRow: true}));
	gridBHYT.dataView.onRowsChanged.subscribe(function (e, args) {
		window.grid.invalidateRows(args.rows);
		window.grid.render();			
	});	
	window.grid.registerPlugin(new Slick.AutoTooltips({ enableForHeaderCells: true }));	  
	window.grid.render();		 
	$(window.grid.getHeaderRow()).delegate(":input", "change keyup", function (e) {
		var columnId = $(this).data("columnId");
		if (columnId != null) {
			columnFilters[columnId] = $.trim($(this).val());
			dataView.refresh();
		}
	});
	window.grid.onHeaderRowCellRendered.subscribe(function(e, args) {

		if(args.column.id=='ngaygiolon' ||args.column.id=='ngaygionho' ){
			$(args.node).empty();
			$("<input type='text'>")
			.data("columnId", args.column.id)
			.val(columnFilters[args.column.id])
			.appendTo(args.node)			   
			.datetimeEntry({dateFormat:'D/O/Y H:M',spinnerImage:''});

		}else{
			$(args.node).empty();
			$("<input type='text'>")
			.data("columnId", args.column.id)
			.val(columnFilters[args.column.id])
			.appendTo(args.node);
		}


	});		

	window.grid.onDblClick.subscribe(function (e, args){		
		rowdata=dataView.getItem(args.row);     
		window.id_edit=rowdata.id;
		window.idnv=rowdata.id;
	})		

	window.grid.onClick.subscribe(function (e,args) {
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
		window.grid.setSelectedRows(selectedRows);				  
	});
	window.grid.init();
	gridBHYT.dataView.beginUpdate();
	gridBHYT.dataView.setFilter(filter);		
	gridBHYT.dataView.endUpdate();	
}
window.columnFilters = {};
function filter(item) {	
	for (var columnId in columnFilters) {
		if (columnId !== undefined && columnFilters[columnId] !== "") {
			var c = window.grid.getColumns()[window.grid.getColumnIndex(columnId)];	
			
			if(c.field=='ngaygiolon' ||c.field=='ngaygionho' ){		
			//alert(c.field);
			//var parts = $.trim(columnFilters[columnId]).split("/");			
 		    //var date_tam= new Date(parts[1], parts[0] - 1, 1);	
			//var date_tam1= new Date(parts[1], parts[0], 0);		
			//date_tam=Math.round(date_tam.getTime()/1000);
			//date_tam1=Math.round(date_tam1.getTime()/1000);		
			//if (item[c.field] < date_tam || item[c.field]>date_tam1) {				
			// 	return false;				
			//}
		}else{
			if ($.trim(item[c.field]).toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
				return false;
			}
		}
	}
}

return true;		
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

function TienThuVaoFormatter(value) {
	window.TienThuVao=value;
	return value.formatMoney(0, ',', '.');
}
function TienChiRaFormatter(value) {
	$("[id$='GhiChu_summary']").text('Còn lại : '+(TienThuVao-value).formatMoney(0, ',', '.'));
	return value.formatMoney(0, ',', '.');
}
function CheckboxFormatter (row, cell, value, columnDef, dataContext)
{
	if (value)
		return '<input type="checkbox" disabled name="" value="'+ value +'" checked />';
	else
		return '<input type="checkbox" disabled name="" value="' + value + '" />';
}


function bangcap (row, cell, value, columnDef, dataContext)
{
	if(value){
		return '<span title="'+value+'">'+value+'</span>';
	}else{
		return '';	
	}
}


function ngaythang (row, cell, value, columnDef, dataContext)
{
	if(value){
		//alert(value);		
		var date = new Date(value*1000);
		
		var year = date.getFullYear() < 10 ? '0' + date.getFullYear() : date.getFullYear(); 
		var month = date.getMonth()+1 < 10 ? '0' + (date.getMonth()+1) : date.getMonth()+1; 
		var day = date.getDate() < 10 ? '0' + date.getDate() : date.getDate(); 
		var hour = date.getHours() < 10 ? '0' + date.getHours() : date.getHours();  
		var minute = date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes();   
		
		
		return '<span title="'+day+'/'+month+'/'+year+' '+hour+':'+minute+'">'+day+'/'+month+'/'+year+' '+hour+':'+minute+'</span>';
	}else{
		return '';	
	}
}

function bangke (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="mobangke('+value+');" value="Bảng kê" style="height:22px;width:50px;" class="custom_button xanh">';
	
}

function mobangke (row)
{
	$.cookie("in_status", "print_preview");
	if($('#xemtheo_option').val()==0){
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=vienphi&action=bhyt_nt&header=top&lien=2&type=report&id_form=10&idthutrano="+row,'ChitietBHYT');
	}else{
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=vienphi&action=bhyt&header=top&lien=2&type=report&id_form=10&idthutrano="+row,'ChitietBHYT');
	}
	$('#dialog_print').dialog('close');		 	
}


function XML (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="mobangxml('+value+');" value="XML" style="height:22px;width:50px;" class="custom_button xanh">';	
}
function XML4210 (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="mobangxml4210('+value+');" value="4210" style="height:22px;width:50px;" class="custom_button xanh">';	
}
function mobangxml (row)
{ 	
	row=row+'|'+noitru;	
	socket.emit('all', row);	
}
function mobangxml4210 (row)
{ 	
	row=row+'|'+noitru;	
	socket1.emit('all', row);	
}

function xemloi (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="mobangxemloi('+value+');" value="Xem lỗi" style="height:22px;width:50px;" class="custom_button xanh">';	
}

function khoabhyt (row, cell, value, columnDef, dataContext)
{	
	if($.trim(value)==''){
		return '<input type="button" onclick="KhoaBHYT_control('+dataContext.ID_LuotKham+',this);" value="Khóa" style="height:22px;width:57px;" class="custom_button xanh">';	
	}else{
		return '<input type="button" onclick="KhoaBHYT_control('+dataContext.ID_LuotKham+',this);" value="Mở Khóa" style="height:22px;width:57px;" class="custom_button xanh">';	
	}
}
function Suabhyt (row, cell, value, columnDef, dataContext)
{		
	return '<input type="button" onclick="Suabhyt_control('+value+');" value="Sửa" style="height:22px;width:57px;" class="custom_button xanh">';		
}

function Suabhyt_control (row)
{
	$.ajax({
		type: 'POST',
		async : false,
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=control_sua&idthutrano='+row,
		success: function(data, status, xhr) {
			
		},
	});	 		
}
function mobangxemloi (row)
{
	$.ajax({
		type: 'POST',
		async : false,
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xemloi&idthutrano='+row,
		success: function(data, status, xhr) {
			$('#xemloitable').remove();
			$('#xemloi').append(data);
			$('#dialog_xemloi').dialog('open');
		},
	});	 		
}
function KhoaBHYT_control (row,a)
{
	$.ajax({
		type: 'POST',
		async : false,
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=control_khoabhyt&ID_LuotKham='+row+'&loai=1',
		success: function(data, status, xhr) {
			if($(a).val()=='Mở Khóa'){
				$(a).val('Khóa');
			}else{
				$(a).val('Mở Khóa');
			}
		},
	});	 		
}


function create_grid6(){	
	$("#rowed6").jqGrid({
		url:[],
		datatype: "json",	
		colNames:['Mã bệnh nhân',"Họ lót",'Tên','Đối tượng','Ngày'],
		colModel:[
		{name:'mabenhnhan',index:'mabenhnhan', width:"20%", editable:false,align:'center',hidden:false},
		{name:'holot',index:'holot', width:"30%", editable:false,align:'left',hidden:false},
		{name:'tenbenhnhan',index:'tenbenhnhan', width:"20%", editable:false,align:'left',hidden:false},			
		{name:'doituong',index:'doituong', width:"20%", editable:false,align:'right',hidden:false},
		{name:'ngay',index:'ngay', width:"20%", editable:false,align:'right',hidden:false},
		],


		loadonce: true,
		scroll: false,	
		modal:true,	 	
		rowNum: 10000000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		footerrow: true,


		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  

		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {				
		},	

		caption: ""
	});	


	$("#rowed6").setGridWidth($(window).width()-105);
	$("#rowed6").setGridHeight($(window).height()-205);

	$("#rowed6").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search		
}

function doSetTimeout(i) {
	setTimeout(function() {	mobangxml(i); }, 100);
}


function QuyetToan (row, cell, value, columnDef, dataContext)
{	
	return '<input type="button" onclick="chuyenNgayQuyetToan('+dataContext.ID_LuotKham+',this);" value="Chuyển" style="height:22px;width:57px;" class="custom_button xanh">';	
}




</script>