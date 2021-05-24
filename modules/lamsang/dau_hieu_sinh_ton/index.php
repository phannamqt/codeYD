<style>
#gbox_rowed4_ghichu_new,#gbox_rowed3_ghichu_new{
       display: inline-block !important;
}
	 .ui-state-defaul, .ui-state-hover{
		 transition: display .5s ease;
	  -webkit-transition: display .5s ease;
	  -moz-transition: display .5s ease;
	  -o-transition: display .5s ease;
	 }
	 .ui-widget-overlay {
		opacity:0.01;
		filter: alpha(opacity=1);
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
		/*overlay trong suot*/
	 }
	 #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
		 margin-left:4px;
		 margin-top:5px;
		 box-shadow:0px 0px 10px #a0a0a0;
		 border:1px solid #919191;
	 }
	  #rowed3, #rowed4, #rowed5, #rowed6, #rowed7{
		 font-size:11px!important;
	 }
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }
	 .demgio{
		 cursor:pointer;
	 }
	input[type=button].custom_button{
	/*	border:1px solid #000;*/
		border:none;
		background:none;
		/*border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;*/
		outline:  none;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
		font-size:11px;
		height:17px!important;
		width:40px!important;
		text-decoration:underline;
		cursor:pointer;
		/*box-shadow:0px 0px 2px 1px #a0a0a0;*/
	}
	input[type=button].custom_button:focus{
		outline:  none;
	}
	:focus {outline:none;}
	::-moz-focus-inner {border:0;}
	fieldset{
	   -webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
	   border-radius: 5px;
	   width:89%;
	   box-shadow:0px 0px 3px 0px #a0a0a0;
	   border:1px solid #919191;
	   margin-top:2px;
	   margin-left:5px;
	   margin-right:0px;
	   margin-right: -4px;
	}
	fieldset div{
		display:table;
	}
	fieldset div div{
		display:table-cell;
	}
	fieldset input{
		background:none!important;
		text-align:center;
		box-shadow:0px 0px 3px 0px #a0a0a0!important;
	    border:1px solid #919191!important;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;
		margin-left:3px;
		padding:0px;
		font-size:12px;
		padding-bottom:2px;
	}
	legend {
		background-color:#f5f3e5;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;
		color:#000;
	}
	div#tinhtoan{
		display:table;
		width:98.9%;
		vertical-align:top;
	}
	div#tinhtoan div{
		display:table-cell;
		width:22%;
		vertical-align:top;
	}
</style>
<body>

<div id='dialog_ghichu_new' style="display:none;">
<table id='rowed3_ghichu_new'></table><div id='prowed3_ghichu_new'></div>
<table id='rowed4_ghichu_new'></table><div id='prowed4_ghichu_new'></div>
</div>

 <div id="panel_main">
 	
        <div class="left_col ui-widget-content ui-layout-west" id="LeftPane">
        	<div>
    	<label for="tungay">Từ ngày:</label> <input type="text" id="tungay" style="width:80px; text-align:center"  value="<?php echo date('d/m/Y'); ?>"  /> <label for="denngay">Đến ngày:</label> <input type="text" id="denngay"  style="width:80px; text-align:center" value="<?php echo date('d/m/Y'); ?>" />
        <input type="button" id="tailai" value="Xem" /></div>
        	<table id="rowed3" ></table>
        	<div id="prowed3" ></div>
            <div style="margin-top:5px">
            	<div style="float:left">
                    <div class="hinhvuong quathoigian_min"></div><label class="diengiai">Đã quá thời gian chờ 10 phút</label>
                    <div class="hinhvuong quathoigian_max"></div><label class="diengiai">Đã quá thời gian chờ 15 phút</label>
                </div>
                <div style="float:right">
                  <!--  <a href="#" id="lamtuoi" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; width:90px">Làm tươi [F5]<span class="ui-icon ui-icon-cancel
     "></span></a>-->
                    <a href="#" id="thuchien" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-cancel
     "></span></a>
				</div>
            </div>
        </div>
        <div class="right_col ui-widget-content  ui-layout-center">
        	<table id="rowed4" ></table>
        	<div id="prowed4" ></div>
            <table id="rowed5" ></table>
           <!-- <div id="prowed5" ></div>  -->
            <table id="rowed6" ></table>
        	<div id="prowed6" ></div>
            <table id="rowed7" ></table>
        	<!--<div id="prowed7" ></div>    	-->
                 <div id="tinhtoan">
                   <div><fieldset>
                        <legend>Pignet (Thể lực)</legend>
                        <div>
                            <div style="width:40%"><input type="text" style="width:70%" id="pignet_a" disabled></div>
                            <div style="width:60%"><input type="text" style="width:85%" id="pignet_b" disabled></div>
                        </div>
                   </fieldset></div>
                   <div> <fieldset>
                        <legend>BMI</legend>
                        <div>
                            <div style="width:40%"><input type="text" style="width:70%" id="BMI_a" disabled></div>
                            <div style="width:60%"><input type="text" style="width:85%" id="BMI_b" disabled></div>
                        </div>
                   </fieldset></div>
                   <div> <fieldset>
                        <legend>Tỷ lệ chất béo</legend>
                        <div>
                            <div style="width:60%"><input type="text" style="width:82%; color:#000" id="chatbeo_a" disabled></div>
                            <div style="width:40%"><input type="text" style="width:75%; color:#000" id="chatbeo_b" disabled></div>
                        </div>
                   </fieldset> </div>
                  <div>  <fieldset>
                        <legend>Cân nặng hợp lý</legend>
                        <div>
                             <div style="width:50%"><input type="text" style="width:75%; color:#000" id="cannang_a" disabled></div>
                             <div style="width:50%"><input type="text" style="width:80%; color:#000" id="cannang_b" disabled></div>
                        </div>
                   </fieldset></div>
               </div>
        </div>

</div>
</body>
</html>
<script type="text/javascript">
var jqg6id
$(document).ready(function() {
	 window.id_benhnhan_ghichu="";
	 window.id_luotkham_ghichu="";
$("#tailai").button();
$("#tungay").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		 showButtonPanel: true,
		dateFormat: $.cookie("ngayJqueryUi"),  
		//maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
		onClose: function(selectedDate) {
			$("#denngay").datepicker("option", "minDate", selectedDate);
		},
		onSelect: function(dat, inst) {

		}
	});
	$("#denngay").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
			showButtonPanel: true,
			gotoCurrent:true,
            dateFormat: $.cookie("ngayJqueryUi"),   
		  //	maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),     
            onClose: function(selectedDate) {

            },
            onSelect: function(dat, inst) {
            }
        });

	$( "#dialog_ghichu_new" ).dialog({
		autoOpen: false,
		height: ($(window).height()/100 * parseFloat(70)).toFixed(0),
		width: ($(window).width()/100 * parseFloat(95)).toFixed(0),
		modal: true,
		open: function(event,ui){}, 
	});	
    create_ghichu_luotkham();
	create_ghichu_benhnhan();
	
	
  jwerty.key('f3', false);
  jwerty.key('f4', false);
  jwerty.key('f5', false);
  jwerty.key('f8', false);
  $(document).keyup(function(e) {
		if (e.keyCode === 114) {
			$("#rowed4_iladd").click();
		}
		if (e.keyCode === 115) {
			$("#rowed4_iledit").click();
		}
		if (e.keyCode === 116) {
			$("#refresh_rowed4").click();
		}
		if (e.keyCode === 119) {
			$("#del_rowed4").click();
		}
		if (e.keyCode === 121) {
			$("#rowed4_ilsave").click();
		}
		if (e.keyCode === 27) {
			$("#rowed4_ilcancel").click();
		}
  });

	window.addEventListener ("send_scale", function (zEvent) {
		tooltip_message(zEvent.detail);
		var replace_text
		replace_text=zEvent.detail.replace("weight:","");
		replace_text=replace_text.replace(" kg","");
		replace_text=replace_text.replace("height:","");
		replace_text=replace_text.replace(" cm","");
		//alert(zEvent.detail)
		var scale_data=replace_text.split("|")
		$("#"+jqg6id+"_ChieuCao").val(scale_data[1])
		$("#"+jqg6id+"_CanNang").val(scale_data[0])
		$("#"+jqg6id+"_VongNguc").focus();


	});

	temp=jQuery(window).height();
	$("#panel_main").css("height",temp+"px");
	$("#panel_main").fadeIn(1000);
	create_layout();
		openform_shortcutkey();
	
	var kiemtra_enter=true;
	$('#thuchien').button();
	
	$('#thuchien').keyup(function(e){
			if(e.keyCode==13){
				dathuchien(window.luotkham);
			};
	});
	$('#thuchien').click(function(e){
		 dathuchien(window.luotkham);
	});

	$("#tailai").click(function(){
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data&tungay='+$('#tungay').val()+'&denngay='+$('#denngay').val()}).trigger('reloadGrid');
	});


				window.nickname=  $.ajax({
                        url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=NickName&name=ID_NhanVien	",

                        async:false
                    }).responseText;

	window.nickname1 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_Nhanvien&id=ID_Nhanvien&name=NickName', async: false, success: function(data, result) {
                    if (!result){
                        alert('Không load được tên');
					}
                }}).responseText;

				create_sinhton_grid();
				create_lichsu_sinhton_grid();
				create_thetrang_grid();
				create_lichsuthetrang_grid();
				create_ds_grid();
	//alert($(".right_col").height());
	$(window).resize(function() {
		$("#panel_main").css("height",jQuery(window).height()+"px");
		 resize_control();
	})
 phanquyen();
})




