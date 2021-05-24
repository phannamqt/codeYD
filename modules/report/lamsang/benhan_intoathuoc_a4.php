<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style type="text/css" media="print">
body{
	overflow: auto;
	margin-left: 0px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:12px Arial, Helvetica, sans-serif; 
 font-style: italic;
}
#background {
   position: absolute;
   top: 0;
   left: 0;
   bottom: 0;
   right: 0;
   z-index: -1;
   overflow: hidden;
} 
body,td,th {
	color: #000;
	font-size: 13px!important;
	font-family:Arial, Helvetica, sans-serif;
} 
	thead
	{

	display: table-header-group!important;
	}
	table { page-break-inside:auto }
	tr    { page-break-inside:avoid; page-break-after:auto } 
 @media print  {
	pre {
		margin-top: 0px;
	} 
 }
</style>
</head>
<body>

	<?php
	//background="images/toatam.jpg">
        $data= new SQLServer;//tao lop ket noi SQL
        $params1 = array($_GET["id_donthuoc"],1);//tao param cho store 
        $store_name1="{call GD2_Toathuoc_print(?,?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
if(count($thongtinluotkham)>0){
		 
	if($thongtinluotkham[0]["NgayKeDon"]!=''){
		$thongtinluotkham[0]["NgayKeDon"]='Ngày '.$thongtinluotkham[0]["NgayKeDon"]->format('d').' tháng '.$thongtinluotkham[0]["NgayKeDon"]->format('m').' năm '.$thongtinluotkham[0]["NgayKeDon"]->format('Y');
	}
	else $thongtinluotkham[0]["NgayKeDon"]=''; 
	$thongtinluotkham[0]["BsChanDoan"]=""; 
	
	if($thongtinluotkham[0]["HanSD_TuNgay"]!=''){
		$thongtinluotkham[0]["HanSD_TuNgay"]=$thongtinluotkham[0]["HanSD_TuNgay"]->format('d/m/Y');
	}
	else $thongtinluotkham[0]["HanSD_TuNgay"]=''; 
	
	if($thongtinluotkham[0]["HanSD_DenNgay"]!=''){
		$thongtinluotkham[0]["HanSD_DenNgay"]=$thongtinluotkham[0]["HanSD_DenNgay"]->format('d/m/Y');
	}
	else $thongtinluotkham[0]["HanSD_DenNgay"]=''; 
    ?>
	<div style="page-break-after:always;">
			
	 <?=HeaderReportA4()?>
			
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important" > 
			<tr>
			 <td  style="text-align:center"><br /><br />
				<span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">TOA THUỐC BHYT</span>
			 </td>        
			</tr>  
			<tr>
				<td align="left" height="40px!important" style="font-weight: 500; line-height: 15px;" valign="bottom">
				ID: <?=$thongtinluotkham[0]["MaBenhNhan"]?> <br>
				Họ tên: <strong><?=$thongtinluotkham[0]["tenbenhnhan"]?></strong><br>
				Giới tính: <?=$thongtinluotkham[0]["Gioi"]?> <label style="margin-left:20px;"> <?=$thongtinluotkham[0]["Tuoi_thangsinh"]?></label> <label style="margin-left:20px;"> ĐT: <?=$thongtinluotkham[0]["DienThoaiBN"]?></label><br>
				Địa chỉ: <?=$thongtinluotkham[0]["DiaChi"]?><br> 
				Mã thẻ BHYT: <?=$thongtinluotkham[0]["SoTheBHYT"]?> <label style="margin-left:20px;">- Giá trị từ: <?=$thongtinluotkham[0]["HanSD_TuNgay"]?> đến: <?=$thongtinluotkham[0]["HanSD_DenNgay"]?></label><br>
				Nơi ĐK KCBBĐ: <label style="text-transform: uppercase;"><?=$thongtinluotkham[0]["Ten_KCB_BanDau"]?></label> <label style="margin-left:10px;">- Mã: <?=$thongtinluotkham[0]["Ma_KCB_BanDau"]?></label><br>
				Chẩn đoán: <?=str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"])?>
				<?=$thongtinluotkham[0]["MaICD10"]==""?"":"(".$thongtinluotkham[0]["MaICD10"].")"?>
				<?=$thongtinluotkham[0]["BenhKem"]==""?"":"<br>Bệnh kèm:" .$thongtinluotkham[0]["BenhKem"]?> 
				</td>
			</tr> 
	</table>
		
	<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important; margin-top:7px!important " > 
		<tr>
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;padding:3px;">STT</th>  
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;padding:3px;">Tên thuốc/ Cách dùng</th>  
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;padding:3px;">ĐVT</th> 
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000; border-right:1px solid #000;padding:3px;">SL</th>  
		</tr>  

	<?php

		for($i=0;$i<count($thongtinluotkham);$i++){
			if($thongtinluotkham[$i]["SoThuocThucXuat"]<=9){
				$thongtinluotkham[$i]["SoThuocThucXuat"]='0'.round($thongtinluotkham[$i]["SoThuocThucXuat"]);
			}else{
				$thongtinluotkham[$i]["SoThuocThucXuat"]=round($thongtinluotkham[$i]["SoThuocThucXuat"]);
			}
			$borderbottom='';
			if(($i+1)==count($thongtinluotkham)){
				$borderbottom=' border-bottom:1px solid #000;'; 
			}
			echo '<tr>
				<td style="text-align:center; vertical-align:top; border-left:1px solid #000;'.$borderbottom.' width:10px; padding:2px;">'.($i+1).'</td>  
				<td style="text-align:left; vertical-align:top; border-left:1px solid #000;'.$borderbottom.'"><p  style="font-size:12px!important; font-weight:bold; margin:2px;">'.$thongtinluotkham[$i][$_GET['tenin']].'</p><p style="font-size:11px!important; margin:2px;">
						'.$thongtinluotkham[$i]["CachDung"].'</p></td>  
				<td style="text-align:center; vertical-align:top; border-left:1px solid #000;'.$borderbottom.' width:25px; padding:2px;">'.$thongtinluotkham[$i]["TenDonViTinh"].'</td> 
				<td style="text-align:right; vertical-align:top; border-left:1px solid #000; border-right:1px solid #000;'.$borderbottom.' width:15px; padding:2px;">'.$thongtinluotkham[$i]["SoThuocThucXuat"].'</td>  
			</tr> '; 
		}
		echo '</table>'; 
	?>
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important;margin-top:7px!important " > 
			<tr>
				<td style="text-align: left; vertical-align: top; width: 60px; font-weight: bold;">Lời dặn:</td>
				<td style="text-align:left; vertical-align:top;"><pre><?=$thongtinluotkham[0]["GhiChu"]?></pre></td>  			
				<td style="text-align: center; vertical-align: top; width: 200px; "><?=$thongtinluotkham[0]["NgayKeDon"]?><br>
					<p style="text-align: center; font-weight: bold; margin-top: 3px;">BÁC SĨ ĐIỀU TRỊ</p><br><br><br><br><br>
				</td>   
			</tr>  
		</table>
</div>

<div style="page-break-after:always;">
			
	 <?=HeaderReportA4()?>
			
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important" > 
			<tr>
			 <td  style="text-align:center"><br /><br />
				<span style="letter-spacing: 0.5px;font-weight:bold;font-size:20px;">TOA THUỐC BHYT</span>
			 </td>        
			</tr>  
			<tr>
				<td align="left" height="40px!important" style="font-weight: 500; line-height: 15px;" valign="bottom">
				ID: <?=$thongtinluotkham[0]["MaBenhNhan"]?> <br>
				Họ tên: <strong><?=$thongtinluotkham[0]["tenbenhnhan"]?></strong><br>
				Giới tính: <?=$thongtinluotkham[0]["Gioi"]?> <label style="margin-left:20px;"> <?=$thongtinluotkham[0]["Tuoi_thangsinh"]?></label> <label style="margin-left:20px;"> ĐT: <?=$thongtinluotkham[0]["DienThoaiBN"]?></label><br>
				Địa chỉ: <?=$thongtinluotkham[0]["DiaChi"]?><br> 
				Mã thẻ BHYT: <?=$thongtinluotkham[0]["SoTheBHYT"]?> <label style="margin-left:20px;">- Giá trị từ: <?=$thongtinluotkham[0]["HanSD_TuNgay"]?> đến: <?=$thongtinluotkham[0]["HanSD_DenNgay"]?></label><br>
				Nơi ĐK KCBBĐ: <label style="text-transform: uppercase;"><?=$thongtinluotkham[0]["Ten_KCB_BanDau"]?></label> <label style="margin-left:10px;">- Mã: <?=$thongtinluotkham[0]["Ma_KCB_BanDau"]?></label><br>
				Chẩn đoán: <?=str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"])?>
				<?=$thongtinluotkham[0]["MaICD10"]==""?"":"(".$thongtinluotkham[0]["MaICD10"].")"?>
				<?=$thongtinluotkham[0]["BenhKem"]==""?"":"<br>Bệnh kèm:" .$thongtinluotkham[0]["BenhKem"]?> 
				</td>
			</tr> 
	</table>
		
	<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important; margin-top:7px!important " > 
		<tr>
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;padding:3px;">STT</th>  
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;padding:3px;">Tên thuốc/ Cách dùng</th>  
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;padding:3px;">ĐVT</th> 
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000; border-right:1px solid #000;padding:3px;">SL</th>  
		</tr>  

	<?php

		for($i=0;$i<count($thongtinluotkham);$i++){
			if($thongtinluotkham[$i]["SoThuocThucXuat"]<=9){
				$thongtinluotkham[$i]["SoThuocThucXuat"]='0'.round($thongtinluotkham[$i]["SoThuocThucXuat"]);
			}else{
				$thongtinluotkham[$i]["SoThuocThucXuat"]=round($thongtinluotkham[$i]["SoThuocThucXuat"]);
			}
			$borderbottom='';
			if(($i+1)==count($thongtinluotkham)){
				$borderbottom=' border-bottom:1px solid #000;'; 
			}
			echo '<tr>
				<td style="text-align:center; vertical-align:top; border-left:1px solid #000;'.$borderbottom.' width:10px; padding:2px;">'.($i+1).'</td>  
				<td style="text-align:left; vertical-align:top; border-left:1px solid #000;'.$borderbottom.'"><p  style="font-size:12px!important; font-weight:bold; margin:2px;">'.$thongtinluotkham[$i][$_GET['tenin']].'</p><p style="font-size:11px!important; margin:2px;">
						'.$thongtinluotkham[$i]["CachDung"].'</p></td>  
				<td style="text-align:center; vertical-align:top; border-left:1px solid #000;'.$borderbottom.' width:25px; padding:2px;">'.$thongtinluotkham[$i]["TenDonViTinh"].'</td> 
				<td style="text-align:right; vertical-align:top; border-left:1px solid #000; border-right:1px solid #000;'.$borderbottom.' width:15px; padding:2px;">'.$thongtinluotkham[$i]["SoThuocThucXuat"].'</td>  
			</tr> '; 
		}
		echo '</table>'; 
	?>
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important;margin-top:7px!important " > 
			<tr>
				<td style="text-align: left; vertical-align: top; width: 60px; font-weight: bold;">Lời dặn:</td>
				<td style="text-align:left; vertical-align:top;"><pre><?=$thongtinluotkham[0]["GhiChu"]?></pre></td>  			
				<td style="text-align: center; vertical-align: top; width: 200px; "><?=$thongtinluotkham[0]["NgayKeDon"]?><br>
					<p style="text-align: center; font-weight: bold; margin-top: 3px;">BÁC SĨ ĐIỀU TRỊ</p><br><br><br> 
				</td>   
			</tr>  
		</table>
</div>

<?php }else{ 
	$params1 = array($_GET["id_donthuoc"],1);//tao param cho store 
	$store_name1="{call GD2_Toathuoc_KhongCoThuoc_print(?,?)}";//tao bien khai bao store
	$get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
	$excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
 	
	if(count($thongtinluotkham)>0 && $thongtinluotkham[0]["SoTheBHYT"]!='' && trim($thongtinluotkham[0]["GhiChu"])!=''){
		if($thongtinluotkham[0]["NgayKeDon"]!=''){
		$thongtinluotkham[0]["NgayKeDon"]='Ngày '.$thongtinluotkham[0]["NgayKeDon"]->format('d').' tháng '.$thongtinluotkham[0]["NgayKeDon"]->format('m').' năm '.$thongtinluotkham[0]["NgayKeDon"]->format('Y');
		}
		else $thongtinluotkham[0]["NgayKeDon"]=''; 
		$thongtinluotkham[0]["BsChanDoan"]=""; 
		
		if($thongtinluotkham[0]["HanSD_TuNgay"]!=''){
			$thongtinluotkham[0]["HanSD_TuNgay"]=$thongtinluotkham[0]["HanSD_TuNgay"]->format('d/m/Y');
		}
		else $thongtinluotkham[0]["HanSD_TuNgay"]=''; 
		
		if($thongtinluotkham[0]["HanSD_DenNgay"]!=''){
			$thongtinluotkham[0]["HanSD_DenNgay"]=$thongtinluotkham[0]["HanSD_DenNgay"]->format('d/m/Y');
		}
		else $thongtinluotkham[0]["HanSD_DenNgay"]=''; 
	?>
	
	<div style="page-break-after:always;">
			
	 <?=HeaderReportA4()?>
			
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important" > 
			<tr>
			 <td  style="text-align:center"><br /><br />
				<span style="letter-spacing: 0.5px;font-weight:bold;font-size:20px;">TOA THUỐC BHYT</span>
			 </td>        
			</tr>  
			<tr>
				<td align="left" height="40px!important" style="font-weight: 500; line-height: 15px;" valign="bottom">
				ID: <?=$thongtinluotkham[0]["MaBenhNhan"]?> <br>
				Họ tên: <strong><?=$thongtinluotkham[0]["tenbenhnhan"]?></strong><br>
				Giới tính: <?=$thongtinluotkham[0]["Gioi"]?> <label style="margin-left:20px;"> <?=$thongtinluotkham[0]["Tuoi_thangsinh"]?></label> <label style="margin-left:20px;"> ĐT: <?=$thongtinluotkham[0]["DienThoaiBN"]?></label><br>
				Địa chỉ: <?=$thongtinluotkham[0]["DiaChi"]?><br> 
				Mã thẻ BHYT: <?=$thongtinluotkham[0]["SoTheBHYT"]?> <label style="margin-left:20px;">- Giá trị từ: <?=$thongtinluotkham[0]["HanSD_TuNgay"]?> đến: <?=$thongtinluotkham[0]["HanSD_DenNgay"]?></label><br>
				Nơi ĐK KCBBĐ: <label style="text-transform: uppercase;"><?=$thongtinluotkham[0]["Ten_KCB_BanDau"]?></label> <label style="margin-left:10px;">- Mã: <?=$thongtinluotkham[0]["Ma_KCB_BanDau"]?></label><br>
				Chẩn đoán: <?=str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"])?>
				<?=$thongtinluotkham[0]["MaICD10"]==""?"":"(".$thongtinluotkham[0]["MaICD10"].")"?>
				<?=$thongtinluotkham[0]["BenhKem"]==""?"":"<br>Bệnh kèm:" .$thongtinluotkham[0]["BenhKem"]?> 
				</td>
			</tr> 
	</table>
		 
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important;margin-top:50px!important " > 
			<tr>
				<td style="text-align: left; vertical-align: top; width: 60px; font-weight: bold;">Lời dặn:</td>
				<td style="text-align:left; vertical-align:top;"><pre><?=$thongtinluotkham[0]["GhiChu"]?></pre></td>  			
				<td style="text-align: center; vertical-align: top; width: 200px; "><?=$thongtinluotkham[0]["NgayKeDon"]?><br>
					<p style="text-align: center; font-weight: bold; margin-top: 3px;">BÁC SĨ ĐIỀU TRỊ</p><br><br><br> 
				</td>   
			</tr>  
		</table>
</div> 
	<?php 
	} 
} ?>
 	<?php 
        $params1 = array($_GET["id_donthuoc"],0);//tao param cho store 
        $store_name1="{call GD2_Toathuoc_print(?,?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
