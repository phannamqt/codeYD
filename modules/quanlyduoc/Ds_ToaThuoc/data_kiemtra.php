<?php


$data= new SQLServer;
$store_name="{call GD2_donthuoc_kiemtratintrang (?)}";
$params = array($_GET['ID_DonThuoc']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

if(count($tam)>0){
	echo ($tam1[0]['ID_XuatKho']);
}else{
	echo 0;
}


?>