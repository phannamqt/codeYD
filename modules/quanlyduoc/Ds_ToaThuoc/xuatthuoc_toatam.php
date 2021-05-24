
<?php
//$data= new SQLServer;
$store_name="{call GD2_get_cauhinh (?)}";
$params = array( $_SERVER['REMOTE_ADDR']);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$cauhinh= $excute->get_as_array();
if(count($cauhinh)==0){
	$kho=0;	
}else{
	$kho=$cauhinh[0]['ID_Kho'];	
}
	echo "<script type='text/javascript'>";	
	echo "window.dskho='".$kho."';";
	echo "</script>";

?>
<style type="text/css">

#phieuxxuatthuoc,#inphieuxxuatthuoc{
	width: 122px;
}#xemphieuxt,#inphieuxt,#xemnhanthuoc,#innhanthuoc{
	width: 120px;
}#phieudieutri,#hoadon,#luu,#chinhsua,#intoathuoc,#trathuoc{
	width: 90px;
}#luu{
	width: 70px;
	height: 50px;
}fieldset {
	display: inline-block;
	vertical-align: top;
	height: 85px!important;
}.lbbskt,.lb1,.songaythuoctd,#tongtien{
	font-weight:bold!important;
}#chiatoathuoc1,#songaythuocyc1{
	width:50px!important;
}label{
	font-size:12px;
}
#nhanvien_combobox{
	margin-top:3px;
}
html, body{
    height: 100%;
}input[id*="sntbnyc"],input[id*="slbnyc"]{
  text-align:right;
}
</style>

<body> 


		
        <div id="id_tongthe" class="ui-widget-content" style="display:inline-block; top:-100px;width:100%" >
		<fieldset id="tiensubanthan_fieldset" style="display:inline;width:599px!important" >
			 <legend style="font-weight:bold;">Thông tin bệnh nhân</legend>
			<div style="padding:2px 0px;display:inline-block" class="thongtin_tongthe">
			<div class="patient_info"></div>        
			</div ></fieldset>
		
			 <fieldset id="thongtinchung_fieldset"  style="display:inline; width:604px" >
			 <legend style="font-weight:bold;">Thông tin chung</legend>
		
        
               
            <div class="form_row" style="vertical-align:top"  >
        
		        <div>
		        <label style="width:22px">BS:</label>
                <label class="lbbskt" style="width:195px"><strong>Bs.Dat</strong></label>
		       <label class="lb" style="width:65px" >Ngày k.đơn:</label>
						<label class="lb1" style="width:90px"></label>
				
		    
		      </div>
		         
				
					
					
                   
		       <div>
		         
                 <label style="vertical-align: top; width:60px"> Dặn dò BS:</label>
                 <textarea name="dando" cols="20" id="dando" style=" width:267px" ></textarea>
	        
        </div>
        </div>
        
        
		      
		
		   
		      
	        </fieldset>
		    
			
        </div> 
		<div >      	 
				<table  id="rowed3" ></table>
				<div id="prowed3"></div> 
		</div> 
		 
		<div>
        <fieldset id="nut_fieldset" style="width:100%" ><table border="0" width="100%">
  <tr>
    <td align="right"><label>Số ngày thuốc theo đơn:</label></td>
    <td colspan="2" align="left"><label class="songaythuoctd"></label></td>
  
   
 
    <td align="right">Tổng tiền:</td>
    <td align="left"><label id="tongtien"><strong>24.568</strong></label></td>
  </tr>
  <tr>
    <td><label style="color:#390"><strong>In hóa đơn theo:</strong></label>      </td>
    <td><input name="radio" type="radio" id="tengoc" value="TenGoc" checked="CHECKED">
      <label for="tengoc">Tên gốc</label></td>
    <td><input type="radio" name="radio" id="tenkhac" value="TenKhac">
      <label for="tenkhac">Tên khác</label></td>
    <td></td>
    <td><input type="submit" name="phieuxxuatthuoc" id="phieuxxuatthuoc" value="Xem phiếu xuất thuốc"></td>
  <td><input type="submit" name="xemnhanthuoc" id="xemnhanthuoc" value="Xem nhãn thuốc"></td>
    <td><input type="submit" name="phieudieutri" id="phieudieutri" value="Phiếu điều trị" ></td>
    
    <td rowspan="2">
      <input type="submit" name="luu" id="luu" value="Xuất thuốc" style="color:#900; font-weight:bold">
    </td>
  </tr>
  <tr>
    <td></td>
    <td><input type="radio" name="radio" id="tenbietduoc" value="TenBietDuoc">
      <label for="tenbietduoc">Tên biệt dược</label></td>
    <td><input type="radio" name="radio" id="tenhoadon" value="TenHoaDon">
      <label for="tenhoadon">Tên hóa đơn</label></td>
    <td></td>
    <td><input type="submit" name="inphieuxxuatthuoc" id="inphieuxxuatthuoc" value="In phiếu xuất thuốc"></td>
     <td><input type="submit" name="innhanthuoc" id="innhanthuoc" value="In nhãn thuốc"></td>
    <td><input type="submit" name="inphieudieutri" id="inphieudieutri" value="In phiếu điều trị" >
  
  </tr>
