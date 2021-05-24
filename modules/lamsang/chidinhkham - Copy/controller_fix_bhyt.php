<?php
$data= new SQLServer;
$ketqua=0;

//$idluotkham,$idkham,$idphy,$iddtph,$iduser)
$khoa=CheckUpdate_BhytBhccThanhtoan(NULL,$_GET['id_kham'],NULL,NULL,$_SESSION["user"]["id_user"]);
	if($khoa['Isupdate']==0){
		//echo '1|'.$khoa['Chuoi'];
		echo json_encode(array('IsLock' => 1, 'Notes' => $khoa['Chuoi']));
	}else{
		if($_GET['ac']==1){// la bao hiem
			$store_name_x="{call GD2_KiemTraHoTroBHYT(?,?,?)}";
			$params_x = array(1,$_GET['id_kham'],1);
			$get_x=$data->query( $store_name_x, $params_x);
			$excute_x= new SQLServerResult($get_x);
			$tam_x= $excute_x->get_as_array();
			$ketqua=$tam_x[0]['KetQua'];
			if($ketqua<>2){
				$store_name="{call GD2_Kham_FixGiaBHYT (?,?,?,?,?)}";
				$params = array($_GET['id_kham'],
								1,
								1,
								$_SESSION['user']['id_user'],
								$_SERVER['REMOTE_ADDR']
								);
				$get=$data->query( $store_name, $params);
			}
		}else{// la vien phi
			$store_name="{call GD2_Kham_FixGiaBHYT (?,?,?,?,?)}";
			$params = array($_GET['id_kham'],
							1,
							2,
							$_SESSION['user']['id_user'],
							$_SERVER['REMOTE_ADDR']
							);
			$get=$data->query( $store_name, $params);
		}
			$store_name="{call GD2_GetTienBHKhamByID_Kham(?)}";
			$params = array($_GET['id_kham']);
			$get_danh_muc=$data->query( $store_name, $params);
			$excute= new SQLServerResult($get_danh_muc);
			$tam= $excute->get_as_array();
			if($tam[0]['ThanhTienBaoHiem']>0){
				$tam[0]["HoTro"]=0;
			}elseif($tam[0]["HoTro"]>0 && $tam[0]["Isbhyt"]==1){
				$tam[0]["HoTro"]=$tam[0]["HoTro"];
			}else{
				$tam[0]["HoTro"]=0;
			}
			/*echo 1";;".$tam[0]['PhiThucHien']."
			2;;".$tam[0]['PhanTramCungChiTra']."
			3;;".$tam[0]['ThanhTienCungChiTra']."
			4;;".$tam[0]['ThanhTienBaoHiem']."
			5;;".$tam[0]['Isbhyt']."
			6;;".$tam[0]['HoTro']."
			7;;".$ketqua.";;";
*/
			echo json_encode(array('IsLock' => 0, 'Notes' => 'Đã lưu', 'PhiThucHien' => $tam[0]['PhiThucHien'], 'PhanTramCungChiTra' =>$tam[0]['PhanTramCungChiTra'], 'ThanhTienCungChiTra' =>$tam[0]['ThanhTienCungChiTra'], 'ThanhTienBaoHiem' =>$tam[0]['ThanhTienBaoHiem'], 'Isbhyt' =>$tam[0]['Isbhyt'], 'HoTro' =>$tam[0]['HoTro'], 'KetQua' =>$ketqua));
}

?>