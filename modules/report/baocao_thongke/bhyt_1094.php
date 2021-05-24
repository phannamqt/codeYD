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
	$store_name="{call Gd2_baocao_bhyt_1049 (?,?)}";
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
	<strong>Xuất dữ liệu từ ngày <?=$tu_ngay?> đến ngày <?=$den_ngay?></strong>
  <table border="1" cellpadding="0" cellspacing="0" align="center" style=";margin-top:5px"">
  <thead>
       <tr style="border:solid 1px #000000 !important;border-top-color:solid 1px #000000">
	      <td style="border:solid 1px #000000 !important;"  ><strong>stt</strong></td>			
          <td style="border:solid 1px #000000 !important;"  ><strong>ma_dvkt</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ten_dvkt</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>sl_noitru</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>sl_ngoaitru</strong></td>	
          <td style="border:solid 1px #000000 !important;"  ><strong>don_gia</strong></td>  
          <td style="border:solid 1px #000000 !important;"  ><strong>thanh_tien</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>KCB ban đầu khác 48-195</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>Số Thẻ Khác 48</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>Số Thẻ (QN,CA,CY)</strong></td>
      </tr>
  </thead>
           <?php
		   $stt=0;
		  // $tong=0;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
			$stt=$stt+1;
            echo "<tr>";
            echo "<td align='center'>".$stt."</td>";
			echo "<td style=\"mso-number-format:'@';\" align='left'>".$row["MaSoTheoDVBHYT"]."</td>";
			echo "<td align='right'>".$row["ten"]."</td>";
			echo "<td align='right'>".$row["noitru"]."</td>";
			echo '<td align="right">'.$row["ngoaitru"]."</td>";
			echo '<td align="right">'.$row["Gia"]."</td>";
			echo '<td align="right">'.$row["tt"]."</td>";
			echo '<td align="right">'.$row["kcbbdkhac48va195"]."</td>";
			echo '<td align="right">'.$row["khac48"]."</td>";
			echo '<td align="right">'.$row["QNvaCAvaCY"]."</td>";
			echo "</tr>";
			//$tong=$tong+$row["tt"];
        }  
		
		?> 

    </table>

</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","bhyt_cv1094.xls");
	}
	?>