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
		$thongtinbhyt[0]['NgayThanhToan']="Ng??y.....th??ng.....n??m.....";
	}else{
		$thongtinbhyt[0]['NgayThanhToan']='Ng??y '.$thongtinbhyt[0]['NgayThanhToan']->format('d').' th??ng '.$thongtinbhyt[0]['NgayThanhToan']->format('m').' n??m '.$thongtinbhyt[0]['NgayThanhToan']->format('Y');
	}
	

?>
<body style="overflow: scroll;">
	<table cellpadding="0" cellspacing="0" border="0" style="font-size:12px;" >
    <tr>
    	<td style=" width:70%; text-align:left;"><strong>B??? Y t???/S??? Y t???/Y t??? ng??nh: S??? Y T??? TH??NH PH??? ???? N???NG</strong></td>
        <td style=" width:30%; text-align:center;"><strong>M???u s???: 01/BV</strong></td>
    </tr>
     <tr>
    	<td style=" width:70%; text-align:left;"><strong>C??? s??? kh??m,ch???a b???nh: PH??NG KH??M ??A KHOA Y ?????C HEALTHCARE</strong></td>
        <td style=" width:30%; text-align:center;"><strong>S??? kh??m b???nh</strong></td>
    </tr>
      <tr>
    	<td style=" width:70%; text-align:left;"><strong><?php if($thongtinbhyt[0]['ID_PhanLoaiKham']==24){echo 'Khoa H???i s???c c???p c???u';}else{echo 'Khoa Kh??m B???nh';} ?></strong></td>
        <td style=" width:30%; text-align:center;"><strong>M?? s??? ng?????i b???nh: <?= $thongtinbhyt[0]['MaBenhNhan'] ?> </strong></td>
    </tr>
    <tr>
    	<td style=" width:70%; text-align:left;"><strong>M?? khoa</strong></td>
        <td style=" width:30%; text-align:center;"></td>
    </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
     <tr>
    	<td style="text-align:center;"><strong>B???NG K?? CHI PH?? KH??M B???NH,CH???A B???NH NGO???I TR??</strong></td>       
    </tr>
    </table>

<table><tr><td style="text-align:left;"><strong>I. H??nh ch??nh</strong></td></tr></table>
<table style="width:100%">
<tr><td style="text-align:left;">(1) H??? t??n ng?????i b???nh:<te style="text-transform: uppercase;"> <?= $thongtinbhyt[0]['HoLotBenhNhan'].' '.$thongtinbhyt[0]['TenBenhNhan']?></te></td>
<td style="text-align:right;">S??T: <?=((int)$thongtinbhyt[0]['DienThoai1'])>0?$thongtinbhyt[0]['DienThoai1']:'' ?></td>
<td style="text-align:right;">Ng??y sinh: <?=$thongtinbhyt[0]['NamSinh'] ?></td>
<td style="text-align:right;">Gi???i t??nh: <?= $thongtinbhyt[0]['gioi']?></td>
</tr>
</table>

<table style="width:100%">
	<tr>
		<td style="text-align:left;">(2) ?????a ch???: <?= $thongtinbhyt[0]['DiaChiTheBHYT']?></td>
		<td>(3) M?? khu v???c (K1/K2/K3): <?=$thongtinbhyt[0]['LoaiKhuVuc']?></td>
	</tr>
