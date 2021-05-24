<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
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
.colored{
	background-color:#A4D1FF;
	}
</style>
<body>
  	<div  class="rowed3">
        <table id="rowed3">
        </table>
	</div>
</body>
</html>
<script type="text/javascript">

$(document).ready(function() {
	create_grid();
	jQuery(window).resize(function() {		 
		$("#rowed3").setGridWidth($(window).width()-10);
		$("#rowed3").setGridHeight($(window).height()-118);
	});
})

	function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_doanhthutonghop',
		datatype: "json",	
		colNames:['ID',"Xem theo",'Phí thực hiện',"Phí chỉ định",'Phí hoàn tất','Chi phí khác','Giá vốn thuốc','Phí thuê ngoài','Tổng chi phí','Quota','Coupon','Hủy chỉ định','Thuốc trả lại','Tổng giảm doanh thu','Khám','Điều trị','Thuốc','Tổng doanh thu','Lợi nhuận ròng','Nợ cũ','Nợ lượt','Nợ mới','Thực thu','Lợi nhuận không tính nợ'],
		colModel:[
			{name:'id',index:'id',search:false, width:"1%", editable:false,align:'right',hidden:true}, 
			{name:'xemtheo',index:'xemtheo', width:"5%", editable:false,align:'center',hidden:false},
			{name:'phithuchien',index:'phithuchien', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phichidinh',index:'phichidinh', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phihoantat',index:'phihoantat', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'chiphikhac',index:'chiphikhac', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'giavonthuoc',index:'giavonthuoc', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phithuengoai',index:'phithuengoai', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tongchiphi',classes:'colored',index:'tongchiphi', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'quota',index:'quota', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'coupon',index:'coupon', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'huychidinh',index:'huychidinh', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'thuoctralai',index:'thuoctralai', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tonggiamdoanhthu',index:'tonggiamdoanhthu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'kham',index:'kham', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'dieutri',index:'dieutri', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'thuoc',index:'thuoc', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tongdoanhthu',index:'tongdoanhthu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'loinhuanrong',index:'loinhuanrong', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'nocu',index:'nocu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'noluot',index:'noluot', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'nomoi',index:'nomoi', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'thucthu',index:'thucthu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'loinhuankhongtinhno',index:'loinhuankhongtinhno', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
				 
		],
	//

		loadonce: true,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		//sortorder: "asc",
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		
 		},
		loadComplete: function(data) {		 
		},	 
		caption: "Kết quả"
	});	
		//$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-120);
	 jQuery("#rowed3").jqGrid('setGroupHeaders',
                    {useColSpanStyle: true, groupHeaders:
                                [
									{startColumnName: 'xemtheo', numberOfColumns: 1, titleText: '<b >Xem theo</b>'},
                                    {startColumnName: 'phithuchien', numberOfColumns: 6, titleText: '<b> Chi phí</b>'},
									{startColumnName: 'quota', numberOfColumns: 4, titleText: '<b>Giảm doanh thu</b>'},
									{startColumnName: 'kham', numberOfColumns: 3, titleText: '<b>Doanh thu</b>'},
									{startColumnName: 'nocu', numberOfColumns: 5, titleText: '<b>Quản trị</b>'},
								]
					}
	);
            //

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