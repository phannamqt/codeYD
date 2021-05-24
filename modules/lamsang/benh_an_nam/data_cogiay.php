<?php
	$data= new SQLServer;
	$store_name="{call  GD2_Tongsothuoc(?)}";
	$params = array($_GET["ID_DonThuoc"]);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_danh_muc_phong_ban);
	$tam= $excute->get_as_array();
	echo $tam[0][0]
?>
