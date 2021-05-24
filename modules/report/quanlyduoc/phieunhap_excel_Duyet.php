<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
$data= new SQLServer;//tao lop ket noi SQL
$tungay= convert_date($_GET["tungay"]);
$denngay= convert_date($_GET["denngay"]).' 23:59:59';
//echo $denngay;
$store_name="{call Gd2_phieunhap_execl(?,?)}";//tao bien khai bao store

$params = array($tungay,$denngay);//tao param cho store 	

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
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1000px;margin-top:5px"">
    	<tr>
        	<td colspan="7" align="center" style="font-size:18px; font-weight:bold">DANH SÁCH PHIẾU NHẬP</td>
        </tr>
        <tr>
        	<td colspan="7" align="center" style="font-size:14px;">
				<?php 
					if($_GET["tungay"]==$_GET["denngay"])
					{	
						echo 'Ngày'.$_GET["tungay"];
					}else{
						echo 'Từ ngày'.$_GET["tungay"].' đến ngày '.$_GET["denngay"];
						} 
				?>
             </td>
        </tr>
    	<tr>
            <th align="center" width="50px">
        		STT
        	</th>
            <th align="center">
        		Tên gốc
        	</th>
            <th align="center" width="150px">
        		Số lượng
        	</th>
            <th  align="center" width="150px">
        		Đơn giá
        	</th>
            <th  align="center" width="150px">
        		Thành tiền
        	</th>
            <th  align="center" width="100px">
        		Số hóa đơn
        	</th>
            <th  align="center" width="100px">
        		Ngày lập phiếu
        	</th>
        </tr>
        <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["TenGoc"]."</td>";
			echo '<td align="right">'.$row["SoLuong"]."</td>";
			echo '<td align="right">'.$row["DonGia"]."</td>";
			echo '<td align="right">'.$row["ThanhTien"]."</td>";
			echo '<td align="center">'.$row["SoHoaDon"]."</td>";
			echo '<td align="center">'.$row["NgayLapPhieu"]->format("d/m/y")."</td>";
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
			$exp->exportWithPage("excel/temp.html","danh_sach_phieu_nhap.xls");
		}
	?>