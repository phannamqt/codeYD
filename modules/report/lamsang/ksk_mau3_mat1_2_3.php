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
		$excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL v?? truyen gia tri tra ve tu lop ket noi SQL
		$thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		if(count($thongtinbenhnhan)==0){
			$params = array($_GET["id_benhnhan"]);//tao param cho store 
			$store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
			//$params = array($_GET["id_benhnhan"],$_GET["id_luotkham"]);//tao param cho store 
			//$store_name="{call GD2_KSK_GetThongTinBenhNhan(?,?)}";//tao bien khai bao store
			$get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
			$excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL v?? truyen gia tri tra ve tu lop ket noi SQL
			$thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	
		}
    ?>
<table width="100%">
  <tr>
    <td style=" font-size:12px"><span style="text-transform:uppercase"><strong><?php echo $_SESSION["com"]["TenCoQuanTrucThuoc"]?></strong></span><strong><br />
      <span style="text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span><br />
    S???: GS/SK.............
    </strong></td>
    <td style="text-align:center"><strong>C???NG H??A X?? H???I CH??? NGH??A VI???T NAM<br />
    ?????c l???p - T??? do - H???nh ph??c<br />
    **************
    </strong></td>
  </tr>
</table>
<div style="text-align:center">
<span style="font-size:20px; line-height:35px; font-weight:bold; text-align:center">GI???Y KH??M S???C KH???E ?????NH K???</span>
</div>

<table width="100%">
  <tr>
    <td width="10%">
    <div class="anh" style="text-align:center; border:solid 1px #000; height:100px; width:80px; margin-right:30px;">
   <br /><br /> ???nh <br />
    4x6
    </div>
    </td>
    <td width="90%"><p>1. H??? v?? t??n (<em>Ch??? in hoa</em>): <span style="text-transform:uppercase"> <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?></span>
      <br />
      2. Gi???i: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nam 
      <input type="checkbox" name="nam" id="nam" <?php
if($thongtinbenhnhan[0]['Gioi']=='Nam'){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="nam"></label> N??? <input type="checkbox" name="nu" id="nu" <?php
if($thongtinbenhnhan[0]['Gioi']=='N???'){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="nu"></label>&nbsp;&nbsp;&nbsp;&nbsp; Tu???i: <?=$thongtinbenhnhan[0]['Tuoi']?><br />
      3. S??? CMND ho???c H??? chi???u:<input type="text" class="doted dmnd"  /><br />
      C???p ng??y<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />t???i<input type="text" class="doted tai"  /><br />
      4. H??? kh???u th?????ng tr??:<input type="text" class="doted hokhau"  /><br />
      <input type="text" class="doted hokhau2"  /><br />

    </td>
  </tr>
</table>
5. Ch??? ??? hi???n t???i:<input type="text" class="doted choo"  /><br />
<input type="text" class="doted choo2"  /><br />
6. Ngh??? nghi???p:<input type="text" class="doted nghenghiep"  /><br />
  7. N??i c??ng t??c, h???c t???p:<input type="text" class="doted noicongtac"  /><br />
  8. Ng??y b???t ?????u v??o h???c/l??m vi???c t???i ????n v??? hi???n nay:<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  9. Ngh???, c??ng vi???c tr?????c ????y (li???t k?? c??c c??ng vi???c ???? l??m trong 10 n??m g???n ????y):<br />
  a) <input type="text" class="doted nghenghieptruoc"  /><br />
  th???i gian l??m vi???c<input type="text" class="doted ngay"  />n??m<input type="text" class="doted ngay"  />th??ng t??? ng??y<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  ?????n<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  b) <input type="text" class="doted nghenghieptruoc"  /><br />
  th???i gian l??m vi???c<input type="text" class="doted ngay"  />n??m<input type="text" class="doted ngay"  />th??ng t??? ng??y<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
   ?????n<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  10. Ti???n s??? b???nh t???t gia ????nh: C?? ai trong gia ????nh(??ng b??, cha m???, anh ch??? em ru???t) m???c m???t trong c??c b???nh sau ????y: tim m???ch, ????i th??o ???????ng, hen ph??? qu???n, ung th??, ?????ng kinh, r???i lo???n t??m th???n, truy???n nhi???m...: a) Kh??ng <input type="checkbox" name="khong" id="khong" class="css-checkbox"/><label class="css-label" for="khong"></label>; b) C?? <input type="checkbox" name="co" id="co" class="css-checkbox"/><label class="css-label" for="co"></label><br />
  c) N???u c??, h??y ghi c??? th??? t??n b???nh:<input type="text" class="doted benhtat"  /><br />
