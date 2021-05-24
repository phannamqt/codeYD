<?php

	//print_r($_POST);
	//return;

$_POST["NgayGio"]=convert_date($_POST["NgayGio"]);	


	$data= new SQLServer;
	$store_name20="{call GD2_kiemtra_suabill (?)}";
	$params20 = array(
		$_POST["idbenhnhan"]
	);
	$get_danh_muc_phong_ban=$data->query( $store_name20, $params20);	
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	$row_idthutrano=0;
	for($i=0;$i<=count($tam)-1;$i++){
		if($tam[$i]['ID_ThuTraNo']==$_POST["id_thutrano"]){
			$row_idthutrano=$tam[$i]['rn'];
		}		
	}
		if($tam[count($tam)-1]['rn']-$row_idthutrano>=2){
				echo 2;
				return;
		}else if($tam[count($tam)-1]['rn']-$row_idthutrano==1){
			if($tam[count($tam)-1]['ID_ThuTraNo_Ref']!=$_POST["id_thutrano"]){
				echo 2;
				return;
			}			
		}
		
	$store_ck="{call GD2_DeleteHoaHongGioiThieu (?)}";
	$param_ck = array($_POST["id_luotkham"]);
	$get_ck=$data->query( $store_ck, $param_ck);
	if( !$get_ck ){		
		$data->rollback();
		return;
	}

	//echo "nam 1";
	$store_name11="{call GD2_ThanhToan_ChiTietMienGiam_thanhtoan (?,?,?)}";
	$begin_tran=$data->begin_tran();
	$store_name1="{call GD2_Thu_TraNo_Update (?,?,?,?)}";
	$params1 = array(
	$_POST["id_thutrano"],
	0,
	$_POST["lydo_sua"],
	$_SESSION["user"]["id_user"]
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);	
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	//echo "nam 2";
	$store="{call Gd2_thantoantong_del_by_idthutrano (?)}";
	$param = array($_POST["id_thutrano"]);
	$get=$data->query( $store, $param);
	if( !$get ){		
		$data->rollback();
		return;
	}
	//echo "nam 3";
	$store_name1="{call GD2_thutrano_upd_active_hoanung (?)}";
	$params1 = array(
	$_POST["id_thutrano"]
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);	

	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	//echo "nam 4";
	$store="{call gd2_del_thanhtoantong_hoanung (?)}";
	$param = array($_POST["id_thutrano"]);
	$get=$data->query( $store, $param);
	if( !$get ){		
		$data->rollback();
		return;
	}
	
	
	
	
	
	
	
	//echo "nam 5";
	$store_name15="{call GD2_upd_thutrano_id_ref_sua (?,?,?)}";
	$params15 = array(
		$_POST["id_thutrano"],0,
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
				$store_name="{call GD2_Kham_FixGiaBHYT_New (?,?,?,?)}";//tao bien khai bao store
				$params = array($_POST['kham'][$i]['id_kham_dtph'],
								3,
								1,
								$_SESSION['user']['id_user']
								);
				$get=$data->query( $store_name, $params);
				
				if( !$get ){		
					$data->rollback();
					return;
				}
			}
		
			$store_name6="{call GD2_DieuTriPhoiHop_thanhtoan (?,?,?)}";		
			$params6 = array(
				$_POST['kham'][$i]['id_kham_dtph'],	
				0,	
				$_SESSION["user"]["id_user"]
			);			
			$store_name7="{call GD2_kham_thanhtoan (?,?,?)}";
			$params7 = array(
				$_POST['kham'][$i]['ID_Kham'],	
				0,	
				$_SESSION["user"]["id_user"]
			);			
			$get_danh_muc_phong_ban=$data->query( $store_name7, $params7);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
	}else if($_POST['kham'][$i]['ExtField1']=='PHYSIO'){
		if($_POST['VP']=='false' && $_POST['TrangThaiKham']<>3 && $_POST['isvuotmuc']==1  && $_POST['kham'][$i]['Isbhyt']==1){
				$store_name="{call GD2_Kham_FixGiaBHYT_New (?,?,?,?)}";//tao bien khai bao store
				$params = array($_POST['kham'][$i]['id_kham_dtph'],
								2,
								1,
								$_SESSION['user']['id_user']
								);
				$get=$data->query( $store_name, $params);
				
				if( !$get ){		
					$data->rollback();
					return;
				}
			}
			
		$store_name6="{call GD2_PHYSIOTHERAPY_thanhtoan (?,?,?)}";	
		$params6 = array(
			$_POST['kham'][$i]['id_kham_dtph'],	
			0,	
			$_SESSION["user"]["id_user"]
		);		
			$store_name7="{call GD2_kham_thanhtoan (?,?,?)}";
			$params7 = array(
			$_POST['kham'][$i]['ID_Kham'],		
			0,
			$_SESSION["user"]["id_user"]
		);		
		$get_danh_muc_phong_ban=$data->query( $store_name7, $params7);
		if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
		}
	}else if($_POST['kham'][$i]['ExtField1']=='PhuThu'){
		$store_name6="{call GD2_PHYSIOTHERAPY_thanhtoan (?,?,?)}";	
		$params6 = array(
			$_POST['kham'][$i]['id_kham_dtph'],	
			0,	
			$_SESSION["user"]["id_user"]
		);		
		$store_name7="{call GD2_DM_KhamUpdateTrangThaiHuyBo (?,?,?,?,?, ?,?,?)}";
		$params7 = array(	$_POST['kham'][$i]['ID_Kham'],
							'HuyBo',
							0,
							0,
							0,
							0,
							'',
							$_SESSION['user']['id_user'] 
						);	
		$get_danh_muc_phong_ban=$data->query( $store_name7, $params7);
		if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
		}
	}
	else {
			if($_POST['VP']=='false' && $_POST['TrangThaiKham']<>3 && $_POST['isvuotmuc']==1  && $_POST['kham'][$i]['Isbhyt']==1){
				$store_name="{call GD2_Kham_FixGiaBHYT_New (?,?,?,?)}";//tao bien khai bao store
				$params = array($_POST['kham'][$i]['ID_Kham'],
								1,
								1,
								$_SESSION['user']['id_user']
								);
				$get=$data->query( $store_name, $params);
				if( !$get ){		
					$data->rollback();
					return;
				}
				
			}
		$store_name6="{call GD2_kham_thanhtoan (?,?,?)}";
		$params6 = array(
			$_POST['kham'][$i]['ID_Kham'],		
			0,
			$_SESSION["user"]["id_user"]
		);	
	}		
		$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);
		if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
		}
	}
	if($_POST["id_giam_chidinh"]!=''){
		$giam_chidinh = explode(";", $_POST["id_giam_chidinh"]);		
		for ($i = 0, $c = count($giam_chidinh); $i < $c; $i++) {			
			$params11 = array(
			$giam_chidinh[$i],//@ID_LuotKham int,
			0,//@ID_ThuTraNo int,			
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
			$params11 = array(
			$giam_dtph[$i],//@ID_LuotKham int,
			0,//@ID_ThuTraNo int,			
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
	//echo "nam 6";
	if($_POST["iddonthuoc"]>0){
			$store_name6="{call GD2_donthuoc_thanhtoan (?,?,?)}";
			$params6 = array(
			$_POST["iddonthuoc"],
			0,		
			$_SESSION["user"]["id_user"]
			);
			$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);			
			if($_POST["id_giam_thuoc"]!=''){
			$giam_thuoc = explode(";", $_POST["id_giam_thuoc"]);		
			for ($i = 0, $c = count($giam_thuoc); $i < $c; $i++) {
					$params11 = array(
					$giam_thuoc[$i],//@ID_LuotKham int,
					0,//@ID_ThuTraNo int,			
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
	
	
	//echo "nam 7";
	$store_name12="{call GD2_ThanhToan_LoaiGiamGia_del_byidthutrano (?)}";	
	$params12 = array(
					$_POST["id_thutrano"]
				);
	$get_danh_muc_phong_ban=$data->query( $store_name12, $params12);
	                                                                                  
	
	
	if($_POST['iddonthuoc']!=0){
		
			$store_name9="{call gd2_update_toademve (?)}";
			$params9 = array(				
				$_POST['iddonthuoc'],//   @ID_LuotKham int,
				
			);
			$get=$data->query( $store_name9, $params9);	
			if( !$get ){		
				$data->rollback();
				return;
			}		
			$store_name9="{call GD2_donthuoc_tienmiengiam (?,?)}";
			$params9 = array(				
						0,//   @ID_LuotKham int,
						$_POST['iddonthuoc']
			);
			$get=$data->query( $store_name9, $params9);	
			if( !$get ){		
				$data->rollback();
				return;
			}
			
			for($i=0;$i<=count($_POST['thuoc'])-1;$i++){
				if($_POST['VP']=='false' && $_POST['TrangThaiKham']<>3 && $_POST['isvuotmuc']==1 && $_POST['thuoc'][$i]['IsBhyt']==1){					
					$params5 = array($_POST['thuoc'][$i]["ID_DonThuocCT"],1);
					$store_name5="{call GD2_thuoc_bhyt_chuyen(?,?)}";															 
					$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);
					 if( !$get_danh_muc_phong_ban ){		
						$data->rollback();
						return;
					}
				}
			}	
			
			
			
		
	}
	//echo "nam 8";
	$store_name9="{call GD2_thongtinluotkham_upd_thanhtoan (?,?)}";
					$params9 = array(				
						$_POST["id_luotkham"],//   @ID_LuotKham int,
						0
					);
	$get=$data->query( $store_name9, $params9);	
	if( !$get ){		
		$data->rollback();
		return;
	}
	//echo "nam 9";
	$store_name_huy="{call GD2_MienGiamTheoLuotKham_UpdateHuy (?,?,?)}";
					$params_huy = array(				
						$_POST["id_luotkham"],//   @ID_LuotKham int,
						$_SESSION["user"]["id_user"],
						$_SERVER['REMOTE_ADDR']
					);
	$get_huy=$data->query( $store_name_huy, $params_huy);	
	if( !$get_huy ){		
		$data->rollback();
		return;
	}

	//echo "nam 10";
	


$data->commit();

?>

