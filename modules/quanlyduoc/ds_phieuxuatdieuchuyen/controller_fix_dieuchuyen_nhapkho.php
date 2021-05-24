<?php
//print_r($_POST);
$loi=0;
$loi_ton=0;
$error='';
$ds='';
$data= new SQLServer;//tao lop ket noi SQL
//$begin_tran=$data->begin_tran();

	$date = date('Y-m-d H:i:s');

	$params_select = array();//tao param cho store 
	$store_name_select="{call GD2_GetDSPhieuNhapDieuChuyenSai()}";//tao bien khai bao store
	$get_danh_muc_phong_ban_select=$data->query( $store_name_select,$params_select);//Goi store
	$excute_select= new SQLServerResult($get_danh_muc_phong_ban_select);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam_select= $excute_select->get_as_array();//Tra ve mang toan bo data lay duoc 
	foreach ($tam_select as $row_select){

		
		$id_xuatkho='';
			$params4 = array(
			'',//  @MaPhieu nvarchar(50),
			$date,//   @NgayLapPhieu datetime,
			$date,//   @NgayXuat datetime,
			-99,//   @ID_NCC int,
			$_SESSION["user"]["id_user"],//   @ID_NhanVien int,
			'',//   @TenKhachHang nvarchar(50),
			0,//   @PercentVAT int,
			0,//   @TienVAT decimal(18,1),
			0,//   @ChietKhau decimal(18,0),
			0,//   @IsPercent bit,
			0,//   @ThanhTien decimal(18,0),
			'Fix lỗi xuất điều chuyển',//   @GhiChu nvarchar(200),
			$row_select['ID_Kho'],//   @ID_Kho int,
			88,//   @ID_LoaiNhapXuat int,
			'',//   @IDDonThuoc int,
			0,//   @DaThanhToan bit,
			NULL,//   @ID_NguoiDuyet int,
			NULL,//   @NgayDuyet smalldatetime,
			0,//   @IsXuatChoToaTam bit,
			2014,//   @Year int,
			-3,//   @ID_NhapKho int,
			0,
			array($id_xuatkho, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out
			);
		
			
			$store_name4="{call Gd2_PhieuXuat_NoiBoFixLoi_Add (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?)}";
			$get_danh_muc_phong_ban=$data->query( $store_name4, $params4);

			if( !$get_danh_muc_phong_ban ){		
			
				$data->rollback();
				$loi=1;
				return;
				exit();
			}
			if($id_xuatkho<=0){
				$data->rollback();
				$loi=1;
				return;
				exit();
			}
			//echo ";".$id_xuatkho.";";
	
		$params22 = array($row_select['ID_NhapKho']);//tao param cho store 
		$store_name22="{call GD2_GetPhieuNhapChiTietByID_NhapKho(?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban22=$data->query( $store_name22,$params22);//Goi store
		$excute22= new SQLServerResult($get_danh_muc_phong_ban22);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam= $excute22->get_as_array();//Tra ve mang toan bo data lay duoc 
		foreach ($tam as $row){
			if($row['ID_Thuoc']!=''){
				$params5 = array(
					$id_xuatkho,//		  @ID_XuatKho as int,
					$row['ID_Thuoc'],//   @ID_Thuoc as  int,
					convert_comma_dot_insert($row['SoLuong']),//   @SoLuong as decimal(18,0),
					0,//$value['dongia'],//   @DonGia as  decimal(18,0),
					0,//   @ChietKhau as  decimal(18,0),
					0,//   @InLabel as  bit,
					$row_select['ID_Kho'],//   @ID_KHo as int,
					$date,//   @NgayXuat as Date,
					array($error, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//   @Number_ERR as Bit output,
					0,//   @PT_VAT as int,
					0,//   @ThanhTien decimal(18,0), 
					0//   @Tien_Vat as int
					);
				//print_r($params5);
				$store_name5="{call GD2_PhieuXuat_CT_Add_FixTraDieuChuyen (?,?,?,?,?,?,?,?,?,?,?,?)}";	 
				$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);	
				
				//echo ';;'.$error.';;';
				if($error==1){
					$loi_ton=1;
					$ds.="ID_Kho: ".$row_select['ID_Kho'].'-ID Thuoc:'.$row['ID_Thuoc'].'-ID_PhieuXuat: '.$id_xuatkho.'|';
				}
			}
		}

		
	}


	if($loi_ton==1){
			//$data->rollback();
			echo $ds."<br>";	
			//return;
			//exit();
		}
//$data->commit();
//return;
?>