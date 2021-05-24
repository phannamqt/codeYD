<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
#rowed3 td,#rowed4 td,#rowed5 td,#rowed6 td{

	font-size:11px!important;	   
}
.grid1
{
	width:260px;
	display:inline-block;
	 margin-left:5px; 
	margin-top: 5px!important;
}
.right_col{
	background:#FFF;
}
.form_row{
	
	border: 1px solid #D4CCB0;
	border-radius:4px;
	width:100%;
	margin-top: 3px!important;
}#nhacc{
	margin-left: 4px;
}#no_dk,#n_tk,#t_tk,#no_ck{
	width: 100px;
	font-weight:bold;
	color:#03F;
} 
</style>

	<body>
	
	 <div id="main_content" >
	
		<div  class="ui-layout-center left_col" > 
		
					<table id="rowed3" ></table>	
					<table id="rowed4" ></table>					
		</div>
		<div class="ui-layout-east right_col " >   
			<table id="rowed5" ></table>	
						
		</div>
	</div> 
		<div class="form_row" style="height:35">
			<table width="100%" border="0">
			  <tr>
				<td width="10%" align="right">Nợ đầu kỳ:&nbsp;</td>
				<td align="left">&nbsp;<label id="no_dk" >cvdgf</label></td>
				<td width="10%" align="right">Nhập trong kỳ:&nbsp;</td>
				<td  align="left">&nbsp;<label id="n_tk"  >cvdgf</label></td>
				<td width="10%" align="right">Trả trong kỳ:&nbsp;</td>
				<td  align="left">&nbsp;<label id="t_tk">cvdgf</label></td>
				<td width="10%" align="right">Nợ cuối kỳ:&nbsp;</td>
				<td  align="left">&nbsp;<label id="no_ck" >cvdgf</label></td>
			  </tr>		 
			</table>
        </div> 	
	</body>
</html> 

<script type="text/javascript">	
	
jQuery(document).ready(function() {		
	
	$("#main_content").css('height',$(window).height()-$(".form_row").height());
	
	create_combobox('#nhacc', '#nhacc1', ".data_combo_nhacc", "#data_combo_nhacc", create_nhacungcap, 500, 400, 'Nhà cung cấp', 'data_nhacungcap',0);
	//openform_shortcutkey();	
		create_layout();
		//create_layout2();
		create_grid();
		create_grid2();
		create_grid1();
		resize_control();
		$('#xem').button();
		//var d=<?=$_GET['nodauki']?>;
		//$('#no_dk').text(formatMoney(d));
		//alert();
		$('#no_dk').text(formatMoney(<?=$_GET['nodauki']?>));
		$('#n_tk').text(formatMoney(<?=$_GET['nhaptrongky']?>));
		$('#t_tk').text(formatMoney(<?=$_GET['tratrongky']?>));
		$('#no_ck').text(formatMoney(<?=$_GET['nocuoiky']?>));
  // phanquyen()
})//end ready
$(window).resize(function() {
	
	$("#main_content").css('height',$(window).height()-$(".form_row").height());
	
	resize_control();
})
function formatMoney(num)
	 {
		var p = num.toFixed(2).split(".");
		return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
			return  num + (i && !(i % 3) ? "," : "") + acc;
		}, "");
	}
