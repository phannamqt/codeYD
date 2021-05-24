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
        background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
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
  
    <div id="panel_main" >
        <div class="left_col ui-widget-content ui-layout-center">
            <div id='demo' style="margin-left:0px;margin-top:0px;;margin-botton:0px;display:inline-block; padding-top:0px;">
                    <label for="from_day" style="width:110px">Ngày kê đơn từ ngày</label>
					<input type="text"  value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>" style="width:109px" name="from_day" id='from_day'>
					<label for="to_day" style="width:50px"> Đến ngày</label>
					<input type="text"  value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>" style="width:109px" name="to_day" id='to_day'>
                    <button id="btn_tailai">Tải lại</button>
					
					<button type="button" id="btn_excel_doanhthu_thuoc">Xuất excel thuốc</button>
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
 
    jQuery(document).ready(function() {

        $("#btn_tailai").click(function(){
            tailai();  
        })
        $("#from_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
             showButtonPanel: true,
            dateFormat: $.cookie("ngayJqueryUi"),
			maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
            	 $("#to_day").datepicker("option", "minDate", selectedDate);
            },
            onSelect: function(dat, inst) {
            }
        });
        $("#to_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            showButtonPanel: true,
            gotoCurrent:true,
            dateFormat: $.cookie("ngayJqueryUi"),
            minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
                $("#from_day").datepicker("option", "maxDate", selectedDate);
            },
            onSelect: function(dat, inst) {
            }
        });

		$('#btn_excel_doanhthu_thuoc').click(function(){
			window.open("pages.php?module=report&view=<?=$modules?>&action=doanh_thu_thuoc&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
		})
         $.dateEntry.setDefaults({spinnerImage: ''});
		 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});

    $("#panel_main").css("height",$(window).height()+"px");
    $("#panel_main").fadeIn(1000);
    $(".left_col").css('height',$("#panel_main").height());
    $('#luoitrai').css('height',$(".left_col").height());
    openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
 
        var timer;
        var timer1;


            create_layout();
            create_layout2();
            create_grid();
            create_grid2();
            create_grid3();
            resize_control();
            tailai(); 
 
        // window.duongdandata='pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xephang';
        //taidulieu(window.duongdandata);


      search_mutilgrid("#rowed3,#rowed4,#rowed5");

 
           phanquyen();
          // $( "#xemtatca" ).click();
           $(window).resize(function() {

    $("#panel_main").css("height",$(window).height()+"px");
    $("#panel_main").fadeIn(1000);
    $(".left_col").css('height',$("#panel_main").height());
    $('#luoitrai').css('height',$(".left_col").height());
	

})
})//end ready

 
function numFormat( cellvalue, options, rowObject ){
        return cellvalue.replace(",",".");
}

