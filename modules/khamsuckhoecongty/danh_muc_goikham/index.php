<!--
--- =============================================
-- Author:		<Phạm Thị Phương Thảo>
-- Create date: <26/11/2013>
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
body {
	font-family: Verdana,Arial,sans-serif;
	font-size: 10px;
}
p{
	margin: 1em 0;   
}
strong {
	font-weight: 900;   
}
#TenGoiKham{
	text-align:left;
}
div.form_row label {
    width: 100px;
}
.editable{
	text-align:right;
}
</style>
<body>
 <div  class="data_cls"> <table id="data_cls"> </table>  </div>
 <div  class="data_lk"> <table id="data_lk"> </table>  </div>

 <table id="grid"></table><div id="pager"></div>
 
</div>
<div id="dialog-change"  title="Thông báo!" style="display:none"> Dữ liệu đã được thay đổi, bạn có muốn lưu lại không?
</div>
<div id="dialog-refresh"  title="Thông báo!" style="display:none"> Dữ liệu đã được thay đổi, bạn có muốn làm mới không?
</div>
<div id="dialog-form1"  title="Thông báo!" style="display:none">Loại khám này đã tồn tại. Xin vui lòng nhập tên khác!
</div>
<div id="dialog-form" title="Gói khám chi tiết"  style="display:none" >
 <div id="container">
	<table id="aa">
		<tr>
			<td>
				<form>
				<fieldset  style="height:120px">
					  <legend>Gói khám</legend>
					<div class="form_row" style="vertical-align:top;display:inline-block"  >  <label for="tengoikham" style="width:100px">Tên gói khám:*</label> 	<input style="width:395px" type="text" name="TenGoiKham" id="TenGoiKham" ></div>
				
				<div class="form_row" style="vertical-align:top;display:block;"  > 
					<div class="form_row" style="vertical-align:top;display:inline-block;text-align:left" >  <label for="sotiendukien">Số tiền dự kiến:</label>	<input style="width:150px; text-align:left;" type="text" name="SoTienDuKien" id="SoTienDuKien" disabled></div>
					<div class="form_row" style="vertical-align:top;display:inline-block;text-align:left" >  <label for="mota" style="width:52px; vertical-align:top">Mô tả:</label> <textarea rows="4" cols="25" name="MoTa" id="MoTa"></textarea></div>
				</div>
				<div class="form_row" style="vertical-align:top;display:block;"  > 
					<div class="form_row" style="vertical-align:top;display:block;text-align:left" >  <label for="ghichu" style="vertical-align:top">Ghi chú:</label>	<textarea rows="2" cols="27" name="GhiChu" id="GhiChu"></textarea></div>
				</div>
				</fieldset>
				</form>
			</td>
			<td>
				<form>
				<fieldset style="width:103%;height:120px">
				 <legend>Loại khám</legend>
					<div class="form_row" style="vertical-align:top;display:inline-block"  >  <label for="com_thuocnhomcls"  style="width: 80px">Nhóm CLS:*</label> 
					<span class="custom-combobox"> <input type=text id='com_thuocnhomcls' style="width:224px!important; text-align:left" ></span> 
					<input id='com_thuocnhomcls1' class='com_thuocnhomcls1'  style="display:none"></div>
					<div class="form_row" style="vertical-align:top;display:block;"  > 
					<div class="form_row" style="vertical-align:top;display:inline-block;text-align:left" >  <label for="com_thuocloaikham" style="width: 80px">Loại khám:*</label>
					<span class="custom-combobox"> <input type=text style="width:224px!important; text-align:left"  id='com_thuocloaikham' class='com_thuocloaikham' ></span> 
					<input id='com_thuocloaikham1' class='com_thuocloaikham1'  style="display:none"></div>
					<div style="margin-top:10px;">
					<a class="fm-button ui-state-default ui-corner-all " id="Luu" style="margin-top:-1px; margin-left:30px!important;vertical-align:top;width:60px;height:14px;float:right"  >Lưu</a>
					</div>
				</fieldset>
				</form>
			
			</td>
		</tr>	
	</table>
    </div>
		 <table id="rowed4" ></table> 
        <div id="prowed4"></div>
  </div>
		
	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	window.rowed4_edit=false;
	window.close_edit=false;
	window.no=false;
	window.id_loaikham_select='';
	window.ten_loaikham_select='';
	window.gia_loaikham_select=0;

	//create_thuocloaikham(create_thuocnhomcls);
	
	create_combobox_new('#com_thuocnhomcls',create_bs,'bw','','data_nhomcls',0);
	create_combobox_new('#com_thuocloaikham',create_bs2,'bw','[]','data_loaikham',0);

	$("#TenGoiKham").val() ;
	//nut luu
	$("#Luu").click(function(){  
	
	//var rowData = jQuery("#data_lk").getRowData(id);
	//alert(rowData["TenLoaiKham"]);
	if(window.ten_loaikham_select==''){
		 $("#com_thuocloaikham").css("background-color","#F4FA58");
	}else{
			//----------------
		var tam=window.ten_loaikham_select;
		//alert("ten loai kham moi add "+tam);
		var kt=false;
		var tmp1 = $("#rowed4").jqGrid('getDataIDs');
		for(i=0;i<=tmp1.length;i++){
			rowData=jQuery("#rowed4").getRowData(tmp1[i]);
			if(rowData["TenLoaiKham"]==tam){
				kt=true;
			}
		}
		if(kt==true){
			$('#dialog-form1').dialog('open')
			$("#com_thuocloaikham").css("background-color","#F4FA58");
		}else{
		
		//----------------
			$("#com_thuocloaikham").css("background-color","white");
			parameters =
			{
				initdata : {ID_GoiKhamChiTiet: window.id_loaikham_select,TenLoaiKham:window.ten_loaikham_select,GiaBaoChoBN:window.gia_loaikham_select,DonGia:window.gia_loaikham_select},
				position :"last",
				useDefValues : false,
				useFormatter : false,
				addRowParams : {extraparam:{}}
			}
			jQuery("#rowed4").jqGrid('addRow',parameters);
			//var tien=$("#GiaBaoChoBN").val();
			
			sumphithuchien();
		}  
	}
});
$( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 550,
      width: 940,
      modal: true,
	  open: function(event,ui){
			//$( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(100)).toFixed(0) );
			//$( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(95)).toFixed(0) );
		},
	beforeClose: function( event, ui ) {
	var a=change_n();
	if(!a){
		if(!window.no){
			if(!close_edit){
				$( "#dialog-change" ).dialog('open')
				return a;
			}
		 }
	}
	 //alert(close_edit);
	 window.close_edit=false;
	 window.no=false;
	},
      buttons: {
		//lưu
		 "Lưu": function() {          
           getvalue_save();
                if(window.oper=='add'){
					save_button();
				}else{
               		edit_button();
                }
          },
		
		//lam tuoi  
		"Làm tươi": function() {    
			var a=change_n();
			if(!a){
				$( "#dialog-refresh" ).dialog('open');
			}
		},
        //Dong
        "Đóng": function() {
		 var a=change_n();
	 if(!close_edit){
		 if(!a){
			$( "#dialog-change" ).dialog('open')
		 }else{
		 	$( this ).dialog( "close" );
		 }
	 }
	 window.close_edit=false;
        }
      },	
    });

