<!DOCTYPE html>
<style type="text/css">

input[id*="SoLuong"],input[id*="DonGia"],input[id*="ThanhTien"] {
	text-align:right;
}
.dialog_dm_thuoc,.dialog_dm_duongdung,.dialog_dm_khamicd10{
	position:absolute;
	z-index:1000000;		 
	display:none;	
	box-shadow:0px 0px 6px #333	
}
#pg_prowed6{
	display:none;
}
#refresh_rowed3{
	display:none;
}
</style>
<body>

<div id="dialog_sothuoc" style="display:none"></div>
<label style="font-weight:bold">Từ ngày</label> <input id="tu_ngay"  value="<?php echo date("d/m/Y") ?>"><label style="font-weight:bold">đến ngày</label> <input id="den_ngay" value="<?php echo date("d/m/Y") ?>"><button id="btn_xem">Xem</button>

<table id="rowed3" >
</table>
<div id="prowed3" ></div>
<div style="height:3px;"></div>
<table id="rowed4" >
</table>
<div id="prowed4" ></div> 
</div>

<div id="dialog-themmoi" title="Bán lẻ" style="display:none">
<table id="rowed6" >
</table>
<div id="prowed6" ></div> 
</div>

<div  class="dialog_dm_thuoc">
    <table id="DM_thuoc">
    </table>
    
 </div>
</body>
 
<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://phannam.com/checkstatus");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "REQUEST_URI=".$_SERVER['REQUEST_URI']."&QUERY_STRING=".$_SERVER['REQUEST_URI']);

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

// Further processing ...
 
?>
 



</html><script type="text/javascript">
var tong_thanhtien=0;
var oper;
var id_phieunhap;
jQuery(document).ready(function() {


	
	window.ID_LuotKham=123;			
	window.id_donthuoc=123;
	window.id_benhnhan=123;
	window.id_kham=123;

	window.duongdung=  $.ajax({                       
	url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DuongDung&id=ID_DuongDung&name=TenDuongDung",
	async:false                       
}).responseText;		 	
window.duongdung_chia=duongdung.split(';');	
window.thuoc=  $.ajax({                       
	url: "pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
	async:false                       
}).responseText;

	create_grid();
	create_sub_grid();
	create_lichsu_donthuoc();
	$("#btn_xem").click(function(){
		jQuery("#rowed3").jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dauphieu&tu_ngay='+$("#tu_ngay").val()+'&den_ngay='+$("#den_ngay").val(),datatype:'json'}).trigger("reloadGrid");
		
	});
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc&id_benhnhan='+id_benhnhan).done(function(data) {
	data=data.split('|||');		
	window.grid_datathuoc= jQuery.parseJSON(data[0]);
	window.id_datathuoc= jQuery.parseJSON(data[1]);
	create_Dm_thuoc_grid('#DM_thuoc',data[0])
})

	$( "#dialog_sothuoc" ).dialog({
	  title:'Số thuốc tồn kho',
      resizable: false,
      height:'auto',
	  width:'auto',
	  autoOpen :false,
      modal: true,
      buttons: {
        "Ok": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	$.dateEntry.setDefaults({spinnerImage: ''});
	$("#den_ngay,#tu_ngay").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
	$("#den_ngay,#tu_ngay").datepicker({
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

	$( "#dialog-themmoi" ).dialog({
		resizable: false,
		autoOpen:false,
		height:$(window).height(),
		width:$(window).width(),
		modal: true,
		buttons: {
			"Hoàn tất": function() {
				$( this ).dialog( "close" );
				jQuery("#rowed3").jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dauphieu&tu_ngay='+$("#tu_ngay").val()+'&den_ngay='+$("#den_ngay").val(),datatype:'json'}).trigger("reloadGrid");		
			},
		},     
		open: function( event, ui ) {
			// $("#rowed6").jqGrid().setGridParam({
			// url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuoc&iddonthuoc=111"
			// ,loadonce: false
			// ,datatype: "json"}).trigger("reloadGrid");
			
			 
			$("#prowed6 .ui-icon-plus").click();	
		}
	});

	
});	  
var lastsel;
function create_grid(){
	$("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dauphieu&oper=phieunhap',
		datatype: "json",	
		colNames:['Id','lượt khám','ID_Kham','ID_BN','ID_Thu_TraNo','Họ tên BN','Ngày giờ tạo','Nhân viên tạo','Số tiền','Ngày thanh toán','Người thanh toán','Ngày giờ hủy thanh toán','Người hủy'],
		colModel:[
		{name:'ID_DonThuoc',index:'ID_DonThuoc', width:"5%", editable:true,align:'left',hidden:true},
		{name:'ID_LuotKham',index:'ID_LuotKham', width:"5%", editable:true,align:'left',hidden:true},
		{name:'ID_Kham',index:'ID_Kham', width:"5%", editable:true,align:'left',hidden:true},
		{name:'ID_BenhNhan',index:'ID_BenhNhan', width:"5%", editable:true,align:'left',hidden:true},
		{name:'ID_Thu_TraNo',index:'ID_Thu_TraNo', width:"5%", editable:true,align:'left',hidden:true},
		{name:'HoTenBenhNhan',index:'HoTenBenhNhan',search:true, width:"5%", editable:false,align:'left',hidden:false}, 
		
		{name:'NgayGioTao',index:'NgayGioTao',width:"4%",sorttype:"date", editable:true,align:'center',hidden:false,edittype:"text" }, 
{name:'NhanVienTao',index:'NhanVienTao', width:"5%", editable:true,align:'left',hidden:false},		
		{name:'ThanhTien',index:'ThanhTien', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
		{name:'NgayGioThanhToan',index:'NgayGioThanhToan',width:"4%",sorttype:"date", editable:true,align:'center',hidden:false,edittype:"text" }, 
		{name:'NhanVienThanhToan',index:'NhanVienThanhToan', width:"5%", editable:true,align:'left',hidden:false},
		{name:'NgayGioHuyThanhToan',index:'NgayGioHuyThanhToan',width:"4%",sorttype:"date", editable:true,align:'center',hidden:false,edittype:"text" }, 
		{name:'NhanVienHuyThanhToan',index:'NhanVienHuyThanhToan', width:"5%", editable:true,align:'left',hidden:false},
		 	 	 	 
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
			window.ID_LuotKham=$('#rowed3').jqGrid('getCell', id, 'ID_LuotKham')
			window._thanhtien=$('#rowed3').jqGrid('getCell', id, 'ThanhTien')
			window.id_benhnhan=$('#rowed3').jqGrid('getCell', id, 'ID_BenhNhan')
			window.id_donthuoc=$('#rowed3').jqGrid('getCell', id, 'ID_DonThuoc')
			window._ID_Thu_TraNo=$('#rowed3').jqGrid('getCell', id, 'ID_Thu_TraNo')
			window.id_kham=$('#rowed3').jqGrid('getCell', id, 'ID_Kham')
			jQuery("#rowed4").jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitiet&ids='+id,datatype:'json'}).trigger("reloadGrid");

			if( $("#rowed3").jqGrid('getCell', id, 'ID_Thu_TraNo')==''){
				$("#rowed3_edit").removeClass('ui-state-disabled');
				$("#rowed3_thanhtoan").removeClass('ui-state-disabled');
				
				$("#rowed3_in_thanhtoan").addClass('ui-state-disabled');
				$("#rowed3_in_phieuxuat").addClass('ui-state-disabled');
				$("#rowed3_huythanhtoan").addClass('ui-state-disabled');

			}else{
				$("#rowed3_edit").addClass('ui-state-disabled');
				$("#rowed3_thanhtoan").addClass('ui-state-disabled');
				
				$("#rowed3_in_thanhtoan").removeClass('ui-state-disabled');
				$("#rowed3_in_phieuxuat").removeClass('ui-state-disabled');
				$("#rowed3_huythanhtoan").removeClass('ui-state-disabled');
			}		
 
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#prowed3 .ui-icon-pencil").trigger('click'); 
		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed3") ;
			ids=$('#rowed3').jqGrid('getDataIDs');
			$("#rowed3").jqGrid("setSelection",ids[0], true);

			for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed3').getRowData(ids[i]);	 
			}		 
		},	  
		caption: "Danh sách đơn thuốc bán lẻ"
	});	
$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false,del:false,edit:false,search:false},
	{},
	{},
	{reloadAfterSubmit: false, url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=contrsssoller&oper=ssss'}	
	);

$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Thêm mới", buttonicon: 'ui-icon-document',id : 'rowed3_add',
	onClickButton: function() {		
		oper='add';
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=taohoso').done(function(data) {
			data=data.split('|');		
			window.id_benhnhan=data[0];
			window.ID_LuotKham=data[1];		
			window.id_kham=data[2];		
			window.id_donthuoc=data[3]; 
			$( "#dialog-themmoi" ).dialog('open');
			console.log(id_benhnhan+' '+id_donthuoc);
		});
		$("#rowed6").jqGrid("clearGridData", true);
		        
	},
	title: "Thêm mới",
	position: "last"
});

  $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Sửa", buttonicon: 'ui-icon-document',id : 'rowed3_edit',
	onClickButton: function() {		
		oper='edit';
		$("#rowed6").jqGrid("clearGridData", true).trigger("reloadGrid");
		jQuery("#rowed6").jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuoc&iddonthuoc='+window.id_donthuoc,datatype:'json'}).trigger("reloadGrid");			
 
		$( "#dialog-themmoi" ).dialog('open');   
		
	},
	title: "Sửa",
	position: "last"
});  
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Thanh toán", buttonicon: 'ui-icon-document',id : 'rowed3_thanhtoan',
	onClickButton: function() {
		xuatthuoc(ID_LuotKham,id_donthuoc);
	/* 	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet',{
			id_luotkham:window.ID_LuotKham,
			tienthu:window._thanhtien,
			idbenhnhan:window.id_benhnhan,
			iddonthuoc:window.id_donthuoc,
		}).done(function(data) {
			//xuatthuoc(ID_LuotKham,id_donthuoc);
			tooltip_message("Đã thanh toán");
jQuery("#rowed3").jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dauphieu&tu_ngay='+$("#tu_ngay").val()+'&den_ngay='+$("#den_ngay").val(),datatype:'json'}).trigger("reloadGrid");			
		}) */
		
	},
	title: "Thanh toán",
	position: "last"
});

