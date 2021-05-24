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
		//load_select();
		//load_select1();
	var lastsel;
	 window.provincez=":;"+window.province;
	create_grid();
	shortcut_key();
	jQuery(window).resize(function() {
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-150);
	});
	//phanquyen();
})

function create_grid(){
if(permission['quyenxemfullreport']==1){
	var quyenxemfullreport=1
}else{
	 quyenxemfullreport=0
}

	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data&quyenxemfullreport='+quyenxemfullreport,
		datatype: "json",
		colNames:['Id_auto','TenCauHinh','GiaTri','Ghichu','IsHeThongGlobal'],
		colModel:[
			{name:'Id_auto',index:'Id_auto',search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'TenCauHinh',index:'TenCauHinh', width:"20%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:1, colpos:1}},
			{name:'GiaTri',index:'GiaTri', width:"10%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:2, colpos:1}},
			{name:'Ghichu',index:'Ghichu', width:"25%", editable:true,align:'left',hidden:false,editrules: {required:true},formatter:"text",edittype:"text",},
			{name:'IsHeThongGlobal',index:'UserWindowName', width:"10%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"checkbox",editoptions: {value: "1:0",defaultValue:'1'}},

					],
	//

		loadonce: true,
		scroll: false,

		modal:true,
		pager: '#prowed3',
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'Id_auto',
		height:100,
		width: 100,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
      //  cellEdit: true,
   //     cellsubmit: 'remote',
   //     cellurl : 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_chuandoan',
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
		caption: "Cấu hình chấm công"
	});

	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search

	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options
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
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=3',closeOnEscape : true,closeAfterAdd:true,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
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
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){
				}*/ // search options
		} // search options

	);
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

function load_select1(){
	window.province1 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=ReportsList&id=ReportName&name=Description', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục quốc tịch');}}).responseText;
	//$("#rowed3").setColProp('ID_QuanHuyen', { editoptions: { value: xaphuong} });
	//$('#ID_QuanHuyen').empty();
	//create_select("#ID_QuanHuyen",xaphuong);
	tam = window.province.split(';');
	tam1 = window.province1.split(';');
	count=tam.length-1;
	count1=tam1.length-1;
	last = tam[count].split(':');
	last1 =tam1[count1].split(':');
	if(last1[0]==last[0]){
	}else{
		$("#rowed3").setColProp('ID_QuocTich', { editoptions: { value: province1} });
		$('#ID_QuanHuyen').empty();
		create_select("#ID_ThanhPho",province1);
		if(last1>last){
		$('#ID_ThanhPho1').val(last1[1]);
		$('#ID_ThanhPho').val(last1[0]);
		window.province=window.province1
		}
	}
}
</script>