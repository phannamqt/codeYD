<?php
	$data= new SQLServer;	
	$data->begin_tran();
	
	$store_isthanhtoan= "{call GD2_IsHoanTienThuoc (?)}";
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
	
	$id_return='';

	$store_name="{call GD2_Thuoc_ThuTraNo_Insert (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?)}";
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

	//print_r($params);

	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	if( !$get_danh_muc_phong_ban ){
		$data->rollback();
		return;
	}
	

	$store_name1="{call GD2_ThanhToanTong_insert_bhyt (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?)}";
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

	
	$store_name2="{call GD2_HuyChiDinhThuoc_Update_HoanTien(?,?,?,?)}";
	$params2 = array(
		$_POST["id_huychidinh"],
		1,
		$_SESSION["user"]["id_user"],
		$_SERVER['REMOTE_ADDR']
	);

	$get_danh_muc_phong_ban=$data->query($store_name2, $params2);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}


	$store_name_tpcn="{call GD2_CheckTPCNOfDonThuocHoanTra(?)}";
	$params_tpcn = array($_POST["id_huychidinh"]);
	$get_tpcn=$data->query( $store_name_tpcn, $params_tpcn);
	$excute_tpcn= new SQLServerResult($get_tpcn);
	$tam_tpcn= $excute_tpcn->get_as_array();




	$date=date("Y-m-d H:i");
	// Kiem tra neu co thuc pham chuc nang thi tach ra phieu rieng: 10% VAT
	if($tam_tpcn[0]['TPCN']>0){
		//echo "XXXX";
			$check1="";
			$check2="";
			$i=0;
			$params=array(
				NULL,//$_POST['MaPhieu'],
				$date,
				1,//$_POST['ID_Kho1'],
				414,//$_POST['ID_NCC1'],
				$_SESSION["user"]["id_user"],// nguoi duyet
				$date, // ngay duyet
				95,//$_POST['id_loai'],
				$_SESSION["user"]["id_user"],
				NULL,//$_POST['SoHopDong'],
				NULL,//$_POST['SoDonDatHang'],
				$tam_tpcn[0]['TPCN_TTVon'],
				10,//$_POST['PhanTramVat'],
				$tam_tpcn[0]['TPCN_TTVon']*0.10,// Thanh tien VAT
				NULL,//$_POST['SoHoaDon'],
				NULL,//convert_date($_POST['NgayHoaDon']),
				'Mua thuốc trả lại từ BN - Đơn thuốc '.$tam_tpcn[0]['ID_DonThuoc'],//$_POST['GhiChu'],
				0,//$_POST['isBHYT'],
				$_SESSION["user"]["id_user"],
				$tam_tpcn[0]['ID_DonThuoc'],
				$_SERVER['REMOTE_ADDR'],
				array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);

			$store_name="{call GD2_HoanTra_PhieuNhap_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,? ,?,?)}";//tao bien khai bao store
			$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	*/


			if( !$get_danh_muc_phong_ban ){
				$data->rollback();
				return;
			}


			// INSERT Vao phieu nhap chi tiet

			$solo ="";
			$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
			$params_taolo = array(array($_SESSION["user"]["year_work"]),array(&$solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );//tao param cho store
			$get_solo=$data->query( $store_name_taolo, $params_taolo);


			$store_name_thuoc="{call GD2_GetThuocOfDonThuocHoanTra(?,?)}";//tao bien khai bao store
			$params_thuoc = array($_POST["id_huychidinh"],1);
			$get_thuoc=$data->query( $store_name_thuoc, $params_thuoc);//Goi store
			$excute_thuoc= new SQLServerResult($get_thuoc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$tam_thuoc= $excute_thuoc->get_as_array();//Tra ve mang toan bo data lay duoc 
			$responce = new stdClass;
			foreach ($tam_thuoc as $row_thuoc) {//duyet toan bo mang tra ve
				$params1=array(
					$row_thuoc['ID_Thuoc'],
					$row_thuoc['SoLoNhaSanXuat'],
					$row_thuoc['SoLuong'],
					$row_thuoc['DonGiaVon'],
					$row_thuoc['ThanhTienVon'],
					'',
					$row_thuoc['NgayHetHan'],
					$solo,
					$check1,
					2014,
					$_SESSION["user"]["id_user"],
					array(&$check2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
			
				$store_name1="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
				$prm=$data->query( $store_name1, $params1);//Goi store
				if( !$prm ){
					$data->rollback();
					return;
				}
			}// end for

			//END INSERT phieu nhap chi tiet


	}
	// END Kiem tra neu co thuc pham chuc nang thi tach ra phieu rieng


	// Kiem tra neu co thuoc khac thuc pham chuc nang thi tach ra phieu rieng: 5%
	
	if($tam_tpcn[0]['THUOC']>0){

		$check1="";
		$check2="";
		$i=0;
		$params=array(
			NULL,//$_POST['MaPhieu'],
			$date,
			1,//$_POST['ID_Kho1'],
			414,//$_POST['ID_NCC1'],
			$_SESSION["user"]["id_user"],// nguoi duyet
			$date, // ngay duyet
			95,//$_POST['id_loai'],
			$_SESSION["user"]["id_user"],
			NULL,//$_POST['SoHopDong'],
			NULL,//$_POST['SoDonDatHang'],
			$tam_tpcn[0]['THUOC_TTVon'],
			5,//$_POST['PhanTramVat'],
			$tam_tpcn[0]['THUOC_TTVon']*0.5,// Thanh tien VAT
			NULL,//$_POST['SoHoaDon'],
			NULL,//convert_date($_POST['NgayHoaDon']),
			'Mua thuốc trả lại từ BN - Đơn thuốc '.$tam_tpcn[0]['ID_DonThuoc'],//$_POST['GhiChu'],
			0,//$_POST['isBHYT'],
			$_SESSION["user"]["id_user"],
			$tam_tpcn[0]['ID_DonThuoc'],
			$_SERVER['REMOTE_ADDR'],
			array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);

		$store_name="{call GD2_HoanTra_PhieuNhap_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,? ,?,?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	*/
	//	print_r($check1);
		if( !$get_danh_muc_phong_ban ){
			$data->rollback();
			return;
		}



		// INSERT Vao phieu nhap chi tiet

		$solo ="";
		$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
		$params_taolo = array(array($_SESSION["user"]["year_work"]),array(&$solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );//tao param cho store
		$get_solo=$data->query( $store_name_taolo, $params_taolo);


		$store_name_thuoc="{call GD2_GetThuocOfDonThuocHoanTra(?,?)}";//tao bien khai bao store
		$params_thuoc = array($_POST["id_huychidinh"],0);
		$get_thuoc=$data->query( $store_name_thuoc, $params_thuoc);//Goi store
		$excute_thuoc= new SQLServerResult($get_thuoc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam_thuoc= $excute_thuoc->get_as_array();//Tra ve mang toan bo data lay duoc 
		$responce = new stdClass;
		foreach ($tam_thuoc as $row_thuoc) {//duyet toan bo mang tra ve
			$params1=array(
				$row_thuoc['ID_Thuoc'],
				$row_thuoc['SoLoNhaSanXuat'],
				$row_thuoc['SoLuong'],
				$row_thuoc['DonGiaVon'],
				$row_thuoc['ThanhTienVon'],
				'',
				$row_thuoc['NgayHetHan'],
				$solo,
				$check1,
				2014,
				$_SESSION["user"]["id_user"],
				array(&$check2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
		
			$store_name1="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
			$prm=$data->query( $store_name1, $params1);//Goi store
			if( !$prm ){
				$data->rollback();
				return;
			}
		}// end for

		//END INSERT phieu nhap chi tiet
	}
	// END Kiem tra neu co thuoc khac thuc pham chuc nang thi tach ra phieu rieng

	$store_name3="{call GD2_TinhLuyDiem_HoanTraChiDinhThuoc_HuyPhieu (?,?,?)}";
	$params3 = array(
			$_POST["id_huychidinh"],
			$_SESSION["user"]["id_user"],
			$_SERVER['REMOTE_ADDR']
	);
	$data->query($store_name3, $params3);
	
	
	$data->commit();
	echo($id_return);
?>