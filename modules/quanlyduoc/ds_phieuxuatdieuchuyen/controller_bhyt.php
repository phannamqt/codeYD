<?php
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();
	$date = date('Y-m-d H:i:s');
	$params4 = array($_GET['id'],$_GET['v'],$_SESSION["user"]["id_user"]);			
	$store_name4="{call GD2_PhieuXuatNoiBo_Update_BHYT (?,?,?)}";
	$get_danh_muc_phong_ban=$data->query( $store_name4, $params4);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
$data->commit();
return;
?>