<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<?php 
$data= new SQLServer;
if(isset($_GET['id_benhnhan'])){
	$khoa=CheckUpdate_KhoaHoSo(0,$_GET['id_benhnhan'],$_SESSION["user"]["id_user"]);
}
if(isset($_GET['id_ttluotkham'])){
	$khoa=CheckUpdate_KhoaHoSo($_GET['id_ttluotkham'],0,$_SESSION["user"]["id_user"]);
}
?>
<html>
<style type="text/css">
#doituong1,#trangthai1{
	width:200px!important;
}

#dm_bhyt td,#dm_bhcc td
#bsyeucau_grid td
{
	word-wrap:normal!important;
	white-space:nowrap;
}



#mabaohiem,#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabhcc{
	text-transform:uppercase
}

#diachibh
{
	text-transform:capitalize
}

.kocomat{
	background-color:#999!important;
}
#bsyeucau_dialog td  {
	word-wrap:normal!important;
	white-space:nowrap;
}
.error_null{
	background:#FFFF00;
}
.img-link {
	text-decoration: none;
}
input[type="checkbox"]:focus {
	-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
	box-shadow:  0px 0px 2px 2px #208AC8 !important;
}
.link-text {
	text-decoration: underline;
}

div.form_row input[type=text]{
	width:230px;
	text-align:left!important;
	border: 1px solid #327E04;
	/*padding: 0.2em;*/
}
div.label { 
	margin: 0; 
	padding: 0; 
	margin-left: 20px; 
	font-size: 100%; 
	font-weight: bold; 
} 

ul.checkbox li input { 
	margin-right: .25em; 
}

ul.checkbox li { 
	border: 1px transparent solid; 
} 

.focus1:hover, 
.focus  { 
	background-color: lightgreen !important; 
	border: 1px gray solid!important; ; 
} 
#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabhcc{
	font-size:18px!important;
	font-weight:bold!important;
	height:16px!important;
}
.ui-button-text-only .ui-button-text{
	padding: 0.4em 0.5em 0.4em 0.1em;
}
#btn_laysothu span.n-cus-icon{
	margin-top:-2px;
	margin-left: 2px;
}
</style>

<body>



<div id="dsLichSuKCB">
	<div id="txtdsLichSuKCB"></div>
</div>


<div id="main_top1" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable" style="width:750px;  box-shadow:none!important;  display: inline-block ;z-index: 1 !important;" >
<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Thông tin bệnh nhân</span> </div>
<div class="ui-dialog-content ui-widget-content" style="display: block; width: auto; min-height: none; max-height: none; height: 100%; ">

<div class="patient_info"></div>

</div>
</div>     

<div id="main_top2" style="display:inline-block!important;width:500px;margin-top: 0px;vertical-align: top;font-size:14px">
</div> 


<div id="main_top" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable" style="width:99.5%;  box-shadow:none!important;  display: block;;z-index: 1 !important;margin-top:5px!important" >
<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Thông tin lượt khám</span> </div>
<div class="ui-dialog-content ui-widget-content" style="display: block; width: auto; min-height: none; max-height: none; height: 100%; ">
<div id="container" >  
<div class="form_row" style="vertical-align:top; width: 300px;"  >    
<div>
<label for="phanloai"  style="width:150px;text-align:left">Phân loại khám </label>
<input id="phanloai" kiemtra="trong"  type="text" name="phanloai" style="width:100px" tabindex="1">        
</div>

<div>
<label for="ID_TrieuChung"  style="width:150px;text-align:left">Triệu chứng</label>
<input id="ID_TrieuChung"   type="text" name="ID_TrieuChung" style="width:100px" tabindex="2">        
</div>


<div>
<label for="GhiChuTrieuChung"  style="width:150px;text-align:left">Ghi chú triệu chứng</label>
<input id="GhiChuTrieuChung"  kiemtra="trong" type="text" name="GhiChuTrieuChung" style="width:100px" tabindex="3">        
</div>

<div>
<label for="chuyenkhoa" style="width:150px;text-align:left">Chuyên khoa</label>
<input id="chuyenkhoa" kiemtra="trong"  type="text" name="phanloai" style="width:100px" tabindex="4">        
</div>

<div>
<label for="bsyeucau"  style="width:150px;text-align:left">BS được BN yêu cầu </label>
<input id="bsyeucau" name="bsyeucau"   type="text" style="width:100px;" tabindex="5">
</div>

<div>
<label for="pbvatly"  style="width:150px;text-align:left">Phòng ban vật lý</label>
<input id="pbvatly" name="pbvatly"   type="text" style="width:100px;" tabindex="6">
</div>

<div>
<label for="tang"  style="width:150px;text-align:left">Tầng </label>
<input id="tang" name="tang"   type="text" style="width:100px;" tabindex="7">
</div>

<div>
<label for="sothutu"  style="width:150px;text-align:left">Số thứ tự </label>
<input id="sothutu" name="sothutu" type="text" style="width:100px;" tabindex="8" maxlength="4">
<button id="btn_laysothu" style="height: 23px; width: 27px;margin-left: -3px; margin-top: -2px;" title="Lấy số thứ tự mới"><span class="ui-icon ui-icon-refresh n-cus-icon"></span></button>
</div>

<div><label for="goikham"  style="width:150px;text-align:left">Gói khám SK </label>
<input id="goikham" name="goikham"   type="text" style="width:100px;" tabindex="9" >
</div>
<div><label for="doituong"  style="width:150px;text-align:left">Đối tượng khám </label>
<!-- <select id="doituong"  name="doituong" style="width:200px;display:none" >
<option value="Viện phí">Viện phí</option>
<option value="BHYT">Bảo hiểm y tế</option>
</select>-->
<input id="doituong" name="doituong"   type="text" style="width:100px;" tabindex="10" >
</div>

<!--<div>
<label for="nguoichidinh"  style="width:150px;text-align:left">Người chỉ định  </label>
<input id="nguoichidinh" name="nguoichidinh"   type="text" style="width:100px;">
</div>-->


<div>
<label for="nguoilapphieu"  style="width:150px;text-align:left">Người lập phiếu </label>
<input id="nguoilapphieu" name="nguoilapphieu"   type="text" style="width:100px;" ></div>
<div>
<label for="nguoigioithieu"  style="width:150px;text-align:left">Người giới thiệu </label>
<input id="nguoigioithieu" name="nguoigioithieu"   type="text" style="width:100px;" tabindex="11"></div>
<div>
<!--   <select id="trangthai"  name="trangthai" style="width:200px;display:none" >
<option value="1">Đúng tuyến</option>
<option value="2">Có giấy chuyển viện</option>
<option value="3">Vượt tuyến</option>           
<option value="4">Cấp cứu</option>
</select>-->
<label for="trangthai"  style="width:150px;text-align:left">Trạng thái lúc nhập viện </label>
<input id="trangthai" name="trangthai"   type="text" style="width:100px;" tabindex="12">
</div>


<div style="display:none" ><label for="hinhthuc"  style="width:150px;text-align:left">Hình thức đến </label>
<input id="hinhthuc" name="hinhthuc"   type="text" style="width:100px;" >
</div>
<div>
<label for="ngay"  style="width:150px;text-align:left">Ngày giờ đến  khám </label>
<input id="ngay" name="ngay"   type="text" style="width:100px;" disabled> 
<!--<input id="gio" name="gio" disabled  type="text" style="width:72px;margin-left:10px">-->
</div>


<div>
<label for="NgayHenKham"  style="width:150px;text-align:left">Ngày hẹn khám </label>
<input id="NgayHenKham" name="NgayHenKham"   type="text" style="width:100px;" disabled> 
</div>

<div ><input id="dhsinhton" name="dhsinhton" style="padding-top: -5px !important;"  type="checkbox" value="1" >
<label for="dhsinhton"  style="width:100px;text-align:left;margin-top:-5px!important; display:inline-block!important;">Lấy dh sinh tồn </label>
<input id="nhanthan" name="nhanthan"   type="checkbox" value="1"  ><label for="nhanthan"  style="width:150px;text-align:left">Xác định nhân thân </label>
</div>
<div  style="display:none"><input id="comat" name="comat" checked style="width:200px;display:none"   type="checkbox" value="1"  tabindex="15"><label for="comat"   style="width:150px;text-align:left;display:none">Đã có mặt </label></div>
<div style="height: 5px;"><input id="lamsang" name="lamsang"  style="width:200px;display:none"  type="text"  ></div>
</div>
<div class="n-bhyt" style="display:inline-block;margin-left:0px!important">
<div style="width:450px;height:125px">
<table id="dm_bhyt" ></table>
</div>
<div class="form_row" style="vertical-align:top"  id="container_bhyt" >
<fieldset>
<legend>Thẻ BHYT</legend>
<span id="container_bhyt1">
<input  id="idbh" type="text" style="display:none" name="idbh"> 
<div style="margin-top:2px;">
<label for="mabh" style="width:120px; " >Số thẻ bảo hiểm</label>                              
<input  id="mabh1" type="text" style="width:35px;" maxlength="2" name="mabh1"> 
<input  id="mabh2" type="text" style="width:35px;" maxlength="1" onKeyPress="return restrictCharacters(this, event, digitsOnly);" name="mabh2"> 
<input  id="mabh3" type="text" style="width:35px;" maxlength="2" name="mabh3"> 
<input  id="mabh4" type="text" style="width:35px;" maxlength="2" name="mabh4"> 
<input  id="mabh5" type="text" style="width:35px;" maxlength="3" onKeyPress="return restrictCharacters(this, event, digitsOnly);" name="mabh5"> 
<input  id="mabh6" type="text" style="width:65px;" maxlength="5" onKeyPress="return restrictCharacters(this, event, digitsOnly);" name="mabh6"> 
</div>
<div style="margin-top:2px;">
<label for="doituongbhyt" style="width:120px; ">Đối tượng BHYT</label>                      
<input id="doituongbhyt" type="text" style="width:40px;" name="doituongbhyt"> 
<input disabled id="doituongbhyt1" type="text" style="width:216px;margin-left:30px"> 
</div>  
<div style="margin-top:2px;">
<label for="noidkbd"  style="width:120px; ">Nơi ĐK KCB ban đầu</label>
<input id="noidkbd" kiemtra="trong" type="text" style="width:40px;" name="noidkbd"> 
<input disabled id="noidkbd1" type="text" style="width:216px;margin-left:30px"> 
</div>   <div style="margin-top:2px;">
<label for="diachibh" style="width:120px; ">Địa chỉ</label>
<input id="diachibh" kiemtra="trong" type="text" style="width:297px;" name="diachibh"> 
</div> 
<div style="margin-top:2px;">
<label for="hsdtu" style="width:120px; ">HSD từ</label>
<input id="hsdtu" kiemtra="trong" type="text" style="width:80px;" name="hsdtu"> 
<label for="hsdden" style="width:30px; ">đến</label>
<input id="hsdden" kiemtra="trong" type="text" style="width:80px;" name="hsdden"> 
</div> 
<div style="margin-top:2px;">
<!--    <label for="trangthai"  style="width:150px;text-align:left">Trạng thái lúc nhập viện </label>
<input id="trangthai" name="trangthai"   type="text" style="width:200px;" tabindex="8">-->
<!--   <label for="ngaycap" style="width:150px; ">Ngày cấp</label>
<input id="ngaycap" type="text" style="width:80px;" name="ngaycap">           -->            
</div> 
</span>
<div>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="new_bhyt" href="#">Thêm mới<span  class="ui-icon ui-icon-plusthick"></span></a>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="edit_bhyt" href="#">Sửa<span  class="ui-icon ui-icon-pencil"></span></a>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="save_bhyt" href="#">Lưu<span  class="ui-icon ui-icon-disk"></span></a>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="chon_bhyt" href="#">Chọn thẻ (chính)<span style="margin-left: : -5px" class="ui-icon ui-icon-check"></span></a>

<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="chonthe_bhthe2" href="#">C.thẻ (phụ)<span  class="ui-icon ui-icon-check"></span></a>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="huychonthe2" href="#">Hủy thẻ (phụ)<span  class="ui-icon ui-icon-check"></span></a>
<br>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="chonthe_bpbhyt" href="#">Chọn thẻ BP.BH<span  class="ui-icon ui-icon-check"></span></a>

</div>
</fieldset>
</div>
</div>

<div class="n-bhcc" style="display:inline-block;margin-left:5px!important">
<div style="width:490px;height:125px">
<table id="dm_bhcc" ></table>
</div>
<div class="form_row" style="vertical-align:top;"  id="container_bhcc" >
<fieldset>
<legend>Thẻ BHCC</legend>
<span id="container_bhcc1">
<input  id="idbhcc" type="text" style="display:none" name="idbhcc"> 
<div style="margin-top:2px;">
<label for="bhcc_nguoiap" style="width:120px; ">Người áp thẻ</label>
<input id="bhcc_nguoiap" kiemtra="trong" type="text" style="width:80px;" name="bhcc_nguoiap" disabled>  
</div> 
<div style="margin-top:2px;">
<label for="mabhcc" style="width:120px; " >Số thẻ bảo hiểm</label>                              
<input  id="mabhcc" type="text" style="width:340px;" name="mabhcc">
</div>
<div style="margin-top:2px;">
<label for="loaithe" style="width:120px; ">Loại thẻ BHCC</label>                      
<input id="loaithe" type="text" style="width:312px;" name="loaithe"> 
</div>  
<div style="margin-top:2px;">
<label for="diachibhcc" style="width:120px; ">Địa chỉ</label>
<input id="diachibhcc" kiemtra="trong" type="text" style="width:340px;" name="diachibhcc"> 
</div> 
<div style="margin-top:2px;">
<label for="bhcc_hsdtu" style="width:120px; ">HSD từ</label>
<input id="bhcc_hsdtu" kiemtra="trong" type="text" style="width:80px;" name="bhcc_hsdtu"> 
<label for="bhcc_hsdden" style="width:30px; ">đến</label>
<input id="bhcc_hsdden" kiemtra="trong" type="text" style="width:80px;" name="bhcc_hsdden"> 
</div> 

<div style="margin-top:2px;">         
</div> 
</span>

<div>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="new_bhcc" href="#">Thêm mới<span  class="ui-icon ui-icon-plusthick"></span></a>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="edit_bhcc" href="#">Sửa<span  class="ui-icon ui-icon-pencil"></span></a>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="save_bhcc" href="#">Lưu<span  class="ui-icon ui-icon-disk"></span></a>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="chon_bhcc" href="#">Chọn thẻ<span  class="ui-icon ui-icon-check"></span></a>
<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="huychon_bhcc" href="#">Hủy chọn thẻ<span  class="ui-icon ui-icon-cancel"></span></a>
</div>
</fieldset>
</div>
</div>

</div>
</div>


