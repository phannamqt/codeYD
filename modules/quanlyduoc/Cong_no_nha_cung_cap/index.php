<?php

$data= new SQLServer;
$store_name="{call Gd2_demsophieu_getby_machucnang (?)}";
$params = array('FormatSoPhieuChiDuoc');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

?>
<style type="text/css">
#rowed3 td{
word-wrap:normal!important;
  white-space:nowrap;
  }
#tabs .ui-tabs-nav li {
    font-size: 90%;
    margin-top: 0.1em;  
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
  background: none repeat scroll 0 0 #F5F3E5;
    border-top:solid  #D8CEBE 1px;
    border-left:solid  #D8CEBE 1px;
    border-right:solid  #D8CEBE 1px;;
    box-shadow: none;
    font-size: 90%;
    margin-top: 0.1em;  
}#tabs-1,#tabs-2{
    background:#F5F3E5!important;
    border:solid  #CCC 1px!important;
    border-radius:3px;
    
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
z-index: 1;
}#tabs-1,#tabs-2{
    padding:0!important;
}#tabs-1-left-bottom{
    border-radius: 6px!important;
    box-shadow: 0 0 10px #A0A0A0;
    margin-top:6px;
    margin-left:5px;
     border: 1px solid #919191;
}
    #rowed3 td,#rowed4 td,#rowed5 td{

        font-size:13px!important;	   
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
        font-size:13px;
        padding:5px 0px;
        background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
        border:#CCC 1px dashed;	
    }

    .demgio{
        color:red;
        cursor:pointer;

    }
    .disable{
        color:red;
        background:#333;

    }
    #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
        margin-left:4px;
        margin-top:5px;
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
	.form_row tr td input,.form_row tr td textarea{
		font-size:15px!important;
		text-align: left!important;
	
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
	<div id="dialog-daduyet" title="Thông Báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn chắc chắn thay đổi trạng thái duyệt phiếu chi này?</p>
</div>
	

   
    <div id="panel_main" style="margin-top:10px;" >  
        <div id="top_main">  
			<div class="form_row">
				<span>
					
					<label for="from_day" style="width:40px">Từ ngày</label>
					<input type="text"  value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>" style="width:109px" name="from_day" id='from_day'>
					<label for="to_day" style="width:49px"> Đến ngày</label>
					<input type="text"  value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>" style="width:109px" name="to_day" id='to_day'>
<!--                            <input type="hidden" name="from_day_mask" id='from_day_mask'>
					<input type="hidden" name="to_day_mask" id='to_day_mask'>-->
					<button type="button" id="xem">Xem</button>
					<button type="button" id="xemin">Xem in</button>
					<button type="button" id="xuatexcel">Xuất excel</button>
                    <button type="button" id="xuatexcelnhapkho">Xuất excel phiếu nhập kho</button>
                    <button type="button" id="xuatexcelchiduoc">Xuất excel phiếu chi dược</button>
				</span>
           </div> 
        </div>
        <div > 
        <table id="rowed3" ></table>
         <table width="100%" border="0">
  
</table>


			</div>
        </div>
    </div>
    
</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {
	window.ktra=0;
	window.dduyet=0;
	window.ktmaphieu='';
	window.ktsoclick=0;
	window.Idnhacc=0;
	window.tencongty='';
	var maphieunhapkho='';
	var $kiemtra=0;
	$("#xuatexcelnhapkho").click(function(e) {
		window.open("resource.php?module=report&view=quanlyduoc&action=xuat_excel_congnoncc_phieunhapkho&type=excel&tu_ngay="+ $( '#from_day' ).val()+"&den_ngay="+$( '#to_day' ).val()+"&tencongty="+window.tencongty+"&Idnhacc="+window.Idnhacc);
    });
	$("#xuatexcelchiduoc").click(function(e) {
		window.open("resource.php?module=report&view=quanlyduoc&action=xuat_excel_congnoncc_phieuchiduoc&type=excel&tu_ngay="+ $( '#from_day' ).val()+"&den_ngay="+$( '#to_day' ).val()+"&tencongty="+window.tencongty+"&Idnhacc="+window.Idnhacc);
    });
	
	$("#xuatexcel").click(function(e) {
		window.open("resource.php?module=report&view=quanlyduoc&action=xuat_excel_congnoncc&type=excel&tu_ngay="+ $( '#from_day' ).val()+"&den_ngay="+$( '#to_day' ).val());
	 
    });
	$("#xemin").click(function(e) {
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=CongNoNhaCungCungCap&header=left&type=report&id_form=10&tu_ngay="+ $( '#from_day' ).val()+"&den_ngay="+$( '#to_day' ).val(),'CongNoNhaCungCap');
		$(".frame_u78787878975f").css("width","793px");
		
		});
        temp = jQuery(window).height()+490 ;
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);
		$('#xem').button();
        $('#xemin').button();
		$('#xuatexcel').button();
		//$('#xuatexcelnhapkho,#xuatexcelchiduoc').button();
		xem_click();
		window._tungay='';
		window._denngay='';
		create_grid();
		resize_control();

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
         $.dateEntry.setDefaults({spinnerImage: ''});	
		 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
		phanquyen();
		$('#xuatexcelnhapkho,#xuatexcelchiduoc').button();
    })