</table>
<table style="width:100%" border="0">
<td style="text-align:left;">(3) C?? BHYT <input type="checkbox" name="ckkdt" id="ckkdt" checked class="css-checkbox"/><label class="css-label" for="ckkdt"></label></td><td style="text-align:left;">M?? th??? BHYT: <?= $thongtinbhyt[0]['SoThe'].''.$thongtinbhyt[0]['Ma_KCB_BanDau']?></td><td style="text-align:right;">Gi?? tr??? t???: <?=$thongtinbhyt[0]['HanSD_TuNgay']!=''?$thongtinbhyt[0]['HanSD_TuNgay']->format('d/m/Y'):''?> ?????n <?=$thongtinbhyt[0]['HanSD_DenNgay']!=''?$thongtinbhyt[0]['HanSD_DenNgay']->format('d/m/Y'):''?></td></tr>
</table>
<table>
<tr><td style="text-align:left;">(4) Kh??ng c?? BHYT <input type="checkbox" name="gioi" class="css-checkbox" id="gioi"/><label class="css-label" for="gioi"></label></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(5) C?? s??? ????ng k?? KCB BHYT ban ?????u: <?=$thongtinbhyt[0]['Ten_KCB_BanDau']?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(6) M?? s??? c???a c?? s??? ????ng k?? KCB BHYT ban ?????u: <?=$thongtinbhyt[0]['Ma_KCB_BanDau']?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(7) ?????n kh??m:  <?=$thongtinbhyt[0]['ThoiGianVaoKham']->format('H').' gi??? '.$thongtinbhyt[0]['ThoiGianVaoKham']->format('i').' ng??y '.$thongtinbhyt[0]['ThoiGianVaoKham']->format('d/m/Y')?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(8) K???t th??c ?????t ??i???u tr??? ngo???i tr??: <?php if($thongtinbhyt[0]['ThoiGianKetThucKham']!=''){
	echo $thongtinbhyt[0]['ThoiGianKetThucKham']->format('H').' gi??? '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('i').' ng??y '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('d/m/Y');}?></td><td style="text-align:right;">T???ng s??? ng??y ??i???u tr???: <?=$thongtinbhyt[0]['SoNgayDieuTri']?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(9) C???p c???u: <input type="checkbox" name="capcuu" id="capcuu" <?php
