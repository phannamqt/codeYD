<style>
 .input_s{
        background-color:#F4FA58!important;
    }
#rowed5 .CachDungChiTiet .editable{
	width:98% !important;
}
</style>
<body> 
	<div id="grid_phong_ban">      
        <div id="masterdetail">	 
          <table id="rowed3" ></table>
            <div id="prowed3" ></div>  
            </div>
            
             <div id="detail" style="margin-top:20px">
            <table id="rowed4" ></table>
            <div id="prowed4"></div>  
            </div>      
    </div>
    <div id="dialog-form" title="Thêm bản ghi" style="display:none">
        <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable thongtinchinh" style="width:99%;height:100px;  box-shadow:none!important;  display: block; " >
    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Đơn thuốc chi tiết</span> </div>
    <div class="ui-dialog-content ui-widget-content"style="display: block; width: auto; min-height: 0px; max-height: none; height: 100%">
      <div id="container">
        
        <div class="form_row" style="vertical-align:top">
          
         <div style="height:20px">
            <label for="madonthuoc" style="width:100px">Mã đơn thuốc</label>
            <input id="madonthuoc_text" style="width:140px;text-align:left" name="madonthuoc_text"  type="text" disabled readonly title="Mã này được sinh ra tự động">
          </div > 
          <div style="height:20px;margin-top: 10px">
            <label for="tendonthuoc" style="width:100px">Tên đơn thuốc</label>          
            <input id="tendonthuoc_text" name="tendonthuoc_text" style="width:140px;text-align:left" type="text">
          </div>
        </div>
        <div class="form_row" style="vertical-align:top">         
           <div style="height:20px">
            <label  style="width:70px;margin-left: 10px">Bác sĩ tạo</label>
            <select required="true" role="select"style="width: 180px!important;" id="ID_BacSiTao" name="ID_BacSiTao" size="1" ></select>
          </div> 
          <div style="height:20px;margin-top: 10px">     
            <label style="width:70px;margin-left: 10px">Nhóm bệnh</label>
            <select required="true" role="select"style="width: 180px!important;" id="ID_NhomBenh" name="ID_NhomBenh" size="1" ></select>
          </div>
        </div>
        <div class="form_row" style="vertical-align:top">         
           <div>
            <label for="mota" style="width:75px; vertical-align:top; margin-top:20px;text-align: right">Mô tả</label>
            <textarea id="mota_text" name="mota_text" style="height:52px; width:170px;" lang="end" ></textarea>
          </div> 
        </div>
        <div class="form_row" style="vertical-align:top">         
           <div>
            <label for="ghichu"  style="width:45px; vertical-align:top; margin-top:20px;text-align: right">Ghi chú</label>
            <textarea id="ghichu_text" name="ghichu_text" style="height:52px; width:170px;" lang="end" ></textarea>
          </div> 
        </div>
         <div class="form_row" style="vertical-align:top">         
          <div style="height:20px;margin-top: 5px">
            <label for="latoachuan" style="width:80px;margin-left: 10px">Là toa chuẩn</label>
            <input type=checkbox id="latoachuan_check" value="1" name="latoachuan_check">
          </div>
          <div style="height:20px;margin-top: 10px">
            <label for="apdung" style="width:80px;margin-left: 10px">Áp dụng</label>
            <input type=checkbox id="apdung_check" value="1" name="apdung_check">
          </div>
        </div>
<!--          <div class="form_row" style="vertical-align:top;width:4%;line-height:15px!important;"  >
          <div>
             <a style="margin-left:0px;   margin-bottom:1px;width:30px; vertical-align:top;margin-left: 20px" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="save_data" href="#">Lưu<span class="ui-icon ui-icon-disk"></span></a>
             <a style="margin-left:0px;  margin-bottom:1px;margin-top: 5px; width:30px; margin-left: 20px" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="sCal" href="#">Đóng<span class="ui-icon ui-icon-cancel
 "></span></a>
          </div>
        </div>       -->
      </div>
    </div>
  </div>
  <div style="height:3px"></div>
  <table id="rowed5" ></table>
  <div id="prowed5" ></div>
