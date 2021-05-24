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
	width:650px;
	margin-bottom:7px;
}
.top{
	margin-top:5px;
}
table td{
	padding-left:5px;
}
</style>
<body>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	//$params = array($_GET["id_benhnhan"]);//tao param cho store 
	//$store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
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
<p style="text-align:center"><strong class="test">KHÁM SỨC KHỎE ĐỊNH KỲ</strong></p>
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
      <?=$khamlamsang[0]['TaiTrai_NoiThuong']?> 
      m;</td>
    <td width="49%">Nói thầm: 
      <?=$khamlamsang[0]['TaiTrai_NoiTham']?> 
      m</td>
  </tr>
  <tr>
    <td style="padding-left:40px;">Tai phải:</td>
    <td>Nói thường:
      <?=$khamlamsang[0]['TaiPhai_NoiThuong']?> 
      m; </td>
    <td>Nói thầm: 
      <?=$khamlamsang[0]['TaiPhai_NoiTham']?> 
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
			
		print_preview();
	})
</script>
</html>