//Diaglog thông báo loại khám đã tồn tại!
$( "#dialog-form1" ).dialog({
      autoOpen: false,
      height: ($(window).height()/100 * parseFloat(30)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(30)).toFixed(0),
      modal: true,
	  open: function(event,ui){
                $( "#dialog-form1" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(30)).toFixed(0) );
                $( "#dialog-form1" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(30)).toFixed(0) );
            },
      buttons: {
		 "OK": function() {          
			$( "#dialog-form1" ).dialog('close');
          },
	},
		
    }); 
//Dialog hỏi dữ liệu đã đc thay đổi, có muốn lưu (đóng) 
 $( "#dialog-change" ).dialog({
      autoOpen: false,
      height: ($(window).height()/100 * parseFloat(30)).toFixed(0),
      width: ($(window).width()/100 * parseFloat(30)).toFixed(0),
      modal: true,
	  open: function(event,ui){
                $( "#dialog-change" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(30)).toFixed(0) );
                $( "#dialog-change" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(30)).toFixed(0) );
            },
      buttons: {
		 "Yes": function() {          
				getvalue_save();
                if(window.oper=='add'){
					save_button();
				}else{
                	edit_button();
                }
				$( "#dialog-change" ).dialog('close');
          },
		  "No": function() {	
				window.no=true;		  
				$( "#dialog-change,#dialog-form" ).dialog('close');
          },
		  "Cancel": function() {          
				$( "#dialog-change" ).dialog('close')
          },
	}, close: function(event,ui){
		if(!window.kiemtra){
			$('#TenGoiKham').focus();
		}
    },
}); 
 
  $( "#dialog-refresh" ).dialog({
      autoOpen: false,
      height: ($(window).height()/100 * parseFloat(30)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(30)).toFixed(0),
      modal: true,
	  open: function(event,ui){
                $( "#dialog-refresh" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(30)).toFixed(0) );
                $( "#dialog-refresh" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(30)).toFixed(0) );
            },
      buttons: {
		 "Yes": function() {    
				if(window.oper=='add'){
					$("input:text").val("");
					$('textarea').val("");
					$("#active").prop('checked', true); 
					$("#SoTienDuKien").val('0');
					datalocal={};
					$("#rowed4").jqGrid("setGridParam", { datastr:datalocal, datatype: "jsonstring" ,}).trigger("reloadGrid");	
				}else{
						id = $("#rowed3").jqGrid('getGridParam','selrow');
						var rowData = jQuery("#rowed3").getRowData(id);
						//ten goi kham
						var tengoi=rowData["TenGoiKham1"];
						//alert(tengoi);
						$( "#TenGoiKham" ).val(tengoi);
						//so tien
						var sotien=rowData["SoTienDuKien"];
						$( "#SoTienDuKien" ).val(sotien);
						//alert(sotien);
						//mo ta
						var mta=rowData["MoTa"];
						$( "#MoTa" ).val(mta);
						//ghichu
						var gchu=rowData["GhiChu"];
						$( "#GhiChu" ).val(gchu);
						$('#rowed4').setGridParam({ datatype: "json"}).trigger('reloadGrid');
				}
				$( this).dialog('close');
          },
		  "No": function() {	
			 $( this).dialog('close');
          },
	},
}); 
 
