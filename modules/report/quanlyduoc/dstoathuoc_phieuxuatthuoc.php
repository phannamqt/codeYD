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
       $params1 = array($_GET["id_donthuoc"]);//tao param cho store 
        $store_name1="{call GD2_thuoc_print(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
		//print_r($_GET["check"]);	  
		/*if($thongtinluotkham[0]["SoLo"]!=''){
			$thongtinluotkham[0]["SoLo"]=round($thongtinluotkham[0]["SoLo"]);}
	else $thongtinluotkham[0]["SoLo"]=''; */
		if($thongtinluotkham[0]["NgayXuat"]!=''){
				$thongtinluotkham[0]["NgayXuat"]=$thongtinluotkham[0]["NgayXuat"]->format('H:i '.$_SESSION["config_system"]["ngaythang"]);}
		else $thongtinluotkham[0]["NgayXuat"]='';
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
		<td align="center" style=" border-bottom: solid 1px #ccc;"><strong style="font-size:18px;" >PHIẾU XUẤT</strong><br>
			(Phiếu <?=($thongtinluotkham[0]["MaPhieu"]) ?>)
			</td>
		</tr>
	  <tr>
		<td  style=" border-bottom: solid 1px #ccc;">
		ID: <strong ><?=($thongtinluotkham[0]["MaBenhNhan"]) ?></strong><br>
		Họ tên: <strong><?=($thongtinluotkham[0]["tenbenhnhan"]) ?></strong><br>
		Tuổi: <strong><?=$thangtuoi ?> </strong><br>
		</td>
	   
	  </tr>
	  <tr>
		<td >
		Bác sĩ kê đơn: <?=($thongtinluotkham[0]["bacsi"]) ?><br>
		Ngày giờ xuất: <?=($thongtinluotkham[0]["NgayXuat"]) ?><br>
		Nhân viên xuất: <?=($thongtinluotkham[0]["ngxthuoc"]) ?> 
		</td>
	   
	  </tr>
	  <tr >
   </table>
   
<table width="100%">    
<?php 
$chuoi='';

 
	$y=1;
	
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		
		
		if($thongtinluotkham[$i]["NgayHetHan"]!=''){
				$thongtinluotkham[$i]["NgayHetHan"]=$thongtinluotkham[$i]["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);}
		else $thongtinluotkham[$i]["NgayHetHan"]='';
	 
			
			if($i==0){
				
				$chuoi='<tr> <td width="70%" align="left"><strong>' .($y) .') '.$thongtinluotkham[$i]['TenGoc'].' </strong></td>
					<td width="30%" align="right"><strong>Số lượng '.$thongtinluotkham[$i]["SoThuocThucXuat"].' '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></td></tr><tr><td colspan="2">Số lô: '.$thongtinluotkham[$i]["SoLo"].', Hạn sử dụng: '.$thongtinluotkham[$i]["NgayHetHan"].'</td></tr><tr><td colspan="2">Cách dùng: '.$thongtinluotkham[$i]["CachDung"].'</td></tr>';
				
			}else{
				if($thongtinluotkham[($i-1)]["ID_Thuoc"]==$thongtinluotkham[($i)]["ID_Thuoc"]){
					$chuoi=$chuoi.'<tr><td colspan="2">Số lô: '.$thongtinluotkham[$i]["SoLo"].', Hạn sử dụng: '.$thongtinluotkham[$i]["NgayHetHan"].' -Số lượng: '.$thongtinluotkham[$i]["sltheolo"].' </td></tr>';
					
				}else{
					$chuoi=$chuoi.'<tr> <td width="70%" align="left"><strong>' .($y) .') '.$thongtinluotkham[$i]['TenGoc'].' </strong></td>
						<td width="30%" align="right"><strong>Số lượng '.round($thongtinluotkham[$i]["SoThuocThucXuat"]).' '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></td></tr><tr><td colspan="2">Số lô: '.$thongtinluotkham[$i]["SoLo"].', Hạn sử dụng: '.$thongtinluotkham[$i]["NgayHetHan"].' </td></tr><tr><td colspan="2">Cách dùng: '.$thongtinluotkham[$i]["CachDung"].'</td></tr>';
					$y++;
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
 