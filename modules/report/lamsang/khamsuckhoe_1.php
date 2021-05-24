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
	font-size:13px;
}table td{
	padding-top:7px;
	
}
input[class="textdot"] {
	width:100%;	
	 border-top: none!important;
  border-left: none!important;
  border-right: none!important;
  box-shadow:  none!important;
  padding: 0px!important;
  border-bottom:dotted 2px #000000;
}
input[class="textdot1"] {
	width:305px;	
	 border-top: none!important;
  border-left: none!important;
  border-right: none!important;
  box-shadow:  none!important;
  padding: 0px!important;
  border-bottom:dotted 2px #000000;
}
input[class="textdot2"] {
	width:100%;	
	 border-top: none!important;
  border-left: none!important;
  border-right: none!important;
  box-shadow:  none!important;
  padding: 0px!important;
  border-bottom:dotted 2px #000000;
}

</style>
</head>
 
<body>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		 
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params2 = array($_GET["id_benhnhan"],$_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_KSKCongTySelectAllByIDBenhNhanAndID_Kham(?,?)}";//tao bien khai bao store
        $get_khamlamsang=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_khamlamsang);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khamlamsang= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params3 = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name3="{call GD2_GetTTBN_ByID_BenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbn=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_thongtinbn);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbn= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc
		
		//print_r($khamlamsang);
   
    ?>


     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;font-size:13px;">
     <tr>
     	<td width="40%" style="padding-left:15px; padding-top:8px;">
        <strong style=" font-size:13px; padding-top:5px; padding-bottom:8px;">BỘ Y TẾ</strong><br />
        Sở y tế TP Đà Nẵng<br />
        <?php echo $_SESSION["com"]["TenBenhVien"]?>
        </td>
       
        <td align="center" width="60%" style="font-weight:bold; font-size:13px;padding-left: 60px;"> 
         CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br />
         Độc lập - Tự do - Hạnh phúc
        </td>
     </tr>
     </table>
     <h2 align="center">PHIẾU KHÁM SỨC KHỎE ĐỊNH KỲ</h2>
     <p align="center" style="margin-top: -10px;">(Học sinh, Sinh viên, Người lao động) </p>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;font-size:13px;">
     <tr>
     	<td style="font-weight:bold; width:60%; padding-left:5px;">Họ tên đối tượng KSK định kỳ: <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
        </td>
        <td style="font-weight:bold; width:40%;">Ngày KSK: <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
			}
			?>
        </td>
     </tr>
     </table><br />
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px;font-size:13px;">
      <tr>
        <td style="font-weight:bold; width:20%;">I. KHÁM THỂ LỰC:</td>
        <td style="width:20%;">Chiều cao:</td>
        <td style="width:20%;"><?php 
		if($thongtinbenhnhan[0]['ChieuCao']!=''){
		echo $thongtinbenhnhan[0]['ChieuCao'].' cm';}?> </td>
        <td style="width:10%;">Mạch: </td>
        <td style="width:30%;"><?php 
		if($thongtinbenhnhan[0]['Mach']!=''){
		echo $thongtinbenhnhan[0]['Mach'].' lần/phút';
		}?></td>
      </tr>
      <tr>
        <td rowspan="3"></td>
        <td>Cân nặng:</td>
        <td><?php 
		if($thongtinbenhnhan[0]['CanNang']!=''){
			echo $thongtinbenhnhan[0]['CanNang'].' kg';
		}?> </td>
        <td>Huyết áp:</td>
        <td><?php
        if($thongtinbenhnhan[0]['Ps']!='' && $thongtinbenhnhan[0]['Ps']!=''){
		echo $thongtinbenhnhan[0]['Ps'].'/'.$thongtinbenhnhan[0]['Pd'].' mmHg';
		}?> </td>
      </tr>
      <tr>
        <td>Vòng ngực trung bình:</td>
        <td><?php
        if($thongtinbenhnhan[0]['VongNguc']!=''){
		echo $thongtinbenhnhan[0]['VongNguc'].' cm';
		}?> </td>
        <td>Nhiệt độ:</td>
        <td><?php
        if($thongtinbenhnhan[0]['ThanNhiet']!=''){
		 echo $thongtinbenhnhan[0]['ThanNhiet'].' độ C';
		}?> </td>
      </tr>
      <tr>
        <td>Chỉ số BMI: </td>
        <td><?php
				$BMI= $thongtinbenhnhan[0]["CanNang"]/($thongtinbenhnhan[0]["ChieuCao"]*$thongtinbenhnhan[0]["ChieuCao"])*10000;
				echo round($BMI,1);			
				if($BMI<18.5 ){
					echo " (Gầy)";                 
				}else if(($BMI>=18.5)&&($BMI<23)){
					echo " (Bình thường)";                
				}else if(($BMI>=23)&&($BMI<25)){
					echo " (Thừa cân)";                 
				}else if(($BMI>=25)&&($BMI<30)){
					echo " (Béo phì độ I)";                 
				}else if(($BMI>=30)&&($BMI<35)){
					echo " (Béo phì độ II)";               
				}else if($BMI>=35){
					echo " (Béo phì độ III)";                
				}
			?>
        </td>
        <td>Nhịp thở:</td>
        <td><?php
        if($thongtinbenhnhan[0]['NhipTho']!=''){
		 echo $thongtinbenhnhan[0]['NhipTho'];
		}?></td>
      </tr>
    </table>