</div>
</div>		
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	window.thuocxoa='';
	number_textbox("#LieuDungHangNgay");	  
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventer = window[eventMethod];
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
	eventer(messageEvent,function(e) {			 
		if(e.data=='table'){
		//alert("chinh")
		}			  
	},false);
	init_data();                   
	var lastsel; 	
	load_phong_ban(false); 
	
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc').done(function(data) {
		window.grid_data_thuoc= data;
	});
	
	create_grid();	
	create_detail_grid();
    create_detail_grid2();
	shortcut_key1();
    
	resize_form();
	jQuery(window).resize(function() {		 
		resize_form();
	})
	$( "#dialog-form" ).dialog({
		resizable: false,
		autoOpen: false,
		height: ($(window).height()/100 * parseFloat(99)).toFixed(0),
		width: ($(window).width()/100 * parseFloat(99)).toFixed(0),
		modal: true,
		open: function(event,ui){
			$('#rowed5').jqGrid('clearGridData');
			$("#dialog-form").dialog("option","height", ($(window).height()/100 * parseFloat(99)).toFixed(0) );
			$("#dialog-form").dialog("option","width", ($(window).width()/100 * parseFloat(99)).toFixed(0) );
			window.thuocxoa='';
		},
		buttons: {
			'Lưu': function() {	
				check_n();
				if(window.oper=='add'){
					 save_data();
				}else{
					edit_data();
				}
			},
			 'Thoát': function() {
				$(this).dialog('close'); 				 
			}	
		},
		close: function(event, ui) {
			$(this).dialog('close');   
			window.thuocxoa='';         
		}       
	});

	create_select('#ID_BacSiTao',window.idnhanvien);
	create_select('#ID_NhomBenh',window.nhombenh);
	autocompleted_combobox("#ID_BacSiTao");
	autocompleted_combobox("#ID_NhomBenh");
	
	

});
function check_n(){
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
		dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
		i++;
	})
	savedRow = $('#rowed5').jqGrid("getGridParam", "savedRow");		
	if (savedRow && savedRow.length > 0) {
		$("#rowed5").jqGrid('saveRow',savedRow[0].id);
	}
	 //dataToSend +=',"ID_DuongDung":"'+$('#ID_DuongDung').val()+'"'; 
	var myData = $('#rowed5').jqGrid('getRowData');
	myData= JSON.stringify(myData);	
	dataToSend +=',"id":'+myData+'}'; 
	dataToSend = jQuery.parseJSON(dataToSend);
	var check_null = new Array();
	//check_null["madonthuoc_text"]=$.trim(dataToSend["madonthuoc_text"]);
	check_null["tendonthuoc_text"]=$.trim(dataToSend["tendonthuoc_text"]);
	check_null["ID_BacSiTao"]=$.trim(dataToSend["ID_BacSiTao"]);
	check_null["ID_NhomBenh"]=$.trim(dataToSend["ID_NhomBenh"]);
	for(var key in check_null){ 
		if(check_null[key]==""){			  
			if(key1==''){
				 if(key=="ID_BacSiTao"||key=="ID_NhomBenh"){
				 key1=key+"1";
			}else{
				 key1=key;
				 }     
			}
			window.kiemtra=false;
			if(key=="ID_BacSiTao"||key=="ID_NhomBenh"){
				 $("#"+key+"1").addClass("input_s");
			}else{
				 $("#"+key).css("background-color","#F4FA58");
			}
		}else{
			if(key=="ID_BacSiTao"||key=="ID_NhomBenh"){
				 $("#"+key+"1").removeClass("input_s");
			}else{
				 $("#"+key).css("background-color","white");
			}
		}
	}
}

