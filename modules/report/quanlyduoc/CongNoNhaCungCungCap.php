<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$tu_ngay='';
	$den_ngay='';
	$data= new SQLServer;//tao lop ket noi SQL

	if(isset($_GET["tu_ngay"]))
	{
	   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
	}
	else
	{
		$tu_ngay=date("Y-m-d").' 0:00:00';
	}
	if(isset($_GET["den_ngay"]))
	{
	$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
	}
	else
	{
		 $den_ngay=date("Y-m-d").' 23:59:59';
	}
	
	$store_name="{call [GD2_SelectCongNoNhaCungCapTuNgayDenNgay] (?,?,?,?,?)}";
	$params = array($tu_ngay,$den_ngay,'PhieuChiDuoc','87','NhaCungCapV.2');

	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
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
  <div style="text-align:center;font-size:18px; font-weight:bold">BÁO CÁO CÔNG NỢ NHÀ CUNG CẤP</div>
    <?php
	//if($_GET['theonhacungcap']=='false'){
		
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["tu_ngay"].' đến ngày '.$_GET["den_ngay"].'</div>';
	//}
	//else{
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Kho '.$_GET["ten_kho"].'</div>';
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["from_day"].' đến ngày '.$_GET["to_day"].'</div>';
	//	}
	?>
  <br /><table border="1" cellpadding="0" cellspacing="0" align="center" style="width:100%;margin-top:5px"">
    	<tr height="95%">
            <th width="5%">STT</th>
            <th width="35%">Tên công ty cung ứng</th>
            <th width="15%">Nợ đầu kỳ</th>
            <th width="15%">Nhập trong kỳ</th>
            <th width="15%">Trả trong kỳ</th>
            <th width="15%">Nợ cuối kỳ</th>
      </tr>
         <?php
		$stt=1;
		$NoDauKy=0;
		$NhapTrongKy=0;
		$TraTrongKy=0;
		$NoCuoiKy=0;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		$NoDauKy=$NoDauKy+$row['NoDauKy'];
		$NhapTrongKy=$NhapTrongKy+$row['NhapTrongKy'];
		$TraTrongKy=$TraTrongKy+$row['TraTrongKy'];
		$NoCuoiKy=$NoCuoiKy+$row['NoCuoiKy'];
		?>
    <tr>
         	<td align="center"><?=$stt?></td>
            <td align="left"><?=$row['TenNCC']?></td>
            <td align="right"><?=number_format($row['NoDauKy'],"0",",",".")?></td>
            <td align="right"><?=number_format($row['NhapTrongKy'],"0",",",".")?></td>
            <td align="right"><?=number_format($row['TraTrongKy'],"0",",",".")?></td>
            <td align="right"><?=number_format($row['NoCuoiKy'],"0",",",".")?></td>
      </tr>
      <?php
			$stt++;
		}
		
		?>
       <tr bgcolor="#999999">
       	  <td align="center"></td>
          <td align="right"><strong>Tổng:</strong></td>
          <td align="right"><strong>
          <?=number_format($NoDauKy,"0",",",".")?>
          </strong></td>
          <td align="right"><strong>
          <?=number_format($NhapTrongKy,"0",",",".")?>
          </strong></td>
          <td align="right"><?=number_format($TraTrongKy,"0",",",".")?>
          <strong></strong></td>
          <td align="right"><strong>
          <?=number_format($NoCuoiKy,"0",",",".")?>
          </strong></td>
    </tr>
      <?php
		/*$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if ($row["Active"]?$row["Active"]="Có":$row["Active"]="Không");
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Ma_NhapXuat"]."</td>";
			echo "<td>".$row["Ten_LoaiNhapXuat"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Active"]."</td>";
			echo "</tr>";
			$stt++;
        }  */
		?>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","baocaocongno_nhacungcap.xls");
	}
	?>

<script type="text/javascript">
	jQuery(document).ready(function() {
		print_preview();
	})
</script>