if(count($thongtinluotkham)>0){	
	 if($thongtinluotkham[0]["NgayKeDon"]!=''){
			$thongtinluotkham[0]["NgayKeDon"]='Ngày '.$thongtinluotkham[0]["NgayKeDon"]->format('d').' tháng '.$thongtinluotkham[0]["NgayKeDon"]->format('m').' năm '.$thongtinluotkham[0]["NgayKeDon"]->format('Y');
		}
		else $thongtinluotkham[0]["NgayKeDon"]=''; 
		$thongtinluotkham[0]["BsChanDoan"]=""; 
	?>
<div style="page-break-after:always;">
			
	 <?=HeaderReportA4()?>
			
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important" > 
			<tr>
			 <td  style="text-align:center"><br /><br />
				<span style="letter-spacing: 0.5px;font-weight:bold;font-size:20px;">TOA THUỐC VIỆN PHÍ</span>
			 </td>        
			</tr>  
			<tr>
				<td align="left" height="40px!important" style="font-weight: 500; line-height: 15px;" valign="bottom">
				ID: <?=$thongtinluotkham[0]["MaBenhNhan"]?> <br>
				Họ tên: <strong><?=$thongtinluotkham[0]["tenbenhnhan"]?></strong><br>
				Giới tính: <?=$thongtinluotkham[0]["Gioi"]?> <label style="margin-left:20px;"> <?=$thongtinluotkham[0]["Tuoi_thangsinh"]?></label> <label style="margin-left:20px;"> ĐT: <?=$thongtinluotkham[0]["DienThoaiBN"]?></label><br> 
				Địa chỉ: <?=$thongtinluotkham[0]["DiaChi"]?><br> 
				Chẩn đoán: <?=str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"])?>
				<?=$thongtinluotkham[0]["MaICD10"]==""?"":"(".$thongtinluotkham[0]["MaICD10"].")"?>
				<?=$thongtinluotkham[0]["BenhKem"]==""?"":"<br>Bệnh kèm:" .$thongtinluotkham[0]["BenhKem"]?> 
				</td>
			</tr> 
	</table>
		
	<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important; margin-top:7px!important " > 
		<tr>
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;padding:3px;">STT</th>  
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;padding:3px;">Tên thuốc/ Cách dùng</th>  
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;padding:3px;">ĐVT</th> 
			<th style="text-align:center;border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000; border-right:1px solid #000;padding:3px;">SL</th>  
		</tr>  

	<?php

		for($i=0;$i<count($thongtinluotkham);$i++){
			if($thongtinluotkham[$i]["SoThuocThucXuat"]<=9){
				$thongtinluotkham[$i]["SoThuocThucXuat"]='0'.round($thongtinluotkham[$i]["SoThuocThucXuat"]);
			}else{
				$thongtinluotkham[$i]["SoThuocThucXuat"]=round($thongtinluotkham[$i]["SoThuocThucXuat"]);
			}
			$borderbottom='';
			if(($i+1)==count($thongtinluotkham)){
				$borderbottom=' border-bottom:1px solid #000;'; 
			}
			echo '<tr>
				<td style="text-align:center; vertical-align:top; border-left:1px solid #000;'.$borderbottom.' width:10px; padding:2px;">'.($i+1).'</td>  
				<td style="text-align:left; vertical-align:top; border-left:1px solid #000;'.$borderbottom.'"><p  style="font-size:12px!important; font-weight:bold; margin:2px;">'.$thongtinluotkham[$i][$_GET['tenin']].'</p><p style="font-size:11px!important; margin:2px;">
						'.$thongtinluotkham[$i]["CachDung"].'</p></td>  
				<td style="text-align:center; vertical-align:top; border-left:1px solid #000;'.$borderbottom.' width:25px; padding:2px;">'.$thongtinluotkham[$i]["TenDonViTinh"].'</td> 
				<td style="text-align:right; vertical-align:top; border-left:1px solid #000; border-right:1px solid #000;'.$borderbottom.' width:15px; padding:2px;">'.$thongtinluotkham[$i]["SoThuocThucXuat"].'</td>  
			</tr> '; 
		}
		echo '</table>'; 
	?>
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important;margin-top:7px!important " > 
			<tr>
				<td style="text-align: left; vertical-align: top; width: 60px; font-weight: bold;">Lời dặn:</td>
				<td style="text-align:left; vertical-align:top;"><pre><?=$thongtinluotkham[0]["GhiChu"]?></pre></td>  			
				<td style="text-align: center; vertical-align: top; width: 200px; "><?=$thongtinluotkham[0]["NgayKeDon"]?><br>
					<p style="text-align: center; font-weight: bold; margin-top: 3px;">BÁC SĨ ĐIỀU TRỊ</p><br><br><br><br><br> 
				</td>   
			</tr>
			<tr><td colspan=3 align="left"><strong><i> Vì sự an toàn dược phẩm, vui lòng không trả lại thuốc đã mua</i></strong></td></tr>
		</table> 
</div>
<?php } ?>
    <script type="application/javascript">
		$(document).ready(function() {
			var xemtruocin=<?=$_GET['xemtruocin']?>;
		   if(xemtruocin==0){
			   print_direct();
		   }else{
		 	  print_preview();
		   }
			
		});
	</script>
</body>
</html>