<?php
//  print_r($_POST);
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
		if($tam[count($tam)-1]['rn']!=$row_idthutrano){
				echo 2;
				return;
		}

	$begin_tran=$data->begin_tran();
	
	$store="{call Gd2_thantoantong_del_by_idthutrano (?)}";
	$param = array($_POST["id_thutrano"]);
	$get=$data->query( $store, $param);
	if( !$get ){		
		$data->rollback();
		return;
	}
	
	
	


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
	
	
		
	$store_name2="{call Gd2_HuyChiDinh_Update_hoantien (?,?)}";
	$params2 = array(
	$_POST["id_huychidinh"],
	
	0,
	
	);
	$get_danh_muc_phong_ban=$data->query($store_name2, $params2);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	
	$store_name3="{call GD2_TinhLuyDiem_HoanTraChiDinh_HuyPhieu (?,?,?)}";
	$params3 = array(
			$_POST["id_huychidinh"],
			$_SESSION["user"]["id_user"],
			$_SERVER['REMOTE_ADDR']
	);
	$data->query($store_name3, $params3);
	
	
$data->commit();

?>

