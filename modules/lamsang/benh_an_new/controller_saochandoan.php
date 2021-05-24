<?php
$data= new SQLServer;
$store_name="{call GD2_chandoan_gannhat(?,?)}";	
$params    = array ($_GET['id_kham'],$_GET['id_benhnhan']);
$upd=$data->query( $store_name, $params);
?>