elem=1 + Math.floor(Math.random() * 1000000000); 		
var lastsel;
jQuery(window).resize(function() {		 
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-120);
	var height = $( "#dialog-form" ).dialog( "option", "height" );
	var width = $( "#dialog-form" ).dialog( "option", "width" );
	
	$("#rowed4").setGridWidth(width-100);
	$("#rowed4").setGridHeight(height-310);
});
create_grid();	
shortcut_key();		
create_grid1();	
phanquyen();
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);

function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_goikham',
		datatype: "json",	
		colNames:['Id','Tên gói khám','Mô tả','Số tiền','Ghi chú',''],
		colModel:[
			{name:'ID_GoiKham',index:'ID_GoiKham',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'TenGoiKham',index:'TenGoiKham',search:true, width:"15%", editable:false,align:'letf',hidden:false}, 
			{name:'MoTa',index:'MoTa',search:true, width:"20%", editable:false,align:'left',hidden:false},	 
			{name:'SoTienDuKien',index:'SoTienDuKien',search:true, width:"7%", editable:false,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GhiChu',index:'GhiChu',search:true, width:"20%", editable:false,align:'left',hidden:false,classes:'ghichu'},	 
			{name:'TenGoiKham1',index:'TenGoiKham1',hidden:true},
		],
		loadonce: true,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_GoiKham',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",	
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		   $("#edit_rowed3 .ui-icon-pencil").trigger('click');   
 		},
	
		loadComplete: function(data) {	
			grid_filter_enter("#rowed3");
			$('#rowed3').jqGrid('setGridParam', {loadonce: true})
			 if(typeof(window.id_return)!="undefined"){	
				jQuery('#rowed3 #'+window.id_return).focus();
				jQuery('#rowed3').jqGrid("setSelection",window.id_return, true);	
			}
		},	  
		
		caption: "Danh mục gói khám"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel",addfunc: function() { 
			window.oper='add';
			datalocal={};
			$("#rowed4").jqGrid("setGridParam", { datastr:datalocal, datatype: "jsonstring" ,}).trigger("reloadGrid");	
			$('#dialog-form').dialog('open');
			$("input:text").val("");
			$('textarea').val("");
			$("#active").prop('checked', true); 
			$("#SoTienDuKien").val('0');
		}, 
		editfunc: function(id) { 
			window.oper='edit';
			window.id_edit=id;
	 
			$( "#dialog-form" ).dialog('open');
			var rowData = jQuery("#rowed3").getRowData(id);
			//ten goi kham
			var tengoi=rowData["TenGoiKham1"];
			//alert(tengoi);
			$( "#TenGoiKham" ).val(tengoi);
			
			//so tien
			var sotien=rowData["SoTienDuKien"];
			$( "#SoTienDuKien" ).val(sotien);
			//alert(sotien);
			//mo ta
			var mta=rowData["MoTa"];
			$( "#MoTa" ).val(mta);
			//ghichu
			var gchu=rowData["GhiChu"];
			$( "#GhiChu" ).val(gchu);
			//nhom CLS
			window.rowed4_edit=true;
			$("#rowed4").jqGrid("setGridParam", {datatype: "json",url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_goikhamchitiet&id='+id}).trigger("reloadGrid");
				
			},
			}, //options		
			{},
			{},			
			{reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',navkeys : [ true, 38, 40 ],closeOnEscape : true,	
			 beforeShowForm : function(formid) {canhgiua_del(formid);},	
				 afterSubmit : function(response, postdata) { 				
					if(response.responseText==1){
						var success=false;
						var new_id="<?php get_text1("xoa_khongthanhcong") ?>";													
						}else{
						tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("xoa_thanhcong") ?>";
						//load_phong_ban(true);								
					};						
					return [success,new_id] ;
			},		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_goikham&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-120);
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

function create_grid1(){	
  var mydata=[];
  myDelOptions = {
        // because I use "local" data I don't want to send the changes
        // to the server so I use "processing:true" setting and delete
        // the row manually in onclickSubmit
        onclickSubmit: function(options, rowid) {
            var grid_id = $.jgrid.jqID(jQuery("#rowed4")[0].id),
			grid_p = jQuery("#rowed4")[0].p,
			newPage = grid_p.page;

            // reset the value of processing option which could be modified
            options.processing = true;

            // delete the row
			var rowData = jQuery("#rowed4").getRowData(rowid);
			
			$("#SoTienDuKien").val(parseInt($("#SoTienDuKien").val()) - parseInt( rowData["GiaBaoChoBN"]))  ;
            jQuery("#rowed4").delRowData(rowid);
            $.jgrid.hideModal("#delmod"+grid_id,{gb:"#gbox_"+grid_id,jqm:options.jqModal,onClose:options.onClose});         	
		 jQuery("#rowed4").trigger("reloadGrid");
            return true;
        },
        processing:true
    };
$("#rowed4").jqGrid({
		data:mydata,
		datatype: "local",	
		colNames:['Id','Loại khám','Giá niêm yết','Phí thực hiện'],
		colModel:[
			{name:'ID_GoiKhamChiTiet',index:'ID_GoiKhamChiTiet',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'TenLoaiKham',index:'TenLoaiKham', width:"70%", editable:false,align:'letf',hidden:false,edittype:"text"}, 
			{name:'GiaBaoChoBN',index:'GiaBaoChoBN', width:"30%", editable:false,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'DonGia',index:'DonGia', width:"30%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},editoptions:{dataEvents: [{ type: 'change keyup', fn: function(e) { 
					 sumphithuchien();
				}}]}
			
			
			},
			
			],
		loadonce: true,
		scroll: 1, 
		modal:true,	 	
		pager: '#prowed4',	
		rowNum: 2000,
		gridview: true,
		sortname:'ID_GoiKhamChiTiet',
		sortorder:'',
		rowList:[],
		height:500,
		width: 50,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		sortorder: "asc",
		footerrow: true,	
		serializeRowData: function (postdata) { 		
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		
		loadComplete: function(data) {
			if(window.rowed4_edit){
				var myData = $('#rowed4').jqGrid('getRowData');
				window.dulieugoc= clone(myData);
				window.rowed4_edit=false;
			}
			
			var tmp1 = $("#rowed4").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){  
				jQuery("#rowed4").jqGrid('editRow',tmp1[i]);
			}
			sumphithuchien();
		},	 
	});	
	
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false, del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
bCancel: "Cancel",}, {}, {},
   myDelOptions		 
							  
	);	 			
	var height = $( "#dialog-form" ).dialog( "option", "height" );
	var width = $( "#dialog-form" ).dialog( "option", "width" );
	
	 $("#rowed4").setGridWidth(width-38);
	 $("#rowed4").setGridHeight(height-330);
	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed4").attr("tabindex","1");
		//$("#gbox_rowed4").focus();	
		$("#gbox_rowed4").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed4").jqGrid('restoreRow', lastsel);
				 $("#rowed4").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
	
	}			
