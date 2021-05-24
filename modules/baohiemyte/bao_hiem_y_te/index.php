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
.slick-column-name { 
	white-space: normal;
	word-wrap: break-word;
	text-align:center!important;
}
.slick-header-column.ui-state-default{
	height:70px	 !important;
	text-align:center!important;
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
<script src="../medsmart/js/dojo/dojo/dojo.js" type="text/javascript"></script>
<body>

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
<div id="pager" style="width:120%;height:20px;"></div> 
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
	$("body").keydown(function(e){
		if(jwerty.is("ctrl+shift+e",e)){
			jwerty.key("ctrl+shift+e", false);
			//setSessionPrint ();			
		}				
	})
//setSessionPrint();
var tab_selected=1;//dùng để điều khiển nút "Xem" khi chọn các tab khác nhau
var random_data;
const url='resource.php?module=<?= $modules ?>&view=<?= $view ?>';
var urlcontroller='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&hienmaloi=1';
const urlGetDataSlickGrid="resource.php?module=web_services&action=GetDataSlickGrid&hienmaloi=";	
function saveCallBack(a){
	$("#xem").click();
}
const columnDialogChuyenNgayQuyetToan={
	column:1,
	saveCallBack:saveCallBack,		
	Dialog:{			
	},
	Array:[	
		{type:'date',name:'NgayQuyetToan',validate:'require',label:'Ngày quyết toán'},
		{type:'datetime',name:'NgayRaVien',validate:'require',label:'Ngày Ra Viện'},
		{type:'hidden',name:'oper',defaultValue:'add'},
		{type:'hidden',name:'ID_LuotKham',defaultValue:''},
		{type:'hidden',name:'ID_ThuTraNo',defaultValue:''},
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
	editable:true
};		
columnsBHYT = [				
	{name:'Mã BN',id:'ID_BenhNhan',field: "ID_BenhNhan", width:70, sortable: true, editor: Slick.Editors.Text},		
	{name:'Tên BN',id:'tenbn',field: "tenbn", width:120, sortable: true},
	{name:'Năm sinh',id:'NamSinh',field: "NamSinh", width:60, sortable: true},
	{name:'Giới tính',id:'GioiTinh',field: "GioiTinh", width:60, sortable: true},					
	{name:'Số thẻ',id:'SoThe',field: "SoThe", width:120, sortable: true},
	{name:'KCB ban đầu',id:'Ma_KCB_BanDau',field: "Ma_KCB_BanDau", width:50, sortable: true},			
	{name:'ICD10',id:'MaICD10',field: "MaICD10", width:50, sortable: true},
	{name:'Vào khám',id:'thoigianvaokham',field: "thoigianvaokham", width:80, sortable: true},
	{name:'Kết thúc',id:'ThoiGianKetThucKham',field: "ThoiGianKetThucKham", width:80, sortable: true},				
	{name:'Thời gian thanh toán',id:'ngaygio',field: "ngaygio", width:100, sortable: true,formatter: ngaythang},				
	{name:'Bảng kê',id:'ID_ThuTraNo',field: "ID_ThuTraNo", width:60, sortable: true,formatter: bangke},		
	{name:'XML',id:'XML',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML},	
	{name:'4210',id:'4210',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML4210},		
	{name:'XML1 Tổng Hợp',id:'XML1',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML1},	
	{name:'XML2 Thuốc',id:'XML2',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML2},	
	{name:'XML3 Cận Lâm Sàng',id:'XML3',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML3},	
	{name:'XML4 Chi tiết cận lâm sàng',id:'XML4',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML4},	
	{name:'XML5 Diễn biến bệnh',id:'XML5',field: "ID_ThuTraNo", width:60, sortable: true,formatter: XML5},	
	{name:'Chuyển ngày quyết Toán',id:'NgayQuyetToan',field: "NgayQuyetToan", width:60, sortable: true,formatter: QuyetToan},	
	{name:'NgayRaVien',id:'NgayRaVien',field: "NgayRaVien", width:120, sortable: true,formatter: Slick.Formatters.DateTime},	
	
	{name:'Khóa BHYT',id:'ID_NguoiHoanTatA',field: "ID_NguoiHoanTatA", width:60, sortable: true,formatter: khoabhyt},		
	{name:'nickname',id:'nickname',field: "nickname", width:60, sortable: true},	
	{name:'TongTienBHYTChiTra',id:'TongTienBHYTChiTra',field: "TongTienBHYTChiTra", width:60, sortable: true,formatter: Slick.Formatters.Number},	
	{name:'ID_ThuTraNo',id:'ID_ThuTraNo',field: "ID_ThuTraNo", width:60, sortable: true, editor: Slick.Editors.Text},	
	{name:'ID_LuotKham',id:'ID_LuotKham',field: "ID_LuotKham", width:60, sortable: true, editor: Slick.Editors.Text},	

];
var gridBHYT;
var dialogXML1;
var dialogXML2;
var dialogXML3;
var dialogXML4;
var dialogXML5;
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
	});
	$("#xuat_excel,#Excel19,#Excel20,#Excel21,#Excel1094,#Excel79,#Excel80,#thanhtoan,#xem").button();
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
	$( "#tabs" ).tabs({});
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
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_tonghopnoi&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}else{			
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_tonghopngoai&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}
		}
		if(tab_selected==2)
		{
			if($("#xemtheo_option option:selected").val()==0){			
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_thuocnoi&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}else{
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_thuocngoai&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}
		}
		if(tab_selected==3)
		{
			if($("#xemtheo_option option:selected").val()==0){
				window.open("resource.php?module=report&view=baocao_thongke&action=xuat_excel_bhyt_bangkenoi&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&tu_ngay="+ $( '#tungay' ).val()+"&den_ngay="+$( '#denngay' ).val());
			}else{
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
	var urlreload;	
	data=[convertDate($( '#tungay' ).val()),convertDate($( '#denngay' ).val()+' 23:59' )]
	if($("#xemtheo_option option:selected").val()==1){
		gridBHYT.webservice({store_name:'GD2_baocaongoaitru_bhyt_thongke',data:data});
	}else  if($("#xemtheo_option option:selected").val()==0){	
		gridBHYT.webservice({store_name:'GD2_baocaonoitru_bhyt_thongke',data:data});
	}else  if($("#xemtheo_option option:selected").val()==2){
		gridBHYT.webservice({store_name:'GD2_baocaonoitru_bhyt_thongke_thanhtoan',data:data});
	}else  if($("#xemtheo_option option:selected").val()==3){		
		gridBHYT.webservice({store_name:'GD2_baocaongoaitru_bhyt_thongke_thanhtoan',data:data});
	}
}
function loadDataForGridByOption2(kieuxem){
	if($("#xemtheo_option option:selected").val()==1){
		$("#rowed4").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_thuocbhyt_ngoaitru&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');
	}else{
		$("#rowed4").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghop_thuocnoi&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');
	}
}

function loadDataForGridByOption3(kieuxem){

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
	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {	} } );	
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
	$("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {}});	
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
function XML1 (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="XML1Dialog('+value+');" value="XML1" style="height:22px;width:50px;" class="custom_button xanh">';	
}
function XML2 (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="XML2Dialog('+value+');" value="XML2" style="height:22px;width:50px;" class="custom_button xanh">';	
}
function XML3 (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="XML3Dialog('+value+');" value="XML3" style="height:22px;width:50px;" class="custom_button xanh">';	
}
function XML4 (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="XML4Dialog('+value+');" value="XML4" style="height:22px;width:50px;" class="custom_button xanh">';	
}
function XML5 (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="XML5Dialog('+value+');" value="XML5" style="height:22px;width:50px;" class="custom_button xanh">';	
}
function XML4210 (row, cell, value, columnDef, dataContext)
{
	return '<input type="button" onclick="mobangxml4210('+value+');" value="4210" style="height:22px;width:50px;" class="custom_button xanh">';	
}

function XML1Dialog(row)
{
	if(!dialogXML1){	
		var options = {
			enableCellNavigation: true,
			showHeaderRow: true,
			headerRowHeight: 30,
			explicitInitialization: true,
			forceFitColumns: false,
			multiColumnSort: true,
			fullWidthRows:true,	
			footer:false,	
		};		
		columns = [				
			{name:'STT',id:'id',field: "id", width:30, sortable: true},	
			{name:'MA_LK',id:'MA_BN',field: "MA_BN", width:100, sortable: true},
			{name:'HO_TEN',id:'HO_TEN',field: "HO_TEN", width:200, sortable: true},
			{name:'NGAY_SINH',id:'NGAY_SINH',field: "NGAY_SINH", width:100, sortable: true,formatter: Slick.Formatters.DateTime},
			{name:'GIOI_TINH',id:'GIOI_TINH',field: "GIOI_TINH", width:100, sortable: true},		
			{name:'DIA_CHI',id:'DIA_CHI',field: "DIA_CHI", width:100, sortable: true},	
			{name:'MA_THE',id:'MA_THE',field: "MA_THE", width:100, sortable: true},
			{name:'MA_DKBD',id:'MA_DKBD',field: "MA_DKBD", width:100, sortable: true},
			{name:'GT_THE_TU',id:'GT_THE_TU',field: "GT_THE_TU", width:100, sortable: true,formatter: Slick.Formatters.DateTime},
			{name:'GT_THE_DEN',id:'GT_THE_DEN',field: "GT_THE_DEN", width:100, sortable: true,formatter: Slick.Formatters.DateTime},
			{name:'TEN_BENH',id:'TEN_BENH',field: "TEN_BENH", width:200, sortable: true},
			{name:'MA_BENH',id:'MA_BENH',field: "MA_BENH", width:100, sortable: true},
			{name:'MA_BENHKHAC',id:'MA_BENHKHAC',field: "MA_BENHKHAC", width:100, sortable: true},
			{name:'MA_LYDO_VVIEN',id:'MA_LYDO_VVIEN',field: "MA_LYDO_VVIEN", width:100, sortable: true},
			{name:'NGAY_VAO',id:'NGAY_VAO',field: "NGAY_VAO", width:100, sortable: true,formatter: Slick.Formatters.DateTime},
			{name:'NGAY_RA',id:'NGAY_RA',field: "NGAY_RA", width:100, sortable: true,formatter: Slick.Formatters.DateTime},
			{name:'SO_NGAY_DTRI',id:'SO_NGAY_DTRI',field: "SO_NGAY_DTRI", width:100, sortable: true},
			{name:'TINH_TRANG_RV',id:'TINH_TRANG_RV',field: "TINH_TRANG_RV", width:100, sortable: true},
			{name:'NGAY_TTOAN',id:'NGAY_TTOAN',field: "NGAY_TTOAN", width:100, sortable: true,formatter: Slick.Formatters.DateTime},			
			{name:'MA_LOAI_KCB',id:'MA_LOAI_KCB',field: "MA_LOAI_KCB", width:100, sortable: true},			
			{name:'Ngày Quyết toán',id:'NGAYLAP',field: "NGAYLAP", width:100, sortable: true,formatter: Slick.Formatters.DateTime},
			{name:'CAN_NANG',id:'CAN_NANG',field: "CAN_NANG", width:100, sortable: true},		
		];
		dialogXML1 = new createDialogSlickGrid({},options,columns);
	}	
	dialogXML1.dialog.dialog('open');dialogXML1.grid.webservice({store_name:'GD2_ThongTinLuotKhamBHYT',data:[row]});
	dialogXML1.grid.webservice({store_name:'GD2_ThongTinLuotKhamBHYT',data:[row]});
}
function XML2Dialog(row)
{
	if(!dialogXML2){	
		var options = {
			enableCellNavigation: true,
			showHeaderRow: true,
			headerRowHeight: 30,
			explicitInitialization: true,
			forceFitColumns: false,
			multiColumnSort: true,
			fullWidthRows:true,	
			headerTop:true,	
			frozenColumn: 3,
			footer:false,	
		};		
		columns = [			
			{name:'STT',id:'id',field: "id", width:30, sortable: true},	
			{name:'MA_THUOC',id:'MaSoTheoDMBHYT',field: "MaSoTheoDMBHYT", width:60, sortable: true},
			{name:'MA_NHOM',id:'id_nhombhyt',field: "id_nhombhyt", width:40, sortable: true},		
			{name:'TEN_THUOC',id:'ten',field: "ten", width:200, sortable: true},
			{name:'DON_VI_TINH',id:'TenDonViTinh',field: "TenDonViTinh", width:70, sortable: true},
			{name:'HAM_LUONG',id:'HamLuong',field: "HamLuong", width:150, sortable: true},
			{name:'DUONG_DUNG',id:'MaDD_BHYT',field: "MaDD_BHYT", width:70, sortable: true},
			{name:'LIEU_DUNG',id:'CachDung',field: "CachDung", width:100, sortable: true},
			{name:'MA_BAC_SI',id:'MA_BAC_SI',field: "MA_BAC_SI", width:150, sortable: true},
			{name:'NickName',id:'NickName',field: "NickName", width:150, sortable: true},
			{name:'Nickname_BacSiLamDaiDien',id:'Nickname_BacSiLamDaiDien',field: "Nickname_BacSiLamDaiDien", width:150, sortable: true},
			{name:'SO_DANG_KY',id:'SignNumber',field: "SignNumber", width:100, sortable: true},
			{name:'TT_THAU',id:'TT_THAU',field: "TT_THAU", width:130, sortable: true},
			{name:'TYLE_TT',id:'phantramchitra',field: "phantramchitra", width:70, sortable: true,formatter: Slick.Formatters.Number},
			{name:'SO_LUONG',id:'soluong',field: "soluong", width:70, sortable: true,formatter: Slick.Formatters.Number},
			{name:'DON_GIA',id:'dongia',field: "dongia", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'THANH_TIEN',id:'thanhtien',field: "thanhtien", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'MUC_HUONG',id:'MUC_HUONG',field: "MUC_HUONG", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'T_BNTT',id:'T_BNTT',field: "T_BNTT", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'T_BNCCT',id:'T_BNCCT',field: "T_BNCCT", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'T_BHTT',id:'T_BHTT',field: "T_BHTT", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'MA_KHOA',id:'MA_KHOA',field: "MA_KHOA", width:100, sortable: true},			
			{name:'MA_BENH',id:'MA_BENH',field: "MA_BENH", width:100, sortable: true},
			{name:'NgayKeDon',id:'NgayKeDon',field: "NgayKeDon", width:100, sortable: true,formatter: Slick.Formatters.DateTime},			
		];
		dialogXML2 = new createDialogSlickGrid({},options,columns);
	}	
	dialogXML2.dialog.dialog('open');
	dialogXML2.grid.webservice({store_name:'GD2_BHYT_ngoaithuoc_quyettoan',data:[row]});
}
function XML3Dialog(row)
{
	if(!dialogXML3){	
		var options = {
			enableCellNavigation: true,
			showHeaderRow: true,
			headerRowHeight: 30,
			explicitInitialization: true,
			forceFitColumns: false,
			multiColumnSort: true,
			fullWidthRows:true,	
			frozenColumn: 3,
			footer:false,	
			editable:true,
		};		
		columns = [			
			{name:'STT',id:'id',field: "id", width:30, sortable: true},		
			{name:'MA_DICH_VU/MA_VAT_TU',id:'MaSoTheoDVBHYT',field: "MaSoTheoDVBHYT", width:100, sortable: true},		
			{name:'TEN_DICH_VU',id:'ten',field: "ten", width:250, sortable: true},				
			{name:'MA_NHOM',id:'ID_BHYT',field: "ID_BHYT", width:100, sortable: true},		
			{name:'MA_BAC_SI',id:'MA_BAC_SI',field: "MA_BAC_SI", width:130, sortable: true},
			{name:'NickName',id:'NickName',field: "NickName", width:70, sortable: true},
			{name:'Nickname_BacSiLamDaiDien',id:'Nickname_BacSiLamDaiDien',field: "Nickname_BacSiLamDaiDien", width:70, sortable: true},
			{name:'SO_LUONG',id:'soluong',field: "soluong", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'DON_GIA',id:'dongia',field: "dongia", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'TT_THAU',id:'TT_THAU',field: "TT_THAU", width:100, sortable: true},
			{name:'MUC_HUONG',id:'MUC_HUONG',field: "MUC_HUONG", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'T_BNTT',id:'T_BNTT',field: "T_BNTT", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'T_BNCCT',id:'T_BNCCT',field: "T_BNCCT", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'T_BHTT',id:'T_BHTT',field: "T_BHTT", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'TYLE_TT',id:'TYLE_TT',field: "cungchitra", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'THANH_TIEN',id:'thanhtien',field: "thanhtien", width:100, sortable: true,formatter: Slick.Formatters.Number},
			{name:'T_TRANTT',id:'thanhtien',field: "thanhtien", width:100, sortable: true,formatter: Slick.Formatters.Number},			
			{name:'MA_BENH',id:'MA_BENH',field: "MA_BENH", width:100, sortable: true},
			{name:'NGAY_YL',id:'NgayGio',field: "NgayGio", width:100, sortable: true,formatter: Slick.Formatters.DateTime},
			{name:'id_kham',id:'id_kham',field: "id_kham", width:100, sortable: true, editor: Slick.Editors.Text},			
		];
		dialogXML3 = new createDialogSlickGrid({},options,columns);
	}	
	dialogXML3.dialog.dialog('open');
	dialogXML3.grid.webservice({store_name:'GD2_BHYT_ngoaicls_quyettoan',data:[row]});	
}
function XML4Dialog(row)
{
	if(!dialogXML4){	
		var options = {
			enableCellNavigation: true,
			showHeaderRow: true,
			headerRowHeight: 30,
			explicitInitialization: true,
			forceFitColumns: false,
			multiColumnSort: true,
			fullWidthRows:true,	
			frozenColumn: 3,
			footer:false,	
		};		
		columns = [			
			{name:'STT',id:'id',field: "id", width:30, sortable: true},		
			{name:'MA_DICH_VU',id:'MA_DICH_VU',field: "MA_DICH_VU", width:200, sortable: true},
			{name:'MA_CHI_SO',id:'MA_CHI_SO',field: "MA_CHI_SO", width:100, sortable: true},
			{name:'TEN_CHI_SO',id:'TEN_CHI_SO',field: "TEN_CHI_SO", width:100, sortable: true},
			{name:'GIA_TRI',id:'GIA_TRI',field: "GIA_TRI", width:100, sortable: true},
			{name:'MA_MAY',id:'MA_MAY',field: "MA_MAY", width:100, sortable: true},
			{name:'MO_TA',id:'MO_TA',field: "MO_TA", width:100, sortable: true},
			{name:'KET_LUAN',id:'KET_LUAN',field: "KET_LUAN", width:100, sortable: true},
			{name:'NGAY_KQ',id:'NGAY_KQ',field: "NGAY_KQ", width:100, sortable: true,formatter: Slick.Formatters.DateTime},
		];
		dialogXML4 = new createDialogSlickGrid({},options,columns);
	}	
	dialogXML4.dialog.dialog('open');
	dialogXML4.grid.webservice({store_name:'GD2_BHYT_ChisoCLS_quyettoan',data:[row]});	
}

function XML5Dialog(row)
{
	if(!dialogXML5){	
		var options = {
			enableCellNavigation: true,
			showHeaderRow: true,		
			explicitInitialization: true,
			forceFitColumns: false,
			multiColumnSort: true,
			fullWidthRows:true,		
			footer:false,	
		};		
		columns = [			
			{name:'STT',id:'id',field: "id", width:30, sortable: true},		
			{name:'DIEN_BIEN',id:'DIEN_BIEN',field: "DIEN_BIEN", width:300, sortable: true},
			{name:'HOI_CHAN',id:'HOI_CHAN',field: "HOI_CHAN", width:200, sortable: true},
			{name:'PHAU_THUAT',id:'PHAU_THUAT',field: "PHAU_THUAT", width:200, sortable: true},
			{name:'NGAY_YL',id:'NGAY_YL',field: "NGAY_YL", width:200, sortable: true,formatter: Slick.Formatters.DateTime},
		];
		dialogXML5 = new createDialogSlickGrid({},options,columns);
	}	
	dialogXML5.dialog.dialog('open');
	dialogXML5.grid.webservice({store_name:'GD2_BHYT_ChisoNoiTru_quyettoan',data:[row]});	
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
	return '<input type="button" onclick="xemloiButton('+value+',this);" value="Xem lỗi" style="height:22px;width:57px;" class="custom_button xanh">';	
}

function xemloiButton (ID_ThuTraNo, tam)
{
	alert(ID_ThuTraNo);
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
		serializeRowData: function (postdata) { 	},
		onSelectRow: function(id){	},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {	},
		loadComplete: function(data) {},	
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
	return '<input type="button" onclick="chuyenNgayQuyetToan('+dataContext.ID_LuotKham+','+value+','+dataContext.ID_ThuTraNo+','+dataContext.NgayRaVien+',this);" value="'+timestampDateFormatter(value)+'" title="'+timestampDateFormatter(value)+'" style="height:22px;width:57px;" class="custom_button xanh">';	
}
function chuyenNgayQuyetToan (ID_LuotKham,Time,ID_ThuTraNo,NgayRaVien,Dom)
{		
	dialogChuyenNgayQuyetToan.edit({ID_LuotKham,NgayQuyetToan:Time,ID_ThuTraNo:ID_ThuTraNo,NgayRaVien:NgayRaVien,oper:'editNgayQuyetToan'});
}

function setSessionPrint () {
	var url='resource.php?module=web_services&action=index&function=set_session_print';
	fetchData({},url).then(function(data){
		
	})
}
</script>