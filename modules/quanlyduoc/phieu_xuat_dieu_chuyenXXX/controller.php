<?php
//print_r($_POST);
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();
if(isset($_POST['id'])){
	$id_xuatkho='';
	if(count($_POST['id'])>0){
		$date = date('Y-m-d H:i:s');
		$id_xuatkho='';
		$params4 = array(
		'',//  @MaPhieu nvarchar(50),
		$date,//   @NgayLapPhieu datetime,
		$date,//   @NgayXuat datetime,
		-1,//   @ID_NCC int,
		$_SESSION["user"]["id_user"],//   @ID_NhanVien int,
		'',//   @TenKhachHang nvarchar(50),
		0,//   @PercentVAT int,
		0,//   @TienVAT decimal(18,1),
		0,//   @ChietKhau decimal(18,0),
		0,//   @IsPercent bit,
		0,//   @ThanhTien decimal(18,0),
		'',//   @GhiChu nvarchar(200),
		$_GET["id_khoxuat"],//   @ID_Kho int,
		88,//   @ID_LoaiNhapXuat int,
		'',//   @IDDonThuoc int,
		0,//   @DaThanhToan bit,
		$_SESSION["user"]["id_user"],//   @ID_NguoiDuyet int,
		$date,//   @NgayDuyet smalldatetime,
		0,//   @IsXuatChoToaTam bit,
		2014,//   @Year int,
		-3,//   @ID_NhapKho int,
		array($id_xuatkho, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out
		);
		//print_r ($params4);
		
		$store_name4="{call Gd2_PhieuXuat_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$get_danh_muc_phong_ban=$data->query( $store_name4, $params4);
		if( !$get_danh_muc_phong_ban ){		
			$data->rollback();
			return;
		}
		echo ";".$id_xuatkho.";";
	}
	$error='';
	foreach ($_POST['id'] as $key => $value) {
		if($value['TenBietDuoc']!=''){
			$params5 = array(
				$id_xuatkho,//		  @ID_XuatKho as int,
				$value['TenBietDuoc'],//   @ID_Thuoc as  int,
				convert_comma_dot_insert($value['SoLuong']),//   @SoLuong as decimal(18,0),
				0,//$value['dongia'],//   @DonGia as  decimal(18,0),
				0,//   @ChietKhau as  decimal(18,0),
				0,//   @InLabel as  bit,
				$_GET["id_khoxuat"],//   @ID_KHo as int,
				$date,//   @NgayXuat as Date,
				array($error, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//   @Number_ERR as Bit output,
				0,//   @PT_VAT as int,
				0,//   @ThanhTien decimal(18,0), 
				0//   @Tien_Vat as int
				);
			//print_r($params5);
			$store_name5="{call GD2_PhieuXuat_CT_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";	 
			$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);	
			if( !$get_danh_muc_phong_ban ){		 	
				$data->rollback();
				return;
			}
			if($error==1){
				$data->rollback();
				return;
			}
		}	
	}
	if($id_xuatkho!=''){
		$solo='';
		$id_nhapkhoct='';
		$date = date('Y-m-d H:i:s');
		$id_nhapkho='';
		$params5 = array(
			'',//@MaPhieu varchar(5),  
			$date,//@NgayNhapKho  varchar(20),
			$_GET['id_khonhap'],//@ID_Kho int,
			'',//@ID_NCC int,       
			NULL,//$_SESSION["user"]["id_user"],//@ID_NguoiDuyet int,
			NULL,//$date,//@NgayDuyet  varchar(20),
			88,//@ID_NhapXuat int,
			$_SESSION["user"]["id_user"],//@ID_Nhanvien int,
			'',//@SoHopDong varchar(30),
			'',//@SoDonDatHang int,
			0,//@ThanhTien decimal(18, 0),
			0,//@PhanTramVat decimal(18, 2),
			0,//@TienVAT decimal(18, 2),
			'',//@SoHoaDon nvarchar(50),
			NULL,//@NgayHoaDon  varchar(20),       
			'',//@GhiChu nvarchar(200),
			$id_xuatkho,
			$_SESSION["user"]["id_user"],//@IdUser_Login int,  
		array($id_nhapkho, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out
		);
		//print_r ($params5);
		
		$store_name5="{call GD2_XuatDieuChuyen_PhieuNhap_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$get_danh_muc_phong_ban5=$data->query( $store_name5, $params5);
		if( !$get_danh_muc_phong_ban5 ){		
			$data->rollback();
			return;
		}
		$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
		$params_taolo = array(array($_SESSION["user"]["year_work"]),array($solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );
		$get_solo=$data->query( $store_name_taolo, $params_taolo);
		
		$params22 = array($id_xuatkho);//tao param cho store 
		$store_name22="{call GD2_GetPhieuXuatChiTietByID_XuatKho(?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban22=$data->query( $store_name22,$params22);//Goi store
		$excute22= new SQLServerResult($get_danh_muc_phong_ban22);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam= $excute22->get_as_array();//Tra ve mang toan bo data lay duoc 
		foreach ($tam as $row){
			if($row['NgayHetHan']!=''){
				$row['NgayHetHan']=$row['NgayHetHan']->format("Y-m-d");
			}
			$params6 = array(
			  	$row['ID_Thuoc'],//@ID_Thuoc int,
				$row['SoLoNhaSanXuat'],//@SoLoNhaSanXuat varchar(52),    
				$row['SoLuong'],//@SoLuong int,
				$row['DonGiaVon'],//@DonGia decimal(18, 2),
				$row['TienVon'],//@ThanhTien decimal(18, 0),
				NULL,//@NgaySanXuat varchar(20),
				$row['NgayHetHan'],//@NgayHetHan varchar(20),  
				$solo,//@SoLoHeThong varchar(20), 
				$id_nhapkho,//@ID_NhapKho int, 
				2014,//@Year INT,
				$_SESSION["user"]["id_user"],//@IdUser_Login INT,  
			array($id_nhapkhoct, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out
			);
			//print_r ($params6);
			
			$store_name6="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";
			$get_danh_muc_phong_ban6=$data->query( $store_name6, $params6);
			if( !$get_danh_muc_phong_ban6 ){		
				$data->rollback();
				return;
			}

		}
	}
	
}
$data->commit();
return;
?>