<div id="prowed3" >
<a bindex="1" tabindex="13" style="margin-left:0px; margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="save" href="#">Lưu[Ctrl+S]<span  class="ui-icon ui-icon-disk"></span></a>
<a bindex="2" tabindex="14"  style="margin-left:0px; margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="thuchien" href="#">Đã thực hiện<span  class="ui-icon ui-icon-bullet"></span></a>
<a bindex="3" tabindex="15" style="margin-left:0px; margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all  fm-button-icon-left" id="chinhsua" href="#">Chỉnh sửa<span  class="ui-icon ui-icon-pencil"></span></a>
<a bindex="4" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="inphieu" href="#">In phiếu<span  class="ui-icon ui-icon-print"></span></a>
<a bindex="5" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="xemvain" href="#">Xem và in<span  class="ui-icon ui-icon-print"></span></a>        
<a bindex="6" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="inphieudecal" href="#">In nhãn gọi loa<span  class="ui-icon ui-icon-print"></span></a>
<a bindex="7" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="tamthu" href="#">Tạm thu<span  class="ui-icon ui-icon-document-b"></span></a>
<a bindex="8" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="dhsinhton1" href="#">Lấy dấu hiệu sinh tồn<span  class="ui-icon ui-icon-image"></span></a>
<a bindex="9" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="chisinh" href="#">Chỉ định<span  class="ui-icon ui-icon-document"></span></a>
<a bindex="10" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="hentrakq" href="#">Hẹn trả KQ<span  class="ui-icon  ui-icon-calendar"></span></a>
<a bindex="11" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="lichbacsy" href="#">Lịch bác sỹ<span  class="ui-icon ui-icon-calculator"></span></a>    
<a bindex="5" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="xemingl" href="#">In phiếu gọi loa<span  class="ui-icon ui-icon-print"></span></a>  

</div> 
</div> 

</body>
</html> 

<script type="text/javascript">
window.addthephu=0;
window.dem=0;
window.barcode_bhyt=0;
var alphaOnly = /[A-Za-z]/g;
var digitsOnly = /[1234567890]/g;

window.plk_dauhieusinhton=1;

<?php

if(isset($_GET['idbhyt'])){
	$idbhyt=$_GET['idbhyt'];
}else{
	$idbhyt=0;
}
$data= new SQLServer;
$params1=array('MaBenhVien');
$get1=$data->query( "{call sp_SysVars_Select(?)}", $params1);
$excute= new SQLServerResult($get1);
$tam1= $excute->get_as_array();
echo 'window.mabv="'.$tam1[0]['DefaultValue'].'";';
echo 'window.oper="'.$_GET["oper"].'";';
if($_GET["oper"]=='add'){ 
	$params1=array($_GET["id_benhnhan"]);
	$get1=$data->query( "{call GD2_lichhenkham_byidbenhnhan(?)}", $params1);
	$excute= new SQLServerResult($get1);
	$tam2= $excute->get_as_array();
	if(count($tam2)>0){
		$idhenkham=$tam2[0]["ID_Auto"];
		echo 'var BSYeuCau="'.$tam2[0]["ID_BacSi"].'";'; 
		echo 'window.ID_TrieuChung="'.$tam2[0]["ID_TrieuChung"].'";'; 
	}else{
		$idhenkham=0;
		echo 'var BSYeuCau="0";'; 
		echo 'window.ID_TrieuChung="0";';
	}
	echo 'window.id_benhnhan="'.$_GET["id_benhnhan"].'";';
	echo 'window.idluotkham="0";';  
	echo 'window.LoaiDoiTuongKham="Viện phí";'; 
	echo 'var ID_GoiKhamChoCongTy="0";';  
	echo 'var ID_PhanLoaiKham="0";';  
	echo 'var ID_ChuyenKhoa="0";';  
	echo 'var CoXacDinhNhanThan="0";';
	echo 'var ID_NguoiThucHien="'.$_SESSION["user"]["id_user"].'";';  
	echo 'var ThoiGianVaoKham="0";';  
	echo '$("#ngay").val("'. date("H").':'.date("i").' '.date("d").'/'.date("m").'/'.date("y").'");';
	echo 'var BSLamSang="0";';  
	echo 'var SanSangGoiVaoKham="1";';  
	echo 'var ID_NoiGioiThieu="0";';  
	echo 'var sothutu="";';  
	echo 'var ID_HinhThucDen="0";';
	echo 'var LayDauHieuSinhTon="0";';
	echo 'var CoKhamLamSang="0";';
	echo 'var ID_PhongKhamVatLy="0";';
	echo 'window.ID_TrangThai="0";';
	echo 'window.ID_Tang="0";';
	echo 'window.id_bhyt="0";';
	echo 'window.id_bhyt_new="0";';
	echo 'window.ID_BHYT_ThePhu="0";';
	echo 'window.id_bhcc="0";';
	echo 'window.id_bhcc_new="0";';
	echo 'window.id_bhcc_tam="0";';
	echo 'window.TrangThaiKham="0";';
	echo 'window.DaThanhToanBill="0";';
	
	echo 'window.GhiChuTrieuChung="";';  
}else{
	echo 'window.id_ttluotkham="'.$_GET["id_ttluotkham"].'";';   
	$idhenkham=0;
	$params=array($_GET["id_ttluotkham"]);
	$get=$data->query( "{call Gd2_ThongTinLuotKham_SelectAllByID_LuotKham(?)}", $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array(); 
	echo 'window.idluotkham="'.$tam[0]['ID_LuotKham'].'";';  
	echo 'window.id_benhnhan="'.$tam[0]['ID_BenhNhan'].'";';   
	echo 'window.LoaiDoiTuongKham="'.$tam[0]['LoaiDoiTuongKham'].'";'; 
	echo 'var ID_GoiKhamChoCongTy="'.$tam[0]['ID_GoiKhamChoCongTy'].'";';  
	echo 'var ID_PhanLoaiKham="'.$tam[0]['ID_PhanLoaiKham'].'";';  
	echo 'var ID_ChuyenKhoa="'.$tam[0]['ID_ChuyenKhoa'].'";'; 
	echo 'var CoXacDinhNhanThan="'.$tam[0]['CoXacDinhNhanThan'].'";';
	echo 'var ID_NguoiThucHien="'.$tam[0]['ID_NguoiThucHien'].'";';  
	echo 'var ThoiGianVaoKham="'.$tam[0]['ThoiGianVaoKham']->format('d/m/y H:i').'";'; 
	echo '$("#ngay").val("'.$tam[0]['ThoiGianVaoKham']->format('d/m/y H:i').'");';
	echo 'var BSYeuCau="'.$tam[0]['BSYeuCau'].'";';  
	echo 'var BSLamSang="'.$tam[0]['BSLamSang'].'";';  
	echo 'var SanSangGoiVaoKham="'.$tam[0]['SanSangGoiVaoKham'].'";';  
	echo 'var ID_NoiGioiThieu="'.$tam[0]['ID_NoiGioiThieu'].'";';  
	echo 'var sothutu="'.$tam[0]['SoPhieuKhamGoiLoa'].'";'; 
	echo 'var ID_HinhThucDen="'.$tam[0]['ID_HinhThucDen'].'";';
	echo 'var LayDauHieuSinhTon="'.$tam[0]['LayDauHieuSinhTon'].'";';
	echo 'var CoKhamLamSang="'.$tam[0]['CoKhamLamSang'].'";';
	echo 'var ID_PhongKhamVatLy="'.$tam[0]['ID_PhongKhamVatLy'].'";';
	echo 'window.ID_TrangThai="'.$tam[0]['ID_TrangThai'].'";';
	echo 'window.ID_Tang="'.$tam[0]['ID_Tang'].'";';
	echo 'window.id_bhyt="'.$tam[0]['ID_The'].'";';
	echo 'window.id_bhyt_new="'.$tam[0]['ID_The'].'";';
	echo 'window.ID_BHYT_ThePhu="'.$tam[0]['ID_The_Phu'].'";';
	echo 'window.id_bhcc="'.$tam[0]['ID_TheBHCC'].'";';
	echo 'window.id_bhcc_new="'.$tam[0]['ID_TheBHCC'].'";';
	echo 'window.id_bhcc_tam="'.$tam[0]['ID_TheBHCC'].'";';
	echo 'window.TrangThaiKham="'.$tam[0]['TrangThaiKham'].'";';
	echo 'window.DaThanhToanBill="'.$tam[0]['DaThanhToanBill'].'";';
	echo 'window.ID_TrieuChung="'.$tam[0]['ID_TrieuChung'].'";';
	echo 'window.GhiChuTrieuChung="'.$tam[0]['GhiChuTrieuChung'].'";';

	echo 'window.TenChuyenKhoa="'.$tam[0]['TenChuyenKhoa'].'";';
	echo 'window.NickName="'.$tam[0]['NickName'].'";';
	echo 'window.SoPhong="'.$tam[0]['SoPhong'].'";';

}
?>
$(document).ready(function() {

		$("#dsLichSuKCB").dialog({
		autoOpen:false,
		height:300,
		width: 500,
		modal: false,
		title: '',
		draggable: true,
		resizable: false,
		stack: false,
		buttons: {
			"Ok": function() {
				$( this ).dialog( "close" );
			},
		},
		beforeClose: function( event, ui ) {
		},
		close: function(event, ui) {		
		},

		});
	window.isclickID_TrieuChung=0;
	window.idbhyt=<?=$idbhyt?>;	
	openform_shortcutkey(); 
	$.get( "resource.php?module=web_services&function=create_panel_luotkham&action=index&id_benhnhan="+window.id_benhnhan, function( data ) {
		$( ".patient_info" ).html( data );
		$( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");     
	});
	if(window.oper=='edit'){
	
		$('#GhiChuTrieuChung').val(window.GhiChuTrieuChung);
		$.get( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_get_nguoiapthebhcc&hienmaloi=a&id_luotkham="+window.id_ttluotkham, function( data ) {
			$( "#bhcc_nguoiap" ).val( data );   
		}); 
	}
	create_combobox_new('#nguoilapphieu',create_nguoilapphieu,'bw','','data_nhanvien',ID_NguoiThucHien);
	window.makcbbandau='48-195';
	window._noper=1;
	create_dm_bhyt();
	create_dm_bhcc();
	input_change('#mabh1','#mabh2','');
	input_change('#mabh2','#mabh3','#mabh1');
	input_change('#mabh3','#mabh4','#mabh2');
	input_change('#mabh4','#mabh5','#mabh3');
	input_change('#mabh5','#mabh6','#mabh4');
	input_change('#mabh6','','#mabh5');
	$("#hsdtu").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		showButtonPanel: true,
		dateFormat: $.cookie("ngayJqueryUi"),
		onClose: function(selectedDate) {
			$("#hsdden").datepicker("option", "minDate", selectedDate);
		},
		onSelect: function(dat, inst) {
		}
	});
	$("#hsdden").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		showButtonPanel: true,
		gotoCurrent:true,
		dateFormat: $.cookie("ngayJqueryUi"),  
		onClose: function(selectedDate) {
			$("#hsdtu").datepicker("option", "maxDate", selectedDate);
		},
		onSelect: function(dat, inst) {
		}
	});
	$("#ngaycap").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		showButtonPanel: true,
		gotoCurrent:true,
		dateFormat: $.cookie("ngayJqueryUi"),  
		onClose: function(selectedDate) {
			$("#hsdtu").datepicker("option", "maxDate", selectedDate);
		},
		onSelect: function(dat, inst) {
		}
	});

	$("#bhcc_hsdtu").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		showButtonPanel: true,
		dateFormat: $.cookie("ngayJqueryUi"),

		onClose: function(selectedDate) {
			$("#bhcc_hsdtu").datepicker("option", "maxDate", selectedDate);
		},
		onSelect: function(dat, inst) {
		}
	});
	$("#bhcc_hsdden").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		showButtonPanel: true,
		gotoCurrent:true,
		dateFormat: $.cookie("ngayJqueryUi"),  
		onClose: function(selectedDate) {
			$("#bhcc_hsdden").datepicker("option", "minDate", selectedDate);
		},
		onSelect: function(dat, inst) {
		}
	});


	$.dateEntry.setDefaults({spinnerImage: ''});
	$("#hsdtu, #hsdden,#bhcc_hsdtu,#bhcc_hsdden").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	$('#thuchien,#save,#chinhsua,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#chon_bhyt,#lichbacsy,.button_goikham,#save_bhyt,#edit_bhyt,#new_bhyt,#save_bhcc,#edit_bhcc,#new_bhcc,#chon_bhcc,#huychon_bhcc,#btn_laysothu,#xemingl,#chonthe_bhthe2,#huychonthe2,#chonthe_bpbhyt').button();



	luu();
	them_bhyt();
	them_bhcc();
	create_thongtinluotkham();
	$("#save_bhyt,#chon_bhyt,#edit_bhyt,#chonthe_bhthe2,#chonthe_bpbhyt").button('disable');
	create_combobox_new('#doituongbhyt',create_doituongbhyt,'bw','','data_doituongbhyt',0);
	create_combobox_new('#noidkbd',create_noidkbd,'bw','','data_bhyt_nkdbd',0);
	create_combobox_new('#phanloai',create_grid,'cn','','data_phanloaikham',ID_PhanLoaiKham); 
  // chuyên khoa
  window.loadChuyenKhoa=0;
  if(ID_PhanLoaiKham!=0){ 

  	create_combobox_new('#chuyenkhoa',create_grid_chuyenkhoa,'cn','','data_chuyenkhoa&id_trieuchung='+ID_TrieuChung,ID_ChuyenKhoa);
  	//create_combobox_new('#chuyenkhoa',create_grid_chuyenkhoa,'bw','','data_chuyenkhoa&id_plk='+ID_PhanLoaiKham,ID_ChuyenKhoa);
  }else{
  		create_combobox_new('#chuyenkhoa',create_grid_chuyenkhoa,'cn','','data_chuyenkhoa&id_trieuchung='+ID_TrieuChung,ID_ChuyenKhoa);
  	
  }

  if(BSYeuCau!=0){ 
  //	create_combobox_new('#bsyeucau',create_bs,'bw','','data_BacSiChuyenKhoa&ID_ChuyenKhoa='+ID_ChuyenKhoa,BSYeuCau);
  	create_combobox_new('#bsyeucau',create_bs,'bw',[],'','');
  }else{  
  	create_combobox_new('#bsyeucau',create_bs,'bw',[],'','');
  }





  create_combobox_new('#goikham',create_goikham,'bw','','data_goikhamsk',ID_GoiKhamChoCongTy);
  create_combobox_new('#doituong',create_doituong,'bw','','',LoaiDoiTuongKham);


  create_combobox_new('#ID_TrieuChung',create_ID_TrieuChung,'cn','','data_TrieuChung',ID_TrieuChung);

  //create_combobox_new('#bsyeucau',create_bs,'bw','','data_BacSiChuyenKhoa&ID_ChuyenKhoa='+ID_ChuyenKhoa,BSYeuCau);

  create_combobox_new('#nguoichidinh',create_nhanvien,'bw','','data_nhanvien',BSLamSang);
  create_combobox_new('#nguoilapphieu',create_nguoilapphieu,'bw','','data_nhanvien',ID_NguoiThucHien);  
  $('#nguoigioithieu').val(ID_NoiGioiThieu);
  $('#sothutu').val(sothutu);
  create_combobox_new('#trangthai',create_trangthainv,'bw','','',TrangThaiKham);
  
    if(ID_PhongKhamVatLy!=0){ 
  
  	  create_combobox_new('#pbvatly',create_PhongBanVatLy,'bw','','data_pbvatly&ID_BacSi='+BSYeuCau,ID_PhongKhamVatLy);
  }else{  
  	  create_combobox_new('#pbvatly',create_PhongBanVatLy,'bw','[]','',ID_PhongKhamVatLy);
  }
  create_combobox_new('#hinhthuc',create_hinhthucden,'bw','','data_hinhthucden',ID_HinhThucDen);
  create_combobox_new('#tang',create_tang,'bw','','data_tang',ID_Tang);
  create_combobox_new('#loaithe',create_loaithebhcc,'bw','','data_loaithebhcc',0);  
  create_combobox_disable('#goikham');
  jwerty.key('tab', false);
  jwerty.key('shift+tab', false);       
  jwerty.key('shift+enter', false);
  $('input[type=text],input[type=text_checkbox],input[type=checkbox], input[type=button],a').bind("keyup", function(e) {  
  	if ($("input[type=text],input[type=checkbox], input[type=button],a").is(":focus")){          
  		if (jwerty.is("enter",e)||jwerty.is("tab",e)) { 
  			var tabindex = $(e.target).attr('tabindex');
  			window.tabindex_null=tabindex;
  			move_tabindex('next',tabindex,e)
  		}else if(jwerty.is("shift+tab",e)){
  			var tabindex = $(e.target).attr('tabindex');
  			window.tabindex_null=tabindex;
  			move_tabindex('pre',tabindex,e)
  			return false;
  		}else if(jwerty.is("←",e)){         
  			var bindex = $(e.target).attr('bindex');          
  			move_bindex('pre',bindex,e)          
  			return false;
  		}else if(jwerty.is("→",e)){
  			var bindex = $(e.target).attr('bindex');         
  			move_bindex('next',bindex,e)
  			return false;
  		}
  	}
  })


  $('#inphieu').click(function(){   
  	$.cookie("in_status", "print_direct"); 
  	dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&xemtruocin=0&action=taoluotkham&header=top&id_luotkham="+window.id_ttluotkham+"&type=report&id_form=10",'InPhieuKhamBenh');
  	$(".modalu78787878975f").dialog("close");
  })
  $('#xemvain').click(function(){
  	$.cookie("in_status", "print_preview");
  	dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&xemtruocin=1&action=taoluotkham&header=top&id_luotkham="+window.id_ttluotkham+"&type=report&id_form=10",'InPhieuKhamBenh');

  })

  $('#xemingl').click(function(){
  	$.cookie("in_status", "print_preview");
  	dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&xemtruocin=1&action=inphieugoiloa&header=top&id_luotkham="+window.id_ttluotkham+"&type=report&id_form=10",'InPhieuKhamBenh');

  })
  jwerty.key('f10', false);
  $('body').keyup(function(e) {
  	if (e.keyCode === 121) {
  		$("#tamthu").click();
  	}
  })
  $("#tamthu").click(function(){
  	parent.postMessage('tamung;tam_ung;'+window.id_benhnhan+';'+window.id_ttluotkham+';;add','*');
  });
  $('#dhsinhton1').click(function(){  
  	parent.postMessage("dsdauhieusinhton;", "*"); 
  })  
  $('#chisinh').click(function(e) {
  	parent.postMessage("chidinhkham;"+window.id_ttluotkham+";"+$('.profile_outer:first').text()+";"+window.id_benhnhan, "*");
  });  
  $("#hentrakq").click(function(e){
  	$.post('resource.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
  		elem=1 + Math.floor(Math.random() * 1000000000);
  		width=100;
  		height=100;
  		var folder= data.split(';');
  		var links='resource.php?module=canlamsang&view=hen_tra_ket_qua&id_form='+folder[2]+"&idluotkham="+window.idluotkham+'&id_benhnhan='+window.id_benhnhan;
  		dialog_add_dm("Hẹn trả kết quả",width,height,elem,links);
  	})
  }) ;

  $('#btn_laysothu').click(function(e) {
  	$.ajax({
  		type: 'POST',
  		async : false,
  		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_get_sothutu',
  		success: function(data, status, xhr) {
  			if($('#sothutu').val()==''){
  				$('#sothutu').val(data);
  			}else{
  				var t = confirm("Bạn muốn thay đổi số thứ tự "+$('#sothutu').val()+" thành "+data+" không ?");
  				$('#sothutu').val(data);
  			}
  		}
  	});
  });

  $('#sothutu').focusout(function(){
  	if($('#sothutu').val().length!=4 && $('#sothutu').val().length!=0){
  		alert("Số thứ tự không hợp lệ!");
  		$('#sothutu').val('');
  	}
  });
  number_textbox('#sothutu');

  $('#sothutu').change(function(){
  	if($('#sothutu').val()!=''){
  		$.ajax({
  			type: 'POST',
  			async : false,
  			url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=check_sogoiloa&hienmaloi=a',
  			data: {
  				idluotkham: window.idluotkham,
  				sophieu: $('#sothutu').val()
  			},
  			success: function(data, status, xhr) {
  				data=$.parseJSON(data);
  				if(data.DaDung>0){
  					tooltip_message("Số gọi loa "+$('#sothutu').val()+" đã dùng. Vui lòng nhập số khác.");
  					$('#sothutu').val('');
  				}
  			}
  		});
  	}
  });

  setTimeout(function(){
  	if(CoXacDinhNhanThan==0){
  		$('#nhanthan').prop('checked',false)
  	}else{
  		$('#nhanthan').prop('checked',true)
  	}
  },200);
  if(SanSangGoiVaoKham==0){
  	$('#comat').prop('checked',false)
  }else{
  	$('#comat').prop('checked',true)
  }
  if(LayDauHieuSinhTon==0){
  	$('#dhsinhton').prop('checked',false)
  }else{
  	$('#dhsinhton').prop('checked',true);
  }
  $('#lamsang').val(CoKhamLamSang) ;
  if(oper=='add'){
  	trangthai('add')
  	<?php
  		if($idhenkham!=0){
  			echo "$('#bsyeucau').val('".$tam2[0]['NickName']."');";
  			echo "$('#bsyeucau_hidden').val(".$tam2[0]['ID_BacSi'].");";
  			echo "$('#chuyenkhoa').val('".$tam2[0]['TenChuyenKhoa']."');";
  			echo "$('#chuyenkhoa_hidden').val(".$tam2[0]['ID_ChuyenKhoa_Offline'].");";
  			if($tam2[0]['CoLayDauHieuSinhTon']==1){
  				echo "$('#dhsinhton').prop('checked',true);";
  			}
  		}
  	?>

  }else if(oper=='edit'){
  	trangthai('notedit')
  	$('#bsyeucau').val(window.NickName);
  	$('#bsyeucau_hidden').val(window.BSYeuCau);
  	setTimeout(function(){
  		$('#pbvatly').val(window.SoPhong);
  		$('#pbvatly_hidden').val(window.ID_PhongKhamVatLy);
  	},1000);
  
  	
  }
  phanquyen();  
    if(DaThanhToanBill==1&'<?=$_SESSION["user"]["id_user"]?>'!=66){//tạm mở cho duyên vào để đổi gói khám SKCT khatm 24.2.17
    	$('#thuchien,#save,#chinhsua').button('disable');
    }

    <?php 
    if( $khoa['Isupdate']==0){
    	echo "$('#save,#chinhsua,#inphieu,#thuchien,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#btn_laysothu').button('disable');";
    	echo "alert('Hồ sơ đã bị khóa')";
    }
    ?>
})

