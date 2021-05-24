<?php

switch ($_GET["oper"]) {
	case "add":
	add("Gd2_PhieuNhap_Add_new");
	break;
	case "edit":
	edit("Gd2_PhieuNhap_Upd_new");
	break;
	case "del":
	del("Gd2_PhieuNhap_DeleteByIdAndYear");
	break;
	case "confirm":
	confirm("GD2_Phieunhap_confirm");
	break;
	case "confirm_bhyt":
	confirm("GD2_Phieunhap_confirm");
	break;
	case "boduyet":
	boduyet("Gd2_PhieuNhap_Boduyet");
	break;
	case "editngayhoadon":
	editngayhoadon();
	break;
}

function add($store_name){
	$check1="";
	$check2="";
	$i=0;
	$params=array(
		$_POST['MaPhieu'],		
		convert_date($_POST['NgayNhapKho']),
		$_POST['ID_Kho1'],
		$_POST['ID_NCC1'],
		null,
		null,
		$_POST['id_loai'],
		$_SESSION["user"]["id_user"],
		$_POST['SoHopDong'],
		$_POST['SoDonDatHang'],
		$_POST['ThanhTien'],
		$_POST['PhanTramVat'],
		$_POST['TienVAT'],
		$_POST['SoHoaDon'],
		convert_date($_POST['NgayHoaDon']),
		$_POST['GhiChu'],		
		$_POST['isBHYT'],
		$_SESSION["user"]["id_user"],
		array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
	
	$data= new SQLServer;//tao lop ket noi SQL
	$begin_tran=$data->begin_tran();
	$store_name="{call GD2_phieunhap_add_new (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	*/
	print_r($check1);
	if( !$get_danh_muc_phong_ban ){

		$data->rollback();
		return;
	}

	$solo ="";
	$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
	$params_taolo = array(array($_SESSION["user"]["year_work"]),array(&$solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );//tao param cho store
	$get_solo=$data->query( $store_name_taolo, $params_taolo);
	//echo $solo;

	for ($ii=0;$ii<=count($_POST["Id"])-1;$ii++){
		unset($bien);
		$i=0;

		$store_name="Gd2_PhieuNhapChiTiet_Add";

		$params1=array(
			$_POST["Id"][$ii]['TenBietDuoc'],
			$_POST["Id"][$ii]['SoLoNhaSanXuat'],
			$_POST["Id"][$ii]['SoLuong'],
			$_POST["Id"][$ii]['DonGia'],
			$_POST["Id"][$ii]['ThanhTien'],
			'',
			convert_date($_POST["Id"][$ii]['NgayHetHan']),
			$solo,
			$check1,
			2014,
			$_SESSION["user"]["id_user"],
			array(&$check2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
		$chuoi="(?,?,?,?,?,?,?,?,?,?,?,?)";

	$store_name1="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store


		$prm=$data->query( $store_name1, $params1);//Goi store
		if( !$prm ){

			$data->rollback();
			return;
		}
	}
	$data->commit();
}
function edit($store_name){
	$check2="";
	$i=0;
	$chuoi="(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$data= new SQLServer;
	$begin_tran=$data->begin_tran();
	$store_name="{call $store_name $chuoi}";
	$params=array(
		$_POST['MaPhieu'],
		'',
		convert_date($_POST['NgayNhapKho']),
		$_POST['ID_Kho1'],
		$_POST['ID_NCC1'],
		$_POST['ID_NguoiDuyet'],
		convert_date($_POST['NgayDuyet']),
		$_POST['id_loai'],
		$_POST['SoHopDong'],
		$_POST['SoDonDatHang'],
		$_POST['ThanhTien'],
		$_POST['PhanTramVat'],
		$_POST['TienVAT'],
		$_POST['SoHoaDon'],
		convert_date($_POST['NgayHoaDon']),
		$_POST['GhiChu'],
		$_SESSION["user"]["id_user"],
		'2014',
		$_SESSION["user"]["id_user"],
		$_POST["Id"][0]['ID_NhapKho'],
		$_POST['isBHYT'],
		);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	*/
	if( !$get_danh_muc_phong_ban ){
		$data->rollback();
		return;
	}

	$store_name_del="{call Gd2_PhieuNhapChiTiet_DeleteByIdAndYear (?,?,?)}";
	$params_del=array($_POST["Id"][0]["ID_NhapKho"],2014,$_SESSION["user"]["id_user"]);
	$prms1 =$data->query( $store_name_del, $params_del);
	if( !$prms1 ){
		$data->rollback();
		return;
	}
	for ($ii=0;$ii<=count($_POST["Id"])-1;$ii++){
		$store_name="Gd2_PhieuNhapChiTiet_Add";
		$chuoi="(?,?,?,?,?,?,?,?,?,?,?,?)";
		$params1=array(
			$_POST["Id"][$ii]['TenBietDuoc'],
			$_POST["Id"][$ii]['SoLoNhaSanXuat'],
			$_POST["Id"][$ii]['SoLuong'],
			$_POST["Id"][$ii]['DonGia'],
			$_POST["Id"][$ii]['ThanhTien'],
			'',
			convert_date($_POST["Id"][$ii]['NgayHetHan']),
			$_POST["Id"][0]["SoLoHeThong"],
			$_POST["Id"][0]["ID_NhapKho"],
			2014,
			$_SESSION["user"]["id_user"],
			array(&$check2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
		//print_r($_POST["Id"][$ii]['NgaySanXuat']);
		$store_name="{call $store_name $chuoi}";//tao bien khai bao store
		print_r($params1);
		$prm=$data->query( $store_name, $params1);//Goi store
		if( !$prm ){
			$data->rollback();
			return;
		}
	}
	$data->commit();
}
function del($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call Gd2_PhieuNhap_DeleteById (?,?)}";//tao bien khai bao store
	$params = array(
		array($_POST["id"]),
		array($_SESSION["user"]["id_user"])
		);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$store_name1="{call Gd2_PhieuNhapChiTiet_DeleteById(?,?)}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params);
}

function confirm($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$begin_tran=$data->begin_tran();
	$store_name="{call $store_name (?,?)}";//tao bien khai bao store
	$params = array(
		$_GET["id"],
		$_SESSION["user"]["id_user"]
		);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	if( !$get_danh_muc_phong_ban ){
		$data->rollback();
		return;
	}
	if($_GET['id_loainhapxuat']=='83'){
		$store_name1="{call GD2_giaban (?,?)}";//tao bien khai bao store
		$params1 = array(
			$_GET["id"],
			$_SESSION["user"]["id_user"]
			);
		$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);//Goi store
		if( !$get_danh_muc_phong_ban ){
			$data->rollback();
			return;
		}
	}
	$data->commit();
}

function confirm_bhyt($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$begin_tran=$data->begin_tran();
	$store_name="{call $store_name (?,?)}";//tao bien khai bao store
	$params = array(
		$_GET["id"],
		$_SESSION["user"]["id_user"]
		);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	if( !$get_danh_muc_phong_ban ){
		$data->rollback();
		return;
	}	
	$data->commit();
}

function boduyet($store_name){
	$data= new SQLServer;
	$store_name="{call [Gd2_PhieuNhap_Boduyet](?,?,?)}";	
	$bien=  array(($_GET["id"]),$_SESSION["user"]["id_user"],$_SERVER['REMOTE_ADDR']);	
	$params = $bien;		
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	
}
function editngayhoadon(){
	$data= new SQLServer;
	$store_name="{call [Gd2_PhieuNhap_Suangayhoadon](?,?,?,?,?)}";	
	$bien=  array(($_GET["id"]),convert_date($_GET['ngaySuaHoaDon']),$_GET['suaSoHoaDon'],$_SESSION["user"]["id_user"],$_SERVER['REMOTE_ADDR']);	
	$params = $bien;		
	//print_r($params );
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
}


?>

