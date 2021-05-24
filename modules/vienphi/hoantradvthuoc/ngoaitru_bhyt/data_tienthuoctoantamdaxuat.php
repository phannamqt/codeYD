<?php

$data = new SQLServer;
$store_name = "{call GD2_tongtientoatam(?)}";
$params = array($_GET["ID_LuotKham"]);
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

echo $tam[0][0]
?>