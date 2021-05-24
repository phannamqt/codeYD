<!--author:khatm--
Form: xếp hàng lâm sàng-->
<script type="text/javascript" src="js/node_modules/socket.io/socket.io.js"></script>
<style type="text/css">
    #rowed3 td,#rowed4 td,#rowed5 td{

        font-size:11px!important;
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
        width:180px;
        display:inline-block;
    }
    #menu_toggle{
        font-size:12px;
        padding:5px 0px;
        background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #b3ffb3;
        border:#CCC 1px dashed;
    }

    .demgio{
        /*color:red;*/
        cursor:pointer;
		display:inline-block;
		/*width:250px;*/
    }
	.demgio_container{
		display:inline-block;
		margin-top:5px;
	}

    .disable{
        color:red;
        background:#333;

    }
    #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
        margin-left:0px;
        margin-top:0px;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
    }
    #menu {
        width: 150px!important;
        display:none;
        position:absolute;
        box-shadow:0px 0px 3px #333;
        z-index:100000;
        background: #ffffff;
    }
    #menu2 {
        width: 210px!important;
        display:none;
        position:absolute;
        box-shadow:0px 0px 3px #333;
        z-index:100000;
        background: #ffffff;
    }
    #menu3 {
        width: 210px!important;
        display:none;
        position:absolute;
        box-shadow:0px 0px 3px #333;
        z-index:100000;
        background: #ffffff;
    }
    #calendar {
        width: 900px;
        margin: 0 auto;
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

        /*box-shadow:0px 0px 2px 1px #a0a0a0;*/
    }
    input[type=button].custom_button:focus{
        outline:  none;
    }
    :focus {outline:none;}
    ::-moz-focus-inner {border:0;}
</style>


<body>
	<input type="hidden" id="landau_rowed3" value="1">
    <input type="hidden" id="landau_rowed4" value="1">
    <input type="hidden" id="landau_rowed5" value="1">
    <ul id="menu" >
        <li><a id="chuasansang" href="#"><span class="ui-icon ui-icon-closethick"></span><span class="menu_text">Chưa sẵn sàng</span></a></li>
        <li><a id="huyxephang" href="#"><span class="ui-icon ui-icon-trash"></span><span class="menu_text">Hủy xếp hàng</span></a></li>
        <li><a id="thongtinbenhnhan" href="#"><span class="ui-icon ui-icon-person"></span><span class="menu_text">Thông tin bệnh nhân</span></a></li>
        <li><a id="thongtinluotkham" href="#"><span class="ui-icon ui-icon-pencil"></span><span class="menu_text">Thông tin lượt khám</span></a></li>
        <li><a id="medicalreport" href="#"><span class="ui-icon ui-icon-plusthick"></span><span class="menu_text">Medical Report</span></a></li>
        <!-- <li><a id="stopxephang" href="#"><span class="ui-icon ui-icon-pause"></span><span class="menu_text">Dừng xếp hàng</span></a></li>
        <li><a id="playxephang" href="#"><span class="ui-icon ui-icon-play"></span><span class="menu_text">Bật xếp hàng</span></a></li> -->
    </ul>
    <ul id="menu2" >
        <li><a id="vangmat" href="#"><span class="ui-icon ui-icon-closethick"></span><span class="menu_text">Vắng mặt</span></a></li>
        <li><a id="xonghoso" href="#"><span class="ui-icon ui-icon-check"></span><span class="menu_text">Xong hồ sơ</span></a></li>
        <li><a id="chuyenveDsCho" href="#"><span class="ui-icon ui-icon-arrowreturnthick-1-n"></span><span class="menu_text">Chuyển về danh sách chờ khám</span></a></li>
        <li><a id="capnhatGioTraKQ" href="#"><span class="ui-icon ui-icon-clock"></span><span class="menu_text">Cập nhật giờ hẹn trả KQ</span></a></li>
        <hr>
        <li><a id="thongtinbenhnhanB" href="#"><span class="ui-icon ui-icon-person"></span><span class="menu_text">Thông tin bệnh nhân</span></a></li>
        <li><a id="thongtinluotkhamB" href="#"><span class="ui-icon ui-icon-pencil"></span><span class="menu_text">Thông tin lượt khám</span></a></li>
        <li><a id="lichsudston" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Lịch sử dấu sinh tồn</span></a></li>
        <hr>
        <li><a id="benhan" href="#"><span class="ui-icon ui-icon-document"></span><span class="menu_text">Bệnh án</span></a></li>
        <li><a id="chitiethangmuckham" href="#"><span class="ui-icon ui-icon-document-b"></span><span class="menu_text">Chi tiết hạng mục khám</span></a></li>
        <li><a id="medicalreportB" href="#"><span class="ui-icon ui-icon-plusthick"></span><span class="menu_text">Medical Report</span></a></li>
        <hr>
        <!-- <li><a id="stopxephangB" href="#"><span class="ui-icon ui-icon-pause"></span><span class="menu_text">Dừng xếp hàng</span></a></li>
        <li><a id="playxephangB" href="#"><span class="ui-icon ui-icon-play"></span><span class="menu_text">Bật xếp hàng</span></a></li> -->
    </ul>


    <ul id="menu3" >

        <li><a id="xonghoso" href="#"><span class="ui-icon ui-icon-check"></span><span class="menu_text">Xong hồ sơ</span></a></li>
        <li><a id="datraKQ" href="#"><span class="ui-icon ui-icon-circle-check"></span><span class="menu_text">Đã trả KQ</span></a></li>

        <hr>
        <li><a id="benhanC" href="#"><span class="ui-icon ui-icon-document"></span><span class="menu_text">Bệnh án</span></a></li>
        <li><a id="thongtinbenhnhanC" href="#"><span class="ui-icon ui-icon-person"></span><span class="menu_text">Thông tin bệnh nhân</span></a></li>
        <li><a id="thongtinluotkhamC" href="#"><span class="ui-icon ui-icon-pencil"></span><span class="menu_text">Thông tin lượt khám</span></a></li>

        <hr>
        <!-- <li><a id="benhanB" href="#"><span class="ui-icon ui-icon-document"></span><span class="menu_text">Bệnh án</span></a></li> -->
        <li><a id="chitiethangmuckhamB" href="#"><span class="ui-icon ui-icon-document-b"></span><span class="menu_text">Chi tiết hạng mục khám</span></a></li>
        <li><a id="medicalreportC" href="#"><span class="ui-icon ui-icon-plusthick"></span><span class="menu_text">Medical Report</span></a></li>
        <hr>
        <!-- <li><a id="stopxephangB" href="#"><span class="ui-icon ui-icon-pause"></span><span class="menu_text">Dừng xếp hàng</span></a></li>
        <li><a id="playxephangB" href="#"><span class="ui-icon ui-icon-play"></span><span class="menu_text">Bật xếp hàng</span></a></li> -->
    </ul>
    <div id="panel_main" >
        <div class="left_col ui-widget-content ui-layout-center">
            <div id='demo' style="margin-left:0px;margin-top:0px;;margin-botton:0px;display:inline-block; padding-top:0px;">
            <div style="display:inline-block"><input type="radio" id="thuocnhom" name="thuocnhom" value="0" /><label>Xem theo tầng : </label></div>
              <span class="custom-combobox">
           	  <input id='com_thuocnhom' class='com_thuocnhom'style="width:60px !important" ></span>
              <input id='com_thuocnhom1' class='com_thuocnhom1'  style="width:200px;display:none">
			<a id="add_new" class="fm-button ui-state-default ui-corner-all " style=" margin-left:30px!important;vertical-align:top;width:16px;height:14px;margin-top:-1px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>
            <div style="display:inline-block"><input type="radio" id="thuochangmuckham" name="thuocnhom" value="1" style="margin-left:30px!important;"/><label>Thuộc PB chuyên môn</label>      </div>
            <span class="custom-combobox" >
           	  <input id='com_thuochmk' class='com_thuochmk'  ></span>
              <input id='com_thuochmk1' class='com_thuochmk1'  style="width:200px;display:none">
			<a id='xemtatca' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:30px!important;vertical-align:top;width:60px;height:14px;"  >Xem tất cả</a>
            <a id='DShuyxephang' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px;vertical-align:top;width:110px;height:14px;"  >Ds Hủy xếp hàng</a>
            <a id='power_xephang' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px;vertical-align:top;width:110px;height:14px;"  >Dừng XH</a>
        </div>



      <div id="luoitrai" style="">
         <div class="ui-layout-north n_tren">
            <table id="rowed3" style="margin-top:-5px !important"></table>
        </div>
        <div class="ui-layout-center n_duoi">
            <table id="rowed4" ></table>
        </div>
     </div>







        </div>

        <div class="ui-layout-east ui-widget-content right_col">
         <table id="rowed5" ></table>
   	 </div>
