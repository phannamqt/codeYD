<?php
if($_GET["all"]=="true" && $_GET["ac"]=="ttlk"){
	$data= new SQLServer;
	if($_GET['trangthai']=='kichoat'){
		$store_name="{call GD2_KSKCongTy_UpdateTrangThaiThongTinLuotKham_KichHoatByID_luotKham(?,?,?)}";
		$params = array($_GET['id_luotkham'],"ChuaSanSang",$_SESSION['user']['id_user']);
		//print_r($params);
		$data->query( $store_name, $params);
	}


	if($_GET['trangthai']=='huybo'){
		$store_name="{call GD2_KSKCongTy_UpdateTrangThaiThongTinLuotKham_HuyBoByID_luotKham(?,?)}";
		$params = array($_GET['id_luotkham'],$_SESSION['user']['id_user']);
		//print_r($params);
		$data->query( $store_name, $params);
	}

	

}

if($_GET["all"]=="true" && $_GET["ac"]=="reactive"){
	if($_GET['trangthai']=='kichoat'){
		$data= new SQLServer;
		$store_name="{call GD2_KSKCongTy_ReActive(?,?,?)}";
		$params = array($_GET['id_luotkham'],"ChuaSanSang",$_SESSION['user']['id_user']);
		//print_r($params);
		$data->query( $store_name, $params);
	}
}

if($_GET["all"]=="true" && $_GET["ac"]=="kham"){
	if($_GET['trangthai']=='kichoat'){
		$data= new SQLServer;
		$store_name="{call GD2_KSKCongTy_UpdateTrangThaiKham_KichHoatByID_luotKham(?,?,?)}";
		$params = array($_GET['id_luotkham'],"DangCho",$_SESSION['user']['id_user']);
		//print_r($params);
		$data->query( $store_name, $params);
 
	}


	if($_GET['trangthai']=='huybo'){
		$data= new SQLServer;
		$store_name="{call GD2_KSKCongTy_UpdateTrangThaiKham_HuyBoByID_luotKham(?,?)}";
		$params = array($_GET['id_luotkham'],$_SESSION['user']['id_user']);
		//print_r($params);
		$data->query( $store_name, $params);
	}
}
if($_GET["all"]=="false"){
	if($_GET['status']=='active'){
		$data= new SQLServer;
		$store_name="{call GD2_KSKCongTyDM_KhamUpdateTrangThai(?,?,?)}";
		$params = array($_GET['id_kham'],"DangCho",$_SESSION['user']['id_user']);
		//print_r($params);
		$data->query( $store_name, $params);
	}
	if($_GET['status']=='deactive'){
		$data= new SQLServer;
		$store_name="{call GD2_KSKCongTyDM_KhamUpdateTrangThai(?,?,?)}";
		$params = array($_GET['id_kham'],"",$_SESSION['user']['id_user']);
		//print_r($params);
		$data->query( $store_name, $params);
	}
}
?>