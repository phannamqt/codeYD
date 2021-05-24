<link href="js/select_input/select2.css" rel="stylesheet"/>
    <script src="js/select_input/select2.js"></script>
    
    <script src="js/SlickGrid-master/lib/jquery.event.drag-2.2.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellrangedecorator.js"></script>
	<script src="js/SlickGrid-master/plugins/slick.cellrangeselector.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.core.js"></script>
    <script src="js/SlickGrid-master/slick.formatters.js"></script>
    <script src="js/SlickGrid-master/slick.editors.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.rowselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.grid.js"></script>
    <script src="js/SlickGrid-master/slick.dataview.js"></script>
    <script src="js/SlickGrid-master/controls/slick.pager.js"></script>
    <script src="js/SlickGrid-master/controls/slick.columnpicker.js"></script>
    <script src="js/SlickGrid-master/slick.groupitemmetadataprovider.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.autotooltips.js"></script>
    <link rel="stylesheet" href="js/SlickGrid-master/slick.grid.css" type="text/css"/>
<style>
.bongmo{
	background: #aaaaaa;
	opacity: .3;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index:9999;
}
#n_dangluu{
	position:absolute;
	top: 45%;
	left: 45%;
	width: auto;
	z-index:9999999;
	padding: 3px;
	margin: 5px;
	height:35px;
	width:200px;
	text-align: center;
	font-weight: bold;
	display: block;
	border:solid 2px #DFD9C3;
	font-size:13px;
	background:#FBFAF5;
	color:#55A616;
	box-shadow: 2px #919191;
}

body{
	padding-left:10px;
}
.left{
	width:520px;
}
.right{
	width:750px;
}
.left, .right{
	border:1px solid #ccc;
	border-radius:4px;
	float:left;
	margin-left:5px;
	margin-right:5px;
	margin-top:5px;
	/*height:90%;*/
}
.slick-cell.selected {
  background: none repeat scroll 0 0 #76C4EB;
}
.slick-row:hover {
   background:#008ddf;
   cursor:pointer;
 }
 .slick-headerrow-column{
	padding: 0!important;
	background: none repeat scroll 0 0 #53a513;
	padding-left:2px!important;
	padding-right:2px!important;
}
.ui-widget .slick-headerrow-columns {
    height: 24px!important;
	background:#53A513 !important;
}
.slick-header-column span.slick-column-name{
    font: 11.5px/16px segoe ui,Geneva,sans-serif;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.6) !important;
}
.slick-cell, .slick-headerrow-column {
	 border-style: solid!important;
}
.slick-columnpicker{
	background:#FFF;
}
.slick-columnpicker li{
	list-style:none;	
}
input{
	text-align:left !important;
}
/*nam format lai luoi*/
.slick-headerrow-column input{
	width:99%;
}
.slick-headerrow-column{
	padding: 0!important;
	background: none repeat scroll 0 0 #53a513;
	padding-left:2px!important;
	padding-right:2px!important;
}
.ui-widget .slick-headerrow-columns {
    height: 24px!important;
	background:#53A513 !important;
}
.slick-header-column span.slick-column-name{
    font: 11.5px/16px segoe ui,Geneva,sans-serif;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.6) !important;
}
.slick-cell, .slick-headerrow-column {
	 border-style: solid!important;
}
.red-color{
	color:red;
	width:100%;
	height:100%;
	
}
.yellow-color{
	color:#F6881F;
	width:100%;
	height:100%;
}
#rowed4 .ui-widget-content .r1,
#rowed4 .ui-widget-content .r2,
#rowed4 .ui-widget-content .r3,
#rowed4 .ui-widget-content .r4{
	text-align:right;
}
#rowed4 .slick-group .r1,
#rowed4 .slick-group .r2,
#rowed4 .slick-group .r3,
#rowed4 .slick-group .r4{
	text-align:left;
}
.slick-group-title .group-title{
	 font-weight: bold;
    height: 100%;
    margin-top: 0;
    padding-top: 2px;
    position: absolute;
    width: 100%;
}
.slick-group .slick-cell{
	display: inline-flex;
}
.slick-group .slick-cell .slick-group-toggle{
	margin-top: 5px;	
}
.lt-tm{
	width:400px;
}
.font-bold{
	font-weight:700;
}
  .ui-menu {
    min-width: 150px;
    display: none;
    position: absolute;
    box-shadow: 0px 0px 3px #333;
    z-index: 100000;
  }
</style>
<title>s</title>
</head>

<body class="mainform">
<ul id="menu" style="display: none;">
    <li><a id="menu_copy" href="#"><i class="fa fa-files-o" aria-hidden="true"></i> <span class="tu-nhom">Sao chép</span></a></li>
    <li style="display: none;"><a id="menu_paste" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i> <span class="den-nhom"></span></a></li>
  </ul>

<div id="bongmo" class="bongmo"></div>
<div id="n_dangluu" style="">
     Đang tải dữ liệu...<br>
     (Vui lòng chờ trong giây lát)