function create_grid(elem,datalocal){
	datalocal=jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Phân loại khám', 'Mô tả', '', '','',''],
		colModel:[
		{name:'label',index:'label',hidden :false},
		{name:'TenQuanHuyen',index:'TenQuanHuyen',hidden :false},
		{name:'CoLaySinhHieu',index:'CoLaySinhHieu',hidden :true},
		{name:'CoXacDinhNhanThan',index:'CoXacDinhNhanThan',hidden :true},
		{name:'lamsang',index:'lamsang',hidden :true},
		{name:'ID_LoaiKhamLSMacDinh',index:'ID_LoaiKhamLSMacDinh',hidden :true},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'ID_Thuoc',
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

			if((oper=='edit' & dem>3)||(oper=='add')){
				/*if($(elem).data('clicked')){
					var myVar = setInterval(function(){
						$("#chuyenkhoa, #chuyenkhoa_hidden").val('');
						//$("#chuyenkhoa").focus();
						clearInterval(myVar);
					},300);
          // chuyên khoa theo phân loại khám          
     		 }*/
      var ids = $(elem).getDataIDs();
      var idcur = $(elem).jqGrid('getGridParam', 'selrow')
      var columnNames = $(elem).jqGrid('getGridParam','colModel');
      ten = $(elem).jqGrid('getCell', idcur, columnNames[2].name);
      ten1 = $(elem).jqGrid('getCell', idcur, columnNames[3].name);
      ten2 = $(elem).jqGrid('getCell', idcur, columnNames[4].name);
      window.plk_dauhieusinhton=$(elem).jqGrid('getCell', idcur, columnNames[2].name);
      $('#lamsang').val(ten2);
     /* if(ten==0){
      	$('#dhsinhton').prop('checked', false);
      }else{
      	$('#dhsinhton').prop('checked', true);
      }*/
      if(ten1==0){
      	$('#nhanthan').prop('checked', false);
      }else{
      	$('#nhanthan').prop('checked', true);
      }
      if(id==25){
      	create_combobox_enable('#goikham');
      }else{
      	create_combobox_disable('#goikham');
      }
      if(id==24){
      	setval_new('#trangthai',4);
      }

      id_loaikham=$(elem).jqGrid('getCell', id,'ID_LoaiKhamLSMacDinh');
  }
},
ondblClickRow: function (id, rowIndex, columnIndex) {

},
loadComplete: function(data) {
	grid_filter_enter(elem) ;
	dem++;
},
});
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );
}

function create_Congty(elem,datalocal){
	datalocal=jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Nickname', 'Họ và tên'],
		colModel:[
		{name:'nickname',index:'nickname',hidden :false},
		{name:'hovaten',index:'hovaten',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
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

		},
		loadComplete: function(data) {
			grid_filter_enter(elem) ;

		},    

	}); 

	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );

}  


