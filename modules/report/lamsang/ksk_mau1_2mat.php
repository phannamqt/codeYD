<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
		
        $params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_GetTenCongTyByID_Kham(?)}";//tao bien khai bao store
        $get_tencty=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_tencty);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtincty= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc  
		//print_r($thongtincty);
   
    ?>
 <div id="page" style="page-break-after: always;">
	<table width="100%">
	  <tr>
		<td style="vertical-align:top;" width="50%">Công ty <?php if(count($thongtincty)){ echo $thongtincty[0]['TenCty'];}else{ echo '.........................';} ?></strong></td>
		<td style="text-align:center;" width="50%">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br />
		Độc Lập - Tự Do - Hạnh Phúc<br />
		**************
		</td>
	  </tr>
	</table>
<br />
<div style="text-align:center;">
	<span style="font-size:20px; line-height:35px; font-weight:bold;">PHIẾU KHÁM SỨC KHỎE ĐỊNH KỲ</span><br />
    <span style="font-size:13px; text-transform:uppercase;">(KHÁM TẠI <?php echo $_SESSION["com"]["TenBenhVien"]?>)</span>
</div>
<br />
<br />
<table width="100%">
  <tr>
    <td width="10%">
    <div class="anh" style="text-align:center; border:solid 1px #000; height:100px; width:80px; margin-right:30px;">
   <br /><br /> Ảnh <br />
    4x6
    </div>
    </td>
    <td width="90%"><strong>Họ và tên: </strong><?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?><strong> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Giới tính</strong>: <?=$thongtinbenhnhan[0]['Gioi'];?><br />
      <strong>Năm sinh: </strong><?=$thongtinbenhnhan[0]['NamSinh'];?><strong>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ID: </strong><?=$thongtinbenhnhan[0]['MaBenhNhan'];?><br />
    <strong>Địa chỉ: </strong><?=$thongtinbenhnhan[0]['DiaChi'];?><br />
    <strong>Ngành nghề công tác:</strong>..................................................<br />
    <strong>Tình trạng hôn nhân:</strong>........................<strong>Con cái:</strong>..............<br />
    <strong>Thời gian công tác:</strong>.......................năm<br /></td>
  </tr>
</table>
<br />
<strong>- Tiền sử gia đình:</strong> Có ai trong gia đình (ông bà, cha mẹ, anh chị em ruột) mắc một trong các bệnh như sau:
<br />
Tăng huyết áp, Bệnh tim mạch, Tiểu đường, Hen phế quản, Động kinh, Rối loạn tâm thần, Bệnh truyền nhiễm ...:...........................................................................................................................................................<br />..........................................................................................................................................................................<br />
<strong>- Tiền sử bản thân:</strong><br />
+ Tiền sử thai sản:............................................................................................................................................<br />
+ Bản thân đã từng mắc một trong các bệnh sau đây:<br />
<div class="benhkhac" style="width:100%;">
	<div class="left"  style="width:48%; float:left; padding-right:15px;">
     <table cellpadding="0" cellspacing="0" border="1" style="width:100%;font-family:arial, Geneva, sans-serif; font-size:13px;">
      <tr>
       <td width="5%" align="center"><strong>STT</strong></td>
        <td width="67%" align="center"><strong>BỆNH TẬT</strong></td>
        <td width="14%" align="center"><strong>Có</strong></td>
        <td width="14%" align="center"><strong>Không</strong></td>
      </tr>
      <tr>
        <td align="center">1</td>
        <td>Bệnh mắt/ Thị lực</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td>Bệnh, tai, mũi, họng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td>Răng hàm mặt</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">4</td>
        <td>Bệnh ngoài da</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td>Cao huyết áp</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">6</td>
        <td>Hen, viêm phế quản/ Hô hấp</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">7</td>
        <td>Bệnh đái tháo đường</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">8</td>
        <td>Bệnh tuyến giáp/ Nội tiết</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">9</td>
        <td>Bệnh tiêu hóa</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">10</td>
        <td>Bệnh thận</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">11</td>
        <td>Bệnh tim mạch</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">12</td>
        <td>Bệnh truyền nhiễm</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">13</td>
        <td>Bệnh sinh dục</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </div>
    <div class="right"  style="width:48%; padding-left:10px;">
    <table cellpadding="0" cellspacing="0" border="1" style="width:100%;font-family:arial, Geneva, sans-serif; font-size:13px;">
      <tr>
        <td width="5%" align="center"><strong>STT</strong></td>
        <td width="67%" align="center"><strong>BỆNH TẬT</strong></td>
        <td width="14%" align="center"><strong>Có</strong></td>
        <td width="14%" align="center"><strong>Không</strong></td>
      </tr>
      <tr>
        <td align="center">14</td>
        <td>Động kinh/ Rối loạn thần kinh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">15</td>
        <td>Chống mặt/ ngất</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">16</td>
        <td>Trầm cảm</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">17</td>
        <td>Mất trí nhớ</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">18</td>
        <td>Đau đầu nặng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">19</td>
        <td>Mất ngủ</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">20</td>
        <td>Đau cột sống</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">21</td>
        <td>Rối loạn vận động</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">22</td>
        <td>Gãy xương/ Trật khớp</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">23</td>
        <td>Cắt cụt/ Phẫu thuật</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">24</td>
        <td>Thoái vị</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">25</td>
        <td>Bệnh dị ứng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">26</td>
        <td>Nghiện rượu, thuốc lá, ma túy</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </div>
