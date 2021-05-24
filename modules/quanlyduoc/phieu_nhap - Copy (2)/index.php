<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->

<!DOCTYPE html>
<style type="text/css">

input[id*="SoLuong"],input[id*="DonGia"],input[id*="ThanhTien"] {
	text-align:right;
}

#rowed3 td,#rowed6 td ,#DM_thuoc td  {	 
	word-wrap:normal!important;
	white-space:nowrap;
}
#rowed3 td, #rowed4 td,#rowed6 td ,#DM_thuoc td {
	line-height: 25px!important;
	font-size: 11px!important;
	word-wrap:normal!important;
}
.form_row label {
	text-align: right!important;
}
.ui-menu {
	width: 150px;
	display: none;
	position: absolute;
	box-shadow: 0px 0px 3px #333;
	z-index: 100000;
}
#ID_NCC1, #SoHopDong, #SoDonDatHang {
	width: 140px!important;
}
#ID_Kho1 {
	width: 70px!important;
}
#search_border{
	border:1px dotted #327E04;
	padding:8px 0px;
	margin:6px 0px 0px 0px;	
}
#ID_NCC_combobox{
	margin-top:1px;	
}
.error_null{
	background-color:#FF0;
}
</style>
<body>
<div id="dialog-daduyet" title="Thông Báo" style="display:none">
<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn bỏ duyệt phiếu nhập này không?</p>
</div>
<div id="dialog-suahoadon" title="Sửa hóa đơn" style="display:none">
Số Hóa Đơn<input id="suaSoHoaDon"><br>
Ngày Hóa Đơn<input id="ngaySuaHoaDon"><br>



</div>
<div id="dialog_excel" title="Thông báo" style="display:none">
<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Vui lòng chọn loại xuất Excel</p>
<select id="excel">
<option value="1">Báo cáo đầu phiếu nhập</option>
<option value="2">Báo cáo danh sách phiếu nhập</option>
<option value="3">Báo cáo danh sách phiếu nhập theo ngày duyệt</option>
</select>
</div>
<label style="font-weight:bold">Từ ngày</label> <input id="tu_ngay"  value="<?php echo date("d/m/Y") ?>"><label style="font-weight:bold">đến ngày</label> <input id="den_ngay" value="<?php echo date("d/m/Y") ?>"><button id="timkiem">Tìm kiếm</button>
<div  class="dialog_dm_thuoc">
<table id="DM_thuoc">
</table>

</div>
<table id="rowed3" >
</table>
<div id="prowed3" ></div>
<div style="height:3px;"></div>
<table id="rowed4" >
</table>
<div id="prowed4" ></div>
<div id="dialog_chitiet" style="display:none;">

<div id="container">
<div class="form_row" style="vertical-align:top;width:17%"  >
<div>
<label for="MaPhieu" style="width:90px;  "><?php get_text("sophieu")?></label>
<input id="MaPhieu" tabindex="1" name="MaPhieu" style="width:70px;" type="text" disabled>
</div>
<div style="display:none">
<label for="NgayLapPhieu" style="width:90px; "><?php get_text("ngaylapphieu")?></label>
<input id="NgayLapPhieu" kiemtra="trong" name="NgayLapPhieu"   tabindex="2" style="width:70px;"  alt="date" value="<?php echo date("d/m/Y") ?>"  type="text">
</div>
<div>
<label for="NgayNhapKho" style="width:90px;"><?php get_text("ngaynhapkho")?></label>
<input id="NgayNhapKho" kiemtra="trong"  name="NgayNhapKho" tabindex="3" style="width:70px;" alt="date"  value="<?php echo date("d/m/Y") ?>" type="text">
</div>
<div>
<label for="isBHYT" style="width:90px;display:none;">BHYT</label>
<input id="isBHYT" type="checkbox" name="isBHYT" style="display:none;"> 
</div>

</div>
<div class="form_row" style="vertical-align:top;width:29%"  >
<div>
<label for="ID_Kho" style="width:90px; "><?php get_text("taikho")?></label>
<input id="ID_Kho" kiemtra="trong" tabindex="4" type="text" style="width:180px;" name="ID_Kho">
<input id="ID_Kho1" type="text" style="width:78px;display:none" lang="luu" name="ID_Kho1">
</div>
<div>
<label for="ID_NCC" style="width:90px;"><?php get_text("ncc")?></label>
<input id="ID_NCC" kiemtra="trong"  tabindex="5" lang="new_grid" name="ID_NCC" style="width:180px;" type="text">  
<input id="ID_NCC1" name="ID_NCC1" class="hienthi" style="display:none" type="text">          
</div>
<span>
<input id="ID_NguoiDuyet" style="width:120px;" name="ID_NguoiDuyet" type="hidden">          
<input id="NgayDuyet" style="width:120px;" name="NgayDuyet" type="hidden">
<input id="ID_NhapXuat"  name="ID_NhapXuat" value="<?php echo $_GET['id_loai']; ?>" type="hidden">
</span>
<div>
<span>
<label for="NguoiGiao" style="width:90px;"><?php get_text("nguoigiao")?></label>
<label id="NguoiGiao" class="hienthi"  style="width:208px; text-align:left!important;"></label>
</span>
</div>
<div>
<span>
<label for="ID_NhanVien" style="width:90px;">Nhân viên</label>

<label class="hienthi" style="width:208px!important;  text-align:left!important;" id="nhanvien"></label>   
</span>
</div>
<div>
<label for="SoDonDatHang" style="width:90px;display:none"><?php get_text("dondathang")?></label>
<input id="SoDonDatHang" style="width:70px!important;display:none" name="SoDonDatHang" type="text" >
<label for="SoHopDong" style="width:60px;display:none"><?php get_text("hopdong")?></label>
<input id="SoHopDong" style="width:70px!important;display:none" name="SoHopDong" type="text">
</div>

</div>
<div class="form_row" style="vertical-align:top;width:17%"  >
<div>
<label for="ThanhTien" style="width:70px;"><?php get_text("thanhtien")?></label>
<label id="ThanhTien1" class="hienthi"> </label>
<input id="ThanhTien" style="width:90px;text-align:right" name="ThanhTien" type="hidden" disabled>
</div>
<div>
<label for="PhanTramVat" style="width:70px;  ">%VAT</label>          
<input id="PhanTramVat" tabindex="6" name="PhanTramVat" style="width:89px;text-align:right" type="text" value="0" >
</div>
<div>
<label for="TienVAT" style="width:70px; "><?php get_text("tienvat")?></label>
<label id="TienVAT1" class="hienthi"> </label>
<input id="TienVAT"  style="width:90px;text-align:right" name="TienVAT" type="hidden" disabled>
</div>
<div>
<label for="GiaSauThue" style="width:70px;"><?php get_text("giasauthue")?></label>
<label id="GiaSauThue1" class="hienthi"></label>
<input id="GiaSauThue" name="GiaSauThue" style="width:90px;text-align:right" type="hidden" disabled >
</div>
</div>
<div class="form_row" style="vertical-align:top;width:29%"  >
<div>
<label for="SoHoaDon" style="width:50px;"><?php get_text("sohd")?></label>
<input id="SoHoaDon" tabindex="7" name="SoHoaDon" style="width:80px" type="text"  >
<label for="NgayHoaDon" style="width:50px;"><?php get_text("ngayhd")?></label>
<input id="NgayHoaDon" tabindex="8" alt="date" name="NgayHoaDon" value="<?php echo date("d/m/Y") ?>"  style="width:80px" type="text"  ><br>
<label for="GhiChu" style="width:50px; vertical-align:top; margin-top:30px;"><?php get_text1("ghichu")?></label>
<textarea id="GhiChu" tabindex="9" name="GhiChu" style="height:63px; width:226px;" lang="end" ></textarea>
</div>
</div>
<div class="form_row" style="vertical-align:top;width:4%;line-height:15px!important;"  >
<div>
<a style="margin-left:0px;   margin-bottom:1px;width:30px; vertical-align:top" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="save_data" href="#"><?PHP get_text("luu")?><span class="ui-icon ui-icon-disk"></span></a>
<a style="margin-left:0px;  margin-bottom:1px; width:30px" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="sCal" href="#"><?PHP get_text("dong")?><span class="ui-icon ui-icon-cancel
"></span></a>
</div>

</div>

