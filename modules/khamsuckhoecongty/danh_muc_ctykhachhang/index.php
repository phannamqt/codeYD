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
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-130);
	});
		
})
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_cty_kh',
		datatype: "json",	
		colNames:["<?php get_text("tencongty")?>",'<?php get_text("maVT")?>','<?php get_text("diachi")?>','<?php get_text("dienthoai")?>','Email','Fax','<?php get_text("sotaikhoan")?>','<?php get_text("idNganHang")?>','<?php get_text("nguoilienhe")?>','<?php get_text("diachinguoilienhe")?>','<?php get_text1("ghichu")?>','<?php get_text1("sudung")?>','<?php get_text1("stt")?>'],
colModel:[
            {name:'TenCty',index:'TenCty',search:false, width:"300%",editrules: {required:true}, editable:true,align:'left',},		   	 	 
			{name:'MaVietTat',index:'MaVietTat',search:false, width:"100%", editable:true,align:'left',hidden:false}, 
			{name:'DiaChi',index:'DiaChi', width:"300%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{},sorttype:'text'},
			{name:'DienThoai',index:'DienThoai',search:false, width:"100%", editable:true,align:'left',edittype:"text",hidden:false,formoptions:{}},		 
			{name:'Email',index:'Email',search:false, width:"200%", editrules:{email:true,required:false},editable:true,align:'left',hidden:false,},
			{name:'Fax',index:'Fax',search:false, width:"100%", editable:true,align:'left',hidden:false,},
			{name:'SoTaiKhoan',index:'SoTaiKhoan',search:false, width:"100%", editable:true,align:'center',hidden:false,},
			{name:'ID_NganHang',index:'ID_NganHang',search:false, width:"100%", editable:true,align:'center',editrules:{integer:true},hidden:false,},
			{name:'NguoiLienHe',index:'NguoiLienHe',search:false, width:"100%", editable:true,align:'left',},
			{name:'DTNguoiLienHe',index:'DTNguoiLienHe',search:false, width:"100%", editable:true,align:'left',},
			{name:'GhiChu',index:'GhiChu', width:"100%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{},sorttype:'text'},
			{name:'Active',index:'Active',search:false, width:"100%",formatter:"checkbox",edittype:"checkbox",editoptions: {value:"1:0"}, editable:true,align:'center',},
			{name:'STT',index:'STT',search:false, width:"100%", editable:true,align:'left',},
                         
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
        shrinkToFit: false,
		rowNum: 30,
		rowList:[30,50,70],
		pager: '#prowed3',
		sortname: 'TenCty',
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
	  
		caption: "<?php get_text("dm_KH_KhamSK")?>"
	});
	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: permission["search"],closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true,}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,savekey: [true,121],
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
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,savekey: [true,121],addedrow: "first",recreateForm:true
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
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-130);
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