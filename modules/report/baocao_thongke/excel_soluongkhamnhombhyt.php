<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$tu_ngay='';
	$den_ngay='';
	$data= new SQLServer;//tao lop ket noi SQL

	if(isset($_GET["tu_ngay"])){
	   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
	}else{
		$tu_ngay=date("Y-m-d").' 0:00:00';
	}
	if(isset($_GET["den_ngay"])){
		$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
	}else{
		$den_ngay=date("Y-m-d").' 23:59:59';
	}
	$store_name="{call MED_BHYT_TrichXuatSoLuongKhamTheoNhom (?,?)}";
	$params = array($tu_ngay,$den_ngay);
	 // print_r($params);
	// exit(); 
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
		width:500px;
		margin:0 auto;
		}

</style>
</head>
<body>

  <table border="1" cellpadding="0" cellspacing="0" align="center" >
  <thead>
	<tr>
		<th colspan=3>Thống kê dữ liệu từ ngày <?=$_GET["tu_ngay"]?> đến ngày <?=$_GET["den_ngay"]?></th>
	</tr>
 
       <tr> 
			<th style=" padding:3px;"  >STT</th>
			<th style=" padding:3px;"  >TEN_NHOM</th>
			<th style=" padding:3px;"  >SO_LUONG</th> 
		</tr> 

  </thead>
	<?php
	$dem=0;   
	foreach ($tam as $row) { 
		$dem++;
		echo "<tr>"; 
		echo "<td >".$dem."</td>";
		echo "<td >".$row['Ten_Nhom_BHYT']."</td>";
		echo "<td >".$row['SoLuongKham']."</td>"; 
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
		$exp->exportWithPage("excel/temp.html","SoLuongKhamBHYTTheoNhom.xls");
	}
	?>