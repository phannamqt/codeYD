<?php
 	$data= new SQLServer;
	
	$params4 = array($_POST['id_donthuoc']);		
	$store_name4="{call GD2_phieuxuat_checkHuy (?)}";
	$get_lich=$data->query( $store_name4, $params4);
	$excute= new SQLServerResult($get_lich);
	$tam= $excute->get_as_array();	
	 
	$begin_tran=$data->begin_tran();	
	if($tam[0]['KiemTraHuyBill']!=0){
		$data->rollback();
		return;
	}

	$params5 = array(
		$_POST['id_donthuoc'],
		$_SESSION["user"]["id_user"],
		$_SERVER['REMOTE_ADDR']
	);		
	$store_name5="{call MED_HuyXuatThuocByID_DonThuoc (?,?,?)}";

	$get=$data->query( $store_name5, $params5);	
	if( !$get ){
		$data->rollback();
		return;
	}
	
	$data->commit();
//}
?>

