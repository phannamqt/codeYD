<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow: auto;
	margin-left: 0px;
	font:Arial, Helvetica, sans-serif;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
} 
body,td,th {
	color: #000;
	font-size: 13px;
	
}

</style>
</head>
 
<body>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
       $params1 = array($_GET["id_donthuoc"],$_GET["id_xuatkho"]);//tao param cho store 
        $store_name1="{call GD2_thuoc_print(?,?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
		//print_r($_GET["check"]);	  
		/*if($thongtinluotkham[0]["SoLo"]!=''){
			$thongtinluotkham[0]["SoLo"]=round($thongtinluotkham[0]["SoLo"]);}
	else $thongtinluotkham[0]["SoLo"]=''; */

	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		if($thongtinluotkham[$i]["NgayXuat"]!=''){
				$thongtinluotkham[$i]["NgayXuat"]=$thongtinluotkham[$i]["NgayXuat"]->format($_SESSION["config_system"]["ngaythang"]);}
		else $thongtinluotkham[$i]["NgayXuat"]='';
		
		if($thongtinluotkham[$i]["NgayHetHan"]!=''){
				$thongtinluotkham[$i]["NgayHetHan"]=$thongtinluotkham[$i]["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);}
		else $thongtinluotkham[$i]["NgayHetHan"]='';
	}
	if($thongtinluotkham[0]["thangsinh"]<72 && $thongtinluotkham[0]["thangsinh"]!=0){
			$thangtuoi=$thongtinluotkham[0]["thangsinh"];
			$thangtuoi=$thangtuoi.' tháng';
		}else{
			$thangtuoi=$thongtinluotkham[0]["tuoi"];
			$thangtuoi=$thangtuoi.' tuổi';
		}  
    ?>

	
    <table width="100%" border="0">
  <tr>
    <td width="65%"><strong style="font-size:12px"><?=($thongtinluotkham[0]["tenbenhnhan"]) ?></strong>
    <strong></strong></td>
    <td width="25%"><strong style="font-size:12px"><?=$thangtuoi ?> </strong>
    </td>
    <td width="10%" style="font-size:18px"><strong><?=($thongtinluotkham[0]["MaBenhNhan"]) ?></strong>
    <strong></strong></td>
  </tr>
  <tr >
    <td colspan="3" ><label style="font-size:12px">Ngày xuất thuốc:<?=($thongtinluotkham[0]["NgayXuat"]) ?></label></td>
    </tr>
    </table>
    <table width="100%">
  <tr >
    <td width="50%" >BS:<?=($thongtinluotkham[0]["bacsi"]) ?></td>
    <td width="50%" >Người x.thuốc:&nbsp;<?=($thongtinluotkham[0]["ngxthuoc"]) ?></td>
    </tr>
  
 
  <tr>
    <td colspan="3" align="center" style="font-size:18px; border-bottom: solid 1px #000000;"><strong><?php
    	if($thongtinluotkham[0]['IsXuatChoToaTam']==0){
	 		echo'PHIẾU XUẤT THUỐC';
		 }else{
			 echo'XUẤT THUỐC TOA TẠM';
		 }
	
	?></strong></td>
    </tr>
</table>
<table width="100%">    
<?php 
$chuoi='';

	$pieces = explode(",", $_GET["check"]);
	$y=1;
	
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		//echo ($thongtinluotkham[$i]['ID_DonThuocCT'].';');
		/*if($_GET["toatam"]==0){
			$thongtinluotkham[$i]["SoThuocThucXuat"]=$thongtinluotkham[$i]["SoThuocThucXuat"]-$thongtinluotkham[$i]["SoLuongXuatTam"];

		}else{
			$thongtinluotkham[$i]["SoThuocThucXuat"]=$thongtinluotkham[$i]["SoLuongXuatTam"];
		}*/
		
		if (in_array($thongtinluotkham[$i]['ID_DonThuocCT'], $pieces))
		{
			
			if($i==0){
				
				$chuoi='<tr> <td width="70%" align="left"><strong>' .($y) .' . '.$thongtinluotkham[$i][$_GET['tenin']].' </strong></td>
					<td width="30%" align="right"><strong>x '.$thongtinluotkham[$i]["SoThuocThucXuat"].' '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></td></tr><tr><td colspan="2">*Lô: '.$thongtinluotkham[$i]["SoLo"].' -HSD: '.$thongtinluotkham[$i]["NgayHetHan"].' -Số lượng: '.$thongtinluotkham[$i]["sltheolo"].' </td></tr>';
				
			}else{
				if($thongtinluotkham[($i-1)]["ID_Thuoc"]==$thongtinluotkham[($i)]["ID_Thuoc"]){
					$chuoi=$chuoi.'<tr><td colspan="2">*Lô: '.$thongtinluotkham[$i]["SoLo"].' -HSD: '.$thongtinluotkham[$i]["NgayHetHan"].' -Số lượng: '.$thongtinluotkham[$i]["sltheolo"].' </td></tr>';
					
				}else{
					$chuoi=$chuoi.'<tr> <td width="70%" align="left"><strong>' .($y) .' . '.$thongtinluotkham[$i][$_GET['tenin']].' </strong></td>
						<td width="30%" align="right"><strong>x '.round($thongtinluotkham[$i]["SoThuocThucXuat"]).' '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></td></tr><tr><td colspan="2">*Lô: '.$thongtinluotkham[$i]["SoLo"].' -HSD: '.$thongtinluotkham[$i]["NgayHetHan"].' -Số lượng: '.$thongtinluotkham[$i]["sltheolo"].' </td></tr>';
					$y++;
				}
			}
}
	
	}
	
	echo($chuoi);
?>
</table>

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
 