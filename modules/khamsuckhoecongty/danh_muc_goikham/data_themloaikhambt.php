<?php

if ($_GET["loaikham"]==0){
	
}else{
$data= new SQLServer;
$param1=$_GET["id"];
$param2=$_GET["loaikham"];
$store_name="{call GD2_DM_GoiKhamChiTiet_Insert(?,?)}";
$params = array($param1,$param2);

$get_lich=$data->query( $store_name, $params);
}
?>
