<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Thuoc_SelectAll_bs_excel()}";//tao bien khai bao store
$params = array();//tao param cho store 	
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
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1000px;margin-top:5px">
    
    	<tr>
            <th align="center" width="50px">
				STT
			</th>
			<th align="center">
				Tên gốc
			</th>
			<th align="center">
				Tên hoạt chất
			</th>
			<th align="center">
				Nhom
			</th>
			<th align="center" width="150px">
				Hàm lượng
			</th>
			<th  align="center" width="150px">
				ĐVT
			</th>
			<th  align="center" width="150px">
				Giá bán
			</th>
			<th  align="center" width="100px">
				Giá BHYT
			</th>
			<th  align="center" width="100px">
				Quy cách
			</th>
			<th  align="center" width="100px">
				Hãng sản xuất
			</th>

			<th  align="center" width="100px">
				Nước sản xuất
			</th >
        </tr>
        <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["TenGoc"]."</td>";
			echo '<td align="left">'.$row["TenBietDuoc"]."</td>";
			echo '<td align="left">'.$row["TenNhomThuoc"]."</td>";
			echo '<td align="left">'.$row["HamLuong"]."</td>";
			echo '<td align="left">'.$row["TenDonViTinh"]."</td>";
			echo '<td align="center">'.intval(($row["DonGia"]*(1+($row["PhanTramThue"]/100)))*(1+($row["HeSoDieuChinhGiaBan"]/100)))."</td>";
			echo '<td align="center">'.$row["DonGia_BHYT"]."</td>";
			echo '<td align="left">'.$row["QuyCach"]."</td>";
			echo '<td align="left">'.$row["TenNhaSanXuat"]."</td>";
			echo '<td align="left">'.$row["TenDayDu"]."</td>";
	 
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
			$exp->exportWithPage("excel/temp.html","danh_muc_thuoc_bs.xls");
		}
	?>