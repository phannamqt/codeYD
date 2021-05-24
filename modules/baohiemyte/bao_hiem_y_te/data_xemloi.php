<?php
$data= new SQLServer;
$store_name="{call GD2_BHYT_ngoaithuoc_quyettoan(?)}";
$params = array($_GET['idthutrano']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$chuoi='<table id="xemloitable" border=1>';
foreach ($tam as $row) {
	if($row["SoChungChiHanhNghe"]==''){
		$chuoi.='<tr><td>'.$row["ten"].'</td><td>'.$row["NickName"].'</td><td>'.$row["NgayKeDon"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]).'</td></tr>'; 
	}
}  
$chuoi.='</table>';
echo $chuoi;
?>
