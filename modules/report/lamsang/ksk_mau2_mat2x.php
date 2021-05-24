<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
fieldset{
	border:#000 1px solid;}
pre{
font-family:Arial, Helvetica, sans-serif !important;
font-size: 14px;
margin-top: 0px;
margin-bottom: 0px;
}
.con{
	margin-left:10px;
}
.tieude{
	line-height:22px;
}
.con{
	margin-left:10px;
}
</style>
<body>
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
        $ketluan= $excute11->get_as_array();
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc

		if($khamlamsang[0]['ExtField1']!=''){
			$loai=explode(';',$khamlamsang[0]['ExtField1']);
			$khamlamsang[0]['ExtField1']	='Phân loại sức khỏe: Loại '.$loai[1];
		}else{
			$khamlamsang[0]['ExtField1']	='';	
		}
		$TaiPhai_NoiTham=explode(".",(string)$khamlamsang[0]['TaiPhai_NoiTham2']);
		if($TaiPhai_NoiTham[1]>0){
			$khamlamsang[0]['TaiPhai_NoiTham2']	=$khamlamsang[0]['TaiPhai_NoiTham2'];
		}else{
			$khamlamsang[0]['TaiPhai_NoiTham2']	=$TaiPhai_NoiTham[0];	
		}
		
		$TaiPhai_NoiTham=explode(".",(string)$khamlamsang[0]['TaiTrai_NoiTham2']);
		if($TaiPhai_NoiTham[1]>0){
			$khamlamsang[0]['TaiTrai_NoiTham2']	=$khamlamsang[0]['TaiTrai_NoiTham2'];
		}else{
			$khamlamsang[0]['TaiTrai_NoiTham2']	=$TaiPhai_NoiTham[0];	
		}
		
		$TaiPhai_NoiThuong=explode(".",(string)$khamlamsang[0]['TaiPhai_NoiThuong2']);
		if($TaiPhai_NoiThuong[1]>0){
			$khamlamsang[0]['TaiPhai_NoiThuong2']	=$khamlamsang[0]['TaiPhai_NoiThuong2'];
		}else{
			$khamlamsang[0]['TaiPhai_NoiThuong2']	=$TaiPhai_NoiThuong[0];	
		}
		
		$TaiTrai_NoiThuong=explode(".",(string)$khamlamsang[0]['TaiTrai_NoiThuong2']);
		if($TaiTrai_NoiThuong[1]>0){
			$khamlamsang[0]['TaiTrai_NoiThuong2']	=$khamlamsang[0]['TaiTrai_NoiThuong2'];
		}else{
			$khamlamsang[0]['TaiTrai_NoiThuong2']	=$TaiTrai_NoiThuong[0];	
		}
?>
<strong class="tieude">I. KHÁM LÂM SÀNG:</strong><br />
<div class="con">
<table width="100%">
  <tr>
    <td>- Huyết áp: 
    <?php
        if($thongtinbenhnhan[0]['Ps']!='' && $thongtinbenhnhan[0]['Ps']!=''){
		echo $thongtinbenhnhan[0]['Ps'].'/'.$thongtinbenhnhan[0]['Pd'].' mmHg';
		}?></td>
    <td>- Mạch: 
    <?php 
		if($thongtinbenhnhan[0]['Mach']!=''){
		echo $thongtinbenhnhan[0]['Mach'].' lần/phút';
		}?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>- Cân nặng: 
    <?php 
		if($thongtinbenhnhan[0]['CanNang']!=''){
			echo $thongtinbenhnhan[0]['CanNang'].' kg';
		}?></td>
    <td>- Chiều cao: 
    <?php if($thongtinbenhnhan[0]['ChieuCao']){echo $thongtinbenhnhan[0]['ChieuCao'].' cm';}?></td>
    <td>- Vòng ngực: 
    <?php
        if($thongtinbenhnhan[0]['VongNguc']!=''){
		echo $thongtinbenhnhan[0]['VongNguc'].' cm';
		}?></td>
  </tr>
  <tr>
    <td>- BMI: 
    <?php		if($thongtinbenhnhan[0]["CanNang"]!='' && $thongtinbenhnhan[0]["ChieuCao"]!='' ){
					$BMI= $thongtinbenhnhan[0]["CanNang"]/($thongtinbenhnhan[0]["ChieuCao"]*$thongtinbenhnhan[0]["ChieuCao"])*10000;
					echo round($BMI,1);		
				}else{
					$BMI='';
					}
			?></td>
    <td colspan="2">- Cân nặng hợp lý: 
      <?php
    $cannang1= 18.5*($thongtinbenhnhan[0]['ChieuCao'] * $thongtinbenhnhan[0]['ChieuCao'] )/10000; 
	$cannang2= 23*($thongtinbenhnhan[0]['ChieuCao'] * $thongtinbenhnhan[0]['ChieuCao'] )/10000;	 
	/*$("#cannang_a").val(convert_comma_dot(cannang1.toFixed(0))+ " kg");
	$("#cannang_b").val(convert_comma_dot(cannang2.toFixed(0))+ " kg"); */
	if(round($cannang1)){
	?>
Từ
<?=round($cannang1)?>
kg đến
<?=round($cannang2)?>
kg
<?php }?></td>
  </tr>
  <tr>
    <td><?php
			 
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
    - Phân loại thể lực: 
    <?=$diengiai_pignet;?></td>
    <td colspan="2"><?php
    if($BMI<18.5 ){
		$diengiai_BMI="Gầy";
	}else if(($BMI>=18.5)&&($BMI<23)){
		$diengiai_BMI="Bình thường";
	}else if(($BMI>=23)&&($BMI<25)){
		$diengiai_BMI="Thừa cân";
	}else if(($BMI>=25)&&($BMI<30)){
		$diengiai_BMI="Béo phì độ I";
	}else if(($BMI>=30)&&($BMI<35)){
		$diengiai_BMI="Béo phì độ II";
	}else if($BMI>=35){
		$diengiai_BMI="Béo phì độ III";
	}
	?>
    - Tình trạng dinh dưỡng: 
    <?=$diengiai_BMI?></td>
  </tr>
</table>
</div>
<strong class="tieude">*. NỘI KHOA:</strong><br />
<div class="con">
a. Tuần hoàn: <?=$khamlamsang[0]['TuanHoan_KL']?><br />
b. Hô Hấp: 
<?=$khamlamsang[0]['HoHap_KL']?>
<br />
c. Tiêu hóa: 
<?=$khamlamsang[0]['TieuHoa_KL']?>
<br />
d. Thận tiết niệu: 
<?=$khamlamsang[0]['Than_TietNieu_SD_KL']?>
<br />
e. Nội tiết: 
<?=$khamlamsang[0]['NoiTiet_KL']?>
<br />
f. Cơ xương khớp: 
<?=$khamlamsang[0]['HeVanDong_KL']?>

</div>
<strong class="tieude">*. NGOẠI KHOA:</strong> <?=$khamlamsang[0]['NgoaiKhoa_KL']?><br />
<strong class="tieude">*. SẢN PHỤ KHOA:</strong> 
<?=$khamlamsang[0]['SanPhuKhoa_KL']?>
<br />
<strong class="tieude">* MẮT:</strong><br />
<div class="con">- Thị lực: Có kính: Mắt phải: 
<?=$khamlamsang[0]['MatPhai_CK']?>
/10&nbsp;&nbsp; Mắt trái:   
<?=$khamlamsang[0]['MatTrai_CK']?>
/10 &nbsp;&nbsp;&nbsp;. Không kính: Mắt phải: 
<?=$khamlamsang[0]['MatPhai_KK']?>
/10&nbsp;&nbsp; Mắt trái: 
<?=$khamlamsang[0]['MatTrai_KK']?>
/10<br />
- Bệnh về mắt: 
<?=$khamlamsang[0]['BenhMat_KL']?><br />
</div>
<strong class="tieude">*. TAI MŨI HỌNG:</strong><br />
<div class="con">
- Thính lực: Nói thường: Tai phải: <?=(string)$khamlamsang[0]['TaiPhai_NoiThuong2']?> m Tai trái: <?=(string)$khamlamsang[0]['TaiTrai_NoiThuong2']?> m &nbsp;&nbsp;&nbsp;. Nói thầm: Tai phải: <?=(string)$khamlamsang[0]['TaiPhai_NoiTham2']?> m Tai trái: <?=(string)$khamlamsang[0]['TaiTrai_NoiTham2'];?> m<br />
- Bệnh về Tai- Mũi - Họng: 
<?=$khamlamsang[0]['TaiMuiHong_KL']?><br />
</div>
<strong class="tieude">*. RĂNG HÀM MẶT:</strong> 
<div class="con">
- Hàm trên: <?=$khamlamsang[0]['HamTren_RHM']?> &nbsp;&nbsp;&nbsp; - Hàm dưới: <?=$khamlamsang[0]['HamDuoi_RHM']?> <br />
- Bệnh về Răng - Hàm - Mặt:
<?=$khamlamsang[0]['RangHamMat_KL']?><br />
</div>
<strong class="tieude">*. DA LIỄU:</strong> 
<?=$khamlamsang[0]['DaLieu_KL']?>
<br />
<strong class="tieude">*. TÂM THẦN KINH:</strong> 
<br />
<div class="con">
- Thần kinh: 
<?=$khamlamsang[0]['ThanKinh_KL']?>
<br />
- Tâm thần: 
<?=$khamlamsang[0]['TamThan_KL']?>
</div>
<strong class="tieude">II. KẾT QUẢ CẬN LÂM SÀNG:</strong><br />
<div class="con">
<?php 
	$rs=$khamlamsang[0]['KetLuanChung'];
	$tam=explode("|||",$rs);
	echo "<pre>";
	echo $tam[1];
	echo "</pre>";
	
?>
</div>
<strong class="tieude">III. KẾT LUẬN:</strong><br />
<div class="con">
<?php 
	echo "<pre>";
	echo $tam[0];
	echo "</pre>";
	echo $khamlamsang[0]['ExtField1'];
?>
 </div>
 <br />
<table width="100%" >
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:center">Đà Nẵng, Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?></td>
  </tr>
  <tr>
    <td style="text-align:center; vertical-align:top"><strong>TUQ Giám đốc</strong><br />
    	(Ký và ghi rỏ họ tên)
    </td>
    <td style="text-align:center"><strong>Bác sỹ khám ký tên</strong><br />
    	(Ký và ghi rỏ họ tên)<br /><br /><br /><br /><br />
        
        <?php if(isset($ketluan[0]["tennv"])){echo $ketluan[0]["tennv"];}else{ echo '<br>';}?>
    </td>
  </tr>
</table>

</body>
<script type="text/javascript">
	$(document).ready(function() {	
		print_preview();
	})
</script>
</html>
