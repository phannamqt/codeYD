<script type="text/javascript" src="js/node_modules/socket.io/socket.io.js"></script>
<style type="text/css">
#n_search{
	margin-left:10px;
}
#rowed3 td,#rowed4 td,#rowed5 td,#rowed6 td,#rowed7 td{

	font-size:11px!important;	   
}
.ui-search-toolbar{
	display:none;
}
.ui-menu { 
	width: 150px;
	display:none;
	position:absolute;  	 
	box-shadow:0px 0px 3px #333;
	z-index:100000;  
}

.ghichu   { 
	border:1px;
	border-style: solid;
	display: inline-block;
}
.grid1
{
	width:295px;
	display:inline-block;
	 margin-left:5px; 
	margin-top: 5px!important;
}
#menu_toggle{
	font-size:12px;
	padding:5px 0px;
	background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll #b3ffb3;
	border:#CCC 1px dashed;	
}
.right_col{
	background:#FFF;
}#canh{
		height:4px!important;
}#com_thuocnhom, #com_thuochmk{
width: 110px!important;
height:17px !important;
}
#menu2,#menu3{
width:180px;
}
.ui-state-disabled:hover{
	color:#000 !important;
	border:none!important;
}

span.demgio{
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
#tieude{
	background:#F5F3EB;
	height: 20px;

	border-radius: 6px 6px 0px 0px;
	border-right: 1px solid #d4ccb0;
	border-left: 1px solid #d4ccb0;
	border-top:1px solid #d4ccb0;
	margin-left: 4px;
	border: 1px solid #919191;
	box-shadow: 0 0 10px #A0A0A0;
	border-bottom: none !important;
}
#div_nonegroup div#gbox_rowed6{
	border-top-right-radius: 0px!important;
	border-top-left-radius: 0px!important;
}
#div_nonegroup div#gbox_rowed7{
	border-top-right-radius: 0px!important;
	border-top-left-radius: 0px!important;
}
#gview_rowed6 div.ui-corner-top{
	border-top-right-radius: 0px!important;
	border-top-left-radius: 0px!important;
}
#div_group div#gbox_rowed7{
	border-top-right-radius: 0px!important;
	border-top-left-radius: 0px!important;
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
	width:50px!important;
	text-decoration:underline;

	/*box-shadow:0px 0px 2px 1px #a0a0a0;*/
}
input[type=button].custom_button:focus{	 
	outline:  none;
	}
#gbox_rowed7,#gbox_rowed6 {
	border: 1px solid #919191;
	box-shadow: 0 0 10px #A0A0A0;
	margin-left: 4px;
	margin-top: 0px!important;
	border-top: none!important;
}.ui-button-text{
	padding:0em  !important;
}.cls_huybo{
	
	background:#A9A9A9;
	}.ui-button-text {
    padding: 0.3em 0.4em!important;
}
.quathoigian_max{
	background:none repeat scroll 0 0 #FF6347;	
}
..hinhvuong{
	height:15px;
	width:15px;
}
.grid2{
	width:195px;
}
</style>


<body>
<input type="hidden" id="landau_rowed3" value="1">
<input type="hidden" id="landau_rowed4" value="1">
<input type="hidden" id="landau_rowed6" value="1">
<input type="hidden" id="landau_rowed7" value="1">
<input type="hidden" id="chonluoi4" value="0" />
<input type="hidden" id="chonluoi3" value="0" />
	<div  class="data_phanloaikham">
		<table id="data_phanloaikham">
		</table>   
	</div>
	<div  class="data_thuochmk">
		<table id="data_thuochmk">
		</table>   
	</div>
	<ul id="menu" > 
		<li id='dungxephang'><a id="stopxephang" href="#"><span class="ui-icon ui-icon-pause"></span>Dừng xếp hàng</a></li>
		<li id='tieptucxephang' style='display: none;'><a id="startxephang"  href="#"><span class="ui-icon  ui-icon-play"></span>Tiếp tục xếp hàng</a></li>
		<li><a id="refresh" href="#"><span class="ui-icon ui-icon-refresh"></span>Làm mới thông tin</a></li>  
		<hr>		
		<li><a id="benhan" href="#"><span class="ui-icon ui-icon-folder-open"></span>Bệnh án</a></li> 
		<li><a id="thongtinbenhnhan" href="#"><span class="ui-icon ui-icon-person"></span>Thông tin bệnh nhân</a></li>
		<li><a id="thongtinluotkham" href="#"><span class="ui-icon ui-icon-pencil"></span>Thông tin lượt khám</a></li>
	</ul>
	<ul id="menu2" >     
		<li id='menu2_dungxephang'><a id="menu2_stopxephang" href="#"><span class="ui-icon ui-icon-pause"></span>Dừng xếp hàng</a></li>
		<li id='menu2_tieptucxephang' style='display: none;'><a id="menu2_startxephang"  href="#"><span class="ui-icon  ui-icon-play"></span>Tiếp tục xếp hàng</a></li>
		<hr>	
		<li><a id="menu2_benhan" href="#"><span class="ui-icon ui-icon-folder-open"></span>Bệnh án</a></li>
		<li><a id="menu2_thongtinbenhnhan" href="#"><span class="ui-icon ui-icon-person"></span>Thông tin bệnh nhân</a></li>
		<li><a id="menu2_thongtinluotkham" href="#"><span class="ui-icon ui-icon-pencil"></span>Thông tin lượt khám</a></li>
		<li><a id="menu2_lichsudhst" href="#"><span class="ui-icon ui-icon-folder-open"></span>Lịch sử dấu hiệu sinh tồn</a></li>
		<hr>	
		<li><a id="menu2_chitiethangmuckham" href="#"><span class="ui-icon ui-icon-document"></span>Chi tiết hạng mục khám</a></li>
		<hr>	
		<li id="chuyen"><a id="menu2_chuyenvedanhsachcho" href="#"><span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Chuyển về danh sách chờ</a></li>
        <li id="chuyen2" style="display:none;" ><a id="menu2_chuyenvedanhsachcho2" href="#"><span class=" ui-state-disabled ui-icon ui-icon-arrowreturnthick-1-w"></span>Chuyển về danh sách chờ</a></li>

	</ul>
	<ul id="menu3" >     
		<li><a id="menu3_chitiethangmuckham" href="#"><span class="ui-icon ui-icon-document"></span>Chi tiết hạng mục khám</a></li>
		<li id='menu3_dungxephang'><a id="menu3_stopxephang" href="#"><span class="ui-icon ui-icon-pause"></span>Dừng xếp hàng</a></li>
		<li id='menu3_tieptucxephang' style='display: none;'><a id="menu3_startxephang"  href="#"><span class="ui-icon  ui-icon-play"></span>Tiếp tục xếp hàng</a></li>

	</ul>
<div id="main_content">
	<div class="ui-layout-center left_col" > 
		<div id='demo' style="margin-left:5px;margin-top:2px;;margin-botton:2px;margin-bottom: 2px;display:inline-block">
			<div style="display:inline-block"><label style="font-weight:bold">Xem bệnh nhân CLS:</label></div>
			<div style="display:inline-block"><input type="radio" id="thuocnhom" name="thuocnhom" value="0"/><label>Thuộc nhóm</label></div>

	<span class="custom-combobox">
	<input id='com_thuocnhom' class='com_thuocnhom' placeholder="--Chọn nhóm--" >
    </span>
	<input id='com_thuocnhom1' class='com_thuocnhom1'  style="width:200px;display:none">
	<a id="add_new" class="fm-button ui-state-default ui-corner-all " style=" margin-left:30px!important;vertical-align:top;width:16px;height:14px;margin-top:-1px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>
	<div style="display:inline-block"><input type="radio" id="thuochangmuckham" name="thuocnhom" value="1" style="margin-left:30px!important;"/><label>Thuộc PB chuyên môn</label>      </div>
	<span class="custom-combobox" >
		<input id='com_thuochmk' class='com_thuochmk'  placeholder="--Chọn phòng ban--"  ></span>
		<input id='com_thuochmk1' class='com_thuochmk1'  style="width:200px;display:none">
		<!--<a id='xemtatca' class="ui-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:30px!important;vertical-align:top;width:70px;height:23px;"  >Xem tất cả</a>-->
        <a href="#" id="xemtatca" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:5px;width:70px; margin-left:35px; margin-top:-3px; ">Xem tất cả<span class="ui-icon ui-icon-refresh"></span></a> 
        <a href="#" id="timkiem" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:5px;width:60px;margin-top:-3px; ">Tìm kiếm<span class="ui-icon ui-icon-search"></span></a>
	</div>
    <div id="luoitrai" style="">
         <div class="ui-layout-north n_tren"> 
            <table id="rowed3" ></table>
        </div>
        <div class="ui-layout-center n_duoi"> 
            <table id="rowed4" ></table>
        </div>
     </div>

</div>

<div class="ui-layout-east right_col " >   
	<table id="rowed5" ></table>
	<div id='canh'> </div>
	<div id='tieude' class="ui-jqgrid-titlebar ui-corner-top ui-helper-clearfix">
		<input type="checkbox" id="group" /> Nhóm theo bệnh nhân
		<input type="checkbox" id="chitiet" disabled checked /> Hiển thị chi tiết
	</div>
	<div id='div_nonegroup'>
		<table id="rowed6" ></table>
	</div>
	<div id='div_group' style="display:none">
		<table id="rowed7" ></table>
	</div>

</div>
</div>



</body>
</html> 

<script type="text/javascript">	
	var loading=false;
	var demclick=0;
	var phanloaikham='';
	
	
