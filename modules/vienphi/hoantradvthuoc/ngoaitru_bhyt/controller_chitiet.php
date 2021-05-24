<?php
	//print_r($_POST);
	//return;
	$data= new SQLServer;	
	$begin_tran=$data->begin_tran();
	
	if($_POST["lydothieu"]!=''){
		$diendai=$_POST["lydothieu"];
	}else{
		$diendai=$_POST["diengiai"];
	}
	
	//kiem tra da thanh toan
	
	$store_isthanhtoan= "{call GD2_isthanhtoan (?)}";
	$params_isthanhtoan  = array($_POST["ID_LuotKham"]);	
	$isthanhtoan=$data->query( $store_isthanhtoan, $params_isthanhtoan);
	$excute= new SQLServerResult($isthanhtoan);
	$dathanhtoan= $excute->get_as_array();
	
	if($dathanhtoan[0][0]>0){		
		$data->rollback();
		return;
	}
	
	// ket thuc kiem tra da thanh toan
	
	$_POST["NgayGio"]=convert_date($_POST["NgayGio"]);		
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
	$_POST["NgayGio"],
	$_POST["tienthu"],
	$_POST["nguoigd"],
	$_POST["diachi"],
	$diendai,
	$_SESSION["user"]["id_user"],
	1,
	'ThanhToanLuotKham',
	1,
	1,
	0,
	'TTVP_'.($tam[0][0]+1),
	$_POST["id_luotkham"],
	$_SERVER['REMOTE_ADDR'],//khatm bổ sung 23/6/15
	array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}

	// UPDATE ID_THUTRANO Nam bổ sung 19/10/16
	$store_name_thutrano="{call GD2_MienGiamTheoLuotKham_UpID_Thu_TraNo (?,?,?,?)}";
	$params_thutrano = array(
					$_POST["id_luotkham"],
					$id_return,
					$_SESSION["user"]["id_user"],
					$_SERVER['REMOTE_ADDR'],	
	);
	$update_tnn=$data->query( $store_name_thutrano, $params_thutrano);
	if( !$update_tnn ){
		$data->rollback();
		return;
	}
	// END UPDATE ID_THUTRANO


		
	$store_name1="{call GD2_ThanhToanTong_insert_bhyt (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array(
	$_POST["idbenhnhan"],
	$id_return,
	'TTVP_'.($tam[0][0]+1),
	$_POST["tongcong"],
	$_POST["giamgia"]+$_POST["KhauHaoThuocVTYT"]+$_POST["KhauHaoDichVu"],
	-$_POST["tienthu"],
	$_POST["tienthu"],
	$_POST["NgayGio"],
	$diendai,
	0,
	0,
	$_POST["id_luotkham"],
	$_POST["sum_bhyttra"],
	$_POST["hotro_kham"]+$_POST["hotro_thuoc"],
	$_POST["sum_bhcc_tra"],
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
	






	



	if(isset($_GET["hoanung"])){
	$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatSoPhieuHoanUng');
	if($_POST["ID_LuotKham"]==''){
		$_POST["ID_LuotKham"]=null;
	}
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	//echo $tam[0][0];
	
	
	$store_name="{call GD2_thu_trano_insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params = array(
	$_POST["idbenhnhan"],
	$_POST["NgayGio"],
	$_POST["tienthu_hoantra"],
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
	$_SERVER['REMOTE_ADDR'],//khatm bổ sung 23/6/15
	array(&$id_return_hoanung, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	
	$store_name1="{call GD2_ThanhToanTong_insert_bhyt (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array(
	$_POST["idbenhnhan"],
	$id_return_hoanung,
	'PHU_'.($tam[0][0]+1),
	0,
	0,
	$_POST["tienthu_hoantra"],
	-$_POST["tienthu_hoantra"],
	$_POST["NgayGio"],
	'Hoàn tiền sử dụng dịch vụ còn thừa cho bệnh nhân',
	0,
	0,
	$_POST["ID_LuotKham"],
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
	
	
	
	
	}




	$store_name15="{call GD2_upd_thutrano_id_ref (?,?,?)}";
	$params15 = array(
		$id_return,
		1,
		$_POST["id_luotkham"]
		);
	
	$get=$data->query( $store_name15, $params15);	
	if( !$get ){	
				$data->rollback();
				return;
	}





	if(isset($_POST['kham'])){
	for($i=0;$i<=count($_POST['kham'])-1;$i++){	
	if($_POST['kham'][$i]['ExtField1']=='DieuTriPhoiHop'){
		if($_POST['VP']=='false' && $_POST['TrangThaiKham']<>3 && $_POST['isvuotmuc']==1  && $_POST['kham'][$i]['Isbhyt']==1){
			$store_name6="{call GD2_update_bhyt_dtph_thanhtoan (?,?,?,?)}";
			$params6 = array(
				$_POST['kham'][$i]['id_kham_dtph'],		
				$_POST['kham'][$i]['Cungchitra'],
				$_POST['kham'][$i]['bhyt'],
				$_POST['kham'][$i]['miengiam']
			);
		}else{		
			$store_name6="{call GD2_update_bhyt_dtph_thanhtoan (?,?,?,?)}";
			$params6 = array(
				$_POST['kham'][$i]['id_kham_dtph'],		
				null,
				null,
				$_POST['kham'][$i]['miengiam']
			);	
		}
			$params3 = array(
				$_POST['kham'][$i]['id_kham_dtph'],		
				$_SESSION["user"]["id_user"]
				);
				$params3 = array(
				$id_return,
				$_POST['kham'][$i]['ID_Kham'],
				$_POST['kham'][$i]['id_kham_dtph'],
				null,
				null,
				null,
				null,
				$_POST['kham'][$i]['PhiThucHien'],
				0,
				0,
				0,
				$_POST['kham'][$i]['hotro'],
				$_SESSION["user"]["id_user"]
			);			
	}else if($_POST['kham'][$i]['ExtField1']=='PHYSIO'){
		if($_POST['VP']=='false' && $_POST['TrangThaiKham']<>3 && $_POST['isvuotmuc']==1  && $_POST['kham'][$i]['Isbhyt']==1){
			$store_name6="{call GD2_update_bhyt_phy_thanhtoan (?,?,?,?)}";
			$params6 = array(
				$_POST['kham'][$i]['id_kham_dtph'],		
				$_POST['kham'][$i]['Cungchitra'],
				$_POST['kham'][$i]['bhyt'],
				$_POST['kham'][$i]['miengiam']
			);
		}else{		
			$store_name6="{call GD2_update_bhyt_phy_thanhtoan (?,?,?,?)}";
			$params6 = array(
				$_POST['kham'][$i]['id_kham_dtph'],		
				null,
				null,
				$_POST['kham'][$i]['miengiam']
			);	
		}
		
		$params3 = array(
			$_POST['kham'][$i]['id_kham_dtph'],		
			$_SESSION["user"]["id_user"]
			);
			$params3 = array(
			$id_return,
			$_POST['kham'][$i]['ID_Kham'],
			null,
			$_POST['kham'][$i]['id_kham_dtph'],
			null,
			null,
			null,
			$_POST['kham'][$i]['PhiThucHien'],
			0,
			0,
			0,
			$_POST['kham'][$i]['hotro'],
			$_SESSION["user"]["id_user"]
		);		
	}else if($_POST['kham'][$i]['ExtField1']=='PhuThu'){		
		$store_name6="{call GD2_DM_Kham_Insert_phuthu (?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
		$params6 = array(	
							$_POST['ID_LuotKham'],
							$_POST['kham'][$i]['ID_LoaiKham'],
							0,							
							'Xong',
							$_POST['kham'][$i]['PhiThucHien'],
							$_POST['kham'][$i]['PhiThucHien'],						
							$_POST['kham'][$i]['ExtField1'],						
							$_POST['kham'][$i]['BHCCtra'],
							$_SESSION['user']['id_user'],
							array(&$_POST['kham'][$i]['ID_Kham'], SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			 			);
						$params3 = array(
							$_POST['kham'][$i]['ID_Kham'],		
							$_SESSION["user"]["id_user"]
							);
							$params3 = array(
							$id_return,
							$_POST['kham'][$i]['ID_Kham'],
							null,
							null,
							null,
							null,
							null,
							$_POST['kham'][$i]['PhiThucHien'],
							0,
							0,
							0,
							$_POST['kham'][$i]['hotro'],
							$_SESSION["user"]["id_user"]
						);
	}
	else {
		if($_POST['VP']=='false' && $_POST['TrangThaiKham']<>3 && $_POST['isvuotmuc']==1 && $_POST['kham'][$i]['Isbhyt']==1){
			$store_name6="{call GD2_update_bhyt_kham_thanhtoan (?,?,?,?)}";
			$params6 = array(
				$_POST['kham'][$i]['ID_Kham'],		
				$_POST['kham'][$i]['Cungchitra'],
				$_POST['kham'][$i]['bhyt'],
				$_POST['kham'][$i]['miengiam'],
				
			);
		}else{		
			$store_name6="{call GD2_update_bhyt_kham_thanhtoan (?,?,?,?)}";
			$params6 = array(
				$_POST['kham'][$i]['ID_Kham'],		
				null,
				null,
				$_POST['kham'][$i]['miengiam'],
			);	
		}		
		$params3 = array(
							$_POST['kham'][$i]['ID_Kham'],		
							$_SESSION["user"]["id_user"]
							);
							$params3 = array(
							$id_return,
							$_POST['kham'][$i]['ID_Kham'],
							null,
							null,
							null,
							null,
							null,
							$_POST['kham'][$i]['PhiThucHien'],
							0,

							0,
							0,
							$_POST['kham'][$i]['hotro'],
							$_SESSION["user"]["id_user"]
			);
	}
	
	
		
		$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);
		if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
		$store_name3="{call GD2_ThuTraNo_chitiet_insert_new (?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);
		if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}		
	}
	
		$store_name11="{call GD2_ThanhToan_ChiTietMienGiam_thanhtoan (?,?,?)}";
		$store_name10="{call GD2_ThanhToan_LoaiGiamGia_Insert (?,?,?,?,?)}";
	if($_POST["id_giam_chidinh"]!=''){
		$giam_chidinh = explode(";", $_POST["id_giam_chidinh"]);		
		for ($i = 0, $c = count($giam_chidinh); $i < $c; $i++) {
			$params10 = array(
			$_POST["id_luotkham"],//@ID_LuotKham int,
			$id_return,//@ID_ThuTraNo int,
			$giam_chidinh[$i],//@ID_ChiTietMienGiam int,
			null,//@GhiChu nchar(10),
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name10, $params10);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
			$params11 = array(
			$giam_chidinh[$i],//@ID_LuotKham int,
			1,//@ID_ThuTraNo int,			
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name11, $params11);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
		}
	}
		
	if($_POST["id_giam_dtph"]!=''){
		$giam_dtph = explode(";", $_POST["id_giam_dtph"]);
		for ($i = 0, $c = count($giam_chidinh); $i < $c; $i++) {
			$params10 = array(
			$_POST["id_luotkham"],//@ID_LuotKham int,
			$id_return,//@ID_ThuTraNo int,
			$giam_dtph[$i],//@ID_ChiTietMienGiam int,
			null,//@GhiChu nchar(10),
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name10, $params10);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
			$params11 = array(
			$giam_dtph[$i],//@ID_LuotKham int,
			1,//@ID_ThuTraNo int,			
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name11, $params11);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
		}
	}
		
	}


	
	if(isset($_POST["tien_miengiam"])){
		
		$id_chitietmiengiam='';
		$store_name12="{call GD2_ThanhToan_ChiTietMienGiam_add(?,?,?,?,?,?,?,?,?,?)}";	
		$params12 = array ($_POST["id_luotkham"],null,null,$_POST["tien_miengiam"],'ChuongTrinh',null,$_SESSION["user"]["id_user"],1,$_POST["id_miengiam"],
		array(&$id_chitietmiengiam, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
		$insert=$data->query( $store_name12, $params12);	
		if( !$insert ){		
				$data->rollback();
				return;
			}
			
		$params10 = array(
			$_POST["id_luotkham"],//@ID_LuotKham int,
			$id_return,//@ID_ThuTraNo int,
			$id_chitietmiengiam,//@ID_ChiTietMienGiam int,
			null,//@GhiChu nchar(10),
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name10, $params10);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
			
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
			$_POST["sum"],
			0,
			0,
			0,			
			$_POST["hotro_thuoc"],
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
				
				$store_name10="{call GD2_ThanhToan_LoaiGiamGia_Insert (?,?,?,?,?)}";
				
			if($_POST["id_giam_thuoc"]!=''){
			$giam_thuoc = explode(";", $_POST["id_giam_thuoc"]);		
			for ($i = 0, $c = count($giam_thuoc); $i < $c; $i++) {
				$params10 = array(
				$_POST["id_luotkham"],//@ID_LuotKham int,
				$id_return,//@ID_ThuTraNo int,
				$giam_thuoc[$i],//@ID_ChiTietMienGiam int,
				null,//@GhiChu nchar(10),
				$_SESSION["user"]["id_user"]//@IdUser_login int
				);
				$get_danh_muc_phong_ban=$data->query( $store_name10, $params10);
				if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
				$params11 = array(
			$giam_thuoc[$i],//@ID_LuotKham int,
			1,//@ID_ThuTraNo int,			
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name11, $params11);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
				
			}
		}
	}
	
	
	
	
/*	
	
	if(isset($_POST['thuoc'])){
		$date = date('Y-m-d H:i:s');
	$id_xuatkho='';
	$params4 = array(
		'',//  @MaPhieu nvarchar(50),
		$date,//   @NgayLapPhieu datetime,
		$date,//   @NgayXuat datetime,
		-1,//   @ID_NCC int,
		$_SESSION["user"]["id_user"],//   @ID_NhanVien int,
		$_POST["nguoigd"],//   @TenKhachHang nvarchar(50),
		0,//   @PercentVAT int,
		$_POST["sumvat"],//   @TienVAT decimal(18,1),
		0,//   @ChietKhau decimal(18,0),
		0,//   @IsPercent bit,
		$_POST["sum"],//   @ThanhTien decimal(18,0),
		'',//   @GhiChu nvarchar(200),
		$_GET["kho"],//   @ID_Kho int,
		89,//   @ID_LoaiNhapXuat int,
		$_POST["iddonthuoc"],//   @IDDonThuoc int,
		1,//   @DaThanhToan bit,
		$_SESSION["user"]["id_user"],//   @ID_NguoiDuyet int,
		$date,//   @NgayDuyet smalldatetime,
		0,//   @IsXuatChoToaTam bit,
		2014,//   @Year int,
		-1,//   @ID_NhapKho int,
		array(&$id_xuatkho,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out

		);
		//print_r ($params4);
	$store_name4="{call Gd2_PhieuXuat_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$get_danh_muc_phong_ban=$data->query( $store_name4, $params4);
	if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
	$erro='';
	for($i=0;$i<=count($_POST['thuoc'])-1;$i++){
		$params5 = array(
		$id_xuatkho,//		  @ID_XuatKho as int,
		$_POST['thuoc'][$i]['ID_Thuoc'],//   @ID_Thuoc as  int,
		$_POST['thuoc'][$i]['SoThuocThucXuat'],//   @SoLuong as decimal(18,0),
		$_POST['thuoc'][$i]['Gia'],//   @DonGia as  decimal(18,0),
		0,//   @ChietKhau as  decimal(18,0),
		1,//   @InLabel as  bit,
		$_GET["kho"],//   @ID_KHo as int,
		$date,//   @NgayXuat as Date,
		array(&$erro,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//   @Number_ERR as Bit output,
		$_POST['thuoc'][$i]['PhanTramThue'],//   @PT_VAT as int,
		$_POST['thuoc'][$i]['Gia']*$_POST['thuoc'][$i]['SoThuocThucXuat'],//   @ThanhTien decimal(18,0),
		round ($_POST['thuoc'][$i]['SoThuocThucXuat']*$_POST['thuoc'][$i]['Gia']*$_POST['thuoc'][$i]['PhanTramThue']/100)//   @Tien_Vat as int
		

		);
	$store_name5="{call GD2_PhieuXuat_CT_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";
	 
	$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);
	 if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	$store_name9="{call GD2_ChiPhiThuoc_VTYT_isert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params9 = array(
		$_POST['thuoc'][$i]['ID_Thuoc'],//	ID_Thuoc
		$id_xuatkho,//   @ID_PhieuXuat int,
		$_POST['iddonthuoc'],//   @ID_DonThuoc int,
		$_POST['id_luotkham'],//   @ID_LuotKham int,
		$_POST['id_luotkham'],//  @ID_Kham int,
		round ($_POST['thuoc'][$i]['SoThuocThucXuat']),// @SoLuongThuocThucXuat smallint,
		$_POST['thuoc'][$i]['Gia'],//  @DonGiaBan decimal(18, 0),
		$_POST['thuoc'][$i]['Gia']*$_POST['thuoc'][$i]['SoThuocThucXuat'],//  @ThanhTienBan decimal(18, 0),
		0,//   @DonGiaBHYT decimal(18, 0),
		0,//  @ThanhTienBHYT decimal(18, 0),
		0,//   @PhanTramDongChiTra smallint,
		0,//  @TienDongChiTra decimal(18, 0),
		0,// @DonGiaPhuThuBenhVien decimal(18, 0),
		0,// @TienPhuThuBenhVien decimal(18, 0),
		0,// @HuyBo bit,
		0,// @SoLuongTraLai smallint,
		0,// @DonGiaTraLai decimal(18, 2),
		$_SESSION["user"]["id_user"]// @IdUser_login int
		);
	$get=$data->query( $store_name9, $params9);	
	if( !$get ){		
				$data->rollback();
				return;
			}
	
	}
	}                
	
	$store_name9="{call GD2_ThongTinLuotKham_UpdateID_TrangThai (?,?,?)}";
	$params9 = array(
		
		$_POST['id_luotkham'],//   @ID_LuotKham int,
		'KetThucKham',//  @ID_Kham int,
	
		$_SESSION["user"]["id_user"]// @IdUser_login int
		);
	$get=$data->query( $store_name9, $params9);	
	if( !$get ){		
				$data->rollback();
				return;
	}*/
	
	//print_r($_POST);
	if($_POST['iddonthuoc']!=0){
		if($_POST['laythuoc']=='false')	{
			$store_name9="{call GD2_donthuoc_upd_trangthai (?,?)}";
			$params9 = array(				
				$_POST['iddonthuoc'],//   @ID_LuotKham int,
				'Cancel',
				);
			$get=$data->query( $store_name9, $params9);	
			if( !$get ){		
						$data->rollback();
						return;
			}			
			$store_name9="{call Gd2_donthuocchitiet_upd_soluong_by_id_donthuoc (?,?)}";
			$params9 = array(				
				$_POST['iddonthuoc'],//   @ID_LuotKham int,
				0,
				);
			$get=$data->query( $store_name9, $params9);	
			if( !$get ){		
						$data->rollback();
						return;
			}
			
		}else{			
			for($i=0;$i<=count($_POST['thuoc'])-1;$i++){
				if($_POST['VP']=='false' && $_POST['TrangThaiKham']<>3 && $_POST['isvuotmuc']==1 && $_POST['thuoc'][$i]['IsBhyt']==1){					
					$store_name5="{call GD2_update_bhyt_dtchitiet_thanhtoan (?,?)}";
					$params5 = array(	
						$_POST['thuoc'][$i]['ID_DonThuocCT'],
						0,
					);							 
					$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);
					 if( !$get_danh_muc_phong_ban ){		
						$data->rollback();
						return;
					}
				}
			}				
		}
	}
	
	//print_r($_POST);
	
	
	
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
						$_POST["ID_LuotKham"],//   @ID_LuotKham int,
						1
					);
	$get=$data->query( $store_name9, $params9);	
	if( !$get ){		
		$data->rollback();
		return;
	}
	
	/*if( !$get10 ){
		$data->rollback();
		return;
	}*/
                                                                                                   
	$data->commit();
	
	echo $id_return.';'.$id_return_hoanung;
?>

