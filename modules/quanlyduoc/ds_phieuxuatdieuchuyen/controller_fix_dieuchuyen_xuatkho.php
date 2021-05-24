<?php
//print_r($_POST);
$loi=0;
$error='';
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();

	$date = date('Y-m-d H:i:s');
	$params_select = array();//tao param cho store 
	$store_name_select="{call GD2_GetDSPhieuXuatDieuChuyenSai()}";//tao bien khai bao store
	$get_danh_muc_phong_ban_select=$data->query( $store_name_select,$params_select);//Goi store
	$excute_select= new SQLServerResult($get_danh_muc_phong_ban_select);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam_select= $excute_select->get_as_array();//Tra ve mang toan bo data lay duoc 
	foreach ($tam_select as $row_select){
			$solo='';
			$id_nhapkho='';
			$params5 = array(
				'',//@MaPhieu varchar(5),  
				$date,//@NgayNhapKho  varchar(20),
				$row_select['ID_Kho'],//@ID_Kho int,
				-99,//@ID_NCC int,       
				$_SESSION["user"]["id_user"],//@ID_NguoiDuyet int,
				$date,//@NgayDuyet  varchar(20),
				88,//@ID_NhapXuat int,
				$_SESSION["user"]["id_user"],//@ID_Nhanvien int,
				'',//@SoHopDong varchar(30),
				'',//@SoDonDatHang int,
				0,//@ThanhTien decimal(18, 0),
				0,//@PhanTramVat decimal(18, 2),
				0,//@TienVAT decimal(18, 2),
				'',//@SoHoaDon nvarchar(50),
				NULL,//@NgayHoaDon  varchar(20),       
				'Nhập trả lỗi xuất sai phiếu xuất điều chuyển',//@GhiChu nvarchar(200),
				$row_select['ID_XuatKho'],
				0,
				$_SESSION["user"]["id_user"],//@IdUser_Login int,  
			array($id_nhapkho, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out
			);
			//print_r ($params5);
			
			$store_name5="{call GD2_XuatDieuChuyen_PhieuNhap_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
			$get_danh_muc_phong_ban5=$data->query( $store_name5, $params5);
			if( !$get_danh_muc_phong_ban5 ){		
				$data->rollback();
				$loi=1;
				return;
				exit();
			}
			$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
			$params_taolo = array(array($_SESSION["user"]["year_work"]),array($solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );
			$get_solo=$data->query( $store_name_taolo, $params_taolo);
			
			$params22 = array($row_select['ID_XuatKho']);//tao param cho store 
			$store_name22="{call GD2_GetPhieuXuatChiTietByID_XuatKho(?)}";//tao bien khai bao store
			$get_danh_muc_phong_ban22=$data->query( $store_name22,$params22);//Goi store
			$excute22= new SQLServerResult($get_danh_muc_phong_ban22);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$tam= $excute22->get_as_array();//Tra ve mang toan bo data lay duoc 
			foreach ($tam as $row){
				if($row['NgayHetHan']!=''){
					$row['NgayHetHan']=$row['NgayHetHan']->format("Y-m-d");
				}
				$id_nhapkhoct='';
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
					$loi=1;
					return;
					exit();
				}
			}
		}

$data->commit();
return;
?>