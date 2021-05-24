<?php

$data= new SQLServer;


$store_name="{call GD2_kham_danhgia_upd(?,?,?,?,?,?)}";	
$params    = array ($_GET['id_luotkham'],$_GET['thaido'],$_GET['kinhte'],$_GET['hailong'],$_GET['id_kham'],$_GET['id_donthuoc']);

$upd=$data->query( $store_name, $params);


?>
