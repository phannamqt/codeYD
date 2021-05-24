<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style>

.ui-widget-overlay {
		opacity:0.01;
		filter: alpha(opacity=1);
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
		/*overlay trong suot*/
	 }

	 input{
		 -webkit-user-select : text;
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
	.custom-combobox-input {
		width:103px !important;

	}
	#phongban1 {
		width:190px !important;

	}
	#ui-id-3.ui-menu {
  	width: 800px!important; display:none; position:absolute;
	box-shadow:0px 0px 3px #333;
   }
   .form_row div{
	   margin-top:1px;
   }
   input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}
#luotkhamnoitrutontai{
	height:40px !important;
}
.ui-button .ui-button-text {
    display: inline-flex;
}
#clear_all{
	width:133px;
}
</style>
<body>
	<div id="dialog-session" style="display:none">
		<div class="form_row">
        <label style="width:70px;">Phòng ban</label>
        <span><select name="phongban" id="phongban" ></select><input type="text" style="display:none" name="text_phongban" id='text_phongban'></span>
		<a style="margin-left:30px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="capnhat" href="#">Cập nhật<span class="ui-icon ui-icon-person"></span></a>
	    </div>
	    <div class="form_row2">
	        <label style="width:70px;">Tầng:</label>
	        <span><input type="text" name="text_tang" id='text_tang' style="margin-left:41px; width:225px;" ></span>
	    </div>
	      <div class="form_row2">
	        <label style="width:70px;">Kho:</label>
	        <span><input type="text" name="text_kho" id='text_kho' style="margin-left:47px; width:225px;" ></span>
	    </div>
	     <div class="form_row3">
	        <label style="width:70px;">Kho BHYT:</label>
	        <span><input type="text" name="text_kho_bhyt" id='text_kho_bhyt' style="margin-left:15px; width:225px;" ></span>
	    </div>
	    
	</div>
<div id="luotkhamnoitrutontai" style="display:none;">
 Bệnh nhân đã có một lượt khám nội trú đang chờ,bạn không thể tạo lượt khám mới
</div>
<div id="quanhuyen_null" title="Thông báo"  style="display:none;">
 Thông tin xã phường của bệnh nhân bắt buộc để tạo bệnh án nội trú.
</div>
<div id="dialog-chidinhkham" title="Thông báo" style="display:none">
 Hiện tại tất cả các lượt khám của bệnh nhân <span style="font-weight:bold" id="tenbn"></span> đã thực hiện. Bạn có muốn tạo lượt khám cho bệnh nhân này không?
</div>
<div id="luotkhamtontai" style="display:none">
 Bệnh nhân đã có một lượt khám đang chờ,bạn không thể tạo lượt khám mới
</div>
<div class="ui-widget-contentxxxxxxxx" style="height:99%">

 <table style="width:100%" id="container">
    <td style="width: 20%; vertical-align: top;">
			<fieldset id="fieldset" style="height: 542px; width: 380px;">
				<legend>Thông tin tìm kiếm</legend>
					<table style="width:100%">
						<tr>
							 
							<td><label for="holot" style="display: inline-block; width: 45px;"><?php lang('holotBn')?>: </label><input id="holot" class="focus_1" name="holot" style="width:150px;" type="text"></td>
							<td rowspan="4"><img id="avatar_bn" src="" class="non_image"  class="rounded mx-auto d-block" data-holder-rendered="true" style="width: 150px; height: 110px;"></td>
						</tr>
						<tr>
							<td><label for="ten" style="display: inline-block; width: 45px;"><?php lang('ten')?>: </label><input id="ten" class="focus_2" name="ten" style="width:150px;" lang="search" type="text"></td>
						</tr>
						
						<tr>
							<td><label for="mabn" style="display: inline-block; width: 45px;"><?php lang('maBN')?>:</label><input id="mabn" style="width:150px;" class="focus_3" name="mabn" type="text"></td>
						</tr>
						<tr>
							<td><label for="namsinh">Năm sinh/tuổi:</label> <input id="namsinh" class="focus_6" style="width:40px;"  name="namsinh" type="text"> <input id="nam" class="focus_7" style="margin-left:5px " type="checkbox" name="nam" value="0"><?php lang('nam')?> 
									 <input id="nu" class="focus_8" type="checkbox" name="nu" value="1"><?php lang('nu')?> </span></td>
						</tr>

						<tr>
							<td><label for="dienthoai" style="display: inline-block; width: 77px;"><?php lang('dthoai')?>:</label><input id="dienthoai" class="focus_4" name="dienthoai" style="width:130px;" type="text"> </td>
						</tr>
						
						<tr>
							<td colspan=2><label for="diachi" style="display: inline-block; width: 45px;"><?php lang('dchi')?>:</label><input id="diachi" class="focus_5" style="width:320px;" name="diachi" type="text"></td>
						</tr>
						
						<tr>
							<td colspan=2><label for="diung" style="display: inline-block; width: 45px;"><?php lang('diung')?>:</label><input id="diung" class="focus_9" type="text" style="width:320px;" name="diung"></td>
						</tr>
						
						<tr>
							<td colspan=2><label for="quanhe" style="display: inline-block; width: 45px;"><?php lang('ghichu')?>:</label><input id="quanhe" class="focus_12" type="text" style="width:320px;" name="quanhe"></td>
						</tr>
						<tr>
							<td colspan=2><button id="save_data"><span class="ui-icon ui-icon-search"></span> <?php lang('timkiem')?> </button> <button id="clear_all"><span class="ui-icon ui-icon-cancel"></span><?php lang('nhaplai')?>
							</button> <button id="btn_add"><span class="ui-icon ui-icon-add"></span>Thêm mới BN
							</button></td>
						</tr>
					</table>
					 
					</fieldset>
	</td>
    <td style="width80%;">
		<fieldset id="fieldset" style=" ">
		<legend>Kết quả tìm kiếm</legend>
		<table id="rowed3" ></table>
		<div  id="prowed3" ></div>
		</fieldset>
	</td>
  </tr>
