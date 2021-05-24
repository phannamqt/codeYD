<?php
$idbenhnhan=$_GET["idbenhnhan"];
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_GetParaByID_BenhNhan(?)}";
$params = array($idbenhnhan); 
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
if(count($tam)>0){
	echo $tam[0]["PARA"];
}else{
	echo "";
}
?>