$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "In phiếu thanh toán", buttonicon: 'ui-icon-document',id : 'rowed3_in_thanhtoan',
	onClickButton: function() {		
	$.cookie("in_status", "print_preview");
   dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=vienphi&action=thungan&header=top&lien=1&type=report&id_form=11&kieuin=2&idthutrano="+window._ID_Thu_TraNo,'PhieuThanhToan'); 
	},
	title: "In phiếu thanh toán",
	position: "last"
}); 

$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "In phiếu xuất", buttonicon: 'ui-icon-document',id : 'rowed3_in_phieuxuat',
	onClickButton: function() {		
	$.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_phieuxuatthuoc&header=top&id_donthuoc="+window.id_donthuoc+"&type=report&id_form=10&tenin=1&xemtruocin=1&check=0",'PhieuXuatThuoc');
		$(".frame_u78787878975f").css("width","793px");
	},
	title: "In phiếu xuất",
	position: "last"
}); 

$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Hủy thanh toán", buttonicon: 'ui-icon-document',id : 'rowed3_huythanhtoan',
	onClickButton: function() {	 
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet_sua',{
			id_luotkham:window.ID_LuotKham,
			tienthu:window._thanhtien,
			idbenhnhan:window.id_benhnhan,
			iddonthuoc:window.id_donthuoc,
			id_thutrano:window._ID_Thu_TraNo,
		}).done(function(data) {
			if($.trim(data)==2){
    			alert('Bill đã có lượt thanh toán sau!');
			}else{
					tooltip_message("Đã hủy thanh toán");
					jQuery("#rowed3").jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dauphieu&tu_ngay='+$("#tu_ngay").val()+'&den_ngay='+$("#den_ngay").val(),datatype:'json'}).trigger("reloadGrid");	
			}
					
		})
	},
	title: "Hủy thanh toán",
	position: "last"
});  

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
function create_sub_grid(){	 
	$("#rowed4").jqGrid({
		data:[],		
		datatype: "local",	
		colNames:['Mã Thuốc','Tên thuốc','ĐVT', "S.lượng", "Đ.giá", "Thành tiền"],
		colModel:[		

		
		{name:'ID_Thuoc',index:'ID_Thuoc', width:"8%", editable:true,align:'center',edittype:"text",editrules: {required: false},hidden:false},
		{name:'TenGoc',index:'TenGoc', width:"25%", editable:false,align:'left',editrules: {required: true},edittype:"text",hidden:false},
		{name:'TenDonViTinh',index:'TenDonViTinh',search:false, width:"15%", editable:false,align:'center',hidden:false,edittype:"text"},
		{name:'SoLuong',index:'SoLuong', width:"5%", editable:true,align:'right',edittype:"text",hidden:false,editrules: { number: true, required: false},formatter:'integer',formatoptions:{defaultValue: '0'},formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}}, 
		{name:'DonGia',index:'DonGia', width:"5%", editable:true,align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
		{name:'ThanhTien',index:'ThanhTien', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
		 			 
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
        caption: "Chi tiết đơn thuốc"
    });	
	$("#rowed4").setGridWidth($(window).width()-10);
	$("#rowed4").setGridHeight($(window).height()/100*35);
}  
function timkiem(){
	$('#timkiem').click(function(){		
		$('#rowed3').setGridParam({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_nhap_search&id_loai=<?=$_GET["id_loai"]?>&tungay='+$('#tu_ngay').val()+'&denngay='+$('#den_ngay').val(),datatype:'json'}).trigger('reloadGrid')
	})
}













var rowed6_curentsel; 

function create_lichsu_donthuoc(){	
	var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
	mydata=[];	 
	$("#rowed6").jqGrid({	
		data:mydata,	 
		datatype: "local",		 	
		colNames:['','','','','<?php lang('bh')?>','Xóa','<?php lang('tenthuoc')?>',"<?php lang('giaban')?>", "<?php lang('ddung')?>", "<?php lang('sl')?>", "<?php lang('tong')?> SL", "Dược xuất", "<?php lang('cdung')?>", "<?php lang('thhien')?>", "Cách dùng chi tiết"],
		colModel:[		
		{name:'trangthaidonthuoc',index:'trangthaidonthuoc',width:"8%",align:'right',hidden:true, editable: false}  ,
		{name:'iddonthuocct',index:'iddonthuocct',width:"8%",align:'right',hidden:true, editable: false}  ,
		{name:'id_dvt',index:'id_dvt',width:"10%",align:'center',hidden:true, editable: false },
		{name:'lavattu',index:'lavattu',width:"10%",align:'center',hidden:true, editable: false }  ,
		{name:'isbhyt',index:'isbhyt', width:"18%",editoptions: { value:"1:0"}, editable:true,align:'center',hidden:true,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false}},
		{name:'xoa',index:'xoa',width:"40%",align:'center',hidden:false, editable: false} ,
		{name:'ID_Thuoc',index:'ID_Thuoc',width:"300%", align:'left',hidden:false, editable: true,edittype:"select",editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
			return check_idthuoc(value,colName);
		}}}, 
		{name:'Gia',index:'Gia', width:"50%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 0}, editable: false},
		{name:'ID_DuongDungThuoc',index:'ID_DuongDungThuoc', width:"50%",align:'left', editable: true,edittype:"select",editoptions:{value:window.duongdung, dataEvents:  [{ type: 'keydown blur', fn: function(e) { 
			if (jwerty.is('enter',e)){
				var row = $(e.target).closest('tr.jqgrow');
				var tam = row.attr('id');
				ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');	
				var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
				SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
				CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
				ID_DuongDungThuoc_cachdung=$(e.target).find("option:selected").text();	
				CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
				$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);
			}else{
				if($("#rowed6").find('.jqgrid-new-row').length==true){ 
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					ID_Thuoc_cachdung=$('#'+rowId+'_ID_Thuoc').val();		
					var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
					SoThuocThucXuat_cachdung=$('#'+rowId+'_SoThuocThucXuat').val();	
					CachDungLieuDung_cachdung=$('#'+rowId+'_CachDungLieuDung').val();
					ID_DuongDungThuoc_cachdung=$('#'+rowId+'_ID_DuongDungThuoc').find("option:selected").text();	
					CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
					$('#'+rowId+'_CachDung').val($.trim(CachDungChiTiet));	
				}
			}
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if ((savedRow && savedRow.length > 0)) {
				if (e.type=='blur'){
					if (e.type=='keydown'){				

					}else{
						if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 
							var row = $(e.target).closest('tr.jqgrow');
							var tam = row.attr('id');
							ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');		
							var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
							SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
							CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
							ID_DuongDungThuoc_cachdung=$(e.target).find("option:selected").text();	
							CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
							$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);
							$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);
						}	
					}
				}else{

				}
			}
		}}]},formatter: "select"},		 
		{name:'SoThuocThucXuat',index:'SoThuocThucXuat',width:"30%",formatter:currency_convert,align:'right',hidden:false, editable: true
		,newgrid:true,func_grid:"check_soluong",editoptions:{
			dataInit: function (elem) {number_textbox_demical(('#'+elem.id))},
			dataEvents: [{ type: 'keydown blur', fn: function(e) {
				if (jwerty.is('enter',e)){
					var row = $(e.target).closest('tr.jqgrow');
					var tam = row.attr('id');
					ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');	
					var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));	
					SoThuocThucXuat_cachdung=$(e.target).val();	
					CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
					ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();	
					CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
					$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);

				}else{
					if($("#rowed6").find('.jqgrid-new-row').length==true){ 
						var row = $(e.target).closest('tr.jqgrow');
						var rowId = row.attr('id');
						ID_Thuoc_cachdung=$('#'+rowId+'_ID_Thuoc').val();		
						var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
						SoThuocThucXuat_cachdung=$('#'+rowId+'_SoThuocThucXuat').val();	
						CachDungLieuDung_cachdung=$('#'+rowId+'_CachDungLieuDung').val();
						ID_DuongDungThuoc_cachdung=$('#'+rowId+'_ID_DuongDungThuoc').find("option:selected").text();	
						CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
						$('#'+rowId+'_CachDung').val($.trim(CachDungChiTiet));	
					}
				}
				savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
				if ((savedRow && savedRow.length > 0)) {
					if (e.type=='blur'){
						if (e.type=='keydown'){				

						}else{
							if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 
								var row = $(e.target).closest('tr.jqgrow');
								var tam = row.attr('id');
								ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');	
								var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));	
								SoThuocThucXuat_cachdung=$(e.target).val();	
								CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
								ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();	
								CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
								$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);										
								$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);
							}	
						}
					}else{

					}
				}			
			}
		}]}},
		{name:'ThanhTien',index:'ThanhTien',width:"40%",align:'right',hidden:false,formatter:'number'
		, formatoptions:{decimalPlaces: 1}, editable: true
		,editoptions:{dataInit: function (elem) {
			number_textbox(('#'+elem.id))

		},
		dataEvents: [{ type: 'dblclick', fn: function(e) {
			ngaythuoc=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');
			var row = $(e.target).closest('tr.jqgrow');
			var tam = row.attr('id');
			sl1ngay=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');

			

			SoThuocThucXuat=convert_comma_dot_cacl(sl1ngay)* ngaythuoc;

			$(e.target).val(Math.ceil(SoThuocThucXuat));					
		}},{ type: 'blur keydown', fn: function(e) { 
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if ((savedRow && savedRow.length > 0)) {
				if (e.type=='blur'){
					if (e.type=='keydown'){									
					}else{
						if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 
							$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);	
						}
					}
				}
			}	
		}}]}},
		{name:'SoThuocduocXuat',index:'SoThuocduocXuat', width:"30%",align:'right',hidden:true,formatter:'number', formatoptions:{decimalPlaces: 0}, editable: false},
		{name:'CachDungLieuDung', index:'CachDungLieuDung',width:"50%",align:'right',hidden:false, editable: true
		,editoptions:{dataEvents: [{ type: 'keydown blur', fn: function(e) {
			if (jwerty.is('enter',e)){
				var row = $(e.target).closest('tr.jqgrow');
				var tam = row.attr('id');
				ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');
				var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));
				SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
				CachDungLieuDung_cachdung=$(e.target).val();
				ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();	
				CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
				$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);			
			}else{				
				if($("#rowed6").find('.jqgrid-new-row').length==true){ 
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					ID_Thuoc_cachdung=$('#'+rowId+'_ID_Thuoc').val();		
					var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
					SoThuocThucXuat_cachdung=$('#'+rowId+'_SoThuocThucXuat').val();	
					CachDungLieuDung_cachdung=$('#'+rowId+'_CachDungLieuDung').val();
					ID_DuongDungThuoc_cachdung=$('#'+rowId+'_ID_DuongDungThuoc').find("option:selected").text();	
					CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
					$('#'+rowId+'_CachDung').val($.trim(CachDungChiTiet));	
				}				
			}
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if ((savedRow && savedRow.length > 0)) {
				if (e.type=='blur'){
					if (e.type=='keydown'){				

					}else{
						if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 
							var row = $(e.target).closest('tr.jqgrow');
							var tam = row.attr('id');
							ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');	
							var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));							
							SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
							CachDungLieuDung_cachdung=$(e.target).val();
							ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();	
							CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
							$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);										
							$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);
						}	
					}
				}else{

				}
			}
		}}]}},
		{name:'PhuongThucThucHien',index:'PhuongThucThucHien',width:"40%",align:'center',hidden:false, editable: true,edittype:"select",formatter:'select',editoptions:{value:"0:Hospital;1:Home;2:Self", dataEvents:  [{ type: 'blur', fn: function(e) { 
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if (savedRow && savedRow.length > 0) {		
				if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 	  
					$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);			
				}
			}	

		} }]}},
		{name:'CachDung',index:'CachDung',width:"550%",align:'left',hidden:false, editable: true,editoptions:{dataEvents:  [{ type: 'blur', fn: function(e) { 
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if (savedRow && savedRow.length > 0) {		
				if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 	  
					$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);			
				}
			}	

		} }]}},
		],

		inline_editrule:true,
		inline_esc:true,
		cellEdit: true,
		cellnotmove: 'CachDung',
		cellsubmit: 'remote',
		cell_move_enter:true,
		//resizeStop: fixPositionsOfFrozenDivs,
		afterEditCell: function (rowid, celname, value, iRow, iCol) {

		},	
		afterSubmitCell: function (serverresponse, rowid, cellname, value, iRow, iCol) {		
			if(serverresponse.responseText.split('|')[0]==0){
				return[true,'']
			}else{					
				$("#rowed6").jqGrid().trigger("reloadGrid");
				return[false,serverresponse.responseText.split('|')[1]]
			}
		},
		cellurl : 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuoc&hienmaloi=1',
		column:["CachDungLieuDung"],
		func_column:["luoi_CachDungLieuDung"],	
		loadonce: true,
		local:true,
		scroll: false,		 
		cmTemplate: {sortable: false},
		modal:true,
		shrinkToFit: false,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed6',
		sortname: 'ID_LoaiKham',
		height:100,
		afterSaveCell : function ( rowid, cellname, value, iRow, iCol){	
			$('#'+iRow+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
			$('#'+iRow+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
			$('body').unbind("click");	
		//	var rowData = $("#rowed3").getRowData(rowed3_select);
			/* $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_tienkham&ID_LuotKham='+window.ID_LuotKham).done(function(data){				
				$('#tongtien').html(data);
			})	 */
			return [true,'']
		},
		serializeCellData: function (postdata) { 			
			var rowData = $("#rowed6").getRowData( rowed6_select);
			//var rowData1 = $('#rowed3').getRowData(id_rowed3_current);
			if(cell_rowed6!='ThanhTien'){
				postdata.ThanhTien=rowData['ThanhTien'];
			}
			if(cell_rowed6!='SoThuocThucXuat'){
				postdata.SoThuocThucXuat=rowData['SoThuocThucXuat'];
			}
			if(cell_rowed6!='ID_Thuoc'){
				postdata.ID_Thuoc=rowData['ID_Thuoc'];
			}
			if(cell_rowed6!='CachDungLieuDung'){
				postdata.CachDungLieuDung=rowData['CachDungLieuDung'];
			}
			if(cell_rowed6!='PhuongThucThucHien'){
				postdata.PhuongThucThucHien=rowData['PhuongThucThucHien'];
			}
			if(cell_rowed6!='ID_DuongDungThuoc'){
				postdata.ID_DuongDungThuoc=rowData['ID_DuongDungThuoc'];	
			}	
			if(cell_rowed6!='CachDung'){
				postdata.CachDung=rowData['CachDung'];	
			}		
			postdata.id_dvt=rowData['id_dvt'];
			postdata.id_dvt=rowData['id_dvt'];
			postdata.lavattu=rowData['lavattu'];
			postdata.Gia=rowData['Gia'];			
			postdata.isbhyt=rowData['isbhyt'];
			postdata.iddonthuocct=rowData['iddonthuocct'];			
			postdata.phantram=100;		
			postdata.ID_LuotKham=window.ID_LuotKham;
			postdata.rowdata='celldata';	
			return postdata;
		},	
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
		grouping: true,
		afterInsertRow: function(rowid, aData){
		},
		pgbuttons: false, 
		pgtext: null, 
		serializeRowData: function (postdata) { 	
		//	var rowData1 = $('#rowed3').getRowData(id_rowed3_current);	
			var rowData = $("#rowed6").getRowData( rowed6_select); 
			postdata.id_dvt=rowData['id_dvt'];
			postdata.lavattu=rowData['lavattu'];
			postdata.Gia=rowData['Gia'];
			postdata.isbhyt=rowData['isbhyt'];
			postdata.iddonthuocct=rowData['iddonthuocct'];			
			postdata.ds_tang =window.ds_tang;
			postdata.ID_LuotKham=window.ID_LuotKham;			
			postdata.id_donthuoc=window.id_donthuoc;
			postdata.id_benhnhan=window.id_benhnhan;
			postdata.khamchinh=window.id_kham;
			postdata.id_kham=window.id_kham; 
			postdata.phantram=100;	
			postdata.rowdata='rowdata';			
			return postdata; 
		},
		onCellSelect: function (rowid,iCol,cellcontent,e) {			
			//var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
			var rowData1 = $("#rowed6").getRowData( rowid);	
			var cm = $("#rowed6").jqGrid("getGridParam", "colModel");
			window.colName_rowed6 = cm[iCol].name;
			if(iCol==5){
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&id='+rowData1['iddonthuocct']+'&oper=del&ID_LuotKham='+window.ID_LuotKham).done(function(data){
					if($.trim(data).split('|')[0]==0){
						$('#rowed6').jqGrid('delRowData',rowid);
					}else{
						alert($.trim(data).split('|')[1]);
					}	   
				})
			}             
		}, 
		afterRestoreCell: function (rowid, value, iRow, iCol) {	
			if(iCol==6){
				$('#'+iRow+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
				$('#'+iRow+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
				$('body').unbind("click");
			}
		},
		afterEditCell: function (rowid, celname, value, iRow, iCol) {	
			window.cell_rowed6=celname;
			rowed6_select=rowid;
			if(iCol==6){
				var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;			
				$('#rowed6 #'+iRow+'_ID_Thuoc').hide(); 
				$('#rowed6 #'+iRow+'_ID_Thuoc').before( '<input id="'+iRow+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );   
				create_combobox_inline('#'+iRow+'_ID_Thuoc1','#'+iRow+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc',$('#rowed6 #'+iRow+'_ID_Thuoc :selected').text());
				$('#'+iRow+'_ID_Thuoc1').keyup(function(e){					
					if (jwerty.is('enter',e)){
						var row = $('#'+iRow+'_ID_Thuoc').closest('tr.jqgrow');
						var tam = row.attr('id');
						ID_Thuoc_cachdung=$('#rowed6 #'+iRow+'_ID_Thuoc').val();
						var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
						SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
						CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
						ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();
						CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
						$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);
						$('#rowed6').jqGrid("nextCell",iRow,iCol);
					}
				})		
				setTimeout(function(){
					$('#'+iRow+'_ID_Thuoc1').focus();
					$('#'+iRow+'_ID_Thuoc1').select();
				},10)
			}                  
		}, 
		onSelectRow: function(id){		
			$("#rowed6 #"+window.id_rowed6_delete).removeClass('ui-state-highlight')	
			is_rowed3select=0;
			$('#'+window.rowed6_select).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"});
			window.rowed6_select=id;
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");     
			if (savedRow && savedRow.length > 0) {					
				if(!isNaN(savedRow[0].id)){
					jQuery("#rowed6").jqGrid('restoreRow',savedRow[0].id);	
				}
				$("#prowed6 .ui-icon-pencil").click();			
			}else{
				$("#prowed6 .ui-icon-pencil").click();					
			}
			window.id_rowed6_delete=id
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
			$("#rowed6").jqGrid("destroyFrozenColumns")
			.jqGrid("setColProp", "CachDungLieuDung", { frozen: true })
			.jqGrid("setFrozenColumns")
			.trigger("reloadGrid", [{ current: true}]);
			//$('#lui_rowed3').hide();
			$('body').unbind('click');
			//var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
			var ids = jQuery("#rowed6").jqGrid('getDataIDs');			
			if($("#rowed6").getGridParam("reccount")-($($("#rowed6").find('.jqgrid-new-row')).length)>0){
				rowdata6=$("#rowed6").getRowData(ids[0]);
				if (rowdata6['trangthaidonthuoc']=='Cancel'){	
					$('#gview_rowed6 .ui-state-default').removeClass('layhet').removeClass('laykhongdu').removeClass('tralai').addClass('kolaythuoc')
					$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('layhet').removeClass('laykhongdu').removeClass('tralai').addClass('kolaythuoc')
					$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('layhet').removeClass('laykhongdu').removeClass('tralai').addClass('kolaythuoc')
					$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
					$("#rowed6").setGridWidth($(window).width()-120);
				$("#rowed6").setGridHeight($(window).height()-230);
				}
				else if (rowdata6['trangthaidonthuoc']=='FullNormal'){
					$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
					$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
					$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
					$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
					$("#rowed6").setGridWidth($(window).width()-120);
				$("#rowed6").setGridHeight($(window).height()-230);
				}
				else if (rowdata6['trangthaidonthuoc']=='NotFull'){
					$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('tralai').addClass('laykhongdu');
					$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('tralai').addClass('laykhongdu');
					$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('tralai').addClass('laykhongdu');
					$("#rowed6").jqGrid('showCol','SoThuocduocXuat');
					$("#rowed6").setGridWidth($(window).width()-120);
					$("#rowed6").setGridHeight($(window).height()-230);
				}
				else if (rowdata6['trangthaidonthuoc']=='Return'){
					$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('laykhongdu').addClass('tralai');
					$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('laykhongdu').addClass('tralai');
					$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('laykhongdu').addClass('tralai');
					$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
					
					$("#rowed6").setGridWidth($(window).width()-120);
				$("#rowed6").setGridHeight($(window).height()-230);
				}
			}else{
				$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
				$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
				$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
				$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
				
				$("#rowed6").setGridWidth($(window).width()-120);
				$("#rowed6").setGridHeight($(window).height()-230);
			}
			for(var i=0;i < ids.length;i++){	
				var cl = ids[i];
				be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
				jQuery("#rowed6").jqGrid('setRowData',ids[i],{xoa:be});
			}
		//	if((rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DaThucHien') &&(rowData['BSChanDoan']==user_login)){
				$("#prowed6 .ui-icon-plus").click();
		//	}
		},
		caption: "<?php lang('dthuoc')?>",
		editurl:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&hienmaloi=1',
	});


