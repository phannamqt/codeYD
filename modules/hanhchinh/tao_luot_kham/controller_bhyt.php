<?php

$data= new SQLServer;
$id_return='';
 //$_POST['ngaycap']=convert_date($_POST['ngaycap']);	
 
 
 $_POST['diachibh']= ucwords(strtolower(mb_convert_case($_POST["diachibh"], MB_CASE_TITLE, "UTF-8")));
 $_POST['hsdtu']=convert_date($_POST['hsdtu']);	
 $_POST['hsdden']=convert_date($_POST['hsdden']);	
 if ( $_POST['ID_KhuVuc']=="") {
	$_POST['ID_KhuVuc']=null;
}else{
	$_POST['ID_KhuVuc']=$_POST['ID_KhuVuc'];
}
if ( $_POST['NgayDu5Nam']=="") {
	$_POST['NgayDu5Nam']=null;
}else{
	$_POST['NgayDu5Nam']=convert_date($_POST['NgayDu5Nam']);
} 

if ( $_POST['NgayMienCungChiTra']=="") {
	$_POST['NgayMienCungChiTra']=null;
}else{
	$_POST['NgayMienCungChiTra']=convert_date($_POST['NgayMienCungChiTra']);
}

if($_GET['oper']=='add'){
	$params = array($_POST['mabh'],
	$_POST['noidkbd'],
	$_POST['diachibh'],
	$_POST['hsdtu'],
	$_POST['hsdden'],
	null,
	$_POST['NgayDu5Nam'],
	$_POST['NgayMienCungChiTra'],
	$_POST['ID_KhuVuc'],
	$_GET['id_benhnhan'],
	$_SESSION["user"]["id_user"]	
	,array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	
	$get=$data->query( "{call GD2_BHYT_insert_new(?,?,?,?,?, ?,?,?,?,? ,?,?)}", $params);//Goi store
	echo ';'.$id_return;
}else{

	$params = array($_POST['idbh'],
					$_POST['mabh'],
					$_POST['noidkbd'],
					$_POST['diachibh'],
					$_POST['hsdtu'],
					$_POST['hsdden'],
					null,
					$_POST['NgayDu5Nam'],
					$_POST['NgayMienCungChiTra'],
					$_POST['ID_KhuVuc'],
					$_GET['id_benhnhan'],
					$_SESSION["user"]["id_user"]
			);
	$get=$data->query( "{call GD2_bhyt_upd_new(?,?,?,?,?, ?,?,?,?,? ,?,?)}", $params);//Goi store
}
?>