</div>
<div class="left">
	<div id="rowed3" style="margin-left:2px;"></div>
    <div style=" border: 1px solid #ccc;
    border-radius: 4px;
    height: 30px;
    margin-top: 5px;
    padding-left: 3px;
    padding-top: 3px;">
    	<button id="themmoi">Thêm mới</button> <button id="sua">Sửa</button></div>
</div>
<div class="right">
	<div id="rowed4" style="margin-left:2px;"></div>
    <div style=" border: 1px solid #ccc;
    border-radius: 4px;
    height: 30px;
    margin-top: 5px;
    padding-left: 3px;
    padding-top: 3px;">
    	<input type='checkbox' id='thugon' style=" margin-top: 5px;"/><label for="thugon">Thu gọn</label>
    </div>
</div>
<div id="dialog-loaithe" title="Thêm mới loại thẻ" style="display:none;">
<table width="100%" border="0" id="themmoibaohiem">
  <tr>
    <td width="26%">Tên loại thẻ:</td>
    <td width="74%"><input type="text" id="tm-tenloaithe" class="lt-tm"></td>
  </tr>
  <tr>
    <td>Tên công ty:</td>
    <td><input type="text" id="tm-tencongty" class="lt-tm"></td>
  </tr>
  <tr>
    <td>Mã nhóm:</td>
    <td><input type="text" id="tm-manhom" class="lt-tm"></td>
  </tr>
  <tr>
    <td>Ghi chú:</td>
    <td><input type="text" id="tm-ghichu" class="lt-tm"></td>
  </tr>
  <tr>
    <td>Được BHCC thanh toán:</td>
    <td><input type="checkbox" id="tm-duocbhthanhtoan"></td>
  </tr>
  <tr>
    <td>Sử dụng:</td>
    <td><input type="checkbox" id="tm-sudung"></td>
  </tr>
</table>

</div>
<div id="dialog-aploaikham" title="Áp thẻ" style="display:none;">
<table width="100%" border="0" id="n_aploaikham">
  <tr>
    <td width="39%" style="vertical-align:top;">Tên dịch vụ:</td>
    <td width="61%"><span id="tenloaikham"> </span></td>
  </tr>
  <tr>
    <td width="39%">Hệ số:</td>
    <td width="61%"><input type="text" id="at-heso" class="at-input"></td>
  </tr>
  <tr>
    <td>Giá sau nhân hệ số:</td>
    <td><input type="text" id="at-giasaunhanheso" class="at-input"></td>
  </tr>
  <tr class="giabloggiuong">
    <td>Giá blog giường:</td>
    <td><input type="text" id="at-giabloggiuong" class="at-input"></td>
  </tr>


  <tr class="giagoc">
    <td>Giá gốc:</td>
    <td><input type="text" id="at-giagoc" class="at-input"></td>
  </tr>


</table>

</div>
<div id="dialog-apnhomloaikham-confirm" title="Thông báo" style="display:none;">
Bạn có chắc chắn muốn áp cho cả nhóm không?
</div>

<div id="dialog-apnhomloaikham" title="Áp thẻ" style="display:block;">
	<table width="100%" border="0" id="n_aploaikham">
	  <tr>
	    <td width="39%" style="vertical-align:top;">Tên nhóm dịch vụ:</td>
	    <td width="61%"><span id="tennhomloaikham"> </span></td>
	  </tr>
	  <tr>
	    <td width="39%">Hệ số:</td>
	    <td width="61%"><input type="text" id="atnhom-heso" class="at-input"></td>
	  </tr>
	</table>
</div>

<div id="dialog-aptheothe" title="Áp hệ số các hạng mục theo loại thẻ" style="display:block;">
<table width="100%" border="0" id="n_aploaikham">
  <tr>
    <td width="15%" style="vertical-align:top;">Loại thẻ:</td>
    <td width="61%"><span id="tenloaithe"> </span></td>
  </tr>
  <tr>
    <td width="15%">Hệ số:</td>
    <td width="61%"><input type="text" id="apthe-heso" class="at-input"></td>
  </tr>
</table>
</div>
 
