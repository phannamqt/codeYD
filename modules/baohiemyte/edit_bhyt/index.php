<html>

<script type="text/javascript" src="js/node_modules/socket.io-client/dist/socket.io.js"></script>
<body>	

<div id="dialogGiuongBenh" style="display:none"> 
<table>
<tr>
<td>Tên:</td>
<td><input id="inputTenLoaiKhamGiuongBenh" style="width: 400px;" disabled></td>
</tr>
<tr>
<td>Giá bảo hiểm:</td>
<td><input id="inputGiaBaoHiemGiuongBenh" style="width: 400px;"></td>
</tr>

<!-- <tr>
<td>BHYT chi trả:</td>
<td><input id="inputThanhTienBaoHiemGiuongBenh" style="width: 400px;"></td>
</tr> -->
</table>
</div>

<div id="dialogTongNgayBaoHiem" style="display:none">  
Số ngày bảo hiểm:<input id="inputTongNgayBaoHiem">
</div>

<div id="dialogCanLamSang" style="display:none" title="Edit BHYT"> 
	<table>
		<tr>
			<td>Tên loại khám:</td>
			<td><input id="inputTenLoaiKham" style="width: 400px;" disabled></td>
		</tr>
		<tr>
			<td>Giá bảo hiểm:</td>
			<td><input id="inputGiaBaoHiem" style="width: 400px;"></td>
		</tr>
		
		<tr>
			<td>Phần trăm cùng chi trả:</td>
			<td><input id="inputPhanTramCungChiTra" style="width: 400px;"></td>
		</tr>
		
		<tr>
			<td>Tỷ lệ thanh toán:</td>
			<td><input id="inputTyLeThanhToanBHYT" style="width: 400px;"></td>
		</tr>

		<tr>
			<td>BHYT chi trả:</td>
			<td><input id="inputThanhTienBaoHiem" style="width: 400px;"></td>
		</tr> 
		<tr>
			<td>Bệnh nhân cùng chi trả:</td>
			<td><input id="inputThanhTienCungChiTra" style="width: 400px;"></td>
		</tr> 
	</table>
</div>


<div style="display:none" id="DauVaoBaoHiem" >
<textarea id="tarea1" style="min-width: 100%;min-height:90%"></textarea>
</div>


<div id="dialogThuoc" style="display:none">
<table>
<tr>
<td>Tên thuốc:</td>
<td><input id="inputTenGoc" style="width: 400px;"></td>
</tr>

<tr>
<td>Giá cùng chi trả:</td>
<td><input id="inputGiaCungChiTra" style="width: 400px;"></td>
</tr>

</table>

</div>

<fieldset>
    <legend>Xuất dữ liệu</legend> 
	<div style="display:inline-block">
	<label style="font-weight:bold">Từ ngày </label> 
	<input type="text" id="tungay" value="<?php echo date("1/m/Y") ?>" style="text-align:center;width:60px"/>
	<label  style="font-weight:bold"> đến ngày </label> 
	<input type="text" id="denngay" value="<?php echo date("20/m/Y") ?>" style="text-align:center;width:60px"/>
	</div>
	<div id="xemtheo_gio" style="display:inline-block">
	<label style="font-weight:bold">từ giờ</label> 
	<input type="text" id="tugio" value="00:00" style="text-align:center;width:30px"/>
	<label  style="font-weight:bold">đến giờ</label> 
	<input type="text" id="dengio" value="00:00" style="text-align:center;width:30px"/>
	</div>
	<button style="margin-left:1px" id='btn_exceltong'>Xuất theo nhân viên</button>
	<button style="margin-left:1px" id='btn_excel79a'>Xuất 79A</button>
	<button style="margin-left:1px" id='Excel19'>Xuất 19</button>
	<button style="margin-left:1px" id='Excel20'>Xuất 20</button>
	<button style="margin-left:1px" id='Excel21'>Xuất 21</button>
	<button style="margin-left:1px" id='Excel1094'>Xuất 1094</button>
	<button style="margin-left:1px" id='ExcelDungTuyen'>Đ.Tuyến</button>
	<button style="margin-left:1px" id='btn_excel_baocaotheonhombhyt'>Xuất D.Thu theo nhóm</button>
	<button style="margin-left:1px" id='btn_excel_soluongkhamnhombhyt'>Xuất SL BHYT</button>
	
  </fieldset>
