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
	font-size:13px;
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

		$store_name1="{call GD2_Thongtin_benhnhan_bhyt_luotkham (?)}";
		$params1 = array($_GET['id_luotkham']);

		$get_thongtinnv=$data->query( $store_name1,$params1);//Goi 
		$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop 
		$thongtinbhyt= $excute1->get_as_array();//Tra ve mang toan bo 

		$params2 = array($_GET['id_luotkham']);
		$store_name2="{call GD2_chiphi_print(?)}";
		$get_thongtin2=$data->query( $store_name2,$params2);
		$excute2= new SQLServerResult($get_thongtin2);
		$bhyt= $excute2->get_as_array();
		

?>
<body style="overflow: scroll;">
	<table cellpadding="0" cellspacing="0" border="0" style="font-size:14px;" >
    <tr>
    	<td style=" width:70%; text-align:left;"><strong></strong></td>
        <td style=" width:30%; text-align:center;"><strong></strong></td>
    </tr>
     <tr>
    	<td style=" width:70%; text-align:left;"><strong><?=$_SESSION["com"]["TenBenhVien"]?></strong></td>
        <td style=" width:30%; text-align:center;"><strong>S??? kh??m b???nh</strong></td>
    </tr>
      <tr>
    	<td style=" width:70%; text-align:left;"><strong><?php
			if($thongtinbhyt[0]['ID_BenhAnNoiTru']==0){		
				 if($thongtinbhyt[0]['ID_PhanLoaiKham']==24){echo 'Khoa H???i s???c c???p c???u';}
				 else{echo 'Khoa Kh??m B???nh';} 
			}else{
				echo $thongtinbhyt[0]['TenPhongBan'];
			}
		
		
		?></strong></td>
        <td style=" width:30%; text-align:center;"><strong>M?? s??? ng?????i b???nh: <?= $thongtinbhyt[0]['MaBenhNhan'] ?> </strong></td>
    </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
     <tr>
    	<td style="text-align:center;"><strong>B???NG K?? CHI PH?? KH??M B???NH,CH???A B???NH
         <?php 
			if($thongtinbhyt[0]['ID_BenhAnNoiTru']==0) {echo 'NGO???I TR??';}
			else{echo 'N???I TR??';}
		 ?> </strong></td>       
    </tr>
    </table>

<table><tr><td style="text-align:left;"><strong>I. H??nh ch??nh</strong></td></tr></table>
<table style="width:100%">
<tr><td style="text-align:left;">H??? t??n ng?????i b???nh:<te style="text-transform: uppercase;"> <?= $thongtinbhyt[0]['HoLotBenhNhan'].' '.$thongtinbhyt[0]['TenBenhNhan']?></te></td>
<td style="text-align:right;">S??T: <?=$thongtinbhyt[0]['DienThoai1'] ?></td>
<td style="text-align:right;">Ng??y sinh: <?=$thongtinbhyt[0]['NamSinh'] ?></td>
<td style="text-align:right;">Gi???i t??nh: <?= $thongtinbhyt[0]['gioi']?></td>
</tr>
</table>


<table style="width:100%">
<tr><td style="text-align:left;">?????a ch???: <?= $thongtinbhyt[0]['DiaChi']?></td></tr>
</table>
<table style="width:100%">
<tr>
<td style="text-align:left;">M?? th??? BHYT:<?= $thongtinbhyt[0]['SoThe'].''.$thongtinbhyt[0]['Ma_KCB_BanDau']?></td>
<td style="text-align:left;">Gi?? tr??? t???: <?php if($thongtinbhyt[0]['HanSD_TuNgay']!=''){echo $thongtinbhyt[0]['HanSD_TuNgay']->format('d/m/Y');}?> ?????n : <?php if($thongtinbhyt[0]['HanSD_DenNgay']!=''){echo $thongtinbhyt[0]['HanSD_DenNgay']->format('d/m/Y');}?></td>
</tr>
</table>

<table style="width:100%">
<tr>
<td style="text-align:left;">M?? th??? BHCC: <?= $thongtinbhyt[0]['sothebhcc']?></td>
<td style="text-align:left;">Lo???i th???: <?= $thongtinbhyt[0]['TenLoaiThe']?></td>
</tr>
</table>

<table>
<tr><td style="text-align:left;">?????n kh??m:  <?=$thongtinbhyt[0]['ThoiGianVaoKham']->format('H').' gi??? '.$thongtinbhyt[0]['ThoiGianVaoKham']->format('i').' ng??y '.$thongtinbhyt[0]['ThoiGianVaoKham']->format('d/m/Y')?></td>
<td style="text-align:left;">K???t th??c ?????t ??i???u tr??? <?php 
			if($thongtinbhyt[0]['ID_BenhAnNoiTru']==0) {echo 'ngo???i tr??';}
			else{echo 'n???i tr??';}
		 ?>: <?php if($thongtinbhyt[0]['ThoiGianKetThucKham']!=''){
	echo $thongtinbhyt[0]['ThoiGianKetThucKham']->format('H').' gi??? '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('i').' ng??y '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('d/m/Y');}?></td><td style="text-align:right;">T???ng s??? ng??y ??i???u tr???: <?php 
	if($thongtinbhyt[0]['tongngay']==0){
		echo 1;
	}else{	
		echo $thongtinbhyt[0]['tongngay'];
	}?></td>