function create_grid(){	
		$("#rowed3").jqGrid({
		url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau',
		datatype: "json",
		colNames:['Id','Mã đơn','Tên đơn thuốc','Nhóm bệnh','Mô tả','Bác sĩ tạo','Là toa chuẩn','Áp dụng','Ghi chú'],
		colModel:[
			{name:'ID_DonThuocMau',index:'ID_DonThuocMau',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaDon',index:'MaDon', width:"4%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text"},
			{name:'TenDonThuoc',index:'TenDonThuoc', width:"14%", editable:true,align:'left',edittype:"text"},
			{name:'ID_NhomBenh',index:'ID_NhomBenh', width:"4%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:nhombenh}},
			{name:'MoTa',index:'MoTa', width:"10%", editable:true,align:'right',edittype:"text"},
			{name:'ID_BacSiTao',index:'ID_BacSiTao', width:"4%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:idnhanvien}},
			{name:'LaToaChuan',index:'LaToaChuan', width:"3%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:3, colpos:1},editoptions: {value:"1:0"}},
			{name:'ApDung',index:'ApDung', width:"3%", editable:true,align:'center',edittype:"text",hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{rowpos:3, colpos:1},editoptions: {value:"1:0"}},
			{name:'GhiChu',index:'GhiChu', width:"10%", editable:true,align:'left',edittype:"text",hidden:false}, 	
		],
		loadonce: true,
		scroll: false,		 
		modal:true,	 	 
		rowNum: -1,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		pager: '#prowed3',
		sortname: 'ID_DonThuocMau',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id) {
			var rowData = jQuery(this).getRowData(id); 
			var ID_DonThuocMau = rowData['ID_DonThuocMau']; //alert(ID_DonThuocMau);				
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id="+ID_DonThuocMau}).trigger('reloadGrid');
        },
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });
            if(typeof(window.donthuocmau1)!="undefined"){			 
				tam='rowed3ghead_0_'+window.donthuocmau1
				jQuery('#rowed3').jqGrid('groupingToggle',tam)	
				jQuery('#rowed3').jqGrid("setSelection",window.id_return, true);	
				jQuery('#rowed3'+window.id_return).focus();				 
			}
		},	  
		caption: "Danh mục đơn thuốc mẫu"
	});
    $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add:permission["add"], edit: permission["edit"], del: permission["delete"],search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
	 addfunc: function() {
		$('#dialog-form').dialog('open');
                window.oper='add';
                $("input:text").val("");
                $("textarea").val("");
                $("#apdung_check").prop('checked', true);
                $("#latoachuan_check").prop('checked', false);
				$("#ID_BacSiTao").val(<?=$_SESSION["user"]["id_user"]?>);
				var bst=$('#ID_BacSiTao :selected').text();
				$("#ID_BacSiTao"+"1").val(bst);
        },
		editfunc: function(id) {		
				window.oper='edit';
				window.id_edit=id;
				$('#rowed5').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id='+id,datatype:'json'}).trigger('reloadGrid');
				$('#dialog-form').dialog('open');

				var madonthuoc = $("#rowed3").jqGrid('getCell', id, 'MaDon');
				var tendonthuoc = $("#rowed3").jqGrid('getCell', id, 'TenDonThuoc');
				var bacsitao = $("#rowed3").jqGrid('getCell', id, 'ID_BacSiTao');
				var latoachuan = $("#rowed3").jqGrid('getCell', id, 'LaToaChuan');
				var apdung = $("#rowed3").jqGrid('getCell', id, 'ApDung');
				var nhombenh = $("#rowed3").jqGrid('getCell', id, 'ID_NhomBenh');
				var ghichu = $("#rowed3").jqGrid('getCell', id, 'GhiChu');
				var mota = $("#rowed3").jqGrid('getCell',id, 'MoTa');
				$("#madonthuoc_text").val(madonthuoc);
				$("#tendonthuoc_text").val(tendonthuoc);
				$("#mota_text").val(mota);
				$("#ID_BacSiTao").val(bacsitao);
				var bst=$('#ID_BacSiTao :selected').text();
				$("#ID_BacSiTao"+"1").val(bst);

				$("#ID_NhomBenh").val(nhombenh);
				var nb=$('#ID_NhomBenh :selected').text();
				$("#ID_NhomBenh"+"1").val(nb);

				$("#ghichu_text").val(ghichu);
				if(latoachuan=="1"){
					$("#latoachuan_check").prop('checked',true);
				}else{
					 $("#latoachuan_check").prop('checked',false);
				}
				if(apdung=="1"){
					$("#apdung_check").prop('checked',true);
				}else{
					$("#apdung_check").prop('checked',false);
				}
              },
            }, //options
	
	{},{}	,				 
								  
		{reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del&hienmaloi=a',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
				beforeShowForm : function(formid) {canhgiua_del(formid);},
					afterSubmit : function(response, postdata) { 				
				if(response.responseText==1){
					var success=false;
					var new_id="Xóa liệu không thành công";													
				}else{
					tooltip_message("Xóa dữ liệu thành công");
					var success=true;	
					var new_id="Xóa dữ liệu thành công";
					load_phong_ban(true);								
				};						
				return [success,new_id] ;
                                                        
				}
                                
		} // del options
    );
	
	
					  
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-400);
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
	window.idnhanvien = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.nhombenh = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhomBenh&id=ID_NhomBenh&name=TenNhomBenh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm bệnh');}}).responseText;
	window.idthuoc = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục thuoc');}}).responseText;
	//alert(window.idthuoc);
        //window.nhombenh = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_&id=ID_DonThuocMau&name=TenDonThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục thuoc mau');}}).responseText;
       
}

