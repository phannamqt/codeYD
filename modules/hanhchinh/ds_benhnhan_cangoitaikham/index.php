<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
.ui-menu {
	width: 180px;
	display:none;
	position:absolute;
	box-shadow:0px 0px 3px #333;
	z-index:100000;
}
#menu_toggle{
	font-size:12px;
	padding:5px 0px;
	background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll #459E00;
	border:#CCC 1px dashed;
}
#rowed6_frozen tr.rowed6ghead_0 td,
#rowed6_frozen tr.rowed6ghead_1 td{
	font-weight:bold !important;
}
 .dialog_dm_thuoc,.dialog_dm_duongdung{
	position:absolute;
	z-index:1000000;
	display:none;
	box-shadow:0px 0px 6px #333
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
.frozen-div table.ui-jqgrid-htable{
	height:54px;

}
.frozen-div table.ui-jqgrid-htable tr.ui-jqgrid-labels{
	height:31px;
}
div.frozen-div{
	height:54px!important;
}
#rowed6_frozen{
	margin-top:-1px;
}
#tongcong{
	box-shadow:none!important;	
	padding: 0px!important;
	margin-left: 3px;
    margin-top: 4px;
	text-align:right;
	}
</style>
</head>
<body>
 <div id="panel_main1">
		<div id="grid_phong_ban" style="display:inline-block">
			<label for="from_day" style=" margin-left:15px;">Từ ngày:</label><input type="text" style="width:70px;" name="from_day" id='from_day'  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
			<label for="to_day"  style=" margin-left:5px;">Đến ngày:</label><input type="text" style="width:70px" name="to_day" id='to_day' value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
            <input type="radio" name="theo" value="1" id="cohentaikham" checked="checked" /><label for="cohentaikham">Có hẹn tái khám</label>
            <input type="radio" name="theo" value="0" id="ngayhetthuoc" /><label for="ngayhetthuoc">Ngày hết thuốc</label>
                 <a href="#" id="xem" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:15px; margin-top:-4px; ">Xem<span class="ui-icon ui-icon-refresh"></span></a>
                 <a href="#" id="xuat_excel" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:15px; margin-top:-4px; ">Xuất excel<span class="ui-icon ui-icon-circle-arrow-s"></span></a>
		</div>
	</div>
	<div id="grid_phong_ban">
          <table id="rowed6" ></table>
          <div id="prowed6"><input id="tongcong" class="disable" type="text" value="Tổng: 0" readonly disabled style="width:85px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> </div>
    </div>
