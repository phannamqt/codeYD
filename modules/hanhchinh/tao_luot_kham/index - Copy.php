<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->

<html>
<style type="text/css">
#doituong1,#trangthai1{
	width:200px!important;
}

#dm_bhyt td,#dm_bhcc td  {
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
	background-color: lightyellow !important; 
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

table.ttbh {
  border-collapse: collapse;
}

table.ttbh,table.ttbh td,table.ttbh th {
  border: 1px solid black;
}
</style>

<body>
<fieldset>
<legend style="font-weight:700;">THÔNG TIN BỆNH NHÂN</legend>
        <div class="patient_info">       
        </div>
</fieldset>

 
 <br><br>
<fieldset>
<legend style="font-weight:700;">THÔNG TIN LƯỢT KHÁM</legend>
     	 <div id="container" style="height: 360px;">  
<div class="form_row" style="vertical-align:top; width: 300px;"  >    
<div>
        <label for="phanloai"  style="width:150px;text-align:left">Phân loại khám </label>
        <input id="phanloai" kiemtra="trong"  type="text" name="phanloai" style="width:100px" tabindex="1">        
        </div>
        <div style=""><label for="goikham"  style="width:150px;text-align:left">Gói khám sức khỏe </label>
        <input id="goikham" name="goikham"   type="text" style="width:100px;" tabindex="2x" >
        </div>
        <div style=" "><label for="doituong"  style="width:150px;text-align:left">Đối tượng khám </label>
         <!-- <select id="doituong"  name="doituong" style="width:200px;display:none" >
           <option value="Viện phí">Viện phí</option>
           <option value="BHYT">Bảo hiểm y tế</option>
          </select>-->
         <input id="doituong" name="doituong"   type="text" style="width:100px;" tabindex="31" >
        </div>
        <div>
        <label for="bsyeucau"  style="width:150px;text-align:left">BS được BN yêu cầu </label>
       	 <input id="bsyeucau" name="bsyeucau"   type="text" style="width:100px;" tabindex="2"></div>
        <div style="display:none;">
        <label for="nguoichidinh"  style="width:150px;text-align:left">Người chỉ định  </label>
        <input id="nguoichidinh" name="nguoichidinh"   type="text" style="width:100px;" tabindex="311">
        </div>
        <div>
			<label for="nguoilapphieu"  style="width:150px;text-align:left">Người lập phiếu </label>
			<input id="nguoilapphieu" name="nguoilapphieu"   type="text" style="width:100px;" tabindex="3">
		</div>
		<div style="display:none;">
			<label for="BNGioiThieu"  style="width:150px;text-align:left">Người giới thiệu </label>
			<input id="BNGioiThieu" name="BNGioiThieu"   type="text" style="width:100px;" tabindex="4"></div>
		
        <div style="display:none;">
        <label for="nguoigioithieu"  style="width:150px;text-align:left">Người giới thiệu 2</label>
        <input id="nguoigioithieu" name="nguoigioithieu"   type="text" style="width:100px;" tabindex="23"></div>
        <div style=" ">
  <!--   <select id="trangthai"  name="trangthai" style="width:200px;display:none" >
         <option value="1">Đúng tuyến</option>
         <option value="2">Có giấy chuyển viện</option>
         <option value="3">Vượt tuyến</option>           
         <option value="4">Cấp cứu</option>
          </select>-->
        <label for="trangthai"  style="width:150px;text-align:left;">Trạng thái lúc nhập viện </label>
        <input id="trangthai" name="trangthai"   type="text" style="width:100px;" tabindex="1111">
        </div>
        <div style="display:none;">
        <label for="pbvatly"  style="width:150px;text-align:left">Phòng ban vật lý</label>
        <input id="pbvatly" name="pbvatly"   type="text" style="width:100px;" tabindex="9333">
        </div>
        <div style="display:none;"><label for="hinhthuc"  style="width:150px;text-align:left">Hình thức đến </label>
        <input id="hinhthuc" name="hinhthuc"   type="text" style="width:100px;" tabindex="1220"></div>
        <div>
        <label for="ngay"  style="width:150px;text-align:left">Ngày giờ đến  khám </label>
       <input id="ngay" name="ngay"   type="text" style="width:100px;" disabled> <!--<input id="gio" name="gio" disabled  type="text" style="width:72px;margin-left:10px">-->
       </div>
       <div style="display:none;">
        <label for="tang"  style="width:150px;text-align:left">Tầng </label>
        <input id="tang" name="tang"   type="text" style="width:100px;" tabindex="12221">
        </div>

        <div  style="display:none;">
        <label for="sothutu"  style="width:150px;text-align:left">Số thứ tự </label>
        <input id="sothutu" name="sothutu" type="text" style="width:100px;" tabindex="12222" maxlength="4">
         <button id="btn_laysothu" style="height: 23px; width: 27px;margin-left: -3px; margin-top: -2px;" title="Lấy số thứ tự mới"><span class="ui-icon ui-icon-refresh n-cus-icon"></span></button>
        </div>

    	 <div ><label for="dhsinhton" style="width:147px;text-align:left;margin-top:-10px!important; display:inline-block!important;">Lấy dấu hiệu sinh tồn </label> <input id="dhsinhton" name="dhsinhton" type="checkbox" value="1" tabindex="5" checked></div>
        <div  style="display:none"><input id="comat" name="comat" checked style="width:200px;display:none"   type="checkbox" value="1"  tabindex="14"><label for="comat"   style="width:150px;text-align:left;display:none">Đã có mặt </label></div>
        <div style="display:block;" ><label for="nhanthan"  style="width:150px;text-align:left;margin-top:-10px!important; display:inline-block!important;">Xác định nhân thân </label><input id="nhanthan" name="nhanthan"   type="checkbox" value="1"  tabindex="15"></div>
        <div style="height: 5px;"><input id="lamsang" name="lamsang"  style="width:200px;display:none"  type="text"  ></div>