function save_data(){
    if(kiemtra){
		  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=a',dataToSend).done(function( response) {
			temp = response.split(";");
			if(temp[0]==1){
				var success=false;
				var new_id="<?php get_text1("luu_khongthanhcong") ?>";
			}else{	
				$('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');
				window.id_return=$.trim(temp[1]);
				window.donthuocmau1 = $('#ID_DonThuocMau :selected').index();                                                
				tooltip_message("<?php get_text1("luu_thanhcong") ?>");		
				$("#dialog-form").dialog("close");
			}
		 });
   }
}
function edit_data(){
    if(kiemtra){
	  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=2&id='+window.id_edit+"&xoa="+window.thuocxoa,dataToSend)
	  .done(function( response) {
		temp = response.split(";");	
		if(temp[0]==1){
			var success=false;
			var new_id="<?php get_text1("sua_khongthanhcong") ?>";
		}else{	
			$('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');                                             
			window.id_return= window.id_edit;
			window.donthuocmau1 = $('#ID_DonThuocMau :selected').index();                                                
			tooltip_message("<?php get_text1("sua_thanhcong") ?>");		
			$("#dialog-form").dialog("close");
		}
						 
	 });
	}
}
function create_detail_grid(){
	$("#rowed4").jqGrid({
        url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id=0',               
		datatype: "json",
		colNames:['','Tên thuốc','Liều dùng','Cách dùng','Cách dùng chi tiết','ID'],
		colModel:[
			{name:'ID_DonThuocMau',index:'ID_DonThuocMau',search:false, width:"0%", editable:false,align:'right',hidden:true},
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"40%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:idthuoc}},
			{name:'LieuDungHangNgay',index:'LieuDungHangNgay',search:false, width:"10%",editrules: {number: true,required:true},formatter:'integer',formatoptions:{defaultValue: '0'}, editable:false,align:'center',hidden:false,edittype:"text"},
			{name:'CachDung',index:'CachDung',search:false, width:"10%", editable:false,editrules: {required:true},align:'center',hidden:false,edittype:"text",formoptions:{}},
			{name:'CachDungChiTiet',index:'CachDungChiTiet',search:false, editable:true, width:"40%",align:'left',hidden:false,edittype:"text"},		 	 	
            {name:'ID_DonThuocMau',index:'ID_DonThuocMau',search:false, width:"0%", editable:false,align:'right',hidden:true}
            ],      
		loadonce: false,
		scroll: false,		 
		modal:true,
		pginput: false,
		pgbuttons: false,	
		pgselbox:false, 	 
		rowNum: 1000,
		rowList:[],
		pager: '#prowed4',
		sortname: 'ID_Thuoc',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
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
		},	  
		caption: "Đơn thuốc mẫu chi tiết"
	});	
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true }),	  
	$("#rowed4").setGridWidth($(window).width()-20);
	$("#rowed4").setGridHeight($(window).height()-380);	
}
 function create_detail_grid2(){
	 var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
	mydata=[];	 
	$("#rowed5").jqGrid({
                data:mydata,	 
		datatype: "local",	
		colNames:['Xóa','Tên thuốc','Liều dùng','Cách dùng','Cách dùng chi tiết','ID','','','ID_TTMChiTiet'],
		colModel:[
			{name:'xoa',index:'xoa',width:"2%",align:'center',hidden:false, editable: false}  ,
			//{name:'ID_Thuoc',index:'ID_Thuoc', width:"100%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:idthuoc}},
			{name:'ID_Thuoc',index:'ID_Thuoc',width:"40%", align:'left',hidden:false, editable: true,edittype:"select", classes:'tenthuoc',editoptions:{value:idthuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
				  return check_idthuoc(value,colName);
				},formatter: function (cellValue, options, rowObject) {                    
					return searhicon;
				}}
		    },
			{name:'LieuDungHangNgay',index:'LieuDungHangNgay', width:"10%", editable:true,align:'left',edittype:"text",hidden:false,editrules: { number: true, required: false},formatter:'integer',formatoptions:{defaultValue: '0'}},
			{name:'CachDung',index:'CachDung',search:false, editable:true, width:"10%",align:'left',hidden:false,edittype:"text",editoptions:{dataEvents: [{ type: 'keyup', fn: function(e) {
				/*setTimeout(function(){	
					if(jwerty.is("enter",e)||jwerty.is("tab",e)){
						jQuery("#rowed5").jqGrid('saveRow',$("#rowed5").jqGrid('getGridParam', 'selrow'));
						$('#rowed5_iladd').removeClass('ui-state-disabled');
						setTimeout(function(){			
							$("#rowed5_iladd").click();
						},50);
					}
				},1000);*/
				}}],defaultValue: ''}
			},	
			{name:'CachDungChiTiet',index:'CachDungChiTiet',search:false, editable:true, width:"40%",align:'left', classes:'CachDungChiTiet',hidden:false,edittype:"text"},	 			 	 			 	 	 
            {name:'ID_DonThuocMau',index:'ID_DonThuocMau',search:false, width:"0%", editable:false,align:'left',hidden:true},
			{name:'ID_ThuocTam',index:'ID_ThuocTam',search:false, width:"10%", editable:false,align:'right',hidden:true},
			{name:'DaLuu',index:'DaLuu',search:false, width:"10%", editable:false,align:'right',hidden:true},
			{name:'ID_TTMChiTiet',index:'ID_TTMChiTiet',search:false, width:"10%", editable:false,align:'right',hidden:true},
            ],      
		grid_mode:'',
		grid_move:"",
		//grid_save_option:"",	
		//column:["CachDungLieuDung"],
		//func_column:["luoi_CachDungLieuDung"],	
		loadonce: false,
		local:false,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed5',
		sortname: 'ID_Thuoc',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: false,
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		
		caption: "Đơn thuốc mẫu chi tiết",
		editurl:'clientArray',
		onCellSelect: function (rowid,iCol,cellcontent,e) {
			var cm = jQuery("#rowed5").jqGrid("getGridParam", "colModel");
			var colName = cm[iCol];
			window._colname=colName['index'];
			if(iCol==0){
				var r = confirm("Bạn muốn xóa thuốc đang chọn?");
				if (r == true) {
					var rowData = jQuery('#rowed5').jqGrid ('getRowData',rowid);
					 $('#rowed5').jqGrid('delRowData',rowid);	
					  if(window.thuocxoa==''){
						  window.thuocxoa=rowid;
					  }else{
						  window.thuocxoa=window.thuocxoa+','+rowid;
					  }
					$("#rowed5_ilcancel").click();
				}

            }else{
				
			}
        },
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			//var rowData = jQuery('#rowed5').jqGrid ('getRowData',rowId);
		//	$("#rowed5").jqGrid('setCell',rowId,'ID_Thuoc', rowData['ID_ThuocTam']);
			$("#prowed5 .ui-icon-pencil").click();
 		},
		loadComplete: function(data) {
			var ids = jQuery("#rowed5").jqGrid('getDataIDs');
			for(var i=0;i < ids.length;i++){
				be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:3px;"></span></span>';
				$("#rowed5").jqGrid('setRowData',ids[i],{xoa:be});	 	
			}
		},
	});	
	
	//$("#xetnghiem_camket").jqGrid('navGrid',"#pxetnghiem_camket",{add: false, edit: false, del: false, search: false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	$("#rowed5").jqGrid('navGrid',"#prowed5",{add: false, edit: false, del: false, search: false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	$("#rowed5").jqGrid('inlineNav', '#prowed5', {add: true, addtext: 'Thêm mới', edittext: '', edit: true,save:false,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,
                    aftersavefunc: function(rowId, response,lastsel) {
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed5');
						$('#rowed5').focus();
						var current_rowed5=$('#rowed5').jqGrid('getCell',rowId, 'ID_Thuoc')
						
						$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
						$("#"+rowId).attr("id",current_rowed5);
						$('#'+current_rowed5).removeClass("ui-state-highlight");
                    },
					oneditfunc: function(rowId) {
						be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:3px;"></span></span>';
				$("#rowed5").jqGrid('setRowData',rowId,{xoa:be});	
						combobox_inline_new('ID_Thuoc',rowId,'rowed5',create_rowed5_grid,window.grid_data_thuoc,0,1,rowed5_callback)//new
						rowed5_inline_enter(rowId);
					},
                    afterrestorefunc: function(rowId) {
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed5');		
						$("#rowed5").jqGrid('bindKeys');
						$('#rowed5').focus();		
                    }		 
                }
            	},	
            editParams: {
				keys:true,
				 	aftersavefunc: function(rowId, response,lastsel) {
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed5');
						$('#rowed5').focus();
						var current_rowed5=$('#rowed5').jqGrid('getCell',rowId, 'ID_Thuoc')
						
						$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
						$("#"+rowId).attr("id",current_rowed5);
						$('#'+current_rowed5).removeClass("ui-state-highlight");
                    },
                	oneditfunc: function(rowId) {	
						var _idthuoc=$('#rowed5').jqGrid('getCell',rowId, 'ID_ThuocTam');
						//alert(window.grid_data_thuoc);
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed5');
						combobox_inline_new('ID_Thuoc',rowId,'rowed5',create_rowed5_grid,window.grid_data_thuoc,_idthuoc,1,rowed5_callback)//new	
						rowed5_inline_enter(rowId);
					},
                    afterrestorefunc: function(rowId) {	
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed5');		
						$("#rowed5").jqGrid('bindKeys');
						$('#rowed5').focus();								   
					},
			}
       	 });
		 $('#rowed5_iladd').removeClass('ui-state-disabled');
		 
	$("#rowed5").setGridWidth($(window).width()-50);
	$("#rowed5").setGridHeight($(window).height()-320);	
}
 
 
	