function create_nhanvien(elem,datalocal){ 
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Nickname', 'Họ và tên'],
		colModel:[      
		{name:'nickname',index:'nickname',hidden :false},
		{name:'hovaten',index:'hovaten',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
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

		},
		loadComplete: function(data) {  
			grid_filter_enter(elem) ;

		},    

	}); 

	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );

}  
function create_hinhthucden(elem,datalocal){  
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring",
		colNames:['Hình thức đến'],
		colModel:[      
		{name:'nickname',index:'nickname',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		height:100,
		width: 470,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){    

		},
		loadComplete: function(data) {  
			grid_filter_enter(elem) ;

		},    

	}); 

	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );

}  
function create_tang(elem,datalocal){ 
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring",
		colNames:['Tầng'],
		colModel:[      
		{name:'TenTang',index:'TenTang',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		height:100,
		width: 470,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){    

		},
		loadComplete: function(data) {  
			grid_filter_enter(elem) ;

		},    

	}); 

	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );

}  
function create_loaithebhcc(elem,datalocal){  
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring",
		colNames:['Loại thẻ','Tên công ty','Mã nhóm'],
		colModel:[      
		{name:'loaithe',index:'loaithe',width:"40%",hidden :false}, 
		{name:'tencongty',index:'tencongty',width:"40%",hidden :false}, 
		{name:'manhom',index:'manhom',width:"20%",hidden :false},     
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		height:100,
		width: 500,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){    

		},
		loadComplete: function(data) {  
			grid_filter_enter(elem) ;

		},    

	}); 

	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );

}  
function create_nguoilapphieu(elem,datalocal){  
	$(elem).
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,  
		colNames:['Nickname', 'Họ và tên'],
		colModel:[      
		{name:'nickname',index:'nickname',hidden :false},
		{name:'hovaten',index:'hovaten',hidden :false},

		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		sortname: 'ID_Thuoc',
		height:160,
		width: 470,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){  

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
function create_noigioithieu(elem,datalocal){ 
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,  
		datatype: "jsonstring" ,
		colNames:['Người giới thiệu', 'Nơi giới thiệu','Mã số','Điện thoại'],
		colModel:[      
		{name:'nickname',index:'nickname',hidden :false},
		{name:'hovaten',index:'hovaten',hidden :false},
		{name:'DiaChi',index:'DiaChi',hidden :false},
		{name:'DienThoai',index:'DienThoai',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		sortname: 'ID_Thuoc',
		height:120,
		width: 470,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){              
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {         
		},
		loadComplete: function(data) {    
		},        
	});       
	$(elem).jqGrid('bindKeys', {} );    
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
}  


function create_goikham(elem,datalocal){  
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,  
		datatype: "jsonstring" ,
		colNames:['Tên đợt khám', 'Tên công ty'],
		colModel:[      
		{name:'nickname',index:'nickname',hidden :false},
		{name:'hovaten',index:'hovaten',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		sortname: 'ID_Thuoc',
		height:120,
		width: 470,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){              
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {         
		},
		loadComplete: function(data) {    
		},        
	});       
	$(elem).jqGrid('bindKeys', {} );    

}  

function create_doituong(elem,datalocal){ 
	datalocal=jQuery.parseJSON('{"rows":[{"id":"Viện phí","cell":["Viện phí"]},{"id":"BHYT","cell":["Bảo hiểm y tế"]}]} ');  
	$(elem).jqGrid({
		datastr:datalocal,  
		datatype: "jsonstring" ,
		colNames:['Đối tượng khám'],
		colModel:[      
		{name:'doituong',index:'doituong',hidden :false},   
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		sortname: 'ID_Thuoc',
		height:120,
		width: 470,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){
			var rowData = jQuery(this).getRowData(id);
			if(rowData['doituong']=='Bảo hiểm y tế'){
				$('#nhanthan').prop('checked',true);
				var ids = $('#dm_bhyt').jqGrid('getDataIDs');
				for(var i=0;i<=ids.length-1;i++){
					if(ids[i]==window.id_bhyt){
						$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'red'});
					}else{
						$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'black'}); 
					}
				}
			}else{
				window.id_bhyt=0;
				window.id_bhyt_new=0;
				window.ID_BHYT_ThePhu=0;
				$('#nhanthan').prop('checked',false);
				var ids = $('#dm_bhyt').jqGrid('getDataIDs');
				for(var i=0;i<=ids.length-1;i++){         
					$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'black'});         
				}
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {         
		},
		loadComplete: function(data) {    
		},        
	});       
	$(elem).jqGrid('bindKeys', {} );    
}
function create_trangthainv(elem,datalocal){  
	datalocal=jQuery.parseJSON('{"rows":[{"id":"1","cell":["Đúng tuyến"]},{"id":"2","cell":["Có giấy chuyển viện"]},{"id":"3","cell":["Trái tuyến"]},{"id":"4","cell":["Cấp cứu"]}]} ');   
	$(elem).jqGrid({
		datastr:datalocal,  
		datatype: "jsonstring" ,
		colNames:['Đối tượng khám'],
		colModel:[      
		{name:'doituong',index:'nickname',hidden :false},   
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		sortname: 'ID_Thuoc',
		height:120,
		width: 470,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){              
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {         
		},
		loadComplete: function(data) {    
		},        
	});       
	$(elem).jqGrid('bindKeys', {} );    
}  

function trangthai(trangthai){
	if(trangthai=='add'){  
		window._noper=1;
		create_combobox_disable('#doituongbhyt'); 
		create_combobox_disable('#noidkbd');
		$("#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabh7,#diachibh,#hsdtu,#hsdden").prop('disabled', true);
		$("#mabhcc,#diachibhcc,#bhcc_hsdtu,#bhcc_hsdden").prop('disabled', true);
		$("#dhsinhton,#comat,#nhanthan,#sothutu,#nguoigioithieu").prop('disabled',false);

		create_combobox_disable('#loaithe');
		create_combobox_enable('#phanloai');  
		create_combobox_enable('#chuyenkhoa');
		create_combobox_disable('#goikham');
		create_combobox_enable('#doituong');
		create_combobox_enable('#bsyeucau');
		create_combobox_enable('#nguoichidinh');
		create_combobox_disable('#nguoilapphieu');
		create_combobox_enable('#trangthai');
		create_combobox_enable('#hinhthuc');
		create_combobox_enable('#tang');
		create_combobox_enable('#pbvatly');

		$('#save,#chinhsua,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#lichbacsy').button('disable');
		$('#thuchien,#btn_laysothu').button('enable');
		setTimeout(function(){
			$('#phanloai').focus();
		},300)
	}else if(trangthai=='notedit'){
		window._noper=2;
		$('#chinhsua,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#lichbacsy,#xemingl').button('enable');
		$('#thuchien,#save,#new_bhyt,#edit_bhyt,#chon_bhyt,#chonthe_bpbhyt,#chonthe_bhthe2,#new_bhcc,#edit_bhcc,#chon_bhcc,#huychon_bhcc,#btn_laysothu').button('disable');
		create_combobox_disable('#doituongbhyt');
		create_combobox_disable('#noidkbd');
		$("#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabh7,#diachibh,#hsdtu,#hsdden").prop('disabled', true);
		$("#mabhcc,#diachibhcc,#bhcc_hsdtu,#bhcc_hsdden").prop('disabled', true);
		$("#dhsinhton,#comat,#nhanthan,#sothutu,#nguoigioithieu").prop('disabled',true);
		create_combobox_disable('#loaithe');
		create_combobox_disable('#phanloai');    
		create_combobox_disable('#chuyenkhoa'); 
		create_combobox_disable('#goikham');
		create_combobox_disable('#doituong');
		create_combobox_disable('#bsyeucau');
		create_combobox_disable('#nguoichidinh');
		create_combobox_disable('#nguoilapphieu');
		create_combobox_disable('#trangthai');
		create_combobox_disable('#hinhthuc');
		create_combobox_disable('#tang');
		create_combobox_disable('#pbvatly');
		$('#chinhsua').focus();
	}else if(trangthai=='edit'){
		window._noper=1;
		$('#save,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#lichbacsy,#btn_laysothu,#xemingl').button('enable');
		$('#thuchien,#chinhsua').button('disable');
		$('#new_bhyt,#new_bhcc').button('enable');
		$("#dhsinhton,#comat,#nhanthan,#sothutu,#nguoigioithieu").prop('disabled',false);
		$("#dm_bhyt").jqGrid("resetSelection");
		$("#dm_bhcc").jqGrid("resetSelection");
		create_combobox_enable('#phanloai');  
		create_combobox_enable('#chuyenkhoa');
		create_combobox_enable('#goikham');
		create_combobox_enable('#doituong');
		create_combobox_enable('#bsyeucau');
		create_combobox_enable('#nguoichidinh');
		create_combobox_disable('#nguoilapphieu');
		create_combobox_enable('#trangthai');
		create_combobox_enable('#hinhthuc');
		create_combobox_enable('#tang');
		create_combobox_enable('#pbvatly');
		$('#phanloai').focus();
	}else if(trangthai=='hoantat'){ 
		$('#save,#chinhsua,#inphieu,#thuchien,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#btn_laysothu').button('disable');
		$('#xemvain,#lichbacsy').button('enable');
		$("#dhsinhton,#comat,#nhanthan,#sothutu,#nguoigioithieu").prop('disabled',true);
		create_combobox_disable('#phanloai'); 
		create_combobox_disable('#chuyenkhoa')
		create_combobox_disable('#goikham');
		create_combobox_disable('#doituong');
		create_combobox_disable('#bsyeucau');
		create_combobox_disable('#nguoichidinh');
		create_combobox_disable('#nguoilapphieu');  
		create_combobox_disable('#trangthai');
		create_combobox_disable('#hinhthuc');
		create_combobox_disable('#tang');
		create_combobox_disable('#pbvatly');
		$('#chinhsua').focus();
	}

}

function luu(){
	$('#thuchien').click(function(){
		if($('#phanloai_hidden').val()== 39 ||
			$('#phanloai_hidden').val()== 32 ||
			$('#phanloai_hidden').val()== 19 ||
			$('#phanloai_hidden').val()== 24 ){
			if($('#ID_TrieuChung_hidden').val()==''){
				if($.trim($('#GhiChuTrieuChung').val())==''){
					$('#ID_TrieuChung').focus();
					tooltip_message("Ghi chú triệu chứng không được để trống");
					return false;
				}
			}
		}
		if($("#phanloai_hidden").val()==''){
			$("#phanloai").focus();
		}else if($("#chuyenkhoa_hidden").val()==''){
			tooltip_message("Chuyên khoa không được để trống");
			$("#chuyenkhoa").focus();
		}
		else{
			if($("#doituong").val()=='Viện phí'){
				window.id_bhyt=0;
			}
			$('#thuchien').button('disable');     
			if($('#phanloai_hidden').val()==24){
				setval_new('#trangthai',4); 
			}else{
				var rowData = $("#dm_bhyt").getRowData(id_bhyt);
				if(rowData['IsDungTuyen']!=1){
					if($('#trangthai_hidden').val()!=4 && $('#trangthai_hidden').val()!=2){
						setval_new('#trangthai',3); 
					}
				}else{
					if($('#trangthai_hidden').val()!=4){
						setval_new('#trangthai',1);
					}
				}
			}
			window.datatosend = '{';
			window.datatosend+='"phanloai":'+JSON.stringify($("#phanloai_hidden").val())+''; 
			window.datatosend+=',"chuyenkhoa":'+JSON.stringify($('#chuyenkhoa_hidden').val())+'';  
			window.datatosend+=',"goikham":'+JSON.stringify($('#goikham_hidden').val())+'';
			window.datatosend+=',"doituong":'+JSON.stringify($('#doituong_hidden').val())+'';
			window.datatosend+=',"bsyeucau":'+JSON.stringify($('#bsyeucau_hidden').val())+'';
			window.datatosend+=',"nguoichidinh":0';
			window.datatosend+=',"nguoilapphieu":'+JSON.stringify($('#nguoilapphieu_hidden').val())+'';
			window.datatosend+=',"nguoigioithieu":'+JSON.stringify($('#nguoigioithieu').val())+'';
			window.datatosend+=',"trangthai":'+JSON.stringify($('#trangthai_hidden').val())+'';
			window.datatosend+=',"pbvatly":'+JSON.stringify($('#pbvatly_hidden').val())+'';
			window.datatosend+=',"hinhthuc":'+JSON.stringify($('#hinhthuc_hidden').val())+'';
			window.datatosend+=',"tang":'+JSON.stringify($('#tang_hidden').val())+'';
			window.datatosend+=',"dhsinhton":'+JSON.stringify($('#dhsinhton').is(':checked'))+'';
			window.datatosend+=',"comat":'+JSON.stringify($('#comat').is(':checked'))+'';
			window.datatosend+=',"nhanthan":'+JSON.stringify($('#nhanthan').is(':checked'))+'';
			window.datatosend+=',"lamsang":'+JSON.stringify($('#lamsang').val())+'';
			window.datatosend+=',"id_thebhyt":'+JSON.stringify(window.id_bhyt)+'';
			window.datatosend+=',"ID_BHYT_ThePhu":'+JSON.stringify(window.ID_BHYT_ThePhu)+'';
			window.datatosend+=',"id_thebhcc":'+JSON.stringify(window.id_bhcc)+'';
			window.datatosend+=',"sothutu":'+JSON.stringify($('#sothutu').val())+'';
			window.datatosend+=',"ID_TrieuChung_hidden":'+JSON.stringify($('#ID_TrieuChung_hidden').val())+'';
			window.datatosend+=',"GhiChuTrieuChung":'+JSON.stringify($('#GhiChuTrieuChung').val().replace(/[&\/\\#+()$~%'"*?{}]/g,''))+'';
			window.datatosend+=',"ID_ThePhu2":'+JSON.stringify(window.ID_ThePhu_Ar)+'';
			
			window.datatosend+='}';

		
			datatosend= jQuery.parseJSON(datatosend);
			if(window.id_bhyt==0 && $('#doituong_hidden').val()=='BHYT'){
				alert('Lượt khám BHYT bắt buộc nhập thẻ BHYT');
			}else if($('#doituong_hidden').val()=='BHYT' && $('#trangthai').val()==''){
				alert('Lượt khám BHYT bắt buộc nhập trạng thái lúc nhập viện');
				$('#trangthai').focus();
			}else{ 
				$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_huyad&hienmaloi=2&idhenkham=<?=$idhenkham?>&id_benhnhan="+window.id_benhnhan+"&oper=add",datatosend).done(function(data) {
					var data=$.parseJSON(data);
					if(data.IsLock==1){
						$('#thuchien').button('enable');
						$('#chuyenkhoa').focus();
						alert(data.Notes);
					}else{
					if(data.status=='oke'){
						tooltip_message("Lưu thành công");
						parent.postMessage("taoluotkham_thanhcong;"+data.id_ttluotkham+";"+window.id_benhnhan, "*");        
						window.id_ttluotkham=data.id_ttluotkham;
						window.oper='edit'; 
						$('#inphieu').focus();
						trangthai('notedit');
					}else{
						tooltip_message("Lưu thất bại");
					}
					}
				});
			}
		}
	});
	$('#chinhsua').click(function(){
		trangthai('edit');
		$('#phanloai').focus();
		$('#phanloai').select();
	})
	$('#inphieudecal').click(function(){
		$.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=hanhchinh&action=nhan_ngoaitru&type=report&id_form=794&idluotkham="+window.id_ttluotkham+"&dduong=minh kha",'nhan_noitru');
		$(".frame_u78787878975f").css("width","793px");
	})

	$('#save').click(function(){
		if($('#phanloai_hidden').val()== 39 ||
			$('#phanloai_hidden').val()== 32 ||
			$('#phanloai_hidden').val()== 19 ||
			$('#phanloai_hidden').val()== 24 ){
			if($('#ID_TrieuChung_hidden').val()==''){
				if($.trim($('#GhiChuTrieuChung').val())==''){
					$('#ID_TrieuChung').focus();
					tooltip_message("Ghi chú triệu chứng không được để trống");
					return false;
				}
			}						
		}
		if($("#chuyenkhoa_hidden").val()==''){
			$("#chuyenkhoa").focus();
			tooltip_message("Chuyên khoa không được để trống");
			return false;
		}



		if($("#doituong").val()=='Viện phí'){
			window.id_bhyt=0;
		}
		if($('#phanloai_hidden').val()==24){
			setval_new('#trangthai',4); 
		}else{
			var rowData = $("#dm_bhyt").getRowData(id_bhyt);
			if(rowData['IsDungTuyen']!=1){
				if($('#trangthai_hidden').val()!=4 && $('#trangthai_hidden').val()!=2){
					setval_new('#trangthai',3); 
				}
			}else{
				if($('#trangthai_hidden').val()!=4){
					setval_new('#trangthai',1);
				}
			}
		}
		window.datatosend = '{';
		window.datatosend+='"phanloai":'+JSON.stringify($("#phanloai_hidden").val())+'';
		window.datatosend+=',"chuyenkhoa":'+JSON.stringify($('#chuyenkhoa_hidden').val())+'';
		window.datatosend+=',"goikham":'+JSON.stringify($('#goikham_hidden').val())+'';
		window.datatosend+=',"doituong":'+JSON.stringify($('#doituong_hidden').val())+'';
		window.datatosend+=',"bsyeucau":'+JSON.stringify($('#bsyeucau_hidden').val())+'';
		window.datatosend+=',"nguoichidinh":0';
		window.datatosend+=',"nguoilapphieu":'+JSON.stringify($('#nguoilapphieu_hidden').val())+'';
		window.datatosend+=',"nguoigioithieu":'+JSON.stringify($('#nguoigioithieu').val())+'';
		window.datatosend+=',"trangthai":'+JSON.stringify($('#trangthai_hidden').val())+'';
		window.datatosend+=',"pbvatly":'+JSON.stringify($('#pbvatly_hidden').val())+'';
		window.datatosend+=',"hinhthuc":'+JSON.stringify($('#hinhthuc_hidden').val())+'';
		window.datatosend+=',"tang":'+JSON.stringify($('#tang_hidden').val())+'';
		window.datatosend+=',"dhsinhton":'+JSON.stringify($('#dhsinhton').is(':checked'))+'';
		window.datatosend+=',"comat":'+JSON.stringify($('#comat').is(':checked'))+'';
		window.datatosend+=',"nhanthan":'+JSON.stringify($('#nhanthan').is(':checked'))+'';
		window.datatosend+=',"lamsang":'+JSON.stringify($('#lamsang').val())+'';
		window.datatosend+=',"id_thebhyt":'+JSON.stringify(window.id_bhyt_new)+'';
		window.datatosend+=',"ID_BHYT_ThePhu":'+JSON.stringify(window.window.ID_BHYT_ThePhu)+'';
		window.datatosend+=',"id_thebhcc":'+JSON.stringify(window.id_bhcc_new)+'';
		window.datatosend+=',"sothutu":'+JSON.stringify($('#sothutu').val())+'';
		window.datatosend+=',"ID_TrieuChung_hidden":'+JSON.stringify($('#ID_TrieuChung_hidden').val())+'';
		window.datatosend+=',"GhiChuTrieuChung":'+JSON.stringify($('#GhiChuTrieuChung').val().replace(/[&\/\\#+()$~%'"*?{}]/g,''))+'';	
		window.datatosend+=',"ID_ThePhu2":'+JSON.stringify(window.ID_ThePhu_Ar)+'';
		window.datatosend+='}';
		//	alert(datatosend);
		datatosend= jQuery.parseJSON(datatosend);
		if(window.id_bhyt==0 && $('#doituong_hidden').val()=='BHYT'){
			alert('Lượt khám BHYT bắt buộc nhập thẻ BHYT');
		}else if($('#doituong_hidden').val()=='BHYT' && $('#trangthai').val()==''){
			alert('Lượt khám BHYT bắt buộc nhập trạng thái lúc nhập viện');
			$('#trangthai').focus();
		}else{
			$.ajax({
		  		type: 'POST',
		  		async : false,
		  		data:datatosend,
		  		url: "resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_huyad&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&oper=edit",
		  		success: function(data, status, xhr) {
		  			data=$.parseJSON(data);
					if(data.IsLock==1){
						alert(data.Notes);
					}else{
						if(data.Error!=1){
							tooltip_message("Sửa thành công");
							$('#inphieu').focus();
							trangthai('notedit');
						}else{
							tooltip_message("Sửa thất bại");
						}
					}
		  		}
		  	});
			/*$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&oper=edit",datatosend).done(function(data) {
				data=$.parseJSON(data);
				if(data.IsLock==1){
					alert(data.Notes);
				}else{
					if(data.Error!=1){
						tooltip_message("Sửa thành công");
						$('#inphieu').focus();
						trangthai('notedit');
					}else{
						tooltip_message("Sửa thất bại");
					}
				}
			});*/
		}
	});
}

function move_bindex(tam,bindex,e){
	if(tam=='next'){
		bindex++;
	}else{
		bindex--;
	}
	if($('[bindex=' +bindex + ']').prop('disabled')){
		move_bindex(tam,bindex,e);
	}else{
		$('[bindex=' +  bindex + ']').focus();
		return false;
	}
}

function create_doituongbhyt(elem,datalocal){
	datalocal=jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Mã đối tượng', 'Tên đối tượng'],
		colModel:[
		{name:'ma_dt',index:'ma_dt',hidden :false},
		{name:'ten_dt',index:'ten_dt',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'ID_Thuoc',
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
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
		},
	});
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );
}

function create_noidkbd(elem,datalocal){
	datalocal=jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Mã KCB ban đầu', 'Tên KCB ban đầu'],
		colModel:[
		{name:'Ma_KCB_BanDau',index:'Ma_KCB_BanDau',hidden :false,width:'30%'},
		{name:'Ten_KCB_BanDau',index:'Ten_KCB_BanDau',hidden :false,width:'70%'},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,     
		modal:true,  
		rowNum: 100,
		rowList:[],   
		sortname: 'ID_Thuoc',
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
			var rowData = $(elem).getRowData(id);      
			$('#noidkbd1').val(rowData['Ten_KCB_BanDau']);
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

		},
		loadComplete: function(data) {
		},

	});

	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );

}