</body>
<script type="text/javascript">
$(document).ready(function(e) {
	$("#n_dangluu" ).hide();
	$("#bongmo").removeClass('bongmo');
	var oper='add';
	window.giabn=0;
	window.dbclick=0;
	window._grid_TenLoaiThe='';
	window._grid_id='';
	$(".left").height($(window).height()-50);
	$(".right").height($(window).height()-50);
	number_textbox("#atnhom-heso");
	number_textbox("#at-heso");
	number_textbox("#at-giasaunhanheso");
	number_textbox("#at-giabloggiuong");
	number_textbox("#at-giagoc");

	number_textbox("#apthe-heso");

	$("#menu").menu();

	$(document).bind("mouseup", function(e) {
		$("#menu").hide();
	});

	/*<li><a id="menu_copy" href="#"><i class="fa fa-files-o" aria-hidden="true"></i> <span class="tu-nhom">Sao chép</span></a></li>
    <li style="display: none;"><a id="menu_paste" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i> <span class="den-nhom"></span></a></li>*/

	$('#menu_copy').click(function(e){
		window._grid_TenLoaiThe=window._grid_TenLoaiThe_tam;
		window._grid_id=window._grid_id_tam;
		$('#menu_paste').parent().show();
	})

	$('#menu_paste').click(function(e){
		var cf=confirm('Bạn chắc chắn muốn dán cấu hình các hạng mục dịch vụ của "'+window._grid_TenLoaiThe_tam+'" theo các hạng mục dịch vụ theo "'+window._grid_TenLoaiThe+'" không?');
		if(cf===true){
			//alert(window._grid_id+':'+window._grid_TenLoaiThe);
			$.ajax({
				type: 'POST',
				async : false,
				url: "pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&ac=saochep_nhom&oper=add&hienmaloi=a",
				data:{
					tunhom:window._grid_id,
					dennhom:window._grid_id_tam
				},
				success: function(data, status, xhr) {
					tooltip_message("Đã lưu");
					 dataView2.beginUpdate();
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaidichvubyid_loaibhcc&id='+window.id_edit_the).done(function(a){
						data=$.parseJSON(a)
						dataView2.setItems(data);
						dataView2.setFilter(filter2);
						dataView2.endUpdate();
						dataView2.endUpdate();
						dataView2.refresh();
						grid2.invalidate();
						$("#n_dangluu" ).hide();
						$("#bongmo").removeClass('bongmo');
						//dataView2.collapseAllGroups();
						//dataView2.refresh();
					})
				},
			});
		}
	})

	$("#at-heso").keyup(function(e) {
        if($(this).val()>0){
			$("#at-giasaunhanheso").val(($(this).val()*window.giabaobn)/100);
			if(window.id_nhom==-3){
				$("#at-giabloggiuong").val(($(this).val()*window.giablog)/100);
			}else{
				$("#at-giabloggiuong").val(0);
			}
		}else{
			$("#at-giasaunhanheso").val(0);
			$("#at-giabloggiuong").val(0);
		}

    });
	$('#thugon').click(function(e){
		if($('#thugon').is(':checked')){
			dataView2.collapseAllGroups();
		}else{
			dataView2.expandAllGroups();
		}
	})
	$( "#dialog-loaithe" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:280,
	  width:600,
      modal: true,
      buttons: {
        "Lưu": function() {
			$("#n_dangluu" ).show();
			$("#bongmo").addClass('bongmo');
			if($('#tm-duocbhthanhtoan').is(':checked')){
				var duocbhthanhtoan=1;
			}else{
				var duocbhthanhtoan=0;
			}
			if($('#tm-sudung').is(':checked')){
				var sudung=1;
			}else{
				var sudung=0;
			}
			if(oper=='add'){
				$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&ac=bhcc&oper=add&hienmaloi=a",{tenloaithe:$("#tm-tenloaithe").val(),tencongty:$("#tm-tencongty").val(),manhom:$("#tm-manhom").val(),ghichu:$("#tm-ghichu").val(),duocbhthanhtoan:duocbhthanhtoan,sudung:sudung}).done(function(data){
					$( "#dialog-loaithe"  ).dialog( "close" );
					tooltip_message("Đã lưu");
					dataView.beginUpdate();
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dmbhcc&q=2').done(function(data){
						data=$.parseJSON(data)
						dataView.setItems(data);
						dataView.endUpdate();
						dataView.refresh();
						grid.invalidate();
						$("#n_dangluu" ).hide();
						$("#bongmo").removeClass('bongmo');
					});
				});
			}else{
				$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&ac=bhcc&oper=edit&hienmaloi=a",{idloaithe:window.id_edit_the,tenloaithe:$("#tm-tenloaithe").val(),tencongty:$("#tm-tencongty").val(),manhom:$("#tm-manhom").val(),ghichu:$("#tm-ghichu").val(),duocbhthanhtoan:duocbhthanhtoan,sudung:sudung}).done(function(data){
					$( "#dialog-loaithe"  ).dialog( "close" );
					tooltip_message("Đã lưu");
					dataView.beginUpdate();
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dmbhcc&q=2').done(function(data){
						data=$.parseJSON(data)
						dataView.setItems(data);
						dataView.endUpdate();
						dataView.refresh();
						grid.invalidate();
						$("#n_dangluu" ).hide();
						$("#bongmo").removeClass('bongmo');
					});
				});
			}
        },
        "Thoát": function() {
          $( this ).dialog( "close" );
        }
      },close:function(){
		  $("#themmoibaohiem").find("input").each(function(e) {
            	$(this).val('');
       	 });
		 $("#tm-duocbhthanhtoan").prop("checked",false);
		 $("#tm-sudung").prop("checked",false);
		},
    });
	$( "#dialog-aploaikham" ).dialog({
      resizable: false,
	  width:300,
	  autoOpen:false,
      modal: true,
      buttons: {
        "Lưu": function() {
			if($("#at-heso").val()!="" && $("#at-giasaunhanheso").val() !="" && $("#at-giabloggiuong").val()!="" && $("#at-giagoc").val()!="" ){
				$("#n_dangluu" ).show();
				$("#bongmo").addClass('bongmo');
			if(oper2=='add'){
				$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&ac=aploaikham&oper=add&hienmaloi=a",{idloaithe:window.id_edit_the,id_dichvu:window.id_dichvu,heso:$("#at-heso").val(),giasaunhanheso:$("#at-giasaunhanheso").val(),giabloggiuong:$("#at-giabloggiuong").val(),giagoc:$("#at-giagoc").val(),id_nhom:window.id_nhom,giabn:window.giabaobn}).done(function(data){
					$( "#dialog-aploaikham"  ).dialog( "close" );
					tooltip_message("Đã lưu");
					 dataView2.beginUpdate();
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaidichvubyid_loaibhcc&id='+window.id_edit_the).done(function(a){
						data=$.parseJSON(a)
						dataView2.setItems(data);
						dataView2.setFilter(filter2);
						dataView2.endUpdate();
						dataView2.endUpdate();
						dataView2.refresh();
						grid2.invalidate();
						$("#n_dangluu" ).hide();
						$("#bongmo").removeClass('bongmo');
						//dataView2.collapseAllGroups();
						//dataView2.refresh();
					})
				});
			}else{
				$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&ac=aploaikham&oper=edit",
					{id:window.id_map,
						heso:$("#at-heso").val(),
						giasaunhanheso:$("#at-giasaunhanheso").val(),
						giabloggiuong:$("#at-giabloggiuong").val(),
						giagoc:$("#at-giagoc").val(),
						id_nhom:window.id_nhom,
						giabn:window.giabaobn})
				.done(function(data){
					$( "#dialog-aploaikham"  ).dialog( "close" );
					tooltip_message("Đã lưu");
					 dataView2.beginUpdate();
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaidichvubyid_loaibhcc&id='+window.id_edit_the).done(function(a){
						data=$.parseJSON(a)
						dataView2.setItems(data);
						dataView2.setFilter(filter2);
						dataView2.endUpdate();
						dataView2.endUpdate();
						dataView2.refresh();
						grid2.invalidate();
						$("#n_dangluu" ).hide();
						$("#bongmo").removeClass('bongmo');
					})
				});
			}
			}else{
				tooltip_message("Vui lòng nhập thông tin cần thiết");
			}
        },
        "Thoát": function() {
          $( this ).dialog( "close" );
        }
      },close:function(){
		  $("#n_aploaikham").find("input").each(function(e) {
            	$(this).val('');
       	 });
		},
    });

	$( "#dialog-apnhomloaikham" ).dialog({
      resizable: false,
	  width:300,
	  autoOpen:false,
      modal: true,
      buttons: {
        "Lưu": function() {
			if($("#atnhom-heso").val()>0){
				$( "#dialog-apnhomloaikham-confirm" ).dialog('open');
			}else{
				$("#atnhom-heso").focus();
				tooltip_message("Vui lòng nhập hệ số");
			}
        },
        "Thoát": function() {
          $( this ).dialog( "close" );
        }
      },close:function(){
           $("#atnhom-heso").val('');
		},
    });

	$( "#dialog-apnhomloaikham-confirm" ).dialog({
      resizable: false,
      height:140,
	  autoOpen:false,
      modal: true,
      buttons: {
        "YES": function() {
			$("#n_dangluu" ).show();
			$("#bongmo").addClass('bongmo');
			$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&ac=apnhomloaikham&oper=add",{idloaithe:window.id_edit_the,heso:$("#atnhom-heso").val(),id_nhom:window.id_nhom_edit}).done(function(data){
					$( "#dialog-apnhomloaikham-confirm" ).dialog( "close" );
					$( "#dialog-apnhomloaikham" ).dialog( "close" );
					tooltip_message("Đã lưu");
					dataView2.beginUpdate();
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaidichvubyid_loaibhcc&id='+window.id_edit_the).done(function(a){
						data=$.parseJSON(a);
						dataView2.setItems(data);
						dataView2.setFilter(filter2);
						dataView2.endUpdate();
						dataView2.endUpdate();
						dataView2.refresh();
						grid2.invalidate();
						$("#n_dangluu" ).hide();
						$("#bongmo").removeClass('bongmo');
						//dataView2.collapseAllGroups();
						//dataView2.refresh();
					})
				});
        },
        "NO": function() {
          $( this ).dialog( "close" );
        }
      }
    });


	$( "#dialog-aptheothe" ).dialog({
      resizable: false,
	  width:300,
	  autoOpen:false,
      modal: true,
      buttons: {
        "Lưu": function() {
			if($("#apthe-heso").val()>0){
				var cf=confirm("Bạn chắc chắn muốn áp hệ số "+$("#apthe-heso").val()+" cho thẻ "+window.TenLoaiThe+" không?");
				if(cf===true){
					emrhienthongbao("Đang lưu...");
					$.ajax({
						type: 'POST',
						async : false,
						data:{
							ID_LoaiThe:window.id_edit_the,
							HeSo:$("#apthe-heso").val()
						},
						url: "pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&ac=apnhomtheothe",
						success: function(data, status, xhr) {
							$( "#dialog-aptheothe" ).dialog("close");
							emrhienthongbao("");
							tooltip_message("Đã lưu");
							setTimeout(function(){
								emrhienthongbao("Đang tải dữ liệu...");
								dataView2.beginUpdate();
								$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaidichvubyid_loaibhcc&id='+window.id_edit_the).done(function(a){
									data=$.parseJSON(a);
									dataView2.setItems(data);
									dataView2.setFilter(filter2);
									dataView2.endUpdate();
									dataView2.endUpdate();
									dataView2.refresh();
									grid2.invalidate();
									emrhienthongbao("");
									//dataView2.collapseAllGroups();
									//dataView2.refresh();
								})
							},300)
						}
					});
				}//if(cf===true){
				//alert($("#apthe-heso").val());
			}else{
				$("#apthe-heso").focus();
				tooltip_message("Vui lòng nhập hệ số");
			}
        },
        "Thoát": function() {
          $( this ).dialog( "close" );
        }
      },close:function(){
           $("#apthe-heso").val('');
		},
    });

	
	$("#themmoi").click(function(e) {
		oper='add';
		$('#dialog-loaithe').dialog('option', 'title', 'Thêm mới');
        $( "#dialog-loaithe" ).dialog('open');
    });
	$("#sua").click(function(e) {
		$('#rowed3 .slick-viewport .active').click();
		if(window.id_edit_the>0){
			oper='edit'
			$('#dialog-loaithe').dialog('option', 'title', 'Sửa');
			$( "#dialog-loaithe" ).dialog('open');	
		}
    });
  window.dataView;
  window.grid;
  window.data = [];
  window.search_string=0;
  var options = {
    enableCellNavigation: true,
    showHeaderRow: true,
    headerRowHeight: 30,
    explicitInitialization: true,
	forceFitColumns: false,
  };
  var columns = [
			{name:'ID thẻ',id:'ID_LoaiThe',field: "ID_LoaiThe",width: 30},
			{name:'Loại thẻ',id:'TenLoaiThe',field: "TenLoaiThe",width: 240},
			{name:'Tên công ty',id:'TenCongTy',field: "TenCongTy",width: 170},
			{name:'Mã nhóm',id:'MaNhom',field: "MaNhom",width: 85},
  ];
 window.columnFilters = {};
   $(function () {
	  dataView = new Slick.Data.DataView({inlineFilters: true});	
      grid = new Slick.Grid("#rowed3", dataView, columns, options);		
	    var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();		
	  	dataView = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });	
    	grid = new Slick.Grid("#rowed3", dataView, columns, options);	
		grid.registerPlugin(groupItemMetadataProvider);	
		var columnpicker  = new Slick.Controls.ColumnPicker(columns, grid, options);
		dataView.onRowCountChanged.subscribe(function (e, args) {
			grid.updateRowCount();
			grid.invalidateRows(args.rows);
			grid.render();
			resize_control();
  		});
	    plugin = new Slick.AutoTooltips();
		grid.registerPlugin(plugin);		
	    grid.setSelectionModel(new Slick.CellSelectionModel());	
	    grid.setSelectionModel(new Slick.RowSelectionModel());
	    dataView.onRowsChanged.subscribe(function (e, args) {
		grid.invalidateRows(args.rows);
		grid.render();
	  });
  grid.onClick.subscribe(function (e, args) {
  	  setTimeout(function(){
  	  	if(window.dbclick==0){
  	  		  $("#n_dangluu" ).show();
			  $("#bongmo").addClass('bongmo');
		    /*if ( $(e.target).hasClass("toggle")) {
		      var item = dataView.getItem(args.row);
		      if (item) {
		        if (!item._collapsed) {
		          item._collapsed = true;
		        } else {
		          item._collapsed = false;
		        }
		        dataView.updateItem(item.id, item);
		      }
		      e.stopImmediatePropagation();
		    }*/
				var item = args.item;
				//alert(dataView.getItem(args.row).id);
				var id=dataView.getItem(args.row).id;
				window.id_edit_the=dataView.getItem(args.row).id;
				$("#tm-tenloaithe").val(dataView.getItem(args.row).TenLoaiThe); 
				$("#tm-tencongty").val(dataView.getItem(args.row).TenCongTy);
				$("#tm-manhom").val(dataView.getItem(args.row).MaNhom);
				$("#tm-ghichu").val(dataView.getItem(args.row).GhiChu);
				if(dataView.getItem(args.row).IsSaveTienBHCC=="1"){
					$("#tm-duocbhthanhtoan").prop('checked',true);
				}else{
					$("#tm-duocbhthanhtoan").prop('checked',false);
				}
				if(dataView.getItem(args.row).SuDung=="1"){
					$("#tm-sudung").prop('checked',true);
				}else{
					$("#tm-sudung").prop('checked',false);
				}
			
			grid2.init();
		    dataView2.beginUpdate();
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaidichvubyid_loaibhcc&id='+id).done(function(a){
				data=$.parseJSON(a)
				dataView2.setItems(data);
				dataView2.setFilter(filter2);		
				dataView2.endUpdate();
				dataView2.endUpdate();	
				dataView2.refresh();										
				grid2.invalidate();
				$("#n_dangluu" ).hide();
				$("#bongmo").removeClass('bongmo');
				/*dataView2.setItems(data);
				dataView2.setFilter(filter);		
		 		dataView2.endUpdate();
				dataView2.collapseAllGroups();	*/
				//dataView2.refresh();	
			})
  	  	}
  	  },400)
	 
  });
	grid.onDblClick.subscribe(function (e, args){
		window.dbclick=1;
		var item = args.item;	
		window.id_edit_the=dataView.getItem(args.row).id;
		window.TenLoaiThe=dataView.getItem(args.row).TenLoaiThe;
		window.HeSo_the=dataView.getItem(args.row).HeSo;
		$("#apthe-heso").val(HeSo_the);
		$("#tenloaithe").html(TenLoaiThe);
		$( "#dialog-aptheothe" ).dialog('open');
	//	$("#sua").click();

		setTimeout(function(){
			window.dbclick=0;
		},500)
	});	
  $(grid.getHeaderRow()).delegate(":input", "change keyup", function (e) {
      var columnId = $(this).data("columnId");
	  //console.log($(this).val());
      if (columnId != null) {
		columnFilters[columnId] = $.trim($(this).val());
		if( $.trim($(this).val())!=''){
			console.log(1);
			dataView.expandAllGroups();
		}else{
			console.log(2);
			dataView.collapseAllGroups();
		}
		dataView.refresh();
      }
	
    });
	
	  grid.onHeaderRowCellRendered.subscribe(function(e, args) {
        $(args.node).empty();
        $("<input type='text'>")
           .data("columnId", args.column.id)
           .val(columnFilters[args.column.id])
           .appendTo(args.node);
      });	  
	grid.init();
    dataView.beginUpdate();
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dmbhcc&q=2').done(function(a){
		data=$.parseJSON(a)

		dataView.setItems(data);
		dataView.setFilter(filter);		
 		dataView.endUpdate();
		//dataView.collapseAllGroups();		
	})
	
     dataView.onRowsChanged.subscribe(function (e, args) {
		  grid.invalidateRows(args.rows);
		  grid.render();
	});

    grid.onContextMenu.subscribe(function(e, args) {
		e.preventDefault();
		var cell = grid.getCellFromEvent(e);
		var item = grid.getDataItem(cell.row);

		window._grid_id_tam=item.id;
		window._grid_TenLoaiThe_tam=item.TenLoaiThe;
		if(window._grid_TenLoaiThe==''){
			$(".tu-nhom").html('Sao chép');
		}else{
			$(".tu-nhom").html('Sao chép (Đang sao chép cấu hình nhóm <strong>'+window._grid_TenLoaiThe+'</strong>)');
			$(".den-nhom").html('Dán cấu hình theo nhóm <strong>'+window._grid_TenLoaiThe+'</strong>');
		}
		
		if ($("#menu").width() + e.pageX > $(document).width()) {
			$("#menu").css('left', e.pageX - $("#menu").width() + "px");
		} else {
			$("#menu").css('left', e.pageX + "px");
		}
		if ($("#menu").height() + e.pageY + 30 > $(document).height()) {
			$("#menu").css('top', e.pageY  - $("#menu").height() + "px");
		} else {
			$("#menu").css('top', e.pageY + "px");
		}
		$("body").one("click", function () {
			$("#menu").hide();
		});
		setTimeout(function(){
			$("#menu").show(300);   
		},400);
    });
	
   })
  
	
	
	
