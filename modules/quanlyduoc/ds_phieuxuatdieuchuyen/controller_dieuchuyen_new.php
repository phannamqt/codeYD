<?php

$id_return='';
$data= new SQLServer;
$params = array(
			$_GET['idxuatnoibo'],
			$_SERVER['REMOTE_ADDR'],
			$_SESSION["user"]["id_user"],
			array($id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);		
$TaoChuoiStore=TaoChuoiStore($params);
$store_name="{call GD2_XuatThuocDieuChuyen $TaoChuoiStore}";
$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
?>