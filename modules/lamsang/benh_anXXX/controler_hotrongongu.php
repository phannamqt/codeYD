<?php

$data= new SQLServer;

$params = array($_GET["id_kham"],$_GET["id_nguoihotro"]);
$store_name="{call GD2_hotrongonngu(?,?)}";
$get=$data->query( $store_name,$params);

?>
