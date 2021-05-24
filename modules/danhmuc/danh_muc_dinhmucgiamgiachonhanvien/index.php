<!--
--- =============================================
-- Author:		<Phan Nam>
-- Create date: <14/11/13>
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
<input type="hidden" id="_chon" value="" >
	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>    
            
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	window.id_loaiquota=='';
	 load_select();
	 load_select2();
	var lastsel; 	
	window.quota1=":;"+window.quota2;
	window.hoten1=":;"+window.hoten2;
	create_grid();	
	shortcut_key();	
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_dinh_muc_giam_gia_cho_nhan_vien").height()-150);
	});

phanquyen();
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
	
 
 
 
function create_grid(){	
	//alert(window.hoten);
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dinhmucgiamgiachonhanvien',
		datatype: "json",	
		colNames:['Id','Họ tên nhân viên','NickName','Phòng ban','Gói giảm giá','Ngày bắt đầu','Ngày kết thúc','Số tiền','Số tiền bổ sung','Giới hạn 1 ngày','Giới hạn ngày/BN','Giới hạn 1 tháng','Giới hạn 1 năm','Số tiền còn lại','Loại','Áp dụng','Ghi chú'],
		colModel:[
			{name:'ID_QuotaNV',index:'ID_QuotaNV',search:false, width:"100%", editable:false,align:'right',hidden:true}, 
			{name:'ID_NhanVien', stype: 'select',search:false,searchoptions: { sopt: ['eq', 'ne'],value:hoten},index:'ID_NhanVien', width:"170%", editable:true,align:'left',hidden:false,editrules: {required:true},formatter:"select",edittype:"select",editoptions: { value: hoten},formoptions:{ rowpos:1, colpos:1, elmsuffix:'<a id="add_new" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>' }, frozen:true}, 
			{name:'NickName',index:'NickName',search:true, width:"60%", editable:false,align:'left',hidden:false}, 
			{name:'PhongBan',index:'PhongBan',search:true, width:"70%", editable:false,align:'left',hidden:false}, 
			{name:'ID_QuotaGiamGia', stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:quota},index:'ID_QuotaGiamGia', width:"100%", editable:true,align:'center',hidden:false,editrules: {required:true},formatter:"select",edittype:"select",editoptions: { value: quota ,
			dataEvents: [
                      {  type: 'change keyup',
                         fn: function(e) {
							// tooltip_message("Test dữ liệu");
                            //$('input#Job_Number').val(this.value);
                         }
                      }
                   ]}
				   ,formoptions:{ rowpos:2, colpos:1, elmsuffix:'<a id="add_new2" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>' }}, 
			
			{name:'NgayBatDau',index:'NgayBatDau', width:"70%", editable:true,align:'center',editoptions: {dataInit: function(element) {$(element).datepicker({dateFormat: $.cookie("ngayJqueryUi")})}},hidden:false,edittype:"text",formoptions:{ rowpos:3, colpos:1},editrules: {required:true}},	 
			{name:'NgayKetThuc',index:'NgayKetThuc', width:"70%", editable:true,align:'center',editoptions: {dataInit: function(element) {$(element).datepicker({dateFormat: $.cookie("ngayJqueryUi")})}},hidden:false,edittype:"text",formoptions:{ rowpos:4, colpos:1},editrules: {required:true}},	 
			{name:'SoTien',index:'SoTien', width:"70%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:5, colpos:1}},	 
			{name:'SoTienBoSung',index:'SoTienBoSung', width:"70%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:6, colpos:1}},	 
			{name:'Max1Day',index:'Max1Day', width:"70%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:7, colpos:1}},	 
			{name:'Max1DayOfPatient',index:'Max1DayOfPatient', width:"70%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:8, colpos:1}},	 
			{name:'Max1Month',index:'Max1Month', width:"70%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:9, colpos:1}},	 
			{name:'Max1Year',index:'Max1Year', width:"70%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:10, colpos:1}},	 
			{name:'SoTienConLai',index:'SoTienConLai', width:"70%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:11, colpos:1}},	 
			{name:'LoaiQuota',index:'LoaiQuota', width:"90%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có giới hạn;0:Không giới hạn'}, editable:true,align:'center',hidden:false,edittype:"select",formatter:"select",formoptions:{ rowpos:13, colpos:1},editoptions: {value:"1:Có giới hạn;0:Không giới hạn"},editrules: {required:true}},	
			{name:'IsUsing',index:'IsUsing', width:"40%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:14, colpos:1},editoptions: {value:"1:0"}},
			{name:'GhiChu',index:'GhiChu', width:"150%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:12, colpos:1}},	 
				
			

		],
		
		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_QuotaNV',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:false,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
		serializeRowData: function (postdata) { 		 	
		},
		onSelectRow: function(id){		  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed3");	

					
		},	  
		caption: "CẤU HÌNH QUOTA"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=1',closeOnEscape : true,modal: true,recreateForm: true,
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
					number_textbox("#SoTienBoSung");
					number_textbox("#Max1Day");
					number_textbox("#Max1DayOfPatient");
					number_textbox("#Max1Month");
					number_textbox("#Max1Year");
					number_textbox("#SoTienConLai");

					
												  
				},
				afterShowForm : function (formid) {
					window.chon_edit=0;
					window.id_loaiquota='';
					autocompleted_combobox("#ID_NhanVien");
					autocompleted_combobox("#ID_QuotaGiamGia");
					autocompleted_combobox("#LoaiQuota");
					xuongdong(formid);
					lendong(formid);	
					$(".ui-corner-all").click(function() {
						window.chon_edit=1;
						});
					$("#ID_QuotaGiamGia1").click(function() {
						window.chon_edit=1;
						});
					$("#cData").click(function() {
						window.chon_edit=1;
						});
					
					$( "#ID_QuotaGiamGia1" ).focus(function() {
						setTimeout(function(){
							if(window.id_loaiquota==''){
								window.id_loaiquota=$("#ID_QuotaGiamGia").val();
							}
							//console.log(window.id_loaiquota+'!='+$("#ID_QuotaGiamGia").val());
							if(window.id_loaiquota!=$("#ID_QuotaGiamGia").val()){
								window.id_loaiquota=$("#ID_QuotaGiamGia").val();
								window.chon_edit=0;
							  $.post( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_quota", { tenquota:$('#ID_QuotaGiamGia1').val(),idquota:$('#ID_QuotaGiamGia').val() })
								  .done(function( data ) {
									window.rs=jQuery.parseJSON(data);
									for (var i=0;i<rs.length;i++){
										$('#SoTien').val(rs[i]["SoTien"]);
										$('#SoTienBoSung').val(0);
										$('#Max1Day').val(rs[i]["Max1Day"]);
										$('#Max1DayOfPatient').val(rs[i]["Max1DayOfPatient"]);
										$('#Max1Month').val(rs[i]["Max1Month"]);
										$('#Max1Year').val(rs[i]["Max1Year"]);
										$('#SoTienConLai').val(rs[i]["SoTien"]);
										$('#GhiChu').val(rs[i]["GhiChu"]);
										
										$( "#NgayBatDau" ).datepicker("setDate", new Date());
										var actualDate = new Date();
										var newDate = new Date(actualDate.getFullYear(), actualDate.getMonth()+rs[i]["SoThangSuDung"], actualDate.getDate());
										$( "#NgayKetThuc" ).datepicker("setDate", newDate);
									}
								});
							}
						},200)
						
					});	
					//enter event
					/*$('#ID_QuotaGiamGia1').bind("enterKey",function(e){
						if($("#_chon").val()==1){
							$.post( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_quota", { tenquota:$('#ID_QuotaGiamGia1').val() })
							  .done(function( data ) {
								window.rs=jQuery.parseJSON(data);
								for (var i=0;i<rs.length;i++){
									$('#SoTien').val(rs[i]["SoTien"]);
									$('#SoTienBoSung').val(0);
									$('#Max1Day').val(rs[i]["Max1Day"]);
									$('#Max1DayOfPatient').val(rs[i]["Max1DayOfPatient"]);
									$('#Max1Month').val(rs[i]["Max1Month"]);
									$('#Max1Year').val(rs[i]["Max1Year"]);
									$('#SoTienConLai').val(rs[i]["SoTien"]);
									$('#GhiChu').val(rs[i]["GhiChu"]);
									
									$( "#NgayBatDau" ).datepicker("setDate", new Date());
									var actualDate = new Date();
									var newDate = new Date(actualDate.getFullYear(), actualDate.getMonth()+rs[i]["SoThangSuDung"], actualDate.getDate());
									$( "#NgayKetThuc" ).datepicker("setDate", newDate);
								
									
								}
								
							});
						}
					});*/
					$('#ID_QuotaGiamGia1').keyup(function(e){
						//alert();
						if(e.keyCode == 13)
						{
						  $(this).trigger("enterKey");
						  //alert();
						}
					});
					/*					
					$("#add_new").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_nhan_vien&id_form=33&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;     
					  dialog_add_dm("Danh mục nhân viên",width,height,elem,links,load_select1); 
					 })
					 */
					 
					 $("#add_new").click(function(e){
						   $.post('pages.php?module=web_services&function=get_link&action=index&folder=danh_muc_nhan_vien:').done(function(data) {
						  elem=1 + Math.floor(Math.random() * 1000000000);
						   width=90;
							  height=90;
						  var folder= data.split(';');
						  var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];				  				  
							dialog_add_dm("Danh mục nhân viên",width,height,elem,links,load_select1);   
							})
						  
					}) // đổi tên folder thành tên view của danh mục // giữ nguyên dấu :
					
					$("#add_new2").click(function(e){
						   $.post('pages.php?module=web_services&function=get_link&action=index&folder=danh_muc_dinhmucgiamgia:').done(function(data) {
						  elem=1 + Math.floor(Math.random() * 1000000000);
						   width=90;
							  height=90;
						  var folder= data.split(';');
						  var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];				  				  
							dialog_add_dm("Danh mục định mức giảm giá",width,height,elem,links,load_select1);   
							})
						  
					}) // đổi tên folder thành tên view của danh mục // giữ nguyên dấu :
							
					 /*
					 $("#add_new2").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_dinhmucgiamgia&id_form=60&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;   
					  				  
					  dialog_add_dm("Danh mục định mức giảm giá",width,height,elem,links,load_select3); 
					 }) 	*/
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=1',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
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
					number_textbox("#SoTien");
					number_textbox("#SoTienBoSung");
					number_textbox("#Max1Day");
					number_textbox("#Max1DayOfPatient");
					number_textbox("#Max1Month");
					number_textbox("#Max1Year");
					number_textbox("#SoTienConLai");
									 
				},									 
			 	afterShowForm : function (formid) {					
					autocompleted_combobox("#ID_NhanVien");
					autocompleted_combobox("#ID_QuotaGiamGia");
					autocompleted_combobox("#LoaiQuota");
					xuongdong(formid);
					lendong(formid);
				
					
					 $("#add_new").click(function(e){
						   $.post('pages.php?module=web_services&function=get_link&action=index&folder=danh_muc_nhan_vien:').done(function(data) {
						  elem=1 + Math.floor(Math.random() * 1000000000);
						   width=90;
							  height=90;
						  var folder= data.split(';');
						  var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];				  				  
							dialog_add_dm("Danh mục nhân viên",width,height,elem,links,load_select1);   
							})
						  
					}) // đổi tên folder thành tên view của danh mục // giữ nguyên dấu :
					
					$("#add_new2").click(function(e){
						   $.post('pages.php?module=web_services&function=get_link&action=index&folder=danh_muc_dinhmucgiamgia:').done(function(data) {
						  elem=1 + Math.floor(Math.random() * 1000000000);
						   width=90;
							  height=90;
						  var folder= data.split(';');
						  var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];				  				  
							dialog_add_dm("Danh mục định mức giảm giá",width,height,elem,links,load_select1);   
							})
						  
					}) // đổi tên folder thành tên view của danh mục // giữ nguyên dấu :

					$(".ui-corner-all").click(function() {
						window.chon_add=1;
						});
					$("#ID_QuotaGiamGia1").click(function() {
						window.chon_add=1;
						});
					$("#cData").click(function() {
						window.chon_add=0;
						});
					
					$( "#ID_QuotaGiamGia1" ).focus(function() {
						setTimeout(function(){
							if(window.id_loaiquotadd!=$("#ID_QuotaGiamGia").val()){
								window.id_loaiquotadd=$("#ID_QuotaGiamGia").val();
								window.chon_add=0;
							  $.post( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_quota", { tenquota:$('#ID_QuotaGiamGia1').val(),idquota:$('#ID_QuotaGiamGia').val() })
								  .done(function( data ) {
									window.rs=jQuery.parseJSON(data);
									for (var i=0;i<rs.length;i++){
										$('#SoTien').val(rs[i]["SoTien"]);
										$('#SoTienBoSung').val(0);
										$('#Max1Day').val(rs[i]["Max1Day"]);
										$('#Max1DayOfPatient').val(rs[i]["Max1DayOfPatient"]);
										$('#Max1Month').val(rs[i]["Max1Month"]);
										$('#Max1Year').val(rs[i]["Max1Year"]);
										$('#SoTienConLai').val(rs[i]["SoTien"]);
										$('#GhiChu').val(rs[i]["GhiChu"]);
										
										$( "#NgayBatDau" ).datepicker("setDate", new Date());
										var actualDate = new Date();
										var newDate = new Date(actualDate.getFullYear(), actualDate.getMonth()+rs[i]["SoThangSuDung"], actualDate.getDate());
										$( "#NgayKetThuc" ).datepicker("setDate", newDate);
									}
								});
							}
						},200);
					});	

					$('#ID_QuotaGiamGia1').keyup(function(e){
						//alert();
						if(e.keyCode == 13)
						{
						  $(this).trigger("enterKey");
						  //alert();
						}
					});
							
			 	},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");					
				}
		}, // add options							  
		{reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,beforeShowForm : function(formid) {canhgiua_del(formid);},	
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
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_dinh_muc_giam_gia_cho_nhan_vien").height()-150);
	
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

		$("#rowed3").jqGrid('setFrozenColumns');

		
}
function load_select1(){
	window.hoten2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_hovaten&action=index', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	
	$("#rowed3").setColProp('ID_NhanVien', { editoptions: { value: hoten2} });
	$('#ID_NhanVien').empty();
	create_select("#ID_NhanVien",hoten2);
}
function load_select3(){
	window.quota2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=QuotaGiamGia&id=ID_QuotaGiamGia&name=TenQuotaGiamGia', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục quota giảm giá');}}).responseText;	
	
	tam = window.quota.split(';');
	tam1 = window.quota2.split(';');
	count=tam.length-1;
	count1=tam1.length-1;
	last = tam[count].split(':');
	last1 =tam1[count1].split(':');
	if(last1[0]==last[0]){		
	}else{

		if(last1>last){
		$('#ID_QuotaGiamGia1').val(last1[1]);
		$('#ID_QuotaGiamGia').val(last1[0]);
		window.quota=window.quota2
		//alert(window.quota);
		}
	}
}


function load_select(){

	window.hoten = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_hovaten&action=index", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	//alert(window.hoten);
}
function load_select2(){
	window.quota=':;';
	window.quota += $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=QuotaGiamGia&id=ID_QuotaGiamGia&name=TenQuotaGiamGia', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục quota giảm giá');}}).responseText;	
		
}
function demicalFmatter (cellvalue, options, rowObject)
{
   // do something here
   return parseFloat(cellvalue).formatMoney(0, '.', ','); 
   //return convert_comma_dot(cellvalue);
}
</script>