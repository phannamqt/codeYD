<?php



	$sum=0;
	$sumvat=0;
	//print_r($_POST);
	$data= new SQLServer;	
	
	$params4 = array($_GET['id_donthuoc']);		
	$store_name4="{call GD2_chuyenxuatkho (?)}";
	$get_lich=$data->query( $store_name4, $params4);
	$excute= new SQLServerResult($get_lich);
	$tam= $excute->get_as_array();	
	
	$begin_tran=$data->begin_tran();	
	$sum=0;
	$sumvat=0;	
	for($i=0;$i<=count($tam)-1;$i++){		
		$sum=$sum+($tam[$i]['SoLuong']*$tam[$i]['DonGia']);
		
	}

	
	
	
	
	

	 $date = date('Y-m-d H:i:s');
		$id_xuatkho='';
		$params4 = array(
		'',//  @MaPhieu nvarchar(50),
		$tam[0]["NgayXuat"]->format('Y/m/d H:i:s'),//   @NgayLapPhieu datetime,
		$tam[0]["NgayXuat"]->format('Y/m/d H:i:s'),//   @NgayXuat datetime,
		$tam[0]["ID_NCC"],//   @ID_NCC int,
		$tam[0]["ID_NhanVien"],//   @ID_NhanVien int,
		'',//   @TenKhachHang nvarchar(50),
		0,//   @PercentVAT int,
		0,//   @TienVAT decimal(18,1),
		0,//   @ChietKhau decimal(18,0),
		0,//   @IsPercent bit,
		$sum,//   @ThanhTien decimal(18,0),
		'',//   @GhiChu nvarchar(200),
		1,//   @ID_Kho int,
		86,//   @ID_LoaiNhapXuat int,
		-1,//   @IDDonThuoc int,
		1,//   @DaThanhToan bit,
		$tam[0]["ID_NhanVien"],//   @ID_NguoiDuyet int,
		$tam[0]["NgayXuat"]->format('Y/m/d H:i:s'),//   @NgayDuyet smalldatetime,
		0,//   @IsXuatChoToaTam bit,
		2014,//   @Year int,
		-1,//   @ID_NhapKho int,
		array(&$id_xuatkho,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out

		);
		//print_r ($params4);
	$store_name4="{call Gd2_PhieuXuat_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$get_danh_muc_phong_ban=$data->query( $store_name4, $params4);
	if( !$get_danh_muc_phong_ban ){		
				 echo 1;	 	
				$data->rollback();
				return;
	}
	$erro='';
	$flag=0;
	for($i=0;$i<=count($tam)-1;$i++){
		
	
			$params5 = array(
				$id_xuatkho,//		  @ID_XuatKho as int,
				$tam[$i]['ID_Thuoc'],//   @ID_Thuoc as  int,
				$tam[$i]['SoLuong'],//   @SoLuong as decimal(18,0),
				$tam[$i]['DonGia'],//   @DonGia as  decimal(18,0),
				0,//   @ChietKhau as  decimal(18,0),
				1,//   @InLabel as  bit,
				1,//   @ID_KHo as int,
				$date,//   @NgayXuat as Date,
				array(&$erro,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//   @Number_ERR as Bit output,
				0,//   @PT_VAT as int,
				$tam[$i]['SoLuong']*$tam[$i]['DonGia'],//   @ThanhTien decimal(18,0), 
				0//   @Tien_Vat as int
			);
			
			$store_name5="{call GD2_PhieuXuat_CT_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";		
			$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);
			 if( !$get_danh_muc_phong_ban ){		
			 	 			
				$data->rollback();
				return;
			}
			 if( $erro==1 ){		
				 echo $tam[$i]['ID_Thuoc'];	 			
				$data->rollback();
				return;
			}
		
			
		
			
		$store_name9="{call GD2_ChiPhiThuoc_VTYT_isert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params9 = array(
			$tam[$i]['ID_Thuoc'],//	ID_Thuoc
			$id_xuatkho,//   @ID_PhieuXuat int,
			$_GET['id_donthuoc'],//   @ID_DonThuoc int,
			-1,//   @ID_LuotKham int,
			-1,//  @ID_Kham int,
			$tam[$i]['SoLuong'],// @SoLuongThuocThucXuat smallint,
			$tam[$i]['DonGia'],//  @DonGiaBan decimal(18, 0),
			$tam[$i]['DonGia']*$tam[$i]['SoLuong'],//  @ThanhTienBan decimal(18, 0),
			0,//   @DonGiaBHYT decimal(18, 0),
			0,//  @ThanhTienBHYT decimal(18, 0),
			0,//   @PhanTramDongChiTra smallint,
			0,//  @TienDongChiTra decimal(18, 0),
			0,// @DonGiaPhuThuBenhVien decimal(18, 0),
			0,// @TienPhuThuBenhVien decimal(18, 0),
			0,// @HuyBo bit,
			0,// @SoLuongTraLai smallint,
			0,// @DonGiaTraLai decimal(18, 2),
			$tam[0]["NgayXuat"]->format('Y/m/d H:i:s')// @IdUser_login int
		
		);
			//$get=$data->query( $store_name9, $params9);	
			//if( !$get ){
				
			//			$data->rollback();
			//			return;
			//}
		}

	
		
		
		
	
	
       
	//print_r($params9 );
	$data->commit();

?>