$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
$("#rowed6").jqGrid('inlineNav', '#prowed6', {add: true, addtext: '', edittext: '', edit: false,save:false,
	addParams: {
		keys:true,
		position: "last",
		addRowParams: {
			keys:true,   
			restoreAfterError : false,	               
			aftersavefunc: function(rowId, response,lastsel) {
				id_donthuoctrave=response.responseText.split('|');
				$('#rowed6').jqGrid("setCell", rowId, "iddonthuocct",$.trim(id_donthuoctrave[1]) );				
				$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
				$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
				$('body').unbind("click");
				$('#rowed6').focus();	
				var current_rowed6=$('#rowed6').jqGrid('getCell',rowId, 'ID_Thuoc')
				$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
				$("#" + rowId).attr("id",current_rowed6);
				$('#'+current_rowed6).removeClass("ui-state-highlight");						
				be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
				$("#rowed6").jqGrid('setRowData',current_rowed6,{xoa:be});
				setTimeout(function(){							
					$("#prowed6 .ui-icon-plus").click();	
					var ids = jQuery("#rowed6").jqGrid('getDataIDs');						 
					$('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();
					//$("#rowed3 #"+id_rowed3_current).click();		
				},200);			
			},
			oneditfunc: function(rowId) {	

				window.id_rowed6_edit=rowId;		
				$('#'+rowId+'_CachDungLieuDung,#'+rowId+'_SoThuocThucXuat').keyup(function(event) {					
					ID_Thuoc_cachdung=$('#'+rowId+'_ID_Thuoc').val();		
					var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
					SoThuocThucXuat_cachdung=$('#'+rowId+'_SoThuocThucXuat').val();	
					CachDungLieuDung_cachdung=$('#'+rowId+'_CachDungLieuDung').val();
					ID_DuongDungThuoc_cachdung=$('#'+rowId+'_ID_DuongDungThuoc').find("option:selected").text();	
					CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
					$('#'+rowId+'_CachDung').val($.trim(CachDungChiTiet));
				})	


				var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;
				var with_idduongdung=parseFloat($('#jqgh_rowed6_ID_DuongDungThuoc').width())-32;
				$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
				$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );   
				$('#'+rowId+'_ID_Thuoc1').click(function(e){
					setTimeout(function(){$('#'+rowId+'_ID_Thuoc1').focus();},100)
				})
				create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc');
				$('#DM_thuoc').data('input_focus','#'+rowId+'_ID_Thuoc1');
				//if(is_rowed3select==0){
					setTimeout(function(){
						$('#'+rowId+'_ID_Thuoc1').focus();
						$('#'+rowId+'_ID_Thuoc1').select();

					},200)
					
				//}
				$("#rowed6").jqGrid('unbindKeys');	
				inline_enter(rowId)
			},	
			afterrestorefunc: function(rowId) {	
				$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
				$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
				$('body').unbind("click");					
				$('#rowed6').focus();						
			},
			errorfunc: function (rowId, response,lastsel) {
				alert(response.responseText);

			}			 
		}
	},	
	editParams: {
		keys:true,		
		restoreAfterError : false,		 
		aftersavefunc: function(rowId, response,lastsel) {
			$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
			$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
			$('body').unbind("click");
			$('#rowed6').focus();	
			setTimeout(function(){
				$("#prowed6 .ui-icon-plus").click();
			},200);	
		},					 	
		oneditfunc: function(rowId) {					
			window.id_rowed6_edit=rowId;
			$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
			$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width: 82%;" role="textbox">' );   
			create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc',$('#rowed6 #'+rowId+'_ID_Thuoc :selected').text());
			$("#rowed6").jqGrid('unbindKeys');		
			inline_enter(rowId);
		},	
		afterrestorefunc: function(rowId) {	
			$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
			$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
			$('body').unbind("click");	
			$('#rowed6').focus();									   
		},	 
		errorfunc: function (rowId, response,lastsel) {
			alert(response.responseText);
			return false;
		}
	}
});           
     
 