</tr>


</table>




<table>
<tr><td style="text-align:left;">Ch???n ??o??n:<te style="text-transform: uppercase;"> <?=$thongtinbhyt[0]['ChanDoan']?></te></td><td style="text-align:left;">M?? b???nh (ICD-10): <?=$thongtinbhyt[0]['ICD']?></td></tr>
</table>
<table>
<tr><td style="text-align:left;"><b>II. Chi ph?? kh??m,ch???a b???nh</b></td></tr>
</table>
<table cellpadding="0" cellspacing="0" style="font-size:15px;">
	   <thead >
             <tr style="border:solid 1px #000000 !important;border-top-color:solid 1px #000000">
                <td style="border:solid 1px #000000 !important;width:38%;" rowspan="2"  align="center" ><b>N???i dung</b></td>
                <td style="border:solid 1px #000000 !important;width:5%;"  rowspan="2"  align="center" ><b>????n v??? t??nh</b></td>
                <td style="border:solid 1px #000000 !important;width:7%;"  rowspan="2"  align="center" ><b>S??? l?????ng</b></td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>????n gi??</b><br />(?????ng)</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Th??nh ti???n</b><br />(?????ng)</td>
                <td style="border:solid 1px #000000 !important;width:30%;" colspan="5"  align="center" ><b>Ngu???n thanh to??n</b>(?????ng)</td>
             </tr>
              <tr >
              	<td style="border:solid 1px #000000 !important;" align="center"><b >Qu??? BHYT</b><br />(?????ng)</td>
                <td style="border:solid 1px #000000 !important;" align="center"><b >H??? tr???</b><br />(?????ng)</td>
                <td style="border:solid 1px #000000 !important;" align="center"><b >Gi???m gi??</b><br />(?????ng)</td>
                <td style="border:solid 1px #000000 !important;" align="center"><b >Qu??? BHCC</b><br />(?????ng)</td>
                <td style="border:solid 1px #000000 !important;" align="center"><b >Ng?????i b???nh</b><br />(?????ng)</td>
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
              </tr>
              </thead>
              <tbody>
              <?php
			 $HoTroTukham=0;
			 
			  	for($i=0;$i<count($bhyt)-1;$i++){					
					if($bhyt[$i]['rn']==null){
						$bhyt[$i]['rn']=$bhyt[$i-1]['rn'];
					}
					if($bhyt[$i]['ID_Nhom_BHYT']==5)	{
							$bhyt[$i]['HoTroTuBenhVien']=0;
						}
						 $HoTroTukham=$HoTroTukham+$bhyt[$i]['HoTroTuBenhVien'];
					echo '<tr style=" border:1px solid #000;">';
					if($bhyt[$i]['id_loai']==null){
						echo '<td  style="border:solid 1px #000000 !important;" colspan=10 ><strong>'.$bhyt[$i]['rn'].'. '.$bhyt[$i]['ten'].'</strong></td>';
					}else{
						if($bhyt[$i]['bhyt']==-1){						
						   echo '<td  colspan=4 bgcolor="#CCCCCC" style="border:solid 1px #000000 !important;border:solid 1px #000000 !important;text-align:right;"><strong>'.$bhyt[$i]['ten'].'</strong></td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['thanhtien'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['ThanhTienBaoHiem'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['HoTroTuBenhVien'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['GiamGia'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['BHCCTra'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['nguoibenh'],"0",",",".").'</td>'; 
						}else{		
						
						   echo '<td style="border:solid 1px #000000 !important;text-align:left;">'.$bhyt[$i]['ten'].'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:left;">'.$bhyt[$i]['TenDonViTinh'].'</td>';
						   if($bhyt[$i]['ngaygiuong']==''){
							    echo '<td style="border:solid 1px #000000 !important;text-align:center;">'.number_format($bhyt[$i]['soluong'],"0",",",".").'</td>';
						   }else{
							    echo '<td style="border:solid 1px #000000 !important;text-align:left;">'.$bhyt[$i]['ngaygiuong'].'</td>';
						   }						   
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['dongia'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['thanhtien'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['ThanhTienBaoHiem'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['HoTroTuBenhVien'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['GiamGia'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['BHCCTra'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['nguoibenh'],"0",",",".").'</td>';   
						}
					}				        
				  echo '</tr>';
				}				
				  echo '<tr style=" border:1px solid #000;">';
				   		   echo '<td colspan=4 bgcolor="#CCCCCC" style="border:solid 1px #000000 !important;text-align:center;"><strong>T???ng c???ng</strong></td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[count($bhyt)-1]['thanhtien'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[count($bhyt)-1]['ThanhTienBaoHiem'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[count($bhyt)-1]['HoTroTuBenhVien'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[count($bhyt)-1]['GiamGia'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[count($bhyt)-1]['BHCCTra'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[count($bhyt)-1]['nguoibenh'],"0",",",".").'</td>'; 
				  echo '</tr>';
			  ?>
              </tbody>
        

<tr style="border:none"><td colspan="10" style="text-align:left;border:none">
M?? Phi???u: <?=$thongtinbhyt[0]['MaPhieu']?><br />

T???ng chi ph?? ??i???u tr???: <?=number_format($bhyt[count($bhyt)-1]['thanhtien'],"0",",",".")?><br />
Qu??? BHYT thanh to??n: <?=number_format($bhyt[count($bhyt)-1]['ThanhTienBaoHiem'],"0",",",".")?><br />
Qu??? BHCC thanh to??n: <?=number_format($bhyt[count($bhyt)-1]['BHCCTra'],"0",",",".")?><br />
B???nh vi???n h??? tr??? chi ph?? kh??m: <?=number_format($bhyt[count($bhyt)-1]['HoTroTuBenhVien'],"0",",",".")?><br />
B???nh vi???n h??? tr??? chi ph?? thu???c: <?php

if($bhyt[count($bhyt)-1]['dathanhtoan']==0){
	if($bhyt[count($bhyt)-1]['ngaydieutri']==0){
		$bhyt[count($bhyt)-1]['ngaydieutri']=1;	
	}
	if($bhyt[count($bhyt)-1]['isnoitru']==0){
		if($bhyt[count($bhyt)-1]['HoTro_thuoc']>$bhyt[count($bhyt)-1]['HoTroNgoaiTru']){
			$hotrothuoc=$bhyt[count($bhyt)-1]['HoTroNgoaiTru'];
		}else{
			$hotrothuoc=$bhyt[count($bhyt)-1]['HoTro_thuoc'];
		}
	}else{
		if($bhyt[count($bhyt)-1]['HoTro_thuoc']>($bhyt[count($bhyt)-1]['HoTroNoiTru']*$bhyt[count($bhyt)-1]['HoTroNoiTru']*$bhyt[count($bhyt)-1]['ngaydieutri'])){
						$hotrothuoc=($bhyt[count($bhyt)-1]['HoTroNoiTru']*$bhyt[count($bhyt)-1]['ngaydieutri']);
		}else{
						$hotrothuoc=$bhyt[count($bhyt)-1]['HoTro_thuoc'];
		}					
	}
}else{
	$hotrothuoc=$bhyt[count($bhyt)-1]['HoTro_thuoc'];	
}

echo number_format($hotrothuoc,"0",",",".")






?><br />
S??? ti???n b???nh vi???n mi???n gi???m :<?=



number_format($thongtinbhyt[0]['GiamGia'],"0",",",".")







?><br />
<!--Mi???n gi???m:<?php


if($bhyt[count($bhyt)-1]['dathanhtoan']==0){				
	$GiamGiatong=0;		
}else{
	$GiamGiatong=$bhyt[count($bhyt)-1]['GiamGiatong']-$bhyt[count($bhyt)-1]['GiamGia'];	
}
/*echo number_format($GiamGiatong,"0",",",".")*/






?><br />-->

S??? ti???n ng?????i b???nh tr???: <?=number_format($bhyt[count($bhyt)-1]['nguoibenh']-$hotrothuoc-$GiamGiatong,"0",",",".")?><br />
<strong>S??? ti???n ghi b???ng ch???: <span id="sotien"></span></strong><br />
Gi?? ph???u thu???t kh??ng bao g???m v???t t?? ti??u hao
</td></tr>


<tr style="border:none;font-size:12px;">	
	<td colspan="4" style="text-align:center;border:none"><br />
NG?????I L???P B???NG K??<br />
    (k??,ghi r?? h??? t??n)<br /><br /><br /><br /><br />
     X??C NH???N C???A NG?????I B???NH<br />
    (k??,ghi r?? h??? t??n)<br /><br /><br /><br />
    </td>
    <td colspan="6" style="text-align:center;border:none"><br />
K??? TO??N VI???N PH??<br />
    (k??,ghi r?? h??? t??n)<br /><br /><br /><br />
<br />
Ng??y.....th??ng.....n??m.....<br />
GI??M ?????NH BHYT<br /><br /><br /><br />
</td>
   

</tr>
</table>
</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180

	
	$('#sotien').html(toWords((<?=$bhyt[count($bhyt)-1]['nguoibenh']-$hotrothuoc-$GiamGiatong?>).toString())+"?????ng");
	 print_preview();
	});
</script>
</html>