</body>
</html>

<script type="text/javascript">
var loadlandau=0;




    jQuery(document).ready(function() {


    $("#panel_main").css("height",$(window).height()+"px");
    $("#panel_main").fadeIn(1000);
    $(".left_col").css('height',$("#panel_main").height());
    $('#luoitrai').css('height',$(".left_col").height());
    openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB

    window.default_id_tang='';//giả lập id mặc định lấy từ file config
     window.default_id_pb_ChuyenMon=4;//giả lập id mặc định
    create_combobox('#com_thuocnhom','#com_thuocnhom1',".data_phanloaikham","#data_phanloaikham",create_dsTang,500,300,'Nhóm','data_tang',window.default_id_tang);
    create_combobox('#com_thuochmk','#com_thuochmk1',".data_thuochmk","#data_thuochmk",create_ds_pbChuyenMon,500,300,'Danh mục ','data_pbchuyenmon',window.default_id_pb_ChuyenMon);

        var timer;
        var timer1;


            create_layout();
            create_layout2();
            create_grid();
            create_grid2();
            create_grid3();
            resize_control();
			//$("#panel_main").css({ 'opacity':''});
			//$("#panel_main".removeCss('opacity');
			//$("#panel_main").css({ 'opacity':''});
         window.duongdandata='pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xephang';
        taidulieu(window.duongdandata);


      search_mutilgrid("#rowed3,#rowed4,#rowed5");




        //gọi menu chuột phải
        $("#menu").menu();
        $("#menu2").menu();
        $("#menu3").menu();
        $(document).bind("contextmenu", function(e) {
            return false;
        });
        $(document).bind("mouseup", function(e) {
            $("#menu").hide();
        });
        $(document).bind("mouseup", function(e) {
            $("#menu2").hide();
        });
        $(document).bind("mouseup", function(e) {
            $("#menu3").hide();
        });
        // alert(powerXepHang_luoidangcho);

		//$("#xemtatca").click();


           phanquyen();
          // $( "#xemtatca" ).click();
           $(window).resize(function() {

    $("#panel_main").css("height",$(window).height()+"px");
    $("#panel_main").fadeIn(1000);
    $(".left_col").css('height',$("#panel_main").height());
    $('#luoitrai').css('height',$(".left_col").height());
	

})
})//end ready


    var powerXepHang_luoidangcho = 1;//1 là bật,0 là tắt
    var lastsel;
    window.rowcount_luoidangcho = 0;
    window.rowcount_luoidangkham = 0;
    window.rowcount_luoiketthuc = 0;

$("#chitiethangmuckham").click(function(e){
            var selr = jQuery('#rowed4').jqGrid('getGridParam','selrow');
            var rowData = jQuery('#rowed4').getRowData(selr);
            //alert(rowData['ID_LuotKham']);
            parent.postMessage('chitiethangmuckham;chitiethangmuckham;'+rowData['ID_LuotKham']+';'+rowData['MaBenhNhan']+';'+rowData['TenBenhNhan'], "*");
        });
$("#chitiethangmuckhamB").click(function(e){
            var selr = jQuery('#rowed5').jqGrid('getGridParam','selrow');
            var rowData = jQuery('#rowed5').getRowData(selr);
            //alert(rowData['ID_LuotKham']);
            parent.postMessage('chitiethangmuckham;chitiethangmuckham;'+rowData['ID_LuotKham']+';'+rowData['MaBenhNhan']+';'+rowData['TenBenhNhan'], "*");
        })
$("#benhan").click(function(e){
            var selr = jQuery('#rowed4').jqGrid('getGridParam','selrow');
            var rowData = jQuery('#rowed4').getRowData(selr);
            //alert(rowData['ID_LuotKham']);
          //  parent.postMessage('chitiethangmuckham;chitiethangmuckham;'+rowData['ID_LuotKham']+';'+rowData['MaBenhNhan']+';'+rowData['ID_BenhNhan'], "*");
           parent.postMessage("benhan_luotkham;benh_an;"+rowData['ID_LuotKham']+";"+rowData['ID_BenhNhan'], "*");
        })
$("#benhanC").click(function(e){
            var selr = jQuery('#rowed5').jqGrid('getGridParam','selrow');
            var rowData = jQuery('#rowed5').getRowData(selr);
            //alert(rowData['ID_LuotKham']);
          //  parent.postMessage('chitiethangmuckham;chitiethangmuckham;'+rowData['ID_LuotKham']+';'+rowData['MaBenhNhan']+';'+rowData['ID_BenhNhan'], "*");
           parent.postMessage("benhan_luotkham;benh_an;"+rowData['ID_LuotKham']+";"+rowData['ID_BenhNhan'], "*");
        })



 $("#DShuyxephang").click(function()

        {

          $.post('pages.php?module=web_services&function=get_link&action=index&folder=ds_huy_xephang:').done(function(data) {
       elem=1 + Math.floor(Math.random() * 1000000000);
        width=90;
        height=90;
       var folder= data.split(';');
       var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];
          dialog_main("Ds hủy xếp hàng " + ' bệnh nhân', 100, 100, elem,links);

        })
          });

 $("#power_xephang").click(function()

        {

  if(window.congtac_xephang==true)
  {

     $("#power_xephang span.ui-icon").removeClass("ui-icon-closethick").addClass("ui-icon-help");
     $("#power_xephang").html('Bật XH');
     window.congtac_xephang=false;
}
else
{
    window.congtac_xephang=true;// mở lại công tắc

     $("#power_xephang span.ui-icon").removeClass("ui-icon-closethick").addClass("ui-icon-help");
     $("#power_xephang").html('Tắt XH');

}


          })