<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:10px;font-size:13px;">
         <tr>
             <td width="35%" ><?php
			 
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
			 Phân loại sức khỏe:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$diengiai_pignet;?></td>
             <td width="30%">Bác sỹ khám: <?=$thongtinbn[0]['HoTenBS']?></td>
             <td width="30%">Ký tên: 
             </td>
         </tr>
     </table>
<p style="font-weight:bold; padding-left:5px;">II. KHÁM LÂM SÀNG: </p>
    <table class="khamlamsan" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:10px; font-size:13px;">
  <tr>
    <td width="20%">1. Tuần hoàn:</td>
    <td width="15%"><?=$khamlamsang[0]['TuanHoan_KL'] ?></td>
    <td width="15%">&nbsp;</td>
    <td width="25%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiTuanHoan'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_TuanHoan'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>2. Hô hấp:</td>
    <td><?=$khamlamsang[0]['HoHap_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiHoHap'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_HoHap'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3. Tiêu hóa:</td>
    <td><?=$khamlamsang[0]['TieuHoa_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiTieuHoa'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_TieuHoa'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">4. Thận - tiết niệu sinh dục: <?=$khamlamsang[0]['Than_TietNieu_SD_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiThan_TietNieu_SD'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_Than_TietNieu_SD'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5. Thần kinh:</td>
    <td><?=$khamlamsang[0]['ThanKinh_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiThanKinh'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_ThanKinh'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>6. Tâm thần:</td>
    <td><?=$khamlamsang[0]['TamThan_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiTamThan'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_TamThan'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>7. Hệ vận động:</td>
    <td><?=$khamlamsang[0]['HeVanDong_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiHeVanDong'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_TamThan'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>8. Nội tiết:</td>
    <td><?=$khamlamsang[0]['NoiTiet_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiNoiTiet'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_NoiTiet'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>9. Da liễu:</td>
    <td><?=$khamlamsang[0]['DaLieu_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiDaLieu'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_DaLieu'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>10. Sản phụ khoa:</td>
    <td><?=$khamlamsang[0]['SanPhuKhoa_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiSPK'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_SPK'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>11. Mắt:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>+ Có kính</td>
    <td colspan="3">MP: <?=$khamlamsang[0]['MatPhai_CK'] ?>/10  - MT:<?=$khamlamsang[0]['MatTrai_CK'] ?>/10</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>+ Không kính</td>
    <td colspan="3">MP: <?=$khamlamsang[0]['MatPhai_KK'] ?>/10  - MT:<?=$khamlamsang[0]['MatTrai_KK'] ?>/10</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>+ Các bệnh về mắt:</td>
    <td colspan="3"><?=$khamlamsang[0]['BenhMat_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiMat'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_Mat'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>12. Tai mũi họng:</td>
    <td><?=$khamlamsang[0]['TaiMuiHong_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiTMH'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_TMH'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>13. Răng hàm mặt:</td>
    <td><?=$khamlamsang[0]['RangHamMat_KL'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phân loại sức khỏe:</td>
    <td>Loại <?=$khamlamsang[0]['PhanLoaiRHM'] ?></td>
    <td>Bác sỹ khám:</td>
    <td><?=$khamlamsang[0]['HoTenBS_RHM'] ?></td>
    <td>Ký tên:</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br /><br /><br /><br />
<p style="font-weight:bold;">III. KHÁM CẬN LÂM SÀNG</p>
<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:13px;">
	<tr>
    	<td colspan="4">1. Xét nghiệm máu:
        </td>
    </tr>
    <tr>
    	<td width="25%">- Công thức máu: 
        </td>
        <td width="25%">Số lượng Hồng cầu:
        </td>
        <td width="25%">Bạch cầu: 
        </td>
        <td width="25%">Tiểu cầu: 
        </td>
    </tr>
    <tr>
    	<td colspan="4">- Đường máu:
        </td>
    </tr>
</table>
<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:13px;">
	<tr>
    	<td colspan="2">2. Xét nghiệm nước tiểu:
        </td>
    </tr>
    <tr>
    	<td width="25%">- Đường: 
        </td>
        <td width="75%">Protein:
        </td>
    </tr>
</table>
<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:13px;">
	<tr>
    	<td colspan="3">3. Chẩn đoán hình ảnh:
        </td>
    </tr>
    <tr>
    	<td width="25%">- Xquang phổi: 
        </td>
        <td width="25%">1- Bình thường</td>
        <td width="50%">2- Không bình thường</td>
    </tr>
    <tr>
    	<td width="25%">Ghi cụ thể:</td>
        <td colspan="2">Xquang phổi thẳng: Không thấy tổn thương bất thường trên phim</td>
    </tr>
    <tr>
    	<td colspan="3">- Khác nếu có: 
        </td>
    </tr>
    <tr>
    	<td colspan="3">Họ tên người ghi kết quả cận lâm sàng: <input type='text' class='textdot1'> Ký tên:
        </td>
    </tr>
</table>
<p style="font-weight:bold;">IV. KẾT LUẬN</p>
<div class="kl"  style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:13px;">
<p>Dựa vào những lời khai của đối tượng khám sức khỏe, kết quả khám lâm sàng và cận lâm sàng trên đây, tôi xác nhận về <br />sức khỏe của đối tượng KSK định kỳ như sau:<br /><br />
  1- Khỏe mạnh    - Mắc bệnh        Tên bệnh:<input type='text' class='textdot'><br />
  <input type='text' class='textdot'><br /><br />
 <!-- ExtField1-->
 <?php
 $sk=explode(';',$khamlamsang[0]['ExtField1']);
 ?>
  2- Đạt sức khỏe loại: <?php if(isset($sk[1])){ echo"<strong>Sức khỏe loại   </strong>".$sk[1];}?><br /><br />
  3- Hiện tại đủ/không đủ sức khỏe học tập/làm việc cho ngành nghề, công việc(Ghi cụ thể nếu có), hướng giải quyết(nếu có)<br />
  <input type='text' class='textdot'><br />
  <input type='text' class='textdot'><br /><br />
  4- Hướng giải quyết (Chỉ đình điều trị, phục hồi chức năng, khám chuyên khoa, khám bệnh nghề nghiệp, chuyển ngành, nghề công việc khác phù hợp với sức khỏe hiện tại)<br />
  <input type='text' class='textdot'><br />
  <input type='text' class='textdot'><br />
</p>
<table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:13px;">
  <tr>
	<td width="50%">
    </td>
    <td width="50%" align="center" style="padding-right:10px;">
                 	Khám sức khỏe, Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 <p style="margin-top: 5px;margin-bottom: 5px;"><strong>THỦ TRƯỞNG CƠ QUAN KHÁM SỨC KHỎE</strong></p>
                 (Chức danh, ký tên, đóng dấu và ghi rỏ họ tên)
    </td>
</tr>
</table>

</div>
</body>
 <script type="text/javascript">
	$(document).ready(function() {	
		print_preview();
	})
</script>
</html>
 