</div>
<div style="height:3px;"></div>
<table id="rowed6" >
</table>
<div id="prowed6" ></div>
<div class="form_search" style="display:none;">
<div class="form_row" style="vertical-align:top;width:100%"  >
<div>
<label for="tungay" style="width:90px;" ><?php get_text("tungay")?></label>
<input id="tungay"  alt="date" name="tungay" style="width:70px;" value="<?php echo date("d-m-Y") ?>" type="text">
<label for="denngay" style="width:273px;"><?php get_text("denngay")?></label>
<input id="denngay"  alt="date" name="denngay" style="width:70px;" value="<?php echo date("d-m-Y") ?>" type="text">
</div>
<div>
<label for="tuso" style="width:90px;"><?php get_text("tuso")?></label>
<input id="tuso" name="tuso" style="width:70px;" type="text">
<label for="denso" style="width:273px;"><?php get_text("denso")?></label>
<input id="denso" name="denso" style="width:70px;" type="text">
</div>
<div>
<label for="maKH" style="width:90px;"><?php get_text("ma_kh")?></label>
<input id="maKH" lang="maKH_check" name="maKH" style="width:70px;" type="text">
<label class="hienthi" id="maKH1" style="width:350px;"></label>            
</div>
<div>
<label for="maKHO" style="width:90px;"><?php get_text("makho")?></label>
<input id="maKHO" name="maKHO" style="width:70px;" type="text">
<label class="hienthi" id="maKHO1" style="width:350px;"></label>            
</div>
<div>
<label for="maThuoc" style="width:90px;"><?php get_text("mathuoc")?></label>
<input id="maThuoc" lang="maThuoc_check"  name="maThuoc" style="width:70px;" type="text">
<label class="hienthi" id="maThuoc1" style="width:350px;"></label>  
<input id="idThuoc" name="idThuoc" style="width:70px;" type="hidden">          
</div>
<div>
<label for="ghichu" style="width:90px;"><?php get_text1("ghichu")?></label>
<input id="ghichu"  name="ghichu" style="width:429px;" type="text"> 
<input id="ID_NhapXuat"  name="ID_NhapXuat" value="<?php echo $_GET["id_loai"]; ?>" type="hidden">                    
</div>


</div>
</div> 


</div>
</body>
</html><script type="text/javascript">
var tong_thanhtien=0;
var oper;
var id_phieunhap;
jQuery(document).ready(function() {	
	openform_shortcutkey();
	init_main();
	timkiem();
	$.dateEntry.setDefaults({spinnerImage: ''});
	$("#NgayLapPhieu, #NgayNhapKho, #NgayHoaDon,#den_ngay,#tu_ngay,#ngaySuaHoaDon").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
	$("#NgayLapPhieu,#NgayNhapKho,#NgayHoaDon,#den_ngay,#tu_ngay,#ngaySuaHoaDon").datepicker({
		showWeek: true,
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
	$('#PhanTramVat').keyup(function(e){
		thanhtien(1);
	})	
	$( "#dialog_excel" ).dialog({
		resizable: false,
		autoOpen:false,
		height:200,
		modal: true,
		buttons: {
			"OK": function() {
				switch ($('#excel option:selected').val()) {
					case '1':
					window.open('pages.php?module=report&view=<?=$modules?>&action=dauphieunhap_xuat_excel&type=excel&tungay='+$("#tu_ngay").val()+"&denngay="+$("#den_ngay").val()+'&id_loai=<?=$_GET["id_loai"]?>');	
					break;
					case '2':
					window.open('pages.php?module=report&view=<?=$modules?>&action=phieunhap_excel&type=excel&tungay='+$("#tu_ngay").val()+"&denngay="+$("#den_ngay").val());
					break;
					case '3':
					window.open('pages.php?module=report&view=<?=$modules?>&action=dauphieunhapNgayDuyet_xuat_excel&type=excel&tungay='+$("#tu_ngay").val()+"&denngay="+$("#den_ngay").val()+'&id_loai=<?=$_GET["id_loai"]?>');	
					break;
				}
				$( this ).dialog( "close" );
			},
		}
	});
	$( "#dialog-suahoadon" ).dialog({
		resizable: false,
		autoOpen:false,
		height:200,
		modal: true,
		buttons: {
			"OK": function() {			
				var rowData = jQuery('#rowed3').getRowData($('#rowed3').jqGrid('getGridParam', 'selrow'));				
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=1&oper=editngayhoadon&ngaySuaHoaDon='+$('#ngaySuaHoaDon').val()+'&id='+$('#rowed3').jqGrid('getGridParam', 'selrow')+'&suaSoHoaDon='+$('#suaSoHoaDon').val())
				.done(function( data ) {					
						tooltip_message("Lưu thành công, vui lòng thử lại"); 
				});
				$( this ).dialog( "close" );
			},
		},     
		open: function( event, ui ) {		
				var rowData = jQuery('#rowed3').getRowData($('#rowed3').jqGrid('getGridParam', 'selrow'));			
				$('#ngaySuaHoaDon').val(rowData['NgayHoaDon']);
				$('#suaSoHoaDon').val(rowData['SoHoaDon']);

		}
	});
	$( "#dialog-daduyet" ).dialog({
		autoOpen:false,
		resizable: false,
		height:140,
		width:400,
		modal: true,

		buttons: {
			"OK": function() {							
				window.scrollPositiontop  = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();							
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=boduyet&hienmaloi=3&id='+window.ids);
				$( this ).dialog( "close" );							
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
			},
			Cancel: function() {
				window.scrollPositiontop  = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
				$( this ).dialog( "close" );
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
			}
		}
	});
	$('body').bind('keydown', function (e) {	
		$('#rowed6_iladd').removeClass('ui-state-disabled')	 ;
		if (e.keyCode == '45') {
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");     
			if (savedRow && savedRow.length > 0) {	 
			}else{
				$("#prowed6 .ui-icon-plus").click();
				var ids = jQuery("#rowed6").jqGrid('getDataIDs');
			}
		}
	});
	window.thuoc=  $.ajax({                       
		url: "pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=active=1&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
		async:false                       
	}).responseText;
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc').done(function(data) {
		data=data.split('|||');
		create_combobox('#ID_NCC','#ID_NCC1','.NCC','#NCC',create_ncc,'','','','data_DMncc')
		create_combobox('#ID_Kho','#ID_Kho1','.IDKho','#IDKho',create_kho,'','','','data_kho')
		window.grid_datathuoc= jQuery.parseJSON(data[0]);			 
		window.data_thuoc=data[0];
	});
	dialog_chitiet();
	create_phieunhapchitiet();
	$('#DM_thuoc').click(function(){
		$('#DM_thuoc').data('clicked', true);
	});
	var action;
	create_sub_grid();
	$(".dialog_dm_thuoc").dialog({		
		autoOpen:false,
		height:($(window).height() / 100 * parseFloat(85)).toFixed(0),
		width:($(window).width() / 100 * parseFloat(60)).toFixed(0),
		modal:false,
		title:'<?php get_text("timkiem_thuoc_vtyt")?>',
		stack: false,	
		open: function(event, ui){									
			$('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});										 
		},
		close: function(event, ui) {
			$(".overlay_child").fadeOut(300);	
		},
	});	
	$(".dialog_dm_Ncc").dialog({		
		autoOpen:false,
		height:($(window).height() / 100 * parseFloat(85)).toFixed(0),
		width:($(window).width() / 100 * parseFloat(60)).toFixed(0),
		modal:false,
		title:'<?php get_text("tim_ncc")?>',
		stack: false,	
		open: function(event, ui){									
			$('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});										 
		},
		close: function(event, ui) {
			$(".overlay_child").fadeOut(300);	
		},
	});		
	window.ids=0;
	create_grid(); 
	phanquyen();
	$('#timkiem').button();
})
function save_data(action){	
	var isBHYT=0; 
	if($("#isBHYT").is(':checked')==true){
		isBHYT=1;
	}else{
		isBHYT=0;
	}
	var url_tam="";
	savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow"); 
	if (savedRow && savedRow.length > 0) {
		if($('#'+savedRow[0].id+'_TenBietDuoc_combobox').val()!=''){
			$("#rowed6").jqGrid('saveRow',savedRow[0].id);
		}else{
			$('#rowed6').jqGrid('delRowData',savedRow[0].id);
		}
	} 
	var localGridData = $("#rowed6").jqGrid('getGridParam','data');
	var localdataToSend = JSON.stringify(localGridData);	  	
	phancach="";
	i=0;
	dataToSend ='{';
	$('#container').find(':input[type=text],select,textarea,input[type=hidden]').each(function(){	
		if(i>0){
			phancach=",";	
		}
		if(this.id!="GiaSauThue"){		
			dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)  ;			
		}
		i++;
	});	
	dataToSend +=',"isBHYT":'+isBHYT;	
	dataToSend +=',"id_loai":"<?=$_GET["id_loai"]?>"';	
	dataToSend +=',"Id":'+localdataToSend+'}';		
	dataToSend = jQuery.parseJSON(dataToSend);	 
	kiemtratrong=true;
	key1="";
	kiemtratrong1=true;
	for (var key in dataToSend) {		
		if(key!="Id"){		 
			if(key=="NgayLapPhieu"||key=="NgayNhapKho"||key=="ID_NCC"||key=="ID_Kho"){
				if(dataToSend[key]==""){
					kiemtratrong=false;
					key1=key;
					string_tam='không được trống';
					break;
				}			
			}
		}	 else{
			if( ($("#rowed6").getGridParam("reccount")-($($("#rowed6").find('.jqgrid-new-row')).length))<=0){
				kiemtratrong=false;
				key1='Phieunhap'
				string_tam='Phiếu nhập chưa có thuốc';
			}

		}
	}	
	
	if(kiemtratrong){
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=1&oper='+action,dataToSend)
		.done(function( data ) {
			if(data!="1"){
				tooltip_message("Lưu phiếu nhập thành công");
				window.check_sub_form_change=false;
				$('#dialog_chitiet').dialog('close')
			}else{
				tooltip_message("Lưu phiếu nhập không thành công, vui lòng thử lại"); 
			}

		});
	}else{	
		if(key1=='Phieunhap'){
			alert(string_tam);
		}else{
			alert($("#container").find("[for='" + key1 + "']").html()+' '+string_tam);
			$('#'+key1).focus();
		}

	}
}
function create_main(action,callback){
	$(".modal4732478").append($(".hidden_form").html());
	window.hidden_form=$(".hidden_form").html();	 
	$(".hidden_form").html(""); 
	callback(arguments[0]);
}

function create_search(callback){
	$(".modal4732479").append("<div id='search_border'>"+$(".form_search").html()+"</div>");
	window.search_form=$(".form_search").html();	 
	$(".form_search").html(""); 
	callback();
}
function init_search(){	
	jwerty.key('tab', false);
	jwerty.key('shift+tab', false);		  
	$('#search_border input[type=text]').bind("keydown", function(e) {			 
		if (jwerty.is("enter",e)||jwerty.is("tab",e)) {   		
			var inputs = $(this).parents("#search_border").eq(0).find(":input[type=text]");
			var idx = inputs.index(this);			 
			if (idx == inputs.length - 1) {		
			} else {				 
				if(inputs[idx].lang=="maKH_check"){
					MaNCC_check("maKH","maKH1")
				}
				else if(inputs[idx].lang=="maThuoc_check"){
					MaThuocC_check("maThuoc","idThuoc","maThuoc1","ghichu")}
					else{
						inputs[idx + 1].focus(); 
					} 										 
				}			 
				return false;
			}else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#search_border").eq(0).find(":input[type=text]");
				var idx = inputs.index(this);
				if (idx >0) {					 
					inputs[idx -1].focus(); 			 
				} 
			}
		});
}
function init_main(){
	jwerty.key('tab', false);
	jwerty.key('shift+tab', false);			  
	$('#container input[type=text],#container textarea,#container select').bind("keyup", function(e) {		   		 
		if (jwerty.is("enter",e)||jwerty.is("tab",e)) {  
			var tabindex = $(e.target).attr('tabindex');
			if(tabindex==9){		
				savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");   					
				if (savedRow && savedRow.length > 0) {						
					$('#'+savedRow[0].id+'_TenBietDuoc_combobox').focus();
					$('#'+savedRow[0].id+'_TenBietDuoc_combobox').select();
				}else{
					$("#prowed6 .ui-icon-plus").click();
					var ids = jQuery("#rowed6").jqGrid('getDataIDs');	
				}
				return false;
			}else{
				$('#'+$(e.target).attr('id')).datepicker( "hide" );
				var tabindex = $(e.target).attr('tabindex');
				move_tabindex('next',tabindex,e);
			}
		}else if(jwerty.is("shift+tab",e)){
			var tabindex = $(e.target).attr('tabindex');
			move_tabindex('pre',tabindex,e);
		}else if(jwerty.is("shift+enter",e)){	
			e.stopPropagation();
		}
	});
}