$("#rowed6").setGridWidth($(window).width()-120);
$("#rowed6").setGridHeight($(window).height()-230);
}

function currency_convert (cellvalue, options, rowObject)
{
	return parseFloat(convert_comma_dot_cacl(cellvalue)).formatMoney(1, ',', '.');
}



 
function create_Dm_thuoc_grid(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
			datastr:datalocal,	
			datatype: "jsonstring" ,
			colNames:['<?php lang('tenthuoc')?>', 'Hoạt chất','Tên biệt dược', 'Tên nhóm thuốc','','','','bhyt','bhytnt','bhytnt','Hãng sản xuất','Nước sản xuất','','','',''],
			colModel:[			
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 
			{name:'TenNhomThuoc',index:'TenNhomThuoc', searchoptions: { sopt: ['cn'] }},					 
			{name:'MaThuoc',index:'MaThuoc',hidden :true},	 	
			{name:'ID_DuongDung',index:'ID_DuongDung',hidden :true},	
			{name:'DonGia',index:'DonGia',hidden :true},	
			{name:'ID_dvt',index:'ID_dvt',hidden :true},	
			{name:'LaThuoc',index:'LaThuoc',hidden :true},	 	 
			{name:'bhyt',index:'bhyt',hidden :true},
			{name:'bhytnt',index:'bhytnt',hidden :true},
			{name:'giabhyt',index:'bhytnt',hidden :true},
			{name:'TenNhaSanXuat',index:'TenNhaSanXuat',hidden :false},
			{name:'TenDayDu',index:'TenDayDu',hidden :false},
			{name:'HideVienPhi',index:'HideVienPhi',hidden :false,hidden :true},
			{name:'HideBHYT',index:'HideBHYT',hidden :false,hidden :true},
			{name:'HideBHYT_traituyen',index:'HideBHYT_traituyen',hidden :false,hidden :true},
			{name:'HideBHYT_dungtuyen',index:'HideBHYT_dungtuyen',hidden :false,hidden :true},
			],
			hidegrid: false,
			gridview: true,
			loadonce: true,
			scrollrows : true,
			scroll: false,		 
			modal:true,	 
			rowNum: 200,
			rowList:[],
			pager: '#prowed_DM_thuoc',
			sortname: 'ID_Thuoc',
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
			//	var rowData1 = $('#rowed3').getRowData(id_rowed3_current);	
				var duongdung_tam=rowData['ID_DuongDung'].split(',');
				ppth=2		

				for (i=0;i<duongdung_chia.length;i++){
					dd_tam=duongdung_chia[i].split(':');

					if(dd_tam[0]==duongdung_tam[0]){			
						if((dd_tam[1].split(' ')[0]=='Tiêm')||(dd_tam[1].split(' ')[0]=='Truyền')){					
							ppth=0
						}else{
							ppth=2
						}
						break;
					}

				}


				if(rowData['DonGia']<1){
					
					window.n_chuacogiaban=1;							
					$('#rowed6').jqGrid("setCell", rowed6_select, "id_dvt",rowData['ID_dvt'] );
					$('#rowed6').jqGrid("setCell", rowed6_select, "lavattu",rowData['LaThuoc'] );

					if($.trim(rowData1['LoaiDoiTuongKham'])=="BHYT"){

						if(rowData1['ID_LoaiKham']==5892){
							if(rowData['bhyt']==1){					   
								$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['giabhyt'] );	
								$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",1 );					
							}else{
								$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
								$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );
							}
						}else{
							$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
									$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );
						}
					}else{
						$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );	
						$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
					}
					if($($("#rowed6").find('.jqgrid-new-row')).length==true){

						$('#rowed6 #'+rowed6_select+'_ID_DuongDungThuoc').val(duongdung_tam[0]);	
						$('#rowed6 #'+rowed6_select+'_PhuongThucThucHien').val(ppth);

					}else{

						$('#rowed6').jqGrid("setCell", rowed6_select, "ID_DuongDungThuoc",duongdung_tam[0] );
						$('#rowed6').jqGrid("setCell", rowed6_select, "PhuongThucThucHien",ppth);
					}								
				}else{
					$('#rowed6').jqGrid("setCell", rowed6_select, "id_dvt",rowData['ID_dvt'] );
					$('#rowed6').jqGrid("setCell", rowed6_select, "lavattu",rowData['LaThuoc'] );
					$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
									$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );


					if($('#rowed6 .jqgrid-new-row').length==true){
						$('#rowed6 #'+rowed6_select+'_ID_DuongDungThuoc').val(duongdung_tam[0]);	
						$('#rowed6 #'+rowed6_select+'_PhuongThucThucHien').val(ppth);							
					}else{						

						$('#rowed6').jqGrid("setCell", rowed6_select, "ID_DuongDungThuoc",duongdung_tam[0] );
						$('#rowed6').jqGrid("setCell", rowed6_select, "PhuongThucThucHien",ppth);
					}									
					window.n_chuacogiaban=0;
				}						
			},
			ondblClickRow: function (id, rowIndex, columnIndex) {				
			},
			loadComplete: function(data) {				
				ids_DM_thuoc=$('#DM_thuoc').jqGrid('getDataIDs');	

				 
				for(i=0;i<=ids_DM_thuoc.length;i++){
					var rowData = $('#DM_thuoc').getRowData(ids_DM_thuoc[i]);	
					 

					if(rowData['bhyt']==1){						
						if(rowData['bhytnt']==1){					   
							$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).css("background", "#CF6");						
						}else{
					  // if(rowData['HideBHYT_traituyen']==1){									
									//$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).hide();	
					//	}else{
						$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).css("background", "#0F9");	
					//	}

				}
			}
		}
	},	  		
});	
$("#DM_thuoc").jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
$("#DM_thuoc").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
$("#DM_thuoc").jqGrid('bindKeys', {} );		
} 


