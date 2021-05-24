<?php
if($_GET['xetnghiem']==0){
	if($_GET['ac']=='true'){
		$data= new SQLServer;
		$store_name="{call GD2_Kham_UpdateIsPrinted(?,?,?)}";
		$params = array($_GET['id_kham'],1,$_SESSION["user"]["id_user"]);
		//print_r($params);
		$rs=$data->query( $store_name, $params);
		echo $rs;
	}
	if($_GET['ac']=='false'){
		$data= new SQLServer;
		$store_name="{call GD2_Kham_UpdateIsPrinted(?,?,?)}";
		$params = array($_GET['id_kham'],0,$_SESSION["user"]["id_user"]);
		//print_r($params);
		$rs2=$data->query( $store_name, $params);
		echo $rs2;
	}
}else{
	if($_GET['ac']=='true'){
		$data= new SQLServer;
		$store_name="{call GD2_Kham_UpdateIsPrintedByXetNghiem(?,?,?)}";
		$params = array($_GET['idluotkham'],1,$_SESSION["user"]["id_user"]);
		//print_r($params);
		$rs=$data->query( $store_name, $params);
		echo $rs;
	}
	if($_GET['ac']=='false'){
		$data= new SQLServer;
		$store_name="{call GD2_Kham_UpdateIsPrintedByXetNghiem(?,?,?)}";
		$params = array($_GET['idluotkham'],0,$_SESSION["user"]["id_user"]);
		//print_r($params);
		$rs2=$data->query( $store_name, $params);
		echo $rs2;
	}
}
?>