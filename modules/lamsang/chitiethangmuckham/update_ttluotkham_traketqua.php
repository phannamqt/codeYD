<?php
	if($_GET['ac']=='true'){
		$data= new SQLServer;
		$store_name="{call GD2_ThongTinLuotKham_UpdateTraKetQua(?,?,?)}";
		$params = array($_GET['id_luotkham'],1,$_SESSION["user"]["id_user"]);
		$data->query( $store_name, $params);
		
		$store_name2="{call GD2_Kham_UpdateTraKetQuaByID_LuotKham(?,?,?)}";
		$params2 = array($_GET['id_luotkham'],1,$_SESSION["user"]["id_user"]);
		$data->query( $store_name2, $params2);
	}

	if($_GET['ac']=='false'){
		$data= new SQLServer;
		$store_name="{call GD2_ThongTinLuotKham_UpdateTraKetQua(?,?,?)}";
		$params = array($_GET['id_luotkham'],0,$_SESSION["user"]["id_user"]);
		$data->query( $store_name, $params);
		
		$store_name2="{call GD2_Kham_UpdateTraKetQuaByID_LuotKham(?,?,?)}";
		$params2 = array($_GET['id_luotkham'],0,$_SESSION["user"]["id_user"]);
		$data->query( $store_name2, $params2);
		
	}
?>