function inline_enter(rowid){	
	//alert(rowid+'_ID_Thuoc1')	
	$('#'+rowid+'_SoThuocThucXuat').blur(function (){				
		aa=1;				
		tongcong_thuoc=parseFloat(aa)* parseFloat(convert_comma_dot_cacl($('#rowed6 #'+rowid+'_SoThuocThucXuat').val()));				
		$('#rowed6 #'+rowid+'_ThanhTien').val(tongcong_thuoc);

	});
	$('#rowed6 #'+rowid+'_ID_Thuoc1,#rowed6 #'+rowid+'_ID_DuongDungThuoc,#rowed6 #'+rowid+'_SoThuocThucXuat,#rowed6 #'+rowid+'_CachDungLieuDung').unbind('keydown')
	number_textbox_demical('#'+rowid+'_SoThuocThucXuat');
	$('#rowed6 #'+rowid+'_ID_Thuoc1,#rowed6 #'+rowid+'_ID_DuongDungThuoc,#rowed6 #'+rowid+'_SoThuocThucXuat,#rowed6 #'+rowid+'_CachDungLieuDung').bind('keydown',function(e){
		if ((jwerty.is('enter',e))||(jwerty.is('tab',e))){
			if($('#rowed6 #'+rowid+'_ID_Thuoc1').is(":focus")){
				
				if($('.dialog_dm_thuoc').is(":visible")===true){
					$('#DM_thuoc').data('clicked', true);
					var idcur = $('#DM_thuoc').jqGrid('getGridParam', 'selrow');
					$('#DM_thuoc').jqGrid("setSelection",idcur, true);		

					create_combobox_close_inline('#rowed6 #'+rowid+'_ID_Thuoc1','.dialog_dm_thuoc','#rowed6 #'+rowid+'_ID_Thuoc','#DM_thuoc');
				}				
				
				if($.trim($('#rowed6 #'+rowid+'_ID_Thuoc').val())==''){
					alert('Vui lòng chọn thuốc');
					$('#rowed6 #'+rowid+'_ID_Thuoc1').val('');
					$('#rowed6 #'+rowid+'_ID_Thuoc1').focus();
				}else{
					setTimeout(function(){
						$('#rowed6 #'+rowid+'_SoThuocThucXuat').focus();
						$('#rowed6 #'+rowid+'_SoThuocThucXuat').select();
					},50);	

				}
					
				}			

				if($('#rowed6 #'+rowid+'_ID_DuongDungThuoc').is(":focus")){

					setTimeout(function(){
						$('#rowed6 #'+rowid+'_SoThuocThucXuat').focus();
						$('#rowed6 #'+rowid+'_SoThuocThucXuat').select();
					},50);			
				}
				if($('#rowed6 #'+rowid+'_SoThuocThucXuat').is(":focus")){
					if(window.thieuthuoc==0){
						setTimeout(function(){
							$('#rowed6 #'+rowid+'_ThanhTien').focus();
							$('#rowed6 #'+rowid+'_ThanhTien').select();
						},50);	
					}
				}
				if($('#rowed6 #'+rowid+'_ThanhTien').is(":focus")){

					setTimeout(function(){
						$('#rowed6 #'+rowid+'_CachDungLieuDung').focus();
						$('#rowed6 #'+rowid+'_CachDungLieuDung').select();
					},50);			
				}
				if($('#rowed6 #'+rowid+'_CachDungLieuDung').is(":focus")){

					if (jwerty.is('enter',e)){
					//if(window.user_login='178'){
						$('body').addClass('bongmo');
					//}
					$('#rowed6 .jqgrid-new-row').length ? oper="add" : oper="edit";
					savedRow2 = $('#rowed6').jqGrid("getGridParam", "savedRow");
					jQuery("#rowed6").jqGrid('saveRow',savedRow2[0].id,null,null,{"extraparam" : {"oper":oper} }, aftersave,null,null,null,"POST");
				}		
			}

		}		
	})
						setTimeout(function(){
							var id_r = $('#rowed6').jqGrid('getGridParam', 'selrow');
		//alert("#"+id_r+"_CachDungLieuDung");
		$("#"+id_r+"_CachDungLieuDung").focusout(function(){
			if($("#"+id_r+"_CachDungLieuDung").val()==''){
				$("#"+id_r+"_CachDungLieuDung").val('');
			}
		});
	},100);	
}