function create_layout(){
	//alert("")
	$('#panel_main').layout({
		resizerClass: 'ui-state-default'
		,west: {
			resizable: true
		,	size:					"50%"
		
		,	onresize_end:function () {
				 resize_control();
			}
		,	onopen_end:function () {
				// resize_control();
			}
		,	onclose_end:function () {
			 	//resize_control();
			}

		}
	    ,	center: {
			resizable: true
		,	size:					"50%"
		
		,	onresize_end:function () {
				 resize_control();
			}
		,	onopen_end:function () {
				//resize_control();
			}
		,	onclose_end:function () {
	  			//resize_control();
			}
		}
	});
}
var reload_luoi_danhsach=<?php echo (get_system_one_config("ThoiGianRefreshFormLaySinhHieu"))?>;
var timer;
var timer1;
var lastsel_rowed3="";
var kiemtraClickLandau;
function create_ds_grid(){
	 window.kiemtrasearch=true;
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data&tungay='+$('#tungay').val()+'&denngay='+$('#denngay').val(),
		datatype: "json",
		colNames:['TT','ID_BenhNhan',"ID", "Họ tên", "Tuổi", "Giới", "Phân loại khám",
		"idloaikham","Trạng thái", "Giờ đến", "Ghi chú", "Lịch sử",'ĐT','','XĐNT','','Gọi loa','MaBH','Gọi loax','Tùy biếnx'],
colModel:[
			{name:'STT',index:'STT',width:"20%",align:'right',hidden:false,search:false},
			{name:'ID_BenhNhan',index:'ID_BenhNhan',width:"60%",align:'right',hidden:true},
                        {name:'MaBenhNhan',index:'MaBenhNhan',width:"70%",align:'right'},
			{name:'TenBenhNhan',index:'TenBenhNhan',width:"180", align:'left',hidden:false},
			{name:'Tuoi',index:'Tuoi', width:"40%",align:'right',hidden:false},
			{name:'GioiTinh',index:'GioiTinh', width:"40%",align:'center',},
			{name:'TenPhanLoaiKham',index:'TenPhanLoaiKham',width:"100%",align:'left',hidden:false,},
			{name:'ID_PhanLoaiKham',index:'ID_PhanLoaiKham',width:"10%", align:'left',hidden:true,},
			{name:'ID_TrangThai',index:'ID_TrangThai', width:"60%", align:'center',hidden:false,search:false,formatter: render_trangthai,summaryType:'count'},
			{name:'GioHenKham',index:'GioHenKham', width:"50%", align:'center',hidden:false,cellattr:functiontest},
			{name:'GhiChu',index:'GhiChu', width:"60%", align:'center',hidden:true,search:false},
			{name:'Lichsu',index:'Lichsu', width:"0%", align:'center',hidden:true,search:false},
			{name:'LoaiDoiTuongKham',index:'LoaiDoiTuongKham', width:"60%", align:'center',hidden:true,search:false},
			{name:'CoXacDinhNhanThan',index:'CoXacDinhNhanThan', width:"60%", align:'center',hidden:false,search:false},
			{name:'ID_XacDinhNhanThan',index:'ID_XacDinhNhanThan', width:"0%", align:'center',hidden:true,search:false},
			{name:'SoPhieuKhamGoiLoa',index:'SoPhieuKhamGoiLoa', width:"0%", align:'center',hidden:true,search:false},
			 {name: 'GoiLoa', index: 'GoiLoa', width: "60%", hidden: false, search: false},
			{name: 'MaYTe', index: 'MaYTe', width: "0%", hidden: true},
			{name: 'action', index: 'action', width: "60%", align: 'center', edittype: "button", hidden: true },
			{name: 'action2', index: 'action2', width: "60%", align: 'center', edittype: "button", hidden: true },
		],
		loadonce: false,
		scroll: false,
		modal:true,
                shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed3',
		sortname: 'MaBenhNhan',
		height:100,
		width:100,
		viewrecords: true,
		ignoreCase:true,
		sortorder: "asc",
	        grouping: true,
		//rownumbers:true,
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		groupingView: {groupField: ['ID_TrangThai'],
			groupOrder: ['asc'],
			groupSummary: [false],
			showSummaryOnHide: [false],
			groupColumnShow: [false],
			groupText: ['  {0} ({ID_TrangThai})'],
			groupCollapse: false,
			showSummaryOnHide: false,
		},
		serializeRowData: function (postdata) {

		},
		onSelectRow: function(id){
			//alert(lastsel_rowed3 + " " +id)
			var rowData = $("#rowed3").getRowData(id);
			if((lastsel_rowed3!=id)||(kiemtraClickLandau==true)){
						 $("#rowed4").jqGrid().setGridParam({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_sinhton_luotkham&id_luotkham='+id+"&id_benhnhan="+rowData["ID_BenhNhan"],loadonce: false,datatype: "json"}).trigger("reloadGrid");
						 $("#rowed5").jqGrid().setGridParam({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_sinhton_lichsu&id_benhnhan='+rowData["ID_BenhNhan"],loadonce: false,datatype: "json"}).trigger("reloadGrid");
						 $("#rowed6").jqGrid().setGridParam({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thetrang_luotkham&id_luotkham='+id+"&id_benhnhan="+rowData["ID_BenhNhan"],loadonce: false,datatype: "json"}).trigger("reloadGrid");
						  $("#rowed7").jqGrid().setGridParam({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thetrang_lichsu&id_benhnhan='+rowData["ID_BenhNhan"],loadonce: false,datatype: "json"}).trigger("reloadGrid");
						  $('#gbox_rowed4 .ui-jqgrid-title span').html(rowData["TenBenhNhan"]);
						  $('#gbox_rowed5 .ui-jqgrid-title span').html(rowData["TenBenhNhan"]);
						  $('#gbox_rowed6 .ui-jqgrid-title span').html(rowData["TenBenhNhan"]);
						  $('#gbox_rowed7 .ui-jqgrid-title span').html(rowData["TenBenhNhan"]);
						  window.tuoi = rowData["Tuoi"];
						  window.gioitinh = rowData["GioiTinh"];
						  window.idbenhnhan = rowData["ID_BenhNhan"];
					  	  window.luotkham= id;
						  window.trangthai= rowData["ID_TrangThai"];
						  kiemtraClickLandau=false;
			}



			

			lastsel_rowed3=id;
			
			if(<?=$_SESSION["user"]["id_user"]?>==178){
				$.ajax({
					type: 'POST',
					async : false,
					url: "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ghichu&ID_BenhNhan="+rowData["ID_BenhNhan"],
					success: function(data, status, xhr) {				
						var isghichu= $.trim(data);	
						if(isghichu==1){
							$("#rowed3_ghichu_new").jqGrid("setGridParam",{datatype:"json", url: "pages.php?module=hanhchinh&view=ghi_chu_new&action=data_ghichubenhnhan&idbenhnhan="+rowData["ID_BenhNhan"],editurl: "pages.php?module=hanhchinh&view=ghi_chu_new&action=controller&idbenhnhan="+rowData["ID_BenhNhan"]}).trigger("reloadGrid");
							$("#rowed4_ghichu_new").jqGrid("setGridParam",{datatype:"json", url: "pages.php?module=hanhchinh&view=ghi_chu_new&action=data_ghichuluotkham&idbenhnhan="+rowData["ID_BenhNhan"],editurl: "pages.php?module=hanhchinh&view=ghi_chu_new&action=controller1&lk="+id,}).trigger("reloadGrid");
							$("#dialog_ghichu_new" ).dialog("open");	
						}						
					},
				});			   		
			}
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
			var tmp1 = $("#rowed3").jqGrid('getDataIDs');
			for(var i=0;i < tmp1.length;i++){
				var rowData = $("#rowed3").getRowData(tmp1[i]);
                var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";
               
                var soLK= rowData['SoPhieuKhamGoiLoa'];
                 



				var se = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"'  onclick=\"GoiLoa('" + soLK + "','" + ipClient  + "','" +  0  +"');\" />";


				$("#rowed3").jqGrid('setRowData', tmp1[i], {action: se});

				var se2 = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"'  onclick=\"GoiLoa2('" + soLK + "','" + ipClient  + "','" +  0  +"');\" />";


				$("#rowed3").jqGrid('setRowData', tmp1[i], {action2: se2});

				GoiLoa = "<button class='custom_button ' style='height:22px;' onclick=\"XepHangSendSocket('<?=$_SERVER['SERVER_NAME']?>','0000','" + rowData["MaYTe"] + "','" +tmp1[i]+ "','0','');\" >Gọi loa</button>";
				$("#rowed3").jqGrid('setRowData', tmp1[i], {GoiLoa: GoiLoa});







				//var cl = tmp1[i]; //be = "<input style='height:22px;width:20px;' type='button' value='E' onclick=\"jQuery('#rowed3').editRow('"+cl+"');\" /
				if(rowData["GhiChu"]==1){
					var _class="do";
				}else if(rowData["GhiChu"]==2){
					var _class="cam";
				}else  if(rowData["GhiChu"]==0){
					var _class="xanh";
				}


				if(rowData["LoaiDoiTuongKham"]=='BHYT'){
					var _class2="do";
				}else{var _class2="xanh";}
				ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='G.chú' onclick=\"moghichu('"+rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
				lichsu = "<input class='custom_button' style='height:22px;width:50px;' type='button' value='L.sử' onclick=\"molichsu('"+rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
				//xdnhanthan="<input class='custom_button do' style='height:22px;width:50px;' type='button' value='"+ rowData["LoaiDoiTuongKham"]+"' onclick=\"molichsu('"+rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
				//xdnhanthan = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='"+rowData["LoaiDoiTuongKham"]+"' onclick='moXacDinhNhanThan('"+rowData["LoaiDoiTuongKham"]+"','"+rowData["ID_BenhNhan"]+"');'/>";
				//loaiDoiTuongKham = "<input class='custom_button " + _class2 + "' style='height:22px;width:46px;' type='button' value='"+rowData["LoaiDoiTuongKham"]+"' onclick=\"moXacDinhNhanThan('"+rowData["ID_BenhNhan"] + "','" + rowData["LoaiDoiTuongKham"] + "');\" />";
				coXacDinhNhanThan = "<input class='custom_button " + _class2 + "' style='height:22px;width:46px;' type='button' value='XĐNT' onclick=\"moXacDinhNhanThan('"+rowData["ID_BenhNhan"] + "','" + rowData["ID_XacDinhNhanThan"] + "');\" />";
				$("#rowed3").jqGrid('setRowData',tmp1[i],{GhiChu:ghichu});
				$("#rowed3").jqGrid('setRowData',tmp1[i],{Lichsu:lichsu});
				$("#rowed3").jqGrid('setRowData',tmp1[i],{CoXacDinhNhanThan:coXacDinhNhanThan});
			}
			if(lastsel_rowed3==""){
				lastsel_rowed3=tmp1[0];
				kiemtraClickLandau=true;
			}
			$("#rowed3").jqGrid("setSelection",lastsel_rowed3, true);
			if($('#rowed3').getGridParam("loadonce")==false){
				//timer_danhsach("stop");
				timer_title_danhsach("stop");
				//timer_danhsach("start");
				timer_title_danhsach("start");
			}
		},

		caption: "Bệnh nhân chờ lấy dấu hiệu sinh tồn <span class='demgio'> - tự động reload sau "+reload_luoi_danhsach+" giây</span>"
	});
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false, edit: false, del: false, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true});

	$('#gbox_rowed3 .ui-search-table').find(':input[type=text]').each(function(){
			$("#"+this.id).focusin(function(){
				$('#rowed3').setGridParam({loadonce: true}).trigger('reloadGrid');
				window.kiemtrasearch=false;
				//timer_danhsach("stop");
				timer_title_danhsach("stop");
				$('#gbox_rowed3 .ui-jqgrid-title span.demgio').html("(lưới đã dừng reload để tìm kiếm - bấm vào đây để tiếp tục\)");
				//$('#gbox_rowed3 .ui-jqgrid-title span.demgio').blink({delay: 500});
			});
	});
	$('#gbox_rowed3 .ui-jqgrid-title span.demgio').click(function(){
		if(window.kiemtrasearch==false){
			$('#rowed3').setGridParam({loadonce: false,datatype: "json"}).trigger('reloadGrid');
			window.kiemtrasearch=true;
			bodem=0;
			tam=reload_luoi_danhsach;
			//timer_danhsach("start");
			timer_title_danhsach("start");
			//$('#gbox_rowed3 .ui-jqgrid-title span.demgio').blink({status: true});
		}
	});
	resize_control();
}

function GoiLoa(SoLk,ipClient,iD_LuotKham)
    {
        var chuoiGoi='&SoLk='+SoLk+'&n_nhomgoi=2'+'&ipClient='+ipClient+'&oper=default';
     
         $.post('pages.php?module=web_services&action=controllerSendSocket&strFromClient=' + chuoiGoi).done(function(data)
        {
            if ($.trim(data) == '1') {
                tooltip_message("đã cập nhật hệ thống");

               
            }
       

        });


    }


function GoiLoa2(SoLk,ipClient,iD_LuotKham)
    {
      

         goiloa_dialog_main("IP  " + ipClient+" - Số phiếu khám "+SoLk, 830, 350, "pages.php?module=web_services&view=goi_loa_tuy_chinh&action=index&id_form=41&type=test&ipClient="+ipClient+"&SoLk="+SoLk);


    }

function timer_title_danhsach(_value){
	if(_value=="start"){
		console.log("start")
		var bodem=0;
		var tam=reload_luoi_danhsach;
		timer1 =setInterval(function(){
			if(window.kiemtrasearch==true){
				$('#gbox_rowed3 .ui-jqgrid-title span.demgio').html("- tự động reload sau "+tam+" giây");
				bodem+=1;
				tam--;
				if(reload_luoi_danhsach==bodem){
					bodem=0;
					$('#rowed3').setGridParam({loadonce: false,datatype: "json"}).trigger('reloadGrid');
					tam=reload_luoi_danhsach;
					timer_title_danhsach("stop")
				}
			}
		},(1000));
	}else{
		console.log("stop")
		clearInterval(timer1);
	}
}
function create_sinhton_grid(){
	 mydata=[];
	 $("#rowed4").jqGrid({
		data:mydata,
		datatype: "local",
		colNames:["id_luotkham","id_benhnhan",'Lần đo','Người đo',"Ngày giờ đo", "Ps", "Pd", "Hr", "Temp","Nhịp thở"],
		colModel:[
			{name:'ID_LuotKham',index:'ID_LuotKham',width:"40%",align:'right',hidden:true, editable: true},
			{name:'ID_BenhNhan',index:'ID_BenhNhan',width:"40%",align:'right',hidden:true, editable: true},
			{name:'LanDoThu',index:'LanDoThu',width:"30%",align:'right',hidden:false, editable: true},
			{name:'NguoiThucHien',index:'NguoiThucHien',width:"120%",align:'left',hidden:false, editable: true,formatter: "select",editoptions:{value:window.nickname1, defaultValue: <?=$_SESSION['user']['id_user']?>},edittype:"select"},
			{name:'NgayGioDo',index:'NgayGioDo',width:"100%",align:'center', editable: true,hidden:false},
			{name:'Ps',index:'Ps',width:"40%", align:'right',hidden:false, editable: true,editoptions: {defaultValue: '0'},cellattr: tomaudo,editrules:{minValue:0}},
			{name:'Pd',index:'Pd', width:"40%",align:'right',hidden:false, editable: true,editoptions: {defaultValue: '0'},cellattr: tomaudo,editrules:{minValue:0}},
			{name:'Mach',index:'Mach', width:"40%",align:'right', editable: true,editoptions: {defaultValue: '0'},cellattr: tomaudo,editrules:{minValue:0}},
			//{name:'ThanNhiet',index:'ThanNhiet',width:"40%",align:'right',hidden:false, editable: true,editoptions: {defaultValue: '0'},cellattr: tomaudo,editrules:{minValue:0},formatter:demicalFmatter},
			{name:'ThanNhiet',index:'ThanNhiet', width:"40%",align:'right',hidden:false, editable: true,cellattr: tomaudo,editrules:{required:false},editoptions: {defaultValue: '0'},editrules:{minValue:0}},
			{name:'NhipTho',index:'NhipTho', width:"40%",align:'right', editable: true,editoptions: {defaultValue: '0'},editrules:{minValue:0}},
		],
		grid_save_option: "",
		loadonce: true,
		scroll: false,
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed4',
		sortname: 'MaBenhNhan',
		height:100,
		width:100,
		viewrecords: true,
		ignoreCase:true,
		sortorder: "asc",
	    grouping: true,
		//rownumbers:true,
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		serializeRowData: function(postdata) {
                return postdata;
        },
		onSelectRow: function(id){
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#prowed4 .ui-icon-pencil").click();
 		},
		loadComplete: function(data) {
		 	var tmp1 = $("#rowed4").jqGrid('getDataIDs');
			if((tmp1.length<1) || (window.trangthai=="Danh sách bệnh nhân đã lấy sinh hiệu")){
				$('#thuchien').button("disable");
			}else{
				$('#thuchien').button("enable");
			}
		},
		caption: "Đo dấu hiệu sinh tồn <span></span>",
		editurl:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_sinhton_luotkham&hienmaloi=a'
	});
	resize_control();
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true},{},{},
		{
			reloadAfterSubmit:false
			,navkeys : [ true, 38, 40 ]
			,closeOnEscape : true
			,afterSubmit : function(response, postdata) {
				if(response.responseText==1){
					var success=false;
					var new_id="<?php get_text1("xoa_khongthanhcong") ?>";
				}else{
					$("#rowed5").trigger("reloadGrid");
					$("#rowed4").trigger("reloadGrid");
					tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
					var success=true;
					var new_id="<?php get_text1("xoa_thanhcong") ?>";
				};
				return [success,new_id];
			}

		}
	);
	$("#rowed4").jqGrid('inlineNav', '#prowed4', {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
            addParams: {
				keys:true,
                position: "last",
               // mtype: 'post',
                addRowParams: {
					keys:true,
                    aftersavefunc: function(rowId, response,lastsel) {
						if (response.responseText == 1) {
							tooltip_message("Có lỗi trong quá trình lưu dữ liệu. Vui lòng thử lại");
                        } else {
							tooltip_message("Lưu dữ liệu thành công");
							$("#rowed4").trigger("reloadGrid");
							$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
								$("#prowed4 .ui-icon-pencil").click();
							} } );
						        $('#rowed4').focus();
                        }
						$("#prowed6 .ui-icon-plus").click();
                    },
					oneditfunc: function(rowId) {
						$("#rowed4").jqGrid('unbindKeys');
						var tmp1 = $("#rowed4").jqGrid('getDataIDs');
						if((tmp1).length>1){
							var rowData = $("#rowed4").getRowData(tmp1[(tmp1).length-2]);
							$("#"+rowId+"_LanDoThu").val(parseInt(rowData["LanDoThu"])+1);
						}else{
							$("#"+rowId+"_LanDoThu").val(1);
						}
					   $("#"+rowId+"_Ps").focus();
					   $("#"+rowId+"_NgayGioDo").val(new Date().toString("H:mm dd"+$.cookie('phancachngay')+"MM"+$.cookie('phancachngay')+"yyyy"));
					   $("#"+rowId+"_LanDoThu").attr("disabled","disabled");
					   $("#"+rowId+"_NgayGioDo").keydown(function(e){
   							e.preventDefault();
					   });
					   $("#"+rowId+"_ID_LuotKham").val(window.luotkham);
					   $("#"+rowId+"_ID_BenhNhan").val(window.idbenhnhan);
		 			   number_textbox_demical("#"+rowId+"_ThanNhiet");
					   number_textbox("#"+rowId+"_Ps");
					   number_textbox_demical("#"+rowId+"_Pd");
					   number_textbox_demical("#"+rowId+"_Mach");
					   $("#"+rowId+"_Ps").select();
					},
                    afterrestorefunc: function() {
						$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
							$("#prowed4 .ui-icon-pencil").click();
						} } );
						 $('#rowed4').focus();
                    },
					beforeSaveRow: function(options, rowId) {
						 /* if($("#"+rowId+"_ThanNhiet").val()<34){
							  $("#"+rowId+"_ThanNhiet").val(37);
						  }else if($("#"+rowId+"_ThanNhiet").val()>42){
							  $("#"+rowId+"_ThanNhiet").val(42);
						  }
						  */
						  if($("#"+rowId+"_Ps").val()>300){
							  $("#"+rowId+"_Ps").val(300);
						  }
						  if($("#"+rowId+"_Hr").val()>300){
							  $("#"+rowId+"_Ps").val(300);
						  }
						  if(parseInt($("#"+rowId+"_Pd").val())>parseInt($("#"+rowId+"_Ps").val())){
							  alert("Bạn đã nhập sai. Pd không thể lớn hơn Ps")
							  return false;
						  }
					},
                }
            	},
            editParams: {
				keys:true,
				 	aftersavefunc: function(rowId, response,lastsel) {
						if (response.responseText == 1) {
							tooltip_message("Có lỗi trong quá trình lưu dữ liệu. Vui lòng thử lại");
                        } else {
							tooltip_message("Lưu dữ liệu thành công");
							$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
								$("#prowed4 .ui-icon-pencil").click();
							} } );

						        $('#rowed4').focus();
                        };
                    },
                	oneditfunc: function(rowId) {
					   $("#rowed4").jqGrid('unbindKeys');
					   $("#"+rowId+"_NguoiThucHien").focus();
					   //$("#"+rowId+"_NgayGioDo").val(new Date().toString("yyyy-MM-dd H:mm"));
					   $("#"+rowId+"_LanDoThu").attr("disabled","disabled");
					   $("#"+rowId+"_NgayGioDo").keydown(function(e){
   							e.preventDefault();
					   });
					  // $("#"+rowId+"_ID_LuotKham").val(window.luotkham);
					  // $("#"+rowId+"_ID_BenhNhan").val(window.idbenhnhan);
		 			   number_textbox_demical("#"+rowId+"_ThanNhiet");
					   number_textbox("#"+rowId+"_Ps");
					   number_textbox_demical("#"+rowId+"_Pd");
					   number_textbox_demical("#"+rowId+"_Mach");
					},
                    afterrestorefunc: function() {
						$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
							$("#prowed4 .ui-icon-pencil").click();
						} } );
						 $('#rowed4').focus();
                    },
					beforeSaveRow: function(options, rowId) {
						  /*if($("#"+rowId+"_ThanNhiet").val()<34){
							  $("#"+rowId+"_ThanNhiet").val(37);
						  }else if($("#"+rowId+"_ThanNhiet").val()>42){
							  $("#"+rowId+"_ThanNhiet").val(42);
						  }*/
						  if($("#"+rowId+"_Ps").val()>300){
							  $("#"+rowId+"_Ps").val(300);
						  }
						  if($("#"+rowId+"_Hr").val()>300){
							  $("#"+rowId+"_Ps").val(300);
						  }
						  if(parseInt($("#"+rowId+"_Pd").val())>parseInt($("#"+rowId+"_Ps").val())){
							  alert("Bạn đã nhập sai. Pd không thể lớn hơn Ps")
							  return false;
						  }
					},
			}
       	 });
		$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
					$("#rowed4_iledit .ui-icon-pencil").click();
			} } );

}