11. Ti???n s??? thai s???n (d??nh cho ph??? n???):<input type="text" class="doted tiensuthaisan"  /><br />
12. Ti???n s??? b???n th??n: <br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center">T??n b???nh</div></td>
    <td><div align="center">Ph??t hi???n n??m</div></td>
    <td><div align="center">T??n b???nh ngh??? nghi???p</div></td>
    <td><div align="center">Ph??t hi???n n??m</div></td>
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
    <td width="55%">T??i xin cam ??oan nh???ng ??i???u khai ??? tr??n ????y l?? ho??n to??n ????ng v???i t??nh tr???ng s???c kh???e c???a t??i.</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:center;">???? N???ng, ng??y <?=date('d')?> th??ng <?=date('m')?> n??m <?=date('Y')?>
    <br />
    Ng?????i lao ?????ng x??c nh???n<br />
    (K?? v?? ghi r??? h??? t??n)<br /><br /><br /><br /><br />
    
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
	$excute3= new SQLServerResult($get_khamlamsang);//Ket noi lop xu ly SQL v?? truyen gia tri tra ve tu lop ket noi SQL
	$khamlamsang= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc
	$params11 = array($_GET["id_luotkham"]);//tao param cho store 
	$store_name11="{call GD2_MedicalReportSelectByID_LuotKham(?)}";//tao bien khai bao store
	$get_ketluan=$data->query( $store_name11,$params11);//Goi store
	$excute11= new SQLServerResult($get_ketluan);//Ket noi lop xu ly SQL v?? truyen gia tri tra ve tu lop ket noi SQL
	$ketluan= $excute11->get_as_array();//Tra ve mang toan bo data lay duoc
?>
<div style="text-align:center; padding-bottom:5px;"><strong class="test">KH??M S???C KH???E ?????NH K???</strong></div><br />
<strong>I. T??NH TR???NG B???NH T???T HI???N T???I:</strong><br />
<div style="padding-left:20px;">
<?=$khamlamsang[0]['TinhTrangBenhTatHienTai']?>
</div>
<br />
<strong>II. KH??M TH??? L???C</strong><br />
<div style="padding-left:20px;">
Chi???u cao:
<?php if($thongtinbenhnhan[0]['ChieuCao']){echo $thongtinbenhnhan[0]['ChieuCao'].' cm';}?>
;&nbsp;&nbsp;&nbsp; C??n n???ng: 
<?php 
		if($thongtinbenhnhan[0]['CanNang']!=''){
			echo $thongtinbenhnhan[0]['CanNang'].' kg';
		}?>
;&nbsp;&nbsp;&nbsp; Ch??? s??? BMI: 
<?php		if($thongtinbenhnhan[0]["CanNang"]!='' && $thongtinbenhnhan[0]["ChieuCao"]!='' ){
					$BMI= $thongtinbenhnhan[0]["CanNang"]/($thongtinbenhnhan[0]["ChieuCao"]*$thongtinbenhnhan[0]["ChieuCao"])*10000;
					echo round($BMI,1);		
				}else{
					$BMI='';
					}
			?>