function create_grid() {
        window.kiemtrasearch = true;
        $("#rowed3").jqGrid({
            datastr:{},
        	datatype: "jsonstring",	
            colNames: ['ID_DonThuoc','ID_BenhNhan', 'ID','Họ lót', 'Tên',
            'Tuổi', 'Giới',
        'Địa chỉ','BS kê đơn','Ngày giờ kê đơn', 'Tiền đơn thuốc', 'Thực trả', 'Xuất', 'Ghi chú', 'Bệnh án','Ngày TT','','Xuất bởi','','Giờ xuất'
		,'Id_phieuxuat','toatam','','Phân loại','isdvcc','','Gọi loa','TBH','Gọixx','Tùy biếnxx'
		],
            colModel: [
                {name: 'ID_DonThuoc', index: 'ID_DonThuoc', width: "0%", editable: false, align: 'left', hidden: true},
				{name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "4%", editable: false, align: 'left', hidden: false,sorttype:'integer'},
                {name: 'HoBenhNhan',  index: 'HoBenhNhan', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'TenBenhNhan',  index: 'TenBenhNhan', search: true, width: "3%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: true, width: "2%", editable: false, align: 'right', hidden: false,sorttype:'integer'},
                {name: 'GioiTinh', index: 'GioiTinh', search: true, width: "3%", editable: false, align: 'center', hidden: false},
                {name: 'DiaChi', index: 'DiaChi', search: true, width: "5%", editable: false, align: 'left', hidden: true},
                {name: 'BSKeDon', index: 'BSKeDon', search: true, width: "5%", editable: false, align: 'left', hidden: false},
                {name: 'NgayKeDon', index: 'NgayKeDon', search: false, width: "8%", editable: false, align: 'center', hidden: false,sorttype:'date'},
                {name: 'TongTienTD',formatter:numFormat, width: "3%",sortable: true, index: 'TongTienTD', search: true,  editable: false, align: 'right', hidden: false},
                {name: 'TongTienTT', formatter:numFormat,width: "4%",sortable: true, index: 'TongTienTT', search: true,  editable: false, align: 'right', hidden: false},
                {name: 'TThai', index: 'TThai',search:true, width:"5%",hidden:true},
                {name: 'GhiChu', index: 'GhiChu', search: true, width: "3%", editable: false, align: 'center', hidden: true},
                {name: 'HoSo', index: 'HoSo', search: true, width: "3%", editable: false, align: 'center', hidden: true},
				{name: 'NgayGioInBill', index: 'NgayGioInBill', search: false, width: "7%", editable: false, align: 'left', hidden: false,},

                {name: 'TrangThaiDonThuoc', index: 'TrangThaiDonThuoc', search: false, hidden: true,},
                {name: 'nxuat',  index: 'nxuat', search: true, width: "7%", editable: false, align: 'center', hidden: true},
                {name: 'IsLock',  index: 'IsLock', search: true, width: "0%", editable: false, align: 'center', hidden: true},
                {name: 'GioXuat',  index: 'GioXuat', search: true, width: "7%", editable: false, align: 'center', hidden: true},
                {name: 'ID_XuatKho',  index: 'ID_XuatKho', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'toatam',  index: 'toatam', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'trangthailuotkham',  index: 'trangthailuotkham', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'phanloai',  index: 'phanloai', search: true, width: "7%", editable: false, align: 'center', hidden: true},
                {name: 'IsDichVuCC',  index: 'IsDichVuCC',  hidden: true},
				 {name: 'SoPhieuKhamGoiLoa', index: 'SoPhieuKhamGoiLoa', width: "0%", hidden: true},
				  {name: 'GoiLoa', index: 'GoiLoa', width: "6%", hidden: false, search: false},
				{name: 'MaYTe', index: 'MaYTe', width: "0%", hidden: true},
                {name: 'action',sortable:false, index: 'action', width: "8%", align: 'center', edittype: "button", hidden: true, },
                {name: 'action2',sortable:false, index: 'action2', width: "8%", align: 'center', edittype: "button", hidden: true, },
            ],


            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            onSelectRow: function(id) {
                var rowData = jQuery('#rowed3').getRowData(id);
                setTimeout(function(){
					$.ajax({
                    type: 'POST',
                    async : false,
                    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitiet_donthuoc&id_donthuoc='+rowData['ID_DonThuoc'],
                    success: function(data, status, xhr) {	
                        $('#rowed5').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:data  }).trigger('reloadGrid', [{ page: 1}]);	
                        //$("#rowed3").jqGrid('setCaption', 'Danh sách toa thuốc chưa xuất từ ngày '+ d+ ' đến ngày '+ td);	
                    },
                    });
					
				},200)
            },
           ondblClickRow: function(rowId) {
				var rowData = jQuery('#rowed3').getRowData(rowId);				
				dialog_main("Chi tiết đơn thuốc | IP máy đang sử dụng <?=$_SERVER['REMOTE_ADDR']?>", 100, 100, 567433265743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=chitiet&type=test&id_form=22&ID_DonThuoc="+rowData['ID_DonThuoc']+"&id_benhnhan="+rowData['ID_BenhNhan']+"&id_xuatkho="+rowData['ID_XuatKho']+"&toatam="+rowData['toatam']+"&soLK="+rowData['SoPhieuKhamGoiLoa']);
				console.log("IP máy đang sử dụng <?=$_SERVER['REMOTE_ADDR']?>");

			},
            onselect: function(rowId, rowIndex, columnIndex) {

            },
            onRightClickRow: function(rowid, iRow, iCol, e) {
				$(document).bind("contextmenu", function(e) {
						return false;
					});
				var rowData = jQuery('#rowed3').getRowData(rowid);			
				if($('input:radio[name="action"]:checked').val() == 2){
					$('.xuatthuoctoatam').show();
					if(rowData['toatam']==1){
						$('.huythuoctoatam').show();						
					}else{						
						$('.huythuoctoatam').hide();
					}					
					if ($("#menu").width() + e.pageX > $(document).width()) {
						$("#menu").css('left', e.pageX - $("#menu").width() + "px");
					} else {
						$("#menu").css('left', e.pageX + "px");
					}
					if ($("#menu").height() + e.pageY > $(document).height()) {
						$("#menu").css('top', e.pageY - $("#menu").height() + "px");
					} else {
						$("#menu").css('top', e.pageY + "px");
					}
					window.rowed3_right=rowid;
					$("#menu").show(100);


				}
				if($('input:radio[name="action"]:checked').val() == 5){
					if(rowData['toatam']==1){
						$('.huythuoctoatam').show();	
						$('.xuatthuoctoatam').hide();	
						if ($("#menu").width() + e.pageX > $(document).width()) {
							$("#menu").css('left', e.pageX - $("#menu").width() + "px");
						} else {
							$("#menu").css('left', e.pageX + "px");
						}
						if ($("#menu").height() + e.pageY > $(document).height()) {
							$("#menu").css('top', e.pageY - $("#menu").height() + "px");
						} else {
							$("#menu").css('top', e.pageY + "px");
						}
						window.rowed3_right=rowid;
						$("#menu").show(100);				
					}else {		
						if(rowData['trangthailuotkham']=='KetThucKham'){
							$('.xuatthuoctoatam').hide();
						}else{
							$('.huythuoctoatam').hide();	
							$('.xuatthuoctoatam').show();
							if ($("#menu").width() + e.pageX > $(document).width()) {
								$("#menu").css('left', e.pageX - $("#menu").width() + "px");
							} else {
								$("#menu").css('left', e.pageX + "px");
							}
							if ($("#menu").height() + e.pageY > $(document).height()) {
								$("#menu").css('top', e.pageY - $("#menu").height() + "px");
							} else {
								$("#menu").css('top', e.pageY + "px");
							}
							window.rowed3_right=rowid;
							$("#menu").show(100);
							
						}
						
					}
 
				}
             },
            loadComplete: function(data) {
				
                var gridDOM = this; 
                if ($(this).jqGrid('getGridParam', 'datatype') === 'json') {

                setTimeout(function () {							
                gridDOM.triggerToolbar();
                }, 100);
                }else{
                var ids = $('#rowed3').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {

                var rowData = jQuery('#rowed3').getRowData(ids[i]);

                var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";
 
                 
                var TrangThaiDonThuoc=  rowData["TrangThaiDonThuoc"];
                switch(TrangThaiDonThuoc) {
                case 'FullNormal':          $("#rowed3").setCell(ids[i], 'TThai','', {background: '#d9f970'});
                break;
                case 'NotFull':
                $("#rowed3").setCell(ids[i], 'TThai','', {background: 'yellow'});
                break;
                case 'Cancel':
                $("#rowed3").setCell(ids[i], 'TThai','', {background: 'red'});
                break;
                default:

                } 
                window.rowcount_luoichuathanhtoan = $("#rowed3").getGridParam("reccount");

                if (rowData["IsDichVuCC"] == 1) {
                    $("#rowed3").setCell(ids[i], 'phanloai', '', {background: 'pink'});
                }else
                {
                    $("#rowed3").setCell(ids[i], 'phanloai', '', {background: '#FFFFFF'});
                }

                if (rowData["NotesStatus"] == 1) {
                    var _class = "do";

                } else if (rowData["NotesStatus"] == 2) {
                 var _class = "cam";

                } else if (rowData["NotesStatus"] == 0) {
                    var _class = "xanh";

                }
                ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                $("#rowed3").jqGrid('setRowData', ids[i], {GhiChu: ghichu});

                HoSo = "<input class='custom_button ' style='height:22px;width:50px;' type='button' value='Xem BA' onclick=\"mohoso('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                $("#rowed3").jqGrid('setRowData', ids[i], {HoSo: HoSo});
				
				GoiLoa = "<button class='custom_button ' style='height:22px;' onclick=\"XepHangSendSocket('<?=$_SERVER['SERVER_NAME']?>','0000','" + rowData["MaYTe"] + "','" +ids[i]+ "','0','');\" >Gọi loa</button>";
				$("#rowed3").jqGrid('setRowData', ids[i], {GoiLoa: GoiLoa});
 
                }
				var caption= 'Danh sách toa thuốc('+ jQuery("#rowed3").jqGrid('getGridParam', 'records')+')'+' [ <span class="demgio"> Tự động reload sau ' + reload_luoi_danhsach + ' giây</span> ]';
                jQuery("#rowed3").jqGrid('setCaption', caption);
					}
            },caption: "Danh sách đơn thuốc chưa xuất"

        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }
 
    function create_grid2(){
        window.kiemtrasearch = true;
        $("#rowed4").jqGrid({
            datastr:{},
      	    datatype: "jsonstring",	
            colNames: ['ID_DonThuoc','ID_BenhNhan', 'ID','Họ lót', 'Tên',
        'Tuổi', 'Giới',
        'Địa chỉ','BS kê đơn','Ngày giờ kê đơn', 'Tiền đơn thuốc', 'Thực trả', 'Xuất', 'Ghi chú', 'Bệnh án','Ngày TT','','Người xuất','','Giờ xuất','Id_phieuxuat','toatam','','Phân loại','','','Gọi loa','BH','Gọi loax','Tùy biếnx'],
            colModel: [
                {name: 'ID_DonThuoc', index: 'ID_DonThuoc', width: "0%", editable: false, align: 'left', hidden: true},
				{name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "4%", editable: false, align: 'left', hidden: false,sorttype:'integer'},
                {name: 'HoBenhNhan',  index: 'HoBenhNhan', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'TenBenhNhan',  index: 'TenBenhNhan', search: true, width: "3%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: true, width: "2%", editable: false, align: 'right', hidden: false,sorttype:'integer'},
                {name: 'GioiTinh', index: 'GioiTinh', search: true, width: "3%", editable: false, align: 'center', hidden: false},
                {name: 'DiaChi', index: 'DiaChi', search: true, width: "5%", editable: false, align: 'left', hidden: true},
                {name: 'BSKeDon', index: 'BSKeDon', search: true, width: "5%", editable: false, align: 'left', hidden: false},
                {name: 'NgayKeDon', index: 'NgayKeDon', search: false, width: "8%", editable: false, align: 'center', hidden: false,sorttype:'date'},
                {name: 'TongTienTD',formatter:numFormat, width: "3%",sortable: true, index: 'TongTienTD', search: true,  editable: false, align: 'right', hidden: false},
                {name: 'TongTienTT', formatter:numFormat,width: "4%",sortable: true, index: 'TongTienTT', search: true,  editable: false, align: 'right', hidden: false},
                {name: 'TThai', index: 'TThai',search:true, width:"5%",hidden:true},
                {name: 'GhiChu', index: 'GhiChu', search: true, width: "3%", editable: false, align: 'center', hidden: true},
                {name: 'HoSo', index: 'HoSo', search: true, width: "3%", editable: false, align: 'center', hidden: true},
				{name: 'NgayGioInBill', index: 'NgayGioInBill', search: false, width: "7%", editable: false, align: 'left', hidden: false,},
                {name: 'TrangThaiDonThuoc', index: 'TrangThaiDonThuoc', search: false, hidden: true,},
                {name: 'nxuat',  index: 'nxuat', search: true, width: "7%", editable: false, align: 'center', hidden: false},
                {name: 'IsLock',  index: 'IsLock', search: true, width: "0%", editable: false, align: 'center', hidden: true},
                {name: 'GioXuat',  index: 'GioXuat', search: true, width: "7%", editable: false, align: 'center', hidden: false},
                {name: 'ID_XuatKho',  index: 'ID_XuatKho', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'toatam',  index: 'toatam', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'trangthailuotkham',  index: 'trangthailuotkham', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'phanloai',  index: 'phanloai', search: true, width: "7%", editable: false, align: 'center', hidden: true},
				{name: 'tenkho',  index: 'tenkho', search: true, width: "7%", editable: false, align: 'center', hidden: true},
				{name: 'SoPhieuKhamGoiLoa', index: 'SoPhieuKhamGoiLoa', width: "0%", hidden: true},
				 {name: 'GoiLoa', index: 'GoiLoa', width: "8%", hidden: false, search: false},
				{name: 'MaYTe', index: 'MaYTe', width: "0%", hidden: true},
                {name: 'action',sortable:false, index: 'action', width: "8%", align: 'center', edittype: "button", hidden: true, },
                {name: 'action2',sortable:false, index: 'action2', width: "8%", align: 'center', edittype: "button", hidden: true, },
            ],


            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			grouping: false,   
			groupingView: {
				groupField: ['tenkho'],
		   		groupSummary: [false],
				groupColumnShow: [false],
				groupText: ['<b >{0}-{1}</b>'],
				groupCollapse: false,
				showSummaryOnHide: false,
			},
			
            onSelectRow: function(id) {
                var rowData = jQuery('#rowed4').getRowData(id);
                 setTimeout(function(){
					$.ajax({
                    type: 'POST',
                    async : false,
                    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitiet_donthuoc&id_donthuoc='+rowData['ID_DonThuoc'],
                    success: function(data, status, xhr) {	
                        $('#rowed5').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:data  }).trigger('reloadGrid', [{ page: 1}]);	
                        //$("#rowed3").jqGrid('setCaption', 'Danh sách toa thuốc chưa xuất từ ngày '+ d+ ' đến ngày '+ td);	
                    },
                    });
					
				},200)
            },
           ondblClickRow: function(rowId) {
				var rowData = jQuery('#rowed4').getRowData(rowId);				
				dialog_main("Bán lẻ theo đơn | IP máy đang sử dụng <?=$_SERVER['REMOTE_ADDR']?>", 100, 100, 567433265743657,
				 "pages.php?module=<?=$modules?>&view=<?=$view?>&action=chitiet&type=test&id_form=22&ID_DonThuoc="+rowData['ID_DonThuoc']+"&id_benhnhan="+rowData['ID_BenhNhan']+"&id_xuatkho="+rowData['ID_XuatKho']+"&toatam="+rowData['toatam']+"&soLK="+rowData['SoPhieuKhamGoiLoa']);
			},
            onselect: function(rowId, rowIndex, columnIndex) {

            },
            onRightClickRow: function(rowid, iRow, iCol, e) {
 
            },
            loadComplete: function(data) {
				
                var gridDOM = this; 
                if ($(this).jqGrid('getGridParam', 'datatype') === 'json') {

                setTimeout(function () {							
                    gridDOM.triggerToolbar();
                 }, 100);
                }else{
                    var ids = $('#rowed4').jqGrid('getDataIDs');
                    for (i = 0; i < ids.length; i++) {
                        var rowData = jQuery('#rowed4').getRowData(ids[i]); 
                        var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";
        
                        var TrangThaiDonThuoc=  rowData["TrangThaiDonThuoc"];
                        switch(TrangThaiDonThuoc) {
                        case 'FullNormal':
                        $("#rowed4").setCell(ids[i], 'TThai','', {background: '#d9f970'});
                        break;
                        case 'NotFull':
                        $("#rowed4").setCell(ids[i], 'TThai','', {background: 'yellow'});
                        break;
                        case 'Cancel':
                        $("#rowed4").setCell(ids[i], 'TThai','', {background: 'red'});
                        break;
                        default:

                    }

                window.rowcount_luoichuathanhtoan = $("#rowed4").getGridParam("reccount");

                if (rowData["NotesStatus"] == 1) {
                var _class = "do";

                } else if (rowData["NotesStatus"] == 2) {
                var _class = "cam";

                } else if (rowData["NotesStatus"] == 0) {
                var _class = "xanh";

                }
                ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                $("#rowed4").jqGrid('setRowData', ids[i], {GhiChu: ghichu});

                HoSo = "<input class='custom_button ' style='height:22px;width:50px;' type='button' value='Xem BA' onclick=\"mohoso('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                $("#rowed4").jqGrid('setRowData', ids[i], {HoSo: HoSo});
				
				GoiLoa = "<button class='custom_button ' style='height:22px;' onclick=\"XepHangSendSocket('<?=$_SERVER['SERVER_NAME']?>','0000','" + rowData["MaYTe"] + "','" +ids[i]+ "','0','');\" >Gọi loa</button>";
				$("#rowed4").jqGrid('setRowData', ids[i], {GoiLoa: GoiLoa});
 
                }
					}
            },caption: "Danh sách đơn thuốc đã xuất"

        });
        $("#rowed4").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed4").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
 
    }

    function create_grid3()
    {
        $("#rowed5").jqGrid({
        datastr: {},
        datatype: "jsonstring",
        colNames: ['Tên thuốc', 'Số lượng', 'Đơn giá', 'Thành tiền' ],
            colModel: [
             
                {name: 'TenGoc', index: 'TenGoc', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'SoThuocThucXuat', index: 'SoThuocThucXuat', search: false, width: "1%", editable: false, align: 'right', hidden: false},
                {name: 'Gia', index: 'Gia', search: false, width: "1%", editable: false, align: 'right', hidden: false, formatter:numFormat},
                {name: 'ThanhTien', index: 'ThanhTien', search: false, width: "1%", editable: false, align: 'right', hidden: false, formatter:numFormat},
                 
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
            footer: true,
            onSelectRow: function(id) {


            },
 			ondblClickRow: function(rowId) {
                var rowData = jQuery(this).getRowData(rowId);

                var id_benhnhan = rowData['ID_BenhNhan'];

                var idluotkham = rowData['ID_LuotKham'];

                parent.postMessage("benhan_luotkham;benh_an;"+idluotkham+";"+id_benhnhan, "*");
 
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {
  
            },
            loadComplete: function(data) {
				 

            },
            caption: " Chi tiết đơn thuốc <span class='chitiettoathuoc'></span>"
        });

        $("#rowed5").jqGrid('navGrid', "#prowed5", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
        $("#rowed5").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
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
                       // , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                        , initClosed:    false
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

  
 
    function resize_control() {

        $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 11);


    $("#rowed3").setGridHeight($('.n_tren').height()-76);
    $("#rowed4").setGridHeight($('.n_duoi').height()-90);


        $("#rowed5").setGridWidth($(".right_col").width() - 11);
        $("#rowed5").setGridHeight($(".right_col").height() - 55);
    }
  


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
    $.ajax({
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

        });
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
				/*			var socket = io.connect('192.168.1.200:3000');
						
								if(!socket.connected){
					socket.on('news', function (output) {
					
					socket.close();
					 output=output.split('||');
					   $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
							  $('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);
						   $('#rowed5').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);
						timer_title_danhsach("start");
				})
								}*/

 //đưa dữ liệu lọc về trống
    $.ajax({
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

        });
    }
	
	
	
function reload_grid(_value) {
	 bodem = 0;
     loading=true;
     taidulieu2(window.duongdandata);
     timer_title_danhsach("stop");
}



function tailai(){
	 
    var fd= $( '#from_day' ).datepicker( "getDate" );
    var d= $( '#from_day' ).val();
    var tfd= $( '#to_day' ).datepicker( "getDate" );
    var td= $( '#to_day' ).val();

    $.ajax({
    type: 'POST',
    async : false,
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toachuaxuat&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),
    success: function(data, status, xhr) {	
        $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:data  }).trigger('reloadGrid', [{ page: 1}]);	
        //$("#rowed3").jqGrid('setCaption', 'Danh sách toa thuốc chưa xuất từ ngày '+ d+ ' đến ngày '+ td);	
    },
    });

    $.ajax({
    type: 'POST',
    async : false,
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toadaxuat&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),
    success: function(data, status, xhr) {	
        $('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:data  }).trigger('reloadGrid', [{ page: 1}]);	
       // $("#rowed4").jqGrid('setCaption', 'Danh sách toa thuốc đã xuất từ ngày '+ d+ ' đến ngày '+ td);
    },
    });				
 
		}
</script>