var lastsel;
function create_grid(){
	$("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_nhap&oper=phieunhap&id_loai=<?=$_GET["id_loai"]?>',
		datatype: "json",	
		colNames:['Id','<?php get_text("ma")?>','<?php get_text("nglapphieu")?>','<?php get_text("ngaylap")?>','<?php get_text("ngaynhap")?>','<?php get_text("ngduyet")?>','<?php get_text("ngayduyet")?>Ngày duyệt','<?php get_text("ncc")?>','<?php get_text("kho")?>','<?php get_text("loainhap")?>','%VAT','<?php get_text("tienvat")?>','<?php get_text("thanhtien")?>','<?php get_text("dondathang")?>','<?php get_text("hopdong")?>','<?php get_text("sohd")?>','<?php get_text("ngayhd")?>','<?php get_text1("ghichu")?>','','','BHYT'],
		colModel:[
		{name:'ID_NhapKho',index:'ID_NhapKho',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
		{name:'MaPhieu',index:'MaPhieu', width:"3%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text"},
		{name:'ID_NhanVien',index:'ID_NhanVien', width:"5%", editable:true,align:'center',hidden:false},
		{name:'NgayLapPhieu',index:'NgayLapPhieu',width:"4%",sorttype:"date", editable:true,align:'center',hidden:false,edittype:"text",formatter: 'date' ,formatoptions: {newformat: "d/m/Y", srcformat: 'd/m/Y',}, datefmt: "d/m/Y"}, 
		{name:'NgayNhapKho',index:'NgayNhapKho',sorttype:"date", width:"4%", editable:true,align:'center',hidden:false,edittype:"text",formatter: 'date' ,formatoptions: {newformat: "d/m/Y", srcformat: 'd/m/Y',}, datefmt: "d/m/Y"}, 	
		{name: 'ID_NguoiDuyet',accept:false, index: 'ID_NguoiDuyet', width: "5%",editable:true, align: 'center', hidden: false, },
		{name:'NgayDuyet',sorttype:"date",index:'NgayDuyet', width:"5%", editable:true,align:'center',hidden:false,edittype:"text",formatter: 'date' ,formatoptions: {newformat: "d/m/Y", srcformat: 'd/m/Y',}, datefmt: "d/m/Y"}, 		 
		{name:'ID_NCC',index:'ID_NCC', width:"10%", editable:true,align:'center'}, 
		{name:'ID_Kho',index:'ID_Kho', width:"15%", editable:true,align:'center'}, 
		{name:'ID_NhapXuat',index:'ID_NhapXuat', width:"5%", editable:true,align:'center',edittype:"text"}, 
		{name:'PhanTramVat',index:'PhanTramVat', width:"5%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ",", decimalPlaces: 2,  defaultValue: '0'}},
		{name:'TienVAT',index:'TienVAT', width:"5%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 2, prefix: "", defaultValue: '0'}},
		{name:'ThanhTien',index:'ThanhTien', width:"10%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 5, prefix: "", defaultValue: '0'}},
		{name:'SoHopDong',index:'SoHopDong', width:"5%", editable:true,align:'center',edittype:"text",hidden:false},
		{name:'SoDonDatHang',index:'SoDonDatHang', width:"5%", editable:true,align:'center',edittype:"text",hidden:false},
		{name:'SoHoaDon',index:'SoHoaDon', width:"5%", editable:true,align:'center',edittype:"text",hidden:false},
		{name:'NgayHoaDon',index:'NgayHoaDon', width:"5%", editable:true,align:'center',edittype:"text",hidden:false,formatter: 'date' ,formatoptions: {newformat: "d/m/Y", srcformat: 'd/m/Y',}, datefmt: "d/m/Y"},
		{name:'GhiChu',index:'GhiChu', width:"15%", editable:true,align:'left',edittype:"text",hidden:false}, 			 
		{name:'nhacc',index:'nhacc', width:"15%", editable:true,align:'left',edittype:"text",hidden:true}, 
		{name:'kho',index:'kho', width:"15%", editable:true,align:'left',edittype:"text",hidden:true}, 			 	 	 
		{name:'Is_BHYT',index:'Is_BHYT', search: true, stype: 'select', searchoptions: {sopt: ['eq'], value: ":Tất cả;1:BHYT;0:VP"}, formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"}, width:"3%", editable:true,align:'left',hidden:true}, 			 	 	 
		],
		multiselect :false,
		loadonce: true,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,		 
		rowList: [],
		pgbuttons: false,
		pgtext: null,
		pager: '#prowed3',
		sortname: 'NgayLapPhieu',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	

		},
		onSelectRow: function(id) {
			window.ids=id;		
			id_phieunhap=id;
			jQuery("#rowed4").jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_nhap&oper=phieunhap_sub&ids='+id,datatype:'json'}).trigger("reloadGrid");

			if( $("#rowed3").jqGrid('getCell', id, 'ID_NguoiDuyet')==0){
				$("#edit_rowed3").removeClass('ui-state-disabled');
				$("#confirm_rowed3").removeClass('ui-state-disabled');
				$("#del_rowed3").removeClass('ui-state-disabled');

			}else{
				$("#edit_rowed3").addClass('ui-state-disabled');
				$("#confirm_rowed3").addClass('ui-state-disabled');
				$("#del_rowed3").addClass('ui-state-disabled');
			}			  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#prowed3 .ui-icon-pencil").trigger('click'); 
		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed3") ;
			ids=$('#rowed3').jqGrid('getDataIDs');

			if(oper=='edit'){
				$("#rowed3").jqGrid("setSelection",id_edit, true);
				$('#id_edit').focus();
				oper='add'
			}else{		
				if(ids.length>0){						
					$('#rowed3').jqGrid("setSelection",ids[0], true);
				}
			}
			for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed3').getRowData(ids[i]);	 
			}		 
		},	  
		caption: "<?php get_text("phieunhap")?>"
	});	
$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false,del:true,edit:false,search:false},
	{},
	{},
	{reloadAfterSubmit: true, url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=del'}	
	);

$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("them")?>", buttonicon: 'ui-icon-document',
	onClickButton: function() {		
		oper='add'
		$( "#dialog_chitiet" ).dialog('open')           
	},
	title: "<?php get_text("them")?>",
	position: "last"
});
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("sua")?>", buttonicon: 'ui-icon-pencil',id : 'edit_rowed3',
	onClickButton: function() {
		if(window.ids>0){				 
			oper='edit'
			$( "#dialog_chitiet" ).dialog('open')      
		}else{
			tooltip_message("<?php get_text("chonphieu")?>")
		}
	},
	title: "<?php get_text("sua")?>",
	position: "last"
});
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("duyet")?>", buttonicon: 'ui-icon-person', id : 'confirm_rowed3',
	onClickButton: function() {
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=confirm&hienmaloi=1&id='+window.ids+'&id_loainhapxuat=<?php echo $_GET['id_loai']; ?>')
		.done(function( data ) {		
			window.oper='edit';
			window.id_edit=$("#rowed3").jqGrid('getGridParam', 'selrow');				
			$('#rowed3').setGridParam({datatype:"json" }).trigger("reloadGrid");
		});
	},
	title: "<?php get_text("duyet")?>",
	position: "last"
});	
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Duyệt BHYT", buttonicon: 'ui-icon-person', id : 'confirm_bhyt_rowed3',
	onClickButton: function() {
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=confirm_bhyt&hienmaloi=1&id='+window.ids+'&id_loainhapxuat=<?php echo $_GET['id_loai']; ?>')
		.done(function( data ) {		
			window.oper='edit';
			window.id_edit=$("#rowed3").jqGrid('getGridParam', 'selrow');				
			$('#rowed3').setGridParam({datatype:"json" }).trigger("reloadGrid");
		});
	},
	title: "Duyệt BHYT",
	position: "last"
});	
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("timkiem")?>", buttonicon: 'ui-icon-search', id : 'search_rowed3',
	onClickButton: function() {			 
		if ($(".modal4732479").dialog( "isOpen" )===true){					 					
			$(".modal4732479").dialog( "close" );
			$(".modal4732479").remove();					
			dialog_search_callback("<?php get_text("timkiem")?>", "580px", "270px", "4732479", "",".form_search");
			create_search(init_search);  
			return false;					
		}else{
			dialog_search_callback("<?php get_text("timkiem")?>", "580px", "270px", "4732479", "",".form_search");
			create_search(init_search);  
			return false;	
		}
	},
	title: "<?php get_text("timkiem")?>",
	position: "last"
});
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("in")?>", buttonicon: 'ui-icon-print',id:'printer',
	onClickButton: function() {				 
		$('#rowed4').setGridParam({loadonce: true});	
		$('#prowed4 .ui-icon-refresh ').click();	
		set_Timeout(printer,200,"print");  				 
	},
	title: "<?php get_text("in")?>",
	position: "last"
}); 
/*$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("xem")?>", buttonicon: 'ui-icon-document',id:'printer_preview',
	onClickButton: function() {	
		$( "#dialog_excel" ).dialog('open');  
	},
	title: "<?php get_text("xem")?>",
	position: "last"
});	 */
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Excel 2", buttonicon: 'ui-icon-document',id:'printer_preview_2',
	onClickButton: function() {			
		window.open('pages.php?module=report&view=<?=$modules?>&action=xuat_excel_BienBanKiemNhap&type=excel&id='+ids); 
	},
	title: "<?php get_text("xem")?>",
	position: "last"
});	
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Mở khóa", buttonicon: 'ui-icon-document',id:'bt_boduyet',
	onClickButton: function() {			
		$( "#dialog-daduyet" ).dialog('open');
	},
	title: "<?php get_text("xem")?>",
	position: "last"
});	
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Sửa hóa đơn", buttonicon: 'ui-icon-document',id:'bt_suahoadon',
	onClickButton: function() {					
		$( "#dialog-suahoadon" ).dialog('open');
	},
	title: "<?php get_text("xem")?>",
	position: "last"
});	

