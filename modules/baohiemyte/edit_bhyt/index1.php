<html>
<body>	

<div id="dialogTongNgayBaoHiem" style="display:none">  
Số ngày bảo hiểm:<input id="inputTongNgayBaoHiem">
</div>

<div id="dialogCanLamSang" style="display:none"> 
<table>
<tr>
<td>Tên:</td>
<td><input id="inputTenLoaiKham" style="width: 400px;" disabled></td>
</tr>
<tr>
<td>Giá bảo hiểm:</td>
<td><input id="inputGiaBaoHiem" style="width: 400px;"></td>
</tr>

<tr>
<td>BHYT chi trả:</td>
<td><input id="inputThanhTienBaoHiem" style="width: 400px;"></td>
</tr>


</table>
</div>


<div style="display:none" id="DauVaoBaoHiem" >
<textarea id="tarea1" style="min-width: 100%;min-height:90%"></textarea>
</div>


<div id="dialogThuoc" style="display:none">
<table>
<tr>
<td>Tên thuốc:</td>
<td><input id="inputTenGoc" style="width: 400px;"></td>
</tr>

<tr>
<td>Giá cùng chi trả:</td>
<td><input id="inputGiaCungChiTra" style="width: 400px;"></td>
</tr>

</table>

</div>

<label>Mã bệnh nhân:</label><input id="mabenhnhan" value="89045" >
<button id="xem">Xem</button>
<button id="aa">aa</button>
<button id="TongNgayBaoHiem" style="display:none">TongNgayBaoHiem</button>
<table width="100%">
<tr>
<td><table id="gridLuotKham"></table></td>
<td rowspan="2"><table id="gridDonThuocChiTiet" valign="top"></table></td>
</tr>
<tr>
<td valign="top"><table id="gridCanLamSang"></table></td>

</tr>

