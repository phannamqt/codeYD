

<style type="text/css">
fieldset {
	display: inline-block;
	vertical-align: top;
	height: 50px!important;
}.lbbskt,.lb1,.songaythuoctd,#tongtien{
	font-weight:bold!important;
}#chiatoathuoc1,#songaythuocyc1{
	width:40px!important;
}label{
	font-size:13px;
}
html, body{
    height: 100%;
}
</style>

<body>
		<div >      	 
		  <table  id="rowed3" ></table>
				<div id="prowed3"></div> 
		</div> 
		 
		<div>
        <fieldset id="nut_fieldset" style="width:100%" ><table border="0" width="100%">
  <tr>
    <td align="right"><label>Số ngày thuốc theo đơn:</label></td>
    <td align="left"><label class="songaythuoctd"></label></td>
    <td align="right"><label>Số ngày thuốc trả lại:</label>
	</td>
   
    <td align="left" id="sngaythuoc">
		<select  id="songaythuocyc" style=""></select>
    
	</td>
    <td align="left">
    	<label>Chia toa thuốc:</label>
		
    </td>
    <td align="left" class="chiatoathuoc">
    	<select id="chiatoathuoc"  name="chiatoathuoc" style="width:50px!important; height:100px!important" >
           <option value="1/1">1</option>
           <option value="1/4">1/4</option>
           <option value="1/3">1/3</option>
           <option value="1/2">1/2</option>
           <option value="2/3">2/3</option>
		   <option value="3/4">3/4</option>
           <option value="0/1">0</option>
          
          </select>
    </td>
    <td align="left">Tổng tiền:<label id="tongtien"><strong>24.568</strong></label></td>
    <td><input type="submit" name="phieuxxuatthuoc" id="phieuxxuatthuoc" value="Xem phiếu xuất thuốc"></td>
    <td align="left"><input type="submit" name="tralai" id="tralai" value="Trả lại"></td>
  </tr>
</table></fieldset>

</div>
    