function create_bhyt(elem,datalocal){
	datalocal=jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Số thẻ', 'Địa chỉ', 'Ma_KCB_BanDau', 'HanSD_TuNgay','HanSD_DenNgay','NgayCap'],
		colModel:[
		{name:'SoThe',index:'SoThe',hidden :false},
		{name:'DiaChiTheBHYT',index:'DiaChiTheBHYT',hidden :false},
		{name:'Ma_KCB_BanDau',index:'Ma_KCB_BanDau',hidden :false},
		{name:'HanSD_TuNgay',index:'HanSD_TuNgay',hidden :false},
		{name:'HanSD_DenNgay',index:'HanSD_DenNgay',hidden :false},
		{name:'NgayCap',index:'NgayCap',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'ID_Thuoc',
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
			var rowData = $(elem).getRowData(id); 
			$('#diachibh').val(rowData['DiaChiTheBHYT']);
			$('#hsdtu').val(rowData['HanSD_TuNgay']);
			$('#hsdden').val(rowData['HanSD_DenNgay']);
			$('#ngaycap').val(rowData['NgayCap']);
			$('#mabh1').val(rowData['SoThe'].substring(0, 2));
			$('#mabh2').val(rowData['SoThe'].substring(2, 3));
			$('#mabh3').val(rowData['SoThe'].substring(3, 5));
			$('#mabh4').val(rowData['SoThe'].substring(5, 7));
			$('#mabh5').val(rowData['SoThe'].substring(7, 10));
			$('#mabh6').val(rowData['SoThe'].substring(10, 15));
			var doituongbhyt_Index = $('#doituongbhyt_grid').jqGrid('getGridParam','_index');
			var doituongbhyt_String = $('#doituongbhyt_grid').jqGrid('getGridParam','data')[doituongbhyt_Index[(rowData['SoThe'].substring(0, 3))]];
			$('#doituongbhyt').val(doituongbhyt_String['ma_dt']);
			$('#doituongbhyt1').val(doituongbhyt_String['ten_dt']);
			var idToDataIndex = $('#noidkbd_grid').jqGrid('getGridParam','_index');
			var noidkbd_String = $('#noidkbd_grid').jqGrid('getGridParam','data')[idToDataIndex[rowData['Ma_KCB_BanDau']]];
			$('#noidkbd').val(noidkbd_String['Ma_KCB_BanDau']);
			$('#noidkbd1').val(noidkbd_String['Ten_KCB_BanDau']);
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

		},
		loadComplete: function(data) {
			if(window.oper=='add'){

			}else{
				var rowData = $(elem).getRowData(id_bhyt);      
				$('#diachibh').val(rowData['DiaChiTheBHYT']);
				$('#hsdtu').val(rowData['HanSD_TuNgay']);
				$('#hsdden').val(rowData['HanSD_DenNgay']);
				$('#ngaycap').val(rowData['NgayCap']);
			}
		},

	});
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );

}

function them_bhyt(){
	$('#new_bhyt').click(function(){
		window.bhyt_ac='add';
		window.id_bhyt=0;
		create_combobox_enable('#trangthai');
		create_combobox_enable('#noidkbd');
		create_combobox_enable('#doituongbhyt');
		$('#save_bhyt').button('enable');
		$('#new_bhyt,#edit_bhyt').button('disable');
		$("#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabh7,#diachibh,#hsdtu,#hsdden").prop('disabled', false);
		$('#container_bhyt1 input').val('');
		$("#dm_bhyt").jqGrid("resetSelection");
		$('#mabh1').focus();
	})
	$('#edit_bhyt').click(function(){
		$('#edit_bhyt').button('disable');
		$('#save_bhyt,#new_bhyt').button('enable');
		var rowData = $('#dm_bhyt').getRowData($('#dm_bhyt').jqGrid('getGridParam', 'selrow') );
		create_combobox_enable('#trangthai');
		create_combobox_enable('#noidkbd');
		create_combobox_enable('#doituongbhyt');
		$("#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabh7,#diachibh,#hsdtu,#hsdden").prop('disabled', false);
		$('#diachibh').val(rowData['DiaChiTheBHYT']);
		$('#hsdtu').val(rowData['HanSD_TuNgay']);
		$('#hsdden').val(rowData['HanSD_DenNgay']);
		$('#ngaycap').val(rowData['NgayCap']);
		$('#mabh1').val(rowData['SoThe'].substring(0, 2));
		$('#mabh2').val(rowData['SoThe'].substring(2, 3));
		$('#mabh3').val(rowData['SoThe'].substring(3, 5));
		$('#mabh4').val(rowData['SoThe'].substring(5, 7));
		$('#mabh5').val(rowData['SoThe'].substring(7, 10));
		$('#mabh6').val(rowData['SoThe'].substring(10, 15));
		var doituongbhyt_Index = $('#doituongbhyt_grid').jqGrid('getGridParam','_index');
		var doituongbhyt_String = $('#doituongbhyt_grid').jqGrid('getGridParam','data')[doituongbhyt_Index[(rowData['SoThe'].substring(0, 3))]]; 
		$('#doituongbhyt').val(doituongbhyt_String['ma_dt']);
		$('#doituongbhyt1').val(doituongbhyt_String['ten_dt']);
		var idToDataIndex = $('#noidkbd_grid').jqGrid('getGridParam','_index');
		var noidkbd_String = $('#noidkbd_grid').jqGrid('getGridParam','data')[idToDataIndex[rowData['Ma_KCB_BanDau']]];
		$('#noidkbd').val(noidkbd_String['Ma_KCB_BanDau']);
		$('#noidkbd1').val(noidkbd_String['Ten_KCB_BanDau'])
		window.bhyt_ac='edit';
		window.id_bhyt=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
		$('#mabh1').focus().select();
	})
	//button chọn thẻ dùng cho bộ phận bảo hiểm y tế

	$('#chonthe_bpbhyt').click(function(){
		// console.log(window.ID_ThePhu_Ar);
		if(jQuery.inArray($('#dm_bhyt').jqGrid('getGridParam', 'selrow'), window.ID_ThePhu_Ar) !== -1){
			alert("Thẻ này đã được chọn làm thẻ phụ!");
		}else{
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_date').done(function(output){
				var dateParts = output.split("/");
				var date = new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
				var hsd_den= $('#dm_bhyt').jqGrid('getCell', $('#dm_bhyt').jqGrid('getGridParam', 'selrow'), 'HanSD_DenNgay');
				var hsd_tu = $('#dm_bhyt').jqGrid('getCell', $('#dm_bhyt').jqGrid('getGridParam', 'selrow'), 'HanSD_TuNgay');
				var dateParts1 = hsd_den.split("/");
				var dateParts2 = hsd_tu.split("/");
				var date_den = new Date('20'+''+dateParts1[2], (dateParts1[1] - 1), dateParts1[0]);
				var date_tu = new Date('20'+''+dateParts2[2], (dateParts2[1] - 1), dateParts2[0]);

				if(oper=='add'){
					// if(date_den<date || date_tu>date){
					// 	if(date_den<date){
					// 		tooltip_message("Thẻ hết hạn sử dụng");
					// 	}
					// 	if(date_tu>date){
					// 		tooltip_message("Thẻ chưa đến hạn sử dụng");
					// 	}
					// }else{
						if($("#doituong").val()=='Bảo hiểm y tế'){
							window.id_bhyt=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
							window.id_bhyt_new=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
							var ids = $('#dm_bhyt').jqGrid('getDataIDs');
							for(var i=0;i<=ids.length-1;i++){
								if(ids[i]==window.id_bhyt){
									$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'red'});
								}else if(jQuery.inArray(ids[i], window.ID_ThePhu_Ar) !== -1){

								}else{
									$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'black'});
								}
							}
							$('#chonthe_bpbhyt').button('disable');
						}else{
							tooltip_message("Chỉ được áp thẻ cho lượt khám BHYT");
						}
					// }
				}else{
					var vaokham = '<?php if($_GET["oper"]=='edit') echo $tam[0]['ThoiGianVaoKham']->format('d/m/Y')?>';
					var dateParts3 = vaokham.split("/");
					var date_vaokham= new Date(dateParts3[2], (dateParts3[1] - 1), dateParts3[0]);
					// if(date_den<date_vaokham || date_tu>date_vaokham){
					// 	if(date_den<date_vaokham){
					// 		tooltip_message("Thẻ hết hạn sử dụng");
					// 	}
					// 	if(date_tu>date_vaokham){
					// 		tooltip_message("Thẻ chưa đến hạn sử dụng");
					// 	}
					// }else{
						if(window.id_ttluotkham>0){
							if(window.LoaiDoiTuongKham=='BHYT'){
								window.id_bhyt=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
								window.id_bhyt_new=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
								$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe="+window.id_bhyt+"&ac=bhyt").done(function(data) {
									data=$.parseJSON(data);
									if(data.IsLock==1){
										alert(data.Notes);
									}else{
										if(data.Error!=1){
											tooltip_message("Áp thẻ thành công");
											var ids = $('#dm_bhyt').jqGrid('getDataIDs');
											for(var i=0;i<=ids.length-1;i++){
												if(ids[i]==window.id_bhyt){
													$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'red'});
												}else if(jQuery.inArray(ids[i], window.ID_ThePhu_Ar) !== -1){

												}else{
													$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'black'});
												}
											}
											$('#chonthe_bpbhyt').button('disable');
										}else{
											tooltip_message("Áp thẻ thất bại");
										}
									}
								});
							}else if($("#doituong").val()=='Bảo hiểm y tế'){
								window.id_bhyt=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
								window.id_bhyt_new=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
								$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe="+window.id_bhyt+"&ac=bhyt").done(function(data) {
									data=$.parseJSON(data);
									if(data.IsLock==1){
										alert(data.Notes);
									}else{
										if(data.Error!=1){
											tooltip_message("Áp thẻ thành công");
											var ids = $('#dm_bhyt').jqGrid('getDataIDs');
											for(var i=0;i<=ids.length-1;i++){
												if(ids[i]==window.id_bhyt){
													$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'red'});
												}else if(jQuery.inArray(ids[i], window.ID_ThePhu_Ar) !== -1){

												}else{
													$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'black'});
												}
											}
											$('#chonthe_bpbhyt').button('disable');
										}else{
											tooltip_message("Áp thẻ thất bại");
										}
									}
								});
							}else{
								tooltip_message("Chỉ được áp thẻ cho lượt khám BHYT");
							}
						}
					// }
				}
				var rowData = $("#dm_bhyt").getRowData($('#dm_bhyt').jqGrid('getGridParam', 'selrow'));
				if(rowData['Ma_KCB_BanDau']!=window.makcbbandau){
					if($('#trangthai_hidden').val()!=4 && $('#trangthai_hidden').val()!=2){
						setval_new('#trangthai',3);
					}
				}else{
					if($('#trangthai_hidden').val()!=4){
						setval_new('#trangthai',1);
					}
				}
			})
		}
	});

	//end button chọn bpbhyt


	$('#chon_bhyt').click(function(){
		// console.log(window.ID_ThePhu_Ar);
		if(jQuery.inArray($('#dm_bhyt').jqGrid('getGridParam', 'selrow'), window.ID_ThePhu_Ar) !== -1){
			alert("Thẻ này đã được chọn làm thẻ phụ!");
		}else{
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_date').done(function(output){
				var dateParts = output.split("/");
				var date = new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
				var hsd_den= $('#dm_bhyt').jqGrid('getCell', $('#dm_bhyt').jqGrid('getGridParam', 'selrow'), 'HanSD_DenNgay');
				var hsd_tu = $('#dm_bhyt').jqGrid('getCell', $('#dm_bhyt').jqGrid('getGridParam', 'selrow'), 'HanSD_TuNgay');
				var dateParts1 = hsd_den.split("/");
				var dateParts2 = hsd_tu.split("/");
				var date_den = new Date('20'+''+dateParts1[2], (dateParts1[1] - 1), dateParts1[0]);
				var date_tu = new Date('20'+''+dateParts2[2], (dateParts2[1] - 1), dateParts2[0]);

				if(oper=='add'){
					if(date_den<date || date_tu>date){
						if(date_den<date){
							tooltip_message("Thẻ hết hạn sử dụng");
						}
						if(date_tu>date){
							tooltip_message("Thẻ chưa đến hạn sử dụng");
						}
					}else{
						if($("#doituong").val()=='Bảo hiểm y tế'){
							window.id_bhyt=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
							window.id_bhyt_new=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
							var ids = $('#dm_bhyt').jqGrid('getDataIDs');
							for(var i=0;i<=ids.length-1;i++){
								if(ids[i]==window.id_bhyt){
									$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'red'});
								}else if(jQuery.inArray(ids[i], window.ID_ThePhu_Ar) !== -1){

								}else{
									$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'black'});
								}
							}
							$('#chon_bhyt').button('disable');
						}else{
							tooltip_message("Chỉ được áp thẻ cho lượt khám BHYT");
						}
					}
				}else{
					var vaokham = '<?php if($_GET["oper"]=='edit') echo $tam[0]['ThoiGianVaoKham']->format('d/m/Y')?>';
					var dateParts3 = vaokham.split("/");
					var date_vaokham= new Date(dateParts3[2], (dateParts3[1] - 1), dateParts3[0]);
					if(date_den<date_vaokham || date_tu>date_vaokham){
						if(date_den<date_vaokham){
							tooltip_message("Thẻ hết hạn sử dụng");
						}
						if(date_tu>date_vaokham){
							tooltip_message("Thẻ chưa đến hạn sử dụng");
						}
					}else{
						if(window.id_ttluotkham>0){
							if(window.LoaiDoiTuongKham=='BHYT'){
								window.id_bhyt=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
								window.id_bhyt_new=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
								$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe="+window.id_bhyt+"&ac=bhyt").done(function(data) {
									data=$.parseJSON(data);
									if(data.IsLock==1){
										alert(data.Notes);
									}else{
										if(data.Error!=1){
											tooltip_message("Áp thẻ thành công");
											var ids = $('#dm_bhyt').jqGrid('getDataIDs');
											for(var i=0;i<=ids.length-1;i++){
												if(ids[i]==window.id_bhyt){
													$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'red'});
												}else if(jQuery.inArray(ids[i], window.ID_ThePhu_Ar) !== -1){

												}else{
													$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'black'});
												}
											}
											$('#chon_bhyt').button('disable');
										}else{
											tooltip_message("Áp thẻ thất bại");
										}
									}
								});
							}else if($("#doituong").val()=='Bảo hiểm y tế'){
								window.id_bhyt=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
								window.id_bhyt_new=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
								$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe="+window.id_bhyt+"&ac=bhyt").done(function(data) {
									data=$.parseJSON(data);
									if(data.IsLock==1){
										alert(data.Notes);
									}else{
										if(data.Error!=1){
											tooltip_message("Áp thẻ thành công");
											var ids = $('#dm_bhyt').jqGrid('getDataIDs');
											for(var i=0;i<=ids.length-1;i++){
												if(ids[i]==window.id_bhyt){
													$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'red'});
												}else if(jQuery.inArray(ids[i], window.ID_ThePhu_Ar) !== -1){

												}else{
													$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'black'});
												}
											}
											$('#chon_bhyt').button('disable');
										}else{
											tooltip_message("Áp thẻ thất bại");
										}
									}
								});
							}else{
								tooltip_message("Chỉ được áp thẻ cho lượt khám BHYT");
							}
						}
					}
				}
				var rowData = $("#dm_bhyt").getRowData($('#dm_bhyt').jqGrid('getGridParam', 'selrow'));
				if(rowData['Ma_KCB_BanDau']!=window.makcbbandau){
					if($('#trangthai_hidden').val()!=4 && $('#trangthai_hidden').val()!=2){
						setval_new('#trangthai',3);
					}
				}else{
					if($('#trangthai_hidden').val()!=4){
						setval_new('#trangthai',1);
					}
				}
			})
		}
	});
