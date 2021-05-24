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
    <table border="0" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px"">
    	<tr>
        	<td width="30%" colspan="5" align="center" style="font-size:12px; font-weight:bold">SỞ Y TẾ TP ĐÀ NẴNG</td>
        	<td width="20%" colspan="3" align="center" style="font-size:12px; font-weight:bold">&nbsp;</td>
        	<td colspan="3" align="center" style="font-size:12px; font-weight:bold">CỘNG HÒA XÃ HỘI CHỦ NGHĨ VIỆT NAM</td>
            
        </tr>
    	<tr>
    	  <td colspan="5" align="center" style="font-size:12px; font-weight:bold"><?php echo $_SESSION["com"]["TenBenhVien"]?> ĐÀ NẴNG</td>
    	  <td colspan="3" align="center" style="font-size:12px; font-weight:bold">&nbsp;</td>
    	  <td colspan="3" align="center" style="font-size:12px; font-weight:bold">Độc lập - Tự do - Hạnh phúc</td>
      </tr>
      	<tr><td>&nbsp;</td></tr>
        <tr>
        	<td colspan="11" align="center" style="font-size:18px; font-weight:bold">BIÊN BẢN KIỂM NHẬP THUỐC / VẬT TƯ, HÓA CHẤT</td>
        </tr>
        <tr>
        	<td colspan="11" align="left" style="font-size:14px;">
				Hôm nay, ngày  
                <?php echo $tam[0]["NgayNhapKho"]->format("d")." tháng " . $tam[0]["NgayNhapKho"]->format("m")." năm " .  $tam[0]["NgayNhapKho"]->format("Y"); ?>
             tại Khoa dược <?php echo $_SESSION["com"]["TenBenhVien"]?> Đà Nẵng, chúng tôi gồm các thành viên hội đồng <br />kiểm nhập hàng sau, gồm các khoản cụ thể:</td>
        </tr>
</table>
<table  border="1" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px"">
    	<tr>
            <th align="center" width="10px">
        		STT
        	</th>
            <th align="center" width="40px">
        		Tên Ncc
        	</th>
            <th align="center" width="40px">Tên thuốc</th>
            <th align="center" width="10px">Đvt</th>
            <th  align="center" width="10px">
        		Sl</th>
            <th  align="center" width="80px">Đơn giá</th>
            <th  align="center" width="10px">
        		Thành tiền</th>
            <th  align="center" width="10px">Lô NSX </th>
            <th  align="center" width="100px">Ngày hết hạn</th>
            <th  align="center" width="10px">Nước sx</th>
            <th  align="center" width="10px">Hãng sx</th>
            <th  align="center" width="100px">SignNumber</th>
        </tr>
        <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["TenNCC"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["TenGoc"]."</td>";
			echo '<td align="right">'.$row["TenDonViTinh"]."</td>";
			echo '<td align="right">'.$row["SoLuong"]."</td>";
			echo '<td align="right">'.$row["DonGia"]."</td>";
			echo '<td align="right">'.$row["ThanhTien"]."</td>";
			echo '<td align="right">'.$row["SoLoNhaSanXuat"]."</td>";
			echo '<td align="center">'.$row["NgayHetHan"]->format("d/m/y")."</td>";
			echo '<td align="left">'.$row["TenDayDu"]."</td>";
			echo '<td align="left">'.$row["TenNhaSanXuat"]."</td>";
			echo '<td align="left">'.$row["SignNumber"]."</td>";
			echo "</tr>";
			$stt++;
        }  
		//echo (number_format(2000.22,2));
		?> o
    </table>
    
</div>    
<table border="0" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px"">
  <tr>
    <td colspan="2" align="center"><strong>Giám Đốc</strong></td>
    <td width="100" colspan="2" align="center" ><strong>Kế Toán Trưởng</strong></td>
    <td colspan="2" align="center"><strong>Trưởng Khoa Dược</strong></td>
    <td width="25" align="center">&nbsp;</td>
    <td colspan="2" align="center"><strong>HCDược/mua hàng</strong></td>
    <td width="100" align="center"><strong>Thủ kho</strong></td>
  </tr>
  <tr >
    <td width="50" height="50px" align="center">&nbsp;</td>
    <td width="50" height="50px" align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td width="100" align="center">&nbsp;</td>
    <td width="25" align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td width="50" align="center">&nbsp;</td>
    <td width="100" align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
  </tr>
  <tr >
    <td width="50" height="50px" align="center">&nbsp;</td>
    <td width="50" height="50px" align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td width="100" align="center">&nbsp;</td>
    <td width="25" align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td width="50" align="center">&nbsp;</td>
    <td width="100" align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><em><strong>Trần Hùng</strong></em></td>
    <td colspan="2" align="center"><em><strong>Nguyễn Nữ Bảo Chi</strong></em></td>
    <td colspan="2" align="center"><em><strong>Nguyễn Thị Ly</strong></em></td>
    <td align="center">&nbsp;</td>
    <td colspan="2" align="center"><em><strong>Nguyễn Thị Bích Ngọc</strong></em></td>
    <td align="center">&nbsp;</td>
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