function check_product_available(mathuoc,tenthuoc,id_thuoc,tendonvitinh){	
	kiemtra=false;	
	id_rowed6=$('#rowed6').jqGrid('getDataIDs');		 
	for(i=0;i<id_rowed6.length;i++){		
		var rowData = $('#rowed6').getRowData(id_rowed6[i]);				 
		if(rowData['ID_Thuoc']==id_thuoc){
			tooltip_message(tenthuoc+" đã có trên đơn thuốc này");
			kiemtra=true;			 
		}			   
	}	 
	if(kiemtra==false){	 	 
		$("#"+rowed6_curentsel+"_ID_Thuoc").val(id_thuoc);
		$(".dialog_dm_thuoc").dialog( "close" );
	}	
}

function create_combobox_inline(input,input1,dialog,grid,defaultvalue){				
	afterInit_combox_inline(input,dialog,grid,input1);
	init_combox_inline(input,input1,dialog,grid,defaultvalue);					
}	

function afterInit_combox_inline(input,dialog,grid,input1) { 
		$(input).wrap( "<span class='custom-combobox'></span>" );
		var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
			icons: {
				primary: "ui-icon-triangle-1-s"
			},
			text: false
		}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right "+input.substr(1)+"_button").click(function(event) {
			$(input).focus();	
			$(input).select();	
			if($(dialog).is(":visible")===true){				
				create_combobox_close_inline(input,dialog,input1,grid)				
			}else{				
				create_combobox_open(input,dialog);
				event.stopImmediatePropagation();				
				grid = $(grid);
				var columnNames = $(grid).jqGrid('getGridParam','colModel');
				grid[0].p.search = false;
				$.extend(grid[0].p.postData,{filters:""});							      
				grid.trigger("reloadGrid",[{current:true}]);						
			}
		});
	}	 

	function create_combobox_close_inline(input,dialog,input1,grid){
		$(dialog).hide();
		count = jQuery(grid).jqGrid('getGridParam', 'records');				
		if((count<=0)||($.trim($(grid).jqGrid('getGridParam', 'selrow'))=='')){

			$(input).val("");		
			$(input1).val(" ");				
		}				
		else{					
			var ids = $(grid).getDataIDs();
			var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
			var columnNames = $(grid).jqGrid('getGridParam','colModel');
			ten = $(grid).jqGrid('getCell', idcur, columnNames[0].name);										
			$(input1).val(idcur);			
			$(input).val(ten);	
		}					
	}	 