</table>
</div>
</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function() {
	window.isbarcode=0;
	window.isvantay=0;
	$("#save_data,#clear_all,#btn_add").button();
	$( "#dialog-session" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(30)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(35)).toFixed(0),
            modal: true,
           
            });
	//check_session();
	openform_shortcutkey();
	$('input').click(function(e){
		//$(e.target).select();
		})
		
	$('#btn_add').click(function(e){
		parent.postMessage("addbenhnhan;"+$('#holot').val()+";"+$('#ten').val()+";"+$('#dienthoai').val()+";"+$('#diachi').val()+";"+$('#namsinh').val()+";"+$('#nghenghiep').val()+";"+$('#quanhe').val()+";"+$('#congty_hidden').val()+";", "*");
	})
	jwerty.key('f10', false);
	jwerty.key('f7', false);
	$('#chuandoan').bind('keydown', function (e) {
			if (jwerty.is('enter',e)) {
				 $("#loaikham").focus();
			}
		});
	$('#loaikham').bind('keydown', function (e) {
			if (jwerty.is('enter',e)) {
				 $("#nghenghiep1").focus();
			}
		});
	 $(document).keyup(function(e) {
		if (e.keyCode === 121) {
			$("#tamung_rowed3").click();
		}
	 });
	 $(document).keyup(function(e) {
		if (e.keyCode === 118) {
			$("#chidinhkham_rowed3").click();
		}
	 });

   $('#sophieukham').bind('keydown', function (e) {
      if (jwerty.is('enter',e)) {
         $("#goiloa").focus();
      }
    });

   /* $('body').bind('keydown', function (e) {
      if (jwerty.is('ctrl+alt+a',e)) {
            print_list("http://<?=$_SERVER['HTTP_HOST']?>/qlbv"); 
      }
    }); */

	 $("#luotkhamnoitrutontai").dialog({
		autoOpen:false,
        height:100,
        width: 400,
        modal: true,
        title: 'Thông báo',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {
			  $( this ).dialog( "close" );
			},
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {
			var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#rowed3').getRowData(selr);
			//parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
			parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+window.n_luotkham+';'+selr+';;;'+rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan']+'&oper=edit&id_ttluotkham='+window.n_luotkham+'&fromsearch=true&doituong=','*');
        },

    });
	$("#quanhuyen_null").dialog({
		autoOpen:false,
        height:150,
        width: 250,
        modal: true,
        title: 'Thông báo',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {
			  $( this ).dialog( "close" );
			},
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {
			var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#rowed3').getRowData(selr);
		//	var rowData =  $('#rowed3').getRowData(id);
			 parent.postMessage("editbenhnhan;"+selr+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
        },

    });

	 $( "#dialog-chidinhkham" ).dialog({
      resizable: false,
	  autoOpen:false,
	  width:380,
      height:160,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
		  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
		  var rowData =  $('#rowed3').getRowData(id_row);
		  if(window.isbarcode==1){	
				if(rowData["ID_The"]==''){
					parent.postMessage("taoluotkham;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
				}else{
					parent.postMessage("taoluotkham_barcode;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"]+";"+rowData["ID_The"], "*");
				}
		  }else{
		 			parent.postMessage("taoluotkham;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
		  }			  
							
		 
        },
        'NO': function() {
          $( this ).dialog( "close" );
		  parent.postMessage('open_idbenhnhan;chidinhkham;'+window._n_idluotkham+';;;;','*');
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus();
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus();
					  $('.n_btn1').focusout();
				  }
				})
		}
        
    });
	
	  $("#luotkhamtontai").dialog({
		autoOpen:false,
        height: ($(window).height() / 100 * parseFloat(30)).toFixed(0),
        width: ($(window).width() / 100 * parseFloat(50)).toFixed(0),
        modal: true,
        title: 'Thông báo',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {

			  $( this ).dialog( "close" );


			},
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {
			parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
        },

    });

create_combobox('#chuandoan', '#chuandoan1', ".chuan_doan", "#chuan_doan", create_chandoan, 500, 400, 'Người thực hiện', 'data_chandoan',0);
create_combobox('#loaikham', '#loaikham1', ".loai_kham", "#loai_kham", create_loaikham, 500, 400, 'Người thực hiện', 'data_loaikham',0);



