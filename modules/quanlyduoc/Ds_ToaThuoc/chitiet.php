
<?php
$data= new SQLServer;
$store_name="{call GD2_trangthaikham_byiddonthuoc (?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
$params = array($_GET['ID_DonThuoc']);
//print_r($params);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();

$store_name="{call GD2_get_cauhinh (?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
$params = array( $_SERVER['REMOTE_ADDR']);
//print_r($params);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$cauhinh= $excute->get_as_array();
if(count($cauhinh)==0){
	$khoVP=0;	
	$khoBHYT=0;	
}else{
	$khoVP=$cauhinh[0]['ID_Kho']; 	
	$khoBHYT=$cauhinh[0]['ID_KhoBHYT']; 
} 
	$params2 = array($_GET["ID_DonThuoc"]);//tao param cho store
        $store_name2="{call GD2_toathuoc_get_toaphu(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtintoaphu= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		$chuoi_toaphu='';
		for($i=0;$i<=count($thongtintoaphu)-1;$i++){
					$chuoi_toaphu='/'.$thongtintoaphu[$i]['NickName'];
		}
	echo "<script type='text/javascript'>";
	echo "window.id_xuatkho=".$_GET['id_xuatkho'].";";
	echo "window.toatam=".$_GET['toatam'].";";
	echo "window.hoantat='".$tam[0][0]."';";
	echo "window.dskho='".$khoVP."';";
	echo "window.dskhobhyt='".$khoBHYT."';";
	echo "window.chuoi_toaphu='".$chuoi_toaphu."';";
	echo "window.REMOTE_ADDR='".$_SERVER['REMOTE_ADDR']."';";
	
	echo "window.soLK2='".$_GET['soLK']."';";
	echo "</script>";
	
	
	
	
?>
<style type="text/css">

#phieuxxuatthuoc,#inphieuxxuatthuoc{
	width: 122px;
}#xemphieuxt,#inphieuxt,#xemnhanthuoc,#innhanthuoc,#phieudieutri,#inphieudieutri{
	width: 120px;
}#intoathuoc{
	width: 210px;
}#luu{
	width: 90px;
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
.colored1{
	background-color:yellow;
	
	}
</style>

<body>

<div id="dialog_sothuoc" style="display:none"></div>
		<div id="id_tongthe" class="ui-widget-content" style="display:inline-block; top:-100px;width:100%" >
		<fieldset id="tiensubanthan_fieldset" style="display:inline;width:599px!important" >
			 <legend style="font-weight:bold;">Thông tin bệnh nhân</legend>
			<div style="padding:2px 0px;display:inline-block" class="thongtin_tongthe">
			<div class="patient_info"></div>
			</div ></fieldset>

			 <fieldset id="thongtinchung_fieldset"  style="display:inline; width:604px;overflow-y:auto;" >
			 <legend style="font-weight:bold;">Thông tin</legend> 
					<div  style="vertical-align:top"  >

					<label style="display:inline-block;width:auto">BS kê đơn:</label>
					<label class="lbbskt" style="display:inline-block;width:auto"><strong></strong></label><br>
					<label class="lb" style="display:inline-block;width:auto" >Ngày kê đơn:</label>
					<label class="lb1" style="display:inline-block;width:auto"></label><br>
					Tổng tiền: <label id="tongtien"></label><br> 
					<button id="xuatthuoc" title="IP của bạn: <?=$_SERVER['REMOTE_ADDR']?>">Xuất thuốc</button>
					<button id="huyxuat">Hủy xuất</button>
					<button id="xemnhanthuoc">In nhãn thuốc</button>
					<button id="inphieuxuatthuoc">In phiếu xuất</button> 

					</div>
				 </fieldset>
  
        </div>
		<div >
				<table  id="rowed3" ></table>
				<div id="prowed3"></div>
		</div>

		<div>
 
</div>

</body>
</html>