$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Excel Nhập(Mẫu2)", buttonicon: 'ui-icon-document',id:'bt_excel_mau2',
	onClickButton: function() {					
			

			 window.open("pages.php?module=report&view=vienphi&action=duoc_mau2_nhap&type=excel&tungay="+$("#tu_ngay").val()+"&denngay="+$("#den_ngay").val());	
	},
	title: "Excel Nhập(Mẫu2)",
	position: "last"
});	
get_printer("#prowed3 #printer,#prowed3 #printer_preview",set_printer,'<?php echo $_SERVER['REMOTE_ADDR'] ?>','<?php if(isset($_COOKIE['username_window']))  echo $_COOKIE['username_window'] ?>','Phieu_nhap_mua_hang');	

$("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
$("#rowed3").setGridWidth($(window).width()-10);
$("#rowed3").setGridHeight($(window).height()/100*30);
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

function printer(mode){	

	if($('#rowed3').jqGrid('getGridParam', 'selrow')>0){  
		var localGridData = $("#rowed4").jqGrid('getGridParam','data');
		var localdataToSend = JSON.stringify(localGridData);
		var rowData = jQuery('#rowed3').getRowData(window.ids);
		var col_name = $('#rowed3').jqGrid('getGridParam', 'colModel');	
		phancach="";
		i=0;
		dataToSend ='{';			 
		for(i=0;i<col_name.length;i++){	
			if(i>0){
				phancach=",";	
			}		
			if(col_name[i]["name"]=="ID_Kho"){	
				kho1 = window.kho.split(";");
				for (ii = 0; ii <= kho1.length - 1; ii++) {						 
					temp = kho1[ii].split(":");											
					if(temp[0]==rowData[col_name[i]["name"]]){
						rowData[col_name[i]["name"]]=temp[1];						 
						break;
					}					 
				}					 
			}
			if(col_name[i]["name"]=="ID_NhapXuat"){	
				loainhapxuat1 = window.loainhapxuat.split(";");
				for (ii = 0; ii <= loainhapxuat1.length - 1; ii++) {						 
					temp = loainhapxuat1[ii].split(":");											
					if(temp[0]==rowData[col_name[i]["name"]]){
						rowData[col_name[i]["name"]]=temp[1];						 
						break;
					}					 
				}					 
			}
			dataToSend += phancach + '"'+col_name[i]["name"] + '":"' + rowData[col_name[i]["name"]] +'"';		 	
		}
		dataToSend +=',"Id":'+localdataToSend+'}';
		dataToSend = jQuery.parseJSON(dataToSend);	 
		$.post('pages.php?module=report&view=<?=$modules?>&action=phieu_nhap_mua_hang&id_form=31&type='+mode,dataToSend)
		.done(function( data ) {				
			if(mode=="view"){
				create_print_popup(data,800,600,0,0);				 
			}else{
				create_print_dialog();
				create_print_popup(data,1,1,0,0);				  
			}
		});  
	}else{ 
		tooltip_message("<?php get_text("chondong")?>");
	}	
}
var kiemtra = false; 
window.nickname = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
	if (!result)
		alert('Không load được tên');
}}).responseText;
window.nhacungcap = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_NhaCungCap&id=ID_NCC&name=TenNCC', async: false, success: function(data, result) {
	if (!result)
		alert('Không load được nhà cung cấp');
}}).responseText;
window.kho = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_Kho&id=ID_Kho&name=TenKho', async: false, success: function(data, result) {
	if (!result)
		alert('Không load được kho');
}}).responseText;
window.loainhapxuat = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=GD2_DM_Nhapxuat&id=ID_NhapXuat&name=Ma_NhapXuat', async: false, success: function(data, result) {
	if (!result)
		alert('Không load được tên');
}}).responseText;
function calculate(rowId){
	_DonGia=$("#"+rowId+"_DonGia").val();
	_ThanhTien=$("#"+rowId+"_ThanhTien").val();
	_SoLuong=$("#"+rowId+"_SoLuong").val();
	$("#"+rowId+"_DonGia").bind("keyup",function(e) {
		console.log(e.keyCode);
		 if (((e.keyCode >= 48)&&(e.keyCode <= 57))||(e.keyCode==8)||(e.keyCode==46)||((e.keyCode >= 96)&&(e.keyCode <= 105)) ||(e.keyCode == 110)||(e.keyCode == 188)||(e.keyCode == 190)) {	// chấp nhận từ 0-9, backspace và delete		 
		 	$("#"+rowId+"_ThanhTien").val(($("#"+rowId+"_SoLuong").val()*$("#"+rowId+"_DonGia").val()).toFixed(0));
		 	_DonGia=$("#"+rowId+"_DonGia").val();			   
		 }else if(e.keyCode !=13) {//Trừ enter và các key code điều kiện trên thì undo
		 	$("#"+rowId+"_DonGia").val(_DonGia);			 
		 }
		})
	$("#"+rowId+"_ThanhTien").bind("keyup",function(e) {
		if (((e.keyCode >= 48)&&(e.keyCode <= 57))||(e.keyCode==8)||(e.keyCode==46)||((e.keyCode >= 96)&&(e.keyCode <= 105))||(e.keyCode == 110)||(e.keyCode == 188)||(e.keyCode == 190)) {
			$("#"+rowId+"_DonGia").val(($("#"+rowId+"_ThanhTien").val()/$("#"+rowId+"_SoLuong").val()).toFixed(0));			 
			_ThanhTien=$("#"+rowId+"_ThanhTien").val();
		}else if(e.keyCode !=13) {
			$("#"+rowId+"_ThanhTien").val(_ThanhTien);			  
		}
	})
	$("#"+rowId+"_SoLuong").bind("keyup",function(e) {
		if (((e.keyCode >= 48)&&(e.keyCode <= 57))||(e.keyCode==8)||(e.keyCode==46)||((e.keyCode >= 96)&&(e.keyCode <= 105))) {
			$("#"+rowId+"_DonGia").val(($("#"+rowId+"_ThanhTien").val()/$("#"+rowId+"_SoLuong").val()).toFixed(0));				 
			_SoLuong=$("#"+rowId+"_SoLuong").val();
		}else if(e.keyCode !=13) {
			$("#"+rowId+"_SoLuong").val(_SoLuong);			  
		}
	})
}
function check_product_available(mathuoc,tenthuoc,id_thuoc,tendonvitinh){	
	kiemtra=false;	
	id_rowed5=$('#rowed5').jqGrid('getDataIDs');			
	for(i=0;i<id_rowed5.length;i++){		
		var rowData = jQuery('#rowed5').getRowData(id_rowed5[i]);	 			 
		if(rowData['MaThuoc']==mathuoc){
			tooltip_message(tenthuoc+" đã có trên phiếu nhập này");
			kiemtra=true;
			$("#"+id_dong+"_TenBietDuoc").val("");
			$("#"+id_dong+"_TenDonViTinh").val("");
			break;
		}			   
	}	 
	if(kiemtra==false){
		$("#"+id_dong+"_MaThuoc").val(mathuoc);
		$("#rowed5").jqGrid("setCell", id_dong, 'ID_Thuoc', id_thuoc); 
		$("#rowed5").jqGrid("setCell", id_dong, 'TenDonViTinh', tendonvitinh); 
		$("#rowed5").jqGrid("setCell", id_dong, 'TenBietDuoc', tenthuoc); 				
		if ($(".dialog_dm_thuoc").dialog( "isOpen" )===true){
			$(".dialog_dm_thuoc").dialog( "close" )
		}	
		$("#"+id_dong+"_SoLoNhaSanXuat").focus();	
	}	
}