/*	window.congty=	 $.ajax({
		url: "pages.php?module=web_services&function=get_auto_complete2&action=index&store=GD2_congty_autocomplex",
		dataType:"json",
		async:false
	}).responseText;*/
	//window.congty=jQuery.parseJSON(window.congty);
	window.nghenghiep = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NgheNghiep&id=ID_NgheNghiep&name=TenNgheNghiep', async: false, success: function(data, result) {
		if (!result)
			alert('Không load được tên');
		}}).responseText;
	create_combobox_new('#congty',create_congty,'bw','','data_congty',0);
	init_data();
	shortcut_key();
	create_grid();
	window.kiemtra_popup=false;
	jQuery(window).resize(function() {
	 	resize_control();
	});

  number_textbox('#sophieukham');
 $("#sophieukham").attr('maxlength','4');
 
 		setTimeout(function(){$("#holot").focus()},500); ;
		//phanquyen();
	})
function create_grid(){
	$("#rowed3").jqGrid({
   	url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_benh_nhan&p=0',
	datatype: "json",
   	colNames:['Id','<?php lang('maBN')?>','<?php lang('holotBn')?>','<?php lang('ten')?>','<?php lang('ngsinh')?>','<?php lang('nsinh')?>','<?php lang('gtinh')?>','<?php lang('dthoai')?>','<?php lang('dthoai2')?>','<?php lang('dchi')?>','<?php lang('ngnghiep')?>','<?php lang('nglienhe')?>','<?php lang('qhvoibn')?>','<?php lang('dtnguoilh')?>','<?php lang('ghichu')?>','<?php lang('ghichu')?>','','Số BHYT'],
   	colModel:[
		{name:'ID_benhnhan',index:'ID_benhnhan', width:"50%", editable:false,align:'left',hidden:true},
		{name:'MaBenhNhan',index:'MaBenhNhan', width:"60%", editable:true,align:'left',hidden:false},
		{name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"150%", editable:true,align:'left',hidden:false},
		{name:'TenBenhNhan',index:'TenBenhNhan', width:"80%", editable:true,align:'left',hidden:false},
		{name:'NgayThangNamSinh',index:'NgayThangNamSinh', width:"100%", editable:true,align:'left',hidden:false},
		{name:'NamSinh',index:'NamSinh', width:"65%", editable:true,align:'left',hidden:false},
		{name:'GioiTinh',index:'GioiTinh', width:"60%", editable:true,align:'left',hidden:false,formatter: "select",editoptions:{value:"0:<?php lang('nam')?>;1:<?php lang('nu')?>"}},
		{name:'DienThoai1',index:'DienThoai1', width:"100%", editable:true,align:'left',hidden:false},
		{name:'DienThoai2',index:'DienThoai2', width:"100%", editable:true,align:'left',hidden:true},
		{name:'DiaChi',index:'DiaChi', width:"200%", editable:true,align:'left',hidden:false},
		{name:'ID_NgheNghiep',index:'ID_NgheNghiep', width:"50%", editable:true,align:'left',hidden:true,formatter: "select",editoptions:{value:nghenghiep}},
		{name:'TenNguoiLienHe',index:'TenNguoiLienHe', width:"100%", editable:true,align:'left',hidden:true},
		{name:'QuanHeVoiBN',index:'QuanHeVoiBN', width:"50%", editable:true,align:'left',hidden:true},
		{name:'DienThoaiNguoiLienHe',index:'DienThoaiNguoiLienHe', width:"100%", editable:true,align:'left',hidden:true},
		{name:'GhiChu',index:'GhiChu', width:"40%", editable:true,align:'left',hidden:true},
		{name:'QuanHeVoiBenhVien',index:'QuanHeVoiBenhVien', width:"200%", editable:true,align:'left',hidden:false},
		{name:'ID_The',index:'ID_The', width:"150%", editable:true,align:'left',hidden:true},
		{name:'SoThe',index:'SoThe', width:"150%", editable:true,align:'left',hidden:true}
   	],
		loadonce: false,
		scroll: 1,
		hidegrid: false,
		rowNum: 100,
		pginput:false,
		rowList:[],
		pager: '#prowed3',
		sortname: 'ID_benhnhan',
		viewrecords: true,
		shrinkToFit:true,
		sortorder: "desc",
		//caption:"<?php lang('danhmucbn')?>",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
		window.id_benhnhan=id;
		 $.post("pages.php?module=web_services&function=create_bn&action=index&id_benhnhan="+id);
				$("#benhan_rowed3").removeClass('ui-state-disabled');
				$("#tamung_rowed3").removeClass('ui-state-disabled');
				$("#datlich_rowed3").removeClass('ui-state-disabled');
				$("#bookmark_rowed3").removeClass('ui-state-disabled');
				$("#edit_rowed3").removeClass('ui-state-disabled');
				$("#chidinhkham_rowed3").removeClass('ui-state-disabled');
				$("#taobenhannoitru_rowed3").removeClass('ui-state-disabled');
        $("#denghithanhtoan_rowed3").removeClass('ui-state-disabled');
        $("#cauhinhdoituong_rowed3").removeClass('ui-state-disabled');
		$.ajax({
			type: 'POST',
			async : true,
			url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_get_avatar_benhnhan&id_benhnhan='+window.id_benhnhan,
			data: {},
			success: function(data) {
				data = $.parseJSON(data);
				if(data.check == 'true'){
				$('#avatar_bn').attr('src','data:image/jpeg;base64,'+data.avatar);
				var images = new Image();
				images.src = $('#avatar_bn').attr('src');
				 
				}else{
					$('#avatar_bn').attr('src','');
				}
		 }
		});
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
			var rowData =  $('#rowed3').getRowData(id);
				  parent.postMessage("editbenhnhan;"+id+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
 		},
		loadComplete: function(data) {
			if(window.isbarcode==1){	
				var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
				for(var i=0;i < tmp1.length;i++){	
					var rowData = $("#rowed3").getRowData(tmp1[i]);			
					if($.trim(rowData["ID_The"])!=''){		   
						$("#rowed3").jqGrid('setCell',tmp1[i],"SoThe","",{'background-color':'red'});		
					}					
				}
			}
			
			if(window.isbarcode==1){	
				var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
				for(var i=0;i < tmp1.length;i++){	
					var rowData = $("#rowed3").getRowData(tmp1[i]);			
					$("#mabn").val(rowData["MaBenhNhan"])				
				}
				window.isvantay=0;
			}
			
			
			
			var myUrl = jQuery("#rowed3").jqGrid('getGridParam', 'url');
			window.count = jQuery("#rowed3").jqGrid('getGridParam', 'records');
			var id_rowed3 = $("#rowed3").getDataIDs();
			$("#datlich_rowed3").addClass('ui-state-disabled');
			$("#bookmark_rowed3").addClass('ui-state-disabled');
			$("#edit_rowed3").addClass('ui-state-disabled');
			$("#benhan_rowed3").addClass('ui-state-disabled');
			$("#tamung_rowed3").addClass('ui-state-disabled');
			$("#chidinhkham_rowed3").addClass('ui-state-disabled');
			$("#denghithanhtoan_rowed3").addClass('ui-state-disabled');
			$("#cauhinhdoituong_rowed3").addClass('ui-state-disabled');
			$("#taobenhannoitru_rowed3").addClass('ui-state-disabled');
			if(count<=0){
				if(getURLParameter ('p',myUrl)==1){
					if(window.kiemtra_popup==false){
						dialog_datlich_callback("Thông báo:", "300px", "150px", "4732479", "",".thongbao");
					}
				}

			}else{
				if($.trim($('#rowed3').jqGrid('getGridParam', 'selrow'))==''){
				$("#rowed3").jqGrid("setSelection",id_rowed3[0], true);
				}
			}
		}
	});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false, edit: false,addtext:'<?php lang('thembn')?>',edittext:"<?php lang('sua')?>", del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
		 addfunc: function(){
			
				// parent.postMessage("addbenhnhan;"+$('#holot').val()+";"+$('#ten').val()+";"+$('#dienthoai').val()+";"+$('#diachi').val()+";"+$('#namsinh').val()+";"+$('#nghenghiep').val()+";"+$('#quanhe').val()+";"+$('#congty_hidden').val()+";", "*");
			},
			 editfunc: function(id){
				  var rowData =  $('#rowed3').getRowData(id);
				if(window.isbarcode==1){	
					if(rowData["ID_The"]==''){
						parent.postMessage("editbenhnhan;"+id+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
					}else{
						parent.postMessage("editbenhnhan_barcode;"+id+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"]+";"+rowData["ID_The"], "*");
					}
			   	}else{
				  parent.postMessage("editbenhnhan;"+id+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
				}			  
			}
	}, //options
		{}, // edit options
		{}, // add options
		{}, // del options
		{} // search options
	);
	resize_control();
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {} } );
	
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('taolk')?>", buttonicon: 'ui-icon-document-b',id : 'datlich_rowed3',
            onClickButton: function() {
				var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  var rowData =  $('#rowed3').getRowData(id_row);
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+id_row).done(function(data){
				    data = $.trim(data);
					data = data.split(';');
					if(data[1]=='KetThucKham'){
							if(window.isbarcode==1){	
									if(rowData["ID_The"]==''){
										 parent.postMessage("taoluotkham;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
									}else{
										 parent.postMessage("taoluotkham_barcode;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"]+";"+rowData["ID_The"], "*");
									}
								}else{
								   parent.postMessage("taoluotkham;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
							}			  
							
							
				 		  
					}else{
						
						if(data[2]=='46'){
							
						}else{
							window.luotkham=data[0];
							window.tenbn=rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"];
							$('#luotkhamtontai').dialog('open');
						}
					}
				})



            },
            title: "<?php lang('taolk')?>",
            position: "last"
    });
	
	/*	
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('datlichhentk')?>[F9]", buttonicon: 'ui-icon-bookmark',id : 'bookmark_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
				  var rowData =  $('#rowed3').getRowData(id_row);
				  parent.postMessage("datlichhen;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
            },
            title: "<?php lang('datlichhentk')?>[F9]",
            position: "last"
    });
	
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('lichlv')?>", buttonicon: '',id : 'lichlv_rowed3',
            onClickButton: function(){
				   parent.postMessage("motab_chung;lich_lam_viec", "*");
            },
            title: "<?php lang('lichlv')?>",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('dslamsang')?>", buttonicon: '',id : 'dslamsang_rowed3',
            onClickButton: function() {
				   parent.postMessage("motab_chung;DS_XepHang_LamSang", "*");
            },
            title: "<?php lang('dslamsang')?>",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('dstrakqua')?>", buttonicon: '',id : 'dstrakqua_rowed3',
            onClickButton: function() {
				parent.postMessage('open_idluotkham;danhsachhentraketqua;;;;;','*');
            },
            title: "<?php lang('dstrakqua')?>",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('benhan')?>", buttonicon: 'ui-icon-note',id : 'benhan_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
				  var rowData =  $('#rowed3').getRowData(id_row);
				  parent.postMessage('benhan_luotkham;benh_an;undefined;'+id_row+';'+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"], "*");
            },
            title: "<?php lang('benhan')?>[F6]",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('tamung')?>", buttonicon: '',id : 'tamung_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  parent.postMessage('open_idbenhnhan;tam_ung;;'+id_row+';;;','*');
				//  var rowData =  $('#rowed3').getRowData(id_row);
				//  parent.postMessage('benhan;'+id_row+';'+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"], "*");
            },
            title: "<?php lang('tamung')?>[F1]",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('cdinhkham')?>", buttonicon: '',id : 'chidinhkham_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  //alert(id_row);
				  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=get_idluotkhamcuoi&id_benhnhan='+id_row).done(function(data){
				    data = $.trim(data);
					var rs=data.split('|||');
					window._n_idluotkham=rs[1];
					if(rs[0]==1){
						//alert(data);
						parent.postMessage('open_idbenhnhan;chidinhkham;'+window._n_idluotkham+';;;;','*');
					}else if(rs[0]==0){
						var rowData =  $('#rowed3').getRowData(id_row);
						$('#tenbn').html(rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan']);
						$('#dialog-chidinhkham').dialog('open');
					}else if(rs[0]==2){
						tooltip_message("Bệnh nhân chưa có lượt khám");
					}
				  });
				
            },
            title: "<?php lang('cdinhkham')?>[F7]",
            position: "last"
    });
 
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('dnttoan')?>", buttonicon: '',id : 'denghithanhtoan_rowed3',
            onClickButton: function() {
              var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');

              $.cookie("in_status", "print_preview");
      dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&xemtruocin=1&action=denghithanhtoan&header=top&id_benhnhan="+id_row+"&type=report&id_form=10",'denghithanhtoan');
     
            },
            title: "<?php lang('dnttoan')?>",
            position: "last"
    });









    $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "P.Giữ xe", buttonicon: '',id : 'invouchergiuxe_rowed3',
      onClickButton: function() {
        var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');

      
          var rowData =  $('#rowed3').getRowData(id_row);
       // alert(rowData['TenBenhNhan']);

      
       $.post('pages.php?module=web_services&action=check_diemtichluy&id_benhnhan='+id_row).done(function(data) {
      

          alert('Điểm tích lũy: '+data+'- vé giữ xe 3 điểm');
          if (data>=3)
          {
             $.cookie("in_status", "print_preview");
             dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&xemtruocin=1&action=voucher_nhaxe&header=top&MaBenhNhan="+rowData['MaBenhNhan']+"&id_benhnhan="+id_row+"&type=report&id_form=10",'denghithanhtoan');
          }
          else
          {
            alert('Không đủ điểm tích lũy');
          }
        });

      },
      title: "<?php lang('dnttoan')?>",
      position: "last"
    });




  $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Cấu hình ĐT-BN", buttonicon: '',id : 'cauhinhdoituong_rowed3',
            onClickButton: function() {
              var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
              elem=42432543433543;   
            dialog_main("Cấu hình bệnh nhân - đối tượng giảm giá" , 25, 50, elem, "pages.php?module=danhmuc&view=cauhinh_benhnhan_doituong_giamgia&id_form=2322&id_loai=undefined&idbenhnhan="+id_row)
            $(".frame_42432543433543").css("width","300px");
            $(".frame_42432543433543").css("display","block");
            $(".frame_42432543433543").css("margin","0 auto");
            },
            title: "Cấu hình ĐT-BN",
            position: "last"
    });
$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tạo B.án nội trú", buttonicon: '',id : 'taobenhannoitru_rowed3',
            onClickButton: function() {
				 var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				 var rowData = jQuery('#rowed3').getRowData(id_row);
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check_noitru&id_benhnhan='+id_row).done(function(data){
				    data = $.trim(data);
					data = data.split(';');
					if(data[1]=='KetThucKham'){
						$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_getthongtinnoitrubyidbenhnhan&id_benhnhan='+id_row).done(function(data){
							data = $.trim(data);
							data = data.split('|||');
							var phieuvaovien=data[0];

							if(phieuvaovien=='null'){
								if(data[1]=='null' || data[1]==0){
									$("#quanhuyen_null").dialog('open');
								}else{
								 parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;;'+id_row+';;;'+rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan']+'&oper=add&fromsearch=true&doituong=','*');
								}
							}else{
								phieuvaovien=phieuvaovien.split(';');
								parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+phieuvaovien[0]+';'+id_row+';;'+phieuvaovien[1]+';'+phieuvaovien[2]+'&doituong='+phieuvaovien[3]+'&diachibaotin='+phieuvaovien[4]+'&oper=add','*');
							}


						});


					}else{
						window.n_luotkham=data[0];
						window.n_tenbn=rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"];
						$('#luotkhamnoitrutontai').dialog('open');

					}
				})
            },
            title: "Tạo B.án nội trú",
            position: "last"
    });*/
}
function load_phong_ban(status){
	window.phongban = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhomThuoc&id=ID_NhomThuoc&name=TenNhomThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;

	if(status==true){
		$("#rowed3").setColProp('TenPhongBan', { editoptions: { value: phongban} });

	}
}
function shortcut_key(){
	jwerty.key('f5', false);jwerty.key('f4', false);jwerty.key('f3', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f10', false);jwerty.key('f12', false);
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f5',e)) {
				 $(".ui-icon-cancel").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f4',e)) {
				 $(".ui-icon-pencil").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f3',e)) {
				 $(".ui-icon-plus").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f8',e)) {
				 $(".ui-icon-trash").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f9',e)) {
				 $(".ui-icon-bookmark").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f11',e)) {
				 $(".ui-icon-refresh").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f12',e)) {
				 $(".ui-icon-document-b").trigger("click");
			}
		});

}





 function GoiLoa(SoLk,ipClient,iD_LuotKham)
    {

        var chuoiGoi='&SoLk='+SoLk+'&n_nhomgoi=2'+'&ipClient='+ipClient+'&oper=default';
       // alert(chuoiGoi);
         $.post('pages.php?module=web_services&action=controllerSendSocket&strFromClient=' + chuoiGoi+'&oper=default').done(function(data)
        {
            if ($.trim(data) == '1') {
                tooltip_message("đã cập nhật hệ thống");

               
            }
       

        });


    }



