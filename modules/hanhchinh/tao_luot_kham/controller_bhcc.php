<?php
$data= new SQLServer;
$id_return='';
 //$_POST['ngaycap']=convert_date($_POST['ngaycap']);	
// $_POST['hsdtu']=convert_date($_POST['hsdtu']);	
 
 if($_POST['hsdtu']!='')
	 $_POST['hsdtu']=convert_date($_POST['hsdtu']);
 else
	$_POST['hsdtu']=NULL;
		
 if($_POST['hsdden']!='')
	 $_POST['hsdden']=convert_date($_POST['hsdden']);
 else
	$_POST['hsdden']=NULL;	
 
if($_GET['oper']=='add'){
	$params = array($_POST['mabh'],
					$_POST['diachi'],
					$_POST['hsdtu'],
					$_POST['hsdden'],
					NULL,
					$_GET['id_benhnhan'],
					$_POST['loaithe'],
					$_SESSION['user']['id_user'],
					array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
	print_r($params);
	$get=$data->query( "{call GD2_BHCC_Insert(?,?,?,?,? ,?,?,?,?)}", $params);//Goi store
	echo ';'.$id_return;
}else{
	$params = array($_POST['idbh'],
					$_POST['mabh'],
					$_POST['diachi'],
					$_POST['hsdtu'],
					$_POST['hsdden'],
					NULL,
					$_GET['id_benhnhan'],
					$_POST['loaithe'],
					$_SESSION['user']['id_user']
				);
	$get=$data->query( "{call GD2_BHCC_Update(?,?,?,?,? ,?,?,?,?)}", $params);//Goi store
}
?>