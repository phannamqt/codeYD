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
	$store_name="{call MED_TrichXuatMau78A80A (?,?)}";
	$params = array($tu_ngay,$den_ngay);
	/* print_r($params);
	exit(); */
	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	$key=array_keys($tam[0]);
	$dskey= array();
	for($i=0;$i<count($key);$i++){
		if($i%2!=0)
			$dskey[]= $key[$i]; 
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

  <table border="1" cellpadding="0" cellspacing="0" align="center" >
  <thead>
       <tr  >
	   <td  style=" padding:3px;"  >STT</td>
	   <?php
		for($i=0;$i<count($dskey);$i++){ 
	   ?>
	   <td style=" padding:3px;"   ><?=$dskey[$i]?></td>
	   <?php }?>
      </tr>
     
  </thead>
	<?php
	$dem=0; 
	$dsso = array("T_TONGCHI","T_XN","T_CDHA","T_THUOC","T_MAU","T_PTTT","T_VTYT","T_DVKT_TYLE","T_THUOC_TYLE","T_VTYT_TYLE","T_KHAM","T_GIUONG","T_VCHUYEN","T_BNTT","T_BHTT");

	foreach ($tam as $row) {//duyet toan bo mang tra ve
		$dem++;
		echo "<tr>"; 
		echo "<td >".$dem."</td>";
		for($j=0;$j<count($dskey);$j++){
			if (in_array($dskey[$j], $dsso)) { 
				echo "<td style='padding:3px;'>".(float)$row[$dskey[$j]]."</td>"; 
			}else{ 
				echo "<td style='padding:3px;'>".$row[$dskey[$j]]."</td>"; 
			}
		}
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
		$exp->exportWithPage("excel/temp.html","BHYT_79a.xls");
	}
	?>