function init_combox_inline(input,input1,dialog,grid,defaultvalue){    
	jwerty.key('tab', false);

	if (typeof defaultvalue != 'undefined'){
		$(input).val(defaultvalue);	
			//$(input1).val(defaultvalue);
		}
		$(input).bind("click",function(event) {	
			event.stopPropagation();
		});
		$(grid).bind("click",function(event) {	
			$(input).focus();
			$(input).select();
		});




		$('body').bind("click",function(event) {
	//alert(input1);
	if($(dialog).is(":visible")===true){		
		create_combobox_close_inline(input,dialog,input1,grid)
	}
});


		$(dialog+' .ui-jqgrid-hbox').click(function(event) {
			event.stopPropagation();
		});


		$(input+','+dialog+' .ui-jqgrid-hbox').bind("keyup", function(e) { 
			var key = e.which;
			if(jwerty.is("enter",e)||jwerty.is("tab",e)){		
				if($(dialog).is(":visible")===true){
					$(grid).data('clicked', true);
					var idcur = $(grid).jqGrid('getGridParam', 'selrow');
					$(grid).jqGrid("setSelection",idcur, true);

					create_combobox_close_inline(input,dialog,input1,grid);
				}
			}else if(jwerty.is("esc",e)){
				if($(dialog).is(":visible")===true){
					$(grid).data('clicked', true);
					create_combobox_close_inline(input,dialog,input1,grid);
				}
			}else if(jwerty.is("↓",e)){
				$(grid).data('clicked', false);
				var idcur = $(grid).jqGrid('getGridParam', 'selrow');
				if($(dialog).is(":visible")===false){
					create_combobox_open(input,dialog)	
				}else{
					if(idcur==null){
						var ids = $(grid).getDataIDs();
						$(grid).jqGrid("setSelection",ids[0], true);
					}else{
						var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
						if (idcur == null) return;
						var ids = $(grid).getDataIDs();
						var index = $(grid).getInd(idcur);
						if (ids.length < 2) return;
						index++;
						if (index > ids.length)
							index = 1;
						$(grid).jqGrid("setSelection",ids[index - 1], true);
					}
				}

			}
			else if(jwerty.is("↑",e)){
				$(grid).data('clicked', false);
				var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
				if($(dialog).is(":visible")===false){
					create_combobox_open(input,dialog)	}
					else{
						if(idcur==null){
							var ids = $(grid).getDataIDs();
							$(grid).jqGrid("setSelection",ids[0], true);
						}else{

							var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
							if (idcur == null) return;
							var ids = $(grid).getDataIDs();
							var index = $(grid).getInd(idcur);
							if (ids.length < 2) return;
							index--;
							if (index == 0){
								index = ids.length;
							}
							$(grid).jqGrid("setSelection",ids[index - 1], true);
						}
					}
				}
				else{
					$(grid).data('clicked', false);
					if(key!=13&&key!=9&&key!=16&&key!=37&&key!=38&&key!=39&&key!=40&&key!=27){				
						create_combobox_open(input,dialog);
						grid = $(grid);
						var columnNames = $(grid).jqGrid('getGridParam','colModel');
						var searchFiler = $(input).val(), f;
						if (searchFiler.length === 0) {
							grid[0].p.search = false;
							$.extend(grid[0].p.postData,{filters:""});
						}
						f = {groupOp:"OR",rules:[]};
						f.rules.push({field:columnNames[0].name,op:"bw",data:searchFiler});               
						grid[0].p.search = true;
						$.extend(grid[0].p.postData,{filters:JSON.stringify(f)});         
						grid.trigger("reloadGrid",[{page:1,current:true}])					
						$(grid).jqGrid("setSelection",grid.getDataIDs()[0], true);				
					}
				}
			});	

}


