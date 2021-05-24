<?php
$data= new SQLServer;
$store_name="{call GD2_vantay_byidbenhnhan(?)}";
$params = array($_GET['idbenhnhan']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();


$so=count($tam);
if($so==0){
	echo "";
	
}else{
	
	echo $so;
}

?>
