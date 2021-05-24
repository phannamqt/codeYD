<?php
$data= new SQLServer;
$store_name="{call gd2_getavatar_idbenhnhan(?)}";
$params = array($_GET['id_benhnhan']);
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
if(strlen($tam[0]['Avatar'])>10){
	$check = 'true';
}else{
	$check = 'false';
}
echo json_encode(array(
	'check'=> $check,
	'avatar'=>$tam[0]['Avatar']
));
?>