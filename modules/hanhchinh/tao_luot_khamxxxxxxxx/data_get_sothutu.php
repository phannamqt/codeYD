<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_GetSoThuTuXepHang ()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();


echo $tam[0]['SoTT'];
?>