<script type="text/javascript">
var arrary_enter=[];
var arrary_enter1=[];

    jQuery(document).ready(function() {
		jwerty.key("ctrl+s", false);
		$('body').bind('keydown',function(e){
			if (jwerty.is("ctrl+s",e)) {
				$('#luu').click();
			}
		})

		$( "#dialog_sothuoc" ).dialog({
	  title:'Số thuốc tồn kho',
      resizable: false,
      height:'auto',
	  width:'auto',
	  autoOpen :false,
      modal: true,
      buttons: {
        "Ok": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	$.cookie("in_status", "print_preview");
	id_benhnhan=<?=$_GET['id_benhnhan']?>;
 
		$('#xuatthuoc').button();
		$('#huyxuat').button();
		$('#xemphieuxt').button();
		$('#inphieuxt').button();
		$('#phieuxxuatthuoc').button();
		$('#inphieuxuatthuoc').button();
		$('#xemnhanthuoc').button();
		$('#innhanthuoc').button();
		$('#phieudieutri').button();
		$('#inphieudieutri').button();
		
		$('#intoathuoc').button();
		$('#intoathuoc_hc').button();
		
		$('#luu').button();
		$('#chinhsua').button();
		$('#goiloa').button();
	
		 huyxuat();
		 resize_control();
		 xuatthuoc();
		

		if(id_xuatkho==0&&hoantat=='Xong'){
			trangthai ('chuaxuat')
		}else if (id_xuatkho!=0&&toatam==0){
			 trangthai ('daxuat')
		}else if (id_xuatkho==0&&hoantat!='Xong'){
			 trangthai ('toatamcx')
		}else if (id_xuatkho!=0&&toatam==1){
			 trangthai ('toatamdx')
		}


		
		
		autocompleted_combobox_callback('#chiatoathuoc',tinhlai);
		autocompleted_combobox_callback('#songaythuocyc',tinhlai);	
     	create_grid();
        resize_control();
		luu_click();
		
		$('#intoathuoc_hc').click(function(e){
		var id_check=is_check();
		$.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_intoathuoc&header=top&id_xuatkho="+id_xuatkho+"&id_donthuoc=<?= $_GET['ID_DonThuoc']?>&type=report&id_form=10&tenin=tengochoatchat&check="+id_check,'InDonThuoc_Bsy');
		//$(".frame_u78787878975f").css("width","793px");
	});
		
		
		
		
		
		
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
	$("#inphieuxuatthuoc").click(function(e){
	$.cookie("in_status", "print_preview");
		var id_check=is_check();
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=dstoathuoc_phieuxuatthuoc&header=top&id_xuatkho="+id_xuatkho+"&id_donthuoc=<?= $_GET['ID_DonThuoc']?>&type=report&id_form=10&tenin="+$('input[name = "radio"]:checked').val()+"&xemtruocin=1&check="+id_check,'PhieuXuatThuoc');
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
		$("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-250);

    }

    function GoiLoa()
    {
    	
        var chuoiGoi='&SoLk=<?=$_GET["soLK"]?>&n_nhomgoi=2'+'&ipClient='+window.REMOTE_ADDR+'&oper=default';
     
         $.post('pages.php?module=web_services&action=controllerSendSocket&strFromClient=' + chuoiGoi).done(function(data)
        {
            if ($.trim(data) == '1') {
                tooltip_message("đã cập nhật hệ thống");

               
            }
       

        });


    }

 function create_grid() {
        $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=toathuoc_chitiet&id_donthuoc=<?=$_GET['ID_DonThuoc']?>&id_xuatkho=<?=$_GET['id_xuatkho']?>',
		datatype: "json",
		colNames:['Tên thuốc','Đơn vị tính','Hướng dẫn dùng','SL/1ngày','SL BS kê','N.thuốc','SL BNYC','SL Xuất','SL Trả'
		,'SL thực xuất','Đơn giá','Thành tiền ','In','','','','','','','','','','','','','','','','BHYT'],
		colModel:[
			
			{name:'TenBietDuoc',index:'TenBietDuoc',search:true, width:"25%", editable:false,align:'left',hidden:false},
			{name:'dvt',index:'đvt',search:true, width:"5%", editable:false,align:'left',hidden:false},
			{name:'cachdung',index:'cachdung',search:true, width:"25%", editable:false,align:'left',hidden:false},
			{name:'sl1n',index:'sl1n',search:true, width:"5%", editable:false,align:'right',hidden:false},
			{name:'slbsk',index:'slbsk',search:true, width:"5%", editable:false,align:'right',hidden:true},
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
			{name:'slx_idphieuxuat',index:'slx_idphieuxuat',search:true, width:"5%", editable:false,align:'right',hidden:true},
			{name:'slt_idphieuxuat',index:'slt_idphieuxuat',search:true, width:"5%", editable:false,align:'right',hidden:true},
			{name:'sltx',index:'sltx',classes:'colored1',search:true, width:"5%", editable:false,align:'right',hidden:false},
			
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
			{name:'ID_LuotKham1',index:'ID_LuotKham1',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'PhanTramThue',index:'PhanTramThue',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'ID_Thuoc',index:'ID_Thuoc',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'DaThanhToan',index:'DaThanhToan',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'TrangThaiDonThuoc',index:'TrangThaiDonThuoc',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'MienGiam',index:'MienGiam',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'chandoan',index:'chandoan',search:false,search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name:'bhyt',index:'bhyt', width:"5%", editable:false,stype: 'checkbox',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'},align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1}
			,editoptions: { defaultvalue:"1",value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {

                 } }]}},
		],
            loadonce: false,
			scroll: false,
			grid_mode:'',
			grid_move:"",
			grid_save_option:"",
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
				$.get( "pages.php?module=web_services&function=create_panel_new&id_luotkham="+$("#rowed3").jqGrid("getCell", ids[0], 'ID_LuotKham1')+"&action=index", function( data ) {
				  $( ".patient_info" ).html( data );
				  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");
				});
				$(".lb1").html(rowData['Ngaykedon']);
                $(".lbbskt").html(rowData['Bacsiketoa']+''+window.chuoi_toaphu);
				$(".songaythuoctd").html(rowData['SoNgayThuoc']);
				$("#dando").html('Dặn dò BS:<strong>'+rowData['GhiChu']+'</strong>');
				$("#chandoan").html('Chẩn đoán :<strong>'+rowData['chandoan']+'</strong>');
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

						
						if(id_xuatkho==0&&hoantat=='Xong'){
							if(rowData['DaThanhToan']==0 ){
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
							}else{
								$("#rowed3").setColProp('sntbnyc', {editable: false});
								$("#rowed3").setColProp('slbnyc', {editable: false});
								$('#rowed3').jqGrid('editRow', ids[i], true);								
							}
						}else if (id_xuatkho!=0&&toatam==0){
							 
							 $("#rowed3").setColProp('sntbnyc', {editable: false});
							 $("#rowed3").setColProp('slbnyc', {editable: false});
							 $('#rowed3').jqGrid('editRow', ids[i], true);
						}else if (id_xuatkho==0&&hoantat!='Xong'){
							
							 $("#rowed3").setColProp('sntbnyc', {editable: false});
							 $("#rowed3").setColProp('slbnyc', {editable: false});
							 $('#rowed3').jqGrid('editRow', ids[i], true);
						}else if (id_xuatkho!=0&&toatam==1){
						
							 $("#rowed3").setColProp('sntbnyc', {editable: false});
							 $("#rowed3").setColProp('slbnyc', {editable: false});
							 $('#rowed3').jqGrid('editRow', ids[i], true);
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
            caption: "Chi tiết thuốc"
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

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
			 dataToSend = '{"rows":[';
			phancach = ",";
			phancach1 = "";
			for(i=0;i<=ids.length-1;i++){
					dataToSend += phancach1 + '{"id":"' + ids[i]+ '"';
					dataToSend += phancach + '"slbnyc":"' + $('#'+ids[i]+'_slbnyc').val()+ '"';
			        dataToSend += phancach + '"tttycbn":"' + $("#rowed3").jqGrid("getCell", ids[i], 'tttycbn') + '"}';
					phancach1 = ",";
			}
			dataToSend += ']}';		
			dataToSend = jQuery.parseJSON(dataToSend);			
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update&hienmaloi=3',dataToSend)
			.done(function( gridData ) {
				$('#rowed3').jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=toathuoc_chitiet&id_donthuoc=<?=$_GET['ID_DonThuoc']?>&id_xuatkho=<?=$_GET['id_xuatkho']?>'}).trigger('reloadGrid');

				tooltip_message("Lưu thành công");
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
					dataToSend += phancach1 + '{"id":"' + ids[i]+ '"';
					dataToSend += phancach + '"slbnyc":"' + $('#'+ids[i]+'_slbnyc').val()+ '"';
			        dataToSend += phancach + '"tttycbn":"' + $("#rowed3").jqGrid("getCell", ids[i], 'tttycbn') + '"}';
					phancach1 = ",";
			}
			dataToSend += ']}';
			dataToSend = jQuery.parseJSON(dataToSend);
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




function xuatthuoc(){
	$('#xuatthuoc').click(function(e){
	var ids = $('#rowed3').jqGrid('getDataIDs');
	var rowData = $('#rowed3').getRowData(ids[0]);

		if(rowData['DaThanhToan']==0){
			alert('Vui lòng thanh toán trước khi xuất');
		}else{
			$('#xuatthuoc').button('disable');
			var ids = $('#rowed3').jqGrid('getDataIDs');
			dataToSend  ='{"id_luokham":'+JSON.stringify($("#rowed3").jqGrid("getCell", ids[0], 'ID_LuotKham1'));
			dataToSend +=',"id_donthuoc":'+JSON.stringify('<?=$_GET['ID_DonThuoc']?>');
			dataToSend +=',"nguoigd":'+JSON.stringify($("#panel_tenbn").html());
			/* 
			dataToSend += ',"rows":[';
			phancach = ",";
			phancach1 = "";
			for(i=0;i<=ids.length-1;i++){
				if($("#rowed3").jqGrid("getCell", ids[i], 'slbnyc')>0){
					dataToSend += phancach1 + '{"id_thuoc":"' +$("#rowed3").jqGrid("getCell", ids[i], 'ID_Thuoc')+ '"';
					dataToSend += phancach + '"phantramvat":"' + $("#rowed3").jqGrid("getCell", ids[i], 'PhanTramThue')+ '"';
					dataToSend += phancach + '"id":"' + ids[i]+ '"';
					dataToSend += phancach + '"soluong":"' +$("#rowed3").jqGrid("getCell", ids[i], 'slbnyc')+ '"'
			        dataToSend += phancach + '"dongia":"' + $("#rowed3").jqGrid("getCell", ids[i], 'dongia') + '"';
					dataToSend += phancach + '"TenThuoc":"' + $("#rowed3").jqGrid("getCell", ids[i], 'TenBietDuoc') + '"';
					dataToSend += phancach + '"sl_bsyke":"' + $("#rowed3").jqGrid("getCell", ids[i], 'slbsk') + '"';
					dataToSend += phancach + '"SoThuocThucXuat":"' + $("#rowed3").jqGrid("getCell", ids[i], 'slbnyc') + '"';
					dataToSend += phancach + '"sltx":"' + $("#rowed3").jqGrid("getCell", ids[i], 'sltx') + '"';
					dataToSend += phancach + '"bhyt":"' + $("#rowed3").jqGrid("getCell", ids[i], 'bhyt') + '"';
					dataToSend += phancach + '"MienGiam":"' + $("#rowed3").jqGrid("getCell", ids[i], 'MienGiam') + '"}';
					phancach1 = ",";
				}
			} 
			dataToSend += ']}';*/
			dataToSend += '}';
			dataToSend = jQuery.parseJSON(dataToSend);
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_tonkho&hienmaloi=1&kho='+dskho.split(',')[0]+'&khobhyt='+dskhobhyt.split(',')[0],dataToSend).done(function(data){
			data=data.split('||')
				if(data[1]==0){
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_xuatthuoc&oper=update&hienmaloi=3&kho='+dskho.split(',')[0]+'&khobhyt='+dskhobhyt.split(',')[0],dataToSend)
					.done(function( gridData ) { tooltip_message("Lưu thành công");

					$('#rowed3').trigger('reloadGrid');
					trangthai ('daxuat');
					id_xuatkho=$.trim(gridData);
					 })
					.fail(function() {tooltip_message( "error" );});
				}else{
					$('#xuatthuoc').button('enable');
					$('#dialog_sothuoc').html(data[0]).dialog('open');
				}
				 })
		}
	})





}




function trangthai (trangthai){
	if (trangthai=='chuaxuat'){
		$('#xuatthuoc').button('enable');
		$('#huyxuat,#phieuxxuatthuoc,#inphieuxuatthuoc,#xemnhanthuoc,#innhanthuoc,#phieudieutri,#inphieudieutri').button('disable');
	}else if(trangthai=='daxuat'){
		$('#xuatthuoc,#luu').button('disable');
		$('#huyxuat,#phieuxxuatthuoc,#inphieuxuatthuoc,#xemnhanthuoc,#innhanthuoc,#phieudieutri,#inphieudieutri').button('enable');
	}else if(trangthai=='toatamcx'){
		$('#xuatthuoc,#huyxuat,#phieuxxuatthuoc,#inphieuxuatthuoc,#xemnhanthuoc,#innhanthuoc,#luu,#phieudieutri,#inphieudieutri').button('disable');			
	}
	else if(trangthai=='toatamdx'){
		$('#xuatthuoc,#huyxuat,#luu').button('disable');
		$('#phieuxxuatthuoc,#inphieuxuatthuoc,#xemnhanthuoc,#innhanthuoc,#phieudieutri,#inphieudieutri').button('enable');		
	}

}





function huyxuat(){
	$('#huyxuat').click(function(){

				var ids = $('#rowed3').jqGrid('getDataIDs');
				var rowData = $('#rowed3').getRowData(ids[0]);
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_kiemtraxuat&oper=update&ID_DonThuoc=<?=$_GET['ID_DonThuoc']?>').done(function( gridData ) {
				if(gridData==1){
					alert('Yêu cầu hủy bill trước khi hủy phiếu xuất')	;
				}else{
					var ids = $('#rowed3').jqGrid('getDataIDs');
					dataToSend  ='{"id_luokham":'+JSON.stringify($("#rowed3").jqGrid("getCell", ids[0], 'ID_LuotKham1'));
					dataToSend +=',"id_donthuoc":'+JSON.stringify('<?=$_GET['ID_DonThuoc']?>');
					dataToSend +=',"nguoigd":'+JSON.stringify($("#panel_tenbn").html());
					dataToSend +=',"id_xuatkho":'+JSON.stringify(id_xuatkho);
					dataToSend += ',"rows":[';
					phancach = ",";
					phancach1 = "";
					for(i=0;i<=ids.length-1;i++){
						if($("#rowed3").jqGrid("getCell", ids[i], 'slbnyc')>0){
							dataToSend += phancach1 + '{"id_thuoc":"' +$("#rowed3").jqGrid("getCell", ids[i], 'ID_Thuoc')+ '"';
							dataToSend += phancach + '"phantramvat":"' + $("#rowed3").jqGrid("getCell", ids[i], 'PhanTramThue')+ '"';
							dataToSend += phancach + '"id":"' + ids[i]+ '"';
							dataToSend += phancach + '"soluong":"' +$("#rowed3").jqGrid("getCell", ids[i], 'slbnyc')+ '"';
							dataToSend += phancach + '"MienGiam":"' +$("#rowed3").jqGrid("getCell", ids[i], 'MienGiam')+ '"';
							dataToSend += phancach + '"dongia":"' + $("#rowed3").jqGrid("getCell", ids[i], 'dongia') + '"}';
							phancach1 = ",";
						}
					}
					dataToSend += ']}';
					dataToSend = jQuery.parseJSON(dataToSend);
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_huyxuat&oper=update&hienmaloi=3&kho='+dskho.split(',')[0]+'&khobhyt='+dskhobhyt.split(',')[0],dataToSend).done(function( gridData ) {

						parent.postMessage('dong_hoso||', "*");
						tooltip_message("Lưu thành công");
					 }).fail(function() {tooltip_message( "error" );});
					}




		})


		})

}

</script>