window.ID_ThePhu_Ar=[];
//hủy chọn thẻ2
$("#huychonthe2").hide();
$("#huychonthe2").click(function(){
	if($('#dm_bhyt').jqGrid('getGridParam', 'selrow')==window.id_bhyt){
		alert("Thẻ này là thẻ chính!");
	}else{
		if(oper=='add'){
			var removeItem = $('#dm_bhyt').jqGrid('getGridParam', 'selrow');
			window.ID_ThePhu_Ar = jQuery.grep(window.ID_ThePhu_Ar, function(value) {
			  return value != removeItem;
			});
			console.log(window.ID_ThePhu_Ar);
			$("#dm_bhyt").jqGrid('setRowData',removeItem,false, {  color:'black'});
		}else{
			if(window.id_ttluotkham>0){
				if(window.LoaiDoiTuongKham=='BHYT'){
					var removeItem = $('#dm_bhyt').jqGrid('getGridParam', 'selrow');
					window.ID_ThePhu_Ar = jQuery.grep(window.ID_ThePhu_Ar, function(value) {
					  return value != removeItem;
					});
					$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe_phu="+removeItem+"&ac=bhyt_huychon_thephu").done(function(data) {
						data=$.parseJSON(data);
							if(data.Error!=1){
								tooltip_message("Hủy áp thẻ thành công");
								$('#chonthe_bhthe2').button('disable');
								$("#dm_bhyt").jqGrid('setGridParam',{async:true,datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php 
								if($_GET["oper"]=='add'){     
									echo $_GET["id_benhnhan"];
								}else{
									echo $tam[0]['ID_BenhNhan'];
								}?>'}).trigger('reloadGrid'); 
							}else{
								tooltip_message("Hủy áp thẻ thất bại");
							}
					});
				}else if($("#doituong").val()=='Bảo hiểm y tế'){
					var removeItem = $('#dm_bhyt').jqGrid('getGridParam', 'selrow');
					window.ID_ThePhu_Ar = jQuery.grep(window.ID_ThePhu_Ar, function(value) {
					  return value != removeItem;
					});
					console.log(window.ID_ThePhu_Ar);
					$("#dm_bhyt").jqGrid('setRowData',removeItem,false, {  color:'black'});
				}
			}
		}
	}
});
//chọn thẻ 2
$('#chonthe_bhthe2').click(function(){
	if($('#dm_bhyt').jqGrid('getGridParam', 'selrow')==window.id_bhyt){
		alert("Thẻ này đã được chọn làm thẻ chính!");
	}else{
		//start
		$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_date').done(function(output){
			var dateParts = output.split("/");
			var date = new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
			var hsd_den= $('#dm_bhyt').jqGrid('getCell', $('#dm_bhyt').jqGrid('getGridParam', 'selrow'), 'HanSD_DenNgay');
			var hsd_tu = $('#dm_bhyt').jqGrid('getCell', $('#dm_bhyt').jqGrid('getGridParam', 'selrow'), 'HanSD_TuNgay');
			var dateParts1 = hsd_den.split("/");
			var dateParts2 = hsd_tu.split("/");
			var date_den = new Date('20'+''+dateParts1[2], (dateParts1[1] - 1), dateParts1[0]);
			var date_tu = new Date('20'+''+dateParts2[2], (dateParts2[1] - 1), dateParts2[0]);

			if(oper=='add'){
				if(date_den<date || date_tu>date){
					if(date_den<date){
						tooltip_message("Thẻ hết hạn sử dụng");
					}
					if(date_tu>date){
						tooltip_message("Thẻ chưa đến hạn sử dụng");
					}
				}else{
					if($("#doituong").val()=='Bảo hiểm y tế'){
						window.ID_BHYT_ThePhu=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
						
						window.ID_ThePhu_Ar.push(window.ID_BHYT_ThePhu);
						console.log(window.ID_ThePhu_Ar);
						
						var ids = $('#dm_bhyt').jqGrid('getDataIDs');
						$("#dm_bhyt").jqGrid('setRowData',window.ID_BHYT_ThePhu,false, {  color:'green'});
						$('#chonthe_bhthe2').button('disable');
					}else{
						tooltip_message("Chỉ được áp thẻ cho lượt khám BHYT");
					}
				}
			}else{
				var vaokham = '<?php if($_GET["oper"]=='edit') echo $tam[0]['ThoiGianVaoKham']->format('d/m/Y')?>';
				var dateParts3 = vaokham.split("/");
				var date_vaokham= new Date(dateParts3[2], (dateParts3[1] - 1), dateParts3[0]);
				if(date_den<date_vaokham || date_tu>date_vaokham){
					if(date_den<date_vaokham){
						tooltip_message("Thẻ hết hạn sử dụng");
					}
					if(date_tu>date_vaokham){
						tooltip_message("Thẻ chưa đến hạn sử dụng");
					}
				}else{
					if(window.id_ttluotkham>0){
						if(window.LoaiDoiTuongKham=='BHYT'){
							window.ID_BHYT_ThePhu=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
							$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe_phu="+window.ID_BHYT_ThePhu+"&ac=bhyt_thephu").done(function(data) {
								data=$.parseJSON(data);
								if(data.IsLock==1){
									alert(data.Notes);
								}else{  
									if(data.Error!=1){
										tooltip_message("Áp thẻ thành công");
										$('#chonthe_bhthe2').button('disable');
										$("#dm_bhyt").jqGrid('setGridParam',{async:true, datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php 
										if($_GET["oper"]=='add'){     
											echo $_GET["id_benhnhan"];
										}else{
											echo $tam[0]['ID_BenhNhan'];
										}?>'}).trigger('reloadGrid'); 
									}else{
										tooltip_message("Áp thẻ thất bại");
									}
								}
							});
						}else if($("#doituong").val()=='Bảo hiểm y tế'){

								window.ID_BHYT_ThePhu=$('#dm_bhyt').jqGrid('getGridParam', 'selrow');
								window.ID_ThePhu_Ar.push(window.ID_BHYT_ThePhu);
								console.log(window.ID_ThePhu_Ar);
								$("#dm_bhyt").jqGrid('setRowData',window.ID_BHYT_ThePhu,false, {  color:'green'});
								$('#chonthe_bhthe2').button('disable');
						}else{
							tooltip_message("Chỉ được áp thẻ cho lượt khám BHYT");
						}
					}
				}
			}
			var rowData = $("#dm_bhyt").getRowData($('#dm_bhyt').jqGrid('getGridParam', 'selrow'));
			if(rowData['Ma_KCB_BanDau']!=window.makcbbandau){
				if($('#trangthai_hidden').val()!=4 && $('#trangthai_hidden').val()!=2){
					setval_new('#trangthai',3);
				}
			}else{
				if($('#trangthai_hidden').val()!=4){
					setval_new('#trangthai',1);
				}
			}
		})
		//end
	}
});





$('#mabh2').keyup(function(e){
	if($('#mabh2').val().length==1){
		var madoituong = $('#mabh1').val()+''+$('#mabh2').val();    
		ids =  $('#doituongbhyt_grid').jqGrid('getDataIDs');
		window.flag=0
		for (var i=0;i<ids.length;i++){       
			if(madoituong.toUpperCase()==$('#doituongbhyt_grid').jqGrid('getCell', ids[i], 'ma_dt')){
				$('#doituongbhyt').val($('#doituongbhyt_grid').jqGrid('getCell', ids[i], 'ma_dt'));
				$('#doituongbhyt1').val($('#doituongbhyt_grid').jqGrid('getCell', ids[i], 'ten_dt'));
				flag=1;
				break;
			}
		}
		if(flag==0){
			tooltip_message("Thẻ bảo hiểm không hợp lệ");

		}else{
			$('#mabh3').focus().select();
		}  
	}
})

$('#mabaohiem').keyup(function(e){
	if (jwerty.is('enter',e)||jwerty.is('tab',e)){
		if($('#mabaohiem').val().length<15){
			tooltip_message("Thẻ bảo hiểm không hợp lệ");
		}else{
			var madoituong = $('#mabaohiem').val().substring(0, 3)   
			ids =  $('#doituongbhyt_grid').jqGrid('getDataIDs');
			flag=0
			for (var i=0;i<ids.length;i++){        
				if(madoituong.toUpperCase()==$('#doituongbhyt_grid').jqGrid('getCell', ids[i], 'ma_dt')){
					$('#doituongbhyt').val($('#doituongbhyt_grid').jqGrid('getCell', ids[i], 'ma_dt'));
					$('#doituongbhyt1').val($('#doituongbhyt_grid').jqGrid('getCell', ids[i], 'ten_dt'));
					flag=1;
					break;
				}
			}
			if(flag==0){
				tooltip_message("Thẻ bảo hiểm không hợp lệ");
			}else{
				$('#mabh3').focus();
			}     
		}
	}
})


$('#mabh6').keyup(function(e){
	if (jwerty.is('enter',e)||jwerty.is('tab',e)){
		$('#noidkbd').focus()
	}
})
$('#doituongbhyt').keyup(function(e){
	if (jwerty.is('enter',e)||jwerty.is('tab',e)){
		$('#noidkbd').focus()
	}
})
$('#noidkbd').keyup(function(e){
	if (jwerty.is('enter',e)||jwerty.is('tab',e)){
		$('#diachibh').focus()
	}
})
$('#diachibh').keyup(function(e){
	if (jwerty.is('enter',e)||jwerty.is('tab',e)){
		$('#hsdtu').focus()
	}
})
$('#hsdtu').keyup(function(e){
	if (jwerty.is('enter',e)||jwerty.is('tab',e)){
		$('#hsdden').focus()
	}
})
$('#hsdden').keydown(function(e){
	if (jwerty.is('enter',e)||jwerty.is('tab',e)){
		$('#save_bhyt').focus()
	}
})
$('#ngaycap').keydown(function(e){
	if (jwerty.is('enter',e)||jwerty.is('tab',e)){
		$('#save_bhyt').focus()
	}
})

