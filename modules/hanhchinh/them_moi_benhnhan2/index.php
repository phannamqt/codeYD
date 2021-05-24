<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style>
ul.menu li {
    display: block!important;
}
#menu { 
  width: 250px!important; 
  display:none; 
  position:absolute;     
  box-shadow:0px 0px 3px #333;
  z-index:100000;  
  background: #ffffff;
}
#luotkhamnoitrutontai{
	height:40px !important;
}
input[type="radio"]:focus {
  -webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 1px 1px #208AC8 !important;
}
#save_data:hover:enabled,#save_data:focus:enabled, #clear_all:hover:enabled, #clear_all:focus:enabled, #bndk:hover:enabled, #bndk:focus:enabled{
  background: url("js/grid/themes/south-street/images/ui-bg_highlight-soft_25_67b021_1x100.png") repeat-x scroll 50% 50% #67B021;
  border: 1px solid #327E04;
  color: #FFFFFF;
  font-weight: bold;
}
.ui-jqgrid-titlebar{
	padding-top: 0px!important;
	padding-bottom: 0px!important;
	border-bottom-width: 0px!important;
	margin-top: -6px!important;
}
#rowed3 .ui-corner-all,#rowed3  .ui-corner-top,#rowed3  .ui-corner-left,#rowed3  .ui-corner-tl {
  border-top-left-radius: 17px!important;
}
.ui-widget-overlay {
  opacity:0.01;
  filter: alpha(opacity=1);
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
  /*overlay trong suot*/
}
#holot,#tenbn,#sonha,#nlh{
  text-transform:capitalize
}


input:focus::-webkit-input-placeholder
{
  color: transparent;
}
.ui-icon.ui-icon-info
{
  background-image: url("js/grid/themes/le-frog/images/ui-icons_cd0a0a_256x240.png")!important;
}
#thongtinchinh{
	margin-top: 0px
}
input:focus::-moz-placeholder { color:transparent; }
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
input[type=radio]{
 border: 1px solid #327E04!important;
}
.custom-combobox-input {
  width:103px !important;

}
div.form_row input[type=text]{

	text-align:left;

}
#ui-id-2.ui-menu {
 width: 800px!important; display:none; position:absolute;
 box-shadow:0px 0px 3px #333;
}
#ui-id-3.ui-menu {
 width: 300px!important; display:none; position:absolute;
 box-shadow:0px 0px 3px #333;
}
#nghenghiep1{
 margin-left:5px;
 width: 163px !important;
}
#quoctich1{
	width: 113px !important;
}
.thongtinchinh{
 display:inline-block;
 margin-right:5px;
 margin-bottom:1px;
 vertical-align:top;
 margin-top:1px;
}
a.ui-button, a.fm-button {
  visibility: visible!important;
}

