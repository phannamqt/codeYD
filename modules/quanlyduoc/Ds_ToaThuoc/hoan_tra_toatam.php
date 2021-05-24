<html>
<style>
input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}

.top{
	height:100px;
	padding-bottom:3px;
	
}
.bottom{
	height:363px;
	
}
.t_left{
	float:left;
	height:100%;
	width:54%;
	border:#D4CCB0 solid 1px;
	border-radius: 3px ;
}
.t_right{
	float:left;
	height:100%;
	width:45%;
	border:#D4CCB0 solid 1px;
	border-radius: 3px ;
	margin-left:6px;
}
.t_title,.p_title{
	height:15px;
	width:99.2%;
	border-bottom:1px solid #D4CCB0;
	padding-left:5px;
}
.t_body,.p_body{
	height:84px;
	padding-left:2px;
}
#sophieu,#ngaylapphieu,#nguoilapphieu,#nguoinhapkho,#phieuxuat,#ngayxuat,#ngayketoa{
	width:85px;
}
.n_b_body{
	height:340px;
	width:100%;
}
.b_control{
	height:35px;
	width:99.7%;
	border:1px solid #D4CCB0;
	border-radius:4px;
	margin-top:2px;
}
#sodong,#thanhtienban,#thanhtienvon,#thanhtientralai{
	box-shadow:none!important;	
	padding: 0px!important;
}
#ngaylapphieu{
	text-align:center;
}
.tralai input.editable{
	text-align:right;
}
.editngay input{
	text-align:center;
}

	
</style>
<body>
<?php

$data= new SQLServer;
$store_name="{call GD2_GetThongTinDonThuocByID_PhieuXuat (?)}";
?>
<div id="dialog-loi" title="Thông báo" style="display:none;">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Yêu cầu phải có ít nhất một thuốc trả lại!</p>
</div>
<div id="dialog-confirm" title="Thông báo" style="display:none;">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Khi duyệt phiếu số lượng tồn của thuốc sẽ được cập nhật lại, bạn có chắc muốn duyệt phiếu không?</p>
</div>
<div class="top">
	
    <div class="t_right">
    	<div class="p_title">
        <strong>Thông tin bệnh nhân</strong>
        </div>
        <div class="p_body">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="23" colspan="2"><span class="ht" style="text-transform:uppercase; font-weight:bold;"> </span></td>
              <td colspan="2"><strong></strong></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="60"><label for="phieuxuat">Phiếu xuất:</label></td>
              <td width="140"><input style="text-align:center" type="text" name="phieuxuat" id="phieuxuat" value="" readonly /></td>
              <td width="75">Bác sĩ kê toa:</td>
              <td>&nbsp;BS. </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><label for="ngayxuat">Ngày xuất:</label></td>
              <td>
              <input  style="text-align:center; margin-top:1px" type="text" name="ngayxuat" id="ngayxuat"  value="" readonly /></td>
              <td><label for="ngayketoa">Ngày kê toa:</label></td>
              <td>
              <input style="text-align:center" type="text" name="ngayketoa" id="ngayketoa"  value="" readonly /></td>
              <td>&nbsp;</td>
            </tr>
          </table>
        
        </div>
    </div>
</div>
<div class="bottom">
	<div class="n_b_body">
    <table id="rowed33" ></table>       
    </div>
    <div class="b_control" style="text-align:right">
    <input style="margin-top: 7px;" type="checkbox" id="tratoanbo" name="tratoanbo" checked  /> <label for="tratoanbo"> Trả lại toàn bộ đơn thuốc</label>
    <button style="margin-left:10px;" id="luu">Lưu</button>
    <button id="duyet">Duyệt</button>
    <button id="sua" style="display:none">Sửa</button>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    jQuery(document).ready(function() {	
		create_grid();
		jwerty.key('tab', false);
		jwerty.key('shift+tab', false);			  
		jwerty.key('shift+enter', false);
		$("#luu,#duyet,#sua").button();
		$("#rowed33").setGridWidth($(".n_b_body").width()-2);
		$("#rowed33").setGridHeight($(".n_b_body").height()-90);		
		$('#sua').button( {disabled:true});			
		$("#ngaylapphieu").datepicker({ dateFormat: $.cookie("ngayJqueryUi")}).datepicker("setDate", new Date());
		$("#rowed33").jqGrid('setGridParam',{url:'',datatype:'json'}).trigger('reloadGrid');
		
		
		$( "#dialog-confirm" ).dialog({
		  resizable: false,
		  autoOpen: false,
		  width:330,
		 // height:140,
		  modal: true,
		  buttons: {
			"OK": function() {
			  $( this ).dialog( "close" );
			}
		  }
		});
	
		
	});// end ready
	
