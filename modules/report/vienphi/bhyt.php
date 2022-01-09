<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" >

tr.noBorder td {border: 0!important; }
 thead
     {
	border-bottom:2px solid #000;
	display: table-header-group!important;
	border-left:2px solid #000;
    }
  table { page-break-inside:auto  ;page-break-after:auto}
  tr    { page-break-inside:avoid; page-break-after:auto }
   
table {
	width:100%;
	cellpadding:0; cellspacing:0;
	font-size:12px;
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

</style>
</head>
<?php

	$data= new SQLServer;//tao lop ket noi SQL
	$store_name1="{call GD2_Thongtin_benhnhan_bhyt (?)}";
	$params1 = array($_GET['idthutrano']);
	$get_thongtinnv=$data->query( $store_name1,$params1);//Goi 
	$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop 
	$thongtinbhyt= $excute1->get_as_array();//Tra ve mang toan bo 
 
	$params2 = array($_GET['idthutrano'],true);
	$store_name2="{call MED_BHYT_ToPhoiPrint(?,?)}";
	$get_thongtin2=$data->query( $store_name2,$params2);
	$excute2= new SQLServerResult($get_thongtin2);
	$bhyt= $excute2->get_as_array();



	if ($thongtinbhyt[0]['NgayDu5Nam']=="") {
		$thongtinbhyt[0]['NgayDu5Nam']="";
	}else{
		$thongtinbhyt[0]['NgayDu5Nam']=$thongtinbhyt[0]['NgayDu5Nam']->format('d/m/Y');
	}
	if ($thongtinbhyt[0]['NgayMienCungChiTra']=="") {
		$thongtinbhyt[0]['NgayMienCungChiTra']="";
	}else{
		$thongtinbhyt[0]['NgayMienCungChiTra']=$thongtinbhyt[0]['NgayMienCungChiTra']->format('d/m/Y');
	}
	
	if ($thongtinbhyt[0]['NgayThanhToan']=="") {
		$thongtinbhyt[0]['NgayThanhToan']="Ngày.....tháng.....năm.....";
	}else{
		$thongtinbhyt[0]['NgayThanhToan']='Ngày '.$thongtinbhyt[0]['NgayThanhToan']->format('d').' tháng '.$thongtinbhyt[0]['NgayThanhToan']->format('m').' năm '.$thongtinbhyt[0]['NgayThanhToan']->format('Y');
	}
	

?>
<body style="overflow: scroll;">
	<table cellpadding="0" cellspacing="0" border="0" style="font-size:12px;" >
    <tr>
    	<td style=" width:70%; text-align:left;"><strong>Bộ Y tế/Sở Y tế/Y tế ngành: SỞ Y TẾ THÀNH PHỐ ĐÀ NẴNG</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Mẫu số: 01/BV</strong></td>
    </tr>
     <tr>
    	<td style=" width:70%; text-align:left;"><strong>Cở sở khám,chữa bệnh: PHÒNG KHÁM ĐA KHOA QUỐC TẾ Y ĐỨC</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Số khám bệnh</strong></td>
    </tr>
      <tr>
    	<td style=" width:70%; text-align:left;"><strong><?php if($thongtinbhyt[0]['ID_PhanLoaiKham']==24){echo 'Khoa Hồi sức cấp cứu';}else{echo 'Khoa Khám Bệnh';} ?></strong></td>
        <td style=" width:30%; text-align:center;"><strong>Mã số người bệnh: <?= $thongtinbhyt[0]['MaBenhNhan'] ?> </strong></td>
    </tr>
    <tr>
    	<td style=" width:70%; text-align:left;"><strong>Mã khoa</strong></td>
        <td style=" width:30%; text-align:center;"></td>
    </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
     <tr>
    	<td style="text-align:center;"><strong>BẢNG KÊ CHI PHÍ KHÁM BỆNH,CHỮA BỆNH NGOẠI TRÚ</strong></td>       
    </tr>
    </table>

<table><tr><td style="text-align:left;"><strong>I. Hành chính</strong></td></tr></table>
<table style="width:100%">
<tr><td style="text-align:left;">(1) Họ tên người bệnh:<te style="text-transform: uppercase;"> <?= $thongtinbhyt[0]['HoLotBenhNhan'].' '.$thongtinbhyt[0]['TenBenhNhan']?></te></td>
<td style="text-align:right;">SĐT: <?=((int)$thongtinbhyt[0]['DienThoai1'])>0?$thongtinbhyt[0]['DienThoai1']:'' ?></td>
<td style="text-align:right;">Ngày sinh: <?=$thongtinbhyt[0]['NamSinh'] ?></td>
<td style="text-align:right;">Giới tính: <?= $thongtinbhyt[0]['gioi']?></td>
</tr>
</table>

<table style="width:100%">
	<tr>
		<td style="text-align:left;">(2) Địa chỉ: <?= $thongtinbhyt[0]['DiaChiTheBHYT']?></td>
		<td>(3) Mã khu vực (K1/K2/K3): <?=$thongtinbhyt[0]['LoaiKhuVuc']?></td>
	</tr>
</table>
<table style="width:100%" border="0">
<td style="text-align:left;">(3) Có BHYT <input type="checkbox" name="ckkdt" id="ckkdt" checked class="css-checkbox"/><label class="css-label" for="ckkdt"></label></td><td style="text-align:left;">Mã thẻ BHYT: <?= $thongtinbhyt[0]['SoThe'].''.$thongtinbhyt[0]['Ma_KCB_BanDau']?></td><td style="text-align:right;">Giá trị từ: <?=$thongtinbhyt[0]['HanSD_TuNgay']!=''?$thongtinbhyt[0]['HanSD_TuNgay']->format('d/m/Y'):''?> đến <?=$thongtinbhyt[0]['HanSD_DenNgay']!=''?$thongtinbhyt[0]['HanSD_DenNgay']->format('d/m/Y'):''?></td></tr>
</table>
<table>
<tr><td style="text-align:left;">(4) Không có BHYT <input type="checkbox" name="gioi" class="css-checkbox" id="gioi"/><label class="css-label" for="gioi"></label></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(5) Cơ sở đăng ký KCB BHYT ban đầu: <?=$thongtinbhyt[0]['Ten_KCB_BanDau']?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(6) Mã số của cơ sở đăng ký KCB BHYT ban đầu: <?=$thongtinbhyt[0]['Ma_KCB_BanDau']?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(7) Đến khám:  <?=$thongtinbhyt[0]['ThoiGianVaoKham']->format('H').' giờ '.$thongtinbhyt[0]['ThoiGianVaoKham']->format('i').' ngày '.$thongtinbhyt[0]['ThoiGianVaoKham']->format('d/m/Y')?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(8) Kết thúc đợt điều trị ngoại trú: <?php if($thongtinbhyt[0]['ThoiGianKetThucKham']!=''){
	echo $thongtinbhyt[0]['ThoiGianKetThucKham']->format('H').' giờ '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('i').' ngày '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('d/m/Y');}?></td><td style="text-align:right;">Tổng số ngày điều trị: <?=$thongtinbhyt[0]['SoNgayDieuTri']?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(9) Cấp cứu: <input type="checkbox" name="capcuu" id="capcuu" <?php
if($thongtinbhyt[0]['TrangThaiKham']==4){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="capcuu"></label></td><td style="text-align:left;"> Đúng tuyến: <input type="checkbox" name="dungtuyen" id="dungtuyen" <?php
if($thongtinbhyt[0]['TrangThaiKham']==1){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="dungtuyen"></label></td><td style="text-align:left;">Nơi chuyển đến: </td><td style="text-align:right;">(10) Trái tuyến:  <input type="checkbox" name="traituyen" id="traituyen" <?php
if($thongtinbhyt[0]['TrangThaiKham']==3){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="traituyen"></label></td></tr>
</table>
<table>
<tr><td style="text-align:left;">(11) Chẩn đoán:<?=$thongtinbhyt[0]['ChanDoan']?></td><td style="text-align:left;">(12) Mã bệnh (ICD-10): <?=$thongtinbhyt[0]['MaICD10']?></td></tr>
</table>
<table>
<tr><td style="text-align:left;">(13) Thời điểm đủ 5 năm liên tục từ ngày:<te style="text-transform: uppercase;"> <?=$thongtinbhyt[0]['NgayDu5Nam']?></te></td><td style="text-align:left;">(14) Miễn cùng chi trả trong năm từ ngày: <?=$thongtinbhyt[0]['NgayMienCungChiTra']?></td></tr>
</table>
<table>
<tr><td style="text-align:left;"><b>II. Chi phí khám,chữa bệnh</b></td></tr>
</table>
<table cellpadding="0" cellspacing="0" style="font-size:10px;">
	   <thead >
             <tr style="border:solid 1px #000000 !important;border-top-color:solid 1px #000000">
                <td style="border:solid 1px #000000 !important;width:38%;" rowspan="2"  align="center" ><b>Nội dung</b></td>
                <td style="border:solid 1px #000000 !important;width:5%;"  rowspan="2"  align="center" ><b>Đơn vị tính</b></td>
                <td style="border:solid 1px #000000 !important;width:7%;"  rowspan="2"  align="center" ><b>Số lượng</b></td>

                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Đơn giá BV</b><br />(đồng)</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Tỷ lệ thanh toán theo dịch vụ</b><br>(%)</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Đơn giá BHYT</b><br />(đồng)</td>

                
                <td style="border:solid 1px #000000 !important;width:6%;" rowspan="2"  align="center" ><b>Tỷ lệ thanh toán BHYT</b><br />(%)</td>

                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Thành tiền BV</b><br />(đồng)</td>

                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Thành tiền BHYT</b><br />(đồng)</td>

                <td style="border:solid 1px #000000 !important;width:30%;" colspan="4"  align="center" ><b>Nguồn thanh toán</b>(đồng)</td>

             </tr>
              <tr >
              	<td style="border:solid 1px #000000 !important;" align="center"><b >Quỹ BHYT</b><br />(đồng)</td>
                <td style="border:solid 1px #000000 !important;" align="center"><b >Người bệnh cùng chi trả</b><br />(đồng)</td>
				<td style="border:solid 1px #000000 !important;" align="center"><b>Khác</b><br />(đồng)</td> 
                <td style="border:solid 1px #000000 !important;" align="center"><b >Người bệnh tự trả</b><br />(đồng)</td>
              </tr>
               <tr style="font-size:12px">
              	<td style="border:solid 1px #000000 !important;" align="center">(1)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(2)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(3)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(4)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(5)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(6)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(7)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(8)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(9)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(10)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(11) = (9)-(10)</td>               
                <td style="border:solid 1px #000000 !important;" align="center">(12)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(13)</td>
              </tr>
              </thead>
              <tbody>
              <?php
              $sophimbhyt = 0;
			  	for($i=0;$i<count($bhyt)-1;$i++){
			  		if (number_format($bhyt[$i]['DonGiaBV'],2,",",".")==0) {
			  			$tylevienphi=0;
			  		}else{
			  			$tylevienphi= (float)$bhyt[$i]['TyLeThanhToanBHYT'];
			  		}
					if($bhyt[$i]['rn']==null){
						$bhyt[$i]['rn']=$bhyt[$i-1]['rn'];
					}
					echo '<tr style=" border:1px solid #000;">';
					if($bhyt[$i]['id_loai']==null){
						
						echo '<td  style="border:solid 1px #000000 !important; padding-left: 2px; padding-right: 2px;" colspan=13 ><strong>'.$bhyt[$i]['rn'].'. '.$bhyt[$i]['ten'].'</strong></td>';
					
					}else{
						if($bhyt[$i]['bhyt']==-1){					
						   echo '<td  colspan=7 bgcolor="#CCCCCC" style="border:solid 1px #000000 !important;border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;"><strong>'.$bhyt[$i]['ten'].'</strong></td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[$i]['thanhtien'],2,",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[$i]['thanhtien'],2,",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[$i]['ThanhTienBaoHiem'],2,",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[$i]['nguoibenh'],2,",",".").'</td>'; 
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;"></td>'; 
						   //echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[$i]['ThanhTienChiTraBV'],2,",",".").'</td>'; 
						    echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">0</td>'; 
						}else{	
						$sophimbhyt += $bhyt[$i]['SoLuongPhimBHYT'];					
						   echo '<td style="border:solid 1px #000000 !important;text-align:left; padding-left: 2px; padding-right: 2px;">'.$bhyt[$i]['ten'].'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:left; padding-left: 2px; padding-right: 2px;">'.$bhyt[$i]['TenDonViTinh'].'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:center; padding-left: 2px; padding-right: 2px;">'.number_format($bhyt[$i]['soluong'],2,",",".").'</td>';

						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.number_format($bhyt[$i]['DonGiaBV'],2,",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.$tylevienphi.'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.number_format($bhyt[$i]['GiaBaoHiem'],2,",",".").'</td>';

						   
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.round($bhyt[$i]['Phantram'],0).'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.number_format($bhyt[$i]['thanhtien'],2,",",".").'</td>';

						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.number_format($bhyt[$i]['thanhtien'],2,",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.number_format($bhyt[$i]['ThanhTienBaoHiem'],2,",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.number_format($bhyt[$i]['nguoibenh'],2,",",".").'</td>'; 
							echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;"></td>'; 
						  // echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.number_format($bhyt[$i]['ThanhTienChiTraBV'],2,",",".").'</td>';
						    echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">0</td>';
						}
					}
					
				        
				  echo '</tr>';
				}
				
				   echo '<tr style=" border:1px solid #000;">';
				   		   echo '<td colspan=7 bgcolor="#CCCCCC" style="border:solid 1px #000000 !important;text-align:center; padding-left: 2px; padding-right: 2px;"><strong>Tổng cộng</strong></td>';
				   		   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[count($bhyt)-1]['thanhtien'],2,",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[count($bhyt)-1]['thanhtien'],2,",",".").'</td>';

						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[count($bhyt)-1]['ThanhTienBaoHiem'],2,",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[count($bhyt)-1]['nguoibenh'],2,",",".").'</td>'; 
						    echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;"></td>'; 
						   // echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[count($bhyt)-1]['ThanhTienChiTraBV'],2,",",".").'</td>'; 
							echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">0</td>'; 
				  echo '</tr>';
			  ?>
              </tbody>
        

<tr style="border:none">
<td colspan="8" style="text-align:left;border:none">
Tổng chi phí đợt điều trị: <strong><?=number_format($bhyt[count($bhyt)-1]['thanhtien'],2,",",".")?>đ</strong><br />
<label style="font-style: italic; display: inline-block; margin-bottom: 5px;">(Viết bằng chữ: <span id="sotien"></span>)</label><br />
Số tiền Quỹ BHYT thanh toán: <strong><?=number_format($bhyt[count($bhyt)-1]['ThanhTienBaoHiem'],2,",",".")?>đ</strong> <label style="margin-left:100px;">Số tiền người bệnh trả: <strong><?=number_format($bhyt[count($bhyt)-1]['nguoibenh'],2,",",".")?>đ</strong></label><br /> 
<?php
//if($sophimbhyt!=0){
	//echo '<br />Người bệnh xác nhận: Đã nhận đủ '.$sophimbhyt.' phim';
	echo '<br />Người bệnh xác nhận: Đã nhận đủ ..... phim';
//}
?>
</td></tr>
</table>
<table cellpadding="0" cellspacing="0" style="">
<tr style="border:none" style="font-size:12px;">	
	<td style="text-align:center;border:none; vertical-align: top;"><br />
	&nbsp;<br />
	NGƯỜI LẬP BẢNG KÊ<br />
	(ký,ghi rõ họ tên)<br /><br /><br /><br />
	<strong><?=$_SESSION["user"]["fullname"]?></strong><br />
	</td>
	<td style="text-align:center;border:none; vertical-align: top;"><br />
	&nbsp;<br />
	XÁC NHẬN CỦA NGƯỜI BỆNH<br />
    (ký,ghi rõ họ tên)<br /><br /><br /><br />
	</td>
    <td style="text-align:center;border:none; vertical-align: top;"><br />
	<?=$thongtinbhyt[0]['NgayThanhToan']?><br />
	KẾ TOÁN VIỆN PHÍ<br />
	(ký,ghi rõ họ tên)<br /><br /><br /><br />
	<strong>NGUYỄN THỊ NA</strong><br /><br />
	</td>
	<td style="text-align:center;border:none; vertical-align: top;"><br />
	Ngày.....tháng.....năm.....<br />
	GIÁM ĐỊNH BHYT<br />
	(ký,ghi rõ họ tên)<br /><br /><br /><br />
	</td> 
	</tr>
</table>
</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180

	
	$('#sotien').html(toWords((<?=$bhyt[count($bhyt)-1]['thanhtien']?>).toString())+" đồng");
	 print_preview();
	});
</script>
</html>