</div>
    <div class="n-bhyt" style="display:inline-block;margin-left:0px!important;">
		 <fieldset>
               <legend>Thẻ BHYT</legend>
			<div style="width:450px;height:150px">
					<table id="dm_bhyt" ></table>
			</div>
            <div class="form_row" style="vertical-align:top"  id="container_bhyt" >
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
					<input disabled id="doituongbhyt1" type="text" style="width:216px;margin-left:30px;display:none"> 
					<label for="ID_KhuVuc" style="width:100px;margin-left:30px ">Khu vực</label>
					<input id="ID_KhuVuc" kiemtra="trong" type="text" style="width:80px" name="ID_KhuVuc">
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
				<label for="hsdden" style="width:120px; ">đến</label>
				<input id="hsdden" kiemtra="trong" type="text" style="width:80px;" name="hsdden"> 
				</div> 
				<div style="margin-top:2px;">

				<label for="NgayDu5Nam" style="width:120px; ">Ngày đủ 5 năm</label>
				<input id="NgayDu5Nam" kiemtra="trong" type="text" style="width:80px;" name="NgayDu5Nam"> 
				<label for="NgayMienCungChiTra" style="width:120px; ">Miễn cùng chi trả</label>
				<input id="NgayMienCungChiTra" kiemtra="trong" type="text" style="width:80px;" name="NgayMienCungChiTra">   
				</div> 
				</span>
           	  
				<div>
					<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="new_bhyt" href="#">Thêm mới<span  class="ui-icon ui-icon-plusthick"></span></a>
					<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="edit_bhyt" href="#">Sửa<span  class="ui-icon ui-icon-pencil"></span></a>
					<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="save_bhyt" href="#">Lưu<span  class="ui-icon ui-icon-disk"></span></a>
					<a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="chon_bhyt" href="#">Chọn thẻ<span  class="ui-icon ui-icon-check"></span></a>
				</div>
             
       	   </div>
		    </fieldset>
    </div>
	<div class="n-bhyt" style="display:inline-block;margin-left:0px!important;">
		 <fieldset>
               <legend>Kết quả thông tin truy vấn từ cổng</legend>
			    <div class="bhyt_info" id="bhyt_info" style="width:525px;height:328px;vertical-align:top"></div>
	
	</fieldset>
    </div>
    
    <div class="n-bhcc" style="display:inline-block;margin-left:5px!important; display:none;">
		<div style="width:490px;height:150px">
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
        <a bindex="1" tabindex="6" style="margin-left:0px; margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="save" href="#">Lưu<span  class="ui-icon ui-icon-disk"></span></a>
        <a bindex="2" tabindex="7"  style="margin-left:0px; margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="thuchien" href="#">Đã thực hiện<span  class="ui-icon ui-icon-bullet"></span></a>
        <a bindex="3" tabindex="8" style="margin-left:0px; margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all  fm-button-icon-left" id="chinhsua" href="#">Chỉnh sửa<span  class="ui-icon ui-icon-pencil"></span></a>
        <a bindex="4" style="margin-left:0px;   margin-bottom:1px; display:none;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="inphieu" href="#">In phiếuxxx<span  class="ui-icon ui-icon-print"></span></a>
        <a bindex="5" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="xemvain" href="#">In phiếu<span  class="ui-icon ui-icon-print"></span></a>        
        <a bindex="6" style="margin-left:0px;   margin-bottom:1px; display:none;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="inphieudecal" href="#">In nhãn gọi loa<span  class="ui-icon ui-icon-print"></span></a>
        <a bindex="7" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="tamthu" href="#">Tạm thu<span  class="ui-icon ui-icon-document-b"></span></a>
        <a bindex="8" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="dhsinhton1" href="#">Lấy dấu hiệu sinh tồn<span  class="ui-icon ui-icon-image"></span></a>
        <a bindex="9" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="chisinh" href="#">Chỉ định CLS<span  class="ui-icon ui-icon-document"></span></a>
        <a bindex="10" style="margin-left:0px;   margin-bottom:1px; display:none;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="hentrakq" href="#">Hẹn trả KQ<span  class="ui-icon  ui-icon-calendar"></span></a>
 		<a bindex="11" style="margin-left:0px;   margin-bottom:1px; display:none;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="lichbacsy" href="#">Lịch Bác sĩ<span  class="ui-icon ui-icon-calculator"></span></a>    
       <a bindex="5" style="margin-left:0px;   margin-bottom:1px; display:none;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="xemingl" href="#">In phiếu gọi loa<span  class="ui-icon ui-icon-print"></span></a>  
    	
     </div> 
</fieldset>

</body>
</html> 

<script type="text/javascript">
window.dem=0;
window.barcode_bhyt=0;
var alphaOnly = /[A-Za-z]/g;
var digitsOnly = /[1234567890]/g;

<?php

