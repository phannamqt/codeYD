<?php

$data= new SQLServer;
$store_name="{call [GD2_GoiKhamChoCongTy_All]()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
	$responce->rows[$i]['id']=$row["ID_GoiKhamCty"];
	$responce->rows[$i]['cell']=array($row["TenDK"],$row["TenCongTy"],$row["ID_GoiKhamCty"],$row["SL"]);
	$i++; 
} 
echo json_encode($responce);
?>