function shortcut_key1() {
    jwerty.key('f3', false);
    jwerty.key('f4', false);
    jwerty.key('f8', false);
    jwerty.key('f9', false);
    jwerty.key('f5', false);
    $('body #grid_phong_ban').bind('keydown', function(e) {
        if (jwerty.is('f3', e)) {
            $("#prowed3 .ui-icon-plus").trigger("click");
        }
    });
    $('.rowed3,.rowed4,.prowed3,.prowed4').bind('keydown', function(e) {
        if (jwerty.is('f4', e)) {
            $(".ui-icon-pencil").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f8', e)) {
            $(".ui-icon-trash").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f9', e)) {
            $(".ui-icon-search").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f5', e)) {
            $(".ui-icon-refresh").trigger("click");
			//alert();
        }
    });
	
}
function init_data(){
    /*$("#madonthuoc_text").focus();	 
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);			  
	   $('#container input[type=text],#container textarea,#container input[type=checkbox],#container span input,#container a#save_data,#container a#clear_all,#container a#bndk').bind("keydown", function(e) {		 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {            
 
                var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,select");
                var idx = inputs.index(this);
				//alert(idx)
                if (idx == inputs.length - 1) {					 
					if(inputs[0].nodeName!="SELECT"){;
                    	inputs[0].select();
					}else{
						inputs[0].focus();
					}
                } else {		
					 $(".ui-datepicker").hide();  			 
                    
					if(inputs[idx].lang=="new_grid"){
						MaNCC_check("ID_NCC","ID_NCC1")
					}else{
						inputs[idx + 1].focus(); //  handles submit buttons
					}
					if(inputs[idx + 1].nodeName!="SELECT"){;
                   	 	inputs[idx + 1].select();
					}
                }
				if(inputs[idx].lang=="end"){					 
					if($("#rowed5").getDataIDs().length>0){	
						$("#rowed5").jqGrid("setSelection",$("#rowed5").getDataIDs()[0], true);						 
						$("#prowed5 .ui-icon-pencil").click();           
					}else{
						$("#prowed5 .ui-icon-plus").click();
						//action="edit";
					}
				}
                return false;
             }else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,select");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
			}
        });*/
}

