<?php

$data= new SQLServer;


$store_name="{call GD2_kham_upd_mota(?,?)}";	
$params    = array ($_POST['id'],$_POST['MoTa']);
$upd=$data->query( $store_name, $params);

?>
