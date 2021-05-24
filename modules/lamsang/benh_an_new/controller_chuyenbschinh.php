<?php
if($_SESSION["user"]["id_user"]==178){			
	$khoa=Check_update($_GET['id_luotkham'],$_GET["id_donthuoc"],$_SESSION["user"]["id_user"],3);
	if($khoa['Isupdate']==0){
		echo $khoa['Chuoi'];
	}else{
		$data= new SQLServer;		
		$store_name="{call GD2_isbasching_upd_new(?,?,?)}";	
		$params    = array ($_GET['id_luotkham'],$_GET['id_kham'],$_GET["id_donthuoc"]);
		$upd=$data->query( $store_name, $params);
	}						
}else{
	$data= new SQLServer;
	$check1='';
	$store_name="{call GD2_isbasching_upd(?,?,?,?)}";	
	$params    = array ($_GET['id_luotkham'],$_GET['id_kham'],$_GET["id_donthuoc"],array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)	);
	$upd=$data->query( $store_name, $params);
}


?>