</table></fieldset>

</div>
    
</body>
</html> 

<script type="text/javascript">
var arrary_enter=[];
var arrary_enter1=[];


    jQuery(document).ready(function() {
	$.cookie("in_status", "print_preview"); 
	id_benhnhan=<?=$_GET['id_benhnhan']?>;	
    $.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	    
	});
		
		$('#xemphieuxt').button();
		$('#inphieuxt').button();
		$('#phieuxxuatthuoc').button();
		$('#inphieuxxuatthuoc').button();
		$('#xemnhanthuoc').button();
		$('#innhanthuoc').button();
		$('#inphieudieutri').button();
		$('#phieudieutri').button();		
		$('#intoathuoc').button();
		
		$('#xemphieuxt').button('disable');
		$('#inphieuxt').button('disable');
		$('#phieuxxuatthuoc').button('disable');
		$('#inphieuxxuatthuoc').button('disable');
		$('#xemnhanthuoc').button('disable');
		$('#innhanthuoc').button('disable');
		$('#inphieudieutri').button('disable');
		$('#phieudieutri').button('disable');		
		$('#intoathuoc').button('disable');
		
		$('#luu').button();
		
		
		 xuathuoc_click();
		
		 resize_control();
		 $('#trathuoc').button({disabled:false});
		
		 //$('#phieuxxuatthuoc').button("disabled",true);
		 //$('#inphieuxxuatthuoc').button( 'disable');
		 //$('#innhanthuoc').button( 'disable');
		
		autocompleted_combobox_callback('#chiatoathuoc',tinhlai);
		autocompleted_combobox_callback('#songaythuocyc',tinhlai);
		
     	create_grid();
        resize_control();
		luu_click();
		
	$("#phieudieutri").click(function(e){
		var id_check=is_check();
		$.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_phieudieutri&header=top&id_xuatkho="+id_xuatkho+"&id_donthuoc=<?= $_GET['ID_DonThuoc']?>&type=report&id_form=10&tenin="+$('input[name = "radio"]:checked').val()+"&xemtruocin=1&check="+id_check,'PhieuDieuTri');
		$(".frame_u78787878975f").css("width","793px");
	});
	$("#inphieudieutri").click(function(e){
		var id_check=is_check();
		$.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_phieudieutri&header=top&id_xuatkho="+id_xuatkho+"&id_donthuoc=<?= $_GET['ID_DonThuoc']?>&type=report&id_form=10&tenin="+$('input[name = "radio"]:checked').val()+"&xemtruocin=0&check="+id_check,'PhieuDieuTri');
		$(".frame_u78787878975f").css("width","793px");
	});
	$("#intoathuoc").click(function(e){
		var id_check=is_check();
		$.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_intoathuoc&header=top&id_xuatkho="+id_xuatkho+"&id_donthuoc=<?= $_GET['ID_DonThuoc']?>&type=report&id_form=10&tenin="+$('input[name = "radio"]:checked').val()+"&check="+id_check,'InDonThuoc_Bsy');
		$(".frame_u78787878975f").css("width","793px");
	});
	$("#xemnhanthuoc").click(function(e){
		var id_check=is_check();
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_nhanthuoc&header=top&id_donthuoc=<?= $_GET['ID_DonThuoc']?>&type=report&id_xuatkho="+id_xuatkho+"&id_form=10&tenin="+$('input[name = "radio"]:checked').val()+"&xemtruocin=1&check="+id_check,'DonThuoc_Duoc');
		$(".frame_u78787878975f").css("width","793px");
	});
	$("#innhanthuoc").click(function(e){
		var id_check=is_check();
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_nhanthuoc&header=top&id_donthuoc=<?= $_GET['ID_DonThuoc']?>&type=report&id_xuatkho="+id_xuatkho+"&id_form=10&tenin="+$('input[name = "radio"]:checked').val()+"&xemtruocin=0&check="+id_check,'DonThuoc_Duoc');
		$(".frame_u78787878975f").css("width","793px");
	});
	$("#phieuxxuatthuoc").click(function(e){
	$.cookie("in_status", "print_preview");
		var id_check=is_check();
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_phieuxuatthuoc&header=top&id_xuatkho="+id_xuatkho+"&id_donthuoc=<?= $_GET['ID_DonThuoc']?>&type=report&id_form=10&tenin="+$('input[name = "radio"]:checked').val()+"&xemtruocin=1&check="+id_check,'PhieuXuatThuoc');
		$(".frame_u78787878975f").css("width","793px");
	});
	$("#inphieuxxuatthuoc").click(function(e){
	$.cookie("in_status", "print_preview");
		var id_check=is_check();
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_phieuxuatthuoc&header=top&id_xuatkho="+id_xuatkho+"&id_donthuoc=<?= $_GET['ID_DonThuoc']?>&type=report&id_form=10&tenin="+$('input[name = "radio"]:checked').val()+"&xemtruocin=0&check="+id_check,'PhieuXuatThuoc');
		$(".frame_u78787878975f").css("width","793px");
	});
		
		
        $(window).resize(function() {
            temp = jQuery(window).height() - 50;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })

    })
	
    function resize_control() {
	$("#thongtinchung_fieldset").css("width",620);
	$("#table1").css("width",$("#thongtinchung_fieldset").width()-5);
	
	$(".content").css("width",$(window).width()-20);
		$("#rowed3").setGridWidth($(window).width()-20);
		$("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-350);
  
    }

 function create_grid() {
        $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=toathuoc_toatam&id_donthuoc=<?=$_GET['ID_DonThuoc']?>',
		datatype: "json",
		colNames:['Id','Thuốc/vật tư','ĐVT','Cách dùng','SL/1ngày','SL BS kê','N.thuốc BNYC','SL BNYC','SL T.Xuất','Đơn giá','T.Tiền theo BNYC','In','','','','','','','','','','',''],
		colModel:[
			{name:'ID_DonThuoc',index:'ID_DonThuoc',search:false,search:false,  editable:false,align:'right',hidden:true}, 
			{name:'TenBietDuoc',index:'TenBietDuoc',search:true, width:"25%", editable:false,align:'left',hidden:false},
			{name:'dvt',index:'đvt',search:true, width:"5%", editable:false,align:'left',hidden:false},	 
			{name:'cachdung',index:'cachdung',search:true, width:"25%", editable:false,align:'left',hidden:false}, 
			{name:'sl1n',index:'sl1n',search:true, width:"5%", editable:false,align:'right',hidden:false}, 
			{name:'slbsk',index:'slbsk',search:true, width:"5%", editable:false,align:'right',hidden:false}, 
			{name:'sntbnyc',index:'sntbnyc',search:true, width:"5%", editable:true,align:'right',hidden:true,editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
				
				$(e.target).val(minmax_var($(e.target).val(),0,$('.songaythuoctd').text()));				
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
				var rowData = $('#rowed3').getRowData(tam);
				var sumslbnyc=Math.round(($(e.target).val())*rowData['sl1n']);
				var sum2 = $("#rowed3").jqGrid("footerData", "get")['slbnyc'] -$('#'+tam+'_slbnyc').val()+sumslbnyc;
				$('#'+tam+'_slbnyc').val(sumslbnyc);				
				var tt=sumslbnyc*rowData['dongia'];
				$("#rowed3").jqGrid("setCell", tam, 'tttycbn', tt);
				var sum3 = $("#rowed3").jqGrid("getCol", "tttycbn", false, "sum");
				$("#rowed3").jqGrid("footerData", "set", {slbnyc:sum2,tttycbn:sum3});
				//alert(sum3);
				$('#tongtien').text(formatMoney(sum3))
                 } }],dataInit : function (elem) { 
				number_textbox(elem);
} }}, 
			{name:'slbnyc',index:'slbnyc',search:true, width:"5%", editable:true,align:'right',hidden:false,editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
				
								
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
				var rowData = $('#rowed3').getRowData(tam);
				
				
				
				$(e.target).val(minmax_var($(e.target).val(),0,$('#rowed3 tr#'+tam+' td[aria-describedby="rowed3_slbsk"]').html()-$('#rowed3 tr#'+tam+' td[aria-describedby="rowed3_sltx"]').html()));	
				
				
				
				var sum2=0
				$('*[id*=_slbnyc]:visible').each(function() {
					if($.trim($(this).val())!=''){
					sum2=sum2+parseFloat($(this).val());
					}
				});						
				var tt=$(e.target).val()*rowData['dongia'];
				$("#rowed3").jqGrid("setCell", tam, 'tttycbn', tt);
				var sum3 = $("#rowed3").jqGrid("getCol", "tttycbn", false, "sum");
				$("#rowed3").jqGrid("footerData", "set", {slbnyc:sum2,tttycbn:sum3}); 
				$('#tongtien').text(formatMoney(sum3));
                 } }],dataInit : function (elem) { 
				number_textbox(elem);
} },
				}, 
			{name:'sltx',index:'sltx',search:true, width:"5%", editable:false,align:'right',hidden:false},			
			{name:'dongia',index:'dongia',search:true, width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions : {  decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:""},sorttype:'currency'},			
			{name:'tttycbn',index:'tttycbn',search:true, width:"10%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions : {  decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:""},sorttype:'currency'},			
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
			{name:'GhiChu',index:'GhiChu',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'ID_LuotKham',index:'ID_LuotKham',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'PhanTramThue',index:'PhanTramThue',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'ID_Thuoc',index:'ID_Thuoc',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
		],
            loadonce: true,
		scroll: 1,	
		grid_mode:'',
  grid_move:"",
  grid_save_option:"",
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
				$("#dando").val(rowData['GhiChu']);
				for(var i=0;i<=rowData['SoNgayThuoc'];i++){
				$('#songaythuocyc').append($('<option>',{
					value:i,
					text:i
				}))
					
				};
				
				var sum = $("#rowed3").jqGrid("getCol", "slbsk", false, "sum");
				var sum1 = $("#rowed3").jqGrid("getCol", "slbnyc", false, "sum");
				var sum2 = $("#rowed3").jqGrid("getCol", "sltx", false, "sum");
				var sum3 = $("#rowed3").jqGrid("getCol", "tttycbn", false, "sum");
				$('#tongtien').text(formatMoney(sum3)); 
				
				 $("#rowed3").jqGrid("footerData", "set", {slbsk: sum,slbnyc:sum1,sltx:sum2,tttycbn:sum3});
				for (i = 0; i < ids.length; i++) {
			        $('#rowed3').jqGrid('editRow', ids[i], true);
					
					arrary_enter.push("#rowed3 #"+ids[i]+"_sntbnyc");
					arrary_enter1.push("#rowed3 #"+ids[i]+"_slbnyc");
					if(i==(ids.length-1)){		
							setTimeout(function(){
							jQuery("#rowed3 #"+ids[0]+"_sntbnyc").focus();
							jQuery("#rowed3 #"+ids[0]+"_sntbnyc").select();
							},100);
							$("#rowed3").setSelection(ids[0]);
					}
			    }
				
				var array_tam=[]; 
				array_tam=arrary_enter.concat(arrary_enter1);
				$(array_tam).unbind('keyup')
				
			
		
			$(array_tam.toString()).bind('keyup',function(e){
			
				if (e.keyCode==13) {	
			
					if(array_tam.indexOf("#rowed3 #"+e.target.id)==array_tam.length-1){
					
					}
					else{
					
						$(array_tam[array_tam.indexOf("#rowed3 #"+e.target.id)+1]).focus();						
						a=array_tam[array_tam.indexOf("#rowed3 #"+e.target.id)+1].split("#")[2];
						a=a.split("_");
						a2=a[0]+"_"+a[1];
						$("#rowed3").setSelection(a2);
					}	
				}
				})
				
            },
            caption: "Thông tin chi tiết"
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }
 function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname',width:'30%', hidden: false},
                {name: 'hoten', index: 'hoten',width:'70%', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    function create_kho(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên kho', 'Điện thoại'],
            colModel: [
                {name: 'TenKho', index: 'TenKho', hidden: false},
                {name: 'DienThoai', index: 'DienThoai', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 100,
            width: 280,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
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
			var sumslbnyc=Math.round(tam*rowData['sl1n']);
			if(elem=='#songaythuocyc'){
			$('#'+ids[i]+'_sntbnyc').val(tam);
			}
			$('#'+ids[i]+'_slbnyc').val(sumslbnyc);
			sum=sum+sumslbnyc;
			var tt=sumslbnyc*rowData['dongia'];
			$("#rowed3").jqGrid("setCell", ids[i], 'tttycbn', tt);
			ttt=ttt+tt;
		}
		$('#tongtien').text(formatMoney(ttt))
		$("#rowed3").jqGrid("footerData", "set", {slbnyc:sum,tttycbn:ttt});
	
	}
	function luu_click(){
		$('#luu').click(function(e){
			var ids = $('#rowed3').jqGrid('getDataIDs');
			dataToSend  ='{"id_luokham":'+JSON.stringify($("#rowed3").jqGrid("getCell", ids[0], 'ID_LuotKham'));
			dataToSend +=',"id_donthuoc":'+JSON.stringify($("#rowed3").jqGrid("getCell", ids[0], 'ID_DonThuoc'));
			dataToSend +=',"nguoigd":'+JSON.stringify($("#panel_tenbn").html());
			dataToSend += ',"rows":[';
			phancach = ",";
			phancach1 = "";
			for(i=0;i<=ids.length-1;i++){
				if($('#'+ids[i]+'_slbnyc').val()!=0||$.trim($('#'+ids[i]+'_slbnyc').val())!='' ){
					dataToSend += phancach1 + '{"id_thuoc":"' +$("#rowed3").jqGrid("getCell", ids[i], 'ID_Thuoc')+ '"';
					dataToSend += phancach + '"phantramvat":"' + $("#rowed3").jqGrid("getCell", ids[i], 'PhanTramThue')+ '"';					
					dataToSend += phancach + '"id":"' + ids[i]+ '"';	
					dataToSend += phancach + '"soluong":"' + $('#'+ids[i]+'_slbnyc').val()+ '"';			       
			        dataToSend += phancach + '"dongia":"' + $("#rowed3").jqGrid("getCell", ids[i], 'dongia') + '"}';
					phancach1 = ",";
				}
			}
			dataToSend += ']}';
			dataToSend = jQuery.parseJSON(dataToSend);
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_toatam&oper=update&hienmaloi=3&kho='+dskho.split(',')[0],dataToSend)
			.done(function( gridData ) { 
                                                  $('#rowed3').jqGrid('setGridParam', { datatype: "json"}).trigger("reloadGrid");	
												   tooltip_message("Lưu thành công");  
												   window.id_xuatkho=$.trim(gridData);
													$('#xemphieuxt').button('enable');
													$('#inphieuxt').button('enable');
													$('#phieuxxuatthuoc').button('enable');
													$('#inphieuxxuatthuoc').button('enable');
													$('#xemnhanthuoc').button('enable');
													$('#innhanthuoc').button('enable');
													$('#inphieudieutri').button('enable');
													$('#phieudieutri').button('enable');		
													$('#intoathuoc').button('enable');
                                                  })
                                                  .fail(function() {
                                                   tooltip_message( "error" );
                                                  });
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
				if($('#'+ids[i]+'_slbnyc').val()!=0||$.trim($('#'+ids[i]+'_slbnyc').val())!='' ){
					dataToSend += phancach1 + '{"id":"' + ids[i]+ '"';	
					dataToSend += phancach + '"slbnyc":"' + $('#'+ids[i]+'_slbnyc').val()+ '"';			       
			        dataToSend += phancach + '"tttycbn":"' + $("#rowed3").jqGrid("getCell", ids[i], 'tttycbn') + '"}';
					phancach1 = ",";
				}
			}
			
			dataToSend += ']}';		
			dataToSend = jQuery.parseJSON(dataToSend);			
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update&hienmaloi=3',dataToSend).done(function(data){
				
				
			})
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