function create_lichsu_sinhton_grid(){
	 mydata=[];
	 $("#rowed5").jqGrid({
		data:mydata,
		datatype: "local",
		colNames:['Người đo',"Ngày giờ đo", "Ps", "Pd", "Hr", "Temp","N.Thở"],
		colModel:[
			{name:'NguoiThucHien',index:'NguoiThucHien',width:"80%",align:'left',hidden:false,formatter:render_name},
            {name:'NgayGioDo',index:'NgayGioDo',width:"220%",align:'left'},
			{name:'Ps',index:'Ps',width:"40%", align:'right',hidden:false},
			{name:'Pd',index:'Pd', width:"40%",align:'right',hidden:false},
			{name:'Hr',index:'Hr', width:"40%",align:'right',},
			{name:'Temp',index:'Temp',width:"40%",align:'right',hidden:false,},
			{name:'NhipTho',index:'NhipTho',width:"40%",align:'right',hidden:false,}
		],
		loadonce: true,
		scroll: false,
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed5',
		sortname: 'MaBenhNhan',
		height:100,
		width:100,
		viewrecords: false,
		ignoreCase:true,
		sortorder: "asc",
	    grouping: true,
		//rownumbers:true,
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		  /* $("#rowed5").tomau_grid({
				_cols:["NgayGioDo","NgayGioDo"],
				_condition:["bé hơn","bé hơn"],
				_value:["5:0","4:0"],
				_class:["quathoigian_max","quathoigian_min"],
				_types:["ngày","ngày"],
				_all:["false","false"],
			})
			*/
			/* $("#rowed5").tomau_grid({
				_cols:["NgayGioDo"],
				_condition:["bé hơn"],
				_value:["5:0"],
				_class:["quathoigian_max"],
				_types:["ngày"],
				_all:["false"],
			})*/
		},
		caption: "Lịch sử sinh hiệu <span></span>"
	});
	resize_control();
	//$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false, del: false, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true});

}
function create_thetrang_grid(){
	 mydata=[];
	 $("#rowed6").jqGrid({
		data:mydata,
		datatype: "local",
		colNames:['ID_LuotKham','ID_BenhNhan','Người đo',"Ngày giờ đo", "Chiều cao (cm)", "Cân nặng (kg)", "Vòng ngực (cm)"]
		,colModel:[
			{name:'ID_LuotKham',index:'ID_LuotKham',width:"40%",align:'right',hidden:true, editable: true},
			{name:'ID_BenhNhan',index:'ID_BenhNhan',width:"40%",align:'right',hidden:true, editable: true},
			{name:'NguoiThucHien',index:'NguoiThucHien',width:"120%",align:'left',hidden:false, editable: true,formatter: "select",editoptions:{value:window.nickname1, defaultValue: <?=$_SESSION['user']['id_user']?>},edittype:"select"},
            {name:'NgayGioDo',index:'NgayGioDo',width:"220%",align:'left', editable: true},
			{name:'ChieuCao',index:'ChieuCao',width:"40%", align:'right',hidden:false, editable: true,cellattr: tomaudo,editrules:{required:false},editoptions: {defaultValue: '0'},editrules:{minValue:0}},
			{name:'CanNang',index:'CanNang', width:"40%",align:'right',hidden:false, editable: true,cellattr: tomaudo,editrules:{required:false},editoptions: {defaultValue: '0'},editrules:{minValue:0}},
			{name:'VongNguc',index:'VongNguc', width:"40%",align:'right', editable: true,cellattr: tomaudo,editrules:{required:false},editoptions: {defaultValue: '0'},editrules:{minValue:0}},
		],
		grid_save_option: "",
		loadonce: true,
		scroll: false,
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed6',
		sortname: 'MaBenhNhan',
		height:100,
		width:100,
		viewrecords: true,
		ignoreCase:true,
		sortorder: "asc",
	    grouping: true,
		//rownumbers:true,
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		serializeRowData: function (postdata) {
		    return postdata;
		},
		onSelectRow: function(id){
			 var rowData = $("#rowed6").getRowData(id);
			 TinhToan(rowData["ChieuCao"],rowData["CanNang"],rowData["VongNguc"],window.gioitinh,window.tuoi);
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#prowed6 .ui-icon-pencil").click();
 		},
		loadComplete: function(data) {
			 var tmp1 = $("#rowed6").jqGrid('getDataIDs');
			 var rowData = $("#rowed6").getRowData(tmp1[0]);
/*			 if(rowData["ChieuCao"]=='')
			 	rowData["ChieuCao"]=0;
			 if(rowData["CanNang"]=='')
			 	rowData["CanNang"]=0;
			 if(rowData["VongNguc"]=='')
			 	rowData["VongNguc"]=0;*/
			 TinhToan(rowData["ChieuCao"],rowData["CanNang"],rowData["VongNguc"],window.gioitinh,window.tuoi);
		},
		caption: "<div style='width:600px'><div style='float:left;display:inline-block;'>Đo thể trạng <span></span></div><div style='display:inline-block; float:right'> Double click vào đây để lấy tín hiệu từ cân</div></div>",
		editurl:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_thetrang_luotkham'
	});
	$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true},{},{},
		{
			reloadAfterSubmit:false
			,navkeys : [ true, 38, 40 ]
			,closeOnEscape : true
			,afterSubmit : function(response, postdata) {
				if(response.responseText==1){
					var success=false;
					var new_id="<?php get_text1("xoa_khongthanhcong") ?>";
				}else{
					$("#rowed7").trigger("reloadGrid");
					tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
					var success=true;
					var new_id="<?php get_text1("xoa_thanhcong") ?>";
				};
				return [success,new_id];
			}

		}
	);
	$("#rowed6").jqGrid('inlineNav', '#prowed6', {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
            addParams: {
				keys:true,
                position: "last",
               // mtype: 'post',
                addRowParams: {
					keys:true,
                    aftersavefunc: function(rowId, response,lastsel) {
						if (response.responseText == 1) {
							tooltip_message("Có lỗi trong quá trình lưu dữ liệu. Vui lòng thử lại");
                        } else {
							tooltip_message("Lưu dữ liệu thành công");
							$("#rowed6").trigger("reloadGrid");
							$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {
								$("#prowed6 .ui-icon-pencil").click();
							} } );
						        $('#rowed6').focus();
                        }
							setTimeout(function(){
								$('#thuchien').focus();
							},2000);
                    },
					oneditfunc: function(rowId) {
					   jqg6id = rowId;
					   $("#rowed6").jqGrid('unbindKeys');
					   var tmp1 = $("#rowed6").jqGrid('getDataIDs');
					   var tmp2 = $("#rowed6").jqGrid('getDataIDs');
					  // alert(tmp2.length)
					   if(tmp2.length>1){
						    var rowData2 = $("#rowed6").getRowData(tmp1[tmp2.length-2]);
							$("#"+rowId+"_ChieuCao").val(rowData2["ChieuCao"]);
						   $("#"+rowId+"_CanNang").val(rowData2["CanNang"]);
						   $("#"+rowId+"_VongNguc").val(rowData2["VongNguc"]);
						   $("#"+rowId+"_ChieuCao").focus();
					   }else{
						    var rowData2 = $("#rowed6").getRowData(tmp2[0]);

							$("#"+rowId+"_ChieuCao").val(0);
						   $("#"+rowId+"_CanNang").val(0);
						   $("#"+rowId+"_VongNguc").val(0);
						   $("#"+rowId+"_ChieuCao").focus();
					   }

					 /*  $("#"+rowId+"_ChieuCao").val(rowData2["ChieuCao"]);
					   $("#"+rowId+"_CanNang").val(rowData2["CanNang"]);
					   $("#"+rowId+"_VongNguc").val(rowData2["VongNguc"]);*/
					   $("#"+rowId+"_ChieuCao").focus();
					   $("#"+rowId+"_NgayGioDo").val(new Date().toString("H:mm dd"+$.cookie('phancachngay')+"MM"+$.cookie('phancachngay')+"yyyy"));

					   $("#"+rowId+"_NgayGioDo").keydown(function(e){
   							e.preventDefault();
					   });
					   $("#"+rowId+"_ID_LuotKham").val(window.luotkham);
					   $("#"+rowId+"_ID_BenhNhan").val(window.idbenhnhan);
		 			   number_textbox("#"+rowId+"_ChieuCao");
					   number_textbox_demical("#"+rowId+"_CanNang");
					   number_textbox("#"+rowId+"_VongNguc");
					   $("#"+rowId+"_ChieuCao" + " , " + "#"+rowId+"_CanNang" + " , " + "#"+rowId+"_VongNguc").focusout(function(e){
						  // if((e.keyCode==9)||(e.keyCode==13)){
							   if($(this).val()==""){
								   $(this).val(0);
							   }
						   /*}else{
							   if($(this).val().substring(0,1)==0){
								   $(this).val($(this).val().substring(1,$(this).val().length));
							   }
						   }*/
						   TinhToan($("#"+rowId+"_ChieuCao").val(),$("#"+rowId+"_CanNang").val(),$("#"+rowId+"_VongNguc").val(),window.gioitinh,window.tuoi);
					   });

					},
                    afterrestorefunc: function() {
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {
							$("#prowed6 .ui-icon-pencil").click();
						} } );
						 $('#rowed6').focus();
                    },
					beforeSaveRow: function(options, rowId) {

					},
                }
            	},
            editParams: {
				keys:true,
				 	aftersavefunc: function(rowId, response,lastsel) {
						if (response.responseText == 1) {
							tooltip_message("Có lỗi trong quá trình lưu dữ liệu. Vui lòng thử lại");
                        } else {
							tooltip_message("Lưu dữ liệu thành công");
							$("#rowed6").trigger("reloadGrid");
							$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
								$("#prowed4 .ui-icon-pencil").click();
							} } );

						        $('#rowed4').focus();
                        }
                    },
                	oneditfunc: function(rowId) {
					   jqg6id = rowId;
					   $("#rowed6").jqGrid('unbindKeys');
					   var tmp1 = $("#rowed6").jqGrid('getDataIDs');
					   $("#"+rowId+"_ChieuCao").focus();
					   $("#"+rowId+"_NgayGioDo").keydown(function(e){
   							e.preventDefault();
					   });
		 			   number_textbox("#"+rowId+"_ChieuCao");
					   number_textbox_demical("#"+rowId+"_CanNang");
					   number_textbox("#"+rowId+"_VongNguc");
					   $("#"+rowId+"_ChieuCao" + " , " + "#"+rowId+"_CanNang" + " , " + "#"+rowId+"_VongNguc").keyup(function(e){
						   if((e.keyCode==8)||(e.keyCode==46)){
							   if($(this).val()==""){
								   $(this).val(0);
							   }
						   }else{
							   if($(this).val().substring(0,1)==0){
								   $(this).val($(this).val().substring(1,$(this).val().length));
							   }
						   }
						   TinhToan($("#"+rowId+"_ChieuCao").val(),$("#"+rowId+"_CanNang").val(),$("#"+rowId+"_VongNguc").val(),window.gioitinh,window.tuoi);
					   });
					},
                    afterrestorefunc: function() {
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {
							$("#prowed6 .ui-icon-pencil").click();
						} } );
						 $('#rowed6').focus();
                    },
					beforeSaveRow: function(options, rowId) {

					},
			}
       	 });
		$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
					$("#rowed6_iledit .ui-icon-pencil").click();
			} } );
	     $("#gview_rowed6 .ui-jqgrid-title").css("cursor","pointer");
		 /*$("#gview_rowed6 .ui-jqgrid-title").dblclick(function(e) {
				send_message("scale","scale|1");
		 });
		 */
}
function create_lichsuthetrang_grid(){
	 mydata=[];
	 $("#rowed7").jqGrid({
		data:mydata,
		datatype: "local",
		colNames:['Người đo',"Ngày giờ đo", "Chiều cao (cm)", "Cân nặng (kg)", "Vòng ngực (cm)"],colModel:[
			{name:'NguoiThucHien',index:'NguoiThucHien',width:"80%",align:'left',hidden:false,formatter:render_name},
            {name:'NgayGioDo',index:'NgayGioDo',width:"220%",align:'left'},
			{name:'ChieuCao',index:'ChieuCao',width:"40%", align:'right',hidden:false},
			{name:'CanNang',index:'CanNang', width:"40%",align:'right',hidden:false},
			{name:'VongNguc',index:'VongNguc', width:"40%",align:'right',},
		],
		loadonce: true,
		scroll: false,
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed7',
		sortname: 'MaBenhNhan',
		height:100,
		width:100,
		viewrecords: true,
		ignoreCase:true,
		sortorder: "asc",
	    grouping: true,
		//rownumbers:true,
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {

		},
		caption: "Lịch sử thể trạng <span></span>"
	});
	resize_control();
	//$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: false, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true});

}


