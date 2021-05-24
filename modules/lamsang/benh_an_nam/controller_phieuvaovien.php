<?php
if($_POST['cannang']==''){
		$_POST['cannang']=null;
	}
	else 	$_POST['cannang']=$_POST['cannang'];

if($_POST['huyetap']==''){
		$_POST['huyetap']=null;
	}
	else 	$_POST['huyetap']=$_POST['huyetap'];
if($_POST['huyetap2']==''){
		$_POST['huyetap2']=null;
	}
	else 	$_POST['huyetap2']=$_POST['huyetap2'];
if($_POST['mach']==''){
		$_POST['mach']=null;
	}
	else 	$_POST['mach']=$_POST['mach'];
if($_POST['nhietdo']==''){
		$_POST['nhietdo']=null;
	}
	else 	$_POST['nhietdo']=$_POST['nhietdo'];
if($_POST['nhiptho']==''){
		$_POST['nhiptho']=null;
	}
	else 	$_POST['nhiptho']=$_POST['nhiptho'];	
$data= new SQLServer;
$store_name="{call GD2_PhieuKhamBenhVaoVien_Insert_New(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";	

$params    = array (
					$_POST['ngayvaovien'],
					$_POST['id_luotkham'],
					$_POST['id_benhnhan'],
					$_POST['id_kham'],
					$_POST['noilamviec'],
					$_POST['nguoicanbaotin'],
					$_POST['noigioithieu'],
					$_POST['lydovaovien'],
					$_POST['quatrinhbenhly'],
					$_POST['banthan'],
					$_POST['giadinh'],
					$_POST['toanthan'],
					$_POST['cacbophan'],
					$_POST['tomtat'],
					$_POST['daxuly'],
					$_POST['vaokhoa'],
					$_POST['vaophongkham'],
					$_POST['bsdieutri'],
					$_POST['chuy'],
					0,
					$_POST['chuandoanvaovien'],
					$_SESSION["user"]["id_user"],
					$_POST['id_loaibenhannoitru'],
					$_SESSION["user"]["id_user"]
					);
$add=$data->query( $store_name, $params);

$store_name2="{call GD2_dauhieusinhton_thetrang_insert(?,?,?,?,?,?,?,?)}";

$params2    = array (

					$_POST['id_luotkham'],
					$_POST['huyetap'],
					$_POST['huyetap2'],
					$_POST['mach'],
					$_POST['nhietdo'],
					$_POST['nhiptho'],
					$_POST['cannang'],
					$_SESSION["user"]["id_user"]
					);
$add2=$data->query( $store_name2, $params2);	
//print_r($_POST);			
?>
