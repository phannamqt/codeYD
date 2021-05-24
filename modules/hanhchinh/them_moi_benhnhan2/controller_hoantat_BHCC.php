<?php
$data= new SQLServer;//tao lop ket noi SQL
    $store_name="{call [GD2_HoanTatBHCC_New] (?,?,?,?)}";//tao bien khai bao store hoantatBHCC
	$params = array($_GET['ID_LuotKhamP'],$_SESSION['user']['id_user'],$_GET['hoantatBHCC'],$_SERVER['REMOTE_ADDR']);
	//print_r($params);
	$get=$data->query( $store_name, $params);
?>