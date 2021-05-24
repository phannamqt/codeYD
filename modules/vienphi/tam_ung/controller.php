<?php
	$data= new SQLServer;
	$store="{call GD2_Sophieutamung_max ()}";
	$param = array();
	if($_POST["idluotkham"]==''){
		$_POST["idluotkham"]=null;
	}
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	//echo $tam[0][0];
	$_POST["NgayGio"]=convert_date($_POST["NgayGio"]);
	$id_return='';		
	$store_name="{call GD2_thu_trano_insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params = array(
	$_POST["idbenhnhan"],
	$_POST["NgayGio"],
	$_POST["tienthu"],
	$_POST["nguoigd"],
	$_POST["diachi"],
	$_POST["diengiai"],
	$_SESSION["user"]["id_user"],
	1,
	'TamUng',
	0,
	1,
	0,
	'PTU_'.($tam[0][0]+1),
	$_POST["idluotkham"],$_SERVER['REMOTE_ADDR'],//khatm bổ sung 23/6/15
	array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	//print_r($params);
		
		
		
	$store_name1="{call GD2_ThanhToanTong_insert (?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array(
	$_POST["idbenhnhan"],
	$id_return,
	'PTU_'.($tam[0][0]+1),
	0,
	0,
	-$_POST["tienthu"],
	$_POST["tienthu"],
	$_POST["NgayGio"],
	$_POST["diengiai"],
	0,
	0,
	$_POST["idluotkham"]
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
	
	$store_name2="{call GD2_demsophieu_upd (?)}";
	$params2 = array(
	'FormatSoPhieuTamUng'	
	);
	$get_danh_muc_phong_ban=$data->query( $store_name2, $params2);
	echo($id_return);
?>