function load_select1(){
	window.nhomcls = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=NhomCLS&id=ID_NhomCLS&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	$(".form_row").setColProp('#nhomclst', { editoptions: { value: nhomcls} });
	$('#nhomclst').empty();
	create_select("#nhomclst",nhomcls);
	//$(#nhomclst).val(window.nhomcls);
}

function create_bs(elem,datalocal){ 
	 datalocal=jQuery.parseJSON(datalocal);  
	   $(elem).jqGrid({
	  datastr:datalocal,
	  datatype: "jsonstring" ,
		  colNames:['Tên nhóm', 'Mô tả'],
		  colModel:[  
		   {name:'TenNhom',index:'TenNhom',hidden :false},
		   {name:'MoTa',index:'MoTa',hidden :false},
		  ],
		  hidegrid: false,
		  gridview: true,
		  loadonce: true,
		  scroll: false,   
		  modal:true,  
		  rowNum: 200000,
		  rowList:[],  
		  sortname: 'TenNhom',
		  height:200,
		  width: 470,
		  viewrecords: true, 
		  ignoreCase:true,
		  shrinkToFit:true,
		  cmTemplate: {sortable:false},
		  sortorder: "desc",
		serializeRowData: function (postdata) {  
		
		},
		onSelectRow: function(id){ 
			create_combobox_new('#com_thuocloaikham',create_bs2,'bw','','data_loaikham_bynhomcls&id_nhomcls='+id,0);
			$("#com_thuocloaikham").val('');
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
		
		},
		loadComplete: function(data) { 
			grid_filter_enter(elem) ;
		},   
		
		}); 
		
		$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$(elem).jqGrid('bindKeys', {} );
}
			
