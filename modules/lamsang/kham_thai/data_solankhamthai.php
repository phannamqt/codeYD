<?php
$idbenhnhan=$_GET["idbenhnhan"];
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_SoLanKhamThai(?)}";
$params = array($idbenhnhan); 
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$rs=$tam[0]['Dem'];
echo $rs;
?>