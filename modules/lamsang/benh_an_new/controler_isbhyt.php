<?php

$data= new SQLServer;

$params = array($_GET["id_donthuocct"],$_GET["trangthai"]);
$store_name="{call GD2_thuoc_bhyt_chuyen(?,?)}";
$get=$data->query( $store_name,$params);

?>