function sum_total_noVAT(value){
	tongcong=0;		
	if(value==true){
		id_rowed5=$('#rowed6').jqGrid('getDataIDs');	
		for(i=0;i<id_rowed5.length;i++){		
			var rowData = $('#rowed6').getRowData(id_rowed5[i]);	 			 
			tongcong+=parseFloat(rowData['ThanhTien']);			   
		}
	}else{
		tongcong=$('#ThanhTien').val();
	}
	vat=tongcong/100*$('#PhanTramVat').val();	 
	$('#TienVAT').val(vat);
	$('#GiaSauThue').val(parseFloat(tongcong)+parseFloat(vat));			 
	$('#ThanhTien').val(tongcong);	 
	$('#ThanhTien1').html(parseFloat(tongcong).formatMoney(0, ',', '.'));	
	$('#TienVAT1').html(parseFloat(vat).formatMoney(0, ',', '.'));	
	$('#GiaSauThue1').html((parseFloat(tongcong)+parseFloat(vat)).formatMoney(0, ',', '.'));	 	
}
function check_sub_form_change_func(rowId,rowed){ 
	$(rowed).find("td input.editable").each(function(){	
		$("#"+$(this).attr("id")).bind("keyup",function(e){			   
			if (e.keyCode!=13){				 
				window.check_sub_form_change=true; 				
			};		 
		}) 	 		  
	})

}
function check_main_form_change_func(rowId,rowed){ 
	$('#container').find(':input[type=text],select,textarea,input[type=hidden]').each(function(){	
		$("#"+$(this).attr("id")).bind("keyup",function(e){			   
			if (e.keyCode!=13){				 
				window.check_sub_form_change=true; 				
			};		 
		}) 	 		  
	})
	
}

function dialog_search_callback(title, width, height, elem, links,form) {     
	if(links!=""){
		$("body").append("<div class='ui-jqdialog modal" + elem + "'><div class='loading'><div id='loading'></div></div><iframe id='frame1' class='frame_" + elem + "' src=''></iframe></div>");
	}else{
		$("body").append("<div class='ui-jqdialog modal" + elem + "'> </div>");
	}

	if (String(width).match(/px/g)==null){
		width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		height=String(height).replace("px","")
	};   
	$(".modal" + elem).dialog({
		height: height,
		width: width,
		modal: false,
		title: title,
		draggable: true,
		resizable: false,
		stack: false,
		buttons: {
			'Tìm kiếm': function() {	
				$('#rowed3').setGridParam({postData: null}); //reset post data	
				var url_tam="";				
				phancach="";
				i=0;
				dataToSend ='{';
				$('.modal4732479').find(':input[type=text],select,textarea,input[type=hidden]').each(function(){	
					if(i>0){
						phancach=",";	
					}
					if(this.value!=""){	
						if(this.alt=="date"){
							ngay_tam=(this.value).split("-");
							dataToSend += phancach + '"'+this.name + '":"' + ngay_tam[2] + "-" + ngay_tam[1] + "-"+ngay_tam[0]+'"';
						}else{
							dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
						}
					}
					i++;
				})
				dataToSend +=',"id_loai":"<?=$_GET["id_loai"]?>"';	
				dataToSend +='}';		
				dataToSend = jQuery.parseJSON(dataToSend);
				$('#rowed3').setGridParam({postData: dataToSend,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_nhap&oper=phieunhap'}).trigger('reloadGrid');
				$(form).html(window.search_form);	
				$(this).dialog('close'); 				 
				$(this).remove();				       
			},	            
		},
		beforeClose: function( event, ui ) {
		},
		close: function(event, ui) {		 
			$(form).html(window.search_form);
			$(this).dialog( "close" );
			$(this).remove();			
		},
		hide: {
			effect: "fadeOut",
			duration: 1000,
		},
		open: function(event, ui) {	
		},
		

	});	
}

function dialog_main_callback(title, width, height, elem, links,form) {     
	if(links!=""){
		$("body").append("<div class='ui-jqdialog modal" + elem + "'><div class='loading'><div id='loading'></div></div><iframe id='frame1' class='frame_" + elem + "' src=''></iframe></div>");
	}else{
		$("body").append("<div class='ui-jqdialog modal" + elem + "'> </div>");
	}
	if (String(width).match(/px/g)==null){
		width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		height=String(height).replace("px","")
	};
	$(".modal" + elem).dialog({
		height: height,
		width: width,
		modal: true,
		title: title,
		draggable: false,
		resizable: false,
		stack: false,
		beforeClose: function( event, ui ) {
			if(window.check_sub_form_change==true){							
				if ($(".ui-jqdialog_button").dialog( "isOpen" )===true){					 					
					$(".ui-jqdialog_button").dialog( "close" );
					$(".ui-jqdialog_button").remove();	 	  
					dialog_button("<?php get_text("canhbao")?>","<?php get_text("chitiet_canhbao")?>",30,23);
					return false;					
				}else{
					dialog_button("<?php get_text("canhbao")?>","<?php get_text("chitiet_canhbao")?>",30,23);
					return false;	
				}
			}
		},
		close: function(event, ui) {		 
			$(form).html(window.hidden_form);
			$(this).dialog( "close" );
			$(this).remove();			
		},
		hide: {
			effect: "fadeOut",
			duration: 1000,
		},
		open: function(event, ui) {			 

		},
	});
}
function dialog_button1(title,message, width, height,id) {
	$("body").append("<div class='ui-jqdialog_button'><span>"+message+"</span></div>");
	if (String(width).match(/px/g)==null){
		width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		height=String(height).replace("px","")
	};
	$(".ui-jqdialog_button").dialog({
		width : width,
		height: height,
		modal: false,
		title: title,
		buttons: {
			'Thoát': function() {			
				$(this).dialog('close'); 				 
				$(this).remove();
				$(".modal4732478").dialog( "close" );			
				$(".modal4732478").remove();           
			},			         
		},
		close: function(event, ui) {
			$(this).dialog('close');            
			$(this).remove();	
			$("#"+id).focus();		
		}
	});
}

function dialog_button(title,message, width, height) {
	$("body").append("<div class='ui-jqdialog_button'><span>"+message+"</span></div>");
	if (String(width).match(/px/g)==null){
		width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		height=String(height).replace("px","")
	};
	$(".ui-jqdialog_button").dialog({
		width : width,
		height: height,
		modal: false,
		title: title,
		buttons: {
			'Thoát': function() {
				window.check_sub_form_change=false;
				$(this).dialog('close'); 				 
				$(this).remove();
				$(".modal4732478").dialog( "close" );			
				$(".modal4732478").remove();           
			},			
			'Lưu': function() {		
				$("#save_data").click(); 
				$(this).dialog('close'); 				 
				$(this).remove();			
			}
		},
		close: function(event, ui) {
			$(this).dialog('close');            
			$(this).remove();			
		}
	});
}
function create_Dm_thuoc_grid(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
	$(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên thuốc','Nhóm thuốc','', 'Nước sản xuất','Nhà sản xuất','Hoạt chất','SignNumber','','Quy cách','Đơn giá'],
		colModel:[			
		{name:'TenGoc',index:'TenGoc'},	
		{name:'TenNhomThuoc',index:'TenNhomThuoc'},		 
		{name:'MaThuoc',index:'MaThuoc',hidden :true},		
		{name:'TenDayDu',index:'TenDayDu'},	
		{name:'TenNhaSanXuat',index:'TenNhaSanXuat'},	 	 
		{name:'HoatChatChinh',index:'HoatChatChinh'},
		{name:'SignNumber',index:'SignNumber'},
		{name:'TenDonViTinh',index:'TenDonViTinh',hidden :true}		,	
		{name:'Quycach',index:'Quycach'}	,
		{name:'Dongia',index:'Dongia'}	
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},		
		sortorder: "desc",
		serializeRowData: function (postdata) { 
		},
		onSelectRow: function(id){	
			$("#rowed6").jqGrid('getGridParam', 'selrow');
			var rowData = $(elem).getRowData(id);
			$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "TenNhaSanXuat",rowData['TenNhaSanXuat'] );
			$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "TenDayDu",rowData['TenDayDu']);
			$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "SignNumber",rowData['SignNumber']);						
			$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "TenDonViTinh",rowData['tendvt']);			
			$('#'+$("#rowed6").jqGrid('getGridParam', 'selrow')+'_DonGia').val(rowData['Dongia']);			
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {							
		},	  		
	});	
	$(elem).jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	$(elem).jqGrid('bindKeys', {} );		
}