if(isset($_GET['idbhyt'])){
		$idbhyt=$_GET['idbhyt'];
	}else{
		$idbhyt=0;
	}
	if(!isset($_GET["oper"])){
		$_GET["oper"]='add';
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
				$idhenkham=$tam2[0]["ID_HenKham"];
					echo 'var BSYeuCau="'.$tam2[0]["ID_BSYeuCau"].'";';	
			}else{
				$idhenkham=0;
					echo 'var BSYeuCau="0";';	
			}
			echo 'window.id_benhnhan="'.$_GET["id_benhnhan"].'";';
			echo 'window.idluotkham="0";';	
			
			echo 'window.LoaiDoiTuongKham="Viện phí";';	
			echo 'var ID_GoiKhamChoCongTy="0";';	
			echo 'var ID_PhanLoaiKham="0";';	
			echo 'var CoXacDinhNhanThan="0";';
			echo 'var ID_NguoiThucHien="'.$_SESSION["user"]["id_user"].'";';	
			echo 'var ThoiGianVaoKham="0";';	
			echo '$("#ngay").val("'. date("H").':'.date("i").' '.date("d").'/'.date("m").'/'.date("Y").'");';
			echo 'var BSLamSang="0";';	
			echo 'var SanSangGoiVaoKham="1";';	
			echo 'var ID_NoiGioiThieu="0";';	
			echo 'var sothutu="";';  
			echo 'var ID_HinhThucDen="0";';
			echo 'var LayDauHieuSinhTon="1";';
			echo 'var CoKhamLamSang="0";';
			echo 'var ID_PhongKhamVatLy="0";';
			echo 'window.ID_TrangThai="0";';
			echo 'window.ID_Tang="0";';
			echo 'window.id_bhyt="0";';
			echo 'window.id_bhyt_new="0";';
			echo 'window.id_bhcc="0";';
			echo 'window.id_bhcc_new="0";';
			echo 'window.id_bhcc_tam="0";';
			echo 'window.TrangThaiKham="0";';
			echo 'window.DaThanhToanBill="0";';
			echo 'window.BNGioiThieu="";';
			
		}else{
			echo 'window.id_ttluotkham="'.$_GET["id_ttluotkham"].'";';		
			$idhenkham=0;
			$params=array($_GET["id_ttluotkham"]);
			$get=$data->query( "{call Gd2_ThongTinLuotKham_SelectAllByID_LuotKham(?)}", $params);
			$excute= new SQLServerResult($get);
			$tam= $excute->get_as_array();
			//print_r($tam);ngay
			echo 'window.idluotkham="'.$tam[0]['ID_LuotKham'].'";';	
			echo 'window.id_benhnhan="'.$tam[0]['ID_BenhNhan'].'";';		
			echo 'window.LoaiDoiTuongKham="'.$tam[0]['LoaiDoiTuongKham'].'";';	
			echo 'var ID_GoiKhamChoCongTy="'.$tam[0]['ID_GoiKhamChoCongTy'].'";';	
			echo 'var ID_PhanLoaiKham="'.$tam[0]['ID_PhanLoaiKham'].'";';	
			echo 'var CoXacDinhNhanThan="'.$tam[0]['CoXacDinhNhanThan'].'";';
			echo 'var ID_NguoiThucHien="'.$tam[0]['ID_NguoiThucHien'].'";';	
			echo 'var ThoiGianVaoKham="'.$tam[0]['ThoiGianVaoKham']->format('d/m/y H:i').'";';	
			echo '$("#ngay").val("'.$tam[0]['ThoiGianVaoKham']->format('d/m/Y H:i').'");';
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
			echo 'window.id_bhcc="'.$tam[0]['ID_TheBHCC'].'";';
			echo 'window.id_bhcc_new="'.$tam[0]['ID_TheBHCC'].'";';
			echo 'window.id_bhcc_tam="'.$tam[0]['ID_TheBHCC'].'";';
			echo 'window.TrangThaiKham="'.$tam[0]['TrangThaiKham'].'";';
			echo 'window.DaThanhToanBill="'.$tam[0]['DaThanhToanBill'].'";';
			echo 'window.BNGioiThieu="'.$tam[0]['BNGioiThieu'].'";';


		}
		?>
 jQuery(document).ready(function() {
	 window.idbhyt=<?=$idbhyt?>;

	 
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
		beforeClose: function( event, ui ) {},
			close: function(event, ui) {		
			},
		});
		
	 openform_shortcutkey();	
	  $.get( "pages.php?module=web_services&function=create_panel_luotkham&action=index&id_benhnhan="+window.id_benhnhan, function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");		  
	});
	if(window.oper=='edit'){
		$.get( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_get_nguoiapthebhcc&hienmaloi=a&id_luotkham="+window.id_ttluotkham, function( data ) {
		  $( "#bhcc_nguoiap" ).val( data );	  
		});	
	}
	
	$('#BNGioiThieu').change(function(e) {
		$.ajax({
			type: 'POST',
			async : false,
			url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_check_gioithieu',
			data:{
				MaBenhNhan:$('#BNGioiThieu').val()
			},
			success: function(data, status, xhr) {
				if(data=='0'){
					tooltip_message("Mã giới thiệu không tồn tại!");
					$('#BNGioiThieu').val('');
				}else{
 
				}
			}
		});
	});

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

		$("#NgayDu5Nam").datepicker({
			showWeek: true,
			defaultDate: "+1w",
			changeMonth: true,
			changeYear: true,
			numberOfMonths: 1,
			showButtonPanel: true,
			dateFormat: $.cookie("ngayJqueryUi"),
			onClose: function(selectedDate) {
			},
			onSelect: function(dat, inst) {
			}
		});
		$("#NgayMienCungChiTra").datepicker({
			showWeek: true,
			defaultDate: "+1w",
			changeMonth: true,
			changeYear: true,
			numberOfMonths: 1,
			showButtonPanel: true,
			dateFormat: $.cookie("ngayJqueryUi"),
			onClose: function(selectedDate) {
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

	
	$('#thuchien,#save,#chinhsua,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#chon_bhyt,#lichbacsy,.button_goikham,#save_bhyt,#edit_bhyt,#new_bhyt,#save_bhcc,#edit_bhcc,#new_bhcc,#chon_bhcc,#huychon_bhcc,#btn_laysothu,#xemingl').button();
	

	
	luu();
	them_bhyt();
	them_bhcc();
	$("#save_bhyt,#chon_bhyt,#edit_bhyt").button('disable');
	 /*create_combobox_tam('#mabaohiem',create_bhyt,'bw','','data_bhyt&id_benhnhan=<?php 
	 if($_GET["oper"]=='add'){		 
		 echo $_GET["id_benhnhan"];
	 }else{
		 echo $tam[0]['ID_BenhNhan'];
	 }
	 
	 ?>',id_bhyt);*/


	 create_combobox_new('#ID_KhuVuc',create_khuvuc,'bw','','data_khuvuc',0);

	create_combobox_new('#doituongbhyt',create_doituongbhyt,'bw','','data_doituongbhyt',0);
	create_combobox_new('#noidkbd',create_noidkbd,'bw','','data_bhyt_nkdbd',0);
	create_combobox_new('#phanloai',create_grid,'bw','','data_phanloaikham',ID_PhanLoaiKham);

	create_combobox_new('#goikham',create_goikham,'bw','','data_goikhamsk',ID_GoiKhamChoCongTy);
	create_combobox_new('#doituong',create_doituong,'bw','','',LoaiDoiTuongKham);
	create_combobox_new('#bsyeucau',create_bs,'bw','','data_dsbacsyyeucau',BSYeuCau);
	create_combobox_new('#nguoichidinh',create_nhanvien,'bw','','data_nhanvien',BSLamSang);
	create_combobox_new('#nguoilapphieu',create_nguoilapphieu,'bw','','data_nhanvien',ID_NguoiThucHien);	
	$('#nguoigioithieu').val(ID_NoiGioiThieu);
	$('#BNGioiThieu').val(window.BNGioiThieu);
	$('#sothutu').val(sothutu);
	//create_combobox_new('#nguoigioithieu',create_noigioithieu,'bw','','data_nguoiguoithieu',ID_NoiGioiThieu);
	create_combobox_new('#trangthai',create_trangthainv,'bw','','',TrangThaiKham);
	create_combobox_new('#pbvatly',create_grid,'bw','[]','',ID_PhongKhamVatLy);
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
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&xemtruocin=0&action=taoluotkham&header=top&id_luotkham="+window.id_ttluotkham+"&type=report&id_form=10",'InNhiet');
			 $(".modalu78787878975f").dialog("close");
	})
	$('#xemvain').click(function(){
			$.cookie("in_status", "print_preview");
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&xemtruocin=1&action=taoluotkham&header=top&id_luotkham="+window.id_ttluotkham+"&type=report&id_form=10",'InNhiet');
			
	})
	
	$('#xemingl').click(function(){
			$.cookie("in_status", "print_preview");
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&xemtruocin=1&action=inphieugoiloa&header=top&id_luotkham="+window.id_ttluotkham+"&type=report&id_form=10",'InNhiet');
			
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
		$.post('pages.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
			elem=1 + Math.floor(Math.random() * 1000000000);
			width=100;
			height=100;
			var folder= data.split(';');
			var links='pages.php?module=canlamsang&view=hen_tra_ket_qua&id_form='+folder[2]+"&idluotkham="+window.idluotkham+'&id_benhnhan='+window.id_benhnhan;
			dialog_add_dm("Hẹn trả kết quả",width,height,elem,links);
		})
	}) ;

  $('#btn_laysothu').click(function(e) {
      $.ajax({
        type: 'POST',
        async : false,
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_get_sothutu',
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
            url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=check_sogoiloa&hienmaloi=a',
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



	//alert(CoXacDinhNhanThan);
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
		$('#dhsinhton').prop('checked',true)
	}
	$('#lamsang').val(CoKhamLamSang) ;
		if(oper=='add'){
		trangthai('add')
	}else if(oper=='edit'){
		trangthai('notedit')
	}
	  phanquyen();
	  //	if(DaThanhToanBill==1){
    if(DaThanhToanBill==1&'<?=$_SESSION["user"]["id_user"]?>'!=66){//tạm mở cho duyên vào để đổi gói khám SKCT khatm 24.2.17
		$('#thuchien,#save,#chinhsua').button('disable');
		}

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
			var ids = $(elem).getDataIDs();
			var idcur = $(elem).jqGrid('getGridParam', 'selrow')
			var columnNames = $(elem).jqGrid('getGridParam','colModel');
			ten = $(elem).jqGrid('getCell', idcur, columnNames[2].name);
			ten1 = $(elem).jqGrid('getCell', idcur, columnNames[3].name);
			ten2 = $(elem).jqGrid('getCell', idcur, columnNames[4].name);
			$('#lamsang').val(ten2);
			/* 
			if(ten==0){
				$('#dhsinhton').prop('checked', false);
			}else{
				$('#dhsinhton').prop('checked', true);
			} 
			if(ten1==0){
				$('#nhanthan').prop('checked', false);
			}else{
				$('#nhanthan').prop('checked', true);
			}*/
			if(id==25){
				 create_combobox_enable('#goikham');
			}else{
				 create_combobox_disable('#goikham');
			}
			if(id==24){
				 setval_new('#trangthai',4);
			}

			id_loaikham=$(elem).jqGrid('getCell', id,'ID_LoaiKhamLSMacDinh');
			//$('#pb_vatly1').setGridParam({datatype:'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_pbvatly&ds_tang='+ds_tang+'&ID_PhanLoaiKham='+id_loaikham}).trigger("reloadGrid");
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
function create_bs(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Nickname', 'Họ và tên','Đang chờ',' Đang Khám','Xong','Lịch làm việc','Lịch hẹn khám',''],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false,width:'10%'},
			{name:'hovaten',index:'hovaten',hidden :false,width:'24%'},
			{name:'DangCho',index:'DangCho',hidden :false,width:'8%'},
			{name:'DangKham',index:'DangKham',hidden :false,width:'8%'},
			{name:'Xong',index:'Xong',hidden :false,width:'5%'},
			{name:'lichlamviciec',index:'lichlamviciec',hidden :false,width:'25%'},
			{name:'lichhenkham',index:'lichhenkham',hidden :false,width:'20%'},
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
		width: 800,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
		//$(dialog).dialog( "close" );  							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {	
			grid_filter_enter(elem) ;
			var ids = $(elem).getDataIDs();
			for(var i=0;i<ids.length;i++){		
			 var rowData = $(elem).getRowData(ids[i]);				
				if(rowData['comat']==0){
					//$(elem +' #'+ids[i]).css("color", "#333");
					$(elem +' #'+ids[i]).css("background", "#999");						
				}
			}
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
// tang
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
//end tang
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
		//$(dialog).dialog( "close" );  							
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
				$('#nhanthan').prop('checked',false);
				var ids = $('#dm_bhyt').jqGrid('getDataIDs');
				for(var i=0;i<=ids.length-1;i++){
					//if(ids[i]==window.id_bhyt){
					//	$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'red'});
					//}else{
						$("#dm_bhyt").jqGrid('setRowData',ids[i],false, {  color:'black'});	
					//}
				}
			}
		
		/*if(oper=='add'){
			if($('#doituong_grid').jqGrid('getCell', id, 'doituong')=='Viện phí'){				
					create_combobox_disable('#doituongbhyt');
					create_combobox_disable('#noidkbd');
					$("#diachibh,#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6").prop('disabled', true);
					$("#hsdtu").prop('disabled', true);
					$("#hsdden").prop('disabled', true);
					$("#ngaycap").prop('disabled', true);
					$('#new_bhyt,#edit_bhyt,#save_bhyt').button('disable');
			}else{
				if($("#dm_bhyt").getGridParam("reccount")>0){
					$('#new_bhyt').button('enable');
				}else{
					window.bhyt_ac='add';					
					create_combobox_enable('#doituongbhyt');
					create_combobox_enable('#noidkbd');
					$("#diachibh,#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6").prop('disabled', false);
					$("#hsdtu").prop('disabled', false);
					$("#hsdden").prop('disabled', false);
					$("#ngaycap").prop('disabled', false);
					$('#new_bhyt,#edit_bhyt').button('disable');
					$('#save_bhyt').button('enable');
				}*/
			/*	if(id_bhyt==0){
					create_combobox_enable('#mabaohiem');
					create_combobox_enable('#doituongbhyt');
					create_combobox_enable('#noidkbd');
					$("#diachibh").prop('disabled', false);
					$("#hsdtu").prop('disabled', false);
					$("#hsdden").prop('disabled', false);
					$("#ngaycap").prop('disabled', false);
					$('#new_bhyt,#edit_bhyt').button('disable');
					$('#save_bhyt').button('enable');
					window.bhyt_ac='add';
				
				}else{
					create_combobox_enable('#mabaohiem');
					create_combobox_enable('#doituongbhyt');
					create_combobox_enable('#noidkbd');
					$("#diachibh").prop('disabled', false);
					$("#hsdtu").prop('disabled', false);
					$("#hsdden").prop('disabled', false);
					$("#ngaycap").prop('disabled', false);
					$('#new_bhyt,#edit_bhyt').button('enable');
					$('#save_bhyt').button('disable');
				}*/
		/*	}
		}else{
			
			
		}*/
			
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {					
 		},
		loadComplete: function(data) {		
		},	  		
	});			 	
	 $(elem).jqGrid('bindKeys', {} );		
}

