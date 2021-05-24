<?php
switch ($_GET["oper"]) {
	case "TongNgayBaoHiem":
	TongNgayBaoHiem();
	break;
	case "CanLamSang":
	CanLamSang();
	break;
	case "Thuoc":
	Thuoc();
	break;
	case "bhytThuoc":
	bhytThuoc();
	break;
	case "GiuongBenh":
	GiuongBenh();
	break;
	case "ID_LuotKham":
	ID_LuotKham();
	break;

	
}	 		 
function ID_LuotKham(){
	$data= new SQLServer;
	$params = array( $_POST["ID_LuotKham"]	);
	$TaoInputStore=TaoInputStore($params);
	$store_name="{call GD2_GET_ID_Thu_TraNo $TaoInputStore}";			 
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	
	echo $tam[0]['ID_ThuTraNo'];
}

function TongNgayBaoHiem(){
	$data= new SQLServer;
	if($_POST["TongNgayBaoHiem"]==''){
		$_POST["TongNgayBaoHiem"]=null;
	}
	$params = array( 
		$_POST["ID_LuotKham"],
		$_POST["TongNgayBaoHiem"],
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR'],				
		);
	$TaoInputStore=TaoInputStore($params);
	$store_name="{call GD2_UpdateTongNgayBHYT $TaoInputStore}";			 
	$get=$data->query( $store_name, $params);
}

function CanLamSang(){
	$data= new SQLServer;	
	$params = array( 
		$_POST["ID_CanLamSang"],
		$_POST["ExtField1"],
		$_POST["PhanTramCungChiTra"],
		$_POST["GiaBaoHiem"],
		$_POST["ThanhTienBaoHiem"],
		
		$_POST["ThanhTienCungChiTra"],
		$_POST["TyLeThanhToanBHYT"],
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR'],				
	);
	$TaoInputStore=TaoInputStore($params);
	$store_name="{call MED_UpdateCanLamSangBHYT $TaoInputStore}";			 
	$get=$data->query( $store_name, $params);
}

function Thuoc(){
	$data= new SQLServer;	
	$params = array( 
		$_POST["ID_DonThuocCT"],		
		$_POST["GiaCungChiTra"],	
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR'],				
	);
	$TaoInputStore=TaoInputStore($params);
	$store_name="{call GD2_UpdateThuocBHYT $TaoInputStore}";			 
	$get=$data->query( $store_name, $params);
}

function GiuongBenh(){
	$data= new SQLServer;	
	$params = array( 
		$_POST["ID_CanLamSang"],		
		$_POST["GiaBaoHiem"],	
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR'],				
	);
	$TaoInputStore=TaoInputStore($params);
	$store_name="{call GD2_UpdateGiuongBenhBHYT $TaoInputStore}";			 
	$get=$data->query( $store_name, $params);
}


function bhytThuoc(){
	print_r($_POST);
	$data= new SQLServer;	
	$params = array($_POST["ID_DonThuocChiTiet"],$_POST["TrangThai"]);
	$TaoInputStore=TaoInputStore($params);
	$store_name="{call GD2_NoiTru_DonThuocChiTiet_FixBHYT2015 $TaoInputStore}";			 
	$get=$data->query( $store_name, $params);
}
?>