/*Doi mau chu*/
@-webkit-keyframes chunoi {
 0% { color: #F63430; }
 50% { color: #000;  }
 100% { color: #F63430;  }
}
@-moz-keyframes chunoi {
 0% { color: #F63430;  }
 50% { color: #000;  }
 100% { color: #F63430;  }
}
@-o-keyframes chunoi {
 0% { color: #F63430; }
 50% { color: #000; }
 100% { color: #F63430;  }
}
@keyframes chunoi { 
 0% { color: #F63430;  }
 50% { color: #000;  }
 100% { color: #F63430;  }
}

.maunoichu {
  -webkit-animation: chunoi 1000ms infinite;
  -moz-animation: chunoi 1000ms infinite; 
  -o-animation: chunoi 1000ms infinite; 
  animation: chunoi 1000ms infinite;
}
#prowed3_center,#prowed3_right{
	display:none;
}
</style>
<body>

<div id="thongtinthanhtoan" style="display:none;">
<label for="from_day" style="width:17px"> Từ</label>
<input type="text"  style="width:109px" name="from_day" id='from_day'>
<label for="to_day" style="width:23px"> Đến </label>
<input type="text"   style="width:109px" name="to_day" id='to_day'>
<button type="button" id="xem">Xem</button>
<div id="tabs">
<ul style="margin-left:5px;">
<li id="tabs1"><a href="#tabs-1" id="dsbill">Các bill đã lập</a></li>
<li  id="tabs2"><a href="#tabs-2" id="dsthongtin">Chi tiết công nợ bệnh nhân</a></li>              
</ul>
<div id="tabs-1">
<table id="table_dsbill" style="width:100%"></table>                   
</div>
<div id="tabs-2">
<table id="table_dsthongtin" style="width:100%"></table>                   
</div>
</div>
</div>











<div id="luotkhamnoitrutontai" style="display:none;">
Bệnh nhân đã có một lượt khám nội trú đang chờ,bạn không thể tạo lượt khám mới
</div>
<div id="luotkhamtontai" style="display:none">
Bệnh nhân đã có một lượt khám đang chờ,bạn không thể tạo lượt khám mới
</div>
<?php
if(isset($_GET['idbhyt'])){
  $idbhyt=$_GET['idbhyt'];
}else{
  $idbhyt=0;
}

if(isset($_GET['oper']) && $_GET['oper']=='edit'){

	$data= new SQLServer;
	$store_name="{call GD2_GetThongTinBenhNhan (?)}";
	$params = array(	$_GET["idbenhnhan"]		);
	$query=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($query);
	$thongtinbenhnhan= $excute->get_as_array();

	$store_name1="{call GD2_nocu_get (?)}";
	$params1 = array(	$_GET["idbenhnhan"]		);



	$query1=$data->query( $store_name1, $params1);//Goi store
	$excute= new SQLServerResult($query1);
	$nocu= $excute->get_as_array();


	//$ten =$tam[0]["HoLotBenhNhan"]." ".$tam[0]["TenBenhNhan"];
	$tam["idbenhnhan"]=$thongtinbenhnhan[0]["ID_BenhNhan"];
	$tam["MaBenhNhan"]=$thongtinbenhnhan[0]["MaBenhNhan"];
	$tam["NamSinh"]=$thongtinbenhnhan[0]["NamSinh"];
	$tam["SoThangTuoi"]=$thongtinbenhnhan[0]["SoThangTuoi"];
  if($thongtinbenhnhan[0]["NgayThangNamSinh"]!=""){
   $tam["NgayThangNamSinh"]=$thongtinbenhnhan[0]["NgayThangNamSinh"]->format('d-m-Y');
 }else{
  $tam["NgayThangNamSinh"]="";
};

$idhenkham=$_GET['idhenkham'];
$tam["DienThoai2"]=$thongtinbenhnhan[0]["DienThoai2"];
$tam["ID_CongTy"]=$thongtinbenhnhan[0]["ID_CongTy"];
$tam["ID_QuanHuyen"]=$thongtinbenhnhan[0]["ID_QuanHuyen"];
$tam["ID_QuocTich"]=$thongtinbenhnhan[0]["ID_QuocTich"];
$tam["ID_DanToc"]=$thongtinbenhnhan[0]["ID_DanToc"];
$tam["ID_NgheNghiep"]=$thongtinbenhnhan[0]["ID_NgheNghiep"];
$tam["TenNguoiLienHe"]=$thongtinbenhnhan[0]["TenNguoiLienHe"];
$tam["QuanHeVoiBN"]=$thongtinbenhnhan[0]["QuanHeVoiBN"];
$tam["DienThoaiNguoiLienHe"]=$thongtinbenhnhan[0]["DienThoaiNguoiLienHe"];
$tam["ID_XaPhuong"]=$thongtinbenhnhan[0]["ID_XaPhuong"];
$tam["QuanHeVoiBenhVien"]=$thongtinbenhnhan[0]["QuanHeVoiBenhVien"];
$tam["GioiTinh"]=$thongtinbenhnhan[0]["GioiTinh"];
$tam["HoLotBenhNhan"]= $thongtinbenhnhan[0]["HoLotBenhNhan"];
$tam["TenBenhNhan"]=$thongtinbenhnhan[0]["TenBenhNhan"];
$tam["ID_BenhNhan"]=$thongtinbenhnhan[0]["ID_BenhNhan"];
$tam["NamSinh"]=$thongtinbenhnhan[0]["NamSinh"];
$tam["diachi"]=$thongtinbenhnhan[0]["DiaChi_tam"];
$tam["dienthoai1"]=$thongtinbenhnhan[0]["DienThoai1"];
$tam["email"]=$thongtinbenhnhan[0]["email"];
$tam["DiaChiNguoiLienHe"]=$thongtinbenhnhan[0]["DiaChiNguoiLienHe"];	
$tam["ID_ThanhPho"]=$thongtinbenhnhan[0]["ID_ThanhPho"];

$tam["TenXaPhuong"]=$thongtinbenhnhan[0]["TenXaPhuong"];
$tam["TenQuanHuyen"]=$thongtinbenhnhan[0]["TenQuanHuyen"];
$tam["TenTinhThanhPho"]=$thongtinbenhnhan[0]["TenTinhThanhPho"];
$tam["ID_auto"]=$thongtinbenhnhan[0]["ID_auto"];


}else{
	$idhenkham=0;
	$tam["MaBenhNhan"]="";
	$tam["NamSinh"]="";
	$tam["SoThangTuoi"]="";
	$tam["NgayThangNamSinh"]="";
	$tam["DienThoai2"]="";
	$tam["ID_CongTy"]="";
	
	$tam["ID_QuocTich"]="";
	$tam["ID_DanToc"]="";
	$tam["ID_NgheNghiep"]="";
	$tam["TenNguoiLienHe"]="";
	$tam["QuanHeVoiBN"]="";
	$tam["DienThoaiNguoiLienHe"]="";
	
	$tam["QuanHeVoiBenhVien"]="";
	$tam["GioiTinh"]="";
  $tam["HoLotBenhNhan"]="";
  $tam["TenBenhNhan"]="";
  $tam["ID_BenhNhan"]="";
  $tam["NamSinh"]="";
  $tam["diachi"]="";
  $tam["dienthoai1"]="";
  $tam["email"]="";
  $tam["idbenhnhan"]='';
  $tam["DiaChiNguoiLienHe"]='';
  $tam["ID_ThanhPho"]=0;
  $tam["ID_XaPhuong"]=0;
  $tam["ID_QuanHuyen"]=0;
  //ID_ThanhPho

  $tam["TenXaPhuong"]='';
  $tam["TenQuanHuyen"]='';
  $tam["TenTinhThanhPho"]='';
  $tam["ID_auto"]='';
}

?>

<ul id="menu" class="menu" style="display:none">
<li class="delLuotKham" ><a href="#">Hủy Lượt Khám</a></li>
</ul>
<div class="thongtinchinh" style="width:100%;margin-top:5px;display:inline-block!important;">
<div id="main_top" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable" style="width:99%;  box-shadow:none!important;  display: block!important;z-index: 1 !important;" >
<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title"><?php lang('ttinbnhan')?></span> </div>
<div class="ui-dialog-content ui-widget-content" style="display: block; width: auto; min-height: none; max-height: none; height: 100%; ">

<div class="form_row" style="vertical-align:top">
	<img id="hinh_benhnhan" class="non_image" title="Click vào để cập nhật ảnh đại diện" style="border-style:solid;border-color:green;width:182px;height:150px" src=""/>
	<input type="hidden" id="view_avatar" name="view_avatar">
	<!-- <iframe id="hinh_benhnhan" style="border:1px solid;width:120px;height:152px;"src=""></iframe>   -->
	<br/>
	<button id="chon_anhdaidien" style="float: left; width: 160px; cursor: pointer;" title="Click vào để cập nhật ảnh đại diện">Chọn hình ảnh</button>
	<button id="clear_avatar" style="float: left; width: 26px; height: 24px; border: 1px solid red; cursor: pointer; margin-top: 1px;" title="Xóa ảnh đại diện">
		<span class="ui-icon ui-icon-trash"></span>
	</button>
	<br/> 
</div>

<div class="form_row" style="vertical-align:top"  >
    <div><label for="mabn" style="width: 110px; text-align: right; line-height: 24px;"><?php lang('maBN')?>:</label>
    <label id="mabn1" name="mabn1" class="hienthi" style="width:193px;margin-left:5px" type="text"><?=$tam["MaBenhNhan"]?></label></div>
    <div> <label for="holot" style="width:110px; color:red;text-align:right "><?php lang('holotBn')?></label>
    <input id="holot" name="holot" class="viet-hoa-chu-cai" type="text" value="<?=$tam["HoLotBenhNhan"]?>" lang="holot" style="width:190px;margin-left:5px">
    </div>
	 <div>
	<label for="gioitinh" style="width:110px;text-align:right; color:red">Giới tính</label>
		<input id="nam"   style="vertical-align: middle" lang="nam" type="radio" name="sex" value="0">Nam
		<input id="nu"   style="vertical-align: middle" lang="nu" type="radio" name="sex" value="1">Nữ
	</div>
    <div>
    <label for="ngaysinh"  style="width:110px;text-align:right">Ngày </label>
    <input type="text" name="ngaysinh"  maxlength="2" lang="ngaysinh" id="ngaysinh" style="width:20px;margin-left:5px">
    <label for="thangsinh"  style="width:30px; "  >Tháng </label>
    <input type="text" maxlength="2" name="thangsinh" lang="thangsinh" id="thangsinh" style="width:20px;margin-left:5px">
    <label  for="namsinh" style="width:55px; color:red;text-align:right ">Năm sinh</label>
    <input id="namsinh"  maxlength="4" value="<?=$tam["NamSinh"]?>" name="namsinh"  lang="namsinh" style="width:32px;" type="text">
    </div>
    <div> <label for="sonha" style="width:110px;text-align:right "><?php lang('snhadpho')?></label>
    <input id="sonha" type="text" class="viet-hoa-chu-cai" value="<?=$tam["diachi"]?>" lang="sonha" name="sonha" style="width:190px;margin-left:5px">
    </div>
    <div> <label for="quanhuyen" style="width:110px;text-align:right "><?php lang('quan')?></label>             
    <input id="quanhuyen" name="quanhuyen" type="text" style="width:163px;margin-left:5px" >
    </div>
    <div> <label for="dienthoai1"  style="width:110px;text-align:right "><?php lang('dthoai')?></label>
    <input id="dienthoai1" value="<?=$tam["dienthoai1"]?>" name="dienthoai1" lang="dienthoai1" type="text" style="width:190px;margin-left:5px">
    </div>
    <div style="display:none;"> <label for="nghenghiep" style="width:110px;text-align:right "><?php lang('ngnghiep')?></label>
    <select id="nghenghiep" name="nghenghiep"  type="text" style="width:190px;margin-left:5px"></select>
    </div>
    <div style="">
    <label for="congty" style="width:110px;text-align:right "><?php lang('ncongtac')?></label>
    <span class="custom-combobox" >
    <input id="congty" name="congty" type="text" style="width:163px;margin-left:5px">
    <input id="congty1" name="congty1"  type="hidden" >
    </span>
    </div>
    <div> <label for="quanhe" style="width: 110px; text-align: right; vertical-align: top;"><?php lang('ghichu')?></label>
    <textarea id="quanhe" name="quanhe"  type="text" style="width: 190px; margin-left: 5px; height: 38px;"><?=$tam["QuanHeVoiBenhVien"]?></textarea>
    </div>
    <div class="form_row" style="vertical-align:top;width:20px;display:none"  >
        <div><span style= "margin-top: 3px;display:none" class="ui-icon ui-icon-info icon_holot"></span> </div>
        <div><span style= "margin-top: 3px;display:none" class="ui-icon ui-icon-info icon_namsinh"></span> </div>
    </div>
</div>
<div class="form_row" style="vertical-align:top">
	<div></div>
	
    <div> <input id="tenbn" value="<?=$tam["TenBenhNhan"]?>" name="tenbn" lang="tenbn" class="viet-hoa-chu-cai" type="text" style="width:140px;"><label for="tenbn" style="width:50px; color:red;text-align:left;margin-left:5px "><?php lang('ten')?></label></div>
    <div></div>
	<div> <label for="sotuoi" style="width:40px;text-align:right">Số tuổi</label><input name="sotuoi" type="text"  maxlength="3" id="sotuoi" style="width:40px;margin-left:5px!important"> <input "<?=$tam["SoThangTuoi"]?>"  id="thangtuoi" maxlength="2" name="thangtuoi"  style="width:44px;" type="text"><label id="thangtuoi"  for="thangtuoi" style="width:100px;text-align:left;margin-left:5px "><?php lang('tuoit')?></label></div>
<div> 
<input   id="xaphuong" name="xaphuong" type="text" style="width:113px;">

	<label for="xaphuong" style="width:100px;text-align:left;margin-left:32px "><?php lang('xaphuong')?></label></div>
	<div> <input id="tinhthanh" name="tinhthanh" type="text" style="width:113px;">
<label for="tinhthanh" style="width:100px;text-align:left;margin-left:32px "><?php lang('tinhthanh')?></label></div>
	<div> <input id="dienthoai2" value="<?=$tam["DienThoai2"]?>" name="dienthoai2" type="text" style="width:140px;"><label for="dienthoai2" style="width:100px;text-align:left;margin-left:5px "><?php lang('dthoaikhac')?></label></div>
	<div> <select id="quoctich" name="quoctich" type="text" style="width:140px;"></select><label for="quoctich" style="width:100px;text-align:left;margin-left:38px; "><?php lang('qtich')?></label></div>
	<div style="display:none;"> <input id="diembn" disabled name="diembn" type="text" style="width:140px;"><label for="diembn" style="width:100px;text-align:left;margin-left:5px "><?php lang('diembn')?></label></div>
	<div> <input id="email" value="<?=$tam["email"]?>" name="email" type="text" style="width:140px;"><label for="email" style="width:100px;text-align:left;margin-left:5px "><?php lang('email')?></label></div>

<div style="display:none;"> <label for="nocuoi" name="nocuoi" style="width:120px;text-align:left;margin-left:5px;cursor:pointer;color:#06F;text-decoration:underline" id="nocuoi" >Nợ cuối:  <?php if(isset($_GET['oper']) && $_GET['oper']=='edit'){echo $nocu[0][0];}else{echo 0;}?></label></div>
</div>
<div class="form_row" style="vertical-align:top;width:0px"  >
<span style= "display:none;margin-top:4px;margin-left:-50px" class="ui-icon ui-icon-info icon_tenbn"></span>
</div>
<div id="colum3" class="form_row" style="vertical-align:top;"  >
<fieldset>
<legend style="font-weight:bold;">Thông tin liên hệ</legend>
<div > <label for="nlh" style="width:100px;text-align:right "><?php lang('hotennlh')?></label><input value="<?=$tam["TenNguoiLienHe"]?>"   name="nlh" id="nlh" type="text" style="width:120px;margin-left:5px"></input></div>
<div style="padding-top:5px "> <label for="dc_nguoilh" style="width:100px;text-align:right "><?php lang('dchi')?></label><input value="<?=$tam["DiaChiNguoiLienHe"]?>" id="dc_nguoilh" name="dc_nguoilh" type="text" style="width:120px;margin-left:5px"></input></div>
<div style="padding-top:5px "> <label for="dt_nguoilh" style="width:100px;text-align:right "><?php lang('dthoai')?></label><input value="<?=$tam["DienThoaiNguoiLienHe"]?>" id="dt_nguoilh" name="dt_nguoilh" type="text" style="width:120px;margin-left:5px"></input></div>
<div style="padding-top:5px "> <label for="quanhebn" style="width:100px;text-align:right ">Quan hệ với BN</label><input value="<?=$tam["QuanHeVoiBN"]?>" id="quanhebn" name="quanhebn" type="text" style="width:120px;margin-left:5px"></input></div>

</fieldset>

<div>
<a style="margin-left:0px;   margin-bottom:1px;display:none;" class="fm-button-icon-left" id="ghichu" href="#"><?php lang('ghichu')?><span  class="ui-icon ui-icon-search"></span></a>
<a style="margin-left:0px;  margin-bottom:1px;" class="fm-button-icon-left" id="save_data" href="#"><?php lang('luu')?>[Ctrl-S]<span class="ui-icon ui-icon-cancel
"></span></a>

<a style="margin-left:0px;  margin-bottom:1px;" class=" " id="sua" href="#"><?php lang('sua')?></a>
</div>
</div>
<div id="colum4" class="form_row" style="vertical-align:top; margin-left:10px !important;display:none;">
<div style="height:23px;" ></div>
<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="font-size:12px">Thẻ thành viên</div>
<div class="ui-dialog-content ui-widget-content" style=" border:1px solid #D4CCB0;border-top:none ;display: block; width: auto; min-height: 120px; max-height: none; height: 100%;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
<div><label for="viewmathe" style="width:58px;text-align:right ">Số thẻ: </label><label id="viewmathe" style="width:120px; margin-left:3px; font-weight: bold;" ></label></div>
<div style="color: #000; height: 32px;"><label for="viewtrangthaimathe" style="width:58px;text-align:right ">Trạng thái: </label><label id="viewtrangthaimathe" style="width:120px; margin-left:3px; display: inline-flex;" ></label></div>
<div style="color: #000;"><label for="viewsodiem" style="width:58px;text-align:right ">Số dư: </label><label id="viewsodiem" style="width:120px; margin-left:3px; display: inline-flex;" ></label></div>
<div style="color: #000;"><label for="viewhang" style="width:58px;text-align:right ">Xếp hạng: </label><label id="viewhang" style="width:120px; margin-left:3px; display: inline-flex;" ></label></div>
</div>
<div>
<button id="btn_themthetv" style="display:none;">Cập nhật thẻ TV</button>
</div>
</div>

<div class="form_row" style="vertical-align:top;width:20px"  >
<span style= "display:none;margin-top:4px;margin-left:-90px" class="ui-icon ui-icon-info icon_sex"></span>
</div>


</div>
</div>
</div>
</div>
<div>
<table id="rowed3" ></table>
<div id="prowed3"></div>
</div>
<div>
<table id="rowed4"></table>
<div id="prowed4"></div>
</div>


<div id="dialog-member-card" title="Thẻ thành viên">
<p><label>Số thẻ: </label><input type="text" name="mathe" id="mathe" maxlength="13" mathe="" style="width: 100px;"></p>
</div>
</body>
</html>

<script type="text/javascript">

window.idbhyt=<?=$idbhyt?>;
window.dem=0;
window.tab_click=0;
window.firstload_1=0;
window.firstload_2=0;
window.firstload_3=0;
$(document).ready(function() {	
$(".viet-hoa-chu-cai").focusout(function(){
	var input_text=$(this).val();
	$(this).val(viethoachucaidau(input_text));
});
	
$('#rowed3').bind("contextmenu", function(e) {
  return false;
});
$(document).bind("mouseup", function(e) {
    $("#menu").hide();
});
$("#menu").menu();
$('.delLuotKham').click(function(){
  var ID_LuotKhamP = $('#rowed3').jqGrid('getCell', rowed3_right, 'ID_LuotKham');
  $.ajax({
          type: 'POST',
          async : false,
          url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&hienmaloi=1&action=controller_huyluotkham&id_luotkham='+ID_LuotKhamP,
          success: function(data, status, xhr) {
            if($.trim(data)!=''){
                alert(data);
            }else{            
              $('#rowed3').jqGrid('setGridParam', { datatype: "json"}).trigger("reloadGrid"); 
            }       
          },            
        }); 
})
$("#dialog_finger").dialog({
    autoOpen:false,
    height: 200,
    width: 500,
    modal: true,
    title: '',
    draggable: true,
    resizable: false,
    stack: false,
    buttons: {
     "Hủy": function() {
       $( this ).dialog( "close" );
     },
   },	
   close: function(event, ui) {
			//parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
    },

  });









  openform_shortcutkey();
  $("#thongtinthanhtoan").dialog({
   height:$(window).height().toFixed(0),
   width: $(window).width().toFixed(0),
   modal: true,
   autoOpen: false,
   draggable: false,
   resizable: false,
   stack: false,
   buttons: {		
   },
   open: function(event, ui) {		
   },
 });



  $('#nocuoi').click(function(){		
    $("#thongtinthanhtoan").dialog('open');
    $( "#tabs" ).tabs({heightStyle:"fill"});	
    $('#tabs1').click()
  })



  $('#tabs1').click(function(){
    tab_click=1;
    $("#table_dsbill").setGridHeight($("#tabs-1").height() - 60);      
    $("#table_dsbill ").setGridWidth($("#tabs-1").width() +10);   
    $('#table_dsbill').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dsbill&ID_BenhNhan='+window.idbenhnhan}).trigger("reloadGrid");
  })
  $('#tabs2').click(function(){
    tab_click=2;
    $("#table_dsthongtin").jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dsthongtin&ID_BenhNhan='+window.idbenhnhan}).trigger("reloadGrid");
    $("#table_dsthongtin").setGridHeight($("#tabs-1").height() - 60);      
    $("#table_dsthongtin").setGridWidth($("#tabs-1").width() +10); 		
  })


  // THEM THE THANH VIEN
  $("#mathe").scannerDetection({onComplete:  function(e,data){savemembercard()}}) ;

  $( "#dialog-member-card" ).dialog({
    resizable: false,
    autoOpen:false,
    height: "auto",
    width: 200,
    modal: true,
    buttons: {
      "Lưu": function() {
        savemembercard();
      },
      "Thoát": function() {
        $( this ).dialog( "close" );
      }
    }
  });
  
  

  $('#btn_themthetv').click(function(){
   if(parseInt(window.idbenhnhan)>0){
    $.ajax({
      url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_membercard&oper=getthe",
      type : "post",
      dateType:"text",
      data : {
        idbenhnhan : window.idbenhnhan
      },
      success : function (result){
        data=$.parseJSON(result);
            //alert(data['MaBenhNhan']);
            //var res = str.substring(1, 4);
            $("#mathe").attr("mathe",data['SoTheThanhVien']);
            $("#mathe").val(data['SoTheThanhVien']);
            $( "#dialog-member-card" ).dialog('open');
            $("#mathe").select();
          }
        });
  }else{
    alert("Không có bệnh nhân!");
  }

});

 // THEM THE THANH VIEN




 create_grid1();	
  //create_rowed_finger();
  create_grid2() ;
  image_message();
  $("#sua,#ghichu,#save_data,#btn_themthetv").button();
  $('body').bind('keydown', function (e) {
    if (jwerty.is('f12',e)) {
      $(".ui-icon-document-b").trigger("click");
    }
  });

  <?php
  if(isset($_GET['holot']) && $_GET['holot']!='' && $_GET['ten']!='undefined'){
    $hbn=$_GET['holot'];
    ?>
    $('#holot').val('<?=$hbn?>');
    <?php }
    if(isset($_GET['ten']) && $_GET['ten']!='' && $_GET['ten']!='undefined'){
      $tbn=$_GET['ten'];

      ?>
      $('#tenbn').val('<?=$tbn?>');
      <?php	} ?>

      <?php
      if(isset($_GET['namsinh']) && $_GET['namsinh']!='' && $_GET['namsinh']!='undefined'){
        if(strlen($_GET['namsinh'])==4){

         echo "$('#namsinh').val('".$_GET['namsinh']."');";
       }else{
         $time = strtotime("-".$_GET['namsinh']." year", time());
         $date = date("Y", $time);
         echo "$('#sotuoi').val('".$_GET['namsinh']."');";
         echo "$('#namsinh').val('".$date."');";
       }
     }
     if(isset($_GET['diachi']) && $_GET['diachi']!='' && $_GET['diachi']!='undefined'){
      echo "$('#sonha').val('".$_GET['diachi']."');";
    }
    if(isset($_GET['quanhe']) && $_GET['quanhe']!='' && $_GET['quanhe']!='undefined'){
      echo "$('#quanhe').val('".$_GET['quanhe']."');";
    }


    ?>

    <?php
    if(isset($_GET['oper'])){
      echo " window.oper='edit';";
      if($tam["ID_CongTy"]!=''){
       echo "var ID_CongTy=".$tam["ID_CongTy"].";";
     }else{
       echo "var ID_CongTy='';";
     }
     if($tam["idbenhnhan"]!=''){
       echo " window.idbenhnhan=".$_GET["idbenhnhan"].";";
     }else{
       echo " window.idbenhnhan='';";
     }

     if($tam["NgayThangNamSinh"]!=''){
      echo "var NgayThangNamSinh='".$tam["NgayThangNamSinh"]."';";
    }
    else{
     echo "var NgayThangNamSinh='';";
   }

   if($tam["ID_QuocTich"]!=''){
    echo "var ID_QuocTich=".$tam["ID_QuocTich"].";";
  }
  else{
   echo "var ID_QuocTich='';";
 }
 if($tam["ID_DanToc"]!=''){
  echo "var ID_DanToc=".$tam["ID_DanToc"].";";
}
else{
 echo "var ID_DanToc='';";
}
if($tam["ID_NgheNghiep"]!=''){
  echo "var ID_NgheNghiep=".$tam["ID_NgheNghiep"].";";
}
else{
 echo "var ID_NgheNghiep='';";
}		
if($tam["GioiTinh"]!=''){
 echo "var GioiTinh=".$tam["GioiTinh"].";";
}
else{
 echo "var GioiTinh='';";
}
if($tam["ID_ThanhPho"]!=''){
 echo "window.ID_ThanhPho=".$tam["ID_ThanhPho"].";";
}
else{
 echo "window.ID_ThanhPho=0;";
}
if($tam["ID_QuanHuyen"]!=''){
 echo "window.ID_QuanHuyen=".$tam["ID_QuanHuyen"].";";
}
else{
 echo "window.ID_QuanHuyen=0;";
}
if($tam["ID_XaPhuong"]!=''){
 echo "window.ID_XaPhuong=".$tam["ID_XaPhuong"].";";
}
else{
 echo "window.ID_XaPhuong=0;";
}

if($tam["ID_auto"]!=''){
 echo "window.ID_auto=".$tam["ID_auto"].";";
}
else{
 echo "window.ID_auto='';";
}


echo "create_combobox_new('#xaphuong',create_Dm_xaphuong,'bw','','data_dm_xaphuong',0);";
echo "create_combobox_new('#quanhuyen',create_Dm_quanhuyen,'bw','','data_dm_quanhuyen',0);";
echo "create_combobox_new('#tinhthanh',create_Dm_tinhthanh,'bw','','data_dm_tinhthanh',0);";
	//	echo 'create_combobox("#xaphuong","#xaphuong1",".DM_xaphuong","#DM_xaphuong",create_Dm_thuoc_grid,500,300,"Xã phường","data_dm_xaphuong",0);';
  echo 'create_combobox("#congty", "#congty1", ".data_combo_congty", "#data_combo_congty", create_congty, 500, 400, "Công ty", "data_congty",ID_CongTy);';


}else{
	
	echo " window.oper='add';";
	
	echo 'create_combobox_new("#xaphuong",create_Dm_xaphuong,"bw","","data_dm_xaphuong",0);';
	echo "create_combobox_new('#quanhuyen',create_Dm_quanhuyen,'bw','','data_dm_quanhuyen',0);";
	echo "create_combobox_new('#tinhthanh',create_Dm_tinhthanh,'bw','','data_dm_tinhthanh',0);";
//	echo 'create_combobox("#xaphuong","#xaphuong1",".DM_xaphuong","#DM_xaphuong",create_Dm_thuoc_grid,500,300,"Xã phường","data_dm_xaphuong",0);';
echo 'create_combobox("#congty", "#congty1", ".data_combo_congty", "#data_combo_congty", create_congty, 500, 400, "Công ty", "data_congty","");';
echo " window.idbenhnhan='';";
}
?>
//getinfomember()

if(window.oper=="edit"){
 window.ma_benhnhan=$("#mabn1").text();
		//_folder_name="HinhBenhNhan"+"//"+ma_benhnhan;
		//search_string=ma_benhnhan+"_"+new Date().toString("dd" +"MM"+"_"+"yyyy");
		//check_folder_exist();
		//refresh_images();
 }

 window.kiemtra_popup=false;
 window.sta=true;
	//create_Dm_thuoc_grid();
  $("#luotkhamtontai").dialog({
    autoOpen:false,
    height: ($(window).height() / 100 * parseFloat(30)).toFixed(0),
    width: ($(window).width() / 100 * parseFloat(50)).toFixed(0),
    modal: true,
    title: 'Thông báo',
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
     parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
   },

 });

  $("#luotkhamnoitrutontai").dialog({
    autoOpen:false,
    height:100,
    width: 400,
    modal: true,
    title: 'Thông báo',
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
     var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
     var rowData = jQuery('#rowed3').getRowData(selr);
			//parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
			parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+window.n_luotkham+';'+window.idbenhnhan+';;;'+window.n_tenbn+'&oper=edit&id_ttluotkham='+window.n_luotkham+'&fromsearch=true&doituong=','*');
    },

  });



  window.loaikham=$.ajax({
    url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham",
    async:false
  }).responseText;


  window.quoctich= $.ajax({
    url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_QuocTich&id=ID_QuocTich&name=TenQuocTich",
    async:false
  }).responseText;
/*	window.congty=	 $.ajax({
                        url: "pages.php?module=web_services&function=get_auto_complete2&action=index&store=GD2_congty_autocomplex",
                        dataType:"json",
                        async:false
                    }).responseText;
                    window.congty=jQuery.parseJSON(window.congty);	*/
                    window.nghenghiep = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NgheNghiep&id=ID_NgheNghiep&name=TenNgheNghiep', async: false, success: function(data, result) {
                      if (!result)
                        alert('Không load được tên');
                    }}).responseText;





                    init_data();
                    create_rowed3();
                   // create_rowed4();
				   $("#rowed3").setGridHeight($(window).height()-$(".thongtinchinh").height()-100);
                    jQuery(window).resize(function() {
                    $("#rowed3").setGridHeight($(window).height()-$(".thongtinchinh").height()-100);
                     $("#rowed3").setGridWidth((($(window).width()) / 100 * parseFloat(99)).toFixed(0));
                    // $("#rowed4").setGridHeight($(window).height()-$("#main_top").height()-305); //thongtinchinh
                    // $("#rowed4").setGridWidth((($(window).width()) / 100 * parseFloat(99)).toFixed(0));


                   });

                    setTimeout(function(){$("#holot").focus()},500); ;
	//alert(top);
//	create_grid();
//	$(".ui-jqgrid-titlebar").hide();
//	jQuery(window).resize(function() {
//	 	$("#rowed3").setGridWidth($(window).width());
//	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-300);
//	 });
shortcut_key();


$('#xaphuong').val(<?php  echo '"'.$tam["TenXaPhuong"].'"';?>);
$('#quanhuyen').val(<?php  echo '"'.$tam["TenQuanHuyen"].'"';?>);
$('#tinhthanh').val(<?php  echo '"'.$tam["TenTinhThanhPho"].'"';?>);



$('#xaphuong_hidden').val(<?php  echo "'".$tam["ID_XaPhuong"]."'";?>);
$('#quanhuyen_hidden').val(<?php  echo "'".$tam["ID_QuanHuyen"]."'";?>);
$('#tinhthanh_hidden').val(<?php  echo "'".$tam["ID_ThanhPho"]."'";?>);


if(oper=='edit'){

 if (NgayThangNamSinh!=''){
  var ngaythang=NgayThangNamSinh.split('-');

  $("#ngaysinh").val(ngaythang[0]);
  $("#thangsinh").val(ngaythang[1]);
 
}
$("#ghichu").removeClass('ui-state-disabled');
$("#sua").removeClass('ui-state-disabled');
$("#save_data").addClass('ui-state-disabled');
$("#quoctich").val(ID_QuocTich);
$("#nghenghiep").val(ID_NgheNghiep);
			//$("#congty1").val(ID_CongTy);

			var nghenghiep_edit=	$( "#nghenghiep option:selected" ).text();
			var quoctich_edit=	$( "#quoctich option:selected" ).text();
			$("#quoctich1").val(quoctich_edit);
			$("#nghenghiep1").val(nghenghiep_edit);
			if (GioiTinh==0){
				$("#nam").prop('checked', true);
			}else{
				$("#nu").prop('checked', true);
			}
			/*$("#xaphuong1").val(ID_XaPhuong);
			$("#xaphuong1").val(ID_XaPhuong);
			if(ID_XaPhuong!=''){
							var Ten_xaphuong_edit = $("#DM_xaphuong").jqGrid('getCell', ID_XaPhuong, 'label');
							var Ten_quanhuyen_edit = $("#DM_xaphuong").jqGrid('getCell', ID_XaPhuong, 'TenQuanHuyen');
							var Ten_thanhpho_edit = $("#DM_xaphuong").jqGrid('getCell', ID_XaPhuong, 'TenTinhThanhPho');
							$("#xaphuong").val(Ten_xaphuong_edit);
							$("#quanhuyen").val(Ten_quanhuyen_edit);
							$("#tinhthanh").val(Ten_thanhpho_edit);
			}
			if(ID_CongTy!=''){
							//alert(ID_CongTy);
							//$("#congty").val(congty[ID_CongTy]['label']);

           }*/
			
         }else{
           $("#ghichu").addClass('ui-state-disabled');
           $("#sua").addClass('ui-state-disabled');
           $("#save_data").removeClass('ui-state-disabled');


    }
	phanquyen();
	

});//end ready

function load_phong_ban(status){
	window.phongban = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhomThuoc&id=ID_NhomThuoc&name=TenNhomThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;

	if(status==true){
		$("#rowed3").setColProp('TenPhongBan', { editoptions: { value: phongban} });

	}
}
function shortcut_key(){
	jwerty.key('ctrl+s', false);jwerty.key('f2', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f10', false);jwerty.key('f12', false);jwerty.key('f6', false);
  $('body').bind('keydown', function (e) {
   if (jwerty.is('ctrl+s',e)) {
     $("#save_data").trigger("click");
   }
 });
		/*$('body').bind('keydown', function (e) {
			if (jwerty.is('f2',e)) {
				 $("#sua").trigger("click");
			}
		});*/
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f12',e)) {
       $(".ui-icon-document-b").trigger("click");
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
			if (jwerty.is('f11',e)) {
       $(".ui-icon-refresh").trigger("click");
     }
   });
  }
  function init_data(){
    $("#save_data").bind('click',function() {
      check_bn()	;
      if(window.kiemtra===true&&window.sta===true){
       trangthai('disable');
       if(window.oper=='edit'){
        edit_bn();
      }else{
        setTimeout(save_bn,500)
      }

    }


  });

    $("#ghichu").click(function(){
      elem=1 + Math.floor(Math.random() * 1000000000);
      dialog_add_dm("Ghi Chú Của Bệnh Nhân",100,70,elem,'pages.php?module=<?=$modules?>&view=ghi_chu&id_form=53&idbenhnhan='+window.idbenhnhan,callback)

    })

    $("#sua").click(function(){
      trangthai('enable');
    })

    $("#from_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
    $("#to_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
    $("#from_day").datepicker({dateFormat:  $.cookie("ngayJqueryUi")});
    $("#to_day").datepicker({dateFormat:  $.cookie("ngayJqueryUi")});
    $('#xem').click(function(){
     window.open("pages.php?module=report&view=<?=$modules?>&action=xuat_excel_congnobn&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val()+"&tab_click="+tab_click+"&id_benhnhan="+window.idbenhnhan);
   })

    create_select("#nghenghiep",window.nghenghiep);
    create_select("#quoctich",window.quoctich);
	//create_select("#quanhe",window.quanhe);
	autocompleted_combobox("#quoctich");
	autocompleted_combobox("#nghenghiep");
	//autocompleted_combobox("#loaikham");
	//autocomplex_mutil("#congty",congty,"#congty1");


	//autocomplex_mutil2("#quanhuyen",quanhuyen,"#quanhuyen1");
  $("#holot").focus();

	$('#clear_avatar').click(function(e){
  	var check = confirm('Bạn muốn xóa ảnh đại diện này không?');
  	if(check==true){
  	$('#hinh_benhnhan').attr('src','');
	$('#view_avatar').val('');
	tooltip_message('Xóa ảnh đại diện thành công. Vui lòng nhấn Lưu để hoàn tất');
	$('#sua_hoso').click();
	  	}
  });
   $("#hinh_benhnhan,#chon_anhdaidien").click(function() {
    var url = "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=avartar&type=test&mabenhnhan="+$('#mabn1').val()+"&id_form=3005";
    dialog_main("Thêm ảnh đại diện", 80, 98, "56743265743657",url );
    if(oper=="edit"){
     window.ma_benhnhan=$("#mabn1").text();
     search_string=ma_benhnhan+"_"+new Date().toString("dd"+"MM"+"_"+"yyyy");
     _folder_name="HinhBenhNhan"+"//"+ma_benhnhan;
				//dialog_add_dm('Chỉnh sửa hình ảnh',95,95,6754353898787675,'pages.php?module=images_control&view=images_edit&id_form=49&tenthumuc='+_folder_name+'&search_string='+search_string,refresh_images);
			}
     else{
     }
   });
 
  $("#namsinh").focusout(function(){
    funSoTuoi();
  });
  
  $("#ngaysinh").focusout(function(){
    var namsinh =  $("#namsinh").val();
    var thangsinh =  $("#thangsinh").val();
    var ngaysinh =  $("#ngaysinh").val();
    if(!isNaN(namsinh) && $.trim(namsinh)!='' && namsinh.length==4 )	{
      var d = new Date();
      if(ngaysinh.length>0&&thangsinh.length>0 &&$.trim(thangsinh)!=''&&$.trim(ngaysinh)!=''){
        var lastDay = new Date(namsinh, thangsinh , 0);
        if(ngaysinh>lastDay.getDate()){
          $("#ngaysinh").val(lastDay.getDate());
        }

      }
    }


  });
  $("#thangsinh").focusout(function(){
    var namsinh =  $("#namsinh").val();
    var thangsinh =  $("#thangsinh").val();
    var ngaysinh =  $("#ngaysinh").val();
    if(!isNaN(namsinh) && $.trim(namsinh)!='' && namsinh.length==4 )	{
      var d = new Date();
      if(ngaysinh.length>0&&thangsinh.length>0 &&$.trim(thangsinh)!=''&&$.trim(ngaysinh)!=''){
        var lastDay = new Date(namsinh, thangsinh , 0);
        if(ngaysinh>lastDay.getDate()){
          $("#ngaysinh").val(lastDay.getDate());
        }

      }
    }


  });
  $("#sotuoi").focusout(function(){
   if(!isNaN($("#sotuoi").val()) && $.trim($("#sotuoi").val())!='' )	{
    var d = new Date();
    $("#namsinh").val(d.getFullYear()-$("#sotuoi").val())
  }
});
  $("#thangtuoi").focusout(function(){
   if((!isNaN($("#thangtuoi").val()))&& $.trim($("#thangtuoi").val())!='' )	{
    var d = new Date();
    var thangtuoi=$("#thangtuoi").val()-(d.getMonth()+1);
    $("#namsinh").val(d.getFullYear()-Math.ceil(thangtuoi/12))
    $("#sotuoi").val(d.getFullYear()-(d.getFullYear()-(Math.ceil($("#thangtuoi").val()/12))))
  }
})
  jwerty.key('tab', false);
  jwerty.key('shift+tab', false);
  jwerty.key('shift+enter', false);
  $('#main_top input[type=text],#main_top textarea,#main_top input[type=radio],#main_top a#save_data,#main_top a#clear_all,#main_top a#bndk').bind("keyup", function(e) {
		//nhay focus nut bam
    var charCode = (e.which) ? e.which : e.keyCode
    if ($("#main_top a#save_data,#main_top a#clear_all,#main_top a#bndk").is(":focus")){
			//nut xuong , tab
     if (jwerty.is("↓",e)||jwerty.is("tab",e)) {
      var inputs = $(this).parents("#main_top").eq(0).find("a#save_data,a#clear_all,a#bndk");
      var idx = inputs.index(this);
					 //nut cuoi cung focus ve dau
           if (idx == inputs.length - 1) {
             $("#holot").focus();
           } else {inputs[idx + 1].focus();}
				//shift+tab,len
     }else if(jwerty.is("shift+tab",e)||jwerty.is("↑",e)){
      var inputs = $(this).parents("#main_top").eq(0).find("a#save_data,a#clear_all,a#bndk");
      var idx = inputs.index(this);

      if (idx >=0) {
					 //nut bam dau tien
           if(idx==0){
             $("#quanhebn").focus();
             $("#quanhebn").select();
           }else{inputs[idx -1].focus();
            inputs[idx - 1].focus();
          }
        }
      }else if(jwerty.is("shift+enter",e)){
       search_bn();
     }
   }


		//nhay focus cac input
		else if ($("#main_top input[type=text],#main_top textarea,#main_top input[type=radio]").is(":focus")){
			//enter va tab
     if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
      var inputs = $(this).parents("#main_top").eq(0).find(":input[type=text], textarea,input[type=radio]");
      var idx = inputs.index(this);
				//alert(inputs[idx + 1].nodeName)
        if (idx == inputs.length - 1) {
         $("#save_data").focus();
       }else {
         if(inputs[idx].id=="holot"){
          $("#tenbn").focus();
          $("#tenbn").select();
        }else if(inputs[idx].id=="tenbn"){
          $("#nam").focus();
          $("#nam").select();
        }else if(inputs[idx].id=="nu"){
          $("#ngaysinh").focus();
          $("#ngaysinh").select();
        }else if(inputs[idx].id=="ngaysinh"){
          $("#thangsinh").focus();
          $("#thangsinh").select();
        }else if(inputs[idx].id=="thangsinh"){
          $("#namsinh").focus();
          $("#namsinh").select();
        }else if(inputs[idx].id=="namsinh"){
          $("#sotuoi").focus();
          $("#sotuoi").select();
          if(oper=='add'){
           check_bn();
           if(window.kiemtra===true&&window.sta===true){
            setTimeout(save_bn,300);
          }
        }

      }else if(inputs[idx].id=="sotuoi"){
        $("#thangtuoi").focus();
        $("#thangtuoi").select();
      }else if(inputs[idx].id=="thangtuoi"){

        $("#sonha").focus();
        $("#sonha").select();
      }else if(inputs[idx].id=="sonha"){
        $("#xaphuong").focus();
        $("#xaphuong").select();
      }else if(inputs[idx].id=="xaphuong"){
        if(window.count<=0){
         $("#xaphuong1").val("");
         $("#xaphuong").val("");

       }else{

       }


       $("#dienthoai1").focus();
       $("#dienthoai1").select();
     }else if(inputs[idx].id=="dienthoai1"){
      $("#dienthoai2").focus();
      $("#dienthoai2").select();
    }else if(inputs[idx].id=="dienthoai2"){
      $("#quanhe").focus();
      $("#quanhe").select();
    }else if(inputs[idx].id=="quanhe"){
      $("#quoctich1").focus();
      $("#quoctich1").select();
    }else if(inputs[idx].id=="quoctich1"){
      $("#email").focus();
      $("#email").select();
    }else if(inputs[idx].id=="email"){
      $("#nlh").focus();
      $("#nlh").select();
    }else if(inputs[idx].id=="quanhebn"){
      $("#save_data").focus();
    }else
    {
     inputs[idx + 1].focus();
     inputs[idx + 1].select();
   }
 }
 return false;

}

else if(jwerty.is("shift+tab",e)){
  var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,input[type=radio]");
  var idx = inputs.index(this);
  if (idx >0) {
   if(inputs[idx].id=="tenbn"){
    $("#holot").focus();
    $("#holot").select();
  }else if(inputs[idx].id=="nam"){
    $("#tenbn").focus();
    $("#tenbn").select();
  }else if(inputs[idx].id=="ngaysinh"){
    $("#nu").focus();
    $("#nu").select();
  }else if(inputs[idx].id=="thangsinh"){
    $("#ngaysinh").focus();
    $("#ngaysinh").select();
  }else if(inputs[idx].id=="namsinh"){
    $("#thangsinh").focus();
    $("#thangsinh").select();
  }else if(inputs[idx].id=="sotuoi"){
    $("#namsinh").focus();
    $("#namsinh").select();
  }else if(inputs[idx].id=="sonha"){
    $("#thangtuoi").focus();
    $("#thangtuoi").select();
  }else if(inputs[idx].id=="thangtuoi"){
    $("#sotuoi").focus();
    $("#sotuoi").select();
  }else if(inputs[idx].id=="xaphuong"){
    $("#sonha").focus();
    $("#sonha").select();
  }else if(inputs[idx].id=="dienthoai1"){
    $("#xaphuong").focus();
    $("#xaphuong").select();
  }else if(inputs[idx].id=="dienthoai2"){
    $("#dienthoai1").focus();
    $("#dienthoai1").select();
  }else if(inputs[idx].id=="nghenghiep1"){
    $("#dienthoai2").focus();
    $("#dienthoai2").select();
  }else if(inputs[idx].id=="quoctich1"){
    $("#nghenghiep1").focus();
    $("#nghenghiep1").select();
  }else if(inputs[idx].id=="congty"){
    $("#quoctich1").focus();
    $("#quoctich1").select();
  }else if(inputs[idx].id=="quanhe"){
    $("#congty").focus();
    $("#congty").select();
  }else if(inputs[idx].id=="nlh"){
    $("#quanhe").focus();
    $("#quanhe").select();
  }else
  {
   inputs[idx - 1].focus();
   inputs[idx - 1].select();
 }
}
			}//chi nhap so la gioi han leght
			else {
				if($("#ngaysinh,#thangsinh,#namsinh,#sotuoi,#thangtuoi").is(":focus")){
					$("#ngaysinh,#thangsinh,#namsinh,#sotuoi,#thangtuoi").keydown(function(e) {
						if ( $.inArray(e.keyCode,[46,8,9,27,13,190]) !== -1 ||
							(e.keyCode == 65 && e.ctrlKey === true) ||
							(e.keyCode >= 35 && e.keyCode <= 39)) {
             return;
         }
         else {
           if (e.shiftKey || (e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105 )) {
            e.preventDefault();
          }
        }
      })
					var d = new Date();
					//alert(minmax($("#ngaysinh").val(),0,31))
					$("#ngaysinh").val(minmax($("#ngaysinh").val(),0,31));
					$("#thangsinh").val(minmax($("#thangsinh").val(),0,12));
					if($("#namsinh").val().length==4){
           $("#namsinh").val(minmax($("#namsinh").val(),1900,d.getFullYear()));
         }
         $("#sotuoi").val(minmax($("#sotuoi").val(),1,200));
         $("#thangtuoi").val(minmax($("#thangtuoi").val(),1,72));
       }


       else if($("#xaphuong").is(":focus")){
					//alert("2");

					//nam
					/*grid = $("#DM_xaphuong");
                var searchFiler = $("#xaphuong").val(), f;

                if (searchFiler.length === 0) {
                    grid[0].p.search = false;
                    $.extend(grid[0].p.postData,{filters:""});
                }
                f = {groupOp:"OR",rules:[]};
                f.rules.push({field:"label",op:"cn",data:searchFiler});
                grid[0].p.search = true;
                $.extend(grid[0].p.postData,{filters:JSON.stringify(f)});
				grid.trigger("reloadGrid",[{page:1,current:true}])
       $(".dialog_dm").dialog( "open" );		*/

     }
   }

 }
});


}

function save_bn(){
	window.sta=false;
	window.oper='edit';
	if(window.dem==0){
		window.dem++;
   $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=1',dataToSend).done(function(data) {

    var mabenhnhan =data.split(';')
    if(mabenhnhan[0]==''){
     parent.postMessage("themmoibn_thanhcong;"+mabenhnhan[2]+";"+$("#holot").val()+" "+$("#tenbn").val(), "*");
     tooltip_message("Lưu thành công");

     window.idbenhnhan=mabenhnhan[2];

     setTimeout(function(){

       window.ma_benhnhan=$("#mabn1").text();
					//alert(ma_benhnhan);
          _folder_name="HinhBenhNhan"+"//"+ma_benhnhan;
          search_string=ma_benhnhan+"_"+new Date().toString("dd" +"MM"+"_"+"yyyy");
          check_folder_exist();
				//refresh_images();
     },1000);
     $("#mabn1").text(mabenhnhan[1])
     $("#ghichu").removeClass('ui-state-disabled');


     $("#ghichu").click(function(){
       $.post('pages.php?module=web_services&function=get_link&action=index&folder=ghi_chu:').done(function(data) {
         elem=1 + Math.floor(Math.random() * 1000000000);
         var folder= data.split(';');
         var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idbenhnhan='+window.idbenhnhan;
         dialog_add_dm("Ghi Chú Của Bệnh Nhân "+hovaten,90,70,elem,duong_dan,callback)
       })

     })
   }
   setTimeout(function(){window.sta=true},500);

 });
 }

}
function edit_bn() {
	window.sta=false;

  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=3&idbenhnhan='+window.idbenhnhan,dataToSend).done(function( data ) {
   if($.trim(data)==''){
     tooltip_message("Sửa thành công");
   }
   window.sta=true;	;
 })

};




function check_bn(){
	window.kiemtra=true;
	key1='';
	$(".icon_holot,.icon_tenbn,.icon_namsinh,.icon_sex").hide();
	i=0;
	phancach="";
	dataToSend ='{';
	$('#rowed3').setGridParam({postData: null});
	$('#main_top').find(':input[type=text],select,textarea,input[type=hidden],input[type=radio]:checked').each(function(){
	   if(i>0){
		 phancach=",";
	   }
	   dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value);
	   i++;
	 })
  dataToSend +='}';

		//alert($('#holot').val());
		window.dataToSend = jQuery.parseJSON(dataToSend);
   var check_null = new Array();
   check_null["holot"]=dataToSend["holot"];
   check_null["tenbn"]=dataToSend["tenbn"];
   check_null["namsinh"]=dataToSend["namsinh"];
   y=0;
   for (var key in check_null) {
     if(y==2){
      if( 'sex' in dataToSend ===false ){
        window.kiemtra=false;
        $(".icon_sex").show();
        if(key1==''){
          key1='nam';
        }
      }
      if(check_null[key].length<4){
        if(key1==''){
         key1=key;
       }
       window.kiemtra=false;
       $(".icon_"+key).show();
     }
   }

   if(check_null[key]==""){
     if(y==2){

     }
     $(".icon_"+key).show();
     if(key1==''){
      key1=key;
    }
    window.kiemtra=false;
  }

  y++;
}


if(dataToSend['thangsinh']!=''&&dataToSend['ngaysinh']!='') {
 if(window.kiemtra==true){
				var d1 = new Date(); //"now"
				var d2 = new Date(dataToSend['namsinh'],dataToSend['thangsinh']-1,dataToSend['ngaysinh'])  // some date
				//
       if(monthDiff(d2,d1)<=72){
        $("#thangtuoi").val(monthDiff(d2,d1))

      }else{

      }
    }
  }else if(dataToSend['thangsinh']==''||dataToSend['ngaysinh']==''){
   if(window.kiemtra==true){
			var d1 = new Date(); //"now"
			var d2 = new Date(dataToSend['namsinh'],0,1)
      if(yeatDiff(d2,d1)<=6){
        window.kiemtra=false;
        dialog_benhnhi("Thông báo:", "300px", "150px", "4732479", "",".thongbao");
      }
    }
  }

  if(window.kiemtra===false){
   if(key1!=''){
    $("#"+key1).focus();
  }

}}



function autocomplex_mutil(input,data,id) {
  var isOpen = false;
  _init(input,data,id);
  afterInit(input,isOpen);
};
function afterInit(input,isOpen) {

 var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
   icons: {
    primary: "ui-icon-triangle-1-s"
  },
  text: false
}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right").click(function(event) {
 $(input).focus();
 wasOpen = $(input).autocomplete("widget").is(":visible");

 if (isOpen) {
  $(input).autocomplete("close");
  isOpen = false;
} else {
  isOpen = true;
  $(input).autocomplete("search", "");
  event.stopImmediatePropagation();
}
});
}
function _init(input,data,id) {
  $(input).autocomplete({

   source: data,
   minLength: 0,
   select: function (event, ui) {
    $(id).val(ui.item.id);
  },
  open: function(event, ui) {
  }  ,
  autoFocus :true,
}).data("uiAutocomplete")._renderItem = function (ul, item) {
   if($(input).val()==""){newid=item.label}
     else{
       var newid = String(item.label).replace(
         new RegExp(this.term, "gi"),
         "<strong style='color:#F60'>$&</strong>");}
       return $("<li ></li>")
       .data("item.autocomplete", item)
       .append("<a style='width:320px;display: inline-block!important;vertical-align:top'>" + newid + "</a> <a style='width:120px;display: inline-block!important;vertical-align:top'>"+ item.row2 +"</a> <a style='width:300px;display: inline-block!important;vertical-align:top'>"+ item.row3 +"</a> ")
       .appendTo(ul);
     };
   }	;




   function minmax(value, min, max)
   {
    if(parseInt(value) < min || isNaN(value))
      return min;
    else if(parseInt(value) > max)
      return max;
    else return value;
  }

  function create_rowed3(){
   $("#rowed3").jqGrid({
    url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_luotkham&idbenhnhan='+window.idbenhnhan,
    datatype: "json",
    colNames:['<?php lang('tgiandenkham')?>', '<?php lang('tgianketthuc')?>','<?php lang('loaikham')?>', '<?php lang('bslamsang')?>','<?php lang('nggiohtrakqua')?>','<?php lang('datrakqua')?>','<?php lang('idluotkham')?>','<?php lang('thanhtoan')?>'],
    colModel:[
    {name:'ThoiGianDenKham',index:'ThoiGianDenKham'},
    {name:'ThoiGianKTKham',index:'ThoiGianKTKham'},
    {name:'LoaiKham',index:'LoaiKham'},
    {name:'BSLamSang',index:'BSLamSang'},
    {name:'NgayHenTraKQ',index:'NgayHenTraKQ',hidden:true},
    {name:'DaTraKQ',index:'DaTraKQ'},
    {name:'ID_LuotKham',index:'ID_LuotKham'},
    {name:'DaThanhToanBill',index:'DaThanhToanBill'},
    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: 1,
    modal:true,
    rowNum: 500,
    rowList:[],
    sortname: 'ID_Thuoc',
    height: 105,
    width: (($(window).width() / 100 * parseFloat(99)).toFixed(0)),
   viewrecords: true,
    ignoreCase:true,
    shrinkToFit:true,
    pager : '#prowed3',
    cmTemplate: {sortable:false},
    sortorder: "desc",
    caption:"<?php lang('lkganday')?>",
    serializeRowData: function (postdata) {
    },
    onSelectRow: function(id){
    },
    ondblClickRow: function (id, rowIndex, columnIndex) {
     hobn=$('#holot').val();
     tenbn=$('#tenbn').val();
     parent.postMessage("editluotkham;"+$.trim($('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'ID_LuotKham'))+";"+(hobn+' '+tenbn), "*");	
   },
   onRightClickRow: function(rowid, iRow, iCol, e) {      
      $("#rowed3").find('.ui-state-hover').removeClass('ui-state-hover');
      $("#rowed3").find('td.ui-state-highlight').removeClass('ui-state-highlight');
      if ($("#menu").width() + e.pageX > $(document).width()) {
        $("#menu").css('left', e.pageX - $("#menu").width() + "px");
      } else {
        $("#menu").css('left', e.pageX + "px");
      }
      if ($("#menu").height() + e.pageY > $(document).height()) {
        $("#menu").css('top', e.pageY - $("#menu").height() + "px");
      } else {
        $("#menu").css('top', e.pageY + "px");
      }
      window.rowed3_right=rowid;    
      $("#menu").show(100);     
    },
   loadComplete: function(data) {
    ids = $('#rowed3').jqGrid('getDataIDs');
    $('#rowed3').jqGrid('setSelection', ids[0], true);
  },

});

   $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	 $("#rowed3").jqGrid('navGrid',"#prowed3",{add: false, edit: false,addtext:'Thêm BN[F3]',edittext:"<?php lang('sua')?> [F4]", del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
 });
   $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tạo Lượt Khám[F12]", buttonicon: 'ui-icon-document-b',id : 'taoluotkham_rowed3',
    onClickButton: function() {
      var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
      var rowData =  $('#rowed3').getRowData(id_row);
      $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+window.idbenhnhan).done(function(data){
        data = $.trim(data);
        data = data.split(';');
        if(data[1]=='KetThucKham'){
          if(window.idbhyt==0){
           parent.postMessage("taoluotkham;"+window.idbenhnhan+";"+$("#holot").val()+' '+$("#tenbn").val()+";<?=$idhenkham?>", "*");
         }else{
          parent.postMessage("taoluotkham_barcode;"+window.idbenhnhan+";"+$("#holot").val()+' '+$("#tenbn").val()+";"+window.idbhyt, "*");
        }
      }else{
        window.luotkham=data[0];
        window.tenbn=$("#holot").val()+' '+$("#tenbn").val();
        $('#luotkhamtontai').dialog('open');

      }
    })
    },
    title: "Tạo Lượt Khám[F12]",
    position: "last"
  });

   $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('benhan')?>[F6]", buttonicon: 'ui-icon-note',id : 'benhan_rowed3',
    onClickButton: function() {
      var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
      var rowData =  $('#rowed3').getRowData(id_row);
      parent.postMessage('benhan;'+window.idbenhnhan+';'+$("#holot").val()+' '+$("#tenbn").val(), "*");
    },
    title: "<?php lang('benhan')?>[F6]",
    position: "last"
  });
  /*  $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('datlichhen')?>", buttonicon: '',id : 'datlichhen_rowed3',
    onClickButton: function() {
     parent.postMessage("datlichhen;"+window.idbenhnhan+";"+$("#holot").val()+" "+$("#tenbn").val(), "*");
   },
   title: "<?php lang('datlichhen')?>",
   position: "last"
 });
  $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('lichbsy')?>", buttonicon: '',id : 'lichbsy_rowed3',
    onClickButton: function() {
      parent.postMessage("motab_chung;lich_lam_viec", "*");
    },
    title: "<?php lang('lichbsy')?>",
    position: "last"
  });
   $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('htracdinh')?>", buttonicon: '',id : 'htracdinh_rowed3',
    onClickButton: function() {
     var pto="pages.php?module=hanhchinh&view=them_moi_benhnhan&action=hoantrachidinh&type=test&id_form=11&ID_BenhNhan=<?=$tam["idbenhnhan"]?>";
     dialog_main("<?php lang('htracdinh')?>", 100, 100, "56743265743657",pto );
//alert(pto);
},
title: "<?php lang('htracdinh')?>",
position: "last"
});
   $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Hoàn trả thuốc", buttonicon: '',id : 'hoantrathuoc_rowed3',
    onClickButton: function() {
      var pto="pages.php?module=hanhchinh&view=them_moi_benhnhan&action=hoantrathuoc&type=test&id_form=11&ID_BenhNhan=<?=$tam["idbenhnhan"]?>";
      dialog_main("Hoàn trả thuốc | Lưu ý: Một đơn thuốc chỉ được phép hoàn trả một lần", 100, 100, "56743265743657",pto );
//alert(pto);
},
title: "Hoàn trả thuốc",
position: "last"
});
*/
   $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('thutien')?>", buttonicon: '',id : 'thutien_rowed3',
    onClickButton: function() {

     parent.postMessage("open_idbenhnhan;thu_tien;;"+window.idbenhnhan+";;add;"+$("#holot").val()+" "+$("#tenbn").val(), "*");				
   },
   title: "<?php lang('thutien')?>",
   position: "last"
 });
   $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php lang('chitien')?>", buttonicon: '',id : 'chitien_rowed3',
    onClickButton: function() {
     parent.postMessage("open_idbenhnhan;chi_tien;;"+window.idbenhnhan+";;add;"+$("#holot").val()+" "+$("#tenbn").val(), "*");	
   },
   title: "<?php lang('chitien')?>",
   position: "last"
 });
	  $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Edit BH", buttonicon: '',id : 'editbhcc_rowed3',
		onClickButton: function() {
			var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
			var ID_LuotKhamP = jQuery('#rowed3').jqGrid('getCell', selr, 'ID_LuotKham');

		 var pto="pages.php?module=hanhchinh&view=them_moi_benhnhan&action=EditBH&type=test&id_form=163&ID_LuotKham="+ID_LuotKhamP;

		 dialog_main("Edit BH", 95, 95, "56743265743657",pto );



	   },
	   title: "Edit BH",
	   position: "last"
	 });
 }


 function create_rowed4(){
   $("#rowed4").jqGrid({
    url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_lichhenkham&idbenhnhan='+window.idbenhnhan,
    datatype: "json",
    colNames:['<?php lang('giohen')?>', '<?php lang('ngayhen')?>','<?php lang('ndungkham')?>','<?php lang('bsyeucau')?>','<?php lang('trangthai')?>','<?php lang('lichycau')?>'],
    colModel:[
    {name:'giohen',index:'giohen',hidden :false},
    {name:'ngayhen',index:'ngayhen',hidden :false},
    {name:'noidungkham',index:'noidungkham'},
    {name:'bacsyyeucau',index:'bacsyyeucau',hidden :false},
    {name:'trangthai',index:'trangthai',hidden :false},
    {name:'lichyeucau',index:'lichyeucau'},

    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: 1,
    modal:true,
    rowNum: 16,
    rowList:[],
    sortname: 'ID_Thuoc',
    height:(($(window).height()-$("#main_top").height()-265)).toFixed(0),
    width: (($(window).width()) / 100 * parseFloat(99)).toFixed(0),
    viewrecords: true,
    ignoreCase:true,
    shrinkToFit:true,
    pager : '#prowed4',
    cmTemplate: {sortable:false},
    sortorder: "desc",
    caption:"Lịch hẹn khám",
    serializeRowData: function (postdata) {
    },
    onSelectRow: function(id){
    },
    ondblClickRow: function (id, rowIndex, columnIndex) {			
    },
    loadComplete: function(data) {
     if(window.oper=='edit'){
      $.ajax({
       type: 'POST',
       async : false,
       url: 'pages.php?module=hanhchinh&view=them_moi_benhnhan&action=datavantay&idbenhnhan='+window.idbenhnhan,
       success: function(data, status, xhr) {							
        data= $.trim(data);
        if(data==''){
         $("#prowed4 td[title='Đăng ký vân tay']").removeClass('ui-state-disabled');														
       }else{					
         $("#prowed4 td[title='Đăng ký vân tay']").addClass('ui-state-disabled');
       }
     },
   });	
    }
    var ids = $('#rowed4').jqGrid('getDataIDs');
    for(var i=0;i<ids.length;i++){
     var rowData = jQuery('#rowed4').getRowData(ids[i]);
     if(rowData["trangthai"]=="Đã đến hẹn"){
      $('#'+ids).addClass('quathoigian_max')
    }else if((rowData["trangthai"]=="Đã hủy")||(rowData["trangthai"]=="Quá hẹn 12h")){
      $('#'+ids).addClass('dahuy')
    }
  }



},

});
   $("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false,addtext:'Thêm BN[F3]',edittext:"<?php lang('sua')?> [F4]", del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
 });
   $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Tạo Lượt Khám[F12]", buttonicon: 'ui-icon-document-b',id : 'taoluotkham_rowed3',
    onClickButton: function() {
      var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
      var rowData =  $('#rowed3').getRowData(id_row);
      $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+window.idbenhnhan).done(function(data){
        data = $.trim(data);
        data = data.split(';');
        if(data[1]=='KetThucKham'){
          if(window.idbhyt==0){
           parent.postMessage("taoluotkham;"+window.idbenhnhan+";"+$("#holot").val()+' '+$("#tenbn").val()+";<?=$idhenkham?>", "*");
         }else{
          parent.postMessage("taoluotkham_barcode;"+window.idbenhnhan+";"+$("#holot").val()+' '+$("#tenbn").val()+";"+window.idbhyt, "*");
        }
      }else{
        window.luotkham=data[0];
        window.tenbn=$("#holot").val()+' '+$("#tenbn").val();
        $('#luotkhamtontai').dialog('open');

      }
    })
    },
    title: "Tạo Lượt Khám[F12]",
    position: "last"
  });

   $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "<?php lang('benhan')?>[F6]", buttonicon: 'ui-icon-note',id : 'benhan_rowed3',
    onClickButton: function() {
      var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
      var rowData =  $('#rowed3').getRowData(id_row);
      parent.postMessage('benhan;'+window.idbenhnhan+';'+$("#holot").val()+' '+$("#tenbn").val(), "*");
    },
    title: "<?php lang('benhan')?>[F6]",
    position: "last"
  });
   $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "<?php lang('datlichhen')?>", buttonicon: '',id : 'datlichhen_rowed3',
    onClickButton: function() {
     parent.postMessage("datlichhen;"+window.idbenhnhan+";"+$("#holot").val()+" "+$("#tenbn").val(), "*");
   },
   title: "<?php lang('datlichhen')?>",
   position: "last"
 });
   $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "<?php lang('lichbsy')?>", buttonicon: '',id : 'lichbsy_rowed3',
    onClickButton: function() {
      parent.postMessage("motab_chung;lich_lam_viec", "*");
    },
    title: "<?php lang('lichbsy')?>",
    position: "last"
  });
   $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "<?php lang('htracdinh')?>", buttonicon: '',id : 'htracdinh_rowed3',
    onClickButton: function() {
     var pto="pages.php?module=hanhchinh&view=them_moi_benhnhan&action=hoantrachidinh&type=test&id_form=11&ID_BenhNhan=<?=$tam["idbenhnhan"]?>";
     dialog_main("<?php lang('htracdinh')?>", 100, 100, "56743265743657",pto );
//alert(pto);
},
title: "<?php lang('htracdinh')?>",
position: "last"
});
   $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Hoàn trả thuốc", buttonicon: '',id : 'hoantrathuoc_rowed3',
    onClickButton: function() {
      var pto="pages.php?module=hanhchinh&view=them_moi_benhnhan&action=hoantrathuoc&type=test&id_form=11&ID_BenhNhan=<?=$tam["idbenhnhan"]?>";
      dialog_main("Hoàn trả thuốc | Lưu ý: Một đơn thuốc chỉ được phép hoàn trả một lần", 100, 100, "56743265743657",pto );
//alert(pto);
},
title: "Hoàn trả thuốc",
position: "last"
});
   $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "<?php lang('thutien')?>", buttonicon: '',id : 'thutien_rowed3',
    onClickButton: function() {

     parent.postMessage("open_idbenhnhan;thu_tien;;"+window.idbenhnhan+";;add;"+$("#holot").val()+" "+$("#tenbn").val(), "*");				
   },
   title: "<?php lang('thutien')?>",
   position: "last"
 });
   $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "<?php lang('chitien')?>", buttonicon: '',id : 'chitien_rowed3',
    onClickButton: function() {
     parent.postMessage("open_idbenhnhan;chi_tien;;"+window.idbenhnhan+";;add;"+$("#holot").val()+" "+$("#tenbn").val(), "*");	
   },
   title: "<?php lang('chitien')?>",
   position: "last"
 });
	  $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Edit BH", buttonicon: '',id : 'editbhcc_rowed3',
		onClickButton: function() {
			var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
			var ID_LuotKhamP = jQuery('#rowed3').jqGrid('getCell', selr, 'ID_LuotKham');

		 var pto="pages.php?module=hanhchinh&view=them_moi_benhnhan&action=EditBH&type=test&id_form=163&ID_LuotKham="+ID_LuotKhamP;

		 dialog_main("Edit BH", 95, 95, "56743265743657",pto );



	   },
	   title: "Edit BH",
	   position: "last"
	 });
      }
      function dialog_benhnhi(title, width, height, elem, links,form) {
       $("body").append("<div class='ui-jqdialog modal" + elem + "'>Bệnh nhi phải đầy đủ ngày tháng năm sinh </div>");
       if (String(width).match(/px/g)==null){
         width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);
       }else{
        width=String(width).replace("px","")
      };
      if (String(height).match(/px/g)==null){
       height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
     }else{
       height=String(height).replace("px","")
     };
     $(".modal" + elem).dialog({
      height: height,
      width: width,
      modal: true,
      title: title,
      draggable: true,
      resizable: false,
      stack: false,
      buttons: {
       "ok": function() {
         $( this ).dialog( "close" );
       }
     },
     beforeClose: function( event, ui ) {
     },
     close: function(event, ui) {
       $(this).dialog( "close" );
       $(this).remove();
       window.kiemtra_popup=false;
       $('#ngaysinh').focus();
     },
     hide: {
      effect: "fadeOut",
      duration: 500,
    },
    open: function(event, ui) {
     window.kiemtra_popup=true;
   },
 });

   }
   function monthDiff(d1, d2) {
    var months;
    months = (d2.getFullYear() - d1.getFullYear()) * 12;
    months -= d1.getMonth() ;
    months += d2.getMonth()+1;
    return months <= 0 ? 0 : months;
  }
  function yeatDiff(d1, d2) {
    var months;
    months = (d2.getFullYear() - d1.getFullYear()) ;
    return months <= 0 ? 0 : months;
  }
  function callback (){
  }
  function create_congty(elem, datalocal) {
    datalocal = jQuery.parseJSON(datalocal);
    $(elem).jqGrid({
      datastr: datalocal,
      datatype: "jsonstring",
      colNames: ['Tên công ty', 'Mã viết tắt'],
      colModel: [
      {name: 'tencongty', index: 'tencongty', hidden: false},
      {name: 'maviettat', index: 'maviettat', hidden: false},
      ],
      hidegrid: false,
      gridview: true,
      loadonce: true,
      scroll: false,
      modal: true,
      rowNum: 200000,
      rowList: [],
      height: 250,
      width: 470,
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
      },
    });
    $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
    $(elem).jqGrid('bindKeys', {});
  }
  function refresh_images(){
    $.getJSON( 'file_manager/php/connector.php?answer=42&tenthumuc='+_folder_name+'&cmd=search&q='+search_string+'&_=1387364774212',
      function( data ) {
        if(data["files"].length==0){
         $("#total_images").val(data["files"].length);
			//alert("1");
		}else{
		 	//total_image=data["files"][data["files"].length-1]["name"].split("_");
			//total_image1=total_image[3].split(".");
		 	//$("#total_images").val(total_image1[0]);
			//alert(data["files"][data["files"].length-1]["name"]);
			total_image=data["files"][data["files"].length-1]["name"];
			$("#hinh_benhnhan").attr("src","<?=$_SESSION["config_system"]["URL"]?>file_manager/php/connector.php?answer=42&tenthumuc="+_folder_name+"&cmd=file&target=f1_" + encode64(total_image));
		}
	});
  }
  function check_folder_exist(){
   var _tam=_folder_name.split("//");
   $.getJSON( 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name,
    function( data ){
      if (data["error"]=="errConf,errNoVolumes"){
        $.get( 'file_manager/php/connector.php?answer=42&tenthumuc='+_tam[0]+'&cmd=mkdir&name='+_tam[1]+'&target=f1_XA&_=1387301727041',
          function( data ){
          });
      }else{

      }
    });
 }

 function trangthai(trangthai){
   if(trangthai=='disable'){

    $("input").prop('disabled', true);
    $("#sua").button('enable');
    $("#save_data").button('disable');
    $('.custom-combobox-toggle').button('disable');
		//$('#quanhuyen,#tinhthanh').prop('disabled', true);
	}else{

		$("input").prop('disabled', false);
		$("#sua").button('disable');
		$("#save_data").button('enable');
		$('.custom-combobox-toggle').button('enable');
		//('#quanhuyen,#tinhthanh').prop('disabled', true);
	}
}

