<?php
$data= new SQLServer;
$params2 = array($_GET['idluotkham']);
$store_name2="{call GD2_GetTrangThaiLuotKhamByID_LuotKham(?)}";
$get2=$data->query( $store_name2,$params2);
$excute2= new SQLServerResult($get2);
$tam2= $excute2->get_as_array();

echo json_encode($tam2[0]);
?>