</table>	
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {	
	//create_luotkham('#gridLuotKham');
	//create_cls('#gridCanLamSang');	
	//create_donthuocchitiet('#gridDonThuocChiTiet');
	mangtam='';
	index='';
	$('#aa').click(function(){
		$( "#DauVaoBaoHiem" ).dialog('open');7

	});

	$( "#DauVaoBaoHiem" ).dialog({
    	resizable: false,
    	height: "auto",
    	autoOpen:false,
    	width: 600,
    	height: 300,
    	modal: true,
    	buttons: {
    		"Lưu": function() {
    			/*mappedArray = $.trim($('#tarea1').val()).replace(/(?:\r\n|\r|\n)/g, '|').split('|').map(function(currentValue,i){    					
    				currentValue.split('\t').map(function(currentValue,i){    					
    					if(i == 0){
    						index=currentValue;
    					}else{
    						mangtam+='\r\n';
    						mangtam+=index+'\t'+i+'\t'+currentValue;
    					}    					
					})
    			$('#tarea1').val(mangtam);*/
    			b='IPSG|ACC|PFR|AOP|COP|ASC|MMU|PFE|QPS|PCI|GLD|FMS|SQE|MOI';
    			b=b.split('|');
    			d=0;
    		
	    			var regexp = /Tiêu Chí IPSG.|Tiêu Chí ACC.|Tiêu Chí PFR.|Tiêu Chí AOP.|Tiêu Chí COP.|Tiêu Chí ASC.|Tiêu Chí MMU.|Tiêu Chí PFE.|Tiêu Chí QPS.|Tiêu Chí PCI.|Tiêu Chí GLD.|Tiêu Chí FMS.|Tiêu Chí SQE.|Tiêu Chí MOI/g;

					var foo = $.trim($('#tarea1').val());
					var match, matches = [];
					mangtam='';
					while ((match = regexp.exec(foo)) != null) {
						matches.push(match.index);
					}
					a=$.trim($('#tarea1').val());
					for(i=0;i<=b.length;i++){
						tam=a.split('Tiêu Chí '+b[i]+'.');									
						for(q=1;q<tam.length;q++){						
							mangtam+='\r\n';							
							mangtam+=b[i]+' '+$.trim(tam[q]).replace(/(?:\r\n|\r|\n)/g, '|').split('|')[0]+'\t'+$.trim(tam[q]).replace(/(?:\r\n|\r|\n)/g, '|').split('|')[1];
							tam2='Các Yếu Tố Đo Lường '+b[i]+'.'+$.trim($.trim(tam[q]).replace(/(?:\r\n|\r|\n)/g, '|').split('|')[0]+'\r\n');
							
							tam3=$.trim($.trim(tam[q]).split(tam2)[1]);						
							tam4=$.trim(tam3).replace(/(?:\r\n|\r|\n)/g, '|').split('|');	
						
							console.log(tam4);					
							dance:
							for(j=0;j<tam4.length-1;j++){												
								if(!isNaN($.trim(tam4[j]).charAt(0))){
									mangtam+='\r\n';
									mangtam+='ME'+$.trim(tam4[j]).charAt(0)+'\t'+$.trim(tam4[j]).substring(2, 2090000);						
								}else{
									d++;
									break dance;
								}
							}
						}						
					}
				
				$('#tarea1').val(mangtam);
				
    			//alert($.trim($('#tarea1').val()).indexOf("Tiêu Chí"));
    			//})
	    	}
	    }
	});

	$( "#dialogCanLamSang" ).dialog({            
		autoOpen: false,
		zIndex: 1,		
		modal: true,
		stack: false,
		open: function(event,ui){
			$( "#dialogCanLamSang" ).dialog( "option", "height", 250 );
            $( "#dialogCanLamSang" ).dialog( "option", "width", 600 ); 
		},
		close: function(event,ui){},
		buttons: {		
			Save: function() {  
				$.ajax({
					type: 'POST',
					data:{
						 ID_CanLamSang:window.ID_CanLamSang
						,ExtField1:window.ExtField1
						,GiaBaoHiem:$.trim($('#inputGiaBaoHiem').val())
						,ThanhTienBaoHiem:$.trim($('#inputThanhTienBaoHiem').val())
					},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=CanLamSang',
					success: function(data, status, xhr) {			
						//$('#gridLuotKham').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
					},
				});
				$( this ).dialog( "close" );
			},
			Cancel: function() {
				$( this ).dialog( "close" );				
			}
		}
	});

	$( "#dialogTongNgayBaoHiem" ).dialog({            
		autoOpen: false,
		zIndex: 1,		
		modal: true,
		stack: false,
		open: function(event,ui){},
		close: function(event,ui){},
		buttons: {
			Save: function() {  				
				$.ajax({
					type: 'POST',
					data:{ID_CanLamSang:$('#inputTongNgayBaoHiem').val(),ID_LuotKham:window.ID_LuotKham},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=TongNgayBaoHiem',
					success: function(data, status, xhr) {			
						//$('#gridLuotKham').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
					},
				});
				$( this ).dialog( "close" );
			},
			Cancel: function() {
				$( this ).dialog( "close" );				
			}
		}
	});	

	$( "#dialogThuoc" ).dialog({            
		autoOpen: false,
		zIndex: 1,		
		modal: true,
		stack: false,
		open: function(event,ui){
			$( "#dialogThuoc" ).dialog( "option", "height", 250 );
            $( "#dialogThuoc" ).dialog( "option", "width", 600 ); 
		},
		close: function(event,ui){},
		buttons: {
			Save: function() {
				$.ajax({
					type: 'POST',
					data:{GiaCungChiTra:$('#inputGiaCungChiTra').val(),ID_DonThuocCT:window.ID_DonThuocCT},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=Thuoc',
					success: function(data, status, xhr) {			
						//$('#gridLuotKham').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
					},
				});
				$( this ).dialog( "close" );
			},
			Cancel: function() {
				$( this ).dialog( "close" );				
			}
		}
	});	

	$("#mabenhnhan").inputmask("integer",{
        radixPoint:"", 
        groupSeparator: "", 
        digits: 0,
        autoGroup: true,
        prefix: '',
        autoUnmask: true,
        rightAlign: false,
    });
    $("#inputTongNgayBaoHiem").inputmask("integer",{
        radixPoint:".", 
        groupSeparator: "", 
        digits: 1,
        autoGroup: true,
        prefix: '',
        autoUnmask: true,
        rightAlign: false,
    });
    $("#inputGiaBaoHiem,#inputThanhTienBaoHiem,#inputGiaCungChiTra").inputmask("integer",{
        radixPoint:"", 
        groupSeparator: ".", 
        digits: 0,
        autoGroup: true,
        prefix: '',
        autoUnmask: true,
        rightAlign: false,
    });


	$('#xem').button().click(function(){
		gridLuotKhamReLoad();
	});
	$('#TongNgayBaoHiem').button().click(function(){
		$( "#dialogTongNgayBaoHiem" ).dialog('open');
	});
	$('#mabenhnhan').bind('keyup', function(e) {		
       	if (jwerty.is('enter', e)) {
			gridLuotKhamReLoad();
        }
   	});
})
function gridLuotKhamReLoad(){
	$.ajax({
		type: 'POST',
		async : false,
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_luotkham&mabenhnhan='+ $.trim($( '#mabenhnhan' ).val()),
		success: function(data, status, xhr) {			
			$('#gridLuotKham').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
		},
	});
}
function create_luotkham(elem){
	$(elem).jqGrid({
		data:[],
		datatype: "local",
		colNames:[ 'BHYT','Phân loại','Mã thẻ','','Ngày vào','Thanh toán','Tổng ngày','id_luotkham'],
		colModel:[
			{name:'LoaiDoiTuongKham',index:'LoaiDoiTuongKham', editable:false,hidden:true},  
			{name:'TenPhanLoaiKham',index:'TenPhanLoaiKham', editable:false},  
			{name:'SoThe',index:'SoThe', editable:false},
			{name:'Ma_KCB_BanDau',index:'Ma_KCB_BanDau', editable:false},
			{name:'ThoiGianVaoKham',index:'ThoiGianVaoKham'},  
			{name:'DaThanhToanBill',index:'DaThanhToanBill'},  
			{name:'NgayBaoHiem',index:'NgayBaoHiem'},				
			{name:'ID_LuotKham',index:'ID_LuotKham',hidden:true},  				
		],
		loadonce: false,     
		rowNum:1000,
		height:100,
		width:600,
		rowList:[],  	 	
		viewrecords: true,        
		ignoreCase:true,
		pgbuttons: false, 
		pgtext: null,	
		emptyrecords: null,	
		recordtext: null,		
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
			$('#TongNgayBaoHiem').trigger('click');
		},
		onSelectRow: function(id){       
			window.ID_LuotKham=id;
			$("#gridCanLamSang").setGridParam({url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham="+id,datatype: "json"}).trigger("reloadGrid");
			$.ajax({
				type: 'POST',
				async : true,
				url: "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuoc&ID_LuotKham="+id,
				success: function(data, status, xhr) {			
					$('#gridDonThuocChiTiet').jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
				},
			});
		},
	});		
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
}
function create_cls(elem) {
	$(elem).jqGrid({
		data:[],
		datatype: "local",
		colNames: ['ID_LoaiKham','ID_Kham','Tên loại khám','Giá BH','Số lần','BHYT chi trả','','','',''],
		colModel: [			
			{name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'ID_Kham', index: 'ID_Kham', search: true, width: "1%", editable: false, align: 'left', hidden: true},               
			{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false}, 
			{name: 'GiaBaoHiem',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'GiaBaoHiem', search: false, width: "10%", editable: false, align: 'right'},           
			{name: 'solan', index: 'solan', search: false, width: "10%", editable: false, align: 'left', hidden: false}, 
			{name: 'ThanhTienBaoHiem',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'ThanhTienBaoHiem', search: false, width: "10%", editable: false, align: 'right', hidden: false},			
			{name: 'TenNhom', index: 'TenNhom', search: false, width: "20%", editable: false, align: 'left', hidden: true},            
			{name: 'ExtField1',index: 'ExtField1',hidden: true},
			{name: 'id',index: 'id',hidden: true},
			{name:'IsBhyt',index:'IsBhyt', width:"5%", editable:true,stype: 'checkbox',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox"
			,editoptions: { defaultvalue:"1",value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {
				var row = $(e.target).closest('tr.jqgrow');
				var tam = row.attr('id');
				ID_CanLamSang=$(elem).jqGrid('getCell', tam, 'id');
				$.ajax({
					type: 'POST',
					data:{ID_CanLamSang:window.ID_CanLamSang},
					async : true,
					url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=bhytCanLamSang',
					success: function(data, status, xhr) {			
						
					},
				});
				} }]}, search: true
			},


		],
		loadonce: true,
		scroll: false,
		modal: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		rowNum: 10000000,
		rowList: [],
		pager: '#prowed3',
		sortname: 'ThoiGianVaoKham',
		height: 300,
		width: 600,
		viewrecords: true,
		ignoreCase: true,
		sortorder: "desc",
		footerrow: true,
		userDataOnFooter: true,
		grouping:true,
		groupingView : {
			groupField : ['TenNhom'],
			groupDataSorted : true ,
			groupCollapse : false,
			groupColumnShow :true,
			groupSummary:false,
			groupText : ['<b>{0} : {PhiThucHien}</b>']
		},
		onCellSelect: function (rowid,iCol,cellcontent,e) {},
		onSelectRow: function(id) {},
		ondblClickRow: function(id) {
			var rowData = $(elem).getRowData(id);
			window.ID_CanLamSang=rowData['id'];
			window.ExtField1=rowData['ExtField1'];			
			if(rowData['ExtField1']!='Giuongbenh'){
				$( "#inputTenLoaiKham" ).val(rowData['TenLoaiKham']);
				$( "#inputGiaBaoHiem" ).val(rowData['GiaBaoHiem']);
				$( "#inputThanhTienBaoHiem" ).val(rowData['ThanhTienBaoHiem']);			
				$( "#dialogCanLamSang" ).dialog('open');
			}			
		},
		onselect: function(id, rowIndex, columnIndex) {},
		onRightClickRow: function(rowid, iRow, iCol, e) {},
		loadComplete: function(data) {
				window.load_complete3=1;
				var grid = $(elem),
				sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
				sum_hotro = grid.jqGrid('getCol', 'hotro', false, 'sum');
				sum_Cungchitra = grid.jqGrid('getCol', 'Cungchitra', false, 'sum');
				sumGiaThueNgoaiThucHien=grid.jqGrid('getCol', 'GiaThueNgoaiThucHien', false, 'sum');
				tongphaitra_bhyt=grid.jqGrid('getCol', 'tongphaitra', false, 'sum');
				tong_bhyt=grid.jqGrid('getCol', 'bhyt', false, 'sum');				
				window.KhauHaoThuocVTYT_grid=grid.jqGrid('getCol', 'KhauHaoThuocVTYT', false, 'sum');
				window.KhauHaoDichVu_grid=grid.jqGrid('getCol', 'KhauHaoDichVu', false, 'sum');  
				grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
				grid.jqGrid('footerData','set', {ID: 'GiaThueNgoaiThucHien:',bhyt:tong_bhyt, GiaThueNgoaiThucHien: sumGiaThueNgoaiThucHien,tongphaitra:tongphaitra_bhyt,hotro:sum_hotro,Cungchitra:sum_Cungchitra});
				var ids = $(elem).jqGrid('getDataIDs');
				for (i = 0; i < ids.length; i++) {		
					$(elem).jqGrid('editRow', ids[i], true);
				}
		},         
	});
}

