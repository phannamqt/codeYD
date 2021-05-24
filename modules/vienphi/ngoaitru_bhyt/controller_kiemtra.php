<?php

	$data= new SQLServer;
	$store_name11="{call GD2_ThanhToan_ChiTietMienGiam_thanhtoan (?,?,?)}";
	//$begin_tran=$data->begin_tran();
	$store_name1="{call GD2_Thu_TraNo_Update (?,?,?,?)}";
	$params1 = array(
	$_POST["id_thutrano"],
	0,
	$_POST["lydo_sua"]	,
	$_SESSION["user"]["id_user"]
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
	
	$store="{call Gd2_thantoantong_del_by_idthutrano (?)}";
	$param = array($_POST["id_thutrano"]);
	$get=$data->query( $store, $param);

	if(isset($_POST['kham'])){
	for($i=0;$i<=count($_POST['kham'])-1;$i++){
	
	if($_POST['kham'][$i]['ExtField1']=='DieuTriPhoiHop'){
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
	}else if($_POST['kham'][$i]['ExtField1']=='PHYSIO'){
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
	}
	else {
		$store_name6="{call GD2_kham_thanhtoan (?,?,?)}";
		$params6 = array(
			$_POST['kham'][$i]['ID_Kham'],		
			0,
			$_SESSION["user"]["id_user"]
		);
	
	}
		
		$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);
	
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
		}
	}
		
	}




	
	
	if($_POST["iddonthuoc"]>0){
			$store_name6="{call GD2_donthuoc_thanhtoan (?,?,?)}";
			$params6 = array(
			$_POST["iddonthuoc"],
			0,		
			$_SESSION["user"]["id_user"]
			);
			
			
		
		
				$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);
				
			
			if($_POST["id_giam_thuoc"]!=''){
			$giam_thuoc = explode(";", $_POST["id_giam_chidinh"]);		
			for ($i = 0, $c = count($giam_thuoc); $i < $c; $i++) {
					$params11 = array(
			$giam_thuoc[$i],//@ID_LuotKham int,
			0,//@ID_ThuTraNo int,			
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name11, $params11);
			}
		}
	}
	
	
	
	$store_name12="{call GD2_ThanhToan_LoaiGiamGia_del_byidthutrano (?)}";	
	$params12 = array(
			$_POST["id_thutrano"]
			);
	$get_danh_muc_phong_ban=$data->query( $store_name12, $params12);
	

	//print_r($params4);

?>

