<?php
$data= new SQLServer;
$id_return='';
$get='';

$params = array($_POST['mabh'],
	str_replace(" ","",$_POST['noidkbd']),
	$_POST['diachibh'],
	$_POST['hsdtu'],			
	$_POST['idbenhnhan'],
	$_SESSION["user"]["id_user"],
	array($id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
$get=$data->query( "{call GD2_BHYT_barcode_New(?,?,?,?,?,?,?)}", $params);	
if($get==1){
	$get=1;
}else{
	$get=0;
}
echo json_encode(array('IsLock' => 0, 'Notes' => '', 'Error'=> $get, 'IDReturn'=> $id_return));

?>