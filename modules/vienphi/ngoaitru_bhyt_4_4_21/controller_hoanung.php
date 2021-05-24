<?php
	$data= new SQLServer;
	$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatSoPhieuHoanUng');
	if($_POST["ID_LuotKham"]==''){
		$_POST["ID_LuotKham"]=null;
	}
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	//echo $tam[0][0];
	$_POST["NgayGio"]=convert_date($_POST["NgayGio"]);
	$id_return='';		
	$store_name="{call GD2_thu_trano_insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params = array(
	$_POST["idbenhnhan"],
	$_POST["NgayGio"],
	-$_POST["tienthu"],
	$_POST["nguoigd"],
	$_POST["diachi"],
	'Hoàn tiền sử dụng dịch vụ còn thừa cho bệnh nhân',
	$_SESSION["user"]["id_user"],
	0,
	'HoanUng',
	0,
	1,
	0,
	'PHU_'.($tam[0][0]+1),
	$_POST["ID_LuotKham"],
	array($id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
		
	$store_name1="{call GD2_ThanhToanTong_insert (?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array(
	$_POST["idbenhnhan"],
	$id_return,
	'PHU_'.($tam[0][0]+1),
	0,
	0,
	$_POST["tienthu"],
	-$_POST["tienthu"],
	$_POST["NgayGio"],
	'Hoàn tiền sử dụng dịch vụ còn thừa cho bệnh nhân',
	0,
	0,
	$_POST["ID_LuotKham"]
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
	
	$store_name2="{call GD2_demsophieu_upd (?)}";
	$params2 = array(
	'FormatSoPhieuHoanUng'	
	);
	$get_danh_muc_phong_ban=$data->query($store_name2, $params2);
	$store_name15="{call GD2_upd_thutrano_id_ref (?,?,?)}";
	$params15 = array(
		$_POST["ID_ThuTraNo"],1,
		$_POST["ID_LuotKham"]
		);
	$get=$data->query( $store_name15, $params15);	
	echo($id_return);
?>