$('#save_bhyt').click(function(e){
	hsdtu=$('#hsdtu').val();
	hsdden=$('#hsdden').val();
	noidkbd=$('#noidkbd').val();
	diachibh=$('#diachibh').val();
	if(hsdtu==hsdden || noidkbd=='' || diachibh==''){
		if(hsdtu==hsdden){
			tooltip_message("Hạn sử dụng không hợp lệ");  
		}else if(noidkbd==''){
			tooltip_message("Nơi ĐK KCB ban đầu không hợp lệ");
		}else if(diachibh==''){
			tooltip_message("Địa chỉ không hợp lệ");
		}
	}else{
		var mabh=$("#mabh1").val().toUpperCase()+''+$("#mabh2").val()+''+$("#mabh3").val()+''+$("#mabh4").val()+''+$("#mabh5").val()+''+$("#mabh6").val();
		window.databhyt = '{';
		window.databhyt+='"mabh":'+JSON.stringify(mabh);   
		window.databhyt+=',"noidkbd":'+JSON.stringify($('#noidkbd').val());
		window.databhyt+=',"diachibh":'+JSON.stringify($('#diachibh').val().toUpperCase())+'';
		window.databhyt+=',"hsdtu":'+JSON.stringify($('#hsdtu').val())+'';
		window.databhyt+=',"hsdden":'+JSON.stringify($('#hsdden').val())+'';
		window.databhyt+=',"id_nhanvien":'+JSON.stringify(<?=$_SESSION["user"]["id_user"]?>)+'';   
		window.databhyt+=',"idbh":'+JSON.stringify(window.id_bhyt)+'';
		window.databhyt+='}';      
		databhyt= jQuery.parseJSON(databhyt);
		$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bhyt&hienmaloi=2&id_benhnhan="+window.id_benhnhan+"&oper="+bhyt_ac,databhyt).done(function(data) {
			$("#dm_bhyt").jqGrid('setGridParam',{datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php 
			if($_GET["oper"]=='add'){     
				echo $_GET["id_benhnhan"];
			}else{
				echo $tam[0]['ID_BenhNhan'];
			}?>'}).trigger('reloadGrid');  
			tooltip_message("Đã lưu");
			$('#save_bhyt').button('disable');
			$('#new_bhyt').button('enable');
		});  
		
		//
	}
	});
	}

	function create_dm_bhyt(){  
		$('#dm_bhyt').jqGrid({
			url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php 
			if($_GET["oper"]=='add'){     
				echo $_GET["id_benhnhan"];
			}else{
				echo $tam[0]['ID_BenhNhan'];
			}?>',
			datatype: "json",
			colNames:['Số thẻ','Đối tượng', 'Địa chỉ', 'Mã KCB','Tên KCB ban đầu', 'HSD từ','HSD đến','NgayCap',''],
			colModel:[     
			{name:'SoThe',index:'SoThe',hidden :false,width:'15%'},
			{name:'doituong',index:'SoThe',hidden :true,width:'10%'},
			{name:'DiaChiTheBHYT',index:'DiaChiTheBHYT',hidden :false,width:'18%'},
			{name:'Ma_KCB_BanDau',index:'Ma_KCB_BanDau',hidden :false,width:'6%'},
			{name:'tenkcb',index:'Ma_KCB_BanDau',hidden :true,width:'20%'},
			{name:'HanSD_TuNgay',index:'HanSD_TuNgay',hidden :false,width:'8%'},
			{name:'HanSD_DenNgay',index:'HanSD_DenNgay',hidden :false,width:'8%'},
			{name:'NgayCap',index:'NgayCap',hidden :true},
			{name:'IsDungTuyen',index:'IsDungTuyen',hidden :true},

			],
			hidegrid: false,
			gridview: true,
			loadonce: false,
			scroll: false,    
			modal:true,   
			rowNum: 200000,
			rowList:[],      
			height:70,
			width: 450,
			viewrecords: true, 
			ignoreCase:true,
			shrinkToFit:true,
			cmTemplate: {sortable:false},
			sortorder: "desc",
			serializeRowData: function (postdata) {  
			},
			onSelectRow: function(id){ 
				var rowData = $('#dm_bhyt').getRowData(id);
				if(window._noper==1){
					$('#edit_bhyt').button('enable');
					if(window.id_bhyt_new==$('#dm_bhyt').jqGrid('getGridParam', 'selrow')){
						$('#chon_bhyt').button('disable');
						$('#chonthe_bpbhyt').button('disable');
						$('#chonthe_bhthe2').button('disable');
						$('#chonthe_bhthe2').button('disable');
					}else{
						if(jQuery.inArray($('#dm_bhyt').jqGrid('getGridParam', 'selrow'), window.ID_ThePhu_Ar) !== -1){
							$('#huychonthe2').button('enable');
							$("#chonthe_bhthe2").hide();
							$("#huychonthe2").show();
						}else{
							$('#chonthe_bhthe2').button('enable');
							$("#chonthe_bhthe2").show();
							$("#huychonthe2").hide();
						}
						$('#chon_bhyt').button('enable');
						$('#chonthe_bpbhyt').button('enable');
					}
					
				}
				
			},
			ondblClickRow: function (id, rowIndex, columnIndex) {

			},
			loadComplete: function(data) { 
				window.ID_ThePhu_Ar=[];
				if($('#doituong_hidden').val()=='BHYT'){ 
					$('#dm_bhyt').jqGrid('setRowData', window.id_bhyt_new, false, { color: 'red',border:'1px solid #BBBBBB' });
					
					if (window.id_ttluotkham>0) {
						$.ajax({
							type: 'POST',
							async : false,
							type:'text',
							url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_bhyt_thephu&id_luotkham='+window.id_ttluotkham,
							success: function(data, status, xhr) {
								var data=$.parseJSON(data);
								for (var i = 0 ; i < data.length; i++) {
									$('#dm_bhyt').jqGrid('setRowData', data[i]["ID_The"], false, { color: 'green',border:'1px solid #BBBBBB'});
									window.ID_ThePhu_Ar.push(data[i]["ID_The"]+'');
								}
							}
						});
					}
				}
				if(window.idbhyt!=0){
					setval_new('#doituong','BHYT');
					$("#dm_bhyt #"+window.idbhyt).click();
					$("#chon_bhyt").click();
					window.idbhyt=0;
				}
				if(window.barcode_bhyt==1){

					$("#dm_bhyt #"+window.output_bhyt).click();
					$("#chon_bhyt").click();
					window.barcode_bhyt=0;
				}
				console.log(window.ID_ThePhu_Ar);
			},    
		}); 

		$('#dm_bhyt').jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$('#dm_bhyt').jqGrid('bindKeys', {} );
	}  

	function them_bhcc(){
		$('#save_bhcc,#edit_bhcc,#chon_bhcc,#huychon_bhcc').button('disable'); 
		$('#new_bhcc').click(function(){   
			window.bhcc_ac='add';
			window.id_bhcc=0;   
			create_combobox_enable('#loaithe');
			$('#save_bhcc').button('enable');
			$('#new_bhcc,#edit_bhcc').button('disable');  
			$("#mabhcc,#diachibhcc,#bhcc_hsdtu,#bhcc_hsdden").prop('disabled', false);
			$('#container_bhcc1 input').val('');
			$("#dm_bhcc").jqGrid("resetSelection");
			$('#mabhcc').focus();
		})
		$('#edit_bhcc').click(function(){
			$('#edit_bhcc').button('disable');
			$('#save_bhcc,#new_bhcc').button('enable');
			var rowData = $('#dm_bhcc').getRowData($('#dm_bhcc').jqGrid('getGridParam', 'selrow') );
			create_combobox_enable('#loaithe');
			$("#mabhcc,#diachibhcc,#bhcc_hsdtu,#bhcc_hsdden").prop('disabled', false);
			$('#diachibhcc').val(rowData['DiaChiTheBHCC']);
			$('#bhcc_hsdtu').val(rowData['HanSD_TuNgay']);
			$('#bhcc_hsdden').val(rowData['HanSD_DenNgay']);
			$('#mabhcc').val(rowData['SoThe']);
			setval_new('#loaithe',rowData['ID_LoaiTheBHCC']); 
			window.bhcc_ac='edit';
			window.id_bhcc=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
			$('#mabhcc').focus().select();
		})
		$('#chon_bhcc').click(function(){  
			if(oper=='add'){
				window.id_bhcc=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
				window.id_bhcc_tam=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
				window.id_bhcc_new=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
				var ids = $('#dm_bhcc').jqGrid('getDataIDs');
				for(var i=0;i<=ids.length-1;i++){     
					if(ids[i]==window.id_bhcc_new){
						$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'red'});
					}else{
						$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'black'});  
					}
				}
				$('#chon_bhcc').button('disable');
			}else{
				if(window.id_ttluotkham>0){
					window.id_bhcc=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
					window.id_bhcc_tam=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
					window.id_bhcc_new=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
					$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe="+window.id_bhcc+"&ac=bhcc").done(function(data) {
						data=$.parseJSON(data);
						if(data.IsLock==1){
							alert(data.Notes);
						}else{
							if(data.Error!=1){
								tooltip_message("Áp thẻ thành công");
								var ids = $('#dm_bhcc').jqGrid('getDataIDs');
								for(var i=0;i<=ids.length-1;i++){
									if(ids[i]==window.id_bhcc_new){
										$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'red'});
									}else{
										$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'black'});
									}
								}
								$('#chon_bhcc').button('disable');
								$.get( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_get_nguoiapthebhcc&hienmaloi=a&id_luotkham="+window.id_ttluotkham, function( data ) {
									$( "#bhcc_nguoiap" ).val( data );
								});
							}else{
								tooltip_message("Áp thẻ thất bại");
							}
						}
					});
				}
			}
		})
		$('#huychon_bhcc').click(function(){
			if(oper=='add'){
				var ids = $('#dm_bhcc').jqGrid('getDataIDs');
				for(var i=0;i<=ids.length-1;i++){
					$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'black'});
				}
				window.id_bhcc=0;
				window.id_bhcc_tam=0;
				window.id_bhcc_new=0;
				$('#huychon_bhcc').button('disable');
			}else{
				if(window.id_ttluotkham>0){
					window.id_bhcc=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
					$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_huyapthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&ac=bhcc").done(function(data){
						data=$.parseJSON(data);
						if(data.IsLock==1){
							alert(data.Notes);
						}else{
							if(data.Error!=1){
								tooltip_message("Hủy áp thẻ thành công"); 
								var ids = $('#dm_bhcc').jqGrid('getDataIDs');
								for(var i=0;i<=ids.length-1;i++){
									$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'black'}); 
								}
								$('#huychon_bhcc').button('disable');
								window.id_bhcc=0;
								window.id_bhcc_tam=0;
								window.id_bhcc_new=0;
								$.get( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_get_nguoiapthebhcc&hienmaloi=a&id_luotkham="+window.id_ttluotkham, function( data ) {
									$( "#bhcc_nguoiap" ).val( data );
								});
							}else{
								tooltip_message("Hủy áp thẻ thất bại"); 
							}
						}

					});
				}
			}
		});
		$('#mabhcc').keyup(function(e){
			if (jwerty.is('enter',e)||jwerty.is('tab',e)){
				$('#loaithe').focus();
			}
		})

		$('#loaithe').keyup(function(e){
			if (jwerty.is('enter',e)||jwerty.is('tab',e)){
				$('#diachibhcc').focus()
			}
		})
		$('#diachibhcc').keyup(function(e){
			if (jwerty.is('enter',e)||jwerty.is('tab',e)){
				$('#bhcc_hsdtu').focus()
			}
		})
		$('#bhcc_hsdtu').keyup(function(e){
			if (jwerty.is('enter',e)||jwerty.is('tab',e)){
				$('#bhcc_hsdden').focus()
			}
		})
		$('#bhcc_hsdden').keyup(function(e){
			if (jwerty.is('enter',e)||jwerty.is('tab',e)){
				$('#save_bhcc').focus()
			}
		})
		$('#save_bhcc').click(function(e){
			$('#save_bhcc').button('disable');
			window.databhcc = '{';
			window.databhcc+='"mabh":'+JSON.stringify($('#mabhcc').val());
			window.databhcc+=',"diachi":'+JSON.stringify($('#diachibhcc').val());
			window.databhcc+=',"loaithe":'+JSON.stringify($('#loaithe_hidden').val())+'';
			window.databhcc+=',"hsdtu":'+JSON.stringify($('#bhcc_hsdtu').val())+'';
			window.databhcc+=',"hsdden":'+JSON.stringify($('#bhcc_hsdden').val())+'';
			window.databhcc+=',"idbh":'+JSON.stringify(window.id_bhcc)+'';
			window.databhcc+='}';
			databhcc= jQuery.parseJSON(databhcc);
			$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bhcc&hienmaloi=2&id_benhnhan="+window.id_benhnhan+"&oper="+bhcc_ac,databhcc).done(function(data) {
				$("#dm_bhcc").jqGrid('setGridParam',{datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhcc&id_benhnhan=<?php 
					if($_GET["oper"]=='add'){
						echo $_GET["id_benhnhan"];
					}else{
						echo $tam[0]['ID_BenhNhan'];
					}?>'}).trigger('reloadGrid');    
				});
			});
		}
		function create_dm_bhcc(){
			$('#dm_bhcc').jqGrid({
				url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhcc&id_benhnhan=<?php
				if($_GET["oper"]=='add'){
					echo $_GET["id_benhnhan"];
				}else{
					echo $tam[0]['ID_BenhNhan'];
				}?>',
				datatype: "json",
				colNames:['Số thẻ','Địa chỉ', '', 'Loại thẻ', 'HSD từ','HSD đến','NgayCap'],
				colModel:[
				{name:'SoThe',index:'SoThe',search:true,hidden :false,width:'15%'},
				{name:'DiaChiTheBHCC',index:'DiaChiTheBHYTCC',search:true,hidden :false,width:'18%'},
				{name:'ID_LoaiTheBHCC',index:'ID_LoaiTheBHCC',hidden :true,width:'18%'},
				{name:'TenLoaiThe',index:'TenLoaiThe',search:true,hidden :false,width:'18%'},
				{name:'HanSD_TuNgay',index:'HanSD_TuNgay',search:true,hidden :false,width:'8%'},
				{name:'HanSD_DenNgay',index:'HanSD_DenNgay',search:true,hidden :false,width:'8%'},
				{name:'NgayCap',index:'NgayCap',hidden :true},
				],
				hidegrid: false,
				gridview: true,
				loadonce: true,
				scroll: false,
				modal:true,
				rowNum: 200000,
				rowList:[],
				height:70,
				width: 490,
				viewrecords: true,
				ignoreCase:true,
				shrinkToFit:true,
				cmTemplate: {sortable:false},
				sortorder: "desc",
				serializeRowData: function (postdata) {
				},
				onSelectRow: function(id){
					var rowData = $('#dm_bhcc').getRowData(id);
					if(window.id_bhcc_tam>0){
						if(window._noper==1){
							$('#edit_bhcc').button('enable');
							if(window.id_bhcc==$('#dm_bhcc').jqGrid('getGridParam', 'selrow')){
								$('#huychon_bhcc').button('enable');
								$('#chon_bhcc').button('disable');
							}else{
								$('#huychon_bhcc').button('disable');
								$('#chon_bhcc').button('enable');
							}
						}
					}else{
						if(window._noper==1){
							$('#edit_bhcc').button('enable');        
							window.id_bhcc=window.id_bhcc_tam;
							if(window.id_bhcc_tam==$('#dm_bhcc').jqGrid('getGridParam', 'selrow')){
								$('#huychon_bhcc').button('enable');
								$('#chon_bhcc').button('disable');
							}else{
								$('#huychon_bhcc').button('disable');
								$('#chon_bhcc').button('enable');
							}
						}
					}
				},
				ondblClickRow: function (id, rowIndex, columnIndex) {
				},
				loadComplete: function(data) {
					if(window.id_bhcc_tam>0){
						$('#dm_bhcc').jqGrid('setRowData', id_bhcc, false, { color: 'red',border:'1px solid #BBBBBB' });
					}
				},
			});
			$('#dm_bhcc').jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
			$('#dm_bhcc').jqGrid('bindKeys', {} );
		}




		function restrictCharacters(myfield, e, restrictionType) {
			if (!e) var e = window.event
				if (e.keyCode) code = e.keyCode;
			else if (e.which) code = e.which;
			var character = String.fromCharCode(code);
			if (code==27) { this.blur(); return false; }
			if (!e.ctrlKey && code!=9 && code!=8 && code!=36 && code!=37 && code!=38 && code!=46 && (code!=39 || (code==39 && character=="'")) && code!=40) {
				if (character.match(restrictionType)) {
					return true;
				} else {
					return false;
				}

			}
		}
		function input_change(input,input_next,input_pre){
			$(input).focus(function() {
				$(input).data('lenght', 0);
			})
			$(input).keyup(function(e){
				if(e.keyCode==8){
				}else{   
					if($(input).val().length==$(input).attr( "maxlength" )){
						if(input=='#mabh2'){

						}else{
							$(input_next).focus().select();
						}
					}
				}
			})
			$(input).keydown(function(e){
				if(e.keyCode==8){
					if($(input).val().length>0){

					}else{
						$(input_pre).selectRange($(input_pre).val().length);
						e.preventDefault();
						return false;
					}
				}else{

				}
			})
		}
		$.fn.selectRange = function(start, end) {
			if(!end) end = start; 
			return this.each(function() {
				if (this.setSelectionRange) {
					this.focus();
					this.setSelectionRange(start, end);
				} else if (this.createTextRange) {
					var range = this.createTextRange();
					range.collapse(true);
					range.moveEnd('character', end);
					range.moveStart('character', start);
					range.select();
				}
			});
		};

		function set_trangthai(){
			if($('#phanloai_hidden').val()==24){
				setval_new('#trangthai',4); 
			}else{
				var rowData = $("#dm_bhyt").getRowData(id_bhyt);
				if(rowData['IsDungTuyen']!=1){
					if($('#trangthai_hidden').val()!=4 && $('#trangthai_hidden').val()!=2){
						setval_new('#trangthai',3); 
					}
				}else{
					if($('#trangthai_hidden').val()!=4){
						setval_new('#trangthai',1);
					}
				}
			}
		}

		function barcode_callback(barcode){
			$("#chinhsua").click();
			barcode=$.trim(barcode);
			res=barcode.split('|');
			//console.log($.trim(res[5].replace("-", "").split(' ').join('')));
			//console.log(convertHexToString(res[4]));
			if($.trim($('#panel_tenbn').html().toLowerCase())!=$.trim(convertHexToString(res[1]).toLowerCase())){
				tooltip_message("Tên bệnh nhân không trùng với thẻ BHYT");
				return false;
			}
			// if($.trim($('#panel_tenbn').html().toLowerCase())!=$.trim(convertHexToString(res[1]).toLowerCase())){
			// 	tooltip_message("Tên bệnh nhân không trùng với thẻ BHYT");
			// 	return false;
			// }

			$.ajax({
		  		type: 'POST',
		  		async : false,
		  		url: 'http://egw.baohiemxahoi.gov.vn/api/token/take',
		  		data:{'username': '48195_BV','password':'fd16b54a98681877301e32b0efeb87ae'},
	       		crossDomain:true,
		  		success: function(data, status, xhr) {
			        	$.ajax({
				  		type: 'POST',
				  		async : true,
				  		url: 'http://egw.baohiemxahoi.gov.vn/api/egw/KQNhanLichSuKCB595?token='+data.APIKey.access_token+'&id_token='+data.APIKey.id_token+'&username=48195_BV&password=fd16b54a98681877301e32b0efeb87ae',
				  		data:{  'maThe': res[0],
								'hoTen': $.trim(convertHexToString(res[1])),
								'ngaySinh': res[2],
								'gioiTinh': res[3],
								'maCSKCB': $.trim(res[5].replace("-", "").split(' ').join('')),				
										
							},
			       		crossDomain:true,
				  		success: function(data, status, xhr) {

				  		txt='';
				  		myObj=data.dsLichSuKCB;
				  		txt += "<table border='1'>"
				  		if (myObj != null){
					  		for (var i=0;i<myObj.length;i++) {
					  				txt += "<tr>"
						        for (x in myObj[i]) {
						            txt += "<td>" + myObj[i][x] + "</td>";
						        }
						        txt += "</tr>"
						    }
					        txt += "</table>"  	
					        console.log(txt);
					        $("#txtdsLichSuKCB").html(txt)
					        $("#dsLichSuKCB").dialog("option", "position", {
        my: 'left top',
        at: 'top',
        of: $('.n-bhcc') // this refers to the cliked element
   }).dialog('open');
				        }

				  			//$.parseJSON(data);
				  			tam ={  "000":"Thông tin thẻ chính xác",
									"001":"Thẻ do BHXH Bộ Quốc Phòng quản lý, đề nghị kiểm tra thẻ và thông tin giấy tờ tùy thân",
									"002":"Thẻ do BHXH Bộ Công An quản lý, đề nghị kiểm tra thẻ và thông tin giấy tờ tùy thân",
									"010":"Thẻ hết giá trị sử dụng",
									"051":"Mã thẻ không đúng",
									"052":"Mã tỉnh cấp thẻ(kí tự thứ 4, 5 của mã thẻ) không đúng",
									"053":"Mã quyền lợi thẻ(kí tự thứ 3 của mã thẻ) không đúng",
									"050":"Khong thay thong tin the bhyt",
									"060":"Thẻ sai họ tên",
									"061":"Thẻ sai họ tên(đúng kí tự đầu)",
									"070":"Thẻ sai ngày sinh",
									"080":"Thẻ sai giới tính",
									"090":"Thẻ sai nơi đăng ký KCB ban đầu",
									"100":"Lỗi khi lấy dữ liệu sổ thẻ",
									"101":"Lỗi server",
									"110":"Thẻ đã thu hồi",
									"120":"Thẻ đã báo giảm",
									"121":"Thẻ đã báo giảm. Giảm chuyển ngoại tỉnh",
									"122":"Thẻ đã báo giảm. Giảm chuyển nội tỉnh",
									"123":"Thẻ đã báo giảm. Thu hồi do tăng lại cùng đơn vị",
									"124":"Thẻ đã báo giảm. Ngừng tham gia",
									"130":"Trẻ em không xuất trình thẻ"
								}			
				  			hsd_den=data.gtTheDen;
				  			diachibh=data.diaChi;
				  			if(data.maKetQua!="000"){
				  				alert(tam[data.maKetQua]);
				  				return false;
				  			}
				  			//if('<?=$_SESSION["user"]["id_user"]?>'=='178'){
				  			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_date').done(function(output){
								var dateParts = output.split("/");
								var date = new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);								
								var hsd_den= data.gtTheDen;
								var hsd_tu = res[6];				
								var dateParts1 = hsd_den.split("/");
								var dateParts2 = hsd_tu.split("/");				
								var date_tu = new Date(dateParts2[2], (dateParts2[1] - 1), dateParts2[0]);
								window.databhyt = '{';
								window.databhyt+='"mabh":'+JSON.stringify(res[0]);
								window.databhyt+=',"noidkbd":'+JSON.stringify(res[5]);
								window.databhyt+=',"diachibh":'+JSON.stringify($.trim(diachibh));
								window.databhyt+=',"hsdtu":'+JSON.stringify(res[6].split('/').reverse().join('/'));
								window.databhyt+=',"hsdden":'+JSON.stringify(hsd_den.split('/').reverse().join('/'));
								window.databhyt+=',"idbenhnhan":'+JSON.stringify(window.id_benhnhan);
								window.databhyt+='}';
								databhyt= jQuery.parseJSON(databhyt);
								$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bhyt_barcode&hienmaloi=1',databhyt).done(function(data){
									data=$.parseJSON(data);
									if(data.IsLock==1){
										alert(data.Notes);
									}else{
										if(data.Error!=1){
											if (window.addthephu==0) {
												setval_new('#doituong','BHYT');
												window.output_bhyt=data.IDReturn;
												window.barcode_bhyt=1;
												$("#dm_bhyt").jqGrid('setGridParam',{datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php
													if($_GET["oper"]=='add'){
														echo $_GET["id_benhnhan"];
													}else{
														echo $tam[0]['ID_BenhNhan'];
													}?>'}).trigger('reloadGrid');
											}else{
												console.log('Add thẻ phụ');
											}
											window.addthephu=1;
											// setval_new('#doituong','BHYT');
											// window.output_bhyt=data.IDReturn;
											// window.barcode_bhyt=1;
											// $("#dm_bhyt").jqGrid('setGridParam',{datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php
											// 	if($_GET["oper"]=='add'){
											// 		echo $_GET["id_benhnhan"];
											// 	}else{
											// 		echo $tam[0]['ID_BenhNhan'];
											// 	}?>'}).trigger('reloadGrid');
											}else{
												tooltip_message("Đã lưu");
											}
										}
									})
								})
								//return false;
				  		}
				  	});
		  		}	  	
	  		});

        	$.ajax({
	  		type: 'POST',
	  		async : false,
	  		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_bhytmathe',
	  		data: {             
                MaThe :res[0],
				HoTen: $.trim(convertHexToString(res[1])),
				NgaySinh   : res[2],
            },         
	  		success: function(data, status, xhr) {
	  			$('#main_top2').html(($.parseJSON(data)).message);		        
	  		}	  	
  			});
   

	};

