<?php
	if($_GET['idluotkham']){
	echo "<script type='text/javascript'>";
	echo "window.idluoikham=".$_GET['idluotkham'].";";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "parent.postMessage('hosobenhnhantrong;' , '*')";
	echo "</script>";
	return;
	}

?>
<style>
input.custom_button_n[type="button"] {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    font-size: 11px;
    height: 17px !important;
    outline: medium none;
    text-decoration: underline;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.6);
    width: 50px !important;
	color:#00F;
	margin-left:-2px!important;
	width: 70px !important
}input.custom_button_n[type="button"]:hover{
	color:red;
	margin-left:-2px!important;
	width: 70px !important
	}
.custom_button_n{
	color:#000!important;
	text-shadow:none!important;
}
</style>
<html>
<body>
	
	<table id="rowed3"></table>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(e) {
	openform_shortcutkey();	
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dm_control_tenform').done(function(data) {
		 window._control_tenform=jQuery.parseJSON(data);
		});
	
	load_select_trangthai();
	load_select_nhanvien();
	load_select_tenform();
	create_grid();
	$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dshangmuckham&idluotkham='+<?=$_GET['idluotkham']?>,datatype:'json'}).trigger('reloadGrid');
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-60);
	$("#n_ghichu").click(function(){
		moghichu(<?=$_GET['mabenhnhan']?>,'<?=$_GET['tenbenhnhan']?>');
	});
	
	$("#trakq").click(function(){
		if($('#trakq').is( ":checked" )){
			$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_ttluotkham_traketqua&ac=true&id_luotkham='+<?=$_GET['idluotkham']?>).done(function(data) {
				$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dshangmuckham&idluotkham='+<?=$_GET['idluotkham']?>,datatype:'json'}).trigger('reloadGrid');
						
			});
			}else{
				$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_ttluotkham_traketqua&ac=false&id_luotkham='+<?=$_GET['idluotkham']?>).done(function(data) {
					$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dshangmuckham&idluotkham='+<?=$_GET['idluotkham']?>,datatype:'json'}).trigger('reloadGrid');
						
				});
				}
	});
	
	
});// end ready
$(window).resize(function() {
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-60);
})

function create_grid()
    {
		mydata=[];
        $("#rowed3").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Hạng mục khám','Người chỉ định','Người thực hiện','Người hoàn tất','Ngày giờ hoàn tất','Trạng thái','Đã in kết quả','Trả kết quả','In kết quả','Ngày hẹn trả KQ','Ngày trả hồ sơ','Người trả KQ','Tên form','ID Loại khám','ID BN','Họ tên BN','TTLK DaTraKQ','XetNghiem'],
            colModel: [
                {name: 'HangMucKham', index: 'HangMucKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'NguoiChiDinh', index: 'NguoiChiDinh', search: false, width: "10%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: nickname}},
				{name: 'NguoiThucHien', index: 'NguoiThucHien', search: false, width: "10%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: nickname}},
				{name: 'NguoiHoanTat', index: 'NguoiHoanTat', search: false, width: "10%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: nickname}},
				{name: 'NgayGioHoanTat', index: 'NgayGioHoanTat', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'TrangThai', index: 'TrangThai', search: false, width: "10%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: trangthai}},
				{name:'DaInKetQua',index:'DaInKetQua', width:"10%", editable:true,stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					var rowData = $("#rowed3").getRowData(rowId);
					if($('#'+rowId+'_DaInKetQua').is( ":checked" )){
						$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_inketqua&ac=true&id_kham='+rowId+'&xetnghiem=0&idluotkham=<?=$_GET['idluotkham']?>').done(function(data) {
						});
					}else{
						$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_inketqua&ac=false&id_kham='+rowId+'&xetnghiem=0&idluotkham=<?=$_GET['idluotkham']?>').done(function(data) {
						});
						}

                 } }]}},
				 {name:'TraKetQua',index:'TraKetQua', width:"10%", editable:true,stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:true,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					if($('#'+rowId+'_TraKetQua').is( ":checked" )){
						$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_traketqua&ac=true&id_kham='+rowId).done(function(data) {						
							$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dshangmuckham&idluotkham='+<?=$_GET['idluotkham']?>,datatype:'json'}).trigger('reloadGrid');

						});
					}else{
						$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_traketqua&ac=false&id_kham='+rowId).done(function(data) {						
							$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dshangmuckham&idluotkham='+<?=$_GET['idluotkham']?>,datatype:'json'}).trigger('reloadGrid');
					
						});
						}

                 } }]}}, 
				//{name: 'TraKetQua', index: 'TraKetQua', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'InKetQua', index: 'InKetQua', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NgayHenTraKQ', index: 'NgayHenTraKQ', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NgayTraHoSo', index: 'NgayTraHoSo', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				//{name: 'NguoiTraKQ', index: 'NguoiTraKQ', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NguoiTraKQ', index: 'NguoiTraKQ', search: false, width: "10%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: nickname}},
				{name: 'TenForm', index: 'TenForm', search: false, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'ID_BenhNhan', index: 'ID_BenhNhan', search: false, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'HoTenBN', index: 'HoTenBN', search: false, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'DaTraKQ', index: 'DaTraKQ', search: false, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'XetNghiem', index: 'XetNghiem', search: false, width: "10%", editable: false, align: 'center', hidden: true},
				
            ],
			loadonce: true,
            scroll: false,
            modal: true,
			rownumbers: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed3',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
           ondblClickRow: function(rowId) {

		
            },
           onSelectRow: function(id) {


            },
            loadComplete: function(data) {
			var tmp1= $("#rowed3").jqGrid('getDataIDs');
			$("#rowed3").jqGrid("setSelection",tmp1[0], true);
			for(var i=0;i<tmp1.length;i++){
				$("#rowed3").jqGrid('editRow', tmp1[i], true);
				var rowData = $("#rowed3").getRowData(tmp1[i]);	
				inketqua = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='In kết quả' onclick=\"n_inketqua('"+tmp1[i]+"','"+rowData['HangMucKham']+"','"+rowData['TenForm']+"','"+rowData['ID_LoaiKham']+"','"+rowData['XetNghiem']+"');\" />"; 
				$("#rowed3").jqGrid('setRowData',tmp1[i],{InKetQua:inketqua});
				}
			var rowData2 = $("#rowed3").getRowData(tmp1[0]);	
				if(rowData2['DaTraKQ']==1){
					$( "#trakq" ).prop( "checked", true );
					}else{
						$( "#trakq" ).prop( "checked", false );
						}
            },
            caption: " Các hạng mục khám của bệnh nhân <?=$_GET['mabenhnhan'].' - '.$_GET['tenbenhnhan']?> <input style='margin-left:140px;' type='checkbox' id='trakq'><label for='trakq'>Trả KQ</label> <a style='margin-left:20px;' href='#' id='n_ghichu'> Ghi chú</a>"
			
        });