jQuery(document).ready(function() {					
						
	$("#main_content").css("height",$(window).height()+"px");			 
	$("#main_content").fadeIn(1000); 
	$(".left_col").css('height',$("#main_content").height());
	$('#luoitrai').css('height',$(".left_col").height());
	openform_shortcutkey();	
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dm_control_tenform').done(function(data) {
		 window._control_tenform=jQuery.parseJSON(data);
		 
		});
        //$('body').layout({ applyDemoStyles: true });
		window.default_nhomXH='';
		window.default_id_pb_ChuyenMon='';
        create_combobox('#com_thuocnhom','#com_thuocnhom1',".data_phanloaikham","#data_phanloaikham",create_bs,500,300,'Nhóm','data_nhomxephang',window.default_nhomXH);
        create_combobox('#com_thuochmk','#com_thuochmk1',".data_thuochmk","#data_thuochmk",create_bs2,500,300,'Phòng ban chuyên môn','data_pbchuyenmon',window.default_id_pb_ChuyenMon);
		//load_select1();
		var timer;
		var timer1;
		
		load_select_tenform();
		load_hangmuckham();
		load_trangthai();
		load_nguoithuchien();
		create_layout();
		create_layout2();
		create_grid();
		create_grid2();
		create_grid3();
		create_grid4();
		create_grid5();
		resize_control();
		window.duongdandata='pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang';
		taidulieu(window.duongdandata);
		
		search_mutilgrid('#rowed3,#rowed4,#rowed6,#rowed7');
	
		$("#add_new").click(function(e){
		links='pages.php?module=canlamsang&view=ds_xephang_canlamsang&action=ds_hentraKQ3&type=test&id_form=123&idluotkham=254342';
		elem=1 + Math.floor(Math.random() * 1000000000); 
		width=90;
		height=80;   
		dialog_add_dm("",width,height,elem,links); 
	})
		
		
		$('#xemtatca').button();
		$('#timkiem').button();
		$('#timkiem').click(function(){
			$('#search_mutilgrid').dialog('open');

		});
		$("#input_mutilgrid").keydown(function(e){
			if(jwerty.is("enter",e)){
				window.n_search=1;
				$("#n_search").html("Bạn đang ở chế độ tìm kiếm. Nhấn 'Ctrl + Z' để quay lại");
				//check_search();
			}
		});
		$("#input_bacsy").keydown(function(e){
			if(jwerty.is("enter",e)){
				window.n_search=1;
				$("#n_search").html("Bạn đang ở chế độ tìm kiếm. Nhấn 'Ctrl + Z' để quay lại");
				//check_search();
			}
		});
		
		$( "#com_thuocnhom" ).change(function() {
		});
		document.getElementById("thuochangmuckham").checked=false;
		$( "#com_thuochmk" ).change(function() {
			document.getElementById("thuochangmuckham").checked=true;
		});

		
		$( "#xemtatca" ).click(function() {
			$("#com_thuocnhom").val('');
			$("#com_thuochmk").val('');
			$("#com_thuocnhom1").val('');
			$("#com_thuochmk1").val('');
			phanloaikham='';
			timer_title_danhsach('stop');						
			document.getElementById("thuocnhom").checked=false;
			document.getElementById("thuochangmuckham").checked=false;
			window.duongdandata= 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang'
			taidulieu(window.duongdandata);
		});
		
		//sự kiên checkbox
		$('#group').change(function() {
			if($(this).is(':checked')==true){
			document.getElementById("div_nonegroup").style.display='none';
			document.getElementById("div_group").style.display='block';
		$('#rowed7').setGridParam({loadonce: false, datatype: "json"});
			document.getElementById("chitiet").disabled=false;
		}
		else{
			document.getElementById("div_nonegroup").style.display='block';
			document.getElementById("div_group").style.display='none';
			document.getElementById("chitiet").disabled=true;
		}
});
$('#chitiet').change(function() {
	if($(this).is(':checked')==true){
		$("#rowed7").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');
	}
	else{
			$("#rowed7").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');
		}
});
   phanquyen();
})//end ready
$(window).resize(function() {
	$("#main_content").css("height",$(window).height()+"px");			 
	$("#main_content").fadeIn(1000); 
	$(".left_col").css('height',$("#main_content").height());
	$('#luoitrai').css('height',$(".left_col").height());
	resize_control();
})
var lastsel;


