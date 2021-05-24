<?php
$data= new SQLServer;
$store_name="{call GD2_Get_luongcobanvung()}";
$params = array();
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
echo $tam[0][0]
?>