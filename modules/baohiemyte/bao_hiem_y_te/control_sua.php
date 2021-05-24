<?php
$data= new SQLServer;
$store_name="{call Gd2_FixGiuongBHYT(?)}";
$params = array($_GET['idthutrano']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
?>