function GoiLoa2(SoLk,ipClient,iD_LuotKham)
    {
       /* var chuoiGoi='&SoLk='+SoLk+'&n_nhomgoi=3';
       // alert(chuoiGoi);
         $.post('pages.php?module=web_services&action=controllerSendSocket&strFromClient=' + chuoiGoi).done(function(data)
        {
            if ($.trim(data) == '1') {
                tooltip_message("đã cập nhật hệ thống");

               
            }
       

        });*/
        //dialog_main("IP  " + ipClient+" - Số phiếu khám "+SoLk, 80, 50, 5674365743257, "pages.php?module=web_services&action=GoiLoaTuyChinh&type=test&id_form=41&ipClient="+ipClient+"&SoLk="+SoLk);

         goiloa_dialog_main("IP  " + ipClient+" - Số phiếu khám "+SoLk, 830, 350, "pages.php?module=web_services&view=goi_loa_tuy_chinh&action=index&id_form=41&type=test&ipClient="+ipClient+"&SoLk="+SoLk);


    }









$("#dsdt").click(function(){
 /*var from='2015-1-1';

  var to='2015-1-15';
       window.open("pages.php?module=report&view=hanhchinh&action=ds_benhnhan&type=excel&fromdate="+from+"&todate="+to);*/


        $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=socket').done(function(data) {
               //alert(data);
              // khoaForm(1,window.userlogin);
              });

  })
