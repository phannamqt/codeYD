 
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
	<div style="float:left;width:100%">      	 
			<table id="rowed4" ></table>
			<div id="prowed4"></div>  
	</div>
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	 window.dschuỵenkhoa = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=MED_DM_ChuyenKhoa&id=id&name=tenchuyenkhoa', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục  ');
    }}).responseText;
	window.dsthu = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=MED_DM_Ngay&id=id&name=datename', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục  ');
    }}).responseText;
	 window.dsnhanvien = $.ajax({url: "pages.php?module=web_services&function=get_danhsachnhanvien_cchn&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=TenNhanVien", async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục ');
    }}).responseText;
	var lastsel; 	
	//create_grid();
	create_grid4();
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
/* 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ngay',
		datatype: "json",	
		colNames:['ID_Ngay','Thứ'],
		colModel:[
			{name:'ID_Ngay',index:'ID_Ngay',search:false,search:false, width:"2%", editable:false,align:'left',hidden:true}, 
			{name:'TenTrinhDo',index:'TenTrinhDo',search:true, width:"30%", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}},  
		], 
		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_TrinhDo',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
	
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed3");
		},	  
		
		caption: "Danh sách ngày trong tuần"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"}); 					  
	$("#rowed3").setGridWidth($(window).width()*0.27);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_trinhdo").height()-150);
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
}  */
function create_grid4(){	
	 $("#rowed4").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ngaychuyenkhoa',
		datatype: "json",	
		colNames:['ID_Ngay','','','','Thứ','Chuyên khoa','Nhân viên đứng tên','Sử dụng'],
		colModel:[
			{name:'ID_Ngay',index:'ID_Ngay',search:false, width:"2%", editable:false,align:'left',hidden:true},  
			 {name: 'Thu', index: 'Thu', width: "30%", align: 'left', editable:true, formatter: "select", edittype: "select", hidden: false, editoptions: {value: dsthu, defaultValue: '1', }, formoptions: {},searchoptions: { sopt: ['eq', 'ne'],value:':;'+dsthu},stype: 'select'},
			 {name: 'ChuyenKhoa', index: 'ChuyenKhoa', width: "30%", align: 'left', editable:true, formatter: "select", edittype: "select", hidden: false, editoptions: {value: dschuỵenkhoa, defaultValue: '1', }, formoptions: {},searchoptions: { sopt: ['eq', 'ne'],value:':;'+dschuỵenkhoa},stype: 'select'},
			  {name: 'NhanVien', index: 'NhanVien', width: "60%", align: 'left', editable:true, formatter: "select", edittype: "select",search:true, hidden: false, editoptions: {value: dsnhanvien, defaultValue: '1', }, formoptions: {},searchoptions: { sopt: ['eq', 'ne'],value:':;'+dsnhanvien},stype: 'select'}, 
			  
			  {name: 'Thu_Show', index: 'Thu_Show', width: "30%", align: 'left', hidden: true },
			 {name: 'ChuyenKhoa_Show', index: 'ChuyenKhoa_Show', width: "30%", align: 'left', hidden: true},
			  {name: 'NhanVien_Show', index: 'NhanVien_Show', width: "60%", align: 'left', hidden: true}, 
			  
			{name:'Active',index:'Active',search:true, width:"10%", editable:true,align:'left',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'},editoptions: {value:"1:0"}},
		], 
		loadonce: true,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed4',	
		rowNum: 10000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_Ngay',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
	
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed4");
		},	  
		
		caption: "Danh sách cấu hình ngày - chuyên khoa - nhân viên"
	});	
	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: permission["add"], edit: permission["edit"], del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=a',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";								
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid);
												  
				},
				afterShowForm : function (formid) {
					xuongdong(formid);
					lendong(formid);					
					
				},
				onClose : function(formid){
					$("#editmodrowed4").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=a',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
				,afterSubmit : function(response, postdata){
					temp = String(response.responseText).split(";");				 
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("luu_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("luu_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("luu_thanhcong") ?>";
						//load_phongban_cha()
														
					};						
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					temp = String(response.responseText).split(";");					 					
					$("#jqg"+window.id_rowed4).attr("id",$.trim(temp[1]));
					$("#"+$.trim(temp[1]+"> td")).trigger("click");					
					window.id_rowed4++; 
				
				},
				beforeSubmit : function(postdata, formid){
					if (typeof(window.id_rowed4)=='undefined'){
						 window.id_rowed4=2;
					}
					var success=true;
					var new_id="";
					return [success,new_id];					  
				},
				beforeShowForm: function(formid) {					 
					 canhgiua(formid);					 
				},									 
			 	afterShowForm : function (formid) {					
					
					xuongdong(formid);
					lendong(formid);			  
			 	},
				onClose : function(formid){
					$("#editmodrowed4").css("box-shadow","");					
				}
		}, 
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ngaychuyenkhoa&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed4").setGridWidth($(window).width()-20);
	$("#rowed4").setGridHeight($(window).height()-$("#form_danh_muc_trinhdo").height()-150);
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