function moghichu(id_benhnhan,hovaten){
	$.post('pages.php?module=web_services&function=get_link&action=index&folder=ghi_chu:').done(function(data) {
       elem=1 + Math.floor(Math.random() * 1000000000);
       var folder= data.split(';');
       var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idbenhnhan='+id_benhnhan;
       dialog_main("Ghi Chú Của Bệnh Nhân "+hovaten,90,70,elem,duong_dan);
	});
}
function molichsu(id_benhnhan,hovaten){
	parent.postMessage('molichsudauhieusinhton;'+id_benhnhan+';'+hovaten , '*');
}
function render_trangthai(cellValue, opts, rowObject){
	if((cellValue==null)||(cellValue=="danglaydauhieusinhton")){
		return "Danh sách bệnh nhân chưa lấy sinh hiệu";
	}else if(cellValue=="Xong"){
		return "Danh sách bệnh nhân đã lấy sinh hiệu";
	}
}

function resize_control(){
	right_height=$(window).height()/4-83;
	$("#rowed3").setGridWidth($(".ui-layout-west").width()-10);
	$("#rowed3").setGridHeight($(window).height()-180);
	$("#rowed4,#rowed5,#rowed6,#rowed7").setGridWidth($(".ui-layout-center").width()-11);
	$("#rowed4,#rowed5,#rowed6,#rowed7").setGridHeight(right_height);
}


