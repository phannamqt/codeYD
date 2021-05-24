<?php
	$data= new SQLServer;	
	
	
	
	$store_isthanhtoan= "{call GD2_ishoantiendichvu (?)}";
	$params_isthanhtoan  = array($_POST["id_huychidinh"]);	
	$isthanhtoan=$data->query( $store_isthanhtoan, $params_isthanhtoan);
	$excute= new SQLServerResult($isthanhtoan);
	$dathanhtoan= $excute->get_as_array();
	
	if($dathanhtoan[0][0]>0){
		
		$data->rollback();
		return;
	}
	
	
	
	
	$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatSoPhieuHoanUng');
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
	0,
	'HoanUng',
	1,
	1,
	0,
	'PHU_'.($tam[0][0]+1),
	null,
	$_SERVER['REMOTE_ADDR'],
    $_POST["id_huychidinh"],
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
	'PHU_'.($tam[0][0]+1),
	0,
	0,
	$_POST["tienthu"],
	-$_POST["tienthu"],
	'',
	$_POST["diengiai"],
	0,
	$_POST["tienhuychidinh"],
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
	'FormatSoPhieuHoanUng'	
	);
	$get_danh_muc_phong_ban=$data->query($store_name2, $params2);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	

	
	$store_name2="{call Gd2_HuyChiDinh_Update_hoantien (?,?)}";
	$params2 = array(
	$_POST["id_huychidinh"],
	1

	);
	$get_danh_muc_phong_ban=$data->query($store_name2, $params2);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}


	$store_name3="{call GD2_TinhLuyDiem_HoanTraChiDinh (?,?,?)}";
	$params3 = array(
			$_POST["id_huychidinh"],
			$_SESSION["user"]["id_user"],
			$_SERVER['REMOTE_ADDR']
	);
	$data->query($store_name3, $params3);

	
	
	$data->commit();
	echo($id_return);
?>