function create_grid() {
		
				$("#rowed33").jqGrid({					
					url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tratoatam&id_donthuoc=<?=$_GET['id_donthuoc']?>',
					datatype: "json",
					colNames: ['','Thuốc / vật tư','Số lô','SL thực xuất','SL nhập trả','Đơn giá bán','Thành tiền bán','Số lượng trả lại','Đơn giá vốn','Thành tiền vốn','Đơn giá trả lại','Thành tiền trả lại','Ngày hết hạn','ID đơn thuốc','Lưu','SoLoHeThong','SoLoNhaSanXuat'],
					colModel: [
						{name: 'id_thuoc', index: 'id_thuoc', search: false, width: "20%", editable: false, align: 'left', hidden: true},
						{name: 'ThuocVatTu', index: 'ThuocVatTu', search: false, width: "20%", editable: false, align: 'left', hidden: false},
						{name: 'SoLo', index: 'SoLo', search: false, width: "8%", editable: false, align: 'left', hidden: false},
						{name: 'SoLuongThucXuat', index: 'SoLuongThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: false},
						{name: 'SoLuongNhapTra', index: 'SoLuongNhapTra', search: false, width: "10%", editable: false, align: 'right', hidden: false},
						{name: 'DonGiaBan', index: 'DonGiaBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
						{name: 'ThanhTienBan', index: 'ThanhTienBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
						{name: 'SoLuongTraLai', index: 'SoLuongTraLai', search: false, width: "10%", editable: true, align: 'center', hidden: false,classes:'tralai',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
							var row = $(e.target).closest('tr.jqgrow');
							var rowId = row.attr('id');						
							var soluong=$('#'+rowId+'_SoLuongTraLai').val();
							
						}}]}
		
							},
						{name: 'DonGiaVon', index: 'DonGiaVon', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
						{name: 'ThanhTienVon', index: 'ThanhTienVon', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
						{name: 'DonGiaTraLai', index: 'DonGiaTraLai', search: false, width: "10%", editable: false, align: 'center', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},						
						{name: 'ThanhTienTraLai', index: 'ThanhTienTraLai', search: false, width: "12%", editable: false, align: 'right', hidden: false,classes:'tralai',formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},						
						{name:'NgayHetHan', index:'NgayHetHan', search: false, width: "10%",align: 'center',editable: true, edittype: 'text'},
						{name: 'ID_DonThuoc', index: 'ID_DonThuoc', search: false, width: "10%", editable: false, align: 'left', hidden: true},
						{name: 'Luu', index: 'Luu', search: false, width: "10%", editable: false, align: 'left', hidden: true},
						{name: 'SoLoHeThong', index: 'SoLoHeThong', search: false, width: "10%", editable: false, align: 'left', hidden: true},
						{name: 'SoLoNhaSanXuat', index: 'SoLoNhaSanXuat', search: false, width: "10%", editable: false, align: 'left', hidden: true},
						
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
					footerrow: true,
				   onSelectRow: function(id) {
						
				
		
					},
					loadComplete: function(data) {					
						//for(var i=0;i<tmp1.length;i++){						
						//	$('#rowed33').editRow(tmp1[i], true); 
						//}						
					},
					caption: " Thông tin chi tiết"
					
				});
		$("#rowed33").jqGrid('navGrid', "#prowed3", {add: false, edit: false, keys : false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		
		
    }


</script>
