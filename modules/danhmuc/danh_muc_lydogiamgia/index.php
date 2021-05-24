<!--
--- =============================================
-- Author:		<Phạm Thị Phương Thảo>
-- Create date: <18/11/2013>
-- Description:	<Description,,>
-- =============================================
-->
<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
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
	window.lydokhac1=":;"+window.lydokhac;	
	create_grid();	
	shortcut_key();		

		
		//$('#prowed3_center table tr').append("<td>Phis</td>");
		
		 
		
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
	
 
 
 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_lydogiamgia',
		datatype: "json",	
		colNames:['Id','Lý do giảm giá','Lý do khác','Ghi chú','Sử dụng'],
		colModel:[
			{name:'ID_LyDoGiamGia',index:'ID_LyDoGiamGia',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'LyDoGiamGia',index:'LyDoGiamGia', width:"15%", editable:true,align:'letf',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
			{name:'ID_LyDoGiamGia_Parent',index:'ID_LyDoGiamGia_Parent',formatter:"select",edittype:"select",editoptions: { value: lydokhac}, width:"15%", editable:true,align:'center',hidden:false,stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:lydokhac1},formoptions:{ rowpos:2, colpos:1, elmsuffix:'<class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  >'}}, 
			{name:'GhiChu',index:'GhiChu', width:"4%", editable:true,align:'center',hidden:false,edittype:"text",formoptions:{ rowpos:3, colpos:1}},	
			{name:'Active',index:'Active', width:"4%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:4, colpos:1},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'},editoptions: {value:"1:0"}},	
			],
	//

		loadonce: true,
		scroll: 1, 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		sortname:'ID_NhomTemplate',
		sortorder:'',
		rowList:[],
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		sortorder: "asc",
		
		
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
			//grid_filter_enter("#rowed3");
		},	  
		caption: "Danh mục lý do giảm giá"
	});	
	//$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
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
					autocompleted_combobox("#ID_LyDoGiamGia_Parent");	
					xuongdong(formid);
					lendong(formid);					
					//$("#add_new").click(function(e){					  
					//  links='pages.php?module=danhmuc&view=danh_muc_thuoc&id_form=47&id_loai=undefined';
					//  elem=1 + Math.floor(Math.random() * 1000000000); 
					//  width=90;
					// height=90;     					
					// dialog_add_dm("Danh mục loại khám",width,height,elem,links,load_select1);   
					//}) 
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
						 window.id_rowed3=2;
					}
					var success=true;
					var new_id="";
					return [success,new_id];					  
				},
				beforeShowForm: function(formid) {					 
					 canhgiua(formid);					 
				},									 
			 	afterShowForm : function (formid) {					
					autocompleted_combobox("#ID_LyDoGiamGia_Parent");
					xuongdong(formid);
					lendong(formid);	
					//$("#add_new").click(function(e){
					//  links='pages.php?module=danhmuc&view=danh_muc_thuoc&id_form=47&id_loai=undefined';
					//  elem=1 + Math.floor(Math.random() * 1000000000); 
					//  width=90;
					//  height=90;     
					// dialog_add_dm("Danh mục loai kham",width,height,elem,links,load_select1);
					 
					// })
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
	$("#rowed3").setGridWidth($(window).width()-15);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-100);
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
	window.lydokhac = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_LyDoGiamGia&id=ID_LyDoGiamGia&name=LyDoGiamGia', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	$("#rowed3").setColProp('ID_LyDoGiamGia_Parent', { editoptions: { value: lydokhac} });
	$('#ID_LyDoGiamGia_Parent').empty();
	create_select("#ID_LyDoGiamGia_Parent",lydokhac);
	
}

function load_select(){
	window.lydokhac = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_LyDoGiamGia&id=ID_LyDoGiamGia&name=LyDoGiamGia', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	
}

</script>