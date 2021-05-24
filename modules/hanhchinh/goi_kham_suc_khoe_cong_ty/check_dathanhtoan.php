<?php
$data= new SQLServer;
$store_name="{call GD2_KiemTraLuotKhamThanhToanID_LuotKham(?)}";
$params = array($_GET['id_luotkham']);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 
if($tam[0]['DaThanhToanBill']==1){
	echo "false";
}else{
	echo "true";	
}

?>