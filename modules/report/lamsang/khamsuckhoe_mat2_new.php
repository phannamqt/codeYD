<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	font-family:Arial, Helvetica, sans-serif !important;
	padding-left:20px;
	padding-top:0px;
	line-height: 18px !important;
}
.benhkhac{
	line-height: 18px !important;
}
fieldset{
	border:#000 1px solid;}
pre{
font-family:Arial, Helvetica, sans-serif !important;
font-size: 14px;
margin-top: 0px;
margin-bottom: 0px;
}	
</style>
</head>
 
<body>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL

		$params_chuky = array();
		$store_name_chuky="{call GD2_GetNhanVienChuKyMacDinhKSK()}";
		$get_chuky=$data->query( $store_name_chuky,$params_chuky);
		$excute_chuky= new SQLServerResult($get_chuky);
		$thongtin_chuky= $excute_chuky->get_as_array();
		
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
		
		
		
        $params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_GetTenCongTyByID_Kham(?)}";//tao bien khai bao store
        $get_tencty=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_tencty);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtincty= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc  
	    //print_r($thongtinbenhnhan);
		
		$params3 = array($_GET["id_benhnhan"],$_GET["id_kham"]);//tao param cho store 
        $store_name3="{call GD2_KSKCongTySelectAllByIDBenhNhanAndID_Kham(?,?)}";//tao bien khai bao store
        $get_khamlamsang=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_khamlamsang);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khamlamsang= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc
		/*
		$params4 = array($_GET["id_luotkham"],"do_xo_vua_dong_mach_abi");//tao param cho store 
        $store_name4="{call GD2_GetKhamByID_LuotKhamAndTenForm(?,?)}";//tao bien khai bao store
        $get_doxovuadongmach=$data->query( $store_name4,$params4);//Goi store
        $excute4= new SQLServerResult($get_doxovuadongmach);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $doxovuadongmach= $excute4->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params5 = array($_GET["id_luotkham"],"do_loang_xuong_bmd");//tao param cho store 
        $store_name5="{call GD2_GetKhamByID_LuotKhamAndTenForm(?,?)}";//tao bien khai bao store
        $get_domatdoxuong=$data->query( $store_name5,$params5);//Goi store
        $excute5= new SQLServerResult($get_domatdoxuong);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $domatdoxuong= $excute5->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params6 = array($_GET["id_luotkham"],"DienTamDo");//tao param cho store 
        $store_name6="{call GD2_GetKhamByID_LuotKhamAndTenForm(?,?)}";//tao bien khai bao store
        $get_dientamdo=$data->query( $store_name6,$params6);//Goi store
        $excute6= new SQLServerResult($get_dientamdo);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $dientamdo= $excute6->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params7 = array($_GET["id_luotkham"],"sieu_am_4d");//tao param cho store 
        $store_name7="{call GD2_GetKhamByID_LuotKhamAndTenForm(?,?)}";//tao bien khai bao store
        $get_sieuam4d=$data->query( $store_name7,$params7);//Goi store
        $excute7= new SQLServerResult($get_sieuam4d);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $sieuam4d= $excute7->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params8 = array($_GET["id_luotkham"],"dien_nao_do_eeg");//tao param cho store 
        $store_name8="{call GD2_GetKhamByID_LuotKhamAndTenForm(?,?)}";//tao bien khai bao store
        $get_diennaodo=$data->query( $store_name8,$params8);//Goi store
        $excute8= new SQLServerResult($get_diennaodo);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $diennaodo= $excute8->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params9 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name9="{call GD2_GetXquangPhoiThangByID_LuotKham(?)}";//tao bien khai bao store
        $get_xqphoithang=$data->query( $store_name9,$params9);//Goi store
        $excute9= new SQLServerResult($get_xqphoithang);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $xqphoithang= $excute9->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params10 = array($_GET["id_luotkham"],"Noisoi");//tao param cho store 
        $store_name10="{call GD2_GetKhamByID_LuotKhamAndTenForm(?,?)}";//tao bien khai bao store
        $get_xetnghiem=$data->query( $store_name10,$params10);//Goi store
        $excute10= new SQLServerResult($get_xetnghiem);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $xetnghiem= $excute10->get_as_array();//Tra ve mang toan bo data lay duoc
		*/
		$params11 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name11="{call GD2_MedicalReport_NewSelectByID_LuotKham_New(?)}";//tao bien khai bao store
        $get_ketluan=$data->query( $store_name11,$params11);//Goi store
        $excute11= new SQLServerResult($get_ketluan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $ketluan= $excute11->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($ketluan);
		$params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
    ?>
<p style="font-weight:bold;"> <i>KHÁM LÂM SÀNG</i></p>
 <table cellpadding="0" cellspacing="0" border="0" style="width:700px;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:14px;">
  <tr>
    <td colspan="4" >Chiều cao:&nbsp;<?php if($thongtinbenhnhan[0]['ChieuCao']){echo $thongtinbenhnhan[0]['ChieuCao'].' cm';}?></td>
    <td width="14%">Cân nặng:</td>
    <td width="10%"><?php 
		if($thongtinbenhnhan[0]['CanNang']!=''){
			echo $thongtinbenhnhan[0]['CanNang'].' kg';
		}?></td>
    <td width="17%">Vòng ngực:</td>
    <td width="25%"><?php
        if($thongtinbenhnhan[0]['VongNguc']!=''){
		echo $thongtinbenhnhan[0]['VongNguc'].' cm';
		}?></td>
  </tr>
  <tr>
    <td colspan="4">Mạch:&nbsp;
      <?php 
		if($thongtinbenhnhan[0]['Mach']!=''){
		echo $thongtinbenhnhan[0]['Mach'].' lần/phút';
		}?>
    </td>
    <td>Huyết áp:</td>
    <td colspan="3"><?php
        if($thongtinbenhnhan[0]['Ps']!='' && $thongtinbenhnhan[0]['Ps']!=''){
		echo $thongtinbenhnhan[0]['Ps'].'/'.$thongtinbenhnhan[0]['Pd'].' mmHg';
		}?></td>
   </tr>
  <tr>
    <td colspan="2">BMI:&nbsp;
    <?php		if($thongtinbenhnhan[0]["CanNang"]!='' && $thongtinbenhnhan[0]["ChieuCao"]!='' ){
					$BMI= $thongtinbenhnhan[0]["CanNang"]/($thongtinbenhnhan[0]["ChieuCao"]*$thongtinbenhnhan[0]["ChieuCao"])*10000;
					echo round($BMI,1);		
				}else{
					$BMI='';
					}
			?></td>
    <td width="7%">Pignet:</td>
    <td width="10%"><?php
    $pignet= $thongtinbenhnhan[0]["ChieuCao"]-($thongtinbenhnhan[0]["VongNguc"]+$thongtinbenhnhan[0]["CanNang"]);
	echo  round($pignet, 1);
	?></td>
    <td>Tỉ lệ chất béo:</td>
    <td><?php
    	if($thongtinbenhnhan[0]["Gioi"]=='Nam' && $BMI!=''){
			$bp = 51.6 - 735/$BMI + 0.029 * $thongtinbenhnhan[0]["Tuoi"];
			echo round($bp).' %';	
			}
	?></td>
    <td>Cân nặng hợp lý:</td>
    <td><?php
    $cannang1= 18.5*($thongtinbenhnhan[0]['ChieuCao'] * $thongtinbenhnhan[0]['ChieuCao'] )/10000; 
	$cannang2= 23*($thongtinbenhnhan[0]['ChieuCao'] * $thongtinbenhnhan[0]['ChieuCao'] )/10000;	 
	/*$("#cannang_a").val(convert_comma_dot(cannang1.toFixed(0))+ " kg");
	$("#cannang_b").val(convert_comma_dot(cannang2.toFixed(0))+ " kg"); */
	if(round($cannang1)){
	?>
    Từ <?=round($cannang1)?> kg đến <?=round($cannang2)?> kg
   <?php }?> 
   </td>
  </tr>
  <tr>
    <td colspan="4"><?php
			 
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
    Phân loại thể lực: <?=$diengiai_pignet;?></td>
    <td colspan="4"><?php
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
	Tình trạng dinh dưỡng: <?=$diengiai_BMI?></td>
  </tr>
  <tr>
    <td colspan="8">1. Mắt:</td>
  </tr>
  <?php if($khamlamsang[0]['MatPhai_CK']>0 || $khamlamsang[0]['MatTrai_CK']>0){?>
  <tr>
    <td width="18%">+ Có kính:</td>
    <td colspan="4">MP: <?=$khamlamsang[0]['MatPhai_CK']?>/10</td>
    <td colspan="3">-MT:  <?=$khamlamsang[0]['MatTrai_CK']?>/10</td>
  </tr>
  <?php }?>
  <tr>
    <td>+ Không kính:</td>
    <td colspan="4">MP: <?=$khamlamsang[0]['MatPhai_KK']?>/10</td>
    <td colspan="3">-MT: <?=$khamlamsang[0]['MatTrai_KK']?>/10</td>
  </tr>
  <tr>
    <td colspan="8">Các bệnh về mắt: <?=$khamlamsang[0]['BenhMat_KL']?></td>
  </tr>
  <tr>
    <td>2. Tai mũi họng:</td>
    <td colspan="7"><?=$khamlamsang[0]['TaiMuiHong_KL']?></td>
  </tr>
  <tr>
    <td>3. Răng hàm mặt:</td>
    <td colspan="7"><?=$khamlamsang[0]['RangHamMat_KL']?></td>
  </tr>
  <tr>
    <td>4. Da liễu:</td>
    <td colspan="7"><?=$khamlamsang[0]['DaLieu_KL']?></td>
  </tr>
  <tr>
    <td>5. Ngoại khoa:</td>
    <td colspan="7"><?=$khamlamsang[0]['NgoaiKhoa_KL']?></td>
  </tr>
  <tr>
    <td>6. Nội khoa:</td>
    <td colspan="7"><?=$khamlamsang[0]['NoiKhoa_KL']?></td>
  </tr>
  <?php 
if($khamlamsang[0]['SanPhuKhoa_KL']!='' && $thongtinbenhnhan[0]["Gioi"]=='Nữ'){
?>
  <tr>
    <td>7. Sản phụ khoa:</td>
    <td colspan="7"><?=$khamlamsang[0]['SanPhuKhoa_KL']?></td>
  </tr>
  <?php
}
?>
</table>
<br />
<p style="font-weight:bold;margin: 0px;"> <i>KHÁM CẬN LÂM SÀNG</i></p>
<pre style="width:650px;white-space: pre-wrap;">
<?php 
if(count($ketluan)>0){
	echo trim($ketluan[0]['CanLamSang']);
 }/*
	if($thongtinbenhnhan[0]['Mach']!=''){
		echo "Mạch: ".$thongtinbenhnhan[0]['Mach'].' L/P';
	}
	if($thongtinbenhnhan[0]['ChieuCao']!=''){
		echo " - Cao: ".($thongtinbenhnhan[0]['ChieuCao']/100).' m';
	}
	if($thongtinbenhnhan[0]['CanNang']!=''){
		echo " - Nặng: ".$thongtinbenhnhan[0]['CanNang'].' kg';
	}
	if($BMI){
		echo " - BMI: ".round($BMI, 1).' ('.$diengiai_BMI.')<br />';
	}
	if($khamlamsang[0]['MatPhai_CK']>0){
		echo "2/ Đo thể lực hai mắt: ".round(($khamlamsang[0]['MatPhai_CK']+$khamlamsang[0]['MatTrai_CK'])/2)." /10<br />";
	}elseif($khamlamsang[0]['MatPhai_KK']>0){
		echo "2/ Đo thể lực hai mắt: ".round(($khamlamsang[0]['MatPhai_KK']+$khamlamsang[0]['MatPhai_KK'])/2)." /10<br />";
	}
	echo "3/ Triệu chứng lâm sàng: <br />";
	if(count($doxovuadongmach) && $doxovuadongmach[0]['MoTa']!='' && $doxovuadongmach[0]['KetLuan']!=''){
		echo "+ Đo xơ vữa động mạch: ".$doxovuadongmach[0]['MoTa'].'/'.$doxovuadongmach[0]['KetLuan'].'<br>';
		}
    if(count($domatdoxuong) && $domatdoxuong[0]['KetLuan']!=''){
		echo "+ Đo mật độ xương: ".$domatdoxuong[0]['KetLuan'].'<br />';
		}
	if(count($dientamdo) && $dientamdo[0]['KetLuan']!=''){
		echo "+ Điện tâm đồ: ".$dientamdo[0]['KetLuan'].'<br />';
		}
	if(count($sieuam4d) && $sieuam4d[0]['KetLuan']!=''){
		echo "+ Siêu âm thai 4 chiều: ".$sieuam4d[0]['KetLuan'].'<br />';
		}
	if(count($diennaodo) && $diennaodo[0]['KetLuan']!=''){
		echo "+ Điện não đồ: ".$diennaodo[0]['KetLuan'].'<br />';
		}
	if(count($xqphoithang) && $xqphoithang[0]['KetLuan']!=''){
		echo "+ XQ Phổi thẳng: ".$xqphoithang[0]['KetLuan'].'<br />';
		}
	if(count($xetnghiem) && $xetnghiem[0]['KetLuan']!=''){
		echo "+ Xét nghiệm: ".$xetnghiem[0]['KetLuan'].'<br />';
		}*/
?>
</pre>
<p style="font-weight:bold;;margin: 0px; margin-bottom:10px !important; margin-top:10px"> <i>KẾT LUẬN</i></p>
<p style="font-weight:bold; font-size:14px;;margin: 0px;">Tình trạng bệnh tật hiện tại:</p>
<div style="font-size:14px; font-family:Arial, Helvetica, sans-serif; margin: 0px;"><?php 
if(count($ketluan)>0){
	echo "<pre>";
	echo $ketluan[0]['KetLuan'];
	echo "</pre>";
 }?></div>
<p style="font-weight:bold;font-size:14px;;margin: 0px;">Hướng giải quyết:</p>
 <pre style="font-family:Arial, Helvetica, sans-serif; font-size:14px;margin: 0px;">
<?php 
if(count($ketluan)>0){
	echo $ketluan[0]['HuongDanDieuTri']; 
	 } ?>
</pre>
<p style="font-weight:bold;font-size:14px;;margin: 0px;">Xếp loại sức khỏe: Sức khỏe loại <?php 
if(isset($khamlamsang[0]['ExtField1'])){
$rs=$khamlamsang[0]['ExtField1'];
$tam=explode(";",$rs);
	if(isset($tam[1])){
		echo $tam[1];
	}

}
?></p>
<table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:14px;">
  <tr>
	<td width="50%" style="padding-left:10px;" align="center"></td>
    <td width="50%" align="center" style="padding-right:10px;">Đà Nẵng, Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?></td>
</tr>

<td width="50%" style="padding-left:10px; vertical-align:top" align="center">TUQ. Giám đốc <br /><br /> 
<img id="bs_giamdoc" width="100"/><br />
<b style="color:red"><?=$thongtin_chuky[0]["tennhanvien"]?></b>
</td>
    <td width="50%" align="center" style="padding-right:10px; vertical-align:top">Bác sỹ kết luận <br />
    
     <img id="bs_chandoan" width="100"/><br />
      <b style="color:red"><?php if(isset($ketluan[0]["tennv"])){echo $ketluan[0]["tennv"];}else{ echo '<br>';}?></b></td>
</tr>
</table>

</div>
</body>
 <script type="text/javascript">
	$(document).ready(function() {	
	<?php if(isset($ketluan[0]["HinhChuKy"])){
		?>
		load_sign('<?=$ketluan[0]["HinhChuKy"]?>',"bs_chandoan");
	<?php
	}
	?>
	<?php if(isset($thongtin_chuky[0]["chuky_nhanvien"])){
		?>
		load_sign('<?=$thongtin_chuky[0]["chuky_nhanvien"]?>',"bs_giamdoc");
	<?php
	}
	?>
		print_preview();
	})
</script>
</html>
 