<?php

$data= new SQLServer;


$store_name="{call GD2_kham_upd_icd10(?,?)}";	
$params  = array ($_POST['id'],$_POST['maicd10']);
$upd=$data->query( $store_name, $params);

$store_name="{call GD2_kham_upd_chandoan_icd10(?,?)}";	
$params    = array ($_POST['id'],$_POST['vviet']);
$upd=$data->query( $store_name, $params);

?>
