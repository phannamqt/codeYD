<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_TonKhoKiemKe(?,?,?,?)}";
if($_GET['ID_Kho']==1){
	$params = array($_GET['ID_KiemKe'],'2019/1/8 17:00','2018/12/28',$_GET['ID_Kho']);
}else{
	$params = array($_GET['ID_KiemKe'],'2019/1/7 23:59','2018/12/28',$_GET['ID_Kho']);
}


$get_danh_muc_phong_ban=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();

?>
<style type="text/css">
	body{
		overflow:auto;
		 
		}
</style>
</head>
<body>
    <div style="font-size:18px; font-weight:bold;text-align:center">Kiểm Kê Tồn Kho <?=$_GET['TenKho']?></div>
     <table width="100%" cellpadding="0" cellspacing="0" border="1">
    	<tr>	
            <th align="center" width="50px">
        		STT
        	</th>     
			 <th align="center" width="50px">
			 ID_Thuoc
        	</th> 
			<th align="center" width="50px">
			Tên thuốc
        	</th> 
			<th align="center" width="50px">
			ĐVT
        	</th> 
			<th align="center" width="50px">
			Số lượng kiểm kê đợt đầu
        	</th> 
			<th align="center" width="50px">
			Cơ số tủ trực
        	</th> 
			<th align="center" width="50px">
			Tồn Đầu kỳ
        	</th> 
			<th align="center" width="50px">
			Nhập
        	</th> 
			<th align="center" width="50px">
			Xuât
        	</th> 
			<th align="center" width="50px">
			Tồn Cuối Kỳ
        	</th> 
			<th align="center" width="50px">
	
			Số lượng kiểm kê
        	</th> 
			<th align="center" width="50px">
			Chênh lệch
        	</th> 	
        </tr>
        <?php
		$stt=0;
        foreach ($tam as $row) {
			echo "<tr>";
			echo '<td align="left">'.$stt.'</td>';
			echo '<td align="left">'.$row["ID_Thuoc"].'</td>';
			echo '<td align="left">'.$row["TenGoc"].'</td>';
			echo '<td align="left">'.$row["TenDonViTinh"].'</td>';			
			echo '<td align="left">'.$row["SoLuongKiemKeDotDau"].'</td>';
			echo '<td align="left">'.$row["CoSoTuTruc"].'</td>';
			echo '<td align="left">'.$row["TonDauKy"].'</td>';
			echo '<td align="left">'.$row["NhapTrongKy"].'</td>';
			echo '<td align="left">'.$row["XuatTrongKy"].'</td>';
			echo '<td align="left">'.$row["TonCuoiKy"].'</td>';
			echo '<td align="left">'.$row["SoLuongKiemKe"].'</td>';
			echo '<td align="left">'.$row["ChechLech"].'</td>';
			echo "</tr>";
			$stt++;
		}  
	
		//echo (number_format(2000.22,2));
		?> 
    </table>
</div>    
</body>
</html>
<?php
		if($types=="excel"){
			file_put_contents('excel/temp.html', ob_get_contents());
			$exp=new ExportToExcel();
			$exp->exportWithPage("excel/temp.html","KiemKeTonKHo.xls");
		}
	?>