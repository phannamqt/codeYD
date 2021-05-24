<?php
$data= new SQLServer;
$idtrangthai=$_GET["idtrangthai"];
$store_name="{call GD2_GetTrangThaiLuotKhamByID_LuotKham(?)}";
$params = array($idtrangthai);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
echo $tam[0]["ID_TrangThai"];
?>
