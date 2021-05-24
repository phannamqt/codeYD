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
	$store_name="{call 'GD2_baocaocls_bhyt_bymathe (?,?,?)}";
	$params = array($tu_ngay,$den_ngay,1);

	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$bhyt_DungTuyen= $excute->get_as_array();

	$params = array($tu_ngay,$den_ngay,2);
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$bhyt_TraiTuyenNoi= $excute->get_as_array();

	$params = array($tu_ngay,$den_ngay,3);
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$bhyt_TraiTuyenNgoai= $excute->get_as_array();
	
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
  <div style="text-align:center;font-size:18px; font-weight:bold">Đúng tuyến</div> 
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

          <td style="border:solid 1px #000000 !important;"  ><strong>noitru80</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>noitru95</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>noitru100</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ngoaitru80</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ngoaitru95</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ngoaitru100</strong></td>
      </tr>
  </thead>
           <?php
		   $stt=0;		
        foreach ($bhyt_DungTuyen as $row) {
			$stt=$stt+1;
            echo "<tr>";
            echo "<td align='center'>".$stt."</td>";
			echo "<td style=\"mso-number-format:'@';\" align='left'>".$row["MaSoTheoDVBHYT"]."</td>";
			echo "<td align='right'>".$row["ten"]."</td>";
			echo "<td align='right'>".$row["noitru"]."</td>";
			echo '<td align="right">'.$row["ngoaitru"]."</td>";
			echo '<td align="right">'.$row["Gia"]."</td>";
			echo '<td align="right">'.$row["tt"]."</td>";

			echo '<td align="right">'.$row["noitru80"]."</td>";
			echo '<td align="right">'.$row["noitru95"]."</td>";
			echo '<td align="right">'.$row["noitru100"]."</td>";
			echo '<td align="right">'.$row["ngoaitru80"]."</td>";
			echo '<td align="right">'.$row["ngoaitru95"]."</td>";
			echo '<td align="right">'.$row["ngoaitru100"]."</td>";
			echo "</tr>";			
        }  		
		?> 
    </table>


  <div style="text-align:center;font-size:18px; font-weight:bold">Trái tuyến nội tỉnh</div> 
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
          <td style="border:solid 1px #000000 !important;"  ><strong>noitru80</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>noitru95</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>noitru100</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ngoaitru80</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ngoaitru95</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ngoaitru100</strong></td>
      </tr>
  </thead>
           <?php
		   $stt=0;		
        foreach ($bhyt_TraiTuyenNoi as $row) {
			$stt=$stt+1;
            echo "<tr>";
            echo "<td align='center'>".$stt."</td>";
			echo "<td style=\"mso-number-format:'@';\" align='left'>".$row["MaSoTheoDVBHYT"]."</td>";
			echo "<td align='right'>".$row["ten"]."</td>";
			echo "<td align='right'>".$row["noitru"]."</td>";
			echo '<td align="right">'.$row["ngoaitru"]."</td>";
			echo '<td align="right">'.$row["Gia"]."</td>";
			echo '<td align="right">'.$row["tt"]."</td>";

			echo '<td align="right">'.$row["noitru80"]."</td>";
			echo '<td align="right">'.$row["noitru95"]."</td>";
			echo '<td align="right">'.$row["noitru100"]."</td>";
			echo '<td align="right">'.$row["ngoaitru80"]."</td>";
			echo '<td align="right">'.$row["ngoaitru95"]."</td>";
			echo '<td align="right">'.$row["ngoaitru100"]."</td>";
			echo "</tr>";			
        }  		
		?> 
    </table>
	

  <div style="text-align:center;font-size:18px; font-weight:bold">Trái tuyến ngoại tỉnh</div> 
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
          <td style="border:solid 1px #000000 !important;"  ><strong>noitru80</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>noitru95</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>noitru100</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ngoaitru80</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ngoaitru95</strong></td>
          <td style="border:solid 1px #000000 !important;"  ><strong>ngoaitru100</strong></td>
      </tr>
  </thead>
           <?php
		   $stt=0;		
        foreach ($bhyt_TraiTuyenNgoai as $row) {
			$stt=$stt+1;
            echo "<tr>";
            echo "<td align='center'>".$stt."</td>";
			echo "<td style=\"mso-number-format:'@';\" align='left'>".$row["MaSoTheoDVBHYT"]."</td>";
			echo "<td align='right'>".$row["ten"]."</td>";
			echo "<td align='right'>".$row["noitru"]."</td>";
			echo '<td align="right">'.$row["ngoaitru"]."</td>";
			echo '<td align="right">'.$row["Gia"]."</td>";
			echo '<td align="right">'.$row["tt"]."</td>";

			echo '<td align="right">'.$row["noitru80"]."</td>";
			echo '<td align="right">'.$row["noitru95"]."</td>";
			echo '<td align="right">'.$row["noitru100"]."</td>";
			echo '<td align="right">'.$row["ngoaitru80"]."</td>";
			echo '<td align="right">'.$row["ngoaitru95"]."</td>";
			echo '<td align="right">'.$row["ngoaitru100"]."</td>";
			echo "</tr>";			
        }  		
		?> 
    </table>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","bhyt_DT.xls");
	}
	?>