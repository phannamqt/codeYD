<?php
//print_r($_POST);
$data= new SQLServer;
$id_return='';
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
	// print_r($_POST);
	if($_GET['oper']=='add'){
		//print_r($params);
		$params = array(
			$_POST["pbvatly"],
			$_GET['id_benhnhan'],
			$_POST["doituong"],
			$_POST["goikham"],
			$_POST["phanloai"],
						//$ngay_gio,
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
			$_POST["BNGioiThieu"],
			$_SESSION['user']['id_user'],
			$_SERVER['REMOTE_ADDR'],
			array(&$id_return,  SQLSRV_PARAM_OUT, SQLSRV_PHPTYPE_INT)
			);

		$del=$data->query( "{call Gd2_ThongTinLuotKham_Insert(?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?)}", $params);//Goi store
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

		echo ';'.$id_return;
	}else {
		$khoa=CheckUpdate_BhytBhccThanhtoan_AllowKSKCTy($_GET['id_ttluotkham'],NULL,NULL,NULL,$_SESSION["user"]["id_user"]);
		if($khoa['Isupdate']==0){
			echo json_encode(array('IsLock' => 1, 'Notes' => $khoa['Chuoi'], 'Error'=> 0));
		}else{
			$params = array($_POST["pbvatly"],
				$_GET['id_ttluotkham'],
				$_POST["doituong"],
				$_POST["goikham"],
				$_POST["phanloai"],
							//$ngay_gio,
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
				$_POST["BNGioiThieu"],
				$_SERVER['REMOTE_ADDR'],
			);
			$up=$data->query( "{call Gd2_ThongTinLuotKham_Upd(?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?)}", $params);//Goi store

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