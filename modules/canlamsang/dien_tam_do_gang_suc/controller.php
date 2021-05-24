<?php
$khoa=Check_update_cls($_POST["id_kham"],0,0,$_SESSION["user"]["id_user"]);
if($khoa['Isupdate']==0){
	echo $khoa['Chuoi'];
}else{
	switch ($_GET["oper"]) {
		case "dathuchien":
		dathuchien();
		break;
		case "luuthuchien":
		luuthuchien();
		break;
		case "hoantat":
		hoantat();
		break;
		case "luuhoantat":
		luuhoantat();
		break;
		case "luudangkham":
		luudangkham();
		break;    
	}	
} 		 

function dathuchien(){	
	$data= new SQLServer;//tao lop ket noi SQL
	
	foreach($_POST as $key => $value) {
		$check='';
		if($_POST["daluu"]==0){
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
			
			
		}
	}
	if($_POST["songayluuhinh"]=="" || $_POST["songayluuhinh"]=='null')
		$_POST["songayluuhinh"]=NULL;
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["lydongungdo"],$_POST["ketluan"],$_POST["songayluuhinh"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_Stress_action_dathuchien (?,?,?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
}
function luudangkham(){
	//print_r($_POST);
	$data= new SQLServer;//tao lop ket noi SQL
	
	foreach($_POST as $key => $value) {
		$check='';
		if($_POST["daluu"]==0){
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
			
			
		}
	}
	if($_POST["songayluuhinh"]=="" || $_POST["songayluuhinh"]=='null')
		$_POST["songayluuhinh"]=NULL;
	$params=  array($_POST["id_kham"],$_POST["lydongungdo"],$_POST["ketluan"],$_POST["songayluuhinh"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_Stress_action_luu_dangkham (?,?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);	
}
function luuthuchien(){
	$data= new SQLServer;//tao lop ket noi SQL
	
	foreach($_POST as $key => $value) {
		$check='';
		if($_POST["daluu"]==0){
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}
	}
	if($_POST["songayluuhinh"]=="" || $_POST["songayluuhinh"]=='null')
		$_POST["songayluuhinh"]=NULL;
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["lydongungdo"],$_POST["ketluan"],$_POST["songayluuhinh"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_Stress_action_luu_dathuchien (?,?,?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
}
function hoantat(){
	//print_r($_POST);
	$data= new SQLServer;//tao lop ket noi SQL
	foreach($_POST as $key => $value) {
		$check='';
		if($_POST["daluu"]==0){
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
			
			
		}
	}
	if($_POST["songayluuhinh"]=="" || $_POST["songayluuhinh"]=='null')
		$_POST["songayluuhinh"]=NULL;
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["chuandoan1"],$_POST["lydongungdo"],$_POST["ketluan"],$_POST["songayluuhinh"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_Stress_action_hoantat (?,?,?,?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

}
function luuhoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	foreach($_POST as $key => $value) {
		$check='';
		if($_POST["daluu"]==0){
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="totaltime"){
			$params=  array($_POST["id_kham"],99,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="hr_at_rest"){
			$params=  array($_POST["id_kham"],100,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_hr"){
			$params=  array($_POST["id_kham"],101,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_ascend"){
			$params=  array($_POST["id_kham"],102,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_st_level_descend"){
			$params=  array($_POST["id_kham"],103,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_workload"){
			$params=  array($_POST["id_kham"],104,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="maxvo2"){
			$params=  array($_POST["id_kham"],105,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="bp_at_rest"){
			$params=  array($_POST["id_kham"],106,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}elseif($key=="max_bp"){
			$params=  array($_POST["id_kham"],107,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_Stress_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}

		}
	}
	if($_POST["songayluuhinh"]=="" || $_POST["songayluuhinh"]=='null')
		$_POST["songayluuhinh"]=NULL;
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["chuandoan1"],$_POST["lydongungdo"],$_POST["ketluan"],$_POST["songayluuhinh"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_Stress_action_luu_hoantat (?,?,?,?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
}
?>

