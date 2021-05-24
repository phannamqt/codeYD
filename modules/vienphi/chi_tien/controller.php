<?php
	$data= new SQLServer;	
	
	$begin_tran=$data->begin_tran();
	$id_return='';			
	$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatSoPhieuHoanUng');
	if(!isset($_POST["ID_LuotKham"])){
		$_POST["ID_LuotKham"]=null;
	}
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	
	
	
	$store_name="{call GD2_thu_trano_insert (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?)}";
	$params = array(
	$_POST["idbenhnhan"],
	null,
	$_POST["tienthu"],
	$_POST["nguoigd"],
	$_POST["diachi"],
	$_POST["diengiai"],
	$_SESSION["user"]["id_user"],
	0,
	'HoanUng',
	0,
	1,
	0,
	'PHU_'.($tam[0][0]+1),
	$_POST["ID_LuotKham"],
	$_SERVER['REMOTE_ADDR'],//khatm bổ sung 23/6/15
	array($id_return_hoanung, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	
	$store_name1="{call GD2_ThanhToanTong_insert_bhyt (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array(
	$_POST["idbenhnhan"],
	$id_return_hoanung,
	'PHU_'.($tam[0][0]+1),
	0,
	0,
	$_POST["tienthu"],
	-$_POST["tienthu"],
	null,
	$_POST["diengiai"],
	0,
	0,
	$_POST["ID_LuotKham"],
	0,
	0,
	0,
	);
	
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
	
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	
	$store_name2="{call GD2_demsophieu_upd (?)}";
	$params2 = array(
	'FormatSoPhieuHoanUng'	
	);
	$get_danh_muc_phong_ban=$data->query($store_name2, $params2);
	
	
	
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	
	
	
	
	
	
	$data->commit();
	echo($id_return);
?>