function init_data(){
	$("#save_data").click(function(){
		
		search_bn();
	})
	$("#clear_all").click(function(){
		clear_all();
	})
    $("#goiloa").click(function(){
    
   // alert();
       var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";
       var SoLk=$('#sophieukham').val();
    GoiLoa(SoLk,ipClient,1);
     $("#holot").focus();
  })
	//create_select("#nghenghiep",window.nghenghiep);
	//create_select("#loaikham",window.loaikham);
	//create_select("#quanhe",window.quanhe);
	//autocompleted_combobox("#quanhe");
	autocompleted_combobox("#nghenghiep");
	//autocompleted_combobox("#loaikham");
	//autocomplex_mutil("#congty",congty,"#congty1");
 $("#holot").focus();
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);
	   jwerty.key('shift+enter', false);
	   
	   $('#container input[type=text],#container textarea,#container input[type=checkbox],#container span input,#container a#save_data,#container a#clear_all,#container a#bndk,#container a#goiloa').bind("keydown", function(e) {
		if ($("#container a#save_data,#container a#clear_all,#container a#bndk").is(":focus")){
				 if (jwerty.is("↓",e)||jwerty.is("tab",e)) {
					 var inputs = $(this).parents("#container").eq(0).find("a#save_data,a#clear_all,a#bndk");
					 var idx = inputs.index(this);
						  if (idx == inputs.length - 1) {
							$("#holot").focus();
						} else {inputs[idx + 1].focus();}
				 }else if(jwerty.is("shift+tab",e)||jwerty.is("↑",e)){
						var inputs = $(this).parents("#container").eq(0).find("a#save_data,a#clear_all,a#bndk");
						var idx = inputs.index(this);
					 if (idx >=0) {
						if(idx==0){;
						 $("#congty").focus();
						 $("#congty").select();
						}else{inputs[idx -1].focus();
						  inputs[idx - 1].focus();
						}
					}
			    }else if(jwerty.is("shift+enter",e)){
					search_bn();
				}
			}
		else if ($("#container input[type=text],#container textarea,#container input[type=checkbox],#container span input").is(":focus")){
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
               	focus_tam=$(e.target).attr('class').split('_');
				auto_search();
				$('.focus_'+(parseInt(focus_tam[1])+1)).focus();
				$('.focus_'+(parseInt(focus_tam[1])+1)).select();

             }else if(jwerty.is("shift+enter",e)){
					search_bn();
			 }
			 else if(jwerty.is("shift+tab",e)){

			 }else if (jwerty.is("↓",e)){
				if(window.count>0){

					var idcur = $('#rowed3').jqGrid('getGridParam', 'selrow');

						if(idcur==null){
						var ids = $('#rowed3').getDataIDs();
						$('#rowed3').jqGrid("setSelection",ids[0], true);
						}else{
					  var idcur = $('#rowed3').jqGrid('getGridParam', 'selrow')
					  if (idcur == null) return;
					  var ids = $('#rowed3').getDataIDs();
					  var index = $('#rowed3').getInd(idcur);
					  if (ids.length < 2) return;
					 index++;
					  if (index > ids.length)
						index = 1;
					  $('#rowed3').jqGrid("setSelection",ids[index - 1], true);
						}
				}

			}else if (jwerty.is("↑",e)){

						var idcur = $('#rowed3').jqGrid('getGridParam', 'selrow')


						if(idcur==null){
						var ids = $('#rowed3').getDataIDs();
						$('#rowed3').jqGrid("setSelection",ids[0], true);
						}else{

					  var idcur = $('#rowed3').jqGrid('getGridParam', 'selrow')
					  if (idcur == null) return;
					  var ids = $('#rowed3').getDataIDs();
					  var index = $('#rowed3').getInd(idcur);
					  if (ids.length < 2) return;
					 index--;
					  if (index == 0){
						index = ids.length;
					  }
					  $('#rowed3').jqGrid("setSelection",ids[index - 1], true);
						}
					}

		}
        });


}


