<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->

<style>
#parent1,#OpenType1, #TenControl1,#ID_Form1{
	max-width: 266px;

}
#rowed3 td,#rowed4 td,#rowed5 td{

        font-size:11px!important;
    }

#dialog_dm_nhomnguoidung {
			/*
			 *	THIS HACK FIXES A DIALOG BOX POSITIONING BUG
			 *	prevents incorrect top/left values that are applied from taking effect
			 *	This page now uses a patched version of UI 1.8.1, so this hack no longer required
			 *	SEE UI Ticket #5662 - http://dev.jqueryui.com/ticket/5662#comment:3
			top:		0 !important;
			left:		0 !important;
			 */
			/* background:	#AFA; DEBUGGING */
			position:	relative;
			}

</style>
<body>
	<div id="grid_phong_ban">
      <div id="prowed3"></div>
     <table id="rowed3" ></table>

    </div>

    <div id="dialog_dm_nhomnguoidung"  >

             <div style="display:table-cell">
                    <table id="rowed4"></table>
                    <div id="prowed4"></div>
            </div>
            <div id='center' style="display:table-cell;vertical-align: middle" >
            <a style="margin-left:0px;width:58px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="coquyen" href="#">Thêm<span  class="ui-icon ui-icon-circle-arrow-e"></span></a>
            <a style="margin-left:0px;width:58px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="kocoquyen" href="#">Xóa<span  class="ui-icon ui-icon-circle-arrow-w"></span></a>
            </div>


            <div style="display:table-cell">
                    <table id="rowed5" >	</table>
                   <!--/* <div id="prowed5"></div>*/-->
            </div>
            <div >
             <a style=" margin-left:600px;width:58px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="luu" href="#">Lưu  <span  class="ui-icon  ui-icon-circle-check"></span></a>
            </div>
        </div>


