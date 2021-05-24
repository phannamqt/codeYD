<table width="100%" border="0">
  <tr>
    <td width="200px!important" align="left" style="font-size:16px"><label><strong>Tổng tiền của toa thuốc:</strong></label>      &nbsp;</td>
    <td align="left" style="min-width:50px!important; font-size:16px; color:#F00"><strong><label id="tongtien"></label></strong></td>
    <td width="178px"><input type="submit" name="cnttudmthuoc" id="cnttudmthuoc" value="Cập nhật từ danh mục thuốc"></td>
    <td width="47px"><input type="submit" name="luu" id="luu" value="Lưu"></td>
    <td width="117px"><input type="submit" name="xembill" id="xembill" value="Xem bill hóa đơn"></td>
    <td width="106px"><input type="submit" name="intoahoadon" id="intoahoadon" value="In toa hóa đơn"></td>
  </tr>
</table>
<div >      	 
  <table id="rowed3" ></table>
				<div id="prowed3"></div> 
		</div>  
<script type="text/javascript">
jQuery(document).ready(function() {
			
	var lastsel; 	
	create_grid();	
	shortcut_key();		
	$('#xuathuoc').button();
		$('#cnttudmthuoc').button();
		$('#luu').button();
		$('#xembill').button();
		$('#intoahoadon').button();
		luu_click();
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_trinhdo").height()-150);
	});
	
	$("#xembill").click(function(e){	
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_thanhtoanhoadon&header=top&id_luotkham=<?=$_GET['ID_LuotKham']?>&type=report&id_form=10&tenin="+$('input[name = "radio"]:checked').val(),'ToaThuocHoaDon');
		$(".frame_u78787878975f").css("width","793px");
	});
	$("#intoahoadon").click(function(e){	
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_intoathuoc&header=top&id_luotkham=<?=$_GET['ID_LuotKham']?>&type=report&id_form=10&tenin="+$('input[name = "radio"]:checked').val(),'ToaThuocHoaDon');
		$(".frame_u78787878975f").css("width","793px");
	});
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);

function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_hoadon',
		datatype: "json",	
		colNames:['Id','Thuốc','Số lượng','Đơn giá','%(Per)','Thành tiền','In'],
		colModel:[
			{name:'ID_Thuoc',index:'ID_Thuoc',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'TenHoaDon',index:'TenHoaDon',search:true, width:"30%", editable:false,align:'center',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
			{name:'SoThuocThucXuat',index:'SoThuocThucXuat',search:true, width:"20%", editable:false,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:2, colpos:1}},	 
			{name:'Gia',index:'Gia',search:true, width:"20%", editable:false,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:2, colpos:1}},	 
			{name:'HeSoDieuChinhGiaBan_HoaDon',index:'HeSoDieuChinhGiaBan_HoaDon',search:true, width:"5%", editable:true,align:'right',hidden:false,editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
				
								
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
				var rowData = $('#rowed3').getRowData(tam);
				//alert(rowData['slbsk']);
				//$(e.target).val(minmax_var($(e.target).val(),0,rowData['slbsk']));
				//var sumslbnyc=Math.round(($(e.target).val())*rowData['sl1n']);
				//var sum2 = $("#rowed3").jqGrid("footerData", "get")['slbnyc'] -$(e.target).val()+$('#'+tam+'_slbnyc').val();
				//$('#'+tam+'_slbnyc').val(sumslbnyc);	
						
				var tt=rowData['SoThuocThucXuat']*rowData['Gia']*(100+$(e.target).val())/100;
				$("#rowed3").jqGrid("setCell", tam, 'ThanhTien', tt);
				var sum3 = $("#rowed3").jqGrid("getCol", "ThanhTien", false, "sum");
				$("#rowed3").jqGrid("footerData", "set", {ThanhTien:sum3}); 
				$('#ThanhTien').text(sum3);
                 } }],dataInit : function (elem) { 
				number_textbox(elem);
} }}, 
			{name:'ThanhTien',index:'ThanhTien',search:true, width:"20%", editable:false,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:2, colpos:1}}, 
			{name:'ChonIn',index:'ChonIn', width:"15%", editable:true,stype: 'checkbox',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
				//alert($("#"+$(e.target).attr('id')).is(':checked'));


                 } }]}}, 	
    
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
		sortname: 'ID_TrinhDo',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		footerrow: true,
	
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
		var sum3 = $("#rowed3").jqGrid("getCol", "ThanhTien", false, "sum");
				$("#rowed3").jqGrid("footerData", "set", {ThanhTien:sum3}); 
			grid_filter_enter("#rowed3");
			var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){ 
		 $('#rowed3').editRow(tmp1[i], true);
		 $("#"+tmp1[i]+"_ChonIn").prop("checked",true);
		 };
		 var ids = $('#rowed3').jqGrid('getDataIDs');
				var rowData = $('#rowed3').getRowData(ids[0]);
				
				var sum3 = $("#rowed3").jqGrid("getCol", "ThanhTien", false, "sum");
				$("#tongtien").html(sum3); 
				
				 $("#rowed3").jqGrid("footerData", "set", {tttycbn:sum3});
		},	  
		
		caption: "Thông tin hóa đơn"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 					  
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_trinhdo").height()-150);
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

function luu_click(){
		$('#luu').click(function(e){
			var ids = $('#rowed3').jqGrid('getDataIDs');
			 dataToSend = '{"rows":[';
			phancach = ",";
			phancach1 = "";
			for(i=0;i<=ids.length-1;i++){
					dataToSend += phancach1 + '{"id":"' + ids[i]+ '"';	
					dataToSend += phancach + '"HeSoDieuChinhGiaBan_HoaDon":"' + $('#'+ids[i]+'_HeSoDieuChinhGiaBan_HoaDon').val()+ '"';			       
			        dataToSend += phancach + '"ThanhTien":"' + $("#rowed3").jqGrid("getCell", ids[i], 'ThanhTien') + '"}';
					phancach1 = ",";
			}
			dataToSend += ']}';
			//alert(dataToSend)
			dataToSend = jQuery.parseJSON(dataToSend);
			//alertObject(dataToSend)
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update&hienmaloi=3',dataToSend)
		})
	}




 
</script>

