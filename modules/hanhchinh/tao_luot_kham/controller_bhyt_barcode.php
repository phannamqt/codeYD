<?php
$data= new SQLServer;
$id_return='';
$get='';
/*$khoa=CheckUpdate_BhytBhccThanhtoan($_GET['id_ttluotkham'],NULL,NULL,NULL,$_SESSION["user"]["id_user"]);
if($khoa['Isupdate']==0){
	echo json_encode(array('IsLock' => 0, 'Notes' => $khoa['Chuoi'], 'Error'=> 0, 'IDReturn'=> ''));
}else{*/
	$params = array($_POST['mabh'],
					str_replace(" ","",$_POST['noidkbd']),
					$_POST['diachibh'],
					$_POST['hsdtu'],
					$_POST['hsdden'],
					$_POST['idbenhnhan'],
					$_SESSION["user"]["id_user"],
					array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
						);
	$get=$data->query( "{call GD2_BHYT_barcode(?,?,?,?,?,?,?,?)}", $params);//Goi store
	//echo $id_return;
	if($get==1){
		$get=1;
	}else{
		$get=0;
	}
	echo json_encode(array('IsLock' => 0, 'Notes' => '', 'Error'=> $get, 'IDReturn'=> $id_return));
//}
?>