function render_name(cellValue, opts, rowObject) {
        var tam1;
        nickname1 = window.nickname.split(";");
        for (i = 0; i <= nickname1.length - 1; i++) {
            temp = nickname1[i].split(":");
            if (temp[1] == cellValue) {
                tam1 = temp[0];
                break;
            }
        }
        return tam1;
}
 function merge_cell(rowId, tv, rawObject, cm, rdata){
	  //tv la noi dung cell, rawObject mang json tra ve cm la cell option

	  //return ' rowspan=2'

 }
 function tomaudo(rowId, tv, rawObject, cm, rdata){
	 return ' class="chumaudo"';
 }

function functiontest(rowId, tv, rawObject, cm, rdata){
	//rowData,ids,i,grid
	var grid=$(this);
 	var ids=rowId;
	var rowData =rdata;
	if((rowData["ID_TrangThai"]=="danglaydauhieusinhton")||(rowData["ID_TrangThai"]==null)){
			var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();
			var giogoc=rowData["GioHenKham"].split(":");
			var thoigianMax=Date.today().set({
				millisecond: 0,
				second: 0,
				minute: parseInt(curr_minute),
				hour: parseInt(curr_hour),
				day: parseInt(dd),
				month: parseInt(mm)-1,
				year: parseInt(yyyy)
			});
			var thoigianMin=Date.today().set({
				millisecond: 0,
				second: 0,
				minute: parseInt(curr_minute),
				hour: parseInt(curr_hour),
				day: parseInt(dd),
				month: parseInt(mm)-1,
				year: parseInt(yyyy)
			});
			var doituonggiogoc=Date.today().set({
				millisecond: 0,
				second: 0,
				minute: parseInt(giogoc[1]),
				hour: parseInt(giogoc[0]),
				day: parseInt(dd),
				month: parseInt(mm)-1,
				year: parseInt(yyyy)
			});
                       // alert((thoigianMin-doituonggiogoc)/60000)
			thoigianMax=thoigianMax.addMinutes(-15);
			thoigianMax=thoigianMax.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
			thoigianMin=thoigianMin.addMinutes(-10);
			thoigianMin=thoigianMin.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
			//console.log(hientai + '  ' +hientai1)
			doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
			chuoidich= new Date(doituonggiogoc);
			thoigianMin= new Date(thoigianMin);
			thoigianMax= new Date(thoigianMax);
			//console.log(chuoidich +"<=" +thoigianMin)
			//console.log(chuoidich +"<=" +thoigianMax)

			if((chuoidich<=thoigianMin) && (chuoidich<=thoigianMax)){
			 	return ' class="quathoigian_max"';
				//grid.setCell(ids, "GioHenKham", '', "quathoigian_max");
			}else if(chuoidich<=thoigianMin){
				return ' class="quathoigian_min"';
				//grid.setCell(ids, "GioHenKham", '', "quathoigian_min");
			}
	  }
}
function dathuchien(idluotkham){
		$.ajax({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_dathuchien&oper=dathuchien&idluotkham='+idluotkham, async: false, success: function(data, result) {
                    if (result==1){
                        tooltip_message('Thất bại, vui lòng thử lại');
					}else{
						tooltip_message('Đã thực hiện');
						emr_xephangluotkham(idluotkham,0,1,false);// Đẩy vào phòng xếp hàng
						$("#rowed3").jqGrid().trigger("reloadGrid");
						//$("#thuchien").focusout();
					}
            }}).responseText;
}

