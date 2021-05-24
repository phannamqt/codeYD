<?php
	if($_GET['trangthai']=='DangCho'){
		$data= new SQLServer;
		$store_name="{call GD2_Kham_UpdateTrangThaiNew(?,?,?)}";
		$params = array($_GET['id_kham'],"DangCho",$_SESSION["user"]["id_user"]);
		//print_r($params);
		$data->query( $store_name, $params);
	}

	if($_GET['trangthai']=='DangKham'){
		$data= new SQLServer;
		$store_name="{call GD2_Kham_UpdateTrangThaiNew(?,?,?)}";
		$params = array($_GET['id_kham'],"DangKham",$_SESSION["user"]["id_user"]);
		//print_r($params);
		$data->query( $store_name, $params);
	}
?>