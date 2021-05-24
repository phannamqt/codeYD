<?php

$data= new SQLServer;


$check2='';
if(isset($_POST['SoNgayThuoc'])){
	if($_POST['id_donthuoc']==0){
		$params2 = array( 
		$_POST['id'],
		$_POST['ID_LuotKham'],
		$_POST["id_benhnhan"],
		$_SESSION["user"]["id_user"],
		'',
		'',
		$_POST['SoNgayThuoc'],
		$_POST["khamchinh"],
		'',
		array(&$check2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
		$store_name2="{call Gd2_donthuoc_insert(?,?,?,?,?,?,?,?,?,?)}";
		$get=$data->query( $store_name2,$params2);
		//echo $check2;
	}else{
		$store_name="{call Gd2_donthuoc_upd(?,?)}";	
		$params    = array ($_POST['id_donthuoc'],($_POST['SoNgayThuoc']));
		$upd=$data->query( $store_name, $params);
	}
}
else{
$store_name="{call Gd2_kham_upd_loaikham(?,?)}";	
$params    = array ($_POST['id'],$_POST['ID_LoaiKham']);
$upd=$data->query( $store_name, $params);	
}
?>