// luoi 2

	window.dataView2;
	window.grid2;
	window.data2 = [];
	window.search_string2=0;
  var options2 = {
    enableCellNavigation: true,
    showHeaderRow: true,
    headerRowHeight: 30,
    explicitInitialization: true,
	forceFitColumns: false,
	
  };
  var columns2 = [  		
			{name:'Tên dịch vụ',id:'TenDichVu',field: "TenDichVu",width: 180,formatter: colorFmatter},	
			{name:'Giá báo BN',id:'GiaBN',field: "GiaBN",width: 70,formatter: currencyFmatter},
			{name:'Giá khi áp',id:'GiaThoiDiemLuu',field: "GiaThoiDiemLuu",width: 65,formatter: currencyFmatter},
			{name:'Hệ số',id:'HeSo',field: "HeSo",width: 40,formatter: currencyFmatter},  
			{name:'Giá BHCC',id:'GiaSauNhanHeSo',field: "GiaSauNhanHeSo",width: 70,formatter: currencyFmatter},
			{name:'Giá blog giường',id:'GiaBlogGiuong',field: "GiaBlogGiuong",width: 80,formatter: currencyFmatter},
			{name:'Giá Gốc',id:'GiaGoc',field: "GiaGoc",width: 80,formatter: currencyFmatter},
			
			
			{name:'Đã áp',id:'DaAp',field: "DaAp",width: 40},
			{name:'Giá BN thay đổi',id:'GiaKhac',field: "GiaKhac",width: 100},
  ];
 window.columnFilters2 = {};
   $(function () {
	  dataView2 = new Slick.Data.DataView({inlineFilters: true});	
      grid2 = new Slick.Grid("#rowed4", dataView2, columns2, options2);		
	    var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();		
	  	dataView2 = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });	
    	grid2 = new Slick.Grid("#rowed4", dataView2, columns2, options2);	
		grid2.registerPlugin(groupItemMetadataProvider);	
		var columnpicker  = new Slick.Controls.ColumnPicker(columns2, grid2, options2);
		dataView2.onRowCountChanged.subscribe(function (e, args) {
			grid2.updateRowCount();
			grid2.invalidateRows(args.rows);
			grid2.render();
			resize_control();
  		});
	    plugin = new Slick.AutoTooltips();
		grid2.registerPlugin(plugin);		
	    grid2.setSelectionModel(new Slick.CellSelectionModel());	
	    grid2.setSelectionModel(new Slick.RowSelectionModel());
	    dataView2.onRowsChanged.subscribe(function (e, args) {
		grid2.invalidateRows(args.rows);
		grid2.render();
	  });
  grid2.onClick.subscribe(function (e, args) {

  });
  $(grid2.getHeaderRow()).delegate(":input", "change keyup", function (e) {
      var columnId = $(this).data("columnId");
	  console.log($(this).val());
      if (columnId != null) {
		columnFilters[columnId] = $.trim($(this).val());
		if( $.trim($(this).val())!=''){
			console.log(1);
			dataView2.expandAllGroups();
		}else{
			console.log(2);
			dataView2.collapseAllGroups();
		}
		dataView2.refresh();
      }
	
    });
	 grid2.onDblClick.subscribe(function (e, args){
		 if(permission['edit_appthe']==1){
		var item = args.item;
		var id=dataView2.getItem(args.row).id;
		window.id_map=dataView2.getItem(args.row).ID_auto;
		var id=dataView2.getItem(args.row).ID_DichVu;	
		var id_nhom=dataView2.getItem(args.row).ID_Nhom;	
		//alert(id);
		window.giabaobn=dataView2.getItem(args.row).GiaBN;
		window.giablog=dataView2.getItem(args.row).GiaBlog;
		window.id_nhom=dataView2.getItem(args.row).ID_Nhom;
		window.id_dichvu=dataView2.getItem(args.row).ID_DichVu;
		if(window.id_nhom==-3){
			$(".giabloggiuong").show();	
		}else{
			$(".giabloggiuong").hide();
		}
		if(id>0){
			if(window.id_map>0){
				oper2='edit';
				$('#dialog-aploaikham').dialog('option', 'title', 'Sửa');
				$("#tenloaikham").html(dataView2.getItem(args.row).TenDichVu);
				$("#at-heso").val(dataView2.getItem(args.row).HeSo);
				$("#at-giasaunhanheso").val(dataView2.getItem(args.row).GiaSauNhanHeSo);
				$("#at-giabloggiuong").val(dataView2.getItem(args.row).GiaBlogGiuong);
				$("#at-giagoc").val(dataView2.getItem(args.row).GiaGoc);

				$("#dialog-aploaikham" ).dialog('open');
			}else{
				oper2='add';
				$('#dialog-aploaikham').dialog('option', 'title', 'Thêm mới');
				$("#tenloaikham").html(dataView2.getItem(args.row).TenDichVu);
				$( "#dialog-aploaikham" ).dialog('open');	
			}
		}
		}else{
			tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
		}
	});	
	  grid2.onHeaderRowCellRendered.subscribe(function(e, args) {
        $(args.node).empty();
        $("<input type='text'>")
           .data("columnId", args.column.id)
           .val(columnFilters[args.column.id])
           .appendTo(args.node);
      });	  
	grid2.init();
    dataView2.beginUpdate();


	  	dataView2.setGrouping([					   
		   {
			getter: "ID_Nhom",
			formatter: function (g) {
				 return "<div class='group-title' id-nhom='"+g['rows'][0]['ID_Nhom']+"'  onDblClick='return groupclick("+g['rows'][0]['ID_Nhom']+",\""+g['rows'][0]['TenNhom']+"\")'>" + g['rows'][0]['TenNhom'] + "</div>";			
				},	
		
			  aggregateCollapsed: false,     
			  collapsed: false,
			//  lazyTotalsCalculation: false,
			  displayTotalsRow: false,
			  },
	   ]
	   );
	
      dataView2.onRowsChanged.subscribe(function (e, args) {
		  grid2.invalidateRows(args.rows);
		  grid2.render();
		});


   })

