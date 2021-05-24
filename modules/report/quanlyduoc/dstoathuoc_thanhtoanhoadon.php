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
       $params1 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name1="{call GD2_DSTT_DonThuocCT_PhieuDieuTri(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc	
		$tongtien=0;
		//print_r($thongtinluotkham);	   
    ?>
<p>
      
   <table width="100%" border="0">
  <tr>
    <td colspan="4" align="center" style="font-size:18px;"><strong>THANH TOÁN HÓA ĐƠN</strong></td>
    </tr>
  <tr>
    <td colspan="1"><strong>ID:<?=($thongtinluotkham[0]["MaBenhNhan"]) ?></strong></td>
    <td colspan="3" align="right"><?php $d= new DateTime(); 
						  echo $d->format(" H:i:s ".$_SESSION["config_system"]["ngaythang"]);?></td>
  </tr>
  <tr>
    <td colspan="4" style="border-bottom: solid 1px #B4B5B0;"><strong>Bn:<?=($thongtinluotkham[0]["tenbenhnhan"]) ?></strong></td>
    </tr>
  <tr >
    <td align="left" style="border-bottom: solid 1px #B4B5B0;">Tên thuốc</td>
    <td align="center" style="border-bottom: solid 1px #B4B5B0;">SL</td>
    <td align="center" style="border-bottom: solid 1px #B4B5B0;">Đơn giá</td>
    <td align="center" style="border-bottom: solid 1px #B4B5B0;">Thành tiền</td>
  </tr>
<?php 
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		echo('<tr> <td width="60%" align="left">' .($i+1) .' . '.$thongtinluotkham[$i]["TenHoaDon"].'</td>
		<td width="10%" align="center">'. round($thongtinluotkham[$i]["SoThuocThucXuat"]).' </td>
		 <td width="10%" align="right" align="right">'. number_format($thongtinluotkham[$i]["DonGia_HoaDon"]).' </td>
		 <td width="20%" align="right">'. number_format($thongtinluotkham[$i]["DonGia_HoaDon"]*$thongtinluotkham[$i]["SoThuocThucXuat"]).' </td>
			
    </tr>
	
	');
	$tongtien=$tongtien+$thongtinluotkham[$i]["DonGia_HoaDon"]*$thongtinluotkham[$i]["SoThuocThucXuat"];	
	}
?>
<tr>
	<td colspan="2" style="border-top: solid 1px #B4B5B0;"><label><strong>Tổng cộng:&nbsp;</strong></label></td>
    <td colspan="2" align="right" style="border-top: solid 1px #B4B5B0;"><label>&nbsp;</label>
    <?php echo number_format($tongtien) ?>
    
    </td>
    </tr>
</table>
<script type="application/javascript">
		$(document).ready(function() {
			
			
		});
	  </script>
</body>
</html>
 