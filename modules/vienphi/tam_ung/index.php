<!--Người viết: Trần Trương Văn-->
<?php
if(isset($_GET["idbenhnhan"])){
	echo "<script type='text/javascript'>";
	echo "window.id_benhnhan=".$_GET["idbenhnhan"];
	echo "</script>";
	$id_benhnhan=$_GET["idbenhnhan"];
}else{
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
		echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
		echo "</script>";
		$id_benhnhan=$_SESSION["ThongTinBenhNhan"]["ID"];
	}
}

?>
<?php 
if(!isset($_GET['oper'])){
	$data= new SQLServer;
	$store_name="{call GD2_Sophieutamung_max ()}";
	$params = array();
	$get=$data->query( $store_name, $params);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	$store_name1="{call GD2_nocu_get (?)}";
	$params1 = array($id_benhnhan);
	$get1=$data->query( $store_name1, $params1);
	$excute1 = new SQLServerResult($get1);
	$tam1 = $excute1->get_as_array();
	echo "<script type='text/javascript'>";
	echo "window.oper='add';";
	echo "window.idluotkham=0;";
	echo "</script>";
}else{
	if($_GET['oper']=='edit'){
		$data= new SQLServer;
		$store_name="{call Gd2_thu_trano_select_byidthutrano(?)}";
		$params = array($_GET['idthutrano']);
		$get=$data->query( $store_name, $params);
		$excute = new SQLServerResult($get);
		$tam = $excute->get_as_array();
		echo "<script type='text/javascript'>";
		echo "window.oper='edit';";
		echo "window.idluotkham=".$tam[0]['ID_LuotKham'].";";
		echo "window.ID_ThuTraNo=".$_GET['idthutrano'].";";
		echo "</script>";
	}else{
		$data= new SQLServer;
		$store_name="{call GD2_Sophieutamung_max ()}";
		$params = array();
		$get=$data->query( $store_name, $params);
		$excute = new SQLServerResult($get);
		$tam = $excute->get_as_array();
		$store_name1="{call GD2_nocu_get (?)}";
		$params1 = array($id_benhnhan);
		$get1=$data->query( $store_name1, $params1);
		$excute1 = new SQLServerResult($get1);
		$tam1 = $excute1->get_as_array();
		$store_name1="{call Gd2_ThongTinLuotKham_Select_VienPhi (?)}";
		$params1 = array($_GET["idluotkham"]);
		$get1=$data->query( $store_name1, $params1);
		$excute1 = new SQLServerResult($get1);
		$tam2 = $excute1->get_as_array();
		echo "<script type='text/javascript'>";
		echo "window.oper='add';";
		echo "window.idluotkham=".$_GET["idluotkham"];
		echo "</script>";
	}
}
?>
<style>
#gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7 {
	border: 1px solid #919191;
	box-shadow: 0 0 10px #A0A0A0;
	margin-left: -10px;
	margin-top: -5px;
}
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
#tamthu,#tongtien,#tienthu,#nocuoi{
	
	text-align:right;
	font-size: 18px !important;
	font-weight: bold !important;
	margin-top: 3px;
	text-align: right;
	
}
input[type=button].custom_button{	
	border:none;
	background:none;		
	outline:  none;
	text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
	font-size:11px;
	height:17px!important;
	width:40px!important;
	text-decoration:underline;
}
input[type=button].custom_button:focus{	 
	outline:  none;
} 
:focus {outline:none;}
::-moz-focus-inner {border:0;} 

legend {
	background-color:#f5f3e5;
	text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;
	color:#000;		  
}




.button_panel{
	display:inline-block;
	width:40%;
	
}
.top_form textarea{		 
	height:151px;
	margin-left:2px;	
	margin-bottom:2px;		 
}
.top_form .title{
	padding-top:2px;
	padding-bottom:2px;
	text-align:center;
	font:12px/19px segoe ui, Tahoma, sans-serif!important;
	color:#000;		 
	font-weight:bold!important;		
}