function GoiLoa(SoLk,ipClient,iD_LuotKham)
    {
        var chuoiGoi='&SoLk='+SoLk+'&n_nhomgoi=3'+'&ipClient='+ipClient+'&oper=default';
     
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


function create_grid() {

	$("#rowed3").jqGrid({
		datastr:{},
		datatype: "jsonstring",
		colNames: ['LuotKham','ID loại khám', 'Mã BN', 'Họ tên', 'Tuổi', 'Giới tính', 'Hạng mục khám', 'Giờ hẹn', 'Giờ chỉ định'
		,'Chỉ định','Ghi chú','Gọi khám','NotesStatus','ID Bệnh nhân ','Tên Form','ID loại khám ','Đối tượng',''
		,'','Gọi','Tùy biến'
		],
		colModel: [
		{name: 'ID_Kham', index: 'ID_Kham', search: false, width: "8%", align: 'left', hidden: true},
		{name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "8%",  align: 'left', hidden: true},
		{name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "5%", align: 'left', hidden: false},
		{name: 'TenBenhNhan', index: 'TenBenhNhan', search: true, width: "15%", align: 'left', hidden: false},
		{name: 'Tuoi', index: 'Tuoi', search: false, width: "5%",  align:'center', hidden: false},
		{name: 'GioiTinh', index: 'GioiTinh', search: false, width: "5%",  align: 'center', hidden: false},
		{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "15%",  align: 'left', hidden: false},
		{name: 'GioHenKham', index: 'GioHenKham', search: false, width: "6%",  align: 'center', hidden: false, edittype: "text"},
		{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "8%",  align: 'center', hidden: false, edittype: "text"},
		{name: 'TenBSChiDinh', index: 'TenBSChiDinh', search: false, width: "8%",  align: 'center', hidden: false},
		{name: 'GhiChu', index: 'GhiChu', search: false, width: "7%",  align: 'center', hidden: false},
		{name: 'GoiKham', index: 'GoiKham', search: false, width: "8%",  align: 'center', hidden: false},
		{name: 'NotesStatus', index: 'NotesStatus', search: false, width: "8%",  align: 'center', hidden: true},
		{name: 'ID_BenhNhan', index: 'ID_BenhNhan', search: false, width: "8%",  align: 'center', hidden: true},
		{name: 'TenForm', index: 'TenForm', search: false, width: "8%",  align: 'center', hidden: true,edittype:"select",formatter:'select',editoptions:{value: tenform}},
		{name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "8%",  align: 'center', hidden: true},
		{name: 'LoaiDoiTuongKham', index: 'LoaiDoiTuongKham', search: true, width: "7%", editable: false, align: 'left', hidden: false},
		{name: 'IsDichVuCC', index: 'IsDichVuCC', width: "0%", hidden: true},
		{name: 'SoPhieuKhamGoiLoa', index: 'SoPhieuKhamGoiLoa', width: "0%", hidden: true},
        {name: 'action',sortable:false, index: 'action', width: "5%", align: 'center', edittype: "button", hidden: false, },
        {name: 'action2',sortable:false, index: 'action2', width: "8%", align: 'center', edittype: "button", hidden: false, },

		],
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 1000000,
		rowList: [30, 50, 70],
		pager: '#prowed3',
		sortname: 'ID_Kham',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "asc",
            serializeRowData: function(postdata) {
                //$("#rowed3").trigger("reloadGrid");		
                //return postdata;
            },
            onSelectRow: function(id) {

            	if (id !== lastsel) {
            		$("#rowed3").jqGrid('restoreRow', lastsel);
            		$("#rowed3").jqGrid('editRow', id, true);
            		lastsel = id;
            	} else {
            		$("#rowed3").jqGrid('restoreRow', lastsel);
            		lastsel = "";
                    //alert(id)
                }
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
				if(loading==true){
					if(demclick==0){
						var rowData = $("#rowed3").getRowData(rowId);				
						mogoikham(rowId,rowData["NgayGioTao"],rowData["TenLoaiKham"],rowData["TenForm"],"DangCho","rowed3",window.duongdandata);
					}
					demclick++;
				}else{
					var rowData = $("#rowed3").getRowData(rowId);				
					mogoikham(rowId,rowData["NgayGioTao"],rowData["TenLoaiKham"],rowData["TenForm"],"DangCho","rowed3",window.duongdandata);
				}

			},
			onSelectRow: function(rowId) { 
				$("#chonluoi3").val(0);
				var rowData = jQuery(this).getRowData(rowId); 
				 var ID_LuotKham = rowData['ID_LuotKham'];// alert(ID_LuotKham);				
				 $("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_select_theo_id_luotkham&id="+ID_LuotKham}).trigger('reloadGrid');
				 window.TenBN = rowData['TenBenhNhan'];
				 window.MaBN= rowData['MaBenhNhan'];
				 $("#landau_rowed3").val(0);
				 
				},
				onRightClickRow: function(rowid, iRow, iCol, e) {              
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
					$(document).bind("contextmenu", function(e) {
						return false;
					});
					//$("#menu").show(300);
					setTimeout(function(){
						$("#menu").show(300);   
					},400);

					
                //$("#stopxephang").addClass("disable");
                
            },

            loadComplete: function(data) {
				var highestTimeoutId = setTimeout(";");
				for (var i = 0 ; i < highestTimeoutId ; i++) {
					clearTimeout(i); 
				}	
					timer_title_danhsach("start");
			 
				//$("#rowed3").setGridParam({loadonce: true});
				$("#landau_rowed3").val(1);
            	var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
				var d=$("#rowed3").getGridParam("reccount");
				if(d<1){
					$('#rowed3').jqGrid('clearGridData');	
				}
            	for(var i=0;i < tmp1.length;i++){ 
            		var rowData = $("#rowed3").getRowData(tmp1[i]);	
					if(rowData["NotesStatus"]==1){
						var _class="do";
					}else if(rowData["NotesStatus"]==2){
						var _class="cam";
					}else  if(rowData["NotesStatus"]==0){
						var _class="xanh";
					}
					ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='Ghi chú' onclick=\"moghichu('"+rowData["ID_BenhNhan"]+"','"+rowData["TenBenhNhan"]+"');\" />"; 
					goikham = "<input class='custom_button xanh' style='height:22px;width:50px;' type='button' value='Gọi khám' onclick=\"mogoikham('"+tmp1[i]+"','"+rowData["NgayGioTao"]+"','"+rowData["TenLoaiKham"]+"','"+rowData["TenForm"]+"','DangCho','rowed3','"+window.duongdandata+"');\" />";  
					$("#rowed3").jqGrid('setRowData',tmp1[i],{GhiChu:ghichu});
					$("#rowed3").jqGrid('setRowData',tmp1[i],{GoiKham:goikham});
					if (rowData["IsDichVuCC"] == 1) {
                        $("#rowed3").setCell(tmp1[i], 'LoaiDoiTuongKham', '', {background: 'pink'});
                    }else{
                      //  $("#rowed3").setCell(tmp1[i], 'LoaiDoiTuongKham', '', {background: '#FFFFFF'});
                    }

 				// gọi loa
                    var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";      
                    var soLK= rowData['SoPhieuKhamGoiLoa'];
                    var iD_LuotKham= rowData['ID_LuotKham'];
                    var se = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"'  onclick=\"GoiLoa('" + soLK + "','" + ipClient  + "','" +  iD_LuotKham  +"');\" />";

    				$("#rowed3").jqGrid('setRowData', tmp1[i], {action: se});

 					var se2 = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"'  onclick=\"GoiLoa2('" + soLK + "','" + ipClient  + "','" +  iD_LuotKham  +"');\" />";

    				$("#rowed3").jqGrid('setRowData', tmp1[i], {action2: se2});
				// gọi loa

				}
				
				
				//to mau nen
				var d = new Date();
				var curr_hour = d.getHours();
				var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
				var curr_time = curr_hour + ":" + curr_minute+ " ";	
				var dd = d.getDate();
				var mm = d.getMonth()+1;//January is 0!`
				var yyyy = d.getFullYear();		
				ids = $('#rowed3').jqGrid('getDataIDs');	
				var ktra =$("#chonluoi3").val();
				if(ktra==0)	{		 
				$("#rowed3").jqGrid("setSelection",ids[0], true);	
				}
				
				for (i = 0; i < ids.length; i++) {
					var rowData = jQuery('#rowed3').getRowData(ids[i]);								
					var giogoc=rowData["NgayGioTao"].split(":");
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
					var thoigianMin2=Date.today().set({
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
					
					thoigianMax=thoigianMax.addMilliseconds(-500);
									//thoigianMax=thoigianMax.addMinutes(-5);
									thoigianMax=thoigianMax.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									thoigianMin=thoigianMin.addMinutes(-5);
									thoigianMin=thoigianMin.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									thoigianMin2=thoigianMin2.addMinutes(0);
									thoigianMin2=thoigianMin2.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									//console.log(hientai + '  ' +hientai1)
									doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
									chuoidich= new Date(doituonggiogoc); 
									thoigianMin= new Date(thoigianMin);  
									thoigianMin2= new Date(thoigianMin2); 
									//console.log(thoigianMin);		
									thoigianMax= new Date(thoigianMax); 
									if((thoigianMin2>=chuoidich) && (thoigianMin<=chuoidich)){										    
										$("#rowed3").setCell(ids[i], "TenBenhNhan", '', "quathoigian_min"); 
									}else if(chuoidich<=thoigianMax) {										 			   
										$("#rowed3").setCell(ids[i], "TenBenhNhan", '', "quathoigian_max"); 
										// alert(222);

									}
									//console.log(thoigianMin2+'<='+chuoidich)
									//alert(chuoidich+'>='+thoigianMin);

								}


								var caption= 'BN chưa khám ('+ jQuery("#rowed3").jqGrid('getGridParam', 'records')+')'+' [ <span class="demgio"> Tải lại sau ' + reload_luoi_danhsach + ' giây</span> ] <span id="n_search"></span>';
								jQuery("#rowed3").jqGrid('setCaption', caption);
            },
            caption: "BN chưa khám "
        });
		// $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
		//$("#rowed3").jqGrid('navGrid',"#prowed3",{ del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,});	 
$("#rowed3").jqGrid('bindKeys', {});
		//timer_danhsach("start");
		//timer_title_danhsach("start");
 //duyệt tìm các ô đang search có focus để dừng xếp hàng
        $('#gbox_rowed3 .ui-search-table').find(':input[type=text]').each(function() {
            $("#" + this.id).focusin(function() {
                $('#rowed3').setGridParam({loadonce: true}).trigger('reloadGrid');              
                powerXepHang_luoidangcho = 0;
				document.getElementById("tieptucxephang").style.display="block";
				document.getElementById("dungxephang").style.display="none";
				document.getElementById("menu2_tieptucxephang").style.display="block";
				document.getElementById("menu2_dungxephang").style.display="none";
				document.getElementById("menu3_tieptucxephang").style.display="block";
				document.getElementById("menu3_dungxephang").style.display="none";
				

                //$('#gbox_rowed3 .ui-jqgrid-title span.demgio').blink({delay: 500});				
            });
        });
		
        //duyệt tìm các ô đang search có focus để dừng xếp hàng 

        $('#gbox_rowed3 .ui-jqgrid-title span.demgio').click(function() {
            if (window.kiemtrasearch == false) {
                //$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
               // window.kiemtrasearch = true;

               // timer_danhsach("start");
               // timer_title_danhsach("start");
				document.getElementById("tieptucxephang").style.display="none";
				document.getElementById("dungxephang").style.display="block";
				document.getElementById("menu2_tieptucxephang").style.display="none";
				document.getElementById("menu2_dungxephang").style.display="block";
				document.getElementById("menu3_tieptucxephang").style.display="none";
				document.getElementById("menu3_dungxephang").style.display="block";
            }
        });

}
function create_grid2()
{
	$("#rowed4").jqGrid({
		datastr: {},
		datatype: "jsonstring",
		colNames: ['ID khám','ID Lượt khám', 'Mã BN', 'Họ tên', 'Tuổi', 'Giới', 'Hạng mục khám', 'Giờ c.định', 'Giờ hẹn KQ','Chỉ định'
		,'T.hiện','Ghi chú','Nhập KQ','Trạng thái','NotesStatus','ID Bệnh nhân','Tên form','Đối tượng',''
		,'','Gọi','Tùy biến'
		],
		colModel: [
		{name: 'ID_Kham', index: 'ID_Kham', search: true, width: "20%",  align: 'left', hidden: true},
		{name: 'ID_LuotKham', index: 'ID_LuotKham', search: true, width: "20%",  align: 'left', hidden: true},
		{name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "17%",  align: 'left', hidden: false},
		{name: 'TenBenhNhan', index: 'TenBenhNhan', search: true, width: "45%",  align: 'left', hidden: false},
		{name: 'Tuoi', index: 'Tuoi', search: true, width: "13%",  align: 'center', hidden: false},
		{name: 'GioiTinh', index: 'GioiTinh', search: true, width: "10%",  align: 'center', hidden: false},
		{name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "40%",  align: 'left', hidden: false},
		{name: 'NgayGioTao', index: 'NgayGioTao', search: true, width: "20%",  align: 'center', hidden: false, edittype: "text"},
		{name: 'NgayGioHenTraKQ', index: 'NgayGioHenTraKQ', search: true, width: "25%",  align: 'center', hidden: false, edittype: "text"},

		{name: 'TenBSChiDinh', index: 'TenBSChiDinh', search: true, width: "20%",  align: 'center', hidden: false, edittype: "text"},
		{name: 'Bslamsang', index: 'Bslamsang', search: true, width: "20%",  align: 'center', hidden: false, edittype: "text"},
		//{name: 'Bslamsang', index: 'Bslamsang', search: false, width: "20%",  align: 'center', hidden: false,formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, edittype: "text"},
		{name: 'GhiChu', index: 'GhiChu', search: true, width: "20%",  align: 'center', hidden: false, edittype: "text"},
		{name: 'GoiKham', index: 'GoiKham', search: true, width: "20%",  align: 'center', hidden: false, edittype: "text"},
		{name: 'ID_TrangThai', index: 'ID_TrangThai', search: true, width: "25%",  align: 'center', hidden: false,formatter:"select",edittype:"select",editoptions: { value: trangthai}, edittype: "text"},
		{name: 'NotesStatus', index: 'NotesStatus', search: true, width: "80%",  align: 'center', hidden: true},
		{name: 'ID_BenhNhan', index: 'ID_BenhNhan', search: true, width: "80%",  align: 'center', hidden: true},
		{name: 'TenForm', index: 'TenForm', search: true, width: "15%",  align: 'center', hidden: true,edittype:"select",formatter:'select',editoptions:{value: tenform}},
		{name: 'LoaiDoiTuongKham', index: 'LoaiDoiTuongKham', search: true, width: "20%", editable: false, align: 'left', hidden: false},
		{name: 'IsDichVuCC', index: 'IsDichVuCC', width: "0%", hidden: true},
		{name: 'SoPhieuKhamGoiLoa', index: 'SoPhieuKhamGoiLoa', width: "0%", hidden: true},
        {name: 'action',sortable:false, index: 'action', width: "15%", align: 'center', edittype: "button", hidden: false, },
        {name: 'action2',sortable:false, index: 'action2', width: "15%", align: 'center', edittype: "button", hidden: false, },

		],
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 1000000,
		rowList: [30, 50, 70],
		pager: '#prowed4',
		//sortname: 'ThoiGianVaoKham',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
            caption: "<?php get_text("BN_dangkham")?>",
            onSelectRow: function(rowId) { 
				$("#chonluoi3").val(1);
				$("#chonluoi4").val(rowId);
            	var rowData = jQuery(this).getRowData(rowId); 
            	var ID_LuotKham = rowData['ID_LuotKham'];
				// alert(ID_LuotKham);
				$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_select_theo_id_luotkham&id="+ID_LuotKham}).trigger('reloadGrid');
				window.TenBN = rowData['TenBenhNhan'];
				window.MaBN= rowData['MaBenhNhan'];	
		
			},
			ondblClickRow: function(rowId, rowIndex, columnIndex) {
				if(loading==true){
					if(demclick==0){
						var rowData = jQuery(this).getRowData(rowId); 
						 mogoikham(rowId,rowData["NgayGioTao"],rowData["TenLoaiKham"],rowData["TenForm"],rowData["ID_TrangThai"],"rowed4",window.duongdandata);
					}
					demclick++;
				}else{
					var rowData = jQuery(this).getRowData(rowId); 
				 	mogoikham(rowId,rowData["NgayGioTao"],rowData["TenLoaiKham"],rowData["TenForm"],rowData["ID_TrangThai"],"rowed4",window.duongdandata);
				}
				
				 
				// mogoikham2(rowId,rowData["TenForm"])   
			},
			onRightClickRow: function(rowid, iRow, iCol, e) {                   
				if ($("#menu2").width() + e.pageX > $(document).width()) {
					$("#menu2").css('left', e.pageX - $("#menu2").width() + "px");
				} else {
					$("#menu2").css('left', e.pageX + "px");
				}
				if ($("#menu2").height() + e.pageY + 30 > $(document).height()) {
					$("#menu2").css('top', e.pageY  - $("#menu2").height() + "px");
				} else {
					$("#menu2").css('top', e.pageY + "px");
				}
				             
				$(document).bind("contextmenu", function(e) {
					return false;

				});

				setTimeout(function(){
					$("#menu2").show(300);   
				},400);
                //$("#stopxephang").addClass("disable");
                
                
            },
            loadComplete: function(data) {
			//	$("#landau_rowed4").val(1);
			$("#rowed4").setGridParam({loadonce: true});
				var ktra=$("#chonluoi3").val();
				if(ktra==1)	{
					var idfocus=$("#chonluoi4").val();
					$("#rowed4").jqGrid("setSelection",idfocus, true);	
				}
                var tmp = $("#rowed4").jqGrid('getDataIDs'); 
                for(var i=0;i < tmp.length;i++){ 
                	var rowData = $("#rowed4").getRowData(tmp[i]);	
                	
                	var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";
                    //var ipClient=json.ip;
                    var soLK= rowData['SoPhieuKhamGoiLoa'];
                     var iD_LuotKham= rowData['ID_LuotKham'];
                     var count=0;
                     


 se3 = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"' onclick=\"GoiLoa('" + soLK + "','" + ipClient  + "','"  +  iD_LuotKham +"');\" />";
                    $("#rowed4").jqGrid('setRowData', tmp[i], {action: se3});

 se4 = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"' onclick=\"GoiLoa2('" + soLK + "','" + ipClient  + "','"  +  iD_LuotKham +"');\" />";
                    $("#rowed4").jqGrid('setRowData', tmp[i], {action2: se4});
                	

                	if(rowData["NotesStatus"]==1){
                		var _class="do";
                	}else if(rowData["NotesStatus"]==2){
                		var _class="cam";
                	}else  if(rowData["NotesStatus"]==0){
                		var _class="xanh";
                	}
                	ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='Ghi chú' onclick=\"moghichu('"+rowData["ID_BenhNhan"]+"','"+rowData["TenBenhNhan"]+"');\" />"; 
                	goikham = "<input class='custom_button xanh' style='height:22px;width:50px;' type='button' value='Nhập KQ' onclick=\"mogoikham('"+tmp[i]+"','"+rowData["NgayGioTao"]+"','"+rowData["TenLoaiKham"]+"','"+rowData["TenForm"]+"','"+rowData["ID_TrangThai"]+"','rowed4','"+window.duongdandata+"');\" />";  
                	$("#rowed4").jqGrid('setRowData',tmp[i],{GhiChu:ghichu});
                	$("#rowed4").jqGrid('setRowData',tmp[i],{GoiKham:goikham});
					if (rowData["IsDichVuCC"] == 1) {
                        $("#rowed4").setCell(tmp[i], 'LoaiDoiTuongKham', '', {background: 'pink'});
                    }else{
                        //$("#rowed4").setCell(tmp[i], 'LoaiDoiTuongKham', '', {background: '#FFFFFF'});
                    }
                }


                var caption= 'BN đang khám ('+ jQuery("#rowed4").jqGrid('getGridParam', 'records')+')'+' <div class="grid1"><div class="hinhvuong quathoigian_max"></div><label class="diengiai">< 15\' nữa đến giờ hẹn KQ hoặc đã quá hẹn</label></div>  <div class="grid1 grid2"><div class="hinhvuong quathoigian_min"></div><label class="diengiai">< 30\' nữa đến giờ hẹn KQ</label></div>';
				jQuery("#rowed4").jqGrid('setCaption', caption); // đếm bản ghi set vào caption
                //kiemtra_dk_tg_load_completed();		 
            },
        });
 // $("#rowed4").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
      //  $("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	  $("#rowed4").jqGrid('bindKeys', {});
	  //duyệt tìm các ô đang search có focus để dừng xếp hàng
        $('#gbox_rowed4 .ui-search-table').find(':input[type=text]').each(function() {
			//console.log(this.id);
            $("#gbox_rowed4 #" + this.id).focusin(function() {
                $('#rowed4').setGridParam({loadonce: true}).trigger('reloadGrid');
              //  window.kiemtrasearch = false;

               
                powerXepHang_luoidangcho = 0;
				document.getElementById("tieptucxephang").style.display="block";
				document.getElementById("dungxephang").style.display="none";
				document.getElementById("menu2_tieptucxephang").style.display="block";
				document.getElementById("menu2_dungxephang").style.display="none";
				document.getElementById("menu3_tieptucxephang").style.display="block";
				document.getElementById("menu3_dungxephang").style.display="none";

                //$('#gbox_rowed3 .ui-jqgrid-title span.demgio').blink({delay: 500});				
            });
        });
			
        //duyệt tìm các ô đang search có focus để dừng xếp hàng 

        $('#gbox_rowed4 .ui-jqgrid-title span.demgio').click(function() {
            if (window.kiemtrasearch == false) {
                $('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
               // window.kiemtrasearch = true;

               // timer_danhsach("start");
                //timer_title_danhsach("start");
				document.getElementById("tieptucxephang").style.display="none";
				document.getElementById("dungxephang").style.display="block";
				document.getElementById("menu2_tieptucxephang").style.display="none";
				document.getElementById("menu2_dungxephang").style.display="block";
				document.getElementById("menu3_tieptucxephang").style.display="none";
				document.getElementById("menu3_dungxephang").style.display="block";
                //$('#gbox_rowed3 .ui-jqgrid-title span.demgio').blink({status: true});		
            }
        });
        $("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});

}


function create_grid3()
{
	var mydata = [];
	$("#rowed5").jqGrid({

		datatype: "local",
		data: mydata,

		colNames: ['Id khám', 'Hạng mục khám', 'Trạng thái', 'Người t.hiện', 'Giờ t.hiện', 'Ngày giờ tạo', 'Tên form'],
		colModel: [
		{name: 'ID_Kham', index: 'ID_Kham', search: false, width: "2%", align: 'left', hidden: true},
		{name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "3%" , align: 'left',formatter:"select",edittype:"select",editoptions: { value: hangmuckham}, hidden: false},
		{name: 'ID_TrangThai', index: 'ID_TrangThai', search: false, width: "2%", align: 'center',formatter:"select",edittype:"select",editoptions: { value: trangthai}, hidden: false},
		
		{name: 'NguoiThucHien', index: 'NguoiThucHien', search: false, width: "2%", align: 'center',formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, hidden: false},
		{name: 'NgayGioThucHien', index: 'NgayGioThucHien', search: false, width: "2%", align: 'center', hidden: false},
		{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", align: 'center', hidden: true, edittype: "text"},
		{name: 'TenForm', index: 'TenForm', search: false, width: "3%",  align: 'center', hidden: true,edittype:"select",formatter:'select',editoptions:{value: tenform}},
		


		],
		loadonce: false,
		scroll: false,
		rownumbers: false,
		modal: true,
		rowNum: 1000000,
		rowList: [30, 50, 70],
		pager: '#prowed5',
		sortname: 'ID_LuotKham',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
        sortorder: "desc",
         
			loadComplete: function(data) {			  
				
			//to mau nen
			var d = new Date();
			var curr_hour = d.getHours();
				var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
				var curr_time = curr_hour + ":" + curr_minute+ " ";	
				var dd = d.getDate();
				var mm = d.getMonth()+1;//January is 0!`
				var yyyy = d.getFullYear();		
				ids = $('#rowed5').jqGrid('getDataIDs');				 
				$("#rowed5").jqGrid("setSelection",ids[0], true);	
				for (i = 0; i < ids.length; i++) {
					var rowData = jQuery('#rowed5').getRowData(ids[i]);								
					var giogoc=rowData["NgayGioTao"].split(":");
					if(rowData["ID_TrangThai"]=='DangCho'){
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
						var thoigianMin2=Date.today().set({
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

						thoigianMax=thoigianMax.addMilliseconds(-500);
									//thoigianMax=thoigianMax.addMinutes(-5);
									thoigianMax=thoigianMax.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									thoigianMin=thoigianMin.addMinutes(-5);
									thoigianMin=thoigianMin.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									thoigianMin2=thoigianMin2.addMinutes(0);
									thoigianMin2=thoigianMin2.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									//console.log(hientai + '  ' +hientai1)
									doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
									chuoidich= new Date(doituonggiogoc); 
									thoigianMin= new Date(thoigianMin);   
									thoigianMin2= new Date(thoigianMin2); 
									//console.log(thoigianMin);		
									thoigianMax= new Date(thoigianMax); 
									if((thoigianMin2>=chuoidich) && (thoigianMin<=chuoidich)){										    
										$("#rowed5").setCell(ids[i], "ID_LoaiKham", '', "quathoigian_min"); 
									}else if(chuoidich<=thoigianMax) {										 			   
										$("#rowed5").setCell(ids[i], "ID_LoaiKham", '', "quathoigian_max"); 

									}

							} //end if DangCho
							//console.log(rowData["ID_TrangThai"]);
							//alert(rowData["ID_TrangThai"])
							if((rowData["ID_TrangThai"]=='DaThucHien') || (rowData["ID_TrangThai"]=='Xong')  || (rowData["ID_TrangThai"]=='DaLayBenhPham') ){

								$("#rowed5").setCell(ids[i], "ID_LoaiKham", '', "cls_dathuchien");
								}//end if DangCho
								if(rowData["ID_TrangThai"]=='DangKham'){
									//alert(rowData["ID_TrangThai"])
									$("#rowed5").setCell(ids[i], "ID_LoaiKham", '', "cls_dangkham");
								}//end if DangCho
							if(rowData["ID_TrangThai"]=='HuyBo'){
									//alert(rowData["ID_TrangThai"])
									$("#rowed5").setCell(ids[i], "ID_LoaiKham", '', "cls_huybo");
								}//end if DangCho

                }//end For

                if(jQuery("#rowed5").jqGrid('getGridParam', 'records')<=0){
                	var caption=' ';
				//alert(window.TenBN);
			}else{
				var caption= 'Các hạng mục khám của BN: '+'Tên bệnh nhân' +'('+ jQuery("#rowed5").jqGrid('getGridParam', 'records')+')';
				//jQuery("#rowed5").jqGrid('setCaption', caption); // đếm bản ghi set vào caption
                //kiemtra_dk_tg_load_completed();
                jQuery("#rowed5").jqGrid('getGridParam', 'records')
                var caption= 'Các hạng mục khám của BN: ' +window.TenBN+' - '+window.MaBN+' (' +jQuery("#rowed5").jqGrid('getGridParam', 'records')+')'
                jQuery("#rowed5").jqGrid('setCaption', caption);
            }

                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
            },
            caption: "Các hạng mục khám của BN"
        });
/*$("#rowed5").setGridWidth($(window).width() - 100);
$("#rowed5").setGridHeight($(window).height() - $("#kha").height() - 400);*/
$("#rowed5").jqGrid('bindKeys', {});
}
function create_grid4()
{
	$("#rowed6").jqGrid({
		
		datastr: {},
		datatype: "jsonstring",
		colNames: ['ID_Kham','Mã BN','Họ tên','Tuổi','Giới','Hạng mục khám','H.tất','Ngày giờ tạo','Tên form','Trạng thái','ID bệnh nhân','ID_LuotKham','IsDichVuCC'],
		colModel: [
		{name: 'ID_Kham', index: 'ID_Kham', search: false, width: "10%",  align: 'left', hidden: true},
		{name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "10%",  align: 'left', hidden: false},
		{name: 'TenBenhNhan', index: 'TenBenhNhan', search: true, width: "30%",  align: 'left', hidden: false},
		{name: 'Tuoi', index: 'Tuoi', search: false, width: "13%",  align: 'center', hidden: false},
		{name: 'GioiTinh', index: 'GioiTinh', search: false, width: "10%",  align: 'center', hidden: false},
		{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "30%",  align: 'left', hidden: false},
		{name: 'NgayGioKetThuc',sorttype:"date",sortable: true,formatter:'date',formatoptions: {srcformat: 'H:i', newformat: 'H:i'}, index: 'NgayGioKetThuc', search: false, width: "10%",  align: 'center', hidden: false, edittype: "text"},
		{name: 'NgayGioTao', index: 'NgayGioTao', search: true, width: "20%",  align: 'center', hidden: true, edittype: "text"},
		{name: 'TenForm', index: 'TenForm', search: false, width: "8%",  align: 'center', hidden: true,edittype:"select",formatter:'select',editoptions:{value: tenform}},
		{name: 'ID_TrangThai', index: 'ID_TrangThai', search: false, width: "2%", align: 'center',formatter:"select",edittype:"select",editoptions: { value: trangthai}, hidden: true},
		{name: 'ID_BenhNhan', index: 'ID_BenhNhan', search: false, width: "80%",  align: 'center', hidden: true},
		{name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "80%",  align: 'center', hidden: true},
		{name: 'IsDichVuCC', index: 'IsDichVuCC', search: false, width: "80%",  align: 'center', hidden: true},
		

		],
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 1000000,
		rowList: [30, 50, 70],
		pager: '#prowed6',
		sortname: 'NgayGioKetThuc',
		sortable: true,
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
        sortorder: "asc",
			 onSelectRow: function(id) { 
			 	var rowData = jQuery(this).getRowData(id); 
				 var ID_LuotKham = rowData['ID_LuotKham'];// alert(ID_LuotKham);				
				 $("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_select_theo_id_luotkham&id="+ID_LuotKham}).trigger('reloadGrid');
			},
			ondblClickRow: function(rowId, rowIndex, columnIndex) {				
				if(loading==true){
					if(demclick==0){
						var rowData = jQuery(this).getRowData(rowId); 
						mogoikham(rowId,rowData["NgayGioTao"],rowData["TenLoaiKham"],rowData["TenForm"],rowData["ID_TrangThai"],"rowed6",window.duongdandata);
					}
					demclick++;
				}else{
					var rowData = jQuery(this).getRowData(rowId); 
					mogoikham(rowId,rowData["NgayGioTao"],rowData["TenLoaiKham"],rowData["TenForm"],rowData["ID_TrangThai"],"rowed6",window.duongdandata);
				}				
			},
            onRightClickRow: function(rowid, iRow, iCol, e) {

            	var grid = jQuery('#rowed6');
            	var colModel = grid.getGridParam('colModel');
            	var colName = colModel[iCol].name;
            	var colIndex = colModel[iCol].index;
            	var rowData = jQuery('#rowed6').getRowData(rowid);
            	window.rowData_grdangcho = rowData;
            	$(document).bind("contextmenu", function(e) {
            		return false;
            	});
            	if ($.trim(rowData[colName]) != "") {
            		window.rowid_danhcho = rowid;
            		window.from = colModel[iCol].name;
            		if ($("#menu3").width() + e.pageX > $(document).width()) {
            			$("#menu3").css('left', e.pageX - $("#menu3").width() + "px");
            		} else {
            			$("#menu3").css('left', e.pageX + "px");
            		}
            		if ($("#menu3").height() + e.pageY +30 > $(document).height()) {
            			$("#menu3").css('top', e.pageY - $("#menu3").height() + "px");
            		} else {
            			$("#menu3").css('top', e.pageY + "px");
            		}
            		setTimeout(function(){
						$("#menu3").show(300);   
					},400);
            	}

            	


            },
            loadComplete: function(data) {
				if ($("#rowed6").jqGrid("getGridParam", "datatype") !== "local") {
					setTimeout(function () {						
						
						$("#rowed6")[0].triggerToolbar();
					}, 50);
				}
				$("#rowed6").setGridParam({loadonce: true});	
				$("#rowed6").trigger("reloadGrid");	
            	var caption= 'Bệnh nhân đã hoàn tất ('+ jQuery("#rowed6").jqGrid('getGridParam', 'records')+')';
				jQuery("#rowed6").jqGrid('setCaption', caption); // đếm bản ghi set vào caption
				
				var tmp = $("#rowed6").jqGrid('getDataIDs'); 
                for(var i=0;i < tmp.length;i++){ 
                	var rowData = $("#rowed6").getRowData(tmp[i]);
					if (rowData["IsDichVuCC"] == 1) {
                        $("#rowed6").setCell(tmp[i], 'MaBenhNhan', '', {background: 'pink'});
                    }else{
                       // $("#rowed6").setCell(tmp[i], 'MaBenhNhan', '', {background: '#FFFFFF'});
                    }
				}
            },
            caption: "Bệnh nhân đã hoàn tất "
        });
		$("#rowed6").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
		$("#rowed6").jqGrid('navGrid',"#prowed6",{ del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
		});	
		$("#rowed6").jqGrid('bindKeys', {});
		//duyệt tìm các ô đang search có focus để dừng xếp hàng
        $('#gbox_rowed6 .ui-search-table').find(':input[type=text]').each(function() {
            $("#gbox_rowed6 #" + this.id).focusin(function() {
                $('#rowed6').setGridParam({loadonce: true}).trigger('reloadGrid');
                
                powerXepHang_luoidangcho = 0;
				document.getElementById("tieptucxephang").style.display="block";
				document.getElementById("dungxephang").style.display="none";
				document.getElementById("menu2_tieptucxephang").style.display="block";
				document.getElementById("menu2_dungxephang").style.display="none";
				document.getElementById("menu3_tieptucxephang").style.display="block";
				document.getElementById("menu3_dungxephang").style.display="none";
            });
        });



}


function create_grid5()
{

	$("#rowed7").jqGrid({
		datastr: {},
		datatype: "jsonstring",
		colNames: ['ID khám','Mã BN','Họ tên','Tuổi','Giới','Hạng mục khám','H.tất','Ngày giờ tạo','Tên form','Trạng thái','ID bệnh nhân','ID Lượt khám','IsDichVuCC'],
		colModel: [
		{name: 'ID_Kham', index: 'ID_Kham', search: false, width: "10%",  align: 'left', hidden: true},
		{name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "10%",  align: 'left', hidden: false},
		{name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "30%",  align: 'left', hidden: true},
		{name: 'Tuoi', index: 'Tuoi', search: false, width: "13%",  align: 'center', hidden: false},
		{name: 'GioiTinh', index: 'GioiTinh', search: false, width: "10%",  align: 'center', hidden: false},
		{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "30%",  align: 'left', hidden: false},
		{name: 'NgayGioKetThuc', index: 'NgayGioKetThuc', search: false, width: "10%",  align: 'center', hidden: false, edittype: "text"},
		{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "20%",  align: 'center', hidden: true, edittype: "text"},
		{name: 'TenForm', index: 'TenForm', search: false, width: "8%",  align: 'center', hidden: true,edittype:"select",formatter:'select',editoptions:{value: tenform}},
		{name: 'ID_TrangThai', index: 'ID_TrangThai', search: false, width: "2%", align: 'center',formatter:"select",edittype:"select",editoptions: { value: trangthai}, hidden: true},
		{name: 'ID_BenhNhan', index: 'ID_BenhNhan', search: false, width: "80%",  align: 'center', hidden: true},
		{name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "80%",  align: 'center', hidden: true},
		{name: 'IsDichVuCC', index: 'IsDichVuCC', search: false, width: "80%",  align: 'center', hidden: true},

		],
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 1000000,
		rowList: [30, 50, 70],
		pager: '#prowed7',
		sortname: 'NgayGioKetThuc',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		grouping:true, 
		groupingView : { 
			groupField : ['TenBenhNhan'],
			groupDataSorted : true ,
			groupCollapse : false,
			groupColumnShow :[false],
			groupText : ['<b>{0} - {1} hạng mục </b>']
		},
			 onSelectRow: function(rowId) { 
				var rowData = jQuery(this).getRowData(rowId); 
				 var ID_LuotKham = rowData['ID_LuotKham'];// alert(ID_LuotKham);				
				 $("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_select_theo_id_luotkham&id="+ID_LuotKham}).trigger('reloadGrid');
			}, 

            ondblClickRow: function(rowId, rowIndex, columnIndex) {
				if(loading==true){
					if(demclick==0){
						var rowData = jQuery(this).getRowData(rowId); 
						mogoikham(rowId,rowData["NgayGioTao"],rowData["TenLoaiKham"],rowData["TenForm"],rowData["ID_TrangThai"],"rowed7",window.duongdandata);
					}
					demclick++;
				}else{
					var rowData = jQuery(this).getRowData(rowId); 
					mogoikham(rowId,rowData["NgayGioTao"],rowData["TenLoaiKham"],rowData["TenForm"],rowData["ID_TrangThai"],"rowed7",window.duongdandata);
				}					 
				// mogoikham2(rowId,rowData["TenForm"])   
			},
            sortorder: "desc",
            onRightClickRow: function(rowid, iRow, iCol, e) {

            	var grid = jQuery('#rowed7');
            	var colModel = grid.getGridParam('colModel');
            	var colName = colModel[iCol].name;
            	var colIndex = colModel[iCol].index;
            	var rowData = jQuery('#rowed7').getRowData(rowid);
            	window.rowData_grdangcho = rowData;
            	$(document).bind("contextmenu", function(e) {
            		return false;
            	});

            	if ($.trim(rowData[colName]) != "") {
            		window.rowid_danhcho = rowid;
            		window.from = colModel[iCol].name;
            		if ($("#menu3").width() + e.pageX > $(document).width()) {
            			$("#menu3").css('left', e.pageX - $("#menu3").width() + "px");
            		} else {
            			$("#menu3").css('left', e.pageX + "px");
            		}
            		if ($("#menu3").height() + e.pageY +30 > $(document).height()) {
            			$("#menu3").css('top', e.pageY - $("#menu3").height() + "px");
            		} else {
            			$("#menu3").css('top', e.pageY + "px");
            		}
            		//$("#menu3").show(300);
            		setTimeout(function(){
						$("#menu3").show(300);   
					},400);
            	}

            	

            },
            loadComplete: function(data) {

				$("#rowed7").setGridParam({loadonce: true});
            	var caption= 'Bệnh nhân đã hoàn tất ('+ jQuery("#rowed7").jqGrid('getGridParam', 'records')+')';
				jQuery("#rowed7").jqGrid('setCaption', caption); // đếm bản ghi set vào caption
                //kiemtra_dk_tg_load_completed();
				var tmp = $("#rowed7").jqGrid('getDataIDs'); 
                for(var i=0;i < tmp.length;i++){ 
                	var rowData = $("#rowed7").getRowData(tmp[i]);
					if (rowData["IsDichVuCC"] == 1) {
                        $("#rowed7").setCell(tmp[i], 'MaBenhNhan', '', {background: 'pink'});
                    }else{
                       // $("#rowed7").setCell(tmp[i], 'MaBenhNhan', '', {background: '#FFFFFF'});
                    }
				}
			
                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
            },
            caption: "Bệnh nhân đã hoàn tất "
        });
		//$("#rowed7").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
		$("#rowed7").jqGrid('navGrid',"#prowed7",{ del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
		});	
		$("#rowed7").jqGrid('bindKeys', {});
		//duyệt tìm các ô đang search có focus để dừng xếp hàng
        $('#gbox_rowed7 .ui-search-table').find(':input[type=text]').each(function() {
            $("#gbox_rowed7 #" + this.id).focusin(function() {
                $('#rowed7').setGridParam({loadonce: true}).trigger('reloadGrid');
                
                powerXepHang_luoidangcho = 0;
				document.getElementById("tieptucxephang").style.display="block";
				document.getElementById("dungxephang").style.display="none";
				document.getElementById("menu2_tieptucxephang").style.display="block";
				document.getElementById("menu2_dungxephang").style.display="none";
				document.getElementById("menu3_tieptucxephang").style.display="block";
				document.getElementById("menu3_dungxephang").style.display="none";
            });
        });





}




function create_layout() {
	window.kiemtrasearch = true;
	$("#main_content").layout({
		resizerClass: 'ui-state-default'
		, east: {
			resizable: true
						, size: 450
						, spacing_closed: 27
						, togglerLength_closed: 85
                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                        , spacing_closed:		27
                        , togglerLength_closed:	85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                        , onresize_end: function() {
                        	resize_control();

                        }
                        , onopen_end: function() {
                        	resize_control();

                        }
                        , onclose_end: function() {
                        	resize_control();

                        }

                    }
                    , center: {
                    	resizable: true
                    	, size: 910

                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                        , fxSettings_close: {easing: "easeOutQuint"}

                        , onresize_end: function() {
                        	resize_control();

                        }
                        , onopen_end: function() {
                        	resize_control();

                        }
                        , onclose_end: function() {
                        	resize_control();


                        }
                    }
                });
}

var reload_luoi_danhsach =<?php echo (get_system_config_("ThoiGianRefreshHangDoiCanLamSang")) ?>;
//demnguoc
function timer_title_danhsach(_value) {
	if (_value == "start") {
		if(typeof(timer1)=="number"){
		  clearInterval(timer1);
		 }
		//console.log("start");
		var bodem = 0;
		var tam = reload_luoi_danhsach;
		timer1 = setInterval(function() {
			//if (window.kiemtrasearch == true) {
				$('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Tải lại sau " + tam + " giây");
				$('#gbox_rowed4 .ui-jqgrid-title span.demgio').html(" Tải lại sau " + tam + " giây");
				$('#gbox_rowed6 .ui-jqgrid-title span.demgio').html(" Tải lại sau " + tam + " giây");
				$('#gbox_rowed7 .ui-jqgrid-title span.demgio').html(" Tải lại sau " + tam + " giây");
		
						//alert(tam);
				bodem += 1;
				tam--;
				if (reload_luoi_danhsach == bodem) {
								bodem = 0;
								//tam = reload_luoi_danhsach;
							/*	$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
								$('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
								$('#rowed6').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
								$('#rowed7').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');*/
						loading=true;
						taidulieu2(window.duongdandata);
						
					timer_title_danhsach("stop");
				}
				 
			//  }
			}, (1000));
		//alert();
	} else {
		clearInterval(timer1);
		//console.log("stop");
		$('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Đang tải dữ liệu");
		$('#gbox_rowed4 .ui-jqgrid-title span.demgio').html(" Đang tải dữ liệu");
		$('#gbox_rowed6 .ui-jqgrid-title span.demgio').html(" Đang tải dữ liệu");
	}
}
function load_select1(){
	window.tennhom = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomXepHang&id=ID_NhomXepHang&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được nhóm xếp hạng');}}).responseText;	
	
	$('#demo').setColProp('com_thuocnhom', { editoptions: { value: tennhom} });
	$('#com_thuocnhom').empty();
	create_select("#com_thuocnhom",tennhom);
}
function load_select2(){
	window.idnhom = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomXepHang&id=ID_NhomXepHang&name=ID_NhomXepHang', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	
	$('#demo').setColProp('com_thuocnhom', { editoptions: { value: idnhom} });
	$('#com_thuocnhom').empty();
	create_select("#com_thuocnhom",idnhom);
}


function functiontest2(rowId, tv, rawObject, cm, rdata){
	//rowData,ids,i,grid
	
	var grid=$(this);
	var ids=rowId;
	var rowData =rdata; 
	//alert(rowData["NgayGioHenTraKQ"]);
	if((rowData["NgayGioHenTraKQ"]!=null && rowData["NgayGioHenTraKQ"]!=' ')){
		var d = new Date();
		var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";	
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();		
			var giososanh=String("0:+30").split(":");
			var giososanh1=String("0:+15").split(":");
			var giogoc=rowData["NgayGioHenTraKQ"].split(":");
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
			thoigianMax=thoigianMax.addMinutes(giososanh[1]);
			thoigianMax=thoigianMax.addHours(giososanh[0]).toString("MMMM dd, yyyy  H:mm:ss");
			thoigianMin=thoigianMin.addMinutes(giososanh1[1]);
			thoigianMin=thoigianMin.addHours(giososanh1[0]).toString("MMMM dd, yyyy  H:mm:ss");
			//console.log(hientai + '  ' +hientai1)
			doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
			chuoidich= new Date(doituonggiogoc); 
			thoigianMin= new Date(thoigianMin);  
			thoigianMax= new Date(thoigianMax);	 
			if((chuoidich>=thoigianMin) && (chuoidich<=thoigianMax)){	
				return ' class="quathoigian_min"';	   
				//grid.setCell(ids, "GioHenKham", '', "quathoigian_max"); 
			}else 
			if (chuoidich<thoigianMin)
				return ' class="quathoigian_max"';			   
				//grid.setCell(ids, "GioHenKham", '', "quathoigian_min"); 
			}
		}
//}



function load_hangmuckham(){
	
	window.hangmuckham = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục loại khám');}}).responseText;	
	//alert(window.hangmuckham);
}
function load_trangthai(){
	
	window.trangthai = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_TrangThaiCLSCuaBenhNhan&id=ID4Dev&name=TenTrangThaiCLSCuaBenhNhan", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục loại khám');}}).responseText;	
	//alert(window.trangthai);
}
function load_nguoithuchien(){
	
	window.nguoithuchien = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	//alert(window.trangthai);
}	
function create_bs(elem,datalocal){ 
	datalocal=jQuery.parseJSON(datalocal);  
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,	
		colNames:['Tên nhóm', 'Mô tả'],
		colModel:[			
		{name:'ten_nhom',index:'ten_nhom',hidden :false},
		{name:'mo_ta',index:'mo_ta',hidden :false},

		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 1000000,
		rowList:[],		
		sortname: 'ten_nhom',
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
			if($(elem).data('clicked')){
			var selr = jQuery(elem).jqGrid('getGridParam','selrow');
			window.duongdandata='pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_theonhom&id='+selr;
			phanloaikham=id;
			taidulieu(window.duongdandata);
			/*$.ajax({
				type: 'POST',
				async : true,
				url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_theonhom&id='+selr,
				success: function(output, status, xhr) {		
					output=output.split(';;');
					$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed6').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed7').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[3]  }).trigger('reloadGrid', [{ page: 1}]);
				},
		   
			});*/
			document.getElementById("thuocnhom").checked=true;
			document.getElementById("thuochangmuckham").checked=false;
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

		},
		loadComplete: function(data) {	
			grid_filter_enter(elem) ;
			//count = jQuery(elem).jqGrid('getGridParam', 'records');	
		//	if(count>0){
			//	ids =	($(elem).getDataIDs()[0]);				
			//	$(elem).jqGrid("setSelection",ids, true);
			//}
		},	  
		
	});	

$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
$(elem).jqGrid('bindKeys', {} );

}  

function create_bs2(elem,datalocal){ 
	datalocal=jQuery.parseJSON(datalocal);  
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,	
		colNames:['Tên PB chuyên môn','Tầng', 'Mô tả'],
		colModel:[			
		{name:'TenPhongBan',index:'TenPhongBan', width: "70%",  align: 'left',hidden :false},
		{name:'Tang',index:'Tang', width: "30%",  align: 'center',hidden :false},
		{name:'MoTa',index:'MoTa', width: "40%",  align: 'left',hidden :true},

		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 1000000,
		rowList:[],		
		sortname: 'tenhangmuc',
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){
			if($(elem).data('clicked')){
			var selr = jQuery(elem).jqGrid('getGridParam','selrow');
			document.getElementById("thuocnhom").checked=false;
			document.getElementById("thuochangmuckham").checked=true;
			window.duongdandata='pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_theophongban&id='+selr;
			taidulieu(window.duongdandata);
			/*$.ajax({
				type: 'POST',
				async : true,
				url: ,
				success: function(output, status, xhr) {		
					output=output.split(';;');
					$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed6').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed7').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[3]  }).trigger('reloadGrid', [{ page: 1}]);
				},
		   
			});*/
			
		 
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

		},
		loadComplete: function(data) {	
			grid_filter_enter(elem) ;
		//	count = jQuery(elem).jqGrid('getGridParam', 'records');	
			//if(count>0){
		//		ids =	($(elem).getDataIDs()[0]);				
		//		$(elem).jqGrid("setSelection",ids, true);
		//	}
		},	  
		
	});	

$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
$(elem).jqGrid('bindKeys', {} );

} 

//gọi menu chuột phải
$("#menu,#menu2,#menu3").menu();

$(document).bind("contextmenu", function(e) {
	var selr = jQuery('#rowed4').jqGrid('getGridParam','selrow'); 
	var rowData = $("#rowed4").getRowData(selr);	
	var ID_TrangThai = rowData['ID_TrangThai'];
	var ID_Kham = rowData['ID_Kham'];
	var TenBenhNhan = rowData['TenBenhNhan'];
	var MaBenhNhan = rowData['MaBenhNhan'];
			//alert(ID_TrangThai);
			if(ID_TrangThai=='DangKham'){
				
			
			//$("#menu2_chuyenvedanhsachcho").removeClass("ui-state-disabled");
			$( "#chuyen" ).show();
			$( "#chuyen2" ).hide();

			}else{
				$( "#chuyen2" ).show();
				$( "#chuyen" ).hide();
				$("#menu2_chuyenvedanhsachcho2").addClass("ui-state-disabled");
			}
return false;
});
$(document).bind("mouseup", function(e) {
	$("#menu,#menu2,#menu3").hide();
});
$("#menu2_chuyenvedanhsachcho").bind("click", function(e) { //------
var selr = jQuery('#rowed4').jqGrid('getGridParam','selrow'); 
var rowData = $("#rowed4").getRowData(selr);	
var ID_Kham = rowData['ID_Kham'];
var TenBenhNhan = rowData['TenBenhNhan'];
var MaBenhNhan = rowData['MaBenhNhan'];
var strconfirm = confirm("Bạn có chắc chắn muốn chuyển bệnh nhân "+TenBenhNhan+" ("+MaBenhNhan+") về danh sách chờ!");
if (strconfirm == true)
{
	//alert(ID_Kham);
	
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&id_kham='+ ID_Kham+'&trangthai=DangCho').done(function(data)
	{
		//alert(data); 
		if ($.trim(data) == '') {
			
			
			taidulieu(window.duongdandata);
			tooltip_message("Chuyển về danh sách chờ thành công");
		}
		else {
			tooltip_message("Chuyển về danh sách chờ không thành công");
		}
		setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
		},3000);

	});

}// end strconfirm

})//-------
				 
				 
$("#stopxephang").bind( "click", function(e) {
	timer_title_danhsach("stop");
	$('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Đang dừng xếp hàng");
	document.getElementById("tieptucxephang").style.display="block";
	document.getElementById("dungxephang").style.display="none";
	document.getElementById("menu2_tieptucxephang").style.display="block";
	document.getElementById("menu2_dungxephang").style.display="none";
	document.getElementById("menu3_tieptucxephang").style.display="block";
	document.getElementById("menu3_dungxephang").style.display="none";

//	startxephang
})
$("#startxephang").bind( "click", function(e) {
	timer_title_danhsach("start");
	
	document.getElementById("tieptucxephang").style.display="none";
	document.getElementById("dungxephang").style.display="block";
	document.getElementById("menu2_tieptucxephang").style.display="none";
	document.getElementById("menu2_dungxephang").style.display="block";
	document.getElementById("menu3_tieptucxephang").style.display="none";
	document.getElementById("menu3_dungxephang").style.display="block";

})
$("#refresh").bind( "click", function(e) {
	taidulieu(window.duongdandata);
	//setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	//},1000);
})
$("#menu2_stopxephang").bind( "click", function(e) {

	timer_title_danhsach("stop");
	$('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Đang dừng xếp hàng");
	document.getElementById("tieptucxephang").style.display="block";
	document.getElementById("dungxephang").style.display="none";
	document.getElementById("menu2_tieptucxephang").style.display="block";
	document.getElementById("menu2_dungxephang").style.display="none";
	document.getElementById("menu3_tieptucxephang").style.display="block";
	document.getElementById("menu3_dungxephang").style.display="none";


	//startxephang
})
$("#menu2_startxephang").bind( "click", function(e) {
	timer_title_danhsach("start");
	
	document.getElementById("tieptucxephang").style.display="none";
	document.getElementById("dungxephang").style.display="block";
	document.getElementById("menu2_tieptucxephang").style.display="none";
	document.getElementById("menu2_dungxephang").style.display="block";
	document.getElementById("menu3_tieptucxephang").style.display="none";
	document.getElementById("menu3_dungxephang").style.display="block";


})
$("#menu2_refresh").bind( "click", function(e) {
	taidulieu(window.duongdandata);
})
$("#menu3_stopxephang").bind( "click", function(e) {
	timer_title_danhsach("stop");
	$('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Đang dừng xếp hàng");
	document.getElementById("tieptucxephang").style.display="block";
	document.getElementById("dungxephang").style.display="none";
	document.getElementById("menu2_tieptucxephang").style.display="block";
	document.getElementById("menu2_dungxephang").style.display="none";
	document.getElementById("menu3_tieptucxephang").style.display="block";
	document.getElementById("menu3_dungxephang").style.display="none";


	startxephang
})
$("#menu3_startxephang").bind( "click", function(e) {
timer_title_danhsach("start");
	
	document.getElementById("tieptucxephang").style.display="none";
	document.getElementById("dungxephang").style.display="block";
	document.getElementById("menu2_tieptucxephang").style.display="none";
	document.getElementById("menu2_dungxephang").style.display="block";
	document.getElementById("menu3_tieptucxephang").style.display="none";
	document.getElementById("menu3_dungxephang").style.display="block";

})
$("#menu3_refresh").bind( "click", function(e) {
	taidulieu(window.duongdandata);
	setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},1000);
})

$("#benhan").bind( "click", function(e) {
	//alert('Chưa làm');
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control=35&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){
			var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
			var rowData =  $('#rowed3').getRowData(id_row);
			parent.postMessage('benhan;'+rowData["ID_BenhNhan"]+';'+rowData["TenBenhNhan"], "*");
	   }else{
			tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
			}
	setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},3000);
	   
	})
})	
$("#thongtinbenhnhan").bind( "click", function(e) {
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control=163&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){
			var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
			var rowData =  $('#rowed3').getRowData(id_row);
			parent.postMessage("editbenhnhan;"+rowData["ID_BenhNhan"]+";"+rowData["TenBenhNhan"], "*");
		}else{
			tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
			}
	setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},3000);
})	
})
$("#thongtinluotkham").bind( "click", function(e) {
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control=275&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){
		var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
		var rowData =  $('#rowed3').getRowData(id_row);
		parent.postMessage("editluotkham;"+rowData["ID_LuotKham"]+";"+rowData["TenBenhNhan"], "*");
	}else{
		tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
		}
	setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},3000);
})
})
$("#menu2_benhan").bind( "click", function(e) {
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control=35&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){
			var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow');
			var rowData =  $('#rowed4').getRowData(id_row);
			parent.postMessage('benhan;'+rowData["ID_BenhNhan"]+';'+rowData["TenBenhNhan"], "*");
		}else{
		tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
		}
	setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},3000);
})	
})
$("#menu2_thongtinbenhnhan").bind( "click", function(e) {
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control=163&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){
			var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow');
			var rowData =  $('#rowed4').getRowData(id_row);
			parent.postMessage("editbenhnhan;"+rowData["ID_BenhNhan"]+";"+rowData["TenBenhNhan"], "*");
		}else{
		tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
		}
	setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},3000);
})	
})
$("#menu2_thongtinluotkham").bind( "click", function(e) {
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control=275&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){
		var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow');
		var rowData =  $('#rowed4').getRowData(id_row);
		parent.postMessage("editluotkham;"+rowData["ID_LuotKham"]+";"+rowData["TenBenhNhan"], "*");
	}else{
		tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
		}
	setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},3000);
})	
})	
$("#menu2_lichsudhst").bind( "click", function(e) {
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control=34&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){
			var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow');
			var rowData =  $('#rowed4').getRowData(id_row);
			parent.postMessage('open_idbenhnhan;lich_su_dau_hieu_sinh_ton;;'+rowData["ID_BenhNhan"]+';;;'+rowData["TenBenhNhan"],"*");
		}else{
		tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
		}
	setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},3000);
})	
})	
$("#menu2_chitiethangmuckham").bind( "click", function(e) {
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control=793&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){
			var selr = jQuery('#rowed4').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#rowed4').getRowData(selr);
			parent.postMessage('chitiethangmuckham;chitiethangmuckham;'+rowData['ID_LuotKham']+';'+rowData['MaBenhNhan']+';'+rowData['TenBenhNhan'], "*");
			
		}else{
		tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
		}
		setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},3000);
	})
	
	
})	


