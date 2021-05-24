<?php

switch ($_GET['thaotac']) {
	case 'themmoi':
		themmoi();
		break;
	case 'xoa':
		Delete_PhieuHuy();
		break;
	case 'luu':
		luu();
		break;
	case 'checkdonthuoc':
		checkdonthuoc();
		break;
	case 'checkdahoantra':
		checkdahoantra();
		break;
	break;

}
function themmoi()
{
	$out="";
	$data= new SQLServer;
	$khoa=CheckUpdate_BhytBhccThanhtoanByIDDonThuoc($_POST["ID_DonThuoc"],$_SESSION["user"]["id_user"]);
	if($khoa['Isupdate']==0){
		echo json_encode(array('IsLock' => 0, 'Notes' => $khoa['Chuoi'], 'Error'=> 0));// Tam thoi cho O để cho hủy tự do do k trả các thuoc BHYT
	}else{
		$store_name="{call GD2_HuyChiDinhThuoc_Insert (?,?,?,?,? ,?,?,?,?)}";
		$params = array(
			$_POST["lydoHuy"],
			$_SESSION["user"]["id_user"],//nnguoi lap phieu
			$_SESSION["user"]["id_user"],//nguoi duyet
			0,
			$_POST["ID_BenhNhan"],
			$_POST["ID_DonThuoc"],
			NULL,//$_POST["LoaiChiDinh"],
			$_SERVER['REMOTE_ADDR'],
			array(&$out,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
		$get=$data->query( $store_name, $params);//Goi store
		if($get==1){
			$get=1;
		}else{
			$get=0;
		}
		echo json_encode(array('IsLock' => 0, 'Notes' => '', 'Error'=> $get));
	}
}

function luu()
{
		$data= new SQLServer;
		$out='';
		foreach ($_POST['id'] as $key => $value) {
			if($value['ID_HuyChiDinhCT_Thuoc']==""){
				$store_name="{call [GD2_HuyChiDinhChiTiet_Thuoc_Insert] (?,?,?,?,? ,?,?)}";
				$params2 = array(
							$value['ID_HuyChiDinh'],
							$value['ID_Thuoc'],
							$value['SoTienThucTra'],
							$value['SoLuongTraLai'],
							$_SESSION["user"]["id_user"],
							$_SERVER['REMOTE_ADDR'],
							array(&$out,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
				$get=$data->query( $store_name, $params2);//Goi store
			}else{
				$store_name="{call [GD2_HuyChiDinhChiTiet_Thuoc_Update] (?,?,?,?,? ,?)}";
				$params = array(
							$value['ID_HuyChiDinhCT_Thuoc'],
							$value['ID_Thuoc'],
							$value['SoTienThucTra'],
							$value['SoLuongTraLai'],
							$_SESSION["user"]["id_user"],
							$_SERVER['REMOTE_ADDR'],
				);
				$get=$data->query( $store_name, $params);//Goi store
			}
		}
	$id_xoa=explode(",",$_POST['id_xoa']);
		if(count($id_xoa)>0){
			for ($i=0;$i<count($id_xoa);$i++) {
				if($id_xoa!=0){
					$store_name="{call [GD2_HuyChiDinhChiTiet_Thuoc_Delete] (?,?,?)}";
					$params = array(
								$id_xoa[$i],
								$_SESSION["user"]["id_user"],
								$_SERVER['REMOTE_ADDR'],
					);
					$get=$data->query( $store_name, $params);//Goi store
				}
			}
		}
}

function Delete_PhieuHuy(){

	$data= new SQLServer;
	$store_name="{call [GD2_HuyChiDinhThuoc_Delete] (?,?,?)}";
	$params = array(
		$_GET['id_huychidinh'],
		$_SESSION["user"]["id_user"],
		$_SERVER['REMOTE_ADDR']
	);

$data->query( $store_name, $params);//Goi store
//print_r($params);
}


function checkdonthuoc(){
	$data= new SQLServer;
	$store_name="{call GD2_CheckDonThuocHoanTra(?)}";
	$params = array($_GET['ID_DonThuoc']);
	$get_danh_muc=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_danh_muc);
	$tam= $excute->get_as_array();
	echo $tam[0]['KiemTra'];
}

function checkdahoantra(){
	$data= new SQLServer;
	$store_name="{call GD2_HuyChiDinhThuocCheckDaHoanTien(?)}";
	$params = array($_GET['ID_HuyChiDinh']);
	$get_danh_muc=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_danh_muc);
	$tam= $excute->get_as_array();
	echo $tam[0]['DaHoanTien'];
}

?>