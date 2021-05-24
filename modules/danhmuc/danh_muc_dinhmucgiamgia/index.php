<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style>
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
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-140);
	}); 
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Excel", buttonicon: 'ui-icon-calculator', id : 'search_rowed3',
            onClickButton: function() {			 
				window.open('pages.php?module=report&view=danhmuc&action=in_danh_muc_dinh_muc_giam_gia&type=excel');
            },
            title: "Xuất ra file Excel",
            position: "last"
    })	// BUTTON "export Excel"
		
})

 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dinhmuc',
		datatype: "json",
		colNames:['Id','Tên định mức giảm giá','Số tiền','Số tháng S/d','Giới hạn cho 1 b/nhân','Giới hạn 1 ngày','Giới hạn 1 tháng','Giới hạn 1 năm','Ghi Chú','Áp dụng'],
		colModel:[
			{name:'ID_QuotaGiamGia',index:'ID_QuotaGiamGia',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'TenQuotaGiamGia',index:'TenQuotaGiamGia',search:true, width:"20%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
			{name:'SoTien',index:'SoTien', width:"10%", editable:true,align:'right',hidden:false,edittype:"text", formatter:"currency",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""},formoptions:{ rowpos:1, colpos:2},editrules:{number:true,required:true}},	 	 
			{name:'SoThangSuDung',index:'SoThangSuDung', width:"10%", editable:true,align:'center',hidden:false,edittype:"text",formatter:"integer",formoptions:{ rowpos:2, colpos:1}, editrules:{number:true,required:true}},
			{name:'Max1DayOfPatient',index:'Max1DayOfPatient', width:"10%", editable:true,align:'right',hidden:false,edittype:"text", formatter:"currency",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:2, colpos:2},editrules:{number:true,required:true}},	
			{name:'Max1Day',index:'Max1Day', width:"10%", editable:true,align:'right',hidden:false,edittype:"text", formatter:"currency",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:3, colpos:1},editrules:{number:true,required:true}},	
			{name:'Max1Month',index:'Max1Month', width:"10%", editable:true,align:'right',hidden:false,edittype:"text", formatter:"currency",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:3, colpos:2},editrules:{number:true,required:true}},	
			{name:'Max1Year',index:'Max1Year', width:"10%", editable:true,align:'right',hidden:false,edittype:"text", formatter:"currency",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:4, colpos:1},editrules:{number:true,required:true}},		 
			{name:'GhiChu',index:'GhiChu', width:"20%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:4, colpos:2}},
			{name:'IsUsing',index:'IsUsing', width:"5%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:5, colpos:1},editoptions: {value:"1:0"},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},		
		],
	//

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
		sortname: 'TenQuotaGiamGia',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
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
			grid_filter_enter("#rowed3") //enter: chuyen con tro sang o tiếp theo		 
		},	  
		caption: "Danh mục định mức giảm giá"
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
						number_textbox("#SoTien");	
						number_textbox("#SoThangSuDung");	
						number_textbox("#Max1DayOfPatient");	
						number_textbox("#Max1Day");	
						number_textbox("#Max1Month");	
						number_textbox("#Max1Year");			  
				},
				afterShowForm : function (formid) {						
					
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
					 	number_textbox("#SoTien");	
						number_textbox("#SoThangSuDung");	
						number_textbox("#Max1DayOfPatient");	
						number_textbox("#Max1Day");	
						number_textbox("#Max1Month");	
						number_textbox("#Max1Year");				 
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
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-140);
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