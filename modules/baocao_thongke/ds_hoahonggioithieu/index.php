<!--
--- =============================================
-- Author:		<Phan Nam>
-- Create date: <13/11/13>
-- Description:	<Description,,>
-- =============================================
-->
<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
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
</style>
<body> 
<label for="from_day" style="width:17px"> Từ ngày</label>
<input type="text"  style="width:109px" name="from_day" id='from_day'>
<label for="to_day" style="width:23px"> Đến ngày </label>
<input type="text"   style="width:109px" name="to_day" id='to_day'> 
Mã BN giới thiệu: <input type="text"   style="width:109px" name="ma_benhnhan" id='ma_benhnhan'>
<button type="button" id="xem">Xem</button>
	<div id="grid_phong_ban">      	 
		<table id="rowed3" ></table>
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {	
	$("#from_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
         $("#to_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
         $("#from_day").datepicker({
           dateFormat:  $.cookie("ngayJqueryUi")
         });
         $("#to_day").datepicker({
           dateFormat:  $.cookie("ngayJqueryUi")		
         });
         $("#from_day, #to_day").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
	var lastsel; 		
	create_grid();	
	shortcut_key();	
	$("#xem").button();	
	
	$("#xem").click(function(){
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_list&tungay='+$("#from_day").val()+'&denngay='+$("#to_day").val()+'&mabenhnhan='+$("#ma_benhnhan").val()}).trigger('reloadGrid');
	})
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height() -150);
	});
})

function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_list&tungay='+$("#from_day").val()+'&denngay='+$("#to_day").val()+'&mabenhnhan='+$("#ma_benhnhan").val(),
		datatype: "json",	
		colNames:['Mã BN G.Thiệu','Họ tên BN G.Thiệu','Mã BN được G.Thiệu','Họ tên BN được G.Thiệu','Số tiền phát sinh','Số tiền chiết khấu','Thời gian vào khám'],
		colModel:[
			{name:'MaBNGT',index:'MaBNGT',search:true, width:"10%", editable:true,align:'left',hidden:false}, 
			{name:'HoTenBNGT',index:'HoTenBNGT',search:true, width:"10%", editable:true,align:'left',hidden:false}, 
			{name:'MaBNDGT',index:'MaBNDGT',search:true, width:"10%", editable:true,align:'left',hidden:false}, 
			{name:'HoTenBNDGT',index:'HoTenBNDGT',search:true, width:"10%", editable:true,align:'left',hidden:false}, 
			{name:'SoTienTT',index:'SoTienTT',search:true, width:"10%", editable:true,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}}, 
			{name:'SoTienCK',index:'SoTienCK',search:true, width:"10%", editable:true,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}}, 
			{name:'TGVaoKham',index:'TGVaoKham',search:true, width:"10%", editable:true,align:'center',hidden:false}, 
		],
		loadonce: true,
		scroll: 1,	
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_DanToc',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		 footerrow : true,
		userDataOnFooter : true,
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  
		 
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		 
 		},
		loadComplete: function(data) {			
			grid_filter_enter("#rowed3");
			var  Sum_SoTienTT = $("#rowed3").jqGrid('getCol', 'SoTienTT', false, 'sum');
			var  Sum_SoTienCK = $("#rowed3").jqGrid('getCol', 'SoTienCK', false, 'sum');
			$("#rowed3").jqGrid('footerData','set', {
				SoTienTT: Sum_SoTienTT,
				SoTienCK: Sum_SoTienCK,
			});
		},	  
		caption: "Danh sách"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
						  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height() -150);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
}

</script>