function create_bs2(elem,datalocal){ 
	window.data_nhom2=jQuery.parseJSON(datalocal);  
	$(elem).jqGrid({
	  datastr: window.data_nhom2,
	  datatype: "jsonstring" ,
	  colNames:['Loại khám', 'Mô tả','Tiền','idncls'],
	  colModel:[   
		//{name:'ID_LoaiKham',index:'ID_LoaiKham',hidden :true},
	   {name:'TenLoaiKham',index:'TenLoaiKham',hidden :false},
	   {name:'MoTa',index:'MoTa',hidden :false},
	   {name:'ID_NhomCLS',index:'ID_NhomCLS',hidden :true},
	   {name:'GiaBaoChoBN',index:'ID_NhomCLS',hidden :true,edittype:"text",formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
	  ],
	  hidegrid: false,
	  gridview: true,
	  loadonce: true,
	  scroll: false,   
	  modal:true,  
	  rowNum: 200000,
	  rowList:[],  
	  sortname: 'TenLoaiKham',
	  height:200,
	  width: 470,
	  viewrecords: true, 
	  ignoreCase:true,
	  shrinkToFit:true,
	  cmTemplate: {sortable:false},
	  sortorder: "desc",
	  serializeRowData: function (postdata) {  
	  },
	  onSelectRow: function(id){  
	 	 var selr = jQuery(elem).jqGrid('getGridParam','selrow');
		 var rowData = jQuery(elem).getRowData(id);
		 window.id_loaikham_select=id;
		 window.ten_loaikham_select=rowData['TenLoaiKham'];
		 window.gia_loaikham_select=rowData['GiaBaoChoBN'];
	  //alert(selr);
		 // $("#rowed4").jqGrid('setGridParam',{url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_dangcho_group&id="+selr}).trigger('reloadGrid');
	    // document.getElementById("thuocnhomcls").checked=true;
	  },
	  ondblClickRow: function (id, rowIndex, columnIndex) {
			 $(".ui-icon-pencil").trigger('click');
	   },
	  loadComplete: function(data) { 
			grid_filter_enter(elem) ;
	 
	  },   
	  
	 }); 
		
	  $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	  $(elem).jqGrid('bindKeys', {} );
	  
	}
		
function create_thuocloaikham(callback) {
	//create_combobox('#com_thuocloaikham','#com_thuocloaikham1',".data_lk","#data_lk",create_bs2,500,300,'Nhóm','data_loaikham');	
   // callback();
	//create_combobox_new('#com_thuocloaikham',create_bs2,'bw','','data_loaikham',0);
}

function create_thuocnhomcls() {
//   create_combobox('#com_thuocnhomcls','#com_thuocnhomcls1',".data_cls","#data_cls",create_bs,500,300,'Nhóm','data_nhomcls');
}
function formatMoney(num) {
    var p = num.toFixed(2).split(".");
    return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "");
}
function save_button(){
	if(kiemtra){
	  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',dataToSend)
	  .done(function( response) {
		temp = response.split(";");	
		if(temp[0]==1){
				tooltip_message("<?php get_text1("luu_khongthanhcong") ?>");	
								   
		}else{
			$('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');
			
			window.id_return=$.trim(temp[1]);
			window.close_edit=true;                                     
			tooltip_message("<?php get_text1("luu_thanhcong") ?>");		
			$("#dialog-form").dialog("close");
		}
	});
	}
}
//edit
function edit_button(){
    if(kiemtra){	
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&id='+window.id_edit,dataToSend)
		.done(function( response) {
			temp = response.split(";");	
			if(temp[0]==1){
				var success=false;
				var new_id="<?php get_text1("sua_khongthanhcong") ?>";
			}else{	
				$('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');                                             
				window.id_return= window.id_edit;
				tooltip_message("<?php get_text1("sua_thanhcong") ?>");
				window.close_edit=true;
				$("#dialog-form").dialog("close");
			};	
		}); 
    }
}	
function getvalue_save(){
	var tmp1 = $("#rowed4").jqGrid('getDataIDs'); 
	for(var i=0;i < tmp1.length;i++){ 
		jQuery("#rowed4").jqGrid('saveRow',tmp1[i]);
	}
	
	window.kiemtra=true;
	phancach="";
	dataToSend ='{';
	key1='';
	i=0;
	$('#rowed3').setGridParam({postData: null});
	$('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
		if(i>0){
		phancach=","; 
				}
	  dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value) ;
	  i++;
		})
	var myData = $('#rowed4').jqGrid('getRowData');
	 myData= JSON.stringify(myData);
	//alert(myData);
	
	 dataToSend +=',"id":'+myData+'}'; 
	  //alert(dataToSend);
	window.dataToSend = jQuery.parseJSON(dataToSend);
	if($.trim(dataToSend["TenGoiKham"])==''){
		 $("#TenGoiKham").css("background-color","#F4FA58");
		 $("#TenGoiKham").focus();
		  $("#TenGoiKham").select();
		  window.kiemtra=false;
	  }else{
		$("#TenGoiKham").css("background-color","white");
	}
	
	var tmp2 = $("#rowed4").jqGrid('getDataIDs'); 
	for(var i=0;i < tmp2.length;i++){ 
		jQuery("#rowed4").jqGrid('editRow',tmp2[i]);
	}
}

