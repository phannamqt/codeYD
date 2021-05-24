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



		$store_name_PVL="{call GD2_UpdatePhongVatLyLuotKham (?,?,?)}";//tao bien khai bao store
		$params_PVL = array($_GET['id_luotkham'],$_SESSION['user']['id_user'],$_SERVER['REMOTE_ADDR']);
		$data->query( $store_name_PVL, $params_PVL);

		$store_nameSTT="{call GD2_AutoOrderSTT_Kham (?,?)}";//tao bien khai bao store
		$paramsSTT = array($_GET['id_luotkham'],$_SERVER['REMOTE_ADDR']);
		$data->query( $store_nameSTT, $paramsSTT);

		$store_nameXH_DVCC="{call GD2_KichHoatXHBenhNhanDVCCVaBenhNhanCC (?,?,?)}";//tao bien khai bao store
		$paramsXH_DVCC = array(
			$_GET['id_luotkham'],
			$_SESSION['user']['id_user'],
			$_SERVER['REMOTE_ADDR']);
		$data->query( $store_nameXH_DVCC, $paramsXH_DVCC);
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