/*	function create_noigioithieu(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Người giới thiệu', 'Nơi giới thiệu','Địa chỉ','Điện thoại'],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false},
			{name:'hovaten',index:'hovaten',hidden :false},
			{name:'1',index:'1',hidden :false},
			{name:'2',index:'3',hidden :false},
			
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
} */ 


	function create_trangthainv(elem,datalocal){	
		//datalocal=jQuery.parseJSON('{"rows":[{"id":"1","cell":["Đúng tuyến"]},{"id":"2","cell":["Có giấy chuyển viện"]},{"id":"3","cell":["Trái tuyến"]},{"id":"4","cell":["Cấp cứu"]},{"id":"5","cell":["Thông tuyến"]}]} ');
		datalocal=jQuery.parseJSON('{"rows":[{"id":"1","cell":["Đúng tuyến"]},{"id":"5","cell":["Thông tuyến"]}]} ');	 		
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
		//alert('add');
		window._noper=1;
		create_combobox_disable('#doituongbhyt');	
		create_combobox_disable('#noidkbd');
		//$("#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabh7,#diachibh,#hsdtu,#hsdden").prop('disabled', true);
		create_combobox_disable('#ID_KhuVuc');
		 $("#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabh7,#diachibh,#hsdtu,#hsdden,#NgayDu5Nam,#NgayMienCungChiTra").prop('disabled', true);
		$("#mabhcc,#diachibhcc,#bhcc_hsdtu,#bhcc_hsdden").prop('disabled', true);
		$("#dhsinhton,#comat,#nhanthan,#sothutu,#nguoigioithieu").prop('disabled',false);

		create_combobox_disable('#loaithe');
		// $('#edit_bhyt,#new_bhyt,#save_bhyt').button('disable');
		create_combobox_enable('#phanloai');	
		create_combobox_disable('#goikham');
		create_combobox_enable('#doituong');
		create_combobox_enable('#bsyeucau');
		create_combobox_enable('#nguoichidinh');
		create_combobox_enable('#nguoilapphieu');
		//create_combobox_enable('#nguoigioithieu');
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
		//alert('notedit');
		window._noper=2;
		$('#chinhsua,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#lichbacsy,#xemingl').button('enable');
		$('#thuchien,#save,#new_bhyt,#edit_bhyt,#chon_bhyt,#new_bhcc,#edit_bhcc,#chon_bhcc,#huychon_bhcc,#btn_laysothu').button('disable');
		create_combobox_disable('#doituongbhyt');	
		create_combobox_disable('#noidkbd');
		$("#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabh7,#diachibh,#hsdtu,#hsdden").prop('disabled', true);
		$("#mabhcc,#diachibhcc,#bhcc_hsdtu,#bhcc_hsdden").prop('disabled', true);
		$("#dhsinhton,#comat,#nhanthan,#sothutu,#nguoigioithieu").prop('disabled',true);
		create_combobox_disable('#loaithe');
		create_combobox_disable('#phanloai');	
		
		create_combobox_disable('#goikham');
		create_combobox_disable('#doituong');
		create_combobox_disable('#bsyeucau');
		create_combobox_disable('#nguoichidinh');
		create_combobox_disable('#nguoilapphieu');
		//create_combobox_disable('#nguoigioithieu');
		create_combobox_disable('#trangthai');
		create_combobox_disable('#hinhthuc');
		create_combobox_disable('#tang');
		create_combobox_disable('#pbvatly');
		$('#chinhsua').focus();
	}else if(trangthai=='edit'){
		//alert('edit');
		window._noper=1;
		$('#save,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#lichbacsy,#btn_laysothu,#xemingl').button('enable');
		$('#thuchien,#chinhsua').button('disable');
		$('#new_bhyt,#new_bhcc').button('enable');
		$("#dhsinhton,#comat,#nhanthan,#sothutu,#nguoigioithieu").prop('disabled',false);
		$("#dm_bhyt").jqGrid("resetSelection");
		$("#dm_bhcc").jqGrid("resetSelection");
		create_combobox_enable('#phanloai');	
		create_combobox_enable('#goikham');
		create_combobox_enable('#doituong');
		create_combobox_enable('#bsyeucau');
		create_combobox_enable('#nguoichidinh');
		create_combobox_enable('#nguoilapphieu');
		//create_combobox_enable('#nguoigioithieu');
		create_combobox_enable('#trangthai');
		create_combobox_enable('#hinhthuc');
		create_combobox_enable('#tang');
		create_combobox_enable('#pbvatly');
		$('#phanloai').focus();
	}else if(trangthai=='hoantat'){
	//	alert('hoantat');
		$('#save,#chinhsua,#inphieu,#thuchien,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#btn_laysothu').button('disable');
		$('#xemvain,#lichbacsy').button('enable');
		$("#dhsinhton,#comat,#nhanthan,#sothutu,#nguoigioithieu").prop('disabled',true);
		create_combobox_disable('#phanloai');	
		create_combobox_disable('#goikham');
		create_combobox_disable('#doituong');
		create_combobox_disable('#bsyeucau');
		create_combobox_disable('#nguoichidinh');
		create_combobox_disable('#nguoilapphieu');
		//create_combobox_disable('#nguoigioithieu');
		create_combobox_disable('#trangthai');
		create_combobox_disable('#hinhthuc');
		create_combobox_disable('#tang');
		create_combobox_disable('#pbvatly');
		$('#chinhsua').focus();
	}

}

