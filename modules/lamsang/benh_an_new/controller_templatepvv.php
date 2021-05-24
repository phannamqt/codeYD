<?php

$data= new SQLServer;
$store_name="{call GD2_TemplatePhieuvaovien_Update_Chitiet(?,?,?,?,?,?,?)}";	

$params    = array (
					$_POST['id_auto_pvv'],
					$_POST['lydovaovien'],
					$_POST['quatrinhbenhly'],
					$_POST['toanthan'],
					$_POST['cacbophan'],
					$_SESSION['user']['id_user'],
					$_SERVER['REMOTE_ADDR']
					);
					print_r($params);		
$add=$data->query( $store_name, $params);

	
//print_r($_POST);			
?>