$("#menu3_chitiethangmuckham").bind( "click", function(e) {
	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control=793&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){
			if($('#group').is( ":checked" )==true){
			var selr = jQuery('#rowed7').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#rowed7').getRowData(selr);
			parent.postMessage('chitiethangmuckham;chitiethangmuckham;'+rowData['ID_LuotKham']+';'+rowData['MaBenhNhan']+';'+rowData['TenBenhNhan'], "*");
			}else{
				var selr = jQuery('#rowed6').jqGrid('getGridParam','selrow');
				var rowData = jQuery('#rowed6').getRowData(selr);
				parent.postMessage('chitiethangmuckham;chitiethangmuckham;'+rowData['ID_LuotKham']+';'+rowData['MaBenhNhan']+';'+rowData['TenBenhNhan'], "*");
				}
			
		}else{
		tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
		}
		setTimeout(function(){
		
		document.getElementById("tieptucxephang").style.display="none";
		document.getElementById("dungxephang").style.display="block";
		document.getElementById("menu2_tieptucxephang").style.display="none";
		document.getElementById("menu2_dungxephang").style.display="block";
		document.getElementById("menu3_tieptucxephang").style.display="none";
		document.getElementById("menu3_dungxephang").style.display="block";
	},3000);
	})

})	

function moghichu(id_benhnhan,hoten){
	elem = 1 + Math.floor(Math.random() * 1000000000);
	dialog_main("Ghi chú của bệnh nhân: "+hoten, 95, 70, elem, 'pages.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan);
}

function mogoikham(id,ngaygiotao,loaikham,idform,trangthai,luoi,duongdan){
	
	var rs= window.tenform.split(";");
	var ten_form='';
	if(idform!=""){
		for(var i=0;i<rs.length;i++){
			
				var idf= rs[i].split(":");
				if(idf[0]==idform){
					var ten = rs[i].split(":");
					ten_form=ten[1];
					break;
				}
			
		}
	}else{
		ten_form="";
	}
	window.id_control=0;
	for(var i=0;i< _control_tenform.length;i++){
		if(ten_form==_control_tenform[i]["PageOpen"]){
			delete window.id_control;
			window.id_control=_control_tenform[i]["ID_Control"];
			
		}
	}
	//alert(id_control);

if(id_control!=0){

	$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_quyen_goikham&id_control='+ id_control+'&id_nhanvien=<?=$_SESSION["user"]["id_user"]; ?>').done(function(data)
	{
		if(data==1){ //'"+tmp1[i]+"','"+rowData["NgayGioTao"]+"','"+rowData["TenBenhNhan"]+"','"+rowData["TenLoaiKham"]

			var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";	
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();		
			ids = $('#rowed3').jqGrid('getDataIDs');				 
			$("#rowed3").jqGrid("setSelection",ids[0], true);								
			var giogoc=ngaygiotao.split(":");
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
			var thoigianMin2=Date.today().set({
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

			thoigianMax=thoigianMax.addMilliseconds(-500);
			//thoigianMax=thoigianMax.addMinutes(-5);
			thoigianMax=thoigianMax.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
			thoigianMin=thoigianMin.addMinutes(-5);
			thoigianMin=thoigianMin.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
			thoigianMin2=thoigianMin2.addMinutes(0);
			thoigianMin2=thoigianMin2.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
			//console.log(hientai + '  ' +hientai1)
			doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
			chuoidich= new Date(doituonggiogoc); 
			thoigianMin= new Date(thoigianMin);  
			thoigianMin2= new Date(thoigianMin2); 
			//console.log(thoigianMin);		
			thoigianMax= new Date(thoigianMax);
//alert(idkham);
			if(thoigianMin2<=chuoidich){	
			 var rowData = jQuery('#rowed3').getRowData(id); 
	 		//var id_benhnhan = rowData['ID_BenhNhan'];
			 var TenBenhNhan = rowData['TenBenhNhan'];									    
				/* var strconfirm = confirm("Hạng mục "+loaikham+" của "+TenBenhNhan+"  chưa đến lượt thực hiện theo thứ tự chỉ định. Bạn có muốn gọi khám hay không!");
				if (strconfirm == true)
				{ */

					var ID_Kham = id;
					//alert(id)
					//alert(trangthai);
					if(trangthai=="DangCho"){
				//	alert('Chưa làm \n ID khám:'+ID_Kham+' - Tên form:'+tenform); 
						$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&id_kham='+ ID_Kham+'&trangthai=DangKham').done(function(data)
						{
							//alert(data); 
							if ($.trim(data) == '') {
								goi_kham(id,ten_form,luoi);
								
								//tooltip_message("Chưa hoàn thiện");
								//$("#rowed3").trigger("reloadGrid");
								//$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
								$('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
								//$("#rowed4").trigger("reloadGrid");
								
							}
							else {
								tooltip_message("Lỗi");
							}
						});//end post
					}else if(trangthai=="DangKham" || trangthai=="DaThucHien"){
						goi_kham(id,ten_form,luoi);
					}else if(trangthai=="Xong"){
						
						goi_kham(id,ten_form,luoi);
					}

				//}
			}else if(chuoidich<=thoigianMax) {										 			   
				var ID_Kham = id;
				//alert('Chưa làm \n ID khám:'+ID_Kham+' - Tên form:'+tenform);
				//alert(id);
				if(trangthai=="DangCho"){
					$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&id_kham='+ ID_Kham+'&trangthai=DangKham').done(function(data)
						{
							//alert(data); 
							if ($.trim(data) == '') {
								goi_kham(id,ten_form,luoi);
								//tooltip_message("Chưa hoàn thiện");
								//$("#rowed3").trigger("reloadGrid");
								//$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
								//$('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
								//$("#rowed4").trigger("reloadGrid");
								taidulieu(duongdan);
							}
							else {
								tooltip_message("Lỗi");
							}
						});//end post
				}else if(trangthai=="DangKham" || trangthai=="DaThucHien"){
						goi_kham(id,ten_form,luoi);
				}else if(trangthai=="Xong"){
						goi_kham(id,ten_form,luoi);
				}

			}
		}else{
			tooltip_message("Bạn không đủ quyền thực hiện chức năng này");
			}
			
	}) 
	}
	else{
		tooltip_message("Form này chưa sẵn sàng để gọi");
		}
}


function load_select_tenform(){ 
	window.tenform = $.ajax({url: "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tenform", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục');}}).responseText;
	//alert(window.bophanthuchien);
	
}
function goi_kham(idkham,tenform,luoi){
	if(luoi=="rowed3"){
	 var rowData = jQuery('#rowed3').getRowData(idkham); 
	 var id_benhnhan = rowData['ID_BenhNhan'];
	 var TenBenhNhan = rowData['TenBenhNhan'];
	 var id_loailham = rowData['ID_LoaiKham'];
		if(id_loailham==3918){
		 	parent.postMessage('canlamsang;Framingham;'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");
		}else if(id_loailham==38){
		 	parent.postMessage('canlamsang;sieu_am_4d;'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");
		}else{
			parent.postMessage('canlamsang;'+tenform+';'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");
			}
		
	}else if(luoi=="rowed4"){
	 var rowData = jQuery('#rowed4').getRowData(idkham); 
	 var id_benhnhan = rowData['ID_BenhNhan'];
	 var TenBenhNhan = rowData['TenBenhNhan'];
	 var TenLoaiKham = rowData['TenLoaiKham'];
	 	if(TenLoaiKham=='FRAMINGHAM'){
		 	parent.postMessage('canlamsang;Framingham;'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");	
		 }else if(TenLoaiKham=='SA thai 4 chiều'){
		 	parent.postMessage('canlamsang;sieu_am_4d;'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");
		 }else{
			 parent.postMessage('canlamsang;'+tenform+';'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");	
			 }
	
	}else if(luoi=="rowed6"){
	 var rowData = jQuery('#rowed6').getRowData(idkham); 
	 var id_benhnhan = rowData['ID_BenhNhan'];
	 var TenBenhNhan = rowData['TenBenhNhan'];
	 var TenLoaiKham = rowData['TenLoaiKham'];
	 	if(TenLoaiKham=='FRAMINGHAM'){
		 	parent.postMessage('canlamsang;Framingham;'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");	
		 }else if(TenLoaiKham=='SA thai 4 chiều'){
		 	parent.postMessage('canlamsang;sieu_am_4d;'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");
		 }else{
			 parent.postMessage('canlamsang;'+tenform+';'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");	
			 }
	
	}else if(luoi=="rowed7"){
	 var rowData = jQuery('#rowed7').getRowData(idkham); 
	 var id_benhnhan = rowData['ID_BenhNhan'];
	 var TenBenhNhan = rowData['TenBenhNhan'];
	 var TenLoaiKham = rowData['TenLoaiKham'];
	 	if(TenLoaiKham=='FRAMINGHAM'){
		 	parent.postMessage('canlamsang;Framingham;'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");	
		 }else if(TenLoaiKham=='SA thai 4 chiều'){
		 	parent.postMessage('canlamsang;sieu_am_4d;'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");
		 }else{
			 parent.postMessage('canlamsang;'+tenform+';'+id_benhnhan+';'+TenBenhNhan+';'+idkham, "*");	
			 }
	
	}	
	
}//end function goi_kham

function create_layout2(){
	$('#luoitrai').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {
						resize_control();
                }
                , onclose_end: function() {
					resize_control();
                }

            }
            , center: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {
					resize_control();
                }
                , onclose_end: function() {
					resize_control();	
                }
            }
          
        });
	}
function resize_control() {
	//cao_left = $(".left_col").height();
	$("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 11);
	
	$("#rowed3").setGridHeight($('.n_tren').height()-60);
	$("#rowed4").setGridHeight($('.n_duoi').height()-110);
	
	cao_right = $(".right_col").height()/2;
	$("#rowed5,#rowed6,#rowed7").setGridWidth($(".right_col").width() - 11);
	$("#rowed5").setGridHeight(cao_right-$("#tieude").height()-56);
	
	$("#rowed6,#rowed7").setGridHeight(cao_right-$("#tieude").height()-40);
	$("#tieude").width($(".right_col").width()-11);
	//alert($('#luoitrai').height());
}
function taidulieu(duongdan){
	
	//console.log(phanloaikham);
	var socket = io.connect('192.168.1.105:4000');
	if(!socket.connected){
	socket.emit('send', $.trim(phanloaikham));
	socket.on('news', function (output) {
	//	console.log(output)
		if($.trim(output)==1){
		}else{
			socket.close();
			output=output.split('||');
				if(IsJsonString(output[0])){
					$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
				}
				if(IsJsonString(output[1])){
					$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);	
				}
				if(IsJsonString(output[2])){
					$('#rowed6').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);	
				}
				if(IsJsonString(output[3])){
					$('#rowed7').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[3]  }).trigger('reloadGrid', [{ page: 1}]);
				}
		}
	
	})
	
	}
	 
	
	
	
	
	/*$.ajax({
			type: 'POST',
			async : true,
				url: duongdan,
			
			success: function(output, status, xhr) {		
				output=output.split('||');
				if(IsJsonString(output[0])){
					$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
				}
				if(IsJsonString(output[1])){
					$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);	
				}
				if(IsJsonString(output[2])){
					$('#rowed6').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);	
				}
				if(IsJsonString(output[3])){
					$('#rowed7').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[3]  }).trigger('reloadGrid', [{ page: 1}]);
				}
		
			},
		   
		});*/
	}
function taidulieu2(duongdan){
/*   $('#rowed3')[0].p.search = false;
	$.extend($('#rowed3')[0].p.postData,{filters:""});
	$('#rowed3').trigger("reloadGrid",[{page:1,current:true}]);
	$('#rowed4')[0].p.search = false;
	$.extend($('#rowed4')[0].p.postData,{filters:""});
	$('#rowed4').trigger("reloadGrid",[{page:1,current:true}]);
	$('#rowed6')[0].p.search = false;
	$.extend($('#rowed6')[0].p.postData,{filters:""});
	$('#rowed6').trigger("reloadGrid",[{page:1,current:true}]);
	$('#rowed7')[0].p.search = false;
	$.extend($('#rowed7')[0].p.postData,{filters:""});
	$('#rowed7').trigger("reloadGrid",[{page:1,current:true}]);*/
	var socket = io.connect('192.168.1.105:4000');
	if(!socket.connected){
	socket.emit('send', $.trim(phanloaikham));
	socket.on('news', function (output) {
		//console.log(output)
		if($.trim(output)==1){
		}else{
			socket.close();
			output=output.split('||');
				if(IsJsonString(output[0])){
					$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
				}
				if(IsJsonString(output[1])){
					$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);	
				}
				if(IsJsonString(output[2])){
					$('#rowed6').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);	
				}
				if(IsJsonString(output[3])){
					$('#rowed7').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[3]  }).trigger('reloadGrid', [{ page: 1}]);
				}
				setTimeout(function(){
				loading=false;
				demclick=0;
				},300)	
		}
		
	})
	}
	
	/*
	$.ajax({
		type: 'POST',
		async : true,
		url: duongdan,					
		success: function(output, status, xhr) {		
			output=output.split('||');
			if(IsJsonString(output[0])){
				console.log("Nam___ "+IsJsonString(output[0]));
				$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
			}
			if(IsJsonString(output[1])){
				//console.log(output[1]);
				$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);	
			}
			if(IsJsonString(output[2])){
				//console.log(output[2]);
				$('#rowed6').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);	
			}
	/*		if(IsJsonString(output[3])){
				$('#rowed7').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[3]  }).trigger('reloadGrid', [{ page: 1}]);
			}
		
			//$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
			//$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);
			//$('#rowed6').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);	
			setTimeout(function(){
				loading=false;
				demclick=0;
				},300)							
			//$('#rowed7').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[3]  }).trigger('reloadGrid', [{ page: 1}]);
		},

		});*/
	}
function check_search(){
	if(window.n_search==1){
		setTimeout(check_search,50);
		return;
	}
	if ($("#search_mutilgrid").dialog( "isOpen" )===false) {
		$("#n_search").empty();
		window.n_search=0;
	}
}
function IsJsonString(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

function reload_grid() {
		loading=true;
		taidulieu2(window.duongdandata);
		timer_title_danhsach("stop");
		
}
</script>