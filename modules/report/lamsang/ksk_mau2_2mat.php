<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	line-height:17px;
}
fieldset{
	border:#000 1px solid;}
pre{
font-family:Arial, Helvetica, sans-serif !important;
font-size: 14px;
margin-top: 0px;
margin-bottom: 0px;
}
.tieude{
	line-height:22px;
}
.con{
	margin-left:10px;
}
div.bg-doted{
	margin-top:2px !important;
	background:url(images/dotted.png) repeat;
	line-height:20px;
	
}
</style>
</head>

<body>
<div id="page" style="page-break-after: always;">
<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		
   
    ?>
<table width="100%">
  <tr>
    <td style="vertical-align:top; text-align:center;"><?php echo $_SESSION["com"]["TenBenhVien"]?><br />
    <?php echo $_SESSION["com"]["DiaChi"]?><br />
    -------*******-------
    </td>
    <td style="text-align:center;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br />
    Độc Lập - Tự Do - Hạnh Phúc<br />
    **************
    </td>
  </tr>
</table>
<br /><br />
<div style="text-align:center;">
	<span style="font-size:20px; line-height:35px; font-weight:bold;">GIẤY CHỨNG NHẬN SỨC KHỎE CÁ NHÂN</span><br />

</div>
<br />
<table width="100%">
  <tr>
    <td width="10%">
    <div class="anh" style="text-align:center; border:solid 1px #000; height:100px; width:80px; margin-right:30px;">
   <br /><br /> Ảnh <br />
    4x6
    </div>
    </td>
   <td width="90%">
   <div class="bg-doted" style="height:22px; width:98%; float:left; position:relative">
      <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Họ và tên: </div> <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
      <div style="position: absolute; left: 380px; top: 0px;">
    <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Giới tính: </div> <?=$thongtinbenhnhan[0]['Gioi'];?></div>
    </div>
     <div class="bg-doted" style="height:22px; width:98%; float:left; position:relative">
      <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Ngày tháng năm sinh: </div> <?php
      if (isset($thongtinbenhnhan[0]['NgayThangNamSinh'])) {
       echo $thongtinbenhnhan[0]['NgayThangNamSinh']->format($_SESSION["config_system"]["ngaythang"]);
    }



      ?>
      <div style="position: absolute; left: 380px; top: 0px;">
    <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">ID: </div> <?=$thongtinbenhnhan[0]['MaBenhNhan'];?></div>
    </div>
    <div class="bg-doted" style="height:22px; width:98%;float: left;position:relative;">
   		<div style="height:20px; margin-left:-2px; padding-left:2px; background:#fff;display: inline-block; font-weight:bold">Địa chỉ: </div> <?=$thongtinbenhnhan[0]['DiaChi'];?>
	</div>
     <div class="bg-doted" style="height:22px; width:98%;float: left;position:relative;">
   		<div style="height:20px; margin-left:-2px; padding-left:2px; background:#fff;display: inline-block; font-weight:bold">Ngành nghề công tác: </div>
	</div>
    <div class="bg-doted" style="height:22px; width:98%; float:left; position:relative">
      <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Tình trạng hôn nhân:</div>
      <div style="position: absolute; left: 380px; top: 0px;">
    <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Con cái:</div>
    </div>
    </div>
	<div class="bg-doted" style="height:22px; width:98%; float:left; position:relative">
      <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Thời gian công tác:</div>
      <div style="position: absolute; left: 380px; top: 0px; width: 100%;">
    <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; width:100%">năm</div>
    </div>
    </div>
	</td>
  </tr>
</table>
<br />
<strong>- Tiền sử gia đình:</strong> Có ai trong gia đình (ông bà, cha mẹ, anh chị em ruột) mắc một trong các bệnh như sau:
<div class="bg-doted" style="height:60px; width:98%;position:relative;">
           <div style="height:20px; margin-left:-2px; padding-left:2px; background:#fff;display: inline-block;">Tăng huyết áp, Bệnh tim mạch, Tiểu đường, Hen phế quản, Động kinh, Rối loạn tâm thần, Bệnh truyền nhiễm...: </div>
         </div>
<strong>- Tiền sử bản thân:</strong><br />

<div class="bg-doted" style="height:22px; width:98%;position:relative;">
   <div style="height:20px; margin-left:-2px; padding-left:2px; background:#fff;display: inline-block;">+ Tiền sử thai sản (dành cho phụ nữ): </div>
</div>
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
 <div class="bg-doted" style="height:22px; width:98%;position:relative;">
  </div>
<br />
<table width="100%">
  <tr>
    <td width="50%">Tôi xin cam đoan những điều khai trên là hoàn toàn đúng với tình trạng sức khỏe của tôi.</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">&nbsp;</td>
    <td style="text-align:center;">Đà Nẵng, ngày <?=date('d');?> tháng <?=date('m');?>  năm <?=date('Y');?><strong><br />
    Người khám sức khỏe</strong><br />
    (Ký và ghi rỏ họ tên)
    <br /><br /><br /><br /><br />
    <strong>
    <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
    </strong></td>
  </tr>
</table>
</div>
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
<strong>1. NỘI KHOA:</strong><br />
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
<br />
</div>
<strong class="tieude">2. NGOẠI KHOA:</strong> <?=$khamlamsang[0]['NgoaiKhoa_KL']?><br />
<strong class="tieude">3. SẢN PHỤ KHOA:</strong> 
<?=$khamlamsang[0]['SanPhuKhoa_KL']?>
<br />
<strong class="tieude">4 MẮT:</strong><br />
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
<strong class="tieude">5. TAI MŨI HỌNG:</strong><br />
<div class="con">
- Thính lực: Nói thường: Tai phải: <?=$khamlamsang[0]['TaiPhai_NoiThuong']?> m Tai trái: <?=$khamlamsang[0]['TaiTrai_NoiThuong']?> m &nbsp;&nbsp;&nbsp;. Nói thầm: Tai phải: <?=$khamlamsang[0]['TaiPhai_NoiTham']?> m Tai trái: <?=$khamlamsang[0]['TaiTrai_NoiTham']?> m<br />
- Bệnh về Tai- Mũi - Họng: 
<?=$khamlamsang[0]['TaiMuiHong_KL']?><br />
</div>
<strong class="tieude">6. RĂNG HÀM MẶT:</strong> 
<div class="con">
- Hàm trên: <?=$khamlamsang[0]['HamTren_RHM']?> &nbsp;&nbsp;&nbsp; - Hàm dưới: <?=$khamlamsang[0]['HamDuoi_RHM']?> <br />
- Bệnh về Răng - Hàm - Mặt:
<?=$khamlamsang[0]['RangHamMat_KL']?><br />
</div>
<strong class="tieude">7. DA LIỄU:</strong> 
<?=$khamlamsang[0]['DaLieu_KL']?>
<br />
<strong class="tieude">8. TÂM THẦN KINH:</strong> 
<br />
<div class="con">
- Thần kinh: <?=$khamlamsang[0]['ThanKinh_KL']?>
- Tâm thần: <?=$khamlamsang[0]['TamThan_KL']?>
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
</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {	
		print_preview();
	})
</script>
</html>