function change_n(){
	var myData = $('#rowed4').jqGrid('getRowData');
	myData= JSON.stringify(myData);
	if(window.oper=='edit'){
		dulieugoc1= JSON.stringify(dulieugoc) 
		var ketqua;
		var id = $("#rowed3").jqGrid('getGridParam','selrow');
		var rowData = jQuery("#rowed3").getRowData(id);
		if((dulieugoc1===myData)&&($.trim($("#TenGoiKham").val())==rowData["TenGoiKham1"])&&($.trim($("#GhiChu").val())==rowData["GhiChu"])&&($.trim($("#MoTa").val())==rowData["MoTa"])){
		 ketqua =true
		 return ketqua;
		}else{
		ketqua=false
		 return ketqua;	
		}
	}else{	
		if((myData=='[]')&&($.trim($("#TenGoiKham").val())=='')&&($.trim($("#GhiChu").val())=='')&&($.trim($("#MoTa").val())=='')){
			ketqua =true
			return ketqua;
		}else{
			ketqua=false
			return ketqua;	
		}
	}
}


function sumphithuchien(){
	var sum_tt=0;
	var tmp1 = $("#rowed4").jqGrid('getDataIDs');
	for(var i=0;i < tmp1.length;i++){
		sum_tt=sum_tt+parseInt($("#"+tmp1[i]+"_DonGia").val());		
	}
	
	sum = $("#rowed4").jqGrid("getCol", "GiaBaoChoBN", false, "sum");
	$("#rowed4").jqGrid("footerData", "set", {
		TenLoaiKham: "Tổng tiền:", 
		GiaBaoChoBN: sum,
		DonGia:sum_tt
	});
	$("#SoTienDuKien").val(parseInt(sum_tt))  ;
	
}
</script>