<?php
$data= new SQLServer;

if($_GET['nhom']==25){
	$store_name="{call GD2_KiemTraID_Phy(?)}";
	$params = array($_GET['id']);
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array(); 
	//if(($tam[0]['ID_TrangThai']!='DangCho' && $tam[0]['ID_TrangThai']!='DangKham') || $tam[0]['DaThanhToan']==1){
	if($tam[0]['ID_TrangThai']!='DangCho' || $tam[0]['DaThanhToan']==1){
		echo "false";
	}else{
		echo "true";	
	}

}elseif($_GET['nhom']==26){
	$store_name="{call GD2_KiemTraID_DTPH(?)}";
	$params = array($_GET['id']);
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array(); 
	//if(($tam[0]['ID_TrangThai']!='DangCho' && $tam[0]['ID_TrangThai']!='DangKham') || $tam[0]['DaThanhToan']==1){
	if($tam[0]['ID_TrangThai']!='DangCho' || $tam[0]['DaThanhToan']==1){
		echo "false";
	}else{
		echo "true";	
	}

}else{
	$store_name="{call GD2_KiemTraID_Kham(?)}";
	$params = array($_GET['id']);
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array(); 
	//if(($tam[0]['ID_TrangThai']!='DangCho' && $tam[0]['ID_TrangThai']!='DangKham') || $tam[0]['DaThanhToan']==1){
	if($tam[0]['ID_TrangThai']!='DangCho' || $tam[0]['DaThanhToan']==1){
		echo "false";
	}else{
		echo "true";	
	}
}
?>