function xem_click(){
		$( "#xem" ).click(function() {
			var fd= $( '#from_day' ).datepicker( "getDate" );
			   var d= $( '#from_day' ).val();
			   var tfd= $( '#to_day' ).datepicker( "getDate" );
			   var td= $( '#to_day' ).val();
				$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_congno_nhacc&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:"json"}).trigger('reloadGrid');
				//var d=$("#rowed3").jqGrid('getGridParam', 'records');
				
		
		});
	}	
	
    function resize_control() {
	//alert();
      		$("#rowed3").setGridWidth($(window).width()-15);
			$("#rowed3").setGridHeight($(window).height()-140);
		//$("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-40);
		

    }

 function create_grid() {
        window.kiemtrasearch = true;
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_congno_nhacc&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),
            datatype: "json",
            colNames: ['Id_nhacc','Tên công ty cung ứng','Nợ đầu kỳ','Nhập trong kỳ','Trả trong kỳ','Nợ cuối kỳ'],
            colModel: [
				{name: 'Idnhacc', index: 'Idnhacc', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				//{name: 'Stt', index: 'Stt', search: true, width: "5%", editable: false, align: 'center', hidden: false},
                {name: 'Tencongty', index: 'Tencongty', search: true, width: "35%", editable: false, align: 'left', hidden: false},
                {name: 'Nodauky',  index: 'Nodauky', search: true, width: "15%", editable: false, align: 'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
               
				{name: 'Nhaptrongky',  index: 'Nhaptrongky', search: true, width: "15%", editable: false, align: 'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
                
                {name: 'Tratrongky', index: 'Tratrongky', search: true, width: "15%", editable: false, align: 'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
                {name: 'Nocuoiky', index: 'Nocuoiky', search: true, width: "15%", editable: false, align: 'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
                
                
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            rownumbers: true,
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            height: 100,
            width: 100,
            viewrecords: true,	
			ignoreCase:true,
			shrinkToFit:true,
			grouping: false,
			stringResult:true,
			sortorder: "asc",
			footerrow: true,
			onSelectRow: function(id) {
				var rowData = jQuery('#rowed3').getRowData(id);
				window.tencongty=rowData['Tencongty'];
				window.Idnhacc=rowData['Idnhacc'];
             
            },
           ondblClickRow: function(rowId) {
				var rowData = jQuery('#rowed3').getRowData(rowId);
				dialog_main("Chi tiết công nợ của nhà cung cấp:"+rowData['Tencongty'] , 98, 100, 567433265743657, "resource.php?module=<?=$modules?>&view=<?=$view?>&action=chitiet_congnoncc&type=test&id_form=22&Idnhacc="+rowData['Idnhacc']+"&nodauki="+rowData['Nodauky']+"&nhaptrongky="+rowData['Nhaptrongky']+"&tratrongky="+rowData['Tratrongky']+"&nocuoiky="+rowData['Nocuoiky']+"&from_day="+ $( '#from_day' ).val()+"&to_day="+$( '#to_day' ).val());
				//alert($( '#from_day' ).val());
            },
            loadComplete: function(data) {
				var ids = $('#rowed3').jqGrid('getDataIDs');
				var rowData = $('#rowed3').getRowData(ids[0]);
				var sum = $("#rowed3").jqGrid("getCol", "Nodauky", false, "sum");
				var sum1 = $("#rowed3").jqGrid("getCol", "Nhaptrongky", false, "sum");
				var sum2 = $("#rowed3").jqGrid("getCol", "Tratrongky", false, "sum");
				var sum3 = $("#rowed3").jqGrid("getCol", "Nocuoiky", false, "sum");
				$("#rowed3").jqGrid("footerData", "set", {Nodauky: sum,Nhaptrongky:sum1,Tratrongky:sum2,Nocuoiky:sum3});
				for (i = 0; i < ids.length; i++) {
			        $('#rowed3').jqGrid('editRow', ids[i], true);

			    }
               //resize_control();
            },caption: "Công nợ nhà cung cấp "
           
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }
	

</script>

