<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" >
table {
	width:100%;
	cellpadding:0; cellspacing:0;
	}
input[type=checkbox].css-checkbox {
							display:none;
}

input[type=checkbox].css-checkbox + label.css-label {
							padding-left:20px;
							height:15px; 
							display:inline-block;
							line-height:15px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:15px;
							vertical-align:middle;
							cursor:pointer;

}

input[type=checkbox].css-checkbox:checked + label.css-label {
							background-position: 0 -15px;
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
		$params1 = array(335721);

		$get_thongtinnv=$data->query( $store_name1,$params1);//Goi 
		$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop 
		$thongtinbhyt= $excute1->get_as_array();//Tra ve mang toan bo 

		$params2 = array(200082);
		$store_name2="{call GD2_BHYT_print(?)}";
		$get_thongtin2=$data->query( $store_name2,$params2);
		$excute2= new SQLServerResult($get_thongtin2);
		$bhyt= $excute2->get_as_array();
		

?>
<body>
	<table cellpadding="0" cellspacing="0" border="0" >
    <tr>
    	<td style=" width:70%; text-align:left;"><strong>Bộ Y tế/Sở Y tế/Y tế ngành: SỞ Y TẾ THÀNH PHỐ ĐÀ NẴNG</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Mẫu số: 01/BV</strong></td>
    </tr>
     <tr>
    	<td style=" width:70%; text-align:left;"><strong>Cở sở khám,chữa bệnh: Bệnh Viện Đa Khoa Gia Đình</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Số khám bệnh</strong></td>
    </tr>
      <tr>
    	<td style=" width:70%; text-align:left;""><strong>Khoa Khám Bệnh</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Mã số người bệnh: <?= $thongtinbhyt[0]['MaBenhNhan'] ?> </strong></td>
    </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
     <tr>
    	<td style="text-align:center;"><strong>BẢNG KÊ CHI PHÍ KHÁM BỆNH,CHỮA BỆNH NGOẠI TRÚ</strong></td>       
    </tr>
    </table>

<table><tr><td style="text-align:left;"><strong>I. Hành chính</strong></td></tr></table>
<table style="width:100%">
<tr><td style="text-align:left;">(1) Họ tên người bệnh: <?= $thongtinbhyt[0]['HoLotBenhNhan'].' '.$thongtinbhyt[0]['TenBenhNhan']?></td>
<td style="text-align:right;">Ngày sinh: <?=$thongtinbhyt[0]['NamSinh'] ?></td>
<td style="text-align:right;">Giới tính: <?= $thongtinbhyt[0]['gioi']?></td>
</tr>
</table>

<table style="width:100%">
<tr><td style="text-align:left;">(2) Địa chỉ: <?= $thongtinbhyt[0]['DiaChiTheBHYT']?></td></tr>
</table>
<table style="width:100%">
<td style="text-align:left;">(3) Có BHYT <input type="checkbox" name="ckkdt" id="ckkdt" checked class="css-checkbox"/><label class="css-label" for="ckkdt"></label></td><td style="text-align:left;">Mã thẻ BHYT: <?= $thongtinbhyt[0]['SoThe'].''.$thongtinbhyt[0]['Ma_KCB_BanDau']?></td><td style="text-align:right;">Giá trị từ: <?= $thongtinbhyt[0]['HanSD_TuNgay']->format('d/m/Y')?> đến <?=$thongtinbhyt[0]['HanSD_DenNgay']->format('d/m/Y')?></td></tr>
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
	echo $thongtinbhyt[0]['ThoiGianKetThucKham']->format('H').' giờ '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('i').' ngày '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('d/m/Y');}?></td><td style="text-align:right;">Tổng số ngày điều trị: 1</td></tr>
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
<tr><td style="text-align:left;">(11) Chẩn đoán:</td><td style="text-align:right;">(12) Mã bệnh (ICD-10): </td></tr>
</table>


<table>
<tr><td style="text-align:left;"><b>II. Chi phí khám,chữa bệnh</b></td></tr>
</table>