function luu(){
	$('#thuchien').click(function(){
    
		if($("#phanloai_hidden").val()==''){
			$("#phanloai").focus();
		}else{
			if($("#doituong").val()=='Viện phí'){
				window.id_bhyt=0;
			}
			$('#thuchien').button('disable');
			//set_trangthai();
			//alert(window.id_bhyt+'_'+window.id_bhcc);
			window.datatosend = '{';
			window.datatosend+='"phanloai":'+JSON.stringify($("#phanloai_hidden").val())+'';		
			window.datatosend+=',"goikham":'+JSON.stringify($('#goikham_hidden').val())+'';
			window.datatosend+=',"doituong":'+JSON.stringify($('#doituong_hidden').val())+'';
			window.datatosend+=',"bsyeucau":'+JSON.stringify($('#bsyeucau_hidden').val())+'';
			window.datatosend+=',"nguoichidinh":'+JSON.stringify($('#nguoichidinh_hidden').val())+'';
			window.datatosend+=',"nguoilapphieu":'+JSON.stringify($('#nguoilapphieu_hidden').val())+'';
			window.datatosend+=',"BNGioiThieu":'+JSON.stringify($('#BNGioiThieu').val())+'';
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
			window.datatosend+=',"id_thebhcc":'+JSON.stringify(window.id_bhcc)+'';
      window.datatosend+=',"sothutu":'+JSON.stringify($('#sothutu').val())+'';
			window.datatosend+='}';
			datatosend= jQuery.parseJSON(datatosend);
			if(window.id_bhyt==0 && $('#doituong_hidden').val()=='BHYT'){
				alert('Lượt khám BHYT bắt buộc nhập thẻ BHYT');
			}else if($('#doituong_hidden').val()=='BHYT' && $('#trangthai').val()==''){
				alert('Lượt khám BHYT bắt buộc nhập trạng thái lúc nhập viện');
				$('#trangthai').focus();
			}else{
				hienthongbao("Đang lưu...");
				$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=2&idhenkham=<?=$idhenkham?>&id_benhnhan="+window.id_benhnhan+"&oper=add",datatosend).done(function(data) {
					var id_thongtinluotkham =data.split(';');
					hienthongbao("");
					if(id_thongtinluotkham[0]==''){
						tooltip_message("Lưu thành công");
						parent.postMessage("taoluotkham_thanhcong;"+id_thongtinluotkham[1]+";"+window.id_benhnhan, "*");				
						window.id_ttluotkham=id_thongtinluotkham[1];
						window.oper='edit';	
						$('#inphieu').focus();
						trangthai('notedit');
					}else{
						tooltip_message("Lưu thất bại");
					}
				});
			}
		}
	});
	$('#chinhsua').click(function(){
		trangthai('edit');
		$('#phanloai').focus();
		$('#phanloai').select();
	})//inphieudecal