</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {

	$.cookie("in_status", "print_preview"); 
	//id_benhnhan=<?php//$_GET['id_benhnhan']?>;
	
		
		$('#tralai').button();
		$('#phieuxxuatthuoc').button();
		$('#chinhsua').button();
		 resize_control();
		
		autocompleted_combobox_callback('#chiatoathuoc',tinhlai);
		autocompleted_combobox_callback('#songaythuocyc',tinhlai);
		
     	create_grid();
        resize_control();
		tralai_click();
	$(window).resize(function() {
            temp = jQuery(window).height() - 10;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })

	

    })
	
    function resize_control() {
	$(".content").css("width",$(window).width()-20);
		$("#rowed3").setGridWidth($(window).width()-20);
		$("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-250);
  
    }
	$("#nut_fieldset").css("width",$(window).height()-$("#rowed3").height()-10);
	$("#nut_fieldset").css("width",$(window).width()-10);
	

 function create_grid() {
        $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xuathuoc_nuadon&id_luotkham=<?=$_GET['ID_DonThuoc']?>',
		datatype: "json",
		colNames:['Id','Thuốc/vật tư','ĐVT','Cách dùng','SL/1ngày','SL BS kê','SL Thực xuất','Đơn giá','N.Thuốc trả lại','SL trả lại','Tiền trả lại/1v','Thành tiền trả lại','Tiền BN đã trả','In','','','','','','','','','','','','','','',''],
		colModel:[
			{name:'id_luotkham',index:'id_luotkham',search:false,search:false, width:"0%", editable:false,align:'right',hidden:true}, 
			{name:'TenBietDuoc',index:'TenBietDuoc',search:true, width:"15%", editable:false,align:'left',hidden:false},
			{name:'dvt',index:'đvt',search:true, width:"5%", editable:false,align:'center',hidden:false},	 
			{name:'cachdung',index:'cachdung',search:true, width:"20%", editable:false,align:'left',hidden:false}, 
			{name:'sl1n',index:'sl1n',search:true, width:"5%", editable:false,align:'center',hidden:false}, 
			{name:'slbsk',index:'slbsk',search:true, width:"5%", editable:false,align:'center',hidden:false}, 	
			{name:'sttx',index:'sttx',search:true, width:"5%", editable:false,align:'center',hidden:false},
			{name:'dongia',index:'dongia',search:true, width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions : {  decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:""},sorttype:'currency'},	
			{name:'nttralai',index:'nttralai',search:true, width:"5%", editable:true,align:'right',hidden:false,editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
				
				$(e.target).val(minmax_var($(e.target).val(),0,$('.songaythuoctd').text()));				
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
				var rowData = $('#rowed3').getRowData(tam);
				var sumsltralai=Math.round(($(e.target).val())*rowData['sl1n']);
				var sum2 = $("#rowed3").jqGrid("footerData", "get")['sltralai'] -$('#'+tam+'_sltralai').val()+sumsltralai;
				$('#'+tam+'_sltralai').val(sumsltralai);				
				var tt=sumsltralai*rowData['dongia'];
				$("#rowed3").jqGrid("setCell", tam, 'tientralai', tt);
				var sum4 = $("#rowed3").jqGrid("getCol", "tientralai", false, "sum");
				$("#rowed3").jqGrid("footerData", "set", {sltralai:sum2,tientralai:sum4});
				//alert(sum3);
				$('#tongtien').text(formatMoney(sum4))
                 } }],dataInit : function (elem) { 
				number_textbox(elem);
} }}, 
			{name:'sltralai',index:'sltralai',search:true, width:"5%", editable:true,align:'right',hidden:false,editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
				//======================
				
				//=====================
				var row = $(e.target).closest('tr.jqgrow');
				 var tam2 = row.attr('id');
				 tientralai=$(this).val()*$('#'+tam2+'_tientl1v').val();
				 	$("#rowed3").jqGrid("setCell", tam2, 'tientralai', tientralai);
				 var sum4 = $("#rowed3").jqGrid("getCol", "tientralai", false, "sum");
				  $("#rowed3").jqGrid("footerData", "set", {tientralai:sum4});
				 $('#tongtien').text(formatMoney(sum4))
                 } }] },
				}, 
			//{name:'sltx',index:'sltx',search:true, width:"10%", editable:false,align:'right',hidden:false},		
			{name:'tientl1v',index:'tientl1v',search:true, width:"10%", editable:true,align:'right',hidden:false,formatter:'currency',formatoptions : {  decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:""},sorttype:'currency',editoptions: {sorttype:'currency', dataEvents:  [{ type: 'keyup', fn: function(e) { 
				var row = $(e.target).closest('tr.jqgrow');
				 var tam2 = row.attr('id');
				 tientralai=$(this).val()*$('#'+tam2+'_sltralai').val();
				 	$("#rowed3").jqGrid("setCell", tam2, 'tientralai', tientralai);
				 var sum4 = $("#rowed3").jqGrid("getCol", "tientralai", false, "sum");
				  $("#rowed3").jqGrid("footerData", "set", {tientralai:sum4});
				   $('#tongtien').text(formatMoney(sum4))
                 } }] },
				 
				}, 
			{name:'tientralai',index:'tientralai',search:true, width:"10%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions : {  decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:""},sorttype:'currency',editoptions: {sorttype:'currency', dataEvents:  [{ type: 'keyup', fn: function(e) { 
				var row = $(e.target).closest('tr.jqgrow');
                var tam2 = row.attr('id');
				var rowData = $('#rowed3').getRowData(tam2);
				var sum4=0
				$('*[id*=_tientralai]:visible').each(function() {
					if($.trim($(this).val())!=''){
					sum4=sum4+parseFloat($(this).val());
					}
				});	
				var sum5 = $("#rowed3").jqGrid("getCol", "tientralai", false, "sum");
				$("#rowed3").jqGrid("footerData", "set", {tientralai:sum4}); 
				//$('#tongtien').text(formatMoney(sum3));
                 } }],dataInit : function (elem) { 
				number_textbox(elem);
} },},
			{name:'tientruoc',index:'tientruoc',search:true, width:"10%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions : {  decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:""},sorttype:'currency'},			
			{name:'ChonIn',index:'ChonIn', width:"5%", editable:true,stype: 'checkbox',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1}
			,editoptions: { defaultvalue:"1",value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
				
                 } }]}}, 
			{name:'SoNgayThuoc',index:'SoNgayThuoc',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'TenBietDuoc',index:'TenBietDuoc',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'TenGoc',index:'TenGoc',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'TenHoaDon',index:'TenHoaDon',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'TenKhac',index:'TenKhac',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'Ngaykedon',index:'Ngaykedon',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'Bacsiketoa',index:'Bacsiketoa',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'ID_Kho',index:'ID_Kho',hidden:true},
			{name:'ID_Thuoc',index:'ID_Thuoc',hidden:true},
			{name:'SoLoNhaSanXuat',index:'SoLoNhaSanXuat',hidden:true},
			{name:'NgaySanXuat',index:'NgaySanXuat',hidden:true},
			{name:'NgayHetHan',index:'NgayHetHan',hidden:true},
			{name:'SoLoHeThong',index:'SoLoHeThong',hidden:true},
			{name:'ID_NhapKho',index:'ID_NhapKho',hidden:true},
			{name:'ID_NCC',index:'ID_NCC',hidden:true},
		],
            loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 10000000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'id_luotkham',
		height:320,
		width: 1303,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		footerrow: true,
            onSelectRow: function(id) {

             
            },
           ondblClickRow: function(rowId) {
			
    
            },
            onselect: function(rowId, rowIndex, columnIndex) {
        
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

            

            },
            loadComplete: function(data) {
				var ids = $('#rowed3').jqGrid('getDataIDs');
				var rowData = $('#rowed3').getRowData(ids[0]);
				$(".lb1").html(rowData['Ngaykedon']); 
                $(".lbbskt").html(rowData['Bacsiketoa']);
				$(".songaythuoctd").html(rowData['SoNgayThuoc']);
				for(var i=0;i<=rowData['SoNgayThuoc'];i++){
				$('#songaythuocyc').append($('<option>',{
					value:i,
					text:i
				}))
					
				};
				
				var sum = $("#rowed3").jqGrid("getCol", "slbsk", false, "sum");
				//var sum2 = $("#rowed3").jqGrid("getCol", "sltralai", false, "sum");
				//var sum2 = $("#rowed3").jqGrid("getCol", "sltx", false, "sum");
				var sum3 = $("#rowed3").jqGrid("getCol", "tientruoc", false, "sum");
				var sum4 = $("#rowed3").jqGrid("getCol", "tientralai", false, "sum");
				
				$('#tongtien').text(formatMoney(sum4)); 
				
				 $("#rowed3").jqGrid("footerData", "set", {slbsk: sum,tientruoc:sum3,tientralai:sum4});
				for (i = 0; i < ids.length; i++) {
			        $('#rowed3').jqGrid('editRow', ids[i], true);
			    }
            },
            caption: "Bán lẻ theo đơn"
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }
 
	function tinhlai(elem){
		var ids = $('#rowed3').jqGrid('getDataIDs');
		var tam=$(elem).val();
		if(elem=='#chiatoathuoc'){
		tam=tam.split('/')
		tam=tam[0]/tam[1]*$('.songaythuoctd').text();
		//alert($('.songaythuoctd').text());
		}
		
		//alert(tam);
		var ids = $('#rowed3').jqGrid('getDataIDs');
		var sum=0;
		var ttt=0;
		for(i=0;i<=ids.length-1;i++){
			
			var rowData = $('#rowed3').getRowData(ids[i]);
			var sumsltralai=Math.round(tam*rowData['sl1n']);
			if(elem=='#songaythuocyc'){
			$('#'+ids[i]+'_nttralai').val(tam);
			}
			$('#'+ids[i]+'_sltralai').val(sumsltralai);
			sum=sum+sumsltralai;
			var tt=sumsltralai*rowData['dongia'];
			$("#rowed3").jqGrid("setCell", ids[i], 'tttycbn', tt);
			ttt=ttt+tt;
		}
		$('#tongtien').text(formatMoney(ttt))
		$("#rowed3").jqGrid("footerData", "set", {sltralai:sum,tttycbn:ttt});
	
	}
	function tralai_click(){
	
		$('#tralai').click(function(e){
		
		//alert('aaaaaa');
			var ids = $('#rowed3').jqGrid('getDataIDs');
		
			 dataToSend = '{"rows":[';
			phancach = ",";
			phancach1 = "";
			for(i=0;i<=ids.length-1;i++){
				var rowData = $('#rowed3').getRowData(ids[i]);
				
					dataToSend += phancach1 + '{"id":"' + ids[i]+ '"';	
					dataToSend += phancach + '"sltralai":"' + $('#'+ids[i]+'_sltralai').val()+ '"';			       
					dataToSend += phancach + '"tongtien":"' + $("#tongtien").text() + '"';	//phieu nhap
					dataToSend += phancach + '"kho":"' + $.cookie("dskho").split(',')[0] + '"';	
					dataToSend += phancach + '"dongia":"' + $('#'+ids[i]+'_tientl1v').val()+ '"';	//don gia
					dataToSend += phancach + '"thanhtien":"' + rowData.tientralai+ '"';
					dataToSend += phancach + '"ID_Thuoc":"' + rowData.ID_Thuoc+ '"';
					dataToSend += phancach + '"SoLoNhaSanXuat":"' + rowData.SoLoNhaSanXuat+ '"';
					dataToSend += phancach + '"NgaySanXuat":"' + rowData.NgaySanXuat+'"';
					dataToSend += phancach + '"NgayHetHan":"' + rowData.NgayHetHan+ '"';
					dataToSend += phancach + '"SoLoHeThong":"' + rowData.SoLoHeThong+ '"';
					dataToSend += phancach + '"ID_NhapKho":"' + rowData.ID_NhapKho+ '"}';
					phancach1 = ",";
			}
			dataToSend += ']}';
			//alert(dataToSend)
			dataToSend = jQuery.parseJSON(dataToSend);
			//alertObject(dataToSend)
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_phieunhap&oper=add&hienmaloi=3',dataToSend)
		})
	}
		function formatMoney(num)
	 {
		var p = num.toFixed(2).split(".");
		return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
			return  num + (i && !(i % 3) ? "," : "") + acc;
		}, "");
	}
	function xuathuoc_click(){
		$('#xuathuoc').click(function(e){
			var ids = $('#rowed3').jqGrid('getDataIDs');
			 dataToSend = '{"rows":[';
			phancach = ",";
			phancach1 = "";
			for(i=0;i<=ids.length-1;i++){
					dataToSend += phancach1 + '{"id":"' + ids[i]+ '"';	
					dataToSend += phancach + '"sltralai":"' + $('#'+ids[i]+'_sltralai').val()+ '"';			       
			        dataToSend += phancach + '"tttycbn":"' + $("#rowed3").jqGrid("getCell", ids[i], 'tttycbn') + '"}';
					phancach1 = ",";
			}
			dataToSend += ']}';
			//alert(dataToSend)
			dataToSend = jQuery.parseJSON(dataToSend);
			//alertObject(dataToSend)
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update&hienmaloi=3',dataToSend)
		})
	}
	

function is_check(){
		id_check='';
		phancach='';
		var ids = $('#rowed3').jqGrid('getDataIDs');
		for (var i=0;i<=ids.length-1;i++){
			var rowData = $('#rowed3').getRowData(ids[i]);
			if(rowData['ChonIn']==1){
				id_check+=phancach+''+ids[i];
				phancach=',';
			}
		}
		return id_check;
}					 
</script>