function create_dsTang(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
		colNames:['Tên tầng'],
		colModel:[
			{name:'TenTang',index:'TenTang',hidden :false},


		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'Id_Tang',
		height:200,
		width: 120,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
		var selr = jQuery(elem).jqGrid('getGridParam','selrow');

  $("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_dangcho&id_tang='+ selr}).trigger('reloadGrid');
		document.getElementById("thuocnhom").checked=true;
		document.getElementById("thuochangmuckham").checked=false;
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		grid_filter_enter(elem) ;

		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );

}
function create_ds_pbChuyenMon(elem,datalocal){
		 datalocal=jQuery.parseJSON(datalocal);
		   $(elem).jqGrid({
		  datastr:datalocal,
		  datatype: "jsonstring" ,
		colNames:['Tên PB chuyên môn','Tầng', 'Mô tả'],
		colModel:[
			{name:'TenPhongBan',index:'TenPhongBan',hidden :false,width: "40%",},
                          {name:'TenTang',index:'TenTang',hidden :false,width: "12%",},
			{name:'MoTa',index:'MoTa',hidden :false,width: "40%",},

		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'tenhangmuc',
		height:200,
		width: 500,
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
		grid_filter_enter(elem) ;
		count = jQuery(elem).jqGrid('getGridParam', 'records');
			if(count>0){
				ids =	($(elem).getDataIDs()[0]);
				$(elem).jqGrid("setSelection",ids, true);
			}
		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );

}


    function create_grid() {
     // alert('');
    $("#rowed3").jqGrid({
        datastr:{},
        datatype: "jsonstring",
            colNames: ['LuotKham', '<?php get_text1("maBN") ?>', '<?php get_text1("hoten") ?>',
                '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>',
                '<?php get_text("phanloai") ?>','Loại khám','Đ.Tượng', 'Hẹn lúc', '<?php get_text("gioden") ?>',
                'Yêu cầu', 'BS trước', 'G.chú', 'N.Dung TK',
                 'Trạng thái', 'Sansang', 'NotesStatus', 'ID_BenhNhan','ID_PhongKhamVatLy','','Tầng','','Gọi','Tùy biến'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', formatter: kiemtra_dk_id_trangthai, index: 'TenBenhNhan', search: true, width: "30%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: true, width: "4%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: true, width: "6%", editable: false, align: 'left', hidden: false},
                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: true, width: "15%", editable: false, align: 'left', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "15%", editable: false, align: 'left', hidden: false},
                {name: 'LoaiDoiTuongKham', index: 'LoaiDoiTuongKham', search: true, width: "10%", editable: false, align: 'left', hidden: false},

                {name: 'GioHenKham', index: 'GioHenKham', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham', formatter: kiemtra_dk_tg, index: 'ThoiGianVaoKham', search: true, width: "10%", editable: false, align: 'center', hidden: false, edittype: "text", editoptions: {
                        dataInit: function(element)
                        {
                            $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                        }
                    }
                },
                {name: 'TenBSYeuCau', index: 'TenBSYeuCau', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'BSTruoc', index: 'BSTruoc', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'GhiChu', index: 'GhiChu', width: "5%", search: true, editable: false, align: 'left', hidden: false},
                {name: 'NoiDungTaiKham', index: 'NoiDungTaiKham', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'ID_TrangThai', index: 'ID_TrangThai', search: true, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'SanSangGoiVaoKham', index: 'SanSangGoiVaoKham', search: true, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'NotesStatus', index: 'NotesStatus', width: "0%", hidden: true},
                {name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", hidden: true},
                {name: 'ID_PhongKhamVatLy', index: '$ID_PhongKhamVatLy', width: "0%", hidden: true},
                {name: 'IsDichVuCC', index: 'IsDichVuCC', width: "0%", hidden: true},
                {name: 'ID_Tang', index: 'ID_Tang', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                 {name: 'SoPhieuKhamGoiLoa', index: 'SoPhieuKhamGoiLoa', width: "0%", hidden: true},
                {name: 'action',sortable:false, index: 'action', width: "10%", align: 'center', edittype: "button", hidden: false, },
                {name: 'action2',sortable:false, index: 'action2', width: "10%", align: 'center', edittype: "button", hidden: false, },
                /*{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},*/


            ],
			hidegrid: false,
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: true},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "asc",
            onSelectRow: function(id) {

                if (id !== lastsel) {
                    $("#rowed3").jqGrid('restoreRow', lastsel);
                    $("#rowed3").jqGrid('editRow', id, true);
                    lastsel = id;
                } else {
                    $("#rowed3").jqGrid('restoreRow', lastsel);
                    lastsel = "";

                }

            },
            ondblClickRow: function(rowId) {
         var rowData = jQuery(this).getRowData(rowId);


                 var id_benhnhan = rowData['ID_BenhNhan'];

                 var idluotkham = rowData['ID_LuotKham'];

              //  parent.postMessage('benhan;'+id_benhnhan+';'+TenBenhNhan, "*");
              parent.postMessage("benhan_luotkham;benh_an;"+idluotkham+";"+id_benhnhan, "*");


            },
            onselect: function(rowId, rowIndex, columnIndex) {
                // $(".ui-icon-pencil").trigger('click');
                //alert(rowId("MaBenhNhan"));
                //alert(rowIndex);
                //alert(columnIndex);
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

                var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');

                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed3').getRowData(rowid);
                window.rowData_grdangcho = rowData;
                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                if ($.trim(rowData[colName]) != "") {
                    window.rowid_danhcho = rowid;
                    window.from = colModel[iCol].name;
                    if ($("#menu").width() + e.pageX > $(document).width()) {
                        $("#menu").css('left', e.pageX - $("#menu").width() + "px");
                    } else {
                        $("#menu").css('left', e.pageX + "px");
                    }
                    if ($("#menu").height() + 30 + e.pageY > $(document).height()) {
                        $("#menu").css('top', e.pageY - $("#menu").height() + "px");
                    } else {
                        $("#menu").css('top', e.pageY + "px");
                    }
                    setTimeout(function(){
                        $("#menu").show(300);
                    },400)
                    

                }

                
                //kiểm tra đang xếp hàng thì disable và ngược lại 2 menu s top và start
                if (powerXepHang_luoidangcho == 1)
                {
                    $("#playxephang").unbind("click");
                    $("#stopxephang").bind("click", function(e) {

                    })
                    $("#stopxephang").removeClass("ui-state-disabled");
                    $("#playxephang").addClass("ui-state-disabled");
                } else
                {
                    $("#stopxephang").unbind("click");
                    $("#playxephang").bind("click", function(e) {
                        // đoạn này dùng để reset các timer tránh tạo nhiều timer id gây lỗi
                        var id = window.setTimeout(function() {
                        }, 0);
                        while (id--) {
                            window.clearTimeout(id); // will do nothing if no timeout with id is present
                        }


                    })
                    $("#stopxephang").addClass("ui-state-disabled");
                    $("#playxephang").removeClass("ui-state-disabled");
                }
                //kiểm tra sẫn sàng hay chưa để hiển thị menu
                var SanSangGoiVaoKham = window.rowData_grdangcho["SanSangGoiVaoKham"];
                if (SanSangGoiVaoKham == 1)
                {
                    //alert('SanSangGoiVaoKham');
                    $("#chuasansang span.ui-icon").removeClass("ui-icon-closethick").addClass("ui-icon-help");
                    $("#chuasansang span.menu_text").html('Chưa sẵn sàng');
                }
                else
                {
                     // alert('chuaSanSangGoiVaoKham');

                    $("#chuasansang span.ui-icon ").removeClass("ui-icon-help").addClass("ui-icon-closethick");
                    $("#chuasansang span.menu_text").html('Đã sẵn sàng');
                }
                //

            },
            loadComplete: function(data) {
				  //if(loadlandau==0){
					//  alert();
						//timer_title_danhsach("start");

				 // }
				  //loadlandau++;
				  
				  if ($("#rowed3").jqGrid("getGridParam", "datatype") !== "local") {
					setTimeout(function () {						
						
						$("#rowed3")[0].triggerToolbar();
					}, 50);
				}else{
				  
				  
                var ids = $('#rowed3').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed3').getRowData(ids[i]);
                    var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";
                    //var ipClient=json.ip;
                    var soLK= rowData['SoPhieuKhamGoiLoa'];
                    var iD_LuotKham= rowData['ID_LuotKham'];
                   // var SoPhieuKhamGoiLoa= rowData['SoPhieuKhamGoiLoa'];






 var se = "<input class='fm-button'  type='button' style='padding: 0  0 !important; min-width:30px;'  value='"+soLK+"'  onclick=\"GoiLoa('" + soLK + "','" + ipClient  + "','" +  iD_LuotKham  +"');\" />";


    $("#rowed3").jqGrid('setRowData', ids[i], {action: se});




 var se2 = "<input class='fm-button'  type='button' style='padding: 0  0 !important; min-width:30px;'  value='"+soLK+"'  onclick=\"GoiLoa2('" + soLK + "','" + ipClient  + "','" +  iD_LuotKham  +"');\" />";


    $("#rowed3").jqGrid('setRowData', ids[i], {action2: se2});




                    if (rowData["IsDichVuCC"] == 1) {
                        $("#rowed3").setCell(ids[i], 'LoaiDoiTuongKham', '', {background: 'pink'});
                    }else
                    {
                        $("#rowed3").setCell(ids[i], 'LoaiDoiTuongKham', '', {background: '#FFFFFF'});
                    }










                    kiemtra_dk_tg_load_completed(rowData, ids[i], "ThoiGianVaoKham;ID_TrangThai;TenBenhNhan;SanSangGoiVaoKham;NotesStatus");
                    window.rowcount_luoidangcho = $("#rowed3").getGridParam("reccount");

                    if (rowData["NotesStatus"] == 1) {
                        var _class = "do";

                    } else if (rowData["NotesStatus"] == 2) {
                        var _class = "cam";

                    } else if (rowData["NotesStatus"] == 0) {
                        var _class = "xanh";

                    }
                    ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                    $("#rowed3").jqGrid('setRowData', ids[i], {GhiChu: ghichu});





                }
				}

            },
            caption: " <div  class='demgio_container'><span class='demgio'>( Tự động reload sau " + reload_luoi_danhsach + " giây)</span></div><?php echo("<div style='float:right'><div class='hinhvuong sansanggoi'></div><label class='diengiai'>Sẵn sàng gọi</label> <div class='hinhvuong chuasansang'></div><label class='diengiai'>Chưa sẵn sàng</label><div class='hinhvuong quathoigian_max'></div><label class='diengiai'>Đã chờ quá 15 phút</label><div class='hinhvuong quathoigian_min'></div><label class='diengiai'>Đã chờ quá 10 phút</label></div>");?>"
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }


    function GoiLoa(SoLk,ipClient,iD_LuotKham)
    {
        var chuoiGoi='&SoLk='+SoLk+'&n_nhomgoi=3'+'&ipClient='+ipClient+'&oper=default';
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


    function create_grid2()
    {
    $("#rowed4").jqGrid({
        datastr: {},
        datatype: "jsonstring",
            colNames: ['LuotKham', '<?php get_text1("maBN") ?>', '<?php get_text1("hoten") ?>', '<?php get_text1("tuoi") ?>',
                '<?php get_text1("gioitinh") ?>', '<?php get_text("loaikham") ?>', '<?php get_text("gioden") ?>', '<?php get_text("giohenKQ") ?>',
                '<?php get_text("BsKham") ?>', 'Ghi chú', 'HoanTatHoSo', 'Trạng thái', 

                'Sẵn sàng', 'NotesStatus', 'ID_BenhNhan','Đối tượng','','Tầng','','Gọi','Tùy biến'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: true, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: true, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: true, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: true, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham', formatter: kiemtra_dk_tg, index: 'ThoiGianVaoKham', search: true, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text",
                    editoptions: {
                        dataInit: function(element)
                        {
                            $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                        }
                    }
                },
                {name: 'NgayGioHenTraKQ',sorttype:"date",sortable: true,formatter:'date',formatoptions: {srcformat: 'd/m/Y H:i', newformat: 'H:i d/m/Y'}, index: 'NgayGioHenTraKQ', search: true, width: "2%", editable: true, align: 'center', hidden: false, edittype: "text", cellattr: tomaugiohen,
                },
                {name: 'Bslamsang', index: 'Bslamsang', sortable: true,sorttype:'text', search:true, stype:'text', width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GhiChu', index: 'GhiChu', width: "1%", search: true, editable: false, align: 'left', hidden: false},
                {name: 'HoanTatHoSo', index: 'HoanTatHoSo', search: true, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'TrangThaiHoSo', index: 'TrangThaiHoSo', search: true, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'SanSangGoiVaoKham', index: 'SanSangGoiVaoKham', search: true, width: "1%", editable: false, align: 'left', hidden: false, edittype: "checkbox", formatter: "checkbox", editoptions: {value: "1:0"}},
                {name: 'NotesStatus', index: 'NotesStatus', search: true, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_BenhNhan', index: 'ID_BenhNhan', search: true, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'LoaiDoiTuongKham', index: 'LoaiDoiTuongKham', search: true, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'IsDichVuCC', index: 'IsDichVuCC', width: "0%", hidden: true},
                {name: 'ID_Tang', index: 'ID_Tang', width: "1%", search: true, editable: false, hidden: false},
                {name: 'SoPhieuKhamGoiLoa', index: 'SoPhieuKhamGoiLoa', width: "0%", hidden: true},
                {name: 'action',sortable:false, index: 'action', width: "1%", align: 'center', edittype: "button", hidden: false, },
                {name: 'action2',sortable:false, index: 'action2', width: "1%", align: 'center', edittype: "button", hidden: false, },
            ],
			hidegrid: false,
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            sortname: 'NgayGioHenTraKQ',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            onSelectRow: function(id) {


            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

                var grid = jQuery('#rowed4');
                var colModel = grid.getGridParam('colModel');

                var colName = colModel[iCol].name;

                var rowData = jQuery('#rowed4').getRowData(rowid);
                window.rowData_grdangkham = rowData;
                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                if ($.trim(rowData[colName]) != "") {
                    window.rowid_dangkham = rowid;
                    window.from = colModel[iCol].name;
                    if ($("#menu2").width() + e.pageX > $(document).width()) {
                        $("#menu2").css('left', e.pageX - $("#menu2").width() + "px");
                    } else {
                        $("#menu2").css('left', e.pageX + "px");
                    }
                    if ($("#menu2").height() + 30 + e.pageY > $(document).height()) {
                        $("#menu2").css('top', e.pageY - $("#menu2").height() + "px");
                    } else {
                        $("#menu2").css('top', e.pageY + "px");
                    }
                    setTimeout(function(){
                       $("#menu2").show(350); 
                   },400)
                    

                }

                

				

                //kiểm tra hoantathoso chua để hêển thị menu
                var hoanTatHoSo = window.rowData_grdangkham["HoanTatHoSo"];
                if (hoanTatHoSo == 1)
                {
                    // alert(hoanTatHoSo);
                    $("#xonghoso span.ui-icon").removeClass("ui-icon-check").addClass("ui-icon-help");
                    $("#xonghoso span.menu_text").html('Chưa xong hồ sơ');
                }
                else
                {
                    //alert(hoanTatHoSo);


                    $("#xonghoso span.ui-icon ").removeClass("ui-icon-help").addClass("ui-icon-check");
                    $("#xonghoso span.menu_text").html('Đã xong hồ sơ');
                }

                var vangmat = window.rowData_grdangkham["SanSangGoiVaoKham"];
                if (vangmat == 0)
                {
                    // alert(hoanTatHoSo);
                    $("#vangmat span.ui-icon").removeClass("ui-icon-closethick").addClass("ui-icon-check");
                    $("#vangmat span.menu_text").html('Có mặt');
                }
                else
                {

                    $("#vangmat span.ui-icon ").removeClass("ui-icon-check").addClass("ui-icon-closethick");
                    $("#vangmat span.menu_text").html('Vắng mặt');
                }



                //
			



            },
                     ondblClickRow: function(rowId) {
         var rowData = jQuery(this).getRowData(rowId);





                 var id_benhnhan = rowData['ID_BenhNhan'];

                 var idluotkham = rowData['ID_LuotKham'];


              parent.postMessage("benhan_luotkham;benh_an;"+idluotkham+";"+id_benhnhan, "*");

            },
            loadComplete: function(data) {


				if ($("#rowed4").jqGrid("getGridParam", "datatype") !== "local") {
					setTimeout(function () {						
						console.log($("#rowed4").jqGrid("getGridParam", "datatype"));
						$("#rowed4")[0].triggerToolbar();
					}, 50);
				}else{

                ids = $('#rowed4').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed4').getRowData(ids[i]);



                    var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";
                    //var ipClient=json.ip;
                    var soLK= rowData['SoPhieuKhamGoiLoa'];
                     var iD_LuotKham= rowData['ID_LuotKham'];
                     var count=0;
                     


 se3 = "<input class='fm-button'  type='button' style='padding: 0  0 !important; min-width:30px;'  value='"+soLK+"' onclick=\"GoiLoa('" + soLK + "','" + ipClient  + "','"  +  iD_LuotKham +"');\" />";
                    $("#rowed4").jqGrid('setRowData', ids[i], {action: se3});

 se4 = "<input class='fm-button'  type='button' style='padding: 0  0 !important; min-width:30px;'  value='"+soLK+"' onclick=\"GoiLoa2('" + soLK + "','" + ipClient  + "','"  +  iD_LuotKham +"');\" />";
                    $("#rowed4").jqGrid('setRowData', ids[i], {action2: se4});






					
				
				if(rowData['TrangThaiHoSo']=='Hoàn tất CLS'){
					$("#rowed4").setCell(ids[i], 'TrangThaiHoSo', '', {background: '#ff4040'});
					
				}
					
                    rowcount_luoidangkham = $("#rowed4").getGridParam("reccount");
                    if (rowData["NotesStatus"] == 1) {
                        var _class = "do";

                    } else if (rowData["NotesStatus"] == 2) {
                        var _class = "cam";

                    } else if (rowData["NotesStatus"] == 0) {
                        var _class = "xanh";

                    }
                    ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                    $("#rowed4").jqGrid('setRowData', ids[i], {GhiChu: ghichu});

//tô màu
                    if (rowData["HoanTatHoSo"] == 1&&rowData["SanSangGoiVaoKham"] == 1) {
                        $("#rowed4").setCell(ids[i], 'TenBenhNhan', '', {background: '#7be75a'});
                    }

                    if (rowData["IsDichVuCC"] == 1) {
                        $("#rowed4").setCell(ids[i], 'LoaiDoiTuongKham', '', {background: 'pink'});
                    }else
                    {
                        $("#rowed4").setCell(ids[i], 'LoaiDoiTuongKham', '', {background: '#FFFFFF'});
                    }


                }
				}


            },
            caption: " <span class='demgio'>( Tự động reload sau " + reload_luoi_danhsach + " giây)</span>"

        });


        $("#rowed4").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: false, search: true, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});



;

    }
    function create_grid3()
    {
        $("#rowed5").jqGrid({
        datastr: {},
        datatype: "jsonstring",
            colNames: ['LuotKham', '<?php get_text1("maBN") ?>','<?php get_text1("hoten") ?>','<?php get_text1("tuoi") ?>',
                '<?php get_text("phanloai") ?>','B.sỹ',
    'Ghi Chú', 'NotesStatus', 'ID_BenhNhan','TrảKQ','Đối tượng','','Tầng'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: true, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: true, width: "4%", editable: false, align: 'left', hidden: false},

                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: true, width: "20%", editable: false, align: 'left', hidden: false},

                {name: 'Bslamsang', index: 'Bslamsang', search: true, width: "10%", editable: false, align: 'left', hidden: false},

                //   {name: 'LoaiDoiTuongKham', index: 'tentuoigioi', search: false, width: "2%", editable: false, align: 'left', hidden: false }
                {name: 'GhiChu', index: 'GhiChu', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'NotesStatus', index: 'NotesStatus', search: true, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_BenhNhan', index: 'ID_BenhNhan', search: true, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'DaTraKQ',edittype: "checkbox", formatter: "checkbox", editoptions:  {value: "1:0"}, index: 'DaTraKQ',search: false, width: "3%", editable: false, align: 'left', hidden: false},
                {name: 'LoaiDoiTuongKham', index: 'LoaiDoiTuongKham', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'IsDichVuCC', index: 'IsDichVuCC', search: true, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_Tang', index: 'ID_Tang', width: "5%", search: true, editable: false, hidden: false},
                
            ],
                loadonce: true,
                hidegrid: false,
                scroll: false,
                modal: true,
                shrinkToFit: true,
                cmTemplate: {sortable: false},
                rowNum: 10000000,
                rowList: [],
                pager: '#prowed3',
                sortname: 'ThoiGianVaoKham',
                height: 100,
                width: 100,
                viewrecords: true,
                ignoreCase: true,
                sortorder: "desc",
            onSelectRow: function(id) {


            },
 			ondblClickRow: function(rowId) {
 var rowData = jQuery(this).getRowData(rowId);

                 var id_benhnhan = rowData['ID_BenhNhan'];

                 var idluotkham = rowData['ID_LuotKham'];

              parent.postMessage("benhan_luotkham;benh_an;"+idluotkham+";"+id_benhnhan, "*");



            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

                var grid = jQuery('#rowed5');
                var colModel = grid.getGridParam('colModel');

                var colName = colModel[iCol].name;

                var rowData = jQuery('#rowed5').getRowData(rowid);

                window.rowData_grdKetthuc = rowData;
                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                if ($.trim(rowData[colName]) != "") {

                    window.from = colModel[iCol].name;
                    if ($("#menu3").width() + e.pageX > $(document).width()) {
                        $("#menu3").css('left', e.pageX - $("#menu3").width() + "px");
                    } else {
                        $("#menu3").css('left', e.pageX + "px");
                    }
                    if ($("#menu3").height() + 30 + e.pageY > $(document).height()) {
                        $("#menu3").css('top', e.pageY - $("#menu3").height() + "px");
                    } else {
                        $("#menu3").css('top', e.pageY + "px");
                    }
                    setTimeout(function(){
                        $("#menu3").show(350);
                    },400)
                    

                }






  //kiểm tra da tra KQ?
                var DaTKQ = window.rowData_grdKetthuc["DaTraKQ"];
                if (DaTKQ == 0)
                {
                    $("#datraKQ span.ui-icon ").removeClass("ui-icon-help").addClass("ui-icon-circle-check");

                    $("#datraKQ span.menu_text").html('Đã trả KQ');
                }
                else
                {
                     // alert(DaTKQ);
                     $("#datraKQ span.ui-icon").removeClass("ui-icon-circle-check").addClass("ui-icon-help");

                     $("#datraKQ span.menu_text").html('Chưa trả KQ');
                }
                //







                







            },
            loadComplete: function(data) {
				
				 if ($("#rowed5").jqGrid("getGridParam", "datatype") !== "local") {
					setTimeout(function () {
						$("#rowed5")[0].triggerToolbar();
					}, 50);
				}else{
				
                window.rowcount_luoiketthuc = $("#rowed5").getGridParam("reccount");
                ids = $('#rowed5').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed5').getRowData(ids[i]);


                    if (rowData["NotesStatus"] == 1) {
                        var _class = "do";

                    } else if (rowData["NotesStatus"] == 2) {
                        var _class = "cam";

                    } else if (rowData["NotesStatus"] == 0) {
                        var _class = "xanh";

                    }
                    ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                    $("#rowed5").jqGrid('setRowData', ids[i], {GhiChu: ghichu});



                       if (rowData["IsDichVuCC"] == 1) {
                        $("#rowed5").setCell(ids[i], 'LoaiDoiTuongKham', '', {background: 'pink'});
                    }else
                    {
                        $("#rowed5").setCell(ids[i], 'LoaiDoiTuongKham', '', {background: '#FFFFFF'});
                    }

                }

				}

            },
            caption: " <span class='demgio'>( Tự động reload sau " + reload_luoi_danhsach + " giây)</span>"
        });

        $("#rowed5").jqGrid('navGrid', "#prowed5", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
$("#rowed5").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
    }

    function kiemtra_dk_tg_load_completed(cellvalue, rowId, mangthamso) {
        mangthamso = mangthamso.split(";");
        var now1 = new Date().toTimeString();
        var dauvaotam = cellvalue[mangthamso[0]].split(":");
        var dauvao = Date.parse('<?php echo date("Y-m-d") ?>,' + cellvalue[mangthamso[0]]);
        var now = new Date();
        var diffMs = now - dauvao;
        var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000);
        var diffHrs = Math.round((diffMs % 86400000) / 3600000); // hours

        diffMins = diffMins + diffHrs * 60;
        //console.log(dauvao + "  " + diffHrs + "\n");
        //console.log(mangthamso[2]);

        if (diffMins >= 15) {
            $("#rowed3").setCell(rowId, mangthamso[0], '', {background: '#FF4040'});
            //return  '<span style="background:red">' + cellvalue + '*' + diffMins + "</span>";
            //return  '<span style="background:yellow">' + cellvalue+ "</span>";
        } else {

            if (diffMins >= 10) {
                $("#rowed3").setCell(rowId, mangthamso[0], '', {background: 'yellow'});
                //    return '<span style="background:yellow">' + cellvalue + '**' + diffMins + "</span>";
            } else {
                // $("#rowed3").setCell(rowId , mangthamso[0], '', { background: '#FFF'});
            }
        }

        // alert (cellvalue[mangthamso[3]]);

        if (cellvalue[mangthamso[1]] == 'DangCho' && cellvalue[mangthamso[3]] == '1') {
            $("#rowed3").setCell(rowId, mangthamso[2], '', {background: '#7be75a'});
        } else {
            //$("#rowed3").setCell(rowId , 'TenBenhNhan', '', { background: '#fff'});
        }





    }
    function kiemtra_dk_tg_load_completed_grd2(cellvalue, rowId, mangthamso) {
        mangthamso = mangthamso.split(";");
        var dauvao = Date.parse('<?php echo date("Y-m-d") ?>,' + cellvalue[mangthamso[0]]);
        var now = new Date();
        var diffMs = now - dauvao;
        var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000);
        var diffHrs = Math.round((diffMs % 86400000) / 3600000); // hours

        diffMins = diffMins + diffHrs * 60;


        if (diffMins >= 15) {
            $("#rowed3").setCell(rowId, mangthamso[0], '', {background: 'red'});
            //return  '<span style="background:red">' + cellvalue + '*' + diffMins + "</span>";
            //return  '<span style="background:yellow">' + cellvalue+ "</span>";
        } else {

            if (diffMins >= 10) {
                $("#rowed3").setCell(rowId, mangthamso[0], '', {background: 'yellow'});
                //    return '<span style="background:yellow">' + cellvalue + '**' + diffMins + "</span>";
            } else {
                // $("#rowed3").setCell(rowId , mangthamso[0], '', { background: '#FFF'});
            }
        }

        // alert (cellvalue[mangthamso[3]]);

        if (cellvalue[mangthamso[1]] == 'DangCho' && cellvalue[mangthamso[3]] == '1') {
            $("#rowed3").setCell(rowId, mangthamso[2], '', {background: '#7be75a'});
        } else {
            //$("#rowed3").setCell(rowId , 'TenBenhNhan', '', { background: '#fff'});
        }





    }
    function kiemtra_dk_tg(cellvalue, options, rowObject) {




        var today = new Date();

        return cellvalue;
    }
    function kiemtra_dk_id_trangthai(cellvalue, options, rowObject) {


        return cellvalue;
    }
    function create_layout() {
        $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: "35%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                        , initClosed:    true
                , onresize_end: function() {
                    resize_control();

                }
                , onopen_end: function() {

                    resize_control();
                    //alert('c');
                }
                , onclose_end: function() {


                }

            }
            , center: {
                resizable: true
                        , size: "65%"

                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                  //  resize_control();

                }
                , onclose_end: function() {



                }
            }
        });
    }
    var reload_luoi_danhsach =<?php echo (get_system_config_("ThoiGianRefreshHangDoiLamSang")) ?>;


    function timer_danhsach(_value) {
        if (_value != "stop") {
            timer = setInterval(function() {
                if (window.congtac_xephang == true) {
                    $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
                    $('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
                    $('#rowed5').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
                     clearInterval(timer);
                }

            }, (reload_luoi_danhsach * 1000));

        } else {
            clearInterval(timer);

        }
    }

//vangmat
    $("#chuasansang").click(function(e) {

        var mabenhnhan = window.rowData_grdangcho["MaBenhNhan"];
        var sanSangGoiVaoKham = window.rowData_grdangcho["SanSangGoiVaoKham"];
        var iD_LuotKham = window.rowData_grdangcho["ID_LuotKham"];
        $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_chuasansang&mabenhnhan=' + mabenhnhan + '&id_luotkham=' + iD_LuotKham + '&sanSangGoiVaoKham=' + sanSangGoiVaoKham).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("sua_thanhcong") ?>");

                //$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
            }
            else {
                tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
            }
            taidulieu(window.duongdandata);

        });

    })



    $("#datraKQ").click(function(e) {

        var mabenhnhan = window.rowData_grdKetthuc["MaBenhNhan"];
        var datKQ = window.rowData_grdKetthuc["DaTraKQ"];
        var iD_LuotKham = window.rowData_grdKetthuc["ID_LuotKham"];
        $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_datraKQ&mabenhnhan=' + mabenhnhan + '&id_luotkham=' + iD_LuotKham + '&datraKQ=' + datKQ).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("sua_thanhcong") ?>");

                //$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
            }
            else {
                tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
            }
            taidulieu(window.duongdandata);

        });

    })


    $("#vangmat").click(function(e) {
//alert('dss');
        var sanSangGoiVaoKham = window.rowData_grdangkham["SanSangGoiVaoKham"];
        var iD_LuotKham = window.rowData_grdangkham["ID_LuotKham"];
        $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_chuasansang&id_luotkham=' + iD_LuotKham + '&sanSangGoiVaoKham=' + sanSangGoiVaoKham).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("sua_thanhcong") ?>");

            }
            else {
                tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
            }

        });
          taidulieu(window.duongdandata);

    })


    $("#huyxephang").bind("click", function(e) {
        var mabenhnhan = window.rowData_grdangcho["MaBenhNhan"];
        var iD_LuotKham = window.rowData_grdangcho["ID_LuotKham"];
        // $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_huyxephang&mabenhnhan='+mabenhnhan+'&id_luotkham='+iD_LuotKham)
        $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_huyxephang&mabenhnhan=' + mabenhnhan + '&id_luotkham=' + iD_LuotKham).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("sua_thanhcong") ?>");

            }
            else {
                tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
            }
             taidulieu(window.duongdandata);

        });
    })
    $("#xonghoso").bind("click", function(e) {
        //alert();
        var iD_LuotKham = window.rowData_grdangkham["ID_LuotKham"];
        var hoanTatHoSo = window.rowData_grdangkham["HoanTatHoSo"];

        $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_hoanTatHoSo&id_luotkham=' + iD_LuotKham + '&hoanTatHoSo=' + hoanTatHoSo).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("sua_thanhcong") ?>");
              //  $("#rowed4").trigger("reloadGrid");
            }
            else {
                tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
            }

        });
            taidulieu_xonghoso(window.duongdandata);

    })
      $("#thongtinbenhnhan").click(function(e){
        idbenhnhan=rowData_grdangcho["ID_BenhNhan"];
        tenBenhNhan=rowData_grdangcho["TenBenhNhan"];

      //alert(idbenhnhan);
        parent.postMessage("editbenhnhan;"+idbenhnhan+";"+tenBenhNhan, "*");


    })
     $("#thongtinbenhnhanB").click(function(e){
        //alert(idbenhnhan);
        idbenhnhan=rowData_grdangkham["ID_BenhNhan"];
        tenBenhNhan=rowData_grdangkham["TenBenhNhan"];

     // alert(idbenhnhan);
        parent.postMessage("editbenhnhan;"+idbenhnhan+";"+tenBenhNhan, "*");

    })

    $("#thongtinbenhnhanC").click(function(e){
//alert('alert(idbenhnhan);');
       var idbenhnhan=rowData_grdKetthuc["ID_BenhNhan"];

        tenBenhNhan=rowData_grdKetthuc["TenBenhNhan"];


        parent.postMessage("editbenhnhan;"+idbenhnhan+";"+tenBenhNhan, "*");

    })
    $("#thongtinluotkham").click(function(e){
        tenBenhNhan=rowData_grdangcho["TenBenhNhan"];
       ID_LuotKham=rowData_grdangcho["ID_LuotKham"];
        parent.postMessage("editluotkham;"+ID_LuotKham+";"+tenBenhNhan, "*");

    })
     $("#thongtinluotkhamB").click(function(e){
        tenBenhNhan=rowData_grdangkham["TenBenhNhan"];
       ID_LuotKham=rowData_grdangkham["ID_LuotKham"];
        parent.postMessage("editluotkham;"+ID_LuotKham+";"+tenBenhNhan, "*");

    })
    $("#thongtinluotkhamC").click(function(e){
        tenBenhNhan=rowData_grdKetthuc["TenBenhNhan"];
       ID_LuotKham=rowData_grdKetthuc["ID_LuotKham"];
        parent.postMessage("editluotkham;"+ID_LuotKham+";"+tenBenhNhan, "*");

    })
     $("#thuochangmuckham").click(function(e){


     })
     $( "#xemtatca" ).click(function() {
		//	document.getElementById("thuocnhom").checked=false;
		//	document.getElementById("thuochangmuckham").checked=false;
			//$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_dangcho&id_tang='}).trigger('reloadGrid');

			timer_title_danhsach('stop');
            $("#com_thuocnhom").val('');
            $("#com_thuochmk").val('');
            document.getElementById("thuocnhom").checked=false;
            document.getElementById("thuochangmuckham").checked=false;
            window.duongdandata= 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xephang'
            taidulieu(window.duongdandata);

	});
     $("#medicalreport").click(function(e){
        idbenhnhan=rowData_grdangcho["ID_BenhNhan"];
        tenBenhNhan=rowData_grdangcho["TenBenhNhan"];

       parent.postMessage("open_idbenhnhan;medical_report;;"+idbenhnhan+";;","*");

    });
       $("#medicalreportB").click(function(e){
        idbenhnhan=rowData_grdangkham["ID_BenhNhan"];
        tenBenhNhan=rowData_grdangkham["TenBenhNhan"];

       parent.postMessage("open_idbenhnhan;medical_report;;"+idbenhnhan+";;","*");

    });
        $("#medicalreportC").click(function(e){
        idbenhnhan=rowData_grdKetthuc["ID_BenhNhan"];
        tenBenhNhan=rowData_grdKetthuc["TenBenhNhan"];

       parent.postMessage("open_idbenhnhan;medical_report;;"+idbenhnhan+";;","*");

    });

         $( "#capnhatGioTraKQ" ).click(function() {
          // alert('');

          $.post('pages.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
       elem=1 + Math.floor(Math.random() * 1000000000);
        width=90;
        height=90;
         ID_LuotKham=rowData_grdangkham["ID_LuotKham"];
         //alert(ID_LuotKham);
       var folder= data.split(';');
       var links="pages.php?module=canlamsang&view=hen_tra_ket_qua&id_form=754&id_loai=90&idluotkham="+ID_LuotKham;
      dialog_add_dm("",width,height,elem,links);
               })
    });
    function resize_control() {

        $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 11);


    $("#rowed3").setGridHeight($('.n_tren').height()-76);
    $("#rowed4").setGridHeight($('.n_duoi').height()-90);


        $("#rowed5").setGridWidth($(".right_col").width() - 11);
        $("#rowed5").setGridHeight($(".right_col").height() - 55);
    }

    function moghichu(id_benhnhan, hoten) {
        elem = 1 + Math.floor(Math.random() * 1000000000);
        dialog_main("Ghi chú của bệnh nhân: " + hoten, 100, 70, elem, 'pages.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan)
    }


    function tomaugiohen(rowId, tv, rawObject, cm, rdata) {
        //rowData,ids,i,grid

        var grid = $(this);
        var ids = rowId;
        var rowData = rdata;
        if ($.trim(rowData["NgayGioHenTraKQ"]) != "") {
            var d = new Date();
            var curr_hour = d.getHours();
            var curr_minute = (d.getMinutes() < 10 ? '0' : '') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
            var curr_time = curr_hour + ":" + curr_minute + " ";
            var dd = d.getDate();
            var mm = d.getMonth() + 1;//January is 0!`
            var yyyy = d.getFullYear();
            var thoigian = rowData["NgayGioHenTraKQ"].split(" ");
            var ngaygoc = thoigian[0].split("/");
            var giogoc = thoigian[1].split(":");
            var doituonggiogoc = Date.today().set({
                millisecond: 0,
                second: 0,
                minute: parseInt(giogoc[1]),
                hour: parseInt(giogoc[0]),
                day: parseInt(ngaygoc[0]),
                month: parseInt(ngaygoc[1]) - 1,
                year: parseInt(ngaygoc[2])
            });

            var thoigian_hientai = Date.today().set({
                millisecond: 0,
                second: 0,
                minute: parseInt(curr_minute),
                hour: parseInt(curr_hour),
                day: parseInt(dd),
                month: parseInt(mm) - 1,
                year: parseInt(yyyy)
            });



            if (((doituonggiogoc - thoigian_hientai) / 60000) <= 15) {
                return ' class="quathoigian_max"';//đỏ

            }
            else if (((doituonggiogoc - thoigian_hientai) / 60000) <= 30) {


                return ' class="quathoigian_min"';//vàng


            }
        }
    }



function create_layout2(){
    $('#luoitrai').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "35%"
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
                        , size: "65%"
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




function timer_title_danhsach(_value) {
	if(typeof(timer1)=="number"){
		clearInterval(timer1);
	}
    if (_value == "start") {
        console.log("start");
        var bodem = 0;
        var tam = reload_luoi_danhsach;
        timer1 = setInterval(function() {

            $('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" BN chờ khám " + window.rowcount_luoidangcho + " .  (Tải lại sau " + tam + " giây) ");
            $('#gbox_rowed4 .ui-jqgrid-title span.demgio').html(" BN đang khám " + window.rowcount_luoidangkham + " .  (Tải lại sau " + tam + " giây)");
            $('#gbox_rowed5 .ui-jqgrid-title span.demgio').html(" BN kết thúc khám " + window.rowcount_luoiketthuc + " .  (Tải lại sau " + tam + " giây)");


                bodem += 1;
                tam--;
                if (reload_luoi_danhsach == bodem) {
                                bodem = 0;
                        loading=true;
                        taidulieu2(window.duongdandata);

                        	/*$('#rowed3')[0].p.search = false;
							$.extend($('#rowed3')[0].p.postData,{filters:""});
							$('#rowed3').trigger("reloadGrid",[{page:1,current:true}]);
							$('#rowed4')[0].p.search = false;
							$.extend($('#rowed4')[0].p.postData,{filters:""});
							$('#rowed4').trigger("reloadGrid",[{page:1,current:true}]);
							$('#rowed5')[0].p.search = false;
							$.extend($('#rowed5')[0].p.postData,{filters:""});
							$('#rowed5').trigger("reloadGrid",[{page:1,current:true}]);*/

                    timer_title_danhsach("stop");
                }


            }, (1000));

    } else {
		//if(typeof(timer1)=="number"){
			//alert(typeof(timer1))
			clearInterval(timer1);
			console.log("stop");
			/*var highestTimeoutId = setTimeout(";");
                for (var i = 0 ; i < highestTimeoutId ; i++) {
                    clearTimeout(i);
				}*/
		//}
        $('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Đang tải dữ liệu");
        $('#gbox_rowed4 .ui-jqgrid-title span.demgio').html(" Đang tải dữ liệu");
        $('#gbox_rowed5 .ui-jqgrid-title span.demgio').html(" Đang tải dữ liệu");
    }

}

    function taidulieu2(duongdan){
		/*var highestTimeoutId = setTimeout(";");
                for (var i = 0 ; i < highestTimeoutId ; i++) {
                    clearTimeout(i);
                }*/
				
					var socket = io.connect('<?=$_SESSION["com"]["IPServerNode"]?>:3000');
						
					if(!socket.connected){
					socket.emit('all', '');			
					socket.on('news', function (output) {
					console.log(output)
					socket.close();
					output=output.split('||');
					$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed5').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);
					setTimeout(function(){						
						timer_title_danhsach("start");
						loading=false;
						demclick=0;
					},300)
				})
								}
    /*$.ajax({
        type: 'POST',
        async : true,
        url: duongdan,
        success: function(output, status, xhr) {

          output=output.split('||');
		  
		  
		  
		  
            $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0],search:true}).trigger("reloadGrid",[{page:1}]);
            $('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1],search:true}).trigger("reloadGrid",[{page:1}]);
            $('#rowed5').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2],search:true}).trigger("reloadGrid",[{page:1}]);
			setTimeout(function(){
                //setTimeout(function(){$("#rowed4")[0].triggerToolbar();$("#rowed3")[0].triggerToolbar();},100)
				timer_title_danhsach("start");
                loading=false;
                demclick=0;
                },300)

        },

        });*/
    }



    function taidulieu(duongdan){

// đưa dữ liệu lọc về trống

		                   $('#rowed3')[0].p.search = false;
							$.extend($('#rowed3')[0].p.postData,{filters:""});
							$('#rowed3').trigger("reloadGrid",[{page:1,current:true}]);
							$('#rowed4')[0].p.search = false;
							$.extend($('#rowed4')[0].p.postData,{filters:""});
							$('#rowed4').trigger("reloadGrid",[{page:1,current:true}]);
							$('#rowed5')[0].p.search = false;
							$.extend($('#rowed5')[0].p.postData,{filters:""});
							$('#rowed5').trigger("reloadGrid",[{page:1,current:true}]);
							
						var socket = io.connect('<?=$_SESSION["com"]["IPServerNode"]?>:3000');
				if(!socket.connected){
					
					socket.emit('all', '');				
				
					socket.on('news', function (output) {
					//console.log(output)
					socket.close();
					output=output.split('||');
					$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);
					$('#rowed5').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);
					timer_title_danhsach("start");
				})
								}

 //đưa dữ liệu lọc về trống
/*    $.ajax({
            type: 'POST',
            async : true,
                url: duongdan,

            success: function(output, status, xhr) {
			  
               output=output.split('||');
                $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
                $('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);
                $('#rowed5').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);
				timer_title_danhsach("start");

            },

        });*/
    }
	
 function taidulieu_xonghoso(duongdan){

// đưa dữ liệu lọc về trống

		                   $('#rowed3')[0].p.search = false;
							$.extend($('#rowed3')[0].p.postData,{filters:""});
							$('#rowed3').trigger("reloadGrid",[{page:1,current:true}]);
							$('#rowed4')[0].p.search = false;
							$.extend($('#rowed4')[0].p.postData,{filters:""});
							$('#rowed4').trigger("reloadGrid",[{page:1,current:true}]);
							$('#rowed5')[0].p.search = false;
							$.extend($('#rowed5')[0].p.postData,{filters:""});
							$('#rowed5').trigger("reloadGrid",[{page:1,current:true}]);
							
						var socket = io.connect('<?=$_SESSION["com"]["IPServerNode"]?>:3000');
				if(!socket.connected){	
					socket.emit('send', '');				
					socket.on('xonghoso', function (output) {
						//console.log(output)
						socket.close();
						output=output.split('||');
						$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
						$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);
						$('#rowed5').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);
						timer_title_danhsach("start");
					})
		}


    }	
	
function reload_grid(_value) {
	 bodem = 0;
     loading=true;
     taidulieu2(window.duongdandata);
     timer_title_danhsach("stop");
}
</script>