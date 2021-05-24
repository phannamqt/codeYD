<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<body> 
	<div id="grid_phong_ban">      	 
          <table id="rowed3"></table>
            <div id="prowed3"></div>  
            
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	 load_select();
	
	var lastsel; 	
        window.nhomthuoccha1=":;"+window.nation2;	
	window.thuevat1=":;"+window.nation3;	
	create_grid();	
	shortcut_key();		
jQuery(window).resize(function() {		 
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-150);
	}); 
	
		 
		
})

function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhomthuoc',
		datatype: "json",	
		colNames:['Id','Tên nhóm thuốc ','Thuộc nhóm','Ghi chú','Sử dụng','Độ ưu tiên','VAT'],
		colModel:[
			{name:'ID_NhomThuoc',index:'ID_NhomThuoc',search:false, editable:false,align:'right',hidden:true},
                        {name:'TenNhomThuoc',index:'TenNhomThuoc', width:"20%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
                        {name:'ID_NhomThuocCha',index:'ID_NhomThuocCha', width:"20%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:nhomthuoccha1}, editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:false},edittype:"select",editoptions: { value: nation2},formoptions:{ rowpos:1, colpos:2, elmsuffix:'<a id="add_new2" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}}, 
			{name:'GhiChu',index:'GhiChu', width:"30%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:3, colpos:1}}, 
			{name:'Active',index:'Active', width:"10%", editable:true,align:'center',stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'},hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:4, colpos:1},editoptions: {value:"1:0"}},	
			{name:'DoUuTien',index:'DoUuTien', width:"10%", editable:true,align:'center',hidden:false,edittype:"text", formatter:"text",editrules: {required:false},formoptions:{ rowpos:2, colpos:1}},	
			{name:'ID_VAT',index:'ID_VAT', width:"10%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:false},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:thuevat1},edittype:"select",editoptions: { value: nation3},formoptions:{ rowpos:2, colpos:2, elmsuffix:'<a id="add_new3" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}},
        ],
	//
                loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000,
		rowList:[],
		pginput:false,
		pgbuttons:false,
		pager: '#prowed3',
		sortname: 'ID_NhomThuoc',
		height:100,
		width:100,
		viewrecords: true,	
		ignoreCase:true,
		
                
       
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
					 
		},	  
		caption: "Danh mục nhóm thuốc"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
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
					number_textbox('#DoUuTien');							  
				},
				afterShowForm : function (formid) {
										
					autocompleted_combobox("#ID_NhomThuocCha,#ID_VAT");
										
					
                                 $("#add_new2").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_nhom_thuoc&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select2);   
					 })
                                 $("#add_new3").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_VAT&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục nhóm VAT",width,height,elem,links,load_select3);   
					 })
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
						 window.id_rowed3 = 1;
					}
					var success=true;
					var new_id="";
					return [success,new_id];					  
				},
				beforeShowForm: function(formid) {					 
					 canhgiua(formid);
                                         number_textbox('#DoUuTien');
				},									 
			 	afterShowForm : function (formid) {					
					autocompleted_combobox("#ID_NhomThuocCha,#ID_VAT");
					xuongdong(formid);
					lendong(formid);
					
                                 $("#add_new2").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_nhom_thuoc&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục nhóm thuốc",width,height,elem,links,load_select2);   
					 })
                                $("#add_new3").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_VAT&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục VAT",width,height,elem,links,load_select3);   
					 })
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
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-180);
        
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


function load_select2(){
	window.nhomthuoccha = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhomThuoc&id=ID_NhomThuoc&name=TenNhomThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm thuốc');}}).responseText;	
	$("#rowed3").setColProp('ID_NhomThuoc', { editoptions: { value: nhomthuoccha} });
	$('#ID_NhomThuoc').empty();
	create_select("#ID_NhomThuoc",nhomthuoccha);
}
function load_select3(){
	window.thuevat = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_ThueVAT&id=ID_VAT&name=VAT', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục VAT');}}).responseText;	
	$("#rowed3").setColProp('ID_VAT', { editoptions: { value: thuevat} });
	$('#ID_VAT').empty();
	create_select("#ID_VAT",thuevat);
}

function load_select(){
		window.nation2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhomThuoc&id=ID_NhomThuoc&name=TenNhomThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm thuốc');}}).responseText;	
		window.nation3 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_ThueVAT&id=ID_VAT&name=VAT', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục VAT');}}).responseText;
}
 
</script>