textarea{
	padding-left:1px;
	padding-bottom:1px;
	border:1px solid #999;
}
fieldset label{
	display:inline-block;
}
</style>
<body>
<div id="dialog_lydo_sua" style="display:none">

<textarea style="width:250px" id="lydo_sua">

</textarea>
</div>
<div id="dialog_sotien" style="display:none"></div>
<div id="dialog_print" style="display:none">

<table>
<tr>
<td rowspan="5">
<input id="id_print" style="outline: 0;border: none;background-color:#6CF">
</td>
<td><strong>1.In 2 liên  </strong> 
</td>
</tr>
<tr>     
<td>
<strong> 2.In liên 1  </strong>
</td>
</tr>
<tr>     
<td>
<strong> 3.In liên 2 </strong>
</td>
</tr>
<tr>     
<td>
<strong> 4.Không in và lưu</strong>
</td>
</tr>
<tr>     
<td>
<strong>  5.In bill tiếng anh</strong>
</td>
</tr>
</table>
</div>


<div class="top_form ui-widget-content" >
<div style="padding:2px 0px;" class="thongtin_tongthe">
<div class="patient_info"></div>      

</div>
<div>
<fieldset>
<legend>Thông tin nộp tiền:</legend>
<table style="width:1200px" >

<tr>
<td>
<label for="ngaylap" style="width:100px; ">Ngày lập phiếu:</label>
</td>
<td>
<input id="ngaylap" name="ngaylap" style="width:130px;"type="text"> 
</td>
<td>
<label for="sophieu" style="width:60px; ">Số phiếu:</label>
</td>
<td>
<input  id="sophieu" name="sophieu" style="width:130px;"type="text"> 
</td>
<td style="width:60px">
<label for="thungan" >Thu ngân:</label>
</td>
<td>
<input id="thungan" name="thungan" style="width:98%;"type="text">  
</td>
<td style="width:60px">
<label for="nocuoi" >Nợ cuối:</label>
</td>
<td colspan="2"> 
<input id="nocuoi" name="nocuoi" style="width:100%;text-align:right;font-weight:bold;font-size:18px"type="text" disabled>  
</td>
</tr>
<tr>
<td>
<label for="nguoigd" style="width:100px; ">Người giao dịch:</label>
</td>
<td>
<input id="nguoigd" name="nguoigd" style="width:130px;"type="text"> 
</td>
<td style="width:60px">
<label for="diachi" style="width:60px; ">Địa chỉ:</label>
</td>
<td colspan="6" align="right">
<input  id="diachi" name="diachi" style="width:100%;"type="text" > 
</td>
</tr>

<tr>
<td>
<label for="diengiai" style="width:100px; ">Diễn giải:</label>
</td>
<td  colspan="8">
<input id="diengiai" name="ngaylap" style="width:100%;"type="text"> 
</td>
</tr>
</table>
<table style="width:1200px" >
<tr>
<td  align="right" >
<label for="aaa" id="label_tongtien"><strong>TỔNG TIỀN DỊCH VỤ ĐÃ SỬ DỤNG :</strong></label>
</td>
<td style="width:200px">
<input id="tongtien" name="ngaylap" style="width:100%"type="text" disabled value="<?php
if(!isset($_GET['oper'])){
	echo(0);		
}else{
	if($_GET['oper']=='edit'){
		echo(0);
	}else{
		echo (number_format(($tam2[0]['TongCong']), 0, '', '.'));							
	}
}
?>"> 
</td>
<td    align="right">
<label for="aaa" id="label_tamthu"><strong>TỔNG TIỀN ĐÃ TẠM THU :</strong></label>
</td>
<td style="width:200px">
<input id="tamthu" name="ngaylap" style="width:100%;"type="text" disabled value="<?php
if(!isset($_GET['oper'])){
	echo(0);		
}else{
	if($_GET['oper']=='edit'){
		echo(0);
	}else{							
		echo (number_format(($tam2[0]['TamUng']), 0, '', '.'));
	}
}				
?>"> 
</td>
<td    align="right">
<label for="tienthu" style="width:60px; "><strong>TIỀN THU:</strong></label>
</td>
<td style="width:200px">
<input id="tienthu" name="tienthu" style="width:100%;text-align:right"type="text" value="<?php
if(!isset($_GET['oper'])){
	echo(0);		
}else{
	if($_GET['oper']=='edit'){
		echo number_format(($tam[0]['SoTien']), 0, '', '.');
	}else{							
		echo (number_format(($tam2[0]['ConLai']), 0, '', '.'));
	}
}
?>"> 
</td>
</tr>
</table>
</fieldset>  

