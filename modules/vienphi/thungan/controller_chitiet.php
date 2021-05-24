<?php
/*$giam_chidinh = explode(";", $_POST["id_giam_chidinh"]);

print_r($giam_chidinh);*/
	$data= new SQLServer;
	
	//$begin_tran=$data->begin_tran();
	$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatThanhToanVienPhi');
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	$_POST["NgayGio"]=convert_date($_POST["NgayGio"]);
	$id_return='';		
	$store_name="{call GD2_thu_trano_insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params = array(
	$_POST["idbenhnhan"],
	$_POST["NgayGio"],
	$_POST["tienthu"],
	$_POST["nguoigd"],
	$_POST["diachi"],
	$_POST["diengiai"],
	$_SESSION["user"]["id_user"],
	1,
	'ThanhToanLuotKham',
	1,
	1,
	0,
	'TTVP_'.($tam[0][0]+1),
	$_POST["id_luotkham"],
	array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
//print_r($params);
		
	$store_name1="{call GD2_ThanhToanTong_insert (?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array(
	$_POST["idbenhnhan"],
	$id_return,
	'TTVP_'.($tam[0][0]+1),
	$_POST["tongcong"],
	$_POST["giamgia"],
	-$_POST["tienthu"],
	$_POST["tienthu"],
	$_POST["NgayGio"],
	$_POST["diengiai"],
	0,
	0,
	$_POST["id_luotkham"],
	
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
	
	$store_name2="{call GD2_demsophieu_upd (?)}";
	$params2 = array(
	'FormatThanhToanVienPhi'	
	);
	$get_danh_muc_phong_ban=$data->query( $store_name2, $params2);
	
	

	if(isset($_POST['kham'])){
	for($i=0;$i<=count($_POST['kham'])-1;$i++){
	
	if($_POST['kham'][$i]['ExtField1']=='DieuTriPhoiHop'){
			$store_name6="{call GD2_DieuTriPhoiHop_thanhtoan (?,?,?)}";
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
				$_POST['kham'][$i]['PhiThucHien'],
				0,
				0,
				0,
				$_SESSION["user"]["id_user"]
			);
			$params6 = array(
				$_POST['kham'][$i]['id_kham_dtph'],		
				1,
				$_SESSION["user"]["id_user"]
			);
			
			$store_name7="{call GD2_kham_thanhtoan (?,?,?)}";
			$params7 = array(
				$_POST['kham'][$i]['ID_Kham'],	
				1,	
				$_SESSION["user"]["id_user"]
			);
			
			$get_danh_muc_phong_ban=$data->query( $store_name7, $params7);
	}else if($_POST['kham'][$i]['ExtField1']=='PHYSIO'){
		$store_name6="{call GD2_PHYSIOTHERAPY_thanhtoan (?,?,?)}";
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
			$_POST['kham'][$i]['PhiThucHien'],
			0,
			0,
			0,
			$_SESSION["user"]["id_user"]
		);
		$params6 = array(
			$_POST['kham'][$i]['id_kham_dtph'],	
			1,	
			$_SESSION["user"]["id_user"]
		);
		
			$store_name7="{call GD2_kham_thanhtoan (?,?,?)}";
			$params7 = array(
			$_POST['kham'][$i]['ID_Kham'],	
			1,	
			$_SESSION["user"]["id_user"]
		);
		
		
		$get_danh_muc_phong_ban=$data->query( $store_name7, $params7);
	}
	else {
		$store_name6="{call GD2_kham_thanhtoan (?,?,?)}";
		$params6 = array(
			$_POST['kham'][$i]['ID_Kham'],	
			1,	
			$_SESSION["user"]["id_user"]
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
							$_POST['kham'][$i]['PhiThucHien'],
							0,
							0,
							0,
							$_SESSION["user"]["id_user"]
			);
	}
	
	
		
		$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);
		$store_name3="{call GD2_ThuTraNo_chitiet_insert (?,?,?,?,?,?,?,?,?)}";
		$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);
	
			
	
	
		
		
	
		
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
			$params11 = array(
			$giam_chidinh[$i],//@ID_LuotKham int,
			1,//@ID_ThuTraNo int,			
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name11, $params11);
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
			$params11 = array(
			$giam_dtph[$i],//@ID_LuotKham int,
			1,//@ID_ThuTraNo int,			
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name11, $params11);
		}
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
			$_SESSION["user"]["id_user"]
			);
			
			
			$store_name3="{call GD2_ThuTraNo_chitiet_insert (?,?,?,?,?,?,?,?,?)}";
			$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);
				$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);
				
				$store_name10="{call GD2_ThanhToan_LoaiGiamGia_Insert (?,?,?,?,?)}";
				
			if($_POST["id_giam_thuoc"]!=''){
			$giam_thuoc = explode(";", $_POST["id_giam_chidinh"]);		
			for ($i = 0, $c = count($giam_thuoc); $i < $c; $i++) {
				$params10 = array(
				$_POST["id_luotkham"],//@ID_LuotKham int,
				$id_return,//@ID_ThuTraNo int,
				$giam_thuoc[$i],//@ID_ChiTietMienGiam int,
				null,//@GhiChu nchar(10),
				$_SESSION["user"]["id_user"]//@IdUser_login int
				);
				$get_danh_muc_phong_ban=$data->query( $store_name10, $params10);
				$params11 = array(
			$giam_dtph[$i],//@ID_LuotKham int,
			1,//@ID_ThuTraNo int,			
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name11, $params11);
				
			}
		}
	}
	
	
	
	
	
	
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
		//print_r($params9);
	$get=$data->query( $store_name9, $params9);	
		//echo $erro.';';
	
	}
	}
	//print_r($params4);
	echo $id_return;
?>

