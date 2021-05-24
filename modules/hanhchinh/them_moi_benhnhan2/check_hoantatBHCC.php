<?php
$data= new SQLServer;
$params2 = array($_GET['idluotkham']);
$store_name2="{call GD2_GetTrangThaiHoanTat(?)}";
$get2=$data->query( $store_name2,$params2);
$excute2= new SQLServerResult($get2);
$tam2= $excute2->get_as_array();
	echo ";;".$tam2[0]['ID_NguoiHoanTat'].";;".$tam2[0]['KhoaSo'].";;".$tam2[0]['Ten_NguoiHoanTat'].";;";
/*	ID_NguoiHoanTat	KhoaSo
NULL	0*/
?>