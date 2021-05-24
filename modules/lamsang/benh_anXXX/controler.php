<?php

$data= new SQLServer;
if(isset($_GET["id_benhnhan"])){
	$check1='';
	$check2='';
	$params = array($_GET["id_benhnhan"]);
	$store_name="{call GD2_TTlk_getby(?)}";
	$get=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	if($tam[0]['ID_QuocTich']!=138 ){
		$heso=1;
	}else{
		$heso=1;
	}

	$params1 = array( 
		$tam[0]['ID_LuotKham'],
		$tam[0]['ID_LoaiKhamLSMacDinh'],
		$tam[0]['ID_PhongKhamVatLy'],
		$_SESSION["user"]["id_user"],
		$_SESSION["user"]["id_user"],
		$_SESSION["user"]["id_user"],
		$_SESSION["user"]["id_user"],
		'DangKham',
		$tam[0]['GiaBaoChoBN']*$heso,
		$tam[0]['GiaBaoChoBN']*$heso,
		0,
		$tam[0]['GiaBaoChoBN']*$heso,
		0,
		0,
		$tam[0]['MaBenhNhan'],
		0,
		1,
		0,
		0,
		0,
		$_SERVER['REMOTE_ADDR'],
		array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$store_name1="{call GD2_BenhAn_Kham_Insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$get_danh_muc_phong_ban=$data->query( $store_name1,$params1);
	echo $check1;
	
	$params2 = array( 
		$check1,
		$tam[0]['ID_LuotKham'],
		$_GET["id_benhnhan"],
		$_SESSION["user"]["id_user"],
		'',
		'',
		2,
		1,
		'',
		array(&$check2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	//print_r($params2);
	$store_name2="{call Gd2_donthuoc_insert(?,?,?,?,?,?,?,?,?,?)}";
	$get=$data->query( $store_name2,$params2);
}elseif(isset($_GET["id_kham"])){
	$params = array($_GET["id_kham"],$_GET["ID_LuotKham"],$_SESSION["user"]["id_user"],$_SESSION["user"]["id_user"],$_SERVER['REMOTE_ADDR']);
	$store_name="{call GD2_BenhAn_Kham_UpdateTrangThai(?,?,?,?,?)}"; // sotre cu GD2_Kham_UpdateTrangThai
	$get=$data->query( $store_name,$params);	
	//print_r($params);
}
//print_r($params1);
?>
