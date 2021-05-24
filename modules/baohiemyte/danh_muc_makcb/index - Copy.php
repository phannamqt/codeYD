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
	load_phong_ban(false); 
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
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phongban&q=2',
		datatype: "json",	
		colNames:['Id','<?php get_text("tenphongban")?>','<?php get_text("thuocphongban")?>','<?php get_text1("mota")?>','<?php get_text("dienthoai")?>','Phòng CM','<?php get_text("khuvuc")?>','<?php get_text("congty")?>','<?php get_text1("sudung")?>','K.Cách','Tầng','Tầng','Phòng chuyên môn','Phòng CM'],
		colModel:[
			{name:'ID_PhongBan',index:'ID_PhongBan',search:false, width:"0%", editable:false,align:'right',hidden:true}, 
			{name:'TenPhongBan',index:'TenPhongBan',search:true, width:"20%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{rowpos:1 , colpos :1}},
			{name:'ID_PhongBanCha',index:'ID_PhongBanCha',search:true, width:"15%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:phongban},formoptions:{rowpos:1 , colpos :2}},		 
			{name:'MoTa',index:'MoTa',search:true, width:"10%", editable:true,align:'center',hidden:false,edittype:"textarea",formoptions:{rowpos:6, colpos :1}}, 
			{name:'DienThoai',index:'DienThoai',search:true, width:"10%", editable:true,align:'center',hidden:false,edittype:"text",formoptions:{rowpos:2, colpos :1}}, 
			{name:'IsPhongChuyenMon',index:'IsPhongChuyenMon',search:true, width:"5%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:4, colpos:1},editoptions: {value:"1:0"},formatoptions:{disabled: false}},
			{name:'ID_KhuVuc',index:'ID_KhuVuc',search:true, width:"10%", editable:true,align:'center',edittype:"select",formatter:"select",hidden:false,editoptions:{value:khuvuc},formoptions:{rowpos:2, colpos :2},hidden:true}, 
			{name:'ID_CongTy',index:'ID_CongTy',search:true, width:"10%", editable:true,align:'center',edittype:"select",formatter:"select",hidden:false,editoptions:{value:congty},formoptions:{rowpos:3, colpos :2}}, 
			{name:'Active',index:'Active',search:true, width:"5%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:5, colpos:1},editoptions: {value:"1:0"},formatoptions:{disabled: false}},
			{name:'KhoangCachDenPhongKhamLS',search:true,index:'KhoangCachDenPhongKhamLS', width:"5%", editable:true,align:'center',hidden:false,formoptions:{rowpos:3, colpos :1}}, 
			{name:'Id_tang',index:'Id_tang',search:false, width:"10%", editable:true,align:'center',edittype:"select",formatter:"select",hidden:false,editoptions:{value:tang},formoptions:{rowpos:4, colpos :2},hidden:true}, 
			{name:'Tang',search:true,index:'Tang', width:"5%", editable:false,align:'center',hidden:false}, 
			{name:'Id_phongcm',index:'Id_phongcm',search:false, width:"10%", editable:true,align:'center',edittype:"select",formatter:"select",hidden:false,editoptions:{value:phongcm},formoptions:{rowpos:5, colpos :2},hidden:true}, 
			{name:'PhongCM',search:true,index:'PhongCM', width:"5%", editable:false,align:'center',hidden:false}, 
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
		caption: "<?php get_text("dm_phongban")?>"
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
					autocompleted_combobox("#ID_KhuVuc");
					autocompleted_combobox("#ID_CongTy");
					autocompleted_combobox("#ID_PhongBanCha");	
					autocompleted_combobox("#Id_tang");	
					autocompleted_combobox("#Id_phongcm");
				},
				afterShowForm : function (formid) {
					
					xuongdong(formid);
					lendong(formid);					
					$("#sKhuvuc").click(function(e){		 
						//temp=($(this).attr("role")).split(":");
						links="pages.php?module=danhmuc&view=danh_muc_thuoc&id_form=12"
						elem=1 + Math.floor(Math.random() * 1000000000); 
						width=100;
						height=80;		
						dialog_main("Danh mục khu vực",width,height,elem,links);				 
					})
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
					load_phong_ban(true);
					
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
					autocompleted_combobox("#ID_KhuVuc");
					autocompleted_combobox("#ID_CongTy");
					autocompleted_combobox("#ID_PhongBanCha");
					autocompleted_combobox("#Id_tang");
					autocompleted_combobox("#Id_phongcm");
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
								load_phong_ban(true);								
							};						
							return [success,new_id] ;
				}		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_benh_nhan&q=2',closeOnEscape : true,
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
function load_phong_ban(status){
	window.phongban = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.khuvuc = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_KhuVuc &id=ID_KhuVuc&name=TenKhuVuc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục khu vực');}}).responseText;
	window.congty = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_CongTy &id=ID_CongTy&name=TenCongTy', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục công ty');}}).responseText;
	window.phongcm = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_PhongChuyenMon &id=ID_PhongChuyenMon&name=TenPhongChuyenMon', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban chuyên môn');}}).responseText;
	window.tang = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GD2_DMTang &id=Id_Tang&name=TenTang', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục tầng');}}).responseText;
	if(status==true){
		$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: phongban} });
		$("#rowed3").setColProp('ID_KhuVuc', { editoptions: { value: khuvuc} });
		$("#rowed3").setColProp('ID_CongTy', { editoptions: { value: congty} });
		
		$("#rowed3").setColProp('Id_Tang', { editoptions: { value: tang} });
		$("#rowed3").setColProp('ID_PhongChuyenMon', { editoptions: { value: phongcm} });
	}	
}

function re_create_grid(){
	//$("#rowed3").GridUnload();
	//$("#gbox_rowed3").remove();
	//$("#grid_phong_ban").append('<table id="rowed3" ></table><div id="prowed3"></div> ');
	//create_grid();	
}
 
</script>