<fieldset>
    <legend>Chỉnh sửa BH</legend> 
<label>Mã bệnh nhân:</label><input id="mabenhnhan" value="4025"  style="width: 60px">
<button id="xem">Xem</button>  
<label style="display:none">ID Lượt khám:</label><input id="ID_LuotKham" style="width: 60px;display:none"> 
<button id="TongNgayBaoHiem" style="display:none">TongNgayBaoHiem</button>


<table width="100%">
<tr>
<td><table id="gridLuotKham"></table></td>
<td rowspan="2"><table id="gridDonThuocChiTiet" valign="top"></table></td>
</tr>
<tr>
<td valign="top"><table id="gridCanLamSang"></table></td>

</tr>

</table>
  </fieldset>	
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
	window.socket = io.connect('192.168.1.5:3000');
	create_luotkham('#gridLuotKham');
	create_cls('#gridCanLamSang');	
	create_donthuocchitiet('#gridDonThuocChiTiet');
	mangtam='';
	index='';
	$('#aa').click(function(){
		$( "#DauVaoBaoHiem" ).dialog('open');

	});
	
	$.dateEntry.setDefaults({spinnerImage: ''});
	$('#tugio, #dengio').timeEntry({timeSteps: [1, 1, 1]});	
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
	

	$('#InNgoaiTru').click(function(){
		$.ajax({
			type: 'POST',
			data:{
				ID_LuotKham:$("#ID_LuotKham").val()
			},
			async : true,
			url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=ID_LuotKham',
			success: function(data, status, xhr) {
				$.cookie("in_status", "print_preview");
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=vienphi&action=bhyt&header=top&lien=2&type=report&id_form=10&idthutrano="+$.trim(data),'ChitietBHYT');
				$('#dialog_print').dialog('close');	
			},
		});		
	});
	$( "#DauVaoBaoHiem" ).dialog({
    	resizable: false,
    	height: "auto",
    	autoOpen:false,
    	width: 600,
    	height: 300,
    	modal: true,
    	buttons: {
    		"Lưu": function() {
    			mappedArray = $.trim($('#tarea1').val()).replace(/(?:\r\n|\r|\n)/g, '|').split('|').map(function(currentValue,i){    					
    				currentValue.split('\t').map(function(currentValue,i){    					
    					if(i == 0){
    						index=currentValue;
    					}else{
    						mangtam+='\r\n';
    						mangtam+=index+'\t'+i+'\t'+currentValue;
    					}    					
					})
				})
    			$('#tarea1').val(mangtam);
    			// var regexp = /Tiêu Chí ACC./g;
				// var foo = $.trim($('#tarea1').val());
				// var match, matches = [];
				// mangtam='';
				// while ((match = regexp.exec(foo)) != null) {
				// 	matches.push(match.index);
				// }
				// for(i=0;i<=matches.length;i++){
				// 	tam=$.trim($('#tarea1').val()).substring(matches[i], 209000);
				// 	match2=tam.replace(/(?:\r\n|\r|\n)/g, '|').split('|');
				// 	mangtam+='\r\n';
				// 	mangtam+=match2[0]+'\t'+match2[1];
				// 	tam2='Các Yếu Tố Đo Lường ACC.'+match2[0].replace("Tiêu Chí ACC.", '');

				// 	match3=tam.substring($.trim(tam).indexOf(tam2), 209000).replace(/(?:\r\n|\r|\n)/g, '|').split('|');
				// 	dance:
				// 	for(i=1;i<=20;i++){
				// 		if(!isNaN(parseInt($.trim(match3[i]).charAt(0)))){
				// 			mangtam+='\r\n';
				// 			mangtam+='ME'+$.trim(match3[i]).charAt(0)+'\t'+$.trim(match3[i]).substring(2, 209000);
				// 		}else{
					
				// 		}
				// 	}

				
				// }
				//$('#tarea1').val(mangtam);
			
	    	}
	    }
	});

	$( "#dialogGiuongBenh" ).dialog({            
		autoOpen: false,
		zIndex: 1,		
		modal: true,
		stack: false,
		open: function(event,ui){
			$( "#dialogGiuongBenh" ).dialog( "option", "height", 250 );
            $( "#dialogGiuongBenh" ).dialog( "option", "width", 600 ); 
		},
		close: function(event,ui){},
		buttons: {		
			Save: function() {  
				$.ajax({
					type: 'POST',
					data:{
						 ID_CanLamSang:window.ID_CanLamSang
						,ExtField1:window.ExtField1
						,GiaBaoHiem:$.trim($('#inputGiaBaoHiemGiuongBenh').val())
						,ThanhTienBaoHiem:$.trim($('#inputThanhTienBaoHiemGiuongBenh').val())
					},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=GiuongBenh',
					success: function(data, status, xhr) {
						$("#gridCanLamSang").setGridParam({url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham="+window.ID_LuotKham,datatype: "json"}).trigger("reloadGrid");
					
						//$('#gridCanLamSang').jqGrid('setGridParam', {  }).trigger('reloadGrid');		
					},
				});
				$( this ).dialog( "close" );
			},
			Cancel: function() {
				$( this ).dialog( "close" );				
			}
		}
	});

	$( "#dialogCanLamSang" ).dialog({            
		autoOpen: false,
		zIndex: 1,		
		modal: true,
		stack: false,
		open: function(event,ui){
			$( "#dialogCanLamSang" ).dialog( "option", "height", 300 );
            $( "#dialogCanLamSang" ).dialog( "option", "width", 600 ); 
		},
		close: function(event,ui){},
		buttons: {		
			Save: function() {  
				$.ajax({
					type: 'POST',
					data:{
						 ID_CanLamSang:window.ID_CanLamSang
						,ExtField1:window.ExtField1
						,GiaBaoHiem:$.trim($('#inputGiaBaoHiem').val())
						,ThanhTienBaoHiem:$.trim($('#inputThanhTienBaoHiem').val())
						,PhanTramCungChiTra:$.trim($('#inputPhanTramCungChiTra').val())
						,ThanhTienCungChiTra:$.trim($('#inputThanhTienCungChiTra').val())
						,TyLeThanhToanBHYT:$.trim($('#inputTyLeThanhToanBHYT').val())
					},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=CanLamSang',
					success: function(data, status, xhr) {			
						$("#gridCanLamSang").setGridParam({url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham="+window.ID_LuotKham,datatype: "json"}).trigger("reloadGrid");
		
						//$('#gridLuotKham').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');	
						//$('#gridCanLamSang').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');		
					},
				});
				$( this ).dialog( "close" );
			},
			Cancel: function() {
				$( this ).dialog( "close" );				
			}
		}
	});

	$( "#dialogTongNgayBaoHiem" ).dialog({            
		autoOpen: false,
		zIndex: 1,		
		modal: true,
		stack: false,
		open: function(event,ui){},
		close: function(event,ui){},
		buttons: {
			Save: function() {  				
				$.ajax({
					type: 'POST',
					data:{TongNgayBaoHiem:$('#inputTongNgayBaoHiem').val(),ID_LuotKham:window.ID_LuotKham},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=TongNgayBaoHiem',
					success: function(data, status, xhr) {			
							
					},
				});
				$( this ).dialog( "close" );
			},
			Cancel: function() {
				$( this ).dialog( "close" );				
			}
		}
	});	

	$( "#dialogThuoc" ).dialog({            
		autoOpen: false,
		zIndex: 1,		
		modal: true,
		stack: false,
		open: function(event,ui){
			$( "#dialogThuoc" ).dialog( "option", "height", 250 );
            $( "#dialogThuoc" ).dialog( "option", "width", 600 ); 
		},
		close: function(event,ui){},
		buttons: {
			Save: function() {
				$.ajax({
					type: 'POST',
					data:{GiaCungChiTra:$('#inputGiaCungChiTra').val(),ID_DonThuocCT:window.ID_DonThuocCT},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=Thuoc',
					success: function(data, status, xhr) {			
						//$('#gridLuotKham').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
					},
				});
				$( this ).dialog( "close" );
			},
			Cancel: function() {
				$( this ).dialog( "close" );				
			}
		}
	});	
 


	$('#xem').button().click(function(){
		gridLuotKhamReLoad();
	});
	$('#TongNgayBaoHiem').button().click(function(){
		$( "#dialogTongNgayBaoHiem" ).dialog('open');
	});
	$('#mabenhnhan').bind('keyup', function(e) {		
       	if (jwerty.is('enter', e)) {
			gridLuotKhamReLoad();
        }
   	});
	
	$('#Excel19').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_19_new&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#btn_excel79a').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_79a&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	$('#btn_exceltong').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_chitiet&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	
	$('#btn_excel_baocaotheonhombhyt').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=excel_baocaotheonhombhyt&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
	})
	
	$('#btn_excel_soluongkhamnhombhyt').click(function(){
		window.open("resource.php?module=report&view=baocao_thongke&type=excel&action=excel_soluongkhamnhombhyt&tu_ngay="+ $( "#tungay" ).val()+"&den_ngay="+$( "#denngay" ).val())
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
	});
	$('#ExcelDungTuyen').click(function() {
    window.open(
      "resource.php?module=report&view=baocao_thongke&type=excel&action=bhyt_DungTuyen&loai=1&tu_ngay=" + $(
        "#tungay").val() + "&den_ngay=" + $("#denngay").val())
  })
})
function gridLuotKhamReLoad(){
	$.ajax({
		type: 'POST',
		async : false,
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_luotkham&mabenhnhan='+ $.trim($( '#mabenhnhan' ).val()),
		success: function(data, status, xhr) {			
			$('#gridLuotKham').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
		},
	});
}
function create_luotkham(elem){
	$(elem).jqGrid({
		data:[],
		datatype: "local",
		colNames:[ 'BHYT','Ho ten','Phân loại','Mã thẻ','Mã KCB','Ngày vào','Thanh toán','Tổng ngày','ID lượt khám','Xuất XML','Xuất XML tay','In bảng kê'],
		colModel:[
			{name:'LoaiDoiTuongKham',index:'LoaiDoiTuongKham', editable:false,hidden:true},
			{name:'HoTenBenhNhan',index:'HoTenBenhNhan', editable:false},  
			{name:'TenPhanLoaiKham',index:'TenPhanLoaiKham', editable:false},  
			{name:'SoThe',index:'SoThe', editable:false},
			{name:'Ma_KCB_BanDau',index:'Ma_KCB_BanDau', editable:false,hidden:true},
			{name:'ThoiGianVaoKham',index:'ThoiGianVaoKham'},  
			{name:'DaThanhToanBill',index:'DaThanhToanBill',hidden:true},  
			{name:'NgayBaoHiem',index:'NgayBaoHiem',hidden:true},				
			{name:'ID_LuotKham',index:'ID_LuotKham',hidden:true},
			{name:'XuatXML',index:'XuatXML',hidden:false},
			{name:'XuatXMLTay',index:'XuatXMLTay',hidden:false},
			{name:'BangKe',index:'BangKe',hidden:false},				
		],
		loadonce: false,     
		rowNum:1000,
		height:100,
		width:600,
		rowList:[],  	 	
		viewrecords: true,        
		ignoreCase:true,
		pgbuttons: false, 
		pgtext: null,	
		emptyrecords: null,	
		recordtext: null,		
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
			$('#TongNgayBaoHiem').trigger('click');
		},
		onSelectRow: function(id){       
			window.ID_LuotKham=id;
			$("#gridCanLamSang").setGridParam({url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham="+id,datatype: "json"}).trigger("reloadGrid");
			$.ajax({
				type: 'POST',
				async : true,
				url: "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuoc&ID_LuotKham="+id,
				success: function(data, status, xhr) {			
					$('#gridDonThuocChiTiet').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
				},
			});
		},
            loadComplete: function(data) {
				var tmp1 = $(elem).jqGrid('getDataIDs');
				for(var i=0;i < tmp1.length;i++){
					jQuery(elem).jqGrid('editRow',tmp1[i]);
					var rowData = $(elem).getRowData(tmp1[i]);

					XuatXML = "<input class='custom_button_n' style='height:22px;width:70px; box-shadow:none!important; cursor:pointer;' type='button' value='XML tự động' onclick=\"xuatxml('"+rowData['XuatXML']+"');\" />";
					$(elem).jqGrid('setRowData',tmp1[i],{XuatXML:XuatXML});
					
					XuatXMLTay = "<input class='custom_button_n' style='height:22px;width:70px; box-shadow:none!important; cursor:pointer;' type='button' value='XML tay' onclick=\"xuatxmltay('"+rowData['XuatXML']+"');\" />";
					$(elem).jqGrid('setRowData',tmp1[i],{XuatXMLTay:XuatXMLTay});
					
					BangKe = "<input class='custom_button_n' style='height:22px;width:70px; box-shadow:none!important; cursor:pointer;' type='button' value='In' onclick=\"inbangke('"+rowData['XuatXML']+"');\" />";
					$(elem).jqGrid('setRowData',tmp1[i],{BangKe:BangKe});
				}
					
		},
	});		
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
}
function create_cls(elem) {
	$(elem).jqGrid({
		data:[],
		datatype: "local",
		colNames: ['ID_LoaiKham','ID_Kham','Tên loại khám','Giá BH','Số lần','Phần trăm cùng chi trả','Tỷ lệ thanh toán','BHYT chi trả','BN cùng chi trả','','','',''],
		colModel: [ 
			{name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'ID_Kham', index: 'ID_Kham', search: true, width: "1%", editable: false, align: 'left', hidden: true}, 
			{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false}, 
			{name: 'GiaBaoHiem',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'GiaBaoHiem', search: false, width: "10%", editable: false, align: 'right'},
			{name: 'solan', index: 'solan', search: false, width: "10%", editable: false, align: 'left', hidden: false, align: 'right'},
			{name: 'PhanTramCungChiTra',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhanTramCungChiTra', search: false, width: "10%", editable: false, align: 'right', hidden: false}, 
			{name: 'TyLeThanhToanBHYT',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'TyLeThanhToanBHYT', search: false, width: "10%", editable: false, align: 'right', hidden: false}, 
			{name: 'ThanhTienBaoHiem',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'ThanhTienBaoHiem', search: false, width: "10%", editable: false, align: 'right', hidden: false}, 
			{name: 'ThanhCungChiTra',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'ThanhCungChiTra', search: false, width: "10%", editable: false, align: 'right', hidden: false}, 
			{name: 'TenNhom', index: 'TenNhom', search: false, width: "20%", editable: false, align: 'left', hidden: true},            
			{name: 'ExtField1',index: 'ExtField1',hidden: true},
			{name: 'id',index: 'id',hidden: true},
			{name:'IsBhyt',index:'IsBhyt', width:"5%", editable:true,stype: 'checkbox',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox"
			,editoptions: { defaultvalue:"1",value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {
				var row = $(e.target).closest('tr.jqgrow');
				var tam = row.attr('id');
				ID_CanLamSang=$(elem).jqGrid('getCell', tam, 'id');
				$.ajax({
					type: 'POST',
					data:{ID_CanLamSang:window.ID_CanLamSang},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=bhytCanLamSang',
					success: function(data, status, xhr) {			
						
					},
				});
				} }]}, search: true
			},
		],
		loadonce: true,
		scroll: false,
		modal: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		rowNum: 10000000,
		rowList: [],
		pager: '#prowed3',
		sortname: 'ThoiGianVaoKham',
		height: 300,
		width: 600,
		viewrecords: true,
		ignoreCase: true,
		sortorder: "desc",
		footerrow: true,
		userDataOnFooter: true,
		grouping:true,
		groupingView : {
			groupField : ['TenNhom'],
			groupDataSorted : true ,
			groupCollapse : false,
			groupColumnShow :true,
			groupSummary:false,
			groupText : ['<b>{0} - {1} : T {GiaBaoHiem} | {ThanhTienBaoHiem}</b>']
		},
		onCellSelect: function (rowid,iCol,cellcontent,e) {},
		onSelectRow: function(id) {},
		ondblClickRow: function(id) {
					
			//Nam comment
			var rowData = $(elem).getRowData(id);
			window.ID_CanLamSang=rowData['id'];
			window.ExtField1=rowData['ExtField1'];			
			if(rowData['ExtField1']!='Giuongbenh'){
				$( "#inputTenLoaiKham" ).val(rowData['TenLoaiKham']);
				$( "#inputGiaBaoHiem" ).val(rowData['GiaBaoHiem']);
				$( "#inputThanhTienBaoHiem" ).val(rowData['ThanhTienBaoHiem']);
				$( "#inputPhanTramCungChiTra" ).val(rowData['PhanTramCungChiTra']); 
				$( "#inputTyLeThanhToanBHYT" ).val(rowData['TyLeThanhToanBHYT']); 
				$( "#inputThanhTienCungChiTra" ).val(rowData['ThanhCungChiTra']);
				$( "#dialogCanLamSang" ).dialog('open');
			}else{
				//alert(window.ID_CanLamSang);
				console.log(window.ID_CanLamSang);
				$( "#inputTenLoaiKhamGiuongBenh" ).val(rowData['TenLoaiKham']);
				$( "#inputGiaBaoHiemGiuongBenh" ).val(rowData['GiaBaoHiem']);
				//$( "#inputThanhTienBaoHiemGiuongBenh" ).val(rowData['ThanhTienBaoHiem']);			
				$( "#dialogGiuongBenh" ).dialog('open'); 
			}
		},
		onselect: function(id, rowIndex, columnIndex) {},
		onRightClickRow: function(rowid, iRow, iCol, e) {},
		loadComplete: function(data) {
				window.load_complete3=1;
				var grid = $(elem),
				sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
				sum_hotro = grid.jqGrid('getCol', 'hotro', false, 'sum');
				sum_Cungchitra = grid.jqGrid('getCol', 'Cungchitra', false, 'sum');
				sumGiaThueNgoaiThucHien=grid.jqGrid('getCol', 'GiaThueNgoaiThucHien', false, 'sum');
				tongphaitra_bhyt=grid.jqGrid('getCol', 'tongphaitra', false, 'sum');
				tong_bhyt=grid.jqGrid('getCol', 'bhyt', false, 'sum');				
				window.KhauHaoThuocVTYT_grid=grid.jqGrid('getCol', 'KhauHaoThuocVTYT', false, 'sum');
				window.KhauHaoDichVu_grid=grid.jqGrid('getCol', 'KhauHaoDichVu', false, 'sum');  
				grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
				grid.jqGrid('footerData','set', {ID: 'GiaThueNgoaiThucHien:',bhyt:tong_bhyt, GiaThueNgoaiThucHien: sumGiaThueNgoaiThucHien,tongphaitra:tongphaitra_bhyt,hotro:sum_hotro,Cungchitra:sum_Cungchitra});
				var ids = $(elem).jqGrid('getDataIDs');
				for (i = 0; i < ids.length; i++) {		
					$(elem).jqGrid('editRow', ids[i], true);
				}
		},         
	});
}

