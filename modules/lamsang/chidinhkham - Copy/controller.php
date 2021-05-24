<?php
//print_r($_POST);

// 20/4 /15 khong up store nay duoc cho may 105
$max=0;
$check1='';
$idluotkham='';
$data= new SQLServer;//tao lop ket noi SQL

$khoa=CheckUpdate_BhytBhccThanhtoanNoitru($_REQUEST['idluotkham'],NULL,NULL,NULL,$_SESSION["user"]["id_user"]);
	if($khoa['Isupdate']==0){
		//echo '1|'.$khoa['Chuoi'];
		echo json_encode(array('IsLock' => 1, 'Notes' => $khoa['Chuoi']));
	}else{
		echo json_encode(array('IsLock' => 0, 'Notes' => 'Đã lưu'));
		if(isset($_POST['id'])){

			$stt=0;
			$kt=0;
			foreach ($_POST['id'] as $key => $value) {
				if($value['IDLuotKham']>0 && $kt==0){
					$kt=1;
					$params_check = array($value['IDLuotKham']);
					$get_check=$data->query( '{call GD2_GetLanChiDinhByID_LuotKham(?)}', $params_check);
					$excute_check= new SQLServerResult($get_check);
					$tam_check= $excute_check->get_as_array();
					$max=$tam_check[0]['LanChiDinhCuoi']+1;
					//print_r($_POST['id']);
					//echo 'aaaaa'.$max.'ddddd';
				}
			}
			foreach ($_POST['id'] as $key => $value) {
				if($value['IDLuotKham']>0 && $idluotkham==''){
						$idluotkham=$value['IDLuotKham'];
				}
				$stt+=1;
				/*if($stt==1){
					$store_name_c="{call GD2_check_bhyt_capcuu (?)}";//tao bien khai bao store
					$params_c = array($value['IDLuotKham']);
					$get_c=$data->query( $store_name_c, $params_c);
				}*/
				if($value['TrangThai']=="HuyBo" && $value['Huy']==1){
					unset($params1);
					$store_name1="{call GD2_DM_KhamUpdateTrangThaiHuyBo (?,?,?,?,?, ?,?,?)}";//tao bien khai bao store
					$params1 = array($value['IDKham'],
									$value['TrangThai'],
									$value['ThanhTienVienPhi'],
									$value['ThanhTienVienPhi'],
									$value['ThanhTienBHYT'],
									$value['ThanhTienBHYT'],
									$value['LyDoHuyBo'],
									$_SESSION['user']['id_user']
								);
					$get1=$data->query( $store_name1, $params1);
					//print_r($params1);
				}elseif($value['Luu']==1 && $value['Sua']==1){
					unset($params2);
					if($value['ThanhTienBHYT']>0){
						$thanhtienbh=$value['PhiThucHien'];
					}else{
						$thanhtienbh=0;
					}
					if($value['ThanhTienCungChiTra']==''){
						$value['ThanhTienCungChiTra']=NULL;
					}
					if(isset($value['Code'])){
						$value['Code']=$value['Code'];
					}else{
						$value['Code']=NULL;
					}
					$store_name2="{call GD2_DM_KhamUpdate (?,?,?,?,?, ?,?,?,?,? ,?,?)}";//tao bien khai bao store
					$params2 = array($value['IDKham'],
									$value['PhiThucHien'],
									$value['ThanhTienVienPhi'],
									$value['BHChiTra'],
									$value['DonGiaBHYT'],
									$value['PhanTramCungChiTra'],
									$value['ThanhTienCungChiTra'],
									$value['ThucHien'],
									$value['NhomThucHien'],
									$value['NguoiChiDinh'],
									$value['Code'],
									$_SESSION['user']['id_user']
								);
					$get2=$data->query( $store_name2, $params2);
					//print_r ($params2);
				}elseif($value['Luu']!=1  && $value['Luu']!=9){
					if($value['ThanhTienBHYT']>0){
						$thanhtienbh=$value['PhiThucHien'];
					}else{
						$thanhtienbh=0;
					}
					unset($params);
					if($value['ThoiGianTrungBinhThucHien']==''){
						$value['ThoiGianTrungBinhThucHien']=NULL;
					}
					if($value['GiaThueNgoaiThucHien']==''){
						$value['GiaThueNgoaiThucHien']=NULL;
					}
					if($value['ThoiGianTrungBinhThucHien']==''){
						$value['ThoiGianTrungBinhThucHien']=NULL;
					}
					if(isset($value['Code'])){
						$value['Code']=$value['Code'];
					}else{
						$value['Code']=NULL;
					}

					if(trim($value['NguoiChiDinh'])!='' && $value['NguoiChiDinh']!=false){
						$value['NguoiChiDinh']=$value['NguoiChiDinh'];
					}else{
						$value['NguoiChiDinh']=$_SESSION['user']['id_user'];
					}
					$store_name="{call GD2_DM_Kham_Insert_New (?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?)}";//tao bien khai bao store
					$params = array($value['IDLuotKham'],
									$value['IDLoaiKham'],
									$value['NhomThucHien'],
									$value['NguoiChiDinh'],
									$value['TrangThai'],

									$value['PhiThucHien'],
									$value['ThanhTienVienPhi'],
									$stt,
									$value['MaBenhNhan'],
									$value['ThucHien'],

									$value['GiaThueNgoaiThucHien'],
									$value['ThoiGianTrungBinhThucHien'],
									"",
									$value['PhuThu'],
									$value['PhuThu'],

									$value['BHChiTra'],
									$value['DonGiaBHYT'],
									$value['PhanTramCungChiTra'],
									$value['ThanhTienCungChiTra'],
									$max,

									$value['Code'],
									$value['IsBHYT'],
									$_SESSION['user']['id_user'],
									$_SERVER['REMOTE_ADDR'],
									array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
					 			);
						//		print_r($params);
					$get=$data->query( $store_name, $params);
					
			   }
			}// end for
			// AND INSERT AND UPDATE
			/* if($idluotkham!=''){
				$store_nameSTT="{call GD2_AutoOrderSTT_Kham (?,?)}";//tao bien khai bao store
				$paramsSTT = array($idluotkham,$_SERVER['REMOTE_ADDR']);
				$data->query( $store_nameSTT, $paramsSTT);
			} */
			//echo "id;".$check1;
		   }

		}
?>