function TinhToan(chieucao,cannang,vongnguc,gioitinh,tuoi){
	if((typeof(chieucao)=="undefined")||(typeof(cannang)=="undefined")&&(typeof(cannang)=="undefined")){
		$("#cannang_a,#cannang_b,#pignet_b,#pignet_a,#BMI_a,#BMI_b,#chatbeo_a,#chatbeo_b").val("");
		return false;
	}
	chieucao=convert_comma_dot(chieucao);
	cannang=convert_comma_dot(cannang);
	vongnguc=convert_comma_dot(vongnguc);

	var diengiai_pignet="",css_pignet="",css_BMI="",diengiai_BMI="";
	var pignet=parseFloat(chieucao)-(parseFloat(cannang)+parseFloat(vongnguc));
	$("#pignet_a").val(pignet.toFixed(0));
	if(pignet<10){
		diengiai_pignet="Rất tốt";
		css_pignet="ChuMauXanhPignet";
	}else if((pignet>=10)&&(pignet<20)){
		diengiai_pignet="Tốt";
		css_pignet="ChuMauXanhPignet";
	}else if((pignet>=20)&&(pignet<25)){
		diengiai_pignet="Trung bình";
		css_pignet="ChuMauVangPignet";
	}else if((pignet>=25)&&(pignet<35)){
		diengiai_pignet="Yếu";
		css_pignet="ChuMauDoPignet";
	}else if(pignet>=35){
		diengiai_pignet="Rất yếu";
		css_pignet="ChuMauDoPignet";
	}
	$("#pignet_b").val(diengiai_pignet);
	$("#pignet_b, #pignet_a").removeClass("ChuMauXanhPignet").removeClass("ChuMauVangPignet").removeClass("ChuMauDoPignet").addClass(css_pignet);

	//BMI
	var BMI=parseFloat(cannang)/(parseFloat(chieucao)*parseFloat(chieucao))*10000;
	$("#BMI_a").val(convert_comma_dot(BMI.toFixed(1)));
	if(BMI<18.5 ){
		diengiai_BMI="Gầy";
		css_BMI="ChuMauDoPignet";
	}else if((BMI>=18.5)&&(BMI<23)){
		diengiai_BMI="Bình thường";
		css_BMI="ChuMauXanhPignet";
	}else if((BMI>=23)&&(BMI<25)){
		diengiai_BMI="Thừa cân";
		css_BMI="ChuMauVangPignet";
	}else if((BMI>=25)&&(BMI<30)){
		diengiai_BMI="Béo phì độ I";
		css_BMI="ChuMauDoPignet";
	}else if((BMI>=30)&&(BMI<35)){
		diengiai_BMI="Béo phì độ II";
		css_BMI="ChuMauDoPignet";
	}else if(BMI>=35){
		diengiai_BMI="Béo phì độ III";
		css_BMI="ChuMauDoPignet";
	}
	$("#BMI_b").val(diengiai_BMI);
	$("#BMI_a, #BMI_b").removeClass("ChuMauXanhPignet").removeClass("ChuMauVangPignet").removeClass("ChuMauDoPignet").addClass(css_BMI);
	//ty le chat beo
	if(gioitinh=="Nam"){
		var chatbeo = 51.6 - 735/BMI + 0.029 * tuoi;
	}else{
		var chatbeo = 63.7 - 735/BMI + 0.029 * tuoi;
	}
	$("#chatbeo_a").val(convert_comma_dot(chatbeo.toFixed(2)));
	$("#chatbeo_b").val("%");
	//cannang
	var cannang1= 18.5*(chieucao * chieucao )/10000;
	var cannang2= 23*(chieucao * chieucao )/10000;
	$("#cannang_a").val(convert_comma_dot(cannang1.toFixed(0))+ " kg");
	$("#cannang_b").val(convert_comma_dot(cannang2.toFixed(0))+ " kg");
}
//Danh sách bệnh nhân chưa lấy sinh hiệu