function create_grid1() {      
  $("#table_dsbill").jqGrid({
    data:[],
    datatype: "local",
    colNames: ['Ngày lập phiếu','Số phiếu','Diễn giải','Nợ đầu ký','Tổng phát sinh','Tiền miễn giảm','BHYT','Hỗ trợ','BHCC','<?php lang('thanhtoan')?>','<?php lang('nocuoi')?>','',''],
    colModel: [			
    {name: 'NgayGio', index: 'NgayGio', width: "10%", editable: false, align: 'left'},
    {name: 'MaPhieu', index: 'MaPhieu', search: true, width: "10%", editable: false, align: 'left'},
    {name: 'GhiChu',  index: 'GhiChu', search: false, width: "10%", editable: false, align: 'left'},
    {name: 'NoCu', index: 'NoCu', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'TongTienPhaiTra', index: 'TongTienPhaiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'GiamGia', index: 'GiamGia', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'TongTienBHYTChiTra', index: 'TongTienBHYTChiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'HoTroTuBenhVien', index: 'HoTroTuBenhVien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'TongTienBHCCTra', index: 'TongTienBHCCTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'SoTienThanhToan', index: 'SoTienThanhToan', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
    {name: 'Nomoi',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
    {name:'LoaiThanhToan',index:'LoaiThanhToan',hidden:true},		
    {name:'ID_BenhAnNoiTru',index:'ID_BenhAnNoiTru',hidden:true},			
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
    onSelectRow: function(rowId) {
    },
    ondblClickRow: function(rowId) {

     rowData = $("#table_dsbill").getRowData(rowId);
     var id_benhnhan = window.idbenhnhan;
     var MaBenhNhan = $("#mabn1").text();
     var TenBenhNhan = $("#holot").val()+' '+$("#tenbn").val();

					//alert(rowData['LoaiThanhToan']);
          if(rowData['LoaiThanhToan']=='ThanhToanLuotKham' && $.trim(rowData['ID_BenhAnNoiTru'])==''){
					// if(rowData['LoaiDoiTuongKham']=='BHYT'){						
            parent.postMessage('thutrano_edit;ngoaitru_bhyt;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
					// }else{
					//	   parent.postMessage('thutrano_edit;chitietthungan;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
					// }

       }
       else if(rowData['LoaiThanhToan']=='ThanhToanLuotKham' && $.trim(rowData['ID_BenhAnNoiTru'])!=''){
					 // if(rowData['LoaiDoiTuongKham']=='BHYT'){						
            parent.postMessage('thutrano_edit;noitru_bhyt;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
					// }else{
					//	 parent.postMessage('thutrano_edit;thanhtoannoitru;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
					// }

       }


     },
     onselect: function(rowId, rowIndex, columnIndex) {},
     onRightClickRow: function(rowid, iRow, iCol, e) {

     },
     loadComplete: function(data) {      

     },

   });
}

function create_grid2() {      
  $("#table_dsthongtin").jqGrid({
    data:[],
    datatype: "local",
    colNames: ['Ngày lập phiếu','Số phiếu','Diễn giải','Nợ đầu ký','Tổng phát sinh','Tiền miễn giảm','BHYT','Hỗ trợ','BHCC','<?php lang('thanhtoan')?>','<?php lang('nocuoi')?>','',''],
    colModel: [			
    {name: 'NgayGio', index: 'NgayGio', width: "10%", editable: false, align: 'left'},
    {name: 'MaPhieu', index: 'MaPhieu', search: true, width: "10%", editable: false, align: 'left'},
    {name: 'GhiChu',  index: 'GhiChu', search: false, width: "10%", editable: false, align: 'left'},
    {name: 'NoCu', index: 'NoCu', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'TongTienPhaiTra', index: 'TongTienPhaiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'GiamGia', index: 'GiamGia', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'TongTienBHYTChiTra', index: 'TongTienBHYTChiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'HoTroTuBenhVien', index: 'HoTroTuBenhVien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'TongTienBHCCTra', index: 'TongTienBHCCTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'SoTienThanhToan', index: 'SoTienThanhToan', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
    {name: 'Nomoi',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
    {name:'LoaiThanhToan',index:'LoaiThanhToan',hidden:true},		
    {name:'ID_BenhAnNoiTru',index:'ID_BenhAnNoiTru',hidden:true},
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
    },            
  });
}

function create_Dm_xaphuong(elem,datalocal){
  datalocal=jQuery.parseJSON(datalocal);
  $(elem).jqGrid({
    datastr:datalocal,
    datatype: "jsonstring" ,
    colNames:['<?php lang('xaphuong')?>', '<?php lang('quan')?>','<?php lang('tinhthanh')?>','',''],
    colModel:[
    {name:'label',index:'label',hidden :false},
    {name:'TenQuanHuyen',index:'TenQuanHuyen',hidden :false},
    {name:'TenTinhThanhPho',index:'TenTinhThanhPho'},
    {name:'ID_QuanHuyen',index:'ID_QuanHuyen',hidden :true},
    {name:'ID_ThanhPho',index:'ID_ThanhPho',hidden :true},
    ],		
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,
    rowNum: 50,
    modal: true,	
    height:300,
    width:400,	
    shrinkToFit:true,	
    ignoreCase: true,	
    serializeRowData: function (postdata) {
    },
    onSelectRow: function(rowId){		
     if($(elem).data('clicked')){
      rowData = $(elem).getRowData(rowId);				

      $('#quanhuyen_hidden').val(rowData['ID_QuanHuyen']);
      $('#tinhthanh_hidden').val(rowData['ID_ThanhPho']);
      $('#quanhuyen').val(rowData['TenQuanHuyen']);
      $('#tinhthanh').val(rowData['TenTinhThanhPho']);

				//setval_new('#quanhuyen',rowData['ID_QuanHuyen']); 
				//setval_new('#tinhthanh',rowData['ID_ThanhPho']); 
				$(elem).data('clicked', false);
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

function create_Dm_quanhuyen(elem,datalocal){
  datalocal=jQuery.parseJSON(datalocal);
  $(elem).jqGrid({
    datastr:datalocal,
    datatype: "jsonstring" ,
    colNames:['<?php lang('quan')?>','<?php lang('tinhthanh')?>',''],
    colModel:[			
    {name:'TenQuanHuyen',index:'TenQuanHuyen',hidden :false},
    {name:'TenTinhThanhPho',index:'TenTinhThanhPho'},
    {name:'ID_ThanhPho',index:'ID_ThanhPho',hidden :true},
    ],		
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,
    modal: true,
    rowNum: 100,	
    height:300,
    width:400,	
    shrinkToFit:true,	
    ignoreCase: true,	
    serializeRowData: function (postdata) {
    },
    onSelectRow: function(rowId){
     if($(elem).data('clicked')){	
      rowData = $(elem).getRowData(rowId);

      $('#xaphuong_hidden').val(0);				
      $('#xaphuong').val('');			
      $('#tinhthanh_hidden').val(rowData['ID_ThanhPho']);				
      $('#tinhthanh').val(rowData['TenTinhThanhPho']);

      $(elem).data('clicked', false);
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

function create_Dm_tinhthanh(elem,datalocal){
  datalocal=jQuery.parseJSON(datalocal);
  $(elem).jqGrid({
    datastr:datalocal,
    datatype: "jsonstring" ,
    colNames:['<?php lang('tinhthanh')?>'],
    colModel:[		
    {name:'TenTinhThanhPho',index:'TenTinhThanhPho'},
    ],		
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,
    modal: true,	
    height:300,
    rowNum: 100,
    width:400,	
    shrinkToFit:true,	
    ignoreCase: true,	
    serializeRowData: function (postdata) {
    },
    onSelectRow: function(rowId){					
     if($(elem).data('clicked')){
      rowData = $(elem).getRowData(rowId);
      $('#xaphuong_hidden').val(0);				
      $('#xaphuong').val('');			 		
      $('#quanhuyen_hidden').val(0);				
      $('#quanhuyen').val('');				
      $(elem).data('clicked', false);						
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
function barcode_callback(barcode){
	
	if(window.oper=='add'){
		
		barcode=$.trim(barcode);
		res=barcode.split('|');
		hoten_barcode=	$.trim(convertHexToString(res[1]));
		hoten_barcode= hoten_barcode.split(" ");
		ho_barcode="";
		ten_barcode=hoten_barcode[hoten_barcode.length-1];
		for(var i=0;i<hoten_barcode.length-1;i++){
			ho_barcode=ho_barcode+' '+hoten_barcode[i];
		}
		$("#holot").val(ho_barcode);
		$("#tenbn").val(ten_barcode);
		if(res[3]=="1"){
			$("#nam").click();
		}else{
			$("#nu").click();
		}
		namsinh_barcode= $.trim(res[2]);
		namsinh_barcode=namsinh_barcode.split("/");
		$("#namsinh").val(namsinh_barcode[namsinh_barcode.length-1]);
		$("#ngaysinh").val(namsinh_barcode[namsinh_barcode.length-2]);
		$("#thangsinh").val(namsinh_barcode[namsinh_barcode.length-3]);			
		diahchi_barcode=$.trim(convertHexToString(res[4]));	
		$("#sonha").val(diahchi_barcode);
	}	
};




function create_rowed_finger(){
 $("#rowed_finger").jqGrid({
  url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_luotkham&idbenhnhan='+window.idbenhnhan,
  datatype: "json",
  colNames:['Tên ngón', ''],
  colModel:[
  {name:'label',index:'label'},
  {name:'TenQuanHuyen',index:'TenQuanHuyen'},

  ],
  hidegrid: false,
  gridview: true,
  loadonce: true,
  scroll: false,
  modal:true,
  rowNum: 500,
		 rowList: [],        // disable page size dropdown
    pgbuttons: false,     // disable page control like next, back button
    pgtext: null,         // disable pager text like 'Page 0 of 10'
    viewrecords: false ,
    sortname: 'ID_Thuoc',
    height: 145,
    width: 200,
    viewrecords: false,
    ignoreCase:true,
    shrinkToFit:true,
    cmTemplate: {sortable:false},
    pager : '#prowed_finger',
    sortorder: "desc",
    caption:"Vân tay",
    serializeRowData: function (postdata) {
    },
    onSelectRow: function(id){
    },
    ondblClickRow: function (id, rowIndex, columnIndex) {	
    },
    loadComplete: function(data) {

    },

  });

 $("#rowed_finger").jqGrid('navGrid',"#prowed_finger",{add: false, edit: true,edittext:"<?php lang('sua')?> [F4]", del: false,refresh:false, search:false});
 $("#rowed_finger").jqGrid('navButtonAdd', '#prowed_finger', {caption: "Thêm mới", buttonicon: 'ui-icon-plus',
  onClickButton: function() {
    $("#text_finger").html("đặt ngón tay lên máy 3 lần lần 1");
    parent.postMessage("dkvantay;"+window.idbenhnhan+";<?=$_SESSION['user']['id_user']?>", "*");
    $("#dialog_finger").dialog("open");
  },
  title: "Thêm mới",
  position: "last"
});	
}

function savemembercard(){
  str=$("#mathe").val();
  attr_mathe=$("#mathe").attr("mathe");
  if(str!=''){
    fisrtstr = str.substring(0, 3);
      //alert(res);
     // alert(fisrtstr)
     if(fisrtstr!='FAM'){
     // alert("Mã thẻ không hợp lệ 1");
     window.member_duocluu=0;
   }else if(str.length!=13){
      //alert("Mã thẻ không hợp lệ 2");
      window.member_duocluu=0;
    }else{
      window.member_duocluu=1;
      if(attr_mathe!="" && attr_mathe!=str){
        window.member_duocluu=2;
      }
    }
  }else{
    window.member_duocluu=1;
    if(attr_mathe!="" && attr_mathe!=str){
      window.member_duocluu=2;
    }
  }
  
  
  if(window.member_duocluu==1 || window.member_duocluu==2){
    emrhienthongbao('Đang lưu...');
    $.ajax({
      url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_membercard&oper=check",
      type : "post",
      dateType:"text",
      data : {
        SoTheThanhVien: $("#mathe").val()
      },
      success : function (result){
        data=$.parseJSON(result);
         // data['SoTheThanhVien']
         if(data['ID_BenhNhan']==0){
           if(window.member_duocluu==1){
            $.ajax({
              url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_membercard&oper=save",
              type : "post",
              dateType:"text",
              data : {
                idbenhnhan : window.idbenhnhan,
                SoTheThanhVien: $("#mathe").val()
              },
              success : function (result){
                    // data=$.parseJSON(result);
                    tooltip_message("Lưu thành công");
                    $( "#dialog-member-card" ).dialog( "close" );
                    getinfomember();
                    emr_chudoimau("viewmathe");
                    emrhienthongbao('');
                  }
                });
          }else if(window.member_duocluu==2){
            if($("#mathe").val()==''){
              var cf=confirm("Hiện tại bệnh nhân đang có thẻ "+$("#mathe").attr("mathe")+". Bạn chắc chắn muốn hủy thẻ này?");
            }else{
              var cf=confirm("Hiện tại bệnh nhân đang có thẻ "+$("#mathe").attr("mathe")+". Bạn chắc chắn muốn thay đổi thành thẻ mới?");
            }
            
            if(cf===true){
              $.ajax({
                url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_membercard&oper=save",
                type : "post",
                dateType:"text",
                data : {
                  idbenhnhan : window.idbenhnhan,
                  SoTheThanhVien: $("#mathe").val()
                },
                success : function (result){
                      //  data=$.parseJSON(result);
                      tooltip_message("Lưu thành công");
                      $( "#dialog-member-card" ).dialog( "close" );
                      getinfomember();
                      emr_chudoimau("viewmathe");
                      emrhienthongbao('');
                    }
                  });
            }else{
              emrhienthongbao('');
            }
          }
        }else{
          alert("Thẻ này đã áp cho bệnh nhân "+data['HoTenBenhNhan']+" (ID: "+data['MaBenhNhan']+")");
          $("#mathe").select();
          emrhienthongbao('');
        }
      }
    });
  }else{
    alert("Thẻ không hợp lệ");
  }
}

function getinfomember(){
	if(parseInt(window.idbenhnhan)>0){
   $.ajax({
    url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_membercard&oper=getthe",
    type : "post",
    dateType:"text",
    data : {
     idbenhnhan : window.idbenhnhan
   },
   success : function (result){
     data=$.parseJSON(result);
     $("#viewmathe").html(data['SoTheThanhVien']);
     $("#viewtrangthaimathe").html(data['TrangThai']);
     $("#viewsodiem").html('<span style="font-weight:bold;">'+data['DiemSoDuHienTai']+'</span>&nbsp;điểm');
     $("#viewhang").html('<span style="font-weight:bold;">'+data['TenHangThe']+'</span>');
   }
 });
 }
 
}

function emr_chudoimau(id){
  $("#"+id).addClass("maunoichu");
  setTimeout(function(e){
    $("#"+id).removeClass("maunoichu");
  },5000);
}


function funSoTuoi(){
	var namsinh =  $("#namsinh").val();
    var thangsinh =  $("#thangsinh").val();
    var ngaysinh =  $("#ngaysinh").val();
    if(!isNaN(namsinh) && $.trim(namsinh)!='' && namsinh.length==4 )	{
      var d = new Date();
      $("#sotuoi").val(d.getFullYear()-namsinh)
      if(ngaysinh.length>0&&thangsinh.length>0 &&$.trim(thangsinh)!=''&&$.trim(ngaysinh)!=''){
        var lastDay = new Date(namsinh, thangsinh , 0);
        if(ngaysinh>lastDay.getDate()){
          $("#ngaysinh").val(lastDay.getDate());
        }

      }
    }
}

function xulychucaidau(input_text)
{
 do
 { 
 
  input_text=input_text.trim()+" "; 
  input_text=input_text.replace(/\s+s*/g," ");
  var tkiem=input_text.search(" ");
 }
 while(input_text.length==0 || tkiem==-1)
 return input_text.trim();
 
 }
 function viethoachucaidau(input_text){
   String.prototype.UpperCase = function () {
      return this.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
  }; 
  return xulychucaidau(input_text).UpperCase();
  
 }
</script>