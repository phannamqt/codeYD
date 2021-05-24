<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
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
		if($thongtinluotkham[0]["NgayXuat"]!=''){
			$thongtinluotkham[0]["NgayXuat"]=$thongtinluotkham[0]["NgayXuat"]->format('H:i '.$_SESSION["config_system"]["ngaythang"]);
			}		
	else $thongtinluotkham[0]["NgayXuat"]='';  
	if($thongtinluotkham[0]["ngxthuoc"]==''){
		$thongtinluotkham[0]["ngxthuoc"]==' ';
	}
	if($thongtinluotkham[0]["thangsinh"]<72 && $thongtinluotkham[0]["thangsinh"]!=0 ){
			$thangtuoi=$thongtinluotkham[0]["thangsinh"];
			$thangtuoi=$thangtuoi.' tháng';
		}else{
			$thangtuoi=$thongtinluotkham[0]["tuoi"];
			$thangtuoi=$thangtuoi.' tuổi';
		}
	
	/*if($thongtinluotkham[0]["NgayThangNamSinh"]!=''){
		$thongtinluotkham[0]["NgayThangNamSinh"]=$thongtinluotkham[0]["NgayThangNamSinh"]->format($_SESSION["config_system"]["ngaythang"]);
		$sothang= getdate()- $thongtinluotkham[0]["NgayThangNamSinh"];
		echo 'so thang la'.$sothang ;
	}*/
    ?>

	
    <table width="100%" border="0">
  <tr  >
    <td width="70%"><strong style="font-size:12px"><?=($thongtinluotkham[0]["tenbenhnhan"]) ?></strong>
    </td>
    <td width="20%"><strong style="font-size:12px"><?=($thangtuoi) ?> </strong>
    </td>
    <td width="10%" style="font-size:16px"><strong><?=($thongtinluotkham[0]["MaBenhNhan"]) ?></strong>
    </td>
  </tr>
  </table>
  <table width="100%">
  <tr  >
    <td width="50%" >BS:<?=($thongtinluotkham[0]["bacsi"]) ?></td>
    <td width="50%" >Người x.thuốc:&nbsp;<?=($thongtinluotkham[0]["ngxthuoc"]) ?></td>
    
  </tr>
  <tr >
    <td colspan="2" ><label>Ngày xuất thuốc:&nbsp;<?=($thongtinluotkham[0]["NgayXuat"]) ?></label></td>
  </tr>
  <tr>
    <td colspan="3" style="border-bottom: solid 1px #000000;border-top: solid 1px #000000;">
      <label>
      <em><strong style="font-size:12px; ">CĐ:&nbsp;&nbsp;<?=($thongtinluotkham[0]["ChanDoan"]) ?></strong></em>
      
    
      </label>
  </td>
    </tr>
  <tr>
    <td colspan="3" align="center" style="font-size:18px; border-bottom: solid 1px #000000;"><strong>PHIẾU ĐIỀU TRỊ</strong></td>
    </tr>
    </table>
    <table width="100%" border="0">
    
    
<?php 

	$pieces = explode(",", $_GET["check"]);
	$y=1;
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		//echo ($thongtinluotkham[$i]['ID_DonThuocCT'].';');
		if (in_array($thongtinluotkham[$i]['ID_DonThuocCT'], $pieces))
		{
   	echo('<tr> <td colspan="2" align="left" width="70%!important"><strong>' .($y) .' . '.$thongtinluotkham[$i][$_GET['tenin']].' </strong></td>
		<td colspan="1" align="right" width="30%!important"><strong >x '.$thongtinluotkham[$i]["SoThuocThucXuat"].' '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></td>
    </tr>
	<tr>
		<td colspan="3"> '.$thongtinluotkham[$i]["CachDung"].' </td>
	</tr>
	');
		$y++;
}
	
	}
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
 