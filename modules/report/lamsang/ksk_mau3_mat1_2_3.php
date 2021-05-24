<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
}
input.doted{
	border:none;
	box-shadow:none;
	border-bottom:dotted 2px #000000;
	height: 8px;
}
.benhtathientai{
	width:655px;
	margin-bottom:7px;
}
.top{
	margin-top:5px;
}
table td{
	padding-left:5px;
}
#n-table1 td{
	padding-left:4px;
}

input.doted{
	border:none;
	box-shadow:none;
	border-bottom:dotted 2px #000000;
	height: 4px;
}
.dmnd{
	width:338px;
}
.ngay{
	width:50px;
}
.tai{
	width:290px;
}
.hokhau{
	width:378px;
}
.hokhau2{
	width:539px;
	height:14px !important;
}
.choo{
	width:542px;
}
.choo2{
	width:664px;
	height:14px !important;
	margin-bottom:7px;
}
.nghenghiep{
	width:551px;
}
.noicongtac{
	width:490px;
}
.nghenghieptruoc{
	width:645px;
	margin-bottom:7px;
}
.benhtat{
	width:415px;
}
.tiensuthaisan{
	width:383px;
}
input[type=checkbox].css-checkbox {
	position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
}

input[type=checkbox].css-checkbox + label.css-label {
	padding-left:25px;
	height:20px; 
	display:inline-block;
	line-height:20px;
	background-repeat:no-repeat;
	background-position: 0 0;
	font-size:20px;
	vertical-align:middle;
	cursor:pointer;

}

input[type=checkbox].css-checkbox:checked + label.css-label {
	background-position: 0 -20px;
}
label.css-label {
background-image:url(images/csscheckbox_cbedf8fc34fc83a015128029efb1c1d4.png);
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;

}
input.css-checkbox[type="checkbox"] + label.css-label {
    background-position: 0 5px;
    background-repeat: no-repeat;
    cursor: pointer;
    display: inline-block;
    font-size: 20px;
    height: 25px;
    line-height: 20px;
    margin-top: -10px;
    padding-left: 25px;
    vertical-align: middle;
}
input.css-checkbox[type="checkbox"]:checked + label.css-label {
    background-position: 0 -20px;
	 margin-top: 0;
}
</style>
<body>
<div id="page" style="page-break-after: always;">
<?php
        $data= new SQLServer;//tao lop ket noi SQL
		$params = array($_GET["id_benhnhan"],$_GET["id_luotkham"]);//tao param cho store 
		$store_name="{call GD2_KSK_GetThongTinBenhNhan(?,?)}";//tao bien khai bao store
		$get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
		$excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		if(count($thongtinbenhnhan)==0){
			$params = array($_GET["id_benhnhan"]);//tao param cho store 
			$store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
			//$params = array($_GET["id_benhnhan"],$_GET["id_luotkham"]);//tao param cho store 
			//$store_name="{call GD2_KSK_GetThongTinBenhNhan(?,?)}";//tao bien khai bao store
			$get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
			$excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	
		}
    ?>
<table width="100%">
  <tr>
    <td style=" font-size:12px"><span style="text-transform:uppercase"><strong><?php echo $_SESSION["com"]["TenCoQuanTrucThuoc"]?></strong></span><strong><br />
      <span style="text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span><br />
    SỐ: GS/SK.............
    </strong></td>
    <td style="text-align:center"><strong>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br />
    Độc lập - Tự do - Hạnh phúc<br />
    **************
    </strong></td>
  </tr>
</table>
<div style="text-align:center">
<span style="font-size:20px; line-height:35px; font-weight:bold; text-align:center">GIẤY KHÁM SỨC KHỎE ĐỊNH KỲ</span>
</div>

<table width="100%">
  <tr>
    <td width="10%">
    <div class="anh" style="text-align:center; border:solid 1px #000; height:100px; width:80px; margin-right:30px;">
   <br /><br /> Ảnh <br />
    4x6
    </div>
    </td>
    <td width="90%"><p>1. Họ và tên (<em>Chữ in hoa</em>): <span style="text-transform:uppercase"> <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?></span>
      <br />
      2. Giới: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nam 
      <input type="checkbox" name="nam" id="nam" <?php
