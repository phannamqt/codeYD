<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0 !important;
	padding:2px;
	font-family:Arial, Helvetica, sans-serif!important;
} 
 


</style>
</head>

<body>
	<?php

        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["idthutrano"]);//tao param cho store
        $store_name="{call GD2_PhieuThanhToan_byID_ThuTraNo_print(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
		$store_name1="{call Gd2_thu_trano_select_byidthutrano (?)}";
		 $params1 = array($_GET['idthutrano']);
		 $get1=$data->query( $store_name1, $params1);
		 $excute1 = new SQLServerResult($get1);
		 $tam2 = $excute1->get_as_array();
		// print_r($tam2);
	  $tenbn=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'];
	   $diachi=$thongtinbenhnhan[0]['DiaChi'];
		$ttbv='<table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
			 <tr style="font-size:10px;">
				 <td style=" width:100%; text-align:left">
					
					<span style="'.$_SESSION["com"]["TenBenhVienCSS"].'">'.$_SESSION["com"]["TenBenhVien"].'<br /></span>
					<span style="'.$_SESSION["com"]["DiaChiCSS"].'">'.$_SESSION["com"]["DiaChi"].'<br /></span>
					<span style="'.$_SESSION["com"]["SoDTCSS"].'">'.$_SESSION["com"]["SoDT"].'<br /></span>
				 </td>
			 </tr>
		 </table>';
		 
		 $ttlk='
		<table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
			<tr >
				<td style="font-weight:bold; width:80%;font-size:12px; padding-bottom: 5px;">'.$tenbn.'</td>
				<td style="font-weight:bold; width:20%; text-align:right;font-size:18px; padding-bottom: 5px;">'.$thongtinbenhnhan[0]["MaBenhNhan"] .' </td>
			</tr>
		</table>
		 <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
			<tr>
				<td style="  font-weight:bold;font-size:12px;  padding-bottom: 5px;" colspan="2">'.$diachi .' </td>

			</tr>
			<tr>
				<td height="20" style="font-weight:bold;font-size:14px; width:50%; padding-bottom: 5px;">'.$thongtinbenhnhan[0]["MaPhieu"].' </td>
				<td style="font-weight:bold;font-size:14px; width:50%; text-align:right; padding-bottom: 5px;">'.$thongtinbenhnhan[0]["NgayGio"]->format($_SESSION["config_system"]["ngaythang"]." H:i").' </td>
			</tr>
		</table>';
		
		
		$ctdv='
			<table class="" cellpadding="0" cellspacing="0" border="1" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
			<tr>
				<td style="font-weight:bold;font-size:12px; padding: 5px; text-align:center">NỘI DUNG</td>
				<td style="font-weight:bold;font-size:12px; padding: 5px; text-align:center">ĐVT</td>
				<td style="font-weight:bold;font-size:12px; padding: 5px; text-align:center">BN TRẢ</td>
			</tr>
		';
		$tennhom='';
		$tongtien=0;
		for($i=0;$i<count($thongtinbenhnhan);$i++){
			if($tennhom=='' || $tennhom!=$thongtinbenhnhan[$i]['TenNhom']){
				$tennhom=$thongtinbenhnhan[$i]['TenNhom'];
				$ctdv.='<tr>
				<td style="font-weight:bold;font-size:12px; padding: 3px;" colspan=3><te style="text-transform: uppercase;">'.$thongtinbenhnhan[$i]['TenNhom'].'</te></td>
				</tr>';
				
			}
			$ctdv.='<tr>
				<td style="font-size:12px; padding: 3px;">'.$thongtinbenhnhan[$i]['TenDichVu'].'</td>
				<td style="font-size:12px; padding: 3px; text-align:center">'.$thongtinbenhnhan[$i]['TenDonViTinh'].'</td>
				<td style="font-size:12px; padding: 3px; text-align:right">'.number_format($thongtinbenhnhan[$i]['BenhNhanTra'],"0",",",".").'</td>
			</tr>';
			$tongtien+=(float)$thongtinbenhnhan[$i]['BenhNhanTra'];
			if(($i+1)==count($thongtinbenhnhan)){
				$ctdv.='<tr>
				<td style="font-size:12px; padding: 3px; text-align:center" colspan=2>Tổng cộng:</td> 
				<td style="font-size:12px; padding: 3px; text-align:right">'.number_format($tongtien,"0",",",".").'</td>
				</tr></table>';
			}
		}
		
		$tt='<table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
         <tr>
            <td  style=" width:50%; text-align:center;padding-bottom:10px;"><strong></strong></td>
            <td  style=" width:50%; text-align:center;padding-bottom:10px; "><strong>THU NGÂN</strong></td>
        </tr>
		 <tr  >
            <td  style=" width:50%; text-align:center;padding-bottom:10px;height:10px;"><strong></strong></td>
            <td  style=" width:50%; text-align:center;padding-bottom:10px;max-height:38px; "><img id="bs_chandoan1" style="max-height:38px"/>
        </tr>
		 <tr  >
		 	<td  style=" width:50%; padding-bottom:10px;height:10px;"></td>
            <td style=" width:50%; text-align:center;  padding-bottom:10px; "><strong>'.$thongtinbenhnhan[0]['HoLotNhanVien'].' '.$thongtinbenhnhan[0]['TenNhanVien'].''.'</strong></td>
        </tr>

        <tr >
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5; padding-top:2px; padding-bottom:2px;">

        </tr>
    </table>';
		
		$lien1='<div style="page-break-after:always;">'.$ttbv.' <h3 style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:15px;">PHIẾU THANH TOÁN</h3>'. $ttlk. $ctdv.'<br />'.$tt.'</div>';
		$lien2='<div style="page-break-after:always;">'.$ttbv.' <h3 style="text-align:center; font-family:Arial, Helvetica, sans-serif;font-size:15px;">PHIẾU LƯU</h3>'. $ttlk. $ctdv.'<br />'.$tt.' </div>';
	 
	 
	 
	 
		if($_GET['lien']==2){

			echo($lien1);
		}else if($_GET['lien']==3){

			echo($lien2);

		}else if($_GET['lien']==1){

			echo($lien1);
			echo($lien2);
		}

		//echo($kham);
    ?>


    <div class="footer"></div>
</body>



</html>
 <script type="text/javascript">


    $(document).ready(function() {
		$('.thanhtien').html(toWords((<?=$thongtinbenhnhan[0]["tong"]?>).toString())+" đồng");

		if($.cookie("in_status")=="print_preview"){
					print_preview();
		 }else if($.cookie("in_status")=="print_direct"){

						print_direct(10,10);
			 }

	})
		</script>