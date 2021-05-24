<?php
//print_r($_POST);
$loi=0;
$error='';
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();
	$params6 = array($_GET['id'],$_SESSION["user"]["id_user"]);
	$store_name6="{call GD2_PhieuXuatDieuChuyenHuyGopPhieu (?,?)}";	 
	$get_update=$data->query( $store_name6, $params6);	
	if( !$get_update ){		 	
		$data->rollback();
		$loi=1;
		return;
	}
$data->commit();
return;
?>