function create_grid() {

	$("#rowed3").jqGrid({
		url: "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_phieunhapkho&tu_ngay=<?=$_GET['from_day']?>&den_ngay=<?=$_GET['to_day']?>&Idnhacc="+<?=$_GET['Idnhacc']?>,
        datatype: "json",
		colNames: ['Mã Phiếu','Ngày duyệt', 'Người duyệt', 'Tiền T.Toán','T.Đã T.Toán', 'Tiền C.Lại', 'Ghi Chú', 'id_nhapkho'],
		colModel: [
		//{name: 'ID_Kham', index: 'ID_Kham', search: false, width: "8%", align: 'left', hidden: true},
		{name: 'MaPhieu', index: 'MaPhieu', search: false, width: "10%",  align: 'left', hidden: false},
		{name: 'NgayDuyet', index: 'NgayDuyet', search: true, width: "15%", align: 'right', hidden: false},
		{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "10%", align: 'left', hidden: false},
		{name: 'TThanhToan', index: 'TThanhToan', search: false, width: "15%",  align:'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
		{name: 'TDhanhToan', index: 'TDhanhToan', search: false, width: "15%",  align:'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
		{name: 'TConLai', index: 'TConLai', search: false, width: "15%",  align:'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
		{name: 'GhiChu', index: 'GhiChu', search: false, width: "20%",  align: 'left', hidden: false},
		{name: 'id_nhapkho', index: 'id_nhapkho', search: false, width: "15%",  align: 'left', hidden: true},
		
		],
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 1000000,
		rowList: [30, 50, 70],
		pager: '#prowed3',
		//sortname: 'ID_Kham',
		height: 100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		footerrow: true,
           
            serializeRowData: function(postdata) {
                
            },
            onSelectRow: function(id) {

            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
				

			},
			onSelectRow: function(rowId) { 
				
                
            },

            loadComplete: function(data) {
				var ids = $('#rowed3').jqGrid('getDataIDs');
				var rowData = $('#rowed3').getRowData(ids[0]);
				var sum = $("#rowed3").jqGrid("getCol", "TThanhToan", false, "sum");
				var sum2 = $("#rowed3").jqGrid("getCol", "TDhanhToan", false, "sum");
				var sum3 = $("#rowed3").jqGrid("getCol", "TConLai", false, "sum");
				$("#rowed3").jqGrid("footerData", "set", {TThanhToan: sum,TDhanhToan:sum2,TConLai:sum3});
				for (i = 0; i < ids.length; i++) {
			        $('#rowed3').jqGrid('editRow', ids[i], true);

			    }
            },
            caption: "Phiếu nhập kho "
     

        });

}

//luoi phieu xuat tra
function create_grid1() {

	$("#rowed4").jqGrid({
		url: "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_phieutrahang&tu_ngay=<?=$_GET['from_day']?>&den_ngay=<?=$_GET['to_day']?>&Idnhacc="+<?=$_GET['Idnhacc']?>,
        datatype: "json",
		colNames: ['Mã Phiếu','Ngày duyệt', 'Người duyệt', 'Ngày lập', 'Người lập', 'Tổng Tiền'],
		colModel: [
		//{name: 'ID_Kham', index: 'ID_Kham', search: false, width: "8%", align: 'left', hidden: true},
		{name: 'MaPhieuXT', index: 'MaPhieuXT', search: false, width: "8%",  align: 'left', hidden: true},
		{name: 'NgayDuyetXT', index: 'NgayDuyetXT', search: true, width: "5%", align: 'left', hidden: false},
		{name: 'NguoiDuyetXT', index: 'NguoiDuyetXT', search: true, width: "15%", align: 'left', hidden: false},
		{name: 'NgayLapXT', index: 'NgayLapXT', search: false, width: "5%",  align:'center', hidden: false},
		{name: 'NguoiLapXT', index: 'NguoiLapXT', search: false, width: "5%",  align:'center', hidden: false},
		{name: 'TongTienXT', index: 'TongTienXT', search: false, width: "8%",  align: 'center', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
		//{name: 'DaTraXT', index: 'DaTraXT', search: false, width: "15%",  align: 'left', hidden: false},
		],
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 1000000,
		rowList: [30, 50, 70],
		pager: '#prowed4',
		//sortname: 'ID_Kham',
		height: 100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		footerrow: true,
         
            serializeRowData: function(postdata) {
                
            },
            onSelectRow: function(id) {

            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
				

			},
			onSelectRow: function(rowId) { 
				
                
            },

            loadComplete: function(data) {
				var ids = $('#rowed4').jqGrid('getDataIDs');
				var rowData = $('#rowed4').getRowData(ids[0]);
				var sum = $("#rowed4").jqGrid("getCol", "TongTienXT", false, "sum");
				$("#rowed4").jqGrid("footerData", "set", {TongTienXT: sum});
				for (i = 0; i < ids.length; i++) {
			        $('#rowed4').jqGrid('editRow', ids[i], true);

			    }
            },
            caption: "Phiếu xuất trả "
     

        });

}

//luoi phieu chi duoc
function create_grid2() {

	$("#rowed5").jqGrid({
	
		url: "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_phieuchiduoc&tu_ngay=<?=$_GET['from_day']?>&den_ngay=<?=$_GET['to_day']?>&Idnhacc="+<?=$_GET['Idnhacc']?>,
        datatype: "json",
		colNames: ['Mã P.Chi','Mã P.Nhập', 'Người L.Phiếu', 'Ngày lập', 'Người duyệt', 'Ngày duyệt', 'Số tiền'],
		colModel: [
		//{name: 'ID_Kham', index: 'ID_Kham', search: false, width: "8%", align: 'left', hidden: true},
		{name: 'MaPhieuChi', index: 'MaPhieuChi', search: false, width: "11%",  align: 'left', hidden: false},
		{name: 'MaPhieuNhapPC', index: 'MaPhieuNhapPC', search: true, width: "10%", align: 'left', hidden: false},
		{name: 'NguoiLapPhieuPC', index: 'NguoiLapPhieuPC', search: true, width: "20%", align: 'left', hidden: false},
		{name: 'NgayLapPC', index: 'NgayLapPC', search: false, width: "15%",  align:'right', hidden: false},
		{name: 'NguoiDuyetPC', index: 'NguoiDuyetPC', search: false, width: "20%",  align:'left', hidden: false},
		{name: 'NgayDuyetPC', index: 'NgayDuyetPC', search: false, width: "15%",  align: 'right', hidden: false},
		{name: 'SoTienPC', index: 'SoTienPC', search: false, width: "14%",  align: 'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
		],
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 1000000,
		rowList: [30, 50, 70],
		pager: '#prowed5',
		//sortname: 'ID_Kham',
		height: 100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		footerrow: true,
            serializeRowData: function(postdata) {
                
            },
            onSelectRow: function(id) {

            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
				

			},
			onSelectRow: function(rowId) { 
				
                
            },

            loadComplete: function(data) {
				var ids = $('#rowed5').jqGrid('getDataIDs');
				var rowData = $('#rowed5').getRowData(ids[0]);
				var sum = $("#rowed5").jqGrid("getCol", "SoTienPC", false, "sum");
				$("#rowed5").jqGrid("footerData", "set", {SoTienPC: sum});
				for (i = 0; i < ids.length; i++) {
			        $('#rowed5').jqGrid('editRow', ids[i], true);

			    }
            },
            caption: "Phiếu chi dược "
     

        });

}
 function create_layout() {
	
	$("#main_content").layout({
		resizerClass: 'ui-state-default'
		, east: {
			resizable: true
						, size: '50%'
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
	
	$(".left_col,.right_col").css('height',$("#main_content").height());
	
	$("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() -11);	
	//alert($(".left_col").height()+"="+$(".left_col").height()*0.8 +"+"+$(".left_col").height()*0.2);
	$("#rowed3").setGridHeight($(".left_col").height()*0.6);
	$("#rowed4").setGridHeight($(".left_col").height()*0.2-40);
	$("#rowed5").setGridHeight($(".right_col").height() - 80);
	$("#rowed5").setGridWidth($(".right_col").width() - 11);
}
function create_nhacungcap(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên nhà cung cấp', 'Địa chỉ','Điện thoại'],
            colModel: [
				
                {name: 'TenNcc', index: 'TenNcc', hidden: false, width: "50%"},
                {name: 'DiaChiNcc', index: 'DiaChiNcc', hidden: false, width: "30%", align: 'left'},
                {name: 'DienThoaiNcc', index: 'DienThoaiNcc', hidden: false, width: "20%", align: 'right'},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 135,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				if(ktra==1){
            	 //var rowdata = $(this).getRowData(id);
				create_combobox('#sotiend2', '#sotiend21', ".data_combo_sotien", "#data_combo_sotien1", create_sotien, 200, 300, 'Số tiền', 'data_sotientra&ID_NCC='+id,0);
				}
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }


</script>