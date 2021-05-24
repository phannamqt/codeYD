<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
}
#n-table1 td{
	padding-left:4px;
}
</style>
</head>

<body>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params3 = array($_GET["id_benhnhan"],$_GET["id_kham"]);//tao param cho store 
	$store_name3="{call GD2_KSKCongTySelectAllByIDBenhNhanAndID_Kham(?,?)}";//tao bien khai bao store
	$get_khamlamsang=$data->query( $store_name3,$params3);//Goi store
	$excute3= new SQLServerResult($get_khamlamsang);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$khamlamsang= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc
	
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
    <td width="57%">&nbsp;</td>
    <td width="43%" style="text-align:center">Đà Nẵng, Ngày <span style="padding-right:10px;"><?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?></span></td>
  </tr>
  <tr>
    <td style="text-align:center; vertical-align:top">TUQ. Giám đốc</td>
    <td style="text-align:center">Bác sỹ kết luận<br /><br /><br /><br /><br />
      <b>
      <?=$thongtinluotkham[0]["BsChanDoan"];?>
    </b></td>
  </tr>
</table>
<br />
<table width="100%" style="position:absolute; bottom:0; left:0; display:none;">
  <tr>
    <td>Ghi chú: <br />
    Mẫu KHÁM SỨC KHỎE ĐỊNH KỲ này Căn cứ theo thông tư số /2013/TT-BYT ngày 06 tháng 5 năm 2013 của Bộ trưởng Bộ Y tế (Đính kèm phụ lục)</td>
  </tr>
</table>

</body>
<script type="text/javascript">
	$(document).ready(function() {	
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_RHM"]?>',"bs_ranghammat");
		load_sign_new('<?=$khamlamsang[0]["ChuKyBS_DaLieu"]?>',"bs_dalieu");
		print_preview();
	})
</script>
</html>
