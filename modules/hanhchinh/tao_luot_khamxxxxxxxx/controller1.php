<?php

$data= new SQLServer;
$id_return='';

if (!isset($_POST["chuyenkhoa"])) {
	$_POST["chuyenkhoa"]=null;
}
$up='';
if($_POST["dhsinhton"]=='false'){
	$dhsinhton=0;
}else{
	$dhsinhton=1;
}
if($_POST["comat"]=='false'){
	$comat=0;
}else{
	$comat=1;
}
if($_POST["nhanthan"]=='false'){
	$nhanthan=0;
}else{
	$nhanthan=1;
}

if($dhsinhton==1){
	$trangthai=	'DangLayDauHieuSinhTon';
}else{
	$trangthai=	'DangCho';
}

if($_POST["phanloai"]==''){
	$_POST["phanloai"]=0;
}
if($_POST["goikham"]==''){
	$_POST["goikham"]=0;
}
if($_POST["phanloai"]!=25){
	$_POST["goikham"]=0;
}
if($_GET['oper']=='add11'){
	$ID_ThePhu_1 = $_POST['ID_ThePhu2'];
	foreach($ID_ThePhu_1 as $ID_ThePhu_2) {
	   print_r($ID_ThePhu_2);
	}
}

if($_GET['oper']=='add'){
	$khoa = CheckUpdate_Custom(NULL,$_POST["phanloai"],$_POST["chuyenkhoa"],NULL,$_SESSION["user"]["id_user"],24);
	if($khoa['Isupdate']==0){
		echo json_encode(array('IsLock' => 1, 'Notes' => $khoa['Chuoi'], 'Error'=> 0));
	}else{	
		//ap the ivf
		if($_POST["chuyenkhoa"]==58){
			$id_return_ivf='';
			$params_ivf = array(				
					$_GET['id_benhnhan'],							
					$_SESSION['user']['id_user'],
					$_SERVER['REMOTE_ADDR'],		
					array($id_return_ivf, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);				
			$TaoChuoiStore=TaoChuoiStore($params_ivf);
			$store_name="{call GD2_BHCC_IVF $TaoChuoiStore}";
			$get_ivf=$data->query( $store_name, $params_ivf);
			$_POST["id_thebhcc"]=$id_return_ivf;
		}
		//ap the ivf

		$params = array(
			$_POST["pbvatly"],
			$_GET['id_benhnhan'],
			$_POST["doituong"],
			$_POST["goikham"],
			$_POST["phanloai"],
			$_POST["chuyenkhoa"],		
			$_POST["bsyeucau"],
			$_POST["nguoichidinh"],
			$_POST["nguoigioithieu"],
			$_POST["hinhthuc"],
			$_POST["tang"],
			$_POST["trangthai"],
			$trangthai,
			$nhanthan,
			$comat,
			$dhsinhton,
			$_POST["lamsang"],
			$_POST["nguoilapphieu"],
			$_POST["id_thebhyt"],
			$_POST["id_thebhcc"],
			$_POST["sothutu"],
			$_POST["ID_TrieuChung_hidden"],
			$_POST["GhiChuTrieuChung"],
			$_SESSION['user']['id_user'],
			array(&$id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
		$TaoChuoiStore=TaoChuoiStore($params);
		$store_name="{call Gd2_ThongTinLuotKham_Insert_New $TaoChuoiStore}";
		$del=$data->query( $store_name, $params);//Goi store
		if($_GET['idhenkham']!=0){
				$params= array($id_return,$_GET['idhenkham']);
				$del=$data->query( "{call GD2_lichhenkham_upd_luotkham(?,?)}", $params);//Goi store			
		}
		if($_POST["id_thebhcc"]>0){
				$params_logapthe = array(
				$id_return,
				$_POST["id_thebhcc"],
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']
			);
			$data->query( "{call GD2_LuotKham_TheBHCC_Insert(?,?,?,?)}", $params_logapthe);//Goi store
		}
		echo json_encode(array('status' => 'oke', 'id_ttluotkham' => $id_return));
	}
}else {
	$khoa = CheckUpdate_Custom($_GET['id_ttluotkham'],$_POST["phanloai"],$_POST["chuyenkhoa"],NULL,$_SESSION["user"]["id_user"],23);
	if($khoa['Isupdate']==0){
		echo json_encode(array('IsLock' => 1, 'Notes' => $khoa['Chuoi'], 'Error'=> 0));
	}else{
		
		//ap the ivf
		if($_POST["chuyenkhoa"]==58){		
			$id_return_ivf='';
			$params_ivf = array(				
					$_GET['id_benhnhan'],								
					$_SESSION['user']['id_user'],
					$_SERVER['REMOTE_ADDR'],	
					array($id_return_ivf, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);				
			$TaoChuoiStore=TaoChuoiStore($params_ivf);
			$store_name="{call GD2_BHCC_IVF $TaoChuoiStore}";
			$get_ivf=$data->query( $store_name, $params_ivf);			
			$_POST["id_thebhcc"]=$id_return_ivf;
		}else{		
			$params_ivf = array($_POST['id_thebhcc']);				
			$TaoChuoiStore=TaoChuoiStore($params_ivf);
			$store_name="{call GD2_TheBHCC_ByIDThe $TaoChuoiStore}";
			$get_ivf=$data->query( $store_name, $params_ivf);
			$excute= new SQLServerResult($get_ivf);
			$tam= $excute->get_as_array();

			$so=count($tam);
			if($so==0){		
				
			}else{
				if($tam[0]['ID_LoaiTheBHCC']==45 || $tam[0]['ID_LoaiTheBHCC']==46){
					$_POST["id_thebhcc"]=0;
				}
			}
			
		}
		//ap the ivf

		$params = array(
				$_POST["pbvatly"],
				$_GET['id_ttluotkham'],
				$_POST["doituong"],
				$_POST["goikham"],
				$_POST["phanloai"],
				$_POST["chuyenkhoa"],				
				$_POST["bsyeucau"],
				$_POST["nguoichidinh"],
				$_POST["nguoigioithieu"],
				$_POST["hinhthuc"],
				$_POST["tang"],
				$_POST["trangthai"],
				$trangthai,
				$nhanthan,
				$comat,
				$dhsinhton,
				$_POST["lamsang"],
				$_POST["nguoilapphieu"],
				$_SESSION['user']['id_user'],
				$_POST['id_thebhyt'],
				$_POST["id_thebhcc"],
				$_POST["sothutu"],
				$_POST["ID_TrieuChung_hidden"],
				$_POST["GhiChuTrieuChung"],
			);
			$TaoChuoiStore=TaoChuoiStore($params);		
			$store_name="{call Gd2_ThongTinLuotKham_Upd_New $TaoChuoiStore}";
			$up=$data->query( $store_name, $params);//Goi store
			if($_POST["doituong"]=='BHYT' && $_POST["phanloai"]==46){
				$store_name="{call GD2_FixGiaBHYT_noitru_thuoc_thanhtoan (?)}";
				$params = array($_GET["id_ttluotkham"]);
				$nocu_tam=$data->query( $store_name, $params);
			}
			if($_POST["id_thebhcc"]>0){
				$params_logapthe = array(
					$_GET['id_ttluotkham'],
					$_POST["id_thebhcc"],
					$_SESSION['user']['id_user'],
					$_SERVER['REMOTE_ADDR']
				);
				$data->query( "{call GD2_LuotKham_TheBHCC_Insert(?,?,?,?)}", $params_logapthe);//Goi store
			}
			if($up==1){
				$up=1;
			}else{
				$up=0;
			}

			echo json_encode(array('IsLock' => 0, 'Notes' => '', 'Error'=> $up));
		}
	}
?>