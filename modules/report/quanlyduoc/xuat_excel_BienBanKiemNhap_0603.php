<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
$data= new SQLServer;//tao lop ket noi SQL
$tungay= $_GET["id"];

$store_name="{call GD2_phieunhap_BBKiemNhap(?)}";//tao bien khai bao store

$params = array($tungay);//tao param cho store 	

$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

//print_r($tam);

?>
<style type="text/css">
	body{
		width: 100%;
		margin-top: 5px;
		overflow:scroll;
		font-size:18px !important;
		 
		}
	
	#wrapper{
		width:1000px;
		margin:0 auto;
		}
	 
</style>
</head>
<body>
<div id="wrapper">
	
</div>
    <!--<table border="0" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px; font-size:24px; font-family:Arial, Helvetica, sans-serif">
    	<tr>
        	<td colspan="5" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
        	<td colspan="7" align="center" style="font-size:22px; font-weight:bold"></td>
        	<td width="55%" colspan="3" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
            
        </tr>
    	<tr>
    	  <td colspan="5" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td colspan="7" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td colspan="3" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
      </tr>
      <tr>
      	<td width="30%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="2%" colspan="-3" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="2%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="4%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="4%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="4%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="4%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="4%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="4%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="4%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="4%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td width="7%" align="center" style="font-size:22px; font-weight:bold">&nbsp;</td>
    	  <td colspan="3" align="center" style="font-size:22px; font-weight:bold">Độc lập - Tự do - Hạnh phúc</td>
      </tr>
        <tr>
        	<td colspan="15" align="center" style="font-size:28px; font-weight:bold">BIÊN BẢN KIỂM NHẬP THUỐC / VẬT TƯ, HÓA CHẤT</td>
        </tr>
        <tr>
        	<td colspan="15" align="left" style="font-size:22px;">
				Hôm nay, ngày  
                < ?php echo $tam[0]["NgayNhapKho"]->format("d")." tháng " . $tam[0]["NgayNhapKho"]->format("m")." năm " .  $tam[0]["NgayNhapKho"]->format("Y"); ?>
             tại Khoa dược <?php echo $_SESSION["com"]["TenBenhVien"]?> Đà Nẵng, chúng tôi gồm các thành viên hội đồng kiểm nhập hàng sau, gồm các khoản cụ thể:</td>
        </tr>
</table>-->
<table border="0" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px; font-size:24px; font-family:Arial, Helvetica, sans-serif">
  <tr>
    <td colspan="6" align="center"><span style="font-size:22px; font-weight:bold">SỞ Y TẾ TP ĐÀ NẴNG</span></td>
    <td colspan="8" align="center"><span style="font-size:22px; font-weight:bold">CỘNG HÒA XÃ HỘI CHỦ NGHĨ VIỆT NAM</span></td>
  </tr>
  <tr>
    <td colspan="6" align="center"><span style="font-size:22px; font-weight:bold"><?php echo $_SESSION["com"]["TenBenhVien"]?></span></td>
    <td colspan="8" align="center"><span style="font-size:22px; font-weight:bold">Độc lập - Tự do - Hạnh phúc</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="14" align="center" style="font-size:28px; font-weight:bold"><span style="font-size:28px; font-weight:bold">BIÊN BẢN KIỂM NHẬP THUỐC / VẬT TƯ, HÓA CHẤT</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="14"  align="left" style="font-size:22px;"><span style="font-size:22px;">Hôm nay, ngày <?php echo $tam[0]["NgayNhapKho"]->format("d")." tháng " . $tam[0]["NgayNhapKho"]->format("m")." năm " .  $tam[0]["NgayNhapKho"]->format("Y"); ?> tại Khoa dược <?php echo $_SESSION["com"]["TenBenhVien"]?> Đà Nẵng, chúng tôi gồm các thành viên hội đồng kiểm nhập hàng sau, gồm các khoản cụ thể:</span></td>
  </tr>
</table>

<table  border="1" cellpadding="0" cellspacing="0" align="center"  style="font-size:20px;width:800px;margin-top:5px; font-family:'Arial', Gadget, sans-serif">
    	<tr>
            <th align="center" width="10px">
        		STT
        	</th>
            <th align="center" width="40px">
        		Tên Ncc
        	</th>
            <th align="center" width="40px">
        		Số HĐ
        	</th>
            <th align="center" width="40px">Tên thuốc</th>
            <th align="center" width="10px">Đvt</th>
            <th  align="center" width="10px">
        		Sl</th>
            <th  align="center" width="40px">Đơn giá</th>
            <th  align="center" width="20px">VAT</th>
            <th  align="center" width="40px">
        		Thành tiền</th>
            <th  align="center" width="10px">Lô NSX </th>
            <th  align="center" width="80px">Ngày hết hạn</th>
            <th  align="center" width="10px">Hãng sx</th>
            <th  align="center" width="10px">Nước sx</th>
            <!--<th  align="center" width="80px">SignNumber</th>-->
  </tr>
        <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["TenNCC"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["SoHoaDon"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["TenGoc"]."</td>";
			echo '<td align="right">'.$row["TenDonViTinh"]."</td>";
			echo '<td align="right">'.$row["SoLuong"]."</td>";
			echo '<td align="right">'.$row["DonGia"]."</td>";
			echo '<td align="right">'.$row["PhanTramVat"]."</td>";
			echo '<td align="right">'.$row["TTvat"]."</td>";
			echo '<td align="right">'.$row["SoLoNhaSanXuat"]."</td>";
			echo '<td align="center">'.$row["NgayHetHan"]->format("d/m/y")."</td>";
			echo '<td align="left">'.$row["TenNhaSanXuat"]."</td>";
			echo '<td align="left">'.$row["TenDayDu"]."</td>";
			//echo '<td align="left">'.$row["SignNumber"]."</td>";
			echo "</tr>";
			$stt++;
        }  
		//echo (number_format(2000.22,2));
		?> 
</table>
    
</div>   
<br /> 
<table border="0" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:35px; font-size:24px; font-family:Arial, Helvetica, sans-serif">
  <tr>
    <td colspan="2" align="center" width="20%"><strong>Giám Đốc</strong></td>
    <td colspan="4" align="center" ><strong>Kế Toán Trưởng</strong></td>
    <td colspan="3" align="center"><strong>Trưởng Khoa Dược</strong></td>
    <td colspan="3" width="20%" align="center"><strong>HC,Dược,mua hàng</strong></td>
    <td width="20%" colspan="2" align="center"><strong>Thủ kho</strong></td>
  </tr>
  <tr >
    <td   align="center">&nbsp;</td>
    <td   align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
  </tr>
   <tr >
    <td   align="center">&nbsp;</td>
    <td   align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
  </tr>
   <tr >
    <td   align="center">&nbsp;</td>
    <td   align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td  align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><em><br /><br /><br />
    </em></td>
    <td colspan="4" align="center"><em><br /><br /><br /><strong>Nguyễn Nữ Bảo Chi</strong></em></td>
    <td colspan="3" align="center"><em><br /><br /><br /><strong>Nguyễn Thị Ly</strong></em></td>
    <td colspan="3" align="center"><em><br /><br /><br /><strong>Nguyễn Thị Bích Ngọc</strong></em></td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
		if($types=="excel"){
			file_put_contents('excel/temp.html', ob_get_contents());
			$exp=new ExportToExcel();
			$exp->exportWithPage("excel/temp.html","danh_sach_phieu_nhap.xls");
		}
	?>