function rowed5_inline_enter(rowid){
	$('#rowed5 #'+rowid+'_ID_Thuoc_combobox,#rowed5 #'+rowid+'_LieuDungHangNgay,#rowed5 #'+rowid+'_CachDung ,#rowed5 #'+rowid+'_CachDungChiTiet').bind('keydown',function(e){
		if ((jwerty.is('enter',e))||(jwerty.is('tab',e))){
			if($('#rowed5 #'+rowid+'_ID_Thuoc_combobox').is(":focus")){
				setTimeout(function(){
						$('#rowed5 #'+rowid+'_LieuDungHangNgay').focus();
						$('#rowed5 #'+rowid+'_LieuDungHangNgay').select();
				},50);			
			}
			if($('#rowed5 #'+rowid+'_LieuDungHangNgay').is(":focus")){
				setTimeout(function(){
						$('#rowed5 #'+rowid+'CachDungChiTiet').focus();
						$('#rowed5 #'+rowid+'_CachDung').select();
						return false;
				},50);			
			}
			if($('#rowed5 #'+rowid+'_CachDung').is(":focus")){
				setTimeout(function(){
					$('#rowed5 #'+rowid+'_CachDungChiTiet').focus();
					$('#rowed5 #'+rowid+'_CachDungChiTiet').select();
					return false;
				},50);			
			}
			if($('#rowed5 #'+rowid+'_CachDungChiTiet').is(":focus")){
				jQuery("#rowed5").jqGrid('saveRow',rowid);
				$('#rowed5_iladd').removeClass('ui-state-disabled');
				be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:3px;"></span></span>';
						$("#rowed5").jqGrid('setRowData',rowid,{xoa:be});
				setTimeout(function(){			
					$("#rowed5_iladd").click();
				},50);
			}
			
		}
		
	});
	
}
function rowed5_callback(){
	
}
function check_idthuoc(value,colname){
	ids_rowed5=$('#rowed5').jqGrid('getDataIDs');
	ids_rowed5=removeA(ids_rowed5, $('#rowed5').jqGrid('getGridParam','selrow'));
	console.log($.inArray(value, ids_rowed5));
	if($.inArray(value, ids_rowed5) > -1){
		return [false,'Thuốc này đã có','ID_Thuoc1'];
	}else if($.trim(value)==''){
		return [false,'Chưa chọn thuốc','ID_Thuoc1'];
	}else{
		return[true,''];
	}
}