// end luoi 2
	
	
  resize_control();
  $(window).resize(function(e) {
    resize_control();
  });

  $("#themmoi,#sua").button();
  phanquyen();
});// end ready


 function testCondition(condition, value1, value2){
        switch(condition) {
            case '<':   var resultCond = (value1 < value2) ? true : false;
                        break;
            case '<=':  var resultCond = (value1 <= value2) ? true : false;
                        break;
            case '>':   var resultCond = (value1 > value2) ? true : false;
                        break;
            case '>=':  var resultCond = (value1 >= value2) ? true : false;
                        break;
            case '!=':  
            case '<>':  var resultCond = (value1 != value2) ? true : false;
                        break;
            case '=':   
            case '==':  var resultCond = (value1 == value2) ? true : false;
                        break;          
        }
        return resultCond;
    }
function currencyFmatter (row, cell, value, columnDef, dataContext) {
	tam=(parseInt(value)).formatMoney(0, ',', '.')
	return tam;
}
function colorFmatter (row, cell, value, columnDef, dataContext) {
	//tam=(parseInt(value)).formatMoney(0, ',', '.')
	if(dataContext.ID_auto==null){
		tam='<div class="red-color"> '+value+' </div>';
	}else{
		if(parseInt(dataContext.GiaKhac)==1){
			tam='<div class="yellow-color"> '+value+' </div>';
		}else{
			tam='<div class="black-color"> '+value+' </div>';	
		}
	}
	//alertObject(dataContext.ID_auto);
	return tam;
}