function auto_search(){
	if($.trim($('#ten').val())!=''||$.trim($('#mabn').val())!=''||$.trim($('#sampleID').val())!=''){
		search_bn()
	}

}


function search_bn(){
	window.isbarcode=0;	
	i=0;
	phancach="";
	dataToSend ='{';
	$('#rowed3').setGridParam({postData: null});
	$('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){
			if(i>0){
			  phancach=",";
			}
			dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
			i++;
		})
		dataToSend +='}';		
		dataToSend = jQuery.parseJSON(dataToSend);		
		$('#rowed3').setGridParam({postData: dataToSend,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_benh_nhan&p=1'}).trigger('reloadGrid');

}

 function autocomplex_mutil(input,data,id) {
			 var isOpen = false;
			_init(input,data,id);
			afterInit(input,isOpen);


	};
 function afterInit(input,isOpen) {

			var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
			icons: {
				primary: "ui-icon-triangle-1-s"
			},
			text: false
		}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right").click(function(event) {
			$(input).focus();
			wasOpen = $(input).autocomplete("widget").is(":visible");

			if (isOpen) {
				$(input).autocomplete("close");
				isOpen = false;
			} else {
				isOpen = true;
				$(input).autocomplete("search", "");
				event.stopImmediatePropagation();
			}
		});
	 }
 function _init(input,data,id) {
		$(input).autocomplete({
			position: {
				my : "right top",
				at: "right bottom"
			},
			source: data,
			minLength: 0,
			select: function (event, ui) {
						$(id).val(ui.item.id);
       			 },
			open: function(event, ui) {
			}  ,
			autoFocus :true,
			}).data("uiAutocomplete")._renderItem = function (ul, item) {
			if($(input).val()==""){newid=item.label}
			else{
					var newid = String(item.label).replace(
					new RegExp(this.term, "gi"),
					"<strong style='color:#F60'>$&</strong>");}
					return $("<li ></li>")
				.data("item.autocomplete", item)
				.append("<a style='width:320px;display: inline-block!important;vertical-align:top'>" + newid + "</a> <a style='width:120px;display: inline-block!important;vertical-align:top'>"+ item.row2 +"</a> <a style='width:300px;display: inline-block!important;vertical-align:top'>"+ item.row3 +"</a> ")
				.appendTo(ul);
				};
			 }	;

	function clear_all() {
			$('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked,span input').each(function()
			{
				if((this.name=="nam")||(this.name=="nu")){
				$(this).prop('checked', false);
				}else{
				$(this).val("");
				}
			})
			$("#holot").focus();


	};
	function getURLParameter(name,myUrl) {
   			 return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(myUrl)||[,""])[1].replace(/\+/g, '%20'))||null;
	}
	function callback(){

	}
	function dialog_datlich_callback(title, width, height, elem, links,form) {
	$("body").append("<div class='ui-jqdialog modal" + elem + "'>Không tìm thấy bệnh nhân.Bạn có muốn thêm mới </div>");
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
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Yes": function() {
				parent.postMessage("addbenhnhan;"+$('#holot').val()+";"+$('#ten').val()+";"+$('#dienthoai').val()+";"+$('#diachi').val()+";"+$('#namsinh').val()+";"+$('#nghenghiep').val()+";"+$('#quanhe').val()+";"+$('#congty_hidden').val()+";", "*");
			 // dialog_add_dm("Thêm mới bệnh nhân",100,90,elem,'pages.php?module=hanhchinh&view=them_moi_benhnhan&id_form=53&id_loai=undefined&holotbn='+$('#holot').val()+'&tenbn='+$('#ten').val()+'&oper=add2',callback);
			  $( this ).dialog( "close" );
			},
			"No": function() {
			  $( this ).dialog( "close" );
			}
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {


			$(this).dialog( "close" );
            $(this).remove();
			window.kiemtra_popup=false;
        },
        hide: {
            effect: "fadeOut",
            duration: 500,
        },
        open: function(event, ui) {
			window.kiemtra_popup=true;
			 $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus();
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus();
					  $('.n_btn1').focusout();
				  }
				})

        },


    });

}



