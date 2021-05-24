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
</style>
<body>
  	<div  class="rowed4">
        <table id="rowed4">
        </table>
	</div>
</body>
</html>
<script type="text/javascript">

$(document).ready(function() {
	create_grid();
	jQuery(window).resize(function() {		 
		$("#rowed4").setGridWidth($(window).width()-10);
		$("#rowed4").setGridHeight($(window).height()-128);
	});
})

	function create_grid(){	
	 $("#rowed4").jqGrid({
		url:'',
		datatype: "json",	
		colNames:['ID',"Mã BN",'Họ lót','Tên','Ngày tính bill',"Phí thực hiện",'Phí hoàn tất','Phí chỉ định','Chi phí khác','Giá vốn thuốc','Phí thuê ngoài','Tổng chi phí','Quota','Coupon','Hủy chỉ định','Thuốc trả lại','Tổng giảm doanh thu','Khám','Điều trị','Thuốc','Tổng doanh thu','Lợi nhuận ròng','Nợ cũ','Nợ lượt','Nợ mới','Thực thu','Lợi nhuận không tính nợ'],
		colModel:[
			{name:'ID',index:'ID',search:false, width:"0%", editable:false,align:'right',hidden:true}, 
			{name:'mabn',index:'mabn', width:"5%", editable:false,align:'left',hidden:false},
			{name:'holot',index:'holot', width:"5%", editable:false,align:'left',hidden:false},
			{name:'ten',index:'ten', width:"5%", editable:false,align:'left',hidden:false},
			{name:'ngaytinhbill',index:'ngaytinhbill', width:"5%", editable:false,align:'left',hidden:false},
			{name:'phithuchien',index:'phithuchien', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phihoantat',index:'phihoantat', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phichidinh',index:'phichidinh', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'chiphikhac',index:'chiphikhac', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'giavonthuoc',index:'giavonthuoc', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phithuengoai',index:'phithuengoai', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tongchiphi',index:'tongchiphi', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
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

		loadonce: false,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed4',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		//sortname: 'ID_MonAn',
		//height:100,
		//width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		//sortorder: "asc",
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed4").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			//$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed4") //enter: chuyen con tro sang o tiếp theo		 
		},	 
		caption: "Kết quả"
	});	
		//$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	
	$("#rowed4").setGridWidth($(window).width()-10);
	$("#rowed4").setGridHeight($(window).height()-130);
	 jQuery("#rowed4").jqGrid('setGroupHeaders',
                    {useColSpanStyle: true, groupHeaders:
                                [
									{startColumnName: 'mabn', numberOfColumns: 4, titleText: '<b >Bệnh nhân</b>'},
                                    {startColumnName: 'phithuchien', numberOfColumns: 6, titleText: '<b> Chi phí</b>'},
									{startColumnName: 'quota', numberOfColumns: 4, titleText: '<b>Giảm doanh thu</b>'},
									{startColumnName: 'kham', numberOfColumns: 3, titleText: '<b>Doanh thu</b>'},
									{startColumnName: 'nocu', numberOfColumns: 5, titleText: '<b>Quản trị</b>'},
								]
					}
	);
            //

	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed4").attr("tabindex","1");
		//$("#gbox_rowed4").focus();	
		$("#gbox_rowed4").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed4").jqGrid('restoreRow', lastsel);
				 $("#rowed4").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
		
}
</script>