$('#inphieudecal').click(function(){
  // alert('');

  $.cookie("in_status", "print_preview");
  dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=hanhchinh&action=nhan_ngoaitru&type=report&id_form=794&idluotkham="+window.id_ttluotkham+"&dduong=minh kha",'nhan_noitru');
  $(".frame_u78787878975f").css("width","793px");


  })//inphieudecal

	$('#save').click(function(){
		if($("#doituong").val()=='Viện phí'){
			window.id_bhyt=0;
		}
		set_trangthai();
		window.datatosend = '{';
		window.datatosend+='"phanloai":'+JSON.stringify($("#phanloai_hidden").val())+'';
		window.datatosend+=',"goikham":'+JSON.stringify($('#goikham_hidden').val())+'';
		window.datatosend+=',"doituong":'+JSON.stringify($('#doituong_hidden').val())+'';
		window.datatosend+=',"bsyeucau":'+JSON.stringify($('#bsyeucau_hidden').val())+'';
		window.datatosend+=',"nguoichidinh":'+JSON.stringify($('#nguoichidinh_hidden').val())+'';
		window.datatosend+=',"nguoilapphieu":'+JSON.stringify($('#nguoilapphieu_hidden').val())+'';
		window.datatosend+=',"BNGioiThieu":'+JSON.stringify($('#BNGioiThieu').val())+'';
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
		window.datatosend+=',"id_thebhcc":'+JSON.stringify(window.id_bhcc_new)+'';
    window.datatosend+=',"sothutu":'+JSON.stringify($('#sothutu').val())+'';
		window.datatosend+='}';
		//alert(window.datatosend);
		datatosend= jQuery.parseJSON(datatosend);
		if(window.id_bhyt==0 && $('#doituong_hidden').val()=='BHYT'){
			alert('Lượt khám BHYT bắt buộc nhập thẻ BHYT');
		}else if($('#doituong_hidden').val()=='BHYT' && $('#trangthai').val()==''){
			alert('Lượt khám BHYT bắt buộc nhập trạng thái lúc nhập viện');
			$('#trangthai').focus();
		}else{
			hienthongbao("Đang lưu...");
			$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&oper=edit",datatosend).done(function(data) {
				hienthongbao("");
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
			});
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
			/* var rowData = $(elem).getRowData(id);
			$('#doituongbhyt').val(id);
			$('#doituongbhyt1').val(rowData['ten_dt']);*/
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
			setval_new('#trangthai',1);
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
			// window.id_bhyt=id;
			// window.bhyt_ac='edit';
			 $('#diachibh').val(rowData['DiaChiTheBHYT']);
			 $('#hsdtu').val(rowData['HanSD_TuNgay']);
			 $('#hsdden').val(rowData['HanSD_DenNgay']);
			 $('#ngaycap').val(rowData['NgayCap']);

			$('#NgayDu5Nam').val(rowData['NgayDu5Nam']);
			$('#NgayMienCungChiTra').val(rowData['NgayMienCungChiTra']);
			//$('#ID_KhuVuc').val(rowData['LoaiKhuVuc']);
			//$('#ID_KhuVuc_hide').val(rowData['ID_KhuVuc']);
			setval_new('#ID_KhuVuc',rowData['ID_KhuVuc']);

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
			// var rowData = $(elem).getRowData(id);

		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
				if(window.oper=='add'){

			}else{
			   var rowData = $(elem).getRowData(id_bhyt);
			  // $('#mabaohiem').val(rowData['SoThe'])
			   $('#diachibh').val(rowData['DiaChiTheBHYT']);
			 $('#hsdtu').val(rowData['HanSD_TuNgay']);
			 $('#hsdden').val(rowData['HanSD_DenNgay']);
			 $('#ngaycap').val(rowData['NgayCap']);

			 //var idToDataIndex = $('#noidkbd_grid').jqGrid('getGridParam','_index');
			// var noidkbd_String = $('#noidkbd_grid').jqGrid('getGridParam','data')[idToDataIndex[rowData['Ma_KCB_BanDau']]];
			 //$('#noidkbd').val(noidkbd_String['Ma_KCB_BanDau']);
			 //$('#noidkbd1').val(noidkbd_String['Ten_KCB_BanDau']);
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
		create_combobox_enable('#ID_KhuVuc');
		 $("#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabh7,#diachibh,#hsdtu,#hsdden,#NgayDu5Nam,#NgayMienCungChiTra").prop('disabled', false);
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
		 create_combobox_enable('#ID_KhuVuc');
		 $("#mabh1,#mabh2,#mabh3,#mabh4,#mabh5,#mabh6,#mabh7,#diachibh,#hsdtu,#hsdden,#NgayDu5Nam,#NgayMienCungChiTra").prop('disabled', false);
		 $('#diachibh').val(rowData['DiaChiTheBHYT']);
		 $('#hsdtu').val(rowData['HanSD_TuNgay']);
		 $('#hsdden').val(rowData['HanSD_DenNgay']);
		 $('#ngaycap').val(rowData['NgayCap']);

		$('#NgayDu5Nam').val(rowData['NgayDu5Nam']);
		$('#NgayMienCungChiTra').val(rowData['NgayMienCungChiTra']);
		//$('#ID_KhuVuc').val(rowData['LoaiKhuVuc']);
		//$('#ID_KhuVuc_hide').val(rowData['ID_KhuVuc']);
		setval_new('#ID_KhuVuc',rowData['ID_KhuVuc']);

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
	$('#chon_bhyt').click(function(){
		setval_new('#doituong','BHYT');
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_date').done(function(output){
				var dateParts = output.split("/");
				var date = new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
			    var hsd_den= $('#dm_bhyt').jqGrid('getCell', $('#dm_bhyt').jqGrid('getGridParam', 'selrow'), 'HanSD_DenNgay');
				var hsd_tu = $('#dm_bhyt').jqGrid('getCell', $('#dm_bhyt').jqGrid('getGridParam', 'selrow'), 'HanSD_TuNgay');
			    var dateParts1 = hsd_den.split("/");
				var dateParts2 = hsd_tu.split("/");
				var date_den = new Date(dateParts1[2], (dateParts1[1] - 1), dateParts1[0]);
				var date_tu = new Date(dateParts2[2], (dateParts2[1] - 1), dateParts2[0]);
				//alert(date_den+''+date_tu);
			if(oper=='add'){
						if((date_den<date || date_tu>date) && 1!=1){
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
				if((date_den<date_vaokham || date_tu>date_vaokham)  && 1!=1){
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
								$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe="+window.id_bhyt+"&ac=bhyt").done(function(data) {
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
								$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe="+window.id_bhyt+"&ac=bhyt").done(function(data) {
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
					setval_new('#trangthai',1);
			})
	});


	/*$('#mabh1').keyup(function(e){
	  if($('#mabh1').val().length==2){
		  $('#mabh2').focus().select();
	  }
	})*/
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
		if((hsdtu==hsdden || noidkbd=='' || diachibh=='') && 1!=1){
			if(hsdtu==hsdden){			
				tooltip_message("Hạn sử dụng không hợp lệ");	
			}else if(noidkbd==''){
				tooltip_message("Nơi ĐK KCB ban đầu không hợp lệ");
			}else if(diachibh==''){
				tooltip_message("Địa chỉ không hợp lệ");
			}
		}else{
			$('#save_bhyt').button('disable');
			var mabh=$("#mabh1").val().toUpperCase()+''+$("#mabh2").val()+''+$("#mabh3").val()+''+$("#mabh4").val()+''+$("#mabh5").val()+''+$("#mabh6").val();
			window.databhyt = '{';
			window.databhyt+='"mabh":'+JSON.stringify(mabh);		
			window.databhyt+=',"noidkbd":'+JSON.stringify($('#noidkbd').val());
			window.databhyt+=',"diachibh":'+JSON.stringify($('#diachibh').val().toUpperCase())+'';
			window.databhyt+=',"hsdtu":'+JSON.stringify($('#hsdtu').val())+'';
			window.databhyt+=',"hsdden":'+JSON.stringify($('#hsdden').val())+'';
			//window.databhyt+=',"ngaycap":'+JSON.stringify($('#ngaycap').val())+'';
			window.databhyt+=',"NgayDu5Nam":'+JSON.stringify($('#NgayDu5Nam').val())+'';
			window.databhyt+=',"NgayMienCungChiTra":'+JSON.stringify($('#NgayMienCungChiTra').val())+'';
			window.databhyt+=',"ID_KhuVuc":'+JSON.stringify($('#ID_KhuVuc_hidden').val())+'';
			window.databhyt+=',"id_nhanvien":'+JSON.stringify(<?=$_SESSION["user"]["id_user"]?>)+'';		
			window.databhyt+=',"idbh":'+JSON.stringify(window.id_bhyt)+'';		
			window.databhyt+='}';			
			databhyt= jQuery.parseJSON(databhyt);			
			$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bhyt&hienmaloi=2&id_benhnhan="+window.id_benhnhan+"&oper="+bhyt_ac,databhyt).done(function(data) {
				$("#dm_bhyt").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php 
				 if($_GET["oper"]=='add'){		 
					 echo $_GET["id_benhnhan"];
				 }else{
					 echo $tam[0]['ID_BenhNhan'];
				 }?>'}).trigger('reloadGrid');
			//	$('#dm_bhyt').trigger("reloadGrid");
				tooltip_message("Đã lưu");	
			});
		}
	});
}
  