<table cellpadding="0" cellspacing="0" border="1">
	   <thead >
             <tr >
                <td rowspan="2" style="width:40%" align="center" ><b>Nội dung</b></td>
                <td rowspan="2" align="center" style="width:5%"><b>Đơn vị tính</b></td>
                <td rowspan="2" style="width:5%" align="center" ><b>Số lượng</b></td>
                <td rowspan="2" style="width:10%" align="center" ><b>Đơn giá</b><br />(đồng)</td>
                <td rowspan="2" style="width:10%" align="center" ><b>Thành tiền</b><br />(đồng)</td>
                <td colspan="3" style="width:30%" align="center" ><b>Nguồn thanh toán</b>(đồng)</td>
             </tr>
              <tr >
              	<td align="center"><b >Quỹ BHYT</b><br />(đồng)</td>
                <td align="center"><b >Khác</b><br />(đồng)</td>
                <td align="center"><b >Người bệnh</b><br />(đồng)</td>
              </tr>
               <tr >
              	<td align="center">(1)</td>
                <td align="center">(2)</td>
                <td align="center">(3)</td>
                <td align="center">(4)</td>
                <td align="center">(5)</td>
                <td align="center">(6)</td>
                <td align="center">(7)</td>
                <td align="center">(8) = (5)-(6)-(7)</td>                
              </tr>
              <?php
			  	for($i=0;$i<count($bhyt)-1;$i++){
					echo '<tr >';
					if($bhyt[$i]['id_loai']==null){
						
						echo '<td colspan=8 ><strong>'.$bhyt[$i]['rn'].'. '.$bhyt[$i]['ten'].'</strong></td>';
					
					}else{
						if($bhyt[$i]['bhyt']==-1){
						
						   echo '<td colspan=4 bgcolor="#999999" style="text-align:right;"><strong>'.$bhyt[$i]['ten'].'</strong></td>';
						   
						
						   echo '<td style="text-align:right;">'.number_format($bhyt[$i]['thanhtien'],"0",",",".").'</td>';
						   echo '<td style="text-align:right;">'.number_format($bhyt[$i]['ThanhTienCungChiTra'],"0",",",".").'</td>';
						   echo '<td style="text-align:right;">0</td>';
						   echo '<td style="text-align:right;">'.number_format($bhyt[$i]['nguoibenh'],"0",",",".").'</td>'; 
						}else{
						
						   echo '<td >'.$bhyt[$i]['ten'].'</td>';
						   echo '<td ></td>';
						   echo '<td style="text-align:center;">'.number_format($bhyt[$i]['soluong'],"0",",",".").'</td>';
						   echo '<td style="text-align:right;">'.number_format($bhyt[$i]['dongia'],"0",",",".").'</td>';
						   echo '<td style="text-align:right;">'.number_format($bhyt[$i]['thanhtien'],"0",",",".").'</td>';
						   echo '<td style="text-align:right;">'.number_format($bhyt[$i]['ThanhTienCungChiTra'],"0",",",".").'</td>';
						   echo '<td style="text-align:right;">0</td>';
						   echo '<td style="text-align:right;">'.number_format($bhyt[$i]['nguoibenh'],"0",",",".").'</td>';   
						}
					}
					
				        
				  echo '</tr>';
				}
				
				   echo '<tr >';
				   		   echo '<td colspan=4 bgcolor="#999999" style="text-align:center;"><strong>Tổng cộng</strong></td>';
						   echo '<td style="text-align:right;">'.number_format($bhyt[count($bhyt)-1]['thanhtien'],"0",",",".").'</td>';
						   echo '<td style="text-align:right;">'.number_format($bhyt[count($bhyt)-1]['ThanhTienCungChiTra'],"0",",",".").'</td>';
						   echo '<td style="text-align:right;">0</td>';
						   echo '<td style="text-align:right;">'.number_format($bhyt[count($bhyt)-1]['nguoibenh'],"0",",",".").'</td>'; 
				  echo '</tr>';
			  ?>
              
        </thead>
</table>
</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180

	

	 print_preview();
	});
</script>
</html>
