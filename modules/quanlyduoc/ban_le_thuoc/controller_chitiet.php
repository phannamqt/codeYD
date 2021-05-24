<?php
	//print_r($_POST);
	//return;
	$data= new SQLServer;	
	$begin_tran=$data->begin_tran();

	//kiem tra da thanh toan
	
	$store_isthanhtoan= "{call GD2_isthanhtoan (?)}";
	$params_isthanhtoan  = array($_POST["id_luotkham"]);	
	$isthanhtoan=$data->query( $store_isthanhtoan, $params_isthanhtoan);
	$excute= new SQLServerResult($isthanhtoan);
	$dathanhtoan= $excute->get_as_array();
	
	if($dathanhtoan[0][0]>0){		
		$data->rollback();
		return;
	}
	
	// ket thuc kiem tra da thanh toan
	
	 	
	$id_return_hoanung='';
	$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatThanhToanVienPhi');
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();	
	$id_return='';		
	$store_name="{call GD2_thu_trano_insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params = array(
	$_POST["idbenhnhan"],
	date('Y-m-d H:i:s'),
	$_POST["tienthu"],
	'Bán lẻ',//$_POST["nguoigd"],
	'',//$_POST["diachi"],
	'Bán lẻ thuốc',
	$_SESSION["user"]["id_user"],
	1,
	'ThanhToanLuotKham',
	1,
	1,
	0,
	'TTVP_'.($tam[0][0]+1),
	$_POST["id_luotkham"],
	$_SERVER['REMOTE_ADDR'],//khatm bổ sung 23/6/15
	array(&$id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
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
	'TTVP_'.($tam[0][0]+1),
	$_POST["tienthu"],
	0,//$_POST["giamgia"]+$_POST["KhauHaoThuocVTYT"]+$_POST["KhauHaoDichVu"],
	-$_POST["tienthu"],
	$_POST["tienthu"],
	date('Y-m-d H:i:s'),
	'Bán lẻ thuốc',
	0,
	0,
	$_POST["id_luotkham"],
	0,//$_POST["sum_bhyttra"],
	0,//$_POST["hotro_kham"]+$_POST["hotro_thuoc"],
	0,//$_POST["sum_bhcc_tra"],
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	$store_name2="{call GD2_demsophieu_upd (?)}";
	$params2 = array(
	'FormatThanhToanVienPhi'	
	);
	$get_danh_muc_phong_ban=$data->query( $store_name2, $params2);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	
	// Chiết khấu giới thiệu
	$store_name_ck="{call GD2_ThanhToanChietKhauLuotKham (?,?,?)}";
	$params_ck = array(
					$_POST["id_luotkham"],
					$_SESSION["user"]["id_user"],
					$_SERVER['REMOTE_ADDR'],	
	);
	$update_ck=$data->query( $store_name_ck, $params_ck);
	if( !$update_ck ){
		$data->rollback();
		return;
	}
	
	

	if($_POST["iddonthuoc"]>0){
			$store_name6="{call GD2_donthuoc_thanhtoan (?,?,?)}";
			$params6 = array(
			$_POST["iddonthuoc"],		
			1,
			$_SESSION["user"]["id_user"]
			);
			
			$params3 = array(
			$id_return,
			null,
			null,
			null,
			$_POST["iddonthuoc"],
			0,
			0,
			0,
			0,			
			0,
			$_POST["id_luotkham"]
			);
			
			
			$store_name3="{call GD2_ThuTraNo_chitiet_donthuoc_insert (?,?,?,?,?,?,?,?,?,?,?)}";
			$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
				$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);
				if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
				
	 
	} 
	
	$store_name9="{call GD2_ThongTinLuotKham_UpdateTrangThai (?,?)}";
		$params9 = array(				
			$_POST['id_luotkham'],//   @ID_LuotKham int,
			'KetThucKham'
			);
		$get=$data->query( $store_name9, $params9);	
		if( !$get ){		
					$data->rollback();
					return;
		}
	
	$store_name9="{call GD2_thongtinluotkham_upd_thanhtoan (?,?)}";
		$params9 = array(				
			$_POST["id_luotkham"],//   @ID_LuotKham int,
			1
		);
	$get=$data->query( $store_name9, $params9);	
	if( !$get ){		
		$data->rollback();
		return;
	}
	
	$store_name11="{call GD2_ConTroller_ThanhToan (?)}";
	$params11 = array(				
		$_POST["id_luotkham"]
	);
	$get11=$data->query( $store_name11, $params11);
                                                                                                   
	$data->commit();
	
	echo $id_return.';'.$id_return_hoanung;
?>