function create_donthuocchitiet(elem) {
	$(elem).jqGrid({
		data:[],
		datatype: "local",
		colNames: ['Tên thuốc','ĐVT','SL','Đơn giá','Giá Trả','','','','bhyt','',''],
		colModel: [
			{name: 'TenGoc', index: 'TenGoc', search: true, width: "45%", editable: false, align: 'left', hidden: false},
			{name: 'TenDonViTinh',  index: 'TenDonViTinh', search: false, width: "5%", editable: false, align: 'left', hidden: false},
			{name: 'SoThuocThucXuat',formatter:"integer", index: 'SoThuocThucXuat', search: false, width: "5%", editable: false, align: 'right', hidden: false},
			{name: 'Gia',formatter:"integer", index: 'Gia', search: false, width: "8%", editable: false, align: 'right', hidden: false},				
			{name: 'GiaCungChiTra',formatter:"integer", index: 'GiaCungChiTra', search: false, width: "5%", editable: false, align: 'right', hidden: false},
		
			{name: 'NickName', index: 'NickName',  width: "5%", hidden: true },
			{name: 'ID_DonThuoc', index: 'ID_DonThuoc',  width: "5%",  hidden: true},
			{name: 'NgayKeDon', index: 'NgayKeDon',  width: "5%",  hidden: true},
			//{name: 'IsBhyt', index: 'IsBhyt',  width: "5%", },
			{name:'IsBhyt',index:'IsBhyt', width:"5%", editable:true,stype: 'checkbox',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox"
			,editoptions: { defaultvalue:"1",value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {
				alert();
				} }]}, search: true
			},	
			{name: 'ID_DonThuocCT', index: 'ID_DonThuocCT',  width: "5%", hidden: true },
			{name: 'HienThi', index: 'HienThi',  width: "5%", hidden: true },

		],
		loadonce: false,
		scroll: false,
		modal: true,
		footerrow: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		rowNum: 10000000,
		rowList: [],
		pager: '#prowed4',
		height: 450,
		width: 600,
		viewrecords: true,
		ignoreCase: true,
		sortorder: "desc",
		onSelectRow: function(id) {},
		onCellSelect: function (rowid,iCol,cellcontent,e) {},
		ondblClickRow: function(id) {
			var rowData = $(elem).getRowData(id);
			window.ID_DonThuocCT=rowData['ID_DonThuocCT'];		
			$( "#inputTenGoc" ).val(rowData['TenGoc']);
			$( "#inputGiaCungChiTra" ).val(rowData['GiaCungChiTra']);			
			$( "#dialogThuoc" ).dialog('open');			
		},
		onselect: function(rowId, rowIndex, columnIndex) {},
		onRightClickRow: function(rowid, iRow, iCol, e) {},
		grouping:true,
		groupingView : {
			groupField : ['HienThi'],
			groupDataSorted : true ,
			groupCollapse : false,
			groupColumnShow :true,
			groupSummary:false,
			groupText : ['<b>{0}</b>']
		},
		loadComplete: function(data) {
			sum_ThanhTien =  $(elem).jqGrid("getCol", "ThanhTien", false, "sum");
			sum_giavon =  $(elem).jqGrid("getCol", "Cungchitra", false, "sum");
			$(elem).jqGrid("footerData", "set", {Cungchitra:sum_giavon, ThanhTien: sum_ThanhTien});	
			var ids = $(elem).jqGrid('getDataIDs');
			for (i = 0; i < ids.length; i++) {		
				$(elem).jqGrid('editRow', ids[i], true);
			}		
		},
	});
	$('#gview_rowed4 .ui-jqgrid-titlebar').hide();
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
}
</script>