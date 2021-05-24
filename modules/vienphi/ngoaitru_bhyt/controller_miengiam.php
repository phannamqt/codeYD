<?php
	$data= new SQLServer;	
	//$begin_tran=$data->begin_tran();
	//$data->rollback();
	$check1="";
	$store_name="{call GD2_ThuNgan_MienGiamTheoLuotKham (?,?,?,?,? ,?,?,?,?,? ,?,?,?)}";//tao bien khai bao store
	$params = array( 
			$_POST["ID_LuotKham"],//@ID_LuotKham INT,
			$_POST["ID_BenhNhan"],//@ID_BenhNhan INT,
			$_POST["SoTienCoupon"],//@SoTienCoupon decimal(18, 0),
			$_POST["SoTienQuoTa"],//@SoTienQuoTa decimal(18, 0),
			$_POST["SoTienVoucher"],//@SoTienVoucher decimal(18, 0),
			$_POST["ID_NhanVienSuDungQuoTa"],//@ID_NhanVienSuDungQuoTa INT,
			$_POST["ID_LoaiCoupon"],//@ID_LoaiCoupon INT,
			$_POST["GhiChuCoupon"],//@GhiChuCoupon NVARCHAR(200),
			$_POST["GhiChuQuota"],//@GhiChuQuota NVARCHAR(200),
			$_POST["GhiChuVoucher"],//@GhiChuVoucher NVARCHAR(200),
			$_SESSION["user"]["id_user"],//@IdUser_login INT,
			$_SERVER['REMOTE_ADDR'],//@IP NVARCHAR(30),
			array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//@ID_Return INT OUTPUT				
			 );	
	$get=$data->query( $store_name, $params);//Goi store
	if(!$get){		
		$data->rollback();
		return;
	}

	// Bỏ sủ dụng các voucher trước
	$store_name_2="{call GD2_ThuNgan_MienGiamVoucher_ChiTiet_UnActive (?,?,?)}";//tao bien khai bao store
	$params_2 = array( 
			$_POST["ID_LuotKham"],//@ID_LuotKham INT,
			$_SESSION["user"]["id_user"],//@IdUser_login INT,
			$_SERVER['REMOTE_ADDR']//@IP NVARCHAR(30),		
			);	
	$get_2=$data->query( $store_name_2, $params_2);//Goi store
	if(!$get_2){		
		$data->rollback();
		return;
	}
	// Insert lại voucher
	if(isset($_POST['ChiTiet_Voucher'])){
		for($i=0;$i<count($_POST['ChiTiet_Voucher']);$i++){
			$check_3="";
			$store_name_3="{call GD2_ThuNgan_MienGiamVoucher_ChiTiet_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
			$params_3 = array( 
					$_POST["ID_LuotKham"],//@ID_LuotKham INT,
					$_POST['ChiTiet_Voucher'][$i][0],//@ID_LoaiVoucher INT,
					$_POST['ChiTiet_Voucher'][$i][1],//@SoTienVoucher decimal(18, 0),
					$_SESSION["user"]["id_user"],//@IdUser_login INT,
					$_SERVER['REMOTE_ADDR'],//@IP NVARCHAR(30),
					array($check_3, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//@ID_Return INT OUTPUT				
					);	
			$get_3=$data->query( $store_name_3, $params_3);//Goi store
			if(!$get_3){		
				$data->rollback();
				return;
			}
		}
	}

	$store_name_4="{call GD2_MienGiamUpdateChiTiet (?,?,?)}";//tao bien khai bao store
	$params_4 = array( 
			$_POST["ID_LuotKham"],//@ID_LuotKham INT,
			$_SESSION["user"]["id_user"],//@IdUser_login INT,
			$_SERVER['REMOTE_ADDR']//@IP NVARCHAR(30),
			);	
	$get_4=$data->query( $store_name_4, $params_4);//Goi store
	if(!$get_4){		
				$data->rollback();
				return;
			}
	$data->commit();
	
?>

