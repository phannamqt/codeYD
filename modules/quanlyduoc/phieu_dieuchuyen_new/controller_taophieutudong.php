<?php
$idphieu='';
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();

$params = array($_GET['kho'],$_SESSION["user"]["id_user"],array($idphieu, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
$store_name="{call Gd2_TaoPhieuXuatDieuChuyenBy_ID_Kho (?,?,?)}";
$phieuxuatnoibo=$data->query( $store_name, $params);
if( !$phieuxuatnoibo ){		
	$data->rollback();
	return;
}
echo ";;".$idphieu.";;";	

$data->commit();
return;
?>