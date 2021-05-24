<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>
<body>
<div id="grid_phong_ban">
  <table id="rowed3"  tabindex="1">
  </table>
  <div id="prowed3"></div>
</div>
</body>
</html><script type="text/javascript">
jQuery(document).ready(function() {
	var lastsel; 	 
	$("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phong_ban&q=2',
		datatype: "json",	
		colNames:['Id','Tên phòng ban','Thuộc phòng ban','Mô tả','Điện thoại','P.c/môn','Khu vực','Công ty','Sử dụng','K/cách đến phòng'],
		colModel:[
			{name:'ID_PhongBan',index:'ID_PhongBan', width:"5%", editable:false,align:'right',hidden:false}, 
			{name:'TenPhongBan',index:'TenPhongBan', width:"15%", editable:true,align:'left',hidden:false},
			{name:'ID_PhongBanCha',index:'ID_PhongBanCha', width:"15%", editable:true,align:'center',hidden:false},
			{name:'MoTa',index:'MoTa', width:"20%", editable:true,align:'center',hidden:false}, 
			{name:'DienThoai',index:'DienThoai', width:"10%", editable:true,align:'center',hidden:false}, 
			{name:'IsPhongChuyenMon',index:'IsPhongChuyenMon', width:"5%", editable:true,align:'center',hidden:false}, 
			{name:'ID_KhuVuc',index:'ID_KhuVuc', width:"10%", editable:true,align:'center',hidden:false}, 
			{name:'ID_CongTy',index:'ID_CongTy', width:"10%", editable:true,align:'center',hidden:false},
			{name:'Active',index:'Active', width:"5%", editable:true,align:'center',hidden:false}, 
			{name:'KhoangCachDenPhongKhamLS',index:'KhoangCachDenPhongKhamLS', width:"5%", editable:true,align:'center',hidden:false},   	 	 
		],
		scroll: true,
		grid_mode:"save_inline",
		grid_move:"enter",
		grid_inline_save:"ctrl+enter",		 
		rowNum:20,
		rowList:[20,30,40],
		pager: '#prowed3',
		sortname: 'ID_PhongBan',
		height:100,
		width:100,
		viewrecords: true,	 
		sortorder: "asc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){
		  window.rowid=id;		 
		  if (id !== lastsel) {
			 $("#rowed3").jqGrid('restoreRow', lastsel);
			 $("#rowed3").jqGrid('editRow', id, true);
			 lastsel = id;
		  } else {
			 $("#rowed3").jqGrid('restoreRow', lastsel);
			 lastsel = "";
			// alert(id)
		  }
		  $("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		loadComplete: function(data) {
			if($("#rowed3").getGridParam('userData').ids){
				//alert ($("#rowed3").getGridParam('userData').ids);
			}		
			
		// var rowData = $('#rowed3').getRowData(1);	
			// alert(rowData)	 
			 <?php // mash_unit("SELECT * FROM `permissions`",'#rowed3','permission','') ?>
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		 var grid = $('#rowed3');
		  grid.editRow(rowId, true, function() {
			var colModel = grid.getGridParam('colModel');
			var colName = colModel[columnIndex].name;
			var input = $('#' + rowId + '_' + colName);
			input.get(0).focus();
		  });
		  $("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	
		  $(".sodo").attr("src","index2.php"); 
		},
		editurl: "someurl.php",
		caption: "Danh mục phòng ban"
	});
	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: true, edit: true, del: true, search: true}, //options						 
							  {height:300,width:600,reloadAfterSubmit:true,url:'someurl.php'}, // edit options
							  {reloadAfterSubmit:true,url:'someurl.php'}, // add options
							  {reloadAfterSubmit:true,url:'someurl.php'}, // del options
							  {height:250,width:600} // search options						 
	);
	$(".ui-icon-plus").html("Thêm mới")
	//alert($(window).height()-$("#form_danh_muc_phong_ban").height())
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-105);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");
		$("#gbox_rowed3").focus();	
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		})
	 
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
</script>