function create_phieunhapchitiet(){	
	var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
	mydata=[];	 
	$("#rowed6").jqGrid({	
		data:mydata,	 
		cmTemplate: {sortable: false},
		datatype: "local",		 	
		colNames:['','ID_NhapKho','Tên gốc','ĐVT', "S.lượng", "Đ.giá", "Thành tiền","Lô NXS","N.hết hạn" ,'Nước SX','Hãng SX','SignNumber','Lô nội bộ',"N.sản xuất" ],
		colModel:[	
		{name:'xoa',index:'xoa',width:"2%",align:'center',hidden:false, editable: false}  ,
		{name:'ID_NhapKho',index:'ID_NhapKho', width:"5%", editable:true,align:'left',hidden:true,edittype:"text"},				
		{name:'TenBietDuoc',index:'TenBietDuoc', width:"18%", editable:true,align:'left',edittype:"text",hidden:false,edittype:"select",editoptions:{value:window.thuoc},formatter: "select"}, 	{name:'TenDonViTinh',index:'TenDonViTinh',search:false, width:"3%", editable:false,align:'center',hidden:false,edittype:"text",editrules:{required: true}}, 			 
		{name:'SoLuong',index:'SoLuong', width:"4%", editable:true,align:'right',edittype:"text",hidden:false,editrules: { number: true, required: true},formatter:'integer',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},
		editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
			if(jwerty.is("enter",e)||jwerty.is("tab",e)){
				$("#"+$(e.target).attr('id').split('_')[0]+"_DonGia").focus();
				$("#"+$(e.target).attr('id').split('_')[0]+"_DonGia").select();
			}else{
				thanhtien(e)
			}
		} }]}			
	}, 
	{name:'DonGia',index:'DonGia', width:"8%", editable:true,align:'right',edittype:"text",editrules: {required: true},hidden:false,formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 4, prefix: "", defaultValue: '0'},
	editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
		if(jwerty.is("enter",e)||jwerty.is("tab",e)){
			$("#"+$(e.target).attr('id').split('_')[0]+"_ThanhTien").focus();
			$("#"+$(e.target).attr('id').split('_')[0]+"_ThanhTien").select();
		}else{
			thanhtien(e)
		}
	} }]}	
},
{name:'ThanhTien',index:'ThanhTien', width:"10%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 4, prefix: "", defaultValue: '0'},
editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){
		$("#"+$(e.target).attr('id').split('_')[0]+"_SoLoNhaSanXuat").focus();
		$("#"+$(e.target).attr('id').split('_')[0]+"_SoLoNhaSanXuat").select();
	}else{
		thanhtien(e)
	}
} }]}	
},
{name:'SoLoNhaSanXuat',index:'SoLoNhaSanXuat', width:"10%", editable:true,align:'center',edittype:"text",hidden:false,editrules: {required: true},
editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){
		if(!check_lohandung($(e.target).attr('id').split('_')[0])){
			alert("Thuốc này có lô NSX và hạn dùng trùng với thuốc trước!");
			
		}else{
			
			$("#"+$(e.target).attr('id').split('_')[0]+"_NgayHetHan").focus();
			$("#"+$(e.target).attr('id').split('_')[0]+"_NgayHetHan").select();
		}
	}
} }]}
},
{name:'NgayHetHan',index:'NgayHetHan',search:false, width:"5%",editrules: {required: true}, editable:true,align:'center',hidden:false,edittype:"text",formatter: 'date' ,formatoptions: {newformat: "d/m/Y", srcformat: 'd/m/Y',}, datefmt: "d/m/Y",editoptions: {	  
	dataInit: function(element) {
		$(element).datepicker({
			showWeek: true,
			defaultDate: "+1w",
			changeMonth: true,
			changeYear: true,
			numberOfMonths: 1,
			dateFormat:  $.cookie("ngayJqueryUi"),
		});
		$(element).dateEntry({dateFormat:$.cookie("ngayDateEntry")});
	},
	dataEvents:  [{ type: 'keyup', fn: function(e) { 
		if(jwerty.is("enter",e)||jwerty.is("tab",e)){ 
			if(!check_lohandung($(e.target).attr('id').split('_')[0])){
				$("#"+$(e.target).attr('id').split('_')[0]+"_NgayHetHan").val('');
				alert("Thuốc này có lô NSX và hạn dùng trùng với thuốc trước!");
				
			}else{
				$('#rowed6_ilsave').click();
			}
			
		}
	} }]}},
	{name:'TenNhaSanXuat',index:'TenNhaSanXuat',search:false, width:"9%", editable:false,align:'center',hidden:false,edittype:"text",editrules:{required: true}}, 
	{name:'TenDayDu',index:'TenDayDu',search:false, width:"7%", editable:false,align:'center',hidden:false,edittype:"text",editrules:{required: true}}, 	
	{name:'SignNumber',index:'SignNumber',search:false, width:"7%", editable:false,align:'center',hidden:false,edittype:"text",editrules:{required: true}}, 		
	{name:'SoLoHeThong',index:'SoLoHeThong', width:"10%", editable:false,align:'center',edittype:"text",hidden:false,editrules: {required: true}},
	{name:'NgaySanXuat',index:'NgaySanXuat',search:false,width:"5%", editable:true,align:'center',hidden:true,edittype:"text",formatter: 'date' ,formatoptions: {newformat: "d/m/Y", srcformat: 'd/m/Y',}, datefmt: "d/m/Y",editoptions: {	  
		dataInit: function(element) {
			$(element).datepicker({
				showWeek: true,
				defaultDate: "+1w",
				changeMonth: true,
				changeYear: true,
				numberOfMonths: 1,
				dateFormat:  $.cookie("ngayJqueryUi"),
			});
			$(element).dateEntry({dateFormat:$.cookie("ngayDateEntry")});
			$(element).val();
		},
		dataEvents:  [{ type: 'keyup', fn: function(e) { 
			if(jwerty.is("enter",e)||jwerty.is("tab",e)){
				$("#"+$(e.target).attr('id').split('_')[0]+"_NgayHetHan").focus();
				$("#"+$(e.target).attr('id').split('_')[0]+"_NgayHetHan").select();
			}
		}}]}
	}, 
	],
	inline_esc:false,
	grid_mode:'',
	grid_move:"",
	grid_save_option:"",	
	loadonce: true,
	scroll: false,		 
	modal:true,
	shrinkToFit: true,
	rowNum: 10000000,
	rowList:[],
	pager: '#prowed6',
	sortname: 'ID_LoaiKham',
	height:100,
	width:100,
	viewrecords: false,	
	ignoreCase:true,	
	sortorder: "asc",
	grouping: true,
	afterInsertRow: function(rowid, aData){	},
	pgbuttons: false, 
	pgtext: null, 
	serializeRowData: function (postdata) { 	
	},
	onCellSelect: function (rowid,iCol,cellcontent,e) {
		if((iCol==0)){
			$('#rowed6').jqGrid('delRowData',rowid);			
		}                      
	}, 
	onSelectRow: function(id){	
		$('#'+window.rowed6_select).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"});
		window.rowed6_select=id;
	},
	ondblClickRow: function (rowId, rowIndex, columnIndex) {
		$("#prowed6 .ui-icon-pencil").click();	
	},
	loadComplete: function(data) {
		var ids = jQuery("#rowed6").jqGrid('getDataIDs');
		for(var i=0;i < ids.length;i++){	
			var cl = ids[i];
			be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
			$("#rowed6").jqGrid('setRowData',ids[i],{xoa:be});
		}		
	},
	caption: "Phiếu nhập chi tiết (Insert để thêm dòng)",
	editurl:'clientArray',
});

