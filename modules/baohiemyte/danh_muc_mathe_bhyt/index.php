<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style>
#editmodrowed3{
	width:450px !important;	
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
			/*$("body").bind("contextmenu",function(e){
			   return false;
			});*/ 	
			checkbox_search('gs_Active','#rowed3');
			checkbox_search('gs_IsPhongChuyenMon','#rowed3')
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			eventer(messageEvent,function(e) {			 
			  if(e.data=='table'){
				
			  }			  
			},false);

	
	var lastsel; 	
	create_grid();	
			 
	shortcut_key();
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-10);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-130);
	}); 
		
})
 
 
function create_grid(){	
		//window.kiemtrasearch = true;
		 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&q=2',
		datatype: "json",	
		colNames:['Đầu thẻ','Tên đầu thẻ','Tỷ lệ hưởng'],
		colModel:[
			{name:'ma_dt',index:'ma_dt',search:true, width:"20%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{rowpos:1, colpos :1},editrules: {required:true}}, 
				 
			{name:'ten_dt',index:'ten_dt',search:true, width:"60%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{rowpos:2, colpos :1},editrules: {required:false}}, 
			{name:'PT_PhuThu',index:'PT_PhuThu',search:true, width:"20%", editable:true,align:'right',hidden:false,edittype:"text",formoptions:{rowpos:3, colpos :1 },editrules: {required:true}}, 
		],
			loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed3',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			closeAfterEdit: true,
			
	
		
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  
		 
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
				//grid_filter_enter(rowed3);	 
		},	  
		caption: "Danh mục đầu thẻ"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["del"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true }, //options						 
		{recreateForm:true,height:'auto',width:'900',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,savekey: [true,121],closeAfterEdit: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";
						$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
						
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid); 
				},
				afterShowForm : function (formid) {
					number_textbox("#PT_PhuThu");
					xuongdong(formid);
					lendong(formid);					
					
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
				//closeAfterEdit: true,		  
		}, // edit options
		{height:'auto',width:'900',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121],closeAfterAdd: true
				,afterSubmit : function(response, postdata){
					temp = String(response.responseText).split(";");				 
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("luu_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("luu_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("luu_thanhcong") ?>";
						$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
						
						//load_phongban_cha()
						re_create_grid();								
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
					number_textbox("#PT_PhuThu");
					xuongdong(formid);
					lendong(formid);			  
			 	},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");			
					
				}
			//closeAfterAdd: true;	
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
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-130);
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


function re_create_grid(){
	//$("#rowed3").GridUnload();
	//$("#gbox_rowed3").remove();
	//$("#grid_phong_ban").append('<table id="rowed3" ></table><div id="prowed3"></div> ');
	//create_grid();	
}
 
</script>