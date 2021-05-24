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
	//$_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59'
	$store_name="{call GD2_baocaongoaitru_thuoc_bhyt (?,?)}";
	$params = array($tu_ngay,$den_ngay);

	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	//echo $tam;
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
  <div style="text-align:center;font-size:18px; font-weight:bold">THỐNG KÊ TỔNG HỢP THUỐC THÁNG <?php echo date("m") ?> NĂM 20<?php echo date("y") ?> <br />
ĐIỀU TRỊ CHO BỆNH NHÂN BHYT KCB NGOẠI TRÚ</div>
    <?php
	
		
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["tu_ngay"].' đến ngày '.$_GET["den_ngay"].'</div>';
	
	?>
  <table border="1" cellpadding="0" cellspacing="0" align="center" style=";margin-top:5px"">
  <thead >
  <br />
    	<tr style="border:solid 1px #000000 !important;border-top-color:solid 1px #000000">
	          <td style="border:solid 1px #000000 !important;"   align="center" ><strong>TT</strong></td>
          <td style="border:solid 1px #000000 !important;"    align="center" ><strong>Tên Thuốc</strong></td>
          <td style="border:solid 1px #000000 !important;"    align="center" ><strong>Hàm lượng</strong></td>
          <td style="border:solid 1px #000000 !important;"   align="center" ><strong>Số ĐK /GPNK/</strong></td>
          <td style="border:solid 1px #000000 !important;"   align="center" ><strong>Đơn vị tính</strong></td>
          <td style="border:solid 1px #000000 !important;"  align="center" ><strong>Số lượng</strong></td>
          <td style="border:solid 1px #000000 !important;"   align="center" ><strong>Đơn giá</strong></td>
          <td style="border:solid 1px #000000 !important;"  align="center" ><strong>Thành tiền</strong></td>
	         
      </tr>
	       
	        <tr style="font-size:12px">
	          <td style="border:solid 1px #000000 !important;" align="center">1</td>
	          <td style="border:solid 1px #000000 !important;" align="center">2</td>
	          <td style="border:solid 1px #000000 !important;" align="center">3</td>
	          <td style="border:solid 1px #000000 !important;" align="center">4</td>
	          <td style="border:solid 1px #000000 !important;" align="center">5</td>
	          <td style="border:solid 1px #000000 !important;" align="center">6</td>
	          <td style="border:solid 1px #000000 !important;" align="center">7</td>
	          <td style="border:solid 1px #000000 !important;" align="center">8</td>
            </tr>
           </thead >
           <?php
		   $stt=0;
		   $tong=0;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
			$stt=$stt+1;
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["tengoc"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["HamLuong"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["SignNumber"]."</td>";
			echo '<td align="right">'.$row["TenDonViTinh"]."</td>";
			echo '<td align="right">'.$row["soluong"]."</td>";
			echo '<td align="right">'.$row["Gia"]."</td>";
			echo '<td align="right">'.$row["tt"]."</td>";
			echo "</tr>";
			$tong=$tong+$row["tt"];
        }  
		//echo (number_format(2000.22,2));
		?> 
    	<tr bgcolor="#999999">
       	  <td colspan="7" align="right"><strong>Tổng:</strong></td>
          <td align="right"><strong><?=number_format($tong)?></strong></td>
          </tr>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","excel_thuoc_bhyt_ngoaitru.xls");
	}
	?>