</div>
<div>
<a href="#" id="btn_luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Lưu[Ctrl-S]</a>  
<a href="#" id="btn_lien1" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In liên 1</a> 
<a href="#" id="btn_lien2" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In liên 2</a> 
<a href="#" id="btn_sua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sửa</a> 
<!-- <a href="#" id="btn_huy" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hủy phiếu</a>-->  

</div>

</div>
<h3>Công nợ bệnh nhân</h3>
<table id="rowed4" ></table>
<div id="tabs" style="display:none;" >
	<ul>
	<li><a href="#tabs-1" id="tab1">Chi tiết dịch vụ</a></li>
	<li><a href="#tabs-2" id="tab2">Chi tiết công nợ bệnh nhân</a></li>  
	</ul>
	<div id="tabs-1"> <table id="rowed3" style="width:100%" ></table>
	</div>
	<div id="tabs-2">rowed4</div>
</div> 







</body>
</html>
<script type="text/javascript">

var report_code=["PhieuThu"];
var report_name=["Phiếu Thu"];
$(document).ready(function() {	
	openform_shortcutkey();
	window.dem=0;
	$('#lydo_sua').bind('keydown',function(e){	
		if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {			
			$('#dialog_lydo_sua').closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();
			return false
		}
	})
	var ID_ThuTraNo='';
	$( "#tabs" ).tabs({heightStyle:"fill"});


	loadform();
	//$('#tab2').click(function(){
		$("#rowed4").setGridHeight($(window).height()/2);      
		$("#rowed4 ").setGridWidth($(window).width());   
		
	//})
	function resize_control() {
		$("#rowed4").setGridHeight($(window).height()/2);      
		$("#rowed4 ").setGridWidth($(window).width());    
		$("#rowed3").setGridHeight($("#tabs-1").height() - 60);      
		$("#rowed3 ").setGridWidth($("#tabs-1").width() +10);
		
	}
/*$('#ngaylap').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#sophieu").focus();	
	}
});
$('#sophieu').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#thungan").focus();	
	}
});
$('#thungan').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#nguoigd").focus();	
	}
});
$('#nguoigd').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#diachi").focus();	
	}
});
$('#diachi').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#diengiai").focus();	
	}
});
$('#diengiai').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#tienthu").focus();	
	}
});
$('#tienthu').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#btn_luu").focus();	
	}
});*/

number_textbox('#tienthu');
create_grid1();
resize_control();
$('#id_print').keydown(function(e){
	if (jwerty.is("enter",e)) {	
		if($('#id_print').val()==4){
			$('#dialog_print').dialog('close');
		}else{
			$.cookie("in_status", "print_direct"); 
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=tam_ung&header=top&lien="+$('#id_print').val()+"&type=report&id_form=10&idthutrano="+window.ID_ThuTraNo,'PhieuThu',100);
			$('#dialog_print').dialog('close');
		}
		
	}
})

$( "#dialog_sotien" ).dialog({
	resizable: false,
	height:'auto',
	modal: true,
	autoOpen :false,
	buttons: {
		"Có": function() {
			
			$( this ).dialog( "close" );		
			luu(); 	 
			$( "#dialog_print" ).dialog('open');
			$( this ).dialog( "close" );				
			
			
		},
		"Không": function() {
			$( this ).dialog( "close" );
		}
	}
});
$( "#dialog_print" ).dialog({
	resizable: false,
	height:'auto',
	modal: true,
	autoOpen :false,      
	close: function () {
		
		parent.postMessage('close_tab;tam_ung;'+<?=$id_benhnhan?>,'*');
	}
});

$('#nocuoi').val((<?php 
	if(isset($_GET['oper'])){
		if($_GET['oper']=='add'){
			if(count($tam1)>0){
				echo $tam1[0][0]	;
			}else{
				echo 0;
			}
		}else{		
			echo $tam[0]['nocu'];
		}
	}else{
		if(count($tam1)>0){
			echo $tam1[0][0]	;
		}else{
			echo 0;
		}
	}
	?>).formatMoney(0, ',', '.'));


$('#thungan').val('<?php
	if(isset($_GET['oper'])){
		if($_GET['oper']=='add'){
			echo $_SESSION["user"]["fullname"];
		}else{		
			echo $tam[0]['hotennv'];
		}
	}else{
		echo  $_SESSION["user"]["fullname"];
	}
	?>')



	setTimeout(function(){$("#tienthu").focus()},600); ;
	
	
	$( "#tienthu" ).keyup(function(e){		
		var tam=$( "#tienthu" ).val().split('.').join('');
		tam=parseInt(tam).formatMoney(0, ',', '.')
		$("#tienthu").val(tam)
	});
	
	$( "#tienthu" ).keydown(function(e){		
		if (jwerty.is("enter",e)||jwerty.is("tab",e)) {				
			setTimeout(function(){$('#btn_luu').click()},300);
		}
	});
	$.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
		$( ".patient_info" ).html( data );
		$( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
		ma_benhnhan=$('.profile_container:nth-child(4) .texts').text() ; 
		$('#nguoigd').val(<?php echo '$("#panel_tenbn").html()';?>);
		$('#diachi').val(<?php echo '$("#patient_info").attr("title")';?>);    
	});
	$('#sophieu').val('<?php
		if(isset($_GET['oper'])){
			if($_GET['oper']=='add'){
				echo 'PTU_'.($tam[0]['LastRecordNumber']+1);
			}else{		
				echo $tam[0]['MaPhieu'];
			}
		}else{
			echo  'PTU_'.($tam[0]['LastRecordNumber']+1);
		}
		?>');
		
		$('#diengiai').val('<?php
			if(isset($_GET['oper'])){
				if($_GET['oper']=='add'){
					echo 'Tạm ứng';
				}else{		
					echo $tam[0]['GhiChu'];
				}
			}else{
				echo  'Tạm ứng';
			}
			?>');   
			$('#ngaylap').datetimeEntry({datetimeFormat: 'H:M D/O/y',spinnerImage: ''});
			$('#ngaylap').val('<?php
				if(isset($_GET['oper'])){
					if($_GET['oper']=='add'){
						echo date("H").':'.date("i").' '.date("d").'/'.date("m").'/'.date("y");
					}else{		
						echo $tam[0]['NgayGio']->format('H:i '. $_SESSION["config_system"]["ngaythang"]);
						
					}
				}else{
					echo date("H").':'.date("i").' '.date("d").'/'.date("m").'/'.date("y");
				}
				?>');
				$('#btn_luu,#btn_lien1,#btn_lien2,#btn_sua,#btn_huy').button();   
				trangthai(oper);
				$('#btn_luu').click(function(){	   
					$('#dialog_sotien').html('Số tiền thu là '+$('#tienthu').val()+'. Bạn có muốn tiếp tục')	;
					$( "#dialog_sotien" ).dialog('open');
				})
				$('#btn_lien1').click(function(){
					$.cookie("in_status", "print_preview"); 
					dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=tam_ung&header=top&lien=2&type=report&id_form=10&idthutrano="+window.ID_ThuTraNo,'PhieuThu');
					$('#dialog_print').dialog('close');
				})
				$('#btn_lien2').click(function(){
					$.cookie("in_status", "print_preview"); 
					dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=tam_ung&header=top&lien=3&type=report&id_form=10&idthutrano="+window.ID_ThuTraNo,'PhieuThu');
					$('#dialog_print').dialog('close');	   
				})   
				$('#btn_sua').click(function(){
					$( "#dialog_lydo_sua" ).dialog('open');

				})
				$( "#dialog_lydo_sua" ).dialog({
					title:'Nhập lý do sửa',
					resizable: false,
					height:'auto',
					modal: true,
					autoOpen :false,     
					close: function( event, ui ) {
						
					},
					buttons: {
						"Yes": function() {
							
							if($.trim($('#lydo_sua').val().replace("\n", ""))!=''){
								sua();		 
								$( this ).dialog( "close" );
							}else{
								alert('Nhập lý do sửa');			
								return false;
							}
						},
						"No": function() {
							$( this ).dialog( "close" );
						}
					}
				});
				phanquyen();

			})

			function luu(){
				if(dem==0){
					dem++;
					var datatosend = '{"idbenhnhan":"'+id_benhnhan+'","idluotkham":"'+idluotkham+'","NgayGio":'+JSON.stringify($('#ngaylap').val())+',"nguoigd":"'+$('#nguoigd').val()+'","diachi":"'+$('#diachi').val()+'","diengiai":"'+$('#diengiai').val()+'","tienthu":"'+$('#tienthu').val().split('.').join('')+'","nocu":"'+$('#nocuoi').val()+'"}';
					datatosend =$.parseJSON(datatosend) ;
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller',datatosend).done(function(data){
						window.oper='edit';
						trangthai(oper);
						window.ID_ThuTraNo=$.trim(data);
		    			emr_xephangluotkham(idluotkham,0,0,true);// Đẩy vào phòng xếp hàng
					})
				}
			}
			function create_grid() {
				$("#rowed3").jqGrid({
					url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham='+idluotkham,
					datatype: "json",
					colNames: ['ID_LoaiKham','ID_Kham','ID_LuotKham','MaBenhNhan','TenBenhNhan','Ngày chỉ định','Tên loại khám','Trạng thái','Phí thực hiện' ,'Tên nhóm','Phí gốc','',''],
					colModel: [
					{name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
					{name: 'ID_Kham', index: 'ID_Kham', search: true, width: "1%", editable: false, align: 'left', hidden: true},
					{name: 'ID_LuotKham',  index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
					{name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: true},
					{name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: true},
					{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", editable: false, align: 'center', hidden: false},
					{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
					{name: 'TenTrangThaiCLSCuaBenhNhan', index: 'TenTrangThaiCLSCuaBenhNhan', search: false, width: "10%", editable: false, align: 'left', hidden: false},
					{name: 'PhiThucHien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
					{name: 'TenNhom', index: 'TenNhom', search: false, width: "20%", editable: false, align: 'left', hidden: false},
					{name: 'GiaThueNgoaiThucHien',index: 'GiaThueNgoaiThucHien',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "10%", editable: false, align: 'right', hidden: false},
					{name: 'Giamgia',index: 'Giamgia',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "10%", editable: false, align: 'right', hidden: true},
					{name: 'tongphuthu',index: 'tongphuthu',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "10%", editable: false, align: 'right', hidden: true}
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
					height: 100,
					width: 100,
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
					onCellSelect: function (rowid,iCol,cellcontent,e) {			                   
					}, 
					onSelectRow: function(id) { },
					ondblClickRow: function(rowId) {},
					onselect: function(rowId, rowIndex, columnIndex) {},
					onRightClickRow: function(rowid, iRow, iCol, e) {
						var grid = jQuery('#rowed3');
						var colModel = grid.getGridParam('colModel');

						var colName = colModel[iCol].name;
						var colIndex = colModel[iCol].index;
						var rowData = jQuery('#rowed3').getRowData(rowid);             
					},
					loadComplete: function(data) {      
						var grid = $("#rowed3"),
						sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
						sumGiaThueNgoaiThucHien=grid.jqGrid('getCol', 'GiaThueNgoaiThucHien', false, 'sum');			
						grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
						grid.jqGrid('footerData','set', {ID: 'GiaThueNgoaiThucHien:', GiaThueNgoaiThucHien: sumGiaThueNgoaiThucHien});
					},
					caption: "Ds chưa thanh toán"
				});
			}


			function loadform(){
				if(idluotkham==0){
					$('#label_tongtien,#tongtien,#tamthu,#label_tamthu,#tab1').hide();		
					$('#tab2').click()
				}else{		
					$('#label_tongtien,#tongtien,#tamthu,#label_tamthu,#tab1').show();
					
					create_grid()
				}
			}

			function trangthai(oper){
				if(oper=='add'){
					$('#btn_luu').button('enable');		
					$('#btn_lien1,#btn_lien2,#btn_sua,#btn_huy').button('disable');
					$('#tienthu').prop('disabled', false);
				}else{		
					$('#btn_luu').button('disable');	
					$('#btn_lien1,#btn_lien2,#btn_sua,#btn_huy').button('enable');
					$('#tienthu').prop('disabled', true);
				}
			}
			function sua(){
				var datatosend = '{"idbenhnhan":"'+id_benhnhan+'","id_thutrano":"'+ID_ThuTraNo+'","lydo_sua":'+JSON.stringify($('#lydo_sua').val());				
				datatosend+='}';		
			//alert(datatosend);	
			datatosend=jQuery.parseJSON(datatosend);
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_sua&hienmaloi=1',datatosend).done(function(data){
				if($.trim(data)==2){
					alert('Bill đã có lượt thanh toán sau không ');
				}else{
					window.oper='add';
					trangthai(oper)
				}
			})
		}
		
		function create_grid1() {      
			$("#rowed4").jqGrid({
				url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietcongno&id_benhnhan='+id_benhnhan,
				datatype: "json",
				colNames: ['Ngày lập phiếu','Số phiếu','Diễn giải','Nợ đầu ký','Tổng phát sinh','Số tiền thu','Tiền hủy chỉ định','Tiền miễn giảm','Nợ cuối'],
				colModel: [			
				{name: 'NgayGio', index: 'NgayGio', width: "10%", editable: false, align: 'left'},
				{name: 'MaPhieu', index: 'MaPhieu', search: true, width: "10%", editable: false, align: 'left'},
				{name: 'GhiChu',  index: 'GhiChu', search: false, width: "10%", editable: false, align: 'left'},
				{name: 'NoCu', index: 'NoCu', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'TongTienPhaiTra', index: 'TongTienPhaiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'SoTienThanhToan', index: 'SoTienThanhToan', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
				{name: 'TienHuyChiDinh', index: 'TienHuyChiDinh', search: false, width: "20%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'GiamGia', index: 'GiamGia', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'Nomoi',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
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
				height: 100,
				width: 100,
				viewrecords: true,
				ignoreCase: true,
				sortorder: "desc",
				footerrow: true,
				userDataOnFooter: true,   
				onCellSelect: function (rowid,iCol,cellcontent,e) {			                   
				}, 
				onSelectRow: function(id) { },
				ondblClickRow: function(rowId) {},
				onselect: function(rowId, rowIndex, columnIndex) {},
				onRightClickRow: function(rowid, iRow, iCol, e) {
					
				},
				loadComplete: function(data) {      
					sumTongTienPhaiTra = $("#rowed4").jqGrid('getCol', 'TongTienPhaiTra', false, 'sum');
					sumSoTienThanhToan=$("#rowed4").jqGrid('getCol', 'SoTienThanhToan', false, 'sum');	
					sumTienHuyChiDinh=$("#rowed4").jqGrid('getCol', 'TienHuyChiDinh', false, 'sum');		
					sumGiamGia=$("#rowed4").jqGrid('getCol', 'GiamGia', false, 'sum');		
					
					$("#rowed4").jqGrid('footerData','set', {TongTienPhaiTra: sumTongTienPhaiTra, SoTienThanhToan: sumSoTienThanhToan, TienHuyChiDinh: sumTienHuyChiDinh, GiamGia: sumGiamGia});
				},
				
			});
		}
		
		
		</script>
		
		
