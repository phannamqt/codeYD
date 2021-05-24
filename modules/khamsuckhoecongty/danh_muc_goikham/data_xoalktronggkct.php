<?php

$data= new SQLServer;

$param1=$_GET["id"];
//$param2=$_SESSION["id_user"];
$store_name="{call spGoiKhamChiTiet_Delete(?)}";
$params = array($param1);

$get_lich=$data->query( $store_name, $params);

?>