<br />
M???ch: 
<?php 
		if($thongtinbenhnhan[0]['Mach']!=''){
		echo $thongtinbenhnhan[0]['Mach'].' l???n/ph??t';
		}?>
;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Huy???t ??p: 
<?php
        if($thongtinbenhnhan[0]['Ps']!='' && $thongtinbenhnhan[0]['Ps']!=''){
		echo $thongtinbenhnhan[0]['Ps'].'/'.$thongtinbenhnhan[0]['Pd'].' mmHg';
		}?>
<br />
<?php
			 
            $pignet=$thongtinbenhnhan[0]['ChieuCao']-($thongtinbenhnhan[0]['CanNang']+$thongtinbenhnhan[0]['VongNguc']);	  
			if($pignet<10){
				$diengiai_pignet="R???t t???t";
			}else if(($pignet>=10)&&($pignet<20)){
				$diengiai_pignet="T???t";
			}else if(($pignet>=20)&&($pignet<25)){
				$diengiai_pignet="Trung b??nh";
			}else if(($pignet>=25)&&($pignet<35)){
				$diengiai_pignet="Y???u";
			}else if($pignet>=35){
				$diengiai_pignet="R???t y???u";
			}
			 ?>
Ph??n lo???i th??? l???c: 
<?=$diengiai_pignet;?>
</div>
<br />
<strong>III. KH??M L??M S??NG</strong><br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td style="text-align:center" width="80%"><strong>N???i dung kh??m</strong></td>
    <td style="text-align:center" width="20%"><strong>H??? t??n, ch??? k?? c???a B??c s???</strong></td>
  </tr>
  <tr>
    <td style="border-bottom:none;"><strong>1. N???i khoa</strong></td>
    <td style="border-bottom:none;"><div align="center"></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">a) Tu???n ho??n:
      <?=$khamlamsang[0]['TuanHoan_KL']?>
      <br />
    	Ph??n lo???i: lo???i
    <?php if($khamlamsang[0]['PhanLoaiTuanHoan']){ echo $khamlamsang[0]['PhanLoaiTuanHoan']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img id="bs_tuanhoan" width="75"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">b) H?? h???p: <?=$khamlamsang[0]['HoHap_KL']?>
      <br />
    	Ph??n lo???i: lo???i
    <?php if($khamlamsang[0]['PhanLoaiHoHap']){ echo $khamlamsang[0]['PhanLoaiHoHap']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img id="bs_hohap" width="75"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">c) Ti??u h??a:
      <?=$khamlamsang[0]['TieuHoa_KL']?>
      <br />
    	Ph??n lo???i: lo???i
    <?php if($khamlamsang[0]['PhanLoaiTieuHoa']){ echo $khamlamsang[0]['PhanLoaiTieuHoa']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_tieuhoa"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">d) Th???n - Ti???t ni???u:
      <?=$khamlamsang[0]['Than_TietNieu_SD_KL']?>
      <br />
    	Ph??n lo???i: lo???i
    <?php if($khamlamsang[0]['PhanLoaiThan_TietNieu_SD']){ echo $khamlamsang[0]['PhanLoaiThan_TietNieu_SD']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_thantietnieu"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">??) N???i ti???t: <?=$khamlamsang[0]['NoiTiet_KL']?>
      <br />
    	Ph??n lo???i: lo???i
    <?php if($khamlamsang[0]['PhanLoaiNoiTiet']){ echo $khamlamsang[0]['PhanLoaiNoiTiet']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_noitiet"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">e) C??-X????ng-Kh???p: <?=$khamlamsang[0]['HeVanDong_KL']?>
      <br />
    	Ph??n lo???i lo???i:
    <?php if($khamlamsang[0]['PhanLoaiHeVanDong']){ echo $khamlamsang[0]['PhanLoaiHeVanDong']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_coxuongkhop"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">g) Th???n kinh:
      <?=$khamlamsang[0]['ThanKinh_KL']?>
      <br />
    	Ph??n lo???i: lo???i
    <?php if($khamlamsang[0]['PhanLoaiThanKinh']){ echo $khamlamsang[0]['PhanLoaiThanKinh']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_thankinh"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">h) T??m th???n: <?=$khamlamsang[0]['TamThan_KL']?>
      <br />
    	Ph??n lo???i: lo???i
    <?php if($khamlamsang[0]['PhanLoaiTamThan']){ echo $khamlamsang[0]['PhanLoaiTamThan']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_tamthan"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;"><strong>2. M???t:
    </strong></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">
    <table width="100%" border="0">
      <tr>
        <td width="33%">- K???t qu??? kh??m th??? l???c:</td>
        <td width="18%">Kh??ng k??nh:</td>
        <td width="25%">M???t ph???i:
          <?=$khamlamsang[0]['MatPhai_KK']?>
/10 </td>
        <td width="24%"> M???t tr??i:
          <?=$khamlamsang[0]['MatTrai_KK']?>
/10 </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>C?? k??nh:</td>
        <td>M???t ph???i:
          <?=$khamlamsang[0]['MatPhai_CK']?>
/10</td>
        <td>  M???t tr??i:
          <?=$khamlamsang[0]['MatTrai_KK']?>
/10</td>
      </tr>
    </table>
    - C??c b???nh v??? m???t: 
    <?=$khamlamsang[0]['BenhMat_KL']?>
    <br />
    - Ph??n lo???i: lo???i 
    <?php if($khamlamsang[0]['PhanLoaiMat']){ echo $khamlamsang[0]['PhanLoaiMat']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_mat"/></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;"><strong>3. Tai-M??i-H???ng:
    </strong></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"></div></td>
  </tr>
  <tr>
    <td style="border-bottom:none; border-top:none;">- K???t qu??? kh??m th??nh l???c:<br />
    <table width="100%" border="0">
  <tr>
    <td width="20%" style="padding-left:40px;">Tai tr??i:</td>
    <td width="31%">N??i th?????ng: 
      <?=(float)$khamlamsang[0]['TaiTrai_NoiThuong']?> 
      m;</td>
    <td width="49%">N??i th???m: 
      <?=(float)$khamlamsang[0]['TaiTrai_NoiTham']?> 
      m</td>
  </tr>
  <tr>
    <td style="padding-left:40px;">Tai ph???i:</td>
    <td>N??i th?????ng:
      <?=(float)$khamlamsang[0]['TaiPhai_NoiThuong']?> 
      m; </td>
    <td>N??i th???m: 
      <?=(float)$khamlamsang[0]['TaiPhai_NoiTham']?> 
      m</td>
  </tr>
</table>

        - C??c b???nh v??? tai m??i h???ng: 
        <?=$khamlamsang[0]['TaiMuiHong_KL']?>
        <br />
    - Ph??n lo???i: lo???i    <?php if($khamlamsang[0]['PhanLoaiTMH']){ echo $khamlamsang[0]['PhanLoaiTMH']; }?></td>
    <td style="border-bottom:none; border-top:none;"><div align="center"><img alt="" width="75" id="bs_taimuihong"/></div></td>
  </tr>
</table>
</div>
<div id="page2" style="page-break-after: always;">
<?php	
	$params1 = array($_GET["id_kham"]);//tao param cho store 
	$store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
	$get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
	$excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL v?? truyen gia tri tra ve tu lop ket noi SQL
	$thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
?>
<table width="100%"  border="1" cellpadding="0" cellspacing="0" id="n-table1">
  <tr>
    <td colspan="2" width="80%" style="vertical-align:top; border-bottom:none;"><strong>4. R??ng-H??m-M???t</strong></td>
    <td   width="20%" rowspan="3" style="border-bottom:none; border-top:none; text-align:center"><img alt="" width="80" id="bs_ranghammat"/></td>
  </tr>
  <tr>
    <td width="109" style="vertical-align:top; border-bottom:none; border-top:none; border-right:none">- K???t qu??? kh??m:</td>
    <td width="379"  style="border-bottom:none; border-top:none; border-left:none ;">+ H??m tr??n: <span >
      <?=$khamlamsang[0]['HamTren_RHM']?>
    </span><br />
    + H??m d?????i: <span style="border-bottom:none; border-top:none;">
    <?=$khamlamsang[0]['HamDuoi_RHM']?>
    </span></td>
  </tr>
  <tr>
    <td colspan="2"  style="vertical-align:top; border-bottom:none; border-top:none;">- C??c b???nh R??ng-H??m-M???t <span>
      <?=$khamlamsang[0]['RangHamMat_KL']?>
    </span><br />
- Ph??n lo???i:<span style="border-bottom:none; border-top:none;"> lo???i</span> <span style="border-bottom:none; border-top:none;">
<?=$khamlamsang[0]['PhanLoaiRHM']?>
</span></td>
  </tr>
  <tr>
    <td colspan="2"  style="vertical-align:top; border-bottom:none; border-top:none;"><strong>5. Da li???u:</strong> <span>
      <?=$khamlamsang[0]['DaLieu_KL']?>
    </span><br />
      Ph??n lo???i:<span style="border-bottom:none; border-top:none;"> lo???i</span> <span style="border-bottom:none; border-top:none;">
      <?=$khamlamsang[0]['PhanLoaiDaLieu']?>
      </span></td>
    <td  style="vertical-align:top; border-bottom:none; border-top:none; text-align:center"><img alt="" width="80" id="bs_dalieu"/></td>
  </tr>
</table><br />
<strong>IV. KH??M C???N L??M S??NG</strong><br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="80%" style="text-align:center"><strong>N???i dung kh??m</strong></td>
    <td width="20%" style="text-align:center"><strong>H??? t??n, ch??? k?? c???a B??c s???</strong></td>
  </tr>
  <tr>
    <td style="padding-left:4px;">X??t nghi???m huy???t h???c-sinh h??a, Si??u ??m, X-quang v?? c??c CLS kh??c:<br />
    a. K???t qu??? X??t nghi???m:.........................................<br />
    b. K???t qu??? Si??u ??m:..............................................<br />
    c. K???t qu???: X-Quang............................................</td>
    <td>&nbsp;</td>
  </tr>
</table><br />
<strong>V. K???T LU???N</strong><br />
<strong>1. Ph??n lo???i s???c kh???e:</strong> <span style="border-bottom:none; border-top:none;">
S???c kh???e lo???i <?php 
if(isset($khamlamsang[0]['ExtField1'])){
$rs=$khamlamsang[0]['ExtField1'];
$tam=explode(";",$rs);
	if(isset($tam[1])){
		echo $tam[1];
	}

}
?>
</span><br />
<strong>2. C??c b???nh t???t:</strong> <span style="border-bottom:none; border-top:none;">
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
    <td width="45%" style="text-align:center">???? N???ng, Ng??y <span style="padding-right:10px;"><?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." th??ng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." n??m " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?></span></td>
  </tr>
  <tr>
    <td style="text-align:center; vertical-align:top">TUQ. Gi??m ?????c</td>
    <td style="text-align:center">B??c s??? k???t lu???n<br /><br /><br /><br /><br />
      <b>
      <?=$thongtinluotkham[0]["BsChanDoan"];?>
    </b></td>
  </tr>
</table>
<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
<table width="100%" style="bottom:0; left:0; display:none;">
  <tr>
    <td>Ghi ch??: <br />
    M???u KH??M S???C KH???E ?????NH K??? n??y C??n c??? theo th??ng t?? s??? /2013/TT-BYT ng??y 06 th??ng 5 n??m 2013 c???a B??? tr?????ng B??? Y t??? (????nh k??m ph??? l???c)</td>
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