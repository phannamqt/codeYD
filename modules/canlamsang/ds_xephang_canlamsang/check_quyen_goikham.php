<?php
$data= new SQLServer;

$id_control=$_GET["id_control"];
$id_nhanvien=$_GET["id_nhanvien"];
$store_name="{call GD2_CLS_KiemTraQuyenGoiKham(?,?)}";
$params = array($id_control,$id_nhanvien);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();

echo $tam[0]["quyen"];
?>