function create_donthuocchitiet(elem) {
	$(elem).jqGrid({
		data:[],
		datatype: "local",
		colNames: ['Tên thuốc','ĐVT','SL','Đơn giá','Giá Trả','','','','bhyt','',''],
		colModel: [
			{name: 'TenGoc', index: 'TenGoc', search: true, width: "45%", editable: false, align: 'left', hidden: false},
			{name: 'TenDonViTinh',  index: 'TenDonViTinh', search: false, width: "5%", editable: false, align: 'left', hidden: false},
			{name: 'SoThuocThucXuat',formatter:"integer", index: 'SoThuocThucXuat', search: false, width: "5%", editable: false, align: 'right', hidden: false},
			{name: 'Gia',formatter:"integer", index: 'Gia', search: false, width: "8%", editable: false, align: 'right', hidden: false},				
			{name: 'GiaCungChiTra',formatter:"integer", index: 'GiaCungChiTra', search: false, width: "5%", editable: false, align: 'right', hidden: false},
		
			{name: 'NickName', index: 'NickName',  width: "5%", hidden: true },
			{name: 'ID_DonThuoc', index: 'ID_DonThuoc',  width: "5%",  hidden: true},
			{name: 'NgayKeDon', index: 'NgayKeDon',  width: "5%",  hidden: true},
			//{name: 'IsBhyt', index: 'IsBhyt',  width: "5%", },
			{name:'IsBhyt',index:'IsBhyt', width:"5%", editable:true,stype: 'checkbox',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox"
			,editoptions: { defaultvalue:"1",value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {
				var row = $(e.target).closest('tr.jqgrow');
				var tam = row.attr('id');
					if($('#'+tam+'_IsBhyt').is(":checked"))
					{
						TrangThai=1;
					}else{
						TrangThai=0;
					}
				ID_DonThuocChiTiet=$(elem).jqGrid('getCell', tam, 'ID_DonThuocCT');
				$.ajax({
					type: 'POST',
					data:{ID_DonThuocChiTiet:ID_DonThuocChiTiet,TrangThai:TrangThai},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=bhytThuoc',
					success: function(data, status, xhr) {			
						
					},
				});

				} }]}, search: true
			},	
			{name: 'ID_DonThuocCT', index: 'ID_DonThuocCT',  width: "5%", hidden: true },
			{name: 'HienThi', index: 'HienThi',  width: "5%", hidden: true },

		],
		loadonce: false,
		scroll: false,
		modal: true,
		footerrow: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		rowNum: 10000000,
		rowList: [],
		pager: '#prowed4',
		height: 450,
		width: 600,
		viewrecords: true,
		ignoreCase: true,
		sortorder: "desc",
		onSelectRow: function(id) {},
		onCellSelect: function (rowid,iCol,cellcontent,e) {},
		ondblClickRow: function(id) {
			 
			var rowData = $(elem).getRowData(id);
			window.ID_DonThuocCT=rowData['ID_DonThuocCT'];		
			$( "#inputTenGoc" ).val(rowData['TenGoc']);
			$( "#inputGiaCungChiTra" ).val(rowData['GiaCungChiTra']);			
			$( "#dialogThuoc" ).dialog('open'); 
		},
		onselect: function(rowId, rowIndex, columnIndex) {},
		onRightClickRow: function(rowid, iRow, iCol, e) {},
		grouping:true,
		groupingView : {
			groupField : ['HienThi'],
			groupDataSorted : true ,
			groupCollapse : false,
			groupColumnShow :true,
			groupSummary:false,
			groupText : ['<b>{0}</b>']
		},
		loadComplete: function(data) {
			sum_ThanhTien =  $(elem).jqGrid("getCol", "ThanhTien", false, "sum");
			sum_giavon =  $(elem).jqGrid("getCol", "Cungchitra", false, "sum");
			$(elem).jqGrid("footerData", "set", {Cungchitra:sum_giavon, ThanhTien: sum_ThanhTien});	
			var ids = $(elem).jqGrid('getDataIDs');
			for (i = 0; i < ids.length; i++) {		
				$(elem).jqGrid('editRow', ids[i], true);
			}		
		},
	});
	$('#gview_rowed4 .ui-jqgrid-titlebar').hide();
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
}

function xuatxml (id)
{ 	if(parseInt(id)>0){
		socket.emit('exportxml', id);
		alert("Dữ liệu sẽ được xuất vào folder server 192.168.1.5: .../VAS/4210");
	}else{
		alert("Lượt này chưa thanh toán nên không thể xuất dữ liệu!");
	}
}

function xuatxmltay (id)
{ 	if(parseInt(id)>0){
		socket.emit('exportxmltay', id);
		alert("Dữ liệu sẽ được xuất vào folder server 192.168.1.5: ../VAS/XuatTay");
	}else{
		alert("Lượt này chưa thanh toán nên không thể xuất dữ liệu!");
	}
}

function inbangke (id)
{ 	if(parseInt(id)>0){
		$.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=vienphi&action=bhyt&header=top&lien=2&type=report&id_form=10&idthutrano="+id,'ChitietBHYT');
		$('#dialog_print').dialog('close');	
	}else{
		alert("Lượt này chưa thanh toán nên không thể in!");
	}
}
</script>