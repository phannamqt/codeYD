<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_CheckSoGoiLoaTrung (?,?)}";

$params = array($_POST['idluotkham'],$_POST['sophieu']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
echo json_encode(array('DaDung' => $tam[0]['Dem']));
?>