function filter(item){
		for (var columnId in columnFilters) {
            if (columnId !== undefined && columnFilters[columnId] !== "") {
				
                var c = grid.getColumns()[grid.getColumnIndex(columnId)];
                var filterVal = columnFilters[columnId].toLowerCase();
                var filterChar1 = filterVal.substring(0, 1); // grab the 1st Char of the filter field, so we could detect if it's a condition or not
	
                if(item[c.field] == null)
                    return false;
				
                if( filterChar1 == '<' || filterChar1 == '>' || filterChar1 == '!' || filterChar1 == '=') {                  
                    var idxFilterSpace = filterVal.indexOf(" ");
                    if( idxFilterSpace > 0 ) {
                        var condition = filterVal.substring(0, idxFilterSpace);
                        filterNoCondVal = columnFilters[columnId].substring(idxFilterSpace+1);                       
                        if( patRegex_no.test(item[c.field]) ) {                             
                            if( testCondition(condition, parseFloat(item[c.field]), parseFloat(filterNoCondVal)) == false ) 
                                return false;                       
                        }else {                             
                            if ( testCondition(condition, item[c.field].toLowerCase(), filterNoCondVal.toLowerCase()) == false )
                                return false;
                        }
                    } 
                }else{ //str.indexOf("abc")
					//if (item[c.field].toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
					// return false;
					//}
					if (item[c.field].toLowerCase().indexOf(columnFilters[columnId].toLowerCase()) ==-1 ) {
					 return false;
					}
                 
                }
            }
        }
        return true;
	}
