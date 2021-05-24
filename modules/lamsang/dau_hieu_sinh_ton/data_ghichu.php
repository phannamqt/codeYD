<?php
$data= new SQLServer;
$params = array($_GET["ID_BenhNhan"]);
$store_name="{call GD2_ghichu_new(?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();


echo $tam[0]["Isghichu"];
?>
