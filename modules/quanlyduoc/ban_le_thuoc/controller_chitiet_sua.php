<?php

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
	$begin_tran=$data->begin_tran();
	$store_name1="{call GD2_Thu_TraNo_Update (?,?,?,?)}";
	$params1 = array(
	$_POST["id_thutrano"],
	0,
	'Hủy thanh toán bán lẻ',
	$_SESSION["user"]["id_user"]
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);	
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	
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
	
  
	//echo "nam 6";
	if($_POST["iddonthuoc"]>0){
			$store_name6="{call GD2_donthuoc_thanhtoan (?,?,?)}";
			$params6 = array(
			$_POST["iddonthuoc"],
			0,		
			$_SESSION["user"]["id_user"]
			);
			$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);			
			 
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

	// Huy xuất
	$params4 = array($_POST['iddonthuoc']);		
	$store_name4="{call GD2_phieuxuat_checkHuy (?)}";
	$get_lich=$data->query( $store_name4, $params4);
	$excute= new SQLServerResult($get_lich);
	$tam= $excute->get_as_array();	
	 

	if($tam[0]['KiemTraHuyBill']!=0){
		$data->rollback();
		return;
	}

	$params5 = array(
		$_POST['iddonthuoc'],
		$_SESSION["user"]["id_user"],
		$_SERVER['REMOTE_ADDR']
	);		
	$store_name5="{call MED_HuyXuatThuocByID_DonThuoc (?,?,?)}";

	$get=$data->query( $store_name5, $params5);	
	if( !$get ){
		$data->rollback();
		return;
	}
 

$data->commit();

?>

