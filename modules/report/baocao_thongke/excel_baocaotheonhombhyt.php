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
	$store_name="{call MED_TrichXuatChiTietDichVuTheoNhom (?,?)}";
	$params = array($tu_ngay,$den_ngay);
	 // print_r($params);
	// exit(); 
	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	$key=array_keys($tam[0]);
	$dskey= array();
	for($i=0;$i<count($key);$i++){
		if($i%2!=0)
			$dskey[]= $key[$i]; 
	} 
	$store_name_cls="{call MED_GetAllNhomBHYT ()}";
	$params_cls = array();
	$get_cls=$data->query( $store_name_cls, $params_cls); 
	$excute_cls= new SQLServerResult($get_cls); 
	$tam_cls= $excute_cls->get_as_array();
	$dskey_cls= array();
	foreach ($tam_cls as $rowx) {
		$dskey_cls[$rowx['ID_DichVu']]= $rowx['TenDV']; 
	}
	$dskey_cls['0']= "Thuốc"; 
	$dskey_cls['00']= "CĐHA"; 
	
	function getTen($ID_DV){
		$rs=explode("__",$ID_DV);
		global $dskey_cls;
		return $dskey_cls[$rs[0]];
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
	<tr>
		<th colspan=<?=count($dskey)-2?>>Thống kê dữ liệu từ ngày <?=$_GET["tu_ngay"]?> đến ngày <?=$_GET["den_ngay"]?></th>
	</tr>
 
       <tr> 
			<th  style=" padding:3px;"  >STT</th>
			<th  style=" padding:3px;"  >MA_BN</th>
			<th  style=" padding:3px;"  >HO_TEN_BN</th>
			<th  style=" padding:3px;"  >DIEN_THOAI</th>
			<th  style=" padding:3px;"  >NGAY_SINH</th>
			<th  style=" padding:3px;"  >GIOI_TINH</th>
			<th  style=" padding:3px;"  >DIA_CHI</th>
			<th  style=" padding:3px;"  >MA_THE</th>
			<th  style=" padding:3px;"  >DOI_TUONG</th>
			<th  style=" padding:3px;"  >NGAY_GIO_VAO_KHAM</th> 
	 
		   <?php
			for($i=12;$i<count($dskey);$i++){
		   ?>
		   <th style=" padding:3px;"   ><?=($dskey[$i])?></th>
		   <?php }?>
		</tr> 

  </thead>
	<?php
	$dem=0;   
	foreach ($tam as $row) {
		if($row["NGAY_SINH"]!='')
			$row["NGAY_SINH"]=$row["NGAY_SINH"]->format('d/m/Y');
		else $row["NGAY_SINH"]='';
		if($row["ThoiGianVaoKham"]!='')
			$row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format('H:i d/m/Y');
		else $row["ThoiGianVaoKham"]='';
		$dem++;
		echo "<tr>"; 
		echo "<td >".$dem."</td>";
		echo "<td >".$row['MA_BN']."</td>";
		echo "<td >".$row['HO_TEN_BN']."</td>";
		echo "<td >".$row['DienThoai1']."</td>";
		echo "<td >".$row['NGAY_SINH']."</td>";
		echo "<td >".($row['GIOI_TINH']==1?'NAM':'NỮ')."</td>";
		echo "<td >".$row['DIA_CHI']."</td>";
		echo "<td >".$row['MA_THE']."</td>";
		echo "<td >".$row['LoaiDoiTuongKham']."</td>";
		echo "<td >".$row['ThoiGianVaoKham']."</td>"; 
		for($j=12;$j<count($dskey);$j++){
			echo "<td style='padding:3px;'>".(float)$row[$dskey[$j]]."</td>"; 
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
		$exp->exportWithPage("excel/temp.html","ChiTietDichVuTheoNhom.xls");
	}
	?>