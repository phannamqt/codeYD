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
	#parent1{
	max-width: 266px;

}
</style>
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
	window.kiemtrasearch = true;
	  window.nationz=":;"+window.nation;
	  window.nationz2=":;"+window.nation2;
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			eventer(messageEvent,function(e) {			 
			  if(e.data=='table'){
				 alert("chinh")
			  }			  
			},false);


	var lastsel; 	
	
	create_grid();	
	shortcut_key();		

		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-30);
	 $("#rowed3").setGridHeight($(window).height()-150);
	});		
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Excel", buttonicon: 'ui-icon-calculator', id : 'search_rowed3',
            onClickButton: function() {			 
				window.open('pages.php?module=report&view=danhmuc&action=in_danh_muc_chuc_vu&id_form=a&type=excel');
            },
            title: "Xuất ra file Excel",
            position: "last"
    })	// BUTTON "export Excel"	
		 
		
})
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_goikham',
		datatype: "json",	
		colNames:['Id','Công ty khách hàng','Tên đợt khám','Gói khám','Ngày bắt đầu','Ngày kết thúc','Chiết khấu','Ghi chú','Người tạo','Ngày giờ tạo','Hủy'],
		colModel:[
			{name:'ID_GoiKhamChoCongTy',index:'ID_GoiKhamChoCongTy',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'ID_KhachHangCTy',index:'ID_KhachHangCTy', width:"15%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select', searchoptions:{sopt: ['eq', 'ne'],value:nationz2},editoptions: { value: nation2},formoptions:{ rowpos:2, colpos:1, elmsuffix:'<a id="add_new" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}}, 
			{name:'TenDotKham',index:'TenDotKham', width:"15%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
			{name:'ID_GoiKham',index:'ID_GoiKham', width:"15%", editable:true,align:'left',hidden:false,formatter:"select",edittype:"select",stype: 'select', searchoptions:{sopt: ['eq', 'ne'],value:nationz},editoptions: { value: nation},formoptions:{ rowpos:1, colpos:2, elmsuffix:'<a id="add_new2" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}}, 
			{name:'NgayBatDau',index:'NgayBatDau', width:"15%", editable:true,align:'center',editoptions: {dataInit: function(element) {$(element).datepicker({dateFormat: $.cookie("ngayJqueryUi")})}},hidden:false,edittype:"text",formoptions:{ rowpos:2, colpos:2}},	 
			{name:'NgayKetThuc',index:'NgayKetThuc', width:"15%", editable:true,align:'center',editoptions: {dataInit: function(element) {$(element).datepicker({dateFormat: $.cookie("ngayJqueryUi")})}},hidden:false,edittype:"text",formoptions:{ rowpos:3, colpos:1}},	 
			{name:'ChietKhau',index:'ChietKhau', width:"10%", editable:true,align:'center',hidden:false,edittype:"text",formatter:"integer",formoptions:{ rowpos:3, colpos:2}},	 
			{name:'GhiChu',index:'GhiChu', width:"20%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:4, colpos:1}},
			{name:'NguoiTao',index:'NguoiTao', width:"15%", editable:true,align:'center',hidden:false,edittype:"select",formatter:"select",editoptions:{ value: hoten,defaultValue: <?php echo($_SESSION["user"]["id_user"])?> },formoptions:{ rowpos:4, colpos:2}},	 			
			{name:'NgayGioTao',index:'NgayGioTao', width:"15%", editable:true,align:'center',editoptions: {defaultValue: '<?php echo date($_SESSION["config_system"]["ngaythang"])?>',dataInit: function(element) {$(element).datepicker({dateFormat: 'dd-mm-yy'})}},hidden:false,edittype:"text",formoptions:{ rowpos:5, colpos:1}},	 
			{name:'IsCancelled',index:'IsCancelled', width:"4%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:5, colpos:2},editoptions: {value:"1:0"},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}}
		],
	

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
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: true,
		groupingView : {
   		groupField : ['ID_KhachHangCTy'],
		groupColumnShow: [true],
		groupCollapse: true
   	},
		
		stringResult:true,	
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			$('#rowed3').jqGrid('setGridParam', {loadonce: true})
			grid_filter_enter("#rowed3") ;//enter: chuyen con tro sang o tiếp theo
			if(typeof(window.ID_KhachHangCTy1)!="undefined"){			 
				tam='rowed3ghead_0_'+window.ID_KhachHangCTy1
				jQuery('#rowed3').jqGrid('groupingToggle',tam)	
				jQuery('#rowed3').jqGrid("setSelection",window.id_return, true);	
				jQuery('#rowed3'+window.id_return).focus();
				
				 
			}
		},	 
		caption: "Gói khám chương trình cho công ty"
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
					number_textbox("#ChietKhau");
					$('#NguoiTao', formid).attr("disabled","disabled");
					$('#NgayGioTao', formid).attr("disabled","disabled");
												  
				},
				afterShowForm : function (formid) {						
					autocompleted_combobox("#ID_KhachHangCTy");
					autocompleted_combobox("#ID_GoiKham");
					
					
					xuongdong(formid);
					lendong(formid);					
					$("#add_new2").click(function(e){
					   $.post('pages.php?module=web_services&function=get_link&action=index&folder=danh_muc_goikham:').done(function(data) {
					  elem=1 + Math.floor(Math.random() * 1000000000);
					   width=90;
						  height=90;
					  var folder= data.split(';');
					  var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];				  				  
						dialog_add_dm("",width,height,elem,links,load_select1);   
				  		})
					 });
					  $("#add_new").click(function(e){
					   $.post('pages.php?module=web_services&function=get_link&action=index&folder=danh_muc_ctykhachhang:').done(function(data) {
					  elem=1 + Math.floor(Math.random() * 1000000000);
					   width=90;
						  height=90;
					  var folder= data.split(';');
					  var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];				  				  
						dialog_add_dm("",width,height,elem,links,load_select2);   
				  		})
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
					$("#"+$.trim(temp[1])).trigger("click");					
					window.id_rowed3++; 
					window.id_return=$.trim(temp[1]);
                    window.ID_KhachHangCTy1 = $('#ID_KhachHangCTy :selected').index();  
					$('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');
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
					 number_textbox("#ChietKhau");	
                    $('#NguoiTao', formid).attr("disabled","disabled");
					$('#NgayGioTao', formid).attr("disabled","disabled");	 
				},									 
			 	afterShowForm : function (formid) {					
					autocompleted_combobox("#ID_KhachHangCTy");
					autocompleted_combobox("#ID_GoiKham");
					xuongdong(formid);
					lendong(formid);			 
					$("#add_new2").click(function(e){
					   $.post('pages.php?module=web_services&function=get_link&action=index&folder=danh_muc_goikham:').done(function(data) {
					  elem=1 + Math.floor(Math.random() * 1000000000);
					   width=90;
						  height=90;
					  var folder= data.split(';');
					  var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];				  				  
						dialog_add_dm("",width,height,elem,links,load_select1);   
				  		})
					 });
					 $("#add_new").click(function(e){
					   $.post('pages.php?module=web_services&function=get_link&action=index&folder=danh_muc_ctykhachhang:').done(function(data) {
					  elem=1 + Math.floor(Math.random() * 1000000000);
					   width=90;
						  height=90;
					  var folder= data.split(';');
					  var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];				  				  
						dialog_add_dm("",width,height,elem,links,load_select2);   
				  		})
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
		} // del options					 
							  
	);	 					  
	 $("#rowed3").setGridWidth($(window).width()-30);
	 $("#rowed3").setGridHeight($(window).height()-150);
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
	window.nation22 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_KhachHangLaCTy&id=ID_KhachHangCTy&name=TenCTy', async: false, success: function(data, result) {if (!result) alert('Không load được');}}).responseText;	
	tam = window.nation2.split(';');
	tam1 = window.nation22.split(';');
	count=tam.length-1;
	count1=tam1.length-1;
	last = tam[count].split(':');
	last1 =tam1[count1].split(':');
	if(last1[0]==last[0]){		
	}else{
		$("#rowed3").setColProp('ID_KhachHangCTy', { editoptions: { value: nation22} });
		$('#ID_KhachHangCTy').empty();
		create_select("#ID_KhachHangCTy",nation22);
		if(last1>last){
		$('#ID_KhachHangCTy1').val(last1[1]);
		$('#ID_KhachHangCTy').val(last1[0]);
		window.nation2=window.nation22
		}
	}
}

function load_select1(){
	window.nation1 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GoiKham&id=ID_GoiKham&name=TenGoiKham', async: false, success: function(data, result) {if (!result) alert('Không load được');}}).responseText;	
	tam = window.nation.split(';');
	tam1 = window.nation1.split(';');
	count=tam.length-1;
	count1=tam1.length-1;
	last = tam[count].split(':');
	last1 =tam1[count1].split(':');
	if(last1[0]==last[0]){		
	}else{
		$("#rowed3").setColProp('ID_GoiKham', { editoptions: { value: nation1} });
		$('#ID_QuanHuyen').empty();
		create_select("#ID_GoiKham",nation1);
		if(last1>last){
		$('#ID_GoiKham1').val(last1[1]);
		$('#ID_GoiKham').val(last1[0]);
		window.nation=window.nation1
		}
	}
}

function load_select(){
	window.nation = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GoiKham&id=ID_GoiKham&name=TenGoiKham', async: false, success: function(data, result) {if (!result) alert('Không load được');}}).responseText;	
	window.nation2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_KhachHangLaCTy&id=ID_KhachHangCTy&name=TenCty', async: false, success: function(data, result) {if (!result) alert('Không load được');}}).responseText;	
	window.hoten = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_hovaten&action=index", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText; //alert(hoten);	
}

</script>
