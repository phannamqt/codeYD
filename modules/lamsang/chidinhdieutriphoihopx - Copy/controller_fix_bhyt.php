<?php
$data= new SQLServer; 
$ketqua=0;
 if($_GET['nhom']==25){ // Phys
	 if($_GET['ac']==1){// la bao hiem
	 	$store_name_x="{call GD2_KiemTraHoTroBHYT(?,?,?)}";
		$params_x = array(2,$_GET['id'],1);
		$get_x=$data->query( $store_name_x, $params_x);
		$excute_x= new SQLServerResult($get_x);
		$tam_x= $excute_x->get_as_array();
		$ketqua=$tam_x[0]['KetQua'];
		if($ketqua<>2){
			$store_name="{call GD2_Kham_FixGiaBHYT(?,?,?,?,?)}";
			$params = array($_GET['id'],
							2,
							1,
							$_SESSION['user']['id_user'],
							$_SERVER['REMOTE_ADDR']
							);
			$get=$data->query( $store_name, $params);
		}
	}else{// la vien phi
		$store_name="{call GD2_Kham_FixGiaBHYT (?,?,?,?,?)}";
		$params = array($_GET['id'],
						2,
						2,
						$_SESSION['user']['id_user'],
						$_SERVER['REMOTE_ADDR']
						);
		$get=$data->query( $store_name, $params);
	}
	$store_name="{call GD2_GetTienBHPhysiotherapyByID_Phy(?)}";
	$params = array($_GET['id']);
	$get_danh_muc=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_danh_muc);
	$tam= $excute->get_as_array(); 
	echo ";;".$tam[0]['PhiThucHien'].";;".$tam[0]['PhanTramCungChiTra'].";;".$tam[0]['ThanhTienCungChiTra'].";;".$tam[0]['ThanhTienBaoHiem'].";;".$tam[0]['Isbhyt'].";;".$tam[0]['HoTro'].";;".$ketqua.";;";
 }elseif($_GET['nhom']==26){// DieuTriPhoihop
	 if($_GET['ac']==1){// la bao hiem
	 	$store_name_x="{call GD2_KiemTraHoTroBHYT(?,?,?)}";
		$params_x = array(3,$_GET['id'],1);
		$get_x=$data->query( $store_name_x, $params_x);
		$excute_x= new SQLServerResult($get_x);
		$tam_x= $excute_x->get_as_array();
		$ketqua=$tam_x[0]['KetQua'];
		if($ketqua<>2){
			$store_name="{call GD2_Kham_FixGiaBHYT (?,?,?,?,?)}";
			$params = array($_GET['id'],
							3,
							1,
							$_SESSION['user']['id_user'],
							$_SERVER['REMOTE_ADDR']
							);
			$get=$data->query( $store_name, $params);
		}
	}else{// la vien phi
		$store_name="{call GD2_Kham_FixGiaBHYT (?,?,?,?,?)}";
		$params = array($_GET['id'],
						3,
						2,
						$_SESSION['user']['id_user'],
						$_SERVER['REMOTE_ADDR']
						);
		$get=$data->query( $store_name, $params);
	}
	$store_name="{call GD2_GetTienBHDieuTriPhoiHopByID_DieuTriPhoiHop(?)}";
	$params = array($_GET['id']);
	$get_danh_muc=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_danh_muc);
	$tam= $excute->get_as_array(); 
	echo ";;".$tam[0]['PhiThucHien'].";;".$tam[0]['PhanTramCungChiTra'].";;".$tam[0]['ThanhTienCungChiTra'].";;".$tam[0]['ThanhTienBaoHiem'].";;".$tam[0]['Isbhyt'].";;".$tam[0]['HoTro'].";;".$ketqua.";;";
 }else{ // bang kham
	if($_GET['ac']==1){// la bao hiem
		$store_name_x="{call GD2_KiemTraHoTroBHYT(?,?,?)}";
		$params_x = array(1,$_GET['id'],1);
		$get_x=$data->query( $store_name_x, $params_x);
		$excute_x= new SQLServerResult($get_x);
		$tam_x= $excute_x->get_as_array();
		$ketqua=$tam_x[0]['KetQua'];
		if($ketqua<>2){
			$store_name="{call GD2_Kham_FixGiaBHYT (?,?,?,?,?)}";
			$params = array($_GET['id'],
							1,
							1,
							$_SESSION['user']['id_user'],
							$_SERVER['REMOTE_ADDR']
							);
			$get=$data->query( $store_name, $params);
		}
	}else{// la vien phi
		$store_name="{call GD2_Kham_FixGiaBHYT (?,?,?,?,?)}";
		$params = array($_GET['id'],
						1,
						2,
						$_SESSION['user']['id_user'],
						$_SERVER['REMOTE_ADDR']
						);
		$get=$data->query( $store_name, $params);
	}
	$store_name="{call GD2_GetTienBHKhamByID_Kham(?)}";
	$params = array($_GET['id']);
	$get_danh_muc=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_danh_muc);
	$tam= $excute->get_as_array(); 
	echo ";;".$tam[0]['PhiThucHien'].";;".$tam[0]['PhanTramCungChiTra'].";;".$tam[0]['ThanhTienCungChiTra'].";;".$tam[0]['ThanhTienBaoHiem'].";;".$tam[0]['Isbhyt'].";;".$tam[0]['HoTro'].";;".$ketqua.";;";
 }
?>