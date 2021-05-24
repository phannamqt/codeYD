<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
$data= new SQLServer;//tao lop ket noi SQL
$tungay= convert_date($_GET["tungay"]);
$denngay= convert_date($_GET["denngay"]).' 23:59:59';

$store_name="{call GD2_DanhSach_HuyChiDinh(?,?)}";

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
    	<div style="font-size:18px; font-weight:bold;text-align:center">DANH SÁCH HỦY CHỈ ĐỊNH<br />
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
        		Ngay_Huy
        	</th>
            <th align="center" width="50px">
        		MaPhieuHuy
        	</th>
            <th align="center">
        		SoTienThucTra
        	</th>
            <th  align="center">
        		ID_HuyChiDinh
        	</th>        
            <th  align="center">
        		dachuyen
        	</th>               
        </tr>
        <?php
		$stt=1;
        foreach ($tam as $row) {			
            if($row["Ngay_Huy"]!=NULL) $row["Ngay_Huy"]=$row["Ngay_Huy"]->format("d/m/y");			
		
		
			echo "<tr>";
          
			echo '<td align="center">'.$row["Ngay_Huy"].'</td>';
			echo '<td align="center">'.$row["MaPhieuHuy"].'</td>';
			echo '<td align="center">'.$row["SoTienThucTra"].'</td>';
			echo '<td align="center">'.$row["ID_HuyChiDinh"].'</td>';
			echo '<td align="center">'.$row["dachuyen"].'</td>';
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