function create_dm_bhyt(){	
	$('#dm_bhyt').jqGrid({
	url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php 
	 if($_GET["oper"]=='add'){		 
		 echo $_GET["id_benhnhan"];
	 }else{
		 echo $tam[0]['ID_BenhNhan'];
	 }?>',
	    datatype: "json",
		colNames:['Số thẻ','Đối tượng', 'Địa chỉ', 'Mã KCB','Tên KCB ban đầu', 'HSD từ','HSD đến','NgayCap','','NgayDu5Nam','NgayMienCungChiTra','ID_KhuVuc','LoaiKhuVuc'],
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
			{name:'NgayDu5Nam',index:'NgayDu5Nam',hidden :true},
			{name:'NgayMienCungChiTra',index:'NgayMienCungChiTra',hidden :true},
			{name:'ID_KhuVuc',index:'ID_KhuVuc',hidden :true},
			{name:'LoaiKhuVuc',index:'LoaiKhuVuc',hidden :true},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: false,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],			
		height:100,
		width: 430,
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
				}else{
					$('#chon_bhyt').button('enable');
				}
			}
 
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {	
			if($('#doituong_hidden').val()=='BHYT'){	
				$('#dm_bhyt').jqGrid('setRowData', window.id_bhyt_new, false, { color: 'red',border:'1px solid #BBBBBB' });
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
		//alert(oper);
		if(oper=='add'){
			 window.id_bhcc=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
			 window.id_bhcc_tam=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
			 window.id_bhcc_new=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
			 var ids = $('#dm_bhcc').jqGrid('getDataIDs');
			 for(var i=0;i<=ids.length-1;i++){
				//var rowData = $('#rowed5').jqGrid ('getRowData', ids[i]);
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
					$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe="+window.id_bhcc+"&ac=bhcc").done(function(data) {
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
                   $.get( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_get_nguoiapthebhcc&hienmaloi=a&id_luotkham="+window.id_ttluotkham, function( data ) {
                    $( "#bhcc_nguoiap" ).val( data );
                  });
                }else{
                  tooltip_message("Áp thẻ thất bại");
                }
              }
					});
			}// if window.id_ttluotkham
		}
	})// end click

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
				$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_huyapthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&ac=bhcc").done(function(data){
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
                   $.get( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_get_nguoiapthebhcc&hienmaloi=a&id_luotkham="+window.id_ttluotkham, function( data ) {
                    $( "#bhcc_nguoiap" ).val( data );
                  });
                }else{
                  tooltip_message("Hủy áp thẻ thất bại"); 
                }
              }

				});
			}// if window.id_ttluotkham
		}
	});// end click
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
		$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bhcc&hienmaloi=2&id_benhnhan="+window.id_benhnhan+"&oper="+bhcc_ac,databhcc).done(function(data) {
			$("#dm_bhcc").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhcc&id_benhnhan=<?php 
	 if($_GET["oper"]=='add'){
		 echo $_GET["id_benhnhan"];
	 }else{
		 echo $tam[0]['ID_BenhNhan'];
	 }?>'}).trigger('reloadGrid');
		 // $('#dm_bhcc').trigger("reloadGrid");
		});
	});
}
function create_dm_bhcc(){
	$('#dm_bhcc').jqGrid({
	url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhcc&id_benhnhan=<?php
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
		height:100,
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
					//console.log(window.id_bhcc+'='+window.id_bhcc_tam)
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

	// if they pressed esc... remove focus from field...
	if (code==27) { this.blur(); return false; }
	// ignore if they are press other keys
	// strange because code: 39 is the down key AND ' key...
	// and DEL also equals .
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
			// console.log($(input).val().length+'='+$(input).attr( "maxlength" ));
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
		setval_new('#trangthai',1);
	}
}
/* 
function barcode_callback(barcode){
	$("#chinhsua").click();
	barcode=$.trim(barcode);
	console.log(barcode);
	res=barcode.split('|');
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_date').done(function(output){
				var dateParts = output.split("/");
				var date = new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
			  var hsd_den= res[7];
				var hsd_tu = res[6];
			 var dateParts1 = hsd_den.split("/");
				var dateParts2 = hsd_tu.split("/");
				var date_den = new Date(dateParts1[2], (dateParts1[1] - 1), dateParts1[0]);
				var date_tu = new Date(dateParts2[2], (dateParts2[1] - 1), dateParts2[0]);

				if(date_den-date<0){
					tooltip_message("Thẻ hết hạn sử dụng");
				}else if(date_tu-date>0){
					tooltip_message("Thẻ chưa đến hạn sử dụng");
				}else{
					if($.trim($('#panel_tenbn').html().toLowerCase())!=$.trim(convertHexToString(res[1]).toLowerCase())){
						tooltip_message("Tên bệnh nhân không trùng với thẻ BHYT"+$('#panel_tenbn').html());
					}else{
							window.databhyt = '{';
							window.databhyt+='"mabh":'+JSON.stringify(res[0]);
							window.databhyt+=',"noidkbd":'+JSON.stringify(res[5]);
							window.databhyt+=',"diachibh":'+JSON.stringify($.trim(convertHexToString(res[4])));
							window.databhyt+=',"hsdtu":'+JSON.stringify(res[6].split('/').reverse().join('/'));
							window.databhyt+=',"hsdden":'+JSON.stringify(res[7].split('/').reverse().join('/'));
							window.databhyt+=',"idbenhnhan":'+JSON.stringify(window.id_benhnhan);
							window.databhyt+='}';
							databhyt= jQuery.parseJSON(databhyt);
							$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bhyt_barcode&hienmaloi=1',databhyt).done(function(data){
                  data=$.parseJSON(data);
                  if(data.IsLock==1){
                    alert(data.Notes);
                  }else{
                    if(data.Error!=1){
                        setval_new('#doituong','BHYT');
                        window.output_bhyt=data.IDReturn;
                        window.barcode_bhyt=1;
                        $("#dm_bhyt").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php
                        if($_GET["oper"]=='add'){
                        echo $_GET["id_benhnhan"];
                        }else{
                        echo $tam[0]['ID_BenhNhan'];
                        }?>'}).trigger('reloadGrid');
                    }else{
                      tooltip_message("Đã lưu");
                    }
                  }

							})
					}
				}
	})
}; */


function create_khuvuc(elem,datalocal){  
	// alert(datalocal);
	datalocal=jQuery.parseJSON(datalocal);   
	$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,  
		colNames:['Tên khu vực'],
		colModel:[      
			{name:'TenKhuVuc',index:'TenKhuVuc',hidden :false}
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,     
		modal:true,  
		rowNum: 200000,
		rowList:[],   	
		height:160,
		width: 270,
		viewrecords: true,  
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {  },
		onSelectRow: function(id){
			$("#ID_KhuVuc_hide").val(id);
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {},
		loadComplete: function(data) {},    
	}); 
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );
}





