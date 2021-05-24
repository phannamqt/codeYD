<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
$data= new SQLServer;//tao lop ket noi SQL
$tungay= convert_date($_GET["tungay"]);
$denngay= convert_date($_GET["denngay"]).' 23:59:59';

$store_name="{call GD2_DS_PhieuNhapTraLaiNhaCC(?,?)}";

$params = array($tungay,$denngay);

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
    	<div style="font-size:18px; font-weight:bold;text-align:center">DANH SÁCH ĐẦU PHIẾU NHẬP TRẢ LẠI NHÀ CUNG CẤP<br />
			<span style="font-size:14px;font-weight:100">
				<?php 
					if($_GET["tungay"]==$_GET["denngay"])
					{	
						echo 'Ngày '.$_GET["tungay"];
					}else{
						echo 'Từ ngày '.$_GET["tungay"].' đến ngày '.$_GET["denngay"];
						} 
				?>
             </span>
        </div>
       
       <table width="100%" cellpadding="0" cellspacing="0" border="1">
    	<tr>
            <th align="center" width="50px">
        		STT
        	</th>
            <th align="center" width="50px">
        		Mã
        	</th>
            <th align="center">
        		Người lập
        	</th>
            <th  align="center">
        		Ngày lập
        	</th>
        
            <th  align="center">
        		Người duyệt
        	</th>
            <th  align="center">
        		Ngày duyệt
        	</th>           
            <th  align="center">
        		Số HĐ
        	</th>
            <th  align="center">
        		Ngày HĐ
        	</th>

            <th  align="center">
                ThanhTien
            </th>
            
            <th  align="center">
                thanhtienchitiet
            </th>

            <th  align="center">
                ChechLech
            </th>
            <th  align="center">
                DaChuyen
            </th>
            <th  align="center">
        		Ghi chú
        	</th>
            
        </tr>
        <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
			//if($row["ID_NhanVien"]==NULL) $row["ID_NhanVien"]='';
            if($row["NgayLapPhieu"]!=NULL) $row["NgayLapPhieu"]=$row["NgayLapPhieu"]->format("d/m/y");
			
			if($row["NgayDuyet"]!=NULL) $row["NgayDuyet"]=$row["NgayDuyet"]->format("d/m/y");
			if($row["NgayHoaDon"]!=NULL) $row["NgayHoaDon"]=$row["NgayHoaDon"]->format("d/m/y");
			$tong=$row["ThanhTien"]+$row["TienVAT"];
			echo "<tr>";
            echo '<td align="center">'.$stt.'</td>';
			echo '<td align="center">'.$row["MaPhieu"].'</td>';
			echo '<td align="center">'.$row["nickname"].'</td>';
			echo '<td align="center">'.$row["NgayLapPhieu"].'</td>';

			echo '<td align="center">'.$row["ID_NguoiDuyet"].'</td>';
			echo '<td align="center">'.$row["NgayDuyet"].'</td>';
            echo '<td align="center">'.$row["SoHoaDon"].'</td>';
            echo '<td align="center">'.$row["NgayHoaDon"].'</td>';

            echo '<td align="center">'.$row["ThanhTien"].'</td>';
            echo '<td align="center">'.$row["thanhtienchitiet"].'</td>';
            echo '<td align="center">'.$row["chenhlech"].'</td>';
            echo '<td align="center">'.$row["DaChuyen"].'</td>';
			echo '<td>'.$row["GhiChu"].'</td>';
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