$("#rowed3").jqGrid('bindKeys', {});
    }

function load_select_trangthai(){
	window.trangthai = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_TrangThaiCLSCuaBenhNhan&id=ID4Dev&name=TenTrangThaiCLSCuaBenhNhan", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục trạng thái');}}).responseText;	
	
}
function load_select_nhanvien(){
	window.nickname = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_PhongBan<>21&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	
}

function n_inketqua(idkham,loaikham,tenform_in,idloaikham,xetnghiem){

	var rs= window.tenform.split(";");
	window.id_control=0;
	//console.log(ten_form);
	for(var i=0;i< _control_tenform.length;i++){
	
		if(tenform_in==_control_tenform[i]["PageOpen"]){
			//console.log(tenform_in+"=="+_control_tenform[i]["PageOpen"]);
			delete window.id_control;
			window.id_control=_control_tenform[i]["ID_Control"];
			
			//console.log(id_control);
		}
	}
	if(id_control!=0){
		$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control='+ id_control+'&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
		{
		if(data==1){ 
		
			 var rowData = jQuery('#rowed3').getRowData(idkham); 
			 var id_benhnhan = rowData['ID_BenhNhan'];
			 var TenBenhNhan = rowData['HoTenBN'];
			 var id_loailham = rowData['ID_LoaiKham'];
			if(id_loailham==3918){
				parent.postMessage('canlamsang;Framingham;'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");
			}else{
				parent.postMessage('canlamsang;'+tenform_in+';'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");
			}
			$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_inketqua&ac=true&id_kham='+idkham+'&xetnghiem=0&idluotkham=<?=$_GET['idluotkham']?>').done(function(data) {
				$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dshangmuckham&idluotkham='+<?=$_GET['idluotkham']?>,datatype:'json'}).trigger('reloadGrid');
			
			});
		}else{
			tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
			}
		});
	}else{
		tooltip_message("Form này chưa sẵn sàng để gọi");
	}

}
function load_select_tenform(){ 
	window.tenform = $.ajax({url: "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tenform", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục');}}).responseText;
	//alert(window.bophanthuchien);
	
}
function moghichu(id_benhnhan,hoten){
	elem = 1 + Math.floor(Math.random() * 1000000000);
	dialog_main("Ghi chú của bệnh nhân: "+hoten, 95, 70, elem, 'pages.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan);
}
</script>