if($thongtinbenhnhan[0]['Gioi']=='Nam'){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="nam"></label> Nữ <input type="checkbox" name="nu" id="nu" <?php
if($thongtinbenhnhan[0]['Gioi']=='Nữ'){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="nu"></label>&nbsp;&nbsp;&nbsp;&nbsp; Tuổi: <?=$thongtinbenhnhan[0]['Tuoi']?><br />
      3. Số CMND hoặc Hộ chiếu:<input type="text" class="doted dmnd"  /><br />
      Cấp ngày<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />tại<input type="text" class="doted tai"  /><br />
      4. Hộ khẩu thường trú:<input type="text" class="doted hokhau"  /><br />
      <input type="text" class="doted hokhau2"  /><br />

    </td>
  </tr>
</table>
5. Chổ ở hiện tại:<input type="text" class="doted choo"  /><br />
<input type="text" class="doted choo2"  /><br />
6. Nghề nghiệp:<input type="text" class="doted nghenghiep"  /><br />
  7. Nơi công tác, học tập:<input type="text" class="doted noicongtac"  /><br />
  8. Ngày bắt đầu vào học/làm việc tại đơn vị hiện nay:<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  9. Nghề, công việc trước đây (liệt kê các công việc đã làm trong 10 năm gần đây):<br />
  a) <input type="text" class="doted nghenghieptruoc"  /><br />
  thời gian làm việc<input type="text" class="doted ngay"  />năm<input type="text" class="doted ngay"  />tháng từ ngày<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  đến<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  b) <input type="text" class="doted nghenghieptruoc"  /><br />
  thời gian làm việc<input type="text" class="doted ngay"  />năm<input type="text" class="doted ngay"  />tháng từ ngày<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
   đến<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  10. Tiền sử bệnh tật gia đình: Có ai trong gia đình(ông bà, cha mẹ, anh chị em ruột) mắc một trong các bệnh sau đây: tim mạch, đái tháo đường, hen phế quản, ung thư, động kinh, rối loạn tâm thần, truyền nhiễm...: a) Không <input type="checkbox" name="khong" id="khong" class="css-checkbox"/><label class="css-label" for="khong"></label>; b) Có <input type="checkbox" name="co" id="co" class="css-checkbox"/><label class="css-label" for="co"></label><br />
  c) Nếu có, hãy ghi cụ thể tên bệnh:<input type="text" class="doted benhtat"  /><br />
11. Tiền sử thai sản (dành cho phụ nữ):<input type="text" class="doted tiensuthaisan"  /><br />
12. Tiền sử bản thân: <br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center">Tên bệnh</div></td>
    <td><div align="center">Phát hiện năm</div></td>
    <td><div align="center">Tên bệnh nghề nghiệp</div></td>
    <td><div align="center">Phát hiện năm</div></td>
  </tr>
  <tr>
    <td>&nbsp;a)</td>
    <td>&nbsp;</td>
    <td>&nbsp;a)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;b)</td>
    <td>&nbsp;</td>
    <td>&nbsp;b)</td>
    <td>&nbsp;</td>
  </tr>
</table><br />
<table width="100%">
  <tr>
    <td width="55%">Tôi xin cam đoan những điều khai ở trên đây là hoàn toàn đúng với tình trạng sức khỏe của tôi.</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:center;">Đà Nẵng, ngày <?=date('d')?> tháng <?=date('m')?> năm <?=date('Y')?>
    <br />
    Người lao động xác nhận<br />
    (Ký và ghi rỏ họ tên)<br /><br /><br /><br /><br />
    
    <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
    </td>
  </tr>
