<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<body> 
	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>   
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {	
	phanquyen();
	var lastsel; 	
	
	create_grid();			 
	shortcut_key();		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-90);
	});
		
})
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_don_vi_tinh&q=2',
		datatype: "json",	
		colNames:['ID','<?php get_text("tenDVT")?>','<?php get_text("manhom")?>','<?php get_text1("ghichu")?>','<?php get_text1("sudung")?>'],
		colModel:[
			{name:'ID_DonViTinh',index:'ID_DonViTinh',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'TenDonViTinh',index:'TenDonViTinh', width:"17%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{},sorttype:'text'},
			{name:'MaNhom',index:'MaNhom',search:false, width:"15%", editable:true,align:'center',edittype:"text",hidden:false,formoptions:{}},		 
			{name:'GhiChu',index:'GhiChu',search:false, width:"5%", editable:true,align:'center',edittype:"textarea",hidden:false,},
			{name:'Active',index:'Active',search:false, width:"5%", editable:true,align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},hidden:false,},		   	 	 
		],
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000,
		rowList:[],
		pager: '#prowed3',	
		sortname: 'TenDonViTinh',
		height:100,
		width:100,
		viewrecords: true,	
		ignoreCase:true,	
		sortorder: "asc",
		serializeRowData: function (postdata) { 				
		},
		onSelectRow: function(id){				
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {					 
		},
	  
		caption: "<?php get_text("dm_DVT")?>"
	});
	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: permission["search"],closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true,}, //options						 
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
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid)								  
				},
				afterShowForm : function (formid) {									
					xuongdong(formid);
					lendong(formid);							 
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true
				,afterSubmit : function(response, postdata){
					temp = String(response.responseText).split(";");				 
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("luu_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("luu_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("luu_thanhcong") ?>";												
					};						
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					temp = String(response.responseText).split(";");					 					
					$("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));
					$("#"+$.trim(temp[1]+"> td")).trigger("click");					
					window.id_rowed3++; 					
				},
				beforeSubmit : function(postdata, formid){
					if (typeof(window.id_rowed3)=='undefined'){
						 window.id_rowed3=1;
					}
					var success=true;
					var new_id="";
					return [success,new_id];					  
				},
				beforeShowForm: function(formid) {					 
					 canhgiua(formid);					 
				},									 
			 	afterShowForm : function (formid) {
								xuongdong(formid)
								lendong(formid)		 
			 	},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");					
				}
		}, // add options							  
		{reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
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
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_don_vi_tinh&q=2',navkeys : [ true, 38, 40 ],closeOnEscape : true,					
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-100);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");		
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 		
}

</script>