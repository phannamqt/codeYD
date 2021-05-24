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
	break;
	
}
function themmoi()
{
	$out="";
	$data= new SQLServer;
	$store_name="{call GD2_HuyChiDinh_Insert (?,?,?,?,?,?,?)}";
	$params = array(
		$_POST["lydoHuy"],	
		$_SESSION["user"]["id_user"],//nnguoi lap phieu
		$_SESSION["user"]["id_user"],//nguoi duyet
		0,
		$_POST["ID_BenhNhan"],
		$_POST["LoaiChiDinh"],
		
		array(&$out,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get=$data->query( $store_name, $params);//Goi store
}


function luu()
{
		
		
			


		$data= new SQLServer;
		
		
		foreach ($_POST['id'] as $key => $value) {
			if($value['trangthai']==0){
				$store_name="{call [GD2_HuyChiDinhChiTiet_Insert] (?,?,?,?,?,?)}";	
				$params2 = array(
							$value['ID_HuyChiDinh'],
							$value['ID_Kham'],
							$value['SoTienThucTra'],						
							$value['ID_PhysioTherapy'],
							$value['ID_DieuTriPhoiHop'],
							$value['SoLanTraLai']
				);
				$get=$data->query( $store_name, $params2);//Goi store
			}			
			if($value['trangthai']==1){
				$store_name="{call [GD2_HuyChiDinhChiTiet_Update] (?,?,?,?,?,?,?)}";		
				$params = array(
							$value['ID_HuyChiDinhCT'],
							$value['ID_HuyChiDinh'],
							$value['ID_Kham'],
							$value['SoTienThucTra'],						
							$value['ID_PhysioTherapy'],
							$value['ID_DieuTriPhoiHop'],
							$value['SoLanTraLai'],
				);
				$get=$data->query( $store_name, $params);//Goi store
			}			
		}
	$id_xoa=explode(",",$_POST['id_xoa']);
		for ($i=0;$i<count($id_xoa);$i++) {		
			if($id_xoa!=0){
				$store_name="{call [spHuyChiDinhChiTiet_Delete] (?)}";		
				$params = array(
							$id_xoa[$i]
				);
				$get=$data->query( $store_name, $params);//Goi store
			}			
		}
}




















function Delete_PhieuHuy()
{

	$data= new SQLServer;
	$store_name="{call [Gd2_HuyChiDinh_Delete] (?)}";
	$params = array(
	$_GET['id_huychidinh']
	);

$get=$data->query( $store_name, $params);//Goi store
}







?>

