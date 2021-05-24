<?php

switch ($_GET['oper']) {
	case 'save':
		save();
		break;
	case 'getsotien':
		getsotien();
		break;
	default:
		# code...
		break;
}

function save(){
	$data= new SQLServer;

	$params = array(
		$_SESSION["user"]["id_user"],
		$_POST['ID_LuotKham'],
		$_POST['SoTien']
		);
	$store_name="{call GD2_GetQuotaByID_NhanVien(?,?,?)}";
	$get=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();

	if($tam[0]['KiemTra']==''){
		$params_up = array(
					$_SESSION["user"]["id_user"],
					$_POST['ID_LuotKham'],
					$_POST['SoTien'],
					$_POST['GhiChu'],
					$_SESSION["user"]["id_user"],
					$_SERVER['REMOTE_ADDR']
					);
		$store_name_up="{call GD2_MienGiamTheoLuotKham_UpQuota(?,?,?,?,?,?)}";
		$data->query( $store_name_up,$params_up);
		echo'';
	}else{
		echo $tam[0]['KiemTra'];
	}
	//echo json_encode($tam);

}

function getsotien(){
	$data= new SQLServer;
	$params = array($_POST['ID_LuotKham']);
	$store_name="{call GD2_GetQuotaByID_LuotKham(?)}";
	$get=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	$rs=array();
	$rs[0]=$tam[0]['SoTien'];
	$rs[1]=$tam[0]['GhiChuQuota'];

	echo json_encode($rs);
}
?>