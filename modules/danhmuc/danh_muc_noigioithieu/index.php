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
	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>  
            
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	var lastsel; 	
	create_grid();	
	shortcut_key();	

	
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_noi_gioi_thieu").height()-150);
	});
	//$("#rowed3").setSelection(0, true);
	//$('#rowed3 tbody:first-child tr:first').trigger("click");
	
})
	
 
 
 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_noigioithieu',
		datatype: "json",	
		colNames:['Id','Người giới thiệu','Tên nơi giới thiệu','Địa chỉ','Điện thoại','Hoa Hồng(%)','Ghi chú','Sử dụng'],
		colModel:[
			{name:'ID_NoiGioiThieu',index:'ID_NoiGioiThieu',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'NguoiGioiThieu',index:'NguoiGioiThieu', search:true, width:"20%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:2, colpos:1}}, 
			{name:'TenNoiGioiThieu',index:'TenNoiGioiThieu', search:true, width:"20%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:1, colpos:1}},	 
			{name:'DiaChi',index:'DiaChi',search:true, width:"25%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:3, colpos:1}}, 
			{name:'DienThoai',index:'DienThoai',search:true, width:"10%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:4, colpos:1}},	 
			{name:'HoaHong',index:'HoaHong',search:true, width:"10%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:5, colpos:1}},	 
			{name:'GhiChu',index:'GhiChu',search:true, width:"30%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:6, colpos:1}},		
			{name:'Active',index:'Active',search:true, width:"7%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:7, colpos:1},editoptions: {value:"1:0"}},
		],

		loadonce: true,
		modal:true,	 	
		pager: '#prowed3',	
		
		gridview: true,
		pginput:false,
		pgbuttons:false,
		sortname:'ID_NoiGioiThieu',
		sortorder:'',
		rowList:[],
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "DESC",
		scroll: 1,
		rowNum: 100,
		
		
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
		caption: "Danh mục nơi giới thiệu"
	});	
	//$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";								
					};						
					return [success,new_id];				   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid);
					number_textbox("#HoaHong");
					number_textbox("#DienThoai");
				},
				afterShowForm : function (formid) {	
					xuongdong(formid);
					lendong(formid);					
					
					 
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
				,afterSubmit : function(response, postdata){
					//jQuery("#rowed3").setSelection(1, true);
					
					
						//alert(ids[0]);
					temp = String(response.responseText).split(";");
						
					//$("#rowed3").setColProp('ID_NoiGioiThieu', { editoptions: { value: temp[1]} });
					//$('#ID_NoiGioiThieu').val(temp[1]);
					//alert(temp[1]);
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
					//create_grid();	
					temp = String(response.responseText).split(";");		
					//alert($.trim(temp[1]))			 					
					$("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));
					$("#rowed3").jqGrid("setSelection",$.trim(temp[1]));						
					$("#"+$.trim(temp[1])).focus();		
					window.id_rowed3++; 
										
				},
				beforeSubmit : function(postdata, formid){
					if (typeof(window.id_rowed3)=='undefined'){
						 window.id_rowed3=2;
					}
					var success=true;
					var new_id="";
					return [success,new_id];					  
				},
				beforeShowForm: function(formid) {					 
					 canhgiua(formid);	
					 number_textbox("#HoaHong");
					 number_textbox("#DienThoai");
				},
				afterShowForm : function (formid) {	
					xuongdong(formid);
					lendong(formid);					
					
					 
				},									 

				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");					
				}
				
		}, // add options							  
		{reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,beforeShowForm : function(formid) {canhgiua_del(formid);},	
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
							
								var success=false;
								var new_id="<?php get_text1("xoa_khongthanhcong") ?>";													
								}else{
								tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
								var success=true;	
								var new_id="<?php get_text1("xoa_thanhcong") ?>";
															
							};						
							return [success,new_id] ;
				}		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_noi_gioi_thieu").height()-150);
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
	//jQuery("#rowed3").setSelection(rowid, true);
	//$('#rowed3 tbody:first-child tr:nth-child(2)').trigger("click");	
		
}



</script>