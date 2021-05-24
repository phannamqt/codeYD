<?php
	if($_GET['ac']=='true'){
		$data= new SQLServer;
		$store_name="{call GD2_Kham_UpdateTraKetQua(?,?,?)}";
		$params = array($_GET['id_kham'],1,$_SESSION["user"]["id_user"]);
		//print_r($params);
		$data->query( $store_name, $params);
	}

	if($_GET['ac']=='false'){
		$data= new SQLServer;
		$store_name="{call GD2_Kham_UpdateTraKetQua(?,?,?)}";
		$params = array($_GET['id_kham'],0,$_SESSION["user"]["id_user"]);
		//print_r($params);
		$data->query( $store_name, $params);
	}
?>