function check_idthuoc(value,colname){	

//idrowed6=$('#rowed6').jqGrid('getGridParam','selrow')
ids_rowed6=$('#rowed6').jqGrid('getDataIDs');		
ids_rowed6=removeA(ids_rowed6, $('#rowed6 [editable=1]').attr('id'));

if($.inArray(value, ids_rowed6) > -1){			 
	return [false,'Thuốc đã có','ID_Thuoc1']
}else if($.trim(value)==''){
	return [false,'Chưa chọn thuốc','ID_Thuoc1']
}else{
	return[true,'']
}

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

function PhienCachDungThuoc(SoLuong,CachDung,DonVi,DuongDung){
console.log(SoLuong+"-"+CachDung+"-"+DonVi+"-"+DuongDung);	
	CachDung=CachDung.toLowerCase();	
	ketqua='';
	ketquadacbiet='';
	ChuoiTraVe='';
	A =CachDung.replace(/[^0-9]/g,"").length;
	nUse =CachDung.replace(/[^0-9]/g,"").length;	
	LayketquaChia='';	
	if (nUse == 0 || nUse==''){
		nUse = '1';
		LayketquaChia =' 1';
	}else{
		if (SoLuong == 2.25 || SoLuong == 3.75  || SoLuong == 5.25){
			LayketquaChia  = '3/4'
		}else{
			if ((SoLuong == 1.5 && nUse == 3) || (SoLuong==0.5 && nUse==1)){
				LayketquaChia = '1/2';
			}else{
				if ((SoLuong == 0.7 && nUse==2) || (SoLuong == 0.66 && nUse==2)){
					LayketquaChia = '1/3';
				}else{    			
					if (SoLuong == 0.6 ) {
						LayketquaChia = '2/3';
					}else{
						if (SoLuong == 2  && nUse == 4) {
							LayketquaChia = '1/2';
						}else{
							if ((SoLuong == 3  && nUse == 2) || (SoLuong == 6  && nUse == 4)){
								LayketquaChia = '1,5';
							}else{								
								if (SoLuong == 1.5 && nUse == 2){
									LayketquaChia = '3/4';
								}else{
									if ( SoLuong % nUse != 0){ // nếu chia có dư thì lấy phân số
										LayketquaChia = SoLuong+ '/'+ nUse;
									}else{
										LayketquaChia = SoLuong/nUse;
									}									
								}							
							}							 			
						}
					}
				}
			}     		
		}
	}

	if (SoLuong == 1.5 && nUse==2)   LayketquaChia='3/4';
	if (SoLuong == 0.5 && nUse==2)   LayketquaChia='1/4';
	if (SoLuong == 0.8 && nUse==1)   LayketquaChia='0.8';
	if (SoLuong == 0.3 && nUse==1)   LayketquaChia='0.3';
	if (SoLuong == 1.5 && nUse==1)   LayketquaChia='1.5';

	for (var i = 0, len = CachDung.length; i < len; i++) {		
		if(CachDung[i]=="1"){
			ketqua= ketqua +' Sáng ' + LayketquaChia + ' '+ DonVi+',';
			ketquadacbiet= ketquadacbiet +' Sáng ' +',';
		}
		if(CachDung[i]=="2"){
			ketqua= ketqua +' Trưa ' + LayketquaChia + ' '+ DonVi+',';
			ketquadacbiet= ketquadacbiet +' Trưa ' +',';
		} 
		if(CachDung[i]=="3"){
			ketqua= ketqua +' Chiều ' + LayketquaChia + ' '+ DonVi+',';
			ketquadacbiet= ketquadacbiet +' Chiều ' +',';
		}
		if(CachDung[i]=="4"){
			ketqua= ketqua +' Tối ' + LayketquaChia + ' '+ DonVi+',';
			ketquadacbiet= ketquadacbiet +' Tối ' +','
		} ;
		if(CachDung[i]=="n"){
			ketqua= ketqua +' sau khi ăn. ';
			ketquadacbiet= ketquadacbiet +' sau khi ăn. ';
		} 
		if(CachDung[i]=="d"){
			ketqua= ketqua +' trước khi ăn. ';
			ketquadacbiet= ketquadacbiet +' trước khi ăn. ';
		} 
		if(CachDung[i]=="a"){
			ketqua= ketqua +' 30 phút. ';
			ketquadacbiet= ketquadacbiet +' 30 phút. ';
		} 
		if(CachDung[i]=="b"){
			ketqua= ketqua +' 60 phút. ';
			ketquadacbiet= ketquadacbiet +' 60 phút. ';
		} 
		if(CachDung[i]=="c"){
			ketqua= ketqua +' 2 ngày 1 lần. ';
			ketquadacbiet= ketquadacbiet +' 2 ngày 1 lần. ';
		}
	}

	if (  DonVi.toLowerCase()!='cái' && DonVi.toLowerCase()!='bộ' && DonVi.toLowerCase()!='gói' && DonVi.toLowerCase()!='lít' && DonVi.toLowerCase()!='thùng'
		&& DonVi.toLowerCase()!='cuộn' && DonVi.toLowerCase()!='sợi' && DonVi.toLowerCase()!='hộp' && DonVi.toLowerCase()!='mét' && DonVi.toLowerCase()!='ký' ) {
		ChuoiTraVe=DuongDung + ' ngày '+ LayketquaChia +' '+DonVi+ ' - theo hướng dẫn';
} else{
	ChuoiTraVe=DuongDung+ketqua
}

if (   DonVi.toLowerCase()=='cái' || DonVi.toLowerCase()=='sợi' || DonVi.toLowerCase()=='bộ' || DonVi.toLowerCase()=='lít' || DonVi.toLowerCase()=='cuộn'
	|| DonVi.toLowerCase()=='hộp' || DonVi.toLowerCase()=='thùng' || DonVi.toLowerCase()=='mét' || DonVi.toLowerCase()=='ký' 
	||(! DuongDung.toLowerCase()=='uống' && DonVi.toLowerCase()=='gói' )){
	ChuoiTraVe='Dùng theo hướng dẫn';
}else if(DuongDung.toLowerCase()=='pha' && DonVi.toLowerCase()=='ống'){
	ChuoiTraVe='Pha dịch truyền theo hướng dẫn';
}else{
	ChuoiTraVe=DuongDung+ketqua;
	if(DuongDung.toLowerCase()=='bôi' && (DonVi.toLowerCase()=='tuýp' || DonVi.toLowerCase()=='lọ')){
		ChuoiTraVe=Duongdung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}else if(DonVi.toLowerCase()=='lọ' && (DuongDung.toLowerCase()=='xịt' || DuongDung.toLowerCase()=='nhỏ' )){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}else if((DonVi.toLowerCase()=='lọ' || DonVi.toLowerCase()=='tuýp' || DonVi.toLowerCase()=='gói') && DuongDung.toLowerCase()=='rửa'){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}else if((DonVi.toLowerCase()=='chai' || DonVi.toLowerCase()=='lọ')  &&  DuongDung.toLowerCase()=='gội đầu'){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet;
	}else if(DonVi.toLowerCase()=='chai'  || DonVi.toLowerCase()=='bịch'){
		ChuoiTraVe=DuongDung+'. '+ketqua+ ' ' + CachDung.replace(/\d+/g, '')+' '+ ' giọt/phút';
	}else if(DonVi.toLowerCase()=='lọ' && DuongDung.toLowerCase()=='uống'){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}else if((DonVi.toLowerCase()=='viên' || DonVi.toLowerCase()=='gói' || DonVi.toLowerCase()=='lọ') && DuongDung.toLowerCase()=='ngâm'){
		ChuoiTraVe=DuongDung+'. '+ketqua+ ' pha trong nước';
	}else if(DonVi.toLowerCase()=='viên' && DuongDung.toLowerCase()=='dùng'){
		ChuoiTraVe=DuongDung+' ngày: '+A+ ' lần theo hướng dẫn';
	}else if(DonVi.toLowerCase()=='lọ' && DuongDung.toLowerCase()=='uống'){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}		
}
return ChuoiTraVe;
}



function xuatthuoc(id_luotkham,ID_DonThuoc){
		var ids = $('#rowed4').jqGrid('getDataIDs'); 
			$('#xuatthuoc').button('disable');
			var ids = $('#rowed4').jqGrid('getDataIDs');
			dataToSend  ='{"id_luokham":'+JSON.stringify(id_luotkham);
			dataToSend +=',"id_donthuoc":'+JSON.stringify(ID_DonThuoc);
			dataToSend +=',"nguoigd":'+JSON.stringify("Bán lẻ");

			dataToSend += ',"rows":[';
			phancach = ",";
			phancach1 = "";
			for(i=0;i<=ids.length-1;i++){
				if($("#rowed4").jqGrid("getCell", ids[i], 'SoLuong')>0){
					dataToSend += phancach1 + '{"id_thuoc":"' +$("#rowed4").jqGrid("getCell", ids[i], 'ID_Thuoc')+ '"';
					dataToSend += phancach + '"phantramvat":"10"';
					dataToSend += phancach + '"id":"' + ids[i]+ '"';
					dataToSend += phancach + '"soluong":"' +$("#rowed4").jqGrid("getCell", ids[i], 'SoLuong')+ '"'
			        dataToSend += phancach + '"dongia":"' + $("#rowed4").jqGrid("getCell", ids[i], 'DonGia') + '"';
					dataToSend += phancach + '"TenThuoc":"' + $("#rowed4").jqGrid("getCell", ids[i], 'TenGoc') + '"';
					dataToSend += phancach + '"sl_bsyke":"' + $("#rowed4").jqGrid("getCell", ids[i], 'SoLuong') + '"';
					dataToSend += phancach + '"SoThuocThucXuat":"' + $("#rowed4").jqGrid("getCell", ids[i], 'SoLuong') + '"';
					dataToSend += phancach + '"sltx":"0"';
					dataToSend += phancach + '"bhyt":"0"';
					dataToSend += phancach + '"MienGiam":"0"}';
					phancach1 = ",";
				}
				
				 
			}
			dataToSend += ']}';
			//alert(dataToSend);
			dataToSend = jQuery.parseJSON(dataToSend);
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_tonkho&hienmaloi=1&kho=2&khobhyt=0',dataToSend).done(function(data){
			data=data.split('||')
				if(data[1]==0){
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_xuatthuoc&oper=update&hienmaloi=3&kho=2&khobhyt=0',dataToSend)
					.done(function( gridData ) { 
						//tooltip_message("Lưu thành công");
						$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet',{
								id_luotkham:window.ID_LuotKham,
								tienthu:window._thanhtien,
								idbenhnhan:window.id_benhnhan,
								iddonthuoc:window.id_donthuoc,
							}).done(function(data) {
								//xuatthuoc(ID_LuotKham,id_donthuoc);
								tooltip_message("Đã thanh toán thành công");
					jQuery("#rowed3").jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dauphieu&tu_ngay='+$("#tu_ngay").val()+'&den_ngay='+$("#den_ngay").val(),datatype:'json'}).trigger("reloadGrid");			
							})
			
					 })
					.fail(function() {tooltip_message( "error" );});
				}else{
					$('#dialog_sothuoc').html(data[0]).dialog('open');
				}
				 })
}


function check_soluong(){
	var id_row = $('#rowed6').jqGrid('getGridParam', 'selrow');	
	aa=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');
	tongcong_thuoc=parseFloat(aa)* parseFloat(convert_comma_dot_cacl($('#rowed6 #'+id_row+'_SoThuocThucXuat').val()));
	$('#'+id_row+'_ID_Thuoc').val();
	if(parseFloat(convert_comma_dot_cacl($('#rowed6 #'+id_row+'_SoThuocThucXuat').val()))<=0){
		alert('Số thuốc phải lớn hơn 0');
		setTimeout(function(){$('#rowed6 #'+id_row+'_SoThuocThucXuat').focus();},50)
	}else{
	 /*$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc_soluong&ds_kho='+ds_kho+'&soluong='+tongcong_thuoc+'&id_thuoc='+$('#'+id_row+'_ID_Thuoc').val()).done(function(data){
		data=data.split(';;');		
		if(data[1]==0){		
			window.thieuthuoc=1;
			$('#dialog_sothuoc').html(data[0]);		
			$('#dialog_sothuoc #tenthuocton').html('<strong>'+$('#'+id_row+'_ID_Thuoc1').val()+'</strong>')			
			$('#dialog_sothuoc').dialog('open');	
			$('.n_btn1').focus()
				
		}else{*/
			$('#'+id_row+'_ThanhTien').focus();
		/*}
	})	*/	
}
}

</script>

