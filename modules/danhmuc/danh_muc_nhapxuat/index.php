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


	var lastsel; 	
	
	create_grid();			 
	shortcut_key();	
		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-130);
	});
		$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Excel", buttonicon: 'ui-icon-calculator', id : 'search_rowed3',
            onClickButton: function() {			 
				//window.open('pages.php?module=report&view=danhmuc&action=in_danh_muc_nhap_xuat&type=excel');
            },
            title: "Xuất ra file Excel",
            position: "last"
    })	// BUTTON "export Excel"
		
})
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhapxuat&q=2',
		datatype: "json",	
		colNames:['ID nhập xuất','<?php get_text("manhapxuat")?>','<?php get_text("tennhapxuat")?>','<?php get_text1("sudung")?>'],
		colModel:[
			{name:'ID_NhapXuat',index:'ID_NhapXuat', width:"17%", editable:false,align:'left',hidden:true,edittype:"text",formoptions:{},sorttype:'text'}, 
			{name:'Ma_NhapXuat',index:'Ma_NhapXuat', width:"17%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{},sorttype:'text'},
			{name:'Ten_LoaiNhapXuat',index:'Ten_LoaiNhapXuat', width:"15%", editable:true,edittype:"text",editrules: {required:true},hidden:false,formoptions:{}},		 
			{name:'Active',index:'Active', width:"7%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{},editoptions: {value:"1:0"},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},
		],
		loadonce: true,
		scroll: 1,	
		rownum:100,	 
		modal:true,	 	 
		pager: '#prowed3',
		sortname: 'Ten_loainhapxuat',
		height:100,
		width:100,
		pginput:false,
		pgbuttons:false,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		stringResult:true,
		sortorder: "asc",
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		
		loadComplete: function(data) {	
			grid_filter_enter("#rowed3") //enter: chuyen con tro sang o tiếp theo		 
		},	  
	  
		caption: "<?php get_text("dm_nhapxuat")?>"
	});
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"},		  //options		 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,savekey :[true, 121],
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
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey :[true, 121]
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
				beforeShowForm : function(formid) {canhgiua_del(formid);},
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
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhapxuat&q=2',navkeys : [ true, 38, 40 ],closeOnEscape : true,
					
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-130);
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