function barcode_callback(barcode){
	var ngayDu5Nam='';
	var maKhuVu='';
	var mienCungChiTra='';
	//alert($('#panel_tenbn').html());
	$("#chinhsua").click();
	barcode=$.trim(barcode);
	res=barcode.split('|');
	console.log($.trim($('#panel_tenbn').html().toLowerCase())+"!="+$.trim(convertHexToString(res[1]).toLowerCase()));
	if($.trim($('#panel_tenbn').html().toLowerCase())!=$.trim(convertHexToString(res[1]).toLowerCase())){
		tooltip_message("Tên bệnh nhân trên thẻ BHYT không trùng với hồ sơ bệnh nhân "+$('#panel_tenbn').html());
		return false;
	}	
		$.ajax({
		type: 'POST',
		async : false,
	
				url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_bhytmathebarcode',
				//url: 'http://tracuuthebaohiemyte.ddns.net:8181/history/',
				data:{  'maThe': res[0],
					'hoTen': $.trim(convertHexToString(res[1])),
					'ngaySinh': res[2],
					'gioiTinh': res[3],
					'maCSKCB': $.trim(res[5].replace("-", "").split(' ').join('')),				
							
				},
				crossDomain:true,
				success: function(data, status, xhr) {

					if ($.trim(data)==''){
						alert('Không thể kết nối tới máy chủ.')
					}

				data=jQuery.parseJSON(data);

				txt='';
				myObj=data.dsLichSuKCB;
				txt += "<table class='ttbh' cellspacing=0 cellpadding=0>"
				if (myObj != null){
						for (var i=0;i<myObj.length;i++) {
								txt += "<tr>"
							for (x in myObj[i]) {
								txt += "<td style='padding:2px;'>" + myObj[i][x] + "</td>";
							}
							txt += "</tr>"
						}
						txt += "</table>"  	
						console.log(txt);
						$("#bhyt_info").html(txt)
						 
				}

					
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
							"130":"Trẻ em không xuất trình thẻ",
							"205":"Thẻ lỗi"
						}
					hsd_den=data.gtTheDen;
					diachibh=data.diaChi;

					if (data.ngayDu5Nam=="") {
						ngayDu5Nam="";
					}else{
						ngayDu5Nam=(data.ngayDu5Nam).split('/').reverse().join('/');
					}
					if (data.maKV=="") {
						maKhuVu="";
					}else{
						maKhuVu=data.maKV;
					}
					mienCungChiTra=null;

					if(data.maKetQua!="000"){
						$("#bhyt_info").html('<span style="color:red">'+tam[data.maKetQua]+'</span>')
						alert(tam[data.maKetQua]);
						return false;
					}
				
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_date').done(function(output){
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


						window.databhyt+=',"NgayDu5Nam":'+JSON.stringify(ngayDu5Nam)+'';
						window.databhyt+=',"NgayMienCungChiTra":'+JSON.stringify(mienCungChiTra)+'';
						window.databhyt+=',"maKhuVu":'+JSON.stringify(maKhuVu)+'';


						window.databhyt+=',"idbenhnhan":'+JSON.stringify(window.id_benhnhan);
						window.databhyt+='}';
						databhyt= jQuery.parseJSON(databhyt);
						$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bhyt_barcode&hienmaloi=1',databhyt).done(function(data){
							data=$.parseJSON(data);
							if(data.IsLock==1){
								alert(data.Notes);
							}else{
								if(data.Error!=1){
									setval_new('#doituong','BHYT');
										window.output_bhyt=data.IDReturn;
										window.barcode_bhyt=1;
										$("#dm_bhyt").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhyt&id_benhnhan=<?php
											if($_GET["oper"]=='add'){
												echo $_GET["id_benhnhan"];
											}else{
												echo $tam[0]['ID_BenhNhan'];
											}?>'}).trigger('reloadGrid');
							
									}else{
										tooltip_message("Đã lưu");
									}
								}
							})
						})
					
				}
			
	});
}
</script>