function filter2(item){
		for (var columnId in columnFilters) {
            if (columnId !== undefined && columnFilters[columnId] !== "") {
				
                var c = grid2.getColumns()[grid2.getColumnIndex(columnId)];
                var filterVal = columnFilters[columnId].toLowerCase();
                var filterChar1 = filterVal.substring(0, 1); // grab the 1st Char of the filter field, so we could detect if it's a condition or not
	
                if(item[c.field] == null)
                    return false;
				
                if( filterChar1 == '<' || filterChar1 == '>' || filterChar1 == '!' || filterChar1 == '=') {                  
                    var idxFilterSpace = filterVal.indexOf(" ");
                    if( idxFilterSpace > 0 ) {
                        var condition = filterVal.substring(0, idxFilterSpace);
                        filterNoCondVal = columnFilters[columnId].substring(idxFilterSpace+1);                       
                        if( patRegex_no.test(item[c.field]) ) {                             
                            if( testCondition(condition, parseFloat(item[c.field]), parseFloat(filterNoCondVal)) == false ) 
                                return false;                       
                        }else {                             
                            if ( testCondition(condition, item[c.field].toLowerCase(), filterNoCondVal.toLowerCase()) == false )
                                return false;
                        }
                    } 
                }else{ 
					if (String(item[c.field]).toLowerCase().indexOf(String(columnFilters[columnId]).toLowerCase()) ==-1 ) {
					 return false;
					}
                 
                }
            }
        }
        return true;
	}
function groupclick(idnhom,tennhom){
	if(permission['edit_appthe']==1){
		window.id_nhom_edit=idnhom;
		$("#tennhomloaikham").html(tennhom);
		$( "#dialog-apnhomloaikham" ).dialog('open');
	}else{
		tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
	}
}

function resize_control(){
	var left_h=$(".left").height();
	var left_w=$(".left").width();
	$('#rowed3').css({'height':(left_h)+'px'});
	$('#rowed3').css({'width':(left_w-5)+'px'});
	
	var right_h=$(".right").height();
	var right_w=$(".right").width();
	$('#rowed4').css({'height':(right_h)+'px'});
	$('#rowed4').css({'width':(right_w-5)+'px'});
	//grid.resizeCanvas();
}
</script>
</html>