function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}

function create_rowed5_grid(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên thuốc'],
		colModel:[			
			{name:'TenThuoc',index:'TenThuoc', search: true}, 
		],
		hidegrid: false,
		gridview: true,
		loadonce: false,
		scrollrows : true,
		scroll: false,		 
		modal:true,	 
		rowNum: 20000,
		rowList:[],
		sortname: 'TenThuoc',
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: 500,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},		
		sortorder: "desc",
		serializeRowData: function (postdata) { 
		},
		onSelectRow: function(id){	
			//var rowData = $(elem).getRowData(id); 
			$('#rowed5').jqGrid("setCell", $("#rowed5").jqGrid('getGridParam', 'selrow'), "ID_ThuocTam",id);
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
				
 		},
		loadComplete: function(data) {				
			//var ids_DM_XetNghiem=$(elem).jqGrid('getDataIDs');
		},	  		
	});	
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	
}

function resize_form(){
	$("#rowed3").setGridWidth($(window).width()-15);
	$("#rowed3").setGridHeight(($(window).height()/2)-110);
	$("#rowed4").setGridWidth($(window).width()-15);
	$("#rowed4").setGridHeight(($(window).height()/2)-100);
	$("#rowed5").setGridWidth($(window).width()-50);
	$("#rowed5").setGridHeight($(window).height()-320);		
}
</script>