<?php
$data= new SQLServer;
$store_name="{call GD2_CheckBenhNhanGioiThieu (?)}";
$params = array($_POST['MaBenhNhan']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
echo count($tam);
?>