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
			/*$("body").bind("contextmenu",function(e){
			   return false;
			});*/ 	
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			eventer(messageEvent,function(e) {			 
			  if(e.data=='table'){
				 alert("chinh")
			  }			  
			},false);

	//dialog_none_button("Test",400,400)
	//dialog_none_button("Test1",400,400)
	//parent.postMessage("traodoi","http://192.168.1.24:81/giaidoan2/"); 
	var lastsel; 
	create_grid();	
	shortcut_key();		
	
		
		//$('#prowed3_center table tr').append("<td>Phis</td>");
		
		 
		
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
	
 
 
 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_template',
		datatype: "json",	
		colNames:['Id','Tên mẫu','Nhóm Template','Nội dung','Kết luận','Lời khuyên','Giá tiền','Sử dụng','STT','Người tạo','Thống số kĩ thuật','Thuộc nhóm','IsGroup'],
		colModel:[
			{name:'ID_Template',index:'ID_Template',search:false, width:"100%", editable:false,align:'right',hidden:true},
                        {name:'TenTemplate',index:'TenTemplate', width:"100%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
                        {name:'ID_ParentTemplate',index:'ID_ParentTemplate', width:"100%", editable:true,align:'center',hidden:false,formatter:"select",edittype:"select",editoptions: { value: nation},formoptions:{ rowpos:6, colpos:1, elmsuffix:'<a id="add_new2" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}}, 
			{name:'NoiDung',index:'NoiDung', width:"500%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:2, colpos:1}}, 
			{name:'KetLuan',index:'KetLuan', width:"120%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:2, colpos:2}},
                        {name:'LoiKhuyen',index:'LoiKhuyen', width:"120%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:3, colpos:1}},	
                        {name:'GiaTien',index:'GiaTien', width:"50%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:4, colpos:2}},
			{name:'Active',index:'Active', width:"50%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:4, colpos:1},editoptions: {value:"1:0"}},	
			{name:'STT',index:'STT', width:"50%", editable:true,align:'center',hidden:false,sorttype: 'text', formatter: "text",formoptions:{ rowpos:5, colpos:2}},	
						{name:'ID_NhanVien',index:'ID_NhanVien', width:"100%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: nation2},formoptions:{ rowpos:5, colpos:1, elmsuffix:'<a id="add_new" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}},
                        {name:'ExtField2',index:'ExtField2', width:"100%", editable:true,align:'center',hidden:false,edittype:"textarea",formoptions:{ rowpos:3, colpos:2}},
                        {name:'ID_NhomTemplate',index:'ID_NhomTemplate', width:"100%", editable:true,align:'center',hidden:false,formatter:"select",edittype:"select",editoptions: { value: nation3},formoptions:{ rowpos:1, colpos:2, elmsuffix:'<a id="add_new3" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}},
       					{name:'IsGroup',index:'IsGroup', width:"50%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:6, colpos:2},editoptions: {value:"1:0"}},	
        ],
	//

		loadonce: true,
		scroll: false,
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: -1,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_Template',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:false,
		stringResult:true,
		sortorder: "asc",
                grouping:true,
                groupingView : {
        				groupField : ['ID_NhomTemplate'],
                        groupColumnShow : [false],
                        groupCollapse : true,
                },
		
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
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });	
			grid_filter_enter("#rowed3");			 
		},	  
		caption: "Danh mục chuẩn đoán"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=3',closeOnEscape : true,modal: true,recreateForm: true,
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
					number_textbox('#STT');		

				},
				afterShowForm : function (formid) {
					/*var mota=$("#tr_MoTa").html();
					$("#tr_MoTa").html("");
					var congty=$("#tr_ID_CongTy").html();
					$("#tr_ID_CongTy").html("");
					$("#tr_ID_CongTy").html(mota);
					$("#tr_MoTa").html(congty);*/						
					autocompleted_combobox("#ID_NhanVien,#ID_ParentTemplate,#ID_NhomTemplate");
					xuongdong(formid);
					lendong(formid);					
					$("#add_new").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_nhan_vien&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
					 })
                                         $("#add_new2").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select2);   
					 })
                                         $("#add_new3").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_nhommauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục nhóm mẫu chuẩn đoán",width,height,elem,links,load_select3);   
					 })
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
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
					 number_textbox('#STT');	
					
					$("#ID_NhanVien").val("<?=$_SESSION['user']['id_user']?>");		 
				},									 
			 	afterShowForm : function (formid) {					
					autocompleted_combobox("#ID_NhanVien,#ID_ParentTemplate,#ID_NhomTemplate");
					xuongdong(formid);
					lendong(formid);			 
					 $("#add_new").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_nhan_vien&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);     
					 })
                                         $("#add_new2").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select2);   
					 })
                                          $("#add_new3").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_nhommauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select3);   
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

function load_select1(){
	window.xaphuong = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_nhanvien&id=ID_nhanvien&name=Tennhanvien', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	$("#rowed3").setColProp('ID_nhanvien', { editoptions: { value: xaphuong} });
	$('#ID_nhanvien').empty();
	create_select("#ID_nhanvien",xaphuong);
}
function load_select2(){
	window.xaphuong2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_template&id=ID_template&name=Tentemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục mẫu chuẩn đoán');}}).responseText;	
	$("#rowed3").setColProp('ID_template', { editoptions: { value: xaphuong2} });
	$('#ID_template').empty();
	create_select("#ID_template",xaphuong2);
}
function load_select3(){
	window.xaphuong3 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_Nhomtemplate&id=ID_Nhomtemplate&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm mẫu chuẩn đoán');}}).responseText;	
	$("#rowed3").setColProp('ID_NhomTemplate', { editoptions: { value: xaphuong3} });
	$('#ID_NhomTemplate').empty();
	create_select("#ID_NhomTemplate",xaphuong3);
}

function load_select(){
	window.nation2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_nhanvien&id=ID_nhanvien&name=Tennhanvien', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
        window.nation = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_template&id=ID_template&name=Tentemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục mẫu chuẩn đoán');}}).responseText;
        window.nation3 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhomTemplate&id=ID_NhomTemplate&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm mẫu chuẩn đoán');}}).responseText;
}
 
</script>