<?php



$data= new SQLServer;

$store_name="{call GD2_donthuocthanhtoan (?)}";
$params = array($_GET['ID_DonThuoc']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam1= $excute->get_as_array();


if(count($tam1)>0){
	echo ($tam1[0]['DaThanhToan']);
}else{
	echo (0);
}
?>