</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function() {




$('#coquyen').click(function(e){

	 row= jQuery("#rowed4").jqGrid('getGridParam','selarrrow');
	  for(i=0;i<row.length;i++){
		var rowData = jQuery('#rowed4').jqGrid ('getRowData', row[i]);
		parameters =
								{

									initdata : rowData,
									position :"last",
									useDefValues : false,
									useFormatter : false,
									addRowParams : {extraparam:{}}
								}

			jQuery("#rowed5").jqGrid('addRow',parameters);
			jQuery("#rowed4").jqGrid('delRowData', row[i]);
			i--;
			$('#rowed5').setGridParam({loadonce: true}).trigger('reloadGrid');
	  }

	})
$('#kocoquyen').click(function(e){

 row= jQuery("#rowed5").jqGrid('getGridParam','selarrrow');
	  for(i=0;i<row.length;i++){
		var rowData = jQuery('#rowed5').jqGrid ('getRowData', row[i]);
		parameters =
								{

									initdata : rowData,
									position :"last",
									useDefValues : false,
									useFormatter : false,
									addRowParams : {extraparam:{}}
								}

			jQuery("#rowed4").jqGrid('addRow',parameters);
			jQuery("#rowed5").jqGrid('delRowData', row[i]);
			i--;
			 $('#rowed4').setGridParam({loadonce: true}).trigger('reloadGrid');
	  }

})

//Lưu bảng có quyền------------------------

$('#luu').click(function(e){
var tam=jQuery("#rowed5").jqGrid('getRowData');
tam=JSON.stringify(tam) ;
tam='{"id":'+tam+'}';
tam=jQuery.parseJSON(tam)
	  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=save_quyen&id='+id_sel,tam);

//	 alertObject(tam)
	  tooltip_message("Lưu dữ liệu thành công");
	})

//-------------------------------------------------------------
					$("#dialog_dm_nhomnguoidung").dialog({

					autoOpen:false,
					height:Math.floor($('body').height()  * .70),
					width:Math.floor($('body').width() * .95),



					modal:false,
					title:'Phân quyền nhóm người dùng',
					stack: true,
					open: function(event, ui){

					},

					});


	//load_phong_ban();
	create_nhomquyennhanvien('[]');
	create_nhomquyencontrol('[]');

	 $('#gbox_rowed4 .ui-search-table').find(':input[type=text]').each(function(){

 	  $("#"+this.id).focusin(function(){
	  // alert();
    $('#rowed4').setGridParam({loadonce: true}).trigger('reloadGrid');
   });
 });

	var lastsel;
	window.dm_control=":;"+window.dm_control;
	create_grid();
	shortcut_key();
	jQuery(window).resize(function() {
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-125);
	});

	phanquyen();

})
function create_grid(){
	 $("#rowed3").jqGrid({
		 url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_control',
		datatype: "json",
		colNames:['Nhóm Người Dùng','Mô Tả',''],
    	colModel:[
  		{name:'TenNhomQuyen',index:'TenNhomQuyen', width:"1%",editrules: {required:true}, editable:true,align:'left',hidden:false,search: true},
		{name:'MoTa',index:'MoTa', editrules: {required:true},width:"3%", editable:true,align:'left',hidden:false,search: true},
		{name:'ID_NhomQuyen',index:'ID_NhomQuyen', width:"1%",editrules: {required:true}, editable:true,align:'left',hidden:true,},

   	],
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 1000,
		rowList:[],
		pginput:false,
		pgbuttons:false,
		pager: '#prowed3',
		sortname: 'ID_NhomQuyen',
		height:100,
		width:100,
		viewrecords: false,
		ignoreCase:true,


	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},
	//	sortorder: "asc",
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
            onSelectRow: function(id) {

            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
                $(".ui-icon-pencil").trigger('click');

            },
            loadComplete: function(data) {


            },
            caption: "Danh sách nhân viên "
	});


	$("#rowed3").jqGrid('navGrid',"#prowed3",{ edit: false, add: false, del: false, search: permission["search"],search:false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,},

	//Sửa
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) {
				  	if(response.responseText==1){
						var success=false;
						var new_id="Sửa dữ liệu không thành công";
					}else{
						tooltip_message("Sửa dữ liệu thành công");
						var success=true;
						var new_id="Sửa dữ liệu thành công";
					};
					return [success,new_id] ;
				},
				beforeShowForm: function(formid){
					canhgiua(formid)
				},
				afterShowForm : function (formid) {
					xuongdong(formid);
					lendong(formid);
					autocompleted_combobox("#parent");
					autocompleted_combobox("#ID_Form");
					autocompleted_combobox("#OpenType");
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
						var new_id="Lưu dữ liệu không thành công";
					}else{
						tooltip_message("Lưu dữ liệu thành công");
						var success=true;
						var new_id="Lưu dữ liệu thành công";
						//load_phongban_cha()

					};
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					temp = String(response.responseText).split(";");
					$("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));
					$("#"+$.trim(temp[1])).trigger("click");
					window.id_rowed3++;
					window.id_return=$.trim(temp[1])
					window.parent11=$("#parent1").val();
					$("#rowed3").trigger("reloadGrid");

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
								xuongdong(formid)
								lendong(formid)
								autocompleted_combobox("#parent");
								autocompleted_combobox("#ID_Form");
								autocompleted_combobox("#OpenType");


			 	},


				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");

				}
		}, // add options


		{reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',navkeys : [ true, 38, 40 ],
		closeOnEscape : true,
				beforeShowForm : function(formid) {canhgiua_del(formid);}	,
				afterSubmit : function(response, postdata) {
							if(response.responseText==1){
								var success=false;
								var new_id="Xóa liệu không thành công";
							}else{
								tooltip_message("Xóa dữ liệu thành công");
								var success=true;
								var new_id="Xóa dữ liệu thành công";

							};
							return [success,new_id] ;
				},


		}, // del options

		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_control',navkeys : [ true, 38, 40 ],closeOnEscape : true,

		} // search options

	);
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Phân quyền cho nhóm người dùng", buttonicon: 'ui-icon-document',
            onClickButton: function() {

				if ($("#dialog_dm_nhomnguoidung").dialog( "isOpen" )===false)
				{
			        id_sel=$('#rowed3').jqGrid('getGridParam', 'selrow')


					$("#dialog_dm_nhomnguoidung").dialog( "open" );
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_khongcoquyen&id='+id_sel).done(function(data){

								window.data_rowed4=jQuery.parseJSON(data);
								$("#rowed4").jqGrid('setGridParam',{datatype: "jsonstring" ,datastr: data}).trigger('reloadGrid');

							});


					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_coquyen&id='+id_sel).done(function(data){

								window.data_rowed5=jQuery.parseJSON(data);
								$("#rowed5").jqGrid('setGridParam',{datatype: "jsonstring" ,datastr: data}).trigger('reloadGrid');
								//alert(id_sel)

					})

				}

				if(id_sel==null)
				{
					 tooltip_message("Bạn chưa chọn nhóm quyền.");
					$("#dialog_dm_nhomnguoidung").dialog( "close" );
				}

            },

    });
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-125);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );
		/*$("#gbox_rowed3").attr("tabindex","1");
		//$("#gbox_rowed3").focus();
		$("#gbox_rowed3").bind('keydown', function(e) {
			if((jwerty.is("ctrl+m",e))){
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		})*/



};
function shortcut_key(){
	jwerty.key('f6', false);jwerty.key('f7', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f10', false);
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f6',e)) {
				 $(".ui-icon-plus").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f7',e)) {
				 $(".ui-icon-pencil").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f8',e)) {
				 $(".ui-icon-trash").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f9',e)) {
				 $(".ui-icon-search").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f10',e)) {
				 $(".ui-icon-refresh").trigger("click");
			}
		});
}

