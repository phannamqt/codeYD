<?php
	$data= new SQLServer;	
	
	$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatSoPhieuThuKhac');
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	$begin_tran=$data->begin_tran();
	$id_return='';		
	
	
	$store_name="{call GD2_thutrano_insert_new (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params = array(
	$_POST["idbenhnhan"],
	$_POST["tienthu"],
	$_POST["nguoigd"],
	$_POST["diachi"],
	$_POST["diengiai"],
	$_SESSION["user"]["id_user"],
	1,
	'ThuNo',
	1,
	1,
	0,
	'PT_'.($tam[0][0]+1),
	null,
	$_SERVER['REMOTE_ADDR'],
    null,
    null,
	array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	if( !$get_danh_muc_phong_ban ){			
		$data->rollback();
		return;
	}
	$store_name1="{call GD2_ThanhToanTong_insert_bhyt (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array(
	$_POST["idbenhnhan"],
	$id_return,
	'PT_'.($tam[0][0]+1),
	0,
	0,
	$_POST["tienthu"],
	$_POST["tienthu"],
	'',
	$_POST["diengiai"],
	0,
	0,
	null,
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
	'FormatSoPhieuThuKhac'	
	);


	$get_danh_muc_phong_ban=$data->query($store_name2, $params2);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}

	$store_name3="{call GD2UpDateTraNoTTTong (?)}";
	$params3 = array(
	$_POST["iD_LuotKham"]
	);

	$data->query($store_name3, $params3);
	
	$data->commit();
	echo($id_return);
?>

