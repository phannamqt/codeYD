<?php
$data= new SQLServer;

$store_name="{call GD2_KhoaBHYT(?,?,?)}";

$params = array($_GET['ID_LuotKham'],$_SESSION["user"]["id_user"],$_SERVER['REMOTE_ADDR']);
$get_lich=$data->query( $store_name, $params);
?>