function create_ID_TrieuChung(elem,datalocal){
						datalocal=jQuery.parseJSON(datalocal);
						$(elem).jqGrid({
							datastr:datalocal,
							datatype: "jsonstring" ,
							colNames:['Tên triệu chứng'],
							colModel:[
							{name:'TenTrieuChung',index:'TenTrieuChung',hidden :false},
							],
							hidegrid: false,
							gridview: true,
							loadonce: true,
							scroll: false,
							modal:true,
							rowNum: 200000,
							rowList:[],	
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
								if($(elem).data('clicked')){	
									window.isclickID_TrieuChung=1;
									create_combobox_new('#chuyenkhoa',create_grid_chuyenkhoa,'bw','','data_chuyenkhoa&id_trieuchung='+id,ID_ChuyenKhoa);
									if(id==0){									
										$("#GhiChuTrieuChung").prop("disabled",false);									
										$('#GhiChuTrieuChung').attr("kiemtra","trong");
									}else{
										$("#GhiChuTrieuChung").prop("disabled",true);
										$('#GhiChuTrieuChung').removeAttr("kiemtra");
										$("#GhiChuTrieuChung").val("");	
									}
								}

							},
							ondblClickRow: function (id, rowIndex, columnIndex) {
							},
							loadComplete: function(data) {
							},
						});
						$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
						$(elem).jqGrid('bindKeys', {} );
}


// Chuyên khoa
function create_grid_chuyenkhoa(elem,datalocal){  
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,  
		colNames:['Tên chuyên khoa','CoLaySinhHieu',''],
		colModel:[      
		{name:'tenchuyenkhoa',index:'tenchuyenkhoa',hidden :false},	
		{name:'CoLaySinhHieu',index:'CoLaySinhHieu',hidden :true},
		{name:'ID_ChuyenKhoa_Online',index:'ID_ChuyenKhoa_Online',hidden :true},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		sortname: 'tenchuyenkhoa',
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
			if($(elem).data('clicked')){
			var idcur_ck = $(elem).jqGrid('getGridParam', 'selrow')
			var columnNames_ck = $(elem).jqGrid('getGridParam','colModel');
			colaydhst = $(elem).jqGrid('getCell', idcur_ck, columnNames_ck[1].name);
			ID_ChuyenKhoa_Online=$(elem).jqGrid('getCell', idcur_ck, columnNames_ck[2].name);
			if(colaydhst==0){
				$('#dhsinhton').prop('checked', false);
			}else{
				$('#dhsinhton').prop('checked', true);
			}
			if(window.plk_dauhieusinhton==0){
				$('#dhsinhton').prop('checked', false);
			}
			create_combobox_new('#bsyeucau',create_bs,'bw','','data_BacSiChuyenKhoa&ID_ChuyenKhoa='+ID_ChuyenKhoa_Online,BSYeuCau);	
			//$('#bsyeucau_hidden').val('');
			//$('#bsyeucau').val('');		
		}

		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

		},
		loadComplete: function(data) {  
			//if($(this).data('clicked')){
			if(window.loadChuyenKhoa>0){
				if(window.isclickID_TrieuChung==1){
					window.isclickID_TrieuChung=0;
					if($(elem).getGridParam("reccount")==1){
						var ids = $(elem).getDataIDs();			
						$('#chuyenkhoa_hidden').val(ids[0]);
						$('#chuyenkhoa').val($(elem).jqGrid('getCell', ids[0], 'tenchuyenkhoa'));
						create_combobox_disable('#chuyenkhoa');	  	
						create_combobox_new('#bsyeucau',create_bs,'bw','','data_BacSiChuyenKhoa&ID_ChuyenKhoa='+$(elem).jqGrid('getCell', ids[0], 'ID_ChuyenKhoa_Online'),BSYeuCau);	
						//$('#bsyeucau_hidden').val('');
						//$('#bsyeucau').val('');		

						var columnNames_ck = $(elem).jqGrid('getGridParam','colModel');
						colaydhst = $(elem).jqGrid('getCell', ids[0], columnNames_ck[1].name);
						if(colaydhst==0){
							$('#dhsinhton').prop('checked', false);
						}else{
							$('#dhsinhton').prop('checked', true);
						}
						if(window.plk_dauhieusinhton==0){
							$('#dhsinhton').prop('checked', false);
						}

					}else{
						create_combobox_enable('#chuyenkhoa');	  			
						$('#chuyenkhoa_hidden').val('');
						$('#chuyenkhoa').val('');
						$('#bsyeucau_hidden').val('');
						$('#bsyeucau').val('');	
					}	 
				} 			
			}
			window.loadChuyenKhoa=window.loadChuyenKhoa+1;
		//	}
		},    

	}); 

	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );

}


function create_bs(elem,datalocal){ 
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Nickname', 'Họ và tên','Tối Thiêu PK','Tối Đa PK','Tối Thiêu NT'
		,'Tối Đa NT','Dự Phòng Đặc Biệt',''],
		colModel:[      
		{name:'nickname',index:'nickname',hidden :false,width:'10%'},
		{name:'hovaten',index:'hovaten',hidden :false,width:'20%'},		
		{name:'TTPK',index:'TTPK',hidden :false,width:'10%'},
		{name:'TTNTC',index:'TTNTC',hidden :false,width:'10%'},
		{name:'TDPK',index:'TDPK',hidden :false,width:'10%'},
		{name:'TDNT',index:'TDNT',hidden :false,width:'10%'},
		{name:'DDDB',index:'DDDB',hidden :false,width:'10%'},
		
		{name:'comat',index:'comat',hidden :true,width:'20%'},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		sortname: 'ID_Thuoc',
		height:200,
		width: 700,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){  
			if($(elem).data('clicked')){
				create_combobox_new('#pbvatly',create_PhongBanVatLy,'bw','','data_pbvatly&ID_BacSi='+id,ID_PhongKhamVatLy);
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

		},
		loadComplete: function(data) {  			
			var ids = $(elem).getDataIDs();
			for(var i=0;i<ids.length;i++){   
				var rowData = $(elem).getRowData(ids[i]);       
				if(rowData['comat']==0){      
					$(elem +' #'+ids[i]).css("background", "#999");            
				}
			}
		},   
	}); 

	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );
}  


function create_PhongBanVatLy(elem,datalocal){ 
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Phòng', 'Tầng','Đơn Vị'],
		colModel:[      
		{name:'SoPhong',index:'SoPhong',hidden :false,width:'10%'},
		{name:'Tang',index:'Tang',hidden :false,width:'20%'},		
		{name:'TenNhom',index:'TenNhom',hidden :false,width:'10%'},		
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   
		sortname: 'ID_Thuoc',
		height:200,
		width: 400,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {   
		},
		onSelectRow: function(id){  			
			setval_new('#tang',$(elem).jqGrid('getCell', id, 'Tang'));
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

		},
		loadComplete: function(data) {  			
			
		},   
	}); 

	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );
}  


 function create_thongtinluotkham(){
   $("#thongtinluotkham").jqGrid({
    url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_luotkham&idbenhnhan='+window.id_benhnhan,
    datatype: "json",
    colNames:['<?php lang('tgiandenkham')?>', '<?php lang('tgianketthuc')?>','<?php lang('loaikham')?>', '<?php lang('bslamsang')?>','<?php lang('nggiohtrakqua')?>','<?php lang('datrakqua')?>','<?php lang('idluotkham')?>','<?php lang('thanhtoan')?>','ID_PhanLoaiKham'],
    colModel:[
    {name:'label',index:'label'},
    {name:'TenQuanHuyen',index:'TenQuanHuyen'},
    {name:'TenTinhThanhPho',index:'TenTinhThanhPho'},
    {name:'ngay',index:'ngay'},
    {name:'ten',index:'ten'},
    {name:'da',index:'da'},
    {name:'ID_LuotKham',index:'ID_LuotKham'},
    {name:'DaThanhToanBill',index:'DaThanhToanBill'},
     {name:'ID_PhanLoaiKham',index:'ID_PhanLoaiKham',hidden:true},
    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,
    modal:true,
    rowNum: 500,
    rowList:[],
    sortname: 'ID_Thuoc',
    height: 105,
    width: (($(window).width() / 100 * parseFloat(99)).toFixed(0)),
    viewrecords: true,
    ignoreCase:true,
    shrinkToFit:true,
    cmTemplate: {sortable:false},
    sortorder: "desc",
    caption:"<?php lang('lkganday')?>",
    serializeRowData: function (postdata) {
    },
    onSelectRow: function(id){
    },
    ondblClickRow: function (id, rowIndex, columnIndex) {
    },
   onRightClickRow: function(rowid, iRow, iCol, e) {   
   },
  loadComplete: function(data) {
  
 }
});

}


function convertHexToString_test(input) {    
	var hex = input.match(/[\s\S]{2}/g) || [];
	var output = '';	   
	for (var i = 0, j = hex.length; i < j; i++) {
		output += '%' + ('0' + hex[i]).slice(-2);
	}
	output = decodeURIComponent(output);
	return output;
} 

</script>