function demicalFmatter (cellvalue, options, rowObject)
{
   // do something here
   return cellvalue;
   //return convert_comma_dot(cellvalue);
}
function moXacDinhNhanThan(pId_benhnhan,id_kham)

{
	//var check=isNaN(pid_kham);
//alert(id_kham);
if((id_kham)!=0)
{
	parent.postMessage('open_idbenhnhan;xacdinhnhanthan;;'+pId_benhnhan+';'+id_kham+';;;','*');
}
else
{alert('Hãy tic vào chọn xác định nhân thân trong form thông tin lượt khám và lưu lại')}
			
}

function create_ghichu_benhnhan() {
	var d =new Date();
	$("#rowed3_ghichu_new").jqGrid({
		url: "pages.php?module=hanhchinh&view=ghi_chu_new&action=data_ghichubenhnhan&idbenhnhan="+window.id_benhnhan_ghichu,
		datatype: "json",
		colNames: ["Người ghi chú","Ngày ghi chú","Nội dung",""],
		colModel: [
			{name: "nguoighichu", index: "nguoighichu", search: false, width: "20%", editable: false, align: "left", hidden: false,editoptions:{defaultValue:"<?=$_SESSION['user']['nickname']?>"}},
			{name: "ngayghichu", index: "ngayghichu", search: false, width: "20%", editable: false, align: "left", hidden: false, sorttype: "date",formatter: "date", formatoptions: {srcformat : "Y-m-d H:i", newformat: "H:i d-m-Y" },editoptions:{defaultValue:d }},
			{name: "noidung", index: "noidung",editrules:{required:true}, search: false, width: "60%", editable: true, align: "left", hidden: false},
			{name: "ID_NhanVienTao", index: "ID_NhanVienTao", search: false, width: "60%", editable: false, align: "left", hidden: true},
		],
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 1000,
		rowList: [],
		pginput:false,
		pgbuttons:false,
		pager: "#prowed3_ghichu_new",
		sortname: "NickName",
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		sortorder: "desc",
		editurl: "pages.php?module=hanhchinh&view=ghi_chu_new&action=controller&idbenhnhan="+window.id_benhnhan_ghichu,
		serializeRowData: function(postdata) {
		$("#rowed3_ghichu_new").trigger("reloadGrid");
			return postdata;
		},
		onSelectRow: function(id) {
			var nguoighichu = $("#rowed3_ghichu_new").jqGrid("getCell", id,"ID_NhanVienTao");
			if(<?=$_SESSION["user"]["login"]?>!=nguoighichu){					
				$("#rowed3_ghichu_new_iledit").addClass("ui-state-disabled");
				$("#del_rowed3_ghichu_new").addClass("ui-state-disabled");		
			}else{
				$("#rowed3_ghichu_new_iledit").removeClass("ui-state-disabled");	
				$("#del_rowed3_ghichu_new").removeClass("ui-state-disabled");	
			}
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
			$("#rowed3_ghichu_new_iledit .ui-icon-pencil").trigger("click");
		},
		loadComplete: function(data) {			
		},
		caption: "Ghi chú BN"
		});
		$("#rowed3_ghichu_new").jqGrid("navGrid","#prowed3_ghichu_new",{add: false,del:true,edit:false,search:false,refresh:false},
		{},
		{},
		{reloadAfterSubmit:true,url:"pages.php?module=hanhchinh&view=ghi_chu_new&action=controller&oper=del",navkeys : [ true, 38, 40 ],closeOnEscape : true,	
			afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="Xóa dữ liệu thành công";													
							}else{
								tooltip_message("Xóa dữ liệu thành công");
								var success=true;	
								var new_id="Xóa dữ liệu thành công";															
							};						
							return [success,new_id] ;
						},
						beforeShowForm: function(formid) {					 
							 canhgiua_del(formid);					 
						},				
		}			
		); 
		$("#rowed3_ghichu_new").jqGrid("inlineNav", "#prowed3_ghichu_new", {add: true, addtext: "", edittext: "", edit: true, closeOnEscape: true,
					addParams: {
						keys:true,
						position: "last",
						mtype: "post",			
						addRowParams: {
							keys:true,					
							oneditfunc: function(rowId) {	
								$("#rowed3_ghichu_new").jqGrid("unbindKeys");
							},
							aftersavefunc: function(rowId, response,lastsel) {
								if (response.responseText == 1) {	
								} else {
									$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
										$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
									}}); 							
									$("#rowed3_ghichu_new").focus();	      
								} 
							},
							afterrestorefunc: function() {
								$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
									$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
								}});
								$("#rowed3_ghichu_new").focus(); 
							},					 
						}
						},	
					editParams: {
						keys:true,			
						oneditfunc: function(rowId) {			
							$("#rowed3_ghichu_new").jqGrid("unbindKeys");				 
						},
						aftersavefunc: function(rowId, response) {	
							if (response.responseText == 1) {
							} 
							else{
								$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
									$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
								}});	
								$("#rowed3_ghichu_new").focus();	      
							} 
						},
						afterrestorefunc: function() {
							$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
									$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
							}});
							$("#rowed3_ghichu_new").focus(); 
						}
					}
					});
					$("#rowed3_ghichu_new").setGridWidth($(window).width()/2 - 60);
					$("#rowed3_ghichu_new").setGridHeight( ($(window).height()/100 * parseFloat(70)).toFixed(0)  - 150);
					$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
						$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
					}});		 
    }


			function create_ghichu_luotkham()
    {
		var d =new Date();
        $("#rowed4_ghichu_new").jqGrid({
            url: "pages.php?module=hanhchinh&view=ghi_chu_new&action=data_ghichuluotkham&idbenhnhan="+window.id_benhnhan_ghichu,
            datatype: "json",
            colNames: ["","Người ghi chú","Ngày ghi chú","Nội dung",""],
            colModel: [
				{name: "Caption", index: "Caption", search: false, width: "80%", editable: false, align: "left", hidden: true}, 
				{name: "NickName", index: "NickName", search: false, width: "20%", editable: false, align: "left",editoptions:{ defaultValue:"<?=$_SESSION['user']['nickname']?>"}}, 
				{name: "ngay",index:"ngay",search:false, width:"20%", editable:false,align:"center", sorttype: "date",formatter: "date", formatoptions: {srcformat : "Y-m-d H:i", newformat: "H:i d-m-Y" },editoptions:{defaultValue:d }},
                {name: "ghichu", index: "ghichu", search: false, width: "40%",editrules:{required:true}, editable: true, align: "left", hidden: false}, 				
				{name: "ID_NhanVienTao", index: "ID_NhanVienTao", search: false, width: "20%", editable: false, align: "left", hidden: true}, 
            ],
            loadonce: true,			
            scroll: false,
            modal: true,
            rowNum: 1000,
			pginput:false,
			editurl: "pages.php?module=hanhchinh&view=ghi_chu_new&action=controller1&lk="+window.id_luotkham_ghichu,
			pgbuttons:false,
            rowList: [],
            pager: "#prowed4_ghichu_new",
            sortname: "ngay",
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,         
			grouping:true,
			sortorder: "desc",
			serializeRowData: function(postdata) {
                jQuery("#rowed4_ghichu_new").trigger("reloadGrid");
                return postdata;
            },
			groupingView : 
			{
				groupField : ["ngay"],
				groupCollapse : false,
				groupColumnShow : [true],
				groupText: ["<b>Thời gian tạo ghi chú {0}</b>"],
			},
			onSelectRow: function(id) {   
				var nguoighichu = $("#rowed4_ghichu_new").jqGrid("getCell", id, "ID_NhanVienTao");
				if(<?=$_SESSION["user"]["login"]?>!=nguoighichu){					
					$("#rowed4_ghichu_new_iledit").addClass("ui-state-disabled");	
					$("#del_rowed4_ghichu_new").addClass("ui-state-disabled");	
				}else{
					$("#rowed4_ghichu_new_iledit").removeClass("ui-state-disabled");	
					$("#del_rowed4_ghichu_new").removeClass("ui-state-disabled");	
				}
            },
			ondblClickRow: function(rowId, rowIndex, columnIndex) {
                $("#rowed4_ghichu_new_iledit .ui-icon-pencil").trigger("click");				
            },
			loadComplete: function(data) {				
				if($.trim(window.id_luotkham_ghichu)==""){
					$("#rowed4_ghichu_new_iledit").addClass("ui-state-disabled");	
					$("#rowed4_ghichu_new_iladd").addClass("ui-state-disabled");	
					$("#del_rowed4_ghichu_new").addClass("ui-state-disabled");	
				}				
		    },
            caption: "Ghi chú lượt khám",   		
        });
		
		$("#rowed4_ghichu_new").jqGrid("navGrid","#prowed4_ghichu_new",{add: false,del:true,edit:false,search:false,refresh:false},
		{},
		{},
		{}
		); 
			
		$("#rowed4_ghichu_new").jqGrid("inlineNav", "#prowed4_ghichu_new", {add: true, addtext: "", edittext: "", edit: true, closeOnEscape: true,
            addParams: {
				keys:true,
                position: "last",
                mtype: "post",
                addRowParams: {
					keys:true,					
                    oneditfunc: function(rowId) {	
					$("#rowed4_ghichu_new").jqGrid("unbindKeys");
					},
                    aftersavefunc: function(rowId, response,lastsel) {
						if (response.responseText == 1) {			
                        } else {
							$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
								$("#prowed4_ghichu_new .ui-icon-pencil").click();				
							}}); 							
						    $("#rowed4_ghichu_new").focus();	 						
							$("#rowed4_ghichu_new").jqGrid("setGridParam",{datatype:"json"}).trigger("reloadGrid");
                        } 
                    },
                    afterrestorefunc: function() {
						$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
							$("#prowed4_ghichu_new .ui-icon-pencil").click();				
						}});
						$("#rowed4_ghichu_new").focus(); 
                    },					 
                }
            	},	
            editParams: {
				keys:true,			
                oneditfunc: function(rowId) {			
					$("#rowed4_ghichu_new").jqGrid("unbindKeys");				 
                },
                aftersavefunc: function(rowId, response) {	
					if (response.responseText == 1) {} 
					else {
						$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
							$("#prowed4_ghichu_new .ui-icon-pencil").click();				
						}});	
						$("#rowed4_ghichu_new").focus();	     
						$("#rowed4_ghichu_new").jqGrid("setGridParam",{datatype:"json"}).trigger("reloadGrid");
					} 
                },
                afterrestorefunc: function() {
					$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
						$("#prowed4_ghichu_new .ui-icon-pencil").click();				
					}});
					$("#rowed4_ghichu_new").focus(); 
                }
			}
       	 });
        $("#rowed4_ghichu_new").setGridWidth($(window).width()/2 - 60);
		$("#rowed4_ghichu_new").setGridHeight( ($(window).height()/100 * parseFloat(70)).toFixed(0)  - 150);
		$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
			$("#rowed4_ghichu_new_iledit .ui-icon-pencil").click();				
		}});
    }

</script>