</div><!-- end benhkhac-->
<br />
 <strong>- Tình trang sức khỏe hiện tại, thuốc đang được điều trị:
 </strong>
<br />
..........................................................................................................................................................................
<br />
<table width="100%">
  <tr>
    <td width="50%">Tôi xin cam đoan những điều khai trên là hoàn toàn đúng với tình trạng sức khỏe của tôi.</td>
    <td width="50%">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center; padding-right:20px;"><br />
      <strong>Người khám sức khỏe</strong><br />
(Ký và ghi rõ họ tên) <br /><br /><br /><br /><br />
<?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
</td>
    <td style="text-align:center; vertical-align:top;">Đà Nẵng, ngày <?=date('d');?> tháng <?=date('m');?>  năm <?=date('Y');?><strong><br />
    Người quản lý hồ sơ</strong><br />
    (Ký và ghi rõ họ tên)
    </td>
  </tr>
</table>
</div>
 <div id="page2" style="page-break-after: always;">
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
		
		$params11 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name11="{call GD2_MedicalReportSelectByID_LuotKham(?)}";//tao bien khai bao store
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
  <tr>
    <td width="18%">+ Có kính:</td>
    <td colspan="4">MP: <?=$khamlamsang[0]['MatPhai_CK']?>/10</td>
    <td colspan="3">-MT:  <?=$khamlamsang[0]['MatTrai_CK']?>/10</td>
  </tr>
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
<p style="font-weight:bold;margin: 0px; padding-bottom:8px;"> <i>KHÁM CẬN LÂM SÀNG</i></p>
<pre style="width:650px;white-space: pre-wrap;">
<?php 
if(count($ketluan)>0){
	echo trim($ketluan[0]['MoTaBenh']);
 }
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

<td width="50%" style="padding-left:10px; vertical-align:top" align="center">TUQ. Giám đốc <br /><br /> <br /><br /><br />
<b style="color:red"><?=$thongtin_chuky[0]["tennhanvien"]?></b>
</td>
    <td width="50%" align="center" style="padding-right:10px; vertical-align:top">Bác sỹ kết luận <br /><br /><br /><br /><br />
      <b style="color:red"><?php if(isset($ketluan[0]["tennv"])){echo $ketluan[0]["tennv"];}else{ echo '<br>';}?></b></td>
</tr>
</table>

</div>
 
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
		print_preview();
	})
</script>
</html>
