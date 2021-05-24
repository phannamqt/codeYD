<?php

$sum=0;
$sumvat=0;

	$data= new SQLServer;
	$begin_tran=$data->begin_tran();
	$flag=0;
	$store_name="{call GD2_upd_donthuochcitiet_toatam (?,?,?)}";
	for($i=0;$i<=count($_POST['rows'])-1;$i++){
		if($_POST['rows'][$i]['soluong']>0){		
			$flag=1;
			$params = array($_POST['rows'][$i]['id'],
							$_POST['rows'][$i]['soluong'],						
							$_SESSION["user"]["id_user"],					
			);			
			$sum=$sum+($_POST['rows'][$i]['soluong']*$_POST['rows'][$i]['dongia']);
			$sumvat=$sumvat+($_POST['rows'][$i]['soluong']*$_POST['rows'][$i]['dongia']*$_POST['rows'][$i]['phantramvat']/100);
			$get_danh_muc_phong_ban=$data->query( $store_name, $params);			
			if( !$get_danh_muc_phong_ban ){					
					$data->rollback();
					return;
			}
		}
	}
	
	

if(count($_POST['rows'])>0){
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
		$sumvat,//   @TienVAT decimal(18,1),
		0,//   @ChietKhau decimal(18,0),
		0,//   @IsPercent bit,
		$sum,//   @ThanhTien decimal(18,0),
		'',//   @GhiChu nvarchar(200),
		$_GET["kho"],//   @ID_Kho int,
		89,//   @ID_LoaiNhapXuat int,
		$_POST["id_donthuoc"],//   @IDDonThuoc int,
		0,//   @DaThanhToan bit,
		$_SESSION["user"]["id_user"],//   @ID_NguoiDuyet int,
		$date,//   @NgayDuyet smalldatetime,
		1,//   @IsXuatChoToaTam bit,
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
	for($i=0;$i<=count($_POST['rows'])-1;$i++){
		if($_POST['rows'][$i]['soluong']>0){
		$params5 = array(
		$id_xuatkho,//		  @ID_XuatKho as int,
		$_POST['rows'][$i]['id_thuoc'],//   @ID_Thuoc as  int,
		$_POST['rows'][$i]['soluong'],//   @SoLuong as decimal(18,0),
		$_POST['rows'][$i]['dongia'],//   @DonGia as  decimal(18,0),
		0,//   @ChietKhau as  decimal(18,0),
		1,//   @InLabel as  bit,
		$_GET["kho"],//   @ID_KHo as int,
		$date,//   @NgayXuat as Date,
		array(&$erro,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//   @Number_ERR as Bit output,
		$_POST['rows'][$i]['phantramvat'],//   @PT_VAT as int,
		$_POST['rows'][$i]['dongia']*$_POST['rows'][$i]['soluong'],//   @ThanhTien decimal(18,0), 
		round ($_POST['rows'][$i]['soluong']*$_POST['rows'][$i]['dongia']*$_POST['rows'][$i]['phantramvat']/100)//   @Tien_Vat as int
		

		);
	$store_name5="{call GD2_PhieuXuat_CT_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";	 
	$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);	
	if( $erro ){		 	
		$data->rollback();
		return;
	}
	
	 if( !$get_danh_muc_phong_ban ){		 	
		$data->rollback();
		return;
	}
	
	$store_name9="{call GD2_ChiPhiThuoc_VTYT_isert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params9 = array(
		$_POST['rows'][$i]['id_thuoc'],//	ID_Thuoc
		$id_xuatkho,//   @ID_PhieuXuat int,
		$_POST['id_donthuoc'],//   @ID_DonThuoc int,
		$_POST['id_luokham'],//   @ID_LuotKham int,
		-1,//  @ID_Kham int,
		round ($_POST['rows'][$i]['soluong']),// @SoLuongThuocThucXuat smallint,
		$_POST['rows'][$i]['dongia'],//  @DonGiaBan decimal(18, 0),
		$_POST['rows'][$i]['dongia']*$_POST['rows'][$i]['soluong'],//  @ThanhTienBan decimal(18, 0),
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
	
	}

	echo $id_xuatkho;
$data->commit();
?>