function create_nhomquyennhanvien(datalocal){
	 datalocal=jQuery.parseJSON(datalocal);
	   $("#rowed4").jqGrid({
	  datastr:datalocal,
	  datatype: "jsonstring" ,
		colNames:['','Họ lót','Tên','NickName','Tên Phòng Ban','Chức danh'],
    	colModel:[
		{name:'ID_NhanVien',index:'ID_NhanVien', editable:false,hidden:true},
		{name:'HoLotNhanVien',index:'HoLotNhanVien',width:"3%", editable:false,align:'left',hidden:false,search: true,},
		{name:'TenNhanVien',index:'TenNhanVien', width:"1%", editable:false,align:'left',hidden:false,search: true},
		{name:'NickName',index:'NickName', width:"1%", editable:false,align:'left',hidden:false,search: true},
		{name:'TenPhongBan',index:'TenPhongBan', width:"3%", editable:false,align:'left',hidden:false,search: true},
		{name:'TenChucDanh',index:'TenChucDanh', width:"1%", editable:false,align:'left',hidden:false,search: true},


   	],
		 multiselect: true,
		 loadonce: true,
		 scroll: false,
		 modal:true,
		 rowNum: 1000,
		 rowList:[],
		 pginput:false,
		 pgbuttons:false,
		 pager: '#prowed3',
		 sortname: 'ID_NhanVien',
		 height:100,
		 width:100,
		 viewrecords: false,
		 ignoreCase:true,



				caption: "Danh sách nhóm chưa có quyền",


	});


	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed4").setGridWidth( (($( "#dialog_dm_nhomnguoidung" ).dialog( "option", "width" ))/2)-60);
	$("#rowed4").setGridHeight($( "#dialog_dm_nhomnguoidung" ).dialog( "option", "height" )-150);
	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );


};

function create_nhomquyencontrol(datalocal){

		datalocal=jQuery.parseJSON(datalocal);
	   $("#rowed5").jqGrid({
	  datastr:datalocal,
	  datatype: "jsonstring" ,
		colNames:['ID_NhanVien','Họ lót','Tên','NickName','Tên Phòng Ban','Chức danh'],
    	colModel:[
		{name:'ID_NhanVien',index:'ID_NhanVien', editable:false,hidden:true},
		{name:'HoLotNhanVien',index:'HoLotNhanVien',width:"3%", editable:false,align:'left',hidden:false,search: false,},
		{name:'TenNhanVien',index:'TenNhanVien', width:"1%", editable:false,align:'left',hidden:false,search: false},
		{name:'NickName',index:'NickName', width:"1%", editable:false,align:'left',hidden:false,search: false},
		{name:'TenPhongBan',index:'TenPhongBan', width:"3%", editable:false,align:'left',hidden:false,search: false},
		{name:'TenChucDanh',index:'TenChucDanh', width:"1%", editable:false,align:'left',hidden:false,search: false},

   	],
		 multiselect: true,
		 loadonce: true,
		 scroll: false,
		 modal:true,
		 rowNum: 1000,
		 rowList:[],
		 pginput:false,
		 pgbuttons:false,
		 pager: '#prowed3',
		 sortname: 'ID_NhanVien',
		 height:100,
		 width:100,
		 viewrecords: false,
		 ignoreCase:true,

				caption: "Danh sách nhóm đã có quyền",


	});

	$("#rowed5").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed5").setGridWidth( (($( "#dialog_dm_nhomnguoidung" ).dialog( "option", "width" ))/2)-60);
	$("#rowed5").setGridHeight($( "#dialog_dm_nhomnguoidung" ).dialog( "option", "height" )-150);
	$("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );

};




</script>