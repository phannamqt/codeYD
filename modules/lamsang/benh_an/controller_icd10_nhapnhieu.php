<?php
switch ($_POST["oper"]) { 
    case "add": 
		add();
		break;
	case "edit": 
		edit();
		break;
	case "update_huybo_icd10": 
		update_huybo_icd10();
		break;
	case "check_isset_icd10": 
		check_isset_icd10();
		break;
}
function add(){
	$data= new SQLServer;
	$check1='';
	$store_name="{call GD2_Kham_Insert_ICD10 (?,?,?,?,?,  ?,?,?,?,?,  ?,?,?,?,?  ,?,?,?,?,?   ,?,?)}";
	
	$params = array(
					$_POST['id_luotkham'],
					$_POST['id_loaikham'],
					NULL,
					$_SESSION["user"]["id_user"],
					NULL,
					
					NULL,
					NULL,
					"DangKham",
					NULL,
					NULL,

					NULL,
					NULL,
					NULL,
					NULL,
					NULL,
					
					NULL,
					NULL,
					NULL,
					NULL,
					$_POST['MaICD10'],// @IdUser_login int,

					0,
					array(&$check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$data->query( $store_name, $params);
	echo json_encode(array('status' => 'success'));
}
function edit(){
	$data= new SQLServer;
	$store_name="{call GD2_kham_upd_icd10(?,?)}";	
	$params  = array ($_POST['id_kham'],$_POST['MaICD10']);
	$upd=$data->query( $store_name, $params);
	echo '0|';
}
function update_huybo_icd10(){
	$data= new SQLServer;
	$store_name="{call GD2_Kham_UpdateHuyBo_ICD10(?,?,?)}";	
	$params  = array (
		$_GET['id_kham'],
		$_SESSION["user"]["id_user"],
		$_SERVER['REMOTE_ADDR']
	);
	$upd=$data->query( $store_name, $params);
	echo 'Success';
}
function check_isset_icd10(){
	$data= new SQLServer;
	$check1='';
	$store_name="{call GD2_Kham_ICD10_CheckIsset(?,?,?)}";	
	$params  = array (
		$_POST['id_luotkham'],
		$_POST['ma_icd10'],
		array(&$check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$select=$data->query( $store_name, $params);
	echo $check1;
}
?>