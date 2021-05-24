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
		load_select();	
		//load_select1();
	var lastsel; 	
	 window.provincez=":;"+window.province;
	create_grid();	
	shortcut_key();		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-150);
	});		
	phanquyen();
})
 
function create_grid(){	
//if(permission['quyenxemfullreport']==1){
//	var quyenxemfullreport=0
//}else{
//	 quyenxemfullreport=0
//}
	var quyenxemfullreport=0;

	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data&quyenxemfullreport='+quyenxemfullreport,
		datatype: "json",	
		colNames:['Id','Tên PC','Địa chỉ IP','Tên report','Tên User Window','Tên máy in','Kiểu in','Số lượng bản in','Căn lề (Trên, phải, dưới, trái)'],
		colModel:[
			{name:'ID_auto',index:'ID_auto',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'TenMay',index:'TenMay', width:"10%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
			{name:'IPMay',index:'IPMay', width:"10%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:2, colpos:1}}, 
			{name:'TenReport',index:'TenReport', width:"15%", editable:true,align:'left',hidden:false,editrules: {required:true},formatter:"select",edittype:"select",editoptions: { value: province},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:provincez},formoptions:{ rowpos:3, colpos:1, elmsuffix:'<a id="add_new" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>' }}, 
			{name:'UserWindowName',index:'UserWindowName', width:"10%", editable:true,align:'left',hidden:false,editrules: {required:false},edittype:"text",formoptions:{ rowpos:4, colpos:1}}, 
			{name:'TenMayIn',index:'TenMayIn', width:"15%", editable:true,align:'left',hidden:false,editrules: {required:true},formatter:"select",edittype:"select",editoptions: { value: window.prints},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;'+window.prints},formoptions:{ rowpos:5, colpos:1, elmsuffix:'<a id="add_new" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>' }}, 
			
			{name:'KieuIn',index:'KieuIn', width:"7%", editable:true,align:'center',hidden:false,edittype:"select",formatter:'select',formoptions:{ rowpos:6, colpos:1},editoptions: {value:"0:In dọc;1:In ngang"},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:In ngang;0:In dọc'}},
			{name:'SoluongBanIn',index:'SoluongBanIn', width:"10%", editable:true,align:'center',hidden:true,edittype:"text",formoptions:{ rowpos:7, colpos:1}, editrules:{number:true},editoptions:{defaultValue:'1'}},	
			{name:'margin',index:'margin', width:"5%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:8, colpos:1},editoptions:{defaultValue:'1,1,1,1'}}, 
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
		sortname: 'ID_QuocTich',
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
		caption: "Cấu hình máy in"
	});	
	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",bCancel: "Cancel"}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeAfterEdit:true,closeOnEscape : true,modal: true,recreateForm: true,
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
					number_textbox("#SoluongBanIn");
					number_textbox("#height");
					number_textbox("#width");
				},
				afterShowForm : function (formid) {
					xuongdong(formid);
					lendong(formid);					
					autocompleted_combobox("#TenReport");
					autocompleted_combobox("#TenMayIn");
					autocompleted_combobox("#KieuIn"); 				 
					
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:true,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
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
					//temp = String(response.responseText).split(";");					 					
//					$("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));
//					$("#"+$.trim(temp[1]+"> td")).trigger("click");					
//					window.id_rowed3++; 
					$('#rowed3').setGridParam({datatype: 'json'}).trigger("reloadGrid");
					//$("#rowed3").jqGrid("setSelection",temp[1], true);
				
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
					 number_textbox("#SoluongBanIn");
					 number_textbox("#height");number_textbox("#width");				 
				},									 
			 	afterShowForm : function (formid) {									
					$("#TenMay").val($.cookie("domain"));
					$("#UserWindowName").val($.cookie("username_window"));
					$("#IPMay").val('<?php echo $_SERVER['REMOTE_ADDR']; ?>')
					autocompleted_combobox("#TenReport");
					autocompleted_combobox("#TenMayIn");
					autocompleted_combobox("#KieuIn");	
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
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tạo cấu hình tự động", buttonicon: 'ui-icon-bookmark',id : 'cauhinh_rowed3',
            onClickButton: function() {
				
				 $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=taocauhinh&domain='+$.cookie("domain")+'&TenMay='+$.cookie("username_window")).done(function(){
					
					 
					 tooltip_message("Thành công");
					 })
            },
            title: "Tạo cấu hình tự động",
            position: "last"
    });		
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tải lại", buttonicon: 'ui-icon-refesh',id : 'refreshrowed3',
            onClickButton: function() {
				//$('#rowed3').trigger('reloadGrid')
				//$("#rowed3").jqGrid().setGridParam({datatype:'json'}).trigger("reloadGrid");	   
				$('#rowed3').setGridParam({datatype: 'json'}).trigger("reloadGrid");	
            },
            title: "Tải lại",
            position: "last"
    });			  
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-150);
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

function load_select(){ 
	// if ($.cookie("printers")=="win"){
		//$.cookie("printers","")
		_prints=$.cookie("printers").split("::");
	 //}else{
		// alert ($.cookie("printers"))
	// }
	for(i=0;i<_prints.length;i++){ 
		window.prints+=_prints[i]+":"+_prints[i]+";";
	}
	window.prints=window.prints.replace("undefined","");
	window.prints=window.prints.replace(";:;","");
	//window.prints=window.prints.replace(/ /g,"_");	  
	window.province = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=ReportsList&id=ReportName&name=Description', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	//alert(province);
}

//function load_select1(){
//	window.province1 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=ReportsList&id=ReportName&name=Description', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục quốc tịch');}}).responseText;	
//	//$("#rowed3").setColProp('ID_QuanHuyen', { editoptions: { value: xaphuong} });
//	//$('#ID_QuanHuyen').empty();
//	//create_select("#ID_QuanHuyen",xaphuong);
//	tam = window.province.split(';');
//	tam1 = window.province1.split(';');
//	count=tam.length-1;
//	count1=tam1.length-1;
//	last = tam[count].split(':');
//	last1 =tam1[count1].split(':');
//	if(last1[0]==last[0]){		
//	}else{
//		$("#rowed3").setColProp('ID_QuocTich', { editoptions: { value: province1} });
//		$('#ID_QuanHuyen').empty();
//		create_select("#ID_ThanhPho",province1);
//		if(last1>last){
//		$('#ID_ThanhPho1').val(last1[1]);
//		$('#ID_ThanhPho').val(last1[0]);
//		window.province=window.province1
//		}
//	}
//}
</script>