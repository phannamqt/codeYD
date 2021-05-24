<?php

$data= new SQLServer;


$store_name="{call GD2_kham_upd_chandoan(?,?)}";	
$params    = array ($_POST['id'],$_POST['ChanDoan']);
$upd=$data->query( $store_name, $params);

?>