function create_chandoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Chẩn đoán'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},

            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: true,
            modal: true,
            rowNum: 50,
            rowList: [],
            height: 300,
            width: 370,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
				            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_loaikham(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên loại khám','Tên nhóm'],
            colModel: [
                {name: 'abc', index: 'abc', hidden: false},
                {name: 'abc1', index: 'abc1', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 100000,
            rowList: [],
            height: 300,
            width: 370,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
				            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

	function create_congty(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên loại khám','Tên nhóm'],
            colModel: [
                {name: 'abc', index: 'abc', hidden: false},
                {name: 'abc1', index: 'abc1', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 100000,
            rowList: [],
            height: 300,
            width: 370,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
				            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	function resize_control(){
		$("#rowed3").setGridWidth($(window).width()-440);
		$("#rowed3").setGridHeight($(window).height()-90);
		$("#fieldset").height($(window).height()-25);
	}
	function check_session(){

		if(window.dstang=="" && window.kho=="" && window.khobhyt==""){

			//  $('#dialog-session').dialog('open');
			  t=setTimeout(function(){
		$('#phongban').val(<?php //$_SESSION["phongban_vl"]?>);
		$('#phongban1').val($('#phongban :selected').text()); 
		$('#text_tang').val(<?php //$_SESSION["dstang"]?>);
		$('#text_kho').val(<?php //$_SESSION["kho"]?>);	
		$('#text_kho_bhyt').val(<?php //$_SESSION["khobhyt"]?>);			
			},300);	 
		phanquyen();
			window.phongban = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon=0&status=2&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
					if (!result)
						alert('Không load được danh mục phòng ban');
				}}).responseText;
			phongban1 = phongban.split(";");
			for (i = 0; i <= phongban1.length - 1; i++) {
				temp = phongban1[i].split(":");
				$('#phongban').append($('<option>', {
					value: temp[0],
					text: temp[1]
				}));
			}
			autocompleted_combobox('#phongban');
		   $("#capnhat").click ( function () {		
		 		 phancach = ",";	 
			  	dataToSend ='{';
				dataToSend +='"ip":"<?=$_SERVER['REMOTE_ADDR']?>"';
		        dataToSend += phancach + '"PCName":"' +$.cookie("domain")+ '"';
		         dataToSend += phancach + '"ID_Kho":"' +$('#text_kho').val()+ '"';
		         dataToSend += phancach + '"ID_KhoBHYT":"' +$('#text_kho_bhyt').val()+ '"';
		         dataToSend += phancach + '"ID_Tang":"' +$('#text_tang').val()+ '"';
		         dataToSend += phancach + '"ID_PhongBanVatLy":"' +$('#phongban').val()+ '"';
					dataToSend +='}';
					
					dataToSend = jQuery.parseJSON(dataToSend);
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=capnhat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
								 							tooltip_message("Đã lưu");
  			                                         
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
					
		   } );   
	}
}
function barcode_callback(barcode){
	$("#clear_all").click();
	barcode=$.trim(barcode);
	
	res=barcode.split('|');
	hoten_barcode=	$.trim(convertHexToString(res[1]));
	hoten_barcode= hoten_barcode.split(" ");
	ho_barcode="";
	ten_barcode=hoten_barcode[hoten_barcode.length-1];
	for(var i=0;i<hoten_barcode.length-1;i++){
		ho_barcode=ho_barcode+' '+hoten_barcode[i];
	}
	$("#holot").val(ho_barcode);
	$("#ten").val(ten_barcode);
	$("#SoBHYT").val(res[0]);
	
	if(res[3]=="1"){
		$("#nam").click();
	}else{
		$("#nu").click();
	}
	namsinh_barcode= $.trim(res[2]);
	namsinh_barcode=namsinh_barcode.split("/");
	$("#namsinh").val(namsinh_barcode[namsinh_barcode.length-1]);	
	
	i=0;
	phancach="";
	dataToSend ='{';
	$('#rowed3').setGridParam({postData: null});
	$('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){
			if(i>0){
			  phancach=",";
			}
			dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
			i++;
		})
		dataToSend +=',"noidkbd":'+JSON.stringify(res[5]);
		dataToSend +=',"hsdtu":'+JSON.stringify(res[6].split('/').reverse().join('/'));
		dataToSend +=',"hsdden":'+JSON.stringify(res[7].split('/').reverse().join('/'));
		dataToSend +='}';		
		dataToSend = jQuery.parseJSON(dataToSend);	
		window.isbarcode=1;	
		$('#rowed3').setGridParam({postData: dataToSend,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_benh_nhan&p=1'}).trigger('reloadGrid');

};

function vantay(tinhieu,id){
	
	if(tinhieu=="dadk"){
		window.isvantay=1;	
		$('#rowed3').setGridParam({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_benh_nhan_vantay&p=1&id_auto='+id}).trigger('reloadGrid');
	}else if(tinhieu=="chuadk"){
		tooltip_message("Vân tay chưa đăng ký");
	}else if(tinhieu=="thulai"){
		tooltip_message("Không nhận diện được vân tay vui lòng thử lại");
	}
}
</script>