</table>
</div>
<div id="page" style="page-break-after: always;">
<?php
	$params3 = array($_GET["id_benhnhan"],$_GET["id_kham"]);//tao param cho store 
	$store_name3="{call GD2_KSKCongTySelectAllByIDBenhNhanAndID_Kham(?,?)}";//tao bien khai bao store
	$get_khamlamsang=$data->query( $store_name3,$params3);//Goi store
	$excute3= new SQLServerResult($get_khamlamsang);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$khamlamsang= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc
	$params11 = array($_GET["id_luotkham"]);//tao param cho store 
	$store_name11="{call GD2_MedicalReportSelectByID_LuotKham(?)}";//tao bien khai bao store
	$get_ketluan=$data->query( $store_name11,$params11);//Goi store
	$excute11= new SQLServerResult($get_ketluan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$ketluan= $excute11->get_as_array();//Tra ve mang toan bo data lay duoc
?>
<div style="text-align:center; padding-bottom:5px;"><strong class="test">KHÁM SỨC KHỎE ĐỊNH KỲ</strong></div><br />
<strong>I. TÌNH TRẠNG BỆNH TẬT HIỆN TẠI:</strong><br />
<div style="padding-left:20px;">
<?=$khamlamsang[0]['TinhTrangBenhTatHienTai']?>
</div>
<br />
<strong>II. KHÁM THỂ LỰC</strong><br />
<div style="padding-left:20px;">
Chiều cao:
<?php if($thongtinbenhnhan[0]['ChieuCao']){echo $thongtinbenhnhan[0]['ChieuCao'].' cm';}?>
;&nbsp;&nbsp;&nbsp; Cân nặng: 
<?php 
		if($thongtinbenhnhan[0]['CanNang']!=''){
			echo $thongtinbenhnhan[0]['CanNang'].' kg';
		}?>
;&nbsp;&nbsp;&nbsp; Chỉ số BMI: 
<?php		if($thongtinbenhnhan[0]["CanNang"]!='' && $thongtinbenhnhan[0]["ChieuCao"]!='' ){
					$BMI= $thongtinbenhnhan[0]["CanNang"]/($thongtinbenhnhan[0]["ChieuCao"]*$thongtinbenhnhan[0]["ChieuCao"])*10000;
					echo round($BMI,1);		
				}else{
					$BMI='';
					}
			?>
<br />
Mạch: 
<?php 
		if($thongtinbenhnhan[0]['Mach']!=''){
		echo $thongtinbenhnhan[0]['Mach'].' lần/phút';
		}?>
;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Huyết áp: 
<?php
        if($thongtinbenhnhan[0]['Ps']!='' && $thongtinbenhnhan[0]['Ps']!=''){
		echo $thongtinbenhnhan[0]['Ps'].'/'.$thongtinbenhnhan[0]['Pd'].' mmHg';
		}?>
<br />
<?php
			 
            $pignet=$thongtinbenhnhan[0]['ChieuCao']-($thongtinbenhnhan[0]['CanNang']+$thongtinbenhnhan[0]['VongNguc']);	  
			if($pignet<10){
				$diengiai_pignet="Rất tốt";
			}else if(($pignet>=10)&&($pignet<20)){
				$diengiai_pignet="Tốt";
			}else if(($pignet>=20)&&($pignet<25)){
				$diengiai_pignet="Trung bình";
			}else if(($pignet>=25)&&($pignet<35)){
				$diengiai_pignet="Yếu";
			}else if($pignet>=35){
				$diengiai_pignet="Rất yếu";
			}
			 ?>
Phân loại thể lực: 
<?=$diengiai_pignet;?>
</div>
<br />
<strong>III. KHÁM LÂM SÀNG</strong><br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td style="text-align:center" width="80%"><strong>Nội dung khám</strong></td>
    <td style="text-align:center" width="20%"><strong>Họ tên, chữ ký của Bác sỹ</strong></td>
  </tr>
  <tr>
    <td style="border-bottom:none;"><strong>1. Nội khoa</strong></td>
    <td style="border-bottom:none;"><div align="center"></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">a) Tuần hoàn:
      <?=$khamlamsang[0]['TuanHoan_KL']?>
      <br />
    	Phân loại: loại
    <?php if($khamlamsang[0]['PhanLoaiTuanHoan']){ echo $khamlamsang[0]['PhanLoaiTuanHoan']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img id="bs_tuanhoan" width="75"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">b) Hô hấp: <?=$khamlamsang[0]['HoHap_KL']?>
      <br />
    	Phân loại: loại
    <?php if($khamlamsang[0]['PhanLoaiHoHap']){ echo $khamlamsang[0]['PhanLoaiHoHap']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img id="bs_hohap" width="75"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">c) Tiêu hóa:
      <?=$khamlamsang[0]['TieuHoa_KL']?>
      <br />
    	Phân loại: loại
    <?php if($khamlamsang[0]['PhanLoaiTieuHoa']){ echo $khamlamsang[0]['PhanLoaiTieuHoa']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_tieuhoa"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">d) Thận - Tiết niệu:
      <?=$khamlamsang[0]['Than_TietNieu_SD_KL']?>
      <br />
    	Phân loại: loại
    <?php if($khamlamsang[0]['PhanLoaiThan_TietNieu_SD']){ echo $khamlamsang[0]['PhanLoaiThan_TietNieu_SD']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_thantietnieu"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">đ) Nội tiết: <?=$khamlamsang[0]['NoiTiet_KL']?>
      <br />
    	Phân loại: loại
    <?php if($khamlamsang[0]['PhanLoaiNoiTiet']){ echo $khamlamsang[0]['PhanLoaiNoiTiet']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_noitiet"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">e) Cơ-Xương-Khớp: <?=$khamlamsang[0]['HeVanDong_KL']?>
      <br />
    	Phân loại loại:
    <?php if($khamlamsang[0]['PhanLoaiHeVanDong']){ echo $khamlamsang[0]['PhanLoaiHeVanDong']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_coxuongkhop"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">g) Thần kinh:
      <?=$khamlamsang[0]['ThanKinh_KL']?>
      <br />
    	Phân loại: loại
    <?php if($khamlamsang[0]['PhanLoaiThanKinh']){ echo $khamlamsang[0]['PhanLoaiThanKinh']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_thankinh"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">h) Tâm thần: <?=$khamlamsang[0]['TamThan_KL']?>
      <br />
    	Phân loại: loại
    <?php if($khamlamsang[0]['PhanLoaiTamThan']){ echo $khamlamsang[0]['PhanLoaiTamThan']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_tamthan"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;"><strong>2. Mắt:
    </strong></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">
    <table width="100%" border="0">
      <tr>
        <td width="33%">- Kết quả khám thị lực:</td>
        <td width="18%">Không kính:</td>
        <td width="25%">Mắt phải:
          <?=$khamlamsang[0]['MatPhai_KK']?>
/10 </td>
        <td width="24%"> Mắt trái:
          <?=$khamlamsang[0]['MatTrai_KK']?>
/10 </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Có kính:</td>
        <td>Mắt phải:
          <?=$khamlamsang[0]['MatPhai_CK']?>
/10</td>
        <td>  Mắt trái:
          <?=$khamlamsang[0]['MatTrai_KK']?>
/10</td>
      </tr>
    </table>
    - Các bệnh về mắt: 
    <?=$khamlamsang[0]['BenhMat_KL']?>
    <br />
    - Phân loại: loại 
    <?php if($khamlamsang[0]['PhanLoaiMat']){ echo $khamlamsang[0]['PhanLoaiMat']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_mat"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;"><strong>3. Tai-Mũi-Họng:
    </strong></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">- Kết quả khám thính lực:<br />
    <table width="100%" border="0">
  <tr>
    <td width="20%" style="padding-left:40px;">Tai trái:</td>
    <td width="31%">Nói thường: 
      <?=(float)$khamlamsang[0]['TaiTrai_NoiThuong']?> 
      m;</td>
    <td width="49%">Nói thầm: 
      <?=(float)$khamlamsang[0]['TaiTrai_NoiTham']?> 
      m</td>
  </tr>
  <tr>
    <td style="padding-left:40px;">Tai phải:</td>
    <td>Nói thường:
      <?=(float)$khamlamsang[0]['TaiPhai_NoiThuong']?> 
      m; </td>
    <td>Nói thầm: 
      <?=(float)$khamlamsang[0]['TaiPhai_NoiTham']?> 
      m</td>
  </tr>
</table>

        - Các bệnh về tai mũi họng: 
        <?=$khamlamsang[0]['TaiMuiHong_KL']?>
        <br />
    - Phân loại: loại    <?php if($khamlamsang[0]['PhanLoaiTMH']){ echo $khamlamsang[0]['PhanLoaiTMH']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_taimuihong"/></div></td>
  </tr>
</table>
</div>
<div id="page2" style="page-break-after: always;">
<?php	
	$params1 = array($_GET["id_kham"]);//tao param cho store 
	$store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
	$get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
	$excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
?>
<table width="100%"  border="1" cellpadding="0" cellspacing="0" id="n-table1">
  <tr>
    <td colspan="2" width="80%" style="vertical-align:top; border-bottom:none;"><strong>4. Răng-Hàm-Mặt</strong></td>
    <td   width="20%" rowspan="3" style="border-bottom:none; border-top:none; text-align:center"><img alt="" width="80" id="bs_ranghammat"/></td>
  </tr>
  <tr>
    <td width="109" style="vertical-align:top; border-bottom:none; border-top:none; border-right:none">- Kết quả khám:</td>
    <td width="379"  style="border-bottom:none; border-top:none; border-left:none ;">+ Hàm trên: <span >
      <?=$khamlamsang[0]['HamTren_RHM']?>
    </span><br />
    + Hàm dưới: <span style="border-bottom:none; border-top:none;">
    <?=$khamlamsang[0]['HamDuoi_RHM']?>
    </span></td>
  </tr>
  <tr>
    <td colspan="2"  style="vertical-align:top; border-bottom:none; border-top:none;">- Các bệnh Răng-Hàm-Mặt <span>
      <?=$khamlamsang[0]['RangHamMat_KL']?>
    </span><br />
- Phân loại:<span style="border-bottom:none; border-top:none;"> loại</span> <span style="border-bottom:none; border-top:none;">
<?=$khamlamsang[0]['PhanLoaiRHM']?>
</span></td>
  </tr>
  <tr>
    <td colspan="2"  style="vertical-align:top; border-bottom:none; border-top:none;"><strong>5. Da liễu:</strong> <span>
      <?=$khamlamsang[0]['DaLieu_KL']?>
    </span><br />
      Phân loại:<span style="border-bottom:none; border-top:none;"> loại</span> <span style="border-bottom:none; border-top:none;">
      <?=$khamlamsang[0]['PhanLoaiDaLieu']?>
      </span></td>
    <td  style="vertical-align:top; border-bottom:none; border-top:none; text-align:center"><img alt="" width="80" id="bs_dalieu"/></td>
  </tr>
</table><br />
<strong>IV. KHÁM CẬN LÂM SÀNG</strong><br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="80%" style="text-align:center"><strong>Nội dung khám</strong></td>
    <td width="20%" style="text-align:center"><strong>Họ tên, chữ ký của Bác sỹ</strong></td>
  </tr>
  <tr>
    <td style="padding-left:4px;">Xét nghiệm huyết học-sinh hóa, Siêu âm, X-quang và các CLS khác:<br />
    a. Kết quả Xét nghiệm:.........................................<br />
    b. Kết quả Siêu âm:..............................................<br />
    c. Kết quả: X-Quang............................................</td>
    <td>&nbsp;</td>
  </tr>
</table><br />
<strong>V. KẾT LUẬN</strong><br />
<strong>1. Phân loại sức khỏe:</strong> <span style="border-bottom:none; border-top:none;">
Sức khỏe loại <?php 
if(isset($khamlamsang[0]['ExtField1'])){
$rs=$khamlamsang[0]['ExtField1'];
$tam=explode(";",$rs);
	if(isset($tam[1])){
		echo $tam[1];
	}

}
?>
</span><br />
<strong>2. Các bệnh tật:</strong> <span style="border-bottom:none; border-top:none;">
<?php 
	$rs=$khamlamsang[0]['KetLuanChung'];
	$tam=explode("|||",$rs);
	//echo "<pre>";
	echo $tam[0];
	//echo "</pre>";
?>
</span><br />
<br />
<table width="100%" >
  <tr>
    <td width="55%">&nbsp;</td>
    <td width="45%" style="text-align:center">Đà Nẵng, Ngày <span style="padding-right:10px;"><?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?></span></td>
  </tr>
  <tr>
    <td style="text-align:center; vertical-align:top">TUQ. Giám đốc</td>
    <td style="text-align:center">Bác sỹ kết luận<br /><br /><br /><br /><br />
      <b>
      <?=$thongtinluotkham[0]["BsChanDoan"];?>
    </b></td>
  </tr>
</table>
<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
<table width="100%" style="bottom:0; left:0; display:none;">
  <tr>
    <td>Ghi chú: <br />
    Mẫu KHÁM SỨC KHỎE ĐỊNH KỲ này Căn cứ theo thông tư số /2013/TT-BYT ngày 06 tháng 5 năm 2013 của Bộ trưởng Bộ Y tế (Đính kèm phụ lục)</td>
  </tr>
</table>
</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_TuanHoan"]?>',"bs_tuanhoan");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_HoHap"]?>',"bs_hohap");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_TieuHoa"]?>',"bs_tieuhoa");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_Than_TietNieu_SD"]?>',"bs_thantietnieu");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_NoiTiet"]?>',"bs_noitiet");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_HeVanDong"]?>',"bs_coxuongkhop");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_ThanKinh"]?>',"bs_thankinh");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_TamThan"]?>',"bs_tamthan");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_Mat"]?>',"bs_mat");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_TMH"]?>',"bs_taimuihong");
		
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_RHM"]?>',"bs_ranghammat");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_DaLieu"]?>',"bs_dalieu");

		print_preview();
	})
</script>
</html>