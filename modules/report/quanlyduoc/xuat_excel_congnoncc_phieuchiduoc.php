<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$data= new SQLServer;//tao lop ket noi SQL

$tu_ngay='';
$den_ngay='';
if(isset($_GET["tu_ngay"]))
{
   $tu_ngay= convert_date($_GET["tu_ngay"]).' 00:00:00';
}
else
{
    $tu_ngay=date("Y-m-d").' 00:00:00';
}
if(isset($_GET["den_ngay"]))
{
$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
}
else
{
     $den_ngay=date("Y-m-d").' 23:59:59';
}

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
  <div style="text-align:center;font-size:18px; font-weight:bold">PHIẾU CHI DƯỢC<br />(NCC: <?=$_GET["tencongty"]?> )</div>
<?php
echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["tu_ngay"].' đến ngày '.$_GET["den_ngay"].'</div>';
$store_name="{call GD2_CongNoNCC_SelectPhieuChiDuoc(?,?,?,?)}";
$params = array($tu_ngay,$den_ngay,'PhieuChiDuoc',$_GET["Idnhacc"]);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();

$responce = new stdClass;
$i=0;

	?>
  <table border="1" cellpadding="0" cellspacing="0" align="center" style=";margin-top:5px"">
  <thead >
    	<tr style="border:solid 1px #000000 !important;border-top-color:solid 1px #000000">
	          <td style="border:solid 1px #000000 !important;"   align="center" ><strong>Mã P.Chi</strong></td>
          <td style="border:solid 1px #000000 !important;"    align="center" ><strong>Mã P.Nhập</strong></td>
          <td style="border:solid 1px #000000 !important;"    align="center" ><strong>Người lập phiếu</strong></td>
          <td style="border:solid 1px #000000 !important;"   align="center" ><strong>Ngày lập</strong></td>
          <td style="border:solid 1px #000000 !important;"   align="center" ><strong>Người duyệt</strong></td>
          <td style="border:solid 1px #000000 !important;"   align="center" ><strong>Ngày duyệt</strong></td>
          <td style="border:solid 1px #000000 !important;"  align="center" ><strong>Số tiền</strong></td>
           </thead >
           <?php
		   
       foreach ($tam as $row) {
		if($row["NgayGio"]!='')
			$row["NgayGio"]=$row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		else $row["NgayGio"]='';
	
		if($row["NgayGioDuyet"]!='')
			$row["NgayGioDuyet"]=$row["NgayGioDuyet"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		else $row["NgayGioDuyet"]='';
			
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$row['MaPhieu']."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["MaPhieuNhapKho"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["NguoiLapPhieu"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["NgayGio"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["NguoiDuyet"]."</td>";
			echo '<td align="right">'.$row["NgayGioDuyet"]."</td>";
			echo '<td align="right">'.$row["SoTien"]."</td>";
			echo "</tr>";
        }  
		?> 
    
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","excel_cong_no_ncc_phieuchiduoc.xls");
	}
	?>