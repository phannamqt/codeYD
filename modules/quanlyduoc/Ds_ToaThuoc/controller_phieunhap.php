<?php
switch ($_GET["oper"]) {
    case "add":
        add("Gd2_PhieuNhap_Add");
        break;
    
	case "confirm":
        confirm("GD2_Phieunhap_confirm");
    break;
}	 		 

function add($store_name){	
	$check1='';
	$check2='';
	//$chuoi="(";
	$i=0;
	//print_r($_POST);
	//============
	
	$date = new DateTime();
	
	//print_r($_POST);
	$data= new SQLServer;
	$begin_tran=$data->begin_tran();
	

 
                                                                                                                              

	$store_name="{call GD2_DSTT_TraThuoc_update_DTCT (?,?,?)}";
	for($i=0;$i<=count($_POST['rows'])-1;$i++){
		unset($params);
		$params = array($_POST['rows'][$i]['ID_DonThuocCT'],
						$_POST['rows'][$i]['sltralai'],
					    array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),					
		);
		//print_r($params);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
		 if( !$get_danh_muc_phong_ban ){  
    $data->rollback();
    return;
   }
	}
	
	//===================
	$store_name="{call Gd2_PhieuNhap_Add_HoanTra (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	
		//unset($params);
		$params = array(
						'',//maphieu
						$date->format('Y-m-d H:i:s'),//NgayLapPhieu
						$date->format('Y-m-d H:i:s'),//NgayNhapKho
						$_POST['rows'][0]['kho'],//ID_Kho
						-1,//ID_NCC
						$_SESSION["user"]["id_user"],//ID_NguoiDuyet
						$date->format('Y-m-d H:i:s'),//NgayDuyet
						'85',//ID_NhapXuat = 85
						$_SESSION["user"]["id_user"],//ID_Nhanvien_
						'',//SoHopDong
						'',//SoDonDatHang
						convert_comma_dot_insert($_POST['rows'][0]['tongtien']),//ThanhTien=> sum of thanh tien tra lai
						0,//PhanTramVat =0
						0,//TienVAT =0s
						'',//SoHoaDon
						$date->format('Y-m-d H:i:s'),//NgayHoaDon
						'',//GhiChu
						'2014',//Year = 2014
						$_POST['rows'][0]['ID_DonThuoc'],//Id thuoc
						$_SESSION["user"]["id_user"],//IdUser_Login
						$_SESSION["user"]["id_user"],//ID_NhanVien
					    array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)	//	ID_return
					
		);
	
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
		 if( !$get_danh_muc_phong_ban ){  
		$data->rollback();
		//echo 'loi';
		return;
   }
	
	$solo ="";
	$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
	$params_taolo = array('2014',array($solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );//tao param cho store 
	$get_solo=$data->query( $store_name_taolo, $params_taolo);
	echo $solo;
	
	$store_name="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";
	for($i=0;$i<=count($_POST['rows'])-1;$i++){
		unset($params);
		$params = array(
						$_POST['rows'][$i]['ID_Thuoc'],//Id thuoc
						$_POST['rows'][$i]['SoLoNhaSanXuat'],//so lo nha san xuat
						$_POST['rows'][$i]['sltralai'],//so luong
					    convert_comma_dot_insert($_POST['rows'][$i]['dongia']) ,	//don gia
						convert_comma_dot_insert($_POST['rows'][$i]['thanhtien']),//thanh tien
						convert_date($_POST['rows'][$i]['NgaySanXuat']),//ngay san xuat
						convert_date($_POST['rows'][$i]['NgayHetHan']),//ngay het han
					    $solo,//so lo he thong
						$check1,//id_nhap kho
						'2014',//nam
						array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),//user login
					    array(&$check2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//id return 
						
						
		);
		
		//print_r($_POST);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
		 if( !$get_danh_muc_phong_ban ){  
			$data->rollback();
			return;
		   }
	}
	
	
	
	 $data->commit();
	//====================bat dau insert thu tra no va thanh toan tong================
	/*$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatSoPhieuHoanUng');
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
	$_POST["diengiai"],
	$_SESSION["user"]["id_user"],
	1,
	'HoanUng',
	0,
	1,
	0,
	'PHU_'.($tam[0][0]+1),
	null,
	array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
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
	$_POST["diengiai"],
	0,
	0,
	null
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
	
	$store_name2="{call GD2_demsophieu_upd (?)}";
	$params2 = array(
	'FormatSoPhieuHoanUng'	
	);
	$get_danh_muc_phong_ban=$data->query($store_name2, $params2);
	//print_r($params);*/
	//====================ket thuc insert thu tra no va thanh toan tong================
}

?>