if($thongtinbhyt[0]['TrangThaiKham']==4){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="capcuu"></label></td><td style="text-align:left;"> ????ng tuy???n: <input type="checkbox" name="dungtuyen" id="dungtuyen" <?php
if($thongtinbhyt[0]['TrangThaiKham']==1){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="dungtuyen"></label></td><td style="text-align:left;">N??i chuy???n ?????n: </td><td style="text-align:right;">(10) Tr??i tuy???n:  <input type="checkbox" name="traituyen" id="traituyen" <?php
if($thongtinbhyt[0]['TrangThaiKham']==3){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="traituyen"></label></td></tr>
</table>
<table>
<tr><td style="text-align:left;">(11) Ch???n ??o??n:<?=$thongtinbhyt[0]['ChanDoan']?></td><td style="text-align:left;">(12) M?? b???nh (ICD-10): <?=$thongtinbhyt[0]['MaICD10']?></td></tr>
</table>
<table>
<tr><td style="text-align:left;">(13) Th???i ??i???m ????? 5 n??m li??n t???c t??? ng??y:<te style="text-transform: uppercase;"> <?=$thongtinbhyt[0]['NgayDu5Nam']?></te></td><td style="text-align:left;">(14) Mi???n c??ng chi tr??? trong n??m t??? ng??y: <?=$thongtinbhyt[0]['NgayMienCungChiTra']?></td></tr>
</table>
<table>
<tr><td style="text-align:left;"><b>II. Chi ph?? kh??m,ch???a b???nh</b></td></tr>
</table>
<table cellpadding="0" cellspacing="0" style="font-size:10px;">
	   <thead >
             <tr style="border:solid 1px #000000 !important;border-top-color:solid 1px #000000">
                <td style="border:solid 1px #000000 !important;width:38%;" rowspan="2"  align="center" ><b>N???i dung</b></td>
                <td style="border:solid 1px #000000 !important;width:5%;"  rowspan="2"  align="center" ><b>????n v??? t??nh</b></td>
                <td style="border:solid 1px #000000 !important;width:7%;"  rowspan="2"  align="center" ><b>S??? l?????ng</b></td>

                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>????n gi?? BV</b><br />(?????ng)</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>T??? l??? thanh to??n theo d???ch v???</b><br>(%)</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>????n gi?? BHYT</b><br />(?????ng)</td>

                
                <td style="border:solid 1px #000000 !important;width:6%;" rowspan="2"  align="center" ><b>T??? l??? thanh to??n BHYT</b><br />(%)</td>

                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Th??nh ti???n BV</b><br />(?????ng)</td>

                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Th??nh ti???n BHYT</b><br />(?????ng)</td>

                <td style="border:solid 1px #000000 !important;width:30%;" colspan="4"  align="center" ><b>Ngu???n thanh to??n</b>(?????ng)</td>

             </tr>
              <tr >
              	<td style="border:solid 1px #000000 !important;" align="center"><b >Qu??? BHYT</b><br />(?????ng)</td>
                <td style="border:solid 1px #000000 !important;" align="center"><b >Ng?????i b???nh c??ng chi tr???</b><br />(?????ng)</td>
				<td style="border:solid 1px #000000 !important;" align="center"><b>Kh??c</b><br />(?????ng)</td> 
                <td style="border:solid 1px #000000 !important;" align="center"><b >Ng?????i b???nh t??? tr???</b><br />(?????ng)</td>
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
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[$i]['thanhtienbhytsautyle'],2,",",".").'</td>';
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

						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px;">'.number_format($bhyt[$i]['thanhtienbhytsautyle'],2,",",".").'</td>';
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
				   		   echo '<td colspan=7 bgcolor="#CCCCCC" style="border:solid 1px #000000 !important;text-align:center; padding-left: 2px; padding-right: 2px;"><strong>T???ng c???ng</strong></td>';
				   		   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[count($bhyt)-1]['thanhtien'],2,",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right; padding-left: 2px; padding-right: 2px; font-weight: bold;">'.number_format($bhyt[count($bhyt)-1]['thanhtienbhytsautyle'],2,",",".").'</td>';

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
T???ng chi ph?? ?????t ??i???u tr???: <strong><?=number_format($bhyt[count($bhyt)-1]['thanhtien'],2,",",".")?>??</strong><br />
<label style="font-style: italic; display: inline-block; margin-bottom: 5px;">(Vi???t b???ng ch???: <span id="sotien"></span>)</label><br />
S??? ti???n Qu??? BHYT thanh to??n: <strong><?=number_format($bhyt[count($bhyt)-1]['ThanhTienBaoHiem'],2,",",".")?>??</strong> <label style="margin-left:100px;">S??? ti???n ng?????i b???nh tr???: <strong><?=number_format($bhyt[count($bhyt)-1]['nguoibenh'],2,",",".")?>??</strong></label><br /> 
<?php
//if($sophimbhyt!=0){
	//echo '<br />Ng?????i b???nh x??c nh???n: ???? nh???n ????? '.$sophimbhyt.' phim';
	echo '<br />Ng?????i b???nh x??c nh???n: ???? nh???n ????? ..... phim';
//}
?>
</td></tr>
</table>
<table cellpadding="0" cellspacing="0" style="">
<tr style="border:none" style="font-size:12px;">	
	<td style="text-align:center;border:none; vertical-align: top;"><br />
	&nbsp;<br />
	NG?????I L???P B???NG K??<br />
	(k??,ghi r?? h??? t??n)<br /><br /><br /><br />
	<strong><?=$_SESSION["user"]["fullname"]?></strong><br />
	</td>
	<td style="text-align:center;border:none; vertical-align: top;"><br />
	&nbsp;<br />
	X??C NH???N C???A NG?????I B???NH<br />
    (k??,ghi r?? h??? t??n)<br /><br /><br /><br />
	</td>
    <td style="text-align:center;border:none; vertical-align: top;"><br />
	<?=$thongtinbhyt[0]['NgayThanhToan']?><br />
	K??? TO??N VI???N PH??<br />
	(k??,ghi r?? h??? t??n)<br /><br /><br /><br />
	<strong>D????ng Th??? Thu Th???o</strong><br /><br />
	</td>
	<td style="text-align:center;border:none; vertical-align: top;"><br />
	Ng??y.....th??ng.....n??m.....<br />
	GI??M ?????NH BHYT<br />
	(k??,ghi r?? h??? t??n)<br /><br /><br /><br />
	</td> 
	</tr>
</table>
</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180

	
	$('#sotien').html(toWords((<?=$bhyt[count($bhyt)-1]['thanhtien']?>).toString())+" ?????ng");
	// print_preview();
	});
</script>
</html>
