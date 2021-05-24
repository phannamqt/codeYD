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
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-140);
	}); 
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Excel", buttonicon: 'ui-icon-calculator', id : 'search_rowed3',
            onClickButton: function() {			 
				window.open('http://192.168.1.104:81/giaidoan2/pages.php?module=report&view=danhmuc&action=in_danh_muc_chuc_danh&id_form=a&type=excel');
            },
            title: "Xuất ra file Excel",
            position: "last"
    })	// BUTTON "export Excel"
		
})
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_chucdanh',
		datatype: "json",	
		colNames:['Id','<?php echo get_text("tenchucdanh")?>','<?php echo get_text("viettat")?>','<?php echo get_text("mota")?>','<?php echo get_text("bacsy")?>','<?php echo get_text("dieuduong")?>','<?php echo get_text("ysy")?>','<?php echo get_text("yta")?>','<?php echo get_text("nuhosinh")?>','<?php echo get_text("ktv")?>','<?php echo get_text("letan")?>','<?php echo get_text("duocsy")?>','ExtField1','<?php echo get_text1("sudung")?>'],
		colModel:[
			{name:'ID_ChucDanh',index:'ID_ChucDanh',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'TenChucDanh',index:'TenChucDanh', width:"20%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}},
			{name:'VietTat',index:'VietTat', width:"10%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:1, colpos:2}},	 
			{name:'MoTa',index:'MoTa', width:"30%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:2, colpos:1}},	 
			{name:'IsDoctor',index:'IsDoctor', width:"10%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:3, colpos:1},editoptions: {value:"1:0"},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
			{name:'IsDieuDuong',index:'IsDieuDuong', width:"10%", editable:true,align:'center',hidden:false,edittype:"checkbox", formatter:"checkbox",editoptions: {value:"1:0"},formoptions:{ rowpos:3, colpos:2},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
			{name:'IsYSy',index:'IsYSy', width:"10%", editable:true,align:'center',hidden:false,edittype:"checkbox", formatter:"checkbox",editoptions: {value:"1:0"},formoptions:{ rowpos:4, colpos:1},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
			{name:'IsYTa',index:'IsYTa', width:"10%", editable:true,align:'center',hidden:false,edittype:"checkbox", formatter:"checkbox",editoptions: {value:"1:0"},formoptions:{ rowpos:4, colpos:2},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
			{name:'IsNuHoSinh',index:'IsNuHoSinh', width:"10%", editable:true,align:'center',hidden:false,edittype:"checkbox", formatter:"checkbox",editoptions: {value:"1:0"},formoptions:{ rowpos:5, colpos:1},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
			{name:'IsKTV',index:'IsKTV', width:"10%", editable:true,align:'center',hidden:false,edittype:"checkbox", formatter:"checkbox",editoptions: {value:"1:0"},formoptions:{ rowpos:5, colpos:2},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
	 			{name:'IsLeTan',index:'IsLeTan', width:"10%", editable:true,align:'center',hidden:false,edittype:"checkbox", formatter:"checkbox",editoptions: {value:"1:0"},formoptions:{ rowpos:6, colpos:1},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
				{name:'IsDuocSy',index:'IsDuocSy', width:"10%", editable:true,align:'center',hidden:false,edittype:"checkbox", formatter:"checkbox",editoptions: {value:"1:0"},formoptions:{ rowpos:6, colpos:2},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
			{name:'ExtField1',index:'ExtField1',search:false, width:"10%", editable:false,align:'center',formatter:"select", edittype:"checkbox", formatter:"checkbox",editoptions: {value:"1:0"},hidden:true},
			{name:'Active',index:'Active', width:"10%", editable:true,align:'center',hidden:false, edittype:"checkbox", formatter:"checkbox",editoptions: {value:"1:0"},formoptions:{ rowpos:7, colpos:1},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
		],
	//

		loadonce: true,
		scroll: 1,	
		rowNum: 100,
		modal:true,	 	
		pager: '#prowed3',	
		gridview: false,
		pginput:false,
		pgbuttons:false,
		height:100,
		width: 100,
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
		caption: "<?php echo get_text("dm_chucdanh")?>"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	
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
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid);
												  
				},
				afterShowForm : function (formid) {
					/*var mota=$("#tr_MoTa").html();
					$("#tr_MoTa").html("");
					var congty=$("#tr_ID_CongTy").html();
					$("#tr_ID_CongTy").html("");
					$("#tr_ID_CongTy").html(mota);
					$("#tr_MoTa").html(congty);*/						
					
					xuongdong(formid);
					lendong(formid);					
					$("#sKhuvuc").click(function(e){		 
						//temp=($(this).attr("role")).split(":");
						links="pages.php?module=danhmuc&view=danh_muc_thuoc&id_form=12"
						elem=1 + Math.floor(Math.random() * 1000000000); 
						width=80;
						height=80;		
						dialog_main("Danh mục khu vực",width,height,elem,links);				 
					})
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
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
					
					xuongdong(formid);
					lendong(formid);			  
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
		} // del options				  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-150);
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