$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
$("#rowed6").jqGrid('navButtonAdd', '#prowed6', {caption: "Lưu", buttonicon: 'ui-icon-disk',id : 'luu',
	onClickButton: function() {
		save_data(oper)
	},
	title: "",
	position: "last"
});
$("#rowed6").jqGrid('inlineNav', '#prowed6', {add: true, addtext: '', edittext: '', edit: true,save:true,
	addParams: {
		keys:true,
		position: "last",
		addRowParams: {
			keys:true,                  
			aftersavefunc: function(rowId, response,lastsel) {
				tong_thanhtien=tong_thanhtien+ parseFloat($('#rowed6').jqGrid('getCell',rowId, 'ThanhTien'));
				destroy_combobox_inline('TenBietDuoc',rowId,'rowed6','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId);
				$('#rowed6').focus();	
				var current_rowed6=$('#rowed6').jqGrid('getCell',rowId, 'TenBietDuoc')
				$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
				$("#" + rowId).attr("id",current_rowed6);
				$('#'+current_rowed6).removeClass("ui-state-highlight");						
				be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
				$("#rowed6").jqGrid('setRowData',current_rowed6,{xoa:be});
				setTimeout(function(){							
					$("#prowed6 .ui-icon-plus").click();	
					var ids = jQuery("#rowed6").jqGrid('getDataIDs');	
					$('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();		
				},200);
			},
			oneditfunc: function(rowId) {	
				create_combobox_inline('TenBietDuoc',rowId,'rowed6','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId,create_Dm_thuoc_grid,data_thuoc,0,inline_enter,'TenBietDuoc_combobox')
				number_textbox_demical('#'+rowId+'_DonGia');
			},	
			afterrestorefunc: function(rowId) {	
				destroy_combobox_inline('TenBietDuoc',rowId,'rowed6','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)						
				$("#rowed6").jqGrid('bindKeys');
				$('#rowed6').focus();						
			}				 
		}
	},	
	editParams: {
		keys:true,				 
		aftersavefunc: function(rowId, response,lastsel) {
			destroy_combobox_inline('TenBietDuoc',rowId,'rowed6','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)	
			$('#rowed6').focus();
			setTimeout(function(){
				$("#prowed6 .ui-icon-plus").click();
			},200);	
		},					 	
		oneditfunc: function(rowId) {	
			create_combobox_inline('TenBietDuoc',rowId,'rowed6','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId,create_Dm_thuoc_grid,data_thuoc,$('#rowed6 #'+rowId+'_TenBietDuoc').val(),inline_enter,'TenBietDuoc_combobox');
			number_textbox_demical('#'+rowId+'_DonGia');
		},	
		afterrestorefunc: function(rowId) {	
			$("#rowed6").jqGrid('bindKeys');
			destroy_combobox_inline('TenBietDuoc',rowId,'rowed6','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)								   
		},	 
	}
});      
$('#del_rowed6').hide();
$('#refresh_rowed6,#rowed6_iladd,#rowed6_iledit,#rowed6_ilsave,#rowed6_ilcancel').hide();  
} 
function check_idthuoc(value,colname){	
	ids_rowed6=$('#rowed6').jqGrid('getDataIDs');		
	ids_rowed6=removeA(ids_rowed6, $('#rowed6').jqGrid('getGridParam','selrow'));
	if($.inArray(value, ids_rowed6) > -1){			 
		return [false,'Thuốc đã có','TenBietDuoc_combobox']
	}else if($.trim(value)==''){
		return [false,'Chưa chọn thuốc','TenBietDuoc_combobox']
	}else{
		return[true,'']
	}
}

function check_lohandung(idrow){
	//var rowData2 = $('#rowed6').getRowData(idrow);	
	id_rowed5=$('#rowed6').jqGrid('getDataIDs');	
	for(i=0;i<id_rowed5.length;i++){	
		if(idrow!=id_rowed5[i]){
			var rowData = $('#rowed6').getRowData(id_rowed5[i]);
			if(rowData['SoLoNhaSanXuat']==$("#"+idrow+"_SoLoNhaSanXuat").val() && rowData['NgayHetHan']==$("#"+idrow+"_NgayHetHan").val()){
				//alert("Thuốc này có lô NSX và hạn dùng trùng với thuốc trước!");
				return false;
			}
			
		}
		
		return true;
		
		
		//tongcong+=parseFloat(rowData['ThanhTien']);			   
	}
	
}

function create_sub_grid(){	 
	$("#rowed4").jqGrid({
		data:[],		
		datatype: "local",	
		colNames:['ID_NhapKho','','Mã Thuốc','Tên gốc','ĐVT', "S.lượng", "Đ.giá", "Thành tiền","Lô NXS","N.hết hạn",'Nước SX','Hãng SX','SignNumber','Lô nội bộ', "N.sản xuất"],
		colModel:[		
		{name:'ID_NhapKho',index:'ID_NhapKho', width:"5%", editable:true,align:'left',hidden:true,edittype:"text",editoptions: {defaultValue: window.ids}},		
		{name:'ID_Thuoc',index:'ID_Thuoc', width:"8%", editable:false,align:'center',edittype:"text",hidden:true},
		{name:'MaThuoc',index:'MaThuoc', width:"8%", editable:true,align:'center',edittype:"text",editrules: {required: false},hidden:false,newgrid:true,func_grid:"luoi_MaThuoc"},
		{name:'TenBietDuoc',index:'TenBietDuoc', width:"25%", editable:false,align:'left',editrules: {required: true},edittype:"text",hidden:false},
		{name:'TenDonViTinh',index:'TenDonViTinh',search:false, width:"3%", editable:false,align:'center',hidden:false,edittype:"text"},
		{name:'SoLuong',index:'SoLuong', width:"5%", editable:true,align:'right',edittype:"text",hidden:false,editrules: { number: true, required: false},formatter:'integer',formatoptions:{defaultValue: '0'},formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}}, 
		{name:'DonGia',index:'DonGia', width:"5%", editable:true,align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 4, prefix: "", defaultValue: '0'}},
		{name:'ThanhTien',index:'ThanhTien', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 4, prefix: "", defaultValue: '0'}},
		{name:'SoLoNhaSanXuat',index:'SoLoNhaSanXuat', width:"10%", editable:true,align:'center',edittype:"text",hidden:false,editrules: {required: false}}, 
		{name:'NgaySanXuat',index:'NgaySanXuat',search:false,editrules: {required: false},width:"5%", editable:true,align:'center',hidden:false,edittype:"text",formatter: 'date' ,formatoptions: {newformat: "d/m/Y", srcformat: 'd/m/Y',},editoptions: {	  
			dataInit: function(element) {
				$(element).datepicker({dateFormat: 'dd-mm-yy'})
			}}
		}, 
		{name:'TenDayDu',index:'TenDayDu',search:false, width:"7%", editable:false,align:'center',hidden:false,edittype:"text",editrules:{required: true}}, 	
		{name:'TenNhaSanXuat',index:'TenNhaSanXuat',search:false, width:"9%", editable:false,align:'center',hidden:false,edittype:"text",editrules:{required: true}},
		{name:'SignNumber',index:'SignNumber',search:false, width:"7%", editable:false,align:'center',hidden:false,edittype:"text",editrules:{required: true}},
		{name:'SoLoHeThong',index:'SoLoHeThong', width:"7%", editable:false,align:'center',edittype:"text",hidden:false,editrules: {required: false}},
		{name:'NgayHetHan',index:'NgayHetHan',search:false, width:"5%", editable:true,align:'center',hidden:true,edittype:"text",formatter: 'date' ,formatoptions: {newformat: "d/m/Y", srcformat: 'd/m/Y',},editoptions: {	  
			dataInit: function(element) {
				$(element).datepicker({dateFormat: 'dd-mm-yy'})
			}}
		}, 				 
		],
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,		
		rowList: [], // disable page size dropdown
        pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'		
        sortname: 'ID_NhapKho',
        height:100,
        width: 100,
        viewrecords: true,	
        ignoreCase:true,
        shrinkToFit:true,
        sortorder: "desc",
        serializeRowData: function (postdata) { 		
        },
        onSelectRow: function(id) {		 
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
        	$("#prowed3 .ui-icon-pencil").trigger('click'); 
        },
        loadComplete: function(data) {
        },	  
        caption: "<?php get_text("chitietnhap") ?>"
    });	
	$("#rowed4").setGridWidth($(window).width()-10);
	$("#rowed4").setGridHeight($(window).height()/100*35);
} 
function dialog_chitiet(){	
	var winW = $(window).width() ;
	var winH = $(window).height() ;
	$( "#dialog_chitiet" ).dialog({
		resizable: false,
		height: winH,
		width: winW,
		modal: true,
		autoOpen :false,     
		close: function( event, ui ) {
			if(oper=='edit'){
				window.id_edit=$("#rowed3").jqGrid('getGridParam', 'selrow');				
				$('#rowed3').setGridParam({datatype:"json" }).trigger("reloadGrid");
			}else{
				$('#rowed3').setGridParam({datatype:"json" }).trigger("reloadGrid");
			}
			$("#NgayLapPhieu,#NgayNhapKho,#NgayHoaDon").datepicker( "hide" );	
		},     
		open: function( event, ui ) {
			$("#NgayLapPhieu").focus();	 
			if(oper=='add'){			   
				tong_thanhtien=0;
				thanhtien(1)
				$('input').val('');
				$('#NgayLapPhieu,#NgayNhapKho,#NgayHoaDon').val('<?php echo date("d/m/Y") ?>')
				$('#PhanTramVat,#ThanhTien,#TienVAT,#GiaSauThue').val(0);
				$('#ID_Kho,#ID_NCC').val('');
				$('#GhiChu').val();
				$('#rowed6').setGridParam({datastr: [],datatype:"jsonstring" }).trigger("reloadGrid");
				$('#ID_NhanVien1').html('<?= $_SESSION["user"]["nickname"]?>')
			}else{
				var rowData = jQuery('#rowed3').getRowData($('#rowed3').jqGrid('getGridParam', 'selrow'));
				$('#ID_NhanVien1').html(rowData['ID_NhanVien'])	
				tong_thanhtien=rowData['ThanhTien'];
				$('#MaPhieu').val(rowData['MaPhieu']);
				$('#NgayLapPhieu').val(rowData['NgayLapPhieu']);
				$('#NgayNhapKho').val(rowData['NgayNhapKho']);
				$('#PhanTramVat').val(rowData['PhanTramVat']);
				$('#TienVAT').val(rowData['TienVAT']);
				$('#ThanhTien').val(rowData['ThanhTien']);
				$('#NgayHoaDon').val(rowData['NgayHoaDon']);
				$('#SoHoaDon').val(rowData['SoHoaDon']);
				$('#SoHoaDon').val(rowData['SoHoaDon']);
				$('#GhiChu').val(rowData['GhiChu'])
				setval('#ID_NCC','#ID_NCC1','#NCC',rowData['nhacc']);
				setval('#ID_Kho','#ID_Kho1','#IDKho',rowData['kho']);				
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_nhap&oper=phieunhap_edit&ids='+$('#rowed3').jqGrid('getGridParam', 'selrow')).done(function(data){
					thanhtien(1);
					$('#rowed6').setGridParam({datastr: data,datatype:"jsonstring" }).trigger("reloadGrid");
				})
			}
			$("#rowed6").setGridWidth( $( "#dialog_chitiet" ).width()-10);
			$("#rowed6").setGridHeight( $( "#dialog_chitiet" ).height()-200);		
		}
	});	
}
function create_ncc(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
	$(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên NCC', 'Người liên hệ'],
		colModel:[			
		{name:'TenNCC' ,width:'70%',index:'TenNCC'}, 
		{name:'NguoiLienHe',width:'30%',index:'NguoiLienHe'}
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(35)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},		
		sortorder: "desc",
		serializeRowData: function (postdata) { 	 			
		},
		onSelectRow: function(id){							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {				
		},
		loadComplete: function(data) {				
		},	  		
	});					 
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	$(elem).jqGrid('bindKeys', {} );
} 	
function create_kho(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
	$(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên Kho'],
		colModel:[			
		{name:'tenkho',index:'tenkho'}
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		height:($(window).height() / 100 * parseFloat(20)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(15)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},		
		sortorder: "desc",
		serializeRowData: function (postdata) { 	 			
		},
		onSelectRow: function(id){							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {				
		},
		loadComplete: function(data) {				
		},	  		
	});					 
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	$(elem).jqGrid('bindKeys', {} );
} 	

function removeA(arr) {
	var what, a = arguments, L = a.length, ax;
	while (L > 1 && arr.length) {
		what = a[--L];
		while ((ax= arr.indexOf(what)) !== -1) {
			arr.splice(ax, 1);
		}
	}
	return arr;
}
function inline_enter(e){	
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){
		$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").focus();
		$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").select();
	}
}

function thanhtien(e){
	if(e!=1){
		var ThanhTien_tam="#"+$(e.target).attr('id').split('_')[0]+"_ThanhTien";
		var SoLuong_tam="#"+$(e.target).attr('id').split('_')[0]+"_SoLuong";
		var DonGia_tam="#"+$(e.target).attr('id').split('_')[0]+"_DonGia";
		var tong_thanhtien_hientai=$("#rowed6").jqGrid("getCol", "ThanhTien", false, "sum")+($(SoLuong_tam).val()*$(DonGia_tam).val());
		$(ThanhTien_tam).val($(SoLuong_tam).val()*$(DonGia_tam).val());
	}else{
		if(oper=='add'){
			tong_thanhtien_hientai=0
		}else{
			tong_thanhtien_hientai=$("#rowed4").jqGrid("getCol", "ThanhTien", false, "sum");
		}
	}
	$('#ThanhTien').val(tong_thanhtien_hientai);
	$('#ThanhTien1').html(tong_thanhtien_hientai.formatMoney(0, ',', '.'));
	$('#TienVAT').val(Math.round(tong_thanhtien_hientai*$('#PhanTramVat').val()/100));
	$('#TienVAT1').html(Math.round(tong_thanhtien_hientai*$('#PhanTramVat').val()/100).formatMoney(0, ',', '.'));
	$('#GiaSauThue').val(Math.round(tong_thanhtien_hientai*(($('#PhanTramVat').val()/100)+1)));
	$('#GiaSauThue1').html(Math.round(tong_thanhtien_hientai*(($('#PhanTramVat').val()/100)+1)).formatMoney(0, ',', '.'));	
}
function create_combobox_inline(input,rowId,grid_,dialog,grid,fun,data,defaultvalue,callback,idfocus){	
	$("#"+grid_).jqGrid('unbindKeys');	
	var input_tam='#'+rowId+'_'+input;	
	var input_tam1='#'+rowId+'_'+input+'_combobox';			
	var with_idthuoc=parseFloat($('#jqgh_'+grid_+'_'+input).width())-32;
	$(input_tam).hide(); 
	$('#'+grid_+' #'+rowId+'_'+input).before( '<input id="'+rowId+'_'+input+'_combobox" class="editable" type="text" style="width:'+with_idthuoc+'px" role="textbox">' );   
	grid1 = grid.substr(1);
	dialog1 = dialog.substr(1);
	if(grid.charAt(0)=='.'){
		grid1="class='"+grid1+"'";
	}else{
		grid1="id='"+grid1+"'";
	}
	if(dialog.charAt(0)=='.'){
		dialog1="class='"+dialog1+"'";
	}else{
		dialog1="id='"+dialog1+"'";
	}
	if(typeof window.id_combox_dialog == 'undefined'){
		window.id_combox_dialog= new Array();
	}
	$('#'+rowId+'_'+input+'_combobox' ).bind('keyup',function(e){
		callback(e);
	})
	id_combox_dialog.push(dialog);
	$("body").append("<div  "+dialog1+"><table "+grid1+"></table></div>");
	$( dialog ).css({
		"position":"absolute",
		"z-index":"1000000",
		"display":"none",
		"box-shadow":"0px 0px 6px #333"
	});
	$(grid).click(function(){
		$(grid).data('clicked', true);
	});
	$("#"+grid_).jqGrid('unbindKeys');
	fun(grid,data);
	init_combox(input_tam1,input_tam,dialog,grid,defaultvalue,'bw');
	afterInit_combox(input_tam1,dialog,grid,input_tam);		
	$('#'+rowId+'_'+idfocus).focus();
	$('#'+rowId+'_'+idfocus).select();
}
function destroy_combobox_inline(input,rowId,grid_,dialog,grid){
	var input_tam='#'+rowId+'_'+input;	
	var input_tam1='#'+rowId+'_'+input+'_combobox';	
	$(grid).jqGrid('GridUnload');
	$(input_tam).remove();
	$(input_tam1).remove();
	$(dialog).remove();
	$("#"+grid_).jqGrid('bindKeys');						
	$('#'+grid_).focus();	
}
function timkiem(){
	$('#timkiem').click(function(){		
		$('#rowed3').setGridParam({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_nhap_search&id_loai=<?=$_GET["id_loai"]?>&tungay='+$('#tu_ngay').val()+'&denngay='+$('#den_ngay').val(),datatype:'json'}).trigger('reloadGrid')
	})
}
</script>

