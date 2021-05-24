<?php

$data= new SQLServer;
$store_name="{call GD2_GoiKhamChoCongTy_SelectByIDCongTy(?)}";
$params = array($_GET['id']);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
	$responce->rows[$i]['id']=$row["ID_GoiKhamCty"];
	$responce->rows[$i]['cell']=array($row["TenDK"],$row["TenCongTy"],$row["ID_CongTy"],$row["TenGoiKham"]);
	$i++; 
} 
echo json_encode($responce);
?>