</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function() {
	openform_shortcutkey();
	var kiemtra=0;
	$("#xem,#xuat_excel").button();
	$("#xem").click(function(){
		if($("#cohentaikham").is(':checked')){
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&theo=1"}).trigger('reloadGrid');
		}else{
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&theo=0"}).trigger('reloadGrid');
		}
	});
	$("#xuat_excel").click(function(){
		if($("#cohentaikham").is(':checked')){
			 window.open("pages.php?module=report&view=<?=$modules?>&action=xuat_excel_ds_benh_nhan_can_goi_tai_kham&type=excel&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&theo=1");
		}else{
			window.open("pages.php?module=report&view=<?=$modules?>&action=xuat_excel_ds_benh_nhan_can_goi_tai_kham&type=excel&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&theo=0");
		}
	});
	create_grid();
	shortcut_key();
$("#from_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
             showButtonPanel: true,
            dateFormat: $.cookie("ngayJqueryUi"),
			//maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {

                $("#to_day").datepicker("option", "minDate", selectedDate);
            },
            onSelect: function(dat, inst) {
            }
        });
        $("#to_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            	showButtonPanel: true,
            	gotoCurrent:true,
            dateFormat: $.cookie("ngayJqueryUi"),
           // minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
                $("#from_day").datepicker("option", "maxDate", selectedDate);
            },
            onSelect: function(dat, inst) {
            }
        });
         $.dateEntry.setDefaults({spinnerImage: ''});
	$("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	resize_control();
	phanquyen();
})	
jQuery(window).resize(function() {
	 resize_control()
});
var rowed6_curentsel;
function create_grid(){
	 $("#rowed6").jqGrid({
		//url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop',
		url:'',
		datatype: "json",
		colNames:['Mã BN','Họ (tên lót)',"Tên","Tuổi","Giới tính", "Điện thoại",'Địa chỉ', "BS hẹn khám","Có hẹn tái khám","Ngày hẹn tái khám",'Ngày hết thuốc','Ngày gọi cuối','Kết quả lần gọi cuối','Người liên lạc cuối',''],
		colModel:[
			{name:'MaBenhNhan',index:'MaBenhNhan', width:"15%", editable:false,align:'left',hidden:false},
			{name:'HolotBN',index:'HolotBN', width:"20%", editable:false,align:'left',hidden:false},
			{name:'TenBN',index:'TenBN', width:"15%", editable:false,align:'left',hidden:false},
			{name:'Tuoi',index:'Tuoi', width:"5%", editable:false,align:'center',hidden:false},
			{name:'GioiTinh',index:'GioiTinh', width:"10%", editable:false,align:'center',hidden:false},
			{name:'DienThoai',index:'DienThoai', width:"15%", editable:false,align:'left',hidden:false},
			{name:'DiaChi',index:'DiaChi', width:"30%", editable:false,align:'left',hidden:false},
			{name:'BSHenKham',index:'BSHenKham', width:"15%", editable:false,align:'center',hidden:false},
			{name:'CoHenTaiKham',index:'CoHenTaiKham', width:"10%", editable:false,align:'center',hidden:false},
			{name:'NgayHenTaiKham',index:'NgayHenTaiKham', width:"15%", editable:false,align:'center',hidden:false},
			{name:'NgayHetThuoc',index:'NgayHetThuoc', width:"10%", editable:false,align:'center',hidden:false},
			{name:'NgayGoiCuoi',index:'NgayGoiCuoi', width:"15%", editable:false,align:'center',hidden:true},
			{name:'KetQuaLanGoiCuoi',index:'KetQuaLanGoiCuoi', width:"20%", editable:false,align:'left',hidden:true},
			{name:'NguoiLienLacCuoi',index:'NguoiLienLacCuoi', width:"15%", editable:false,align:'left',hidden:true},
			{name:'IsDichVuCC',index:'IsDichVuCC', width:"15%", hidden:true},
		],

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed6',	
		rowNum: 100000000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		height:100,
		width: 100,
		viewrecords: false,
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,		
		onSelectRow: function(id){

		},
		onRightClickRow: function(rowid, iRow, iCol, e) {

        },
		ondblClickRow: function (rowId, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
			var tmp1 = $("#rowed6").jqGrid('getDataIDs');
			$("#tongcong").val("Tổng: "+tmp1.length);
			for(var i=0;i < tmp1.length;i++){
				$("#rowed6").setCell(tmp1[i], 'KetQuaLanGoiCuoi', '', {'background-color':'#FF6347'});

				 var rowData = jQuery('#rowed6').getRowData(tmp1[i]);
				 
                    if (rowData["IsDichVuCC"] == 1) {
                        $("#rowed6").setCell(tmp1[i], 'MaBenhNhan', '', {background: 'pink'});
                    }
			}
			
			 

		},
		caption: "Danh sách hẹn khám",

	});
$("#rowed6").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn",  stringResult: true});
 $("#rowed6").jqGrid('navGrid', "#prowed6", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
 $("#rowed6").jqGrid('bindKeys', {});

}
function resize_control(){
	$("#grid_phong_ban").css('width',$(window).width()-22);
	$("#rowed6").setGridWidth($("#grid_phong_ban").width());
	$("#rowed6").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-$("#panel_main1").height()-130);
}

   
</script>